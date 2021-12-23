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
        $pengguna = Role::create([
            'name' => 'Pengguna',
            'display_name' => 'Izin Pengguna'
        ]);
        $kasir = Role::create([
            'name' => 'Kasir',
            'display_name' => 'Izin Kasir'
        ]);

        $userAdmin = new User();
        $userAdmin->name = 'Dinda Dwi';
        $userAdmin->email = 'admin@gmail.com';
        $userAdmin->password = Hash::make('12345678');
        $userAdmin->save();
        $userAdmin->attachRole($admin);

        $userPengguna = new User();
        $userPengguna->name = 'Dinda Octaviani';
        $userPengguna->email = 'dinda@gmail.com';
        $userPengguna->password = Hash::make('12345678');
        $userPengguna->save();
        $userPengguna->attachRole($pengguna);

        $userKasirSatu = new User();
        $userKasirSatu->name = 'Jajang Samsudin';
        $userKasirSatu->email = 'jajang@gmail.com';
        $userKasirSatu->password = Hash::make('12345678');
        $userKasirSatu->save();
        $userKasirSatu->attachRole($kasir);

        $userKasirDua = new User();
        $userKasirDua->name = 'Siti Samsudin';
        $userKasirDua->email = 'siti@gmail.com';
        $userKasirDua->password = Hash::make('12345678');
        $userKasirDua->save();
        $userKasirDua->attachRole($kasir);


    }
}
