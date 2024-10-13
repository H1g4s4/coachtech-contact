<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run()
    {
        Contact::factory()->count(35)->create(); // 35件のダミーデータを作成
    }
}
