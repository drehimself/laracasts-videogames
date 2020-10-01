<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{
    public $search = '';
    public $searchResults = [];

    public function render()
    {
        if (strlen($this->search) >= 2) {
            $this->searchResults =  Http::withHeaders(config('services.igdb.headers'))
                ->withBody(
                    "search \"{$this->search}\";
                        fields name, slug, cover.url;
                        limit 8;
                    ", "text/plain"
                )->post(config('services.igdb.endpoint'))
                ->json();
        }

        return view('livewire.search-dropdown');
    }
}
