<?php 
    include './includes/header.php'; 
?>

<link rel="stylesheet" href="./assets/css/manage-products.css">

    <main class="main">
        <section class="manage-products-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="section-top d-flex justify-content-between align-items-center">
                            <h1 class="main-title mb-0">Manage <span class="fw-normal">Products</span></h1>
                            <p class="sent-messages-count">Manage Products (Total 66)</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="manage-products-table-main">
                            <div class="manage-products-table-filter-area padd">
                                <div class="inquiries-filter-box">
                                    <select class="form-select inquiries-filter-select" aria-label="Default select example">
                                        <option selected>Bulk Action</option>
                                        <option value="1">Bulk Action One</option>
                                        <option value="2">Bulk Action Two</option>
                                        <option value="3">Bulk Action Three</option>
                                    </select>
                                    <button class="inquiries-filter-btn">Apply</button>
                                </div>
                                <form action="">
                                    <div class="manage-products-table-filter-area">
                                        <div class="inquiries-filter-box">
                                            <select class="form-select inquiries-filter-select" aria-label="Default select example">
                                                <option selected>Select Group</option>
                                                <option value="1">Select Group One</option>
                                                <option value="2">Select Group Two</option>
                                                <option value="3">Select Group Three</option>
                                            </select>
                                        </div>
                                        <div class="inquiries-filter-box">
                                            <input type="text" class="inquiries-filter-select form-control" placeholder="Search Product.." name="" id="">
                                            <button class="inquiries-filter-btn">Go</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <table class="manage-products-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <input class="inquiries-checkbox" type="checkbox" name="" id="inquiries-main-check">
                                            <label class="inquiries-checkbox-label" for="inquiries-main-check">
                                                <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                            </label>
                                        </th>
                                        <th class="text-center"></th>
                                        <th>Name</th>
                                        <th></th>
                                        <th class="text-center">Manage Gallery</th>
                                        <th class="text-center">Owner</th>
                                        <th class="text-center">Last Updated</th>
                                        <th class="text-center">Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td width="3.5%">
                                            <input class="inquiries-checkbox" checked type="checkbox" name="" id="manage-checkbox-1">
                                            <label class="inquiries-checkbox-label" for="manage-checkbox-1">
                                                <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <img class="img-fluid" src="./assets/images/manage-product-imgs/mng-pro-img-1.png" width="41" height="26" alt="">
                                        </td>
                                        <td>
                                            <a href="#" class="dark-gray fw-bold">HP laser printer</a>
                                        </td>
                                        <td>
                                            <label>
                                                Model No.
                                                <span>0011</span>
                                            </label> 
                                            <label>
                                                Group Name:
                                                <span>N/A</span>
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="text-center">
                                                <img class="img-fluid" src="./assets/images/gallery-dummy-img.png" width="27" height="22" alt="">
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            Simon Gill
                                        </td>
                                        <td class="text-center">
                                            20-April-25
                                        </td>
                                        <td class="text-center">
                                            Public
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#" class="table-actions">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <a href="#" class="table-actions">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="#" class="table-actions">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td width="3.5%">
                                            <input class="inquiries-checkbox" checked type="checkbox" name="" id="manage-checkbox-2">
                                            <label class="inquiries-checkbox-label" for="manage-checkbox-2">
                                                <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <img class="img-fluid" src="./assets/images/manage-product-imgs/mng-pro-img-2.png" width="41" height="26" alt="">
                                        </td>
                                        <td>
                                            <a href="#" class="dark-gray fw-bold">Vapes</a>
                                        </td>
                                        <td>
                                            <label>
                                                Model No.
                                                <span>0011</span>
                                            </label> 
                                            <label>
                                                Group Name:
                                                <span>N/A</span>
                                            </label> 
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="text-center">
                                                <img class="img-fluid" src="./assets/images/gallery-dummy-img.png" width="27" height="22" alt="">
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            Simon Gill
                                        </td>
                                        <td class="text-center">
                                            20-April-25
                                        </td>
                                        <td class="text-center">
                                            Public
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#" class="table-actions">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <a href="#" class="table-actions">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="#" class="table-actions">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="3.5%">
                                            <input class="inquiries-checkbox" checked type="checkbox" name="" id="manage-checkbox-3">
                                            <label class="inquiries-checkbox-label" for="manage-checkbox-3">
                                                <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <img class="img-fluid" src="./assets/images/manage-product-imgs/mng-pro-img-3.png" width="41" height="26" alt="">
                                        </td>
                                        <td>
                                            <a href="#" class="dark-gray fw-bold">Juices</a>
                                        </td>
                                        <td>
                                            Manufacturer  
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="text-center">
                                                <img class="img-fluid" src="./assets/images/gallery-dummy-img.png" width="27" height="22" alt="">
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            Simon Gill
                                        </td>
                                        <td class="text-center">
                                            20-April-25
                                        </td>
                                        <td class="text-center">
                                            Public
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#" class="table-actions">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <a href="#" class="table-actions">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="#" class="table-actions">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="3.5%">
                                            <input class="inquiries-checkbox" checked type="checkbox" name="" id="manage-checkbox-4">
                                            <label class="inquiries-checkbox-label" for="manage-checkbox-4">
                                                <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <img class="img-fluid" src="./assets/images/manage-product-imgs/mng-pro-img-4.png" width="41" height="26" alt="">
                                        </td>
                                        <td>
                                            <a href="#" class="dark-gray fw-bold">Snacks</a>
                                        </td>
                                        <td>
                                            AISI316 Stainless Steel 
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="text-center">
                                                <img class="img-fluid" src="./assets/images/gallery-dummy-img.png" width="27" height="22" alt="">
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            Simon Gill
                                        </td>
                                        <td class="text-center">
                                            20-April-25
                                        </td>
                                        <td class="text-center">
                                            Public
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#" class="table-actions">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <a href="#" class="table-actions">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="#" class="table-actions">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="3.5%">
                                            <input class="inquiries-checkbox" checked type="checkbox" name="" id="manage-checkbox-5">
                                            <label class="inquiries-checkbox-label" for="manage-checkbox-5">
                                                <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <img class="img-fluid" src="./assets/images/manage-product-imgs/mng-pro-img-5.png" width="41" height="26" alt="">
                                        </td>
                                        <td>
                                            <a href="#" class="dark-gray fw-bold">Ps5</a>
                                        </td>
                                        <td>
                                            Information Product 
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="text-center">
                                                <img class="img-fluid" src="./assets/images/gallery-dummy-img.png" width="27" height="22" alt="">
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            Simon Gill
                                        </td>
                                        <td class="text-center">
                                            20-April-25
                                        </td>
                                        <td class="text-center">
                                            Public
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#" class="table-actions">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <a href="#" class="table-actions">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="#" class="table-actions">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="3.5%">
                                            <input class="inquiries-checkbox" checked type="checkbox" name="" id="manage-checkbox-6">
                                            <label class="inquiries-checkbox-label" for="manage-checkbox-6">
                                                <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <img class="img-fluid" src="./assets/images/manage-product-imgs/mng-pro-img-6.png" width="41" height="26" alt="">
                                        </td>
                                        <td>
                                            <a href="#" class="dark-gray fw-bold">Juices</a>
                                        </td>
                                        <td>
                                            Manufacturer 
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="text-center">
                                                <img class="img-fluid" src="./assets/images/gallery-dummy-img.png" width="27" height="22" alt="">
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            Simon Gill
                                        </td>
                                        <td class="text-center">
                                            20-April-25
                                        </td>
                                        <td class="text-center">
                                            Public
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#" class="table-actions">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <a href="#" class="table-actions">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="#" class="table-actions">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="3.5%">
                                            <input class="inquiries-checkbox" checked type="checkbox" name="" id="manage-checkbox-7">
                                            <label class="inquiries-checkbox-label" for="manage-checkbox-7">
                                                <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <img class="img-fluid" src="./assets/images/manage-product-imgs/mng-pro-img-7.png" width="41" height="26" alt="">
                                        </td>
                                        <td>
                                            <a href="#" class="dark-gray fw-bold">HP laser printer</a>
                                        </td>
                                        <td>
                                            Marine Hardware Manufacturer  
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="text-center">
                                                <img class="img-fluid" src="./assets/images/gallery-dummy-img.png" width="27" height="22" alt="">
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            Simon Gill
                                        </td>
                                        <td class="text-center">
                                            20-April-25
                                        </td>
                                        <td class="text-center">
                                            Public
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#" class="table-actions">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <a href="#" class="table-actions">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="#" class="table-actions">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="3.5%">
                                            <input class="inquiries-checkbox" checked type="checkbox" name="" id="manage-checkbox-8">
                                            <label class="inquiries-checkbox-label" for="manage-checkbox-8">
                                                <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <img class="img-fluid" src="./assets/images/manage-product-imgs/mng-pro-img-8.png" width="41" height="26" alt="">
                                        </td>
                                        <td>
                                            <a href="#" class="dark-gray fw-bold">Vapes</a>
                                        </td>
                                        <td>
                                            Hardware Manufacturer  
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="text-center">
                                                <img class="img-fluid" src="./assets/images/gallery-dummy-img.png" width="27" height="22" alt="">
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            Simon Gill
                                        </td>
                                        <td class="text-center">
                                            20-April-25
                                        </td>
                                        <td class="text-center">
                                            Public
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#" class="table-actions">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <a href="#" class="table-actions">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="#" class="table-actions">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="3.5%">
                                            <input class="inquiries-checkbox" checked type="checkbox" name="" id="manage-checkbox-9">
                                            <label class="inquiries-checkbox-label" for="manage-checkbox-9">
                                                <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <img class="img-fluid" src="./assets/images/manage-product-imgs/mng-pro-img-9.png" width="41" height="26" alt="">
                                        </td>
                                        <td>
                                            <a href="#" class="dark-gray fw-bold">Juices</a>
                                        </td>
                                        <td>
                                            Manufacturer  
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="text-center">
                                                <img class="img-fluid" src="./assets/images/gallery-dummy-img.png" width="27" height="22" alt="">
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            Simon Gill
                                        </td>
                                        <td class="text-center">
                                            20-April-25
                                        </td>
                                        <td class="text-center">
                                            Public
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#" class="table-actions">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <a href="#" class="table-actions">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="#" class="table-actions">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="3.5%">
                                            <input class="inquiries-checkbox" checked type="checkbox" name="" id="manage-checkbox-10">
                                            <label class="inquiries-checkbox-label" for="manage-checkbox-10">
                                                <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <img class="img-fluid" src="./assets/images/manage-product-imgs/mng-pro-img-10.png" width="41" height="26" alt="">
                                        </td>
                                        <td>
                                            <a href="#" class="dark-gray fw-bold">Snacks</a>
                                        </td>
                                        <td>
                                            AISI316 Stainless Steel
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="text-center">
                                                <img class="img-fluid" src="./assets/images/gallery-dummy-img.png" width="27" height="22" alt="">
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            Simon Gill
                                        </td>
                                        <td class="text-center">
                                            20-April-25
                                        </td>
                                        <td class="text-center">
                                            Public
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#" class="table-actions">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <a href="#" class="table-actions">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="#" class="table-actions">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="3.5%">
                                            <input class="inquiries-checkbox" checked type="checkbox" name="" id="manage-checkbox-11">
                                            <label class="inquiries-checkbox-label" for="manage-checkbox-11">
                                                <img class="img-fluid" src="./assets/images/check-img.svg" alt="">
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <img class="img-fluid" src="./assets/images/manage-product-imgs/mng-pro-img-11.png" width="41" height="26" alt="">
                                        </td>
                                        <td>
                                            <a href="#" class="dark-gray fw-bold">Ps5Ps5</a>
                                        </td>
                                        <td>
                                            Information Product 
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="text-center">
                                                <img class="img-fluid" src="./assets/images/gallery-dummy-img.png" width="27" height="22" alt="">
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            Simon Gill
                                        </td>
                                        <td class="text-center">
                                            20-April-25
                                        </td>
                                        <td class="text-center">
                                            Public
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#" class="table-actions">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <a href="#" class="table-actions">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="#" class="table-actions">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </div>
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