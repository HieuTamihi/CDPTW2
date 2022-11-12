<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'comment_id' => '2',
                'customer_id' => '3',
                'title' => 'Tình hình hiện tại và tương lai của IoT năm 2022',
                'content' => 'Ở thời điểm viết bài này về IoT, thời gian của năm 2022 đã lùi về những tháng cuối cùng, quý cuối cùng của năm. Trước khi kết thúc năm 2022 trong khoảng 2 tháng nữa, hãy cùng mình nhìn lại những gì IoT đã đạt được trong năm qua, tương lai của nghành IoT như thế nào trong năm 2023 sắp tới đây.
                Rõ ràng mà nói, năm qua là một năm khó khăn cho cả thế giới, từ kinh tế, chính trị cho tới các bất ổn khác về chính trị. Cho dù gặp phải những khó khăn lớn như vậy, thị trường IoT năm 2022 (tính tới thời điểm đầu tháng 11), vẫn phát triển nhanh theo cấp số nhân.
                Theo số liệu thống kê, IoT phát triển với tốc độ tăng trưởng kép hằng năm là 26,4%. Quy mô của toàn thị trường sẽ đạt 2,5 nghìn tỷ USD vào năm 2029. Gấp năm lần so với quy mô thị trường dự đoán hiện nay là 0,5 nghìn tỷ đô.',
                'image' => '11277_2021_8907_Fig4_HTML.jpg',
                'views' => '1',
                'created_at' => '2022-11-01'
            ],
            [
                'comment_id' => '4',
                'customer_id' => '5',
                'title' => 'AngularJS Là Gì? Khác Biệt Nào Giữa Angular Và Frontend Framework Khác',
                'content' => 'AngularJS từ lâu đã là một web application framework phổ biến, nhưng AngularJS là gì? Hiện tại Angular còn đang phổ biến hay không?. Có nên tiếp tục học Angular hay không? Tất cả những câu hỏi này sẽ được giải đáp tường tận trong bài viết dưới đây.
                Mong là thông qua bài viết này, sẽ nhiều hơn anh em định dấn thân vào frontend sẽ lựa chọn Angular là ngôn ngữ chiến đấu của mình.',
                'image' => 'JAngualrjs-la-gi-1-1024x538.jpg',
                'views' => '1',
                'created_at' => '2022-11-02'
            ],
            [
                'comment_id' => '1',
                'customer_id' => '1',
                'title' => 'Lộ trình từng bước trở thành Machine Learning Engineer',

                'content' => 'Anh em đang trông chờ, háo hức từng bước từng bước một trở thành Machine Learning Engineer?. Nếu đúng, bài viết này đích thị là dành cho anh em.
                Trong bài mình sẽ liệt kê đầy đủ, tuần tự 6 bước (cũng có thể xem là 6 kỹ năng) để anh em trở thành Machine Learning Engineer đích thực. Lưu ý là 6 bước là ý kiến tổng hợp và có thể khác đi tuỳ vào trình độ, lộ trình và khả năng tiếp cận của từng anh em nhá.
                Trước khi bắt đầu phân tích từng thành phần, để tui liệt kê ra trước cho anh em 6 kỹ năng cần có cho Deep Learning:
                1. Kỹ năng toán – Maths Skills.
                2. Kỹ năng lập trình – Programming Skills.
                3. Kỹ năng xử lý dữ liệu – Data Engineering Skills.
                4. Hiểu biết về học máy – Machine Learning Knowledge.
                5. Hiểu biết về deep learning – Knowledge of DL Algorithms.
                6. Hiểu biết về các deep learning framework – Knowledge of DL Frameworks.
                Tại sao lại là Deep Learning?, rồi anh em vào mục 1 sẽ thấy ngay.',
                'image' => '60f6feb4be651f666b46194a_AI-vs-Machine-Learning-vs-Deep-Learning-1024x1024.jpg',
                'views' => '2',
                'created_at' => '2022-11-03'

            ],
            [
                'comment_id' => '1',
                'customer_id' => '1',
                'title' => 'Mức lương Lập trình viên tại Việt Nam năm 2022',
                'content' => 'Thực tế hiện nay, khi Công nghệ hiện hữu hầu hết khắp nơi trong đời sống con người, nghề làm IT càng trở nên thu hút hơn bao giờ hết. Và nghe đến “làm IT”, thì có lẽ thu nhập và cơ hội thăng tiến sẽ là những chủ đề được quan tâm nhất. Trong bài viết này, hãy cùng mình tham khảo mức lương các vị trí Lập trình 2022 qua những thống kê từ Báo cáo thị trường IT Việt Nam – Tech Hiring 2022 do TopDev phát hành nhé! Giờ thì… bắt đầu thôi nào!
                Báo cáo thị trường IT Việt Nam – Tech Hiring 2022 do TopDev phát hành đã đưa ra bảng so sánh mức lương giữa các vị trí lập trình mới nhất trong năm 2022. Các vị trí ngành lập trình có mức lương dao động từ 8 – 140 triệu/tháng.
                Mức lương lập trình viên theo Công nghệ & lĩnh vực
                Xếp hạng các công nghệ được trả lương cao nhất có thể được chia thành 2 nhóm lớn: High-tech liên quan đến xu hướng AI / ML (Kubernetes, Tensor Flows, Python) và Điện toán đám mây (AWS, GCP, Azure). Nhóm thứ hai là các công nghệ mới nổi – Unity và xu hướng play-to-earn & NFT.
                Theo Báo cáo thị trường IT Việt Nam – Tech Hiring 2022, Lập trình viên với từ 1 đến 3 năm kinh nghiệm làm về AWS có mức lương Gross trung bình $1,775; đối với GCP là $1,698; với Azure là $1,526. Mức lương Lập trình viên làm về các công nghệ thuộc nhóm High Tech bao gồm Tensor Flows, Kubernetes, Python,  lần lượt đạt mức $1,732, $1,669, $1,389. Mức lương Gross của Lập trình viên Unity hiện ở mức trung bình $1,378/tháng khi có từ 1 đến 3 năm kinh nghiệm.',
                'image' => 'TopDev_VietnamITMarketReport_TechHiring2022-copy-20-768x494.jpg',
                'views' => '3',
                'created_at' => '2022-11-04'

            ],
            [
                'comment_id' => '1',
                'customer_id' => '1',
                'title' => 'Kỹ Sư Cầu Nối (BrSE) Là Gì? BrSE Cần Học Những Gì?',
                'content' => 'Kỹ sư cầu nối là gì? BrSE là gì? Ngày càng nhiều tin tuyển dụng BrSE, Kỹ sư cầu nối xuất hiện. Liệu rằng đây là vị trí liên quan đến “cầu, đường”? Con đường sự nghiệp của Kỹ sư cầu nối như thế nào? Cùng mình giải đáp những câu hỏi này bằng thông tin bên dưới.
                Kỹ sư cầu nối (BrSE) là gì?
                Kỹ sư cầu nối hay BrSE (Bridge Software Engineer) là người có trách nhiệm kết nối công ty với khách hàng. Họ giúp team thực hiện dự án hiểu rõ mục tiêu, yêu cầu của khách hàng, đồng thời giúp khách hàng hiểu về quá trình phát triển sản phẩm của team. Từ đó, đảm bảo việc hai bên hiểu nhau, tiến triển của dự án diễn ra thuận lợi và đạt hiệu quả.
                Để làm được điều này, kỹ sư cầu nối phải luôn theo sát tiến độ dự án, từ giai đoạn nhận yêu cầu đến khi bàn giao sản phẩm. ',
                'image' => 'ky-su-cau-noi-brse-la-gi-1-2048x1365.jpg',
                'views' => '4',
                'created_at' => '2022-11-05'

            ],
            [
                'comment_id' => '1',
                'customer_id' => '1',
                'title' => 'Fresher, Junior, Senior là gì? Yêu cầu và nhiệm vụ',
                'content' => 'Fresher, Junior, Senior là gì? Chắc hẳn bạn không ít lần nghe mọi người nhắc đến những từ này nhỉ! Cụ thể, đây là những từ chỉ mức độ kinh nghiệm của người lao động trong nhiều ngành nghề. Với IT cũng vậy:
                Fresher là những Developer mới học nghề
                Junior là những bạn đã làm việc được một thời gian
                Senior với nhiều năm làm việc và dày dạn kinh nghiệm
                Tổng quan là như thế nhưng chi tiết và cách xác định chính xác thì chưa có một thông tin thống nhất nào cả. Như chúng ta đều biết, những tên gọi này thay đổi tùy theo công ty và tùy theo công việc. Dưới đây, mình sẽ đưa ra một góc nhìn trong yêu cầu công việc và mức độ nhiệm vụ của những cấp bậc này.
                Fresher Developer là gì?
                Fresher Developer chỉ những bạn lập trình viên đã có đủ kiến thức chuyên môn nhưng chưa có kinh nghiệm thực chiến. Hoặc các bạn đã tham gia vào dự án thực tế, tuy nhiên đều được giám sát và giúp đỡ bởi những người có kinh nghiệm. Thường lập trình viên Fresher có kinh nghiệm làm việc dưới 6 tháng.
                Yêu cầu chính cho vị trí Fresher
                Hiểu rõ các khái niệm về lập trình hướng đối tượng (OOP), HTML, CSS.
                Kỹ năng code – bất kỳ ngôn ngữ nào mà bạn cảm thấy thích và tự tin: C, JAVA, Python,…
                Thái độ sẵn sàng học hỏi và tiếp thu công nghệ mới là điều mà hầu hết doanh nghiệp đều săn đón.
                Mức độ thực hiện nhiệm vụ
                Fix những lỗi nhỏ
                Thực hiện nhiệm vụ cụ thể theo sự hướng dẫn của leader
                Làm quen với công cụ, xây dựng dần kỹ năng làm việc.',
                'image' => 'Fresher-la-gi-768x512.jpg',
                'views' => '5',
                'created_at' => '2022-11-06'

            ],
            [
                'comment_id' => '1',
                'customer_id' => '1',
                'title' => 'Cách lập trình viên chọn một công ty tốt',
                'content' => 'Nếu bạn vẫn còn đang ngồi trên giảng đường đại học, xin chúc mừng bạn những chia sẻ của mình dưới đây, có thể giúp bạn hiểu và có định hướng rõ ràng hơn mình thời còn là sinh viên. Nếu bạn đã đi làm rồi thì cũng nên tham khảo những chia sẻ này nó có thể giúp bạn ít nhiều.
                Thời mình còn là sinh viên, mình rất sợ hai từ thất nghiệp nó ám ảnh mình khiến mình học tập rất chăm chỉ, chỉ mong rằng sự cố gắng của mình sẽ được đền đáp sau đó. Thời điểm đó mình chỉ có một hy vọng duy nhất là được nhận vào một công ty nào đó, để học hỏi và lấy kinh nghiệm, mình cũng không mường tượng được một công ty tốt nó trông như nào, được gì và mất gì khi xin việc vào một công ty. Đến khi vào làm việc tại công ty A, B, C thì mình vẫn chỉ biết cố gắng trau dồi, học hỏi mỗi ngày để có được càng nhiều kiến thức và kinh nghiệm càng tốt. Mình đã cày như một cái máy, thật sự đó. Nhưng chắc chắn đó là cái nhân mình đã gieo, sau gần 4 năm lăn lộn thì mình thấy trước mắt mình có nhiều cánh cửa rộng mở hơn, có nhiều sự lựa chọn hơn và mình có thể đúc kết được thế nào là một công ty tốt để mình có thể cống hiến lâu dài.
                Dưới đây có những câu hỏi mà bạn nên tự đặt ra cho bạn, để bạn có thể tìm được con đường đi của mình nhé.',
                'image' => 'Leadership-and-teamwork-concept-768x476.jpg',
                'views' => '6',
                'created_at' => '2022-11-07'

            ],
            [
                'comment_id' => '1',
                'customer_id' => '1',
                'title' => 'Các Công Ty IT Tại TPHCM',
                'content' => 'Công nghệ thông tin hiện đang phát triển như vũ bão và IT cũng là ngành được nhiều bạn trẻ lựa chọn cho con đường sự nghiệp . Tại Việt Nam, Hà Nội và Tp HCM có thể xem là hai trung tâm công nghệ lớn nhất cả nước với hàng loạt công ty công nghệ. Bài viết này trước tiên sẽ tổng hợp cho bạn những công ty IT tại Tp HCM bao gồm cả những công ty nước ngoài và công ty Việt Nam.
                *Thứ tự trong bài viết chỉ nhằm liệt kê các công ty, không nhằm mục đích xếp hạng hay đánh giá
                Các công ty IT nước ngoài tại TPHCM
                KMS Technology
                Đôi chút về KMS Technology thì đây là công ty outsource (90%), là một trong những công ty hàng đầu chuyên cung cấp các dịch vụ phát triển sản phẩm và các giải pháp chuyển đổi số.
                Hitachi Vantara Vietnam (HVN) – Global Cybersoft
                Hitachi Vantara Vietnam (trước đây là Global CyberSoft), đây là công ty có nhiều năm kinh nghiệm trong việc cung cấp các giải pháp CNTT và dịch vụ tích hợp hệ thống trong các lĩnh vực chuyển đổi số, phát triển phần mềm, quản lý doanh nghiệp ERP, hệ thống nhúng và dịch vụ quản trị (managed services).
                Harvey Nash
                Harvey Nash được đánh giá rất cao trong dịch vụ thuê ngoài công nghệ thông tin/ dịch vụ nghiệp vụ doanh nghiệp, lĩnh vực tìm kiếm nhân sự cấp cao.
                Dek technologies
                Được thành lập tại Melbourne Australia vào năm 1999, DEK Technologies tự hào là một trong những công ty hàng đầu trong lĩnh vực cung cấp các giải pháp về phần cứng và phần mềm với đội ngũ kỹ sư có kinh nghiệm lên đến gần 700 người tại 5 quốc gia, trong đó có Việt Nam. DEK Technologies đã, đang và sẽ luôn cố gắng mang lại cho nhân viên quyền tự chủ và sự thoải mái nhất vì Công ty luôn tin sự cởi mở và công bằng trong môi trường làm việc là chìa khóa cho sự thành công bền vững.
                ',
                'image' => 'cong-ty-nuoc-ngoai-tai-vn.jpg',
                'views' => '7',
                'created_at' => '2022-11-08'

            ],
        ]);
    }
}