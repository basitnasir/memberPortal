<?php 
    $dashboard_css = "./assets/css/profile.css";
    include './includes/header.php'; 
?>

    <main class="main">
        <section class="profile-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="section-top">
                            <h1 class="main-title mb-0">Manage <span class=" fw-normal">Profile</span></h1>
                        </div>
                    </div>
                    <div class="col-12">
                        <form action="">
                            <div class="row row-gutterX-25px">
                                <div class="col-12 col-lg-6">
                                    <div class="profile-fields-box">
                                        <h5 class="sm-title fw-bold">Basic Information</h5>
                                        <div class="formgroup-area">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-5">
                                                    <label class="form-label m-0">Full Name</label>
                                                </div>
                                                <div class="col-12 col-lg-7">
                                                    <input class="dash-form-input" type="text" name="" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="formgroup-area">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-5">
                                                    <label class="form-label m-0">Industry</label>
                                                </div>
                                                <div class="col-12 col-lg-7">
                                                    <select class="form-select dash-form-input" aria-label="Default select example">
                                                        <option option selected>Agriculture</option>
                                                        <option value="1">Agriculture One</option>
                                                        <option value="2">Agriculture Two</option>
                                                        <option value="3">Agriculture Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="formgroup-area">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-5">
                                                    <label class="form-label m-0">Products</label>
                                                </div>
                                                <div class="col-12 col-lg-7">
                                                    <input class="dash-form-input" type="text" name="" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="formgroup-area">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-5">
                                                    <label class="form-label m-0">Gender</label>
                                                </div>
                                                <div class="col-12 col-lg-7">
                                                    <select class="form-select dash-form-input" aria-label="Default select example">
                                                        <option option disabled selected>Select Gender</option>
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="formgroup-area">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-5">
                                                    <label class="form-label m-0">Address</label>
                                                </div>
                                                <div class="col-12 col-lg-7">
                                                    <input class="dash-form-input" type="text" name="" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="formgroup-area">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-5">
                                                    <label class="form-label m-0">City</label>
                                                </div>
                                                <div class="col-12 col-lg-7">
                                                    <input class="dash-form-input" type="text" name="" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="formgroup-area">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-5">
                                                    <label class="form-label m-0">Province / State</label>
                                                </div>
                                                <div class="col-12 col-lg-7">
                                                    <input class="dash-form-input" type="text" name="" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="formgroup-area">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-5">
                                                    <label class="form-label m-0">Country</label>
                                                </div>
                                                <div class="col-12 col-lg-7">
                                                    <select class="form-select dash-form-input" aria-label="Default select example">
                                                        <option option selected>Pakistan</option>
                                                        <option value="1">Example</option>
                                                        <option value="2">Example 1</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="formgroup-area">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-5">
                                                    <label class="form-label m-0">Zip Code / Postal Code</label>
                                                </div>
                                                <div class="col-12 col-lg-7">
                                                    <input class="dash-form-input" type="text" name="" id="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="profile-fields-box">
                                        <h5 class="sm-title fw-bold">Account Information</h5>
                                        <div class="formgroup-area">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-5">
                                                    <label class="form-label m-0">I am a</label>
                                                </div>
                                                <div class="col-12 col-lg-7">
                                                    <input class="dash-form-input" type="text" name="" value="Buyer" id="" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="formgroup-area">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-5">
                                                    <label class="form-label m-0">Member Id</label>
                                                </div>
                                                <div class="col-12 col-lg-7">
                                                    <input class="dash-form-input" type="text" name="" value="2322212" id="" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="formgroup-area">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-5">
                                                    <label class="form-label m-0">Package Name</label>
                                                </div>
                                                <div class="col-12 col-lg-7">
                                                    <input class="dash-form-input" type="text" name="" value="Gold" id="" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="formgroup-area">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-5">
                                                    <label class="form-label m-0">Expiry Date</label>
                                                </div>
                                                <div class="col-12 col-lg-7">
                                                    <input class="dash-form-input" type="text" name="" value="" id="" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="formgroup-area">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-5">
                                                    <label class="form-label m-0">Change Password</label>
                                                </div>
                                                <div class="col-12 col-lg-7">
                                                    <a href="#" class="d-block dash-form-input">Click Here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="sm-title fw-bold">Preferred Instant Messenger ID(s)</h5>
                                        <div class="formgroup-area">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-5">
                                                    <label class="form-label m-0">QQ ID</label>
                                                </div>
                                                <div class="col-12 col-lg-7">
                                                    <input class="dash-form-input" type="text" name="" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="formgroup-area">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-5">
                                                    <label class="form-label m-0">Skype</label>
                                                </div>
                                                <div class="col-12 col-lg-7">
                                                    <input class="dash-form-input" type="text" name="" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="formgroup-area">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-5">
                                                    <label class="form-label m-0">Wechat ID</label>
                                                </div>
                                                <div class="col-12 col-lg-7">
                                                    <input class="dash-form-input" type="text" name="" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="formgroup-area">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-5">
                                                    <label class="form-label m-0">Whatsapp</label>
                                                </div>
                                                <div class="col-12 col-lg-7">
                                                    <input class="dash-form-input" type="text" name="" id="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-btn-area">
                                        <button class="profile-form-btn" type="submit">Update</button>
                                        <p class="para dark-gray opacity-75">Once submitted, no further editing is allowed within one working day.</p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
        
<?php include './includes/footer.php'; ?>