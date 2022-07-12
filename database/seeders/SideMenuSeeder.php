<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SideMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            ['side_menu_title' => 'Library Management System', 'parent_id' => 0, 'sort_order' => 0, 'slug' => '/library_management_system'],
            ['side_menu_title' => 'Learning Management System', 'parent_id' => 0, 'sort_order' => 0, 'slug' => '/learning_management_system'],
            ['side_menu_title' => 'Event Booking System', 'parent_id' => 0, 'sort_order' => 0, 'slug' => '/event_booking_system'],
            ['side_menu_title' => 'Inventory Management System', 'parent_id' => 0, 'sort_order' => 0, 'slug' => '/inventory_management_system'],
            ['side_menu_title' => 'User Management', 'parent_id' => 0, 'sort_order' => 0, 'slug' => '/user_management'],
            ['side_menu_title' => 'Gurukul Management', 'parent_id' => 0, 'sort_order' => 0, 'slug' => '/gurukul_management'],
            ['side_menu_title' => 'Library Setting', 'parent_id' => 1, 'sort_order' => 2, 'slug' => '/library_setting'],
            ['side_menu_title' => 'Book Category', 'parent_id' => 7, 'sort_order' => 3, 'slug' => '/book_category'],
            ['side_menu_title' => 'Lecture Notes', 'parent_id' => 2, 'sort_order' => 3, 'slug' => '/lecture_notes'],
            ['side_menu_title' => 'Upload Lecture Note', 'parent_id' => 9, 'sort_order' => 3, 'slug' => '/upload_lecture_note'],
            ['side_menu_title' => 'Event Information', 'parent_id' => 3, 'sort_order' => 3, 'slug' => '/event_information'],
            ['side_menu_title' => 'Event', 'parent_id' => 11, 'sort_order' => 3, 'slug' => '/event'],
            ['side_menu_title' => 'Inventory Setting', 'parent_id' => 4, 'sort_order' => 3, 'slug' => '/inventory_setting'],
            ['side_menu_title' => 'Item Group', 'parent_id' => 13, 'sort_order' => 4, 'slug' => '/item_group'],
            ['side_menu_title' => 'User Information', 'parent_id' => 5, 'sort_order' => 4, 'slug' => '/user_information'],
            ['side_menu_title' => 'User', 'parent_id' => 15, 'sort_order' => 4, 'slug' => '/user'],
            ['side_menu_title' => 'Gurukul Information', 'parent_id' => 6, 'sort_order' => 4, 'slug' => '/gurukul_information'],
            ['side_menu_title' => 'Gurukul', 'parent_id' => 17, 'sort_order' => 4, 'slug' => '/gurukul'],
        ];
        foreach ($menus as $menu) {
            \App\Role::Create($menu);
        }
    }
}
