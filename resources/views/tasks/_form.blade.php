<div>
    <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">
        Title
    </label>
    <input type="text" name="title" id="title" value="{{ old('title', $task?->title) }}"
        class="w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
        placeholder="Enter task title">
    @error('title')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">
        Description
    </label>
    <textarea name="description" id="description" rows="5"
        class="w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
        placeholder="Write task details...">{{ old('description', $task?->description) }}</textarea>
    @error('description')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div>
        <label for="status" class="block text-sm font-semibold text-gray-700 mb-2">
            Status
        </label>
        <select name="status" id="status"
            class="w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            <option value="pending" @selected(old('status', $task?->status) === 'pending')>Pending</option>
            <option value="in_progress" @selected(old('status', $task?->status) === 'in_progress')>In Progress</option>
            <option value="completed" @selected(old('status', $task?->status) === 'completed')>Completed</option>
        </select>
        @error('status')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="priority" class="block text-sm font-semibold text-gray-700 mb-2">
            Priority
        </label>
        <select name="priority" id="priority"
            class="w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            <option value="low" @selected(old('priority', $task?->priority) === 'low')>Low</option>
            <option value="medium" @selected(old('priority', $task?->priority ?? 'medium') === 'medium')>Medium</option>
            <option value="high" @selected(old('priority', $task?->priority) === 'high')>High</option>
        </select>
        @error('priority')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
</div>

<div>
    <label for="due_date" class="block text-sm font-semibold text-gray-700 mb-2">
        Due Date
    </label>
    <input type="date" name="due_date" id="due_date"
        value="{{ old('due_date', $task?->due_date?->format('Y-m-d')) }}"
        class="w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    @error('due_date')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div class="flex items-center justify-end gap-3 pt-4">
    <a href="{{ route('dashboard') }}"
        class="rounded-xl border border-gray-300 px-5 py-2.5 text-sm font-semibold text-gray-700 hover:bg-gray-50 transition">
        Cancel
    </a>

    <button type="submit"
        class="rounded-xl bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white shadow hover:bg-indigo-700 transition">
        {{ $buttonText }}
    </button>
</div>
