<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user  = new User();
        $user->first_name = 'abdou';
        $user->last_name = 'sfayhi';
        $user->phone = '22224618';
        $user->email = 'abdousfayhi12@gmail.com';
        $user->email_verified_at = now();
        $user->is_admin = 1;
        $user->password = bcrypt(123456789);
        $user->save();

        $user2 = new User();
        $user2->first_name = 'hamza';
        $user2->last_name = 'ben khoud';
        $user2->phone = '12224618';
        $user2->email = 'benkhoud@gmail.com';
        $user2->email_verified_at = now();
        $user2->is_admin = 1;
        $user2->password = bcrypt(123456789);
        $user2->save();

        \App\Models\User::factory(10)->create();
        \App\Models\Address::factory(10)->create();
        \App\Models\Order::factory(10)->create();
    }
}
