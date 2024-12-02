<?php

// database/seeders/AboutUsSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutUsSeeder extends Seeder
{
    public function run()
    {
        About::create([
            'title' => 'About Conference',
            'description' => 'When I first got into the online advertising business, I was looking for the magical combination that would put my website into the top search engine rankings...',
            'image_url' => 'https://themewagon.github.io/manup/img/pricing-bg.jpg',
            'features' => [
                'Write On Your Business Card',
                'Advertising Outdoors',
                'Effective Advertising Pointers',
                'Kook 2 Directory Add Url Free',
            ],
        ]);
    }
}
