<?php

namespace App\Livewire\Contragents;

use App\Models\Contragents;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $contragentId;
    public function render()
    {
        $contragents = Contragents::paginate(10);
        return view('livewire.contragents.index', ['contragents' => $contragents])
        ->layout('layouts.app');
    }
    public function deleteContragent($contragentId)
    {
        $this->contragentId= $contragentId;
    }

    public function destroyContragent()
    {
        $contragent = Contragents::find($this->contragentId);
        $contragent->delete();
        session()->flash('message', 'Успешно изтрит клиент!');
    }
}
