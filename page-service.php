<?php
include 'header.php';
include 'banner-sub/banner-service.php';
include 'code.php';
?>

<!-- information -->
<section class="information">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="back-img" style="background-image: url('Aset-img/Rectangle 8.png');"></div>
            </div>
            <div class="col-md-6">
                <div class="info">
                    <h1>And here’s how? We do insurance better</h1>
                    <?php
                        foreach ($service as $service) {
                    ?>
                    <ul>
                        <li><img src="<?php echo $service['img']; ?>"><?php echo $service['isi']; ?></li>
                    </ul>
                    <?php
                    }
                    ?>
                </div>
                <a href="">
                    <button>Book Now<i class="fa-solid fa-arrow-right"></i></button>
                </a>
            </div>
        </div>
    </div>
</section>

<?php
include 'footer.php';
?>