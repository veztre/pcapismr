<div class="container">

    <div class="">
        <p class="p-1 mt-3  text-light" style="background-color:gray; font-size:20px">
            MODULE 6: OTHERS
        </p>
    </div>

    <style>
        table, th, td {
            border: 1px solid black;
        }
        th {
            text-align: center;
        }
    </style>

    <table class="w3-table  w3-border">
        <thead>
        <tr>
            <th>ACCIDENTS & EMERGENCY RECORDS</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="text-align: center">Date</td>
            <td style="text-align: center">Area/ Location</td>
            <td style="text-align: center">Findings and Obeservations</td>
            <td style="text-align: center">Action Taken</td>
            <td style="text-align: center">Remarks</td>
        </tr>

        @foreach ($accident_records as $accident_record)
            <tr>

                <td style="text-align: center">{{ $accident_record->date }}</td>
                <td style="text-align: center">{{ $accident_record->Area_Location }}</td>
                <td style="text-align: center">{{ $accident_record->Findings_and_Obeservations }}</td>
                <td style="text-align: center">{{ $accident_record->Action_Taken }}</td>
                <td style="text-align: center">{{ $accident_record->Remarks }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>



</table>



<table class="table table-borderless table-hover" >
    <thead>
    <tr>
        <th> <h3  style="text-align: center" class="mt-3 mx-2 text-success">PERSONNEL / STAFF TRAINING</h3></th>
    </tr>
    </thead>
</table>
<!-- PST -->
<table class="w3-table w3-striped w3-border" id ="PST">

    <tbody>

    <tr>
        <td style="text-align: center">Date Conducted</td>
        <td></td>
        <td style="text-align: center">Course/ Training Description</td>
        <td>
        <td style="text-align: center"># of Personnel Trained</td>
    </tr>
    @foreach ($personel_staff as $personel)
        <tr>
            <td style="text-align: center">{{$personel->date}}</td>
            <td></td>
            <td style="text-align: center">{{$personel->Course_Training_Description}}</td>
            <td></td>
            <td style="text-align: center">{{$personel->no_of_Personnel_Trained}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<br>
<br>
<br>
<br>

<table class="table table-borderless table-hover" >

    <div class="form-check" >
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            I hereby certify that the above information are true and correct.
        </label>
    </div>

    @foreach ($oattachment as $attachment)

        <div class="row mt-3">
            <div class="col" style="text-align: left; margin-left: 10%">
                <label for="" class="mx-auto">Done this</label>&nbsp;&nbsp;
                {{$attachment->doneThis}}
                &nbsp;
                <label for="" class="mx-auto">in&nbsp;</label>
                {{$attachment->In}}
            </div>
        </div>


        <div class="row" style="text-align: center; ">
            {{$attachment->name_signature_of_PCO}}
            <p style="margin-left:29%;" >Name & Signature of PCO</p>
        </div>

        <div class="row" style="text-align: center; ">
            {{$attachment->Name_Signature_of_CEO_Managing_Head}}
            <p style="margin-left:-22.5%;" >Name/ Signature of CEO/ Managing Head</p>
        </div>

        <div class="row mt-5">
            <div class="col">
                <p class="text-center text-sm font-medium">SUBSCRIBED AND SWORN before me, a Notary Public, this {{$attachment->SUBSCRIBED_AND_SWORN}} day of {{$attachment->dayOf}} , affiants exhibiting to me their IDs:</p>
            </div>
        </div>


    @endforeach

</table>
<br>
<br>
<br>

<table class="table table-borderless table-hover" >

    <thead>

    <tr>
        <th>Name</th>
        <th>ID No.</th>
        <th>Issued at</th>
        <th>Issued on</th>
    </tr>
    </thead>

    <tbody>
    @foreach ($oaemployee as $emloyee)
        <tr>
            <td>{{$emloyee->name}}</td>
            <td>{{$emloyee->id_no}}</td>
            <td>{{$emloyee->IssuedAt}}</td>
            <td>{{$emloyee->IssuedOn}}</td>
        </tr>
    @endforeach

    @foreach ($oaemployee1 as $emloyee1)
        <tr>
            <td>{{$emloyee1->name1}}</td>
            <td>{{$emloyee1->id_no1}}</td>
            <td>{{$emloyee1->IssuedAt1}}</td>
            <td>{{$emloyee1->IssuedOn1}}</td>

        </tr>
    @endforeach
    </tbody>

</table>

