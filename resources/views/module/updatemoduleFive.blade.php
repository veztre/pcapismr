
<x-app-layout>

    <title>Environmental Management Bureau Online Services - SMR - P.D. 1586</title>

    <div class="py-12 ">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                {{View::make('module.tabs')}}
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">



                    <div class="container col ml-4 mt-4" style="align-content: center">

                        <form action="{{ route('moduleFive.update', ['moduleFive' => Auth::user()->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
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
                                        @foreach ($referencens as $ref)

                                            <input type="text" class="form-control mt-0" placeholder=""  value="{{$ref->ref_no}}" readonly >

                                        @endforeach
                                    </div>

                                </div>
                            </div>

                            <!-- Message input -->
                            <div class="col">
                                <p class="text-primary my-0">Note.</p>
                                <p class="text-primary my-0">1. Put "N/A" for field not applicable to you.</p>
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
                                        @foreach ($aaqmonitoring_parameter as $parameter)

                                                <tr>
                                                    <td style="text-align: center">Station Description</td>
                                                    <td style="text-align: center">Date</td>
                                                    <td style="text-align: center">Noise Level (dB)</td>
                                                    <td style="text-align: center">CO (mg/ Ncm)</td>
                                                    <td style="text-align: center">NOx (mg/Ncm)</td>
                                                    <td style="text-align: center">Particulates (mg/Ncm)</td>
                                                    <td><input class="form-control" type="text" name="aaqname_parameter1" value="{{$parameter->aaqname_parameter1}}"></td>
                                                    <td><input class="form-control" type="text" name="aaqname_parameter2" value="{{$parameter->aaqname_parameter2}}"></td>
                                                    <td><input class="form-control" type="text" name="aaqname_parameter3" value="{{$parameter->aaqname_parameter3}}"></td>
                                                </tr>

                                        @endforeach

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
                                        @foreach ($aaqmonitoring as $aaqmonitor)

                                                <tr>
                                                    <td><input class="form-control" type="text" name="aaqmonitoring[]" value="{{$aaqmonitor->station_description}}"></td>
                                                    <td><input class="form-control" type="date" name="aaqmonitoring[]" value="{{$aaqmonitor->date}}"></td>
                                                    <td><input class="form-control" type="text" name="aaqmonitoring[]" value="{{$aaqmonitor->noise_level_db}}"></td>
                                                    <td><input class="form-control" type="text" name="aaqmonitoring[]" value="{{$aaqmonitor->CO_mg_ncm}}"></td>
                                                    <td><input class="form-control" type="text" name="aaqmonitoring[]" value="{{$aaqmonitor->NOx_mg_ncm}}"></td>
                                                    <td><input class="form-control" type="text" name="aaqmonitoring[]" value="{{$aaqmonitor->particulates_mg_ncm}}"></td>
                                                    <td><input class="form-control" type="text" name="aaqmonitoring[]" value="{{$aaqmonitor->Value_parameter1}}"></td>
                                                    <td><input class="form-control" type="text" name="aaqmonitoring[]" value="{{$aaqmonitor->Value_parameter2}}"></td>
                                                    <td><input class="form-control" type="text" name="aaqmonitoring[]" value="{{$aaqmonitor->Value_parameter3}}"></td>

                                                </tr>

                                        @endforeach

                                        </tbody>

                                    </table>
                                    <td><button type="button" name="add" id="AAQMonitoring" class="btn btn-outline-primary mt-3">+</button></td>


                                </table>

                                <table class="table table-borderless table-hover">
                                    <h3 class="mt-3 mx-2 text-success">OTHER ECC CONDITIONS</h3>

                                    <!-- OEC -->
                                    <table class="table" id="OEC">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th style="text-align: center">ECC Condition/s</th>
                                            <th style="text-align:center">Status of Compliance</th>
                                            <th style="text-align: center">Actions Taken</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($oecondition as $index => $oec)
                                            <tr>
                                                <td class="counterCell" style="text-align: right"></td>
                                                <td><input class="form-control" type="text" name="oecondition[{{ $index }}][ecc_condition]" value="{{ isset($oec->ECC_Condition) ? $oec->ECC_Condition : '' }}"></td>
                                                <td style="text-align: center">
                                                    <label style="margin-right: 10px">
                                                        <input type="radio" name="oecondition[{{ $index }}][status_of_compliance]" value="Yes" {{ isset($oec->Status_of_Compliance) && $oec->Status_of_Compliance == 'Yes' ? 'checked' : '' }} required>Yes
                                                    </label>
                                                    <label style="margin-right: 10px">
                                                        <input type="radio" name="oecondition[{{ $index }}][status_of_compliance]" value="No" {{ isset($oec->Status_of_Compliance) && $oec->Status_of_Compliance == 'No' ? 'checked' : '' }} required>No
                                                    </label>
                                                </td>
                                                <td>
                                                    <textarea class="form-control" type="text" name="oecondition[{{ $index }}][actions_taken]" style="overflow:scroll; overflow: hidden visible;">{{ isset($oec->Actions_Taken) ? $oec->Actions_Taken : '' }}</textarea>
                                                </td>
                                            </tr>
                                        @endforeach


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
                                        @foreach ($awqmonitoring as $awq)

                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td><input class="form-control" type="text" name="name1" value="{{$awq->name1}}"></td>
                                                    <td><input class="form-control" type="text" name="name2" value="{{$awq->name2}}"></td>
                                                    <td><input class="form-control" type="text" name="name3" value="{{$awq->name3}}"></td>
                                                    <td><input class="form-control" type="text" name="name4" value="{{$awq->name4}}"></td>
                                                    <td><input class="form-control" type="text" name="name5" value="{{$awq->name5}}"></td>
                                                    <td><input class="form-control" type="text" name="name6" value="{{$awq->name6}}"></td>
                                                    <td><input class="form-control" type="text" name="name7" value="{{$awq->name7}}"></td>
                                                    <td><input class="form-control" type="text" name="name8" value="{{$awq->name8}}"></td>
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
                                                    <td><input class="form-control" type="text" name="unit1" value="{{$awq->unit1}}"></td>
                                                    <td><input class="form-control" type="text" name="unit2" value="{{$awq->unit2}}"></td>
                                                    <td><input class="form-control" type="text" name="unit3" value="{{$awq->unit3}}"></td>
                                                    <td><input class="form-control" type="text" name="unit4" value="{{$awq->unit4}}"></td>
                                                    <td><input class="form-control" type="text" name="unit5" value="{{$awq->unit5}}"></td>
                                                    <td><input class="form-control" type="text" name="unit6" value="{{$awq->unit6}}"></td>
                                                    <td><input class="form-control" type="text" name="unit7" value="{{$awq->unit7}}"></td>
                                                    <td><input class="form-control" type="text" name="unit8" value="{{$awq->unit8}}"></td>
                                                </tr>

                                        @endforeach

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

                                        @foreach ($awqmonitoring1 as $awq1)

                                                <tr>
                                                    <td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{$awq1->Station_Description}}"></td>
                                                    <td><input class="form-control" type="date" name="awqmonitoring1[]" value="{{$awq1->Date}}"></td>
                                                    <td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{$awq1->value1}}"></td>
                                                    <td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{$awq1->value2}}"></td>
                                                    <td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{$awq1->value3}}"></td>
                                                    <td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{$awq1->value4}}"></td>
                                                    <td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{$awq1->value5}}"></td>
                                                    <td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{$awq1->value6}}"></td>
                                                    <td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{$awq1->value7}}"></td>
                                                    <td><input class="form-control" type="text" name="awqmonitoring1[]" value="{{$awq1->value8}}"></td>

                                                </tr>

                                        @endforeach

                                        </tbody>

                                    </table>
                                    <td><button type="button" name="add" id="AWQMonitoring" class="btn btn-outline-primary mt-3">+</button></td>
                                </table>

                                <table class="table table-borderless table-hover">
                                    <h3 class="mt-3 mx-2 text-success">ENVIRONMENTAL MANAGEMENT PLAN / PROGRAMOTHER ECC CONDITIONS</h3>

                                    <!-- ENVIRONMENTAL MANAGEMENT PLAN/ PROGRAM -->
                                    <table class="table" id="EMPP">

                                        <thead>

                                        <tr>
                                            <th></th>
                                            <th style="text-align: center">Enhancement/ Mitigation Measures</th>
                                            <th style="text-align: center">Status of Compliance</th>
                                            <th style="text-align: center">Actions Taken</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($evmpprogram as $evm)

                                                <tr>
                                                    <td class="counterCell" style="text-align: right"></td>
                                                    <td><input class="form-control" type="text" name="evmpprogram[{{$loop->index}}][evm_condition]" value="{{$evm ? $evm->Enhancement_Mitigation_Measures : ''}}"></td>
                                                    <td style="text-align: center">
                                                        <label style="margin-right: 10px"><input type="radio" name="evmpprogram[{{$loop->index}}][evm_status_of_compliance]"
                                                                                                 value="Yes" {{$evm && $evm->Status_of_Compliance == 'Yes' ? 'checked' : ''}} required>Yes</label>
                                                        <label style="margin-right: 10px"><input type="radio" name="evmpprogram[{{$loop->index}}][evm_status_of_compliance]"
                                                                                                 value="No" {{$evm && $evm->Status_of_Compliance == 'No' ? 'checked' : ''}} required>No</label>
                                                    </td>
                                                    <td><textarea class="form-control" type="text" name="evmpprogram[{{$loop->index}}][evm_actions_taken]" style="overflow:scroll; overflow: hidden visible;">{{$evm ? $evm->Actions_Taken : ''}}</textarea></td>
                                                </tr>

                                        @endforeach

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
                                        @foreach ($aqg as $aqg)

                                                <tr>
                                                    <td>Average Quantity Generated (tons/ month)</td>
                                                    <td><input class="form-control" type="text" name="AQG1" value="{{$aqg->Recyclable}}"></td>
                                                    <td><input class="form-control" type="text" name="AQG2" value="{{$aqg->Biodegradable}}"></td>
                                                    <td><input class="form-control" type="text" name="AQG3" value="{{$aqg->Residual}}"></td>
                                                </tr>

                                        @endforeach

                                        @foreach ($tqg as $tqg)

                                                <tr>
                                                    <td>Total Quantity Generated (tons/ quarter)</td>
                                                    <td><input class="form-control" type="text" name="TQG1" value="{{$tqg->Recyclable}}"></td>
                                                    <td><input class="form-control" type="text" name="TQG2" value="{{$tqg->Biodegradable}}"></td>
                                                    <td><input class="form-control" type="text" name="TQG3" value="{{$tqg->Residual}}"></td>
                                                </tr>
                                        @endforeach

                                        @foreach ($aqc as $aqc)


                                                <tr>
                                                    <td>Average Quantity Collected (tons/ month)</td>
                                                    <td><input class="form-control" type="text" name="AQC1" value="{{$aqc->Recyclable}}"></td>
                                                    <td><input class="form-control" type="text" name="AQC2" value="{{$aqc->Biodegradable}}"></td>
                                                    <td><input class="form-control" type="text" name="AQC3" value="{{$aqc->Residual}}"></td>
                                                </tr>

                                        @endforeach


                                        @foreach ($tqc as $tqc)

                                                <tr>
                                                    <td>Total Quantity Collected (tons/quarter)</td>
                                                    <td><input class="form-control" type="text" name="TQC1" value="{{$tqc->Recyclable}}"></td>
                                                    <td><input class="form-control" type="text" name="TQC2" value="{{$tqc->Biodegradable}}"></td>
                                                    <td><input class="form-control" type="text" name="TQC3" value="{{$tqc->Residual}}"></td>
                                                </tr>

                                        @endforeach

                                        @foreach ($eicc as $eicc)


                                                <tr>
                                                    <td>Entity in charge of collection</td>
                                                    <td><input class="form-control" type="text" name="EICC1" value="{{$eicc->Recyclable}}"></td>
                                                    <td><input class="form-control" type="text" name="EICC2" value="{{$eicc->Biodegradable}}"></td>
                                                    <td><input class="form-control" type="text" name="EICC3" value="{{$eicc->Residual}}"></td>
                                                </tr>

                                        @endforeach

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
                            @foreach ($description as $des)


                                    <tr>
                                        <td><textarea class="form-control" type="text" name="description"
                                                      style="overflow:scroll; overflow: hidden visible; width: 100%;">{{$des->description}}</textarea></td>
                                    </tr>

                                    @endforeach

                                    </tbody>

                                    </table>

                                    </table>


                                    <!-- 13th row -->
                                    <div class="container">
                                        <div class="col mb-3">
                                            <div style="float: right" class="mb-3">
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

<!-- Script for updatemoduleFive.blade.php (Update functionality) -->
<script type="text/javascript">
    $(document).ready(function() {
        var counter = <?php echo count($oecondition ?? []); ?>;
        $("#OECondition").click(function () {
            ++counter;
            // Add the new row with the default value of the radio button set to empty
            $("#OEC").append(
                '<tr>' +
                '<td class="counterCell" style="text-align: right"></td>' +
                '<td><input class="form-control" type="text" name="oecondition[' + counter +'][ecc_condition]" value=""></td>' +
                '<td style="text-align: center">' +
                '<label style="margin-right: 10px"><input type="radio" name="oecondition[' + counter + '][status_of_compliance]" value="Yes" required>Yes</label>' +
                '<label style="margin-right: 10px"><input type="radio" name="oecondition[' + counter + '][status_of_compliance]" value="No" required>No</label>' +
                '</td>' +
                '<td><textarea class="form-control" type="text" name="oecondition[' + counter + '][actions_taken]" style="overflow:scroll; overflow: hidden visible;"></textarea></td>' +
                '</tr>'
            );
        });

        // Populate the fields with existing data
        @foreach ($oecondition as $index => $oec)
        $("input[name='oecondition[{{$index}}][ecc_condition]']").val("{{ $oec ? $oec->ecc_condition : '' }}");
        $("input[name='oecondition[{{$index}}][status_of_compliance]'][value='{{ $oec ? $oec->status_of_compliance : '' }}']").prop('checked', true);
        $("textarea[name='oecondition[{{$index}}][actions_taken]']").val("{{ $oec ? $oec->actions_taken : '' }}");
        @endforeach
    });
</script>
