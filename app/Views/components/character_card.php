<div class="carta-box">
    <div class="carta">
        <div class="cara">
            <img src="<?= $image ?>" alt="image of <?= $name ?>" />
        </div>
        <div class="cara detras">
            <div class="name bold-text">
                <p><?= $name ?></p>
            </div>
            <div>
                <!-- <StatusIcon status={status} />
            {status} - {species} -->
            </div>
            <div>
                <span>From: </span>
                <span class="bold-text"> <?= $origin->name ?></span>
            </div>
            <div>
                <span>Last known location: </span>
                <span class="bold-text"><?= $location->name ?></span>
            </div>
            <div style='display: flex; justify-content:center;'>
                <a class="link bold-text" href="/character/get_data/<?= $id ?>">ver detalle</a>
            </div>
        </div>
    </div>
</div>