<x-app-layout>
    <x-slot name="header">
        <h1 class="text-4xl">
                    Latest <span class="text-blue-500">Laravel From Scratch</span> News
                </h1>

                <h2 class="inline-flex mt-2">By Lary Laracore <img src="./images/lary-head.svg"
                                                                alt="Head of Lary the mascot"></h2>

                <p class="text-sm mt-14">
                    Another year. Another update. We're refreshing the popular Laravel series with new content.
                    I'm going to keep you guys up to speed with what's going on!
                </p>

                <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
                    <!--  Category -->
                    <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
                        <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold border-0 bg-none">
                            <option value="category" disabled selected>Category
                            </option>
                            <option value="personal">Personal</option>
                            <option value="business">Business</option>
                        </select>

                        <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                            height="22" viewBox="0 0 22 22">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                </path>
                                <path fill="#222"
                                    d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                            </g>
                        </svg>
                    </div>

                    <!-- Other Filters -->
                    <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
                        <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold border-0 bg-none">
                            <option value="category" disabled selected>Tags
                            </option>
                            <option value="foo">Foo
                            </option>
                            <option value="bar">Bar
                            </option>
                        </select>

                        <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                            height="22" viewBox="0 0 22 22">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                </path>
                                <path fill="#222"
                                    d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                            </g>
                        </svg>
                    </div>

                    <!-- Search -->
                    <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                        <form method="GET" action="#">
                            <input type="text" name="search" placeholder="Find something"
                                class="bg-transparent placeholder-black font-semibold text-sm border-0 py-0">
                        </form>
                    </div>
                </div>
            </header>
            <div class="text-red-300 border-red-300 text-cyan-300 text-lime-300
                border-cyan-300
                border-lime-300">
            </div>
        </x-slot>

    <x-post leading="1" :post="$posts[0]"/>

    <div class="lg:grid lg:grid-cols-2">
        
        @for ($i = 1; $i < 4; $i++)
        
            <x-post leading="0" :post="$posts[$i]" />

        @endfor  

    </div>

    <div class="lg:grid lg:grid-cols-3">

        @for ($i = 5; $i < 8; $i++)
        
            <x-post leading="0" :post="$posts[$i]" />

        @endfor

    </div>
</x-app-layout>
