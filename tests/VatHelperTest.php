<?php

use PHPUnit\Framework\TestCase;

class VatHelperTest extends TestCase
{
	/** @test */
	public function can_get_amount_incl_vat() {
		echo \Rackbeat\VAT::inclVat(100, 1);
	}

	/** @test */
	public function can_get_amount_excl_vat() {
	}

	/** @test */
	public function can_calculate_vat_percentage() {
	}

	/** @test */
	public function can_calculate_vat_amount() {
	}
}
