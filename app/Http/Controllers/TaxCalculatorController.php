<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaxCalculatorRequest;
use App\Http\Resources\StatusResponse;
use Illuminate\Http\Request;

class TaxCalculatorController extends Controller
{
    public const CUMULATIVE_RELIEF = 200_000;

    public function index()
    {
        return view('tax-calculator.index');
    }

    public function calculate(TaxCalculatorRequest $request)
    {
        $totalGrossIncome = (float) $request->monthly_income * 12;
        $twentyPercentAnnualGross = (20/100) * $totalGrossIncome;
        $consolidatedRelief = self::CUMULATIVE_RELIEF + $twentyPercentAnnualGross;
        $pensionableAmount = $request->pension == 'yes' ? (8 / 100) * $totalGrossIncome :0;
        $NHFAmount = $request->nhf == 'yes' ? (2.5 / 100) * $totalGrossIncome : 0;
        $lifeInsurance = $request->life_insurance ? (float) $request->life_insurance : 0;
        $NHIS = $request->nhis ? (float) $request->nhis : 0;

        $totalTaxableIncome = $totalGrossIncome - ($consolidatedRelief + $pensionableAmount + $NHFAmount + $lifeInsurance + $NHIS);

        $annualTaxLiability = 0;

        if ($totalTaxableIncome < 300_000) {
            $sevenPercentOfTaxableIncome = (7/100) * $totalTaxableIncome;
            $onePercentOfTotalAnnualGross = (1/100) * $totalGrossIncome;

            $annualTaxLiability = $sevenPercentOfTaxableIncome  > $onePercentOfTotalAnnualGross
                ? $sevenPercentOfTaxableIncome 
                : $onePercentOfTotalAnnualGross;
        }

        if ($totalTaxableIncome >= 300_001 && $totalTaxableIncome <= 600_000) {
            $annualTaxLiability = 21000 + ((11/100)*($totalTaxableIncome - 300_000));
        }

        if ($totalTaxableIncome >= 600_001 && $totalTaxableIncome <= 1_100_000) {
            $annualTaxLiability = 54000 + ((15 / 100) * ($totalTaxableIncome - 600_000));
        }

        if ($totalTaxableIncome >= 1_100_001 && $totalTaxableIncome <= 1_600_000) {
            $annualTaxLiability = 129_000 + ((19 / 100) * ($totalTaxableIncome - 1_100_000));
        }

        if ($totalTaxableIncome >= 1_600_001 && $totalTaxableIncome <= 3_200_000) {
            $annualTaxLiability = 224_000 + ((21 / 100) * ($totalTaxableIncome - 1_600_000));
        }
        if ($totalTaxableIncome > 3_200_000) {
            $annualTaxLiability = 560_000 + ((24 / 100) * ($totalTaxableIncome - 3_200_000));
        }

        $monthlyTax = $annualTaxLiability/12;
        session()->put('annualTaxLiability', $annualTaxLiability);
        session()->flash('calculatedTax');

        return redirect()->back()->with("success", "Your annual Tax is: $annualTaxLiability and monthly Tax: $monthlyTax");
    }
}
