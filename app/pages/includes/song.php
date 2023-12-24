<!-- start music card -->
<div class="music-card" style="position: relative; display: flex; flex-direction: column; align-items: center; text-align: center;">
    <div class="background-gradient"></div>
    <div class="img-container" style="overflow: hidden; width: 140px; height: 140px;">
        <a href="<?=ROOT?>/song/<?=$row['slug']?>">
            <img src="<?=ROOT?>/<?=$row['image']?>" style="display: block; width: 100%; height: 100%; object-fit: cover;">
        </a>
        <div class="player-button" data-song-index="<?=$row['id']?>"></div>
    </div>
    <div class="card-content">
        <div class="card-title"><?=esc($row['title'])?></div>
        <div class="card-subtitle"><?=esc(get_artist($row['artist_id']))?></div>
        <div class="card-subtitle" style="font-size: 12px;">Category: <?=esc(get_category($row['category_id']))?></div>
    </div>
</div>
<style>
    .background-gradient {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: linear-gradient(to right top, #9fb5d6, #97c8dc, #a1d9d7, #bee6cf, #e4efcc) !important;
        border-radius: inherit;
        pointer-events: none; /* чтобы не мешать кликам на содержимом */
        z-index: -1; /* Устанавливаем фон под содержимым */
    }

    .img-container {
        overflow: hidden;
        width: 140px;
        height: 140px;
        position: relative;
        border-radius: 50%; /* Добавляем скругление углов для создания круглой формы */
    }

    .player-button {
        cursor: pointer;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.8);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .player-button::before {
        content: url('<?=ROOT?>/assets/images/play-home.svg');
        display: block;
        width: 20px;
        height: 20px;
        margin: 15px;
    }
</style>
<!-- end music card -->
