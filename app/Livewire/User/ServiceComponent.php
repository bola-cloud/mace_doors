<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Type;
use App\Models\Service;

class ServiceComponent extends Component
{
    public $name;

    public function mount($name)
    {
        // Set the name from the URL parameter
        $this->name = $name;
    }

    public function render()
    {
        // Determine the correct column based on the current locale
        $column = app()->getLocale() == 'ar' ? 'ar_name_service' : 'en_name_service';

        // Query for the service based on the locale-specific name
        $service = Service::where($column, 'like', $this->name)->first();

        // Handle cases where the service might not be found
        if (!$service) {
            abort(404, __('Service not found'));
        }

        // Get the types related to the service
        $types = Type::where("service_id", $service->id)->get();

        return view('livewire.user.service-component', [
            'types' => $types,
            'service' => $service
        ])->layout('layouts.user');
    }
}
