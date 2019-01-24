<?php
/** @var $instalments array */
/** @var $instalments_number int */
/** @var $factor int */
/** @var $commission int */
/** @var $tax int */
/** @var $value_policy float */
/** @var $base_premium_policy float */
/** @var $total_cost_policy float */
/** @var $commission_policy float */
/** @var $tax_policy float */
?>
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Policy</th>
            <? if ($instalments_number > 1) : ?>
                <? for ($i = 1; $i <= $instalments_number; $i++) : ?>
                    <th scope="col"><?= $i ?> instalment</th>
                <? endfor; ?>
            <? endif; ?>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Value</th>
            <td><?= $value_policy ?></td>
            <? if ($instalments_number > 1) : ?>
                <? for ($i = 1; $i <= $instalments_number; $i++) : ?>
                    <td></td>
                <? endfor; ?>
            <? endif; ?>
        </tr>
        <tr>
            <th scope="row">Base Premium (<?= $factor ?>%)</th>
            <td><?= $base_premium_policy ?></td>
            <? if ($instalments_number > 1) : ?>
                <? for ($i = 1; $i <= $instalments_number; $i++) : ?>
                    <td><?= $instalments['base_premium'] ?></td>
                <? endfor; ?>
            <? endif; ?>
        </tr>
        <tr>
            <th scope="row">Commission (<?= $commission ?>%)</th>
            <td><?= $commission_policy ?></td>
            <? if ($instalments_number > 1) : ?>
                <? for ($i = 1; $i <= $instalments_number; $i++) : ?>
                    <td><?= $instalments['commission'] ?></td>
                <? endfor; ?>
            <? endif; ?>
        </tr>
        <tr>
            <th scope="row">Tax (<?= $tax ?>%)</th>
            <td><?= $tax_policy ?></td>
            <? if ($instalments_number > 1) : ?>
                <? for ($i = 1; $i <= $instalments_number; $i++) : ?>
                    <td><?= $instalments['tax'] ?></td>
                <? endfor; ?>
            <? endif; ?>
        </tr>
        <tr>
            <th scope="row">Total cost</th>
            <td><?= $total_cost_policy ?></td>
            <? if ($instalments_number > 1) : ?>
                <? for ($i = 1; $i <= $instalments_number; $i++) : ?>
                    <td><?= $instalments['total_cost'] ?></td>
                <? endfor; ?>
            <? endif; ?>
        </tr>
        </tbody>
    </table>
</div>