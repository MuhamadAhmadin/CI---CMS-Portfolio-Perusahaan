<!-- Validation error check -->
<?php if(session('errors')): ?>
    
    <div id="card-alert" class="card red lighten-5">
        <div class="card-content red-text">
        <ul>
            <?php foreach(session('errors') as $error): ?>
            <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
        <p><?= session('error'); ?></p>
    </div>
    <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<?php endif; ?>

<!-- Danger alert check -->
<?php if(session('error')): ?>
<div id="card-alert" class="card red lighten-5">
    <div class="card-content red-text">
        <p><?= session('error'); ?></p>
    </div>
    <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<?php endif; ?>

<!-- success alert check -->
<?php if(session('success')): ?>
<div id="card-alert" class="card green lighten-5">
    <div class="card-content green-text">
        <p><?= session('success'); ?></p>
    </div>
    <button type="button" class="close green-text" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<?php endif; ?>

<?php if(isset($errors)): ?>
    <?php foreach ($errors as $error): ?>
        <li class="mb-2 text-danger">
            <?= esc($error) ?>
        </li>
    <?php endforeach ?>
<?php endif; ?>