<?php
include 'header.php';
include 'banner-sub/banner-properti.php';
include 'code.php';
?>

<!-- img rooms -->
<section class="rooms">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="utm" style="background-image: url('img-singgle/lux-s-1.png');"></div>
            </div>
            <div class="col-md-3">
                <div class="top" style="background-image: url('img-singgle/lux-s-2.png');"></div>
                <div class="btm" style="background-image: url('img-singgle/lux-s-4.png');"></div>
            </div>
            <div class="col-md-3">
                <div class="top" style="background-image: url('img-singgle/pancake konten 13 june 23.png');"></div>
                <div class="btm" style="background-image: url('img-singgle/lux-s-3.png');"></div>
            </div>
        </div>
    </div>
</section>
<!-- informasi nav -->
<section class="infonav">
    <div class="container">
        <div class="row">
            <div class="col-md-12 tengah">
                <ul>
                    <li><a href="#rate">General Info</a></li>
                    <li><a href="#fasilitas">Facilities</a></li>
                    <li><a href="#maps">Location</a></li>
                    <li><a href="#faqs">FAQ’s</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- rate -->
<section class="rate" id="rate">
    <div class="container">
        <div class="row">
            <ul class="bintang">
                <li><i class="fa-solid fa-star fa-lg"></i></li>
                <li><i class="fa-solid fa-star fa-lg"></i></li>
                <li><i class="fa-solid fa-star fa-lg"></i></li>
                <li><i class="fa-solid fa-star fa-lg"></i></li>
                <li><i class="fa-solid fa-star fa-lg" style="color: #bfbfbf;"></i></li>
                <li><b>4 / 5</b>(200 customer)</li>
            </ul>
            <div class="col-md-6 kiri">
                <p>Villa Surya Darma</p>
                <ul>
                    <li><i class="fa-solid fa-bed"></i>Twins Bed</li>
                    <li><i class="fa-solid fa-bath"></i>1 Bathroom</li>
                    <li><i class="fa-solid fa-ruler-combined"></i>Room size : 24 m</li>
                </ul>
            </div>
            <div class="col-md-6 kanan">
                <p><b>IDR 500.000</b>/ night</p>
                <button class="book">Book Now</button>
            </div>
        </div>
    </div>
</section>
<!-- fasilitas -->
<section class="fasilitas" id="fasilitas">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <img src="img-icon/wifi (1) 1.png">
                <p>Free Wifi</p>
            </div>
            <div class="col-md-4">
                <img src="img-icon/swimming.png">
                <p>Swimming Pool</p>
            </div>
            <div class="col-md-3">
                <img src="img-icon/dinning-table.png">
                <p>Outdoor Dining Area</p>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <img src="img-icon/bathroom 1.png">
                <p>Bathroom</p>
            </div>
            <div class="col-md-4">
                <img src="img-icon/cooking.png">
                <p>Fully Equipped Kitchen</p>
            </div>
            <div class="col-md-3">
                <img src="img-icon/park.png">
                <p>Private Garden</p>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>
<!-- contact and maps -->
<section class="maps" id="maps">
    <div class="container">
        <div class="row">
            <h2>Location</h2>
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d531.7982868331924!2d112.60158388430415!3d-7.927367025055582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1726994702099!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- FAQS -->
<section class="faqs" id="faqs">
    <div class="container">
        <div class="row">
            <h1>Frequently Asked Questions</h1>
            <div class="col-md-12">
                    <?php
                        foreach ($fqs as $fqs) {
                    ?>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <?php echo $fqs['judul']; ?>
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlusi"><?php echo $fqs['isi']; ?></div>
                        </div>
                    </div>
                </div>
                    <?php
                    }
                    ?>
            </div>
        </div>
    </div>
</section>

<?php
include 'footer.php';
?>