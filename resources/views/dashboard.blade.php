<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Task Dashboard') }}
            </h2>

            <a href="{{ route('tasks.create') }}"
                class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-indigo-700 transition">
                + Add Task
            </a>
        </div>
    </x-slot>

    <div class="py-10 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white p-6 rounded-2xl shadow">
                    <p class="text-sm text-gray-500">Total Tasks</p>
                    <h3 class="text-2xl font-bold text-gray-800">{{ $tasks->count() }}</h3>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow">
                    <p class="text-sm text-gray-500">In Progress</p>
                    <h3 class="text-2xl font-bold text-blue-600">
                        {{ $tasks->where('status', 'in_progress')->count() }}
                    </h3>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow">
                    <p class="text-sm text-gray-500">Completed</p>
                    <h3 class="text-2xl font-bold text-green-600">
                        {{ $tasks->where('status', 'completed')->count() }}
                    </h3>
                </div>
            </div>

            <!-- Task List -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                @forelse ($tasks as $task)
                    <div
                        class="bg-white rounded-2xl shadow hover:shadow-lg transition p-6 flex flex-col justify-between">

                        <!-- Title -->
                        <div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">
                                {{ $task->title }}
                            </h3>

                            <p class="text-sm text-gray-500 line-clamp-2">
                                {{ $task->description ?? 'No description provided.' }}
                            </p>
                        </div>

                        <!-- Status + Priority -->
                        <div class="mt-4 flex items-center justify-between">

                            <!-- Status Badge -->
                            <span
                                class="px-3 py-1 text-xs font-semibold rounded-full
                                @if ($task->status == 'pending') bg-yellow-100 text-yellow-700
                                @elseif($task->status == 'in_progress') bg-blue-100 text-blue-700
                                @else bg-green-100 text-green-700 @endif">
                                {{ ucfirst(str_replace('_', ' ', $task->status)) }}
                            </span>

                            <!-- Priority Badge -->
                            <span
                                class="px-3 py-1 text-xs font-semibold rounded-full
                                @if ($task->priority == 'high') bg-red-100 text-red-700
                                @elseif($task->priority == 'medium') bg-orange-100 text-orange-700
                                @else bg-gray-100 text-gray-700 @endif">
                                {{ ucfirst($task->priority) }}
                            </span>
                        </div>

                        <!-- Footer -->
                        <div class="mt-5 flex items-center justify-between text-xs text-gray-500">

                            <!-- Due Date -->
                            <div>
                                @if ($task->due_date)
                                    📅 {{ $task->due_date->format('d M Y') }}
                                @else
                                    No deadline
                                @endif
                            </div>

                            <!-- Actions -->
                            <div class="flex items-center gap-3">

                                <a href="{{ route('tasks.edit', $task) }}" class="text-indigo-600 hover:underline">
                                    Edit
                                </a>

                                <form action="{{ route('tasks.destroy', $task) }}" method="POST"
                                    onsubmit="return confirm('Delete this task?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600 hover:underline">
                                        Delete
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-20">
                        <p class="text-gray-500">No tasks found.</p>

                        <a href="{{ route('tasks.create') }}"
                            class="mt-4 inline-block bg-indigo-600 text-white px-6 py-2 rounded-lg">
                            Create your first task
                        </a>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
</x-app-layout>
