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
    public $filters = [
        'id' => '',
        'client_id' => '',  // This will store the search term for client name
        'client_address_1' => '',
        'dateOfMeasurement' => '',
        'wayOfShowingDocumentation' => '',
        'certificateNumber' => '',
        'certificateDate' => '',
        'nextMeasurement' => '',
        'invoice' => '',
        'paid' => '',
        'invoice_date' => '',
        'payment_method' => '',
        'price_without_vat' => '',
        'contragent_sum' => '',
        'total_sum' => ''
    ];

    public function refreshPage()
    {
        session()->flash('success',' ');
    }

    public function render()
{
    $query = Tasks::query();

    foreach ($this->filters as $column => $value) {
        if (!empty($value)) {
            if ($column === 'id') {
                $query->where(function($q) use ($value) {
                    $q->where('id', 'like', '%' . ltrim($value, '0') . '%')
                      ->orWhereRaw("LPAD(id, 4, '0') LIKE ?", ['%' . $value . '%']);
                });
            } elseif ($column === 'paid') {
                $query->where($column, $value === 'Да' || $value === 'да' ? 1 : 0);
            } elseif (in_array($column, ['dateOfMeasurement', 'certificateDate', 'nextMeasurement', 'invoice_date'])) {
                $query->whereDate($column, 'like', '%' . $value . '%');
            } elseif (in_array($column, ['price_without_vat', 'contragent_sum', 'total_sum'])) {
                $query->where($column, 'like', $value . '%');
            } else {
                $query->whereRaw("LOWER($column) LIKE ?", ['%' . strtolower($value) . '%']);
            }
        }
    }
    //sprintf('%04d', $task->id)
    $tasks = $query->orderBy('id')->paginate(20);
    return view('livewire.tasks.index', compact('tasks'));
}

    public function deleteTask($taskId)
    {
        $this->taskId = $taskId;
    }

    public function destroyTask()
    {
        $task = Tasks::find($this->taskId);
        $task->delete();
        session()->flash('message', 'Успешно изтрит клиент!');
    }
}