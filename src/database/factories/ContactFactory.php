<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition()
    {
        return [
            'categry_id' => \App\Models\Category::factory(), // categoriesテーブルの外部キー
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->randomElement([1, 2, 3]), // 1:男性, 2:女性, 3:その他
            'email' => $this->faker->unique()->safeEmail,
            'tell' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'building' => $this->faker->secondaryAddress,
            'detail' => $this->faker->text,
            'created_at' => now(),
            'updated_at' => now(),
            'categry_id' => Category::factory(),
        ];
    }
}
