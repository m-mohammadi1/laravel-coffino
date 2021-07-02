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
        SingleOption::factory()->create([
            'name' => 'site_title',
            'title' => 'عنوان سایت',
            'value' => 'کافینو مثل آبی',
        ]);

        SingleOption::factory()->create([
            'name' => 'footer_text',
            'title' => 'متن فوتر',
            'value' => 'این برای متن فوتر است',
        ]);

        SingleOption::factory()->create([
            'name' => 'footer_copyright',
            'title' => 'متن کپی رایت',
            'value' => 'طراحی شده توسط محمد محمدی',
        ]);

        SingleOption::factory()->create([
            'name' => 'dashboard_welcome_message',
            'title' => 'پیام خوش آمد داشبورد',
            'value' => 'به سایت خودتان خوش آمدید',
        ]);

        SingleOption::factory()->create([
            'name' => 'contact_us_phone',
            'title' => 'شمار پشتیباتی',
            'value' => '021 21 21 21',
        ]);

        SingleOption::factory()->create([
            'name' => 'landing_header',
            'title' => 'عنوان لندینگ سایت',
            'value' => 'بهترین و با کیفیت ترین سایت خدماتی',
        ]);


        SingleOption::factory()->create([
            'name' => 'landing_sub_header',
            'title' => 'زیر عنوان لندینگ سایت',
            'value' => 'دسترسی به سرویس های مختلف و با کیفیت',
        ]);

        SingleOption::factory()->create([
            'name' => 'developer_name',
            'title' => 'برنامه نویس',
            'value' => 'Mohammad Mohammadi',
        ]);

        SingleOption::factory()->create([
            'name' => 'social_telegram',
            'title' => 'آدرس تلگرام',
            'value' => '@mohamma_d_2001',
        ]);

        SingleOption::factory()->create([
            'name' => 'social_linkedin',
            'title' => 'آدرس تلگرام',
            'value' => 'https://www.linkedin.com/in/m-mohammadi-developer',
        ]);



//        SingleOption::factory()->create([
//            'name' => 'site_title',
//            'title' => '',
//            'value' => '',
//        ]);





    }
}
