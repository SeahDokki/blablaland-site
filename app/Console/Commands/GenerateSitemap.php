<?php

namespace App\Console\Commands;

use App\Models\Forum\Topic;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = Sitemap::create();
        $urls = [
            '/',
            '/game',
            '/game-light',
            '/team',
            '/community',
            '/community/artclub',
            '/community/search',
            '/forum',
            '/games',
            '/games/haunted-manor',
            '/games/dungeon',
            '/games/pyramid',
            '/games/naval-battle',
            '/games/mysthoria',
            '/games/tournament-fury',
            '/games/pirate-quest',
            '/games/irwish-toilet',
            '/shop',
            '/shop/skins',
            '/shop/objects',
            '/shop/smileys',
        ];

        foreach ($urls as $url) {
            $sitemap->add($url);
        }

        Topic::all()->each(function (Topic $topic) use ($sitemap) {
            if ($topic->section['view_grade_id'] === 0) {
                $sitemap->add(
                    Url::create("/forum/topic/{$topic['id']}")
                );
            }
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
