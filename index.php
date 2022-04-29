<?php @include ('templates/header.php') ?>
<div class="kabod-top">
    <div class="kabod-top__container cycle-slideshow"
                    data-cycle-fx="fadeout" 
                    data-cycle-timeout="6000" 
                    data-cycle-speed="800"
                    data-cycle-slides="figure" 
                    data-cycle-pager=".kabod-slidepager"
                    data-cycle-pager-template="<p><a href=#> {{slideNum}} </a></p>"
                    data-cycle-prev="#prev"
                    data-cycle-next="#next">
        <figure class="kabod-top__slides kabod-top__slides1">
            <div class="kabod-top__slidesblock gd-block">
                <h1>OUR PILLARS</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum fuga illo eveniet</p>
            </div>
        </figure>

        <figure class="kabod-top__slides kabod-top__slides2">
            <div class="kabod-top__slidesblock gd-block">
                <h1>NOW INTROducing air delivery</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum fuga illo eveniet</p>
            </div>
        </figure>

        <figure class="kabod-top__slides kabod-top__slides3">
            <div class="kabod-top__slidesblock gd-block">
                <h1>Get your products faster</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum fuga illo eveniet</p>
            </div>
        </figure>
    </div>
    <div class="kabod-slidecontrols kabod-slidecontrols__prev" id="prev"><</div>
    <div class="kabod-slidecontrols kabod-slidecontrols__next" id="next">></div>
    <div class="kabod-slidepager">

    </div>
</div>
<div class="kabod-block kabod-serviceshome">
    <div class="kabod-serviceshome__means">
        <div class="gd-block">
            <div class="kabod-serviceshome__list">
                <li class="kabod-serviceshome__item">
                    <figure class="kabod-serviceshome__image">
                        <img src="img/road.png" alt="" srcset="">
                    </figure>
                    <h2>Road</h2>
                </li>
                <li class="kabod-serviceshome__item">
                    <figure class="kabod-serviceshome__image">
                        <img src="img/ship.png" alt="" srcset="">
                    </figure>
                    <h2>Sea</h2>
                </li>
                <li class="kabod-serviceshome__item">
                    <figure class="kabod-serviceshome__image">
                        <img src="img/plane.png" alt="" srcset="">
                    </figure>
                    <h2>Air</h2>
                </li>
            </div>
        </div>
    </div>
    <div class="kabod-serviceshome__desc">
        <div class="gd-block">
            <p>Even though we are only
            currently delivering
            through road we are
            currently installing
            delivery systems for sea
            and air.</p>
            <p>Our vision is to utilize and
            maximize all means of
            transport and travel.</p>
            <p>We shall be availing
            these new means soon</p>
        </div>
    </div>
</div>
<?php @include ('templates/footer.php') ?>
