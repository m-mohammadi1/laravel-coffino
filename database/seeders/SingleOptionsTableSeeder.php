<?php

namespace Database\Seeders;

use App\Models\SingleOption;
use Illuminate\Database\Seeder;

class SingleOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        SingleOption::factory()->create([
//            'name' => 'site_title',
//            'title' => 'عنوان سایت',
//            'value' => 'کافینو مثل آبی',
//        ]);
//
//        SingleOption::factory()->create([
//            'name' => 'footer_text',
//            'title' => 'متن فوتر',
//            'value' => 'این برای متن فوتر است',
//        ]);
//
//        SingleOption::factory()->create([
//            'name' => 'footer_copyright',
//            'title' => 'متن کپی رایت',
//            'value' => 'طراحی شده توسط محمد محمدی',
//        ]);

        SingleOption::factory()->create([
            'name' => 'dashboard_welcome_message',
            'title' => 'پیام خوش آمد داشبورد',
            'value' => 'به سایت خودتان خوش آمدید',
        ]);

//        SingleOption::factory()->create([
//            'name' => 'site_title',
//            'title' => '',
//            'value' => '',
//        ]);



    }
}
