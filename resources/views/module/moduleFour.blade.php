{{--<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layout.master')
    @section('content')
    {{View::make('layout.tabs')}}

  <title>Environmental Management Bureau Online Services - SMR - RA 8749 (AIR POLLUTION)</title>
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

    <title>Environmental Management Bureau Online Services - SMR - RA 8749 (AIR POLLUTION)</title>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                {{View::make('module.tabs')}}</div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-auto">


                    <div class="container mt-auto" style="align-content: center">
                        {{--     <!--Delete FORM -->
                   <form method ="post" action="/deleteData">
                     @csrf

                 </form>--}}
                        <div class="card">
                            <div class="col">
                                <form action="/saveData4" post="post">
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
                                                <input type="text" class="form-control mt-0" placeholder="" readonly>
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
                                                MODULE 4: RA 8789 (AIR POLLUTION)
                                                <a href="/pdf4" class="btn btn-lg float-right " ><img src="/images/printpdflogo.png" class="inline" height="40px" width="50px" style="backgorund-color:gray;"> EXPORT PDF</a>
                                            </p>

                                        </div>
                                    </div>

                                    <div class="container ">
                                        <table class="table table-borderless table-hover">
                                            <h3 class="mt-3 mx-2 text-success">SUMMARY OF APSE / APCF</h3>

                                            <!-- SUMMARY OF APSE / APCF -->
                                            <table class="w3-table w3-striped w3-border " id ="summaryy1">
                                                <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td style="text-align: center">Process Equipment</td>
                                                    <td style="text-align: center">Location</td>
                                                    <td style="text-align: center"># of hours of operation for the quarter</td>
                                                </tr>

                                                <tr>
                                                    <td class="counterCell " style="text-align: right" ></td>
                                                    <td ><input type="text" class="form-control " name="summary1[]"></td>
                                                    <td><input type="text" class="form-control" name="summary1[]"></td>
                                                    <td><input type="text" class="form-control" name="summary1[]"></td>
                                                </tr>
                                                </tbody>
                                                <td></td>
                                                <td><button type="button" name="add" id="sum1" class="btn btn-outline-primary" >+</button></td>

                                            </table>

                                            <br>

                                            <table class="w3-table w3-striped w3-border" id ="summaryy2">
                                                <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td style="text-align:center">Fuel Burning Equipment</td>
                                                    <td style="text-align:center">Rated Capacity</td>
                                                    <td style="text-align:center">Location</td>
                                                    <td style="text-align:center">Fuel Used (indicate % if mixed composition)</td>
                                                    <td scope="col" colspan="4" style="text-align:center">Quantity Consumed for the quarter</td>
                                                    <td style="text-align:center"># of hours of operation for the quarter</td>
                                                </tr>

                                                <tr>
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
                                                </tr>

                                                <tr>
                                                    <td class="counterCell " style="text-align: right" ></td>
                                                    <td><input type="text" class="form-control" name="summary2[]"></td>
                                                    <td><input type="text" class="form-control" name="summary2[]"></td>
                                                    <td><input type="text" class="form-control" name="summary2[]"></td>
                                                    <td><input type="text" class="form-control" name="summary2[]"></td>
                                                    <td><input type="text" class="form-control" name="summary2[]"></td>
                                                    <td>
                                                        <select class="form-select" name="summary2[]" style="width: fit-content">
                                                            <option selected disabled value="">-- Select --</option>
                                                            <option>kg</option>
                                                            <option>liter</option>
                                                            <option>m3</option>
                                                            <option>n/a</option>
                                                            <option>pc</option>
                                                            <option>ton</option>
                                                        </select>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><input type="text" class="form-control" name="summary2[]"></td>
                                                </tr>
                                                </tbody>
                                                <td></td>
                                                <td><button type="button" name="add" id="sum2" class="btn btn-outline-primary">+</button></td>
                                            </table>

                                            <br>

                                            <table class="w3-table w3-striped w3-border" id ="summaryy3">
                                                <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>Pollution Control Facility</td>
                                                    <td>Location</td>
                                                    <td># of hours of operation for the quarter</td>
                                                </tr>

                                                <tr>
                                                    <td class="counterCell " style="text-align: right" ></td>
                                                    <td><input type="text" class="form-control" name="summary3[]"></td>
                                                    <td><input type="text" class="form-control" name="summary3[]"></td>
                                                    <td><input type="text" class="form-control" name="summary3[]"></td>
                                                </tr>
                                                </tbody>
                                                <td></td>
                                                <td><button type="button" name="add" id="sum3" class="btn btn-outline-primary">+</button></td>
                                            </table>

                                            <table class="table table-borderless mt-3">
                                                <thead>
                                                <tr>
                                                    <th class="text-success">RECORD COST OF TREATMENT</th>
                                                </tr>
                                                </thead>
                                            </table>

                                            <div class="container" id="rcot">
                                                <div class="card border-3 border-secondary mb-3" >
                                                    <table class="w3-table w3-striped w3-border" >
                                                        <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th style="text-align:center">Month 1</th>
                                                            <th style="text-align:center">Month 2</th>
                                                            <th style="text-align:center">Month 3</th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        <tr>
                                                            <td>Cost of Person employed, (# of employess)</td>
                                                            <td><input type="text" class="form-control" name="COPEMonth1"></td>
                                                            <td><input type="text" class="form-control" name="COPEMonth2"></td>
                                                            <td><input type="text" class="form-control" name="COPEMonth3"></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Total Consumption of Water (cubic meters)</td>
                                                            <td><input type="text" class="form-control" name="TCOWMonth1"></td>
                                                            <td><input type="text" class="form-control" name="TCOWMonth2"></td>
                                                            <td><input type="text" class="form-control" name="TCOWMonth3"></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Total Cost of Chemicals used (e.g., activated carbon, KMnO4)</td>
                                                            <td><input type="text" class="form-control" name="TCOCMonth1"></td>
                                                            <td><input type="text" class="form-control" name="TCOCMonth2"></td>
                                                            <td><input type="text" class="form-control" name="TCOCMonth3"></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Total Consumption of Electricity (kWh)</td>
                                                            <td><input type="text" class="form-control" name="TCOEMonth1"></td>
                                                            <td><input type="text" class="form-control" name="TCOEMonth2"></td>
                                                            <td><input type="text" class="form-control" name="TCOEMonth3"></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Administrative and Overhead Costs</td>
                                                            <td><input type="text" class="form-control" name="AAOCMonth1"></td>
                                                            <td><input type="text" class="form-control" name="AAOCMonth2"></td>
                                                            <td><input type="text" class="form-control" name="AAOCMonth3"></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Cost of operating in-house laboratory</td>
                                                            <td><input type="text" class="form-control" name="COPIHLMonth1"></td>
                                                            <td><input type="text" class="form-control" name="COPIHLMonth2"></td>
                                                            <td><input type="text" class="form-control" name="COPIHLMonth3"></td>
                                                        </tr>

                                                        <tr>
                                                            <td>improvement or modification, if any. (description)</td>
                                                            <td><input type="text" class="form-control" name="IOMMonth1"></td>
                                                            <td><input type="text" class="form-control" name="IOMMonth2"></td>
                                                            <td><input type="text" class="form-control" name="IOMMonth3"></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Cost of improvement of modification</td>
                                                            <td><input type="text" class="form-control" name="COIOMonth1"></td>
                                                            <td><input type="text" class="form-control" name="COIOMonth2"></td>
                                                            <td><input type="text" class="form-control" name="COIOMonth3"></td>
                                                        </tr>
                                                        </tbody>

                                                    </table>

                                                </div>
                                            </div>

                                            <td><button type="button" name="add" id="rcotb" class="btn btn-outline-primary mt-3" style="margin-left: 0.5%">+</button></td>

                                            <table class="table table-borderless mt-3">
                                                <thead>
                                                <tr>
                                                    <th class="text-success">DETAILED REPORT OF AIR EMISSION CHARACTERISTICS</th>
                                                </tr>
                                                </thead>
                                            </table>

                                            <table class="w3-table w3-striped w3-border">
                                                <tbody id="droaec">
                                                <tr>
                                                    <td style="text-align:center">FBE No.</td>
                                                    <td style="text-align:center">Date</td>
                                                    <td style="text-align:center">Flow Rate (Ncm/ day)</td>
                                                    <td style="text-align:center">CO (mg/ Ncm)</td>
                                                    <td style="text-align:center">NOx (mg/Ncm)</td>
                                                    <td style="text-align:center">Particulates (mg/Ncm)</td>
                                                    <td style="text-align:center">SOx (mg/Ncm)</td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                </tr>

                                                <td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td style="text-align:center">mg/Ncm</td>
                                                <td style="text-align:center">mg/Ncm</td>
                                                <td style="text-align:center">mg/Ncm</td>
                                                </td>

                                                <tr>
                                                    <td><input type="text" class="form-control" name="detailreport[]"></td>
                                                    <td><input type="date" class="form-control" name="detailreport[]"></td>
                                                    <td><input type="text" class="form-control" name="detailreport[]"></td>
                                                    <td><input type="text" class="form-control" name="detailreport[]"></td>
                                                    <td><input type="text" class="form-control" name="detailreport[]"></td>
                                                    <td><input type="text" class="form-control" name="detailreport[]"></td>
                                                    <td><input type="text" class="form-control" name="detailreport[]"></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                    <td><input type="text" class="form-control" name=""></td>
                                                </tr>

                                                </tbody>
                                                <td><button type="button" name="add" id="droaecb" class="btn btn-outline-primary mt-3">+</button></td>
                                            </table>

                                        </table>
                                    </div>

                                    <!-- 13th row -->
                                    <div class="container">
                                        <div class="col mb-3" >
                                            <div style="float: right" class="mb-3">
                                                <a href="{{ route('module.moduleThree') }}" class="btn btn-lg border bg-light">Previous</a>
                                                {{-- <a href="{{ route('module.moduleFour') }}" class="btn btn-lg btn-info">Next</a>--}}
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

<!-- SCRIPT FOR SUMMARY OF APSE/APCF 1-->

<script type="text/javascript">
  var i = 0;
  $("#sum1").click(function () { //button name
      ++i;
      $("#summaryy1").append
          ('<tr><td class="counterCell " style="text-align: right" ></td><td><input type="text" class="form-control" name="summary1[]"></td><td><input type="text" class="form-control" name="summary1[]"></td><td><input type="text" class="form-control" name="summary1[]"></td><td></td></tr>'); //table name
  });
</script>


<!-- SCRIPT FOR SUMMARY OF APSE/APCF 2 -->

<script type="text/javascript">
  var i = 0;
  $("#sum2").click(function () { //button name
      ++i;
      $("#summaryy2").append
          ('<tr><td class="counterCell " style="text-align: right" ></td><td ><input type="text" class="form-control" name="summary2[]"></td><td><input type="text" class="form-control" name="summary2[]"></td><td><input type="text" class="form-control" name="summary2[]"></td><td><input type="text" class="form-control" name="summary2[]"></td><td><input type="text" class="form-control" name="summary2[]"></td><td><select class="form-select" name="summary2[]" style="width: fit-content"><option selected disabled value="">-- Select --</option><option>kg</option><option>liter</option><option>m3</option><option>n/a</option><option>pc</option><option>ton</option></select></td><td></td><td></td><td><input type="text" class="form-control" name="summary2[]"></td></tr>'); //table name
  });
</script>

<!-- SCRIPT FOR SUMMARY OF APSE/APCF 3-->

<script type="text/javascript">
  var i = 0;
  $("#sum3").click(function () { //button name
      ++i;
      $("#summaryy3").append
          ('<tr><td class="counterCell " style="text-align: right" ></td><td><input type="text" class="form-control" name="summary3[]"></td><td><input type="text" class="form-control" name="summary3[]"></td><td><input type="text" class="form-control" name="summary3[]"></td><td></td> </tr>'); //table name
  });
</script>

<!-- SCRIPT FOR RECORD COST OF TREATMENT-->

<script type="text/javascript">
    var i = 0;
    $("#rcotb").click(function () { //button name
        ++i;
        $("#rcot").append
            ('<div class="container" id="rcot"><div class="card border-3 border-secondary mb-3" ><table class="w3-table w3-striped w3-border"><thead><tr><th></th><th style="text-align:center">Month 1</th><th style="text-align:center">Month 2</th><th style="text-align:center">Month 3</th></tr></thead><tbody><tr><td>Cost of Person employed, (# of employess)</td><td><input type="text" class="form-control" name="COPEMonth1"></td><td><input type="text" class="form-control" name="COPEMonth2"></td><td><input type="text" class="form-control" name="COPEMonth3"></td></tr><tr><td>Total Consumption of Water (cubic meters)</td><td><input type="text" class="form-control" name="TCOWMonth1"></td><td><input type="text" class="form-control" name="TCOWMonth2"></td><td><input type="text" class="form-control" name="TCOWMonth3"></td></tr><tr><td>Total Cost of Chemicals used (e.g., activated carbon, KMnO4)</td><td><input type="text" class="form-control" name="TCOCMonth1"></td><td><input type="text" class="form-control" name="TCOCMonth2"></td><td><input type="text" class="form-control" name="TCOCMonth3"></td></tr><tr><td>Total Consumption of Electricity (kWh)</td><td><input type="text" class="form-control" name="TCOEMonth1"></td><td><input type="text" class="form-control" name="TCOEMonth2"></td><td><input type="text" class="form-control" name="TCOEMonth3"></td></tr><tr><td>Administrative and Overhead Costs</td><td><input type="text" class="form-control" name="AAOCMonth1"></td><td><input type="text" class="form-control" name="AAOCMonth2"></td><td><input type="text" class="form-control" name="AAOCMonth3"></td></tr><tr><td>Cost of operating in-house laboratory</td><td><input type="text" class="form-control" name="COPIHLMonth1"></td><td><input type="text" class="form-control" name="COPIHLMonth2"></td><td><input type="text" class="form-control" name="COPIHLMonth3"></td></tr><tr><td>improvement or modification, if any. (description)</td><td><input type="text" class="form-control" name="IOMMonth1"></td><td><input type="text" class="form-control" name="IOMMonth2"></td><td><input type="text" class="form-control" name="IOMMonth3"></td></tr><tr><td>Cost of improvement of modification</td><td><input type="text" class="form-control" name="COIOMonth1"></td><td><input type="text" class="form-control" name="COIOMonth2"></td><td><input type="text" class="form-control" name="COIOMonth3"></td></tr></tbody></table></div></div>'); //table name
    });
  </script>

<!-- SCRIPT FOR DETAILED REPORT OF AIR EMISSION CHARACTERISTICS-->

<script type="text/javascript">
    var i = 0;
    $("#droaecb").click(function () { //button name
        ++i;
        $("#droaec").append
            ('<tr><td><input type="text" class="form-control" name="detailreport[]"></td><td><input type="date" class="form-control" name="detailreport[]"></td><td><input type="text" class="form-control" name="detailreport[]"></td><td><input type="text" class="form-control" name="detailreport[]"></td><td><input type="text" class="form-control" name="detailreport[]"></td><td><input type="text" class="form-control" name="detailreport[]"></td><td><input type="text" class="form-control" name="detailreport[]"></td><td><input type="text" class="form-control" name=""></td><td><input type="text" class="form-control" name=""></td><td><input type="text" class="form-control" name=""></td></tr>'); //table name
    });
  </script>

@endsection
</html>--}}
