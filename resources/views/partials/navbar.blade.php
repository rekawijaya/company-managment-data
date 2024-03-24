
<nav class="bg-gray-800 py-4">
    <div class="container mx-auto flex items-center justify-between px-4">
        <div>
            <a href="/" class="text-lg font-bold text-cyan-300">PT.CMS</a>
        </div>
        <div class="hidden md:block">
            <ul class="flex space-x-4">
                <li>
                    <a href="/" class="text-white hover:text-gray-300 font-bold {{ $tittle === 'home' ? 'text-cyan-400 hover:text-cyan-300': '' }}">Home</a>
                </li>
                <li>
                    <a href="/about" class="text-white hover:text-gray-300 font-bold {{ $tittle === 'about' ? 'text-cyan-400 hover:text-cyan-300': '' }}">About</a>
                </li>
                <li>
                    <a href="/aplication" class="text-white hover:text-gray-300 font-bold {{ $tittle === 'sevices' ? 'text-cyan-400 hover:text-cyan-300': '' }}">Aplication</a>
                </li>
                <li>
                    <a href="/employee" class="text-white hover:text-gray-300 font-bold {{ $tittle === 'employee' ? 'text-cyan-400 hover:text-cyan-300': '' }}">Employee</a>
                </li>
                <li>
                    <a href="#" class="text-white hover:text-gray-300 font-bold {{ $tittle === 'contact' ? 'text-cyan-400 hover:text-cyan-300': '' }}">Contact</a>
                </li>
            </ul>
        </div>
        <div class="md:hidden">
            <button id="mobile-menu-btn" class="text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>
    <div id="mobile-menu" class="hidden md:hidden bg-gray-800">
        <ul class="text-white">
            <li><a href="/" class="block px-4 py-2 hover:bg-gray-700">Home</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-700">About</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-700">Aplication</a></li>
            <li><a href="/employee" class="block px-4 py-2 hover:bg-gray-700">Employee</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-700">Contact</a></li>
        </ul>
    </div>
</nav>
