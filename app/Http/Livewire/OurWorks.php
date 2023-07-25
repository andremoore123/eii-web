<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OurWorks extends Component
{
    public function render()
    {
        return view('livewire.our-works.index')
        ->extends('livewire.layouts.app');
    }
}
