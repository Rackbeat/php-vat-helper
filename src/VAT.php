<?php namespace Rackbeat;

class VAT
{
	/**
	 * $vatPercentage must be between 0 and 100.
	 *
	 * @param float   $numberExcluding
	 * @param integer $vatPercentage
	 *
	 * @return double|float|integer
	 */
	public static function inclVat( $numberExcluding = 0.0, $vatPercentage = 0 ) {
		return $numberExcluding * ( 1 + ( $vatPercentage / 100 ) );
	}

	/**
	 * $vatPercentage must be between 0 and 100.
	 *
	 * @param float   $numberIncluding
	 * @param integer $vatPercentage
	 *
	 * @return double|float|integer
	 */
	public static function exclVat( $numberIncluding = 0.0, $vatPercentage = 0 ) {
		return $numberIncluding * static::getReverseVatAsFloat( $numberIncluding, $vatPercentage );
	}

	/**
	 * Returns the vat-amount from a amount including vat.
	 *
	 * Example: $numberIncluding = 100, $vatPercentage = 25, result = 20
	 *
	 * $vatPercentage must be between 0 and 100.
	 *
	 * @param float   $numberIncluding
	 * @param integer $vatPercentage
	 *
	 * @return double|float|integer
	 */
	public static function onlyVat( $numberIncluding = 0.0, $vatPercentage = 0 ) {
		return $numberIncluding * static::getVatAsFloat( $numberIncluding, $vatPercentage );
	}

	protected static function getReverseVatAsFloat( $numberIncluding = 0.0, $vatPercentage ) {
		return $numberIncluding / $numberIncluding / ( 1 + ( $vatPercentage / 100 ) );
	}

	protected static function getVatAsFloat( $numberIncluding = 0.0, $vatPercentage ) {
		return 1 - ( $numberIncluding / ( $numberIncluding * ( 1 + ( $vatPercentage / 100 ) ) ) );
	}
}
