{{--<!DOCTYPE html>


<html lang="en">
<head>
    @extends('module.master')
    @section('content')
    {{View::make('module.tabs')}}

    <title>Environmental Management Bureau Online Services - SMR - R.A. 9275</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">




</head>
<body>--}}
<x-app-layout>

    <title>Environmental Management Bureau Online Services - SMR - R.A. 9275</title>
    <div class="py-12 ">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                {{View::make('module.tabsupdate')}}
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="container card col" >


                        <form action="{{ route('moduleThree.update', ['moduleThree' => Auth::user()->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <!-- {{ csrf_field() }} -->
                            <br>
                            <div class="row">
                                <div class="col">

                                    <h1 style="text-align: center" > POLLUTION CONTROL ASSOCIATION OF THE PHILIPPINES, INC. (PCAPI)</h1>
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
                                <p class="text-primary my-0">1. Put " " for field not applicable to you.</p>
                                <p class="text-primary my-0">2. You Can now Export data on Each module by clicking "EXPORT" Link Below.</p>
                            </div>

                            <div class="container">
                                <div class="row">
                                    <p class="p-1 mt-3  text-light" style="background-color:gray; font-size:20px ">
                                        MODULE 3: RA 9275
                                        <a href="/pdf3" class="btn btn-lg float-right " ><img src="/images/printpdflogo.png" class="inline" height="40px" width="50px" style="backgorund-color:gray;"> EXPORT PDF</a>
                                    </p>
                                </div>
                            </div>

                            <div class="container " >
                                <table class="table table-borderless table-hover" >
                                    <h3 class="mt-3 mx-2 text-success">WATER POLLUTION DATA</h3>

                                    @foreach ($waterpolutiondata as $water)
                                    <tbody>
                                            <tr>
                                                <td>Domestic wastewater (cubicmeters/day)</td>
                                                <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                                <td><input class="form-control" type="text" style="text-align:center" name="domwaste" id="dww" value="{{$water->Domestic_wastewater }}"></td>

                                                <td></td>
                                                <td>Processs wastewater (cubicmeters/day)</td>
                                                <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                                <td><input class="form-control" type="text" style="text-align:center" name="processwaste" id="pww" value="{{$water->Processs_wastewater }}"></td>
                                            </tr>
                                    </tbody>

                                    <tbody>
                                    <tr>
                                        <td>Cooling water (cubicmeters/day)</td>
                                        <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                        <td><input class="form-control" type="text" style="text-align:center" name="coolingw" id="cwmd" value="{{$water->Cooling_water }}"></td>

                                        <td>
                                        <td class="grid-rows-1 grid-cols-2"><label for="othern">Others</label>
                                            <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                            <input class="form-control inline" type="text" style="text-align:center" name="othern" id="otn" value="{{$water->others_n }}"></td>
                                        <td> <label for="othercm">(cubicmeters/day)</label>
                                            <input class="form-control" type="text" style="text-align:center" name="othercm" id="ocmd" value="{{$water->others_m }}"></td>
                                        </td>
                                    </tr>
                                    </tbody>

                                    <tbody>
                                    <tr>
                                        <td>Waste water, equipment (cubicmeters/day)</td>
                                        <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                        <td><input class="form-control" type="text" style="text-align:center" name="wequip" id="wweq" value="{{$water->Waste_water_equipment }}"></td>

                                        <td></td>
                                        <td>Waste water, floor (cubicmeters/day)</td>
                                        <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                        <td><input class="form-control" type="text" style="text-align:center" name="wwfloor" id="wwfl" value="{{$water->Waste_water_floor }}"></td>

                                    </tr>

                                    @endforeach
                                    </tbody>
                                </table>


                                <table class="table table-borderless table-hover" >
                                    <h3 class="mt-3 mx-2 text-success">RECORD COST OF TREATMENT</h3>

                                    @foreach ($personEmployed as $person)
                                    <tbody>
                                    <tr>
                                        <th></th>
                                        <th style="text-align: center">Month 1</th>
                                        <th style="text-align: center">Month 2</th>
                                        <th style="text-align: center">Month 3</th>
                                    </tr>
                                    </tbody>


                                    <tbody id="penum">


                                            <tr>
                                                <td>Person employed, (# of employees)</td>
                                                <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                                <td><input class="form-control" type="text" name="pemonth1" id="pem1" value="{{$person->Month_1 }}"></td>
                                                <td><input class="form-control"type="text" name="pemonth2" id="pem2" value="{{$person->Month_2 }}"></td>
                                                <td><input class="form-control" type="text" name="pemonth3" id="pem3" value="{{$person->Month_3 }}"></td>
                                            </tr>


                                    </tbody>


                                    <tbody id="pecost">

                                    @foreach ($personEmployedCost as $personcost)
                                        @if($person->id == $personcost->id)
                                            <tr>
                                                <td>Person employed, (cost)</td>
                                                <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                                <td><input class="form-control" type="text" name="pecmonth1" id="pecm1" value="{{$personcost->Month_1 }}"></td>
                                                <td><input class="form-control" type="text" name="pecmonth2" id="pecm2" value="{{$personcost->Month_2 }}"></td>
                                                <td><input class="form-control" type="text" name="pecmonth3" id="pecm3" value="{{$personcost->Month_3 }}"></td>
                                            </tr>
                                        @endif
                                    @endforeach {{--personEmployedCost--}}
                                    </tbody>

                                    <tbody id="cocwtp">

                                    @foreach ($costofchemical as $chemical)
                                        @if($person->id == $chemical->id)
                                            <tr>
                                                <td>Cost of Chemicals used by WTP</td>
                                                <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                                <td><input class="form-control" type="text" name="cocw1" id="cocwm1" value="{{$chemical->Month_1 }}"></td>
                                                <td><input class="form-control" type="text" name="cocw2" id="cocwm2" value="{{$chemical->Month_1 }}"></td>
                                                <td><input class="form-control" type="text" name="cocw3" id="cocwm3" value="{{$chemical->Month_1 }}"></td>
                                            </tr>
                                        @endif
                                    @endforeach {{--costofchemical--}}
                                    </tbody>

                                    <tbody id="ucwtp">
                                    @foreach ($utilitycost as $utility)
                                        @if($person->id == $utility->id)
                                            <tr>
                                                <td>Utility Costs of WTP(electricity & water)</td>
                                                <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                                <td><input class="form-control" type="text" name="ucw1" id="ucwm1" value="{{$chemical->Month_1 }}"></td>
                                                <td><input class="form-control" type="text" name="ucw2" id="ucwm2" value="{{$chemical->Month_2 }}"></td>
                                                <td><input class="form-control" type="text" name="ucw3" id="ucwm3" value="{{$chemical->Month_3 }}"></td>
                                            </tr>
                                        @endif
                                    @endforeach  {{--utilitycost--}}
                                    </tbody>

                                    <tbody id="aoc">

                                    @foreach ($administrativecosts as $administrative)
                                        @if($person->id == $administrative->id)
                                            <tr>
                                                <td>Administrative and Overhead Costs</td>
                                                <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                                <td><input class="form-control" type="text" name="aoc1" id="aocm1" value="{{$administrative->Month_1 }}"></td>
                                                <td><input class="form-control" type="text" name="aoc2" id="aocm2" value="{{$administrative->Month_1 }}"></td>
                                                <td><input class="form-control" type="text" name="aoc3" id="aocm3" value="{{$administrative->Month_1 }}"></td>
                                            </tr>
                                        @endif
                                    @endforeach  {{--administrativecosts--}}
                                    </tbody>

                                    <tbody id="colab">
                                    <tr>

                                    @foreach ($costofoperating as $costofOp)
                                        @if($person->id == $costofOp->id)
                                            <tr>
                                                <td>Cost of operating in-house laboratory</td>
                                                <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                                <td><input class="form-control" type="text" name="colab1" id="colabm1" value="{{$costofOp->Month_1 }}"></td>
                                                <td><input class="form-control" type="text" name="colab2" id="colabm2" value="{{$costofOp->Month_2 }}"></td>
                                                <td><input class="form-control" type="text" name="colab3" id="colabm3" value="{{$costofOp->Month_3 }}"></td>
                                            </tr>
                                        @endif
                                    @endforeach  {{--costofoperating--}}
                                    </tbody>

                                    <tbody id="nai">

                                    @foreach ($newinvestment as $newinv)
                                        @if($person->id == $newinv->id)
                                            <tr>
                                                <td>New/Additional Investments in WTP <br> (description)</td>
                                                <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                                <td><input class="form-control" type="text" name="nai1" id="naim1" value="{{$newinv->Month_1 }}"></td>
                                                <td><input class="form-control" type="text" name="nai2" id="naim2" value="{{$newinv->Month_2 }}"></td>
                                                <td><input class="form-control" type="text" name="nai3" id="naim3" value="{{$newinv->Month_3 }}"></td>
                                            </tr>
                                        @endif
                                    @endforeach  {{--newinvestment--}}
                                    </tbody>


                                    <tbody id="cnai">
                                    @foreach ($costofnew as $con)
                                        @if($person->id == $con->id)
                                            <tr>
                                                <td>Costs of New/Add Investments <br> (description)</td>
                                                <input class="form-control" type="number" name="traineeID" value="1" hidden>
                                                <td><input class="form-control" type="text" name="cnai1" id="cnaim1" value="{{$con->Month_1 }}"></td>
                                                <td><input class="form-control" type="text" name="cnai2" id="cnaim2" value="{{$con->Month_2 }}"></td>
                                                <td><input class="form-control" type="text" name="cnai3" id="cnaim3" value="{{$con->Month_3 }}"></td>
                                            </tr>
                                        @endif
                                    @endforeach  {{--costofnew--}}
                                    </tbody>
                                    @endforeach {{--personemployed--}}
                                </table>


                                <table class="table table-borderless table-hover" >
                                    <h3 class="mt-3 mx-2 text-success">WTP DISCHARGE LOCATION</h3>

                                    <tbody id=wdl>
                                    <tr>
                                        <th style="text-align: left">Outlet Number</th>
                                        <th style="text-align: left">Location of Outlet</th>
                                        <th style="text-align: left">Name of Receiving water body</th>
                                    </tr>

                                    @foreach ($dischargeLocation as $dischargeloc)

                                            <tr>
                                                <td ><input class="form-control" type="text" name="dischargeLocation[]" value ="{{$dischargeloc->Outlet_Number }}"></td>
                                                <td><input class="form-control" type="text"  id="lo" name="dischargeLocation[]" value="{{$dischargeloc->Location_of_Outlet }}"></td>
                                                <td><input class="form-control" type="text"  id="nrwb" name="dischargeLocation[]" value="{{$dischargeloc->Name_of_Receiving_water_body }}"></td>
                                                <td></td>
                                            </tr>

                                    @endforeach
                                    </tbody>

                                    <td><button type="button" name="add" id="wdladd" class="btn btn-outline-primary">+</button></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>


                                </table>


                                <table class="table table-borderless table-hover" >
                                    <h3 class="mt-3 mx-2 text-success">DETAILED REPORT OF WASTEWATER CHARACTERISTICS FOR CONVENTIONAL POLLUTANTS</h3>

                                     <tbody id=drwccc>
                                     <tr>
                                        <th style="text-align: center">Outlet No.</th>
                                        <th style="text-align: center">Date</th>
                                        <th style="text-align: center">Effluent Flow Rate (m3/day)</th>
                                        <th style="text-align: center">BOD (mg/L)</th>
                                        <th style="text-align: center">TSS (mg/L)</th>
                                        <th style="text-align: center">Color</th>
                                        <th style="text-align: center">pH</th>
                                        <th style="text-align: center">Oil & Grease (mg/L)</th>
                                        <th style="text-align: center">Temp Rise ©</th>
                                     </tr>
                                     @foreach ($dreportofwaste_parameter as $dreport_parameter)
                                    <tr>
                                        <td><input class="form-control" type="text" name="name_parameter" id="npara" value="{{ $dreport_parameter->name_parameter }}"></td>
                                    </tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <th style="text-align: left">name</th>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input class="form-control" type="text" name="unit_parameter" id="upara" value="{{ $dreport_parameter->unit_parameter }}" ></td>
                                    </tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <th style="text-align: left">unit</th>
                                    @endforeach
                                    @foreach ($dreportofwaste as $dreport)

                                            <tr>
                                                <td><input class="form-control" type="text" name="dreportofwaste[]" value="{{$dreport->Outlet_No }}"></td>
                                                <td ><input class="form-control" type="date"  id="wcdate" name="dreportofwaste[]" value="{{$dreport->date }}"></td>
                                                <td><input class="form-control" type="text"  id="nfr" name="dreportofwaste[]" value="{{$dreport->Effluent_Flow_Rate }}"></td>
                                                <td><input class="form-control" type="text"  id="bod" name="dreportofwaste[]" value="{{$dreport->BOD_mg_L }}"></td>
                                                <td><input class="form-control" type="text"  id="tss" name="dreportofwaste[]" value="{{$dreport->TSS_mg_L }}"></td>
                                                <td><input class="form-control" type="text"  id="clr" name="dreportofwaste[]" value="{{$dreport->Color }}"></td>
                                                <td><input class="form-control" type="text"  id="phl" name="dreportofwaste[]" value="{{$dreport->pH }}"></td>
                                                <td><input class="form-control" type="text"  id="oag" name="dreportofwaste[]" value="{{$dreport->Oil_Grease_mg_L }}"></td>
                                                <td><input class="form-control" type="text"  id="tempr" name="dreportofwaste[]" value="{{$dreport->Temp_Rise }}"></td>
                                                <td><input class="form-control" type="text" id="add_p" name="dreportofwaste[]" value="{{ $dreport->Add_parameter }}"></td>
                                                <td></td>
                                            </tr>

                                    @endforeach
                                    </tbody>

                                    <td><button type="button" id="drwcccadd" class="btn btn-outline-primary">+</button></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>



                                </table>

                                <table class="table table-borderless table-hover" >
                                    <h3 class="mt-3 mx-2 text-success">DETAILED REPORT OF WASTEWATER CHARACTERISTICS FOR OTHER POLLUTANTS</h3>

                                    <tbody id=dwrcop>
                                    @foreach ($drowcfop as $drow1)

                                            <tr>
                                                <th style="text-align: center">Outlet No.</th>
                                                <th style="text-align: center">Date</th>
                                                <th style="text-align: center">Effluent Flow Rate (m3/day)</th>
                                                <td><input class="form-control" type="text"  id="opn1" name="name1" value="{{$drow1->name1}}"></td>
                                                <td><input class="form-control" type="text"  id="opn2" name="name2" value="{{$drow1->name2}}"></td>
                                                <td><input class="form-control" type="text"  id="opn3" name="name3" value="{{$drow1->name3}}"></td>
                                                <td><input class="form-control" type="text"  id="opn4" name="name4" value="{{$drow1->name4}}"></td>
                                                <td><input class="form-control" type="text"  id="opn5" name="name5" value="{{$drow1->name5}}"></td>
                                                <td><input class="form-control" type="text"  id="opn6" name="name6" value="{{$drow1->name6}}"></td>
                                                <td><input class="form-control" type="text"  id="opn7" name="name7" value="{{$drow1->name7}}"></td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <th style="text-align: center">Name</th>
                                                <th style="text-align: center">Name</th>
                                                <th style="text-align: center">Name</th>
                                                <th style="text-align: center">Name</th>
                                                <th style="text-align: center">Name</th>
                                                <th style="text-align: center">Name</th>
                                                <th style="text-align: center">Name</th>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><input class="form-control" type="text"  id="opu1" name="unit1" value="{{$drow1->unit1}}"></td>
                                                <td><input class="form-control" type="text"  id="opu2" name="unit2" value="{{$drow1->unit2}}"></td>
                                                <td><input class="form-control" type="text"  id="opu3" name="unit3" value="{{$drow1->unit3}}"></td>
                                                <td><input class="form-control" type="text"  id="opu4" name="unit4" value="{{$drow1->unit4}}"></td>
                                                <td><input class="form-control" type="text"  id="opu5" name="unit5" value="{{$drow1->unit5}}"></td>
                                                <td><input class="form-control" type="text"  id="opu6" name="unit6" value="{{$drow1->unit6}}"></td>
                                                <td><input class="form-control" type="text"  id="opu7" name="unit7" value="{{$drow1->unit7}}"></td>
                                            </tr>

                                    @endforeach

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <th style="text-align: center">Unit</th>
                                        <th style="text-align: center">Unit</th>
                                        <th style="text-align: center">Unit</th>
                                        <th style="text-align: center">Unit</th>
                                        <th style="text-align: center">Unit</th>
                                        <th style="text-align: center">Unit</th>
                                        <th style="text-align: center">Unit</th>
                                    </tr>
                                    @foreach ($drowcfop1 as $drow2)

                                            <tr>

                                                <td><input class="form-control" type="text"   name="drowcfop1[]" value="{{$drow2->Outlet_No}}"></td>
                                                <td><input class="form-control" type="date"   name="drowcfop1[]" value="{{$drow2->Date}}"></td>
                                                <td><input class="form-control" type="text"   name="drowcfop1[]" value="{{$drow2->Effluent_Flow_Rate_m3_day}}"></td>
                                                <td><input class="form-control" type="text"   name="drowcfop1[]" value="{{$drow2->value1}}"></td>
                                                <td><input class="form-control" type="text"   name="drowcfop1[]" value="{{$drow2->value2}}"></td>
                                                <td><input class="form-control" type="text"   name="drowcfop1[]" value="{{$drow2->value3}}"></td>
                                                <td><input class="form-control" type="text"   name="drowcfop1[]" value="{{$drow2->value4}}"></td>
                                                <td><input class="form-control" type="text"   name="drowcfop1[]" value="{{$drow2->value5}}"></td>
                                                <td><input class="form-control" type="text"   name="drowcfop1[]" value="{{$drow2->value6}}"></td>
                                                <td><input class="form-control" type="text"   name="drowcfop1[]" value="{{$drow2->value7}}"></td>
                                                <td></td>
                                            </tr>

                                    @endforeach




                                    </tbody>

                                    <td><button type="button" name="add" id="dwrcopadd" class="btn btn-outline-primary">+</button></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>


                                </table>

                            </div>

                            <!-- 13th row -->
                            <div class="container">
                                <div class="col mb-3" >
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



{{--
</body>
<style>
    h1 {


     font-size: 26px;
     color:gray;
    }
    h2 {

    font-size: 20px;
    color:gray;
    }
</style>

<!-- WTP DISCHARGE LOCATION script -->
<script type="text/javascript">
    var i = 0;
    $("#wdladd").click(function () { //button name
        ++i;
        $("#wdl").append(
            '<tr><td><input class="form-control" type="number" name="dischargeLocation[]"></td><td><input class="form-control" type="text"  id="lo" name="dischargeLocation[]"></td><td><input class="form-control" type="text"  id="nrwb" name="dischargeLocation[]"></td></tr>'
                ); //table name
    });
</script>


 <!-- DETAILED REPORT OF WASTEWATER CHARACTERISTICS for CC script -->
<script type="text/javascript">
    var i = 0;
    $("#drwcccadd").click(function () { //button name
        ++i;
        $("#drwccc").append(
            '<tr><td><input class="form-control" type="text" name="dreportofwaste[]"></td><td><input class="form-control" type="date"  id="wcdate" name="dreportofwaste[]"></td><td><input class="form-control" type="text"  id="nfr" name="dreportofwaste[]"></td><td><input class="form-control" type="text"  id="bod" name="dreportofwaste[]"></td><td><input class="form-control" type="text"  id="tss" name="dreportofwaste[]"></td><td><input class="form-control" type="text"  id="clr" name="dreportofwaste[]"></td><td><input class="form-control" type="text"  id="phl" name="dreportofwaste[]"></td><td><input class="form-control" type="text"  id="oag" name="dreportofwaste[]"></td><td><input class="form-control" type="text"  id="tempr" name="dreportofwaste[]"></td></tr>'
                ); //table name
    });
</script>

 <!-- DETAILED REPORT OF WASTEWATER CHARACTERISTICS for OP script -->
 <script type="text/javascript">
    var i = 0;
    $("#dwrcopadd").click(function () { //button name
        ++i;
        $("#dwrcop").append(
            ' <tr><td><input class="form-control" type="text" name="drowcfop1[]"></td><td><input class="form-control" type="date"   name="drowcfop1[]"></td><td><input class="form-control" type="text"   name="drowcfop1[]"></td><td><input class="form-control" type="text"   name="drowcfop1[]"></td><td><input class="form-control" type="text"   name="drowcfop1[]"></td><td><input class="form-control" type="text"   name="drowcfop1[]"></td><td><input class="form-control" type="text"   name="drowcfop1[]"></td><td><input class="form-control" type="text"   name="drowcfop1[]"></td><td><input class="form-control" type="text"   name="drowcfop1[]"></td></tr>'
                ); //table name
    });
</script>


@endsection
</html>--}}
