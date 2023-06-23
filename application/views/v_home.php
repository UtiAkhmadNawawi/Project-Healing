<div class="hero-wrap js-fullheight" style="background-image: url('<?php echo base_url() ?>images/bg.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Explore
                        <br></strong> your amazing city</h1>
                <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Temukan tempat yang bagus untuk
                    menginap, makan, berbelanja,
                    atau mengunjungi tempat wisata favoritmu</p>
                <div class="block-17 my-4">
                    <form action="<?= site_url('search-hotel')?>" method="post" class="d-block d-flex">
                        <div class="fields d-block d-flex">
                            <div class="textfield-search one-third">
                                <input name="nama_hotel" type="text" class="form-control" placeholder="Ex: hotel">
                            </div>
                            <div class="select-wrap one-third">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="lokasi" class="form-control" placeholder="Keyword search">
                                    <option value="">Where</option>
                                    <option value="Bali">Bali</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Bandung">Bandung</option>
                                    <option value="Semarang">Semarang</option>
                                    <option value="Surabaya">Surabaya</option>
                                </select>
                            </div>
                        </div>
                        <input type="submit" class="search-submit btn btn-primary" value="Search">
                    </form>
                </div>
                <p>Or browse the highlights</p>
                <p class="browse d-md-flex">
                    <!-- <span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i
                                class="flaticon-fork"></i>Restaurant</a></span> -->
                    <span class="d-flex justify-content-md-center align-items-md-center"><a href="<?= base_url() ?>index.php/Hotel/index"><i class="flaticon-hotel"></i>Hotel</a></span>
                    <!-- <span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i
                                class="flaticon-meeting-point"></i>Places</a></span> -->
                    <!-- <span class="d-flex justify-content-md-center align-items-md-	center"><a href="#"><i
                                class="flaticon-shopping-bag"></i>Shopping</a></span> -->
                </p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section services-section bg-light">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon"><span class="flaticon-guarantee"></span></div>
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">Best Price Guarantee</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon"><span class="flaticon-like"></span></div>
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">Travellers Love Us</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon"><span class="flaticon-detective"></span></div>
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">Best Travel Agent</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon"><span class="flaticon-support"></span></div>
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">Our Dedicated Support</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="ftco-section ftco-destination">
    <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
                <span class="subheading">Featured</span>
                <h2 class="mb-4"><strong>Featured</strong> Destination</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="destination-slider owl-carousel ftco-animate">
                    <div class="item">
                        <div class="destination">
                            <a href="#" class="img d-flex justify-content-center align-items-center"
                                style="background-image: url(<?php echo base_url() ?>images/destination-1.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <h3><a href="#">Bandung</a></h3>
                                <span class="listing">15 Listing</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="destination">
                            <a href="#" class="img d-flex justify-content-center align-items-center"
                                style="background-image: url(<?php echo base_url() ?>images/destination-2.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <h3><a href="#">Bali</a></h3>
                                <span class="listing">20 Listing</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="destination">
                            <a href="#" class="img d-flex justify-content-center align-items-center"
                                style="background-image: url(<?php echo base_url() ?>images/destination-3.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <h3><a href="#">Lombok</a></h3>
                                <span class="listing">10 Listing</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="destination">
                            <a href="#" class="img d-flex justify-content-center align-items-center"
                                style="background-image: url(<?php echo base_url() ?>images/destination-4.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <h3><a href="#">Jakarta</a></h3>
                                <span class="listing">3 Listing</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="destination">
                            <a href="#" class="img d-flex justify-content-center align-items-center"
                                style="background-image: url(<?php echo base_url() ?>images/destination-5.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <h3><a href="#">Bogor</a></h3>
                                <span class="listing">3 Listing</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="destination">
                            <a href="#" class="img d-flex justify-content-center align-items-center"
                                style="background-image: url(<?php echo base_url() ?>images/destination-6.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <h3><a href="#">Yogyakarta</a></h3>
                                <span class="listing">3 Listing</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 sidebar">
                <div class="sidebar-wrap bg-light ftco-animate">
                    <h3 class="heading mb-4">Find Hotel</h3>
                    <form action="<?= site_url('search-hotel')?>" method="post">
                        <div class="fields">
                            <div class="form-group">
                                <input name="nama_hotel" type="text" class="form-control" placeholder="nama hotel">
                            </div>
                            <div class="form-group">
                                <div class="select-wrap one-third">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="lokasi"  class="form-control" placeholder="Keyword search">
                                        <option value="" selected>Where</option>
                                        <option value="Jakarta">Jakarta</option>
                                        <option value="Semarang">Semarang</option>
                                        <option value="Bandung">Bandung</option>
                                        <option value="Bali">Bali</option>
                                        <option value="Surabaya">Surabaya</option>
                                    </select>
                                </div>
                            </div>
                            <h3 class="heading mb-4">Star Rating</h3>
                            <div class="form-check">
                                <input name="ratings" value="5" type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></p>
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="ratings" value="4" type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i></span></p>
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="ratings" value="3" type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="ratings" value="2" type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="ratings" value="1" type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    <p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                                </label>
                            </div>


                            <div class="form-group">
                                <input type="submit"class="btn btn-primary py-3 px-5">
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <?php foreach ($hotel as $h) : ?>
                        <div class="col-md-4 ftco-animate">
                            <div class="destination">

                                <a href="<?= base_url()?>index.php/daftar-kamar/<?= $h->id; ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?= base_url() ?>uploads/hotel/<?php echo $h->image; ?>);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <div class="d-flex">
                                        <div class="one">
                                            <h3>
                                                <a href="<?= base_url()?>index.php/daftar-kamar/<?= $h->id; ?>"><?= $h->nama_hotel; ?></a>
                                            </h3>
                                            <p class="rate">
                                                <?php if ($h->rating == 5) : ?>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                <?php elseif ($h->rating == 4) : ?>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star-o"></i>
                                                <?php elseif ($h->rating == 3) : ?>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star-o"></i>
                                                    <i class="icon-star-o"></i>
                                                <?php elseif ($h->rating == 2) : ?>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star-o"></i>
                                                    <i class="icon-star-o"></i>
                                                    <i class="icon-star-o"></i>
                                                <?php elseif ($h->rating == 1) : ?>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star-o"></i>
                                                    <i class="icon-star-o"></i>
                                                    <i class="icon-star-o"></i>
                                                    <i class="icon-star-o"></i>

                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        <div class="two">

                                            <span class="price per-price">
                                                <small>
                                                    lokasi<br>

                                                    <?php echo $h->lokasi; ?>
                                                </small>
                                            </span>

                                        </div>
                                    </div>
                                    <p><?php echo $h->keterangan; ?></p>
                                    <hr>
                                    <p class="bottom-area d-flex">
                                        <span><i class="icon-map-o"></i></span>
                                        <span class="ml-auto"><a href="<?= base_url()?>index.php/daftar-kamar/<?= $h->id; ?>">Book
                                                Now</a></span>
                                    </p>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <div class="block-27">
                            <ul>
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- .col-md-8 -->
        </div>
    </div>
</section> <!-- .section -->

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(<?php echo base_url() ?>images/bg.jpg);">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <h2 class="mb-4">Some fun facts</h2>
                <span class="subheading">More than 100,000 websites hosted</span>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="100000">0</strong>
                                <span>Happy Customers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="40000">0</strong>
                                <span>Destination Places</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="87000">0</strong>
                                <span>Hotels</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="56400">0</strong>
                                <span>Restaurant</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="ftco-section testimony-section bg-light">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-md-5 heading-section ftco-animate">
                <span class="subheading">Best Directory Website</span>
                <h2 class="mb-4 pb-3"><strong>Why</strong> Choose Us?</h2>
                <p>The real question is, why not choose Healing.id as your online hotel booking platform?
                    Healing.id offers a long list of hotels worldwide - not just in the Southeast Asian region.
                    Healing.id offers cheap hotels on a massive scale through its endless promotions and deals.
                    Healing.id offers interesting features that are convenient, special and beneficial for you.
                    We also have more inventories of private accommodations that you find it on Holiday Stays product.
                </p>
                <p>Make Heal with Healing.id.</p>
                <p><a href="#" class="btn btn-primary btn-outline-primary mt-4 px-4 py-3">Read more</a></p>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 heading-section ftco-animate">
                <span class="subheading">Testimony</span>
                <h2 class="mb-4 pb-3"><strong>Our</strong> Guests Says</h2>
                <div class="row ftco-animate">
                    <div class="col-md-12">
                        <div class="carousel-testimony owl-carousel">
                            <div class="item">
                                <div class="testimony-wrap d-flex">
                                    <div class="user-img mb-5" style="background-image: url(<?php echo base_url() ?>images/person_1.jpg)">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="text ml-md-4">
                                        <p class="mb-5">Far far away, behind the word mountains, far from the
                                            countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <p class="name">Uti Akhmad Nawawi</p>
                                        <span class="position">Guest from Indonesia</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap d-flex">
                                    <div class="user-img mb-5" style="background-image: url(<?php echo base_url() ?>images/person_2.jpg)">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="text ml-md-4">
                                        <p class="mb-5">Far far away, behind the word mountains, far from the
                                            countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <p class="name">Fikri Khoerulloh</p>
                                        <span class="position">Guest from Indonesia</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap d-flex">
                                    <div class="user-img mb-5" style="background-image: url(<?php echo base_url() ?>images/person_3.jpg)">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="text ml-md-4">
                                        <p class="mb-5">Far far away, behind the word mountains, far from the
                                            countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <p class="name">Rifkhy Eka Putra</p>
                                        <span class="position">Guest from Indonesia</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2>Subcribe to our Newsletter</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                        there live the blind texts. Separated they live in</p>
                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col-md-8">
                            <form action="#" class="subscribe-form">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control" placeholder="Enter email address">
                                    <input type="submit" value="Subscribe" class="submit px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->



</body>

</html>