<?php
include 'header.php';
include 'banner-sub/banner-contact.php';
?>

<!-- contact -->
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="back" style="background-image: url('Aset-img/Rectangle 6.png');">
                    <div class="color">
                        <h1>We're Here to Hear From You</h1>
                        <p>Reach out with any questions or to get started on your dream vacation. Contact us anytime!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-container">
                    <form action="#">
                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" id="phone" name="phone" placeholder="Phone" required>
                        </div>
                        <div class="form-group">
                            <textarea id="message" name="message" rows="4" placeholder="Message" required></textarea>
                        </div>
                        <a href="">
                            <button>Send</button>
                        </a>
                    </form>
                </div>
                <ul>
                    <li>
                        <a href="">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                    </li>
                    <li style="padding: 14px 20px;">
                        <a href="">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php
include 'footer.php';
?>