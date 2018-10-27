<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$member = Role::where('name', 'Member')->first();
        $author = Role::where('name', 'Author')->first();
        $admin = Role::where('name', 'Admin')->first();

        $user = new User();
        $user->name = 'Adhitama Fikri';
        $user->email = 'adhitamafikri@gmail.com';
        $user->password = bcrypt('adhitamafikri');
        $user->save();
        $user->roles()->attach($member);

        $user = new User();
        $user->name = 'Bellanoche';
        $user->email = 'bellanoche@gmail.com';
        $user->password = bcrypt('bellanoche');
        $user->save();
        $user->roles()->attach($author);

        $user = new User();
        $user->name = 'MrAdmin';
        $user->email = 'mradmin@gmail.com';
        $user->password = bcrypt('mradmin');
        $user->save();
        $user->roles()->attach($admin);
    }
}
