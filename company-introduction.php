<?php 
    include './includes/header.php'; 
?>

<link rel="stylesheet" href="./assets/css/company-introduction.css">



    <main class="main">
        <section class="company-introduction-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="section-top">
                            <h1 class="main-title mb-0">Manage <span class="fw-normal">Company</span></h1>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="company-introduction-box">
                            <form action="" method="post">
                                <div class="formgroup-area">
                                    <div class="formgroup-area-left">
                                        <label class="pro-form-label m-0">Company Logo:</label>
                                    </div>
                                    <div class="formgroup-area-right">
                                        <div class="company-logo-img">
                                            <img class="img-fluid " id="company-logo-img" src="" alt="">
                                        </div>
                                        <div class="img-btn-group">
                                            <div class="">
                                                <input class="d-none" type="file" name="" id="company-logo" >
                                                <label for="company-logo" class="comp-browse-btn">
                                                    Browser
                                                </label>
                                            </div>
                                            <div class="">
                                                <button type="button"  class="comp-browse-btn logo-remove-btn">
                                                    Remove
                                                </button>
                                            </div>
                                        </div>
                                        <p class="note-text">200KB Max. JPEG, PNG formal only. Suggested photo width and height: 200*200px</p>
                                    </div>
                                </div>
                                <div class="formgroup-area">
                                    <div class="formgroup-area-left">
                                        <label class="pro-form-label m-0">Company Banner:</label>
                                    </div>
                                    <div class="formgroup-area-right">
                                        <div class="company-bnner-img">
                                            <img class="img-fluid" id="company-bnner-img" src="" alt="">
                                        </div>
                                        <div class="img-btn-group">
                                            <div class="">
                                                <input class="d-none" type="file" name="" id="company-bnner" >
                                                <label for="company-bnner" class="comp-browse-btn">
                                                    Browser
                                                </label>
                                            </div>
                                            <div class="">
                                                <button type="button"  class="comp-browse-btn logo-remove-btn">
                                                    Remove
                                                </button>
                                            </div>
                                        </div>
                                        <p class="note-text">500KB Max. JPEG, PNG formal only. Suggested photo width and height: 1300*400px</p>
                                    </div>
                                </div>
                                <div class="formgroup-area pt-4">
                                    <div class="formgroup-area-left">
                                        <label class="pro-form-label m-0">Detailed Company Introduction:</label>
                                    </div>
                                    <div class="formgroup-area-right">
                                        <textarea id="editor"></textarea>
                                        <p class="sm-text mt-3">(Max 40000 Character Limit)</p>
                                    </div>
                                </div>
                                <div class="formgroup-area">
                                    <div class="formgroup-area-left">
                                        <label class="pro-form-label m-0">Company Brochure:</label>
                                    </div>
                                    <div class="formgroup-area-right">
                                        <div class="comp-broucher-inputbox ">
                                            <input type="file" class="comp-boucher-file" maxlength="5" multiple name="" id="" value="Choose Files">
                                            <button class="form-submit-btn" type="submit">Submit</button>
                                        </div>
                                        <p class="sm-text mt-3">JPG, PNG, PDF file allowed, Maximum 5 file uploads.</p>
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

<script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
<script src="./assets/js/company-introduction.js"></script>

