<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebSitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $web_sites = [
            [
                'domain' => 'tastewp.com',
            ],
            [
                'domain' => 'upwork.com',
            ],
            [
                'domain' => 'twitter.com',
            ],
            [
                'domain' => 'google.com',
            ]

        ];

        foreach ($web_sites as $web_site) {
            DB::table('web_sites')->insert($web_site);
        }
    }
}
