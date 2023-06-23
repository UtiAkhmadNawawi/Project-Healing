<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Hotel Edit</h3>

                        </div>

                    </div>
                </div>
                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner position-relative card-tools-toggle">

                                <div class="card-search search-wrap" data-search="search">
                                    <div class="card-body">
                                        <div class="search-content"><a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a><input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by room no or type"><button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-inner p-5">
                                <div class="nk-tb-list nk-tb-ulist">
                                    <div class="nk-tb-item nk-tb-head">

                                        <form action="<?= site_url('hotel-update') ?>" method="post" class="mt-2" enctype="multipart/form-data">
                                            <div class="row g-gs">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="room-no-add">Nama Hotel</label>
                                                        <input name="nama_hotel" type="text" class="form-control" id="room-no-add" value="<?php echo $hotel->nama_hotel; ?>">
                                                        <input hidden name="hotel_id" type="text" class="form-control" id="room-no-add" value="<?php echo $hotel->id; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="room-no-add">Lokasi</label>
                                                        <input name="lokasi" type="text" class="form-control" id="room-no-add" value="<?php echo $hotel->lokasi; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="room-no-add">Keterangan</label>
                                                        <input name="keterangan" type="text" class="form-control" id="room-no-add" value="<?php echo $hotel->keterangan; ?>">
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="form-label">Rating</label>
                                                        <div class="form-control-wrap">
                                                            <select name="rating" class="form-select js-select2" data-placeholder="Select multiple options">
                                                                <option value="default_option">None</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <label class="form-label">Image</label>
                                                    <input class="form-control" type="file" name="userfile" size="20" />
                                                </div>

                                                <div class="col-12">
                                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                        <li><button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Update</button></li>
                                                        <li><a href="#" class="link" data-bs-dismiss="modal">Cancel</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>

                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>