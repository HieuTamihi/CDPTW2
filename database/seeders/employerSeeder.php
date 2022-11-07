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
                'user_id' => '1',
                'name_company' => 'FPT',
                'address' => '5A/2 Trần Phú, Phường 04, Quận 5, Thành phố Hồ Chí Minh Tầng 12 khu Văn phòng tòa MIPEC, 229 Tây Sơn, Phường Ngã Tư Sở, Quận Đống Đa, Thành phố Hà Nội',
                'image' => 'download.png',
                'email' => 'FPT@gmail.com',
                'phone_number' => '0123456789',
            ], [
                'user_id' => '2',
                'name_company' => 'Go2Joy Việt Nam',
                'address' => '5A/2 Trần Phú, Phường 04, Quận 5, Thành phố Hồ Chí Minh Tầng 12 khu Văn phòng tòa MIPEC, 229 Tây Sơn, Phường Ngã Tư Sở, Quận Đống Đa, Thành phố Hà Nội',
                'image' => 'download.png',
                'email' => 'go2joyvn@gmail.com',
                'phone_number' => '0123456789',
            ], [
                'user_id' => '3',
                'name_company' => 'SAMO',
                'address' => 'quận Thủ Đức, thành phố Hồ Chí Minh',
                'image' => 'TopDev-LogoSAMO-1659088259.png',
                'email' => 'FPTHCM@gmail.comSAMO@gmail.com',
                'phone_number' => '0123456789',
            ], [
                'user_id' => '4',
                'name_company' => 'TMA Solutions',
                'address' => '5A/2 Trần Phú, Phường 04, Quận 5, Thành phố Hồ Chí Minh Tầng 12 khu Văn phòng tòa MIPEC, 229 Tây Sơn, Phường Ngã Tư Sở, Quận Đống Đa, Thành phố Hà Nội',
                'image' => 'TopDev-logoleXQXRp4F3f6eLCRvvxOklk4Q5ctPEoh-1656988646.png',
                'email' => 'Solutions@gmail.com',
                'phone_number' => '0123456789',
            ], [
                'user_id' => '5',
                'name_company' => 'Korean IT Companies ',
                'address' => 'quận Thủ Đức, thành phố Hồ Chí Minh',
                'image' => 'logo-it-ocmp-AdqRx.jpg',
                'email' => 'Korean@gmail.com',
                'phone_number' => '0123456789',
            ], [
                'user_id' => '6',
                'name_company' => 'TAPTAP',
                'address' => 'Quận 1, Hồ Chí Minh',
                'image' => 'TopDev-logoCmAkkDByOMNZJDE0e4VoD7vIhooacXEH-1654749314.jpg',
                'email' => 'TAPTAP@gmail.com',
                'phone_number' => '0123456789',
            ], [
                'user_id' => '7',
                'name_company' => 'Aventra Group',
                'address' => 'Hồ Chí Minh',
                'image' => 'TopDev-4725e148-96ec-4048-8de8-e41e3959686b-PhuongNguyen-1666144852.jpg',
                'email' => 'Aventra@gmail.com',
                'phone_number' => '0123456789',
            ]
        ]);
    }
}