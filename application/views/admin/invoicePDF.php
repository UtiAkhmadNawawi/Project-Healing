<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <!-- <meta name="author" content="Softnio"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="<?php echo base_url() ?>AdminCSS/images/favicon.png">
    <title>invoice pdf</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>AdminCSS/assets/css/admin.css">
    <link id="skin-default" rel="stylesheet" href="<?php echo base_url() ?>AdminCSS/assets/css/theme.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-91615293-4');
    </script>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Invoice <strong class="text-primary small">#<?= $invoice->id; ?></strong></h3>
                                <div class="nk-block-des text-soft">
                                    <ul class="list-inline">
                                        <li>Created At: <span class="text-base"><?= $invoice->created_at; ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="invoice">
                            <div class="invoice-wrap">
                                <div class="invoice-head">
                                    <div class="invoice-contact"><span class="overline-title">Invoice
                                            To</span>
                                        <div class="invoice-contact-info">
                                            <h4 class="title"><?= $invoice->username; ?></h4>
                                            <ul class="list-plain">

                                                <li>
                                                    <em class="icon ni ni-mail-fill"></em><span><?= $invoice->email; ?></span>
                                                </li>
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
</body>
<script src="<?php echo base_url() ?>AdminCSS/assets/js/bundle.js"></script>
<script src="<?php echo base_url() ?>AdminCSS/assets/js/chart-hotel.js"></script>
<script src="<?php echo base_url() ?>AdminCSS/assets/js/demo-setting.js"></script>
<script src="<?php echo base_url() ?>AdminCSS/assets/js/scripts.js"></script>
<!-- Kode HTML lainnya -->

<script>
    // Mendapatkan elemen <a> berdasarkan selector
    var linkElement = document.querySelector('a[data-bs-toggle="modal"]');

    // Menangkap nilai ID saat tautan diklik
    linkElement.addEventListener('click', function(e) {
        e.preventDefault();
        var id = this.getAttribute('data-id');
        // Lakukan operasi dengan nilai ID yang diterima
        console.log(id);
    });
</script>


</html>