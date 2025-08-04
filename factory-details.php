<?php 
    $add_new_product_css = "./assets/css/add-new-product.css";
    $company_profile_css = "./assets/css/company-profile.css";
    include './includes/header.php'; 
?>



    <main class="main">
        <section class="company-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="section-top">
                            <h1 class="main-title mb-0">Manage <span class="fw-normal">Company</span></h1>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="add-product-list-main d-block">
                            <form action="" method="post">
                                <div class="add-new-product-box">
                                    <h5 class="sm-title fw-bold mb-4">Factory Details</h5>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Factory Location:</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text" name="" id="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="formgroup-area mb-26px">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Factory Size:</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <select class="form-select dash-form-input" aria-label="Default select example">
                                                <option selected>-- Please Select --</option>
                                                <option value="1">Below 1,000 square meters</option>
                                                <option value="2">1,000-3,000 square meters</option>
                                                <option value="3">3,000-5,000 square meters</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="formgroup-area mb-26px">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Main Markets and Distribution:</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <ul class="pro-check-list">
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="markets-distribution-1">
                                                    <label for="markets-distribution-1" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">OEM Service</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="markets-distribution-2">
                                                    <label for="markets-distribution-2" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Design Service</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="markets-distribution-3">
                                                    <label for="markets-distribution-3" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Buyer Label</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">No. of QC Staff:</label>
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
                                            <label class="pro-form-label m-0">No. of R & D Staff:</label>
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
                                            <label class="pro-form-label m-0">No. of Production Lines:</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <select class="form-select dash-form-input" aria-label="Default select example">
                                                <option selected>1</option>
                                                <option value="1">2</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Annual Output Value:</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <select class="form-select dash-form-input" aria-label="Default select example">
                                                <option selected>-- please select --</option>
                                                <option value="1">Below US$1 Million</option>
                                                <option value="2">US$1 Million - US$2.5 Million</option>
                                                <option value="3">US$2.5 Million - US$5 Million</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Average Lead Time: (Days)</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text" name="" id="" placeholder="Please enter the average prodution time. Numbers only.">
                                        </div>
                                    </div>
                                </div>
                                <div class="add-new-product-box mb-0">
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left"></div>
                                        <div class="formgroup-area-right">
                                            <button class="form-submit-btn" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
        
<?php 
include './includes/footer.php'; 
?>
