<?php

use Illuminate\Database\Seeder;
use App\CatagoriesType;

class CatagoryTypeTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
    	$catagoryType = CatagoriesType::create([
    		'name' => 'Sữa bột cho bé', 
    		'slug' => 'Sữa bột cho bé', 
    	]);
        $catagoryType->catagories()->createMany([
            ['name' => 'Sữa Meiji', 'slug' => 'Sữa Meiji', 'description' =>'Sữa Meiji bán chạy số 1 Nhật Bản là sữa mát Tốt Cho Hệ Tiêu Hóa chống táo bón hiệu quả, đồng thời bổ sung đầy đủ DHA giúp bé Phát Triển Toàn Diện.'],
            ['name' => 'Glico ICreo', 'slug' => 'Glico ICreo', 'description' =>'Sữa Icreo Glico với công thức đặc biệt gần giống sữa mẹ nhất giúp bé phát triển toàn diện tốt cho hệ tiêu hóa của trẻ. Sữa bột Glico bổ sung đầy đủ DHA và các dưỡng chất cần thiết cho bé.'],
            ['name' => 'Sữa Nan', 'slug' => 'Sữa Nan', 'description' =>'Sữa Nan là một dòng sữa mát nổi tiếng được các bà mẹ tin dùng. Sữa chứa các thành phần dinh dưỡng quan trọng giúp bé phát triển về não bộ, khả năng tiếp thu nhanh, phát triển về thị giác, hệ tiêu hóa tốt, hệ miễn dịch cao và cân bằng thể chất, cân nặng.'],
            ['name' => 'Sữa Pediasure', 'slug' => 'Sữa Pediasure', 'description' =>'Sữa Pediasure là một trong những sản phẩm sữa bột nổi tiếng của Abbott Hoa Kỳ được nhập khẩu chính hãng từ Úc, Singapore và Mỹ đặc trị chứng biếng ăn, thoát khỏi tình trạng còi xương và suy dinh dưỡng ở trẻ nhỏ.'],
            ['name' => 'Sữa Similac', 'slug' => 'Sữa Similac', 'description' =>'Sữa Similac được sản xuất theo công thức dinh dưỡng sữa mẹ chứa đầy đủ các dưỡng chất thiết yếu giúp bé tăng trưởng và phát triển khỏe mạnh.'],
            ['name' => 'Sữa Enfa', 'slug' => 'Sữa Enfa', 'description' =>'Sữa Enfa là một trong những loại sữa bột nổi tiếng được rất nhiều người biết đến, là sự kết hợp độc đáo của nhiều dưỡng chất quan trọng cho sự phát triển toàn diện và chức năng não bộ của bé. '],
            ['name' => 'Sữa Friso', 'slug' => 'Sữa Friso', 'description' =>'Sữa Friso là sản phẩm sữa bột cho bé được rất nhiều các bà mẹ lựa chọn sử dụng cho con yêu bởi sản phẩm luôn chú trọng đến sự phát triển hệ miễn dịch và trí não tốt nhất của trẻ.'],
            ['name' => 'Sữa XO', 'slug' => 'Sữa XO', 'description' =>'Sữa XO là một trong những loại sữa bột cho bé được các hàng triệu bà mẹ trên thế giới tin dùng, với những thành phần dưỡng chất có trong sữa giúp trẻ phát triển toàn diện.'],
            ['name' => 'Sữa Abbott Grow', 'slug' => 'Sữa Abbott Grow', 'description' =>'Abbott Grow thương hiệu sữa số 1 HOA KỲ được cả thế giới tin dùng. Với công thức đặc biệt chứa AHA, DHA, Cholin, Taurin, Canxi cùng các vitamin và khoáng chất thiết yếu giúp bé phát triển toàn diện bé cao hơn, thông minh hơn, mắt sáng hơn.'],
            ['name' => 'Sữa Physiolac', 'slug' => 'Sữa Physiolac', 'description' =>'PHYSIOLAC là dòng sản phẩm được các bà mẹ tại Pháp cũng như toàn thế giới tin tưởng lựa chọn là người bạn đồng hành giúp bé yêu phát triển tốt nhất. '],
            ['name' => 'Sữa Hipp', 'slug' => 'Sữa Hipp', 'description' =>'Sữa bột HiPP cung cấp protein ở dạng dễ tiêu hóa nhất, các loại vitamin, khoáng chất và các dưỡng chất cần thiết để con yêu phát triển toàn diện với cơ thể khỏe mạnh, trí não thông minh và mau lớn. Với công thức mới giúp bé ăn ngon miệng và phù hợp với tiêu hóa của trẻ.'],
            ['name' => 'Sữa Gallia', 'slug' => 'Sữa Gallia', 'description' =>'Gallia sữa số 1 tại Pháp được các bà mẹ Châu Âu tin tưởng sử dụng. Với công thức riêng biệt giúp bổ sung đầy đủ chất dinh dưỡng cho trẻ nhỏ.'],
            ['name' => 'Sữa Morinaga', 'slug' => 'Sữa Morinaga', 'description' =>'Sữa Morinaga Nhật Bản hỗ trợ tăng cân và phát triển chiều cao toàn hiện, là dòng "sữa rau" sữa mát hỗ trợ tình trạng táo bón ở trẻ. Morinaga là loại sữa được các bác sĩ ở Viện "Nhi" của Nhật thường sử dụng cho trẻ.'],
            ['name' => 'Sữa Aptamil', 'slug' => 'Sữa Aptamil', 'description' =>'Sữa Aptamil Anh là một trong những dòng sữa nổi tiếng và bán chạy nhất Châu Âu hiện nay. Sữa được công ty Danone Việt Nam nhập khẩu và phân phối độc quyền tại Việt Nam với công thức sữa được cho là giống sữa mẹ nhất.'],
        ]);


        // 
    	$catagoryType = CatagoriesType::create([
    		'name' => 'Sữa tươi',
    		'slug' => 'Sữa tươi',
    	]);

        // 
    	$catagoryType = CatagoriesType::create([
    		'name' => 'Sữa đặc',
    		'slug' => 'Sữa đặc',
    	]);


        // 
    	$catagoryType = CatagoriesType::create([
    		'name' => 'Sữa khác',
    		'slug' => 'Sữa khác',
    	]);
    }
}
