<div class="container" id="error">

    <h1>ERROR</h1>

    <h2 class="err_code">

        <?= $code ?>

    </h2>

    <p class="err_msg">

        <?= $message ?>

    </p>

    <? if($params) : ?>

        <pre>

        <? foreach ($params as $key => $param) : ?>

            <?= $key ?>: <?= $param ?><br>

        <? endforeach ?>

        </pre>

    <? endif ?>

</div>