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
	public static function include( $numberExcluding = 0.0, $vatPercentage = 0 ) {
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
	public static function exclude( $numberIncluding = 0.0, $vatPercentage = 0 ) {
		return $numberIncluding * static::getReverseVatAsFloat( $vatPercentage );
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
	public static function amount( $numberIncluding = 0.0, $vatPercentage = 0 ) {
		return $numberIncluding * static::getVatAsFloat( $numberIncluding, $vatPercentage );
	}

	/**
	 * Returns the vat-percentage from a amount including vat and a amount excluding vat.
	 *
	 * Example: $numberIncluding = 100, $numberExcluding = 80, result = 25
	 *
	 * @param float $numberIncluding
	 * @param float $numberExcluding
	 *
	 * @return double|float|integer
	 */
	public static function percentage( $numberIncluding = 0.0, $numberExcluding = 0.0 ) {
		return $numberIncluding / $numberExcluding - 1;
	}

	/**
	 * @param int $vatPercentage
         *
         * Example: vat = 25% (0.25)
	 * Reverse: 0.8
	 *
	 * @return float|int
	 */
	public static function getReverseVatAsFloat( $vatPercentage ) {
		return 1 / ( 1 + ( $vatPercentage / 100 ) );
	}

	/**
	 * @param float $numberIncluding
	 * @param       $vatPercentage
	 *
	 * @return float|int
	 */
	protected static function getVatAsFloat( $numberIncluding = 0.0, $vatPercentage ) {
		return 1 - static::getReverseVatAsFloat($vatPercentage);
	}
}
