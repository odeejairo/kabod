<footer class="tilvera-footer tilvera-footer--simple">
    <div class="gd-block">
        <div class="tilvera-footer__container">
            <div class="tilvera-footer__about">
                <div class="tilvera-footer__imgblock">
                    <img src="img/tilvera-consulting-logo.png" alt="Tilvera Consulting Logo" srcset="">
                </div>
                <div class="tilvera-footer__desc">
                    <p>Tilvera Consulting is a boutique Marketing and Brand strategy 
                    consultation firm established to bridge the gap between 
                    building a sustainable brand and customer satisfaction.</p>
                </div>
            </div>
            <div class="tilvera-footer__nav">
                <div class="tilvera-footer__mainlinks">
                    <h4>Main Links</h4>
                    <ul class="tilvera-footer__list">
                        <li class="tilvera-footer__item"><a href="index.php">Home</a></li>
                        <li class="tilvera-footer__item"><a href="about.php">About</a></li>
                        <li class="tilvera-footer__item"><a href="services.php">Services</a></li>
                        <li class="tilvera-footer__item"><a href="work.php">Our Work</a></li>
                        <li class="tilvera-footer__item"><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="tilvera-footer__social">
                    <h4>Connect With Us</h4>
                    <ul class="tilvera-footer__sociallist">
                    <li class="tilvera-footer__sociallinks"><a href="https://www.instagram.com/tilveraconsultingltd/" target="_blank"><i class="fab fa-instagram"></i> Tilvera Consulting on Instagram</a></li>
                        <li class="tilvera-footer__sociallinks"><a href="https://www.youtube.com/channel/UC5AE07arsUpM6iAwG864IUA" target="_blank"><i class="fab fa-youtube"></i> Tilvera Consulting on Youtube</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tilvera-footer__copyright">
            <p>&copy; Tilvera Consulting <?php echo date("Y") ?>. All rights reserved.</p>
        </div>
    </div>    
</footer>
</main>
</body>
<script src="_/js/jquery.js"></script>
<script src="_/js/cycle2.js"></script>
<script src="https://malsup.github.io/jquery.cycle2.tile.js"></script>
<script src="_/slick/slick.min.js"></script>
<script src="_/js/lightbox.js"></script>
<script src="_/js/countfect.min.js"></script>
<script src="_/js/scripts.js"></script>
<script src="_/js/easyreveal.js"></script>
<script>
    // $fn.scrollSpeed(step, speed, easing);
    jQuery.scrollSpeed(100, 800);
</script>
    <script>
     $(document).ready(function(){
            $('.tilvera-carousel').slick({
                dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: 6,
                slidesToScroll: 1,
                variableWidth: true,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: true,
                infinite: true,
                responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                    },
                    {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
                });
            });
    </script>
    <script>
     $(document).ready(function(){
            $('.tilvera-testimonials__container').slick({
                dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: 2,
                slidesToScroll: 1,
                variableWidth: true,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: true,
                infinite: true,
                responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                    },
                    {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
                });
            });
    </script>
</html>