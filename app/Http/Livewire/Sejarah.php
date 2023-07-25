<?php

namespace App\Http\Livewire;

use App\Models\Sejarah as ModelsSejarah;
use Livewire\Component;

class Sejarah extends Component
{
    public $sejarahs;

    public function mount()
    {
        $this->sejarahs = ModelsSejarah::first();
    }

    public function render()
    {
        return view('livewire.sejarah.index', [
            'sejarahs' => $this->sejarahs
        ])
            ->extends('livewire.layouts.app');
    }
}
