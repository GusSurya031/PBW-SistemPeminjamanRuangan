<aside
    class="relative bg-sidebar bg-white-900 text-stone-900 h-screen border-r-2 w-64 hidden sm:flex shadow-xl sm:flex-col sm:justify-between">
    <div class="p-6">
        <div class="flex flex-col gap-8">
            <figure class="flex items-center gap-2">
                <img src="/img/logo.png"></img>
                <figcaption class="font-bold">RuanganKu</figcaption>
            </figure>
            <figure class="flex items-center gap-2">
                <img src="/img/avatar.jpg" class="w-10 rounded-full"></img>
                <figcaption class="">
                    <p>{{ Auth('admin')->user()->name }}</p>
                    <p class="text-sm text-stone-400">admin</p>
                </figcaption>
            </figure>
        </div>
        <nav class=" text-base font-semibold mt-12">
            <p class="text-sm text-stone-300 mb-4">Menu Admin</p>
            <a href="{{ route('admin.dashboard') }}"
                class="flex items-center py-4 pl-4 nav-item hover:bg-stone-300 rounded transition-all @if (Route::is('admin.dashboard')) bg-stone-300 font-bold @endif"">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            <a href="{{ route('admin.schedules') }}"
                class="flex items-center my-2 py-4 pl-4 nav-item hover:bg-stone-300 rounded transition-all @if (Route::is('admin.schedules')) bg-stone-300 font-bold @endif">
                <i class="fas fa-table mr-3"></i>
                Schedules
            </a>
            <a href="{{ route('admin.building') }}"
                class="flex items-center py-4 pl-4 nav-item hover:bg-stone-300 rounded transition-all @if (Route::is('admin.building')) bg-stone-300 font-bold @endif"">
                <i class="fas fa-building mr-3"></i>
                Building
            </a>
        </nav>
    </div>

    <div class="p-6">
        <form action="/admin/logout" method="POST">
            @csrf
            <div class="hover:bg-stone-300 hover:rounded transition-all">
                <button class="py-4 pl-4 hover:bg-stone-300 hover:rounded transition-all font-bold ">
                    <i class="fas fa-arrow-left mr-3"></i>
                    Logout
                </button>
            </div>
        </form>
    </div>
</aside>
