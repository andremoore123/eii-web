<?php

namespace App\Http\Livewire;

use App\Models\Home as ModelsHome;
use Livewire\Component;

class Home extends Component
{
    public $homes;

    public function mount()
    {
        $this->homes = ModelsHome::first();
    }

    public function render()
    {
        return view('livewire.home.index')
            ->layoutData(['homes' => $this->homes]) // Pass $homes to the layout
            ->extends('livewire.layouts.app');
    }
}
