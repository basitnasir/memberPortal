<?php include './includes/header.php'; ?>

<link rel="stylesheet" href="./assets/css/change-password.css">

    <main class="main">
        <section class="change-password-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="section-top">
                            <h1 class="main-title mb-0">Change <span class=" fw-normal">Password</span></h1>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5">
                        <form action="">
                            <div class="change-password-box">
                                <div class="formgroup-area">
                                    <label class="form-label">Current Password</label>
                                    <input class="dash-form-input" type="password" name="" id="current-password" placeholder="Current Password">
                                </div>
                                <div class="formgroup-area">
                                    <label class="form-label">Password</label>
                                    <input class="dash-form-input" type="password" name="" id="Password" placeholder="Password">
                                </div>
                                <div class="formgroup-area">
                                    <label class="form-label">Password Confirmation</label>
                                    <input class="dash-form-input" type="password" name="" id="password-confirmation" placeholder="Password Confirmation">
                                </div>
                                <button class="form-submit-btn" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
        
<?php include './includes/footer.php'; ?>