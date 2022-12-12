<?php include_once 'partials/head.php' ?>
<div id="wrapper" class="flex flex-col h-screen ">
    <header class="w-full">
        <?php require_once 'partials/navbar.php' ?>
    </header>


    <main class="bg-whiteblue flex-1 overflow-y-scroll">
        <div class=" bg-white px-3">

            <form class="space-y-8 divide-y divide-gray-200 overflow-y-scroll">
                <!--Botones Arriba-->
                <div class="pt-5  justify-center text-center content-center">
                    <div class="flex justify-between mx-auto">
                        <button type="button"
                                class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-whiteblue focus:ring-offset-2">
                            Cancel
                        </button>
                        <button type="submit"
                                class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-darkblue py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-midblue hover:text-darkblue focus:outline-none focus:text-darkblue focus:ring-2 focus:ring-midblue focus:ring-offset-2">
                            Guardar
                        </button>
                    </div>
                </div>
                <!--Campos-->
                <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                    <div>
                        <h3 class="text-white font-semibold text-center h-auto py-2 bg-midblue">Datos Acceso</h3>
                    </div>
                    <div class="space-y-6 sm:space-y-5">
                        <div class="space-y-6 sm:space-y-5">
                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="username" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Login</label>
                                <div class="mt-1 sm:col-span-2 sm:mt-0">
                                    <div class="flex max-w-lg rounded-md shadow-sm">
                                        <input type="text" value="Rufino" name="username" id="username" disabled
                                               autocomplete="username"
                                               class="block w-full min-w-0 flex-1 rounded-md border-gray-300 text-gray-400 focus:border-midblue focus:ring-whiteblue sm:text-sm">
                                    </div>

                                </div>
                            </div>
                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="password" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Clave</label>
                                <div class="flex max-w-lg rounded-md shadow-sm">
                                    <input type="password" name="password" id="password" autocomplete="password"
                                           class="block w-full min-w-0 flex-1 rounded-md border-gray-300 focus:border-midblue focus:ring-whiteblue sm:text-sm">
                                </div>
                            </div>
                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="password1" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Repetir
                                    Clave</label>
                                <div class="flex max-w-lg rounded-md shadow-sm">
                                    <input type="password" name="password1" id="password1" autocomplete="password"
                                           class="block w-full min-w-0 flex-1 rounded-md border-gray-300 focus:border-midblue focus:ring-whiteblue sm:text-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-6 pt-8 sm:space-y-5 sm:pt-10">
                        <div>
                            <h3 class="text-white font-semibold text-center h-auto py-2 bg-midblue">Pin Fichar</h3>
                        </div>
                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="password" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Pin</label>
                            <div class="flex max-w-lg rounded-md shadow-sm">
                                <input type="password" name="pin" id="pin" autocomplete="pin"
                                       class="block w-full min-w-0 flex-1 rounded-md border-gray-300 focus:border-midblue focus:ring-whiteblue sm:text-sm">
                            </div>
                        </div>
                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="pin1" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Repetir
                                Pin</label>
                            <div class="flex max-w-lg rounded-md shadow-sm">
                                <input type="password" name="pin1" id="pin1" autocomplete="password"
                                       class="block w-full min-w-0 flex-1 rounded-md border-gray-300 focus:border-midblue focus:ring-whiteblue sm:text-sm">
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6 pt-8 sm:space-y-5 sm:pt-10">
                        <div>
                            <h3 class="text-white font-semibold text-center h-auto py-2 bg-midblue">Información
                                personal</h3>
                        </div>
                        <div class="space-y-6 sm:space-y-5">
                            <div class="sm:grid sm:grid-cols-3 sm:items-center sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="photo" class="block text-sm font-medium text-gray-700">Foto</label>
                                <div class="mt-1 sm:col-span-2 sm:mt-0">
                                    <div class="flex items-center">
                                        <span class="h-12 w-12 overflow-hidden rounded-full bg-gray-100">
                                            <svg class="h-full w-full text-gray-300" fill="currentColor"
                                                 viewBox="0 0 24 24">
                                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"/>
                                             </svg>
                                        </span>
                                        <button type="button"
                                                class="ml-5 rounded-md border border-gray-300 bg-white py-2 px-3 text-sm font-medium leading-4 text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-whiteblue focus:ring-offset-2">
                                            Cambiar
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="first-name"
                                       class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Nombre</label>
                                <div class="flex max-w-lg rounded-md shadow-sm">
                                    <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                           class="block w-full min-w-0 flex-1 rounded-md border-gray-300 shadow-sm focus:border-midblue focus:ring-whiteblue sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="last-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Apellidos</label>
                                <div class="flex max-w-lg rounded-md shadow-sm">
                                    <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                           class="block w-full min-w-0 flex-1 rounded-md border-gray-300 focus:border-midblue focus:ring-whiteblue sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="nif"
                                       class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">NIF</label>
                                <div class="flex max-w-lg rounded-md shadow-sm">
                                    <input type="text" name="nif" id="last-name" autocomplete="nif"
                                           class="block w-full min-w-0 flex-1 rounded-md border-gray-300 focus:border-midblue focus:ring-whiteblue sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Email</label>
                                <div class="flex max-w-lg rounded-md shadow-sm">
                                    <input id="email" name="email" type="email" autocomplete="email"
                                           class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-midblue focus:ring-whiteblue sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="country" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">País</label>
                                <div class="flex max-w-lg rounded-md shadow-sm">
                                    <select id="country" name="country" autocomplete="country-name"
                                            class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-midblue focus:ring-whiteblue sm:max-w-xs sm:text-sm">
                                        <option>España</option>
                                        <option>Otros</option>

                                    </select>
                                </div>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="street-address"
                                       class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Calle</label>
                                <div class="flex max-w-lg rounded-md shadow-sm">
                                    <input type="text" name="street-address" id="street-address"
                                           autocomplete="street-address"
                                           class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-midblue focus:ring-whiteblue sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="city"
                                       class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Ciudad</label>
                                <div class="flex max-w-lg rounded-md shadow-sm">
                                    <input type="text" name="city" id="city" autocomplete="address-level2"
                                           class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-midblue focus:ring-whiteblue sm:max-w-xs sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="region" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Provincia</label>
                                <div class="flex max-w-lg rounded-md shadow-sm">
                                    <input type="text" name="region" id="region" autocomplete="address-level1"
                                           class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-midblue focus:ring-whiteblue sm:max-w-xs sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="postal-code"
                                       class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Código
                                    Postal</label>
                                <div class="flex max-w-lg rounded-md shadow-sm">
                                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code"
                                           class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-midblue focus:ring-whiteblue sm:max-w-xs sm:text-sm">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <!--Botones Abajo-->
                <div class="pt-5 pb-5 justify-center text-center content-center">
                    <div class="flex justify-between mx-auto">
                        <button type="button"
                                class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-whiteblue focus:ring-offset-2">
                            Cancel
                        </button>
                        <button type="submit"
                                class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-darkblue py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-midblue hover:text-darkblue focus:outline-none focus:text-darkblue focus:ring-2 focus:ring-midblue focus:ring-offset-2">
                            Guardar
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </main>
</div>
<?php include_once 'partials/footer.php' ?>
