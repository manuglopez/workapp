<?php include_once 'partials/head.php' ?>
<div id="wrapper" class="flex flex-col h-screen overflow-hidden">
    <header class="w-full">
        <?php require_once 'partials/navbar.php' ?>
    </header>

    
    <main class=" flex-1 overflow-y-scroll">
        <div class="lg:flex lg:h-full lg:flex-col">
            <header class="flex items-center justify-between border-b border-gray-200 py-4 px-6 lg:flex-none">
                <h1 class="text-lg font-semibold text-gray-900">
                    <time datetime="2022-01">Enero 2022</time>
                </h1>
                <div class="flex items-center">
                    <div class="flex items-center rounded-md shadow-sm md:items-stretch">
                        <button type="button" class="flex items-center justify-center rounded-l-md border border-r-0 border-gray-300 bg-white py-2 pl-3 pr-4 text-gray-400 hover:text-gray-500 focus:relative md:w-9 md:px-2 md:hover:bg-gray-50">
                            <span class="sr-only">Mes anterior</span>
                            <!-- Heroicon name: mini/chevron-left -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <button type="button" class="hidden border-t border-b border-gray-300 bg-white px-3.5 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900 focus:relative md:block">Today</button>
                        <span class="relative -mx-px h-5 w-px bg-gray-300 md:hidden"></span>
                        <button type="button" class="flex items-center justify-center rounded-r-md border border-l-0 border-gray-300 bg-white py-2 pl-4 pr-3 text-gray-400 hover:text-gray-500 focus:relative md:w-9 md:px-2 md:hover:bg-gray-50">
                            <span class="sr-only">Mes siguiente</span>
                            <!-- Heroicon name: mini/chevron-right -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div class="hidden md:ml-4 md:flex md:items-center">
                        <div class="relative">
                            <button type="button" class="flex items-center rounded-md border border-gray-300 bg-white py-2 pl-3 pr-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50" id="menu-button" aria-expanded="false" aria-haspopup="true">
                                Vista mensual
                                <!-- Heroicon name: mini/chevron-down -->
                                <svg class="ml-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </button>

                            <!--
                              Dropdown menu, show/hide based on menu state.

                              Entering: "transition ease-out duration-100"
                                From: "transform opacity-0 scale-95"
                                To: "transform opacity-100 scale-100"
                              Leaving: "transition ease-in duration-75"
                                From: "transform opacity-100 scale-100"
                                To: "transform opacity-0 scale-95"
                            -->
                            <div class="absolute right-0 z-10 mt-3 w-36 origin-top-right overflow-hidden rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Vista día</a>
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Vista semana</a>
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Vista mes</a>
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Vista año</a>
                                </div>
                            </div>
                        </div>
                        <div class="ml-6 h-6 w-px bg-gray-300"></div>
                        <button type="button" class="ml-6 rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add event</button>
                    </div>
                    <div class="relative ml-6 md:hidden">
                        <button type="button" class="-mx-2 flex items-center rounded-full border border-transparent p-2 text-gray-400 hover:text-gray-500" id="menu-0-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Abrir menu</span>
                            <!-- Heroicon name: mini/ellipsis-horizontal -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M3 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM8.5 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM15.5 8.5a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" />
                            </svg>
                        </button>

                        <!--
                          Dropdown menu, show/hide based on menu state.

                          Entering: "transition ease-out duration-100"
                            From: "transform opacity-0 scale-95"
                            To: "transform opacity-100 scale-100"
                          Leaving: "transition ease-in duration-75"
                            From: "transform opacity-100 scale-100"
                            To: "transform opacity-0 scale-95"
                        -->
                        <div class="absolute right-0 z-10 mt-3 w-36 origin-top-right divide-y divide-gray-100 overflow-hidden rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-0-button" tabindex="-1">
                            <div class="py-1" role="none">
                                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-0-item-0">Crear tarea</a>
                            </div>
                            <div class="py-1" role="none">
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-0-item-1">Ir a hoy</a>
                            </div>
                            <div class="py-1" role="none">
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-0-item-2">Vista día</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-0-item-3">Vista semana</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-0-item-4">Vista mes</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-0-item-5">Vista año</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="shadow ring-1 ring-black ring-opacity-5 lg:flex lg:flex-auto lg:flex-col">
                <div class="grid grid-cols-7 gap-px border-b border-gray-300 bg-gray-200 text-center text-xs font-semibold leading-6 text-gray-700 lg:flex-none">
                    <div class="flex justify-center bg-white py-2">
                        <span>Lu</span>
                        <span class="sr-only sm:not-sr-only">nes</span>
                    </div>
                    <div class="flex justify-center bg-white py-2">
                        <span>M</span>
                        <span class="sr-only sm:not-sr-only">artes</span>
                    </div>
                    <div class="flex justify-center bg-white py-2">
                        <span>Mie</span>
                        <span class="sr-only sm:not-sr-only">rcoles</span>
                    </div>
                    <div class="flex justify-center bg-white py-2">
                        <span>Ju</span>
                        <span class="sr-only sm:not-sr-only">eves</span>
                    </div>
                    <div class="flex justify-center bg-white py-2">
                        <span>V</span>
                        <span class="sr-only sm:not-sr-only">iernes</span>
                    </div>
                    <div class="flex justify-center bg-white py-2">
                        <span>Sab</span>
                        <span class="sr-only sm:not-sr-only">ado</span>
                    </div>
                    <div class="flex justify-center bg-white py-2">
                        <span>Dom</span>
                        <span class="sr-only sm:not-sr-only">ingo</span>
                    </div>
                </div>
                <div class="flex bg-gray-200 text-xs leading-6 text-gray-700 lg:flex-auto">
                    <div class="hidden w-full lg:grid lg:grid-cols-7 lg:grid-rows-6 lg:gap-px">
                        <!--
                          Always include: "relative py-2 px-3"
                          Is current month, include: "bg-white"
                          Is not current month, include: "bg-gray-50 text-gray-500"
                        -->
                        <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                            <!--
                              Is today, include: "flex h-6 w-6 items-center justify-center rounded-full bg-indigo-600 font-semibold text-white"
                            -->
                            <time datetime="2021-12-27">27</time>
                        </div>
                        <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                            <time datetime="2021-12-28">28</time>
                        </div>
                        <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                            <time datetime="2021-12-29">29</time>
                        </div>
                        <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                            <time datetime="2021-12-30">30</time>
                        </div>
                        <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                            <time datetime="2021-12-31">31</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-01">1</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-01">2</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-03">3</time>
                            <ol class="mt-2">
                                <li>
                                    <a href="#" class="group flex">
                                        <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Design review</p>
                                        <time datetime="2022-01-03T10:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">10AM</time>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="group flex">
                                        <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Sales meeting</p>
                                        <time datetime="2022-01-03T14:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">2PM</time>
                                    </a>
                                </li>
                            </ol>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-04">4</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-05">5</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-06">6</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-07">7</time>
                            <ol class="mt-2">
                                <li>
                                    <a href="#" class="group flex">
                                        <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Date night</p>
                                        <time datetime="2022-01-08T18:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">6PM</time>
                                    </a>
                                </li>
                            </ol>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-08">8</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-09">9</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-10">10</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-11">11</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-12" class="flex h-6 w-6 items-center justify-center rounded-full bg-indigo-600 font-semibold text-white">12</time>
                            <ol class="mt-2">
                                <li>
                                    <a href="#" class="group flex">
                                        <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Sam's birthday party</p>
                                        <time datetime="2022-01-25T14:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">2PM</time>
                                    </a>
                                </li>
                            </ol>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-13">13</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-14">14</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-15">15</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-16">16</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-17">17</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-18">18</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-19">19</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-20">20</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-21">21</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-22">22</time>
                            <ol class="mt-2">
                                <li>
                                    <a href="#" class="group flex">
                                        <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Maple syrup museum</p>
                                        <time datetime="2022-01-22T15:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">3PM</time>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="group flex">
                                        <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Hockey game</p>
                                        <time datetime="2022-01-22T19:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">7PM</time>
                                    </a>
                                </li>
                            </ol>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-23">23</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-24">24</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-25">25</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-26">26</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-27">27</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-28">28</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-29">29</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-30">30</time>
                        </div>
                        <div class="relative bg-white py-2 px-3">
                            <time datetime="2022-01-31">31</time>
                        </div>
                        <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                            <time datetime="2022-02-01">1</time>
                        </div>
                        <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                            <time datetime="2022-02-02">2</time>
                        </div>
                        <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                            <time datetime="2022-02-03">3</time>
                        </div>
                        <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                            <time datetime="2022-02-04">4</time>
                            <ol class="mt-2">
                                <li>
                                    <a href="#" class="group flex">
                                        <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Cinema with friends</p>
                                        <time datetime="2022-02-04T21:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">9PM</time>
                                    </a>
                                </li>
                            </ol>
                        </div>
                        <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                            <time datetime="2022-02-05">5</time>
                        </div>
                        <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                            <time datetime="2022-02-06">6</time>
                        </div>
                    </div>
                    <div class="isolate grid w-full grid-cols-7 grid-rows-6 gap-px lg:hidden">
                        <!--
                          Always include: "flex h-14 flex-col py-2 px-3 hover:bg-gray-100 focus:z-10"
                          Is current month, include: "bg-white"
                          Is not current month, include: "bg-gray-50"
                          Is selected or is today, include: "font-semibold"
                          Is selected, include: "text-white"
                          Is not selected and is today, include: "text-indigo-600"
                          Is not selected and is current month, and is not today, include: "text-gray-900"
                          Is not selected, is not current month, and is not today: "text-gray-500"
                        -->
                        <button type="button" class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                            <!--
                              Always include: "ml-auto"
                              Is selected, include: "flex h-6 w-6 items-center justify-center rounded-full"
                              Is selected and is today, include: "bg-indigo-600"
                              Is selected and is not today, include: "bg-gray-900"
                            -->
                            <time datetime="2021-12-27" class="ml-auto">27</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                            <time datetime="2021-12-28" class="ml-auto">28</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                            <time datetime="2021-12-29" class="ml-auto">29</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                            <time datetime="2021-12-30" class="ml-auto">30</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                            <time datetime="2021-12-31" class="ml-auto">31</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-01" class="ml-auto">1</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-02" class="ml-auto">2</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-03" class="ml-auto">3</time>
                            <span class="sr-only">2 events</span>
                            <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
            <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
            <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
          </span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-04" class="ml-auto">4</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-05" class="ml-auto">5</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-06" class="ml-auto">6</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-07" class="ml-auto">7</time>
                            <span class="sr-only">1 event</span>
                            <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
            <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
          </span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-08" class="ml-auto">8</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-09" class="ml-auto">9</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-10" class="ml-auto">10</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-11" class="ml-auto">11</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 font-semibold text-indigo-600 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-12" class="ml-auto">12</time>
                            <span class="sr-only">1 event</span>
                            <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
            <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
          </span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-13" class="ml-auto">13</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-14" class="ml-auto">14</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-15" class="ml-auto">15</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-16" class="ml-auto">16</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-17" class="ml-auto">17</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-18" class="ml-auto">18</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-19" class="ml-auto">19</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-20" class="ml-auto">20</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-21" class="ml-auto">21</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 font-semibold text-white hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-22" class="ml-auto flex h-6 w-6 items-center justify-center rounded-full bg-gray-900">22</time>
                            <span class="sr-only">2 events</span>
                            <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
            <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
            <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
          </span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-23" class="ml-auto">23</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-24" class="ml-auto">24</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-25" class="ml-auto">25</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-26" class="ml-auto">26</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-27" class="ml-auto">27</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-28" class="ml-auto">28</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-29" class="ml-auto">29</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-30" class="ml-auto">30</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-31" class="ml-auto">31</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-01" class="ml-auto">1</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-02" class="ml-auto">2</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-03" class="ml-auto">3</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-04" class="ml-auto">4</time>
                            <span class="sr-only">1 event</span>
                            <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
            <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
          </span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-05" class="ml-auto">5</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-06" class="ml-auto">6</time>
                            <span class="sr-only">0 events</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="py-10 px-4 sm:px-6 lg:hidden">
                <div class="bg-whiteblue p-3  font-semibold rounded">
                   Resumen mensual
                </div>
                <ol class="divide-y divide-gray-100 overflow-hidden rounded-lg bg-white text-sm shadow ring-1 ring-black ring-opacity-5">
                    <li class="group flex p-4 pr-6 focus-within:bg-gray-50 hover:bg-gray-50">
                        <div class="flex place-items-center justify-center">
                            <!-- Heroicon name: mini/clock -->
                            <svg class=" mr-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z" clip-rule="evenodd" />
                            </svg>
                            <p class="font-semibold text-gray-900">Total horas</p>
                            <p class="  flex items-center text-gray-700">

                                200
                            </p>
                        </div>
                    </li>
                    <li class="group flex p-4 pr-6 focus-within:bg-gray-50 hover:bg-gray-50">
                        <div class="flex place-items-center justify-center">
                            <!-- Heroicon name: calendar/days -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 h-5 w-5 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>

                            <p class="font-semibold text-gray-900">Total Dias</p>
                            <p class="  flex items-center text-gray-700">
                                22
                            </p>
                        </div>
                    </li>
                    <li class="group flex p-4 pr-6 focus-within:bg-gray-50 hover:bg-gray-50">
                        <div class="flex place-items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 h-5 w-5 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                            </svg>

                            <p class="font-semibold text-gray-900">Objetivo</p>
                            <p class="  flex items-center text-gray-700">
                                XX uds
                            </p>
                        </div>
                    </li>
                    <li class="group flex p-4 pr-6 focus-within:bg-gray-50 hover:bg-gray-50">
                        <div class="flex place-items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 h-5 w-5 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                            </svg>
                            <p class="font-semibold text-gray-900">Objetivo Cumplido</p>
                            <p class="  flex items-center text-gray-700">
                                XX uds
                            </p>
                        </div>
                    </li>
                </ol>
                <div class="bg-whiteblue p-3  font-semibold rounded">
                    Tareas
                </div>
            </div>
        </div>

    </main>
    <footer id="bottom-bar" class="w-full">
        <div class="bg-darkblue  flex justify-between border border-t border-0 border-gray-100 p-3 ">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="text-white w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"/>
                </svg>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="text-white w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                </svg>

            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="text-white w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                </svg>

            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="text-white w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"/>
                </svg>

            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="text-white w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122"/>
                </svg>

            </div>
        </div>
    </footer>
    <div class="pb-4 mb-1">
        <?php include_once 'partials/footer.php' ?>
    </div>


</div>
