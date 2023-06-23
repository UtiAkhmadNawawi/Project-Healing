<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Invoice <strong
                                    class="text-primary small">#<?= $invoice->id; ?></strong></h3>
                            <div class="nk-block-des text-soft">
                                <ul class="list-inline">
                                    <li>Created At: <span class="text-base"><?= $invoice->created_at; ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="nk-block-head-content"><a href="<?= base_url()?>index.php/admin-payment"
                                class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                    class="icon ni ni-arrow-left"></em><span>Back</span></a><a
                                href="<?= base_url()?>index.php/admin-payment"
                                class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                    class="icon ni ni-arrow-left"></em></a></div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="invoice">
                        <div class="invoice-action"><a class="btn btn-icon btn-lg btn-white btn-dim btn-outline-primary"
                                href="<?= base_url()?>index.php/invoice-printPDF/<?= $invoice->id;?>" target="_blank"><em
                                    class="icon ni ni-printer-fill"></em></a></div>
                        <div class="invoice-wrap">
                            <div class="invoice-brand text-center"><img src="/demo1/images/logo-dark.png"
                                    srcset="/demo1/images/logo-dark2x.png 2x" alt=""></div>
                            <div class="invoice-head">
                                <div class="invoice-contact"><span class="overline-title">Invoice
                                        To</span>
                                    <div class="invoice-contact-info">
                                        <h4 class="title"><?= $invoice->username; ?></h4>
                                        <ul class="list-plain">
                                            
                                            <li>
                                                <em class="icon ni ni-mail-fill"></em><span><?= $invoice->email; ?></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="invoice-desc">
                                    <h3 class="title">Invoice</h3>
                                    <ul class="list-plain">
                                        <li class="invoice-id"><span>Invoice
                                                ID</span>:<span><?= $invoice->id; ?></span></li>
                                        <li class="invoice-date"><span>Date</span>:<span><?= $invoice->created_at; ?></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="invoice-bills">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="w-150px">Item ID</th>
                                                <th class="w-60">Description</th>
                                                <th>Price</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?= $invoice->hotel_id; ?></td>
                                                <td><?= $invoice->nama_hotel; ?></td>
                                                <td>Rp.<?= $invoice->subtotal; ?></td>
                                                
                                            </tr>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td colspan="2">Subtotal</td>
                                                <td>Rp.<?= $invoice->subtotal; ?></td>
                                            </tr>
                                            
                                            <tr>
                                                <td colspan="2"></td>
                                                <td colspan="2">Grand Total</td>
                                                <td>Rp.<?= $invoice->subtotal; ?></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="nk-notes ff-italic fs-12px text-soft"> Invoice was
                                        created on a computer and is valid without the signature and
                                        seal. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>