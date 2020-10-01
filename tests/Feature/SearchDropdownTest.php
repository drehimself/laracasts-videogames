<?php

namespace Tests\Feature;

use Tests\TestCase;
use Livewire\Livewire;
use Illuminate\Support\Facades\Http;
use App\Http\Livewire\SearchDropdown;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SearchDropdownTest extends TestCase
{
    /** @test */
    public function the_search_dropdown_searches_for_games()
    {
        Http::fake([
            config('services.igdb.endpoint') => $this->fakeSearchGames(),
        ]);

        Livewire::test(SearchDropdown::class)
            ->assertDontSee('zelda')
            ->set('search', 'zelda')
            ->assertSee('Fake The Legend of Zelda: Breath of the Wild')
            ->assertSee('Fake The Legend of Zelda: Ocarina of Time');
    }

    private function fakeSearchGames()
    {
        return Http::response([
          0 => [
            "id" => 1025,
            "cover" => [
              "id" => 86234,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1uje.jpg",
            ],
            "name" => "Zelda II: The Adventure of Link",
            "slug" => "zelda-ii-the-adventure-of-link",
          ],
          1 => [
            "id" => 1029,
            "cover" => [
              "id" => 76691,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1n6b.jpg",
            ],
            "name" => "Fake The Legend of Zelda: Ocarina of Time",
            "slug" => "the-legend-of-zelda-ocarina-of-time",
          ],
          2 => [
            "id" => 1034,
            "cover" => [
              "id" => 77456,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1nrk.jpg",
            ],
            "name" => "The Legend of Zelda: Four Swords Adventures",
            "slug" => "the-legend-of-zelda-four-swords-adventures",
          ],
          3 => [
            "id" => 7346,
            "cover" => [
              "id" => 87289,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1vcp.jpg",
            ],
            "name" => "Fake The Legend of Zelda: Breath of the Wild",
            "slug" => "the-legend-of-zelda-breath-of-the-wild",
          ],
          4 => [
            "id" => 1030,
            "cover" => [
              "id" => 76690,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1n6a.jpg",
            ],
            "name" => "The Legend of Zelda: Majora's Mask",
            "slug" => "the-legend-of-zelda-majora-s-mask",
          ],
          5 => [
            "id" => 11194,
            "cover" => [
              "id" => 77455,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1nrj.jpg",
            ],
            "name" => "The Legend of Zelda: Tri Force Heroes",
            "slug" => "the-legend-of-zelda-tri-force-heroes",
          ],
          6 => [
            "id" => 1027,
            "cover" => [
              "id" => 77914,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1o4a.jpg",
            ],
            "name" => "The Legend of Zelda: Link's Awakening DX",
            "slug" => "the-legend-of-zelda-link-s-awakening-dx",
          ],
          7 => [
            "id" => 2909,
            "cover" => [
              "id" => 77440,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1nr4.jpg",
            ],
            "name" => "The Legend of Zelda: A Link Between Worlds",
            "slug" => "the-legend-of-zelda-a-link-between-worlds",
          ],
          8 => [
            "id" => 1033,
            "cover" => [
              "id" => 77430,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1nqu.jpg",
            ],
            "name" => "The Legend of Zelda: The Wind Waker",
            "slug" => "the-legend-of-zelda-the-wind-waker",
          ],
          9 => [
            "id" => 1041,
            "cover" => [
              "id" => 77450,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1nre.jpg",
            ],
            "name" => "The Legend of Zelda: Oracle of Ages",
            "slug" => "the-legend-of-zelda-oracle-of-ages",
          ],
        ], 200);
    }
}
