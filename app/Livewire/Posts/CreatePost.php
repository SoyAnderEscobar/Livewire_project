<?php

namespace App\Livewire\Posts;

use App\Models\User;
use Livewire\Component;

class CreatePost extends Component
{

    public $title,$user, $name, $email;

    public function mount(User $user)
    {
        // $this->user = $user;

        $this->fill(
            $user->only('name', 'email')
        );
    }

    public function save()
    {
        // dd($this->name);
    }
    

    public function render()
    {
        return view('livewire.posts.create-post');
    }
}
