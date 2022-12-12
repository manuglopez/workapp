<?php include_once 'partials/head.php' ?>
<div id="wrapper" class="flex flex-col h-screen overflow-hidden">
    <header class="w-full">
        <?php require_once 'partials/navbar.php' ?>
    </header>


    <main class="bg-whiteblue flex-1 overflow-y-scroll">
        <div class=" bg-white px-3">

            <form class="space-y-8 divide-y divide-gray-200">
                <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                    <div class="space-y-6 sm:space-y-5">
                        <div class="space-y-6 sm:space-y-5">
                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="username" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Login</label>
                                <div class="mt-1 sm:col-span-2 sm:mt-0">
                                    <div class="flex max-w-lg rounded-md shadow-sm">
                                        <input type="text" value="Rufino" name="username" id="username" disabled
                                               autocomplete="username"
                                               class="block w-full min-w-0 flex-1 rounded-md border-gray-300 focus:border-midblue focus:ring-whiteblue sm:text-sm">
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


                            <div class="sm:grid sm:grid-cols-3 sm:items-center sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="photo" class="block text-sm font-medium text-gray-700">Foto</label>
                                <div class="mt-1 sm:col-span-2 sm:mt-0">
                                    <div class="flex items-center">
                                        <span class="h-12 w-12 overflow-hidden rounded-full bg-gray-100">
                                            <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"/>
                                             </svg>
                                        </span>
                                        <button type="button"
                                                class="ml-5 rounded-md border border-gray-300 bg-white py-2 px-3 text-sm font-medium leading-4 text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                            Cambiar
                                        </button>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="space-y-6 pt-8 sm:space-y-5 sm:pt-10">
                        <div>
                            <h3 class="text-white font-semibold text-center h-auto py-2 bg-midblue">Información personal</h3>
                        </div>
                        <div class="space-y-6 sm:space-y-5">
                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="first-name"
                                       class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Nombre</label>
                                <div class="mt-1 sm:col-span-2 sm:mt-0">
                                    <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                           class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="last-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Apellidos</label>
                                <div class="mt-1 sm:col-span-2 sm:mt-0">
                                    <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                           class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="nif" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Nif</label>
                                <div class="mt-1 sm:col-span-2 sm:mt-0">
                                    <input type="text" name="nif" id="last-name" autocomplete="nif"
                                           class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Email</label>
                                <div class="mt-1 sm:col-span-2 sm:mt-0">
                                    <input id="email" name="email" type="email" autocomplete="email"
                                           class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="country" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Country</label>
                                <div class="mt-1 sm:col-span-2 sm:mt-0">
                                    <select id="country" name="country" autocomplete="country-name"
                                            class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>Mexico</option>
                                    </select>
                                </div>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="street-address"
                                       class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Street
                                    address</label>
                                <div class="mt-1 sm:col-span-2 sm:mt-0">
                                    <input type="text" name="street-address" id="street-address"
                                           autocomplete="street-address"
                                           class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="city"
                                       class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">City</label>
                                <div class="mt-1 sm:col-span-2 sm:mt-0">
                                    <input type="text" name="city" id="city" autocomplete="address-level2"
                                           class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="region" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">State
                                    / Province</label>
                                <div class="mt-1 sm:col-span-2 sm:mt-0">
                                    <input type="text" name="region" id="region" autocomplete="address-level1"
                                           class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="postal-code"
                                       class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">ZIP / Postal
                                    code</label>
                                <div class="mt-1 sm:col-span-2 sm:mt-0">
                                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code"
                                           class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6 divide-y divide-gray-200 pt-8 sm:space-y-5 sm:pt-10">
                        <div>
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Notifications</h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">We'll always let you know about important
                                changes, but you pick what else you want to hear about.</p>
                        </div>
                        <div class="space-y-6 divide-y divide-gray-200 sm:space-y-5">
                            <div class="pt-6 sm:pt-5">
                                <div role="group" aria-labelledby="label-email">
                                    <div class="sm:grid sm:grid-cols-3 sm:items-baseline sm:gap-4">
                                        <div>
                                            <div class="text-base font-medium text-gray-900 sm:text-sm sm:text-gray-700"
                                                 id="label-email">By Email
                                            </div>
                                        </div>
                                        <div class="mt-4 sm:col-span-2 sm:mt-0">
                                            <div class="max-w-lg space-y-4">
                                                <div class="relative flex items-start">
                                                    <div class="flex h-5 items-center">
                                                        <input id="comments" name="comments" type="checkbox"
                                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="comments"
                                                               class="font-medium text-gray-700">Comments</label>
                                                        <p class="text-gray-500">Get notified when someones posts a
                                                            comment on a posting.</p>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-start">
                                                    <div class="flex h-5 items-center">
                                                        <input id="candidates" name="candidates" type="checkbox"
                                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="candidates" class="font-medium text-gray-700">Candidates</label>
                                                        <p class="text-gray-500">Get notified when a candidate applies
                                                            for a job.</p>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-start">
                                                    <div class="flex h-5 items-center">
                                                        <input id="offers" name="offers" type="checkbox"
                                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="offers"
                                                               class="font-medium text-gray-700">Offers</label>
                                                        <p class="text-gray-500">Get notified when a candidate accepts
                                                            or rejects an offer.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-6 sm:pt-5">
                                <div role="group" aria-labelledby="label-notifications">
                                    <div class="sm:grid sm:grid-cols-3 sm:items-baseline sm:gap-4">
                                        <div>
                                            <div class="text-base font-medium text-gray-900 sm:text-sm sm:text-gray-700"
                                                 id="label-notifications">Push Notifications
                                            </div>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <div class="max-w-lg">
                                                <p class="text-sm text-gray-500">These are delivered via SMS to your
                                                    mobile phone.</p>
                                                <div class="mt-4 space-y-4">
                                                    <div class="flex items-center">
                                                        <input id="push-everything" name="push-notifications"
                                                               type="radio"
                                                               class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                        <label for="push-everything"
                                                               class="ml-3 block text-sm font-medium text-gray-700">Everything</label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="push-email" name="push-notifications" type="radio"
                                                               class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                        <label for="push-email"
                                                               class="ml-3 block text-sm font-medium text-gray-700">Same
                                                            as email</label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="push-nothing" name="push-notifications" type="radio"
                                                               class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                        <label for="push-nothing"
                                                               class="ml-3 block text-sm font-medium text-gray-700">No
                                                            push notifications</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-5">
                    <div class="flex justify-end">
                        <button type="button"
                                class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Cancel
                        </button>
                        <button type="submit"
                                class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Save
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </main>
</div>
<?php include_once 'partials/footer.php' ?>
