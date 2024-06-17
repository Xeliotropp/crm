<?php

namespace App\Livewire\Contragents;

use App\Models\Contragents;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $contragents = Contragents::paginate(10);
        return view('livewire.contragents.index', ['contragents' => $contragents])
        ->layout('layouts.app');
    }
}
