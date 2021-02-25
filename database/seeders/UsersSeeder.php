<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
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
                'fullName' => 'Nguyễn Mạnh Tiến',
                'birthday' => 938672290,
                'email' => 'nguyenmanhtien3091999@gmail.com',
                'phoneNumber' => '0989854739',
                'job' => 'Student',
                'avatar' => 'https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-9/120472565_849815579091961_8713095487069521055_o.jpg?_nc_cat=106&ccb=3&_nc_sid=09cbfe&_nc_ohc=4bNjPKuMbTUAX8qTdBR&_nc_ht=scontent.fhan2-1.fna&oh=8b7e66c8e4a07a90666a7cc5f1e6ecb2&oe=60530966',
                'facebook' => 'https://www.facebook.com/tiencuns1/',
                'gender' => GENDER_MALE,
                'country' => 'Viet Nam',
                'role' => ROLE_USER_ADMIN,
                'status' => STATUS_USER_ACTIVE,
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'fullName' => 'Nguyễn Mạnh T',
                'birthday' => 938672290,
                'email' => 'nguyenmanhtien309@gmail.com',
                'phoneNumber' => '0989854738',
                'job' => 'Student',
                'avatar'=>'https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-9/120472565_849815579091961_8713095487069521055_o.jpg?_nc_cat=106&ccb=3&_nc_sid=09cbfe&_nc_ohc=4bNjPKuMbTUAX8qTdBR&_nc_ht=scontent.fhan2-1.fna&oh=8b7e66c8e4a07a90666a7cc5f1e6ecb2&oe=60530966',
                'facebook' => 'https://www.facebook.com/tiencuns1',
                'gender' => GENDER_MALE,
                'country' => 'Viet Nam',
                'role' => ROLE_USER_ADMIN,
                'status' => STATUS_USER_ACTIVE,
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'fullName' => 'Ngọc Anh Dương',
                'birthday' => 938672290,
                'email' => 'nguyenmanhtien@gmail.com',
                'phoneNumber' => '0989854737',
                'job' => 'Student',
                'avatar' => 'https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/82831618_2306949852928381_4863558856468332544_o.jpg?_nc_cat=104&ccb=3&_nc_sid=8bfeb9&_nc_ohc=XN5FSJWnfjUAX8v43_K&_nc_ht=scontent.fhan2-4.fna&oh=780a7543cb7fee1c4c385dd634527798&oe=605423A4',
                'facebook' => 'https://www.facebook.com/anhduong0811',
                'gender' => GENDER_FEMALE,
                'country' => 'Viet Nam',
                'role' => ROLE_USER_COURSE,
                'status' => STATUS_USER_ACTIVE,
                'created_at' => now(),
            ],
            [
                'id' => 4,
                'fullName' => 'Tuấn Hoàng Dương' ,
                'birthday' => 938672290,
                'email' => 'nguyenmanhen@gmail.com',
                'phoneNumber' => '0989854727',
                'job' => 'Student',
                'avatar' => 'https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-1/p200x200/141401931_2439337586433492_8958346529749091225_o.jpg?_nc_cat=106&ccb=3&_nc_sid=7206a8&_nc_ohc=n-RdsS_6RjwAX9m58q2&_nc_ht=scontent.fhan2-1.fna&tp=6&oh=cc08136ef51b5d926cf582bb065aeb1b&oe=6053B3D2',
                'facebook' => 'https://www.facebook.com/daotuan6902',
                'gender' => GENDER_MALE,
                'country' => 'Viet Nam',
                'role' => ROLE_USER_COURSE,
                'status' => STATUS_USER_ACTIVE,
                'created_at' => now(),
            ]

        ];
        Users::insert($data);
    }
}
