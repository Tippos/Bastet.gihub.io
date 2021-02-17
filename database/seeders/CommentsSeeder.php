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
              'comment'=>'Cảm ơn bạn đã ủng hộ quán!',
              'userId'=>3,
              'postId'=>1,
              'created_at'=>now()
          ],
          [
              'id'=>2,
              'comment'=>'Cảm ơn bạn đã ủng hộ quán!!',
              'userId'=>3,
              'postId'=>2,
              'created_at'=>now()
          ],
          [
              'id'=>3,
              'comment'=>'Quán vô cùng xin lỗi và hứa sẽ khắc phục ngay ạ!',
              'userId'=>3,
              'postId'=>3,
              'created_at'=>now()
          ],
            [
                'id'=>4,
                'comment'=>'Cảm ơn bạn đã ủng hộ quán!',
                'userId'=>4,
                'postId'=>1,
                'created_at'=>now()
            ]
        ];
        Comments::insert($data);
    }
}
