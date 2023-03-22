

<x-app-layout>

    <title>Environmental Management Bureau Online Services - SMR - General information</title>

    <div class="py-12 ">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 relative">
                {{View::make('module.tabs')}}

                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">



                    <div class="container col ml-4" style="align-content: center">
                        <form action="/saveData" method="post"  enctype="multipart/form-data">
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

                            <div class="container">

                                <div class="row mt-4">

                                    <div class="col-2">
                                        <label for="year" hidden></label>
                                        <select class="form-select" id="year" name="year" required>
                                            <option selected disabled value="">SELECT</option>
                                            <option class="">2025</option>
                                            <option class="">2024</option>
                                            <option class="">2023</option>
                                            <option class="">2022</option>
                                            <option class="">2021</option>
                                            <option class="">2020</option>
                                            <option class="">2019</option>
                                            <option class="">2018</option>
                                            <option class="">2017</option>
                                            <option class="">2016</option>
                                            <option class="">2015</option>
                                        </select>

                                        <div class="invalid-feedback">
                                            Please select a valid region.
                                        </div>

                                    </div>

                                    <div class="col-2">
                                        <label for="quarter" hidden></label>
                                        <select class="form-select" id="quarter" name="quarter" required>
                                            <option selected disabled value="">SELECT</option>
                                            <option class="">1st Quarter</option>
                                            <option class="">2nd Quarter</option>
                                            <option class="">3rd Quarter</option>
                                            <option class="">4th Quarter</option>
                                        </select>

                                        <div class="invalid-feedback">
                                            Please select a valid region.
                                        </div>

                                    </div>

                                    <div class="col" style="margin-left: 5%">
                                        <p class="mx-auto mt-2">QUARTERLY SELF-MONITORING REPORT</p>
                                    </div>

                                </div>
                            </div>

                            <div class="card p-3">


                                <!-- Message input -->
                                <div class="col">
                                    <p class="text-primary my-0">Note.</p>
                                    <p class="text-primary my-0">1. Put "N/A" for field not applicable to you.</p>
                                    <p class="text-primary my-0">2. You Can now Export data on Each module by clicking "EXPORT" Link
                                        Below.</p>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <p class="p-1 mt-3  text-light " style="background-color:gray; font-size:20px ">
                                            MODULE 1: GENERAL INFORMATION
                                            <a href="/pdf" class="btn btn-lg float-right " ><img src="/images/printpdflogo.png" class="inline" height="40px" width="50px" style="backgorund-color:gray;"> EXPORT PDF</a>
                                        </p>

                                    </div>
                                </div>


                                <div class="mb-2">
                                    <div class="col-11 mx-auto">
                                        <p>Name of the Plant</p>
                                        <label for="plant" hidden></label>
                                        <select class="form-select" id="plant" name="plantname" required>
                                            <option selected disabled value="">-- Select --</option>
                                            @foreach ($addfacility as $data)
                                                @if ($data->userid == Auth::id())
                                                <option value="{{$data->embregion}}- {{$data->embid}}  {{$data->establishment}} " @if(old('plantname') == $data->embregion && $data->embid && $data->establishment) selected @endif >
                                                    {{$data->embregion}}- {{$data->embid}}  {{$data->establishment}}
                                                </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid region.
                                        </div>
                                    </div>
                                </div>

                                <!-- Message input class="form-control" -->
                                <div class="container pt-4">
                                    <P class="text-secondary ml-3 mt-3">Please provide the necessary revised, corrected or updated
                                        information not contained in your <br> General Information Sheet.</P>
                                </div>


                                <div class="container">
                                    <label for="description" hidden></label>
                                    <textarea name="description" class="form-control" id="description" cols="40" rows="10"
                                              style="overflow:scroll; overflow-x:hidden" required></textarea>
                                </div>

                                <table class="table table-borderless table-hover">
                                    <h3 class="mt-3 mx-2 text-success">DENR PERMITS/LICENSE/CLEARANCES</h3>

                                    <thead>
                                    <tr>
                                        <th></th>

                                        <th>Environmental Laws</th>
                                        <th></th>
                                        <th>Permits</th>
                                        <th>Data issued</th>
                                        <th>Expiry Data</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td>RA 9275</td>
                                        <td>A/C</td>
                                        <td>
                                            <label for="ACPermit" hidden></label>
                                            <input class="form-control" type="text" name="ACPermit" id="ACPermit" value="{{ old('ACPermit', 'N/A') }}" required>
                                        </td>
                                        <td>
                                            <label for="ACIssued" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="ACIssued"
                                                   id="ACIssued" required>
                                        </td>
                                        <td>
                                            <label for="ACExpire" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01" type="date" name="ACExpire"
                                                   id="ACExpire" required>
                                        </td>
                                    </tr>
                                    </tbody>



                                    <tbody id="dynamicAddRemove">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>DP no.</td>
                                        <td>
                                            <label for="dpno" hidden></label>
                                            <input class="form-control" type="text" name="dpno[]" id="dpno" value="{{ old('dpno', 'N/A') }}" required>
                                        </td>
                                        <td>
                                            <label for="dpno" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01" type="date" name="dpno[]" id="dpno"
                                                   required>
                                        </td>
                                        <td>
                                            <label for="dpno" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01" type="date" name="dpno[]" id="dpnoe"
                                                   required>
                                        </td>

                                    </tr>

                                    </tbody>

                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><button type="button" name="add" id="dynamic-ar"
                                                class="btn btn-outline-primary">+</button></td>
                                    <td></td>
                                    <td></td>


                                    <tbody id=pd>
                                    <tr>
                                        <td></td>
                                        <td>PD 1586</td>
                                        <td>ECC/CNC no.</td>
                                        <td>
                                            <label for="cncno" hidden></label>
                                            <input class="form-control" type="text" name="cncno[]" id="cncno" value="{{ old('cncno', 'N/A') }}" required>
                                        </td>
                                        <td>
                                            <label for="cncno" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="cncno[]"
                                                   id="cncno" required>
                                        </td>
                                        <td>
                                            <label for="cncno" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="cncno[]"
                                                   id="cncno" required>
                                        </td>
                                    </tr>
                                    </tbody>

                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><button type="button" name="add" id="ECC" class="btn btn-outline-primary">+</button>
                                    </td>
                                    <td></td>
                                    <td></td>


                                    <!-- DENR REG -->
                                    <tbody id="reg">
                                    <tr>
                                        <td></td>
                                        <td>RA 6969</td>
                                        <td>DENR Registry ID</td>
                                        <td>
                                            <label for="DENRpermit" hidden></label>
                                            <input class="form-control" type="text" name="DENRpermit" id="DENRpermit" value="{{ old('DENRpermit', 'N/A') }}" required>
                                        </td>
                                        <td>
                                            <label for="DENRdateIssued" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01" type="date" name="DENRdateIssued"
                                                   id="DENRdateIssued" required>
                                        </td>
                                        <td>
                                            <label for="DENRdateExpired" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01" type="date" name="DENRdateExpired"
                                                   id="DENRdateExpired" required>
                                        </td>

                                    </tr>
                                    </tbody>

                                    <!-- Transporter-->
                                    <tbody id="trans">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>Transporter Registration</td>
                                        <td>
                                            <label for="Transportpermit" hidden></label>
                                            <input class="form-control" type="text" name="Transportpermit" id="Transportpermit"
                                                   value="{{ old('Transportpermit', 'N/A') }}" required>
                                        </td>
                                        <td>
                                            <label for="TransportdateIssued" hidden></label>
                                            <input class="form-select" placeholder="Date: "value="2001-01-01"  type="date"
                                                   name="TransportdateIssued" id="TransportdateIssued" required>
                                        </td>
                                        <td>
                                            <label for="TransportdateExpired" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01" type="date"
                                                   name="TransportdateExpired" id="TransportdateExpired" required>
                                        </td>
                                    </tr>
                                    </tbody>

                                    <!-- TSD -->
                                    <tbody id="tsd">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>TSD Registration</td>
                                        <td>
                                            <label for="TSDpermit" hidden></label>
                                            <input class="form-control" type="text" name="TSDpermit" id="TSDpermit" value="{{ old('TSDpermit', 'N/A') }}" required>
                                        </td>
                                        <td>
                                            <label for="TSDdateIssued" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01" type="date" name="TSDdateIssued"
                                                   id="TSDdateIssued" required>
                                        </td>
                                        <td>
                                            <label for="TSDdateExpired" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01" type="date" name="TSDdateExpired"
                                                   id="TSDdateExpired" required>
                                        </td>
                                    </tr>
                                    </tbody>

                                    <!-- CCO Registration -->

                                    <tbody id=cco>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>CCO Registration</td>
                                        <td>
                                            <label for="ccoreg" hidden></label>
                                            <input class="form-control" type="text" name="ccoreg[]" id="ccoreg" value="{{ old('ccoreg', 'N/A') }}" required>
                                        </td>
                                        <td>
                                            <label for="ccoreg" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01"
                                                   type="date" name="ccoreg[]" id="ccoreg" required>
                                        </td>
                                        <td>
                                            <label for="ccoreg" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01"
                                                   type="date" name="ccoreg[]" id="ccoreg" required>
                                        </td>
                                    </tr>
                                    </tbody>

                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><button type="button" name="add" id="ccoregister" class="btn btn-outline-primary">+</button>
                                    </td>
                                    <td></td>
                                    <td></td>

                                    <!-- Importation Clearance number -->
                                    <tbody id="importation">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>Importation Clearance No.</td>
                                        <td>
                                            <label for="import" hidden></label>
                                            <input class="form-control" type="text" name="import[]" id="import" value="{{ old('import', 'N/A') }}" required>
                                        </td>
                                        <td>
                                            <label for="import" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01" type="date" name="import[]"
                                                   id="import" required>
                                        </td>
                                        <td>
                                            <label for="import" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01" type="date" name="import[]"
                                                   id="import" required>
                                        </td>
                                    </tr>
                                    </tbody>

                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><button type="button" name="add" id="imp" class="btn btn-outline-primary">+</button>
                                    </td>
                                    <td></td>
                                    <td></td>


                                    <!-- Permit to Transport -->
                                    <tbody id="permit">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>Permit to Transport</td>
                                        <td>
                                            <label for="permit" hidden></label>
                                            <input class="form-control" type="text" name="permit[]" id="permit" value="{{ old('permit', 'N/A') }}" required>
                                        </td>
                                        <td>
                                            <label for="permit" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01" type="date" name="permit[]" id=""
                                                   required>
                                        </td>
                                        <td>
                                            <label for="permit" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01" type="date" name="permit[]" id=""
                                                   required>
                                        </td>
                                    </tr>
                                    </tbody>

                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><button type="button" name="add" id="ptt" class="btn btn-outline-primary">+</button>
                                    </td>
                                    <td></td>
                                    <td></td>


                                    <!-- Small Quantity Importation -->
                                    <tbody id="smallq">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td> Small Quantity Importation</td>
                                        <td>
                                            <label for="smallquan" hidden></label>
                                            <input class="form-control" type="text" name="smallquan[]" id="smallquan" value="{{ old('smallquan', 'N/A') }}" required>
                                        </td>
                                        <td>
                                            <label for="smallquan" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="smallquan[]"
                                                   id="smallquan" required>
                                        </td>
                                        <td>
                                            <label for="smallquan" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="smallquan[]"
                                                   id="smallquan" required>
                                        </td>
                                    </tr>
                                    </tbody>

                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><button type="button" name="add" id="sqi" class="btn btn-outline-primary">+</button>
                                    </td>
                                    <td></td>
                                    <td></td>

                                    <!-- Priority Chemical list -->
                                    <tbody id="prio">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>Priority Chemical List</td>
                                        <td>
                                            <label for="priority" hidden></label>
                                            <input class="form-control" type="text" name="priority[]" id="priority" value="{{ old('priority', 'N/A') }}" required>
                                        </td>
                                        <td>
                                            <label for="priority" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="priority[]"
                                                   id="priority" required>
                                        </td>
                                        <td>
                                            <label for="priority" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="priority[]"
                                                   id="priority" required>
                                        </td>
                                    </tr>
                                    </tbody>

                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><button type="button" name="add" id="priochem"
                                                class="btn btn-outline-primary">+</button></td>
                                    <td></td>
                                    <td></td>


                                    <!-- PICCS -->
                                    <tbody id="piccs">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>PICCS</td>
                                        <td>
                                            <label for="piccs" hidden></label>
                                            <input class="form-control" type="text" name="piccs[]" id="piccs" value="{{ old('piccs', 'N/A') }}" required>
                                        </td>
                                        <td>
                                            <label for="piccs" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="piccs[]"
                                                   id="piccs" required>
                                        </td>
                                        <td>
                                            <label for="piccs" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="piccs[]"
                                                   id="piccs" required>
                                        </td>
                                    </tr>
                                    </tbody>

                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><button type="button" name="add" id="pccs"
                                                class="btn btn-outline-primary">+</button></td>
                                    <td></td>
                                    <td></td>

                                    <!-- PMPIN -->
                                    <tbody id="pmpin">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>PMPIN</td>
                                        <td>
                                            <label for="pmpin" hidden></label>
                                            <input class="form-control" type="text" name="pmpin[]" id="pmpin" value="{{ old('pmpin', 'N/A') }}" required>
                                        </td>
                                        <td>
                                            <label for="pmpin" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="pmpin[]"
                                                   id="pmpin" required>
                                        </td>
                                        <td>
                                            <label for="pmpin" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="pmpin[]"
                                                   id="pmpin" required>
                                        </td>
                                    </tr>
                                    </tbody>

                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><button type="button" name="add" id="pin" class="btn btn-outline-primary">+</button>
                                    </td>
                                    <td></td>
                                    <td></td>


                                    <!-- ACno2 -->
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td>RA 8749</td>
                                        <td>A/C no.</td>
                                        <td>
                                            <label for="ACNOPermit" hidden></label>
                                            <input class="form-control" type="text" name="ACNOPermit" id="ACNOPermit" value="{{ old('ACNOPermit', 'N/A') }}" required>
                                        </td>
                                        <td>
                                            <label for="ACNOIssued" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="ACNOIssued"
                                                   id="ACNOIssued" required>
                                        </td>
                                        <td>
                                            <label for="ACNOExpired" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="ACNOExpired"
                                                   id="ACNOExpired" required>
                                        </td>

                                    </tr>
                                    </tbody>

                                    <!-- PO no -->
                                    <tbody id="pono">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>PO No.</td>
                                        <td>
                                            <label for="pono" hidden></label>
                                            <input class="form-control" type="text" name="pono[]" id="pono" value="{{ old('pono', 'N/A') }}" required>
                                        </td>
                                        <td>
                                            <label for="pono" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="pono[]" id="pono"
                                                   required>
                                        </td>
                                        <td>
                                            <label for="pono" hidden></label>
                                            <input class="form-select" placeholder="Date: " value="2001-01-01"  type="date" name="pono[]" id="pono"
                                                   required>
                                        </td>
                                    </tr>
                                    </tbody>

                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><button type="button" name="add" id="ponum"
                                                class="btn btn-outline-primary">+</button></td>
                                    <td></td>
                                    <td></td>


                                </table>

                                <!-- Operation -->
                                <table class="table table-borderless table-hover">
                                    <h3 class="mt-3 mx-2 text-success">OPERATION</h3>

                                    <thead>

                                    <th></th>
                                    <th></th>
                                    <div class="d-flex justify-content-start">
                                        <th>Operating hours/day</th>
                                        <th>Operating days/week</th>
                                        <th># shift/day</th>
                                    </div>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>Average</td>
                                        <td></td>
                                        <td>
                                            <label for="aveOPhours" hidden></label>
                                            <input class="form-control" type="text" name="aveOPhours" value=" " id="aveOPhours"
                                                   value="{{old('aveOPhours')}}" required>
                                        </td>
                                        <td>
                                            <label for="aveOPdays" hidden></label>
                                            <input class="form-control" type="text" name="aveOPdays" value=" " id="aveOPdays"
                                                   value="{{old('aveOPdays')}}" required>
                                        </td>
                                        <td>
                                            <label for="aveOPshift" hidden></label>
                                            <input class="form-control" type="text" name="aveOPshift" value=" " id="aveOPshift"
                                                   value="{{old('aveOPshift')}}" required>
                                        </td>

                                    </tr>
                                    </tbody>

                                    <tbody>
                                    <tr>
                                        <td>Maximum</td>
                                        <td></td>
                                        <td>
                                            <label for="maxOPhours" hidden></label>
                                            <input class="form-control" type="text" name="maxOPhours" id="maxOPhours" value="{{old('maxOPhours')}}" required>
                                        </td>
                                        <td>
                                            <label for="maxOPdays" hidden></label>
                                            <input class="form-control" type="text" name="maxOPdays" id="maxOPdays" value="{{old('maxOPdays')}}" required>
                                        </td>
                                        <td>
                                            <label for="maxOPshift" hidden></label>
                                            <input class="form-control" type="text" name="maxOPshift" id="maxOPshift" value="{{old('maxOPshift')}}" required>
                                        </td>

                                    </tr>
                                    </tbody>

                                </table>

                                <!-- OPERATION / PRODUCTION / QUALITY-->
                                <table class="table table-borderless table-hover">
                                    <h3 class="mt-3 mx-2 text-success">OPERATION / PRODUCTION / QUALITY</h3>

                                    <tbody>
                                    <tr>
                                        <td>Average Daily Production Output</td>
                                        <td>
                                            <label for="aveProduction" hidden></label>
                                            <input class="form-control" type="text" name="aveProduction" id="aveProduction"
                                                   value="{{old('aveProduction')}}" required>
                                        </td>
                                        <td>Total Output This Quarter</td>
                                        <td>
                                            <label for="totalOutput" hidden></label>
                                            <input class="form-control" type="text" name="totalOutput" id="totalOutput"
                                                   value="{{old('totalOutput')}}" required>
                                        </td>
                                    </tr>
                                    </tbody>

                                    <tbody>
                                    <tr>
                                        <td>Total Consuption This Quarter</td>
                                        <td>
                                            <label for="totalConsumption" hidden></label>
                                            <input class="form-control" type="text" name="totalConsumption"
                                                   id="totalConsumption" value="{{old('totalConsumption')}}" required>
                                        </td>
                                        <td>Total Electric Consumption this Quarter (kwh)</td>
                                        <td>
                                            <label for="totalElectric" hidden></label>
                                            <input class="form-control" type="text" name="totalElectric" id="totalElectric"
                                                   value="{{old('totalElectric')}}" required>
                                        </td>

                                    </tr>
                                    </tbody>

                                </table>


                            </div>

                            <div class="mx-auto">
                                <p class="text-secondary my-0">Attached water bills and/or electricity bills</p>
                                <i class="text-secondary">Note: File name should not contain the following characters * ? " : ! @ #
                                    ; + ' | $ $ , <> \ / ( ) { } [ ]</i>
                                <label for="fls" hidden></label>
                                <input class="form-control my-3" name="file" type="file" style="width:300px" id="fls" multiple required>
                            </div>





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
