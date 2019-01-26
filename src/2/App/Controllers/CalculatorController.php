<?php

namespace isudakoff\Insly\Second\App\Controllers;

use isudakoff\Insly\Second\Core\Controller;

/**
 * Class CalculatorController
 *
 * @package App\Controllers
 */
class CalculatorController extends Controller
{
    public $view_name = 'calculator';

    public $page_header = 'Calculator';

    public $title = 'Calculator';

    public function index()
    {
        $car_value = 10000;
        $tax_percentage = 10;
        $instalments_count = 2;

        return $this->render('calculator/index', [
            'car_value' => $car_value,
            'tax_percentage' => $tax_percentage,
            'instalments_count' => $instalments_count,
        ]);
    }

    public function calculate()
    {
        $commission = 0.17;
        $factor = (int)$_POST['user_time'] === 1 ? 0.13 : 0.11;
        $car_value = $_POST['car_value'];
        $tax = $_POST['tax_percentage'] / 100;
        $instalments_number = $_POST['instalments_count'];

        $base_premium_policy = $car_value * $factor;
        $commission_policy = $base_premium_policy * $commission;
        $tax_policy = $base_premium_policy * $tax;
        $total_cost_policy = $base_premium_policy + $commission_policy + $tax_policy;

        return $this->render('calculator/calculated', [
            'factor' => $factor * 100,
            'tax' => $tax * 100,
            'commission' => $commission * 100,
            'value_policy' => self::toDecimalPlaces($car_value),
            'base_premium_policy' => self::toDecimalPlaces($base_premium_policy),
            'commission_policy' => self::toDecimalPlaces($commission_policy),
            'tax_policy' => self::toDecimalPlaces($tax_policy),
            'total_cost_policy' => self::toDecimalPlaces($total_cost_policy),
            'instalments_number' => $instalments_number,
            'instalments' => [
                'base_premium' => self::toDecimalPlaces($base_premium_policy / $instalments_number),
                'commission' => self::toDecimalPlaces($commission_policy / $instalments_number),
                'tax' => self::toDecimalPlaces($tax_policy / $instalments_number),
                'total_cost' => self::toDecimalPlaces($total_cost_policy / $instalments_number),
            ],
        ]);
    }

    public static function toDecimalPlaces($number, $decimal_places_number = 2)
    {
        return number_format((float)$number, $decimal_places_number, '.', '');
    }
}
