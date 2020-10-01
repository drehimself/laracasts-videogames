<?php

namespace Tests\Feature;

use Tests\TestCase;
use Livewire\Livewire;
use Illuminate\Support\Facades\Http;
use App\Http\Livewire\MostAnticipated;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MostAnticipatedTest extends TestCase
{
    /** @test */
    public function the_main_page_shows_most_anticipated_games()
    {
        Http::fake([
            config('services.igdb.endpoint') => $this->fakeMostAnticipatedGames(),
        ]);

        Livewire::test(MostAnticipated::class)
            ->assertSet('mostAnticipated', [])
            ->call('loadMostAnticipated')
            ->assertSee('The Last of Us: Part II')
            ->assertSee('Jun 19, 2020');
    }

    private function fakeMostAnticipatedGames()
    {
        return Http::response([
          0 => [
            "id" => 26950,
            "cover" => [
              "id" => 92708,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1zj8.jpg",
            ],
            "first_release_date" => 1599177600,
            "name" => "Marvel's Avengers",
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
            "popularity" => 138.52504437354,
            "slug" => "marvels-avengers",
            "summary" => "Marvel's Avengers is an action-adventure game centred around the Avengers. The game is being designed for gamers worldwide and will be packed with all the characters, environments, and iconic moments that have thrilled longtime fans of the franchise. Featuring a completely original story, it will introduce a universe gamers can play in for years to come.",
          ],
          1 => [
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
              ],
            ],
            "popularity" => 59.620886013356,
            "slug" => "the-last-of-us-part-ii",
            "summary" => "Set 5 years after the events of The Last of Us, Joel and Ellie return on their journey through the ruined cities of America, their path ahead of them will be unfold.",
          ],
          2 => [
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
            "summary" => "The Wild West. A place where the law is made by those with a gun in their hands, and is enforced by the henchmen at their command. A place where death is no stranger and the undertakers are working overtime… especially when people start playing Desperados III. This real-time tactics game, developed by German game studio Mimimi Games (Shadow Tactics: Blades Of The Shogun), lets players command a band of Desperados led by fan-favourite gunslinger John Cooper.",
          ],
          3 => [
            "id" => 75235,
            "cover" => [
              "id" => 94113,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co20m9.jpg",
            ],
            "first_release_date" => 1594944000,
            "name" => "Ghost of Tsushima",
            "platforms" => [
              0 => [
                "id" => 48,
                "abbreviation" => "PS4",
              ],
            ],
            "popularity" => 13.259120649181,
            "slug" => "ghost-of-tsushima",
            "summary" => "The year is 1274. Samurai warriors are the legendary defenders of Japan — until the fearsome Mongol Empire invades the island of Tsushima, wreaking havoc and conquering the local population. As one of the last surviving samurai, you rise from the ashes to fight back. But, honorable tactics won’t lead you to victory. You must move beyond your samurai traditions to forge a new way of fighting — the way of the Ghost — as you wage an unconventional war for the freedom of Japan."
          ],
        ], 200);
    }
}
