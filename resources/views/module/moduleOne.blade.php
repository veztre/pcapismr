

<x-app-layout>

    <title>Environmental Management Bureau Online Services - SMR - General information</title>

    <div class="py-12" style="margin-top:0">
        <div class="container-fluid">
            <div class="container">
                {{View::make('module.tabs')}}

                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg container">


                    <div class="container">
                        <form id="myForm" action="/saveData" method="post"  enctype="multipart/form-data">
                            @csrf
                            <!-- {{ csrf_field() }} -->
                            <br>

                            <div class="row">
                                <div class="col-8">
                                    <h1 style="text-align: center"> POLLUTION CONTROL ASSOCIATION OF THE PHILIPPINES, INC. (PCAPI)</h1>
                                    <h2 style="text-align: center">SELF- MONITORING REPORT TRAINING MODULE</h2>
                                </div>
                                <div class="col-4">
                                    <div class="card mr-4">
                                        <div class="mt-1 mx-3">
                                            Reference no.
                                        </div>
                                        <div class="card-body">
                                            {{--reference no--}}
                                            <input type="text" class="form-control mt-0" placeholder="" value="{{ $referencen }}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="row mt-4">

                                    <div class="col-3 position-relative">
                                        {{--dropdown year--}}
                                        <label for="year">Year</label>
                                        <select class="form-select validate-input" id="year" name="year" required>
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
                                        <span class="checkmark"></span>
                                        <div class="invalid-feedback">
                                            Please select a valid year.
                                        </div>

                                    </div>

                                    <div class="col-3 position-relative">
                                        {{--dropdown quarter--}}
                                        <label for="quarter">Quarter</label>
                                        <select class="form-select validate-input" id="quarter" name="quarter" required>
                                            <option selected disabled value="">SELECT</option>
                                            <option class="">1st Quarter</option>
                                            <option class="">2nd Quarter</option>
                                            <option class="">3rd Quarter</option>
                                            <option class="">4th Quarter</option>
                                        </select>
                                        <span class="checkmark"></span>
                                        <div class="invalid-feedback">
                                            Please select a valid quarter.
                                        </div>

                                    </div>

                                    <div class="col-6 text-center pt-6">
                                        <p>QUARTERLY SELF-MONITORING REPORT</p>
                                    </div>

                                </div>
                            </div>

                            <div class="card p-3">


                                <!-- Message input -->
                                <div class="col">
                                    <p class="text-primary my-0">Note.</p>
                                    <p class="text-primary my-0">1. Put " " for field not applicable to you.</p>
                                    <p class="text-primary my-0">2. You Can now Export data on Each module by clicking "EXPORT" Link
                                        Below.</p>
                                </div>

                                    <div class="row">
                                        {{--pdf export button--}}
                                        <p class="col p-1 mt-3  text-light " style="background-color:gray; font-size:20px ">
                                            MODULE 1: GENERAL INFORMATION
                                            <a href="/pdf" class="btn btn-lg float-right " ><img src="/images/printpdflogo.png" class="inline" height="40px" width="50px" style="backgorund-color:gray;"> EXPORT PDF</a>
                                        </p>

                                    </div>


                                <div class="row ">
                                    <div class="col mx-auto position-relative">
                                        {{--Plant / add facility data--}}
                                        <p>Name of the Plant</p>
                                        <label for="plant" hidden></label>
                                        <select class="form-select text-center validate-input" id="plant" name="plantname" required>
                                            <option selected disabled value="">-- Select --</option>
                                            @foreach ($addfacility as $data)
                                                @if ($data->userid == Auth::id())
                                                    <option value="{{$data->embregion}}- {{$data->embid}}  {{$data->establishment}} " @if(old('plantname') == $data->embregion && $data->embid && $data->establishment) selected @endif >
                                                        {{$data->embregion}}- {{$data->embid}}  {{$data->establishment}}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <span class="checkmark"></span>
                                        <div class="invalid-feedback">
                                            Please select a valid plant.
                                        </div>
                                    </div>
                                </div>

                                <!-- Message input class="form-control" -->
                                <div class="row">
                                    <P class="col text-secondary ml-3 mt-3">Please provide the necessary revised, corrected or updated
                                        information not contained in your <br> General Information Sheet.</P>
                                </div>


                                <div class="row">
                                    {{--General Information sheet--}}
                                    <div class="col">
                                        <label class="fw-bold" for="description">Description</label>
                                        <textarea name="description" class="form-control" id="description" cols="40" rows="10"
                                              style="overflow:scroll; overflow-x:hidden" required></textarea>
                                    </div>
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

                                    {{--A/C data table--}}
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td>RA 9275</td>
                                        <td>A/C</td>
                                        <td class="position-relative">
                                            <input class="form-control validate-input" type="text" name="ACPermit" id="ACPermit" value="{{ old('ACPermit', ' ') }}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                             <input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="ACIssued"
                                                   id="ACIssued" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01" type="date" name="ACExpire"
                                                   id="ACExpire" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    </tbody>


                                    {{--DP no. data table with add loop--}}
                                    <tbody id="dynamicAddRemove">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>DP No.</td>
                                        <td class="position-relative">
                                            <input class="form-control validate-input" type="text" name="dpno[]" id="dpno" value="{{ old('dpno', ' ') }}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01" type="date" name="dpno[]" id="dpno"
                                                   required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01" type="date" name="dpno[]" id="dpnoe"
                                                   required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td><button type="button" name="add" id="dynamic-ar"
                                                class="btn btn-outline-primary">+</button></td>
                                     </tr>

                                    </tbody>

                                    {{--ECC/CNC no. data table with add loop--}}
                                    <tbody id=pd>
                                    <tr>
                                        <td></td>
                                        <td>PD 1586</td>
                                        <td>ECC/CNC No.</td>
                                        <td class="position-relative">
                                            <label for="cncno" hidden></label>
                                            <input class="form-control validate-input" type="text" name="cncno[]" id="cncno" value="{{ old('cncno', ' ') }}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="cncno" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="cncno[]"
                                                   id="cncno" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="cncno" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="cncno[]"
                                                   id="cncno" required>
                                            <span class="checkmark"></span>
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


                                    {{--DENR REG --}}
                                    <tbody id="reg">
                                    <tr>
                                        <td></td>
                                        <td>RA 6969</td>
                                        <td>DENR Registry ID</td>
                                        <td class="position-relative">
                                            <label for="DENRpermit" hidden></label>
                                            <input class="form-control validate-input" type="text" name="DENRpermit" id="DENRpermit" value="{{ old('DENRpermit', ' ') }}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="DENRdateIssued" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01" type="date" name="DENRdateIssued"
                                                   id="DENRdateIssued" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="DENRdateExpired" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01" type="date" name="DENRdateExpired"
                                                   id="DENRdateExpired" required>
                                            <span class="checkmark"></span>
                                        </td>

                                    </tr>
                                    </tbody>

                                    {{--Transporter Reg--}}
                                    <tbody id="trans">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>Transporter Registration</td>
                                        <td class="position-relative">
                                            <label for="Transportpermit" hidden></label>
                                            <input class="form-control validate-input" type="text" name="Transportpermit" id="Transportpermit"
                                                   value="{{ old('Transportpermit', ' ') }}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="TransportdateIssued" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: "value="2001-01-01"  type="date"
                                                   name="TransportdateIssued" id="TransportdateIssued" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="TransportdateExpired" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01" type="date"
                                                   name="TransportdateExpired" id="TransportdateExpired" required>
                                            <span class="checkmark"></span>
                                        </td>
                                    </tr>
                                    </tbody>

                                    {{--TSD Reg--}}
                                    <tbody id="tsd">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>TSD Registration</td>
                                        <td class="position-relative">
                                            <label for="TSDpermit" hidden></label>
                                            <input class="form-control validate-input" type="text" name="TSDpermit" id="TSDpermit" value="{{ old('TSDpermit', ' ') }}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="TSDdateIssued" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01" type="date" name="TSDdateIssued"
                                                   id="TSDdateIssued" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="TSDdateExpired" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01" type="date" name="TSDdateExpired"
                                                   id="TSDdateExpired" required>
                                            <span class="checkmark"></span>
                                        </td>
                                    </tr>
                                    </tbody>

                                    {{--CCO Reg data table with add loop--}}
                                    <tbody id=cco>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>CCO Registration</td>
                                        <td class="position-relative">
                                            <label for="ccoreg" hidden></label>
                                            <input class="form-control validate-input" type="text" name="ccoreg[]" id="ccoreg" value="{{ old('ccoreg', ' ') }}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="ccoreg" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01"
                                                   type="date" name="ccoreg[]" id="ccoreg" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="ccoreg" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01"
                                                   type="date" name="ccoreg[]" id="ccoreg" required>
                                            <span class="checkmark"></span>
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

                                    {{--Imporation Clearance no. data table with add loop--}}
                                    <tbody id="importation">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>Importation Clearance No.</td>
                                        <td class="position-relative">
                                            <label for="import" hidden></label>
                                            <input class="form-control validate-input" type="text" name="import[]" id="import" value="{{ old('import', ' ') }}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="import" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01" type="date" name="import[]"
                                                   id="import" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="import" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01" type="date" name="import[]"
                                                   id="import" required>
                                            <span class="checkmark"></span>
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


                                    {{--Permit to Transport data table with add loop--}}
                                    <tbody id="permit">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>Permit to Transport</td>
                                        <td class="position-relative">
                                            <label for="permit" hidden></label>
                                            <input class="form-control validate-input" type="text" name="permit[]" id="permit" value="{{ old('permit', ' ') }}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="permit" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01" type="date" name="permit[]" id=""
                                                   required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="permit" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01" type="date" name="permit[]" id=""
                                                   required>
                                            <span class="checkmark"></span>
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


                                    {{--Small Quantity Importation data table with add loop--}}
                                    <tbody id="smallq">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td> Small Quantity Importation</td>
                                        <td class="position-relative">
                                            <label for="smallquan" hidden></label>
                                            <input class="form-control validate-input" type="text" name="smallquan[]" id="smallquan" value="{{ old('smallquan', ' ') }}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="smallquan" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="smallquan[]"
                                                   id="smallquan" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="smallquan" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="smallquan[]"
                                                   id="smallquan" required>
                                            <span class="checkmark"></span>
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

                                    {{--Priority Chemical list data table with add loop--}}
                                    <tbody id="prio">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>Priority Chemical List</td>
                                        <td class="position-relative">
                                            <label for="priority" hidden></label>
                                            <input class="form-control validate-input" type="text" name="priority[]" id="priority" value="{{ old('priority', ' ') }}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="priority" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="priority[]"
                                                   id="priority" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="priority" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="priority[]"
                                                   id="priority" required>
                                            <span class="checkmark"></span>
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


                                    {{--PICCS data table with add loop--}}
                                    <tbody id="piccs">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>PICCS</td>
                                        <td class="position-relative">
                                            <label for="piccs" hidden></label>
                                            <input class="form-control validate-input" type="text" name="piccs[]" id="piccs" value="{{ old('piccs', ' ') }}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="piccs" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="piccs[]"
                                                   id="piccs" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="piccs" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="piccs[]"
                                                   id="piccs" required>
                                            <span class="checkmark"></span>
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

                                    {{--PMPIN data table with add loop--}}
                                    <tbody id="pmpin">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>PMPIN</td>
                                        <td class="position-relative">
                                            <label for="pmpin" hidden></label>
                                            <input class="form-control validate-input" type="text" name="pmpin[]" id="pmpin" value="{{ old('pmpin', ' ') }}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="pmpin" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="pmpin[]"
                                                   id="pmpin" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="pmpin" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="pmpin[]"
                                                   id="pmpin" required>
                                            <span class="checkmark"></span>
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


                                    {{--A/C no. RA8749 --}}
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td>RA 8749</td>
                                        <td>A/C No.</td>
                                        <td class="position-relative">
                                            <label for="ACNOPermit" hidden></label>
                                            <input class="form-control validate-input" type="text" name="ACNOPermit" id="ACNOPermit" value="{{ old('ACNOPermit', ' ') }}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="ACNOIssued" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="ACNOIssued"
                                                   id="ACNOIssued" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="ACNOExpired" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="ACNOExpired"
                                                   id="ACNOExpired" required>
                                            <span class="checkmark"></span>
                                        </td>

                                    </tr>
                                    </tbody>

                                    {{--PO no. data table with add loop--}}
                                    <tbody id="pono">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>PO No.</td>
                                        <td class="position-relative">
                                            <label for="pono" hidden></label>
                                            <input class="form-control validate-input" type="text" name="pono[]" id="pono" value="{{ old('pono', ' ') }}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="pono" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="pono[]" id="pono"
                                                   required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="pono" hidden></label>
                                            <input class="form-select validate-input" placeholder="Date: " value="2001-01-01"  type="date" name="pono[]" id="pono"
                                                   required>
                                            <span class="checkmark"></span>
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

                                <!-- Operation text input-->
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
                                        <td class="position-relative">
                                            <label for="aveOPhours" hidden></label>
                                            <input class="form-control validate-input" type="text" name="aveOPhours" value=" " id="aveOPhours"
                                                   value="{{old('aveOPhours')}}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="aveOPdays" hidden></label>
                                            <input class="form-control validate-input" type="text" name="aveOPdays" value=" " id="aveOPdays"
                                                   value="{{old('aveOPdays')}}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="aveOPshift" hidden></label>
                                            <input class="form-control validate-input" type="text" name="aveOPshift" value=" " id="aveOPshift"
                                                   value="{{old('aveOPshift')}}" required>
                                            <span class="checkmark"></span>
                                        </td>

                                    </tr>
                                    </tbody>

                                    <tbody>
                                    <tr>
                                        <td>Maximum</td>
                                        <td></td>
                                        <td class="position-relative">
                                            <label for="maxOPhours" hidden></label>
                                            <input class="form-control validate-input" type="text" name="maxOPhours" id="maxOPhours" value="{{old('maxOPhours')}}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="maxOPdays" hidden></label>
                                            <input class="form-control validate-input" type="text" name="maxOPdays" id="maxOPdays" value="{{old('maxOPdays')}}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="maxOPshift" hidden></label>
                                            <input class="form-control validate-input" type="text" name="maxOPshift" id="maxOPshift" value="{{old('maxOPshift')}}" required>
                                            <span class="checkmark"></span>
                                        </td>

                                    </tr>
                                    </tbody>

                                </table>

                                <!-- OPERATION / PRODUCTION / QUALITY text input-->
                                <table class="table table-borderless table-hover">
                                    <h3 class="mt-3 mx-2 text-success">OPERATION / PRODUCTION / QUALITY</h3>

                                    <tbody>
                                    <tr>
                                        <td>Average Daily Production Output</td>
                                        <td class="position-relative">
                                            <label for="aveProduction" hidden></label>
                                            <input class="form-control validate-input" type="text" name="aveProduction" id="aveProduction"
                                                   value="{{old('aveProduction')}}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td>Total Output This Quarter</td>
                                        <td class="position-relative">
                                            <label for="totalOutput" hidden></label>
                                            <input class="form-control validate-input" type="text" name="totalOutput" id="totalOutput"
                                                   value="{{old('totalOutput')}}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                    </tr>
                                    </tbody>

                                    <tbody>
                                    <tr>
                                        <td>Total Consuption This Quarter</td>
                                        <td class="position-relative">
                                            <label for="totalConsumption" hidden></label>
                                            <input class="form-control validate-input" type="text" name="totalConsumption"
                                                   id="totalConsumption" value="{{old('totalConsumption')}}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td>Total Electric Consumption this Quarter (kwh)</td>
                                        <td class="position-relative">
                                            <label for="totalElectric" hidden></label>
                                            <input class="form-control validate-input" type="text" name="totalElectric" id="totalElectric"
                                                   value="{{old('totalElectric')}}" required>
                                            <span class="checkmark"></span>
                                        </td>

                                    </tr>
                                    </tbody>

                                </table>


                            </div>

                            <div class="mx-auto">
                                {{-- upload 20mb pdf--}}
                                <p class="text-secondary my-0">Attached water bills and/or electricity bills</p>
                                <i class="text-secondary">Note: File name should not contain the following characters * ? " : ! @ #
                                    ; + ' | $ $ , <> \ / ( ) { } [ ]</i>
                                <label for="fls" hidden></label>

                                <input class="form-control my-3" name="file[]" type="file" style="width:300px" id="fls" multiple required>

                                <style>
                                    #pdf-error {
                                        color: red;
                                        font-size: 14px;
                                    }
                                </style>

                                <span id="pdf-error"></span>


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

<script>
    config = {
        dateFormat: "Y-m-d"
    }
    flatpickr("input[type=date]", config);
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
