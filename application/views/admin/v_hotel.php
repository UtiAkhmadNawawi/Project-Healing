<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Hotel List</h3>
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
                                                            Hotel</span></a></li>
                                                
                                                <li><a href="#"><span>Export Hotel</span></a></li>
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
                                        <div class="nk-tb-col"><span class="sub-text">Lokasi</span></div>
                                        <div class="nk-tb-col"><span class="sub-text">Keterangan</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Rating</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Image</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Aksi</span></div>


                                    </div>
                                    <?php foreach ($hotel as $r) : ?>
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid1"><label class="custom-control-label" for="uid1"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col"><span class="text-primary"><?php echo $r->nama_hotel; ?></span></div>

                                            <div class="nk-tb-col"><span class="text-primary"><?php echo $r->lokasi; ?></span></div>
                                            <div class="nk-tb-col tb-col-md"><span><?php echo $r->keterangan; ?></span></div>
                                            <div class="nk-tb-col tb-col-lg"><span><?php echo $r->rating; ?></span></div>
                                            <div class="nk-tb-col tb-col-lg"><picture>
                                                <source srcset="sourceset" type="image">
                                                <img src="<?= base_url()?>uploads/hotel/<?php echo $r->image;?>" class="img-fluid col-4" alt="image desc">
                                              </picture></div>

                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li>
                                                        <div class="drodown"><a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="<?= base_url()?>index.php/hotel-edit/<?php echo $r->id;?>"><em class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                    </li>
                                                                    
                                                                    <li><a href="<?=base_url()?>index.php/hotel-delete/<?php echo $r->id; ?>"><em class="icon ni ni-trash"></em><span>Delete</span></a>
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
                <h5 class="modal-title">Add Hotel</h5>
                <form action="<?= site_url('hotel-create') ?>" method="post" class="mt-2">
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="room-no-add">Nama Hotel</label>
                                <input name="nama_hotel" type="text" class="form-control" id="room-no-add" placeholder="Nama Hotel">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="room-no-add">Lokasi</label>
                                <input name="lokasi" type="text" class="form-control" id="room-no-add" placeholder="Nama Hotel">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="room-no-add">Keterangan</label>
                                <input name="keterangan" type="text" class="form-control" id="room-no-add" placeholder="Nama Hotel">
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
                        </div>

                        <div class="col-12">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li><button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Add Hotel</button></li>
                                <li><a href="#" class="link" data-bs-dismiss="modal">Cancel</a></li>
                            </ul>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="add-picture">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content"><a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="modal-title">Add Picture</h5>
                <form method="post" action="<?php echo base_url(); ?>index.php/upload-process" enctype="multipart/form-data">
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <label class="form-label" for="room-no-add">Image</label>
                            <input class="form-control" type="file" name="userfile" size="20" />
                            <br />
                            <label class="form-label" for="room-no-add">Pilih Hotel</label>
                            <select name="hotel_id" class="form-select js-select2" data-placeholder="Select multiple options">
                                <?php foreach ($hotel as $h): ?>
                                        <option value="<?php echo $h->id; ?>"><?php echo $h->nama_hotel; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li><button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Upload</button></li>
                                    <li><a href="#" class="link" data-bs-dismiss="modal">Cancel</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
