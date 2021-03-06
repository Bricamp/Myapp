<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(App\User::class, 1)->create();

        factory(App\Post::class, 20)->create();

        $this->call(RoleTableSeeder::class);


        App\User::first()->roles()->attach(App\Role::find(1));
        App\User::first()->roles()->attach(App\Role::find(2));
        App\User::first()->roles()->attach(App\Role::find(3));


    }
}
