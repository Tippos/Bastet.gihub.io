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
                'image' => 'https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-9/141319152_2790002057887971_3477447111588469025_o.jpg?_nc_cat=102&ccb=2&_nc_sid=8bfeb9&_nc_ohc=6pVmy7QmCL8AX8QpfC0&_nc_ht=scontent.fhan2-1.fna&oh=80bb589cb656650260a1faab030805ea&oe=603CBEAC',
                'description' => 'Quán đẹp sạch sẽ, nước ngon, mèo thơm. Thật sự là có quá nhiều mèo, ẻm nào cũng mập ú nu, bạn nào ghiền mèo sẽ cực kì thích❤',
                'rate' => 5,
                'userId' => 1,
                'created_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'review quan',
                'image' => 'https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-9/95578385_1792587707550267_2045766388500398080_n.jpg?_nc_cat=101&ccb=2&_nc_sid=8bfeb9&_nc_ohc=9x2a7Lv9DlEAX9lRhWt&_nc_ht=scontent.fhan2-1.fna&oh=dd3fbad8ef54c3d610fd548ae05b5e6d&oe=603C9049',
                'description' => 'Quán rất xinh luôn ạ. Đồ uống khá hợp khẩu vị của mình. Quán nhiều mèo nhưng ko hề có mùi ạ',
                'rate' => 5,
                'userId' => 2,
                'created_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'Goc khong hai long',
                'image' => 'https://scontent.fhan2-6.fna.fbcdn.net/v/t1.0-9/131232338_1352329455111645_4590124419245084116_n.jpg?_nc_cat=100&ccb=2&_nc_sid=8bfeb9&_nc_ohc=21aBL34QnowAX88lxa6&_nc_ht=scontent.fhan2-6.fna&oh=4051445e522aa88a316a3e44ddc8fff1&oe=60398A29',
                'description' => 'Không làm gì mà bị cào cấu như này, không bao giờ đến quán này nữa, thanks 🙂👌',
                'rate' => 2,
                'userId' => 1,
                'created_at' => now()
            ]
        ];
        Posts::insert($data);
    }
}

