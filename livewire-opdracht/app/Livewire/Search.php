<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

// use function Termwind\render;

class SearchUsers extends Component
{
    public $search = '';

    public function Filter()
    {
        $this->render();
    }

    public function resetSearch()
    {
        $this->search = '';
        $this->render();
    }

    public function render()
    {
        dd(User::where('name', 'like', '%' . $this->search . '%'));

        return view('livewire.search-users', [
            'users' => User::where('name', 'like', '%' . $this->search . '%')
        ]);
    }
}
