<?php
include 'header.php';
include 'banner-sub/banner-properti.php';
include 'code.php';
?>

<!-- option property -->
<section class="option-property">
    <div class="container">
        <div class="row">
            <?php
                foreach ($property as $property) {
            ?>
            <div class="col-md-4">
                <div class="card">
                    <div class="back-img" style="background-image: url('<?php echo $property['img']; ?>');"></div>
                    <div class="back">
                        <h1><?php echo $property['judul']; ?></h1>
                        <p><?php echo $property['isi']; ?></p>
                        <ul>
                            <li><i class="fa-solid fa-bed"></i></li>
                            <li><i class="fa-solid fa-shower"></i></li>
                            <li><i class="fa-solid fa-ruler-combined"></i>Room size : 24 m</li>
                        </ul>
                        <div class="row">
                            <div class="col-md-7">
                                <h2><?php echo $property['harga']; ?> <b>/ night</b></h2>
                            </div>
                            <div class="col-md-5">
                                <a href="page-singgle.php">
                                    <button>See Details</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>

<?php
include 'footer.php'
?>