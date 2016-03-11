<?php namespace Minioak\TwofaFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;
use Collective\Html\HtmlBuilder;
use PragmaRX\Google2FA\Google2FA;

/**
 * Class EmailFieldTypePresenter
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\EmailFieldType
 */
class TwoFaFieldTypePresenter extends FieldTypePresenter
{

    /**
     * The HTML builder.
     *
     * @var HtmlBuilder
     */
    protected $html;

    /**
     * Create a new EmailFieldTypePresenter instance.
     *
     * @param HtmlBuilder $html
     * @param             $object
     */
    public function __construct(HtmlBuilder $html, $object)
    {
        $this->html = $html;

        parent::__construct($object);
    }

    /**
     * Return an HTML mailto link.
     *
     * @param null|string $text
     * @return null|string
     */
    public function qr_code()
    {
        if (!$user = $this->object->getEntry()) {
            return null;
        }
        
        $twofa = new Google2FA();
        
        $url = $twofa->getQRCodeGoogleUrl(
            'The%20Linden%20Tree',
            $user->email,
            $this->object->getValue()
        );

        return $this->html->image($url);
    }
    
    public function enabled()
    {
        return !is_null($this->object->getValue());
    }
}
