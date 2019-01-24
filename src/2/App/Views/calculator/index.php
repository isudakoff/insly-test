<?php
/** @var $car_value int */
/** @var $tax_percentage int */
/** @var $instalments_count int */
?>
<form id="calc_form" action="/calculator/calculate" method="post">
    <div class="form-group">
        <label for="car_value">Estimated value of the car</label>
        <input
                id="car_value"
                class="form-control"
                name="car_value"
                type="number"
                min="100"
                max="100000"
                value="<?= $car_value ?>"
        >
    </div>

    <div class="form-group">
        <label for="tax_percentage">Tax percentage</label>
        <input
                id="tax_percentage"
                class="form-control"
                name="tax_percentage"
                type="number"
                min="0"
                max="100"
                value="<?= $tax_percentage ?>"
        >
    </div>

    <div class="form-group">
        <label for="instalments_count">Number of instalments</label>
        <input
                id="instalments_count"
                class="form-control"
                name="instalments_count"
                type="number"
                min="1"
                max="12"
                value="<?= $instalments_count ?>"
        >
    </div>

    <button type="submit" class="btn btn-primary">Calculate</button>
</form>