<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Room List</h3>
                            <div class="nk-block-des text-soft">
                                <p>Here is our verious rooms.</p>
                            </div>
                        </div>
                        <div class="nk-block-head-content">
                            <ul class="nk-block-tools g-3">
                                <li>
                                    <div class="drodown"><a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a data-bs-toggle="modal" href="#add-room"><span>Add
                                                            Room</span></a></li>
                                                <li><a href="#"><span>Import Room</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
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
                            <div class="card-inner p-0">
                                <div class="nk-tb-list nk-tb-ulist">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid"><label class="custom-control-label" for="uid"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col"><span class="sub-text">Hotel Name</span></div>
                                        <div class="nk-tb-col"><span class="sub-text">Room No.</span></div>
                                        <div class="nk-tb-col"><span class="sub-text">Room Type</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">AC/Non
                                                AC</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Bed
                                                Capacity</span></div>
                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Rent</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Image</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Aksi</span></div>


                                    </div>
                                    <?php foreach ($room as $r) : ?>
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid1"><label class="custom-control-label" for="uid1"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col"><span class="text-primary"><?php echo $r->nama_hotel; ?></span></div>

                                            <div class="nk-tb-col"><span class="text-primary"><?php echo $r->no_room; ?></span></div>
                                            <div class="nk-tb-col"><span><?php echo $r->type; ?><span class="dot dot-primary d-md-none ms-1"></span></span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md"><span><?php echo $r->AC; ?></span></div>
                                            <div class="nk-tb-col tb-col-lg"><span><?php echo $r->Bed_capacity; ?></span></div>
                                            <div class="nk-tb-col tb-col-mb"><span class="tb-amount">Rp.<?php echo $r->harga; ?></span></div>
                                            <div class="nk-tb-col tb-col-md"><span class="tb-status text-primary"><?php echo $r->status; ?></span></div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <picture>
                                                    <source srcset="sourceset" type="image">
                                                    <img src="<?= base_url() ?>uploads/room/<?php echo $r->image; ?>" class="img-fluid col-4" alt="image desc">
                                                </picture>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li>
                                                        <div class="drodown"><a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="<?= base_url() ?>index.php/room-edit/<?php echo $r->id; ?>"><em class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                    </li>
                                                                    <li><a href="<?= base_url() ?>index.php/room-delete/<?php echo $r->id; ?>"><em class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>

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
<div class="modal fade" tabindex="-1" role="dialog" id="add-room">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content"><a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="modal-title">Add Room</h5>
                <form method="post" action="<?= base_url() ?>index.php/room-create" class="mt-2">
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="room-no-add">Room
                                    No</label>
                                <input type="number" name="noroom" class="form-control" id="room-no-add" placeholder="Room No">
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
                                <input type="number" name="bedcapacity" class="form-control" id="bed-no-add" placeholder="Bed Capacity">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="rent-add">Rent</label>
                                <input name="harga" type="number" class="form-control" id="rent-add" placeholder="Rp.">
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
<div class="modal fade" tabindex="-1" role="dialog" id="edit-room">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content"><a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="modal-title">Edit Room</h5>
                <form action="#" class="mt-2">
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group"><label class="form-label" for="room-no-edit">Room
                                    No</label><input type="number" class="form-control" id="room-no-edit" value="107" placeholder="Room No"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label class="form-label">Room Type</label>
                                <div class="form-control-wrap"><select class="form-select js-select2">
                                        <option value="default_option">Room Type</option>
                                        <option value="option_select_room_type">Delux</option>
                                        <option value="option_select_room_type">Super Delux</option>
                                        <option value="option_select_room_type">Single</option>
                                        <option value="option_select_room_type">Double</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label class="form-label">Air Conditon</label>
                                <div class="form-control-wrap"><select class="form-select js-select2">
                                        <option value="default_option">AC</option>
                                        <option value="option_select_ac">Non AC</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label class="form-label" for="bed-no-edit">Bed
                                    Capacity</label><input type="number" class="form-control" id="bed-no-edit" placeholder="Bed Capacity"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label class="form-label">Meal</label>
                                <div class="form-control-wrap"><select class="form-select js-select2" data-placeholder="Select multiple options">
                                        <option value="default_option">None</option>
                                        <option value="option_select_meal">Breakfast</option>
                                        <option value="option_select_meal">Lunch</option>
                                        <option value="option_select_meal">Dinner</option>
                                        <option value="option_select_meal">Two</option>
                                        <option value="option_select_meal">All</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label class="form-label" for="rent-edit">Rent</label><input type="number" class="form-control" id="rent-edit" value="38.99" placeholder="0.00 USD"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label class="form-label">Status</label>
                                <div class="form-control-wrap"><select class="form-select js-select2" data-placeholder="Select multiple options">
                                        <option value="default_option">Open</option>
                                        <option value="option_select_status">Inactive</option>
                                        <option value="option_select_status">Booked</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li><button class="btn btn-primary" data-bs-dismiss="modal">Update Room</button>
                                </li>
                                <li><a href="#" class="link" data-bs-dismiss="modal">Cancel</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>