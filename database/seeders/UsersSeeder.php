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
                'avatar' => 'https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-9/120472565_849815579091961_8713095487069521055_o.jpg?_nc_cat=106&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=QxDtVkKqitAAX_KiS3_&_nc_ht=scontent.fhan2-1.fna&oh=b4ddab7a448da882102e2e454c961bfa&oe=607E8AE6',
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
                'avatar' => 'https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-9/120472565_849815579091961_8713095487069521055_o.jpg?_nc_cat=106&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=QxDtVkKqitAAX_KiS3_&_nc_ht=scontent.fhan2-1.fna&oh=b4ddab7a448da882102e2e454c961bfa&oe=607E8AE6',
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
                'avatar' => 'https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/82831618_2306949852928381_4863558856468332544_o.jpg?_nc_cat=104&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=bNn6le-LpfoAX_NffYx&_nc_ht=scontent.fhan2-4.fna&oh=056597d0b6de61f61e98afea849460ff&oe=607FA524',
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
                'avatar' => 'https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/121117329_2356770544690197_762290377856198361_n.jpg?_nc_cat=110&ccb=1-3&_nc_sid=174925&_nc_ohc=O0GLm_qBmFAAX8rXDyy&_nc_ht=scontent.fhan2-4.fna&oh=8e75e07b907111bd2116c9f61dc178ca&oe=60802988',
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
