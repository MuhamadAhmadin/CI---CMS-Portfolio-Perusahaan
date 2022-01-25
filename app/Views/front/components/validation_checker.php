<?php if(session('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
        <div class="alert bg-danger text-white">
            <?= $error; ?>
        </div>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<!-- Danger alert check -->
<?php if(session('error')): ?>
    <div class="alert bg-danger text-white">
        <?= session('error'); ?>
    </div>
<?php endif; ?>

<!-- success alert check -->
<?php if(session('success')): ?>
    <div class="alert bg-success text-white">
        <?= session('success'); ?>
    </div>
<?php endif; ?>

<?php if(isset($errors)): ?>
    <?php foreach ($errors as $error): ?>
        <li class="mb-2 text-danger">
            <?= esc($error) ?>
        </li>
    <?php endforeach ?>
<?php endif; ?>