<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Type;
use App\Models\Service;
use Illuminate\Support\Facades\Session;

class ItemServiceCompnent extends Component
{
    public $name_type;

    public function mount($name_type)
    {
        // Save the name_type in the session
        Session::put('name_type', $name_type);

        // Assign the parameter passed from the route to the property
        $this->name_type = $name_type;
    }

    public function render()
    {
        $services = Service::all();

        // Retrieve the last saved name_type from the session if available
        if (Session::has('name_type')) {
            $this->name_type = Session::get('name_type');
        }

        // Determine the correct column based on the current locale
        $column = app()->getLocale() == 'ar' ? 'ar_name_type' : 'en_name_type';

        // Perform the query to find the type based on the locale
        $type = Type::where($column, $this->name_type)->with('service')->first();

        // Check if the type exists, if not, throw a 404 error
        if (!$type) {
            abort(404, __('Type not found'));
        }

        // Fetch related types using service_id
        $types = Type::where("service_id", $type->service_id)->get();

        return view('livewire.user.item-service-compnent', [
            'type' => $type,
            'services' => $services,
            'types' => $types
        ])->layout('layouts.user');
    }
}
