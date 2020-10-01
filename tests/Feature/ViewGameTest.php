<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewGameTest extends TestCase
{
    /** @test */
    public function the_game_page_shows_correct_game_info()
    {
        Http::fake([
            config('services.igdb.endpoint') => $this->fakeSingleGame(),
        ]);

        $response = $this->get(route('games.show', 'fake-animal-crossing-new-horizons'));

        $response->assertSuccessful();
        $response->assertSee('Fake Animal Crossing: New Horizons');
        $response->assertSee('Simulator');
        $response->assertSee('Nintendo');
        $response->assertSee('Switch');
        $response->assertSee('86');
        $response->assertSee('90');
        $response->assertSee('twitter.com/animalcrossing');
        $response->assertSee('Escape to a deserted island');
        $response->assertSee('images.igdb.com/igdb/image/upload/t_screenshot_big/sc6lt7.jpg');
        $response->assertSee('The Last Journey');
    }

    public function fakeSingleGame()
    {
        return Http::response([
            0 =>  [
                "id" => 109462,
                "aggregated_rating" => 90.181818181818,
                "cover" => [
                  "id" => 88635,
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1we3.jpg",
                ],
                "first_release_date" => 1584662400,
                "genres" => [
                  0 => [
                    "id" => 13,
                    "name" => "Simulator",
                  ]
                ],
                "involved_companies" => [
                  0 => [
                    "id" => 94939,
                    "company" => [
                      "id" => 70,
                      "name" => "Nintendo",
                    ]
                  ],
                  1 => [
                    "id" => 94940,
                    "company" => [
                      "id" => 7902,
                      "name" => "Nintendo EPD",
                    ]
                  ],
                ],
                "name" => "Fake Animal Crossing: New Horizons",
                "platforms" => [
                  0 => [
                    "id" => 130,
                    "abbreviation" => "Switch",
                  ],
                ],
                "popularity" => 15.488051676305,
                "rating" => 85.80954057983,
                "screenshots" =>  [
                  0 => [
                    "id" => 308203,
                    "alpha_channel" => false,
                    "animated" => false,
                    "game" => 109462,
                    "height" => 1080,
                    "image_id" => "sc6lt7",
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc6lt7.jpg",
                    "width" => 1920,
                  ],
                  1 => [
                    "id" => 308204,
                    "alpha_channel" => false,
                    "animated" => false,
                    "game" => 109462,
                    "height" => 1080,
                    "image_id" => "sc6lt8",
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc6lt8.jpg",
                    "width" => 1920,
                  ],
                  2 => [
                    "id" => 377380,
                    "alpha_channel" => false,
                    "animated" => false,
                    "game" => 109462,
                    "height" => 1080,
                    "image_id" => "sc836s",
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc836s.jpg",
                    "width" => 1920,
                  ],
                  3 => [
                    "id" => 377381,
                    "alpha_channel" => false,
                    "animated" => false,
                    "game" => 109462,
                    "height" => 1080,
                    "image_id" => "sc836t",
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc836t.jpg",
                    "width" => 1920,
                  ],
                  4 => [
                    "id" => 377382,
                    "alpha_channel" => false,
                    "animated" => false,
                    "game" => 109462,
                    "height" => 1080,
                    "image_id" => "sc836u",
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc836u.jpg",
                    "width" => 1920,
                  ],
                  5 => [
                    "id" => 377383,
                    "alpha_channel" => false,
                    "animated" => false,
                    "game" => 109462,
                    "height" => 1080,
                    "image_id" => "sc836v",
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc836v.jpg",
                    "width" => 1920,
                  ],
                  6 => [
                    "id" => 377384,
                    "alpha_channel" => false,
                    "animated" => false,
                    "game" => 109462,
                    "height" => 1080,
                    "image_id" => "sc836w",
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc836w.jpg",
                    "width" => 1920,
                  ],
                  7 => [
                    "id" => 377385,
                    "alpha_channel" => false,
                    "animated" => false,
                    "game" => 109462,
                    "height" => 1080,
                    "image_id" => "sc836x",
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc836x.jpg",
                    "width" => 1920,
                  ],
                  8 => [
                    "id" => 377386,
                    "alpha_channel" => false,
                    "animated" => false,
                    "game" => 109462,
                    "height" => 1080,
                    "image_id" => "sc836y",
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc836y.jpg",
                    "width" => 1920,
                  ],
                  9 => [
                    "id" => 377387,
                    "alpha_channel" => false,
                    "animated" => false,
                    "game" => 109462,
                    "height" => 1080,
                    "image_id" => "sc836z",
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc836z.jpg",
                    "width" => 1920,
                  ]
                ],
                "similar_games" => [
                  0 => [
                    "id" => 28277,
                    "cover" => [
                      "id" => 68046,
                      "url" => "//images.igdb.com/igdb/image/upload/t_thumb/v8qebygfdgzfmjaez55j.jpg",
                    ],
                    "name" => "The Last Journey",
                    "platforms" => [
                      0 => [
                        "id" => 6,
                        "abbreviation" => "PC",
                      ],
                      1 => [
                        "id" => 39,
                        "abbreviation" => "iOS",
                      ],
                    ],
                    "slug" => "the-last-journey",
                  ],
                  1 => [
                    "id" => 36258,
                    "cover" => [
                      "id" => 74553,
                      "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1lix.jpg",
                    ],
                    "name" => "Order of Battle: World War II",
                    "platforms" => [
                      0 => [
                        "id" => 6,
                        "abbreviation" => "PC",
                      ],
                      1 => [
                        "id" => 14,
                        "abbreviation" => "Mac",
                      ]
                    ],
                    "rating" => 80.0,
                    "slug" => "order-of-battle-world-war-ii",
                  ],
                  2 => [
                    "id" => 37419,
                    "cover" => [
                      "id" => 82666,
                      "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1rsa.jpg",
                    ],
                    "name" => "Dude Simulator",
                    "platforms" => [
                      0 => [
                        "id" => 6,
                        "abbreviation" => "PC",
                      ]
                    ],
                    "rating" => 81.374501992032,
                    "slug" => "dude-simulator",
                  ],
                  3 => [
                    "id" => 44242,
                    "cover" => [
                      "id" => 82669,
                      "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1rsd.jpg",
                    ],
                    "name" => "Junkyard Simulator",
                    "platforms" => [
                      0 => [
                        "id" => 6,
                        "abbreviation" => "PC",
                      ],
                    ],
                    "slug" => "junkyard-simulator",
                  ],
                  4 => [
                    "id" => 51577,
                    "cover" => [
                      "id" => 82238,
                      "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1rge.jpg",
                    ],
                    "name" => "Rise of Industry",
                    "platforms" => [
                      0 => [
                        "id" => 3,
                        "abbreviation" => "Linux",
                      ],
                      1 => [
                        "id" => 6,
                        "abbreviation" => "PC",
                      ],
                      2 => [
                        "id" => 14,
                        "abbreviation" => "Mac",
                      ],
                    ],
                    "rating" => 52.5,
                    "slug" => "rise-of-industry",
                  ],
                  5 => [
                    "id" => 65827,
                    "cover" => [
                      "id" => 97215,
                      "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co230f.jpg",
                    ],
                    "name" => "Bronze Age",
                    "platforms" => [
                      0 => [
                        "id" => 3,
                        "abbreviation" => "Linux",
                      ],
                      1 => [
                        "id" => 6,
                        "abbreviation" => "PC",
                      ],
                      2 => [
                        "id" => 14,
                        "abbreviation" => "Mac",
                      ],
                    ],
                    "rating" => 70.0,
                    "slug" => "bronze-age",
                  ],
                  6 => [
                    "id" => 79134,
                    "cover" => [
                      "id" => 82162,
                      "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1rea.jpg",
                    ],
                    "name" => "Ancient Cities",
                    "slug" => "ancient-cities",
                  ],
                  7 => [
                    "id" => 87485,
                    "cover" => [
                      "id" => 63521,
                      "url" => "//images.igdb.com/igdb/image/upload/t_thumb/ya5hcqhbgpynct8zreib.jpg",
                    ],
                    "name" => "WildCraft: Wild Sim Online",
                    "platforms" => [
                      0 => [
                        "id" => 39,
                        "abbreviation" => "iOS",
                      ]
                    ],
                    "rating" => 93.191489361702,
                    "slug" => "wildcraft-wild-sim-online",
                  ],
                  8 => [
                    "id" => 101573,
                    "cover" => [
                      "id" => 82421,
                      "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1rlh.jpg",
                    ],
                    "name" => "Simstory: Live As You Wish",
                    "rating" => 44.615383,
                    "slug" => "simstory-live-as-you-wish",
                  ],
                  9 => [
                    "id" => 112754,
                    "cover" => [
                      "id" => 99997,
                      "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co255p.jpg",
                    ],
                    "name" => "Business Magnate",
                    "platforms" => [
                      0 => [
                        "id" => 6,
                        "abbreviation" => "PC",
                      ]
                    ],
                    "rating" => 50.0,
                    "slug" => "business-magnate",
                  ],
                ],
                "slug" => "fake-animal-crossing-new-horizons",
                "summary" => "Escape to a deserted island and create your own paradise as you explore, create, and customize in the Animal Crossing: New Horizons game. Your island getaway has a wealth of natural resources that can be used to craft everything from tools to creature comforts. You can hunt down insects at the crack of dawn, decorate your paradise throughout the day, or enjoy sunset on the beach while fishing in the ocean. The time of day and season match real life, so each day on your island is a chance to check in and find new surprises all year round.",
                "videos" => [
                  0 => [
                    "id" => 28118,
                    "game" => 109462,
                    "name" => "Trailer",
                    "video_id" => "_3YNL0OWio0",
                  ],
                  1 => [
                    "id" => 28119,
                    "game" => 109462,
                    "name" => "Gameplay video",
                    "video_id" => "dEh3MPy4GAU",
                  ],
                  2 => [
                    "id" => 32890,
                    "game" => 109462,
                    "name" => "Trailer",
                    "video_id" => "nCwVTCxm29c",
                  ],
                  3 => [
                    "id" => 35590,
                    "game" => 109462,
                    "name" => "Trailer",
                    "video_id" => "u9TY741PSh8",
                  ],
                  4 => [
                    "id" => 35591,
                    "game" => 109462,
                    "name" => "Trailer",
                    "video_id" => "KpZyexo-ziA",
                  ],
                  5 => [
                    "id" => 35592,
                    "game" => 109462,
                    "name" => "Trailer",
                    "video_id" => "aIDu18n3umY",
                  ],
                ],
                "websites" => [
                  0 => [
                    "id" => 116668,
                    "category" => 1,
                    "game" => 109462,
                    "trusted" => false,
                    "url" => "https://www.nintendo.com/games/detail/animal-crossing-new-horizons-switch/",
                  ],
                  1 => [
                    "id" => 116669,
                    "category" => 2,
                    "game" => 109462,
                    "trusted" => false,
                    "url" => "https://animalcrossing.fandom.com/wiki/Animal_Crossing:_New_Horizons",
                  ],
                  2 => [
                    "id" => 116670,
                    "category" => 3,
                    "game" => 109462,
                    "trusted" => true,
                    "url" => "https://en.wikipedia.org/wiki/Animal_Crossing:_New_Horizons",
                  ],
                  3 => [
                    "id" => 137604,
                    "category" => 5,
                    "game" => 109462,
                    "trusted" => true,
                    "url" => "https://twitter.com/animalcrossing",
                  ],
                  4 => [
                    "id" => 137605,
                    "category" => 14,
                    "game" => 109462,
                    "trusted" => true,
                    "url" => "https://www.reddit.com/r/AnimalCrossing",
                  ],
                  5 => [
                    "id" => 139144,
                    "category" => 18,
                    "game" => 109462,
                    "trusted" => true,
                    "url" => "https://discordapp.com/invite/qcNyHre",
                  ],
                ],
              ]
            ], 200);
    }
}
