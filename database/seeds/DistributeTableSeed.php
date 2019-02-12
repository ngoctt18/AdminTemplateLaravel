<?php

use Illuminate\Database\Seeder;
use App\Distribute;

class DistributeTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Distribute::create([
    		'name' => 'Vinamilk', 
    		'slug' => 'Vinamilk', 
    		'email' => 'Vinamilk@email.com',
    		'description' => 'Là thương hiệu sữa hàng đầu Việt Nam với lịch sử 40 năm phát triển. Chất lượng sản phẩm, dịch vụ luôn được cải tiến để đáp ứng tốt nhất nhu cầu của người tiêu dùng.',
    	]);
        Distribute::create([
            'name' => 'Abbott', 
            'slug' => 'Abbott', 
            'email' => 'Abbott@email.com',
            'description' => 'Abbott là một hãng sữa của Mỹ, được các bà mẹ biết đến và lựa chọn nhiều nhất.',
        ]);
        Distribute::create([
            'name' => 'Meiji', 
            'slug' => 'Meiji', 
            'email' => 'Meiji@email.com',
            'description' => 'Đến từ tập đoàn Meiji Nhật Bản, hiện đây là loại sữa được các bà mẹ tin dùng khá nhiều. ',
        ]);
        Distribute::create([
            'name' => 'Dutch Lady', 
            'slug' => 'Dutch Lady', 
            'email' => 'DutchLady@email.com',
            'description' => 'Dutch Lady, thường được biết đến dưới cái tên thuần Việt hơn là "Cô gái Hà Lan" là thương hiệu sữa của Dutch Lady Việt Nam.',
        ]);
        Distribute::create([
            'name' => 'Enfa', 
            'slug' => 'Enfa', 
            'email' => 'Enfa@email.com',
            'description' => 'Là một thương hiệu sữa của tập đoàn Mead Johnson Nutrition, Mỹ. Enfa là dòng sản phẩm chất lượng tốt được nhiều gia đình lựa chọn cho bé yêu của mình.',
        ]);
        Distribute::create([
            'name' => 'XO', 
            'slug' => 'XO', 
            'email' => 'XO@email.com',
            'description' => ' XO là hiệu sữa thuộc công ty Namyang, Hàn Quốc.',
        ]);
        Distribute::create([
            'name' => 'NAN', 
            'slug' => 'NAN', 
            'email' => 'NAN@email.com',
            'description' => 'NAN là hiệu sữa thuộc tập đoàn Nestlé (trụ sở chính đặt tại Thụy Sĩ) và được sản xuất tại rất nhiều quốc gia khác nhau như: Nga, Hà Lan, Đức, Philipines,...',
        ]);
        Distribute::create([
            'name' => 'Physiolac', 
            'slug' => 'Physiolac', 
            'email' => 'Physiolac@email.com',
            'description' => 'Là một hiệu sữa của công ty Gilbert Gabolatoies, thành viên của Groupe Batteur - tập đoàn dược phẩm, thực phẩm dinh dưỡng hàng đầu tại Pháp. ',
        ]);
        Distribute::create([
            'name' => 'Nutifood', 
            'slug' => 'Nutifood', 
            'email' => 'Nutifood@email.com',
            'description' => 'Nutifood: Là công ty hàng đầu về thực phẩm dinh dưỡng tại Việt Nam, và được Người tiêu dùng Việt Nam liên tục bình chọn.',
        ]);
        Distribute::create([
          'name' => 'Mead Johnson', 
          'slug' => 'Mead Johnson', 
          'email' => 'MeadJohnson@email.com',
          'description' => 'Thương hiệu sữa Mead Johnson cũng là một trong những thương hiệu sữa lớn – nằm trong đại gia đình dinh dưỡng Mead Johnson.',
      ]);
    }
}
