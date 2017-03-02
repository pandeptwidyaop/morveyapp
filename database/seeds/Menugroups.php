<?php

use Illuminate\Database\Seeder;

class Menugroups extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menugroups')->insert([
          [
            'level' => 1,
            'menu_id' => 1,
            'urut' => 1
          ],
          [
            'level' => 1,
            'menu_id' => 2,
            'urut' => 2
          ],
          [
            'level' => 1,
            'menu_id' => 3,
            'urut' => 3
          ],
          [
            'level' => 1,
            'menu_id' => 4,
            'urut' => 5
          ],
          [
            'level' => 1,
            'menu_id' => 5,
            'urut' => 5
          ],
          [
            'level' => 1,
            'menu_id' => 7,
            'urut' => 7
          ],
          [
            'level' => 2,
            'menu_id' => 1,
            'urut' => 1
          ],
          [
            'level' => 2,
            'menu_id' => 2,
            'urut' => 2
          ],
          [
            'level' => 2,
            'menu_id' => 3,
            'urut' => 3
          ],
          [
            'level' => 2,
            'menu_id' => 4,
            'urut' => 4
          ],
          [
            'level' => 2,
            'menu_id' => 5,
            'urut' => 5
          ],
          [
            'level' => 2,
            'menu_id' => 6,
            'urut' => 6
          ],
          [
            'level' => 3,
            'menu_id' => 1,
            'urut' => 1
          ],
          [
            'level' => 3,
            'menu_id' => 2,
            'urut' => 2
          ]
        ]);
    }
}
