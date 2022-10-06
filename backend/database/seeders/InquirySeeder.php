<?php

namespace Database\Seeders;

use App\Models\Inquiry;
use Illuminate\Database\Seeder;

class InquirySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inquiry::create([
            'name' => '佐藤　太郎',
            'email' => 'sato1234@gmail.com',
            'tel' => '09012345678',
            'gender' => '男',
            'image' => 'image/grape.jpg',
            'context' => '適当なお問い合わせ内容を記載。',
        ]);

        Inquiry::create([
            'name' => '中村　次郎',
            'email' => 'nakanaka@gmail.com',
            'tel' => '09011112222',
            'gender' => 'その他',
            'image' => 'image/csTSvhFl7dHgdhdTAeQWkaxfrwk6V4TpA2N5lysb.jpg',
            'context' => '適当なお問い合わせ内容を記載。\r\n　改行時の確認。',
        ]);
    }
}
