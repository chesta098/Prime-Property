<?php
    include 'header.php';
    include 'code.php';
?>

<!-- banner -->
<section class="banner" style="background-image: url('img-banner/Rectangle 1.png');">
    <div class="back-utm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="back">
                        <div class="row">
                            <div class="col-md-9">
                                <h1>Find</h1>
                                <h2>Home</h2>
                                <p>Find your perfect home with our curated listings</p>
                            </div>
                            <div class="col-md-3">
                                <a href="#option">
                                    <button><img src="Aset-img/Vector 2.png"></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- top title -->
<section class="top-title">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Popular Property</h1>
            </div>
            <div class="col-md-6">
                <p>Find your dream home with us. From modern apartments to cozy family houses, we offer a wide range of properties to suit your needs and lifestyle.</p>
            </div>
        </div>
        <hr>
    </div>
</section>

<!-- option -->
<section class="option" id="option">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="img-bg" style="background-image: url('Aset-img/Rectangle 2.png');"></div>
            </div>
            <div class="col-md-3">
                <div class="img-bg" style="background-image: url('Aset-img/Rectangle 3.png');"></div>
            </div>
            <div class="col-md-3">
                <img src="Aset-img/Frame 10.png">
                <div class="back">
                    <h1>100+</h1>
                    <h3>Clients</h3>
                    <h2>Explore Your Next Home</h2>
                    <p>Discover a selection of stunning properties that fit your lifestyle.</p>
                    <a href="page-about.php">
                        <button>Find More <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i></button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- package -->
<section class="package" style="background-image: url('Aset-img/Rectangle 6.png');">
    <div class="color">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1>Exclusive Packages</h1>
                </div>
                <div class="col-md-2">
                    <a href="page-property.php">
                        <button class="btn">See More<i class="fa-solid fa-arrow-right"></i></button>
                    </a>
                </div>
            </div>
            <div class="row x">
                <div class="col-md-12">                        
                    <div class="package-menu">
                        <?php
                            foreach ($package as $package) {
                        ?>
                        <div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="space-text">
                                            <h1><?php echo $package['judul']; ?></h1>
                                            <p><i class="fa-solid fa-location-dot"></i><?php echo $package['location']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="img-bg" style="background-image: url('<?php echo $package['img']; ?>');"></div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="row y">
                                    <div class="col-md-6">
                                        <h1><?php echo $package['harga']; ?> / <b>days</b></h1>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="page-singgle.php">See Detail <i class="fa-solid fa-arrow-right"></i></a>
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
    </div>
</section>

<!-- service -->
<section class="service">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="back">
                    <div class="img-bg" style="background-image: url('Aset-img/Rectangle 5.png');"></div>
                </div>
            </div>
            <div class="col-md-7">
                <h1>Premium Real Estate Services for Every Step of Your Journey</h1>
                <hr>
                <?php
                    foreach ($accor as $accor) {
                ?>
                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        <h3><span class="no sec" style="padding: 11px 11px;"><?php echo $accor['nomor']; ?></span><?php echo $accor['judul']; ?></h3>
                        <span><i class="fa-solid fa-arrow-right"></i></span>
                    </div>
                    <div class="accordion-body">
                        <p><?php echo $accor['isi']; ?></p>
                        <a href="page-service.php">
                            <button>Read More Detail</button>
                        </a>
                    </div>
                </div>
                <hr>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- komentar -->
<section class="komentar">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>We Helped Them Find Their Dream Homes</h1>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-2">
                <a href="page-testimonial.php">
                    <button class="btn">See More<i class="fa-solid fa-arrow-right"></i></button>
                </a>
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

<!-- contact us home -->
<section class="contact-home">
    <img class="vector-2" src="Aset-img/Vector 15.png">
    <img class="vector-1" src="Aset-img/Vector 14.png">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="back">
                    <h1>Unlock Your Dream House with Us</h1>
                    <a href="page-contact.php">
                        <button>Contact Us <i class="fa-solid fa-arrow-right"></i></button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    include 'footer.php';
?>