<?php $this->extend('default') ?>

<?= $this->section('header') ?>
<?php //Agregamos css al header 
?>
<link rel="stylesheet" href="/catalog.css">
<link rel="stylesheet" href="/card.css">
<?= $this->endSection('header') ?>

<?= $this->section('content') ?>
<div class="content-container">
    <h1>Challenge OnMedia</h1>

    <h3>Rick y Morty app</h3>
    <div class="actions">
        <?php echo $characters->info->prev ? 
        "<a href='?" . $characters->info->prev . "' class='buton-prev-next prev'>Prev</a>" 
        : null ?>
        <?php echo $characters->info->next ? 
        "<a href='?" . $characters->info->next . "' class='buton-prev-next next'>Next</a>" 
        : null ?>
    </div>
    <div class="catalog">
        <?php foreach ($characters->results as $character) { ?>
            <?php echo view('components/character_card.php', (array) $character) ?>
        <?php } ?>

    </div>
</div>

<?= $this->endSection() ?>