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

                            <form action="/saveData2" post="post">
                                @csrf
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
                                            <input type="text" class="form-control mt-0" placeholder="" readonly>
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
