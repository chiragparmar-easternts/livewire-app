<?php

namespace App\Livewire;

use Livewire\Component;

class TodoList extends Component
{
    public $todos = [];

    public $todo = '';

    public function add()
    {
        $this->todos[] = $this->todo;

        //$this->todo = '';
        $this->reset('todo'); // reset() won't work on values set in mount()
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
