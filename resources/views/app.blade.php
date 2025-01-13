<x-layout>
    <header class="bg-white pt-5">
        <nav class="flex justify-between items-center w-[92%] mx-auto">
            <div>
                <h1 class="font-bold md:text-2xl text-base">Penilaian Baris-Berbaris</h1>
            </div>
            <div
                class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[15rem] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5 z-[-10]">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[2] gap-4">
                    <li>
                        <a class="hover:text-gray-500" href="#">Products</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="#">Solution</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="#">Resource</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="#">Developers</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="#">Pricing</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
        </nav>
    </header>
</x-layout>
