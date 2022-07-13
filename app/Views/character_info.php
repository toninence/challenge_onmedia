<?php $this->extend('default'); ?>

<?php $this->section('header') ?>
<link rel="stylesheet" href="<?= base_url() ?>/character_info.css">
<?php $this->endsection() ?>

<?php $this->section('content') ?>
<button style="height: 50px;" onclick="window.location = '<?= base_url() ?>/excel'">download excel</button>
<div class="character-card">
    <div class="image-container">
        <img class="image" src="<?= $character_info->image ?>" alt="">
    </div>
    <div class="info-container">
        <div class="title creepster">
            <h2><?= $character_info->name; ?></h2>
        </div>
        <div class="description">
            <p class="creepster"><?= $character_info->species; ?> - 
            <?= $character_info->status; ?></p>
            <p>Origin: <span class="bold creepster"><?= $character_info->origin->name; ?></span></p>
            <p>Location: <span class="bold creepster"><?= $character_info->location->name; ?></span></p>
            <p>Gender: <span class="bold creepster"><?= $character_info->gender; ?></span></p>
        </div>

    </div>
</div>
<?php $this->endSection('content') ?>