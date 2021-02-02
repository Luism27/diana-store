<div 
class="fixed left-0 z-10 w-auto h-full pt-2 space-y-10 overflow-x-hidden shadow-lg bg-pastel-200 top-20">
    <a href="{{ route('profile.admin.dashboard') }}" class="block p-5 hover:bg-white {{request()->routeIs('profile.admin.dashboard') ? 'bg-white': '' }} ">
        <i class="text-lg fas fa-tachometer-alt"> Dashboard</i>    
    </a>
    <a href="{{ route('profile.admin.crud') }}" class="block p-5 hover:bg-white {{request()->routeIs('profile.admin.crud.*') ? 'bg-white': '' }} ">
        <i class="text-lg fas fa-plus-circle"> Crud</i>
    </a>
    <a href="{{ route('profile.admin.cliente') }}" class="block p-5 hover:bg-white {{request()->routeIs('profile.admin.cliente') ? 'bg-white': '' }} ">
        <i class="text-lg fas fa-users"> Clientes</i>    
    </a>
</div>