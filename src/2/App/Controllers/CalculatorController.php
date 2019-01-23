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
        $car_value = 0;
        $tax_percentage = 0;
        $instalments_count = 0;

        return $this->render('calculator/index', [
            'car_value' => $car_value,
            'tax_percentage' => $tax_percentage,
            'instalments_count' => $instalments_count,
        ]);
    }

    public function calculate()
    {
        $value_policy = 0;
        $base_premium_policy = 0;
        $commission_policy = 0;
        $tax_policy = 0;
        $total_cost_policy = 0;

        return $this->render('calculator/calculated', [
            'value_policy' => $value_policy,
            'base_premium_policy' => $base_premium_policy,
            'commission_policy' => $commission_policy,
            'tax_policy' => $tax_policy,
            'total_cost_policy' => $total_cost_policy,
            'instalments' => [
                [
                    'value' => 0,
                    'base_premium' => 0,
                    'commission' => 0,
                    'tax' => 0,
                    'total_cost' => 0,
                ],
            ],
        ]);
    }
}
