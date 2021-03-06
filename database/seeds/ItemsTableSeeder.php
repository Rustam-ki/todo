<?php 

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder {
    public function run() {
        DB::table('items')->delete();
        
        $items = array(
            array(
                'user_id' => '1',
                'name' => 'задача №1',
                'done' => false
            ),

            array(
                'user_id' => '1',
                'name' => 'задача №2',
                'done' => true
            )
        );

        DB::table('items')->insert($items);
    }
}