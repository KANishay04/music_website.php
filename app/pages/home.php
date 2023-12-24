<?php require page('includes/header')?>

<section style="position: relative;">
    <img class="hero" src="<?=ROOT?>/assets/images/home.jpg">
    
</section>

<div class="line director">
    <div class="section-title">Featured // New Trend</div> <!-- Заголовок "Featured" -->
    <div class="divider"></div> <!-- Линейный разделитель -->
</div>

<style>
    /* .hero {
        width: 90%;
        height: auto;
        max-height: 500px;
        display: block;
        margin: 0 auto;
    } */

    .section-title {
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        color: #3498db;
        margin: 20px 0;
    }

    /* .image-title {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 36px;
        font-weight: bold;
        color: white;
        text-shadow: 2px 2px 4px #000000;
    } */

    .line.director {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 20px;
    }

    .divider {
        flex: 1;
        height: 2px;
        background-color: black; /* Изменил цвет разделителя */
        margin: 0 10px;
    }
</style>

<section class="content">
    
    <?php 
        //$rows = db_query("select * from songs where featured = 1 order by id desc limit 16");
        $rows = db_query("select * from songs order by id desc limit 16");
    ?>

    <?php if(!empty($rows)):?>
        <?php foreach($rows as $row):?>
            <?php include page('includes/song')?>
        <?php endforeach;?>
    <?php else:?>
        <div class="m-2">No songs found</div>
    <?php endif;?>

</section>

<?php require page('includes/footer')?>
