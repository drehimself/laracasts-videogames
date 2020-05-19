<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class MostAnticipated extends Component
{
    public $mostAnticipated = [];

    public function loadMostAnticipated()
    {
        $current = Carbon::now()->timestamp;
        $afterFourMonths = Carbon::now()->addMonths(4)->timestamp;

        $this->mostAnticipated = Http::withHeaders(config('services.igdb'))
            ->withOptions([
                'body' => "
                    fields name, cover.url, first_release_date, popularity, platforms.abbreviation, rating, rating_count, summary, slug;
                    where platforms = (48,49,130,6)
                    & (first_release_date >= {$current}
                    & first_release_date < {$afterFourMonths});
                    sort popularity desc;
                    limit 4;
                "
            ])->get('https://api-v3.igdb.com/games')
            ->json();
    }

    public function render()
    {
        return view('livewire.most-anticipated');
    }
}
