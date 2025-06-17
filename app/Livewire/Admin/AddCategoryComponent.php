<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Service;
use Livewire\WithFileUploads;

class AddCategoryComponent extends Component
{
    use WithFileUploads;

    // English fields
    public $en_name_service;
    public $en_small_desc;
    public $en_desc1;
    public $en_desc2;
    public $en_desc3;

    // Arabic fields
    public $ar_name_service;
    public $ar_small_desc;
    public $ar_desc1;
    public $ar_desc2;
    public $ar_desc3;

    public $icon;
    public $tag;
    public $photo;

    public function add_service()
    {
        $this->validate([
            'en_name_service' => 'required|string|max:255',
            'ar_name_service' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048', // Max 2MB, and must be an image
        ]);

        $service = new Service();

        // English fields
        $service->en_name_service = $this->en_name_service;
        $service->en_small_desc = $this->en_small_desc;
        $service->en_desc_1 = $this->en_desc1;
        $service->en_desc_2 = $this->en_desc2;

        // Arabic fields
        $service->ar_name_service = $this->ar_name_service;
        $service->ar_small_desc = $this->ar_small_desc;
        $service->ar_desc_1 = $this->ar_desc1;
        $service->ar_desc_2 = $this->ar_desc2;
        $service->ar_desc_3 = $this->ar_desc3;

        // Common
        $service->icon = $this->icon;
        $service->tag = $this->tag;

        // Upload image and save file name to en_desc_3
        if ($this->photo) {
            $imageName = uniqid() . '.' . $this->photo->getClientOriginalExtension();
            $this->photo->storeAs('public/user/photos', $imageName);
            $service->en_desc_3 = $imageName;
        }

        $service->save();

        session()->flash('success', 'Service added successfully.');
        return redirect()->route('home_admin');
    }


    public function render()
    {
        return view('livewire.admin.add-category-component')->layout('layouts.admin');
    }
}
