<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Blog;
use Livewire\WithFileUploads;

class AddBlogComponent extends Component
{
    use WithFileUploads;

    public $en_question;
    public $ar_question;
    public $en_answer;
    public $ar_answer;
    public $photo;

    protected $rules = [
        'en_question' => 'required|string',
        'ar_question' => 'required|string',
        'en_answer' => 'required|string',
        'ar_answer' => 'required|string',
        'photo' => 'nullable|image|max:1024', // Image validation
    ];

    public function mount()
    {
        $this->photo = null;
    }

    public function add_new()
    {
        $this->validate(); // Validate the input

        $blog = new Blog;
        $blog->en_question = $this->en_question;
        $blog->ar_question = $this->ar_question;
        $blog->en_answer = $this->en_answer;
        $blog->ar_answer = $this->ar_answer;

        if ($this->photo) {
            $imageName = uniqid() . '.' . $this->photo->getClientOriginalExtension();
            $this->photo->storeAs('photos', $imageName, 'public'); // Store in 'public/photos'
            $blog->photo = $imageName;
        }

        $blog->save();

        session()->flash('message', 'Blog added successfully.');
        return redirect()->route("add_blog");
    }

    public function render()
    {
        return view('livewire.admin.add-blog-component')->layout('layouts.admin');
    }
}
