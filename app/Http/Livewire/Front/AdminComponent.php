<?php

namespace App\Http\Livewire\Front;

use App\Models\Banner;
use App\Models\organization;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminComponent extends Component
{
    use WithFileUploads;
    public $name, $description, $image = null, $banner_id = null, $banners = [], $modal = false;

    public function render()
    {
        return view(
            'livewire.front.admin-component',
            [
                'banners' => $this->show(),
                'organizations' => $this->getorganization(),

            ]
        );
    }

    public function index()
    {
        return Banner::paginate(5);
    }

    public function getorganization()
    {
        return organization::paginate(5);
    }

    public function store()
    {
        if ($this->banner_id != null) {
            $banner = Banner::find($this->banner_id);
            $banner->name = $this->name;
            $banner->description = $this->description;
            if (Storage::disk('public')->exists($banner->image)) {
                Storage::disk('public')->delete($banner->image);
            }
            Storage::disk('public');
            $banner->image = $this->image->store('images', 'public');
            $banner->save();
        } else {
            Banner::create([
                'name' => $this->name,
                'description' => $this->description,
                'image' => $this->image->store('images', 'public'),
            ]);
        }
        $this->reset(['name', 'description', 'image']);
        Log::debug('Se agregaron datos');
    }

    public function delete(Banner $banner)
    {
        $banner->update(['status' => 0]);
    }

    public function edit(Banner $banner)
    {
        $this->name = $banner->name;
        $this->banner_id = $banner->id;
        $this->description = $banner->description;
        $this->image = $banner->image;
    }

    public function update()
    {
        $B = Banner::find($this->banner_id);
        $B->name = $this->name;
        $B->description = $this->description;
        $B->save();
    }

    public function show()
    {
        return $this->banners = Banner::where('status', 1)->orderBy('id', 'desc')->get();
    }
}
