<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HardwareDevicesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('hardware_devices')->insert([
            [
                'device_name' => 'Logitech G502',
                'type' => 'Mouse',
                'status' => true, // Đang hoạt động
                'center_id' => 1, // Trung tâm ABC
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'device_name' => 'Corsair K70',
                'type' => 'Keyboard',
                'status' => false, // Hỏng
                'center_id' => 1, // Trung tâm ABC
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'device_name' => 'HyperX Cloud II',
                'type' => 'Headset',
                'status' => true, // Đang hoạt động
                'center_id' => 2, // Trung tâm XYZ
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
