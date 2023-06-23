<div class="hero-wrap js-fullheight" style="background-image: url('<?php echo base_url() ?>images/bg_5.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="http://localhost/project-Healing/">Home</a></span>
                    <span>Hotel</span>
                </p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Hotels</h1>
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
                    <?php foreach ($hotel as $h) : ?>
                        <div class="col-md-4 ftco-animate">
                            <div class="destination">

                                <a href="<?= base_url() ?>index.php/daftar-kamar/<?= $h->id; ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?= base_url() ?>uploads/hotel/<?php echo $h->image; ?>);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <div class="d-flex">
                                        <div class="one">
                                            <h3>
                                                <a href="<?= base_url() ?>index.php/daftar-kamar/<?= $h->id; ?>"><?= $h->nama_hotel; ?></a>
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
                                        <span class="ml-auto"><a href="<?= base_url() ?>index.php/daftar-kamar/<?= $h->id; ?>">Book
                                                Now</a></span>
                                    </p>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
            </div> <!-- .col-md-8 -->
        </div>
    </div>
</section> <!-- .section -->