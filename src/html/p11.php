<?php include_once 'partials/head.php' ?>
<div id="wrapper" class="flex flex-col h-screen overflow-hidden">
    <header class="w-full">
        <?php require_once 'partials/navbar.php' ?>
    </header>


    <main class="bg-whiteblue flex-1 overflow-y-scroll">
        <div class="h-64 relative flex justify-center   bg-gradient-to-r from-darkblue to-midblue ">
            <img class=" absolute mx-auto block -bottom-16 w-64 h-64  rounded-full mx-auto"
                 src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"
                 alt="" width="384" height="512">
        </div>
        <div class="mt-16 flex-col content-center text-center justify-center">
            <p class="pt-2 text-darkblue font-semibold"> NOMBRE APELLIDOS</p>
            <p> Posición en la empresa</p>
            <p> Departamento</p>
            <div class=" pt-1 pb-1 bg-darkblue text-white">
                <p>
                    INACTIVO
                </p>
            </div>
        </div>
        <div class="block h-full ">

            <div class="block">
                <nav class="isolate flex divide-x divide-gray-200 rounded-lg shadow" aria-label="Tabs">
                    <!-- Current: "text-gray-900", Default: "text-gray-500 hover:text-gray-700" -->
                    <a href="#" class="text-darkblue no-underline  rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-sm font-medium text-center hover:bg-midblue hover:shadow-lg focus:z-10" aria-current="page">
                        <span>Nóminas</span>
                        <span aria-hidden="true" class="bg-indigo-500 absolute inset-x-0 bottom-0 h-0.5"></span>
                    </a>


                    <a href="#" class="text-darkblue no-underline hover:text-darkblue rounded-r-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-sm font-medium text-center  hover:bg-midblue hover:shadow-lg focus:z-10">
                        <span>Firmas</span>
                        <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
                    </a>
                </nav>

                <div id="tab-nominas">
                    <p class="bg-midblue text-white font-semibold py-4 px-2">Abril 2022</p>
                    <p class="bg-midblue text-white font-semibold py-4 px-2">Marzo 2022</p>
                    <p class="bg-midblue text-white font-semibold py-4 px-2">Febrero 2022</p>
                    <p class="bg-midblue text-white font-semibold py-4 px-2">Enero 2022</p>
                </div>

            </div>
        </div>
    </main>
</div>
<?php include_once 'partials/footer.php' ?>

