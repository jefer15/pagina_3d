<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\service;

class serviceComponent extends Component
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
        return service::paginate(5);
    }
}
