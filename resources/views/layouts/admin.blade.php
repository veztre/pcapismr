<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">

        <!-- jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <!--Datatables -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        @if (Session::has('message'))
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-indigo-600" x-data="{open: true}" x-show="open">
                <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between flex-wrap">
                        <div class="w-0 flex-1 flex items-center">
                        <span class="flex p-2 rounded-lg bg-indigo-800">
                            <!-- Heroicon name: outline/speakerphone -->
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                            </svg>
                        </span>
                            <p class="ml-3 font-medium text-white truncate">
                                <span class="md:hidden"> {{ Session::get('message') }} </span>
                                <span class="hidden md:inline"> {{ Session::get('message') }} </span>
                            </p>
                        </div>
                        <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
                            <button @click="open = false" type="button"
                                    class="-mr-1 flex p-2 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2">
                                <span class="sr-only">Dismiss</span>
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif


        <main>
            {{ $slot }}
        </main>


        @stack('modals')

        @livewireScripts
    </body>
    <style>
        h1 {
            text-align: left;
            font-size: 26px;
            color: gray;
        }

        h2 {
            text-align: left;
            font-size: 20px;
            color: gray;
        }


        /*Overrides for Tailwind CSS */

        /*Form fields*/
        .dataTables_wrapper select
        {
            color: #4a5568;
            /*text-gray-700*/
            padding-left: 1rem;
            /*pl-4*/
            padding-right: 1rem;
            /*pl-4*/
            padding-top: .5rem;
            /*pl-2*/
            padding-bottom: .5rem;
            /*pl-2*/
            line-height: 1.25;
            /*leading-tight*/
            border-width: 4px;
            /*border-2*/
            border-radius: .25rem;
            border-color: #edf2f7;
            /*border-gray-200*/
            background-color: #edf2f7;
            /*bg-gray-200*/
            width: 45% !important;


        }
        .dataTables_wrapper .dataTables_filter input  {
            color: #4a5568;
            /*text-gray-700*/
            padding-left: 1rem;
            /*pl-4*/
            padding-right: 1rem;
            /*pl-4*/
            padding-top: .5rem;
            /*pl-2*/
            padding-bottom: .5rem;
            /*pl-2*/
            line-height: 1.25;
            /*leading-tight*/
            border-width: 6px;
            /*border-2*/
            border-radius: .25rem;
            border-color: #edf2f7;
            /*border-gray-200*/
            background-color: #edf2f7;
            /*bg-gray-200*/
            width: 80% !important;
        }


        /*Row Hover*/
        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
            background-color: #ebf4ff;
            /*bg-indigo-100*/
        }

        /*Pagination Buttons*/
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Current selected */
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #667eea !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Hover */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #667eea !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Add padding to bottom border */
        table.dataTable.no-footer {
            border-bottom: 1px solid #e2e8f0;
            /*border-b-1 border-gray-300*/
            margin-top: 0.75em;
            margin-bottom: 0.75em;
        }

        /*Change colour of responsive icon*/
        table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
        table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
            background-color: #667eea !important;
            /*bg-indigo-500*/
        }

    </style>
    {{-- Timezone--}}
    <script type="text/javascript" id="gwt-pst">
        (function (d, eId) {
            var js, gjs = d.getElementById(eId);
            js = d.createElement('script');
            js.id = 'gwt-pst-jsdk';
            js.src = "//gwhs.i.gov.ph/pst/gwtpst.js?" + new Date().getTime();
            gjs.parentNode.insertBefore(js, gjs);
        }(document, 'pst-container'));

        var gwtpstReady = function () {
            new gwtpstTime('pst-time');
        }
    </script>

    {{-- Sorting, Pagination, Search--}}
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "scrollCollapse": true,
                "sScrollY": "500px",
                "iDisplayLength": 10,
                "language": {
                    "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                    "lengthMenu": "_MENU_records per page",
                    "zeroRecords": "No matching record found",
                    "emptyTable": "No entries found",
                    "loadingRecords": "Loading data from server",
                    "processing": "Processing...",
                    "search": "Search:",
                    "info": "Showing page _PAGE_ of _PAGES_",
                    "infoEmpty": "No records available",
                    "infoFiltered": "(filtered from _MAX_ total entries)"},

                responsive: true
            })

                .columns.adjust()
                .responsive.recalc();

        });
    </script>
    <script>
        $(document).ready(function() {

            var table = $('#example1').DataTable({
                "scrollCollapse": true,
                "sScrollY": "500px",
                "iDisplayLength": 10,
                "language": {
                    "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                    "lengthMenu": "_MENU_records per page",
                    "zeroRecords": "No matching record found",
                    "emptyTable": "No entries found",
                    "loadingRecords": "Loading data from server",
                    "processing": "Processing...",
                    "search": "Search:",
                    "info": "Showing page _PAGE_ of _PAGES_",
                    "infoEmpty": "No records available",
                    "infoFiltered": "(filtered from _MAX_ total entries)"},
                responsive: true
            })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>
    <script>
        $(document).ready(function() {

            var table = $('#example2').DataTable({
                "scrollCollapse": true,
                "sScrollY": "500px",
                "iDisplayLength": 10,
                "language": {
                    "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                    "lengthMenu": "_MENU_records per page",
                    "zeroRecords": "No matching record found",
                    "emptyTable": "No entries found",
                    "loadingRecords": "Loading data from server",
                    "processing": "Processing...",
                    "search": "Search:",
                    "info": "Showing page _PAGE_ of _PAGES_",
                    "infoEmpty": "No records available",
                    "infoFiltered": "(filtered from _MAX_ total entries)"},
                responsive: true
            })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>
</html>
