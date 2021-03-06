<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class LiveTable extends Component
{
    use WithPagination;

    public $sortField = 'name'; // default sorting field
    public $sortAsc = true; // default sort direction
    public $search = '';

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    protected $listeners = ['delete'];

    public function sortBy($field)
    {
    //
    }

    public function delete($id)
    {
    User::find($id)
        ->delete();
    }

    public function render()
    {
        return view('livewire.live-table', [
            'domains' => Domain::paginate(3),
        ]);
    }
}
