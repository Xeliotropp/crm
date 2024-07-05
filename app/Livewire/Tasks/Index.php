<?php

namespace App\Livewire\Tasks;

use App\Models\Tasks;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $taskId;
    public function render()
    {
        $tasks = Tasks::orderBy("created_at","desc")->paginate(10);
        return view('livewire.tasks.index', compact('tasks'));
    }

    public function deleteTask($taskId)
    {
        $this->taskId= $taskId;
    }

    public function destroyTask()
    {
        $task = Tasks::find($this->taskId);
        $task->delete();
        session()->flash('message', 'Успешно изтрит клиент!');
    }
}
