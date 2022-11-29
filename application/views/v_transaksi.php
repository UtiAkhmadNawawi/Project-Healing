<div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
    <?php 
				            if($this->session->flashdata('error') !='')
				            {
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
                        <input type="text" class="form-control" name="username" id="username" placeholder="Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="date" name="checkin_date" id="" class="form-control" placeholder="Date from">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="date" name="checkout_date" id="" class="form-control" placeholder="Date to">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="select-wrap one-third">
                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            <select name="guest" id="guest" class="form-control" placeholder="Guest">
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
                            <select name="child" id="child" class="form-control" placeholder="Children">
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
                        <input type="submit" value="Check Availability" class="btn btn-primary py-3">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>