<?php 
    $company_introduction_css = "./assets/css/company-introduction.css";
    include './includes/header.php'; 
?>



    <main class="main">
        <section class="company-introduction-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="section-top">
                            <h1 class="main-title mb-0">Other - <span class="fw-normal">Create</span></h1>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="company-introduction-box">
                            <form action="" method="post">
                                <div class="formgroup-area align-items-center mb-26px">
                                    <div class="formgroup-area-left">
                                        <label class="pro-form-label m-0">Title <span class="primary-color">*</span></label>
                                    </div>
                                    <div class="formgroup-area-right">
                                        <input class="dash-form-input" type="text" name="" id="" placeholder="">
                                    </div>
                                </div>
                                <div class="formgroup-area align-items-center mb-26px">
                                    <div class="formgroup-area-left">
                                        <label class="pro-form-label m-0">Label</label>
                                    </div>
                                    <div class="formgroup-area-right">
                                        <input class="dash-form-input" type="text" name="" id="" placeholder="">
                                    </div>
                                </div>
                                <div class="formgroup-area mb-26px">
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
                                <div class="formgroup-area">
                                        <div class="formgroup-area-left">
                                            <label class="pro-form-label m-0">Location of Registration</label>
                                        </div>
                                        <div class="formgroup-area-right">
                                            <select class="form-select dash-form-input" aria-label="Default select example">
                                                <option selected="">Select Status</option>
                                                <option value="1">Featured</option>
                                                <option value="2">Not Featured</option>
                                            </select>
                                        </div>
                                    </div>
                                <div class="formgroup-area mb-26px">
                                    <div class="formgroup-area-left">
                                        <label class="pro-form-label m-0">Detailed Company Introduction:</label>
                                    </div>
                                    <div class="formgroup-area-right">
                                        <textarea id="editor"></textarea>
                                        <p class="sm-text mt-3">(Max 40000 Character Limit)</p>
                                    </div>
                                </div>
                                <div class="formgroup-area">
                                    <div class="formgroup-area-left"></div>
                                    <div class="formgroup-area-right text-end">
                                        <button class="form-submit-btn" type="submit">Submit</button>
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
$text_editor_js = "https://cdn.ckeditor.com/4.22.1/full/ckeditor.js";
$other_add_js = "./assets/js/other-add.js";
include './includes/footer.php'; 
?>


