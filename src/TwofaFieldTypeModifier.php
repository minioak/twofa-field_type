<?php namespace Minioak\TwofaFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypeModifier;
use PragmaRX\Google2FA\Google2FA;

/**
 * Class BooleanFieldTypeModifier
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\BooleanFieldType
 */
class TwofaFieldTypeModifier extends FieldTypeModifier
{

    /**
     * Modify the value.
     *
     * @param $value
     * @return bool
     */
    public function modify($value)
    {
        if ($value == 'enable') {
            $twofa = new Google2FA();
            return $twofa->generateSecretKey(32);
        } else {
            return $value;
        }
    }
}
