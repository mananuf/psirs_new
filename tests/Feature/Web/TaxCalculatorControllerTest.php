<?php

namespace Tests\Feature\Web;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Validation\ValidationException;
use Tests\TestCase;

class TaxCalculatorControllerTest extends TestCase
{
    use DatabaseMigrations;

    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutExceptionHandling();
    }

    public function test_tax_calculator_index_page_exists()
    {
        $this->get(route('individual.tax-calculator'))->assertViewIs('tax-calculator.index');
    }

    public function test_will_return_validation_error_if_required_fields_are_missng()
    {
        $this->expectException(ValidationException::class);

        $this->post(route('calculate.tax'), [
            'pension' => 'yes',
            'nhf' => 'yes',
            'nhis' => 2000,
        ])
        ->assertSessionHas('error', 'The monthly income field is required.')
        ->assertRedirect(route('individual.tax-calculator'));
    }

    public function test_will_fail_if_amount_entered_is_zero()
    {
        $this->expectException(ValidationException::class);

        $this->post(route('calculate.tax'), [
            'monthly_income' => 0,
            'pension' => 'yes',
            'nhf' => 'yes',
            'nhis' => 2000,
        ])
        ->assertSessionHas('error', 'The selected monthly income is invalid')
        ->assertRedirect(route('individual.tax-calculator'));
    }

    public function test_will_fail_if_amount_entered_is_negative()
    {
        $this->expectException(ValidationException::class);

        $this->post(route('calculate.tax'), [
            'monthly_income' => -1,
            'pension' => 'yes',
            'nhf' => 'yes',
            'nhis' => 2000,
        ])
            ->assertSessionHas('error', 'The selected monthly income is invalid')
            ->assertRedirect(route('individual.tax-calculator'));
    }

    public function test_will_calculate_annual_tax_amount_for_total_taxable_income_below_30000_without_pension_nhf_nhis_life_insurance()
    {
        $response = $this->post(route('calculate.tax'), [
            'monthly_income' => 10_000,
            'pension' => 'no',
            'nhf' => 'no',
        ]);

        $response->assertJson([
            'status' => 'success',
            'data' => ['annualTax' => 1200.00]
        ]);
    }

    public function test_will_calculate_annual_tax_amount_for_total_taxable_income_between_300001_to_600000_with_pension_nhf_nhis_life_insurance()
    {
        $response = $this->post(route('calculate.tax'), [
            'monthly_income' => 80_000,
            'pension' => 'yes',
            'nhf' => 'yes',
            'nhis' => 10000,
            'life_insurance' => 5000,
        ]);

        $response->assertJson([
            'status' => 'success',
            'data' => ['annualTax' => 37742.00]
        ]);
    }

    public function test_will_calculate_annual_tax_amount_for_total_taxable_income_between_300001_to_600000_without_pension_nhf_nhis_life_insurance()
    {
        $response = $this->post(route('calculate.tax'), [
            'monthly_income' => 80_000,
            'pension' => 'no',
            'nhf' => 'no',
        ]);

        $response->assertJson([
            'status' => 'success',
            'data' => ['annualTax' => 50480.00]
        ]);
    }

    public function test_will_calculate_annual_tax_amount_for_total_taxable_income_between_600001_to_1100000()
    {
        $response = $this->post(route('calculate.tax'), [
            'monthly_income' => 120_000,
            'pension' => 'yes',
            'nhf' => 'yes',
            'nhis' => 10000,
            'life_insurance' => 5000,
        ]);

        $response->assertJson([
            'status' => 'success',
            'data' => ['annualTax' => 81870.00]
        ]);
    }

    public function test_will_calculate_annual_tax_amount_for_total_taxable_income_between_600001_to_1100000_without_nhis_and_life_insurance()
    {
        $response = $this->post(route('calculate.tax'), [
            'monthly_income' => 134_047.75,
            'pension' => 'yes',
            'nhf' => 'yes',
        ]);

        $response->assertJson([
            'status' => 'success',
            'data' => ['annualTax' => 101693.74]
        ]);
    }

    public function test_will_calculate_annual_tax_amount_for_total_taxable_income_between_1100001_to_1600000_without_nhis_and_life_insurance()
    {
        $response = $this->post(route('calculate.tax'), [
            'monthly_income' => 185_708.08,
            'pension' => 'yes',
            'nhf' => 'yes',
        ]);

        $response->assertJson([
            'status' => 'success',
            'data' => ['annualTax' => 176273.02]
        ]);
    }

    public function test_will_calculate_annual_tax_amount_for_total_taxable_income_between_1600001_and_3200000_without_nhis_and_life_insurance()
    {
        $response = $this->post(route('calculate.tax'), [
            'monthly_income' => 300_000,
            'pension' => 'yes',
            'nhf' => 'yes',
        ]);

        $response->assertJson([
            'status' => 'success',
            'data' => ['annualTax' => 371420.00]
        ]);
    }

    public function test_will_calculate_annual_tax_amount_for_total_taxable_income_above_3200000_without_nhis_and_life_insurance()
    {
        $response = $this->post(route('calculate.tax'), [
            'monthly_income' => 1_436_374.32,
            'pension' => 'yes',
            'nhf' => 'yes',
        ]);

        $response->assertJson([
            'status' => 'success',
            'data' => ['annualTax' => 2_619_046.84]
        ]);
    }
}
