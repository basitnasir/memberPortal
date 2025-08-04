
<body>
    
    <div class="dashboard-main">

        <aside class="dashboard-sidebar">

            <a class="dashboard-logo d-block text-center" href=".">
                <picture>
                    <img class="img-fluid dashboard-main-logo" src="./assets/images/eWorldTrade-logo.svg" width="190" height="35" alt="eWorld Trade Logo">
                </picture>
                <picture class="text-web-center">
                    <img class="img-fluid dashboard-toggle-logo" src="./assets/images/favicon.svg" width="42" height="30" alt="eWorld Trade Logo">
                </picture>
            </a>

            <div class="author-proflle-area">
                <picture>
                    <img class="img-fluid author-profile-img" src="./assets/images/author-dummy-img.png" width="64" height="64" alt="">
                </picture>
                <h5 class="author-name">Linda Miller</h5>
                <span class="author-designation">Business Development Manager</span>
            </div>

            <nav class="dashboard-nav">
                <ul class="dashboard-nav-list">
                    <li class="dashboard-nav-item">
                        <a href="." class="dashboard-nav-link active">
                            <div class="dashboard-nav-link-left">
                                <i class="fa-solid fa-house-chimney link-icon"></i>
                                <span>Dashboards</span>
                            </div>
                        </a>
                    </li>
                    <li class="dashboard-nav-item">
                        <a href="profile.php" class="dashboard-nav-link">
                            <div class="dashboard-nav-link-left">
                                <i class="fa-solid fa-user link-icon"></i>
                                <span>My Profile</span>
                            </div>
                        </a>
                    </li>
                    <li class="dashboard-nav-item">
                        <a href="#" class="dashboard-nav-link">
                            <div class="dashboard-nav-link-left">
                                <i class="fa-solid fa-list link-icon"></i>
                                <span>Buy offers</span>
                            </div>
                        </a>
                    </li>
                    <li class="dashboard-nav-item">
                        <button class="dashboard-nav-link sidebar-dropdown">
                            <div class="dashboard-nav-link-left">
                                <i class="fa-solid fa-message link-icon"></i>
                                <span>Messages</span>
                            </div>
                            <i class="fa-solid fa-angle-down"></i>
                        </button>
                        <ul class="dashboard-nav-sublist" style="display: none;">
                            <li class="dashboard-nav-subitem">
                                <button class="dashboard-nav-sublink sidebar-sb-dropdown">
                                    <div class="dashboard-nav-link-left">
                                        <i class="fa-solid fa-message link-icon"></i>
                                        <span>Inbox</span>
                                    </div>
                                    <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <ul class="dashboard-sm-sublist">
                                    <li class="dashboard-sm-subitem">
                                        <a href="inbox-inquiries.php" class="dashboard-sm-sublink">
                                            Inquiries
                                        </a>
                                    </li> 
                                    <li class="dashboard-sm-subitem">
                                        <a href="#" class="dashboard-sm-sublink">
                                            New Inquiries
                                        </a>
                                    </li> 
                                    <li class="dashboard-sm-subitem">
                                        <a href="connected-buyers.php" class="dashboard-sm-sublink">
                                            Connected Buyers
                                        </a>
                                    </li> 
                                </ul>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="sent-messages.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Sent</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="draft-messages.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Draft</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="spam-messages.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Spam</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="trashed-messages.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Trash</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dashboard-nav-item">
                        <button class="dashboard-nav-link sidebar-dropdown">
                            <div class="dashboard-nav-link-left">
                                <i class="fas fa-gift link-icon"></i>
                                <span>Products</span>
                            </div>
                            <i class="fa-solid fa-angle-down"></i>
                        </button>
                        <ul class="dashboard-nav-sublist" style="display: none;">
                            <li class="dashboard-nav-subitem">
                                <a href="add-new-product.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Add New Product</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="manage-products.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>All Products</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="manage-product-group.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Product Group</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="manage-product-sorting.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Product Sorting</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="manage-disapproved-products.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Disapproved Products</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="manage-trash-products.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Trash</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dashboard-nav-item">
                        <button class="dashboard-nav-link sidebar-dropdown">
                            <div class="dashboard-nav-link-left">
                                <i class="fas fa-gift link-icon"></i>
                                <span>Company Profile</span>
                            </div>
                            <i class="fa-solid fa-angle-down"></i>
                        </button>
                        <ul class="dashboard-nav-sublist" style="display: none;">
                            <li class="dashboard-nav-subitem">
                                <a href="company.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Basic Company Details</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="factory-details.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Factory Details</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="trade-details.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Trade Details</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="company-introduction.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Company Introduction</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="Social-profiles.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Social Profiles</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="certification-trademark.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Certification & Trademark</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dashboard-nav-item">
                        <button class="dashboard-nav-link sidebar-dropdown">
                            <div class="dashboard-nav-link-left">
                                <i class="fas fa-gift link-icon"></i>
                                <span>Company Details</span>
                            </div>
                            <i class="fa-solid fa-angle-down"></i>
                        </button>
                        <ul class="dashboard-nav-sublist" style="display: none;">
                            <li class="dashboard-nav-subitem">
                                <a href="code-of-conduct-index.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Code of Conduct</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="newsroom-index.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Newsroom</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="factory-index.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Factory Tour</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="management-index.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Management</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="other-index.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Other Information</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="quality-control-index.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Quality Control</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="#" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Research & Development</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="#" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Services</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="faq.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>FAQ</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dashboard-nav-item">
                        <a href="buy-offer.php" class="dashboard-nav-link">
                            <div class="dashboard-nav-link-left">
                                <i class="fas fa-gift link-icon"></i>
                                <span>Buying Request</span>
                            </div>
                        </a>
                    </li>
                    <li class="dashboard-nav-item">
                        <a href="trade-alerts.php" class="dashboard-nav-link">
                            <div class="dashboard-nav-link-left">
                                <i class="fa-solid fa-bell link-icon"></i>
                                <span>Trade Alerts</span>
                            </div>
                        </a>
                    </li>
                    <li class="dashboard-nav-item">
                        <button class="dashboard-nav-link sidebar-dropdown">
                            <div class="dashboard-nav-link-left">
                                <i class="fa-solid fa-list link-icon"></i>
                                <span>My Contacts</span>
                            </div>
                            <i class="fa-solid fa-angle-down"></i>
                        </button>
                        <ul class="dashboard-nav-sublist" style="display: none;">
                            <li class="dashboard-nav-subitem">
                                <a href="create-contact.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Add New Contact</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="manage-contacts.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Manage Contacts</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="contact-group.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Manage Groups</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dashboard-nav-item">
                        <a href="user.php" class="dashboard-nav-link">
                            <div class="dashboard-nav-link-left">
                                <i class="fa-solid fa-users link-icon"></i>
                                <span>Sub Accounts</span>
                            </div>
                        </a>
                    </li>
                    <li class="dashboard-nav-item">
                        <button class="dashboard-nav-link sidebar-dropdown">
                            <div class="dashboard-nav-link-left">
                                <i class="fa-solid fa-gear link-icon"></i>
                                <span>Account Setting</span>
                            </div>
                            <i class="fa-solid fa-angle-down"></i>
                        </button>
                        <ul class="dashboard-nav-sublist" style="display: none;">
                            <li class="dashboard-nav-subitem">
                                <a href="inquiry-cc.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Inquiry CC Setting</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="subscribe.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Email Preference</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dashboard-nav-subitem">
                                <a href="change-password.php" class="dashboard-nav-sublink">
                                    <div class="dashboard-nav-link-left">
                                        <span>Change Password</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dashboard-nav-item">
                        <button class="dashboard-nav-link sidebar-dropdown">
                            <div class="dashboard-nav-link-left">
                                <i class="fas fa-gift link-icon"></i>
                                <span>Amazon FBA</span>
                            </div>
                            <i class="fa-solid fa-angle-down"></i>
                        </button>
                    </li>
                    <li class="dashboard-nav-item">
                        <a href="escrow-account-create.php" class="dashboard-nav-link">
                            <div class="dashboard-nav-link-left">
                                <i class="fas fa-gift link-icon"></i>
                                <span>Escrow Account</span>
                            </div>
                        </a>
                    </li>
                    <li class="dashboard-nav-item">
                        <button class="dashboard-nav-link sidebar-dropdown">
                            <div class="dashboard-nav-link-left">
                                <i class="fa-solid fa-ticket fa-rotate-by link-icon" style="--fa-rotate-angle: 110deg;"></i>
                                <span>Trouble Ticket</span>
                            </div>
                            <i class="fa-solid fa-angle-down"></i>
                        </button>
                    </li>
                    <li class="dashboard-nav-item">
                        <button class="dashboard-nav-link sidebar-dropdown">
                            <div class="dashboard-nav-link-left">
                                <i class="fa-solid fa-headset link-icon"></i>
                                <span>Live Support</span>
                            </div>
                            <i class="fa-solid fa-angle-down"></i>
                        </button>
                    </li>
                </ul>
            </nav>
        </aside>