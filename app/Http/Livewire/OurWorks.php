<?php

namespace App\Http\Livewire;

use App\Models\OurWorks as ModelsOurWorks;
use Livewire\Component;

class OurWorks extends Component
{
    public $ourWorks;
    public function mount(){
        $this->ourWorks = ModelsOurWorks::first();
    }
    public function render()
    {
        return view('livewire.our-works.index',[
            'ourWorks' => $this->ourWorks
        ])
        ->extends('livewire.layouts.app');
    }
}
