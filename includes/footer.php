    <footer class="footer">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-lg-9">
                    <ul class="footer-nav-list">
                        <li class="footer-nav-item">
                            <a href="#" class="footer-nav-link">
                                Support
                            </a>
                        </li>
                        <li class="footer-nav-item">
                            <a href="#" class="footer-nav-link">
                                Privacy
                            </a>
                        </li>
                        <li class="footer-nav-item">
                            <a href="#" class="footer-nav-link">
                                Terms of Service
                            </a>
                        </li>
                        <li class="footer-nav-item">
                            <a href="#" class="footer-nav-link">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-3">
                    <p class="copyright-text text-end">© <script type="text/javascript">document.write(new Date().getFullYear());</script> - eWorldtrade</p>
                </div>
            </div>
        </div>
    </footer>
    </div>
</div>

    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="./assets/js/global.js"></script>

    <!-- input mask js -->
    <?php if (isset($input_mask_js)) { ?>
        <script src="<?php echo $input_mask_js; ?>"></script>
    <?php } ?>

    <!-- select2 js -->
    <?php if (isset($select2_js)) { ?>
        <script src="<?php echo $select2_js; ?>"></script>
    <?php } ?>

    <!-- text editor js -->
    <?php if (isset($text_editor_js)) { ?>
        <script src="<?php echo $text_editor_js; ?>"></script>
    <?php } ?>

    <!-- pages js -->
    <?php if (isset($inbox_inquiries_js)) { ?>
        <script src="<?php echo $inbox_inquiries_js; ?>"></script>
    <?php } ?>
    <?php if (isset($add_new_product_js)) { ?>
        <script src="<?php echo $add_new_product_js; ?>"></script>
    <?php } ?>
    <?php if (isset($company_introduction_js)) { ?>
        <script src="<?php echo $company_introduction_js; ?>"></script>
    <?php } ?>
    <?php if (isset($other_add_js)) { ?>
        <script src="<?php echo $other_add_js; ?>"></script>
    <?php } ?>

    
</body>
</html>