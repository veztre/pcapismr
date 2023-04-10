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
    .form-check-label {
        display: flex; /* use flexbox to align items horizontally */
        align-items: center; /* center items vertically */
        font-size: 16px; /* set the font size of the label text */
        font-family: "MyCustomFont", sans-serif;
    }
    .form-check-input {
        width: 24px; /* increase the width of the checkbox */
        height: 24px; /* increase the height of the checkbox */
        margin-right: 10px; /* add some space between the checkbox and the text */
    }

</style>


<div class="col">
    <p class="p-1 mt-3  text-light" style="background-color:gray; font-size:20px ">
        MODULE 6: OTHERS
    </p>
</div>

<div class="page-break">
<h2 class="mt-3 mx-2 text-success text-left " style="font-size: 20px; font-weight: bolder">ACCIDENTS & EMERGENCY RECORDS</h2>

<table  style="border-style: solid;  margin-top: 3%; margin-bottom: 3%; table-layout: fixed;">
    <thead>
    <tr>
        <th style="text-align: center">Date</th>
        <th style="text-align: center">Area/ Location</th>
        <th style="text-align: center">Findings and Obeservations</th>
        <th style="text-align: center">Action Taken</th>
        <th style="text-align: center">Remarks</th>
    </tr>
    </thead>
    @foreach ($accident_records as $accident_record)
    <tbody>

        <tr>
            <td style="text-align: center">{{ $accident_record->date }}</td>
            <td style="text-align: center">{{ $accident_record->Area_Location }}</td>
            <td style="text-align: center">{{ $accident_record->Findings_and_Obeservations }}</td>
            <td style="text-align: center">{{ $accident_record->Action_Taken }}</td>
            <td style="text-align: center">{{ $accident_record->Remarks }}</td>
        </tr>

    </tbody>
    @endforeach

</table>

<h2 class="mt-3 mx-2 text-success text-left " style="font-size: 20px; font-weight: bolder">PERSONNEL / STAFF TRAINING</h2>

<table  style="border-style: solid;  margin-top: 3%; margin-bottom: 3%; table-layout: fixed;">

    <thead>
    <tr>
        <th style="text-align: center">Date Conducted</th>
        <th style="text-align: center">Course/ Training Description</th>
        <th style="text-align: center"># of Personnel Trained</th>
    </tr>
    </thead>

    @foreach ($personel_staff as $personel)
        <tbody>

        <tr>
            <td style="text-align: center">{{ $personel->date }}</td>
            <td style="text-align: center">{{ $personel->Course_Training_Description }}</td>
            <td style="text-align: center">{{ $personel->no_of_Personnel_Trained }}</td>
        </tr>

        </tbody>
    @endforeach

</table>

</div>
<table class="table table-borderless table-hover" >

    <div class="form-check">
        <label class="form-check-label" for="flexCheckDefault">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
            I hereby certify that the above information is true and correct.
        </label>
    </div>




@foreach ($oattachment as $attachment)

        <div class="row " style="margin-top: 16px;">
            <div class="col" style="text-align: left; margin-left: 10%">

                <label for="" class="mx-auto">Done this</label>&nbsp;&nbsp;
                <b><u>{{$attachment->doneThis}}</u></b>
                &nbsp;
                <label for="" class="mx-auto">in&nbsp;</label>
                <b><u>{{$attachment->In}}</u></b>
            </div>
        </div>


        <div class="row" style="text-align: center;  margin-top: 7%;">
            <b style=" margin-left:29%;">{{$attachment->name_signature_of_PCO}}</b>
            <p style="border-top: 1px solid black; width: 30%; margin-top: 5px; margin-left:49%;" >Name & Signature of PCO</p>
        </div>

        <div class="row" style="text-align: center;  margin-top: 7%;">
            <b style="text-align: left; margin-left: -51%;">{{$attachment->Name_Signature_of_CEO_Managing_Head}}</b>
            <p style="border-top: 1px solid black; width: 30%; margin-top: 5px; margin-left: 10%;" >Name/ Signature of CEO/ Managing Head</p>
        </div>

        <div class="row mt-5">
            <div class="col">
                <p class="text-center text-sm font-medium">SUBSCRIBED AND SWORN before me, a Notary Public, this <b><u>{{$attachment->SUBSCRIBED_AND_SWORN}}</u></b> day of <b><u>{{\Carbon\Carbon::parse($attachment->dayOf)->format('F Y')}}</u></b>, affiants exhibiting to me their IDs:</p>
            </div>
        </div>


    @endforeach

</table>


<table  style="border-style: none;  margin-top: 3%; margin-bottom: 3%; table-layout: fixed;">


    <thead>
    <tr>
        <th style="text-align: center; border-style: none;">Name</th>
        <th style="text-align: center; border-style: none;">ID No.</th>
        <th style="text-align: center; border-style: none;">Issued at</th>
        <th style="text-align: center; border-style: none;">Issued on</th>
    </tr>
    </thead>


    @foreach ($oaemployee as $oae)
        <tbody>
        <tr>
            <td style="text-align: center; border-style: none;"><b><u>{{$oae->name}}</u></b></td>
            <td style="text-align: center; border-style: none;"><b><u>{{$oae->id_no}}</u></b></td>
            <td style="text-align: center; border-style: none;"><b><u>{{$oae->IssuedAt}}</u></b></td>
            <td style="text-align: center; border-style: none;"><b><u>{{$oae->IssuedOn}}</u></b></td>
        </tr>
        </tbody>
    @endforeach

    @foreach ($oaemployee1 as $oae1)
        <tbody>
        <tr>
            <td style="text-align: center; border-style: none;"><b><u>{{$oae1->name1}}</u></b></td>
            <td style="text-align: center; border-style: none;"><b><u>{{$oae1->id_no1}}</u></b></td>
            <td style="text-align: center; border-style: none;"><b><u>{{$oae1->IssuedAt1}}</u></b></td>
            <td style="text-align: center; border-style: none;"><b><u>{{$oae1->IssuedOn1}}</u></b></td>

        </tr>
        </tbody>
    @endforeach


</table>

