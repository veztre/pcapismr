
<x-app-layout>

    <title>Environmental Management Bureau Online Services - SMR - R.A. 9275</title>
    <div class="py-12 ">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                {{View::make('module.tabs')}}
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">



                    <div class="container col ml-4" style="align-content: center">

                        <form action="/saveData3" post="post">
                            @csrf
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
                                        <input type="text" class="form-control mt-0" placeholder="" value="{{ $referencen }}" readonly>
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
                                        <a href="{{route('pdf3')}}" class="btn btn-lg float-right " ><img src="{{asset('public/images/printpdflogo.png')}} class="inline" height="40px" width="50px" style="backgorund-color:gray;"> EXPORT PDF</a>
                                    </p>
                                </div>
                            </div>

                            <div class="container " >
                                <table class="table table-borderless table-hover" >
                                    <h3 class="mt-3 mx-2 text-success">WATER POLLUTION DATA</h3>


                                    <tbody>
                                    <tr>
                                        <td>Domestic wastewater (cubicmeters/day)</td>
                                        <td><input class="form-control" type="text" style="text-align:center" name="domwaste" id="dww" required value="{{ old('domwaste', ' ') }}"></td>

                                        <td></td>
                                        <td>Processs wastewater (cubicmeters/day)</td>
                                        <td><input class="form-control" type="text" style="text-align:center" name="processwaste" id="pww" required value="{{ old('processwaste', ' ') }}"></td>
                                    </tr>
                                    </tbody>

                                    <tbody>
                                    <tr>
                                        <td>Cooling water (cubicmeters/day)</td>
                                        <td><input class="form-control" type="text" style="text-align:center"   name="coolingw" id="cwmd" required value="{{ old('coolingw', ' ') }}"></td>

                                        <td>
                                        <td class="grid-rows-1 grid-cols-2"><label for="othern">Others</label>
                                            <input class="form-control inline" type="text" style="text-align:center" name="othern" id="otn" required value="{{ old('othern', ' ') }}"></td>
                                        <td> <label for="othercm">(cubicmeters/day)</label>
                                            <input class="form-control" type="text" style="text-align:center" name="othercm" id="ocmd" required value="{{ old('othercm', ' ') }}"></td>
                                        </td>
                                    </tr>
                                    </tbody>

                                    <tbody>
                                    <tr>
                                        <td>Waste water, equipment (cubicmeters/day)</td>
                                        <td><input class="form-control" type="text" style="text-align:center" name="wequip" id="wweq" required value="{{ old('wequip', ' ') }}"></td>

                                        <td></td>
                                        <td>Waste water, floor (cubicmeters/day)</td>
                                        <td><input class="form-control" type="text" style="text-align:center" name="wwfloor" id="wwfl" required value="{{ old('wwfloor', ' ') }}"></td>

                                    </tr>
                                    </tbody>
                                </table>


                                <table class="table table-borderless table-hover" >
                                    <h3 class="mt-3 mx-2 text-success">RECORD COST OF TREATMENT</h3>


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
                                        <td><input class="form-control" type="text" name="pemonth1" id="pem1" required value="{{ old('pemonth1', ' ') }}"></td>
                                        <td><input class="form-control"type="text" name="pemonth2" id="pem2" required value="{{ old('pemonth2', ' ') }}"></td>
                                        <td><input class="form-control" type="text" name="pemonth3" id="pem3" required value="{{ old('pemonth3', ' ') }}"></td>
                                    </tr>
                                    </tbody>


                                    <tbody id="pecost">
                                    <tr>
                                        <td>Person employed, (cost)</td>
                                        <td><input class="form-control" type="text" name="pecmonth1" id="pecm1" required value="{{ old('pecmonth1', ' ') }}"></td>
                                        <td><input class="form-control" type="text" name="pecmonth2" id="pecm2" required value="{{ old('pecmonth2', ' ') }}"></td>
                                        <td><input class="form-control" type="text" name="pecmonth3" id="pecm3" required value="{{ old('pecmonth3', ' ') }}"></td>
                                    </tr>
                                    </tbody>

                                    <tbody id="cocwtp">
                                    <tr>
                                        <td>Cost of Chemicals used by WTP</td>
                                        <td><input class="form-control" type="text" name="cocw1" id="cocwm1" required value="{{ old('cocwm1', ' ') }}"></td>
                                        <td><input class="form-control" type="text" name="cocw2" id="cocwm2" required value="{{ old('cocwm2', ' ') }}"></td>
                                        <td><input class="form-control" type="text" name="cocw3" id="cocwm3" required value="{{ old('cocwm3', ' ') }}"></td>
                                    </tr>
                                    </tbody>

                                    <tbody id="ucwtp">
                                    <tr>
                                        <td>Utility Costs of WTP(electricity & water)</td>
                                        <td><input class="form-control" type="text" name="ucw1" id="ucwm1" required value="{{ old('ucwm1', ' ') }}"></td>
                                        <td><input class="form-control" type="text" name="ucw2" id="ucwm2" required value="{{ old('ucwm2', ' ') }}"></td>
                                        <td><input class="form-control" type="text" name="ucw3" id="ucwm3" required value="{{ old('ucwm3', ' ') }}"></td>
                                    </tr>
                                    </tbody>

                                    <tbody id="aoc">
                                    <tr>
                                        <td>Administrative and Overhead Costs</td>
                                        <td><input class="form-control" type="text" name="aoc1" id="aocm1" required value="{{ old('aocm1', ' ') }}"></td>
                                        <td><input class="form-control" type="text" name="aoc2" id="aocm2" required value="{{ old('aocm2', ' ') }}"></td>
                                        <td><input class="form-control" type="text" name="aoc3" id="aocm3" required  value="{{ old('aocm3', ' ') }}"></td>
                                    </tr>
                                    </tbody>

                                    <tbody id="colab">
                                    <tr>
                                        <td>Cost of operating in-house laboratory</td>
                                        <td><input class="form-control" type="text" name="colab1" id="colabm1" required value="{{ old('colabm1', ' ') }}"></td>
                                        <td><input class="form-control" type="text" name="colab2" id="colabm2" required value="{{ old('colabm2', ' ') }}"></td>
                                        <td><input class="form-control" type="text" name="colab3" id="colabm3" required value="{{ old('colabm3', ' ') }}"></td>
                                    </tr>
                                    </tbody>

                                    <tbody id="nai">
                                    <tr>
                                        <td>New/Additional Investments in WTP <br> (description)</td>
                                        <td><input class="form-control" type="text" name="nai1" id="naim1" required value="{{ old('naim1', ' ') }}"></td>
                                        <td><input class="form-control" type="text" name="nai2" id="naim2" required value="{{ old('naim2', ' ') }}"></td>
                                        <td><input class="form-control" type="text" name="nai3" id="naim3" required value="{{ old('naim3', ' ') }}"></td>
                                    </tr>
                                    </tbody>


                                    <tbody id="cnai">
                                    <tr>
                                        <td>Costs of New/Add Investments <br> (description)</td>
                                        <td><input class="form-control" type="text" name="cnai1" id="cnaim1" required value="{{ old('cnaim1', ' ') }}"></td>
                                        <td><input class="form-control" type="text" name="cnai2" id="cnaim2" required value="{{ old('cnaim2', ' ') }}"></td>
                                        <td><input class="form-control" type="text" name="cnai3" id="cnaim3" required value="{{ old('cnaim3', ' ') }}"></td>
                                    </tr>
                                    </tbody>

                                </table>


                                <table class="table table-borderless table-hover" >
                                    <h3 class="mt-3 mx-2 text-success">WTP DISCHARGE LOCATION</h3>

                                    <tbody id=wdl>
                                    <tr>
                                        <th style="text-align: left">Outlet Number</th>
                                        <th style="text-align: left">Location of Outlet</th>
                                        <th style="text-align: left">Name of Receiving water body</th>
                                    </tr>


                                    <tr>
                                        <td ><input class="form-control" type="text" name="dischargeLocation[]"  required></td>
                                        <td><input class="form-control" type="text"  id="lo" name="dischargeLocation[]" required value="{{ old('dischargeLocation[]', ' ') }}"></td>
                                        <td><input class="form-control" type="text"  id="nrwb" name="dischargeLocation[]" required value="{{ old('dischargeLocation[]', ' ') }}"></td>
                                        <td></td>
                                    </tr>
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
                                        <td><input class="form-control" type="text" name="name_parameter" id="npara" value="{{ old('name_parameter') }}"></td>
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
                                        <td><input class="form-control" type="text" name="unit_parameter" id="upara" required value="{{ old('unit_parameter') }}" ></td>
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


                                    <tr>
                                        <td><input class="form-control" type="text" name="dreportofwaste[]" required value="{{ old('dreportofwaste[]', ' ') }}"></td>
                                        <td ><input class="form-control" type="date"  id="wcdate" name="dreportofwaste[]" required value="{{ old('dreportofwaste[]', '2001-01-01') }}"></td>
                                        <td><input class="form-control" type="text"  id="nfr" name="dreportofwaste[]" required value="{{ old('dreportofwaste[]', ' ') }}"></td>
                                        <td><input class="form-control" type="text"  id="bod" name="dreportofwaste[]" required value="{{ old('dreportofwaste[]', ' ') }}"></td>
                                        <td><input class="form-control" type="text"  id="tss" name="dreportofwaste[]" required value="{{ old('dreportofwaste[]', ' ') }}"></td>
                                        <td><input class="form-control" type="text"  id="clr" name="dreportofwaste[]" required value="{{ old('dreportofwaste[]', ' ') }}"></td>
                                        <td><input class="form-control" type="text"  id="phl" name="dreportofwaste[]" required value="{{ old('dreportofwaste[]', ' ') }}"></td>
                                        <td><input class="form-control" type="text"  id="oag" name="dreportofwaste[]" required value="{{ old('dreportofwaste[]', ' ') }}"></td>
                                        <td><input class="form-control" type="text"  id="tempr" name="dreportofwaste[]" required value="{{ old('dreportofwaste[]', ' ') }}"></td>
                                        <td><input class="form-control" type="text" id="add_p" name="dreportofwaste[]" required value="{{ old('dreportofwaste[]', ' ') }}"></td>
                                        <td></td>
                                    </tr>
                                    </tbody>

                                    <td><button type="button" name="add" id="drwcccadd" class="btn btn-outline-primary">+</button></td>
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
                                    <tbody id=dwrcop>
                                    <tr>
                                        <th style="text-align: center">Outlet No.</th>
                                        <th style="text-align: center">Date</th>
                                        <th style="text-align: center">Effluent Flow Rate (m3/day)</th>
                                        <td><input class="form-control" type="text"  id="opn1" name="name1" required ></td>
                                        <td><input class="form-control" type="text"  id="opn2" name="name2" required ></td>
                                        <td><input class="form-control" type="text"  id="opn3" name="name3" required ></td>
                                        <td><input class="form-control" type="text"  id="opn4" name="name4" required ></td>
                                        <td><input class="form-control" type="text"  id="opn5" name="name5" required ></td>
                                        <td><input class="form-control" type="text"  id="opn6" name="name6" required ></td>
                                        <td><input class="form-control" type="text"  id="opn7" name="name7" required ></td>
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
                                        <td><input class="form-control" type="text"  id="opu1" name="unit1" required value="{{ old('unit1', ' ') }}"></td>
                                        <td><input class="form-control" type="text"  id="opu2" name="unit2" required value="{{ old('unit1', ' ') }}"></td>
                                        <td><input class="form-control" type="text"  id="opu3" name="unit3" required value="{{ old('unit3', ' ') }}"></td>
                                        <td><input class="form-control" type="text"  id="opu4" name="unit4" required value="{{ old('unit4', ' ') }}"></td>
                                        <td><input class="form-control" type="text"  id="opu5" name="unit5" required value="{{ old('unit5', ' ') }}"></td>
                                        <td><input class="form-control" type="text"  id="opu6" name="unit6" required value="{{ old('unit6', ' ') }}"></td>
                                        <td><input class="form-control" type="text"  id="opu7" name="unit7" required value="{{ old('unit7', ' ') }}"></td>
                                    </tr>

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

                                    <tr>

                                        <td><input class="form-control" type="text"   name="drowcfop1[]" required value="{{ old('drowcfop1[]', ' ') }}"></td>
                                        <td><input class="form-control" type="date"   name="drowcfop1[]" required value="{{ old('drowcfop1[]', '2001-01-01') }}"></td>
                                        <td><input class="form-control" type="text"   name="drowcfop1[]" required value="{{ old('drowcfop1[]', ' ') }}"></td>
                                        <td><input class="form-control" type="text"   name="drowcfop1[]" required value="{{ old('drowcfop1[]', ' ') }}"></td>
                                        <td><input class="form-control" type="text"   name="drowcfop1[]" required value="{{ old('drowcfop1[]', ' ') }}"></td>
                                        <td><input class="form-control" type="text"   name="drowcfop1[]" required value="{{ old('drowcfop1[]', ' ') }}"></td>
                                        <td><input class="form-control" type="text"   name="drowcfop1[]" required value="{{ old('drowcfop1[]', ' ') }}"></td>
                                        <td><input class="form-control" type="text"   name="drowcfop1[]" required value="{{ old('drowcfop1[]', ' ') }}"></td>
                                        <td><input class="form-control" type="text"   name="drowcfop1[]" required value="{{ old('drowcfop1[]', ' ') }}"></td>
                                        <td><input class="form-control" type="text"   name="drowcfop1[]" required value="{{ old('drowcfop1[]', ' ') }}"></td>
                                        <td></td>
                                    </tr>






                                    </tbody>
                                    <h3 class="mt-3 mx-2 text-success">DETAILED REPORT OF WASTEWATER CHARACTERISTICS FOR OTHER POLLUTANTS</h3>

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
                                    <a href="{{ route('view2',['id' => Auth::id()]) }}" class="btn btn-lg border bg-light">Previous</a>
                                              <!-- <a href="{{ url('moduleFour') }}" class="btn btn-lg btn-info">Next</a> -->
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


