<?php

namespace App\Http\Livewire;

use App\Models\post;
use Livewire\Component;
use Livewire\WithPagination;

class ShowAllPost extends Component
{
    use WithPagination;
    public function render()
    {

        return view('livewire.show-all-post', ['posts' => Post::orderBy('id', 'desc')->paginate(10)]);

    }
}
