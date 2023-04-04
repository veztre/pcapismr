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
</style>
<div class="col">
                            <p class="p-1 mt-3  text-light" style="background-color:gray; font-size:20px " >
                          MODULE 3: RA 9275
                            </p>
                        </div>


<h2 class="mt-3 mx-2 text-success text-left " style="font-size: 20px; font-weight: bolder">WATER POLLUTION DATA</h2>

<table  style="border-style: solid;  margin-top: 3%; margin-bottom: 3%;">
    @foreach ($waterpolutiondata as $water)
<tbody>
<tr>
    <td style="text-align: left;"><b>Domestic wastewater (cubicmeters/day):</b> {{$water->Domestic_wastewater}}</td>
    <td style="text-align: left;"><b>Processs wastewater (cubicmeters/day):</b> {{$water->Processs_wastewater}}</td>
    <td colspan="1" style="border-left-style: none"></td>
</tr>

<tr>
    <td style="text-align: left;"><b>Cooling water (cubicmeters/day):</b> {{$water->Domestic_wastewater}}</td>
    <td style="text-align: left;"><b>Others:</b> {{$water->others_n}}</td>
    <td style="text-align: left;"><b>(cubicmeters/day):</b> {{$water->others_m}}</td>
</tr>

<tr>
    <td style="text-align: left;"><b>Waste water, equipment (cubicmeters/day):</b> {{$water->Waste_water_equipment}}</td>
    <td style="text-align: left;"><b>Waste water, floor (cubicmeters/day):</b> {{$water->Waste_water_floor}}</td>
    <td colspan="1" style="border-left-style: none"></td>
</tr>
</tbody>
    @endforeach
</table>

<h2 class="mt-3 mx-2 text-success text-left " style="font-size: 20px; font-weight: bolder">RECORD COST OF TREATMENT</h2>

<table  style="border-style: solid;  margin-top: 3%; margin-bottom: 3%;">
    <thead>
    <tr>
        <th></th>
        <th style="text-align: center">Month 1</th>
        <th style="text-align: center">Month 2</th>
        <th style="text-align: center">Month 3</th>
    </tr>
    </thead>
    @foreach ($personEmployed as $pemploye)
    <tbody>

    <tr>
        <td style="text-align: left"><b>Person employed, (# of employees)</b></td>
        <td style="text-align: center">{{ $pemploye->Month_1}}</td>
        <td style="text-align: center">{{ $pemploye->Month_2}}</td>
        <td style="text-align: center">{{ $pemploye->Month_3}}</td>
    </tr>
    </tbody>


        @foreach ($personEmployedCost as $employeec)
            @if($pemploye->id == $employeec->id)
            <tbody>
            <tr>
                <td style="text-align: left"><b>Person employed, (cost)</b></td>
                <td style="text-align: center">&#8369; {{ $employeec->Month_1}}</td>
                <td style="text-align: center">&#8369; {{ $employeec->Month_2}}</td>
                <td style="text-align: center">&#8369; {{ $employeec->Month_3}}</td>
            </tr>
            </tbody>
            @endif

        @endforeach {{--personEmployedCost--}}

        @foreach ($costofchemical as $coc)
            @if($pemploye->id == $coc->id)
                <tbody>
                <tr>
                    <td style="text-align: left"><b>Cost of Chemicals used by WTP</b></td>
                    <td style="text-align: center">&#8369; {{ $coc->Month_1}}</td>
                    <td style="text-align: center">&#8369; {{ $coc->Month_2}}</td>
                    <td style="text-align: center">&#8369; {{ $coc->Month_3}}</td>
                </tr>
                </tbody>
            @endif

        @endforeach {{--costofchemical--}}


        @foreach ($utilitycost as $utility)
            @if($pemploye->id == $utility->id)
                <tbody>
                <tr>
                    <td style="text-align: left"><b>Utility Costs of WTP(electricity & water)</b></td>
                    <td style="text-align: center">&#8369; {{ $utility->Month_1}}</td>
                    <td style="text-align: center">&#8369; {{ $utility->Month_2}}</td>
                    <td style="text-align: center">&#8369; {{ $utility->Month_3}}</td>
                </tr>
                </tbody>
            @endif

        @endforeach {{--utilitycost--}}

        @foreach ($administrativecosts as $admins)
            @if($pemploye->id == $admins->id)
                <tbody>
                <tr>
                    <td style="text-align: left"><b>Administrative and Overhead Costs</b></td>
                    <td style="text-align: center">{{ $admins->Month_1}}</td>
                    <td style="text-align: center">{{ $admins->Month_2}}</td>
                    <td style="text-align: center">{{ $admins->Month_3}}</td>
                </tr>
                </tbody>
            @endif

        @endforeach {{--administrativecosts--}}

        @foreach ($costofoperating as $costoper)
            @if($pemploye->id == $costoper->id)
                <tbody>
                <tr>
                    <td style="text-align: left"><b>Cost of operating in-house laboratory</b></td>
                    <td style="text-align: center">{{ $costoper->Month_1}}</td>
                    <td style="text-align: center">{{ $costoper->Month_2}}</td>
                    <td style="text-align: center">{{ $costoper->Month_3}}</td>
                </tr>
                </tbody>
            @endif

        @endforeach {{--costofoperating--}}

        @foreach ($newinvestment as $new)
            @if($pemploye->id == $new->id)
                <tbody>
                <tr>
                    <td style="text-align: left"><b>New/Additional Investments in WTP(description)</b></td>
                    <td style="text-align: center">{{ $new->Month_1}}</td>
                    <td style="text-align: center">{{ $new->Month_2}}</td>
                    <td style="text-align: center">{{ $new->Month_3}}</td>
                </tr>
                </tbody>
            @endif

        @endforeach {{--newinvestment--}}

        @foreach ($costofnew as $cnew)
            @if($pemploye->id == $cnew->id)
                <tbody>
                <tr>
                    <td style="text-align: left"><b>Costs of New/Add Investments(description)</b></td>
                    <td style="text-align: center">{{ $cnew->Month_1}}</td>
                    <td style="text-align: center">{{ $cnew->Month_2}}</td>
                    <td style="text-align: center">{{ $cnew->Month_3}}</td>
                </tr>
                </tbody>
            @endif

        @endforeach {{--costofnew--}}

    @endforeach {{--personEmployed--}}
</table>


<h2 class="mt-3 mx-2 text-success text-left " style="font-size: 20px; font-weight: bolder">WTP DISCHARGE LOCATION</h2>

<table  style="border-style: solid;  margin-top: 3%; margin-bottom: 3%;">
    <thead>
    <tr>
        <th style="text-align: center;width: 20%;">Outlet Number</th>
        <th style="text-align: center">Location of Outlet</th>
        <th style="text-align: center">Name of Receiving water body</th>
    </tr>
    </thead>

    @foreach ($dischargeLocation as $discharge)
    <tbody>

    <tr>
        <td style="text-align: center; width: 20%;">{{ $discharge->Outlet_Number}}</td>
        <td style="text-align: center">{{ $discharge->Location_of_Outlet}}</td>
        <td style="text-align: center">{{ $discharge->Name_of_Receiving_water_body}}</td>
    </tr>

    </tbody>
    @endforeach
</table>


<h2 class="mt-3 mx-2 text-success text-left " style="font-size: 20px; font-weight: bolder">DETAILED REPORT OF WASTEWATER CHARACTERISTICS FOR CONVENTIONAL POLLUTANTS</h2>

<table  style="border-style: solid;  margin-top: 3%; margin-bottom: 3%;">
                                      @foreach ($dreportof_waste_parameters as $dreport_parameter)
                                    <thead>
                                        <tr>
                                            <th style="text-align: center">Outlet No.</th>
                                            <th style="text-align: center">Date</th>
                                            <th style="text-align: center">Effluent Flow Rate (m3/day)</th>
                                            <th style="text-align: center">BOD (mg/L)</th>
                                            <th style="text-align: center">TSS (mg/L)</th>
                                            <th style="text-align: center">Color</th>
                                            <th style="text-align: center">pH</th>
                                            <th style="text-align: center">Oil & Grease (mg/L)</th>
                                            <th style="text-align: center">Temp Rise ©</th>
                                            <th style="text-align: center">{{$dreport_parameter->name_parameter}} {{$dreport_parameter->unit_parameter}}</th>
                                        </tr>
                                    </thead>
                                      @endforeach
                                    <tbody>
                                            @foreach ($dreportofwaste as $report)
                                        <tr>
                                            <td style="text-align: center">{{$report->Outlet_No}}</td>
                                            <td style="text-align: center">{{$report->date}}</td>
                                            <td style="text-align: center">{{$report->Effluent_Flow_Rate}}</td>
                                            <td style="text-align: center">{{$report->BOD_mg_L}}</td>
                                            <td style="text-align: center">{{$report->TSS_mg_L}}</td>
                                            <td style="text-align: center">{{$report->Color}}</td>
                                            <td style="text-align: center">{{$report->pH}}</td>
                                            <td style="text-align: center">{{$report->Oil_Grease_mg_L}}</td>
                                            <td style="text-align: center">{{$report->Temp_Rise}}</td>
                                            <td style="text-align: center">{{$report->Add_parameter}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
</table>



<h2 class="mt-3 mx-2 text-success text-left " style="font-size: 20px; font-weight: bolder">DETAILED REPORT OF WASTEWATER CHARACTERISTICS FOR OTHER POLLUTANTS</h2>


<table  style="border-style: solid;  margin-top: 3%; margin-bottom: 3%;">

    @foreach ($drowcfop as $dro)
                                    <thead>
                                        <tr>

                                            <th style="text-align: center">Outlet No.</th>
                                            <th style="text-align: center">Date</th>
                                            <th style="text-align: center">Effluent Flow Rate (m3/day)</th>
                                            <th style="text-align: center">{{$dro->name1}} {{$dro->unit1}}</th>
                                            <th style="text-align: center">{{$dro->name2}} {{$dro->unit2}}</th>
                                            <th style="text-align: center">{{$dro->name3}} {{$dro->unit3}}</th>
                                            <th style="text-align: center">{{$dro->name4}} {{$dro->unit4}}</th>
                                            <th style="text-align: center">{{$dro->name5}} {{$dro->unit5}}</th>
                                            <th style="text-align: center">{{$dro->name6}} {{$dro->unit6}}</th>
                                            <th style="text-align: center">{{$dro->name7}} {{$dro->unit7}}</th>
                                        </tr>
                                    </thead>
    @endforeach
                                    <tbody>
                                        @foreach ($drowcfop1 as $dro1)
                                        <tr>
                                            <td>{{$dro1->Outlet_No}}</td>
                                            <td>{{$dro1->Date}}</td>
                                            <td>{{$dro1->Effluent_Flow_Rate_m3_day}}</td>
                                            <td>{{$dro1->value1}}</td>
                                            <td>{{$dro1->value2}}</td>
                                            <td>{{$dro1->value3}}</td>
                                            <td>{{$dro1->value4}}</td>
                                            <td>{{$dro1->value5}}</td>
                                            <td>{{$dro1->value6}}</td>
                                            <td>{{$dro1->value7}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                  </table>
