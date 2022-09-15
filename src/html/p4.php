<?php include_once 'partials/head.php' ?>

<main>
    <div class=" flex flex-col items-center content-center justify-center h-screen ">
        <div class="h-1/2 w-full bg-no-repeat bg-contain bg-fixed top-0"
             style="background-image: url('/img/background_key.png'); ">
        </div>

        <div class="h-1/2 grid grid-cols-1 gap-6">
            <form action="">
                <label class="block mt-2">
                    <span class="text-gray-700">Código</span>
                    <input type="text"
                           class="mt-2 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                           placeholder="">
                </label>
                <label class="block mt-2">
                    <span class="text-gray-700">Móvil</span>
                    <input type="text"
                           class="mt-2 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                           placeholder="">
                </label>
                <a class="block text-xs no-underline  mt-4 pt-6 hover:underline " href="#">Ha olvidado su código?</a>
                <div class="flex content-center justify-center mt-3 items-center">
                    <input type="submit" class="  mt-6 button-light-primary" value="Register">
                </div>

            </form>
        </div>


    </div>
</main>
<?php include_once 'partials/footer.php' ?>