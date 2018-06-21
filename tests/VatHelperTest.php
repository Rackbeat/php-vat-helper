<?php

use PHPUnit\Framework\TestCase;

class VatHelperTest extends TestCase
{
	/** @test */
	public function can_get_amount_incl_vat() {
		$this->assertEquals( 125, \Rackbeat\VAT::include( 100, 25 ) );
		$this->assertEquals( 100, \Rackbeat\VAT::include( 80, 25 ) );
		$this->assertEquals( 372.5, \Rackbeat\VAT::include( 298, 25 ) );

		$this->assertEquals( 118.5, \Rackbeat\VAT::include( 100, 18.5 ) );
		$this->assertEquals( 94.8, \Rackbeat\VAT::include( 80, 18.5 ) );
		$this->assertEquals( 178.04625, \Rackbeat\VAT::include( 150.25, 18.5 ) );

		$this->assertEquals( 100, \Rackbeat\VAT::include( 100, 0 ) );
		$this->assertEquals( 80, \Rackbeat\VAT::include( 80, 0 ) );
		$this->assertEquals( 150.25, \Rackbeat\VAT::include( 150.25, 0 ) );

		$this->assertEquals( 200, \Rackbeat\VAT::include( 100, 100 ) );
		$this->assertEquals( 160, \Rackbeat\VAT::include( 80, 100 ) );
		$this->assertEquals( 300.5, \Rackbeat\VAT::include( 150.25, 100 ) );
	}

	/** @test */
	public function can_get_amount_excl_vat() {
		$this->assertEquals( 80, \Rackbeat\VAT::exclude( 100, 25 ) );
		$this->assertEquals( 200, \Rackbeat\VAT::exclude( 250, 25 ) );
		$this->assertEquals( 66.6666666666667, \Rackbeat\VAT::exclude( 100, 50 ) );
	}

	/** @test */
	public function can_calculate_vat_percentage() {
		$this->assertEquals( 0.25, \Rackbeat\VAT::percentage( 100, 80 ) );
		$this->assertEquals( 0.25, \Rackbeat\VAT::percentage( 500, 400 ) );
		$this->assertEquals( 0.185, \Rackbeat\VAT::percentage( 118.5, 100 ) );
	}

	/** @test */
	public function can_calculate_vat_amount() {
		$this->assertEquals( 20, \Rackbeat\VAT::amount( 100, 25 ) );
		$this->assertEquals( 250 - 200, \Rackbeat\VAT::amount( 250, 25 ) );
		$this->assertEquals( 100 - 66.6666666666667, \Rackbeat\VAT::amount( 100, 50 ) );
	}
}
