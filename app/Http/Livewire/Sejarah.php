<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sejarah extends Component
{
    public function render()
    {
        return view('livewire.sejarah.index')
            ->extends('livewire.layouts.app');
    }
}
