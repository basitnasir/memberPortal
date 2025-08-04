<?php 
    $create_contact_css = "./assets/css/create-contact.css";
    include './includes/header.php'; 
?>



    <main class="main">
        <section class="create-contact-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="section-top">
                            <h1 class="main-title mb-0">Create <span class="fw-normal">Contact</span></h1>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="create-contact-box">
                            <h5 class="sm-title fw-bold mb-5">Contact Details</h5>
                            <div class="create-contact-form-main">
                                <div class="row">
                                    <div class="col-12 col-lg-9">
                                        <form action="">
                                            <div class="formgroup-area">
                                                <div class="formgroup-area-left">
                                                    <label class="pro-form-label m-0">Fullname <span class="primary-color">*</span></label>
                                                </div>
                                                <div class="formgroup-area-right flex-group">
                                                    <input class="dash-form-input" type="text" name="" id="" placeholder="First Name">
                                                    <input class="dash-form-input" type="text" name="" id="" placeholder="Last Name">
                                                </div>
                                            </div>    
                                            <div class="formgroup-area">
                                                <div class="formgroup-area-left">
                                                    <label class="pro-form-label m-0">Email <span class="primary-color">*</span></label>
                                                </div>
                                                <div class="formgroup-area-right">
                                                    <input class="dash-form-input" type="text" name="" id="" placeholder="">
                                                </div>
                                            </div>    
                                            <div class="formgroup-area">
                                                <div class="formgroup-area-left">
                                                    <label class="pro-form-label m-0">Company Name:</label>
                                                </div>
                                                <div class="formgroup-area-right">
                                                    <input class="dash-form-input" type="text" name="" id="" placeholder="">
                                                </div>
                                            </div>    
                                            <div class="formgroup-area">
                                                <div class="formgroup-area-left">
                                                    <label class="pro-form-label m-0">Designation:</label>
                                                </div>
                                                <div class="formgroup-area-right">
                                                    <input class="dash-form-input" type="text" name="" id="" placeholder="">
                                                </div>
                                            </div>    
                                            <div class="formgroup-area">
                                                <div class="formgroup-area-left">
                                                    <label class="pro-form-label m-0">Phone:</label>
                                                </div>
                                                <div class="formgroup-area-right">
                                                    <input class="dash-form-input phoneNumberTelInput" type="text" name="" id="" placeholder="">
                                                </div>
                                            </div>   
                                            <div class="formgroup-area mb-26px">
                                                <div class="formgroup-area-left ">
                                                    <label class="pro-form-label m-0">Mobile Number:</label>
                                                </div>
                                                <div class="formgroup-area-right">
                                                     <input class="dash-form-input phoneNumberTelInput" type="text" name="" id="" placeholder="">
                                                </div>
                                            </div> 
                                            <div class="formgroup-area align-items-start mb-0">
                                                <div class="formgroup-area-left mt-3">
                                                    <label class="pro-form-label m-0">Select Group:</label>
                                                </div>
                                                <div class="formgroup-area-right">
                                                    <select class="form-select dash-form-input" aria-label="Default select example">
                                                        <option selected>-- Please Select --</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                    <a href=#" class="pro-form-label primary-color" >Manage Group</a>
                                                </div>
                                            </div>   
                                            <div class="formgroup-area mb-26px">
                                                <div class="formgroup-area-left">
                                                    <label class="pro-form-label m-0">Select Country</label>
                                                </div>
                                                <div class="formgroup-area-right">
                                                    <select class="form-select dash-form-input" aria-label="Default select example">
                                                        <option selected>-- Please Select --</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>   
                                            <div class="formgroup-area align-items-start mb-26px">
                                                <div class="formgroup-area-left mt-3">
                                                    <label class="pro-form-label m-0">Address</label>
                                                </div>
                                                <div class="formgroup-area-right">
                                                    <input class="dash-form-input" type="text" name="" id="" placeholder="Street">
                                                    <div class="address-area">
                                                        <input class="dash-form-input" type="text" name="" id="" placeholder="City">
                                                        <input class="dash-form-input" type="text" name="" id="" placeholder="State">
                                                        <input class="dash-form-input" type="text" name="" id="" placeholder="Zip Code">
                                                    </div>
                                                </div>
                                            </div> 
                                            <button class="form-submit-btn" type="submit">Save Contact</button>
                                        </form>  
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
$input_mask_js = "./assets/js/input-mask.js";
include './includes/footer.php'; 
?>


