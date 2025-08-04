<?php 
    $add_new_product_css = "./assets/css/add-new-product.css";
    $select2_css = "https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css";
    include './includes/header.php'; 
?>



    <main class="main">
        <section class="add-new-product-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="section-top">
                            <h1 class="main-title mb-0">Display <span class="fw-normal">New Product</span></h1>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="add-product-list-main">
                            <div class="add-product-list-left">
                                <ul class="add-product-list">
                                    <li class="add-product-item active">
                                        <a href="javascript:void(0);" class="add-product-link">
                                            Search Category
                                        </a>
                                    </li>
                                    <li class="add-product-item">
                                        <a href="javascript:void(0);" class="add-product-link">
                                            Basic Information
                                        </a>
                                    </li>
                                    <li class="add-product-item">
                                        <a href="javascript:void(0);" class="add-product-link">
                                            Product Details
                                        </a>
                                    </li>
                                    <li class="add-product-item">
                                        <a href="javascript:void(0);" class="add-product-link">
                                            Trade Information
                                        </a>
                                    </li>
                                    <li class="add-product-item">
                                        <a href="javascript:void(0);" class="add-product-link">
                                            Logistics Information
                                        </a>
                                    </li>
                                    <li class="add-product-item">
                                        <a href="javascript:void(0);" class="add-product-link">
                                            Product Detail Information
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="add-product-list-right">
                                <div class="add-new-product-box" id="search-category">
                                    <h5 class="sm-title fw-bold">Search Category</h5>
                                    <form action="">
                                        <div class="srch-product-form-group">
                                            <input class="new-product-field" type="text" name="" placeholder="Enter Industry Keywords:e.g. laptop" id="">
                                            <button class="new-product-srch-btn" type="submit">
                                                Search
                                            </button>
                                        </div>
                                    </form>
                                    <h5 class="sm-title mb-12px">Select category from the list below:<span class="primary-color">*</span></h5>
                                    <div class="product-category-list">
                                        <select class="form-select product-category-select" size="20" aria-label="Default select example">
                                            <option value="1">Agriculture</option>
                                            <option value="2">Apparel</option>
                                            <option value="3">Automobiles  & Motorcycles</option>
                                            <option value="4">Beauty & Personal Care</option>
                                            <option value="5">Business Services</option>
                                            <option value="6">Chemicals</option>
                                            <option value="7">Computer Hardware & Software</option>
                                            <option value="8">Construction & Real Estate</option>
                                            <option value="9">Consumer Electronic</option>
                                            <option value="10">CVD</option>
                                            <option value="11">Diamond</option>
                                            <option value="12">Electrical Equipment Supplies</option>
                                            <option value="13">Energy</option>
                                            <option value="14">Environment</option>
                                            <option value="15">Fashion Accessories</option>
                                            <option value="16">Fish & Aquarium</option>
                                            <option value="17">Food & Beverage</option>
                                            <option value="18">Furniture</option>
                                            <option value="19">Gifts & Crafts</option>
                                            <option value="20">Hardware</option>
                                            <option value="21">Agriculture</option>
                                            <option value="22">Apparel</option>
                                            <option value="23">Automobiles  & Motorcycles</option>
                                            <option value="24">Beauty & Personal Care</option>
                                            <option value="25">Business Services</option>
                                            <option value="26">Chemicals</option>
                                            <option value="27">Computer Hardware & Software</option>
                                            <option value="28">Construction & Real Estate</option>
                                            <option value="29">Consumer Electronic</option>
                                            <option value="30">CVD</option>
                                            <option value="31">Diamond</option>
                                            <option value="32">Electrical Equipment Supplies</option>
                                            <option value="33">Energy</option>
                                            <option value="34">Environment</option>
                                            <option value="35">Fashion Accessories</option>
                                            <option value="36">Fish & Aquarium</option>
                                            <option value="37">Food & Beverage</option>
                                            <option value="38">Furniture</option>
                                            <option value="39">Gifts & Crafts</option>
                                            <option value="40">Hardware</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="add-new-product-box" id="basic-information">
                                    <h5 class="sm-title fw-bold mb-2">Basic Information</h5>
                                    <p class="sm-text mb-12px">Complete product details help your listing gain more exposure and visibility to potential buyers.</p>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0"> Product Name *</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text" name="" id="">
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0"> Product Keyword *</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text"  name="" id="" placeholder="Enter keywords separated by comma - e.g. &quot;car, bike&quot;" ">
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Product Group</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <select class="form-select dash-form-input mb-12px  " aria-label="Default select example">
                                                <option selected>-- Please Select --</option>
                                                <option value="1">Select One</option>
                                                <option value="2">Select Two</option>
                                                <option value="3">Select Three</option>
                                            </select>
                                            <p class="sm-text">Grouping your products makes it easier for buyers to find them. <a href="#" class="primary-color">Manage Group</a></p>
                                        </div>
                                    </div>
                                    <div class="formgroup-area align-items-start">
                                        <div class="formgroup-area-left mt-3">
                                            <label class="pro-form-label m-0">Product Photo *</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <img class="img-fluid product-img" src="" alt="">
                                            <div class="product-img-upload-btn d-flex justify-content-start align-items-center gap-3 mt-4 mb-12px">
                                                <input class="d-none" type="file" name="" id="product-img-upload">
                                                <label for="product-img-upload" class="upload-btn choose-file">
                                                    Browse 
                                                </label>
                                                <input type="button" value="Remove" class="remove-btn choose-file">
                                            </div>
                                            <p class="upload-error text-danger mt-2 mb-2 fs-4"></p>
                                            <p class="sm-text">The maximum size for a single image is 3MB. The following formats are supported: jpeg, jpg, png. Use as many pictures from as many angles as necessary to properly display your product. We suggest your images be less than 1000px*1000px with a clear subject to improve buyer satisfaction.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-new-product-box" id="product-details">
                                    <h5 class="sm-title fw-bold mb-2">Product Details</h5>
                                    <p class="sm-text mb-12px">Complete product details help your listing gain more exposure and visibility to potential buyers.</p>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Model Number</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text" name="" id="">
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Brand Name</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text" name="" id="" placeholder="Enter Keyword separated by comma - e.g. “car, bike”">
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Product Material</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text" name="" id="">
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Product Brochure</label>
                                        </div>
                                        <div class="formgroup-area-right d-flex justify-content-start align-items-center gap-4">
                                            <input class="d-none" type="file" name="" id="product-brochure">
                                            <label class="choose-file" for="product-brochure">
                                                Choose File
                                            </label>
                                            <p class="sm-text">The following formats are supported: jpeg, jpg, png, pdf. docs.</p>
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Place of Origin</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <select class="js-select2 dash-form-input">
                                                <option>Alabama</option>
                                                <option>Alaska</option>
                                                <option>Arizona</option>
                                                <option>Arkansas</option>
                                                <option>California</option>
                                                <option>Colorado</option>
                                                <option>Connecticut</option>
                                                <option>Delaware</option>
                                                <option>Florida</option>
                                                <option>Georgia</option>
                                                <option>Hawaii</option>
                                                <option>Idaho</option>
                                                <option>Illinois</option>
                                                <option>Indiana</option>
                                                <option>Iowa</option>
                                                <option>Kansas</option>
                                                <option>Kentucky</option>
                                                <option>Louisiana</option>
                                                <option>Maine</option>
                                                <option>Maryland</option>
                                                <option>Massachusetts</option>
                                                <option>Michigan</option>
                                                <option>Minnesota</option>
                                                <option>Mississippi</option>
                                                <option>Missouri</option>
                                                <option>Montana</option>
                                                <option>Nebraska</option>
                                                <option>Nevada</option>
                                                <option>New Hampshire</option>
                                                <option>New Jersey</option>
                                                <option>New Mexico</option>
                                                <option>New York</option>
                                                <option>North Carolina</option>
                                                <option>North Dakota</option>
                                                <option>Ohio</option>
                                                <option>Oklahoma</option>
                                                <option>Oregon</option>
                                                <option>Pennsylvania</option>
                                                <option>Rhode Island</option>
                                                <option>South Carolina</option>
                                                <option>South Dakota</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Utah</option>
                                                <option>Vermont</option>
                                                <option>Virginia</option>
                                                <option>Washington</option>
                                                <option>West Virginia</option>
                                                <option>Wisconsin</option>
                                                <option>Wyoming</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="formgroup-area align-items-start">
                                        <div class="formgroup-area-left mt-3">
                                            <label class="pro-form-label m-0">More Details</label>
                                        </div>
                                        <div class="formgroup-area-right ">
                                            <div class="fields-container">
                                                <div class="flex-group mb-4 position-relative">
                                                    <input class="dash-form-input" type="text" name="attribute[]" placeholder="Attribute - e.g Color">
                                                    <input class="dash-form-input" type="text" name="value[]" placeholder="Value - e.g Red">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left"></div>
                                        <div class="formgroup-area-right">
                                            <button class="add-more-btn" type="button" onclick="addMoreFields()">
                                                + Add more
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-new-product-box" id="trade-information">
                                    <h5 class="sm-title fw-bold mb-2">Trade Information</h5>
                                    <p class="sm-text mb-26px">Complete trade information helps buyers make better sourcing decisions.</p>
                                    <div class="formgroup-area mb-26px">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Set price</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <ul class="pro-check-list">
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="radio" name="set_price" id="set-price-1">
                                                    <label for="set-price-1" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">FOB Price</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="radio" name="set_price" id="set-price-2">
                                                    <label for="set-price-2" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Set price based on quantity</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="radio" name="set_price" id="set-price-3">
                                                    <label for="set-price-3" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">CIF</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">FOB Price</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <div class="fob-inner mb-12px">
                                                <div class="fob-inner-one">
                                                    <input class="dash-form-input" type="text" name="" id="" placeholder="USD">
                                                </div>
                                                <div class="fob-inner-two d-flex justify-content-start align-items-center gap-4">
                                                    <input class="dash-form-input" type="number" name="" id="" placeholder="Min">
                                                    <span class="sm-para">--</span>
                                                    <input class="dash-form-input" type="number" name="" id="" placeholder="Max">
                                                </div>
                                                <div class="fob-inner-three d-flex justify-content-start align-items-center gap-4">
                                                    <span class="sm-para">Per</span>
                                                    <select class="form-select dash-form-input" aria-label="Default select example">
                                                        <option selected>-- Select Unit --</option>
                                                        <option value="1">Select Unit One</option>
                                                        <option value="2">Select Unit Two</option>
                                                        <option value="3">Select Unit Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <p class="sm-text">Please include both the amount and type of unit</p>
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Min. Order Quantity</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text" name="" id="">
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Accepted Payment Method:</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <ul class="pro-check-list">
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="payment-method-1">
                                                    <label for="payment-method-1" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">T/T</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="payment-method-2">
                                                    <label for="payment-method-2" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">L/C</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="payment-method-3">
                                                    <label for="payment-method-3" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">D/A</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="payment-method-4">
                                                    <label for="payment-method-4" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">D/P</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="payment-method-5">
                                                    <label for="payment-method-5" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Western Union</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="payment-method-6">
                                                    <label for="payment-method-6" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Money Gram</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="payment-method-7">
                                                    <label for="payment-method-7" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Paypal</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="checkbox" name="" id="payment-method-8">
                                                    <label for="payment-method-8" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Other</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>       
                                <div class="add-new-product-box" id="logistics-information">
                                    <h5 class="sm-title fw-bold mb-2">Logistics Information</h5>
                                    <p class="sm-text mb-26px">Complete logistics information helps buyers make better sourcing decisions.</p>
                                    <div class="formgroup-area mb-29px">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Supply Type</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <ul class="pro-check-list">
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="radio" name="supply_type" id="supply-type-1">
                                                    <label for="supply-type-1" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">OEM Service</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="radio" name="supply_type" id="supply-type-2">
                                                    <label for="supply-type-2" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">In Stock</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Processing Time</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text" name="" id="">
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Port</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text" name="" id="">
                                        </div>
                                    </div>
                                    <div class="formgroup-area mb-26px">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Supply Ability</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <div class="tripple-flex-group">
                                                <input class="dash-form-input" type="text" name="" id="" placeholder="USD">
                                                <select class="form-select dash-form-input" aria-label="Default select example">
                                                    <option selected>-- Select Unit --</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                                <select class="form-select dash-form-input" aria-label="Default select example">
                                                    <option selected>-- Time --</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <p class="sm-text mt-4">Please include both the amount and type of unit</p>
                                        </div>
                                    </div>
                                    <div class="formgroup-area mb-26px">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Overseas Office</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <ul class="pro-check-list">
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="radio" name="overseas_office" id="overseas-office-yes">
                                                    <label for="overseas-office-yes" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">Yes</span>
                                                    </label>
                                                </li>
                                                <li class="pro-check-list-item">
                                                    <input class="pro-check-input d-none" type="radio" name="overseas_office" id="overseas-office-no">
                                                    <label for="overseas-office-no" class="pro-check-label pro-form-label">
                                                        <span class="check-square">
                                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                        </span>
                                                        <span class="pro-check-text">No</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="formgroup-area mb-0" id="overseas-office" style="display: none;">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Address</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text" name="" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="add-new-product-box" id="product-detail-information">
                                    <div class="formgroup-area align-items-start">
                                        <div class="formgroup-area-left mt-2">
                                            <h5 class="sm-title fw-bold">Product Detail Information</h5>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <textarea id="editor"></textarea>
                                            <p class="sm-text mt-3 mb-26px">(Max 40000 Character Limit)</p>
                                            <div class="pro-check-list-item mb-20px">
                                                <input class="pro-check-input d-none" type="checkbox" name="" id="display-product-showcase">
                                                <label for="display-product-showcase" class="pro-check-label pro-form-label">
                                                    <span class="check-square">
                                                        <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                    </span>
                                                    <span class="pro-check-text">Display this product on showcase</span>
                                                </label>
                                            </div>
                                            <div class="pro-check-list-item">
                                                <input class="pro-check-input d-none" type="checkbox" name="" id="listing-policies">
                                                <label for="listing-policies" class="pro-check-label pro-form-label">
                                                    <span class="check-square">
                                                        <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                                    </span>
                                                    <span class="pro-check-text">By clicking submit, you acknowledge that your information does not violate any <span class="primary-color">listing policies.</span></span>
                                                </label>
                                            </div>
                                            <div class="pro-btns-grp">
                                                <button class="pro-btn" type="submit">Post Product</button>
                                                <div class="d-flex justify-content-end align-items-center gap-4">
                                                    <button class="pro-btn" type="submit">Save & Continue</button>
                                                    <button class="pro-btn" type="submit">Save & Replicate</button>
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
        </section>
    </main>
        
<?php 
$select2_js = "https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js";
$text_editor_js = "https://cdn.ckeditor.com/4.22.1/full/ckeditor.js";
$add_new_product_js = "./assets/js/add-new-product.js";
include './includes/footer.php'; 
?>

<script>

</script>