



<x-app-layout>

    <title>Environmental Management Bureau Online Services - SMR - General information</title>

    <div class="py-12" style="margin-top:0">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                {{View::make('module.tabs')}}

                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg container">




                    <div class="container col ml-4" style="align-content: center">
                        <form id="myForm" action="{{ route('moduleOne.update', ['moduleOne' => Auth::user()->id]) }}" method="POST" enctype="multipart/form-data">
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

                            <div class="container">

                                <div class="row mt-4">

                                    <div class="col-2">
                                        <label for="year" hidden></label>
                                        <select class="form-select validate-input" id="year" name="year"  required>
                                            @foreach ($year as $years)

                                                <option value="{{ $years->year }}">{{ $years->year }}</option>
                                                <option value="2025" {{  $years->year  === '2025' ? 'selected' : '' }}>2025</option>
                                                <option value="2024" {{  $years->year  === '2024' ? 'selected' : '' }}>2024</option>
                                                <option value="2023" {{  $years->year  === '2023' ? 'selected' : '' }}>2023</option>
                                                <option value="2022" {{  $years->year  === '2022' ? 'selected' : '' }}>2022</option>
                                                <option value="2021" {{  $years->year  === '2021' ? 'selected' : '' }}>2021</option>
                                                <option value="2020" {{  $years->year  === '2020' ? 'selected' : '' }}>2020</option>
                                                <option value="2019" {{  $years->year  === '2019' ? 'selected' : '' }}>2019</option>
                                                <option value="2018" {{  $years->year  === '2018' ? 'selected' : '' }}>2018</option>
                                                <option value="2017" {{  $years->year  === '2017' ? 'selected' : '' }}>2017</option>
                                                <option value="2016" {{  $years->year  === '2016' ? 'selected' : '' }}>2016</option>
                                                <option value="2015" {{  $years->year  === '2015' ? 'selected' : '' }}>2015</option>

                                            @endforeach
                                        </select>
                                        <span class="checkmark"></span>
                                        <div class="invalid-feedback">
                                            Please select a valid year.
                                        </div>

                                    </div>

                                    <div class="col-2">
                                        <label for="quarter" hidden></label>
                                        <select class="form-select validate-input" id="quarter" name="quarter" required>
                                            @foreach ($quarter as $quarters)

                                                <option value="{{ $quarters->quarter }}">{{ $quarters->quarter }}</option>
                                                <option value="1st Quarter" {{ $quarters->quarter  === '1st Quarter' ? 'selected' : '' }}>1st Quarter</option>
                                                <option value="2nd Quarter" {{  $quarters->quarter === '2nd Quarter' ? 'selected' : '' }}>2nd Quarter</option>
                                                <option value="3rd Quarter" {{  $quarters->quarter  === '3rd Quarter' ? 'selected' : '' }}>3rd Quarter</option>
                                                <option value="4th Quarter" {{  $quarters->quarter  === '4th Quarter' ? 'selected' : '' }}>4th Quarter</option>

                                            @endforeach
                                        </select>
                                        <span class="checkmark"></span>
                                        <div class="invalid-feedback">
                                            Please select a valid quarter.
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
                                        <select class="form-select validate-input" id="plant" name="plantname" required>
                                            @foreach ($plant as $plants)

                                                <option value="{{$plants->plantname}}" >
                                                    {{$plants->plantname}}
                                                </option>

                                            @endforeach
                                        </select>
                                        <span class="checkmark"></span>
                                        <div class="invalid-feedback">
                                            Please select a valid plant.
                                        </div>
                                    </div>
                                </div>

                                <!-- Message input class="form-control" -->
                                <div class="container pt-4">
                                    <P class="text-secondary ml-3 mt-3">Please provide the necessary revised, corrected or updated
                                        information not contained in your <br> General Information Sheet.</P>
                                </div>

                                @foreach ($gic as $gic)

                                    <div class="container">
                            <textarea name="description" class="form-control" id="description" cols="40" rows="10" style="overflow:scroll; overflow-x:hidden" >
                                {{$gic->description}}
                             </textarea>
                                    </div>

                                @endforeach


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
                                    @foreach ($aircon as $air)

                                        <tr>
                                            <td></td>
                                            <td>RA 6969</td>
                                            <td>A/C</td>

                                            <td class="position-relative">
                                                <label for="ACPermit" hidden></label>
                                                <input class="form-control validate-input" type="text" name="ACPermit" id="ACPermit" value="{{$air->permit }}" required>
                                                <span class="checkmark"></span>
                                            </td>
                                            <td class="position-relative">
                                                <label for="ACIssued" hidden></label>
                                                <input class="form-select validate-input" placeholder="Date: " value="{{$air->dateIssued }}"  type="date" name="ACIssued"
                                                       id="ACIssued" required>
                                                <span class="checkmark"></span>
                                            </td>
                                            <td class="position-relative">
                                                <label for="ACExpire" hidden></label>
                                                <input class="form-select validate-input" placeholder="Date: " value="{{$air->dateExpired }}"  type="date" name="ACExpire"
                                                       id="ACExpire" required>
                                                <span class="checkmark"></span>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>



                                    <tbody id="dynamicAddRemove">

                                    @foreach ($dpno as $dp)

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>DP no.</td>
                                            <td class="position-relative">
                                                <label for="dpno" hidden></label>
                                                <input class="form-control validate-input" type="text" name="dpno[]" id="dpno" value="{{ $dp->permit}}" required>
                                                <span class="checkmark"></span>
                                            </td>
                                            <td class="position-relative">
                                                <label for="dpno" hidden></label>
                                                <input class="form-select validate-input" placeholder="Date: " value="{{$dp->dateIssued }}" type="date" name="dpno[]" id="dpno"
                                                       required>
                                                <span class="checkmark"></span>
                                            </td>
                                            <td class="position-relative">
                                                <label for="dpno" hidden></label>
                                                <input class="form-select validate-input" placeholder="Date: " value="{{$dp->dateExpired }}" type="date" name="dpno[]" id="dpnoe"
                                                       required>
                                                <span class="checkmark"></span>
                                            </td>

                                        </tr>

                                    @endforeach

                                    </tbody>

                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><button type="button" name="add" id="dynamic-ar"
                                                class="btn btn-outline-primary">+</button></td>
                                    <td></td>
                                    <td></td>


                                    <tbody id=pd>
                                    @foreach ($cncno as $cnc)


                                        <tr>
                                            <td></td>
                                            <td>PD 1586</td>
                                            <td>ECC/CNC no.</td>
                                            <td class="position-relative">
                                                <label for="cncno" hidden></label>
                                                <input class="form-control validate-input" type="text" name="cncno[]" id="cncno" value="{{$cnc->permit }}" required>
                                                <span class="checkmark"></span>
                                            </td>
                                            <td class="position-relative">
                                                <label for="cncno" hidden></label>
                                                <input class="form-select validate-input" placeholder="Date: " value="{{$cnc->dateIssued }}"  type="date" name="cncno[]"
                                                       id="cncno" required>
                                                <span class="checkmark"></span>
                                            </td>
                                            <td class="position-relative">
                                                <label for="cncno" hidden></label>
                                                <input class="form-select validate-input" placeholder="Date: " value="{{$cnc->dateExpired }}"  type="date" name="cncno[]"
                                                       id="cncno" required>
                                                <span class="checkmark"></span>
                                            </td>
                                        </tr>

                                    @endforeach
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
                                    @foreach ($denrid as $denr)

                                        <tr>
                                            <td></td>
                                            <td>RA 6969</td>
                                            <td>DENR Registry ID</td>
                                            <td class="position-relative">
                                                <label for="DENRpermit" hidden></label>
                                                <input class="form-control validate-input" type="text" name="DENRpermit" id="DENRpermit" value="{{$denr->permit }}" required>
                                                <span class="checkmark"></span>
                                            </td>
                                            <td class="position-relative">
                                                <label for="DENRdateIssued" hidden></label>
                                                <input class="form-select validate-input" placeholder="Date: " value="{{$denr->dateIssued  }}" type="date" name="DENRdateIssued"
                                                       id="DENRdateIssued" required>
                                                <span class="checkmark"></span>
                                            </td>
                                            <td class="position-relative">
                                                <label for="DENRdateExpired" hidden></label>
                                                <input class="form-select validate-input" placeholder="Date: " value="{{$denr->dateExpired  }}" type="date" name="DENRdateExpired"
                                                       id="DENRdateExpired" required>
                                                <span class="checkmark"></span>
                                            </td>

                                        </tr>

                                    @endforeach
                                    </tbody>
                                    @foreach ($transporterReg as $transport)

                                        <!-- Transporter-->
                                        <tbody id="trans">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>Transporter Registration</td>
                                            <td class="position-relative">
                                                <label for="Transportpermit" hidden></label>
                                                <input class="form-control validate-input" type="text" name="Transportpermit" id="Transportpermit"
                                                       value="{{$transport->permit }}" required>
                                                <span class="checkmark"></span>
                                            </td>
                                            <td class="position-relative">
                                                <label for="TransportdateIssued" hidden></label>
                                                <input class="form-select validate-input" placeholder="Date: "value="{{$transport->dateIssued }}"  type="date"
                                                       name="TransportdateIssued" id="TransportdateIssued" required>
                                                <span class="checkmark"></span>
                                            </td>
                                            <td class="position-relative">
                                                <label for="TransportdateExpired" hidden></label>
                                                <input class="form-select validate-input" placeholder="Date: " value="{{$transport->dateExpired }}" type="date"
                                                       name="TransportdateExpired" id="TransportdateExpired" required>
                                                <span class="checkmark"></span>
                                            </td>
                                        </tr>

                                        @endforeach
                                        </tbody>

                                        <!-- TSD -->
                                        <tbody id="tsd">
                                        @foreach ($tsdreg as $tsd)

                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>TSD Registration</td>
                                                <td class="position-relative">
                                                    <label for="TSDpermit" hidden></label>
                                                    <input class="form-control validate-input" type="text" name="TSDpermit" id="TSDpermit" value="{{$tsd->permit }}" required>
                                                    <span class="checkmark"></span>
                                                </td>
                                                <td class="position-relative">
                                                    <label for="TSDdateIssued" hidden></label>
                                                    <input class="form-select validate-input" placeholder="Date: " value="{{$tsd->dateIssued  }}" type="date" name="TSDdateIssued"
                                                           id="TSDdateIssued" required>
                                                    <span class="checkmark"></span>
                                                </td>
                                                <td class="position-relative">
                                                    <label for="TSDdateExpired" hidden></label>
                                                    <input class="form-select validate-input" placeholder="Date: " value="{{$tsd->dateExpired  }}" type="date" name="TSDdateExpired"
                                                           id="TSDdateExpired" required>
                                                    <span class="checkmark"></span>
                                                </td>

                                                @endforeach
                                            </tr>
                                        </tbody>

                                        <!-- CCO Registration -->

                                        <tbody id=cco>
                                        @foreach ($ccoreg as $cco)

                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>CCO Registration</td>
                                                <td class="position-relative">
                                                    <label for="ccoreg" hidden></label>
                                                    <input class="form-control validate-input" type="text" name="ccoreg[]" id="ccoreg" value="{{$cco->permit }}" required>
                                                    <span class="checkmark"></span>
                                                </td>
                                                <td class="position-relative">
                                                    <label for="ccoreg" hidden></label>
                                                    <input class="form-select validate-input" placeholder="Date: " value="{{$cco->dateIssued  }}"
                                                           type="date" name="ccoreg[]" id="ccoreg" required>
                                                    <span class="checkmark"></span>
                                                </td>
                                                <td class="position-relative">
                                                    <label for="ccoreg" hidden></label>
                                                    <input class="form-select validate-input" placeholder="Date: " value="{{$cco->dateExpired }}"
                                                           type="date" name="ccoreg[]" id="ccoreg" required>
                                                    <span class="checkmark"></span>
                                                </td>

                                            </tr>

                                        @endforeach
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
                                        @foreach ($import as $imp)

                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>Importation Clearance No.</td>
                                                <td class="position-relative">
                                                    <label for="import" hidden></label>
                                                    <input class="form-control validate-input" type="text" name="import[]" id="import" value="{{$imp->permit }}" required>
                                                    <span class="checkmark"></span>
                                                </td>
                                                <td class="position-relative">
                                                    <label for="import" hidden></label>
                                                    <input class="form-select validate-input" placeholder="Date: " value="{{$imp->dateIssued}}" type="date" name="import[]"
                                                           id="import" required>
                                                    <span class="checkmark"></span>
                                                </td>
                                                <td class="position-relative">
                                                    <label for="import" hidden></label>
                                                    <input class="form-select validate-input" placeholder="Date: " value="{{$imp->dateExpired}}" type="date" name="import[]"
                                                           id="import" required>
                                                    <span class="checkmark"></span>
                                                </td>
                                            </tr>

                                        @endforeach
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
                                        @foreach ($permit as $per)

                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>Permit to Transport</td>
                                                <td class="position-relative">
                                                    <label for="permit" hidden></label>
                                                    <input class="form-control validate-input" type="text" name="permit[]" id="permit" value="{{$per->permit }}" required>
                                                    <span class="checkmark"></span>
                                                </td>
                                                <td class="position-relative">
                                                    <label for="permit" hidden></label>
                                                    <input class="form-select validate-input" placeholder="Date: " value="{{$per->dateIssued  }}" type="date" name="permit[]" id=""
                                                           required>
                                                    <span class="checkmark"></span>
                                                </td>
                                                <td class="position-relative">
                                                    <label for="permit" hidden></label>
                                                    <input class="form-select validate-input" placeholder="Date: " value="{{$per->dateExpired  }}" type="date" name="permit[]" id=""
                                                           required>
                                                    <span class="checkmark"></span>
                                                </td>
                                            </tr>

                                        @endforeach
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
                                        @foreach ($smallquan as $small)

                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td> Small Quantity Importation</td>
                                                <td class="position-relative">
                                                    <label for="smallquan" hidden></label>
                                                    <input class="form-control validate-input" type="text" name="smallquan[]" id="smallquan" value="{{$small->permit }}" required>
                                                    <span class="checkmark"></span>
                                                </td>
                                                <td class="position-relative">
                                                    <label for="smallquan" hidden></label>
                                                    <input class="form-select validate-input" placeholder="Date: " value="{{$small->dateIssued }}"  type="date" name="smallquan[]"
                                                           id="smallquan" required>
                                                    <span class="checkmark"></span>
                                                </td>
                                                <td class="position-relative">
                                                    <label for="smallquan" hidden></label>
                                                    <input class="form-select validate-input" placeholder="Date: " value="{{$small->dateExpired }}"  type="date" name="smallquan[]"
                                                           id="smallquan" required>
                                                    <span class="checkmark"></span>
                                                </td>
                                            </tr>

                                        @endforeach
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
                                        @foreach ($priority as $prio)

                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>Priority Chemical List</td>
                                                <td class="position-relative">
                                                    <label for="priority" hidden></label>
                                                    <input class="form-control validate-input" type="text" name="priority[]" id="priority" value="{{$prio->permit }}" required>
                                                    <span class="checkmark"></span>
                                                </td>
                                                <td class="position-relative">
                                                    <label for="priority" hidden></label>
                                                    <input class="form-select validate-input" placeholder="Date: " value="{{$prio->dateIssued }}"  type="date" name="priority[]"
                                                           id="priority" required>
                                                    <span class="checkmark"></span>
                                                </td>
                                                <td class="position-relative">
                                                    <label for="priority" hidden></label>
                                                    <input class="form-select validate-input" placeholder="Date: " value="{{$prio->dateExpired }}"  type="date" name="priority[]"
                                                           id="priority" required>
                                                    <span class="checkmark"></span>
                                                </td>
                                            </tr>

                                        @endforeach
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
                                        @foreach ($piccs as $picc)

                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>PICCS</td>
                                                <td class="position-relative">
                                                    <label for="piccs" hidden></label>
                                                    <input class="form-control validate-input" type="text" name="piccs[]" id="piccs" value="{{$picc->permit }}" required>
                                                    <span class="checkmark"></span>
                                                </td>
                                                <td class="position-relative">
                                                    <label for="piccs" hidden></label>
                                                    <input class="form-select validate-input" placeholder="Date: " value="{{$picc->dateIssued }}"  type="date" name="piccs[]"
                                                           id="piccs" required>
                                                    <span class="checkmark"></span>
                                                </td>
                                                <td class="position-relative">
                                                    <label for="piccs" hidden></label>
                                                    <input class="form-select validate-input" placeholder="Date: " value="{{$picc->dateExpired }}"  type="date" name="piccs[]"
                                                           id="piccs" required>
                                                    <span class="checkmark"></span>
                                                </td>
                                            </tr>

                                        @endforeach
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
                                        @foreach ($pmpin as $pmp)

                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>PMPIN</td>
                                                <td class="position-relative">
                                                    <label for="pmpin" hidden></label>
                                                    <input class="form-control validate-input" type="text" name="pmpin[]" id="pmpin" value="{{$pmp->permit }}" required>
                                                    <span class="checkmark"></span>
                                                </td>
                                                <td class="position-relative">
                                                    <label for="pmpin" hidden></label>
                                                    <input class="form-select validate-input" placeholder="Date: " value="{{$air->dateIssued }}"  type="date" name="pmpin[]"
                                                           id="pmpin" required>
                                                    <span class="checkmark"></span>
                                                </td>
                                                <td class="position-relative">
                                                    <label for="pmpin" hidden></label>
                                                    <input class="form-select validate-input" placeholder="Date: " value="{{$air->dateExpired }}"  type="date" name="pmpin[]"
                                                           id="pmpin" required>
                                                    <span class="checkmark"></span>
                                                </td>
                                            </tr>

                                        @endforeach
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
                                        @foreach ($acno as $ac)

                                            <tr>
                                                <td></td>
                                                <td>RA 8749</td>
                                                <td>A/C no.</td>
                                                <td class="position-relative">
                                                    <label for="ACNOPermit" hidden></label>
                                                    <input class="form-control validate-input" type="text" name="ACNOPermit" id="ACNOPermit" value="{{$ac->permit }}" required>
                                                    <span class="checkmark"></span>
                                                </td>
                                                <td class="position-relative">
                                                    <label for="ACNOIssued" hidden></label>
                                                    <input class="form-select validate-input" placeholder="Date: " value="{{$air->dateIssued }}"  type="date" name="ACNOIssued"
                                                           id="ACNOIssued" required>

                                                </td>
                                                <td class="position-relative">
                                                    <label for="ACNOExpired" hidden></label>
                                                    <input class="form-select validate-input" placeholder="Date: " value="{{$air->dateExpired }}"  type="date" name="ACNOExpired"
                                                           id="ACNOExpired" required>

                                                </td>

                                            </tr>

                                        @endforeach
                                        </tbody>

                                        <!-- PO no -->
                                        <tbody id="pono">
                                        @foreach ($pono as $pn)

                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>PO No.</td>
                                                <td class="position-relative">
                                                    <label for="pono" hidden></label>
                                                    <input class="form-control validate-input" type="text" name="pono[]" id="pono" value="{{$pn->permit }}" required>
                                                    <span class="checkmark"></span>
                                                </td>
                                                <td class="position-relative">
                                                    <label for="pono" hidden></label>
                                                    <input class="form-select validate-input" placeholder="Date: " value="{{$pn->dateIssued }}"  type="date" name="pono[]" id="pono"
                                                           required>
                                                    <span class="checkmark"></span>
                                                </td>
                                                <td class="position-relative">
                                                    <label for="pono" hidden></label>
                                                    <input class="form-select validate-input" placeholder="Date: " value="{{$pn->dateExpired }}"  type="date" name="pono[]" id="pono"
                                                           required>
                                                    <span class="checkmark"></span>
                                                </td>
                                            </tr>

                                        @endforeach
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
                                    @foreach ($operation as $operate)

                                        <tr>
                                            <td>Average</td>
                                            <td></td>
                                            <td class="position-relative">
                                                <label for="aveOPhours" hidden></label>
                                                <input class="form-control validate-input" type="text" name="aveOPhours"  id="aveOPhours"
                                                       value="{{$operate->aveOPhours}}" required>
                                                <span class="checkmark"></span>
                                            </td>
                                            <td class="position-relative">
                                                <label for="aveOPdays" hidden></label>
                                                <input class="form-control validate-input" type="text" name="aveOPdays" id="aveOPdays"
                                                       value="{{$operate->aveOPdays}}" required>
                                                <span class="checkmark"></span>
                                            </td>
                                            <td class="position-relative">
                                                <label for="aveOPshift" hidden></label>
                                                <input class="form-control validate-input" type="text" name="aveOPshift" id="aveOPshift"
                                                       value="{{$operate->aveOPshift}}" required>
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
                                            <input class="form-control validate-input" type="text" name="maxOPhours" id="maxOPhours"
                                                   value="{{$operate->maxOPhours}}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="maxOPdays" hidden></label>
                                            <input class="form-control validate-input" type="text" name="maxOPdays" id="maxOPdays"
                                                   value="{{$operate->maxOPdays}}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td class="position-relative">
                                            <label for="maxOPshift" hidden></label>
                                            <input class="form-control validate-input" type="text" name="maxOPshift" id="maxOPshift"
                                                   value="{{$operate->maxOPshift}}" required>
                                            <span class="checkmark"></span>
                                        </td>

                                    </tr>

                                    @endforeach

                                    </tbody>

                                </table>

                                <!-- OPERATION / PRODUCTION / QUALITY-->
                                <table class="table table-borderless table-hover">
                                    <h3 class="mt-3 mx-2 text-success">OPERATION / PRODUCTION / QUALITY</h3>

                                    <tbody>
                                    @foreach ($production as $prod)

                                        <tr>
                                            <td>Average Daily Production Output</td>
                                            <td class="position-relative">
                                                <label for="aveProduction" hidden></label>
                                                <input class="form-control validate-input" type="text" name="aveProduction" id="aveProduction"
                                                       value="{{$prod->aveProduction}}" required>
                                                <span class="checkmark"></span>
                                            </td>
                                            <td>Total Output This Quarter</td>
                                            <td class="position-relative">
                                                <label for="totalOutput" hidden></label>
                                                <input class="form-control validate-input" type="text" name="totalOutput" id="totalOutput"
                                                       value="{{$prod->totalOutput}}" required>
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
                                                   id="totalConsumption" value="{{$prod->totalConsumption}}" required>
                                            <span class="checkmark"></span>
                                        </td>
                                        <td>Total Electric Consumption this Quarter (kwh)</td>
                                        <td class="position-relative">
                                            <label for="totalElectric" hidden></label>
                                            <input class="form-control validate-input" type="text" name="totalElectric" id="totalElectric"
                                                   value="{{$prod->totalElectric}}"required>
                                            <span class="checkmark"></span>
                                        </td>

                                    </tr>

                                    @endforeach
                                    </tbody>

                                </table>


                            </div>

                            <div class="mx-auto">
                                <p class="text-secondary my-0">Attached water bills and/or electricity bills</p>
                                <i class="text-secondary">Note: File name should not contain the following characters * ? " : ! @ #
                                    ; + ' | $ $ , <> \ / ( ) { } [ ]</i>
                                <label for="fls" hidden></label>
                                @foreach ($upload as $up)
                                    @if ($up->userid == Auth::user()->id)
                                        <input class="form-control my-3" name="file" type="file" style="width:300px" id="fls" multiple required>
                                        <style>
                                            #pdf-error {
                                                color: red;
                                                font-size: 14px;
                                            }
                                        </style>

                                        <span id="pdf-error"></span>
                                    @endif
                                @endforeach

                                <h2>Uploaded Files</h2>
                                @if ($upload->count() > 0)
                                    <ul>
                                        @foreach ($upload as $up)
                                            @if ($up->userid == Auth::user()->id)
                                                <li>{{ $up->file }}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @else
                                    <p>No files uploaded yet.</p>
                                @endif

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


<script>
    config = {
        dateFormat: "Y-m-d"
    }
    flatpickr("input[type=date]", config);
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
