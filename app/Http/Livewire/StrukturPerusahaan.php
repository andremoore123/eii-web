<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StrukturPerusahaan extends Component
{
    public function render()
    {
        return view('livewire.struktur-perusahaan.index')
            ->extends('livewire.layouts.app');
    }
}
