<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Service;

class ServiceComponent extends Component
{
    public function render()
    {
        return view('livewire.front.service-component',
            [
                'services' => $this->index(),
            ]
        );
    }

    public function index()
    {
        return Service::paginate(5);
    }
}
