<?php

class Admin
{
    public function __construct()
    {
        add_action('admin_menu', [ $this, 'initMenu' ]);
    }

    public function initMenu()
    {

    }
}