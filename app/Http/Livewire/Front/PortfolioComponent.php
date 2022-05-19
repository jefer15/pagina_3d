<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\portfolio;

class portfolioComponent extends Component
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
        return portfolio::paginate(5);
    }
}
