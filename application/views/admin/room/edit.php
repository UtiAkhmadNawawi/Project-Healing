<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Room Edit</h3>

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

                                        <form action="<?= site_url('room-update') ?>" method="post" class="mt-2" enctype="multipart/form-data">

                                            <div class="row g-gs">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="room-no-add">Room
                                                            No</label>
                                                        <input type="number" name="noroom" class="form-control" value="<?php echo $room->no_room; ?>">
                                                        <input hidden type="number" name="room_id" class="form-control" value="<?php echo $room->id; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="form-label">Room Type</label>
                                                        <div class="form-control-wrap">
                                                            <select name="roomtype" class="form-select js-select2">
                                                                <option value="default_option">Room Type</option>
                                                                <option value="Delux">Delux</option>
                                                                <option value="Super Delux">Super Delux</option>
                                                                <option value="Single">Single</option>
                                                                <option value="Double">Double</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Hotel</label>
                                                        <div class="form-control-wrap">
                                                            <select name="hotelid" class="form-select js-select2">
                                                                <option selected disabled value="-">Pilih Hotel</option>
                                                                <?php foreach ($hotel as $h) : ?>
                                                                    <option value="<?php echo $h->id; ?>"><?php echo $h->nama_hotel; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Air Conditon</label>
                                                        <div class="form-control-wrap">
                                                            <select name="ac" class="form-select js-select2">
                                                                <option value="AC">AC</option>
                                                                <option value="Non AC">Non AC</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="bed-no-add">Bed
                                                            Capacity</label>
                                                        <input type="number" name="bedcapacity" class="form-control" value="<?php echo $room->Bed_capacity; ?>">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="rent-add">Rent</label>
                                                        <input name="harga" type="number" class="form-control" id="rent-add" value="<?php echo $room->harga; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Status</label>
                                                        <div class="form-control-wrap">
                                                            <select name="status" class="form-select js-select2" data-placeholder="Select multiple options">
                                                                <option value="Open">Open</option>
                                                                <option value="Inactive">Inactive</option>
                                                                <option value="Booked">Booked</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="form-label">Image</label>
                                                    <input class="form-control" type="file" name="userfile" size="20" />
                                                    </div>
                                                </div>
                                                
                                                <div class="col-12">
                                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                        <li><button class="btn btn-primary" data-bs-dismiss="modal">Add Room</button></li>
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