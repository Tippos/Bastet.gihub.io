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
                'image' => 'https://scontent.fhan2-2.fna.fbcdn.net/v/t1.0-9/154711540_2811656899055820_6336935910262529180_o.jpg?_nc_cat=111&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=t8MjuNLhGkEAX_XWm8g&_nc_ht=scontent.fhan2-2.fna&oh=046d7b9190530f165dc7c091a990cdce&oe=60818AE4',
                'description' => 'Muốn bế tôi hãy cho tôi một bát hạt 🍜 🍜 🍜',
                'weightCat' => 7.4,
                'class'=>1,
                'created_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'Bông',
                'form' => 'Meo Lai Viet Nam',
                'image' => 'https://scontent.fhan2-5.fna.fbcdn.net/v/t1.0-9/134219234_2770159033205607_807472251557585085_o.jpg?_nc_cat=107&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=ooQ2MQBbkAQAX9etVV9&_nc_ht=scontent.fhan2-5.fna&oh=29d16e8790a534f083fc5d59aa8ff722&oe=6080B0C9',
                'description' => 'Tôi cần cỏ 🍀 🍀 🍀',
                'weightCat' => 3.4,
                'class'=>1,
                'created_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'Jisso',
                'form' => 'Meo ALN',
                'image' => 'https://scontent.fhan2-3.fna.fbcdn.net/v/t1.0-9/148588135_2801934236694753_6420937900602859971_o.jpg?_nc_cat=108&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=FPJZs5uKNBgAX9jx85m&_nc_ht=scontent.fhan2-3.fna&oh=d91e4ed0df72596f6f537f4926e8eeb0&oe=607ED1F0',
                'description' => 'Mèowwwwwww 🐱 🐱 🐱!',
                'weightCat' => 3.4,
                'class'=>1,
                'created_at' => now()
            ],
            [
                'id' => 4,
                'name' => 'lạc',
                'form' => 'Meo ALN',
                'image' => 'https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-9/125189702_2737536173134560_3325345048868093040_o.jpg?_nc_cat=106&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=MdlYSa1CDo4AX-I0gGt&_nc_ht=scontent.fhan2-1.fna&oh=e58b189a50f656d4e7c39e9feeed44b4&oe=6080AD58',
                'description' => 'Ngủ quên ăn là có thật 😪 😪 😪',
                'weightCat' => 3.4,
                'class'=>1,
                'created_at' => now()
            ],
            [
                'id' => 5,
                'name' => 'Monster',
                'form' => 'Meo ALN',
                'image' => 'https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/110705195_2636969326524579_2682479600166646404_o.jpg?_nc_cat=110&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=ARa1cOLMFfwAX_ux4tj&_nc_ht=scontent.fhan2-4.fna&oh=502c3bcdfd4da0fe9978fc9b2b8de146&oe=60814403',
                'description' => 'mông cong phải biết 😍 😍 😍',
                'weightCat' => 4.4,
                'class'=>1,
                'created_at' => now()
            ],
            [
                'id' => 6,
                'name' => 'Downy',
                'form' => 'Meo ALD',
                'image' => 'https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-9/97193397_2584408431780669_1906896648278114304_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=730e14&_nc_ohc=qqfggXVjSXEAX8A_Hti&_nc_ht=scontent.fhan2-1.fna&oh=bdcbf9afea3be6adb94f1d657e835d0b&oe=607F6687',
                'description' => 'Ngáp 😉 😉 😉',
                'weightCat' => 3.4,
                'class'=>1,
                'created_at' => now()
            ]
        ];
        Cats::insert($data);
    }
}
