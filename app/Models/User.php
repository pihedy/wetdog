<?php declare(strict_types=1);

namespace App\Models;

use \Illuminate\Database\Eloquent\Factories\HasFactory;
use \Illuminate\Foundation\Auth\User as Authenticatable;
use \Illuminate\Notifications\Notifiable;

use \Laravel\Sanctum\HasApiTokens;

/**
 * Represents a user of the application.
 *
 * @author Pihe Edmond <pihedy@gmail.com>
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var int[]|string[]
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var int[]|string[]
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * Get the attributes that should be cast.
     *
     * @return string[string]
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password'          => 'hashed'
        ];
    }
}
