<?php

namespace App\Livewire\Clients;

use Livewire\Component;
use App\Models\Clients;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $clientId;
    public function render()
    {
        $clients = Clients::orderBy('id')->paginate(10);
        return view('livewire.clients.index', ['clients' => $clients])
        ->layout('layouts.app');
    }

    public function deleteClient($clientId)
    {
        $this->clientId= $clientId;
    }

    public function destroyClient()
    {
        $client = Clients::find($this->clientId);
        $client->delete();
        session()->flash('message', 'Успешно изтрит клиент!');
        $this->dispatchBrowserEvent('close-modal');
    }
}
