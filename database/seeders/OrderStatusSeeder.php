<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('roles')->insert([
            'name' => 'Ожидает оплаты',
            'code' => 'wait'
        ]);

        DB::table('roles')->insert([
            'name' => 'Оплачена',
            'code' => 'paid'
        ]);
    }
}
