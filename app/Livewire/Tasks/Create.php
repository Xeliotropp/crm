<?php

namespace App\Livewire\Tasks;

use App\Models\Clients;
use Livewire\Component;

class Index extends Component
{
    public $clients;
    public $selectedClient = null;
    public $objectFirst = '';
    public $adressObject2 = '';
    public $adressObject3 = '';
    public $adressObject4 = '';

    public function mount()
    {
        $this->clients = Clients::all();
    }

    public function updatedSelectedClient($clientId)
    {
        $client = Clients::find($clientId);
        
        if ($client) {
            $this->objectFirst = $client->object_first;
            $this->adressObject2 = $client->object_second;
            $this->adressObject3 = $client->object_third;
            $this->adressObject4 = $client->object_fourth;
        } else {
            $this->objectFirst = '';
            $this->adressObject2 = '';
            $this->adressObject3 = '';
            $this->adressObject4 = '';
        }
    }
    public function render()
    {
        return view('livewire.tasks.create  ');
    }
}
