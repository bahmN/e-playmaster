<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('operation_statuses')->insert([
            'name' => 'Ожидает оплаты',
            'code' => 'wait'
        ]);

        DB::table('operation_statuses')->insert([
            'name' => 'Оплачена',
            'code' => 'paid'
        ]);
    }
}
