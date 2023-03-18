{{--<!DOCTYPE html>
<html lang="en">
<head>
    @extends('module.master')
    @section('content')
    {{View::make('module.tabs')}}



    <title>Environmental Management Bureau Online Services - SMR - RA 6969</title>
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
    <title>Environmental Management Bureau Online Services - SMR - RA 6969</title>
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                {{View::make('module.tabs')}}</div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="container m-auto mb-4" style="align-content: center">
                        <div class="card m-auto mb-4">
                            <div class="col">

                                <form action="{{ route('update2', $users->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <!-- {{csrf_field()}}-->
                                    <br>

                                    <div class="row">
                                        <div class="col">

                                            <h1 style="text-align:center"> POLLUTION CONTROL ASSOCIATION OF THE PHILIPPINES, INC. (PCAPI)</h1>
                                            <h2 style="text-align:center">SELF- MONITORING REPORT TRAINING MODULE</h2>

                                        </div>

                                        <div class="card col-5 mr-6" style="float:right">

                                            <div class="mt-1 mx-3">
                                                Reference no.
                                            </div>

                                            <div class="card-body">
                                                @foreach ($referencens as $ref)
                                                    @if ($ref->userid == Auth::id())
                                                        <input type="text" class="form-control mt-0" placeholder=""  value="{{$ref->ref_no}}" readonly >
                                                    @endif
                                                @endforeach
                                            </div>

                                        </div>

                                    </div>

                                    <!-- Message Input -->
                                    <div class="col">
                                        <p class="text-primary my-0">Note.</p>
                                        <p class="text-primary my-0">1. Put "N/A" for field not applicable to you.</p>
                                        <p class="text-primary my-0">2. You Can now Export data on Each module by clicking "EXPORT" Link Below.</p>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <p class="p-1 mt-3  text-light" style="background-color:gray; font-size:20px ">
                                                MODULE 2: RA 6969
                                                <a href="/pdf2" class="btn btn-lg float-right " ><img src="/images/printpdflogo.png" class="inline" height="40px" width="50px" style="backgorund-color:gray;"> EXPORT PDF</a>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <table class="table table-borderless table-hover" >
                                            <thead>
                                            <tr><h3 class="mt-3 mx-2 text-success">B. HAZARDOUS WASTE GENERATOR</h3></tr>
                                            </thead>

                                            <thead>
                                            <tr><h3 class="mt-3 mx-2 text-success">HAZARDOUS WASTE GENERATION</h3></tr>
                                            </thead>
                                        </table>

                                        <table class="w3-table">

                                            <tbody id="hazzardous">
                                            <tr>
                                                <td></td>
                                                <td>HW No.</td>
                                                <td>HW Class</td>
                                                <td>HW Nature</td>
                                                <td>HW Cataloguing</td>
                                                <td></td>
                                                <td scope="col" colspan="4" style="text-align:center">Remaining HW from Previous Reports</td>
                                                <td scope="col" colspan="4" style="text-align:center">HW Generated for the Quarter</td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td style="text-align:center">Quantity</td>
                                                <td style="text-align:center">Unit</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td style="text-align:center">Quantity</td>
                                                <td style="text-align:center">Unit</td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                            @foreach ($hwGeneration as $hwGen)
                                                @if ($hwGen->userid == Auth::id())
                                                    <tr>
                                                        <td class="counterCell " style="text-align: right" >
                                                        </td>
                                                        <td><select class="form-select" name="hwGeneration[]" style="width: fit-content" >

                                                                <option value="A101" {{ $hwGen->HWno === 'A101' ? 'selected' : '' }}>A101</option>
                                                                <option value="A201" {{ $hwGen->HWno === 'A201' ? 'selected' : '' }}>A201</option>
                                                                <option value="B202" {{ $hwGen->HWno === 'B202' ? 'selected' : '' }}>B202</option>
                                                                <option value="B201" {{ $hwGen->HWno === 'B201' ? 'selected' : '' }}>B201</option>
                                                                <option value="B202" {{ $hwGen->HWno === 'B202' ? 'selected' : '' }}>B202</option>
                                                                <option value="B203" {{ $hwGen->HWno === 'B203' ? 'selected' : '' }}>B203</option>
                                                                <option value="B204" {{ $hwGen->HWno === 'B204' ? 'selected' : '' }}>B204</option>
                                                                <option value="B205" {{ $hwGen->HWno === 'B205' ? 'selected' : '' }}>B205</option>
                                                                <option value="B206" {{ $hwGen->HWno === 'B206' ? 'selected' : '' }}>B206</option>
                                                                <option value="B207" {{ $hwGen->HWno === 'B207' ? 'selected' : '' }}>B207></option>
                                                                <option value="B208" {{ $hwGen->HWno === 'B208' ? 'selected' : '' }}>B208></option>
                                                                <option value="B209" {{ $hwGen->HWno === 'B209' ? 'selected' : '' }}>B209></option>
                                                                <option value="C301" {{ $hwGen->HWno === 'C301' ? 'selected' : '' }}>C301</option>
                                                                <option value="C302" {{ $hwGen->HWno === 'C302' ? 'selected' : '' }}>C302</option>
                                                                <option value="C303" {{ $hwGen->HWno === 'C303' ? 'selected' : '' }}>C303</option>
                                                                <option value="C304" {{ $hwGen->HWno === 'C304' ? 'selected' : '' }}>C304</option>
                                                                <option value="C305" {{ $hwGen->HWno === 'C305' ? 'selected' : '' }}>C305</option>
                                                                <option value="C399" {{ $hwGen->HWno === 'C399' ? 'selected' : '' }}>C399</option>
                                                                <option value="D401" {{ $hwGen->HWno === 'D401' ? 'selected' : '' }}>D401</option>
                                                                <option value="D402" {{ $hwGen->HWno === 'D402' ? 'selected' : '' }}>D402</option>
                                                                <option value="D403" {{ $hwGen->HWno === 'D403' ? 'selected' : '' }}>D403</option>
                                                                <option value="D404" {{ $hwGen->HWno === 'D404' ? 'selected' : '' }}>D404</option>
                                                                <option value="D405" {{ $hwGen->HWno === 'D405' ? 'selected' : '' }}>D405</option>
                                                                <option value="D406" {{ $hwGen->HWno === 'D406' ? 'selected' : '' }}>D406</option>
                                                                <option value="D407" {{ $hwGen->HWno === 'D407' ? 'selected' : '' }}>D407</option>
                                                                <option value="D408" {{ $hwGen->HWno === 'D408' ? 'selected' : '' }}>D408</option>
                                                                <option value="D499" {{ $hwGen->HWno === 'D499' ? 'selected' : '' }}>D499</option>
                                                                <option value="E501" {{ $hwGen->HWno === 'E501' ? 'selected' : '' }}>E501</option>
                                                                <option value="E502" {{ $hwGen->HWno === 'E502' ? 'selected' : '' }}>E502</option>
                                                                <option value="E503" {{ $hwGen->HWno === 'E503' ? 'selected' : '' }}>E503</option>
                                                                <option value="E599" {{ $hwGen->HWno === 'E599' ? 'selected' : '' }}>E599</option>
                                                                <option value="F601" {{ $hwGen->HWno === 'F601' ? 'selected' : '' }}>F601</option>
                                                                <option value="F602" {{ $hwGen->HWno === 'F602' ? 'selected' : '' }}>F602</option>
                                                                <option value="F603" {{ $hwGen->HWno === 'F603' ? 'selected' : '' }}>F603</option>
                                                                <option value="F604" {{ $hwGen->HWno === 'F604' ? 'selected' : '' }}>F604</option>
                                                                <option value="F699" {{ $hwGen->HWno === 'F699' ? 'selected' : '' }}>F699</option>
                                                                <option value="G703" {{ $hwGen->HWno === 'G703' ? 'selected' : '' }}>G703</option>
                                                                <option value="G704" {{ $hwGen->HWno === 'G704' ? 'selected' : '' }}>G704</option>
                                                                <option value="H802" {{ $hwGen->HWno === 'H802' ? 'selected' : '' }}>H802</option>
                                                                <option value="I101" {{ $hwGen->HWno === 'I101' ? 'selected' : '' }}>I101</option>
                                                                <option value="I102" {{ $hwGen->HWno === 'I102' ? 'selected' : '' }}>I102</option>
                                                                <option value="I103" {{ $hwGen->HWno === 'I103' ? 'selected' : '' }}>I103</option>
                                                                <option value="I104" {{ $hwGen->HWno === 'I104' ? 'selected' : '' }}>I104</option>
                                                                <option value="J201" {{ $hwGen->HWno === 'J201' ? 'selected' : '' }}>J201</option>
                                                                <option value="K301" {{ $hwGen->HWno === 'K301' ? 'selected' : '' }}>K301</option>
                                                                <option value="K302" {{ $hwGen->HWno === 'K302' ? 'selected' : '' }}>K302</option>
                                                                <option value="K303" {{ $hwGen->HWno === 'K303' ? 'selected' : '' }}>K303</option>
                                                                <option value="L401" {{ $hwGen->HWno === 'L401' ? 'selected' : '' }}>L401</option>
                                                                <option value="L402" {{ $hwGen->HWno === 'L402' ? 'selected' : '' }}>L402</option>
                                                                <option value="L403" {{ $hwGen->HWno === 'L403' ? 'selected' : '' }}>L403</option>
                                                                <option value="L404" {{ $hwGen->HWno === 'L404' ? 'selected' : '' }}>L404</option>
                                                                <option value="M501" {{ $hwGen->HWno === 'M501' ? 'selected' : '' }}>M501</option>
                                                                <option value="M502" {{ $hwGen->HWno === 'M502' ? 'selected' : '' }}>M502</option>
                                                                <option value="M503" {{ $hwGen->HWno === 'M503' ? 'selected' : '' }}>M503</option>
                                                                <option value="M504" {{ $hwGen->HWno === 'M504' ? 'selected' : '' }}>M504</option>
                                                                <option value="M505" {{ $hwGen->HWno === 'M505' ? 'selected' : '' }}>M505</option>
                                                                <option value="M506" {{ $hwGen->HWno === 'M506' ? 'selected' : '' }}>M506</option>
                                                                <option value="M507" {{ $hwGen->HWno === 'M507' ? 'selected' : '' }}>M507</option>
                                                            </select>
                                                        </td>

                                                        <td>
                                                            <input type="text" class="form-control" name="hwGeneration[]" value="{{$hwGen->HWclass}}">
                                                        </td>
                                                        <td>
                                                            <select class="form-select" name="hwGeneration[]" style="width: fit-content">
                                                                <option value="Solid" {{ $hwGen->HWNature === 'Solid' ? 'selected' : '' }}>Solid</option>
                                                                <option value="Liquid" {{ $hwGen->HWNature === 'Liquid' ? 'selected' : '' }}>Liquid</option>
                                                                <option value="Gas" {{ $hwGen->HWNature === 'Gas' ? 'selected' : '' }}>Gas</option>
                                                                <option value="Sludge" {{ $hwGen->HWNature === 'Sludge' ? 'selected' : '' }}>Sludge</option>
                                                            </select>
                                                        <td>
                                                            <select class="form-select" name="hwGeneration[]" style="width: fit-content">

                                                                <option value ="Toxic(T)"  {{ $hwGen->HWcataloguing === 'Toxic(T)' ? 'selected' : '' }}>Toxic(T)</option>
                                                                <option value ="Corrosive(C)" {{ $hwGen->HWcataloguing === 'Corrosive(C)' ? 'selected' : '' }}>Corrosive(C)</option>
                                                                <option value ="Reactive(R)" {{ $hwGen->HWcataloguing === 'Reactive(R)' ? 'selected' : '' }}>Reactive(R)</option>
                                                                <option value ="Flammable(F)" {{ $hwGen->HWcataloguing === 'Flammable(F)' ? 'selected' : '' }}>Flammable(F)</option>
                                                                <option value ="T/C" {{ $hwGen->HWcataloguing === 'T/C' ? 'selected' : '' }}>T/C</option>
                                                                <option value ="T/R" {{ $hwGen->HWcataloguing === 'T/R' ? 'selected' : '' }}>T/R</option>
                                                                <option value ="T/F" {{ $hwGen->HWcataloguing === 'T/F' ? 'selected' : '' }}>T/F</option>
                                                                <option value ="C/R" {{ $hwGen->HWcataloguing === 'C/R' ? 'selected' : '' }}>C/R</option>
                                                                <option value ="C/F" {{ $hwGen->HWcataloguing === 'C/F' ? 'selected' : '' }}>C/F</option>
                                                                <option value ="R/F" {{ $hwGen->HWcataloguing === 'R/F' ? 'selected' : '' }}>R/F</option>
                                                                <option value ="T/C/R" {{ $hwGen->HWcataloguing === 'T/C/R' ? 'selected' : '' }}>T/C/R</option>
                                                                <option value ="T/C/F" {{ $hwGen->HWcataloguing === 'T/C/F' ? 'selected' : '' }}>T/C/F</option>
                                                                <option value ="T/R/F" {{ $hwGen->HWcataloguing === 'T/R/F' ? 'selected' : '' }}>T/R/F</option>
                                                                <option value ="C/R/F" {{ $hwGen->HWcataloguing === 'C/R/F' ? 'selected' : '' }}>C/R/F</option>
                                                                <option value ="T/C/R/F" {{ $hwGen->HWcataloguing === 'T/C/R/F' ? 'selected' : '' }}>T/C/R/F</option>
                                                            </select>
                                                        </td>
                                                        <td></td>
                                                        <td>
                                                            <input type="text" class="form-control" name="hwGeneration[]" value="{{$hwGen->RemainingQty}}">
                                                        </td>
                                                        <td>
                                                            <select class="form-select" name="hwGeneration[]" style="width: fit-content">
                                                                <option value ="kg" {{ $hwGen->PreviousReportUnit === 'kg' ? 'selected' : '' }}>kg</option>
                                                                <option value ="liter" {{ $hwGen->PreviousReportUnit === 'liter' ? 'selected' : '' }}>liter</option>
                                                                <option value ="m3" {{ $hwGen->PreviousReportUnit === 'm3' ? 'selected' : '' }}>m3</option>
                                                                <option value ="n/a" {{ $hwGen->PreviousReportUnit === 'n/a' ? 'selected' : '' }}>n/a</option>
                                                                <option value ="pc" {{ $hwGen->PreviousReportUnit === 'pc' ? 'selected' : '' }}>pc</option>
                                                                <option value ="ton"  {{ $hwGen->PreviousReportUnit === 'ton' ? 'selected' : '' }}>ton</option>
                                                            </select>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>

                                                        <td>
                                                            <input type="text" class="form-control" name="hwGeneration[]" value="{{$hwGen->HWGeneratedQty}}">
                                                        </td>

                                                        <td><select class="form-select" name="hwGeneration[]" style="width: fit-content">

                                                                <option value ="kg" {{ $hwGen->QuarterUnit === 'kg' ? 'selected' : '' }}>kg</option><option>liter</option>
                                                                <option value ="m3" {{ $hwGen->QuarterUnit === 'm3' ? 'selected' : '' }}>m3</option>
                                                                <option value ="n/a" {{ $hwGen->QuarterUnit === 'n/a' ? 'selected' : '' }}>n/a</option>
                                                                <option value ="pc" {{ $hwGen->QuarterUnit === 'pc' ? 'selected' : '' }}>pc</option>
                                                                <option value ="ton"  {{ $hwGen->QuarterUnit === 'ton' ? 'selected' : '' }}>ton</option>
                                                            </select>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    @endif
                                                    @endforeach
                                                    </tr>


                                            </tbody>
                                            <td></td>
                                            <td><button type="button" name="add" id="haz" class="btn btn-outline-primary" >+</button></td>
                                        </table>

                                        <table class="table table-borderless table-hover">
                                            <thead>
                                            <tr><h3 class="mt-3 mx-2 text-success">WASTE STORAGE, TREATMENT AND DISPOSAL (PLEASE FILL-UP ONE TABLE PER HW) </h3></tr>
                                            </thead>
                                        </table>

                                        <div class="container" id="wstad">

                                            <table class="table table-borderless p-3">

                                                    @foreach ($hwDetails as $hwDetail)
                                                        @if ($hwDetail->userid == Auth::id())
                                                            <thead>
                                                            <tr>
                                                                <th>HW Details</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td>HW No.</td>
                                                                <td>HW Class</td>
                                                            </tr>


                                                                    <tr>
                                                                        <td class="counterCell " style="text-align: right" ></td>
                                                                        <td><select class="form-select" name="hwDetails[]" style="width: fit-content">
                                                                                <option value="{{$hwDetail->HWno}}">{{$hwDetail->HWno}}</option>
                                                                                <option value="A101" {{ $hwDetail->HWno === 'A101' ? 'selected' : '' }}>A101</option>
                                                                                <option value="A201" {{ $hwDetail->HWno === 'A201' ? 'selected' : '' }}>A201</option>
                                                                                <option value="B202" {{ $hwDetail->HWno === 'B202' ? 'selected' : '' }}>B202</option>
                                                                                <option value="B201" {{ $hwDetail->HWno === 'B201' ? 'selected' : '' }}>B201</option>
                                                                                <option value="B202" {{ $hwDetail->HWno === 'B202' ? 'selected' : '' }}>B202</option>
                                                                                <option value="B203" {{ $hwDetail->HWno === 'B203' ? 'selected' : '' }}>B203</option>
                                                                                <option value="B204" {{ $hwDetail->HWno === 'B204' ? 'selected' : '' }}>B204</option>
                                                                                <option value="B205" {{ $hwDetail->HWno === 'B205' ? 'selected' : '' }}>B205</option>
                                                                                <option value="B206" {{ $hwDetail->HWno === 'B206' ? 'selected' : '' }}>B206</option>
                                                                                <option value="B207" {{ $hwDetail->HWno === 'B207' ? 'selected' : '' }}>B207></option>
                                                                                <option value="B208" {{ $hwDetail->HWno === 'B208' ? 'selected' : '' }}>B208></option>
                                                                                <option value="B209" {{ $hwDetail->HWno === 'B209' ? 'selected' : '' }}>B209></option>
                                                                                <option value="C301" {{ $hwDetail->HWno === 'C301' ? 'selected' : '' }}>C301</option>
                                                                                <option value="C302" {{ $hwDetail->HWno === 'C302' ? 'selected' : '' }}>C302</option>
                                                                                <option value="C303" {{ $hwDetail->HWno === 'C303' ? 'selected' : '' }}>C303</option>
                                                                                <option value="C304" {{ $hwDetail->HWno === 'C304' ? 'selected' : '' }}>C304</option>
                                                                                <option value="C305" {{ $hwDetail->HWno === 'C305' ? 'selected' : '' }}>C305</option>
                                                                                <option value="C399" {{ $hwDetail->HWno === 'C399' ? 'selected' : '' }}>C399</option>
                                                                                <option value="D401" {{ $hwDetail->HWno === 'D401' ? 'selected' : '' }}>D401</option>
                                                                                <option value="D402" {{ $hwDetail->HWno === 'D402' ? 'selected' : '' }}>D402</option>
                                                                                <option value="D403" {{ $hwDetail->HWno === 'D403' ? 'selected' : '' }}>D403</option>
                                                                                <option value="D404" {{ $hwDetail->HWno === 'D404' ? 'selected' : '' }}>D404</option>
                                                                                <option value="D405" {{ $hwDetail->HWno === 'D405' ? 'selected' : '' }}>D405</option>
                                                                                <option value="D406" {{ $hwDetail->HWno === 'D406' ? 'selected' : '' }}>D406</option>
                                                                                <option value="D407" {{ $hwDetail->HWno === 'D407' ? 'selected' : '' }}>D407</option>
                                                                                <option value="D408" {{ $hwDetail->HWno === 'D408' ? 'selected' : '' }}>D408</option>
                                                                                <option value="D499" {{ $hwDetail->HWno === 'D499' ? 'selected' : '' }}>D499</option>
                                                                                <option value="E501" {{ $hwDetail->HWno === 'E501' ? 'selected' : '' }}>E501</option>
                                                                                <option value="E502" {{ $hwDetail->HWno === 'E502' ? 'selected' : '' }}>E502</option>
                                                                                <option value="E503" {{ $hwDetail->HWno === 'E503' ? 'selected' : '' }}>E503</option>
                                                                                <option value="E599" {{ $hwDetail->HWno === 'E599' ? 'selected' : '' }}>E599</option>
                                                                                <option value="F601" {{ $hwDetail->HWno === 'F601' ? 'selected' : '' }}>F601</option>
                                                                                <option value="F602" {{ $hwDetail->HWno === 'F602' ? 'selected' : '' }}>F602</option>
                                                                                <option value="F603" {{ $hwDetail->HWno === 'F603' ? 'selected' : '' }}>F603</option>
                                                                                <option value="F604" {{ $hwDetail->HWno === 'F604' ? 'selected' : '' }}>F604</option>
                                                                                <option value="F699" {{ $hwDetail->HWno === 'F699' ? 'selected' : '' }}>F699</option>
                                                                                <option value="G703" {{ $hwDetail->HWno === 'G703' ? 'selected' : '' }}>G703</option>
                                                                                <option value="G704" {{ $hwDetail->HWno === 'G704' ? 'selected' : '' }}>G704</option>
                                                                                <option value="H802" {{ $hwDetail->HWno === 'H802' ? 'selected' : '' }}>H802</option>
                                                                                <option value="I101" {{ $hwDetail->HWno === 'I101' ? 'selected' : '' }}>I101</option>
                                                                                <option value="I102" {{ $hwDetail->HWno === 'I102' ? 'selected' : '' }}>I102</option>
                                                                                <option value="I103" {{ $hwDetail->HWno === 'I103' ? 'selected' : '' }}>I103</option>
                                                                                <option value="I104" {{ $hwDetail->HWno === 'I104' ? 'selected' : '' }}>I104</option>
                                                                                <option value="J201" {{ $hwDetail->HWno === 'J201' ? 'selected' : '' }}>J201</option>
                                                                                <option value="K301" {{ $hwDetail->HWno === 'K301' ? 'selected' : '' }}>K301</option>
                                                                                <option value="K302" {{ $hwDetail->HWno === 'K302' ? 'selected' : '' }}>K302</option>
                                                                                <option value="K303" {{ $hwDetail->HWno === 'K303' ? 'selected' : '' }}>K303</option>
                                                                                <option value="L401" {{ $hwDetail->HWno === 'L401' ? 'selected' : '' }}>L401</option>
                                                                                <option value="L402" {{ $hwDetail->HWno === 'L402' ? 'selected' : '' }}>L402</option>
                                                                                <option value="L403" {{ $hwDetail->HWno === 'L403' ? 'selected' : '' }}>L403</option>
                                                                                <option value="L404" {{ $hwDetail->HWno === 'L404' ? 'selected' : '' }}>L404</option>
                                                                                <option value="M501" {{ $hwDetail->HWno === 'M501' ? 'selected' : '' }}>M501</option>
                                                                                <option value="M502" {{ $hwDetail->HWno === 'M502' ? 'selected' : '' }}>M502</option>
                                                                                <option value="M503" {{ $hwDetail->HWno === 'M503' ? 'selected' : '' }}>M503</option>
                                                                                <option value="M504" {{ $hwDetail->HWno === 'M504' ? 'selected' : '' }}>M504</option>
                                                                                <option value="M505" {{ $hwDetail->HWno === 'M505' ? 'selected' : '' }}>M505</option>
                                                                                <option value="M506" {{ $hwDetail->HWno === 'M506' ? 'selected' : '' }}>M506</option>
                                                                                <option value="M507" {{ $hwDetail->HWno === 'M507' ? 'selected' : '' }}>M507</option>
                                                                            </select>
                                                                        </td>


                                                                        <td><input type="text" class="form-control" name="hwDetails[]" value="{{$hwDetail->HWclass}}"></td>
                                                                    </tr><tr>
                                                                        <td></td>
                                                                        <td>Qty of HW Treated</td>
                                                                        <td>Unit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td><input type="text" class="form-control" name="hwDetails[]" value="{{$hwDetail->QtyOfHWTreated}}"></td>
                                                                        <td><select class="form-select" name="hwDetails[]" style="width: fit-content">

                                                                                <option value ="kg" {{ $hwDetail->Unit === 'kg' ? 'selected' : '' }}>kg</option>
                                                                                <option  value ="liter" {{ $hwDetail->Unit === 'liter' ? 'selected' : '' }}>liter</option>
                                                                                <option value ="m3" {{ $hwDetail->Unit === 'm3' ? 'selected' : '' }}>m3</option>
                                                                                <option value ="ton"  {{ $hwDetail->Unit === 'ton' ? 'selected' : '' }}>ton</option>

                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>TSD Locations</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td><input type="text" class="form-control" name="hwDetails[]" value="{{$hwDetail->TSDLocation}}"></td>
                                                                    </tr>
                                                            </tbody>
                                                    @endif {{--hwdetails--}}


                                                            @foreach ($storage as $store)

                                                            @if ($store->userid == Auth::id())
                                                            <thead>
                                                            <tr>
                                                                <th>Storage</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td>Name</td>
                                                            </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td><input type="text" class="form-control" name="storage[]" value="{{$store->name}}"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Method</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td><input type="text" class="form-control" name="storage[]" value="{{$store->method}}"></td>
                                                                    </tr>

                                                            </tbody>
                                                            @endif {{--storage--}}


                                                                @foreach ($transporter as $trans)
                                                                    @if ($trans->userid == Auth::id())
                                                            <thead>
                                                            <tr>
                                                                <th>Transporter</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            <tr>
                                                                <td></td>
                                                                <td>ID</td>
                                                                <td>Name</td>
                                                            </tr>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td><input type="text" class="form-control" name="transporter[]" value="{{$trans->transpo_id}}"></td>
                                                                        <td><input type="text" class="form-control" name="transporter[]"value="{{$trans->name}}"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Method</td>
                                                                        <td>Date</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td><input type="text" class="form-control" name="transporter[]" value="{{$trans->method}}"></td>
                                                                        <td><input type="date" class="form-control" name="transporter[]" value="{{$trans->date}}"></td>
                                                                    </tr>

                                                            </tbody>
                                                                    @endif {{--Transporter--}}


                                                                        @foreach ($treater as $treat)
                                                                            @if ($treat->userid == Auth::id())
                                                            <thead>
                                                            <tr>
                                                                <th>Treater</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td>ID</td>
                                                                <td>Name</td>
                                                            </tr>

                                                                    <tr>
                                                                        <td>
                                                                        </td>
                                                                        <td><input type="text" class="form-control" name="treater[]" value="{{$treat->treater_id}}"></td>
                                                                        <td><input type="text" class="form-control" name="treater[]"value="{{$treat->name}}"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Method</td>
                                                                        <td>Date</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td><input type="text" class="form-control" name="treater[]" value="{{$treat->method}}">
                                                                        </td>
                                                                        <td><input type="date" class="form-control" name="treater[]" value="{{$treat->date}}"></td>
                                                                    </tr>

                                                            </tbody>
                                                                            @endif{{--Treater--}}

                                                                                @foreach ($disposal as $disp)
                                                                                @if ($disp->userid == Auth::id())
                                                                                        <thead>
                                                                                        <tr>
                                                                                            <th>Disposal</th>
                                                                                        </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                        <tr>
                                                                                            <td></td>
                                                                                            <td>ID</td>
                                                                                            <td>Name</td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td></td>
                                                                                            <td><input type="text" class="form-control" name="disposal[]" value="{{$disp->disposal_id}}"></td>
                                                                                            <td><input type="text" class="form-control" name="disposal[]"value="{{$disp->name}}"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td></td>
                                                                                            <td>Method</td>
                                                                                            <td>Date</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td></td>
                                                                                            <td><input type="text" class="form-control" name="disposal[]" value="{{$disp->method}}"></td>
                                                                                            <td><input type="date" class="form-control" name="disposal[]" value="{{$disp->date}}" ></td>
                                                                                        </tr>


                                                                                        </tbody>
                                                                                    @endif

                                                                                @endforeach    {{--hwdetails--}}
                                                                        @endforeach  {{--storage--}}
                                                                @endforeach  {{--Transporter--}}
                                                            @endforeach {{--Treater--}}

                                                @endforeach {{--Disposal--}}






                                            </table>
                                        </div>

                                    </div>
                                    <td>
                                        <button type="button" name="add" id="wstd" class="btn btn-outline-primary" style="margin-left: 2.5%" >+</button>
                                    </td>

                                    <table class="table table-borderless mt-3">
                                        <thead>
                                        <tr>
                                            <th class="text-success">ON-SITE SELF INSPECTION OF STORAGE AREA</th>
                                        </tr>
                                        </thead>
                                    </table>

                                    <!-- table for on site self inspection of storage area -->
                                    <div class="card mb-3 m-auto" >
                                        <table class="table table-borderless" id="ossisa">

                                            <thead>
                                            <tr>
                                                <th>Date Conducted</th>
                                                <th>Premises / Area Inspected</th>
                                                <th>Findings and Observations</th>
                                                <th>Corrective Actions Taken</th>
                                            </tr>
                                            </thead>

                                            <!-- <table class="table table-borderless" id="onsite"> -->
                                            <tbody id="onsite">
                                            @foreach ($osisa as $osis)
                                                @if ($osis->userid == Auth::id())
                                                    <tr>
                                                        <td><input type="date" class="form-control" name="osisa[]" value="{{$osis->DateConducted}}"></td>
                                                        <td><input type="text" class="form-control" name="osisa[]" value="{{$osis->PremisesAreaInspected}}"></td>
                                                        <td><input type="text" class="form-control" name="osisa[]" value="{{$osis->FindingsAndObservations}}"></td>
                                                        <td><input type="text" class="form-control" name="osisa[]" value="{{$osis->CorrectiveActionsTaken}}"></td>
                                                    </tr>
                                                @endif
                                            @endforeach

                                            </tbody>
                                            <td>
                                                <button type="button" name="add" id="onSite" class="btn btn-outline-primary">+</button>
                                            </td>
                                        </table>




                                    </div>


                                    <div class="container">
                                        <div class="col mb-3">
                                            <div class="mb-3" style="float: right">
                                                <a href="{{ route('module.moduleOne') }}" class="btn btn-lg border bg-light">Previous</a>
                                                <a href="{{ route('module.moduleThree') }}" class="btn btn-lg btn-info">Next</a>
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
        </div>

    </div>
    <!-- 13th row -->






</x-app-layout>
{{--</body>
<style>
        h1 {
      text-align: left;
      font-size: 26px;
      color:gray;
    }
    h2 {
      text-align: left;
      font-size: 20px;
      color:gray;
    }

  table {
    counter-reset: tableCount;
}
.counterCell:before {
    content: counter(tableCount);
    counter-increment: tableCount;

}
</style>

<!-- SCRIPT FOR HAZZARDOUS WASTE GENERATIONS  -->

<script type="text/javascript">
    var i = 0;
    $("#haz").click(function () { //button name
      ++i;
      $("#hazzardous").append(
        '<tr><td class="counterCell " style="text-align: right" ></td><td><select class="form-select" name="hwGeneration[]" style="width: fit-content" ><option selected disabled value="">-- Select --</option><option>A101</option><option>B201</option><option>B202</option><option>B201</option><option>B202</option><option>B203</option><option>B204</option><option>B205</option><option>B206</option><option>B207</option><option>B208</option><option>B299</option><option>C301</option><option>C302</option><option>C303</option><option>C304</option><option>C305</option><option>C399</option><option>D401</option><option>D402</option><option>D403</option><option>D404</option><option>D405</option><option>D406</option><option>D407</option><option>D408</option><option>D499</option><option>E501</option><option>E502</option><option>E503</option><option>E599</option><option>F601</option><option>F602</option><option>F603</option><option>F604</option><option>F699</option><option>G703</option><option>G704</option><option>H802</option><option>I101</option><option>I102</option><option>I103</option><option>I104</option><option>J201</option><option>K301</option><option>K302</option><option>K303</option><option>L401</option><option>L402</option><option>L403</option><option>L404</option><option>M501</option><option>M502</option><option>M503</option><option>M504</option><option>M505</option><option>M506</option><option>M507</option></select></td><td><input type="text" class="form-control" name="hwGeneration[]"></td><td><select class="form-select" name="hwGeneration[]" style="width: fit-content"><option selected disabled value="">-- Select --</option><option>Solid</option><option>Liquid</option><option>Gas</option><option>Sludge</option></select></td><td><select class="form-select" name="hwGeneration[]" style="width: fit-content"><option selected disabled value="">-- Select --</option><option>Toxic(T)</option><option>Corrosive(C)</option><option>Reactive(R)</option><option>Flammable(F)</option><option>T/C</option><option>T/R</option><option>T/F</option><option>C/R</option><option>C/F</option><option>R/F</option><option>T/C/R</option><option>T/C/F</option><option>T/R/F</option><option>C/R/F</option><option>T/C/R/F</option></select></td><td></td><td><input type="text" class="form-control" name="hwGeneration[]"></td><td><select class="form-select" name="hwGeneration[]" style="width: fit-content"><option selected disabled value="">-- Select --</option><option>kg</option><option>liter</option><option>m3</option><option>n/a</option><option>pc</option><option>ton</option></select></td><td></td><td></td><td></td><td><input type="text" class="form-control" name="hwGeneration[]"></td>	<td><select class="form-select" name="hwGeneration[]" style="width: fit-content"><option selected disabled value="">-- Select --</option><option>kg</option><option>liter</option><option>m3</option><option>n/a</option><option>pc</option><option>ton</option></select></td><td></td><td></td></tr>'
        ); //table name
    });
</script>




<!--  SCRIPT FOR WASTE STORAGE, TREATMENT AND DISPOSAL (PLEASE FILL-UP ONE TABLE PER HW -->
<script type="text/javascript">
    var i = 0;
    $("#wstd").click(function () { //button name
      ++i;
      $("#wstad").append(
        '<div class="container" id="wstad"><div class="card border-3 border-secondary mb-3" ><table class="table table-borderless p-3"><thead><tr><th>HW Details</th></tr></thead><tbody><tr><td></td><td>HW No.</td><td>HW Class</td></tr><tr><td></td><td><select class="form-select" name="hwDetails[]" style="width: fit-content"><option selected disabled value="">-- Select --</option><option>A101</option><option>B201</option><option>B202</option><option>B201</option><option>B202</option><option>B203</option><option>B204</option><option>B205</option><option>B206</option><option>B207</option><option>B208</option><option>B299</option><option>C301</option><option>C302</option><option>C303</option><option>C304</option><option>C305</option><option>C399</option><option>D401</option><option>D402</option><option>D403</option><option>D404</option><option>D405</option><option>D406</option><option>D407</option><option>D408</option><option>D499</option><option>E501</option><option>E502</option><option>E503</option><option>E599</option><option>F601</option><option>F602</option><option>F603</option><option>F604</option><option>F699</option><option>G703</option><option>G704</option><option>H802</option><option>I101</option><option>I102</option><option>I103</option><option>I104</option><option>J201</option><option>K301</option><option>K302</option><option>K303</option><option>L401</option><option>L402</option><option>L403</option><option>L404</option><option>M501</option><option>M502</option><option>M503</option><option>M504</option><option>M505</option><option>M506</option><option>M507</option></select></td><td><input type="text" class="form-control" name="hwDetails[]"></td></tr><tr><td></td><td>Qty of HW Treated</td><td>Unit</td></tr><tr><td></td><td><input type="text" class="form-control" name="hwDetails[]"></td><td><select class="form-select" name="hwDetails[]" style="width: fit-content"><option selected disabled value="">-- Select --</option><option>kg</option><option>liter</option><option>m3</option><option>pc</option><option>ton</option><option>n/a</option></select></td></tr><tr><td></td><td>TSD Locations</td></tr><tr><td></td><td><input type="text" class="form-control" name="hwDetails[]"></td></tr></tbody><thead><tr><th>Storage</th></tr></thead><tbody><tr><td></td><td>Name</td> </tr><tr><td></td><td><input type="text" class="form-control" name="storage[]"></td></tr><tr><td></td><td>Method</td></tr><tr><td></td><td><input type="text" class="form-control" name="storage[]"></td></tr></tbody><thead><tr><th>Transporter</th></tr></thead><tbody><tr><td></td><td>ID</td><td>Name</td></tr><tr><td></td><td><input type="text" class="form-control" name="transporter[]"></td><td><input type="text" class="form-control" name="transporter[]"></td></tr><tr><td></td><td>Method</td><td>Date</td></tr><tr><td></td><td><input type="text" class="form-control" name="transporter[]"></td><td><input type="date" class="form-control" name="transporter[]"></td></tr></tbody><thead><tr><th>Treater</th></tr></thead><tbody><tr><td></td><td>ID</td><td>Name</td></tr><tr><td></td><td><input type="text" class="form-control" name="treater[]"></td><td><input type="text" class="form-control" name="treater[]"></td></tr><tr><td></td><td>Method</td><td>Date</td></tr><tr><td></td><td><input type="text" class="form-control" name="treater[]"></td><td><input type="date" class="form-control" name="treater[]"></td></tr></tbody><thead><tr><th>Disposal</th></tr></thead><tbody><tr><td></td><td>ID</td><td>Name</td> </tr><tr><td></td><td><input type="text" class="form-control" name="disposal[]"></td><td><input type="text" class="form-control" name="disposal[]"></td></tr><tr><td></td><td>Method</td><td>Date</td></tr><tr><td></td><td><input type="text" class="form-control" name="disposal[]"></td><td><input type="date" class="form-control" name="disposal[]"  ></td></tr></tbody></table></div></div>'
        ); //table name
    });
  </script>


<!--  SCRIPT FOR ON-SITE SELF INSPECTION OF STORAGE AREA -->
<script type="text/javascript">
    var i = 0;
    $("#onSite").click(function () { //button name
      ++i;
      $("#onsite").append(
        '<tr><td><input type="date" class="form-control" name="osisa[]"></td><td><input type="text" class="form-control" name="osisa[]"></td><td><input type="text" class="form-control" name="osisa[]"></td><td><input type="text" class="form-control" name="osisa[]"></td></tr>'
        ); //table name
    });
  </script>
@endsection
</html>--}}
