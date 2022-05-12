<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\portfolio;

class PortfolioComponent extends Component
{
    public function render()
    {
        return view('livewire.front.portfolio-component',
            [
                'portfolios' => $this->index(),
            ]
        );
    }

    public function index()
    {
        return Portfolio::paginate(5);
    }
}
