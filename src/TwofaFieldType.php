<?php namespace Minioak\TwofaFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldType;
use PragmaRX\Google2FA\Google2FA;

class TwofaFieldType extends FieldType
{
	/**
	 * The field input view.
	 *
	 * @var string
	 */
	protected $inputView = 'minioak.field_type.twofa::input';
	
}
