<div class="hero-wrap js-fullheight" style="background-image: url('<?php echo base_url() ?>images/bg_5.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="http://localhost/project-Healing/">Home</a></span> <span class="mr-2"><a href="http://localhost/project-Healing/Hotel/index">Hotel</a></span> <span>Hotel
                        Single</span></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Hotels Details
                </h1>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 sidebar">
                <div class="sidebar-wrap bg-light ftco-animate">
                    <h3 class="heading mb-4">Find Hotel</h3>
                    <form action="<?= site_url('search-hotel') ?>" method="post">
                        <div class="fields">
                            <div class="form-group">
                                <input name="nama_hotel" type="text" class="form-control" placeholder="nama hotel">
                            </div>
                            <div class="form-group">
                                <div class="select-wrap one-third">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="lokasi" class="form-control" placeholder="Keyword search">
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
                                <input type="submit" class="btn btn-primary py-3 px-5">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-lg-9">
                <div class="row">

                    <div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
                        <span>Our Best hotels &amp; Rooms</span>
                        <h2><?php echo $hotel->nama_hotel; ?></h2>
                        <p class="rate mb-5">
                            <span class="loc"><a href="#"><i class="icon-map"></i><?php echo $hotel->lokasi; ?></a></span>
                            <span class="star">
                                <?php if ($hotel->rating == 4) : ?>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                <?php elseif ($hotel->rating == 5) : ?>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                <?php elseif ($hotel->rating == 3) : ?>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <i class="icon-star-o"></i>
                                <?php elseif ($hotel->rating == 2) : ?>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>

                                    <i class="icon-star-o"></i>
                                    <i class="icon-star-o"></i>
                                    <i class="icon-star-o"></i>
                                <?php elseif ($hotel->rating == 1) : ?>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-o"></i>
                                    <i class="icon-star-o"></i>
                                    <i class="icon-star-o"></i>
                                    <i class="icon-star-o"></i>
                                <?php endif; ?>
                            </span>
                        </p>
                        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the
                            skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of
                            her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she
                            continued her way.</p>
                        <div class="d-md-flex mt-5 mb-5">
                            <ul>
                                <li>The Big Oxmox advised her not to do so</li>
                                <li>When she reached the first hills of the Italic Mountains</li>
                                <li>She had a last view back on the skyline of her hometown </li>
                                <li>Bookmarksgrove, the headline of Alphabet </li>
                            </ul>
                            <ul class="ml-md-5">
                                <li>Question ran over her cheek, then she continued</li>
                                <li>Pityful a rethoric question ran</li>
                                <li>Mountains, she had a last view back on the skyline</li>
                                <li>Headline of Alphabet Village and the subline</li>
                            </ul>
                        </div>
                        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the
                            skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of
                            her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she
                            continued her way.</p>
                    </div>

                    <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                        <h4 class="mb-4">Our Rooms</h4>
                        <?php foreach ($daftarkamar as $dk) : ?>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="destination">
                                        <a href="" class="img img-2" style="background-image: url(<?php echo base_url() ?>uploads/room/<?= $dk->image; ?>);"></a>
                                        <div class="text p-3">
                                            <div class="d-flex">
                                                <div class="one">
                                                    <h3><a href=""><?= $hotel->nama_hotel; ?></a></h3>
                                                    <p class="rate">
                                                        <?php if ($hotel->rating == 4) : ?>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star-o"></i>
                                                        <?php elseif ($hotel->rating == 5) : ?>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                        <?php elseif ($hotel->rating == 3) : ?>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star-o"></i>
                                                            <i class="icon-star-o"></i>
                                                        <?php elseif ($hotel->rating == 2) : ?>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>

                                                            <i class="icon-star-o"></i>
                                                            <i class="icon-star-o"></i>
                                                            <i class="icon-star-o"></i>
                                                        <?php elseif ($hotel->rating == 1) : ?>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star-o"></i>
                                                            <i class="icon-star-o"></i>
                                                            <i class="icon-star-o"></i>
                                                            <i class="icon-star-o"></i>
                                                        <?php endif; ?>
                                                    </p>
                                                </div>
                                                <div class="two">
                                                    <small class="">Rp.<?= $dk->harga; ?></small>
                                                    <br>
                                                    <small>No.<?= $dk->no_room; ?>/<?= $dk->AC; ?></small>
                                                    </span>
                                                </div>
                                            </div>
                                            <p>type : <?= $dk->type; ?></p>
                                            <hr>
                                            <p class="bottom-area d-flex">
                                                <span><i class="icon-map-o"></i> <?= $hotel->lokasi; ?></span>
                                                <span class="ml-auto"><a href="<?= base_url()?>index.php/booking/<?= $dk->id; ?>">Book Now</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                            </div>
                    </div>
                    <!-- <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                        <?php
                        if ($this->session->flashdata('error') != '') {
                            echo '<div class="alert alert-danger" role="alert">';
                            echo $this->session->flashdata('error');
                            echo '</div>';
                        }
                        ?>
                        <form action="<?php echo base_url(); ?>Transaksi/proses" method="post">
                            <h4 class="mb-5">Check Availability &amp; Booking</h4>
                            <div class="fields">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="username" id="username"
                                                placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" id="email"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="date" name="checkin_date" id="" class="form-control"
                                                placeholder="Date from">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="date" name="checkout_date" id="" class="form-control"
                                                placeholder="Date to">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="select-wrap one-third">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="guest" id="guest" class="form-control"
                                                    placeholder="Guest">
                                                    <option value="0">Guest</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="select-wrap one-third">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="child" id="child" class="form-control"
                                                    placeholder="Children">
                                                    <option value="0">Children</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" value="Check Availability"
                                                class="btn btn-primary py-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> -->



                </div>
            </div> <!-- .col-md-8 -->
        </div>
    </div>
</section> <!-- .section -->