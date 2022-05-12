<?php

namespace App\Http\Livewire\Front;

use App\Models\Banner;
use App\Models\Organization;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        return view(
            'livewire.front.home-component',
            [
                'banners' => $this->index(),
                'organizations' => $this->getOrganization(),
            ]
        );
    }

    public function index()
    {
        return Banner::paginate(5);
    }

    public function getOrganization()
    {
        return organization::paginate(5);
    }

}
