<!-- footer -->
<section class="footer"> 
    <img class="img-bg" src="Aset-img/Prime Properties.png">
    <div class="container">
        <div class="back">
            <div class="row">
                <div class="col-md-4">
                    <a href="">
                        <img src="Aset-img/Frame 17.png">
                    </a>
                </div>
                <div class="col-md-8"></div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="spase">
                        <h1>Are You a Home Owner?</h1>
                        <p>Put your email and get listed</p>
                        <div class="input-container">
                            <input type="email" placeholder="Email Address" id="email">
                            <button type="submit">
                                <span><i class="fa-solid fa-chevron-right" style="color: #000000;"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <h1>Link</h1>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Property Listing</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Testimonial</a></li>
                        <li><a  href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h1>Explore</h1>
                    <ul>
                        <li><a href="#">Buy</a></li>
                        <li><a href="#">Rent</a></li>
                        <li><a href="#">New Projects</a></li>
                        <li><a href="#">List Your Property</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h1>Services</h1>
                    <ul>
                        <li><a href="#">Property Search</a></li>
                        <li><a href="#">Market Analysis</a></li>
                        <li><a href="#">Property Management</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="row x">
            <div class="col-md-6">
                <h3>© PrimeProperties All rights reserved.</h3>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2">
                <a href="#">Terms & Condition</a>
            </div>
            <div class="col-md-2">
                <a href="#">Privacy Policy</a>
            </div>
        </div>
    </div>
</section>

</body>
<!-- slick js -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://sandboxnew.nusaduahotel.com/wp-content/themes/nusaduahotelnew/slick/slick.min.js"></script>

<script>
$('.package-menu').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  dots: true,
  autoplaySpeed: 2900,
});

$('.komentar-list').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  dots: true,
  autoplaySpeed: 2000,
});
</script>

<script>
    function toggleAccordion(element) {
        const body = element.nextElementSibling;
        const item = element.parentElement;

        if (body.style.maxHeight) {
            body.style.maxHeight = null;
            body.classList.remove('open');
            item.classList.remove('open');
        } else {
            const allBodies = document.querySelectorAll('.accordion-body');
            const allItems = document.querySelectorAll('.accordion-item');
            
            allBodies.forEach(b => {
                b.style.maxHeight = null;
                b.classList.remove('open');
            });
            allItems.forEach(i => i.classList.remove('open'));

            body.style.maxHeight = body.scrollHeight + 'px';
            body.classList.add('open');
            item.classList.add('open');
        }
    }
</script>

</html>