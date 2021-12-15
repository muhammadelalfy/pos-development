<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Setting;
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
        
        // \App\Models\User::factory(10)->create();
        User::create([
            'image' =>'',
            'name' => 'Super_Admin',
            'user_num' => '2525aa',
            'email' => 'admin@admin.com',

            'password' => bcrypt('1234567'),
        ]);

        // $this->call(SettingSeeder::class);
        Setting::create([
            'terms'=>'terms',
            'commercial'=>'commercial',
            'email'=>'omar@ss.com',
            'tax_num'=> 15,
            'address'=>'address address',
            'phone'=>'phone',
            'name'=>'name',
        ]);

        
    }
}
