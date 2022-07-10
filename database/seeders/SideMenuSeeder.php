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
            ['side_menu_title' => 'Home', 'parent_id' => 0, 'sort_order' => 0, 'slug' => '/'],
            ['side_menu_title' => 'Pages', 'parent_id' => 0, 'sort_order' => 1, 'slug' => '/pages'],
            ['side_menu_title' => 'Our Services', 'parent_id' => 2, 'sort_order' => 2, 'slug' => '/our-services'],
            ['side_menu_title' => 'About', 'parent_id' => 2, 'sort_order' => 3, 'slug' => '/about'],
            ['side_menu_title' => 'About Team', 'parent_id' => 4, 'sort_order' => 3, 'slug' => '/about-team'],
            ['side_menu_title' => 'About Clients', 'parent_id' => 4, 'sort_order' => 3, 'slug' => '/about-clients'],
            ['side_menu_title' => 'Contact Team', 'parent_id' => 5, 'sort_order' => 3, 'slug' => '/contact-team'],
            ['side_menu_title' => 'Contact Clients', 'parent_id' => 6, 'sort_order' => 3, 'slug' => '/contact-clients'],
            ['side_menu_title' => 'Contact', 'parent_id' => 2, 'sort_order' => 4, 'slug' => '/contact'],
            ['side_menu_title' => 'Portfolio', 'parent_id' => 2, 'sort_order' => 4, 'slug' => '/portfolio'],
            ['side_menu_title' => 'Gallery', 'parent_id' => 2, 'sort_order' => 4, 'slug' => '/gallery']
        ];
        foreach ($menus as $menu) {
            \App\Role::Create($menu);
        }
    }
}
