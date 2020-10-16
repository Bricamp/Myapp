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
        $role->name = 'userAdmin';
        $role->description = 'Administrator';
        $role->save();

        $role = new Role();
        $role->name = 'userCreator';
        $role->description = 'CreatePost';
        $role->save();

        $role = new Role();
        $role->name = 'user';
        $role->description = 'Comment';
        $role->save();
    }
}
