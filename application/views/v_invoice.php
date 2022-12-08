<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Healing.id| Invoice</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="<?php echo base_url() ?>bower_components/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>bower_components/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>bower_components/Ionicons/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>dist/css/AdminLTE.min.css">


    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <script nonce="42c84aa2-8d73-45e0-a454-85806922158f">
    (function(w, d) {
        ! function(cM, cN, cO, cP) {
            cM.zarazData = cM.zarazData || {};
            cM.zarazData.executed = [];
            cM.zaraz = {
                deferred: [],
                listeners: []
            };
            cM.zaraz.q = [];
            cM.zaraz._f = function(cQ) {
                return function() {
                    var cR = Array.prototype.slice.call(arguments);
                    cM.zaraz.q.push({
                        m: cQ,
                        a: cR
                    })
                }
            };
            for (const cS of ["track", "set", "debug"]) cM.zaraz[cS] = cM.zaraz._f(cS);
            cM.zaraz.init = () => {
                var cT = cN.getElementsByTagName(cP)[0],
                    cU = cN.createElement(cP),
                    cV = cN.getElementsByTagName("title")[0];
                cV && (cM.zarazData.t = cN.getElementsByTagName("title")[0].text);
                cM.zarazData.x = Math.random();
                cM.zarazData.w = cM.screen.width;
                cM.zarazData.h = cM.screen.height;
                cM.zarazData.j = cM.innerHeight;
                cM.zarazData.e = cM.innerWidth;
                cM.zarazData.l = cM.location.href;
                cM.zarazData.r = cN.referrer;
                cM.zarazData.k = cM.screen.colorDepth;
                cM.zarazData.n = cN.characterSet;
                cM.zarazData.o = (new Date).getTimezoneOffset();
                if (cM.dataLayer)
                    for (const cZ of Object.entries(Object.entries(dataLayer).reduce(((c_, da) => ({
                            ...c_[1],
                            ...da[1]
                        }))))) zaraz.set(cZ[0], cZ[1], {
                        scope: "page"
                    });
                cM.zarazData.q = [];
                for (; cM.zaraz.q.length;) {
                    const db = cM.zaraz.q.shift();
                    cM.zarazData.q.push(db)
                }
                cU.defer = !0;
                for (const dc of [localStorage, sessionStorage]) Object.keys(dc || {}).filter((de => de
                    .startsWith("_zaraz_"))).forEach((dd => {
                    try {
                        cM.zarazData["z_" + dd.slice(7)] = JSON.parse(dc.getItem(dd))
                    } catch {
                        cM.zarazData["z_" + dd.slice(7)] = dc.getItem(dd)
                    }
                }));
                cU.referrerPolicy = "origin";
                cU.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(cM.zarazData)));
                cT.parentNode.insertBefore(cU, cT)
            };
            ["complete", "interactive"].includes(cN.readyState) ? zaraz.init() : cM.addEventListener(
                "DOMContentLoaded", zaraz.init)
        }(w, d, 0, "script");
    })(window, document);
    </script>
</head>

<body>
    <div class="wrapper">

        <section class="invoice">

            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <i class="fa fa-globe"></i> HealingID
                        <small class="pull-right">Date: 6/12/2022</small>
                    </h2>
                </div>

            </div>

            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    From
                    <address>
                        <strong>Admin, Inc.</strong><br>
                        Kramat jati, Jakarta Timur<br>
                        Phone: 085848171373<br>
                        Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__">HealingID@gmail.com</a>
                    </address>
                </div>

                <div class="col-sm-4 invoice-col">
                    To
                    <address>
                        <strong>Uti Akhmad Nawawi</strong><br>
                        Phone: 085848171373<br>
                        Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                            data-cfemail="4b21242325652f242e0b2e332a263b272e65282426">utiakhmadnawawi110@gmail.com</a>
                    </address>
                </div>

                <div class="col-sm-4 invoice-col">
                    <b>Invoice #007612</b><br>
                    <br>
                    <b>Order ID:</b> 4F3S8J<br>
                    <b>Payment Due:</b> 06/12/2022<br>
                </div>

            </div>


            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Product</th>
                                <th>type</th>
                                <th>Description</th>
                                <th>Chek in</th>
                                <th>Chek out</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>OYO hotel</td>
                                <td>Delux</td>
                                <td>Double Bed</td>
                                <td>06-12-2022</td>
                                <td>07-12-2022</td>
                                <td>Rp.350000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <div class="row">

                <div class="col-xs-6">
                    <p class="lead">Payment Methods:</p>
                    <img src="<?php echo base_url() ?>dist/img/credit/visa.png" alt="Visa">
                    <img src="<?php echo base_url() ?>dist/img/credit/mastercard.png" alt="Mastercard">
                    <img src="<?php echo base_url() ?>dist/img/credit/american-express.png" alt="American Express">
                    <img src="<?php echo base_url() ?>dist/img/credit/paypal2.png" alt="Paypal">
                    <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                        Healing.id Corporation
                    </p>
                </div>

                <div class="col-xs-6">
                    <p class="lead">Details :</p>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th style="width:50%">Subtotal:</th>
                                <td>Rp.350000</td>
                            </tr>
                            <tr>
                                <th>Tax </th>
                                <td>Rp.0</td>
                            </tr>
                            <tr>
                                <th>Discount </th>
                                <td>Rp.0</td>
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <td>Rp.350000</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

        </section>

    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
</body>

</html>