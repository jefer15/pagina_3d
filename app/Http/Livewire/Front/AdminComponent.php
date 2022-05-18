<?php

namespace App\Http\Livewire\Front;

use App\Models\Banner;
use App\Models\organization;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminComponent extends Component
{
    use WithFileUploads;
    public $name, $description, $image, $banner_id;

    public function render()
    {
        return view('livewire.front.admin-component',
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

    public function store()
    {
        Banner::create([
            'name' => $this->name,
            'description' => $this->description,
            'image' => $this->image->store('img'),
        ]);

        Log::debug('Se agregaron datos');
    }

    public function delete()
    {
        $B = Banner::find($this->banner_id);
        $B->status=0;
        // dd($B);
        $B->save();        
    }
}