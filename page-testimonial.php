<?php
include 'header.php';
include 'banner-sub/banner-testimonial.php';
include 'code.php';
?>

<!-- komentar -->
<section class="komentar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>We Helped Them Find Their Dream Homes</h1>
            </div>
        </div>
        <div class="row x">
            <div class="col-md-12">
            <div class="komentar-list">
                    <?php
                        foreach ($komentar as $komentar) {
                    ?>
                    <div>
                        <div class="back">
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <p><?php echo $komentar['isi']; ?></p>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="bg-img" style="background-image: url('<?php echo $komentar['img']; ?>');"></div>
                                </div>
                                <div class="col-md-10">
                                    <h2><?php echo $komentar['name']; ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                        <?php
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'footer.php';
?>