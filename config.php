<?php

    unset($CONFIGURATION);
    $CONFIGURATION = new stdClass();

    $CONFIGURATION->site_root_public_dir = __DIR__;
    $CONFIGURATION->site_root_private_dir = __DIR__.'/../private_html';

    $CONFIGURATION->db_admin_prohibit_create_drop = FALSE;
    $CONFIGURATION->db_dsn='mysql:host=localhost;dbname=PUT_YOUR_DB_NAME_HERE';
    $CONFIGURATION->db_user='PUT_YOUR_DB_USER_HERE';
    $CONFIGURATION->db_pass='PUT_YOUR_DB_PASSWORD_HERE';

    // Define a site-wide salt. Use random characters including
    // punctuation (except "\0").
    $CONFIGURATION->site_wide_password_salt = 'WRITE_YOUR_SITE_SALT_HERE';
?>