<?php include_once 'partials/head.php' ?>
<div id="wrapper" class="flex flex-col h-screen overflow-hidden">
    <header class="w-full">
        <?php require_once 'partials/navbar.php' ?>
    </header>

    <main class="bg-whiteblue flex-1 overflow-y-scroll">
        <div class="p-4 grid grid-cols-2 bg-white content-between">
            <label class="inline-flex relative items-center cursor-pointer">
                <input type="checkbox" value="" class="sr-only peer">
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-white dark:peer-focus:ring-darkblue rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-darkblue"></div>
                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">ACTIVO</span>
            </label>
            <div class="text-right"> 8 Abril 2022</div>
        </div>
        <div class="flex items-center p-4 justify-center  bg-white ">
           <div class="flex flex-col w-full">
               <select class="items-center text-darkblue text-center block m-1.5">
                   <option>Tarea1</option>
                   <option>Tarea2</option>
               </select>
               <select class="items-center text-darkblue text-center block m-1.5">
                   <option>Cambiar Tarea</option>
               </select>
           </div>
        </div>
        <div class="flex items-center p-4 justify-center  bg-whiteblue ">
            <div class=" flex flex-col  items-center content-center justify-center ">
                <div class="flex flex-col">
                    <a class="button-light-primary">Fichar</a>
                    <a class="button-light-secondary ">Salir</a>
                </div>
            </div>
        </div>
        <div class="flex items-center p-4 justify-center  bg-white ">
            <div class="flex flex-col w-full">
                <select class="items-center text-darkblue text-center block m-1.5">
                    <option>Ver últimos registros</option>
                </select>
                <a class="button-light-primary block text-center">Solicitar corrección</a>
            </div>
        </div>

    </main>

</div>
<?php include_once 'partials/footer.php' ?>
