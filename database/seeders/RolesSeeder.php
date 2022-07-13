<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;
use App\Helpers\Helper;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create role
        foreach (config('authorization.role_group') as $role) {
            $this->command->getOutput()->write("<comment>Creating role: </comment>");
            $this->command->getOutput()->writeln($role);
            ${$role} = Role::firstOrCreate(['name' => $role]);
        }

        // create users and assign roles
        $this->command->comment("<comment>+----------------+</comment>");
        $this->command->comment("| Creating Users |");
        $this->command->comment("<comment>+----------------+</comment>");
        $headers = ['firstname', 'email', 'password', 'role'];

        $content = [];

        foreach (config('authorization.users') as $user) {
            // $newUser = User::whereEmail($user['email'])->first() ??  new User();
            $newUser = User::firstOrCreate(
                [
                    'email' => $user['email'],
                    
                ],
                [
                    'firstname' => $user['firstname'],
                    'password' => bcrypt('password'),
                    'remember_token' => Str::random(10),
                    'unique_identification_number' =>Helper::IDGenereator(new User, 'unique_identification_number',5,'72815'),
                ]
            );
            $action = 'created';
            // $action = 'updated';

            // Assign roles to user
            $newUser->syncRoles($user['roles']);

            // Push user to console table
            array_push($content, [$user['firstname'],$user['email'], $user['password'], implode('|', $user['roles']), $action]);
        }

        $this->command->table($headers, $content);
    }
}
