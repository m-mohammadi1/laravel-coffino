<?php

namespace Database\Seeders\General;

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
        $infoArray = [
            [
                'name' => 'site_title',
                'title' => 'عنوان سایت',
                'value' => 'کافینو مثل آبی',
            ],
            [
                'name' => 'footer_text',
                'title' => 'متن فوتر',
                'value' => 'این برای متن فوتر است',
            ],
            [
                'name' => 'footer_copyright',
                'title' => 'متن کپی رایت',
                'value' => 'طراحی شده توسط محمد محمدی',
            ],
            [
                'name' => 'dashboard_welcome_message',
                'title' => 'پیام خوش آمد داشبورد',
                'value' => 'به سایت خودتان خوش آمدید',
            ],
            [
                'name' => 'contact_us_phone',
                'title' => 'شمار پشتیباتی',
                'value' => '021 21 21 21',
            ],
            [
                'name' => 'landing_header',
                'title' => 'عنوان لندینگ سایت',
                'value' => 'بهترین و با کیفیت ترین سایت خدماتی',
            ],
            [
                'name' => 'landing_sub_header',
                'title' => 'زیر عنوان لندینگ سایت',
                'value' => 'دسترسی به سرویس های مختلف و با کیفیت',
            ],
            [
                'name' => 'landing_sup_header',
                'title' => 'ساپ عنوان لندینگ سایت',
                'value' => 'دسترسی به سرویس های مختلف و با کیفیت',
            ],
            [
                'name' => 'developer_name',
                'title' => 'برنامه نویس',
                'value' => 'Mohammad Mohammadi',
            ],
            [
                'name' => 'social_linkedin',
                'title' => 'آدرس تلگرام',
                'value' => 'https://www.linkedin.com/in/m-mohammadi-developer',
            ],
            [
                'name' => 'social_telegram',
                'title' => 'آدرس تلگرام',
                'value' => 'https://telegram.me/m_mohammadi_2001',
            ]
        ];

        foreach ($infoArray as $arr) {
            SingleOption::factory()->create($arr);
        }

    }
}
