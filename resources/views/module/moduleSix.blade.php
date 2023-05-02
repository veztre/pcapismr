


<x-app-layout>

    <title>Environmental Management Bureau Online Services - SMR - Others</title>

    <div class="py-12 ">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                {{View::make('module.tabs')}}
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">



                <div class="container col ml-4 mt-4" style="align-content: center">

                    <form action="/saveData6" method="post" enctype="multipart/form-data">
                        @csrf
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

                                    <tr>
                                        <td><input type="date" class="form-control" name="accident_records[]" value="2001-01-01"></td>
                                        <td><input type="text" class="form-control" name="accident_records[]"></td>
                                        <td><input type="text" class="form-control" name="accident_records[]"></td>
                                        <td><input type="text" class="form-control" name="accident_records[]"></td>
                                        <td><input type="text" class="form-control" name="accident_records[]"></td>

                                    </tr>

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

                                    <tr>
                                        <td><input type="date" class="form-control" name="personel_staff[]" value="2001-01-01"></td>
                                        <td><input type="text" class="form-control" name="personel_staff[]"></td>
                                        <td><input type="text" class="form-control" name="personel_staff[]"></td>

                                    </tr>

                                    </tbody>

                                </table>

                                <td><button type="button" name="add" id="PersonelStaff" class="btn btn-outline-primary mt-3" >+</button></td>

                            </table>

                            <table class="table table-borderless table-hover" >
                                <h3 class="mt-3 mx-2 text-success">UPLOAD OTHER ATTACHMENTS:</h3>
                                <p class="my-0"><i>Upload relevant documents (e.g. Effluent/Emission sampling test results) and label files accordingly.</i></p>
                                <p class="my-0"><i>UPLOAD SIGNED AND NOTARIZED MODULE 6 HERE WITH FILE NAME "NOTARIZED_DOC" BEFORE CLICKING SUBMIT</i></p>
                                <p class="my-0"><i>Note: File name should not contain the following characters \ / : * ? " <> | $ &</i></p>

                                <input class="form-control my-3" name ="file" type="file" style="width:300px" required multiple>


                                <div class="form-check" >
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I hereby certify that the above information are true and correct.
                                    </label>
                                    <div class="invalid-feedback">You must check this box to proceed.</div>
                                </div>


                                <div class="row mt-3">
                                    <div class="col " style="text-align: left; margin-left: 10%" >
                                        <label for="" class="mx-auto">Done this&nbsp;</label>
                                        <input type="date" name ="date" value="2001-01-01">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="" class="mx-auto">in&nbsp;</label>
                                        <input type="text" name= "In" style="width: 200px">
                                    </div>
                                </div>

                                <div class="row" style="text-align: center; ">
                                    <input type="text"  name ="nameSignature" style="width: 350px; margin-left: 65%;" >
                                    <p style="margin-left:29%;" >Name & Signature of PCO</p>
                                </div>

                                <div class="row" style="text-align: center; ">
                                    <input type="text" name ="CEOManagingHead" style="width: 350px; margin-left: 11%;" >
                                    <p style="margin-left:-22.5%;" >Name/ Signature of CEO/ Managing Head</p>
                                </div>

                                <div class="row mt-5">
                                    <div class="col">
                                        <p class="text-center text-sm font-medium">SUBSCRIBED AND SWORN before me, a Notary Public, this <input type="text" name="subsAndSworn"> day of <input type="date" name ="dayOf" value="2001-01-01">  , affiants exhibiting to me their IDs:</p>
                                    </div>
                                </div>


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

                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" name="nameEmployee">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control"name="id_no_employee">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="IssueAtEmployee">
                                    </div>
                                    <div class="col">
                                        <input type="date" class="form-control" name="IssueOnEmployee" value="2001-01-01">
                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <div class="col">
                                        <input type="text" class="form-control" name="nameEmployee1">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="id_no_employee1">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="IssueAtEmployee1">
                                    </div>
                                    <div class="col">
                                        <input type="date" class="form-control" name="IssueOnEmployee1" value="2001-01-01">
                                    </div>
                                </div>

                            </table>

                        </div>


                        <!-- 13th row -->
                        <div class="container">
                            <div class="col mb-3" >
                                <div style="float: right" class="mb-3">
                                    <a href="{{ url('moduleFive') }}" class="btn btn-lg border bg-light">Previous</a>
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






{{--
</body>
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
  </style>



<!-- Script for ACCIDENTS & EMERGENCY RECORDS -->
    <script type="text/javascript">
        var i = 0;
        $("#AERT").click(function () { //button name
            ++i;
            $("#AER").append
            (' <tr><td><input type="date" class="form-control" name="accident_records[]"></td><td><input type="text" class="form-control" name="accident_records[]"></td><td><input type="text" class="form-control" name="accident_records[]"></td><td><input type="text" class="form-control" name="accident_records[]"></td><td><input type="text" class="form-control" name="accident_records[]"></td></tr>'); //table name
        });
    </script>


<!--  Script for ACCIDENTS & Personel Staff RECORDS -->
    <script type="text/javascript">
        var i = 0;
        $("#PersonelStaff").click(function () { //button name
            ++i;
            $("#PST").append
            (' <tr><td><input type="date" class="form-control" name="personel_staff[]"></td><td><input type="text" class="form-control" name="personel_staff[]"></td><td><input type="text" class="form-control" name="personel_staff[]"></td></tr>'); //table name
        });
    </script>



@endsection
</html>
--}}
