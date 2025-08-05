<?php 
    include './includes/header.php'; 
?>

<link rel="stylesheet" href="./assets/css/escrow-account-create.css">

    <main class="main">
        <section class="escrow-account-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="section-top">
                            <h1 class="main-title mb-0">Create <span class=" fw-normal">Escrow Account</span></h1>
                        </div>
                    </div>
                    <div class="col-12">
                        <form action="">
                            <div class="escrow-account-box">
                                <div class="formgroup-area">
                                    <label class="form-label m-0">First Name:</label>
                                    <input class="dash-form-input" type="text" name="" id="">
                                </div>
                                <div class="formgroup-area">
                                    <label class="form-label m-0">Last Name:</label>
                                    <input class="dash-form-input" type="text" name="" id="">
                                </div>
                                <div class="formgroup-area">
                                    <label class="form-label m-0">Email:</label>
                                    <input class="dash-form-input" type="text" name="" id="">
                                </div>
                                <div class="formgroup-area">
                                    <label class="form-label m-0">Phone Number:</label>
                                    <input class="dash-form-input" type="text" name="" id="">
                                </div>
                                <div class="formgroup-area">
                                    <label class="form-label m-0">Address:</label>
                                    <textarea class="dash-form-input" name="" id=""></textarea>
                                </div>
                                <div class="formgroup-area">
                                    <label class="form-label m-0">Country *</label>
                                    <select class="form-select dash-form-input" aria-label="Default select example">
                                        <option option selected>Agriculture</option>
                                        <option value="1">Agriculture One</option>
                                        <option value="2">Agriculture Two</option>
                                        <option value="3">Agriculture Three</option>
                                    </select>
                                </div>
                                <div class="formgroup-area">
                                    <label class="form-label m-0">State</label>
                                    <input class="dash-form-input" type="text" name="" id="">
                                </div>
                                <div class="formgroup-area">
                                    <label class="form-label m-0">City *</label>
                                    <input class="dash-form-input" type="text" name="" id="">
                                </div>
                                <button class="form-submit-btn" type="submit">Create Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
        
<?php include './includes/footer.php'; ?>