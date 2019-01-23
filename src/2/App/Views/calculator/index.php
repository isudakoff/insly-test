<form id="calc_form" action="/calculator/calculate" method="post">
    <div class="form-group">
        <label for="car_value">Estimated value of the car</label>
        <input class="form-control" id="car_value" type="number" name="car_value" value="<?= $car_value ?>">
    </div>

    <div class="form-group">
        <label for="tax_percentage">Tax percentage</label>
        <input class="form-control" id="tax_percentage" type="number" name="tax_percentage" value="<?= $tax_percentage ?>">
    </div>

    <div class="form-group">
        <label for="instalments_count">Number of instalments</label>
        <input class="form-control" id="instalments_count" type="number" name="instalments_count" value="<?= $instalments_count ?>">
    </div>

    <button type="submit" class="btn btn-primary">Calculate</button>
</form>