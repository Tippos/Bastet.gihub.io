<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
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
                'name' => 'Hat Cateyes 1kg',
                'description' => 'Thuc an cho meo',
                'image' => 'https://media3.scdn.vn/img3/2019/2_14/DSaErZ.jpg',
                'cost' => 74,
                'created_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'Hat Canin 1kg',
                'description' => 'Thuc an cho meo',
                'image' => 'https://product.hstatic.net/1000217401/product/kitten_in_loaf_b8ac312a3dee442c8f6d15c0e91fb6d5.jpg',
                'cost' => 155,
                'created_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'Pate Whiscat Junior',
                'description' => 'Thuc an cho meo con',
                'image' => 'https://cf.shopee.vn/file/1f476d19dbcb99e82384b0850e3de6eb',
                'cost'=>12,
                'created_at' => now()
            ],
            [
                'id' => 4,
                'name' => 'Fungikur',
                'description' => 'Thuoc tri nam o meo',
                'image' => 'https://www.petmart.vn/wp-content/uploads/2015/03/thuoc-tri-nam-cho-cho-meo-alkin-fungikur.jpg',
                'cost' => 90,
                'created_at' => now()
            ],
            [
                'id' => 5,
                'name' => 'Vong Co',
                'description' => 'Vong co danh cho meo',
                'image' => 'https://cf.shopee.vn/file/b7aa3aa5648b4ce57642812b62625df9',
                'cost' => 15,
                'created_at' => now()
            ],
            [
                'id' => 6,
                'name' => 'Sup Thuong Ciao',
                'description' => 'Do an vat danh cho meo',
                'image' => 'https://www.cunsieupham.com/wp-content/uploads/2018/09/juniehouse-pate-ciao-dang-goi-danh-cho-meo-3.jpg',
                'cost' => 28,
                'created_at' => now()
            ],
            [
                'id' => 7,
                'name' => 'Tui van chuyen',
                'description' => 'Tui van chuyen thu cung <5kg',
                'image' => 'https://vn-test-11.slatic.net/original/82c1e5b0a949914760b01c05ee45fec8.jpg',
                'cost' => 120,
                'created_at' => now()
            ],
            [
                'id' => 8,
                'name' => 'Bong Chuot',
                'description' => 'Do choi danh cho meo',
                'image' => 'https://cf.shopee.vn/file/f4837f1a8c5e32703cfb3be99d0bd3a1',
                'cost' => 20,
                'created_at' => now()
            ]
        ];
        Products::insert($data);
    }
}
