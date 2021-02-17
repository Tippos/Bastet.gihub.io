<?php

namespace Database\Seeders;

use App\Models\Cats;
use Illuminate\Database\Seeder;

class CatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Phở',
                'form' => 'Meo Viet Nam',
                'image' => 'https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/124837064_2733876913500486_7199802439433366056_o.jpg?_nc_cat=105&ccb=2&_nc_sid=8bfeb9&_nc_ohc=YuTCQRYokscAX-NHSZn&_nc_ht=scontent.fhan2-4.fna&oh=4ca29e8fa6d66b4c6dc6a44634710240&oe=603CBD26',
                'description' => 'Muốn bế tôi hãy cho tôi một bát hạt!!!',
                'created_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'Ngô',
                'form' => 'Meo Viet Nam',
                'image' => 'https://scontent.fhan2-5.fna.fbcdn.net/v/t1.0-9/125205596_2734987576722753_8800559210918558011_o.jpg?_nc_cat=109&ccb=2&_nc_sid=8bfeb9&_nc_ohc=BPBiOD7Dd9YAX_Drx0W&_nc_ht=scontent.fhan2-5.fna&oh=6950b039813260655576282cf46a5f9c&oe=603A57DF',
                'description' => 'Nhìn đã muốn cào',
                'created_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'Bông',
                'form' => 'Meo Lai Viet Nam',
                'image' => 'https://scontent.fhan2-6.fna.fbcdn.net/v/t1.0-9/127789450_2746290312259146_3292931963934293718_o.jpg?_nc_cat=103&ccb=2&_nc_sid=8bfeb9&_nc_ohc=qvmtfl1NIw4AX-6YiWZ&_nc_ht=scontent.fhan2-6.fna&oh=22959d148c418fedb242f8fc8d401802&oe=603BA10E',
                'description' => 'Chuyên gia thẩm định cỏ!',
                'created_at' => now()
            ],
            [
                'id' => 4,
                'name' => 'lạc',
                'form' => 'Meo ALN',
                'image' => 'https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-9/125189702_2737536173134560_3325345048868093040_o.jpg?_nc_cat=106&ccb=2&_nc_sid=8bfeb9&_nc_ohc=QFTSofd_n84AX80zBus&_nc_ht=scontent.fhan2-1.fna&oh=8c416c588c877828f4096068c60b6e0a&oe=60397C58',
                'description' => 'Ngủ quên ăn là có thật',
                'created_at' => now()
            ],
            [
                'id' => 5,
                'name' => 'Omachi',
                'form' => 'Meo Lai ALD',
                'image' => 'https://scontent.fhan2-2.fna.fbcdn.net/v/t1.0-9/130842995_2758183194403191_106151774736245785_n.jpg?_nc_cat=111&ccb=2&_nc_sid=8bfeb9&_nc_ohc=HvDvwBY5ZA0AX9r2vQd&_nc_ht=scontent.fhan2-2.fna&oh=6e8cb6d10434f2ef917c70bb868728a7&oe=6039B398',
                'description' => 'Uống nhầm một ánh mắt',
                'created_at' => now()
            ]
        ];
        Cats::insert($data);
    }
}
