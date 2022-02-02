<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class Filter extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.filter',) [
            'domains' => Domain:where(('domain_name', 'name', 'type')->paginate(3)),
        ]);
    }
}
