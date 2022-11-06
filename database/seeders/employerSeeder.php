<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class employerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employers')->insert([
            [
                'name_company' => 'FPT',
                'address' => '5A/2 Trần Phú, Phường 04, Quận 5, Thành phố Hồ Chí Minh Tầng 12 khu Văn phòng tòa MIPEC, 229 Tây Sơn, Phường Ngã Tư Sở, Quận Đống Đa, Thành phố Hà Nội',
                'image' => 'download.png',
                'email' => 'FPT@gmail.com',
                'phone_number' => '0123456789',
            ], [
                'name_company' => 'Go2Joy Việt Nam',
                'address' => '5A/2 Trần Phú, Phường 04, Quận 5, Thành phố Hồ Chí Minh Tầng 12 khu Văn phòng tòa MIPEC, 229 Tây Sơn, Phường Ngã Tư Sở, Quận Đống Đa, Thành phố Hà Nội',
                'image' => 'download.png',
                'email' => 'go2joyvn@gmail.com',
                'phone_number' => '0123456789',
            ], [
                'name_company' => 'FPT HCM',
                'address' => 'quận Thủ Đức, thành phố Hồ Chí Minh',
                'image' => 'download.png',
                'email' => 'FPTHCM@gmail.com',
                'phone_number' => '0123456789',
            ]
        ]);
    }
}
