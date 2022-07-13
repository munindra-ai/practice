<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DefaultGeneralSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        settings()->set([
            'site_name' => 'Makau Dog Cheq',
            'tagline' => 'Makalu Dairy Uhdyog',
            'site_logo' => '',
            'favicon' => '',

            'show_top_bar' => 'yes',
            'topbar_mobile' => '',
            'topbar_email' => '',

            'price_unit' => '$.',
            'tax_percent' => '',
            'low_stock_threshold' => '10',

            'show_bottom_bar' => 'yes',
            'footer_left_text' => 'Copyright © 2016 Makalu Dog Chew.   All Rights Reserved.',
            'footer_right_text' => 'Powered By: <a href="https://www.festnepal.com.np" target="_blank">Fest Nepal</a>',

            'mail_driver' =>'smtp',
            'mail_host'=>'smtp.mailtrap.io',
            'mail_port'=>'2525',
            'mail_encryption'=>'tls',
            'mail_username'=>'d2056d01bb8f10',
            'mail_password'=>'ea073d64eed9d0',

            'paypal_enable_test_mode' =>'yes',
            'paypal_client_id'=>'EIt_Z69vruKuNkzP52Ny-Tq8o-Z9TCIfS1dBQZ327Y1KkraHulEa61zlcu4HMchOaB8SnyJm3vHDdKnF',
            'paypal_api_secret'=>'ECjfS50-zDB8mzqKJRsg1SdmJb-7WRZjRed7Bqna9X70fQvL5rQiubkpZ7tmAFw02n0UEgrMMZBlMcEv',
            'paypal_currency'=>'USD'
        ]);
    }
}
