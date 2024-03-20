<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GlobalSetting>
 */
class GlobalSettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'admin_email' => 'dikewisdom787@gmail.com',
            'default_mail_address' => 'dikewisdom778@gmail.com',
            'support_mail_address' => 'dikewisdom100@gmail.com',
            'admin_phone' => '08022334555',
            'admin_address' => 'No 1, Dynamic Street, Lagos',
            'site_logo' => asset('/assets/custom/resources/hetlogo.png'),
            'site_favicon' => asset('images/favicon.png'),
            'site_name' => config('app.name'),
            'site_description' => 'This is a dynamic website',
            'site_facebook' => $this->faker->url(),
            'site_twitter' => $this->faker->url(),
            'site_url' => config('app.url'),
            'site_youtube' => $this->faker->url(),
            'site_address' => $this->faker->address(),
            'site_phone' => $this->faker->phoneNumber(),
            'site_email' => $this->faker->email(),
            'site_instagram' => $this->faker->url(),
            'site_linkedin' => $this->faker->url(),
            'site_pinterest' => $this->faker->url(),
            'mail_address' => $this->faker->email(),
            'mail_host' => $this->faker->word(),
        ];
    }
}
