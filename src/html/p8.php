<?php include_once 'partials/head.php' ?>
<div id="wrapper" class="flex flex-col h-screen overflow-hidden">
    <header class="w-full">
        <?php require_once 'partials/navbar.php' ?>
    </header>

    <main class="bg-whiteblue flex-1 overflow-y-scroll">
        <div class="flex items-center justify-between border-b border-gray-200 py-4 px-6">

                <h1 class="text-lg font-semibold text-gray-900">
                    <time datetime="2022">2022</time>
                </h1>

        </div>
        <div class="bg-white">
            <div class="mx-auto grid max-w-3xl grid-cols-1 gap-x-8 gap-y-16 px-4 py-16 sm:grid-cols-2 sm:px-6 xl:max-w-none xl:grid-cols-3 xl:px-8 2xl:grid-cols-4" x-max="1">
                <section class="text-center">
                    <h2 class="font-semibold text-gray-900">Enero</h2>
                    <div class="mt-6 grid grid-cols-7 text-xs leading-6 text-gray-500">
                        <div>L</div>
                        <div>M</div>
                        <div>M</div>
                        <div>J</div>
                        <div>V</div>
                        <div>S</div>
                        <div>D</div>
                    </div>
                    <div class="isolate mt-2 grid grid-cols-7 gap-px rounded-lg bg-gray-200 text-sm shadow ring-1 ring-gray-200">
                        <!--
                          Always include: "py-1.5 hover:bg-gray-100 focus:z-10"
                          Is current month, include: "bg-white text-gray-900"
                          Is not current month, include: "bg-gray-50 text-gray-400"

                          Top left day, include: "rounded-tl-lg"
                          Top right day, include: "rounded-tr-lg"
                          Bottom left day, include: "rounded-bl-lg"
                          Bottom right day, include: "rounded-br-lg"
                        -->
                        <button type="button" class="rounded-tl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <!--
                              Always include: "mx-auto flex h-7 w-7 items-center justify-center rounded-full"
                              Is today, include: "bg-indigo-600 font-semibold text-white"
                            -->
                            <time datetime="2021-12-27" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">27</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2021-12-28" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2021-12-29" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">29</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2021-12-30" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2021-12-31" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">31</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="rounded-tr-lg bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-07" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-08" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-09" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">9</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-10" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">10</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-11" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">11</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-12" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full bg-indigo-600 font-semibold text-white">12</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-13" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">13</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-14" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">14</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-15" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">15</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-16" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">16</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-17" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">17</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-18" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">18</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-19" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">19</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-20" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">20</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-21" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">21</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-22" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">22</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-23" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">23</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-24" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">24</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-25" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">25</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-26" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">26</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-27" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">27</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-28" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-29" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">29</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-30" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
                        </button>
                        <button type="button" class="rounded-bl-lg bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-31" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">31</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="rounded-br-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                    </div>
                </section>

                <section class="text-center">
                    <h2 class="font-semibold text-gray-900">Febrero</h2>
                    <div class="mt-6 grid grid-cols-7 text-xs leading-6 text-gray-500">
                        <div>L</div>
                        <div>M</div>
                        <div>M</div>
                        <div>J</div>
                        <div>V</div>
                        <div>S</div>
                        <div>D</div>
                    </div>
                    <div class="mt-2 grid grid-cols-7 gap-px rounded-lg bg-gray-200 text-sm text-gray-900 shadow ring-1 ring-gray-200">
                        <button type="button" class="rounded-tl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-31" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">31</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="rounded-tr-lg bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-07" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-08" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-09" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">9</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-10" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">10</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-11" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">11</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-12" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">12</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-13" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">13</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-14" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">14</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-15" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">15</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-16" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">16</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-17" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">17</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-18" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">18</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-19" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">19</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-20" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">20</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-21" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">21</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-22" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">22</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-23" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">23</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-24" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">24</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-25" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">25</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-26" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">26</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-27" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">27</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-28" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                        <button type="button" class="rounded-bl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-07" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-08" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-09" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">9</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-10" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">10</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-11" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">11</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-12" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">12</time>
                        </button>
                        <button type="button" class="rounded-br-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-13" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">13</time>
                        </button>
                    </div>
                </section>

                <section class="text-center">
                    <h2 class="font-semibold text-gray-900">Marzo</h2>
                    <div class="mt-6 grid grid-cols-7 text-xs leading-6 text-gray-500">
                        <div>L</div>
                        <div>M</div>
                        <div>M</div>
                        <div>J</div>
                        <div>V</div>
                        <div>S</div>
                        <div>D</div>
                    </div>
                    <div class="mt-2 grid grid-cols-7 gap-px rounded-lg bg-gray-200 text-sm text-gray-900 shadow ring-1 ring-gray-200">
                        <button type="button" class="rounded-tl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-28" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="rounded-tr-lg bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-07" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-08" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-09" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">9</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-10" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">10</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-11" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">11</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-12" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">12</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-13" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">13</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-14" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">14</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-15" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">15</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-16" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">16</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-17" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">17</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-18" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">18</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-19" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">19</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-20" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">20</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-21" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">21</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-22" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">22</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-23" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">23</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-24" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">24</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-25" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">25</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-26" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">26</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-27" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">27</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-28" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-29" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">29</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-30" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-31" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">31</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="rounded-bl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-07" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-08" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-09" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">9</time>
                        </button>
                        <button type="button" class="rounded-br-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-10" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">10</time>
                        </button>
                    </div>
                </section>

                <section class="text-center">
                    <h2 class="font-semibold text-gray-900">Abril</h2>
                    <div class="mt-6 grid grid-cols-7 text-xs leading-6 text-gray-500">
                        <div>L</div>
                        <div>M</div>
                        <div>M</div>
                        <div>J</div>
                        <div>V</div>
                        <div>S</div>
                        <div>D</div>
                    </div>
                    <div class="mt-2 grid grid-cols-7 gap-px rounded-lg bg-gray-200 text-sm text-gray-900 shadow ring-1 ring-gray-200">
                        <button type="button" class="rounded-tl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-28" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-29" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">29</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-30" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-03-31" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">31</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="rounded-tr-lg bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-07" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-08" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-09" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">9</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-10" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">10</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-11" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">11</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-12" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">12</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-13" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">13</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-14" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">14</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-15" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">15</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-16" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">16</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-17" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">17</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-18" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">18</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-19" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">19</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-20" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">20</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-21" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">21</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-22" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">22</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-23" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">23</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-24" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">24</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-25" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">25</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-26" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">26</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-27" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">27</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-28" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-29" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">29</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-30" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="rounded-bl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-07" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                        </button>
                        <button type="button" class="rounded-br-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-08" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
                        </button>
                    </div>
                </section>

                <section class="text-center">
                    <h2 class="font-semibold text-gray-900">Mayo</h2>
                    <div class="mt-6 grid grid-cols-7 text-xs leading-6 text-gray-500">
                        <div>L</div>
                        <div>M</div>
                        <div>M</div>
                        <div>J</div>
                        <div>V</div>
                        <div>S</div>
                        <div>D</div>
                    </div>
                    <div class="mt-2 grid grid-cols-7 gap-px rounded-lg bg-gray-200 text-sm text-gray-900 shadow ring-1 ring-gray-200">
                        <button type="button" class="rounded-tl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-25" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">25</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-26" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">26</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-27" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">27</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-28" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-29" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">29</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-04-30" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
                        </button>
                        <button type="button" class="rounded-tr-lg bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-07" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-08" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-09" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">9</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-10" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">10</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-11" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">11</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-12" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">12</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-13" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">13</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-14" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">14</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-15" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">15</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-16" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">16</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-17" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">17</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-18" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">18</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-19" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">19</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-20" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">20</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-21" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">21</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-22" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">22</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-23" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">23</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-24" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">24</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-25" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">25</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-26" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">26</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-27" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">27</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-28" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-29" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">29</time>
                        </button>
                        <button type="button" class="rounded-bl-lg bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-30" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-31" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">31</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="rounded-br-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                    </div>
                </section>

                <section class="text-center">
                    <h2 class="font-semibold text-gray-900">Junio</h2>
                    <div class="mt-6 grid grid-cols-7 text-xs leading-6 text-gray-500">
                        <div>L</div>
                        <div>M</div>
                        <div>M</div>
                        <div>J</div>
                        <div>V</div>
                        <div>S</div>
                        <div>D</div>
                    </div>
                    <div class="mt-2 grid grid-cols-7 gap-px rounded-lg bg-gray-200 text-sm text-gray-900 shadow ring-1 ring-gray-200">
                        <button type="button" class="rounded-tl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-30" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-05-31" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">31</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="rounded-tr-lg bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-07" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-08" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-09" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">9</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-10" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">10</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-11" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">11</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-12" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">12</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-13" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">13</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-14" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">14</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-15" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">15</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-16" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">16</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-17" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">17</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-18" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">18</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-19" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">19</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-20" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">20</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-21" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">21</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-22" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">22</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-23" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">23</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-24" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">24</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-25" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">25</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-26" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">26</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-27" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">27</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-28" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-29" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">29</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-30" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="rounded-bl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-07" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-08" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-09" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">9</time>
                        </button>
                        <button type="button" class="rounded-br-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-10" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">10</time>
                        </button>
                    </div>
                </section>

                <section class="text-center">
                    <h2 class="font-semibold text-gray-900">Julio</h2>
                    <div class="mt-6 grid grid-cols-7 text-xs leading-6 text-gray-500">
                        <div>L</div>
                        <div>M</div>
                        <div>M</div>
                        <div>J</div>
                        <div>V</div>
                        <div>S</div>
                        <div>D</div>
                    </div>
                    <div class="mt-2 grid grid-cols-7 gap-px rounded-lg bg-gray-200 text-sm text-gray-900 shadow ring-1 ring-gray-200">
                        <button type="button" class="rounded-tl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-27" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">27</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-28" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-29" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">29</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-06-30" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="rounded-tr-lg bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-07" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-08" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-09" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">9</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-10" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">10</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-11" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">11</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-12" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">12</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-13" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">13</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-14" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">14</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-15" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">15</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-16" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">16</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-17" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">17</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-18" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">18</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-19" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">19</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-20" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">20</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-21" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">21</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-22" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">22</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-23" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">23</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-24" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">24</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-25" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">25</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-26" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">26</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-27" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">27</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-28" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-29" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">29</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-30" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-07-31" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">31</time>
                        </button>
                        <button type="button" class="rounded-bl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                        <button type="button" class="rounded-br-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-07" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                        </button>
                    </div>
                </section>

                <section class="text-center">
                    <h2 class="font-semibold text-gray-900">Agosto</h2>
                    <div class="mt-6 grid grid-cols-7 text-xs leading-6 text-gray-500">
                        <div>L</div>
                        <div>M</div>
                        <div>M</div>
                        <div>J</div>
                        <div>V</div>
                        <div>S</div>
                        <div>D</div>
                    </div>
                    <div class="mt-2 grid grid-cols-7 gap-px rounded-lg bg-gray-200 text-sm text-gray-900 shadow ring-1 ring-gray-200">
                        <button type="button" class="rounded-tl-lg bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                        <button type="button" class="rounded-tr-lg bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-07" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-08" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-09" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">9</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-10" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">10</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-11" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">11</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-12" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">12</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-13" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">13</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-14" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">14</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-15" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">15</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-16" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">16</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-17" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">17</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-18" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">18</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-19" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">19</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-20" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">20</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-21" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">21</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-22" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">22</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-23" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">23</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-24" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">24</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-25" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">25</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-26" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">26</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-27" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">27</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-28" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-29" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">29</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-30" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-31" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">31</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="rounded-bl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-07" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-08" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-09" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">9</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-10" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">10</time>
                        </button>
                        <button type="button" class="rounded-br-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-11" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">11</time>
                        </button>
                    </div>
                </section>

                <section class="text-center">
                    <h2 class="font-semibold text-gray-900">Septiembre</h2>
                    <div class="mt-6 grid grid-cols-7 text-xs leading-6 text-gray-500">
                        <div>L</div>
                        <div>M</div>
                        <div>M</div>
                        <div>J</div>
                        <div>V</div>
                        <div>S</div>
                        <div>D</div>
                    </div>
                    <div class="mt-2 grid grid-cols-7 gap-px rounded-lg bg-gray-200 text-sm text-gray-900 shadow ring-1 ring-gray-200">
                        <button type="button" class="rounded-tl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-29" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">29</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-30" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-08-31" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">31</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="rounded-tr-lg bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-07" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-08" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-09" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">9</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-10" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">10</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-11" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">11</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-12" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">12</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-13" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">13</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-14" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">14</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-15" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">15</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-16" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">16</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-17" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">17</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-18" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">18</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-19" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">19</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-20" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">20</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-21" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">21</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-22" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">22</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-23" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">23</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-24" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">24</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-25" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">25</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-26" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">26</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-27" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">27</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-28" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-29" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">29</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-30" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="rounded-bl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-07" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-08" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
                        </button>
                        <button type="button" class="rounded-br-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-09" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">9</time>
                        </button>
                    </div>
                </section>

                <section class="text-center">
                    <h2 class="font-semibold text-gray-900">Octubre</h2>
                    <div class="mt-6 grid grid-cols-7 text-xs leading-6 text-gray-500">
                        <div>L</div>
                        <div>M</div>
                        <div>M</div>
                        <div>J</div>
                        <div>V</div>
                        <div>S</div>
                        <div>D</div>
                    </div>
                    <div class="mt-2 grid grid-cols-7 gap-px rounded-lg bg-gray-200 text-sm text-gray-900 shadow ring-1 ring-gray-200">
                        <button type="button" class="rounded-tl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-26" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">26</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-27" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">27</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-28" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-29" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">29</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-09-30" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="rounded-tr-lg bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-07" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-08" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-09" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">9</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-10" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">10</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-11" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">11</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-12" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">12</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-13" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">13</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-14" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">14</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-15" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">15</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-16" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">16</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-17" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">17</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-18" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">18</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-19" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">19</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-20" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">20</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-21" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">21</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-22" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">22</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-23" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">23</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-24" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">24</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-25" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">25</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-26" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">26</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-27" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">27</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-28" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-29" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">29</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-30" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
                        </button>
                        <button type="button" class="rounded-bl-lg bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-31" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">31</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="rounded-br-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                    </div>
                </section>

                <section class="text-center">
                    <h2 class="font-semibold text-gray-900">Noviembre</h2>
                    <div class="mt-6 grid grid-cols-7 text-xs leading-6 text-gray-500">
                        <div>L</div>
                        <div>M</div>
                        <div>M</div>
                        <div>J</div>
                        <div>V</div>
                        <div>S</div>
                        <div>D</div>
                    </div>
                    <div class="mt-2 grid grid-cols-7 gap-px rounded-lg bg-gray-200 text-sm text-gray-900 shadow ring-1 ring-gray-200">
                        <button type="button" class="rounded-tl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-10-31" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">31</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="rounded-tr-lg bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-07" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-08" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-09" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">9</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-10" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">10</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-11" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">11</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-12" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">12</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-13" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">13</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-14" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">14</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-15" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">15</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-16" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">16</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-17" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">17</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-18" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">18</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-19" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">19</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-20" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">20</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-21" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">21</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-22" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">22</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-23" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">23</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-24" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">24</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-25" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">25</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-26" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">26</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-27" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">27</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-28" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-29" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">29</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-30" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="rounded-bl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-07" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-08" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-09" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">9</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-10" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">10</time>
                        </button>
                        <button type="button" class="rounded-br-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-11" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">11</time>
                        </button>
                    </div>
                </section>

                <section class="text-center">
                    <h2 class="font-semibold text-gray-900">Diciembre</h2>
                    <div class="mt-6 grid grid-cols-7 text-xs leading-6 text-gray-500">
                        <div>L</div>
                        <div>M</div>
                        <div>M</div>
                        <div>J</div>
                        <div>V</div>
                        <div>S</div>
                        <div>D</div>
                    </div>
                    <div class="mt-2 grid grid-cols-7 gap-px rounded-lg bg-gray-200 text-sm text-gray-900 shadow ring-1 ring-gray-200">
                        <button type="button" class="rounded-tl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-28" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-29" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">29</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-11-30" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="rounded-tr-lg bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-07" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-08" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-09" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">9</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-10" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">10</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-11" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">11</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-12" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">12</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-13" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">13</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-14" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">14</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-15" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">15</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-16" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">16</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-17" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">17</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-18" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">18</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-19" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">19</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-20" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">20</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-21" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">21</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-22" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">22</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-23" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">23</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-24" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">24</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-25" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">25</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-26" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">26</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-27" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">27</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-28" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-29" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">29</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-30" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
                        </button>
                        <button type="button" class="bg-white py-1.5 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-12-31" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">31</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2023-01-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                        </button>
                        <button type="button" class="rounded-bl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2023-01-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2023-01-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2023-01-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2023-01-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2023-01-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                        </button>
                        <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2023-01-07" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                        </button>
                        <button type="button" class="rounded-br-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                            <time datetime="2023-01-08" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
                        </button>
                    </div>
                </section>
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
