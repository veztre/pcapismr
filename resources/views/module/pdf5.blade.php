<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        background-color: white;
    }
    td {
        border: 1px solid #dddddd;
        padding: 8px;
        background-color: white;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    .page-break {
        page-break-after: always;
    }

    span.currency-sign{
        font-family: DejaVu Sans !important;
    }


</style>

<div class="col">
    <p class="p-1 mt-3  text-light" style="background-color:gray; font-size:20px ">
        MODULE 5: P.D. 1586


    </p>
</div>

<h2 class="mt-3 mx-2 text-success text-left " style="font-size: 20px; font-weight: bolder">AMBIENT AIR QUALITY MONITORING (IF REQUIRED AS PART OF ECC
    CONDITIONS)</h2>

<table  style="border-style: solid;  margin-top: 3%; margin-bottom: 3%; table-layout: fixed;">
    @foreach ($aaqmonitoring_parameter as $parameter)
    <thead>
    <tr>
        <th style="text-align: center; border-bottom-style: none;">Station Description</th>
        <th style="text-align: center; border-bottom-style: none;">Date</th>
        <th style="text-align: center; border-bottom-style: none;">Noise Level (dB)</th>
        <th style="text-align: center; border-bottom-style: none;">CO (mg/ Ncm)</th>
        <th style="text-align: center; border-bottom-style: none;">NOx (mg/Ncm)</th>
        <th style="text-align: center; border-bottom-style: none;">Particulates (mg/Ncm)</th>
        <th style="text-align: center"><u>{{$parameter->aaqname_parameter1}}</u></th>
        <th style="text-align: center"><u>{{$parameter->aaqname_parameter2}}</u></th>
        <th style="text-align: center"><u>{{$parameter->aaqname_parameter3}}</u></th>
    </tr>
    <tr>
        <th style="text-align: center;border-top-style: none;"></th>
        <th style="text-align: center;border-top-style: none;"></th>
        <th style="text-align: center;border-top-style: none;"></th>
        <th style="text-align: center;border-top-style: none;"></th>
        <th style="text-align: center;border-top-style: none;"></th>
        <th style="text-align: center;border-top-style: none;"></th>
        <th style="text-align: center">mg/ Ncm</th>
        <th style="text-align: center">mg/ Ncm</th>
        <th style="text-align: center">mg/ Ncm</th>
    </tr>
    </thead>
    @endforeach

        @foreach ($aaqmonitoring as $aaqmonitor)
            <tbody>
            <tr>
                <td style="text-align: center;">{{$aaqmonitor->station_description}}</td>
                <td style="text-align: center;">{{$aaqmonitor->date}}</td>
                <td style="text-align: center;">{{$aaqmonitor->noise_level_db}}</td>
                <td style="text-align: center;">{{$aaqmonitor->CO_mg_ncm}}</td>
                <td style="text-align: center;">{{$aaqmonitor->NOx_mg_ncm}}</td>
                <td style="text-align: center;">{{$aaqmonitor->particulates_mg_ncm}}</td>
                <td style="text-align: center;">{{$aaqmonitor->Value_parameter1}}</td>
                <td style="text-align: center;">{{$aaqmonitor->Value_parameter2}}</td>
                <td style="text-align: center;">{{$aaqmonitor->Value_parameter3}}</td>
            </tr>
            </tbody>
        @endforeach
</table>

<h2 class="mt-3 mx-2 text-success text-left " style="font-size: 20px; font-weight: bolder">OTHER ECC CONDITIONS</h2>

<table  style="border-style: solid;  margin-top: 3%; margin-bottom: 3%; table-layout: fixed;">

    <thead>
    <tr>
        <th style="text-align: center">ECC Condition/s</th>
        <th style="text-align:center; width: 10%;">Status of Compliance</th>
        <th style="text-align: center">Actions Taken</th>
    </tr>
    </thead>
    @foreach ($oecondition as $oec)
        <tbody>
        <tr>
            <td style="text-align: center">{{$oec->ECC_Condition}}</td>
            <td style="text-align:center; width: 10%;">{{ $oec->Status_of_Compliance }}</td>
            <td style="text-align: center">{{$oec->Actions_Taken}}</td>
        </tr>
        </tbody>
    @endforeach
</table>

<h2 class="mt-3 mx-2 text-success text-left " style="font-size: 20px; font-weight: bolder">AMBIENT WATER QUALITY MONITORING (IF REQUIRED AS PART OF ECC
    CONDITIONS)</h2>

<table  style="border-style: solid;  margin-top: 3%; margin-bottom: 3%; table-layout: fixed;">

    @foreach ($awqmonitoring as $awq)
        <thead>
        <tr>
            <th style="text-align: center; border-bottom-style: none;">Station Description</th>
            <th style="text-align: center; border-bottom-style: none;">Date</th>
            <th style="text-align: center; border-bottom-style: none;"><u>{{$awq->name1}}</u> <u>{{$awq->unit1}}</u></th>
            <th style="text-align: center; border-bottom-style: none;"><u>{{$awq->name2}}</u> <u>{{$awq->unit2}}</u></th>
            <th style="text-align: center; border-bottom-style: none;"><u>{{$awq->name3}}</u> <u>{{$awq->unit3}}</u></th>
            <th style="text-align: center; border-bottom-style: none;"><u>{{$awq->name4}}</u> <u>{{$awq->unit4}}</u></th>
            <th style="text-align: center; border-bottom-style: none;"><u>{{$awq->name5}}</u> <u>{{$awq->unit5}}</u></th>
            <th style="text-align: center; border-bottom-style: none;"><u>{{$awq->name6}}</u> <u>{{$awq->unit6}}</u></th>
            <th style="text-align: center; border-bottom-style: none;"><u>{{$awq->name7}}</u> <u>{{$awq->unit7}}</u></th>
            <th style="text-align: center; border-bottom-style: none;"><u>{{$awq->name8}}</u> <u>{{$awq->unit8}}</u></th>
        </tr>
        </thead>
    @endforeach

        @foreach ($awqmonitoring1 as $awq1)
            <tbody>
            <tr>
                <td style="text-align: center;">{{$awq1->Station_Description}}</td>
                <td style="text-align:center;">{{$awq1->Date}}</td>
                <td style="text-align: center;">{{$awq1->value1}}</td>
                <td style="text-align: center;">{{$awq1->value2}}</td>
                <td style="text-align:center;">{{$awq1->value3}}</td>
                <td style="text-align: center;">{{$awq1->value4}}</td>
                <td style="text-align: center;">{{$awq1->value5}}</td>
                <td style="text-align:center;">{{$awq1->value6}}</td>
                <td style="text-align: center;">{{$awq1->value7}}</td>
                <td style="text-align: center;">{{$awq1->value8}}</td>
            </tr>
            </tbody>
        @endforeach
</table>

<h2 class="mt-3 mx-2 text-success text-left " style="font-size: 20px; font-weight: bolder">ENVIRONMENTAL MANAGEMENT PLAN / PROGRAMOTHER ECC CONDITIONS</h2>

<table  style="border-style: solid;  margin-top: 3%; margin-bottom: 3%; table-layout: fixed;">

    <thead>
    <tr>
        <th style="text-align: center">Enhancement/ Mitigation Measures</th>
        <th style="text-align:center; width: 10%;">Status of Compliance</th>
        <th style="text-align: center">Actions Taken</th>
    </tr>
    </thead>
    @foreach ($evmpprogram as $evm)
        <tbody>
        <tr>
            <td style="text-align: center">{{$evm->Enhancement_Mitigation_Measures}}</td>
            <td style="text-align:center; width: 10%;">{{ $evm->Status_of_Compliance }}</td>
            <td style="text-align: center">{{$evm->Actions_Taken}}</td>
        </tr>
        </tbody>
    @endforeach
</table>



<h2 class="mt-3 mx-2 text-success text-left " style="font-size: 20px; font-weight: bolder">SOLID WASTE CHARACTERIZATION/ INFORMATION</h2>

<table  style="border-style: solid;  margin-top: 3%; margin-bottom: 3%; table-layout: fixed;">

    <thead>
    <tr>
        <th></th>
        <th style="text-align: center;">Recyclable</th>
        <th style="text-align:center;">Biodegradable</th>
        <th style="text-align: center;">Residual</th>
    </tr>
    </thead>

    @foreach ($aqg as $aqg)
        <tbody>
        <tr>
            <td style="text-align: center;"><b>Average Quantity Generated (tons/ month)</b></td>
            <td style="text-align: center;">{{$aqg->Recyclable}}</td>
            <td style="text-align:center;">{{$aqg->Biodegradable}}</td>
            <td style="text-align: center;">{{$aqg->Residual}}</td>
        </tr>
        </tbody>
    @endforeach

    @foreach ($tqg as $tqg)
        <tbody>
        <tr>
            <td style="text-align: center;"><b>Total Quantity Generated (tons/ quarter)</b></td>
            <td style="text-align: center;">{{$tqg->Recyclable}}</td>
            <td style="text-align:center;">{{$tqg->Biodegradable}}</td>
            <td style="text-align: center;">{{$tqg->Residual}}</td>
        </tr>
        </tbody>
    @endforeach

    @foreach ($aqc as $aqc)
        <tbody>
        <tr>
            <td style="text-align: center;"><b>Average Quantity Collected (tons/ month)</b></td>
            <td style="text-align: center;">{{$aqc->Recyclable}}</td>
            <td style="text-align:center;">{{$aqc->Biodegradable}}</td>
            <td style="text-align: center;">{{$aqc->Residual}}</td>
        </tr>
        </tbody>
    @endforeach

    @foreach ($tqc as $tqc)
        <tbody>
        <tr>
            <td style="text-align: center;"><b>Total Quantity Collected (tons/quarter)</b></td>
            <td style="text-align: center;">{{$tqc->Recyclable}}</td>
            <td style="text-align:center;">{{$tqc->Biodegradable}}</td>
            <td style="text-align: center;">{{$tqc->Residual}}</td>
        </tr>
        </tbody>
    @endforeach

    @foreach ($eicc as $eicc)
        <tbody>
        <tr>
            <td style="text-align: center;"><b>Entity in charge of collection</b></td>
            <td style="text-align: center;">{{$eicc->Recyclable}}</td>
            <td style="text-align:center;">{{$eicc->Biodegradable}}</td>
            <td style="text-align: center;">{{$eicc->Residual}}</td>
        </tr>
        </tbody>
    @endforeach

</table>

<h2 class="mt-3 mx-2 text-success text-left " style="font-size: 17px; ">Brief Description of Solid Waste Management Plan (e.g., waste
    reduction, segregation, recycling)</h2>

<table  style="border-style: solid;  margin-top: 3%; margin-bottom: 3%; table-layout: fixed;">
    @foreach ($description as $des)
        <tbody>
        <tr>
            <td style="text-align: justify;">{{$des->description}}</td>
        </tr>
        </tbody>
    @endforeach

</table>

