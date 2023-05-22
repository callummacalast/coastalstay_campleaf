<style>
    /* Style the tab */
    .tab {
        overflow: hidden;
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
<section class="custom-text m-5 pt-10">
    <!-- Tab links -->
    <div class="tab">
        <button class="tablinks active" onclick="openCity(event, 'shops')">Shops And Supermarkets</button>
        <button class="tablinks" onclick="openCity(event, 'healthcare')">Healthcare</button>
        <button class="tablinks" onclick="openCity(event, 'taxis')">Taxis</button>
        <button class="tablinks" onclick="openCity(event, 'travel')">Buses</button>
    </div>

    <!-- Tab content -->
    <div id="shops" class="tabcontent" style="display: block">
        <section class="m-4 md:m-8  ">
            <div class="container mx-auto p-4 my-6 space-y-2 text-center">
                <h2 class="text-5xl font-bold custom-text">Shops And Supermarkets</h2>
            </div>
            <div class="container mx-auto grid justify-center gap-4 sm:grid-cols-2 lg:grid-cols-3">
                <div class="flex flex-col items-center p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="w-8 h-8 text-sky-400">
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
                        class="w-8 h-8 text-sky-400">
                        <path fill-rule="evenodd"
                            d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <h3 class="my-3 text-2xl font-semibold">CK’s supermarket, St Davids (6 miles away).
                        Small supermarket, can be overpriced.</h3>
                </div>
                <div class="flex flex-col items-center p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="w-8 h-8 text-sky-400">
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
        <section class="m-4 md:m-8  ">
            <div class="container p-4 mx-auto my-6 space-y-1 text-center">
                <h2 class="pb-3 text-3xl font-bold md:text-4xl">Healthcare</h2>
                <h2 class="text-3xl font-bold text-left">GPs</h2>
            </div>

            <div class="container grid justify-center gap-4 mx-auto grid-cols-2">
                <div class="flex flex-col px-8 py-6">
                    <h2 class="mb-2 text-lg font-semibold sm:text-xl title-font ">St Davids Surgery (6 miles away).
                    </h2>
                    <p class="flex-1 mb-4 text-base leading-relaxed dark:text-gray-400">
                        36 New Street,
                        St Davids
                        SA62 6SS
                    </p>
                    <a href="https://www.google.com/maps/place/St+Davids+Surgery/@51.882455,-5.2654133,17z/data=!3m1!4b1!4m6!3m5!1s0x48691e49c2bf8c4d:0xac123fc521f74fa0!8m2!3d51.882455!4d-5.2632246!16s%2Fg%2F1tdzw3xt"
                        class="underline font-bold py-4" target="__blank">Get Directions</a>

                    <a class="inline-flex items-center space-x-2 text-sm font-semibold hover:font-bold"
                        href="tel:01437720303">
                        <span>01437720303</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-4 h-4">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
                <div class="flex flex-col px-8 py-6 lg:border-none">
                    <h2 class="mb-2 text-lg font-semibold sm:text-xl title-font ">The Solva Surgery (4 miles away).
                    </h2>
                    <p class="flex-1 mb-4 text-base leading-relaxed dark:text-gray-400">Maes Yr Eglwys,
                        Solva,
                        SA62 6TW</p>
                    <a href="https://www.google.com/maps/place/The+Solva+Surgery/@51.8739159,-5.2012889,17z/data=!3m1!4b1!4m6!3m5!1s0x486920286a3033f1:0x85c2c0b45ba380cd!8m2!3d51.8739159!4d-5.1991002!16s%2Fg%2F1hc5mbl17"
                        class="underline font-bold py-4" target="__blank">Get Directions</a>
                    <a class="inline-flex items-center space-x-2 text-sm font-semibold hover:font-bold"
                        href="tel:01437721306">
                        <span>01437721306</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-4 h-4">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>

            </div>
            <div class="container p-4 mx-auto my-6 space-y-1 text-center">
                <h2 class="text-3xl font-bold text-left">Pharmacy</h2>
            </div>
            <div class="container grid justify-center gap-4 mx-auto grid-cols-2 ">
                <div class="flex flex-col px-8 py-6">
                    <h2 class="mb-2 text-lg font-semibold sm:text-xl title-font ">Well St Davids (6 miles away).
                    </h2>
                    <p class="flex-1 mb-4 text-base leading-relaxed dark:text-gray-400">13-14 Cross Square, St
                        Davids, Haverfordwest SA62 6SE</p>
                    <a
                        href="https://www.google.com/maps/place/Well+Stalybridge+-+Grosvenor+Street/@51.8808911,-5.2678876,17z/data=!3m1!4b1!4m6!3m5!1s0x48691e484f645339:0x271567ece1a6378a!8m2!3d51.8808911!4d-5.2656989!16s%2Fg%2F1tj2bf1z" class="underline py-4 font-bold">Get
                        Directions</a>
                    <a class="inline-flex items-center space-x-2 text-sm font-semibold hover:font-bold"
                        href="tel:01437720243">
                        <span>01437720243</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-4 h-4">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
                <div class="flex flex-col px-8 py-6 lg:border-none ">
                    <h2 class="mb-2 text-lg font-semibold sm:text-xl title-font ">Lloyds Pharmacy, Fishguard (11
                        miles away).</h2>
                    <p class="flex-1 mb-4 text-base leading-relaxed dark:text-gray-400">5 Ropewalk, Fishguard SA65
                        9BT</p>
                    <a
                        href="https://www.google.com/maps/place/LloydsPharmacy/@51.9947991,-4.9811684,17z/data=!4m6!3m5!1s0x4868d731487f1b1b:0x217c151f4eba5377!8m2!3d51.9947991!4d-4.9789797!16s%2Fg%2F1td177y2" class="underline py-4 font-bold">Get
                        Directions</a>
                    <a class="inline-flex items-center space-x-2 text-sm font-semibold hover:font-bold"
                        href="tel:01348875177">
                        <span>01348875177</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-4 h-4">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>

            </div>

            <div class="container p-4 mx-auto my-6 space-y-1 text-center">
                <h2 class="text-3xl font-bold text-left">Hospital</h2>
            </div>
            <div class="container grid justify-center gap-4 mx-auto grid-cols-2 ">
                <div class="flex flex-col px-8 py-6">
                    <h2 class="mb-2 text-lg font-semibold sm:text-xl title-font ">Withybush Hospital</h2>
                    <p class="flex-1 mb-4 text-base leading-relaxed dark:text-gray-400">Withybush Hospital,
                        Fishguard Road,
                        Haverfordwest
                        SA61 2PZ</p>
                    <a
                        href="https://www.google.com/maps/place/Withybush+Hospital/@51.8126978,-4.9674292,17z/data=!3m1!4b1!4m6!3m5!1s0x48692f426dbc242d:0x21f37e9e91913070!8m2!3d51.8126978!4d-4.9652405!16s%2Fm%2F0bwhb9z" class="underline py-4 font-bold">Get
                        Directions</a>
                    <a class="inline-flex items-center space-x-2 text-sm font-semibold hover:font-bold"
                        href="tel:01437764545">
                        <span>01437764545</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-4 h-4">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>


            </div>
        </section>
    </div>

    <div id="taxis" class="tabcontent">
        <section class="m-4 md:m-8  ">
            <div class="container mx-auto p-4 my-6 space-y-2 text-center">
                <h2 class="text-5xl font-bold">Taxi Services</h2>
            </div>
            <div class="container mx-auto grid justify-center gap-4 sm:grid-cols-2 lg:grid-cols-3">
                <div class="flex flex-col items-center p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="w-8 h-8 text-sky-400">
                        <path fill-rule="evenodd"
                            d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <h3 class="my-3 text-2xl font-semibold">Morgans Taxi</h3>
                    <div class="space-y-1 leading-tight">
                        <p><a href="tel:07788292976" class="underline hover:font-bold">07788292976</a></p>
                    </div>
                </div>
                <div class="flex flex-col items-center p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="w-8 h-8 text-sky-400">
                        <path fill-rule="evenodd"
                            d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <h3 class="my-3 text-2xl font-semibold">Franks Cabs</h3>
                    <div class="space-y-1 leading-tight">
                        <p><a href="tel:07974391522" class="underline hover:font-bold">07974391522</a></p>
                    </div>
                </div>
                <div class="flex flex-col items-center p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="w-8 h-8 text-sky-400">
                        <path fill-rule="evenodd"
                            d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <h3 class="my-3 text-2xl font-semibold">St Davids Taxis</h3>
                    <div class="space-y-1 leading-tight">
                        <p><a href="tel:01437721731" class="underline hover:font-bold">01437721731</a></p>
                    </div>
                </div>
                <div class="flex flex-col items-center p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="w-8 h-8 text-sky-400">
                        <path fill-rule="evenodd"
                            d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <h3 class="my-3 text-2xl font-semibold">Drews Taxi St Davids</h3>
                    <div class="space-y-1 leading-tight">
                        <p><a href="tel:07903331681" class="underline hover:font-bold">07903331681</a></p>
                    </div>
                </div>
                <div class="flex flex-col items-center p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="w-8 h-8 text-sky-400">
                        <path fill-rule="evenodd"
                            d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <h3 class="my-3 text-2xl font-semibold">Llandeloy Cabs</h3>
                    <div class="space-y-1 leading-tight">
                        <p><a href="tel:07817831265" class="underline hover:font-bold">07817831265</a></p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="travel" class="tabcontent">
        <section class="m-4 md:m-8  ">
            <div class="container mx-auto p-4 my-6 space-y-2 text-center">
                <h2 class="text-5xl font-bold">Buses.</h2>
                <h2 class="text-3xl font-bold">T11 Fishguard to Haverfordwest</h2>
                <p class="text-lg md:w-1/2 lg:w-1/2 xl:w-1/2 w-full mx-auto"><span class="underline font-bold">T11</span> Fishguard to
                    Haverfordwest &amp; Haverfordwest to Fishguard via St Davids.
                    Bus stop is a 10 min walk away, down to <span class="underline font-bold">Llanrhian</span>
                    Crossroads &amp; take a right, you’ll see the
                    bus stop.</p>
            </div>
            <div class="container mx-auto grid justify-center gap-4 grid-cols-1">
                <div class="hwest-fish">
                    <img src="{{ asset('storage/travel/fish_to_hwest.png') }}" alt="">
                </div>
                <div class="fish-hwest">
                    <img src="{{ asset('storage/travel/hwest_to_fish.png') }}" alt="">
                </div>
            </div>
            <div class="container mx-auto p-4 my-6 space-y-2 text-center">
                <h2 class="text-3xl font-bold">404 Strumble Shuttle - St Davids to Fishguard</h2>

                <p class="text-lg mx-auto md:w-1/2 lg:w-1/2 xl:w-1/2 w-full"><span class="underline font-bold">404 Strumble Shuttle – St
                        Davids to Fishguard</span> &amp; Fishguard to St Davids via Mathry.
                    <span class="text-red-600 font-bold italic">THURSDAYS ONLY.</span>
                    You can catch it from outside of the house, just poke your arm out!
                </p>
            </div>
            <div class="container mx-auto grid justify-center gap-4 grid-cols-1">
                <div class="hwest-fish">
                    <img src="{{ asset('storage/travel/404-std_fish.png') }}" alt="">
                </div>
                <div class="fish-hwest">
                    <img src="{{ asset('storage/travel/404-fish_std.png') }}" alt="">
                </div>
            </div>
        </section>
    </div>
</section>