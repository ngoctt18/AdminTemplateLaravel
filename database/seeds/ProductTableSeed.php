<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Product::create([
    		'name' => 'Sữa Nan Nga số 1 (800g)', 
    		'slug' => 'Sữa Nan Nga số 1 (800g)', 
    		'price' => 419500, 
    		'discount' => 0, 
    		'brand' => 'Nan', 
    		'description' => 'Vi khuẩn biphidum BL tăng cường khả năng miễn dịch cho trẻ nhỏ DHA chính là (omega 3) và ARA (omega 6) phát triển não bộ, thị giác Chất đạm OPTIPRO phát triển chiều cao tối đa', 
    		'intro' => 'Sữa bột Nan Nga số 1 800g để bé phát triển toàn diện Sữa bột Nan Nga số 1 800g hộp lớn là sữa bột cho bé yêu được chế biến theo công thức dành cho trẻ sơ sinh để đảm bảo tăng trưởng lành mạnh cho bé từ khi mới sinh. Trong thành phần có chứa Bifidus BL là 1 loại probiotic tự nhiên được tìm thấy trong sữa mẹ giúp hỗ trợ một hệ thực vật đường ruột khỏe mạnh và cân bằng hệ miễn dịch. Cách pha: 30ml nước/ 1 thìa bột (thìa có sẵn trong hộp). Sản phẩm đóng hộp 800gr Dành cho bé 0-6 tháng tuổi', 
    		'catagory_id' => 3, 
    		'distribution_id' => 7, 
    	]);
    	Product::create([
    		'name' => 'Sữa Nan Supreme số 2 800g Thụy Sĩ', 
    		'slug' => 'Sữa Nan Supreme số 2 800g Thụy Sĩ', 
    		'price' => 492000 , 
    		'discount' => 0, 
    		'brand' => 'Nan', 
    		'description' => 'Bổ sung 31 dưỡng chất giúp trẻ phát triển toàn diện Chứa HMO tăng cường sức đề kháng của trẻ Chứa DHA và ARA phát triển trí não và thị lực 800g dành cho bé từ 6-24 tháng tuổi', 
    		'intro' => 'Sữa Nan Supreme số 2 800g Thụy Sĩ phòng ngừa dị ứng cho trẻ Sữa Nan Supreme số 2 800g Thụy Sĩ bổ sung 2FL HM-O giúp tăng cường hệ miễn dịch giúp bé phát triển khỏe mạnh Đây là dòng sữa công thức được chứng nhận an toàn cho trẻ bởi EFSA (Ủy ban An Toàn Thực Phẩm Châu Âu) và FDA (Cục Quản lý Thực phẩm và Dược Phẩm Hoa Kỳ) Đặc biệt trong sữa có bổ sung thành phần HMO (Oligosaccharides chỉ tìm thấy trong sữa mẹ) giúp tăng cường sức đề kháng cho bé yêu Sữa Nan Supreme số 2 800g Thụy Sĩ có 100% đạm whey thủy phân một phần phòng ngừa nguy cơ dị ứng cho trẻ Sản phẩm được nhập khẩu chính hãng từ Đức', 
    		'catagory_id' => 3, 
    		'distribution_id' => 7, 
    	]);
    	Product::create([
    		'name' => 'Sữa Nan Supreme số 1 400g Thụy Sĩ', 
    		'slug' => 'Sữa Nan Supreme số 1 400g Thụy Sĩ', 
    		'price' => 432000 , 
    		'discount' => 0, 
    		'brand' => 'Nan', 
    		'description' => 'Bổ sung 31 dưỡng chất giúp trẻ phát triển toàn diện Chứa HMO tăng cường sức đề kháng của trẻ Chứa DHA và ARA phát triển trí não và thị lực 800g dành cho bé từ 6-24 tháng tuổi', 
    		'intro' => 'Sữa Nan Supreme số 1 400g Thụy Sĩ phòng ngừa dị ứng cho trẻ Sữa Nan Supreme số 1 400g Thụy Sĩ bổ sung 2FL HM-O giúp tăng cường hệ miễn dịch giúp bé phát triển khỏe mạnh Sản phẩm là dòng sữa công thức được chứng nhận an toàn cho trẻ bởi FDA (Cục Quản lý Thực phẩm và Dược Phẩm Hoa Kỳ) và EFSA (Ủy ban An Toàn Thực Phẩm Châu Âu) Sữa bổ sung HMO (Oligosaccharides trong sữa mẹ) là thành phần đặc biệt chỉ được tìm thấy trong sữa mẹ giúp tăng cường sức đề kháng cho bé yêu Sữa Nan Supreme số 1 400g Thụy Sĩ có 100% đạm whey thủy phân một phần phòng ngừa nguy cơ dị ứng cho trẻ Sản phẩm được nhập khẩu hoàn toàn từ Đức', 
    		'catagory_id' => 3, 
    		'distribution_id' => 7, 
    	]);



    	Product::create([
    		'name' => 'Sữa Abbott Grow Gold 6+ hương vani 900g', 
    		'slug' => 'Sữa Abbott Grow Gold 6+ hương vani 900g', 
    		'price' => 380000  , 
    		'discount' => 0, 
    		'brand' => 'Abbott', 
    		'description' => 'Hệ dưỡng chất tiên tiến Growth Power hỗ trợ tiêu hóa, phát triển vượt trội Phát triển não bộ, tăng cường trí nhớ Giúp bé luôn khỏe mạnh, phát triển chiều cao 900g dành cho bé từ 5 tuổi trở lên Thương hiệu Abbott Hoa Kỳ', 
    		'intro' => 'Sữa Abbott Grow Gold 6+ hương vani 900g Từ 6 tuổi trở lên, bé cần một hệ dưỡng chất mới để vừa đáp ứng đủ nhu cầu dinh dưỡng hàng ngày cho hoạt động thể chất mà còn cần phải kích thích sự phát triển của não bộ, khả năng sáng tạo của trẻ nữa. Sữa bột công thức Abbott Grow Gold 6+ với hệ dưỡng chất tiên tiến Growth Power chứa hóa 30 dưỡng chất gồm cả DHA, Cholin, và hàm lượng Canxi tối ưu, đáp ứng đầy đủ nhu cầu dinh dưỡng, hỗ trợ sự tăng trưởng và phát triển vượt trội của trẻ trong suốt giai đoạn đến trường.', 
    		'catagory_id' => 9, 
    		'distribution_id' => 2, 
    	]);
    	Product::create([
    		'name' => 'Sữa Abbott Grow 4 hương Vani 900g', 
    		'slug' => 'Sữa Abbott Grow 4 hương Vani 900g', 
    		'price' => 320000  , 
    		'discount' => 0, 
    		'brand' => 'Abbott', 
    		'description' => 'Hàm lượng canxi và vitamin D cao hỗ trợ phát triển chiều cao tối ưu Hàm lượng DHA, Taurin, Omega 9 giúp trẻ phát triển trí não và thị giác. Tăng cường sức đề kháng trẻ nhỏ Dành cho bé trên 2 tuổi Hương vani 900g - Hoa Kỳ', 
    		'intro' => 'Sữa bột cho bé Abbott Grow 4 hương Vani 900g dành cho các bé từ 2 tuổi trở lên Nguyên liệu Sữa Abbott grow 4 toàn phần bổ sung lecithin và sữa tách kem (58,3%), mật bắp, sucrose, lactose, KHOÁNG CHẤT (canxi carbonat, sắt sulfat, kẽm sulfat, mangan sulfat, đồng sulfat), VITAMIN (acid ascorbic, cholin bitartrat, vitamin E acetat, niacinamid, vitamin D3, vitamin A acetat, pyridoxin hydroclorid, canxi pantothenat, thiamin hydroclorid, vitamin K1, riboflavin, acid folic, d-biotin), hương vani, dầu cá (nguồn cung cấp DHA), taurin.', 
    		'catagory_id' => 9, 
    		'distribution_id' => 2, 
    	]);
    	Product::create([
    		'name' => 'Sữa Abbott Grow Gold 3+ hương Vani 900g', 
    		'slug' => 'Sữa Abbott Grow Gold 3+ hương Vani 900g', 
    		'price' => 378000   , 
    		'discount' => 0, 
    		'brand' => 'Abbott', 
    		'description' => 'Hệ dưỡng chất tiên tiến G Power+ giàu dưỡng chất và protein Giàu vitamin D, Canxi, phốt pho tốt cho xương, phát triển chiều cao DHA, Taurin, Cholin, kẽm, sắt, đồng, I ốt,...tố cho não bộ và thị giác Trọng lượng 900g - Hoa Kỳ Dành cho bé từ 3-6 tuổi', 
    		'intro' => 'Sữa bột cho bé Abbott Grow Gold 3+ hương Vani 900g Nguyên liệu Sữa tách kem và sữa nguyên kem bổ sung lecithin (60,3%), lactose, sucrose, mật bắp, KHOÁNG CHẤT (tricanxi phosphat, sắt sulfat, kẽm sulfat, đồng sulfat, mangan sulfat, natri selenat), hỗn hợp inulin và fructo-oligosaccharid, hương vani, VITAMIN (cholin bitartrat, natri ascorbat, vitamin E acetat, niacinamid, vitamin D3, vitamin A acetat, canxi pantothenat, pyridoxin hydroclorid, thiamin hydroclorid, acid folic, vitamin K1, d-biotin, cyanocobalamin), dầu cá tinh chế (nguồn cung cấp DHA), taurin.', 
    		'catagory_id' => 9, 
    		'distribution_id' => 2, 
    	]);


    	Product::create([
    		'name' => 'Sữa Enfamil Premium Infant Formula (0-12 tháng)', 
    		'slug' => 'Sữa Enfamil Premium Infant Formula (0-12 tháng)', 
    		'price' => 630000   , 
    		'discount' => 0, 
    		'brand' => 'Enfa', 
    		'description' => 'Bổ sung DHA, sắt, choline tốt cho trí não và thị lực của trẻ Vitamin và khoáng chất giúp bé phát triển toàn diện về thể chất và tinh thần Sánh vừa đủ, thơm ngon, không ngấy Dành cho bé từ 0-12 tháng tuổi Trọng lượng: 629g', 
    		'intro' => 'Sữa cho bé Enfamil Premium Infant Formula (0-12 tháng) Sản phẩm kết hợp công thức độc quyền Neuro Complete cùng với các loại vitamin và khoáng chất của bé là DHA, sắt, choline đem tốt cho não bộ và thị lực của trẻ nhỏ Sữa bột cho bé Enfamil Premium Infant Formula (0-12 tháng) là nguyên liệu hết sức thần khiết mẹ không lo bé bị dị ứng khi uống..', 
    		'catagory_id' => 6, 
    		'distribution_id' => 5, 
    	]);
    	Product::create([
    		'name' => 'Sữa Enfagrow Premium Toddler Next Step (1-3 tuổi)', 
    		'slug' => 'Sữa Enfagrow Premium Toddler Next Step (1-3 tuổi)', 
    		'price' => 600000   , 
    		'discount' => 0, 
    		'brand' => 'Enfa', 
    		'description' => 'Bổ sung 22 khoáng chất hỗ trợ tăng trưởng lành mạnh Sữa bổ sung Omega 3 DHA và cắt tốt cho não bộ Tăng sức đề kháng, chống tác nhân oxy hóa nhờ vitamin C và E Trọng lượng: 680g', 
    		'intro' => 'Sữa bột cho bé Enfagrow Premium Toddler Next Step (1-3 tuổi) Nhìn bé chập chững những bước đi đầu tiên cũng như bắt đầu bập bẹ gọi tiếng ba, má là niềm vui vô bờ bến của những người làm cha làm mẹ. Giai đoạn này rơi vào độ tuổi từ 1-3 và cũng là lúc bé cần bổ sung dinh dưỡng và năng lượng cần thiết để phát triển chiều cao, cân nặng tối đa bắt kịp đà phát triển của các bé cùng trang lưa. Chính vì thế, thương hiệu Mead Johnson đã nghiên cứu thành công sản phẩm sữa đáp ứng đủ năng lượng cho hoạt động và phát triển hàng ngày đó là sữa bột cho bé Enfagrow Premium Toddler Next Step (1-3 year) 680g.', 
    		'catagory_id' => 6, 
    		'distribution_id' => 5, 
    	]);
    	Product::create([
    		'name' => 'Sữa Enfagrow A+ 360° Brain DHA số 4 (1.8kg)', 
    		'slug' => 'Sữa Enfagrow A+ 360° Brain DHA số 4 (1.8kg)', 
    		'price' =>  865000   , 
    		'discount' => 5, 
    		'brand' => 'Enfa', 
    		'description' => 'Dành cho bé từ 2 - 6 tuổi Tăng thêm 40% hàm lượng DHA Bổ sung MFGM Pro giúp bé phát triển trí não tốt hơn cả về TƯ DUY và CẢM XÚC Hỗ trợ hệ miễn dịch 3 chiều Dễ hấp thụ và tiêu hóa tốt.', 
    		'intro' => 'Sữa bột dinh dưỡng Enfagrow A+ 360° Brain DHA số 4 (1.8kg) Độ tuổi sử dụng: Các bé từ 2-6 tuổi.', 
    		'catagory_id' => 6, 
    		'distribution_id' => 5, 
    	]);
    	Product::create([
    		'name' => 'Sữa Enfagrow A+ 360° Brain DHA số 3 (900g)', 
    		'slug' => 'Sữa Enfagrow A+ 360° Brain DHA số 3 (900g)', 
    		'price' =>  512000   , 
    		'discount' => 0, 
    		'brand' => 'Enfa', 
    		'description' => 'Dành cho bé từ 1-3 tuổi Bổ sung MFGM Pro giúp bé phát triển trí não tốt hơn cả về TƯ DUY và CẢM XÚC Hỗ trợ hệ miễn dịch 3 chiều Dễ hấp thụ và tiêu hóa tốt.', 
    		'intro' => 'Sữa Enfagrow A+ 360° Brain DHA số 3 (900g) Thành phần: Bột bơ sữa (nguồn của MGFM), bột kem (dầu hạt cải, chất rắn glucose, dầu hướng dương, lactose, dầu dừa, dầu đậu nành, đạm bơ cô đặc, mono và diglycerides, kali citrat, đạm sữa cô lập, natri ascorbat, kali phosphat, ascorbyl palmitat, vitamin E và lecithin đậu nành), Siro mật bắp (thực vật), sữa bột không béo, sữa bột nguyên kem, đường sucrose (thực vật), galactooligosaccharide, polydextrose, các khoáng chất (canxi carbonat, đồng sulphat, magie phốtphat, kẽm sulphat, sắt sulphat, mangan sulphat, kali i-ot và kali citrat), hương vani tổng hợp, các vitamin cần thiết (vitamin A palmitat, vitamin B1, B6, vitamin B12, vitamin C, vitamin D, vitamin K, vitamin E, biotin, canxi phanthothenat, choline bitartrate, acid folic, vitamin PP, vitamin K), dầu cá lá nguồn của Axit Docosahexaenoic (DHA), beta-glucan từ men, taurine và các chất chống oxy hóa (Axit ascobic).', 
    		'catagory_id' => 6, 
    		'distribution_id' => 5, 
    	]);
    	Product::create([
    		'name' => 'Sữa Enfamil A+ Lactofree Care hộp 400g', 
    		'slug' => 'Sữa Enfamil A+ Lactofree Care hộp 400g', 
    		'price' =>  235000   , 
    		'discount' => 0, 
    		'brand' => 'Enfa', 
    		'description' => 'Không chứa đường lactose Chứa đạm nguồn gốc sữa bò Hàm lượng DHA khuyến nghị của các chuyên gia Dành cho bé từ 0 - 12 tháng tuổi.', 
    		'intro' => 'Sữa Enfamil A+ Lactofree Care hộp 400g giúp bé phát triển thể chất và sức khỏe toàn diện Được đặc chế cho trẻ bị tiêu chảy do bất (không) dung nạp lactose. Đây là sản phẩm dinh dưỡng đặc biệt với đạm sữa bò và không chứa lactose. Được đặc chế hỗ trợ phát triển trí tuệ và thị lực ở trẻ nhỏ do chứa DHA & ARA. Hàm lượng của DHA trong sản phẩm giúp đạt khuyến nghị của FAO/WHO cho trẻ 0-12 tháng sinh đủ tháng.', 
    		'catagory_id' => 6, 
    		'distribution_id' => 5, 
    	]);
    }
}
