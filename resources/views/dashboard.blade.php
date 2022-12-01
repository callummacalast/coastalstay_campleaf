<x-app-layout>

    <!--Container-->
    @role('admin')
        <div class="container w-full mx-auto pt-20">

            <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">

                <!--Console Content-->

                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                        <!--Metric Card-->
                        <div class="bg-white border rounded shadow p-2">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded p-3 bg-green-600"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512" class="h-8 w-8 " fill="white">
                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M447.1 0h-384c-35.25 0-64 28.75-64 63.1v287.1c0 35.25 28.75 63.1 64 63.1h96v83.98c0 9.836 11.02 15.55 19.12 9.7l124.9-93.68h144c35.25 0 64-28.75 64-63.1V63.1C511.1 28.75 483.2 0 447.1 0zM464 352c0 8.75-7.25 16-16 16h-160l-80 60v-60H64c-8.75 0-16-7.25-16-16V64c0-8.75 7.25-16 16-16h384c8.75 0 16 7.25 16 16V352z" />
                                        </svg></i>
                                    </div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h5 class="font-bold uppercase text-gray-500">Total Messages</h5>
                                    <h3 class="font-bold text-3xl">{{ count($messages) }} <span class="text-green-500"><i
                                                class="fas fa-caret-up"></i></span></h3>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                        <!--Metric Card-->
                        <div class="bg-white border rounded shadow p-2">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded p-3 bg-pink-600"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-8 h-8" fill="white" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z">
                                            </path>
                                        </svg></i>
                                    </div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h5 class="font-bold uppercase text-gray-500">Total Hot Spots</h5>
                                    <h3 class="font-bold text-3xl">{{ count($hotspots) }} <span class="text-pink-500"><i
                                                class="fas fa-exchange-alt"></i></span></h3>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                        <!--Metric Card-->
                        <div class="bg-white border rounded shadow p-2">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded p-3 bg-yellow-600"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512" class="w-8 h-8" fill="white">
                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 25.3-19.5 46-44.3 47.9c7.7 8.5 12.3 19.8 12.3 32.1c0 23.4-16.8 42.9-38.9 47.1c4.4 7.2 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z" />
                                        </svg></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h5 class="font-bold uppercase text-gray-500">Total Message Likes</h5>
                                    <h3 class="font-bold text-3xl">{{ $likes_count }} <span class="text-yellow-600"><i
                                                class="fas fa-caret-up"></i></span></h3>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                        <!--Metric Card-->
                        <div class="bg-white border rounded shadow p-2">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded p-3 bg-blue-600"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512" class="h-8 w-8" fill="white">
                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z" />
                                        </svg></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h5 class="font-bold uppercase text-gray-500">Total Rules</h5>
                                    <h3 class="font-bold text-3xl">{{ count($rules) }}</h3>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                        <!--Metric Card-->
                        <div class="bg-white border rounded shadow p-2">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded p-3 bg-indigo-600"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512" class="h-8 w-8" fill="white">
                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
                                        </svg></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h5 class="font-bold uppercase text-gray-500">Total Contact Messages</h5>
                                    <h3 class="font-bold text-3xl">{{ count($contact_messages) }}</h3>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                        <!--Metric Card-->
                        <div class="bg-white border rounded shadow p-2">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded p-3 bg-red-600"><i class="fas fa-inbox fa-2x fa-fw fa-inverse"></i>
                                    </div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h5 class="font-bold uppercase text-gray-500">Issues</h5>
                                    <h3 class="font-bold text-3xl">3 <span class="text-red-500"><i
                                                class="fas fa-caret-up"></i></span></h3>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                </div>

                <!--Divider-->
                <hr class="border-b-2 border-gray-400 my-8 mx-4">

                <div class="flex flex-row flex-wrap flex-grow mt-2">

                    <div class="w-full md:w-1/2 p-3">
                        <!--Graph Card-->
                        <div class="bg-white border rounded shadow">
                            <div class="border-b p-3">
                                <h5 class="font-bold uppercase text-gray-600">Graph</h5>
                            </div>
                            <div class="p-5">
                                <canvas id="chartjs-7" class="chartjs" width="undefined" height="undefined"></canvas>
                                <script>
                                    new Chart(document.getElementById("chartjs-7"), {
                                        "type": "bar",
                                        "data": {
                                            "labels": ["January", "February", "March", "April"],
                                            "datasets": [{
                                                "label": "Page Impressions",
                                                "data": [10, 20, 30, 40],
                                                "borderColor": "rgb(255, 99, 132)",
                                                "backgroundColor": "rgba(255, 99, 132, 0.2)"
                                            }, {
                                                "label": "Adsense Clicks",
                                                "data": [5, 15, 10, 30],
                                                "type": "line",
                                                "fill": false,
                                                "borderColor": "rgb(54, 162, 235)"
                                            }]
                                        },
                                        "options": {
                                            "scales": {
                                                "yAxes": [{
                                                    "ticks": {
                                                        "beginAtZero": true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                        <!--/Graph Card-->
                    </div>

                    <div class="w-full md:w-1/2 p-3">
                        <!--Graph Card-->
                        <div class="bg-white border rounded shadow">
                            <div class="border-b p-3">
                                <h5 class="font-bold uppercase text-gray-600">Graph</h5>
                            </div>
                            <div class="p-5">
                                <canvas id="chartjs-0" class="chartjs" width="undefined" height="undefined"></canvas>
                                <script>
                                    new Chart(document.getElementById("chartjs-0"), {
                                        "type": "line",
                                        "data": {
                                            "labels": ["January", "February", "March", "April", "May", "June", "July"],
                                            "datasets": [{
                                                "label": "Views",
                                                "data": [65, 59, 80, 81, 56, 55, 40],
                                                "fill": false,
                                                "borderColor": "rgb(75, 192, 192)",
                                                "lineTension": 0.1
                                            }]
                                        },
                                        "options": {}
                                    });
                                </script>
                            </div>
                        </div>
                        <!--/Graph Card-->
                    </div>


                    <div class="w-full md:w-1/2 xl:w-1/2 p-3">
                        <!--Graph Card-->
                        <div class="bg-white border rounded shadow">
                            <div class="border-b p-3">
                                <h5 class="font-bold uppercase text-gray-600">Graph</h5>
                            </div>
                            <div class="p-5">
                                <canvas id="chartjs-1" class="chartjs" width="undefined" height="undefined"></canvas>
                                <script>
                                    new Chart(document.getElementById("chartjs-1"), {
                                        "type": "bar",
                                        "data": {
                                            "labels": ["January", "February", "March", "April", "May", "June", "July"],
                                            "datasets": [{
                                                "label": "Likes",
                                                "data": [65, 59, 80, 81, 56, 55, 40],
                                                "fill": false,
                                                "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
                                                    "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)",
                                                    "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"
                                                ],
                                                "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
                                                    "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)",
                                                    "rgb(201, 203, 207)"
                                                ],
                                                "borderWidth": 1
                                            }]
                                        },
                                        "options": {
                                            "scales": {
                                                "yAxes": [{
                                                    "ticks": {
                                                        "beginAtZero": true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                        <!--/Graph Card-->
                    </div>

                    <div class="w-full md:w-1/2 xl:w-1/2 p-3">
                        <!--Graph Card-->
                        <div class="bg-white border rounded shadow">
                            <div class="border-b p-3">
                                <h5 class="font-bold uppercase text-gray-600">Graph</h5>
                            </div>
                            <div class="p-5"><canvas id="chartjs-4" class="chartjs" width="undefined"
                                    height="undefined"></canvas>
                                <script>
                                    new Chart(document.getElementById("chartjs-4"), {
                                        "type": "doughnut",
                                        "data": {
                                            "labels": ["P1", "P2", "P3"],
                                            "datasets": [{
                                                "label": "Issues",
                                                "data": [300, 50, 100],
                                                "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                                            }]
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                        <!--/Graph Card-->
                    </div>






                </div>

                <!--/ Console Content-->

            </div>


        </div>
    @endrole



</x-app-layout>
