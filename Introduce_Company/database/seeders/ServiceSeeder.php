<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'name' => 'Xây dựng nhà ở',
            'description'=> 'Cung cấp dịch vụ xây dựng các căn nhà từ việc đào móng, xây dựng khung cấu trúc cho đến việc hoàn thiện nội thất và ngoại thất.',
            'status' => 1
        ]);
        DB::table('services')->insert([
            'name' => 'Xây dựng công trình công nghiệp và thương mại',
            'description'=> 'Bao gồm xây dựng các nhà máy, kho bãi, văn phòng, cửa hàng, và các cơ sở thương mại khác.',
            'status' => 1
        ]);
        DB::table('services')->insert([
            'name' => 'Sửa chữa và nâng cấp',
            'description'=> 'Sửa chữa và nâng cấp các công trình đã tồn tại, bao gồm việc cải thiện cấu trúc, nâng cấp hệ thống điện, nước, và nội thất.',
            'status' => 1
        ]);
        DB::table('services')->insert([
            'name' => 'Thiết kế kiến trúc',
            'description'=> 'Thiết kế kiến trúc, tạo ra các kế hoạch và ý tưởng cho dự án xây dựng.',
            'status' => 1
        ]);
        DB::table('services')->insert([
            'name' => 'Quản lý dự án',
            'description'=> 'Quản lý dự án để đảm bảo rằng mọi khía cạnh của dự án được thực hiện một cách hiệu quả và đúng hẹn.',
            'status' => 1
        ]);
        DB::table('services')->insert([
            'name' => 'Dịch vụ tư vấn và giám sát',
            'description'=> 'Bao gồm các dịch vụ tư vấn về kỹ thuật, giải pháp thiết kế, và giám sát thi công để đảm bảo chất lượng và tuân thủ các quy định kỹ thuật và an toàn.',
            'status' => 1
        ]);
        DB::table('services')->insert([
            'name' => 'Xử lý chất thải và bảo vệ môi trường',
            'description'=> 'Xử lý chất thải và thực hiện các biện pháp bảo vệ môi trường trong quá trình xây dựng.',
            'status' => 1
        ]);
        DB::table('services')->insert([
            'name' => 'Xây dựng cơ sở hạ tầng',
            'description'=> 'Bao gồm xây dựng các hạ tầng như đường, cống, cầu, và các công trình công cộng khác.',
            'status' => 1
        ]);

    }
}
