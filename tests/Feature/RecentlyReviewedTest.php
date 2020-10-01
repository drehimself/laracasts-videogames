<?php

namespace Tests\Feature;

use Tests\TestCase;
use Livewire\Livewire;
use Illuminate\Support\Facades\Http;
use App\Http\Livewire\RecentlyReviewed;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RecentlyReviewedTest extends TestCase
{
    /** @test */
    public function the_main_page_shows_recently_reviewed_games()
    {
        Http::fake([
            config('services.igdb.endpoint') => $this->fakeRecentlyReviewedGames(),
        ]);

        Livewire::test(RecentlyReviewed::class)
            ->assertSet('recentlyReviewed', [])
            ->call('loadRecentlyReviewed')
            ->assertSee('Fake Final Fantasy VII Remake')
            ->assertSee('Doom Eternal')
            ->assertSee('PC, PS4, XONE, Switch, Stadia')
            ->assertSee('Developed by id Software, DOOM Eternal');
    }

    private function fakeRecentlyReviewedGames()
    {
        return Http::response([
          0 =>  [
            "id" => 11169,
            "cover" => [
              "id" => 81567,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1qxr.jpg",
            ],
            "first_release_date" => 1586476800,
            "name" => "Fake Final Fantasy VII Remake",
            "platforms" => [
              0 => [
                "id" => 48,
                "abbreviation" => "PS4",
              ]
            ],
            "popularity" => 67.645037711002,
            "rating" => 90.070890934738,
            "rating_count" => 30,
            "slug" => "final-fantasy-vii-remake",
            "summary" => "A spectacular re-imagining of one of the most visionary games ever, Final Fantasy VII Remake rebuilds and expands the legendary RPG for today. The first game in this project will be set in the eclectic city of Midgar and presents a fully standalone gaming experience."
          ],
          1 =>  [
            "id" => 103298,
            "cover" => [
              "id" => 75007,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1lvj.jpg",
            ],
            "first_release_date" => 1584662400,
            "name" => "Doom Eternal",
            "platforms" => [
              0 => [
                "id" => 6,
                "abbreviation" => "PC",
              ],
              1 => [
                "id" => 48,
                "abbreviation" => "PS4",
              ],
              2 => [
                "id" => 49,
                "abbreviation" => "XONE",
              ],
              3 => [
                "id" => 130,
                "abbreviation" => "Switch",
              ],
              4 => [
                "id" => 170,
                "abbreviation" => "Stadia",
              ],
            ],
            "popularity" => 61.626923937768,
            "rating" => 84.429710307497,
            "rating_count" => 67,
            "slug" => "doom-eternal",
            "summary" => "
              Developed by id Software, DOOM Eternal is the direct sequel to DOOM (2016). Experience the ultimate combination of speed and power with the next leap in push-forward, first-person combat. As the DOOM Slayer, return to take your vengeance against the forces of Hell. Set to an all-new pulse pounding soundtrack composed by Mick Gordon, fight across dimensions as you slay new and classic demons with powerful new weapons and abilities.
              ",
          ],
          2 =>  [
            "id" => 37001,
            "cover" => [
              "id" => 81936,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1r80.jpg",
            ],
            "first_release_date" => 1583884800,
            "name" => "Ori and the Will of the Wisps",
            "platforms" => [
              0 => [
                "id" => 6,
                "abbreviation" => "PC",
              ],
              1 => [
                "id" => 49,
                "abbreviation" => "XONE",
              ],
            ],
            "popularity" => 33.542392996008,
            "rating" => 88.543461909748,
            "rating_count" => 63,
            "slug" => "ori-and-the-will-of-the-wisps",
            "summary" => "From the creators of the multi award winning Ori and the Blind Forest, comes the highly anticipated sequel: Ori and the Will of the Wisps.",
          ]
        ], 200);
    }
}
