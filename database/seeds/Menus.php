<?php

use Illuminate\Database\Seeder;

class Menus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
          //1
          [
            'nama_menu' => 'BARANG',
            'link_menu' => 'barang',
            'icon_menu' => 'fa fa-database',
            'id_menu' => 'menubarang'
          ],
          //2
          [
            'nama_menu' => 'PESANAN',
            'link_menu' => 'pesanan',
            'icon_menu' => 'fa fa-paper-plane',
            'id_menu' => 'menupesanan'
          ],
          //3
          [
            'nama_menu' => 'PENJUALAN',
            'link_menu' => 'penjualan',
            'icon_menu' => 'fa fa-shopping-cart',
            'id_menu' => 'menupenjualan'
          ],
          //4
          [
            'nama_menu' => 'PEMASUKAN',
            'link_menu' => 'pemasukan',
            'icon_menu' => 'fa fa-download',
            'id_menu' => 'menupemasukan'
          ],
          //5
          [
            'nama_menu' => 'PENGELUARAN',
            'link_menu' => 'pengeluaran',
            'icon_menu' => 'fa fa-upload',
            'id_menu' => 'menupengeluaran'
          ],
          //6
          [
            'nama_menu' => 'USER',
            'link_menu' => 'user',
            'icon_menu' => 'fa fa-user',
            'id_menu' => 'menuuser'
          ],
          //7
          [
            'nama_menu' => 'MANAJEMEN USER',
            'link_menu' => 'usermanagement',
            'icon_menu' => 'fa fa-users',
            'id_menu' => 'menumanagemenuser'
          ]
        ]);
    }
}
