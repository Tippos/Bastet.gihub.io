<?php

namespace Database\Seeders;

use App\Models\Comments;
use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
          [
              'id'=>1,
              'comment'=>'Cam on ban da ung ho quan!',
              'userId'=>3,
              'postId'=>1,
              'created_at'=>now()
          ],
          [
              'id'=>2,
              'comment'=>'Cam on ban da ung ho quan!',
              'userId'=>3,
              'postId'=>2,
              'created_at'=>now()
          ],
          [
              'id'=>3,
              'comment'=>'Quan vo cung xin loi! mong ban de lai thong tin cho phep quan boi thuong a',
              'userId'=>3,
              'postId'=>3,
              'created_at'=>now()
          ],
            [
                'id'=>4,
                'comment'=>'Quan vo cung cam on!',
                'userId'=>4,
                'postId'=>1,
                'created_at'=>now()
            ]
        ];
        Comments::insert($data);
    }
}
