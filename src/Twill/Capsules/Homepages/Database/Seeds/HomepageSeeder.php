<?php

namespace TwillHomepage\Twill\Capsules\Homepages\Database\Seeds;

use Illuminate\Database\Seeder;
use TwillHomepage\Twill\Capsules\Homepages\Repositories\HomepageRepository;
use TwillHomepage\Twill\Capsules\Homepages\Models\Homepage;

class HomepageSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (Homepage::count() > 0) {
            return;
        }

        app(HomepageRepository::class)->create([
            'title' => [
                'en' => 'Homepage',
                // add other languages here
            ],
            'description' => [
                'en' => '',
                // add other languages here
            ],
            'published' => false,
        ]);
    }
}
