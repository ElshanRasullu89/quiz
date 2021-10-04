<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::insert ([
            'name'=>'Elshan Rasullu',
            'email'=>'booqeyman89@gmail.com',
            'email_verified_at'=>now(),
            'type'=>'admin',
            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token'=>str::random(10),
        ]);
        \App\Models\User::factory(5)->create();
    }
}
