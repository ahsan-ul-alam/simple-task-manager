<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-xl font-bold text-gray-800 leading-tight">
                    Create Task
                </h2>
                <p class="text-sm text-gray-500 mt-1">
                    Add a new task with all necessary details.
                </p>
            </div>

            <a href="{{ route('tasks.index') }}" class="text-sm font-medium text-gray-600 hover:text-gray-800">
                ← Back to Tasks
            </a>
        </div>
    </x-slot>

    <div class="py-10 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                <form action="{{ route('tasks.store') }}" method="POST" class="space-y-6">
                    @csrf

                    @include('tasks._form', [
                        'task' => null,
                        'buttonText' => 'Create Task',
                    ])
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
