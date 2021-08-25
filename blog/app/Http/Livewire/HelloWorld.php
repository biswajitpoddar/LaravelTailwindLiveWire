<?php

namespace App\Http\Livewire;

// use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

//use LivewireUI\Modal\Contracts\ModalComponent

class HelloWorld extends ModalComponent
{
    public function render()
    {
        return view('livewire.hello-world');
    }
}
