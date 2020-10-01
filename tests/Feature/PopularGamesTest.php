<?php

namespace Tests\Feature;

use Tests\TestCase;
use Livewire\Livewire;
use App\Http\Livewire\PopularGames;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PopularGamesTest extends TestCase
{
    /** @test */
    public function the_main_page_shows_popular_games()
    {
        Http::fake([
            config('services.igdb.endpoint') => $this->fakePopularGames(),
        ]);

        Livewire::test(PopularGames::class)
          ->assertSet('popularGames', [])
          ->call('loadPopularGames')
          ->assertSee('Fake Final Fantasy VII Remake')
          ->assertSee('Doom Eternal')
          ->assertSee('PC, PS4, XONE, Switch, Stadia')
          ->assertSee('Animal Crossing: New Horizons');
    }

    private function fakePopularGames()
    {
        return Http::response([
          0 => [
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
            "slug" => "final-fantasy-vii-remake",
          ],
          1 => [
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
            "slug" => "doom-eternal",
          ],
          2 => [
            "id" => 26192,
            "cover" => [
              "id" => 81672,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1r0o.jpg",
            ],
            "first_release_date" => 1592524800,
            "name" => "The Last of Us: Part II",
            "platforms" => [
              0 => [
                "id" => 48,
                "abbreviation" => "PS4",
              ]
            ],
            "popularity" => 59.620886013356,
            "slug" => "the-last-of-us-part-ii",
          ],
          3 => [
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
            "slug" => "ori-and-the-will-of-the-wisps",
          ],
          4 => [
            "id" => 107218,
            "cover" => [
              "id" => 81938,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1r82.jpg",
            ],
            "first_release_date" => 1592265600,
            "name" => "Desperados III",
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
            ],
            "popularity" => 33.096606790583,
            "slug" => "desperados-iii",
          ],
          5 => [
            "id" => 109462,
            "cover" => [
              "id" => 88635,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1we3.jpg",
            ],
            "first_release_date" => 1584662400,
            "name" => "Animal Crossing: New Horizons",
            "platforms" => [
              0 => [
                "id" => 130,
                "abbreviation" => "Switch",
              ],
            ],
            "popularity" => 15.488051676305,
            "rating" => 85.80954057983,
            "slug" => "animal-crossing-new-horizons",
          ],
          6 => [
            "id" => 9608,
            "cover" => [
              "id" => 99038,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co24f2.jpg",
            ],
            "first_release_date" => 1585526400,
            "name" => "Mount & Blade II: Bannerlord",
            "platforms" => [
              0 => [
                "id" => 6,
                "abbreviation" => "PC",
              ]
            ],
            "popularity" => 14.596479265455,
            "rating" => 79.73373328278,
            "slug" => "mount-and-blade-ii-bannerlord",
          ],
          7 => [
            "id" => 22499,
            "cover" => [
              "id" => 83119,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1s4v.jpg",
            ],
            "first_release_date" => 1584748800,
            "name" => "Moons of Madness",
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
            ],
            "popularity" => 10.584403416632,
            "rating" => 69.866166086316,
            "slug" => "moons-of-madness",
          ],
          8 => [
            "id" => 37057,
            "cover" => [
              "id" => 75345,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1m4x.jpg",
            ],
            "first_release_date" => 1593475200,
            "name" => "Griftlands",
            "platforms" => [
              0 => [
                "id" => 6,
                "abbreviation" => "PC",
              ],
            ],
            "popularity" => 8.3554723895086,
            "slug" => "griftlands",
          ],
          9 => [
            "id" => 107215,
            "cover" => [
              "id" => 97459,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2377.jpg",
            ],
            "first_release_date" => 1588032000,
            "name" => "SnowRunner",
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
            ],
            "popularity" => 8.1325792867962,
            "slug" => "snowrunner",
          ],
          10 => [
            "id" => 110474,
            "cover" => [
              "id" => 97335,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co233r.jpg",
            ],
            "first_release_date" => 1590451200,
            "name" => "Minecraft Dungeons",
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
            ],
            "popularity" => 7.2410068759467,
            "slug" => "minecraft-dungeons",
          ],
          11 => [
            "id" => 119260,
            "cover" => [
              "id" => 89804,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1xak.jpg",
            ],
            "first_release_date" => 1585008000,
            "name" => "Bleeding Edge",
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
            "popularity" => 6.7952206705219,
            "rating" => 60.057030162825,
            "slug" => "bleeding-edge",
          ],
        ], 200);
    }


}
