
<x-app-layout>

    <title>Environmental Management Bureau Online Services - SMR - Others</title>

    <div class="py-12 ">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                {{View::make('module.tabsupdate')}}
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">



                    <div class="container col ml-4 mt-4" style="align-content: center">

                        <form id="myForm1" action="{{ route('moduleSix.update', ['moduleSix' => Auth::user()->id]) }}"  method="POST">
                            @csrf
                            @method('PUT')
                            <!-- {{ csrf_field() }} -->
                            <br>

                            <div class="row" >

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
                                        MODULE 6: OTHERS
                                        <a href="/pdf6" class="btn btn-lg float-right " ><img src="/images/printpdflogo.png" class="inline" height="40px" width="50px" style="backgorund-color:gray;"> EXPORT PDF</a>
                                    </p>

                                </div>
                            </div>

                            <div class="container " >

                                <table class="table table-borderless table-hover" >
                                    <h3 class="mt-3 mx-2 text-success">ACCIDENTS & EMERGENCY RECORDS</h3>

                                    <!-- AER -->
                                    <table class="w3-table w3-striped w3-border" id ="AER">

                                        <tbody>

                                        <tr>
                                            <td style="text-align: center">Date</td>
                                            <td style="text-align: center">Area / Location</td>
                                            <td style="text-align: center">Findings and Obeservations</td>
                                            <td style="text-align: center">Action Taken</td>
                                            <td style="text-align: center">Remarks</td>
                                        </tr>
                                        @foreach ($accident_records as $accident_record)

                                            <tr>
                                                <td><input type="date" class="form-control" name="accident_records[]" value="{{ $accident_record->date }}"></td>
                                                <td><input type="text" class="form-control" name="accident_records[]" value="{{ $accident_record->Area_Location }}"></td>
                                                <td><input type="text" class="form-control" name="accident_records[]" value="{{ $accident_record->Findings_and_Obeservations }}"></td>
                                                <td><input type="text" class="form-control" name="accident_records[]" value="{{ $accident_record->Action_Taken }}"></td>
                                                <td><input type="text" class="form-control" name="accident_records[]" value="{{ $accident_record->Remarks }}"></td>

                                            </tr>

                                        @endforeach

                                        </tbody>

                                    </table>
                                    <td><button type="button" name="add" id="AERT" class="btn btn-outline-primary mt-3" >+</button></td>
                                </table>

                                <table class="table table-borderless table-hover" >
                                    <h3 class="mt-3 mx-2 text-success">PERSONNEL / STAFF TRAINING</h3>

                                    <!-- PST -->
                                    <table class="w3-table w3-striped w3-border" id ="PST">

                                        <tbody>

                                        <tr>
                                            <td style="text-align: center">Date Conducted</td>
                                            <td style="text-align: center">Course/ Training Description</td>
                                            <td style="text-align: center"># of Personnel Trained</td>
                                        </tr>
                                        @foreach ($personel_staff as $personel)

                                            <tr>
                                                <td><input type="date" class="form-control" name="personel_staff[]" value="{{$personel->date}}"></td>
                                                <td><input type="text" class="form-control" name="personel_staff[]" value="{{$personel->Course_Training_Description}}"></td>
                                                <td><input type="text" class="form-control" name="personel_staff[]" value="{{$personel->no_of_Personnel_Trained}}"></td>

                                            </tr>

                                        @endforeach

                                        </tbody>

                                    </table>

                                    <td><button type="button" name="add" id="PersonelStaff" class="btn btn-outline-primary mt-3" >+</button></td>

                                </table>

                                <table class="table table-borderless table-hover" >
                                    <h3 class="mt-3 mx-2 text-success">UPLOAD OTHER ATTACHMENTS:</h3>
                                    <p class="my-0"><i>Upload relevant documents (e.g. Effluent/Emission sampling test results) and label files accordingly.</i></p>
                                    <p class="my-0"><i>UPLOAD SIGNED AND NOTARIZED MODULE 6 HERE WITH FILE NAME "NOTARIZED_DOC" BEFORE CLICKING SUBMIT</i></p>
                                    <p class="my-0"><i>Note: File name should not contain the following characters \ / : * ? " <> | $ &</i></p>

                                    @foreach ($oaupload as $upload)
                                        @if ($upload->userid == Auth::user()->id)
                                            <input class="form-control my-3" name="file" type="file" style="width:300px" id="file" multiple required>
                                            <style>
                                                #pdf-error1 {
                                                    color: red;
                                                    font-size: 14px;
                                                }
                                            </style>
                                            <span id="pdf-error1"></span>
                                        @endif
                                    @endforeach

                                    <h2>Uploaded Files</h2>
                                    @if ($oaupload->count() > 0)
                                        <ul>
                                            @foreach ($oaupload as $upload)
                                                @if ($upload->userid == Auth::user()->id)
                                                    <li>{{ $upload->file }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    @else
                                        <p>No files uploaded yet.</p>
                                    @endif


                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            I hereby certify that the above information are true and correct.
                                        </label>
                                        <div class="invalid-feedback">
                                            You must certify that the above information are true and correct to proceed.
                                        </div>
                                    </div>


                                    @foreach ($oattachment as $attachment)

                                        <div class="row mt-3">
                                            <div class="col " style="text-align: left; margin-left: 10%" >
                                                <label for="" class="mx-auto">Done this&nbsp;</label>
                                                <input type="date" name="date" value="{{$attachment->doneThis}}">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <label for="" class="mx-auto">in&nbsp;</label>
                                                <input type="text" style="width: 200px" name="In" value="{{$attachment->In}}">
                                            </div>
                                        </div>

                                        <div class="row" style="text-align: center; ">
                                            <input type="text" style="width: 350px; margin-left: 65%;" name="nameSignature" value="{{$attachment->name_signature_of_PCO}}">
                                            <p style="margin-left:29%;" >Name & Signature of PCO</p>
                                        </div>

                                        <div class="row" style="text-align: center; ">
                                            <input type="text" style="width: 350px; margin-left: 11%;" name="CEOManagingHead" value="{{$attachment->Name_Signature_of_CEO_Managing_Head}}">
                                            <p style="margin-left:-22.5%;" >Name/ Signature of CEO/ Managing Head</p>
                                        </div>


                                        <div class="row mt-5">
                                            <div class="col">
                                                <p class="text-center text-sm font-medium">SUBSCRIBED AND SWORN before me, a Notary Public, this <input type="text" name ="subsAndSworn" value="{{$attachment->SUBSCRIBED_AND_SWORN}}"> day of <input type="date" name="dayOf" value="{{$attachment->dayOf}}">  , affiants exhibiting to me their IDs:</p>
                                            </div>
                                        </div>



                                    @endforeach


                                    <div class="row mt-5" style="text-align: center">
                                        <div class="col">
                                            <p>Name</p>
                                        </div>
                                        <div class="col">
                                            <p>ID No.</p>
                                        </div>
                                        <div class="col">
                                            <p>Issued at</p>
                                        </div>
                                        <div class="col">
                                            <p>Issued on</p>
                                        </div>
                                    </div>

                                    @foreach ($oaemployee as $emloyee)

                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" name ="nameEmployee" value="{{$emloyee->name}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name ="id_no_employee" value="{{$emloyee->id_no}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="IssueAtEmployee" value="{{$emloyee->IssuedAt}}">
                                            </div>
                                            <div class="col">
                                                <input type="date" class="form-control" name ="IssueOnEmployee" value="{{$emloyee->IssuedOn}}">
                                            </div>
                                        </div>

                                    @endforeach

                                    @foreach ($oaemployee1 as $emloyee1)

                                        <div class="row mt-3">
                                            <div class="col">
                                                <input type="text" class="form-control"  name ="nameEmployee1" value="{{$emloyee1->name1}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name ="id_no_employee1" value="{{$emloyee1->id_no1}}">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="IssueAtEmployee1" value="{{$emloyee1->IssuedAt1}}" >
                                            </div>
                                            <div class="col">
                                                <input type="date" class="form-control" name ="IssueOnEmployee1" value="{{$emloyee1->IssuedOn1}}">
                                            </div>
                                        </div>

                                    @endforeach

                                </table>

                            </div>


                            <!-- 13th row -->
                            <div class="container">
                                <div class="col mb-3" >
                                    <div style="float: right" class="mb-3">
                                        <input type="submit" value="Save Page" class="btn btn-lg btn-primary">
                                        <input type="submit" value="Submit SMR" class="btn btn-lg btn-success">
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




