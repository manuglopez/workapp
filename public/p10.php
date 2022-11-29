<?php include_once 'partials/head.php' ?>
<div id="wrapper" class="flex flex-col h-screen overflow-hidden">
    <header class="w-full">
        <?php require_once 'partials/navbar.php' ?>
    </header>

    
    <main class=" flex-1 overflow-y-scroll">
        <div class="flex h-full flex-col">
            <header class="flex flex-none items-center justify-between border-b border-gray-200 py-4 px-6">
                <h1 class="text-lg font-semibold text-gray-900">
                    <time datetime="2022-01">January 2022</time>
                </h1>
                <div class="flex items-center">
                    <div class="flex items-center rounded-md shadow-sm md:items-stretch">
                        <button type="button" class="flex items-center justify-center rounded-l-md border border-r-0 border-gray-300 bg-white py-2 pl-3 pr-4 text-slate-400 hover:text-gray-500 focus:relative md:w-9 md:px-2 md:hover:bg-gray-50">
                            <span class="sr-only">Mes Prev</span>
                            <!-- Heroicon name: mini/chevron-left -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <button type="button" class="hidden border-t border-b border-gray-300 bg-white px-3.5 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900 focus:relative md:block">Hoy</button>
                        <span class="relative -mx-px h-5 w-px bg-gray-300 md:hidden"></span>
                        <button type="button" class="flex items-center justify-center rounded-r-md border border-l-0 border-gray-300 bg-white py-2 pl-4 pr-3 text-slate-400 hover:text-gray-500 focus:relative md:w-9 md:px-2 md:hover:bg-gray-50">
                            <span class="sr-only">Mes prox</span>
                            <!-- Heroicon name: mini/chevron-right -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div class="hidden md:ml-4 md:flex md:items-center">
                        <div class="relative">
                            <button type="button" class="flex items-center rounded-md border border-gray-300 bg-white py-2 pl-3 pr-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50" id="menu-button" aria-expanded="false" aria-haspopup="true">
                                Vista semana
                                <!-- Heroicon name: mini/chevron-down -->
                                <svg class="ml-2 h-5 w-5 text-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
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
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Vista de Día
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Vista Semana
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Vista Mes</a>
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Vista Año</a>
                                </div>
                            </div>
                        </div>
                        <div class="ml-6 h-6 w-px bg-gray-300"></div>
                        <button type="button" class="ml-6 rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Añadir Tarea</button>
                    </div>
                    <div class="relative ml-6 md:hidden">
                        <button type="button" class="-mx-2 flex items-center rounded-full border border-transparent p-2 text-slate-400 hover:text-gray-500" id="menu-0-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open menu</span>
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
            <div class="isolate flex flex-auto flex-col overflow-auto bg-white">
                <div style="width: 165%" class="flex max-w-full flex-none flex-col sm:max-w-none md:max-w-full">
                    <div class="sticky top-0 z-30 flex-none bg-white shadow ring-1 ring-black ring-opacity-5 sm:pr-8">
                        <div class="grid grid-cols-7 text-sm leading-6 text-gray-500 sm:hidden">
                            <button type="button" class="flex flex-col items-center pt-2 pb-3">L <span class="mt-1 flex h-8 w-8 items-center justify-center font-semibold text-gray-900">10</span></button>
                            <button type="button" class="flex flex-col items-center pt-2 pb-3">M <span class="mt-1 flex h-8 w-8 items-center justify-center font-semibold text-gray-900">11</span></button>
                            <button type="button" class="flex flex-col items-center pt-2 pb-3">Mx <span class="mt-1 flex h-8 w-8 items-center justify-center rounded-full bg-indigo-600 font-semibold text-white">12</span></button>
                            <button type="button" class="flex flex-col items-center pt-2 pb-3">J <span class="mt-1 flex h-8 w-8 items-center justify-center font-semibold text-gray-900">13</span></button>
                            <button type="button" class="flex flex-col items-center pt-2 pb-3">V <span class="mt-1 flex h-8 w-8 items-center justify-center font-semibold text-gray-900">14</span></button>
                            <button type="button" class="flex flex-col items-center pt-2 pb-3">S <span class="mt-1 flex h-8 w-8 items-center justify-center font-semibold text-gray-900">15</span></button>
                            <button type="button" class="flex flex-col items-center pt-2 pb-3">D <span class="mt-1 flex h-8 w-8 items-center justify-center font-semibold text-gray-900">16</span></button>
                        </div>

                        <div class="-mr-px hidden grid-cols-7 divide-x divide-gray-100 border-r border-gray-100 text-sm leading-6 text-gray-500 sm:grid">
                            <div class="col-end-1 w-14"></div>
                            <div class="flex items-center justify-center py-3">
                                <span>Lun <span class="items-center justify-center font-semibold text-gray-900">10</span></span>
                            </div>
                            <div class="flex items-center justify-center py-3">
                                <span>Mar <span class="items-center justify-center font-semibold text-gray-900">11</span></span>
                            </div>
                            <div class="flex items-center justify-center py-3">
                                <span class="flex items-baseline">Mie <span class="ml-1.5 flex h-8 w-8 items-center justify-center rounded-full bg-indigo-600 font-semibold text-white">12</span></span>
                            </div>
                            <div class="flex items-center justify-center py-3">
                                <span>Ju <span class="items-center justify-center font-semibold text-gray-900">13</span></span>
                            </div>
                            <div class="flex items-center justify-center py-3">
                                <span>Vi <span class="items-center justify-center font-semibold text-gray-900">14</span></span>
                            </div>
                            <div class="flex items-center justify-center py-3">
                                <span>Sab <span class="items-center justify-center font-semibold text-gray-900">15</span></span>
                            </div>
                            <div class="flex items-center justify-center py-3">
                                <span>Dom <span class="items-center justify-center font-semibold text-gray-900">16</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-auto">
                        <div class="sticky left-0 z-10 w-14 flex-none bg-white ring-1 ring-gray-100"></div>
                        <div class="grid flex-auto grid-cols-1 grid-rows-1">
                            <!-- Horizontal lines -->
                            <div class="col-start-1 col-end-2 row-start-1 grid divide-y divide-slate-400" style="grid-template-rows: repeat(48, minmax(3.5rem, 1fr))">
                                <div class="row-end-1 h-7"></div>
                                <div>
                                    <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-slate-400">12AM</div>
                                </div>
                                <div></div>
                                <div>
                                    <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-slate-400">1AM</div>
                                </div>
                                <div></div>
                                <div>
                                    <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-slate-400">2AM</div>
                                </div>
                                <div></div>
                                <div>
                                    <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-slate-400">3AM</div>
                                </div>
                                <div></div>
                                <div>
                                    <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-slate-400">4AM</div>
                                </div>
                                <div></div>
                                <div>
                                    <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-slate-400">5AM</div>
                                </div>
                                <div></div>
                                <div>
                                    <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-slate-400">6AM</div>
                                </div>
                                <div></div>
                                <div>
                                    <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-slate-400">7AM</div>
                                </div>
                                <div></div>
                                <div>
                                    <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-slate-400">8AM</div>
                                </div>
                                <div></div>
                                <div>
                                    <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-slate-400">9AM</div>
                                </div>
                                <div></div>
                                <div>
                                    <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-slate-400">10AM</div>
                                </div>
                                <div></div>
                                <div>
                                    <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-slate-400">11AM</div>
                                </div>
                                <div></div>
                                <div>
                                    <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-slate-400">12PM</div>
                                </div>
                                <div></div>
                                <div>
                                    <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-slate-400">1PM</div>
                                </div>
                                <div></div>
                                <div>
                                    <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-slate-400">2PM</div>
                                </div>
                                <div></div>
                                <div>
                                    <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-slate-400">3PM</div>
                                </div>
                                <div></div>
                                <div>
                                    <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-slate-400">4PM</div>
                                </div>
                                <div></div>
                                <div>
                                    <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-slate-400">5PM</div>
                                </div>
                                <div></div>
                                <div>
                                    <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-slate-400">6PM</div>
                                </div>
                                <div></div>
                                <div>
                                    <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-slate-400">7PM</div>
                                </div>
                                <div></div>
                                <div>
                                    <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-slate-400">8PM</div>
                                </div>
                                <div></div>
                                <div>
                                    <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-slate-400">9PM</div>
                                </div>
                                <div></div>
                                <div>
                                    <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-slate-400">10PM</div>
                                </div>
                                <div></div>
                                <div>
                                    <div class="sticky left-0 z-20 -mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 text-slate-400">11PM</div>
                                </div>
                                <div></div>
                            </div>

                            <!-- Vertical lines -->
                            <div class="col-start-1 col-end-2 row-start-1 hidden grid-cols-7 grid-rows-1 divide-x divide-slate-500 sm:grid sm:grid-cols-7">
                                <div class="col-start-1 row-span-full"></div>
                                <div class="col-start-2 row-span-full"></div>
                                <div class="col-start-3 row-span-full"></div>
                                <div class="col-start-4 row-span-full"></div>
                                <div class="col-start-5 row-span-full"></div>
                                <div class="col-start-6 row-span-full"></div>
                                <div class="col-start-7 row-span-full"></div>
                                <div class="col-start-8 row-span-full w-8"></div>
                            </div>

                            <!-- Events -->
                            <ol class="col-start-1 col-end-2 row-start-1 grid grid-cols-1 sm:grid-cols-7 sm:pr-8" style="grid-template-rows: 1.75rem repeat(288, minmax(0, 1fr)) auto">
                                <li class="relative mt-px flex sm:col-start-3" style="grid-row: 74 / span 12">
                                    <a href="#" class="group absolute inset-1 flex flex-col overflow-y-auto rounded-lg bg-blue-50 p-2 text-xs leading-5 hover:bg-blue-100">
                                        <p class="order-1 font-semibold text-blue-700">Breakfast</p>
                                        <p class="text-blue-500 group-hover:text-blue-700"><time datetime="2022-01-12T06:00">6:00 AM</time></p>
                                    </a>
                                </li>
                                <li class="relative mt-px flex sm:col-start-3" style="grid-row: 92 / span 30">
                                    <a href="#" class="group absolute inset-1 flex flex-col overflow-y-auto rounded-lg bg-pink-50 p-2 text-xs leading-5 hover:bg-pink-100">
                                        <p class="order-1 font-semibold text-pink-700">Flight to Paris</p>
                                        <p class="text-pink-500 group-hover:text-pink-700"><time datetime="2022-01-12T07:30">7:30 AM</time></p>
                                    </a>
                                </li>
                                <li class="relative mt-px hidden sm:col-start-6 sm:flex" style="grid-row: 122 / span 24">
                                    <a href="#" class="group absolute inset-1 flex flex-col overflow-y-auto rounded-lg bg-gray-100 p-2 text-xs leading-5 hover:bg-gray-200">
                                        <p class="order-1 font-semibold text-gray-700">Meeting with design team at Disney</p>
                                        <p class="text-gray-500 group-hover:text-gray-700"><time datetime="2022-01-15T10:00">10:00 AM</time></p>
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" flex-auto mt-5 p-5 rounded bg-whiteblue  text-darkblue ">
           <div class="font-semibold text-2xl text-center mb-6"> Tareas</div>
            <div class="grid grid-cols-1 gap-4 divide-y divide-x-0 divide-solid divide-darkblue ">
                <div class="p-3">Tarea 01</div>
                <div class="p-3">Tarea 02</div>
                <div class="p-3">Tarea 03</div>
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
