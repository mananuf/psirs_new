<?php

if (!function_exists('formatPrice')) {
    function formatPrice($amount, $separate = true, $exceptZeros = false): string
    {
        $separator = '';
        if ($separate) {
            $separator = ',';
        }

        $printAmount = number_format((float) $amount, 2, '.', $separator);

        if ($exceptZeros) {
            $exp = explode('.', $printAmount);
            if ($exp[1] * 1 == 0) {
                $printAmount = $exp[0];
            }
        }

        return $printAmount;
    }
};