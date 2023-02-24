<div class="container">
<div class="">
            <p class="p-1 mt-3  text-light" style="background-color:gray; font-size:20px">
            MODULE 6: OTHERS
            </p>
        </div>

 <table class="w3-table  w3-border">
 <thead>
    <tr>
        <th>ACCIDENTS & EMERGENCY RECORDS</th>
    </tr>
 </thead>
<tbody>
    <tr>
        <td>Date</td>
        <td>Area/ Location</td>
        <td>Findings and Obeservations</td>
        <td>Action Taken</td>
        <td>Remarks</td>
    </tr>

    @foreach ($accident_records as $accident_record)
    <tr>

            <td>{{ $accident_record->date }}</td>
            <td>{{ $accident_record->Area_Location }}</td>
            <td>{{ $accident_record->Findings_and_Obeservations }}</td>
            <td>{{ $accident_record->Action_Taken }}</td>
            <td>{{ $accident_record->Remarks }}</td>
    </tr>
    @endforeach

</tbody>
</table>
</div>
