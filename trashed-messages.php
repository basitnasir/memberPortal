<?php 
    include './includes/header.php'; 
?>

<link rel="stylesheet" href="./assets/css/inbox-inquiries.css">
<link rel="stylesheet" href="./assets/css/country-flag.css">

    <main class="main">
        <section class="inquiries-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="section-top">
                            <h1 class="main-title mb-0">Trashed <span class="fw-normal">Messages</span></h1>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="inquiries-table-area">
                            <div class="inquiries-table-top">
                                <div class="inquiries-checkbox-top-left">
                                    <div class="inquiries-main-checkbox">
                                        <input class="inquiries-checkbox" type="checkbox" name="" id="inquiries-main-check">
                                        <label class="inquiries-checkbox-label" for="inquiries-main-check">
                                            <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                        </label>
                                    </div>
                                    <i class="fa-solid fa-chevron-down arrow-down"></i>
                                </div>
                                <div class="inquiries-checkbox-top-right">
                                    <form action="">
                                        <div class="inquiries-filter-box">
                                            <select class="form-select inquiries-filter-select" aria-label="Default select example">
                                                <option selected>Bulk Action</option>
                                                <option value="1">Bulk Action One</option>
                                                <option value="2">Bulk Action Two</option>
                                                <option value="3">Bulk Action Three</option>
                                            </select>
                                            <button class="inquiries-filter-btn">Apply</button>
                                        </div>
                                    </form>
                                    <form action="">
                                        <div class="inquiries-filter-box">
                                            <select class="form-select inquiries-filter-select" aria-label="Default select example">
                                                <option selected>Filter</option>
                                                <option value="1">Filter One</option>
                                                <option value="2">Filter Two</option>
                                                <option value="3">Filter Three</option>
                                            </select>
                                            <button class="inquiries-filter-btn">Go</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <table class="inquiries-table">
                                <tbody>
                                    <tr>
                                        <td width="3.5%">
                                            <input class="inquiries-checkbox" checked type="checkbox" name="" id="inquiries-check-1">
                                            <label class="inquiries-checkbox-label" for="inquiries-check-1">
                                                <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                            </label>
                                        </td>
                                        <td width="2%">
                                            <i class="bi bi-star-fill star-icon yellow"></i>
                                        </td>
                                        <td width="20%">
                                            <strong class="dark-gray">It's a test buyofffer</strong>
                                        </td>
                                        <td width="42%">
                                            Marine Hardware Manufacturer  
                                        </td>
                                        <td>
                                            Sender: Simon Gill 
                                        </td>
                                        <td>
                                            <span class="status read">Read</span> 
                                        </td>
                                        <td class="text-web-center">
                                            <span class="table-country-flag flg-1"></span> 
                                        </td>
                                        <td class="text-end">
                                            07-Apr-25
                                        </td>
                                        <td class="text-end">
                                            <a class="d-inline-block" href="#">
                                                <img class="img-fluid" src="./assets/images/share-icon.svg" width="24.71" height="20" alt="">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="3.5%">
                                            <input class="inquiries-checkbox" checked type="checkbox" name="" id="inquiries-check-2">
                                            <label class="inquiries-checkbox-label" for="inquiries-check-2">
                                                <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                            </label>
                                        </td>
                                        <td width="2%">
                                            <i class="bi bi-star-fill star-icon yellow"></i>
                                        </td>
                                        <td width="20%">
                                            <strong class="dark-gray">Inquiry Buyer And Importer...</strong>
                                        </td>
                                        <td width="42%">
                                            Hardware Manufacturer  
                                        </td>
                                        <td>
                                            Sender: Simon Gill 
                                        </td>
                                        <td>
                                            <span class="status read">Read</span> 
                                        </td>
                                        <td class="text-web-center">
                                            <span class="table-country-flag flg-2"></span> 
                                        </td>
                                        <td class="text-end">
                                            07-Apr-25
                                        </td>
                                        <td class="text-end">
                                            <a class="d-inline-block" href="#">
                                                <img class="img-fluid" src="./assets/images/share-icon.svg" width="24.71" height="20" alt="">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="3.5%">
                                            <input class="inquiries-checkbox" checked type="checkbox" name="" id="inquiries-check-3">
                                            <label class="inquiries-checkbox-label" for="inquiries-check-3">
                                                <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                            </label>
                                        </td>
                                        <td width="2%">
                                            <i class="bi bi-star-fill star-icon yellow"></i>
                                        </td>
                                        <td width="20%">
                                            <strong class="dark-gray">Machine Parts Inquiry</strong>
                                        </td>
                                        <td width="42%">
                                            Manufacturer 
                                        </td>
                                        <td>
                                            Sender: Simon Gill 
                                        </td>
                                        <td>
                                            <span class="status read">Read</span> 
                                        </td>
                                        <td class="text-web-center">
                                            <span class="table-country-flag flg-3"></span> 
                                        </td>
                                        <td class="text-end">
                                            07-Apr-25
                                        </td>
                                        <td class="text-end">
                                            <a class="d-inline-block" href="#">
                                                <img class="img-fluid" src="./assets/images/share-icon.svg" width="24.71" height="20" alt="">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="3.5%">
                                            <input class="inquiries-checkbox"  type="checkbox" name="" id="inquiries-check-4">
                                            <label class="inquiries-checkbox-label" for="inquiries-check-4">
                                                <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                            </label>
                                        </td>
                                        <td width="2%">
                                            <i class="bi bi-star-fill star-icon"></i>
                                        </td>
                                        <td width="20%">
                                            <strong class="dark-gray">Parts Inquiry Buyer And  </strong>
                                        </td>
                                        <td width="42%">
                                            AISI316 Stainless Steel 
                                        </td>
                                        <td>
                                            Sender: Simon Gill 
                                        </td>
                                        <td>
                                            <span class="status unread">Unread</span> 
                                        </td>
                                        <td class="text-web-center">
                                            <span class="table-country-flag flg-4"></span> 
                                        </td>
                                        <td class="text-end">
                                            07-Apr-25
                                        </td>
                                        <td class="text-end">
                                            <a class="d-inline-block" href="#">
                                                <img class="img-fluid" src="./assets/images/share-icon.svg" width="24.71" height="20" alt="">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="3.5%">
                                            <input class="inquiries-checkbox"  type="checkbox" name="" id="inquiries-check-5">
                                            <label class="inquiries-checkbox-label" for="inquiries-check-5">
                                                <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                            </label>
                                        </td>
                                        <td width="2%">
                                            <i class="bi bi-star-fill star-icon"></i>
                                        </td>
                                        <td width="20%">
                                            <strong class="dark-gray">Inquiry Buyer And Importer...</strong>
                                        </td>
                                        <td width="42%">
                                            Information Product
                                        </td>
                                        <td>
                                            Sender: Simon Gill 
                                        </td>
                                        <td>
                                            <span class="status unread">Unread</span> 
                                        </td>
                                        <td class="text-web-center">
                                            <span class="table-country-flag flg-5"></span> 
                                        </td>
                                        <td class="text-end">
                                            07-Apr-25
                                        </td>
                                        <td class="text-end">
                                            <a class="d-inline-block" href="#">
                                                <img class="img-fluid" src="./assets/images/share-icon.svg" width="24.71" height="20" alt="">
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
        
<?php 
include './includes/footer.php'; 
?>

<script src="./assets/js/inbox-inquiries.js"></script>