<?php

namespace App\Livewire\Tasks;

use App\Models\Tasks;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $tasks = Tasks::orderBy("created_at","desc")->paginate(10);
        return view('livewire.tasks.index', compact('tasks'));
    }
}
