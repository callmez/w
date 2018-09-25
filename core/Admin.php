<?php

class Admin
{
    public function __construct()
    {
        add_action('admin_menu', [ $this, 'initMenu' ]);
    }

    public function initMenu()
    {
        add_menu_page('W', '达不溜', 'administrator', 'w_menu', '', 'dashicons-wordpress', '46.66');
    }
}