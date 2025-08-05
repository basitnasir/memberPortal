<?php include './includes/header.php'; ?>

<link rel="stylesheet" href="./assets/css/add-new-product.css">
<link rel="stylesheet" href="./assets/css/company-profile.css">



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
                                    <h5 class="sm-title fw-bold mb-4">Basic Company Details</h5>
                                    <h5 class="sm-title mb-12px">Select category from the list below:<span class="primary-color">*</span></h5>
                                    <div class="product-category-list">
                                        <select class="form-select product-category-select" size="12" aria-label="Default select example">
                                            <option value="1">Manufacturer</option>
                                            <option value="2">Trading Company</option>
                                            <option value="3">Buying Company</option>
                                            <option value="4">Buying Company</option>
                                            <option value="5">Buying Office</option>
                                            <option value="6">Agent</option>
                                            <option value="7">Distributor/Wholesaler</option>
                                            <option value="8">Government Ministry/Bureau/</option>
                                            <option value="9">Commission</option>
                                            <option value="10">Association</option>
                                            <option value="11">Business Service (Transportation, Finance, Travel, Ads, etc)</option>
                                            <option value="12">Other</option>
                                        </select>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0"> Company Name</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text" name="" id="" placeholder="Ayala and Sutton Plc">
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0"> Brand Name</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text"  name="" id="" placeholder="Enter keywords separated by comma - e.g. &quot;car, bike&quot;" ">
                                        </div>
                                    </div>
                                </div>
                                <div class="add-new-product-box">
                                    <h5 class="sm-title fw-bold mb-3">Company Information</h5>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Location of Registration</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <select class="form-select dash-form-input" aria-label="Default select example">
                                                <option selected>-- Please Select --</option>
                                                <option value="1">China</option>
                                                <option value="2">Afghanistan</option>
                                                <option value="3">Åland Islands</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Registration Number</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text"  name="" id="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Phone Number</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text"  name="" id="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Mobile Number</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text"  name="" id="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Fax</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text"  name="" id="" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="add-new-product-box">
                                    <h5 class="sm-title fw-bold mb-3">Company Operational Address</h5>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Street Address</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text" name="" id="">
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">City</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text" name="" id="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">State</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text" name="" id="">
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Country</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <select class="form-select dash-form-input" aria-label="Default select example">
                                                <option selected>-- Please Select --</option>
                                                <option value="1">China</option>
                                                <option value="2">Afghanistan</option>
                                                <option value="3">Åland Islands</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Zip Code / Postal Code</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text" name="" id="">
                                        </div>
                                    </div>
                                    <div class="formgroup-area align-items-start">
                                        <div class="formgroup-area-left mt-3">
                                            <label class="pro-form-label m-0">Main Products (seperate by comma)</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <textarea class="dash-form-input" name="" id="" placeholder="Sed anim minus est"></textarea>
                                        </div>
                                    </div>
                                    <div class="formgroup-area align-items-start">
                                        <div class="formgroup-area-left mt-3">
                                            <label class="pro-form-label m-0">Other Products (seperate by comma)</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <textarea class="dash-form-input" name="" id="" placeholder="Sed anim minus est"></textarea>
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Year of Company Registered</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <select class="form-select dash-form-input" aria-label="Default select example">
                                                <option selected>-- Please Select --</option>
                                                <option value="1">1800</option>
                                                <option value="2">1801</option>
                                                <option value="3">1802</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Total No. Employees</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <select class="form-select dash-form-input" aria-label="Default select example">
                                                <option selected>Fewer than 5 people</option>
                                                <option value="1">5 - 10 People</option>
                                                <option value="2">11 - 50 People</option>
                                                <option value="3">51 - 100 People</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Website</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text" name="" id="">
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Company Advantages</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <input class="dash-form-input" type="text" name="" id="">
                                        </div>
                                    </div>
                                    <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Privacy Enforced <br> <small>(This option will hide your contact information)</small></label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <select class="form-select dash-form-input" aria-label="Default select example">
                                                <option selected>Yes</option>
                                                <option value="1">No</option>
                                            </select>
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
