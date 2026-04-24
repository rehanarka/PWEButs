@php
$menus = [
    ['name' => 'Dashboard', 'route' => 'dashboard', 'active' => request()->routeIs('dashboard')],
    ['name' => 'Produk', 'route' => 'produk', 'active' => request()->routeIs('produk')],
    ['name' => 'Pesanan', 'route' => 'pesanan', 'active' => request()->routeIs('pesanan')]
];
$baseClass = 'flex items-center w-full px-4 py-2 text-md font-medium rounded-lg transition duration-300';
$activeClass = 'bg-white hover:bg-gray-200 text-gray-800';
$inactiveClass = 'text-gray-600 hover:bg-white hover:text-white hover:ring hover:ring-white hover:text-gray-800';
@endphp

<div id="sideBar" class="pt-10 w-56 bg-slate-100 h-screen fixed top-0 left-0 p-6 border-r border-gray-200">
    <h1 class="font-serif text-2xl font-bold text-center text-black shadow-amber-200 pb-3  border-b-4 border-white">ArkaCafe</h1>
    <ul class="space-y-2 mt-4">
        @foreach ($menus as $menu )
            <li>
                <a href="{{ route($menu['route']) }}" class="{{ $baseClass }} {{ $menu['active'] ? $activeClass : $inactiveClass }}">
                    {{ $menu['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
