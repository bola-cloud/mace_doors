<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Service;
use App\Models\Quote;
class FreeQuoteComponent extends Component
{

    public $name;
    public $email;
    public $mobile;
    public $service;
    public $message;
    protected $rules = [
        'name' => 'required',
        'mobile' => 'required',
        'service' => 'required',
        'message' => 'required'
    ];

    public function add_quote()
    {
        // dd($this->all());
        $this->validate();
        Quote::create([
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'service' => $this->service,
            'message' => $this->message,
        ]);
        session()->flash('message', 'Quote request successfully sent.');
        $this->reset();
        return redirect()->route('freequote');
    }

    public function render()
    {
        $services=Service::all();
        return view('livewire.user.free-quote-component',['services'=>$services])->layout('layouts.user');
    }
}
