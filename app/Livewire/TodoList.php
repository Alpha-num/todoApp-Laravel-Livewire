<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoList extends Component
{
    public $todo;
    public $todos = [];
    
    public function add(){
        $newTodo = Todo::create([
            'title' => $this->todo
        ]);
        $this->fetchTodos();
    }

    public function fetchTodos(){
        $this->todos = Todo::all();
    }
    
    public function mount(){
        $this->fetchTodos();
    }

    public function deleteTodo($id){
        Todo::find($id)->delete();
        $this->fetchTodos();
    }
    
    public function render()
    {
        return view('livewire.todo-list');
    }
}
