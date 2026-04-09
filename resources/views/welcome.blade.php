<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'TaskFlow') }} - Smart Task Management</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 text-slate-800 antialiased">

    <!-- Header -->
    @include('components.header')

    <main>
        <!-- Hero Section -->
        <section class="relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 via-white to-cyan-50"></div>
            <div class="relative mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-28">
                <div class="grid items-center gap-14 lg:grid-cols-2">
                    <div>
                        <span
                            class="inline-flex items-center rounded-full bg-indigo-100 px-4 py-1.5 text-sm font-medium text-indigo-700">
                            Task Management Made Easy
                        </span>

                        <h2 class="mt-6 text-4xl font-extrabold tracking-tight text-slate-900 sm:text-5xl lg:text-6xl">
                            Organize work,
                            <span class="text-indigo-600">track progress,</span>
                            and stay productive.
                        </h2>

                        <p class="mt-6 max-w-xl text-lg leading-8 text-slate-600">
                            A simple and reliable task management system to help individuals and teams
                            create tasks, update progress, and manage daily work efficiently.
                        </p>

                        <div class="mt-8 flex flex-wrap items-center gap-4">
                            @auth
                                <a href="{{ route('tasks.index') }}"
                                    class="rounded-xl bg-indigo-600 px-6 py-3.5 text-sm font-semibold text-white shadow-lg hover:bg-indigo-700 transition">
                                    Go to Dashboard
                                </a>
                            @else
                                <a href="{{ route('register') }}"
                                    class="rounded-xl bg-indigo-600 px-6 py-3.5 text-sm font-semibold text-white shadow-lg hover:bg-indigo-700 transition">
                                    Start Managing Tasks
                                </a>

                                <a href="{{ route('login') }}"
                                    class="rounded-xl border border-slate-300 bg-white px-6 py-3.5 text-sm font-semibold text-slate-700 hover:bg-slate-100 transition">
                                    Sign In
                                </a>
                            @endauth
                        </div>

                        <div class="mt-10 flex flex-wrap gap-6 text-sm text-slate-500">
                            <div class="flex items-center gap-2">
                                <span class="h-2.5 w-2.5 rounded-full bg-emerald-500"></span>
                                Create & manage tasks
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="h-2.5 w-2.5 rounded-full bg-blue-500"></span>
                                Track progress easily
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="h-2.5 w-2.5 rounded-full bg-amber-500"></span>
                                Clean & intuitive UI
                            </div>
                        </div>
                    </div>

                    <!-- Hero Card -->
                    <div class="relative">
                        <div class="absolute -top-8 -left-8 h-40 w-40 rounded-full bg-indigo-200 blur-3xl opacity-50">
                        </div>
                        <div class="absolute -bottom-8 -right-8 h-40 w-40 rounded-full bg-cyan-200 blur-3xl opacity-50">
                        </div>

                        <div class="relative rounded-3xl border border-slate-200 bg-white p-6 shadow-2xl">
                            <div class="mb-6 flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900">Today's Tasks</h3>
                                    <p class="text-sm text-slate-500">Overview of your current workflow</p>
                                </div>
                                <span
                                    class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700">
                                    Active
                                </span>
                            </div>

                            <div class="space-y-4">
                                <div class="rounded-2xl border border-slate-200 p-4">
                                    <div class="flex items-start justify-between gap-4">
                                        <div>
                                            <h4 class="font-semibold text-slate-900">Design landing page</h4>
                                            <p class="mt-1 text-sm text-slate-500">Create a clean and modern welcome
                                                page
                                                for users.</p>
                                        </div>
                                        <span
                                            class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-semibold text-yellow-700">
                                            Pending
                                        </span>
                                    </div>
                                </div>

                                <div class="rounded-2xl border border-slate-200 p-4">
                                    <div class="flex items-start justify-between gap-4">
                                        <div>
                                            <h4 class="font-semibold text-slate-900">Build task CRUD</h4>
                                            <p class="mt-1 text-sm text-slate-500">Implement create, update, and delete
                                                functionalities.</p>
                                        </div>
                                        <span
                                            class="rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-700">
                                            In Progress
                                        </span>
                                    </div>
                                </div>

                                <div class="rounded-2xl border border-slate-200 p-4">
                                    <div class="flex items-start justify-between gap-4">
                                        <div>
                                            <h4 class="font-semibold text-slate-900">Write feature tests</h4>
                                            <p class="mt-1 text-sm text-slate-500">Ensure core system reliability with
                                                tests.</p>
                                        </div>
                                        <span
                                            class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700">
                                            Completed
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features -->
        <section id="features" class="py-20">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl text-center">
                    <h3 class="text-3xl font-bold text-slate-900">Everything you need to manage tasks</h3>
                    <p class="mt-4 text-slate-600">
                        Keep your work organized with a clean workflow, simple controls, and reliable task tracking.
                    </p>
                </div>

                <div class="mt-14 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
                    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md transition">
                        <div
                            class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-indigo-100 text-indigo-600">
                            ✓
                        </div>
                        <h4 class="text-lg font-bold text-slate-900">Task Creation</h4>
                        <p class="mt-2 text-sm leading-6 text-slate-600">
                            Quickly add new tasks with title, description, status, and due date.
                        </p>
                    </div>

                    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md transition">
                        <div
                            class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-100 text-blue-600">
                            ↻
                        </div>
                        <h4 class="text-lg font-bold text-slate-900">Status Tracking</h4>
                        <p class="mt-2 text-sm leading-6 text-slate-600">
                            Track tasks easily with pending, in progress, and completed states.
                        </p>
                    </div>

                    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md transition">
                        <div
                            class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-100 text-emerald-600">
                            ⚡
                        </div>
                        <h4 class="text-lg font-bold text-slate-900">Clean Workflow</h4>
                        <p class="mt-2 text-sm leading-6 text-slate-600">
                            Enjoy a simple and intuitive interface built for speed and productivity.
                        </p>
                    </div>

                    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md transition">
                        <div
                            class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-100 text-amber-600">
                            🔒
                        </div>
                        <h4 class="text-lg font-bold text-slate-900">Reliable System</h4>
                        <p class="mt-2 text-sm leading-6 text-slate-600">
                            Built with Laravel for structure, maintainability, and dependable performance.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Workflow -->
        <section id="workflow" class="bg-white py-20">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                    <div>
                        <h3 class="text-3xl font-bold text-slate-900">Simple workflow for better productivity</h3>
                        <p class="mt-4 text-slate-600 leading-7">
                            From creating daily tasks to updating progress and completing work,
                            the system keeps everything organized in one place.
                        </p>

                        <div class="mt-8 space-y-6">
                            <div class="flex gap-4">
                                <div
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-indigo-600 text-sm font-bold text-white">
                                    1</div>
                                <div>
                                    <h4 class="font-semibold text-slate-900">Create tasks</h4>
                                    <p class="text-sm text-slate-600">Add tasks quickly with all necessary details.</p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-indigo-600 text-sm font-bold text-white">
                                    2</div>
                                <div>
                                    <h4 class="font-semibold text-slate-900">Track progress</h4>
                                    <p class="text-sm text-slate-600">Monitor work through clear status labels and
                                        organized listings.</p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-indigo-600 text-sm font-bold text-white">
                                    3</div>
                                <div>
                                    <h4 class="font-semibold text-slate-900">Complete and manage</h4>
                                    <p class="text-sm text-slate-600">Update, edit, or remove tasks whenever needed.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-3xl border border-slate-200 bg-slate-50 p-8 shadow-sm">
                        <h4 class="text-xl font-bold text-slate-900">Why this solution works</h4>
                        <div class="mt-6 space-y-5 text-sm text-slate-600">
                            <div class="rounded-2xl bg-white p-5 border border-slate-200">
                                <span class="font-semibold text-slate-900">Clean Interface:</span>
                                Easy for users to understand and use without confusion.
                            </div>
                            <div class="rounded-2xl bg-white p-5 border border-slate-200">
                                <span class="font-semibold text-slate-900">Reliable Backend:</span>
                                Structured with Laravel MVC and built for maintainability.
                            </div>
                            <div class="rounded-2xl bg-white p-5 border border-slate-200">
                                <span class="font-semibold text-slate-900">Smooth Experience:</span>
                                Simple navigation, quick actions, and clear visual feedback.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats -->
        <section id="stats" class="py-20">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="grid gap-6 md:grid-cols-3">
                    <div class="rounded-3xl bg-indigo-600 p-8 text-white shadow-lg">
                        <p class="text-sm uppercase tracking-wider text-indigo-100">Focus</p>
                        <h4 class="mt-3 text-3xl font-bold">Clean Code</h4>
                        <p class="mt-3 text-indigo-100">
                            Thoughtfully structured Laravel code for clarity and maintainability.
                        </p>
                    </div>

                    <div class="rounded-3xl bg-slate-900 p-8 text-white shadow-lg">
                        <p class="text-sm uppercase tracking-wider text-slate-300">Goal</p>
                        <h4 class="mt-3 text-3xl font-bold">Reliability</h4>
                        <p class="mt-3 text-slate-300">
                            Core features designed to work smoothly for real-world daily task usage.
                        </p>
                    </div>

                    <div class="rounded-3xl bg-emerald-600 p-8 text-white shadow-lg">
                        <p class="text-sm uppercase tracking-wider text-emerald-100">Experience</p>
                        <h4 class="mt-3 text-3xl font-bold">Usability</h4>
                        <p class="mt-3 text-emerald-100">
                            A user-friendly interface to keep work organized and easy to manage.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="pb-20">
            <div class="mx-auto max-w-5xl px-6 lg:px-8">
                <div
                    class="rounded-3xl bg-gradient-to-r from-indigo-600 to-blue-600 px-8 py-14 text-center text-white shadow-2xl">
                    <h3 class="text-3xl font-bold">Ready to manage your tasks better?</h3>
                    <p class="mx-auto mt-4 max-w-2xl text-indigo-100">
                        Start organizing your daily workflow with a simple, clean, and reliable task management system.
                    </p>

                    <div class="mt-8 flex flex-wrap justify-center gap-4">
                        @auth
                            <a href="{{ route('tasks.index') }}"
                                class="rounded-xl bg-white px-6 py-3 text-sm font-semibold text-indigo-700 hover:bg-slate-100 transition">
                                Open Dashboard
                            </a>
                        @else
                            <a href="{{ route('register') }}"
                                class="rounded-xl bg-white px-6 py-3 text-sm font-semibold text-indigo-700 hover:bg-slate-100 transition">
                                Create Account
                            </a>

                            <a href="{{ route('login') }}"
                                class="rounded-xl border border-white/30 px-6 py-3 text-sm font-semibold text-white hover:bg-white/10 transition">
                                Login
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    @include('components.footer')

</body>

</html>
