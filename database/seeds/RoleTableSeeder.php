<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'Member';
        $role->save();

        $role = new Role();
        $role->name = 'Author';
        $role->save();

        $role = new Role();
        $role->name = 'Admin';
        $role->save();
    }
}
