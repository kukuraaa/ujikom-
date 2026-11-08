<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\User;
use App\Models\Produk;
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
        User::create([
            'email'=> 'min@gmail.com',
            'name'=> 'admin',
            'password'=> bcrypt('12345678'),
            'role'=> 'admin'
        ]);

         User::create([
            'email'=> 'cus@gmail.com',
            'name'=> 'customer',
            'password'=> bcrypt('12345678'),
            'role'=> 'customer'
        ]);

        Kategori::create([
            'name'=>'Flower Bouquet'
        ]);

        Kategori::create([
            'name'=>'Doll Bouquet'
        ]);

        Kategori::create([
            'name'=>'Chocolate Bouquet'
        ]);

        Produk::create([
            'kategori_id'=>1,
            'name'=> 'Tulif',
            'harga'=> 1000000,
            'deskripsi'=> 'kirei',
            'foto'=> 'asset/tulif.jpg',
            'qty'=> 10
        ]);

        Produk::create([
            'kategori_id'=>1,
            'name'=> 'gerbera',
            'harga'=> 1000000,
            'deskripsi'=> 'preety',
            'foto'=> 'asset/gerbera.jpg',
            'qty'=> 10
        ]);
    }
}
