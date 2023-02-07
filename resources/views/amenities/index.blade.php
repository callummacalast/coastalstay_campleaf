<x-guest-layout>
    <style>
        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons that are used to open the tab content */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #edab28;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #edab28;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }
    </style>

    <script>
        function openCity(evt, cityName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
    <section class="custom-text">
        <!-- Tab links -->
        <div class="tab">
            <button class="tablinks active" onclick="openCity(event, 'shops')">Shops And Supermarkets</button>
            <button class="tablinks" onclick="openCity(event, 'healthcare')">Healthcare</button>
            <button class="tablinks" onclick="openCity(event, 'taxis')">Taxis</button>
            <button class="tablinks" onclick="openCity(event, 'travel')">Travel</button>
        </div>

        <!-- Tab content -->
        <div id="shops" class="tabcontent" style="display: block">
            <section class="m-4 md:m-8 dark:bg-gray-800 dark:text-gray-100">
                <div class="container mx-auto p-4 my-6 space-y-2 text-center">
                    <h2 class="text-5xl font-bold custom-text">Shops And Supermarkets</h2>
                </div>
                <div class="container mx-auto grid justify-center gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="flex flex-col items-center p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-8 h-8 dark:text-sky-400">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <h3 class="my-3 text-2xl font-semibold">Spar petrol station, Square and Compass (2.5 miles
                            away).
                            Lots of essentials and extra bits.</h3>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-8 h-8 dark:text-sky-400">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <h3 class="my-3 text-2xl font-semibold">CK’s supermarket, St Davids (6 miles away).
                            Small supermarket, can be overpriced.</h3>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-8 h-8 dark:text-sky-400">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <h3 class="my-3 text-2xl font-semibold">Co-op, Fishguard (10 miles away).</h3>

                    </div>
                </div>
            </section>
        </div>

        <div id="healthcare" class="tabcontent">
            <section class="m-4 md:m-8 dark:bg-gray-800 dark:text-gray-100">
                <div class="container mx-auto p-4 my-6 space-y-2 text-center">
                    <h2 class="text-5xl font-bold">Healthcare</h2>
                </div>
                <div class="container mx-auto grid justify-center gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="flex flex-col items-center p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-8 h-8 dark:text-sky-400">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <h3 class="my-3 text-2xl font-semibold">Product</h3>
                        <div class="space-y-1 leading-tight">
                            <p>Similique quas ea veniam</p>
                            <p>Tempore quasi porro</p>
                            <p>Blanditiis aut mollitia ex</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-8 h-8 dark:text-sky-400">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <h3 class="my-3 text-2xl font-semibold">Product</h3>
                        <div class="space-y-1 leading-tight">
                            <p>Similique quas ea veniam</p>
                            <p>Tempore quasi porro</p>
                            <p>Blanditiis aut mollitia ex</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-8 h-8 dark:text-sky-400">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <h3 class="my-3 text-2xl font-semibold">Product</h3>
                        <div class="space-y-1 leading-tight">
                            <p>Similique quas ea veniam</p>
                            <p>Tempore quasi porro</p>
                            <p>Blanditiis aut mollitia ex</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-8 h-8 dark:text-sky-400">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <h3 class="my-3 text-2xl font-semibold">Product</h3>
                        <div class="space-y-1 leading-tight">
                            <p>Similique quas ea veniam</p>
                            <p>Tempore quasi porro</p>
                            <p>Blanditiis aut mollitia ex</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-8 h-8 dark:text-sky-400">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <h3 class="my-3 text-2xl font-semibold">Product</h3>
                        <div class="space-y-1 leading-tight">
                            <p>Similique quas ea veniam</p>
                            <p>Tempore quasi porro</p>
                            <p>Blanditiis aut mollitia ex</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-8 h-8 dark:text-sky-400">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <h3 class="my-3 text-2xl font-semibold">Product</h3>
                        <div class="space-y-1 leading-tight">
                            <p>Similique quas ea veniam</p>
                            <p>Tempore quasi porro</p>
                            <p>Blanditiis aut mollitia ex</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div id="taxis" class="tabcontent">
            <section class="m-4 md:m-8 dark:bg-gray-800 dark:text-gray-100">
                <div class="container mx-auto p-4 my-6 space-y-2 text-center">
                    <h2 class="text-5xl font-bold">Taxi Services</h2>
                </div>
                <div class="container mx-auto grid justify-center gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="flex flex-col items-center p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-8 h-8 dark:text-sky-400">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <h3 class="my-3 text-2xl font-semibold">Morgans Taxi</h3>
                        <div class="space-y-1 leading-tight">
                            <p>07788292976</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-8 h-8 dark:text-sky-400">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <h3 class="my-3 text-2xl font-semibold">Franks Cabs</h3>
                        <div class="space-y-1 leading-tight">
                            <p>07974391522</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-8 h-8 dark:text-sky-400">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <h3 class="my-3 text-2xl font-semibold">St Davids Taxis</h3>
                        <div class="space-y-1 leading-tight">
                            <p>01437 721731</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-8 h-8 dark:text-sky-400">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <h3 class="my-3 text-2xl font-semibold">Drews Taxi St Davids</h3>
                        <div class="space-y-1 leading-tight">
                            <p>07903331681  </p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center p-4">
                       <h2 class="text-4xl font-bold" style="color: #edab28;">1</h2>
                        <h3 class="my-3 text-2xl font-semibold">Llandeloy Cabs</h3>
                        <div class="space-y-1 leading-tight">
                            <p>07817831265</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div id="travel" class="tabcontent">
            <h3>Travel</h3>
            <section class="m-4 md:m-8 dark:bg-gray-800 dark:text-gray-100">
                <div class="container mx-auto p-4 my-6 space-y-2 text-center">
                    <h2 class="text-5xl font-bold">Built every team</h2>
                    <p class="dark:text-gray-400">Libero minima optio qui</p>
                </div>
                <div class="container mx-auto grid justify-center gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="flex flex-col items-center p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-8 h-8 dark:text-sky-400">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <h3 class="my-3 text-2xl font-semibold">Product</h3>
                        <div class="space-y-1 leading-tight">
                            <p>Similique quas ea veniam</p>
                            <p>Tempore quasi porro</p>
                            <p>Blanditiis aut mollitia ex</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-8 h-8 dark:text-sky-400">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <h3 class="my-3 text-2xl font-semibold">Product</h3>
                        <div class="space-y-1 leading-tight">
                            <p>Similique quas ea veniam</p>
                            <p>Tempore quasi porro</p>
                            <p>Blanditiis aut mollitia ex</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-8 h-8 dark:text-sky-400">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <h3 class="my-3 text-2xl font-semibold">Product</h3>
                        <div class="space-y-1 leading-tight">
                            <p>Similique quas ea veniam</p>
                            <p>Tempore quasi porro</p>
                            <p>Blanditiis aut mollitia ex</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-8 h-8 dark:text-sky-400">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <h3 class="my-3 text-2xl font-semibold">Product</h3>
                        <div class="space-y-1 leading-tight">
                            <p>Similique quas ea veniam</p>
                            <p>Tempore quasi porro</p>
                            <p>Blanditiis aut mollitia ex</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-8 h-8 dark:text-sky-400">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <h3 class="my-3 text-2xl font-semibold">Product</h3>
                        <div class="space-y-1 leading-tight">
                            <p>Similique quas ea veniam</p>
                            <p>Tempore quasi porro</p>
                            <p>Blanditiis aut mollitia ex</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-8 h-8 dark:text-sky-400">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <h3 class="my-3 text-2xl font-semibold">Product</h3>
                        <div class="space-y-1 leading-tight">
                            <p>Similique quas ea veniam</p>
                            <p>Tempore quasi porro</p>
                            <p>Blanditiis aut mollitia ex</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

</x-guest-layout>
