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
<x-jet-banner />

<div class="min-h-screen bg-gray-100">
    @livewire('navigation-menu')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->

    <main>
        {{ $slot }}
    </main>



</div>

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
        /*width: 45% !important;*/


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


    @media only screen and (max-width: 700px) {
        section {
            flex-direction: column;
        }
    }



    input[type='radio'] {
        -webkit-appearance: none;
        width: 50px;
        height: 50px;


    }

    input[type='radio']:hover {
        box-shadow: 0 0 5px 0px green inset;

    }

    input[type='radio']:before {
        content: '';
        width: 60%;
        height: 60%;
        margin: 20% auto;

    }

    input[type='radio']:checked:before {
        background: green;
        border-radius: 100%;
    }

    table {
        counter-reset: tableCount;
    }
    .counterCell:before {
        content: counter(tableCount);
        counter-increment: tableCount;

    }


    /*green checkmarked start style*/
    .checkmark {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        width: 20px;
        height: 20px;
        display: none;
    }

    .form-control.is-valid + .checkmark,
    .form-select.is-valid + .checkmark {
        display: block;
    }

    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    .checkmark:after {
        left: 2px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
    }

    .form-select {
        position: relative;
        padding-right: 30px; /* Add space for the check mark */
    }
    /*green checkmarked end style*/

    .logout-form {
        position: absolute;
        top: 10px;
        right: 10px;
    }

    /* adjust the tabs position */
    .nav-tabs {
        margin-bottom: 10px;
    }
    .form-check-input:invalid {
        border-color: red;
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
                "lengthMenu": "_MENU_ records per page",
                "zeroRecords": "No matching record found",
                "emptyTable": "No entries found",
                "loadingRecords": "Loading data from server",
                "processing": "Processing...",
                "search": "Search",
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
                "lengthMenu": "_MENU_ records per page",
                "zeroRecords": "No matching record found",
                "emptyTable": "No entries found",
                "loadingRecords": "Loading data from server",
                "processing": "Processing...",
                "search": "Search",
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
                "lengthMenu": "_MENU_ records per page",
                "zeroRecords": "No matching record found",
                "emptyTable": "No entries found",
                "loadingRecords": "Loading data from server",
                "processing": "Processing...",
                "search": "Search",
                "info": "Showing page _PAGE_ of _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtered from _MAX_ total entries)"},
            responsive: true
        })
            .columns.adjust()
            .responsive.recalc();
    });
</script>

{{--green checkmarked script--}}
<script>
    $(document).ready(function() {
        $('.validate-input').on('blur', function() {
            if ($(this).val() !== '') {
                $(this).addClass('is-valid');
            } else {
                $(this).removeClass('is-valid');
            }
        });
    });
</script>

{{--Module1 Script start--}}

<!-- Script Upload-->

<script>
    document.getElementById('fls').addEventListener('change', function() {
        var files = this.files;
        var pdfRegex = /^.*\.(pdf)$/i;
        var maxSize = 20 * 1024 * 1024; // 20 MB in bytes
        var errors = [];

        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var fileType = file.type;
            var fileName = file.name;

            if (!pdfRegex.test(fileName)) {
                errors.push('&#10005; ' + fileName + ': File must be a PDF');
            } else if (file.size > maxSize) {
                errors.push('&#10005; ' + fileName + ': Maximum file size is 20 MB');
            } else if (/[~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/g.test(fileName)) {
                errors.push('&#10005; ' + fileName + ': File name cannot contain special characters');
            }
        }

        if (errors.length > 0) {
            document.getElementById('pdf-error').innerHTML = errors.join('<br>');
        } else {
            document.getElementById('pdf-error').innerHTML = '';
        }
    });

    document.getElementById('myForm').addEventListener('submit', function(e) {
        var errorMessage = document.getElementById('pdf-error').innerHTML;
        console.log('errorMessage:', errorMessage);
        if (errorMessage) {
            console.log('Preventing form submission');
            e.preventDefault(); // prevent form submission
        } else {
            console.log('Allowing form submission');
        }
    });

</script>

<!-- Script RA6969 -->
<script type="text/javascript">

    $('.validate-input').on('blur', function() {
        if ($(this).val() !== '') {
            $(this).addClass('is-valid');
        } else {
            $(this).removeClass('is-valid');
        }
    });

    $("#dynamic-ar").click(function () { //button name
        document.getElementById('dynamic-ar').style.display = 'none';
        var content=`<tr>
                     <td></td><td></td><td></td>
                     <td class="position-relative">
                     <label for="dpno" hidden></label>
                     <input class="form-control validate-input"
                     type="text" name="dpno[]" id="dpno" value="{{ old('dpno', ' ') }}" required>
                     <span class="checkmark"></span>
                     </td><td class="position-relative">
                     <label for="dpno" hidden></label>
                     <input class="form-select validate-input" placeholder="Date: "
                     value="2001-01-01"  type="date" name="dpno[]" id="dpno" required>
                     <span class="checkmark"></span></td>
                     <td class="position-relative">
                     <label for="dpno" hidden></label>
                     <input class="form-select validate-input" placeholder="Date: " value="2001-01-01"
                     type="date" name="dpno[]" id="dpnoe" required>
                     <span class="checkmark"></span></td>
                     <td><button type="button" name="add" id="dynamic-ar"
                     class="btn btn-outline-primary">+</button></td>
                    </tr>`;

        var newRow = $(content);

        $("#dynamicAddRemove").append(newRow);

        // Apply validation logic to the dynamically added input fields
        newRow.find('.validate-input').on('blur', function() {
            if ($(this).val() !== '') {
                $(this).addClass('is-valid');
            } else {
                $(this).removeClass('is-valid');
            }
        });
        config = {
            dateFormat: "Y-m-d"
        }
        flatpickr("input[type=date]", config);
    });
</script>


<!-- Script PD-->
<script type="text/javascript">
    $('.validate-input').on('blur', function() {
        if ($(this).val() !== '') {
            $(this).addClass('is-valid');
        } else {
            $(this).removeClass('is-valid');
        }
    });

    $("#ECC").click(function () { //button name
        var newRow = $('<tr><td></td><td></td><td></td><td class="position-relative"><label for="cncno" hidden></label><input class="form-control validate-input" type="text" name="cncno[]" id="cncno" value="{{ old('cncno', ' ') }}" required><span class="checkmark"></span></td><td class="position-relative"><label for="cncno" hidden></label><input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="cncno[]" id="cncno" required><span class="checkmark"></span></td><td class="position-relative"><label for="cncno" hidden></label><input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="cncno[]" id="cncno" required><span class="checkmark"></span></td></tr>');

        $("#pd").append(newRow);

        // Apply validation logic to the dynamically added input fields
        newRow.find('.validate-input').on('blur', function() {
            if ($(this).val() !== '') {
                $(this).addClass('is-valid');
            } else {
                $(this).removeClass('is-valid');
            }
        });
        config = {
            dateFormat: "Y-m-d"
        }
        flatpickr("input[type=date]", config);
    });
</script>

<!-- Script for CCo Registration -->
<script type="text/javascript">
    $('.validate-input').on('blur', function() {
        if ($(this).val() !== '') {
            $(this).addClass('is-valid');
        } else {
            $(this).removeClass('is-valid');
        }
    });

    $("#ccoregister").click(function () { //button name
        var newRow = $('<tr><td></td><td></td><td></td><td class="position-relative"><label for="ccoreg" hidden></label><input class="form-control validate-input" type="text" name="ccoreg[]" id="ccoreg" value="{{ old('ccoreg', ' ') }}" required><span class="checkmark"></span></td><td class="position-relative"><label for="ccoreg" hidden></label><input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="ccoreg[]" id="ccoreg" required><span class="checkmark"></span></td><td class="position-relative"><label for="ccoreg" hidden></label><input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="ccoreg[]" id="ccoreg" required><span class="checkmark"></span></td></tr>');

        $("#cco").append(newRow);

        // Apply validation logic to the dynamically added input fields
        newRow.find('.validate-input').on('blur', function() {
            if ($(this).val() !== '') {
                $(this).addClass('is-valid');
            } else {
                $(this).removeClass('is-valid');
            }
        });

        // Initialize date picker for the newly added row
        var config = {
            dateFormat: "Y-m-d"
        };
        flatpickr(newRow.find("input[type=date]"), config);
    });
</script>



<!-- Scipt for importation clearance no -->
<script type="text/javascript">
    $('.validate-input').on('blur', function() {
        if ($(this).val() !== '') {
            $(this).addClass('is-valid');
        } else {
            $(this).removeClass('is-valid');
        }
    });

    var i = 0;
    $("#imp").click(function () { //button name
        ++i;
        var newRow = $('<tr><td></td><td></td><td></td><td class="position-relative"><label for="import" hidden></label><input class="form-control validate-input" type="text" name="import[]" id="import" value="{{ old('import', ' ') }}" required><span class="checkmark"></span></td><td class="position-relative"><label for="import" hidden></label><input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="import[]" id="import" required><span class="checkmark"></span></td><td class="position-relative"><label for="import" hidden></label><input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="import[]" id="import" required><span class="checkmark"></span></td></tr>');

        $("#importation").append(newRow);

        // Apply validation logic to the dynamically added input fields
        newRow.find('.validate-input').on('blur', function() {
            if ($(this).val() !== '') {
                $(this).addClass('is-valid');
            } else {
                $(this).removeClass('is-valid');
            }
        });

        // Initialize date picker for the newly added row
        var config = {
            dateFormat: "Y-m-d"
        };
        flatpickr(newRow.find("input[type=date]"), config);
    });
</script>


<!-- Script for Permit to Transport -->
<script type="text/javascript">
    $('.validate-input').on('blur', function() {
        if ($(this).val() !== '') {
            $(this).addClass('is-valid');
        } else {
            $(this).removeClass('is-valid');
        }
    });

    var i = 0;
    $("#ptt").click(function () { //button name
        ++i;
        var newRow = $('<tr><td></td><td></td><td></td><td class="position-relative"><label for="permit" hidden></label><input class="form-control validate-input" type="text" name="permit[]" id="permit" value="{{ old('permit', ' ') }}" required><span class="checkmark"></span></td><td class="position-relative"><label for="permit" hidden></label><input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="permit[]" id="" required><span class="checkmark"></span></td><td class="position-relative"><label for="permit" hidden></label><input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="permit[]" id="" required><span class="checkmark"></span></td></tr>');

        $("#permit").append(newRow);

        // Apply validation logic to the dynamically added input fields
        newRow.find('.validate-input').on('blur', function() {
            if ($(this).val() !== '') {
                $(this).addClass('is-valid');
            } else {
                $(this).removeClass('is-valid');
            }
        });

        // Initialize date picker for the newly added row
        var config = {
            dateFormat: "Y-m-d"
        };
        flatpickr(newRow.find("input[type=date]"), config);
    });
</script>

<!-- Script for Small Quality Importation-->
<script type="text/javascript">
    $('.validate-input').on('blur', function() {
        if ($(this).val() !== '') {
            $(this).addClass('is-valid');
        } else {
            $(this).removeClass('is-valid');
        }
    });

    var i = 0;
    $("#sqi").click(function () { //button name
        ++i;
        var newRow = $('<tr><td></td><td></td><td></td><td class="position-relative"><label for="smallquan" hidden></label> <input class="form-control validate-input" type="text" name="smallquan[]" id="smallquan" value="{{ old('smallquan', ' ') }}" required><span class="checkmark"></span></td><td class="position-relative"><label for="smallquan" hidden></label> <input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="smallquan[]" id="smallquan" required><span class="checkmark"></span></td><td class="position-relative"><label for="smallquan" hidden></label><input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="smallquan[]" id="smallquan" required><span class="checkmark"></span></td></tr>');

        $("#smallq").append(newRow);

        // Apply validation logic to the dynamically added input fields
        newRow.find('.validate-input').on('blur', function() {
            if ($(this).val() !== '') {
                $(this).addClass('is-valid');
            } else {
                $(this).removeClass('is-valid');
            }
        });

        // Initialize date picker for the newly added row
        var config = {
            dateFormat: "Y-m-d"
        };
        flatpickr(newRow.find("input[type=date]"), config);
    });
</script>


<!-- Script for priority chem list -->
<script type="text/javascript">
    $('.validate-input').on('blur', function() {
        if ($(this).val() !== '') {
            $(this).addClass('is-valid');
        } else {
            $(this).removeClass('is-valid');
        }
    });

    var i = 0;
    $("#priochem").click(function () { //button name
        ++i;
        var newRow = $('<tr><td></td><td></td><td></td><td class="position-relative"><label for="priority" hidden></label><input class="form-control validate-input" type="text" name="priority[]" id="priority" value="{{ old('priority', ' ') }}" required><span class="checkmark"></span></td><td class="position-relative"><label for="priority" hidden></label> <input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="priority[]" id="priority" required><span class="checkmark"></span></td><td class="position-relative"><label for="priority" hidden></label><input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="priority[]" id="priority" required><span class="checkmark"></span></td></tr>');

        $("#prio").append(newRow);

        // Apply validation logic to the dynamically added input fields
        newRow.find('.validate-input').on('blur', function() {
            if ($(this).val() !== '') {
                $(this).addClass('is-valid');
            } else {
                $(this).removeClass('is-valid');
            }
        });

        // Initialize date picker for the newly added row
        var config = {
            dateFormat: "Y-m-d"
        };
        flatpickr(newRow.find("input[type=date]"), config);
    });
</script>

<!-- Script PICCS -->
<script type="text/javascript">
    $('.validate-input').on('blur', function() {
        if ($(this).val() !== '') {
            $(this).addClass('is-valid');
        } else {
            $(this).removeClass('is-valid');
        }
    });

    var i = 0;
    $("#pccs").click(function () { //button name
        ++i;
        var newRow = $('<tr><td></td><td></td><td></td><td class="position-relative"><label for="piccs" hidden></label><input class="form-control validate-input" type="text" name="piccs[]" id="piccs" value="{{ old('piccs', ' ') }}" required><span class="checkmark"></span></td><td class="position-relative"><label for="piccs" hidden></label><input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="piccs[]" id="piccs" required><span class="checkmark"></span></td><td class="position-relative"><label for="piccs" hidden></label><input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="piccs[]" id="piccs" required><span class="checkmark"></span></td></tr>');

        $("#piccs").append(newRow);

        // Apply validation logic to the dynamically added input fields
        newRow.find('.validate-input').on('blur', function() {
            if ($(this).val() !== '') {
                $(this).addClass('is-valid');
            } else {
                $(this).removeClass('is-valid');
            }
        });

        // Initialize date picker for the newly added row
        var config = {
            dateFormat: "Y-m-d"
        };
        flatpickr(newRow.find("input[type=date]"), config);
    });
</script>

<!-- Script for PMPIN -->
<script type="text/javascript">
    $('.validate-input').on('blur', function() {
        if ($(this).val() !== '') {
            $(this).addClass('is-valid');
        } else {
            $(this).removeClass('is-valid');
        }
    });

    $("#pin").click(function () { //button name
        var newRow = $('<tr><td></td><td></td><td></td><td class="position-relative"><label for="pmpin" hidden></label><input class="form-control validate-input" type="text" name="pmpin[]" id="pmpin" value="{{ old('pmpin', ' ') }}" required><span class="checkmark"></span></td><td class="position-relative"><label for="pmpin" hidden></label><input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="pmpin[]" id="pmpin" required><span class="checkmark"></span></td><td class="position-relative"><label for="pmpin" hidden></label><input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="pmpin[]" id="pmpin" required><span class="checkmark"></span></td></tr>');

        $("#pmpin").append(newRow);

        // Apply validation logic to the dynamically added input fields
        newRow.find('.validate-input').on('blur', function() {
            if ($(this).val() !== '') {
                $(this).addClass('is-valid');
            } else {
                $(this).removeClass('is-valid');
            }
        });

        // Initialize date picker for the newly added row
        var config = {
            dateFormat: "Y-m-d"
        };
        flatpickr(newRow.find("input[type=date]"), config);
    });
</script>

<!-- Script for PO no -->
<script type="text/javascript">
    $('.validate-input').on('blur', function() {
        if ($(this).val() !== '') {
            $(this).addClass('is-valid');
        } else {
            $(this).removeClass('is-valid');
        }
    });

    $("#ponum").click(function () { //button name
        var newRow = $('<tr><td></td><td></td><td></td><td class="position-relative"><label for="pono" hidden></label><input class="form-control validate-input" type="text" name="pono[]" id="pono" value="{{ old('pono', ' ') }}" required><span class="checkmark"></span></td><td class="position-relative"><label for="pono" hidden></label><input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="pono[]" id="pono" required><span class="checkmark"></span></td><td class="position-relative"><label for="pono" hidden></label><input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="pono[]" id="pono" required><span class="checkmark"></span></td></tr>');

        $("#pono").append(newRow);

        // Apply validation logic to the dynamically added input fields
        newRow.find('.validate-input').on('blur', function() {
            if ($(this).val() !== '') {
                $(this).addClass('is-valid');
            } else {
                $(this).removeClass('is-valid');
            }
        });

        // Initialize date picker for the newly added row
        var config = {
            dateFormat: "Y-m-d"
        };
        flatpickr(newRow.find("input[type=date]"), config);
    });
</script>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>



{{--Module1 Script End--}}


{{--Module 2 Script Start--}}
<!-- SCRIPT FOR HAZZARDOUS WASTE GENERATIONS  -->
<script type="text/javascript">
    var i = 0;
    $("#haz").click(function () { //button name
        ++i;
        $("#hazzardous").append(
            '<tr><td class="counterCell" style="text-align: right"></td><td><select class="form-select" name="hwGeneration[]" style="width: fit-content"><option selected disabled value="">-- Select --</option><option>A101</option><option>B201</option><option>B202</option><option>B203</option><option>B204</option><option>B205</option><option>B206</option><option>B207</option><option>B208</option><option>B299</option><option>C301</option><option>C302</option><option>C303</option><option>C304</option><option>C305</option><option>C399</option><option>D401</option><option>D402</option><option>D403</option><option>D404</option><option>D405</option><option>D406</option><option>D407</option><option>D408</option><option>D499</option><option>E501</option><option>E502</option><option>E503</option><option>E599</option><option>F601</option><option>F602</option><option>F603</option><option>F604</option><option>F699</option><option>G703</option><option>G704</option><option>H802</option><option>I101</option><option>I102</option><option>I103</option><option>I104</option><option>J201</option><option>K301</option><option>K302</option><option>K303</option><option>L401</option><option>L402</option><option>L403</option><option>L404</option><option>M501</option><option>M502</option><option>M503</option><option>M504</option><option>M505</option><option>M506</option><option>M507</option></select></td><td><input type="text" class="form-control" name="hwGeneration[]"></td><td><select class="form-select" name="hwGeneration[]" style="width: fit-content"><option selected disabled value="">-- Select --</option><option>Solid</option><option>Liquid</option><option>Gas</option><option>Sludge</option></select></td><td><select class="form-select" name="hwGeneration[]" style="width: fit-content"><option selected disabled value="">-- Select --</option><option>Toxic(T)</option><option>Corrosive(C)</option><option>Reactive(R)</option><option>Flammable(F)</option><option>T/C</option><option>T/R</option><option>T/F</option><option>C/R</option><option>C/F</option><option>R/F</option><option>T/C/R</option><option>T/C/F</option><option>T/R/F</option><option>C/R/F</option><option>T/C/R/F</option></select></td><td></td><td><input type="text" class="form-control" name="hwGeneration[]" oninput="validateDecimal(event)" title="Please enter a valid decimal number"></td><td><select class="form-select" name="hwGeneration[]" style="width: fit-content"><option selected disabled value="">-- Select --</option><option>kg</option><option>liter</option><option>m3</option><option>n/a</option><option>pc</option><option>ton</option></select></td><td></td><td></td><td></td><td><input type="text" class="form-control" name="hwGeneration[]" oninput="validateDecimal(event)" title="Please enter a valid decimal number"></td><td><select class="form-select" name="hwGeneration[]" style="width: fit-content"><option selected disabled value="">-- Select --</option><option>kg</option><option>liter</option><option>m3</option><option>n/a</option><option>pc</option><option>ton</option></select></td><td></td><td></td></tr>'
        ); //table name
    });

    function validateDecimal(event) {
        const input = event.target.value;
        const regex = /^-?\d*\.?\d+$/;

        if (!regex.test(input)) {
            event.target.setCustomValidity("Please enter a valid decimal number");
        } else {
            event.target.setCustomValidity("");
        }
    }
</script>



<style>
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type="number"] {
        -moz-appearance: textfield;
    }
</style>




<!--  SCRIPT FOR WASTE STORAGE, TREATMENT AND DISPOSAL (PLEASE FILL-UP ONE TABLE PER HW -->
<script>
    // select the button element with jQuery
    var wstd = $('#wstd');

    // select the container element for the tables
    var wstad = $('#wstad');

    // add a click event listener to the button
    wstd.click(function() {
        // create a new table element with jQuery
        var newTable = $('<div class="container" id="wstad">' +
            '<div class="card border-3 border-secondary mb-3">' +
            '<table class="table table-borderless p-3">' +
            '<thead><tr><th>HW Details</th></tr></thead>' +
            '<tbody id="wstad">' +
            '<tr><td></td><td>HW No.</td><td>HW Class</td></tr>' +
            '<tr><td></td><td><select class="form-select" name="hwDetails[]" style="width: fit-content">' +
            '<option selected disabled value="">-- Select --</option>' +
            '<option>A101</option>' +
            '<option>B201</option>' +
            '<option>B202</option>' +
            '<option>B203</option>' +
            '<option>B204</option>' +
            '<option>B205</option>' +
            '<option>B206</option>' +
            '<option>B207</option>' +
            '<option>B208</option>' +
            '<option>B299</option>' +
            '<option>C301</option>' +
            '<option>C302</option>' +
            '<option>C303</option>' +
            '<option>C304</option>' +
            '<option>C305</option>' +
            '<option>C399</option>' +
            '<option>D401</option>' +
            '<option>D402</option>' +
            '<option>D403</option>' +
            '<option>D404</option>' +
            '<option>D405</option>' +
            '<option>D406</option>' +
            '<option>D407</option>' +
            '<option>D408</option>' +
            '<option>D499</option>' +
            '<option>E501</option>' +
            '<option>E502</option>' +
            '<option>E503</option>' +
            '<option>E599</option>' +
            '<option>F601</option>' +
            '<option>F602</option>' +
            '<option>F603</option>' +
            '<option>F604</option>' +
            '<option>F699</option>' +
            '<option>G703</option>' +
            '<option>G704</option>' +
            '<option>H802</option>' +
            '<option>I101</option>' +
            '<option>I102</option>' +
            '<option>I103</option>' +
            '<option>I104</option>' +
            '<option>J201</option>' +
            '<option>K301</option>' +
            '<option>K302</option>' +
            '<option>K303</option>' +
            '<option>L401</option>' +
            '<option>L402</option>' +
            '<option>L403</option>' +
            '<option>L404</option>' +
            '<option>M501</option>' +
            '<option>M502</option>' +
            '<option>M503</option>' +
            '<option>M504</option>' +
            '<option>M505</option>' +
            '<option>M506</option>' +
            '<option>M507</option>' +
            '</select></td>' +
            '<td><input type="text" class="form-control" name="hwDetails[]"></td></tr>' +
            '<tr><td></td><td>Qty of HW Treated</td><td>Unit</td></tr>' +
            '<tr><td></td><td><input type="text" class="form-control" name="hwDetails[]"></td>' +
            '<td><select class="form-select" name="hwDetails[]" style="width: fit-content">' +
            '<option selected disabled value="">-- Select --</option>' +
            '<option>kg</option>' +
            '<option>liter</option>' +
            '<option>m3</option>' +
            '<option>pc</option>' +
            '<option>ton</option>' +
            '<option>n/a</option>' +
            '</select></td></tr>' +
            '<tr><td></td><td>TSD Locations</td></tr>' +
            '<tr><td></td><td><input type="text" class="form-control" name="hwDetails[]"></td></tr>' +
            '</tbody>' +
            '<thead><tr><th>Storage</th></tr></thead>' +
            '<tbody>' +
            '<tr><td></td><td>Name</td></tr>' +
            '<tr><td></td><td><input type="text" class="form-control" name="storage[]"></td></tr>' +
            '<tr><td></td><td>Method</td></tr>' +
            '<tr><td></td><td><input type="text" class="form-control" name="storage[]"></td></tr>' +
            '</tbody>' +
            '<thead><tr><th>Transporter</th></tr></thead>' +
            '<tbody>' +
            '<tr><td></td><td>ID</td><td>Name</td></tr>' +
            '<tr><td></td><td><input type="text" class="form-control" name="transporter[]"></td>' +
            '<td><input type="text" class="form-control" name="transporter[]"></td></tr>' +
            '<tr><td></td><td>Method</td><td>Date</td></tr>' +
            '<tr><td></td><td><input type="text" class="form-control" name="transporter[]"></td>' +
            '<td><input type="date" class="form-control" name="transporter[]" value="January 01, 2001"></td></tr>' +
            '</tbody>' +
            '<thead><tr><th>Treater</th></tr></thead>' +
            '<tbody>' +
            '<tr><td></td><td>ID</td><td>Name</td></tr>' +
            '<tr><td></td><td><input type="text" class="form-control" name="treater[]"></td>' +
            '<td><input type="text" class="form-control" name="treater[]"></td></tr>' +
            '<tr><td></td><td>Method</td><td>Date</td></tr>' +
            '<tr><td></td><td><input type="text" class="form-control" name="treater[]"></td>' +
            '<td><input type="date" class="form-control" name="treater[]" value="January 01, 2001"></td></tr>' +
            '</tbody>' +
            '<thead><tr><th>Disposal</th></tr></thead>' +
            '<tbody>' +
            '<tr><td></td><td>ID</td><td>Name</td></tr>' +
            '<tr><td></td><td><input type="text" class="form-control" name="disposal[]"></td>' +
            '<td><input type="text" class="form-control" name="disposal[]"></td></tr>' +
            '<tr><td></td><td>Method</td><td>Date</td></tr>' +
            '<tr><td></td><td><input type="text" class="form-control" name="disposal[]"></td>' +
            '<td><input type="date" class="form-control" name="disposal[]" value="January 01, 2001"></td></tr>' +
            '</tbody>' +
            '</table></div></div>');

        // append the new table to the container
        newTable.appendTo(newtable);
        config = {
            dateFormat: "F d, Y"
        }
        flatpickr("input[type=date]", config);
    });
</script>

{{--
<script type="text/javascript">

    var i = 0;
    $("#wstd").click(function () { //button name
        ++i;
        $("#wstad").append(
            '<div class="container" id="wstad"><div class="card border-3 border-secondary mb-3" ><table class="table table-borderless p-3"><thead><tr><th>HW Details</th></tr></thead><tbody><tr><td></td><td>HW No.</td><td>HW Class</td></tr><tr><td class="counterCell " style="text-align: right" ></td><td><select class="form-select" name="hwDetails[]" style="width: fit-content"><option selected disabled value="">-- Select --</option><option>A101</option><option>B201</option><option>B202</option><option>B203</option><option>B204</option><option>B205</option><option>B206</option><option>B207</option><option>B208</option><option>B299</option><option>C301</option><option>C302</option><option>C303</option><option>C304</option><option>C305</option><option>C399</option><option>D401</option><option>D402</option><option>D403</option><option>D404</option><option>D405</option><option>D406</option><option>D407</option><option>D408</option><option>D499</option><option>E501</option><option>E502</option><option>E503</option><option>E599</option><option>F601</option><option>F602</option><option>F603</option><option>F604</option><option>F699</option><option>G703</option><option>G704</option><option>H802</option><option>I101</option><option>I102</option><option>I103</option><option>I104</option><option>J201</option><option>K301</option><option>K302</option><option>K303</option><option>L401</option><option>L402</option><option>L403</option><option>L404</option><option>M501</option><option>M502</option><option>M503</option><option>M504</option><option>M505</option><option>M506</option><option>M507</option></select></td><td><input type="text" class="form-control" name="hwDetails[]"></td></tr><tr><td></td><td>Qty of HW Treated</td><td>Unit</td></tr><tr><td></td><td><input type="text" class="form-control" name="hwDetails[]"></td><td><select class="form-select" name="hwDetails[]" style="width: fit-content"><option selected disabled value="">-- Select --</option><option>kg</option><option>liter</option><option>m3</option><option>pc</option><option>ton</option><option> </option></select></td></tr><tr><td></td><td>TSD Locations</td></tr><tr><td></td><td><input type="text" class="form-control" name="hwDetails[]"></td></tr></tbody><thead><tr><th>Storage</th></tr></thead><tbody><tr><td></td><td>Name</td> </tr><tr><td></td><td><input type="text" class="form-control" name="storage[]"></td></tr><tr><td></td><td>Method</td></tr><tr><td></td><td><input type="text" class="form-control" name="storage[]"></td></tr></tbody><thead><tr><th>Transporter</th></tr></thead><tbody><tr><td></td><td>ID</td><td>Name</td></tr><tr><td></td><td><input type="text" class="form-control" name="transporter[]"></td><td><input type="text" class="form-control" name="transporter[]"></td></tr><tr><td></td><td>Method</td><td>Date</td></tr><tr><td></td><td><input type="text" class="form-control" name="transporter[]" ></td><td><input type="date" class="form-control" name="transporter[]" value="January 01, 2001"></td></tr></tbody><thead><tr><th>Treater</th></tr></thead><tbody><tr><td></td><td>ID</td><td>Name</td></tr><tr><td></td><td><input type="text" class="form-control" name="treater[]"></td><td><input type="text" class="form-control" name="treater[]"></td></tr><tr><td></td><td>Method</td><td>Date</td></tr><tr><td></td><td><input type="text" class="form-control" name="treater[]"></td><td><input type="date" class="form-control" name="treater[]" value="January 01, 2001"></td></tr></tbody><thead><tr><th>Disposal</th></tr></thead><tbody><tr><td></td><td>ID</td><td>Name</td> </tr><tr><td></td><td><input type="text" class="form-control" name="disposal[]"></td><td><input type="text" class="form-control" name="disposal[]"></td></tr><tr><td></td><td>Method</td><td>Date</td></tr><tr><td></td><td><input type="text" class="form-control" name="disposal[]"></td><td><input type="date" class="form-control" name="disposal[]" value="January 01, 2001" ></td></tr></tbody></table></div></div>'
        ); //table name
        config = {
            dateFormat: "F d, Y"
        }
        flatpickr("input[type=date]", config);
    });
</script>
--}} {{--old script--}}


<!--  SCRIPT FOR ON-SITE SELF INSPECTION OF STORAGE AREA -->
<script type="text/javascript">

    var i = 0;
    $("#onSite").click(function () { //button name
        ++i;
        $("#onsite").append(
            '<tr><td><input type="date" class="form-control" name="osisa[]" value="2001-01-01"></td><td><input type="text" class="form-control" name="osisa[]"></td><td><input type="text" class="form-control" name="osisa[]"></td><td><input type="text" class="form-control" name="osisa[]"></td></tr>'
        ); //table name
        config = {
            dateFormat: "Y-m-d"
        }
        flatpickr("input[type=date]", config);
    });
</script>

{{--Module2 Script End--}}



{{--Module 3 Script Start--}}


<!-- WTP DISCHARGE LOCATION script -->
<script type="text/javascript">
    var i = 0;
    $("#wdladd").click(function () { //button name
        ++i;
        $("#wdl").append(
            '<tr><td ><input class="form-control" type="text" name="dischargeLocation[]" ></td><td><input class="form-control" type="text"  id="lo" name="dischargeLocation[]" value="{{ old('dischargeLocation[]', ' ') }}"></td><td><input class="form-control" type="text"  id="nrwb" name="dischargeLocation[]" value="{{ old('dischargeLocation[]', ' ') }}"></td><td></td></tr>'
        ); //table name
    });
</script>
{{--
<script type="text/javascript">
    var i = 0;
    $("#wdladd").click(function () { //button name
        ++i;
        $("#wdl").append(
            '<tr><td class="counterCell " style="text-align: left"></td><td><input class="form-control" type="text"  id="lo" name="dischargeLocation[]" value="{{ old('dischargeLocation[]', ' ') }}"></td><td><input class="form-control" type="text"  id="nrwb" name="dischargeLocation[]" value="{{ old('dischargeLocation[]', ' ') }}"></td></tr>'
        ); //table name
    });
</script>
--}}


<!-- DETAILED REPORT OF WASTEWATER CHARACTERISTICS for CC script -->
<script type="text/javascript">
    config = {
        dateFormat: "Y-m-d"
    }
    flatpickr("input[type=date]", config);
    var i = 0;
    $("#drwcccadd").click(function () { //button name
        ++i;
        $("#drwccc").append(
            '<tr><td><input class="form-control" type="text" name="dreportofwaste[]" value="{{ old('dreportofwaste[]', ' ') }}"></td><td><input class="form-control m-auto" type="date"  id="wcdate" name="dreportofwaste[]" value="{{ old('dreportofwaste[]', '2001-01-01') }}"></td><td><input class="form-control" type="text"  id="nfr" name="dreportofwaste[]" value="{{ old('dreportofwaste[]', ' ') }}"></td><td><input class="form-control" type="text"  id="bod" name="dreportofwaste[]" value="{{ old('dreportofwaste[]', ' ') }}"></td><td><input class="form-control" type="text"  id="tss" name="dreportofwaste[]" value="{{ old('dreportofwaste[]', ' ') }}"></td><td><input class="form-control" type="text"  id="clr" name="dreportofwaste[]" value="{{ old('dreportofwaste[]', ' ') }}"></td><td><input class="form-control" type="text"  id="phl" name="dreportofwaste[]" value="{{ old('dreportofwaste[]', ' ') }}"></td><td><input class="form-control" type="text"  id="oag" name="dreportofwaste[]" value="{{ old('dreportofwaste[]', ' ') }}"></td><td><input class="form-control" type="text"  id="tempr" name="dreportofwaste[]" value="{{ old('dreportofwaste[]', ' ') }}"></td><td><input class="form-control" type="text" id="add_p" name="dreportofwaste[]" value="{{ old('dreportofwaste[]', ' ') }}"></td></tr>'
        ); //table name
        config = {
            dateFormat: "Y-m-d"
        }
        flatpickr("input[type=date]", config);
    });
</script>

<!-- DETAILED REPORT OF WASTEWATER CHARACTERISTICS for OP script -->
<script type="text/javascript">
    config = {
        dateFormat: "Y-m-d"
    }
    flatpickr("input[type=date]", config);
    var i = 0;
    $("#dwrcopadd").click(function () { //button name
        ++i;
        $("#dwrcop").append(
            ' <tr><td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', ' ') }}"></td><td><input class="form-control" type="date"   name="drowcfop1[]" value="{{ old('drowcfop1[]', '2001-01-01') }}"></td><td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', ' ') }}"></td><td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', ' ') }}"></td><td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', ' ') }}"></td><td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', ' ') }}"></td><td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', ' ') }}"></td><td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', ' ') }}"></td><td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', ' ') }}"></td><td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', ' ') }}"></td></tr>'
        ); //table name
        config = {
            dateFormat: "Y-m-d"
        }
        flatpickr("input[type=date]", config);
    });
</script>
{{--<script type="text/javascript">
    var i = 0;
    $("#dwrcopadd").click(function () { //button name
        ++i;
        $("#dwrcop").append(
            ' <tr><td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', ' ') }}"></td><td><input class="form-control" type="date"   name="drowcfop1[]" value="{{ old('drowcfop1[]', '2001-01-01') }}"></td><td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', ' ') }}"></td><td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', ' ') }}"></td><td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', ' ') }}"></td><td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', ' ') }}"></td><td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', ' ') }}"></td><td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', ' ') }}"></td><td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', ' ') }}"></td><td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', ' ') }}"></td></tr>'
        ); //table name
        config = {
            dateFormat: "Y-m-d"
        }
        flatpickr("input[type=date]", config);
    });
</script>--}}
{{--Module 3 Script end--}}



{{--Module 4 script Start--}}
<!-- SCRIPT FOR SUMMARY OF APSE/APCF 1-->
<script type="text/javascript">
    var i = 0;
    $("#sum1").click(function () { //button name
        ++i;
        $("#summaryy1").append
        ('<tr><td class="counterCell " style="text-align: right" ></td><td><input type="text" class="form-control" name="summary1[]"></td><td><input type="text" class="form-control" name="summary1[]"></td><td><input type="text" class="form-control" name="summary1[]"></td><td></td></tr>'); //table name
    });
</script>


<!-- SCRIPT FOR SUMMARY OF APSE/APCF 2 -->

<script type="text/javascript">
    var i = 0;
    $("#sum2").click(function () { //button name
        ++i;
        $("#summaryy2").append
        ('<tr><td class="counterCell " style="text-align: right" ></td><td ><input type="text" class="form-control" name="summary2[]"></td><td><input type="text" class="form-control" name="summary2[]"></td><td><input type="text" class="form-control" name="summary2[]"></td><td><input type="text" class="form-control" name="summary2[]"></td><td><input type="text" class="form-control" name="summary2[]"></td><td><select class="form-select" name="summary2[]" style="width: fit-content"><option selected disabled value="">-- Select --</option><option>kg</option><option>liter</option><option>m3</option><option>n/a</option><option>pc</option><option>ton</option></select></td><td></td><td></td><td><input type="text" class="form-control" name="summary2[]"></td></tr>'); //table name
    });
</script>

<!-- SCRIPT FOR SUMMARY OF APSE/APCF 3-->

<script type="text/javascript">
    var i = 0;
    $("#sum3").click(function () { //button name
        ++i;
        $("#summaryy3").append
        ('<tr><td class="counterCell " style="text-align: right" ></td><td><input type="text" class="form-control" name="summary3[]"></td><td><input type="text" class="form-control" name="summary3[]"></td><td><input type="text" class="form-control" name="summary3[]"></td><td></td> </tr>'); //table name
    });
</script>

<!-- SCRIPT FOR RECORD COST OF TREATMENT-->
<script type="text/javascript">
    var i = 0;
    $("#rcotb").click(function () { //button name
        ++i;
        $("#rcot").append
        ('<div class="container" id="rcot"><div class="card border-3 border-secondary mb-3" ><table class="w3-table w3-striped w3-border" ><thead><tr><th></th><th style="text-align:center">Month 1</th><th style="text-align:center">Month 2</th><th style="text-align:center">Month 3</th></tr></thead><tbody><tr><td>Cost of Person employed, (# of employess)</td><td><input type="text" class="form-control" name="cost_of_person_employed[]"></td><td><input type="text" class="form-control" name="cost_of_person_employed[]"></td><td><input type="text" class="form-control" name="cost_of_person_employed[]"></td></tr><tr><td>Total Consumption of Water (cubic meters)</td><td><input type="text" class="form-control" name="total_consumption_of_water[]"></td><td><input type="text" class="form-control" name="total_consumption_of_water[]"></td><td><input type="text" class="form-control" name="total_consumption_of_water[]"></td></tr><tr><td>Total Cost of Chemicals used (e.g., activated carbon, KMnO4)</td><td><input type="text" class="form-control" name="total_cost_of_chemicals_used[]"></td><td><input type="text" class="form-control" name="total_cost_of_chemicals_used[]"></td><td><input type="text" class="form-control" name="total_cost_of_chemicals_used[]"></td></tr><tr><td>Total Consumption of Electricity (kWh)</td><td><input type="text" class="form-control" name="total_consumption_of_electricity[]"></td><td><input type="text" class="form-control" name="total_consumption_of_electricity[]"></td><td><input type="text" class="form-control" name="total_consumption_of_electricity[]"></td></tr><tr><td>Administrative and Overhead Costs</td><td><input type="text" class="form-control" name="administrative_and_overhead_costs[]"></td><td><input type="text" class="form-control" name="administrative_and_overhead_costs[]"></td><td><input type="text" class="form-control" name="administrative_and_overhead_costs[]"></td></tr><tr><td>Cost of operating in-house laboratory</td><td><input type="text" class="form-control" name="cost_of_operating_in_house_laboratory[]"></td><td><input type="text" class="form-control" name="cost_of_operating_in_house_laboratory[]"></td><td><input type="text" class="form-control" name="cost_of_operating_in_house_laboratory[]"></td></tr><tr><td>improvement or modification, if any. (description)</td><td><input type="text" class="form-control" name="improvement_or_modification[]"></td><td><input type="text" class="form-control" name="improvement_or_modification[]"></td><td><input type="text" class="form-control" name="improvement_or_modification[]"></td></tr><tr><td>Cost of improvement of modification</td><td><input type="text" class="form-control" name="cost_of_improvement_of_modification[]"></td><td><input type="text" class="form-control" name="cost_of_improvement_of_modification[]"></td><td><input type="text" class="form-control" name="cost_of_improvement_of_modification[]"></td></tr></tbody></table></div></div>'); //table name
    });
</script>
{{--<script type="text/javascript">
    var i = 0;
    $("#rcotb").click(function () { //button name
        ++i;
        $("#rcot").append
        ('<div class="container" id="rcot"><div class="card border-3 border-secondary mb-3" ><table class="w3-table w3-striped w3-border"><thead><tr><th></th><th style="text-align:center">Month 1</th><th style="text-align:center">Month 2</th><th style="text-align:center">Month 3</th></tr></thead><tbody><tr><td>Cost of Person employed, (# of employess)</td><td><input type="text" class="form-control" name="COPEMonth1"></td><td><input type="text" class="form-control" name="COPEMonth2"></td><td><input type="text" class="form-control" name="COPEMonth3"></td></tr><tr><td>Total Consumption of Water (cubic meters)</td><td><input type="text" class="form-control" name="TCOWMonth1"></td><td><input type="text" class="form-control" name="TCOWMonth2"></td><td><input type="text" class="form-control" name="TCOWMonth3"></td></tr><tr><td>Total Cost of Chemicals used (e.g., activated carbon, KMnO4)</td><td><input type="text" class="form-control" name="TCOCMonth1"></td><td><input type="text" class="form-control" name="TCOCMonth2"></td><td><input type="text" class="form-control" name="TCOCMonth3"></td></tr><tr><td>Total Consumption of Electricity (kWh)</td><td><input type="text" class="form-control" name="TCOEMonth1"></td><td><input type="text" class="form-control" name="TCOEMonth2"></td><td><input type="text" class="form-control" name="TCOEMonth3"></td></tr><tr><td>Administrative and Overhead Costs</td><td><input type="text" class="form-control" name="AAOCMonth1"></td><td><input type="text" class="form-control" name="AAOCMonth2"></td><td><input type="text" class="form-control" name="AAOCMonth3"></td></tr><tr><td>Cost of operating in-house laboratory</td><td><input type="text" class="form-control" name="COPIHLMonth1"></td><td><input type="text" class="form-control" name="COPIHLMonth2"></td><td><input type="text" class="form-control" name="COPIHLMonth3"></td></tr><tr><td>improvement or modification, if any. (description)</td><td><input type="text" class="form-control" name="IOMMonth1"></td><td><input type="text" class="form-control" name="IOMMonth2"></td><td><input type="text" class="form-control" name="IOMMonth3"></td></tr><tr><td>Cost of improvement of modification</td><td><input type="text" class="form-control" name="COIOMonth1"></td><td><input type="text" class="form-control" name="COIOMonth2"></td><td><input type="text" class="form-control" name="COIOMonth3"></td></tr></tbody></table></div></div>'); //table name
    });
</script>--}}

<!-- SCRIPT FOR DETAILED REPORT OF AIR EMISSION CHARACTERISTICS-->

<script type="text/javascript">
    config = {
        dateFormat: "Y-m-d"
    }
    flatpickr("input[type=date]", config);
    var i = 0;
    $("#droaecb").click(function () { //button name
        ++i;
        $("#droaec").append
        ('<tr> <td><input type="text" class="form-control" name="detailreport[]"></td><td><input type="date" class="form-control" name="detailreport[]" value="2001-01-01"></td><td><input type="text" class="form-control" name="detailreport[]"></td><td><input type="text" class="form-control" name="detailreport[]"></td><td><input type="text" class="form-control" name="detailreport[]"></td><td><input type="text" class="form-control" name="detailreport[]"></td><td><input type="text" class="form-control" name="detailreport[]"></td><td><input type="text" class="form-control" name="detail_parameter_value[]"></td><td><input type="text" class="form-control" name="detail_parameter_value[]"></td><td><input type="text" class="form-control" name="detail_parameter_value[]"></td</tr>'); //table name
    });
    config = {
        dateFormat: "Y-m-d"
    }
    flatpickr("input[type=date]", config);
</script>
{{--Module 4 script end--}}



{{--Module 5 Script start--}}
<!-- SCRIPT FOR  AMBIENT AIR QUALITY MONITORING (IF REQUIRED AS PART OF ECC CONDITIONS)-->
<script type="text/javascript">
    var i = 0;
    $("#AAQMonitoring").click(function () { //button name
        ++i;
        $("#AAQM").append(
            '<tr><td><input class="form-control" type="text" name="aaqmonitoring[]" value="{{ old('aaqmonitoring[]', ' ') }}"></td><td><input class="form-control" type="date" name="aaqmonitoring[]" value="{{ old('aaqmonitoring[]', '2001-01-01') }}"></td><td><input class="form-control" type="text" name="aaqmonitoring[]" value="{{ old('aaqmonitoring[]', ' ') }}"></td><td><input class="form-control" type="text" name="aaqmonitoring[]" value="{{ old('aaqmonitoring[]', ' ') }}"></td><td><input class="form-control" type="text" name="aaqmonitoring[]" value="{{ old('aaqmonitoring[]', ' ') }}"></td><td><input class="form-control" type="text" name="aaqmonitoring[]" value="{{ old('aaqmonitoring[]', ' ') }}"></td><td><input class="form-control" type="text" name="aaqmonitoring[]" value="{{ old('aaqmonitoring[]', ' ') }}"></td><td><input class="form-control" type="text" name="aaqmonitoring[]" value="{{ old('aaqmonitoring[]', ' ') }}"></td><td><input class="form-control" type="text" name="aaqmonitoring[]" value="{{ old('aaqmonitoring[]', ' ') }}"></td></tr>'
        ); //table name
    });
</script>

<!-- SCRIPT FOR  AMBIENT WATER QUALITY MONITORING (IF REQUIRED AS PART OF ECC CONDITIONS))-->
<script type="text/javascript">
    var i = 0;
    $("#AWQMonitoring").click(function () { //button name
        ++i;
        $("#AWQM").append(
            '<tr><td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{ old('awqmonitoring1[]', ' ') }}"></td><td><input class="form-control" type="date" name="awqmonitoring1[]" value="{{ old('awqmonitoring1[]', '2001-01-01') }}"></td><td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{ old('awqmonitoring1[]', ' ') }}"></td><td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{ old('awqmonitoring1[]', ' ') }}"></td><td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{ old('awqmonitoring1[]', ' ') }}"></td><td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{ old('awqmonitoring1[]', ' ') }}"></td><td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{ old('awqmonitoring1[]', ' ') }}"></td><td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{ old('awqmonitoring1[]', ' ') }}"></td><td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{ old('awqmonitoring1[]', ' ') }}"></td><td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{ old('awqmonitoring1[]', ' ') }}"></td></tr>'
        ); //table name
    });
</script>

<!-- SCRIPT FOR OTHER ECC CONDITIONS move to modulefive view and updateview -->









<!-- SCRIPT FOR ENVIRONMENTAL MANAGEMENT PLAN/ PROGRAM move to modulefive view and updateview  -->


{{--Module 5 Script end--}}


{{--Module 6 Script start--}}
<!-- Script for upload -->

<script>
    document.getElementById('file').addEventListener('change', function() {
        var file = this.files[0];
        var fileType = file.type;
        var fileName = file.name;
        var pdfRegex = /^.*\.(pdf)$/i;
        var maxSize = 20 * 1024 * 1024; // 20 MB in bytes

        if (!pdfRegex.test(fileName)) {
            document.getElementById('pdf-error1').innerHTML = '&#10005; File must be a PDF';
        } else if (file.size > maxSize) {
            document.getElementById('pdf-error1').innerHTML = '&#10005; Maximum file size is 20 MB';
        } else if (/[~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/g.test(fileName)) {
            document.getElementById('pdf-error').innerHTML = '&#10005; File name cannot contain special characters';
        } else if (fileName.indexOf('NOTARIZED_DOC') === -1) {
            document.getElementById('pdf-error1').innerHTML = '&#10005; File name must contain the string "NOTARIZED_DOC"';
        } else {
            document.getElementById('pdf-error1').innerHTML = '';
        }
    });

    document.getElementById('myForm1').addEventListener('submit', function(e) {
        var errorMessage = document.getElementById('pdf-error1').innerHTML;
        console.log('errorMessage:', errorMessage);
        if (errorMessage) {
            console.log('Preventing form submission');
            e.preventDefault(); // prevent form submission
        } else {
            console.log('Allowing form submission');
        }
    });
</script>



<!-- Script for ACCIDENTS & EMERGENCY RECORDS -->
<script type="text/javascript">

    var i = 0;
    $("#AERT").click(function () { //button name
        ++i;
        $("#AER").append
        (' <tr><td><input type="date" class="form-control" name="accident_records[]" value="2001-01-01"></td><td><input type="text" class="form-control" name="accident_records[]"></td><td><input type="text" class="form-control" name="accident_records[]"></td><td><input type="text" class="form-control" name="accident_records[]"></td><td><input type="text" class="form-control" name="accident_records[]"></td></tr>'); //table name
        config = {
            dateFormat: "Y-m-d"
        }
        flatpickr("input[type=date]", config);
    });
</script>


<!--  Script for ACCIDENTS & Personel Staff RECORDS -->
<script type="text/javascript">

    var i = 0;
    $("#PersonelStaff").click(function () { //button name
        ++i;
        $("#PST").append
        (' <tr><td><input type="date" class="form-control" name="personel_staff[]"></td><td><input type="text" class="form-control" name="personel_staff[]"></td><td><input type="text" class="form-control" name="personel_staff[]"></td></tr>'); //table name
        config = {
            dateFormat: "Y-m-d"
        }
        flatpickr("input[type=date]", config);

    });
</script>

{{--script for dayof in sworn part--}}
<script>
    flatpickr("#dayOf", {
        dateFormat: "F Y"
    });
</script>
{{--Module 6 Script end--}}

</html>
