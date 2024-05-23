<?php declare(strict_types=1);

/**
 * @author Pihe Edmond <pihedy@gmail.com>
 */

if (!function_exists('isSerialized')) {
    /**
     * Determines if a value is serialized.
     *
     * @param mixed     $value      The value to check.
     * @param mixed     $result     If the value is serialized, this parameter will contain the unserialized value.
     *
     * @return bool True if the value is serialized, false otherwise.
     */
    function isSerialized(mixed $value, mixed &$result = null): bool
    {
        if (!is_string($value)) {
            return false;
        }

        if ($value === 'b:0;') {
            $result = false;

            return true;
        }

        $length	= strlen($value);
        $end	= '';

        switch ($value[0]) {
            case 's':
                if ($value[$length - 2] !== '"') {
                    return false;
                }
            case 'b':
            case 'i':
            case 'd':
                // This looks odd but it is quicker than isset()ing
                $end .= ';';
            case 'a':
            case 'O':
                $end .= '}';

                if ($value[1] !== ':') {
                    return false;
                }

                switch ($value[2]) {
                    case 0:
                    case 1:
                    case 2:
                    case 3:
                    case 4:
                    case 5:
                    case 6:
                    case 7:
                    case 8:
                    case 9:
                    break;

                    default:
                        return false;
                }
            case 'N':
                $end .= ';';

                if ($value[$length - 1] !== $end[0]) {
                    return false;
                }
            break;

            default:
                return false;
        }

        if (($result = @unserialize($value)) === false) {
            $result = null;

            return false;
        }

        return true;
    }
}
