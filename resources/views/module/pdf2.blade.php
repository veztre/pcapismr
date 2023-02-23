<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<table>
        <thead>
          <tr>
          <h3 class="text-success">B. HAZARDOUS WASTE GENERATOR</h3>
          </tr>
        </thead>

        <thead>
          <tr>
            <th class="text-success mx-0">HAZARDOUS WASTE GENERATION</th>
          </tr>
        </thead>
      </table>
      <table>
        <tbody>
          <tr>
            <td>HW No.</td>
            <td>HW Class</td>
            <td>HW Nature</td>
            <td>HW Cataloguing</td>
            <td>Remaining HW From Quantity</td>
            <td>Previous Report Unit</td>
            <td>HW Generated for the Qunatity</td>
            <td>Quarter Unit</td>
          </tr>
        </tbody>

           
        <tbody>
        @foreach ($hwGeneration as $hwGen)
            <tr>
                <td>{{$hwGen->HWno}}</td>
                <td>{{$hwGen->HWclass}}</td>
                <td>{{$hwGen->HWNature}}</td>
                <td>{{$hwGen->HWcataloguing}}</td>
                <td>{{$hwGen->RemainingQty}}</td>
                <td>{{$hwGen->PreviousReportUnit}}</td>
                <td>{{$hwGen->HWGeneratedQty}}</td>
                <td>{{$hwGen->QuarterUnit}}</td>

            </tr>
            @endforeach
        </tbody>
      </table>
        <br>
        <br>
        <table>
        <thead>
          <tr>
            <th>WASTE STORAGE, TREATMENT AND DISPOSAL (PLEASE FILL-UP ONE TABLE PER HW) </th>
          </tr>
        </thead>
      </table>

        <table>
          <thead>
            <tr>
              <th>HW Details</th>
             

            </tr>
          </thead>
          
</table>
<table>
<thead>  
<tr>
    <th>HW No.</th>
    <th>HW Class</th>
    <th>Qty of HW Treated</th>
    <th>Unit</th>
    <th>TSD Locations</th>
    
    
</tr>
          </thead>
          <tbody>
          @foreach ($hwDetails as $detail)
            <tr>    
                <td>{{$detail->HWno}}</td>
                <td>{{$detail->HWclass}}</td>
                <td>{{$detail->QtyOfHWTreated}}</td>
                <td>{{$detail->Unit}}</td>
                <td>{{$detail->TSDLocation}}</td>
                
                
            </tr>
            @endforeach
          </tbody>
        </table>
        <br>
        <table>
            <thead>
            <tr>
            <th>Storage</th>
            </tr>
            </thead>
        </table>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Method</th>
                </tr>
            </thead>
        </table>

        <table>
            <tbody>
                @foreach ($storage as $store)
                <tr>
                    <td>{{$store->name}}</td>
                    <td>{{$store->method}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <table>
          <thead>
            <tr>
              <th>Transporter</th>
             

            </tr>
          </thead>
          
</table>
<table>
<tbody>  
<tr>
    <td>ID</td>
    <td>Name</td>
    <td>Method</td>
    <td>Date</td>
     
</tr>
</tbody>
<tbody>
    @foreach ($transporter as $trans)
    <tr>
        <td>{{$trans->transpo_id}}</td>
        <td>{{$trans->name}}</td>
        <td>{{$trans->method}}</td>
        <td>{{$trans->date}}</td>
    </tr>
    @endforeach
</tbody>
</table>
<br>

<table>
          <thead>
            <tr>
              <th>Treater</th>
             

            </tr>
          </thead>
          
</table>
<table>
<tbody>  
<tr>
    <td>ID</td>
    <td>Name</td>
    <td>Method</td>
    <td>Date</td>
     
</tr>
</tbody>
<tbody>
    @foreach ($treater as $treat)
    <tr>
        <td>{{$treat->treater_id}}</td>
        <td>{{$treat->name}}</td>
        <td>{{$treat->method}}</td>
        <td>{{$treat->date}}</td>
    </tr>
    @endforeach
</tbody>
</table>
<br>

<table>
          <thead>
            <tr>
              <th>Disposal</th>
             

            </tr>
          </thead>
          
</table>
<table>
<tbody>  
<tr>
    <td>ID</td>
    <td>Name</td>
    <td>Method</td>
    <td>Date</td>
     
</tr>
</tbody>
<tbody>
    @foreach ($disposal as $dis)
    <tr>
        <td>{{$dis->disposal_id}}</td>
        <td>{{$dis->name}}</td>
        <td>{{$dis->method}}</td>
        <td>{{$dis->date}}</td>
    </tr>
    @endforeach
</tbody>
</table>
<br>

<table>
        <thead>
          <tr>
            <th class="text-success">ON-SITE SELF INSPECTION OF STORAGE AREA</th>
          </tr>
        </thead>
      </table>


<table>
        <thead>
          <tr>
            <th>Date Conducted</th>
            <th>Premises/ Area Inspected</th>
            <th>Findings and Observations</th>
            <th>Corrective Actions Taken</th>
          </tr>
        </thead>

        <tbody>
            @foreach ($osisa as $osi)
            <tr>
                <td>{{$osi->DateConducted}}</td>
                <td>{{$osi->PremisesAreaInspected}}</td>
                <td>{{$osi->FindingsAndObservations}}</td>
                <td>{{$osi->CorrectiveActionsTaken}}</td>
            </tr>
            @endforeach
        </tbody>
</table>


            



