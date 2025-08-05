<?php 
    include './includes/header.php'; 
?>

<link rel="stylesheet" href="./assets/css/manage-contact.css">
<link rel="stylesheet" href="./assets/css/country-flag.css">


    <main class="main">
        <section class="manage-contact-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="section-top">
                            <h1 class="main-title mb-0">Manage <span class="fw-normal">Contact</span></h1>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="manage-contact-box">
                            <a href="create-contact.php " class="create-contact-btn mb-26px">Add New Contact</a>
                            <form action="">
                                <div class="row">
                                    <div class="col-12 col-lg-3">
                                        <div class="form-group">
                                            <select class="form-select dash-form-input" aria-label="Default select example">
                                                <option selected>Select Group</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <input class="dash-form-input" name="" id="" type="text" placeholder="Search Contact...">
                                    </div>
                                    <div class="col-12 col-lg-2">
                                        <button class="form-submit-btn" type="submit">Go!</button>
                                    </div>
                                </div>
                            </form>
                            <div class="manage-contacts-table-main">
                                <table class="manage-contacts-table">
                                    <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th> 
                                                Name
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th class="text-center">
                                                Country
                                            </th>
                                            <th class="text-center"> 
                                                Group
                                            </th>
                                            <th class="text-center"> 
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                test test 2	
                                            </td>
                                            <td>
                                                <a href="mailto:test@gmail.com" class="">test@gmail.com</a>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid country-flag" src="./assets/images/country-flag/flg-1.png" alt="">
                                            </td>
                                            <td class="text-center">
                                                asd
                                            </td>
                                            <td>
                                                <div class="table-actions justify-content-center">
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
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                test test 2	
                                            </td>
                                            <td>
                                                <a href="mailto:test@gmail.com" class="">test@gmail.com</a>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid country-flag" src="./assets/images/country-flag/flg-1.png" alt="">
                                            </td>
                                            <td class="text-center">
                                                asd
                                            </td>
                                            <td>
                                                <div class="table-actions justify-content-center">
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
                                            <td>
                                                3
                                            </td>
                                            <td>
                                                test test 2	
                                            </td>
                                            <td>
                                                <a href="mailto:test@gmail.com" class="">test@gmail.com</a>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid country-flag" src="./assets/images/country-flag/flg-1.png" alt="">
                                            </td>
                                            <td class="text-center">
                                                asd
                                            </td>
                                            <td>
                                                <div class="table-actions justify-content-center">
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
                                            <td>
                                                4
                                            </td>
                                            <td>
                                                test test 2	
                                            </td>
                                            <td>
                                                <a href="mailto:test@gmail.com" class="">test@gmail.com</a>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid country-flag" src="./assets/images/country-flag/flg-1.png" alt="">
                                            </td>
                                            <td class="text-center">
                                                asd
                                            </td>
                                            <td>
                                                <div class="table-actions justify-content-center">
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
                                            <td>
                                                5
                                            </td>
                                            <td>
                                                test test 2	
                                            </td>
                                            <td>
                                                <a href="mailto:test@gmail.com" class="">test@gmail.com</a>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid country-flag" src="./assets/images/country-flag/flg-1.png" alt="">
                                            </td>
                                            <td class="text-center">
                                                asd
                                            </td>
                                            <td>
                                                <div class="table-actions justify-content-center">
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
                                            <td>
                                                6
                                            </td>
                                            <td>
                                                test test 2	
                                            </td>
                                            <td>
                                                <a href="mailto:test@gmail.com" class="">test@gmail.com</a>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid country-flag" src="./assets/images/country-flag/flg-1.png" alt="">
                                            </td>
                                            <td class="text-center">
                                                asd
                                            </td>
                                            <td>
                                                <div class="table-actions justify-content-center">
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
                                            <td>
                                                7
                                            </td>
                                            <td>
                                                test test 2	
                                            </td>
                                            <td>
                                                <a href="mailto:test@gmail.com" class="">test@gmail.com</a>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid country-flag" src="./assets/images/country-flag/flg-1.png" alt="">
                                            </td>
                                            <td class="text-center">
                                                asd
                                            </td>
                                            <td>
                                                <div class="table-actions justify-content-center">
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
                                            <td>
                                                8
                                            </td>
                                            <td>
                                                test test 2	
                                            </td>
                                            <td>
                                                <a href="mailto:test@gmail.com" class="">test@gmail.com</a>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid country-flag" src="./assets/images/country-flag/flg-1.png" alt="">
                                            </td>
                                            <td class="text-center">
                                                asd
                                            </td>
                                            <td>
                                                <div class="table-actions justify-content-center">
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
                                            <td>
                                                9
                                            </td>
                                            <td>
                                                test test 2	
                                            </td>
                                            <td>
                                                <a href="mailto:test@gmail.com" class="">test@gmail.com</a>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid country-flag" src="./assets/images/country-flag/flg-1.png" alt="">
                                            </td>
                                            <td class="text-center">
                                                asd
                                            </td>
                                            <td>
                                                <div class="table-actions justify-content-center">
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
                                            <td>
                                                10
                                            </td>
                                            <td>
                                                test test 2	
                                            </td>
                                            <td>
                                                <a href="mailto:test@gmail.com" class="">test@gmail.com</a>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid country-flag" src="./assets/images/country-flag/flg-1.png" alt="">
                                            </td>
                                            <td class="text-center">
                                                asd
                                            </td>
                                            <td>
                                                <div class="table-actions justify-content-center">
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
            </div>
        </section>
    </main>
        
<?php 
include './includes/footer.php'; 
?>
