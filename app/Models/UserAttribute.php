<?php declare(strict_types=1);

namespace App\Models;

use \Illuminate\Database\Eloquent\Model;

use \Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * UserAttribute Eloquent model class.
 *
 * Represents a user attribute record in the users_attributes database table.
 * Defines relationships, accessors, mutators and query scopes for the model.
 *
 * @author Pihe Edmond <pihedy@gmail.com>
 */
class UserAttribute extends Model
{
    use HasFactory;

    /**
     * The database table associated with the model.
     */
    protected $table = 'users_attribute';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['user_id', 'attribute_name', 'attribute_value'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var string[]
     */
    protected $hidden = ['id', 'user_id'];

    /**
     * Boot function that runs on model initialization.
     * Adds attribute_value to hidden array if attribute_name is in $hidden array.
     * This hides the attribute_value from serialization.
     */
    protected static function boot()
    {
        parent::boot();

        static::booted(function (UserAttribute $UserAttribute) {
            $hidden = ['permissions'];

            if (!in_array($UserAttribute->attribute_name, $hidden)) {
                return;
            }

            $UserAttribute->hidden[] = 'attribute_value';
        });
    }

    /**
     * Get the attribute value attribute.
     *
     * This will unserialize the value if it is serialized.
     *
     * @param string $value The serialized or unserialized attribute value.
     *
     * @return string|array The unserialized attribute value.
     */
    public function getAttributeValueAttribute(string $value): string|array
    {
        if (isSerialized($value)) {
            $value = unserialize($value);
        }

        return $value;
    }

    /**
     * Set the attribute value attribute.
     *
     * Serialize the value if it is an array before storing.
     *
     * @param mixed $value The value to set
     */
    public function setAttributeValueAttribute(mixed $value): void
    {
        if (is_array($value)) {
            $value = serialize($value);
        }

        $this->attributes['attribute_value'] = $value;
    }
}
