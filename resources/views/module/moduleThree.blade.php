
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
                                <p class="text-primary my-0">1. Put "N/A" for field not applicable to you.</p>
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


                                    <tbody>
                                    <tr>
                                        <td>Domestic wastewater (cubicmeters/day)</td>
                                        <td><input class="form-control" type="text" style="text-align:center" name="domwaste" id="dww" value="{{ old('domwaste', 'N/A') }}"></td>

                                        <td></td>
                                        <td>Processs wastewater (cubicmeters/day)</td>
                                        <td><input class="form-control" type="text" style="text-align:center" name="processwaste" id="pww" value="{{ old('processwaste', 'N/A') }}"></td>
                                    </tr>
                                    </tbody>

                                    <tbody>
                                    <tr>
                                        <td>Cooling water (cubicmeters/day)</td>
                                        <td><input class="form-control" type="text" style="text-align:center" name="coolingw" id="cwmd" value="{{ old('coolingw', 'N/A') }}"></td>

                                        <td>
                                        <td class="grid-rows-1 grid-cols-2"><label for="othern">Others</label>
                                            <input class="form-control inline" type="text" style="text-align:center" name="othern" id="otn" value="{{ old('othern', 'N/A') }}"></td>
                                        <td> <label for="othercm">(cubicmeters/day)</label>
                                            <input class="form-control" type="text" style="text-align:center" name="othercm" id="ocmd" value="{{ old('othercm', 'N/A') }}"></td>
                                        </td>
                                    </tr>
                                    </tbody>

                                    <tbody>
                                    <tr>
                                        <td>Waste water, equipment (cubicmeters/day)</td>
                                        <td><input class="form-control" type="text" style="text-align:center" name="wequip" id="wweq" value="{{ old('wequip', 'N/A') }}"></td>

                                        <td></td>
                                        <td>Waste water, floor (cubicmeters/day)</td>
                                        <td><input class="form-control" type="text" style="text-align:center" name="wwfloor" id="wwfl" value="{{ old('wwfloor', 'N/A') }}"></td>

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
                                        <td><input class="form-control" type="text" name="pemonth1" id="pem1" value="{{ old('pemonth1', 'N/A') }}"></td>
                                        <td><input class="form-control"type="text" name="pemonth2" id="pem2" value="{{ old('pemonth2', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text" name="pemonth3" id="pem3" value="{{ old('pemonth3', 'N/A') }}"></td>
                                    </tr>
                                    </tbody>


                                    <tbody id="pecost">
                                    <tr>
                                        <td>Person employed, (cost)</td>
                                        <td><input class="form-control" type="text" name="pecmonth1" id="pecm1" value="{{ old('pecmonth1', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text" name="pecmonth2" id="pecm2" value="{{ old('pecmonth2', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text" name="pecmonth3" id="pecm3" value="{{ old('pecmonth3', 'N/A') }}"></td>
                                    </tr>
                                    </tbody>

                                    <tbody id="cocwtp">
                                    <tr>
                                        <td>Cost of Chemicals used by WTP</td>
                                        <td><input class="form-control" type="text" name="cocw1" id="cocwm1" value="{{ old('cocwm1', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text" name="cocw2" id="cocwm2" value="{{ old('cocwm2', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text" name="cocw3" id="cocwm3" value="{{ old('cocwm3', 'N/A') }}"></td>
                                    </tr>
                                    </tbody>

                                    <tbody id="ucwtp">
                                    <tr>
                                        <td>Utility Costs of WTP(electricity & water)</td>
                                        <td><input class="form-control" type="text" name="ucw1" id="ucwm1" value="{{ old('ucwm1', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text" name="ucw2" id="ucwm2" value="{{ old('ucwm2', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text" name="ucw3" id="ucwm3" value="{{ old('ucwm3', 'N/A') }}"></td>
                                    </tr>
                                    </tbody>

                                    <tbody id="aoc">
                                    <tr>
                                        <td>Administrative and Overhead Costs</td>
                                        <td><input class="form-control" type="text" name="aoc1" id="aocm1" value="{{ old('aocm1', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text" name="aoc2" id="aocm2" value="{{ old('aocm2', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text" name="aoc3" id="aocm3" value="{{ old('aocm3', 'N/A') }}"></td>
                                    </tr>
                                    </tbody>

                                    <tbody id="colab">
                                    <tr>
                                        <td>Cost of operating in-house laboratory</td>
                                        <td><input class="form-control" type="text" name="colab1" id="colabm1" value="{{ old('colabm1', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text" name="colab2" id="colabm2" value="{{ old('colabm2', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text" name="colab3" id="colabm3" value="{{ old('colabm3', 'N/A') }}"></td>
                                    </tr>
                                    </tbody>

                                    <tbody id="nai">
                                    <tr>
                                        <td>New/Additional Investments in WTP <br> (description)</td>
                                        <td><input class="form-control" type="text" name="nai1" id="naim1" value="{{ old('naim1', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text" name="nai2" id="naim2" value="{{ old('naim2', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text" name="nai3" id="naim3" value="{{ old('naim3', 'N/A') }}"></td>
                                    </tr>
                                    </tbody>


                                    <tbody id="cnai">
                                    <tr>
                                        <td>Costs of New/Add Investments <br> (description)</td>
                                        <td><input class="form-control" type="text" name="cnai1" id="cnaim1" value="{{ old('cnaim1', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text" name="cnai2" id="cnaim2" value="{{ old('cnaim2', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text" name="cnai3" id="cnaim3" value="{{ old('cnaim3', 'N/A') }}"></td>
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
                                        <td ><input class="form-control" type="text" name="dischargeLocation[]" ></td>
                                        <td><input class="form-control" type="text"  id="lo" name="dischargeLocation[]" value="{{ old('dischargeLocation[]', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"  id="nrwb" name="dischargeLocation[]" value="{{ old('dischargeLocation[]', 'N/A') }}"></td>
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
                                        <td><input class="form-control" type="text" name="unit_parameter" id="upara" value="{{ old('unit_parameter') }}" ></td>
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
                                        <td><input class="form-control" type="text" name="dreportofwaste[]" value="{{ old('dreportofwaste[]', 'N/A') }}"></td>
                                        <td ><input class="form-control" type="date"  id="wcdate" name="dreportofwaste[]" value="{{ old('dreportofwaste[]', '2001-01-01') }}"></td>
                                        <td><input class="form-control" type="text"  id="nfr" name="dreportofwaste[]" value="{{ old('dreportofwaste[]', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"  id="bod" name="dreportofwaste[]" value="{{ old('dreportofwaste[]', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"  id="tss" name="dreportofwaste[]" value="{{ old('dreportofwaste[]', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"  id="clr" name="dreportofwaste[]" value="{{ old('dreportofwaste[]', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"  id="phl" name="dreportofwaste[]" value="{{ old('dreportofwaste[]', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"  id="oag" name="dreportofwaste[]" value="{{ old('dreportofwaste[]', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"  id="tempr" name="dreportofwaste[]" value="{{ old('dreportofwaste[]', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text" id="add_p" name="dreportofwaste[]" value="{{ old('dreportofwaste[]', 'N/A') }}"></td>
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
                                        <td><input class="form-control" type="text"  id="opn1" name="name1" value="{{ old('name1', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"  id="opn2" name="name2" value="{{ old('name2', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"  id="opn3" name="name3" value="{{ old('name3', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"  id="opn4" name="name4" value="{{ old('name4', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"  id="opn5" name="name5" value="{{ old('name5', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"  id="opn6" name="name6" value="{{ old('name6', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"  id="opn7" name="name7" value="{{ old('name7', 'N/A') }}"></td>
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
                                        <td><input class="form-control" type="text"  id="opu1" name="unit1" value="{{ old('unit1', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"  id="opu2" name="unit2" value="{{ old('unit1', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"  id="opu3" name="unit3" value="{{ old('unit3', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"  id="opu4" name="unit4" value="{{ old('unit4', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"  id="opu5" name="unit5" value="{{ old('unit5', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"  id="opu6" name="unit6" value="{{ old('unit6', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"  id="opu7" name="unit7" value="{{ old('unit7', 'N/A') }}"></td>
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

                                        <td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', 'N/A') }}"></td>
                                        <td><input class="form-control" type="date"   name="drowcfop1[]" value="{{ old('drowcfop1[]', '2001-01-01') }}"></td>
                                        <td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', 'N/A') }}"></td>
                                        <td><input class="form-control" type="text"   name="drowcfop1[]" value="{{ old('drowcfop1[]', 'N/A') }}"></td>
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
                                        <a href="{{ route('module.moduleTwo') }}" class="btn btn-lg border bg-light">Previous</a>
                                        <a href="{{ route('module.moduleFour') }}" class="btn btn-lg btn-info">Next</a>
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


