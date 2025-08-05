<?php 
    include './includes/header.php'; 
?>

<link rel="stylesheet" href="./assets/css/change-password.css">

    <main class="main">
        <section class="change-password-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="section-top">
                            <h1 class="main-title mb-0">Account <span class=" fw-normal">Inquiry CC Setting</span></h1>
                        </div>
                    </div>
                    <div class="col-12">
                        <form action="">
                            <div class="inquiry-cc-box">
                                <div class="d-flex justify-content-start align-items-center gap-3">
                                    <i class="fa-solid fa-envelope mail-icon"></i>
                                    <p class="sm-para">Your email address is not displayed in your profile on eWorldtrade.</p>
                                </div>
                                <hr class="top-bar">
                                <div class="formgroup-area">
                                    <label class="inquiry-cc-label">Also CC: iqquiries to email(s): <span>*</span></label>
                                    <input class="dash-form-input" type="email" name="email" id="" placeholder="Email Address">
                                </div>
                                <p class="sm-para">Separate multiple emails by comma</p>
                                <hr class="btm-bar">
                                <button class="form-submit-btn m-0" type="submit">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
        
<?php include './includes/footer.php'; ?>