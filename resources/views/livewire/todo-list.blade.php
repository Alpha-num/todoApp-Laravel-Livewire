<div class="bg-blue-400 py-20 min-h-screen flex flex-col items-center  text-white">
    <h2 class="text-3xl font-bold mb-4">Todo List App</h2>

    <div class="flex items-center space-x-2">
        <input type="text" wire:model="todo" class="border px-3 py-2 rounded-md focus:outline-none focus:ring focus:border-blue-300 text-black text-sm w-80" placeholder="Add a new todo" />
        <button wire:click="add" class="bg-yellow-300 text-gray-800 font-bold py-2 px-4 rounded-md hover:bg-yellow-400 transition duration-300 ease-in-out">Add</button>
    </div>

    <ul class="container mt-6">
        @forelse($todos as $todo)
            <li wire:key="{{$todo->id}}" class="my-2 w-96 bg-gray-100 p-3 flex justify-between rounded-md mx-auto text-gray-600">
                <span class="{{$todo->status == 'complete' ? 'line-through font-bold' : ''}}">{{ $todo->title }}</span>
                <div class="inline">
                    <button wire:confirm="Are you sure you want to delete" wire:click ="deleteTodo({{$todo->id}})" class="text-red-600 hover:text-red-500 ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                    <input type="checkbox" wire:change="toggleTodoStatus({{$todo->id}})" {{$todo->status == 'complete' ? 'checked': ''}} class="mx-2" >
                </div>
                
            </li>
        @empty
            <li class="my-2 bg-gray-100 p-3 rounded-md text-gray-500">No todos yet. Start adding!</li>
        @endforelse
    </ul>
</div>
