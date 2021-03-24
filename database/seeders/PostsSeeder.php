<?php

namespace Database\Seeders;

use App\Models\Posts;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
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
                'name' => 'review quan',
                'image' => 'https://scontent.fhan2-5.fna.fbcdn.net/v/t1.0-9/163593605_2826493374238839_6793049910603696983_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=_7HNxR6RDHEAX8o2Y_z&_nc_ht=scontent.fhan2-5.fna&oh=c6e35f30324ead38c93b46e85b94c25a&oe=60800392',
                'description' => 'Quán đẹp sạch sẽ, nước ngon, mèo thơm. Thật sự là có quá nhiều mèo, ẻm nào cũng mập ú nu, bạn nào ghiền mèo sẽ cực kì thích❤',
                'rate' => 5,
                'userId' => 1,
                'created_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'review quan',
                'image' => 'https://scontent.fhan2-5.fna.fbcdn.net/v/t1.0-9/160845519_2824662681088575_782596631072680361_o.jpg?_nc_cat=109&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=bePRrae6oGkAX_vG22a&_nc_ht=scontent.fhan2-5.fna&oh=3da591dcca4e749a861e09eb63a0bf03&oe=608183FB',
                'description' => 'Quán rất xinh luôn ạ. Đồ uống khá hợp khẩu vị của mình. Quán nhiều mèo nhưng ko hề có mùi ạ',
                'rate' => 5,
                'userId' => 2,
                'created_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'Goc khong hai long',
                'image' => 'https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-9/163503551_113537560816715_1753887510217210415_o.jpg?_nc_cat=106&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=L_FxC2oRFQEAX8I0vY5&_nc_ht=scontent.fhan2-1.fna&oh=cf09bc84bf64b7e0ac330f6379e6b5a1&oe=608046C0',
                'description' => 'Không làm gì mà bị cào cấu như này, không bao giờ đến quán này nữa, thanks 🙂👌',
                'rate' => 2,
                'userId' => 1,
                'created_at' => now()
            ]
        ];
        Posts::insert($data);
    }
}

