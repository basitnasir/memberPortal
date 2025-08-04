<?php 
    $add_new_product_css = "./assets/css/add-new-product.css";
    $company_profile_css = "./assets/css/company-profile.css";
    include './includes/header.php'; 
?>



    <main class="main">
        <section class="company-section trade-detail">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="section-top">
                            <h1 class="main-title mb-0">Manage <span class="fw-normal">Company</span></h1>
                        </div>
                    </div>
                    <div class="col-12">
                        <form action="" method="post">
                            <div class="add-product-list-main d-block">
                                <div class="add-new-product-box">
                                    <h5 class="sm-title fw-bold mb-4">Trade Details</h5>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Total Annual Revenue</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <select class="form-select dash-form-input" aria-label="Default select example">
                                                <option selected>-- Please Select --</option>
                                                <option value="1">Below US$1 Million</option>
                                                <option value="2">US$1 Million - US$2.5 Million</option>
                                                <option value="3">US$2.5 Million - US$5 Million</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="formgroup-area mb-26px">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Export Percentage</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <select class="form-select dash-form-input" aria-label="Default select example">
                                                <option selected>-- Please Select --</option>
                                                <option value="1">1% - 10%</option>
                                                <option value="2">11% - 20%</option>
                                                <option value="3">21% - 30%</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="formgroup-area mb-26px align-items-start">
                                        <div class="formgroup-area-left mt-3">
                                            <label class="pro-form-label m-0">Main Markets and Distribution:</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <ul class="markets-distrubution-list">
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="America">
                                                    <label for="America" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">America</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="Africa">
                                                    <label for="Africa" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Africa</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="Asia">
                                                    <label for="Asia" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Asia</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="Carribean">
                                                    <label for="Carribean" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Carribean</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="Europe">
                                                    <label for="Europe" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Europe</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="Oceania">
                                                    <label for="Oceania" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Oceania</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="Arabic">
                                                    <label for="Arabic" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Arabic</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="French">
                                                    <label for="French" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">French</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="Russian">
                                                    <label for="Russian" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Russian</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="Korean">
                                                    <label for="Korean" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Korean</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="Hindi">
                                                    <label for="Hindi" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Hindi</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="Italian">
                                                    <label for="Italian" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Italian</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Year Company Started Exporting:</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <select class="form-select dash-form-input" aria-label="Default select example">
                                                <option selected>2025</option>
                                                <option value="1">2024</option>
                                                <option value="2">2023</option>
                                                <option value="3">2022</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">No of Employees in Trade:</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <select class="form-select dash-form-input" aria-label="Default select example">
                                                <option selected>Less than 5 People</option>
                                                <option value="1">5 - 10 People</option>
                                                <option value="2">11 - 20 People</option>
                                                <option value="3">21 - 30 People</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Department Near Port:</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text" name="" id="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Average Lead Time: (Days)</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text" name="" id="" placeholder="Please enter the average production time. Numbers Only.">
                                        </div>
                                    </div>
                                    <div class="formgroup-area mb-26px">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Companies Have an  Overseas Office?</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <select class="form-select dash-form-input" aria-label="Default select example">
                                                <option value="1">No</option>
                                                <option value="2">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="formgroup-area mb-26px align-items-start">
                                        <div class="formgroup-area-left mt-2">
                                            <label class="pro-form-label m-0">Accepted Delivery Terms:</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <ul class="main-markets-list justify-content-between">
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="DHL">
                                                    <label for="DHL" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">DHL</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="UPS">
                                                    <label for="UPS" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">UPS</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="FOB">
                                                    <label for="FOB" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">FOB</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="LC">
                                                    <label for="LC" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">LC</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="CFR">
                                                    <label for="CFR" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">CFR</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="CIF">
                                                    <label for="CIF" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">CIF</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="EXW">
                                                    <label for="EXW" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">EXW</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="FAS">
                                                    <label for="FAS" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">FAS</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="CIP">
                                                    <label for="CIP" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">CIP</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="FCA">
                                                    <label for="FCA" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">FCA</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="CPT">
                                                    <label for="CPT" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">CPT</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="DEQ">
                                                    <label for="DEQ" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">DEQ</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="DDP">
                                                    <label for="DDP" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">DDP</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="DDU">
                                                    <label for="DDU" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">DDU</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="Express">
                                                    <label for="Express" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Express</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="DAF">
                                                    <label for="DAF" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">DAF</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="DES">
                                                    <label for="DES" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">DES</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="formgroup-area mb-26px align-items-start">
                                        <div class="formgroup-area-left mt-2">
                                            <label class="pro-form-label m-0">Accepted Payment Currency:</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <ul class="main-markets-list justify-content-between">
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="USD">
                                                    <label for="USD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">USD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="EUR">
                                                    <label for="EUR" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">EUR</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="JPY">
                                                    <label for="JPY" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">JPY</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="CAD">
                                                    <label for="CAD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">CAD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="AUD">
                                                    <label for="AUD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">AUD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="HKD">
                                                    <label for="HKD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">HKD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="GBP">
                                                    <label for="GBP" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">GBP</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="RMB">
                                                    <label for="RMB" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">RMB</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="AED">
                                                    <label for="AED" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">AED</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="ALL">
                                                    <label for="ALL" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">ALL</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="AMD">
                                                    <label for="AMD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">AMD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="ANG">
                                                    <label for="ANG" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">ANG</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="AZN">
                                                    <label for="AZN" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">AZN</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="BAM">
                                                    <label for="BAM" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">BAM</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="BBD">
                                                    <label for="BBD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">BBD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="BDT">
                                                    <label for="BDT" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">BDT</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="BGN">
                                                    <label for="BGN" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">BGN</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="BIF">
                                                    <label for="BIF" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">BIF</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="NGN">
                                                    <label for="NGN" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">NGN</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="INR">
                                                    <label for="INR" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">INR</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="TRY">
                                                    <label for="TRY" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">TRY</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="THB">
                                                    <label for="THB" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">THB</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="MYR">
                                                    <label for="MYR" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">MYR</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="SAR">
                                                    <label for="SAR" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">SAR</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="IDR">
                                                    <label for="IDR" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">IDR</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="LKR">
                                                    <label for="LKR" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">LKR</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="PKR">
                                                    <label for="PKR" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">PKR</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="CNY">
                                                    <label for="CNY" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">CNY</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="ETB">
                                                    <label for="ETB" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">ETB</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="AWG">
                                                    <label for="AWG" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">AWG</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="BMD">
                                                    <label for="BMD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">BMD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="BND">
                                                    <label for="BND" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">BND</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="BSD">
                                                    <label for="BSD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">BSD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="BWP">
                                                    <label for="BWP" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">BWP</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="BYN">
                                                    <label for="BYN" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">BYN</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="BZD">
                                                    <label for="BZD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">BZD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="CDF">
                                                    <label for="CDF" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">CDF</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="CHF">
                                                    <label for="CHF" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">CHF</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="CZK">
                                                    <label for="CZK" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">CZK</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="DKK">
                                                    <label for="DKK" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">DKK</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="DOP">
                                                    <label for="DOP" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">DOP</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="DZD">
                                                    <label for="DZD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">DZD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="EGP">
                                                    <label for="EGP" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">EGP</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="FJD">
                                                    <label for="FJD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">FJD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="GEL">
                                                    <label for="GEL" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">GEL</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="GIP">
                                                    <label for="GIP" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">GIP</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="GMD">
                                                    <label for="GMD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">GMD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="GYD">
                                                    <label for="GYD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">GYD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="HRK">
                                                    <label for="HRK" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">HRK</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="HTG">
                                                    <label for="HTG" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">HTG</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="HUF">
                                                    <label for="HUF" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">HUF</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="ILS">
                                                    <label for="ILS" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">ILS</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="ISK">
                                                    <label for="ISK" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">ISK</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="JMD">
                                                    <label for="JMD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">JMD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="KES">
                                                    <label for="KES" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">KES</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="KCS">
                                                    <label for="KCS" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">KCS</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="KHR">
                                                    <label for="KHR" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">KHR</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="KMF">
                                                    <label for="KMF" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">KMF</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="KRW">
                                                    <label for="KRW" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">KRW</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="KYD">
                                                    <label for="KYD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">KYD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="KZT">
                                                    <label for="KZT" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">KZT</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="LBP">
                                                    <label for="LBP" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">LBP</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="LRD">
                                                    <label for="LRD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">LRD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="LSL">
                                                    <label for="LSL" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">LSL</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="MAD">
                                                    <label for="MAD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">MAD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="MDL">
                                                    <label for="MDL" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">MDL</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="MGA">
                                                    <label for="MGA" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">MGA</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="MKD">
                                                    <label for="MKD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">MKD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="MMK">
                                                    <label for="MMK" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">MMK</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="MNT">
                                                    <label for="MNT" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">MNT</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="MOP">
                                                    <label for="MOP" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">MOP</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="MRO">
                                                    <label for="MRO" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">MRO</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="MVR">
                                                    <label for="MVR" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">MVR</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="MWK">
                                                    <label for="MWK" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">MWK</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="MXN">
                                                    <label for="MXN" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">MXN</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="MZN">
                                                    <label for="MZN" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">MZN</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="NAD">
                                                    <label for="NAD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">NAD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="NOK">
                                                    <label for="NOK" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">NOK</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="NPR">
                                                    <label for="NPR" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">NPR</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="NZD">
                                                    <label for="NZD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">NZD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="PGK">
                                                    <label for="PGK" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">PGK</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="PHP">
                                                    <label for="PHP" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">PHP</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="PLN">
                                                    <label for="PLN" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">PLN</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="QAR">
                                                    <label for="QAR" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">QAR</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="RON">
                                                    <label for="RON" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">RON</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="RSD">
                                                    <label for="RSD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">RSD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="RUB">
                                                    <label for="RUB" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">RUB</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="RWF">
                                                    <label for="RWF" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">RWF</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="SBD">
                                                    <label for="SBD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">SBD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="SCR">
                                                    <label for="SCR" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">SCR</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="SEK">
                                                    <label for="SEK" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">SEK</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="SGD">
                                                    <label for="SGD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">SGD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="SLL">
                                                    <label for="SLL" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">SLL</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="SOS">
                                                    <label for="SOS" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">SOS</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="SZL">
                                                    <label for="SZL" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">SZL</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="TJS">
                                                    <label for="TJS" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">TJS</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="TOP">
                                                    <label for="TOP" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">TOP</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="TTD">
                                                    <label for="TTD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">TTD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="TWD">
                                                    <label for="TWD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">TWD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="TZS">
                                                    <label for="TZS" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">TZS</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="UAH">
                                                    <label for="UAH" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">UAH</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="UGX">
                                                    <label for="UGX" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">UGX</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="UZS">
                                                    <label for="UZS" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">UZS</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="VND">
                                                    <label for="VND" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">VND</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="VUV">
                                                    <label for="VUV" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">VUV</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="WST">
                                                    <label for="WST" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">WST</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="XAF">
                                                    <label for="XAF" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">XAF</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="XCD">
                                                    <label for="XCD" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">XCD</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="YER">
                                                    <label for="YER" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">YER</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="ZAR">
                                                    <label for="ZAR" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">ZAR</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="ZMW">
                                                    <label for="ZMW" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">ZMW</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="BRL">
                                                    <label for="BRL" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">BRL</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="CEDI">
                                                    <label for="CEDI" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">CEDI</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="formgroup-area mb-26px align-items-start">
                                        <div class="formgroup-area-left mt-2">
                                            <label class="pro-form-label m-0">Accepted Payment Method:</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <ul class="main-markets-list justify-content-between">
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="T/T">
                                                    <label for="T/T" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">T/T</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="L/C">
                                                    <label for="L/C" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">L/C</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="D/A">
                                                    <label for="D/A" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">D/A</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="D/P">
                                                    <label for="D/P" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">D/P</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="Western-Union">
                                                    <label for="Western-Union" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Western Union</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="Money-Gram">
                                                    <label for="Money-Gram" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Money Gram</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="PayPal">
                                                    <label for="PayPal" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">PayPal</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="Other">
                                                    <label for="Other" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Other</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="formgroup-area mb-0 align-items-start">
                                        <div class="formgroup-area-left mt-3">
                                            <label class="pro-form-label m-0">Language:</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <ul class="markets-distrubution-list">
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="English">
                                                    <label for="English" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">English</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="Chinese">
                                                    <label for="Chinese" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Chinese</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="Spanish">
                                                    <label for="Spanish" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Spanish</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="Japanese">
                                                    <label for="Japanese" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Japanese</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="Portuguese">
                                                    <label for="Portuguese" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Portuguese</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="German">
                                                    <label for="German" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">German</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="Middle-East">
                                                    <label for="Middle-East" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Middle East</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="Worldwide">
                                                    <label for="Worldwide" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Worldwide</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end max-width-800px mt-5">
                                <button class="form-submit-btn" type="submit">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </main>
        
<?php 
include './includes/footer.php'; 
?>
