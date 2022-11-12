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
                'user_id'=>'1',
                'website'=>'https://fpt.com.vn/',
                'infor'=>'Tổng Công ty Dịch vụ số FPT - FPT mang sứ mệnh sáng tạo những sản phẩm công nghệ đi đầu lĩnh vực Fintech và Big Data, với mong muốn digital hoá những hình thức kinh doanh truyền thống. , Hiện Viettel Digital đang tập trung phát triển một hệ sinh thái tài chính số với core chính là Viettel Money. Bên cạnh đó, chúng tôi cũng đang mở rộng hoạt động với nhiều dự án lớn trong các lĩnh vực Fintech, Big Data, AI, Blockchain,... và mong muốn chiêu mộ nhân tài hơn bao giờ hết.',
                'responsibility'=>'Tham gia phát triển các dự án trong Hệ sinh thái Tài chính số (FPT Pay, Mobile Money, ví cá nhân, ví doanh nghiệp, ...) , Vui vẻ, hòa đồng, thân thiện, nhiệt tình trong công việc',
                'welfare'=>'Mức lương thu hút nhân tài, ứng viên tự thỏa thuận khi tham gia phỏng vấn , Có cơ hội làm việc trong một tập đoàn lớn nhưng môi trường không khác gì StartUp , Tham gia vào các dự án công ty.',
                'address' => '5A/2 Trần Phú, Phường 04, Quận 5, Thành phố Hồ Chí Minh Tầng 12 khu Văn phòng tòa MIPEC, 229 Tây Sơn, Phường Ngã Tư Sở, Quận Đống Đa, Thành phố Hà Nội',
                'image' => 'CGSQtFPgvd7HKMXvon4l.png',
                'email' => 'FPT@gmail.com',
                'phone_number' => '0123456789',
                'created_at' => '2022-11-01 22:21:11',
            ], [
                'name_company' => 'Go2Joy Việt Nam',
                'user_id'=> '2',
                'website'=>'https://go2joy.com.vn/',
                'infor'=>'Tổng Công ty Dịch vụ số Go2Joy - Go2Joy  mang sứ mệnh sáng tạo những sản phẩm công nghệ đi đầu lĩnh vực Fintech và Big Data, với mong muốn digital hoá những hình thức kinh doanh truyền thống. , Hiện Viettel Digital đang tập trung phát triển một hệ sinh thái tài chính số với core chính là Viettel Money. Bên cạnh đó, chúng tôi cũng đang mở rộng hoạt động với nhiều dự án lớn trong các lĩnh vực Fintech, Big Data, AI, Blockchain,... và mong muốn chiêu mộ nhân tài hơn bao giờ hết.',
                'responsibility'=>'Tham gia phát triển các dự án trong Hệ sinh thái Tài chính số (Go2Joy Pay, Mobile Money, ví cá nhân, ví doanh nghiệp, ...) , Vui vẻ, hòa đồng, thân thiện, nhiệt tình trong công việc',
                'welfare'=>'Mức lương thu hút nhân tài, ứng viên tự thỏa thuận khi tham gia phỏng vấn , Có cơ hội làm việc trong một tập đoàn lớn nhưng môi trường không khác gì StartUp , Tham gia vào các dự án công ty.',
                'address' => '5A/2 Trần Phú, Phường 04, Quận 5, Thành phố Hồ Chí Minh Tầng 12 khu Văn phòng tòa MIPEC, 229 Tây Sơn, Phường Ngã Tư Sở, Quận Đống Đa, Thành phố Hà Nội',
                'image' => 'logo.4089b512.png',
                'email' => 'go2joyvn@gmail.com',
                'phone_number' => '0123456789',
                'created_at' => '2022-11-02 22:21:11',
            ], [
                'name_company' => 'SAMO',
                'user_id'=>'3',
                'website'=>'https://samo.com.vn/',
                'infor'=>'Tổng Công ty Dịch vụ số SaMo - SaMo  mang sứ mệnh sáng tạo những sản phẩm công nghệ đi đầu lĩnh vực Fintech và Big Data, với mong muốn digital hoá những hình thức kinh doanh truyền thống. , Hiện Viettel Digital đang tập trung phát triển một hệ sinh thái tài chính số với core chính là Viettel Money. Bên cạnh đó, chúng tôi cũng đang mở rộng hoạt động với nhiều dự án lớn trong các lĩnh vực Fintech, Big Data, AI, Blockchain,... và mong muốn chiêu mộ nhân tài hơn bao giờ hết.',
                'responsibility'=>'Tham gia phát triển các dự án trong Hệ sinh thái Tài chính số (SaMo Pay, Mobile Money, ví cá nhân, ví doanh nghiệp, ...) , Vui vẻ, hòa đồng, thân thiện, nhiệt tình trong công việc',
                'welfare'=>'Mức lương thu hút nhân tài, ứng viên tự thỏa thuận khi tham gia phỏng vấn , Có cơ hội làm việc trong một tập đoàn lớn nhưng môi trường không khác gì StartUp , Tham gia vào các dự án công ty.',
                'address' => 'quận Thủ Đức, thành phố Hồ Chí Minh',
                'image' => 'TopDev-LogoSAMO-1659088259.png',
                'email' => 'SAMO@gmail.com',
                'phone_number' => '0123456789',
                'created_at' => '2022-11-03 22:21:11',
            ], [
                'name_company' => 'TMA Solutions',
                'user_id'=>'4',
                'website'=>'https://tmasolutios.com.vn/',
                'infor'=>'Tổng Công ty Dịch vụ số TMA Solutions - TMA Solutions  mang sứ mệnh sáng tạo những sản phẩm công nghệ đi đầu lĩnh vực Fintech và Big Data, với mong muốn digital hoá những hình thức kinh doanh truyền thống. , Hiện Viettel Digital đang tập trung phát triển một hệ sinh thái tài chính số với core chính là Viettel Money. Bên cạnh đó, chúng tôi cũng đang mở rộng hoạt động với nhiều dự án lớn trong các lĩnh vực Fintech, Big Data, AI, Blockchain,... và mong muốn chiêu mộ nhân tài hơn bao giờ hết.',
                'responsibility'=>'Tham gia phát triển các dự án trong Hệ sinh thái Tài chính số (TMA Pay, Mobile Money, ví cá nhân, ví doanh nghiệp, ...) , Vui vẻ, hòa đồng, thân thiện, nhiệt tình trong công việc',
                'welfare'=>'Mức lương thu hút nhân tài, ứng viên tự thỏa thuận khi tham gia phỏng vấn , Có cơ hội làm việc trong một tập đoàn lớn nhưng môi trường không khác gì StartUp , Tham gia vào các dự án công ty.',
                'address' => '5A/2 Trần Phú, Phường 04, Quận 5, Thành phố Hồ Chí Minh Tầng 12 khu Văn phòng tòa MIPEC, 229 Tây Sơn, Phường Ngã Tư Sở, Quận Đống Đa, Thành phố Hà Nội',
                'image' => 'TopDev-logoleXQXRp4F3f6eLCRvvxOklk4Q5ctPEoh-1656988646.png',
                'email' => 'Solutions@gmail.com',
                'phone_number' => '0123456789',
                'created_at' => '2022-11-04 22:21:11',
            ], [
                'name_company' => 'Korean IT Companies ',
                'user_id' => '5',
                'website'=>'https://koreanIT.com.vn/',
                'infor'=>'Tổng Công ty Dịch vụ số TMA Korean IT Companies - Korean IT Companies  mang sứ mệnh sáng tạo những sản phẩm công nghệ đi đầu lĩnh vực Fintech và Big Data, với mong muốn digital hoá những hình thức kinh doanh truyền thống. , Hiện Viettel Digital đang tập trung phát triển một hệ sinh thái tài chính số với core chính là Viettel Money. Bên cạnh đó, chúng tôi cũng đang mở rộng hoạt động với nhiều dự án lớn trong các lĩnh vực Fintech, Big Data, AI, Blockchain,... và mong muốn chiêu mộ nhân tài hơn bao giờ hết.',
                'responsibility'=>'Tham gia phát triển các dự án trong Hệ sinh thái Tài chính số (Korean Pay, Mobile Money, ví cá nhân, ví doanh nghiệp, ...) , Vui vẻ, hòa đồng, thân thiện, nhiệt tình trong công việc',
                'welfare'=>'Mức lương thu hút nhân tài, ứng viên tự thỏa thuận khi tham gia phỏng vấn , Có cơ hội làm việc trong một tập đoàn lớn nhưng môi trường không khác gì StartUp , Tham gia vào các dự án công ty.',
                'address' => 'quận Thủ Đức, thành phố Hồ Chí Minh',
                'image' => 'logo-it-ocmp-AdqRx.jpg',
                'email' => 'Korean@gmail.com',
                'phone_number' => '0123456789',
                'created_at' => '2022-11-05 22:21:11',
            ], [
                'name_company' => 'TAPTAP',
                'user_id'=>'6',
                'website'=>'https://taptap.com.vn/',
                'infor'=>'Tổng Công ty Dịch vụ số TAPTAP - TAPTAP  mang sứ mệnh sáng tạo những sản phẩm công nghệ đi đầu lĩnh vực Fintech và Big Data, với mong muốn digital hoá những hình thức kinh doanh truyền thống. , Hiện Viettel Digital đang tập trung phát triển một hệ sinh thái tài chính số với core chính là Viettel Money. Bên cạnh đó, chúng tôi cũng đang mở rộng hoạt động với nhiều dự án lớn trong các lĩnh vực Fintech, Big Data, AI, Blockchain,... và mong muốn chiêu mộ nhân tài hơn bao giờ hết.',
                'responsibility'=>'Tham gia phát triển các dự án trong Hệ sinh thái Tài chính số (TAPTAP Pay, Mobile Money, ví cá nhân, ví doanh nghiệp, ...) , Vui vẻ, hòa đồng, thân thiện, nhiệt tình trong công việc',
                'welfare'=>'Mức lương thu hút nhân tài, ứng viên tự thỏa thuận khi tham gia phỏng vấn , Có cơ hội làm việc trong một tập đoàn lớn nhưng môi trường không khác gì StartUp , Tham gia vào các dự án công ty.',
                'address' => 'Quận 1, Hồ Chí Minh',
                'image' => 'TopDev-logoCmAkkDByOMNZJDE0e4VoD7vIhooacXEH-1654749314.jpg',
                'email' => 'TAPTAP@gmail.com',
                'phone_number' => '0123456789',
                'created_at' => '2022-11-06 22:21:11',
            ], [
                'name_company' => 'Aventra Group',
                'user_id'=>'7',
                'website'=>'https://aventra.com.vn/',
                'infor'=>'Tổng Công ty Dịch vụ số Aventra - Aventra  mang sứ mệnh sáng tạo những sản phẩm công nghệ đi đầu lĩnh vực Fintech và Big Data, với mong muốn digital hoá những hình thức kinh doanh truyền thống. , Hiện Viettel Digital đang tập trung phát triển một hệ sinh thái tài chính số với core chính là Viettel Money. Bên cạnh đó, chúng tôi cũng đang mở rộng hoạt động với nhiều dự án lớn trong các lĩnh vực Fintech, Big Data, AI, Blockchain,... và mong muốn chiêu mộ nhân tài hơn bao giờ hết.',
                'responsibility'=>'Tham gia phát triển các dự án trong Hệ sinh thái Tài chính số (Aventra Pay, Mobile Money, ví cá nhân, ví doanh nghiệp, ...) , Vui vẻ, hòa đồng, thân thiện, nhiệt tình trong công việc',
                'welfare'=>'Mức lương thu hút nhân tài, ứng viên tự thỏa thuận khi tham gia phỏng vấn , Có cơ hội làm việc trong một tập đoàn lớn nhưng môi trường không khác gì StartUp , Tham gia vào các dự án công ty.',
                'address' => 'Hồ Chí Minh',
                'image' => 'TopDev-4725e148-96ec-4048-8de8-e41e3959686b-PhuongNguyen-1666144852.jpg',
                'email' => 'Aventra@gmail.com',
                'phone_number' => '0123456789',
                'created_at' => '2022-11-08 22:21:11',
            ]
        ]);
    }
}