<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Policy</th>
            <? foreach ($instalments as $key => $instalment) : ?>
                <th scope="col"><?= $key ?> instalment</th>
            <? endforeach; ?>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">Value</th>
            <td><?= $value_policy ?></td>
            <? foreach ($instalments as $key => $instalment) : ?>
                <td><?= $instalment['value'] ?></td>
            <? endforeach; ?>
        </tr>
        <tr>
            <th scope="row">Base Premium (11%)</th>
            <td><?= $base_premium_policy ?></td>
            <? foreach ($instalments as $key => $instalment) : ?>
                <td><?= $instalment['base_premium'] ?></td>
            <? endforeach; ?>
        </tr>
        <tr>
            <th scope="row">Commission (17%)</th>
            <td><?= $commission_policy ?></td>
            <? foreach ($instalments as $key => $instalment) : ?>
                <td><?= $instalment['commission'] ?></td>
            <? endforeach; ?>
        </tr>
        <tr>
            <th scope="row">Tax (10%)</th>
            <td><?= $tax_policy ?></td>
            <? foreach ($instalments as $key => $instalment) : ?>
                <td><?= $instalment['tax'] ?></td>
            <? endforeach; ?>
        </tr>
        <tr>
            <th scope="row">Total cost</th>
            <td><?= $total_cost_policy ?></td>
            <? foreach ($instalments as $key => $instalment) : ?>
                <td><?= $instalment['total_cost'] ?></td>
            <? endforeach; ?>
        </tr>
    </tbody>
</table>