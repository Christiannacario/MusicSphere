<?php if(count($errors) > 0) : ?>
    <div class="error">
        <link rel="stylesheet" href="style.css">
        <?php foreach ($errors as $error) : ?>
            <p><?php echo $error ?></p>
        <?php endforeach ?>
    </div>
<?php endif ?>