<?php

namespace App\Livewire\Clients;

use Livewire\Component;
use App\Models\Clients;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function render()
    {
        $clients = Clients::paginate(10);
        return view('livewire.clients.index', ['clients' => $clients])
        ->layout('layouts.app');
    }
}
