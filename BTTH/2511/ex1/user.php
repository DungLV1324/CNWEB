<?php global $flowers;
include('itemheader.php'); ?>
<?php include('flowers.php');
?>

<div class="flower-list">
    <?php foreach ($flowers as $flower): ?>
        <div class="flower-item">
            <h2><?= $flower['name'] ?></h2>
            <img src="<?= $flower['image'] ?>" alt="<?= $flower['name'] ?>" >
            <p><?= $flower['moTa'] ?></p>
        </div>
    <?php endforeach; ?>
</div>

<?php include('itemfooter.php'); ?>
