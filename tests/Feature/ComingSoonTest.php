<?php

namespace Tests\Feature;

use Tests\TestCase;
use Livewire\Livewire;
use App\Http\Livewire\ComingSoon;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ComingSoonTest extends TestCase
{
    /** @test */
    public function the_main_page_shows_coming_soon_games()
    {
        Http::fake([
            config('services.igdb.endpoint') => $this->fakeComingSoonGames(),
        ]);

        Livewire::test(ComingSoon::class)
            ->assertSet('comingSoon', [])
            ->call('loadComingSoon')
            ->assertSee('Best Friend Forever')
            ->assertSee('May 14, 2020')
            ->assertSee('Desperados III')
            ->assertSee('Jun 16, 2020');
    }

    private function fakeComingSoonGames()
    {
        return Http::response( [
              0 => [
                "id" => 121749,
                "cover" => [
                  "id" => 79350,
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1p86.jpg",
                ],
                "first_release_date" => 1589414400,
                "name" => "Best Friend Forever",
                "platforms" => [
                  0 => [
                    "id" => 6,
                    "abbreviation" => "PC",
                  ],
                  1 => [
                    "id" => 130,
                    "abbreviation" => "Switch",
                  ]
                ],
                "popularity" => 5.68075515696,
                "slug" => "best-friend-forever",
                "summary" => "Best Friend Forever is the world’s first simulation game to combine pet care and dating (just not necessarily at the same time). Train, pat and play with your very own dog to form a bond that will last the ages. With your four-legged companion by your side, meet, woo and cherish the many cuties of Rainbow Bay’s thriving singles scene. Pet the dogs - then the owners.",
              ],
              1 => [
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
                "summary" => "Brave the dungeons alone, or team up with friends! Up to four players can battle together through action-packed, treasure-stuffed, wildly varied levels, all in an epic quest to save the villagers and take down the evil Arch-Illager!"
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
                    "abbreviation" => "PC"
                  ],
                  1 => [
                    "id" => 48,
                    "abbreviation" => "PS4",
                  ],
                  2 => [
                    "id" => 49,
                    "abbreviation" => "XONE",
                  ]
                ],
                "popularity" => 33.096606790583,
                "slug" => "desperados-iii",
                "summary" => "The Wild West. A place where the law is made by those with a gun in their hands, and is enforced by the henchmen at their command. A place where death is no stranger and the undertakers are working overtime… especially when people start playing Desperados III. This real-time tactics game, developed by German game studio Mimimi Games (Shadow Tactics: Blades Of The Shogun), lets players command a band of Desperados led by fan-favourite gunslinger John Cooper."
              ],
              3 => [
                "id" => 120625,
                "cover" => [
                  "id" => 76045,
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1mod.jpg",
                ],
                "first_release_date" => 1592265600,
                "name" => "Disintegration",
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
                "popularity" => 5.0120758488229,
                "slug" => "disintegration",
                "summary" => "In Disintegration, you play an Integrated character named Romer. He’s one of many who rebelled and are now outlawed by the Rayonne. \n
                   \n
                  It’s up to you to lead a small group of these Outlaws, people who have chosen to fight back and survive, into a brighter future where we protect those they care about and hope to one day become human again."

              ],
            ], 200);
    }
}
