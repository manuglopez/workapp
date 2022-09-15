<?php include_once 'partials/head.php' ?>

<main>
    <div class=" flex flex-col  items-center content-center justify-center h-screen">
        <div class=" flex flex-col place-content-center items-center">
            <h2>
                Restablecer Código
            </h2>
          <p class="text-xl text-amber-400 text-center p-6 text-darkblue">
              Por favor teclee su número de teléfono y le enviaremos un nuevo código
          </p>
        </div>

        <div class="grid grid-cols-1 gap-6">
            <form action="">

                <label class="block mt-2">
                    <span class="text-gray-700">Móvil</span>
                    <input type="text"
                           class="mt-2 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                           placeholder="">
                </label>
                <div class="flex content-center justify-center items-center">
                    <input type="submit" class="  mt-6 button-light-primary" value="Enviar">
                </div>

            </form>
        </div>


    </div>
</main>
<?php include_once 'partials/footer.php' ?>