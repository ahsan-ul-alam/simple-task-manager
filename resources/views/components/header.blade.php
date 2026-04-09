    <header class="border-b border-slate-200 bg-white/90 backdrop-blur sticky top-0 z-50">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8">
            <a href="/" class="flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-indigo-600 text-white font-bold shadow-md">
                    T
                </div>
                <div>
                    <h1 class="text-lg font-bold text-slate-900">TaskFlow</h1>
                    <p class="text-xs text-slate-500">Simple Team Task Management</p>
                </div>
            </a>

            <nav class="hidden md:flex items-center gap-8 text-sm font-medium">
                <a href="#features" class="text-slate-600 hover:text-indigo-600 transition">Features</a>
                <a href="#workflow" class="text-slate-600 hover:text-indigo-600 transition">Workflow</a>
                <a href="#stats" class="text-slate-600 hover:text-indigo-600 transition">Why Us</a>
            </nav>

            <div class="flex items-center gap-3">
                @auth
                    <a href="{{ route('tasks.index') }}"
                        class="rounded-lg bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white shadow hover:bg-indigo-700 transition">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="rounded-lg border border-slate-300 px-4 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-100 transition">
                        Login
                    </a>

                    <a href="{{ route('register') }}"
                        class="rounded-lg bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white shadow hover:bg-indigo-700 transition">
                        Get Started
                    </a>
                @endauth
            </div>
        </div>
    </header>
