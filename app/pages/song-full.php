<?php
db_query("update songs set views = views + 1 where id = :id limit 1", ['id' => $row['id']]);
?>

<!-- start music card -->
<div class="music-card-full text-center">
    <h2 class="card-title"><?= esc($row['title']) ?></h2>
    <div class="card-subtitle">by: <?= esc(get_artist($row['artist_id'])) ?></div>

    <div class="rounded-circle overflow-hidden mx-auto" style="width: 150px; height: 150px;">
        <a href="<?= ROOT ?>/song/<?= $row['slug'] ?>">
            <img class="w-100 h-100 object-cover rounded-circle" src="<?= ROOT ?>/<?= $row['image'] ?>" alt="<?= esc($row['title']) ?>">
        </a>
    </div>
    <div class="card-content mt-3">
        <audio controls style="width: 100%">
            <source src="<?= ROOT ?>/<?= $row['file'] ?>" type="audio/mpeg">
        </audio>

        <div class="mt-3">
            <div class="text-muted">Views: <?= $row['views'] ?></div>
            <div class="text-muted">Date added: <?= get_date($row['date']) ?></div>
        </div>

        <a href="<?= ROOT ?>/download/<?= $row['slug'] ?>">
            <button class="btn bg-warning text-dark mt-3">Download</button>
        </a>
    </div>
</div>
<!-- end music card -->

