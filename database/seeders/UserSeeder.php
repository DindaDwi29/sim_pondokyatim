<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'Admin',
            'display_name' => 'Izin Admin'
        ]);
        
       

        $userAdmin = new User();
        $userAdmin->name = 'Dinda Dwi';
        $userAdmin->email = 'admin@gmail.com';
        $userAdmin->password = Hash::make('12345678');
        $userAdmin->save();
        $userAdmin->attachRole($admin);

        

       

    }
}
