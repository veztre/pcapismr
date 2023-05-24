
<x-app-layout>

    <title>Environmental Management Bureau Online Services - SMR - P.D. 1586</title>

    <div class="py-12 ">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                {{View::make('module.tabs')}}
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">



                    <div class="container col ml-4 mt-4" style="align-content: center">

                        <form action="/saveData5" post="post">
                            @csrf
                            <!-- {{ csrf_field() }} -->
                            <br>

                            <div class="row">

                                <div class="col">

                                    <h1 style="text-align: center"> POLLUTION CONTROL ASSOCIATION OF THE PHILIPPINES, INC. (PCAPI)</h1>
                                    <h2 style="text-align: center">SELF- MONITORING REPORT TRAINING MODULE</h2>

                                </div>

                                <div class="card col-5 mr-4" style="float:right">

                                    <div class="mt-1 mx-3">
                                        Reference no.
                                    </div>

                                    <div class="card-body">
                                        <input type="text" class="form-control mt-0" placeholder="" value="{{ $referencen }}" readonly>
                                    </div>

                                </div>
                            </div>

                            <!-- Message input -->
                            <div class="col">
                                <p class="text-primary my-0">Note.</p>
                                <p class="text-primary my-0">1. Put " " for field not applicable to you.</p>
                                <p class="text-primary my-0">2. You Can now Export data on Each module by clicking "EXPORT" Link Below.
                                </p>
                            </div>

                            <div class="container">
                                <div class="row">
                                    <p class="p-1 mt-3  text-light" style="background-color:gray; font-size:20px ">
                                        MODULE 5: P.D. 1586
                                        <a href="/pdf5" class="btn btn-lg float-right " ><img src="/images/printpdflogo.png" class="inline" height="40px" width="50px" style="backgorund-color:gray;"> EXPORT PDF</a>
                                    </p>

                                </div>
                            </div>



                            <div class="container ">
                                <table class="table table-borderless table-hover">
                                    <h3 class="mt-3 mx-2 text-success">AMBIENT AIR QUALITY MONITORING (IF REQUIRED AS PART OF ECC
                                        CONDITIONS)</h3>

                                    <!-- AAQM -->
                                    <table class="w3-table w3-striped w3-border" id="AAQM">

                                        <tbody>

                                        <tr>
                                            <td style="text-align: center">Station Description</td>
                                            <td style="text-align: center">Date</td>
                                            <td style="text-align: center">Noise Level (dB)</td>
                                            <td style="text-align: center">CO (mg/ Ncm)</td>
                                            <td style="text-align: center">NOx (mg/Ncm)</td>
                                            <td style="text-align: center">Particulates (mg/Ncm)</td>
                                            <td><input class="form-control" type="text" name="aaqname_parameter1" value="{{ old('aaqname_parameter1') }}"></td>
                                            <td><input class="form-control" type="text" name="aaqname_parameter2" value="{{ old('aaqname_parameter2') }}"></td>
                                            <td><input class="form-control" type="text" name="aaqname_parameter3" value="{{ old('aaqname_parameter3') }}"></td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td style="text-align: center">mg/ Ncm</td>
                                            <td style="text-align: center">mg/ Ncm</td>
                                            <td style="text-align: center">mg/ Ncm</td>
                                        </tr>

                                        <tr>
                                            <td><input class="form-control" type="text" name="aaqmonitoring[]" value="{{ old('aaqmonitoring[]', ' ') }}"></td>
                                            <td><input class="form-control" type="date" name="aaqmonitoring[]" value="{{ old('aaqmonitoring[]', '2001-01-01') }}"></td>
                                            <td><input class="form-control" type="text" name="aaqmonitoring[]" value="{{ old('aaqmonitoring[]', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="aaqmonitoring[]" value="{{ old('aaqmonitoring[]', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="aaqmonitoring[]" value="{{ old('aaqmonitoring[]', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="aaqmonitoring[]" value="{{ old('aaqmonitoring[]', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="aaqmonitoring[]" value="{{ old('aaqmonitoring[]', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="aaqmonitoring[]" value="{{ old('aaqmonitoring[]', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="aaqmonitoring[]" value="{{ old('aaqmonitoring[]', ' ') }}"></td>

                                        </tr>

                                        </tbody>

                                    </table>
                                    <td><button type="button" name="add" id="AAQMonitoring" class="btn btn-outline-primary mt-3">+</button></td>


                                </table>

                                <table class="table table-borderless table-hover">
                                    <h3 class="mt-3 mx-2 text-success">OTHER ECC CONDITIONS</h3>

                                    <!-- OEC -->
                                    <table class="table"  id="OEC">

                                        <thead>

                                        <tr>
                                            <th></th>
                                            <th style="text-align: center">ECC Condition/s</th>
                                            <th style="text-align:center">Status of Compliance</th>
                                            <th style="text-align: center">Actions Taken</th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        <tr>
                                            <td class="counterCell" style="text-align: right"></td>
                                            <td><input class="form-control" type="text" name="oecondition[0][ecc_condition]"></td>
                                            <td style="text-align: center">
                                                <label style="margin-right: 10px"><input type="radio" name="oecondition[0][status_of_compliance]" value="Yes" required>Yes</label>
                                                <label style="margin-right: 10px"><input type="radio" name="oecondition[0][status_of_compliance]" value="No" required>No</label>
                                            </td>
                                            <td><textarea class="form-control" type="text" name="oecondition[0][actions_taken]" style="overflow:scroll; overflow: hidden visible;"></textarea></td>
                                        </tr>

                                        </tbody>

                                    </table>
                                    <td></td>
                                    <td><button type="button" name="add" id="OECondition" class="btn btn-outline-primary mt-3" style="margin-left: 3.7%">+</button></td>
                                </table>



                                <table class="table table-borderless table-hover">
                                    <h3 class="mt-3 mx-2 text-success">AMBIENT WATER QUALITY MONITORING (IF REQUIRED AS PART OF ECC
                                        CONDITIONS)</h3>


                                    <!-- AWQM -->
                                    <table class="w3-table w3-striped w3-border" id="AWQM">

                                        <tbody>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><input class="form-control" type="text" name="name1" value="{{ old('name1', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="name2" value="{{ old('name2', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="name3" value="{{ old('name3', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="name4" value="{{ old('name4', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="name5" value="{{ old('name5', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="name6" value="{{ old('name6', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="name7" value="{{ old('name7', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="name8" value="{{ old('name8', ' ') }}"></td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td style="text-align: center">name</td>
                                            <td style="text-align: center">name</td>
                                            <td style="text-align: center">name</td>
                                            <td style="text-align: center">name</td>
                                            <td style="text-align: center">name</td>
                                            <td style="text-align: center">name</td>
                                            <td style="text-align: center">name</td>
                                            <td style="text-align: center">name</td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><input class="form-control" type="text" name="unit1" value="{{ old('unit1', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="unit2" value="{{ old('unit2', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="unit3" value="{{ old('unit3', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="unit4" value="{{ old('unit4', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="unit5" value="{{ old('unit5', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="unit6" value="{{ old('unit6', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="unit7" value="{{ old('unit7', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="unit8" value="{{ old('unit8', ' ') }}"></td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: center">Station Description</td>
                                            <td style="text-align: center">Date</td>
                                            <td style="text-align: center">unit</td>
                                            <td style="text-align: center">unit</td>
                                            <td style="text-align: center">unit</td>
                                            <td style="text-align: center">unit</td>
                                            <td style="text-align: center">unit</td>
                                            <td style="text-align: center">unit</td>
                                            <td style="text-align: center">unit</td>
                                            <td style="text-align: center">unit</td>
                                        </tr>

                                        <tr>
                                            <td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{ old('awqmonitoring1[]', ' ') }}"></td>
                                            <td><input class="form-control" type="date" name="awqmonitoring1[]" value="{{ old('awqmonitoring1[]', '2001-01-01') }}"></td>
                                            <td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{ old('awqmonitoring1[]', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{ old('awqmonitoring1[]', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{ old('awqmonitoring1[]', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{ old('awqmonitoring1[]', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{ old('awqmonitoring1[]', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{ old('awqmonitoring1[]', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{ old('awqmonitoring1[]', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{ old('awqmonitoring1[]', ' ') }}"></td>

                                        </tr>

                                        </tbody>

                                    </table>
                                    <td><button type="button" name="add" id="AWQMonitoring" class="btn btn-outline-primary mt-3">+</button></td>
                                </table>

                                <table class="table table-borderless table-hover">
                                    <h3 class="mt-3 mx-2 text-success">ENVIRONMENTAL MANAGEMENT PLAN / PROGRAMOTHER ECC CONDITIONS</h3>

                                    <!-- ENVIRONMENTAL MANAGEMENT PLAN/ PROGRAM -->
                                    <table class="table"  id="EMPP">

                                        <thead>

                                        <tr>
                                            <th></th>
                                            <th style="text-align: center">Enhancement/ Mitigation Measures</th>
                                            <th style="text-align: center">Status of Compliance</th>
                                            <th style="text-align: center">Actions Taken</th>
                                        </tr>

                                        </thead>


                                        <tbody>
                                        <tr>
                                            <td class="counterCell" style="text-align: right"></td>
                                            <td><input class="form-control" type="text" name="evmpprogram[0][evm_condition]"></td>
                                            <td style="text-align: center">
                                                <label style="margin-right: 10px"><input type="radio" name="evmpprogram[0][evm_status_of_compliance]" value="Yes" required>Yes</label>
                                                <label style="margin-right: 10px"><input type="radio" name="evmpprogram[0][evm_status_of_compliance]" value="No" required>No</label>
                                            </td>
                                            <td><textarea class="form-control" type="text" name="evmpprogram[0][evm_actions_taken]" style="overflow:scroll; overflow: hidden visible;"></textarea></td>
                                        </tr>
                                        </tbody>

                                    </table>
                                    <td></td>
                                    <td><button type="button" name="add" id="EMPlanProgram" class="btn btn-outline-primary mt-3" style="margin-left: 3.7%">+</button></td>
                                </table>


                                <table class="table table-borderless table-hover">
                                    <h3 class="mt-3 mx-2 text-success">SOLID WASTE CHARACTERIZATION/ INFORMATION</h3>

                                    <!-- SOLID WASTE CHARACTERIZATION/ INFORMATION -->
                                    <table class="table" id="SWCI">

                                        <tbody>

                                        <tr>
                                            <td></td>
                                            <td style="text-align: center">Recyclable</td>
                                            <td style="text-align: center">Biodegradable</td>
                                            <td style="text-align: center">Residual</td>
                                        </tr>

                                        <tr>
                                            <td>Average Quantity Generated (tons/ month)</td>
                                            <td><input class="form-control" type="text" name="AQG1" value="{{ old('AQG1', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="AQG2" value="{{ old('AQG2', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="AQG3" value="{{ old('AQG3', ' ') }}"></td>
                                        </tr>

                                        <tr>
                                            <td>Total Quantity Generated (tons/ quarter)</td>
                                            <td><input class="form-control" type="text" name="TQG1" value="{{ old('TQG1', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="TQG2" value="{{ old('TQG2', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="TQG3" value="{{ old('TQG3', ' ') }}"></td>
                                        </tr>

                                        <tr>
                                            <td>Average Quantity Collected (tons/ month)</td>
                                            <td><input class="form-control" type="text" name="AQC1" value="{{ old('AQC1', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="AQC2" value="{{ old('AQC2', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="AQC3" value="{{ old('AQC3', ' ') }}"></td>
                                        </tr>

                                        <tr>
                                            <td>Total Quantity Collected (tons/quarter)</td>
                                            <td><input class="form-control" type="text" name="TQC1" value="{{ old('TQC1', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="TQC2" value="{{ old('TQC2', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="TQC3" value="{{ old('TQC3', ' ') }}"></td>
                                        </tr>

                                        <tr>
                                            <td>Entity in charge of collection</td>
                                            <td><input class="form-control" type="text" name="EICC1" value="{{ old('EICC1', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="EICC2" value="{{ old('EICC2', ' ') }}"></td>
                                            <td><input class="form-control" type="text" name="EICC3" value="{{ old('EICC3', ' ') }}"></td>
                                        </tr>

                                        </tbody>


                                    </table>

                                </table>
                                <table class="table" id="BDSWMP">

                                    <tbody>
                                    <tr>

                                        <td style="width: 100%">Brief Description of Solid Waste Management Plan (e.g., waste
                                            reduction, segregation, recycling)</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            </tr>

                            <tr>
                                <td><textarea class="form-control" type="text" name="description"
                                              style="overflow:scroll; overflow: hidden visible; width: 100%;" value="{{ old('EICC3') }}"></textarea></td>
                            </tr>
                            </tbody>

                            </table>

                            </table>


                            <!-- 13th row -->
                            <div class="container">
                                <div class="col mb-3">
                                    <div style="float: right" class="mb-3">
                                        <a href="{{ url('moduleFour') }}" class="btn btn-lg border bg-light">Previous</a>
                                        <a href="{{ url('moduleSix') }}" class="btn btn-lg btn-info">Next</a>
                                        <input type="submit" value="Save Page" class="btn btn-lg btn-primary">
                                    </div>
                                </div>
                            </div>


                        </form>


                    </div>



                </div>

            </div>
        </div>
    </div>

</x-app-layout>


<!-- Script for moduleFive.blade.php (Save functionality) -->
<script type="text/javascript">
    $(document).ready(function() {
        var counter = <?php echo count($oecondition instanceof Illuminate\Database\Eloquent\Collection ? $oecondition->all() : []); ?>;

        $("#OECondition").click(function () {
            ++counter;

            // Capture the input values
            var eccConditionValue = $('input[name="oecondition[' + counter + '][ecc_condition]"]').val() || "";
            var statusOfComplianceValue = $('input[name="oecondition[' + counter + '][status_of_compliance]"]:checked').val() || "";
            var actionsTakenValue = $('textarea[name="oecondition[' + counter + '][actions_taken]"]').val() || "";

            // Add the new row with the captured values
            $("#OEC").append(
                '<tr>' +
                '<td class="counterCell" style="text-align: right"></td>' +
                '<td><input class="form-control" type="text" name="oecondition[' + counter +'][ecc_condition]" value="' + eccConditionValue + '"></td>' +
                '<td style="text-align: center">' +
                '<label style="margin-right: 10px"><input type="radio" name="oecondition[' + counter + '][status_of_compliance]" value="Yes" required' + (statusOfComplianceValue === 'Yes' ? ' checked' : '') + '>Yes</label>' +
                '<label style="margin-right: 10px"><input type="radio" name="oecondition[' + counter + '][status_of_compliance]" value="No" required' + (statusOfComplianceValue === 'No' ? ' checked' : '') + '>No</label>' +
                '</td>' +
                '<td><textarea class="form-control" type="text" name="oecondition[' + counter + '][actions_taken]" style="overflow:scroll; overflow: hidden visible;">' + actionsTakenValue + '</textarea></td>' +
                '</tr>'
            );
        });
    });
</script>


<!-- SCRIPT FOR ENVIRONMENTAL MANAGEMENT PLAN/ PROGRAM  -->
<script type="text/javascript">
    $(document).ready(function() {
        var counter = 0;
        $("#EMPlanProgram").click(function () {
            ++counter;

            // Capture the input values
            var evmConditionValue = $('input[name="evmpprogram[' + counter + '][evm_condition]"]').val() || "";
            var statusOfComplianceValue = $('input[name="evmpprogram[' + counter + '][evm_status_of_compliance]"]:checked').val() || "";
            var actionsTakenValue = $('textarea[name="evmpprogram[' + counter + '][evm_actions_taken]"]').val() || "";

            // Add the new row with the captured values
            $("#EMPP").append(
                '<tr>' +
                '<td class="counterCell" style="text-align: right"></td>' +
                '<td><input class="form-control" type="text" name="evmpprogram[' + counter + '][evm_condition]" value="' + evmConditionValue + '"></td>' +
                '<td style="text-align: center">' +
                '<label style="margin-right: 10px"><input type="radio" name="evmpprogram[' + counter + '][evm_status_of_compliance]" value="Yes" required' + (statusOfComplianceValue === 'Yes' ? ' checked' : '') + '>Yes</label>' +
                '<label style="margin-right: 10px"><input type="radio" name="evmpprogram[' + counter + '][evm_status_of_compliance]" value="No" required' + (statusOfComplianceValue === 'No' ? ' checked' : '') + '>No</label>' +
                '</td>' +
                '<td><textarea class="form-control" type="text" name="evmpprogram[' + counter + '][evm_actions_taken]" style="overflow:scroll; overflow: hidden visible;">' + actionsTakenValue + '</textarea></td>' +
                '</tr>'
            );
        });
    });
</script>
