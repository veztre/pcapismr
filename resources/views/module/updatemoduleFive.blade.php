{{--<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layout.master')
    @section('content')
    {{View::make('layout.tabs')}}

    <title>Environmental Management Bureau Online Services - SMR - P.D. 1586</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>--}}
<x-app-layout>

    <title>Environmental Management Bureau Online Services - SMR - P.D. 1586</title>

    <div class="py-12 ">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
                {{View::make('module.tabs')}}
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">



                    <div class="container col ml-4 mt-4" style="align-content: center">

                        <form action="{{ route('update5', $users->id) }}" method="POST">
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

                                        <tbody>

                                        <tr>
                                            <td></td>
                                            <td style="text-align: center">ECC Condition/s</td>
                                            <td style="text-align:center">Status of Compliance</td>
                                            <td style="text-align: center">Actions Taken</td>
                                        </tr>

                                        @foreach ($oecondition as $oec)
                                            <tr>
                                                <td class="counterCell" style="text-align: right"></td>
                                                <td><input class="form-control" type="text" name="oecondition[{{$loop->index}}][ecc_condition]" value="{{$oec->ECC_Condition}}"></td>
                                                <td style="text-align: center">
                                                    <label style="margin-right: 10px"><input type="radio" name="oecondition[{{$loop->index}}][status_of_compliance]" value="yes" {{ $oec->Status_of_Compliance == 'yes' ? 'checked' : '' }} required>Yes</label>
                                                    <label style="margin-right: 10px"><input type="radio" name="oecondition[{{$loop->index}}][status_of_compliance]" value="no" {{ $oec->Status_of_Compliance == 'no' ? 'checked' : '' }} required>No</label>
                                                </td>
                                                <td><textarea class="form-control" type="text" name="oecondition[{{$loop->index}}][actions_taken]" style="overflow:scroll; overflow: hidden visible;">{{$oec->Actions_Taken}}</textarea></td>
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

                                        <tbody>

                                        <tr>
                                            <td></td>
                                            <td style="text-align: center">Enhancement/ Mitigation Measures</td>
                                            <td style="text-align: center">Status of Compliance</td>
                                            <td style="text-align: center">Actions Taken</td>
                                        </tr>

                                        @foreach ($evmpprogram as $evm)

                                                <tr>
                                                    <td class="counterCell" style="text-align: right"></td>
                                                    <td><input class="form-control" type="text" name="evmpprogram[{{$loop->index}}][evm_condition]" value="{{$evm->Enhancement_Mitigation_Measures}}"></td>
                                                    <td style="text-align: center">
                                                        <label style="margin-right: 10px"><input type="radio" name="evmpprogram[{{$loop->index}}][evm_status_of_compliance]" value="Yes" {{$evm->Status_of_Compliance == 'yes' ? 'checked' : ''}} required>Yes</label>
                                                        <label style="margin-right: 10px"><input type="radio" name="evmpprogram[{{$loop->index}}][evm_status_of_compliance]" value="No" {{$evm->Status_of_Compliance == 'no' ? 'checked' : ''}} required>No</label>
                                                    </td>
                                                    <td><textarea class="form-control" type="text" name="evmpprogram[{{$loop->index}}][evm_actions_taken]" style="overflow:scroll; overflow: hidden visible;">{{$evm->Actions_Taken}}</textarea></td>
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
                                                <a href="{{ route('module.moduleFour') }}" class="btn btn-lg border bg-light">Previous</a>
                                                <a href="{{ route('module.moduleSix') }}" class="btn btn-lg btn-info">Next</a>
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
{{--
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
</style>




<!-- SCRIPT FOR  AMBIENT AIR QUALITY MONITORING (IF REQUIRED AS PART OF ECC CONDITIONS)-->
<script type="text/javascript">
    var i = 0;
    $("#AAQMonitoring").click(function () { //button name
        ++i;
        $("#AAQM").append(
            ' <tr><td><input class="form-control" type="text" name="aaqmonitoring[]"></td><td><input class="form-control" type="date" name="aaqmonitoring[]"></td><td><input class="form-control" type="text" name="aaqmonitoring[]"></td><td><input class="form-control" type="text" name="aaqmonitoring[]"></td><td><input class="form-control" type="text" name="aaqmonitoring[]"></td><td><input class="form-control" type="text" name="aaqmonitoring[]"></td><td><input class="form-control" type="text" name=" "></td><td><input class="form-control" type="text" name=" "></td><td><input class="form-control" type="text" name=" "></td></tr>'
        ); //table name
    });
</script>

<!-- SCRIPT FOR  AMBIENT WATER QUALITY MONITORING (IF REQUIRED AS PART OF ECC CONDITIONS))-->
<script type="text/javascript">
    var i = 0;
    $("#AWQMonitoring").click(function () { //button name
        ++i;
        $("#AWQM").append(
            '<tr><td><input class="form-control" type="text" name="awqmonitoring1[]"></td><td><input class="form-control" type="date" name="awqmonitoring1[]"></td><td><input class="form-control" type="text" name="awqmonitoring1[]"></td><td><input class="form-control" type="text" name="awqmonitoring1[]"></td><td><input class="form-control" type="text" name="awqmonitoring1[]"></td><td><input class="form-control" type="text" name="awqmonitoring1[]"></td><td><input class="form-control" type="text" name="awqmonitoring1[]"></td><td><input class="form-control" type="text" name="awqmonitoring1[]"></td><td><input class="form-control" type="text" name="awqmonitoring1[]"></td><td><input class="form-control" type="text" name="awqmonitoring1[]"></td></tr>'
        ); //table name
    });
</script>

<!-- SCRIPT FOR OTHER ECC CONDITIONS -->
<script type="text/javascript">
    var i = 0;
    $("#OECondition").click(function () { //button name
        ++i;
        $("#OEC").append(
            '<tr><td class="counterCell " style="text-align: right" ></td><td><input class="form-control" type="text" name="oecondition[]"></td><td style="text-align: center"><form action=""><div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="oecondition[]"id="oecRadio1" value="Yes"><label class="form-check-label" for="oecRadio1"><p class="mt-3 mx-1">Yes</p></label></div><div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="oecondition[]"id="oecRadio2" value="No"><label class="form-check-label" for="oecRadio2"><p class="mt-3 mx-1">No</p></label></div></form></td><td><textarea class="form-control" type="text" name="oecondition[]"style="overflow:scroll; overflow: hidden visible;"></textarea></td></tr>'
        ); //table name
    });
</script>

<!-- SCRIPT FOR ENVIRONMENTAL MANAGEMENT PLAN/ PROGRAM -->
<script type="text/javascript">
    var i = 0;
    $("#EMPlanProgram").click(function () { //button name
        ++i;
        $("#EMPP").append(
            '<tr><td class="counterCell " style="text-align: right" ></td><td><input class="form-control" type="text" name=" "></td> <td style="text-align: center"> <form action=""> <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="inlineRadioOptions" id="emppRadio1" value="option1"> <label class="form-check-label" for="emppRadio1"><p class="mt-3 mx-1">Yes</p></label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="inlineRadioOptions" id="emppRadio2" value="option2"> <label class="form-check-label" for="emppRadio2"><p class="mt-3 mx-1">No</p></label> </div> </form> </td> <td><textarea class="form-control" type="text" name=" "  style="overflow:scroll; overflow: hidden visible;"></textarea></td> </tr>'
        ); //table name
    });
</script>



@endsection

</html>
--}}
