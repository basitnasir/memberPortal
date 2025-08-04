<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/css/intlTelInput.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/sidebar.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/global.css">
    

    <!-- pages css -->
    <?php if (isset($dashboard_css)) { ?>
        <link rel="stylesheet" href="<?php echo $dashboard_css; ?>">
    <?php } ?>
    <?php if (isset($profile_css)) { ?>
        <link rel="stylesheet" href="<?php echo $profile_css; ?>">
    <?php } ?>
    <?php if (isset($inquiries_css)) { ?>
        <link rel="stylesheet" href="<?php echo $inquiries_css; ?>">
    <?php } ?>
    <?php if (isset($sent_messages_css)) { ?>
        <link rel="stylesheet" href="<?php echo $sent_messages_css; ?>">
    <?php } ?>
    <?php if (isset($add_new_product_css)) { ?>
        <link rel="stylesheet" href="<?php echo $add_new_product_css; ?>">
    <?php } ?>
    <?php if (isset($manage_products_css)) { ?>
        <link rel="stylesheet" href="<?php echo $manage_products_css; ?>">
    <?php } ?>
    <?php if (isset($manage_products_group_css)) { ?>
        <link rel="stylesheet" href="<?php echo $manage_products_group_css; ?>">
    <?php } ?>
    <?php if (isset($company_profile_css)) { ?>
        <link rel="stylesheet" href="<?php echo $company_profile_css; ?>">
    <?php } ?>
    <?php if (isset($company_introduction_css)) { ?>
        <link rel="stylesheet" href="<?php echo $company_introduction_css; ?>">
    <?php } ?>
    <?php if (isset($social_profiles_css)) { ?>
        <link rel="stylesheet" href="<?php echo $social_profiles_css; ?>">
    <?php } ?>
    <?php if (isset($certification_trademark_css)) { ?>
        <link rel="stylesheet" href="<?php echo $certification_trademark_css; ?>">
    <?php } ?>
    <?php if (isset($create_contact_css)) { ?>
        <link rel="stylesheet" href="<?php echo $create_contact_css; ?>">
    <?php } ?>
    <?php if (isset($manage_contact_css)) { ?>
        <link rel="stylesheet" href="<?php echo $manage_contact_css; ?>">
    <?php } ?>
    <?php if (isset($code_of_conduct_css)) { ?>
        <link rel="stylesheet" href="<?php echo $code_of_conduct_css; ?>">
    <?php } ?>
    <?php if (isset($buy_offer_css)) { ?>
        <link rel="stylesheet" href="<?php echo $buy_offer_css; ?>">
    <?php } ?>
    <?php if (isset($escrow_account_css)) { ?>
        <link rel="stylesheet" href="<?php echo $escrow_account_css; ?>">
    <?php } ?>
    <?php if (isset($change_password_css)) { ?>
        <link rel="stylesheet" href="<?php echo $change_password_css; ?>">
    <?php } ?>
    <?php if (isset($subscribe_css)) { ?>
        <link rel="stylesheet" href="<?php echo $subscribe_css; ?>">
    <?php } ?>

    <?php if (isset($country_flag_css)) { ?>
        <!-- country flag css -->
        <link rel="stylesheet" href="<?php echo $country_flag_css; ?>">
    <?php } ?>

    <?php if (isset($pagination_css)) { ?>
        <!-- pagination css -->
        <link rel="stylesheet" href="<?php echo $pagination_css; ?>">
    <?php } ?>

    <?php if (isset($select2_css)) { ?>
        <!-- select2 css -->
        <link rel="stylesheet" href="<?php echo $select2_css; ?>">
    <?php } ?>

    <title>eWorld Trade Dashboard</title>
</head>