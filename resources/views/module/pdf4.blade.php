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
                             MODULE 4: RA 8789 (AIR POLLUTION)


                        </p>
                    </div>

<h2 class="mt-3 mx-2 text-success text-left " style="font-size: 20px; font-weight: bolder">SUMMARY OF APSE / APCF</h2>



                            <!-- SUMMARY OF APSE / APCF -->



<table  style="border-style: solid;  margin-top: 3%; margin-bottom: 3%; table-layout: fixed;">

    <thead>
    <tr>
        <th style="text-align: center">Process Equipment</th>
        <th style="text-align: center">Location</th>
        <th style="text-align: center"># of hours of operation for the quarter</th>
    </tr>
    </thead>
                                <tbody>

                                    @foreach ($summary1 as $summary)
                                    <tr>
                                    <td style="text-align: center">{{ $summary->Process_Equipment }}</td>
                                    <td style="text-align: center">{{ $summary->Location }}</td>
                                    <td style="text-align: center">{{ $summary->no_of_hours_of_operation_for_the_quarter }}</td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

<table  style="border-style: solid;  margin-top: 3%; margin-bottom: 3%; table-layout: fixed;">
    <thead>
    <tr>
        <th style="text-align: center; border-bottom-style: none;">Fuel Burning Equipment</th>
        <th style="text-align: center; border-bottom-style: none;">Rated Capacity</th>
        <th style="text-align: center; border-bottom-style: none;">Location</th>
        <th style="text-align: center; border-bottom-style: none;">Fuel Used (indicate % if mixed composition)</th>
        <th colspan="2" style="text-align: center">Quantity Consumed for the quarter</th>
        <th style="text-align: center; border-bottom-style: none;"># of hours of operation for the quarter</th>
    </tr>

    <tr>
        <th colspan="1" style="border-top-style: none; border-bottom-style: none; "></th>
        <th colspan="1" style="border-top-style: none; border-bottom-style: none; "></th>
        <th colspan="1" style="border-top-style: none; border-bottom-style: none; "></th>
        <th colspan="1" style="border-top-style: none; border-bottom-style: none; "></th>
        <th style="text-align: center">Quantity</th>
        <th style="text-align: center">Unit</th>
        <th colspan="1" style="text-align: center; border-top-style: none; border-bottom-style: none; "></th>
    </tr>
    </thead>

    @foreach ($summary2 as $summaryy)
<tbody>
<td style="text-align: center">{{ $summaryy->Fuel_Burning_Equipment }}</td>
<td style="text-align: center">{{ $summaryy->Rated_Capacity }}</td>
<td style="text-align: center">{{ $summaryy->Location }}</td>
<td style="text-align: center">{{ $summaryy->Fuel_Used }}</td>
<td style="text-align: center">{{ $summaryy->Quantity_Consumed_for_the_quarter }}</td>
<td style="text-align: center">{{ $summaryy->Unit_Consumed_for_the_quarter }}</td>
<td style="text-align: center">{{ $summaryy->no_of_hours_of_operation_for_the_quarter }}</td>
</tbody>
    @endforeach
</table>

<table  style="border-style: solid;  margin-top: 3%; margin-bottom: 3%; table-layout: fixed;">
    <thead>
    <tr>
        <th style="text-align: center; ">Process Control Facility</th>
        <th style="text-align: center; ">Location</th>
        <th style="text-align: center; "># of hours of operation for the quarter</th>
    </tr>
    </thead>

    <tbody>

    @foreach ($summary3 as $summaryyy)
        <tr>
            <td style="text-align: center">{{ $summaryyy->Pollution_Control_Facility }}</td>
            <td style="text-align: center">{{ $summaryyy->Location }}</td>
            <td style="text-align: center">{{ $summaryyy->no_of_hours_of_operation_for_the_quarter }}</td>

        </tr>
    @endforeach
    </tbody>

</table>

<h2 class="mt-3 mx-2 text-success text-left " style="font-size: 20px; font-weight: bolder">RECORD COST OF TREATMENT</h2>
@foreach ($cost_of_person_employed as $cpe)
<div>
<table  style="border-style: solid;  margin-top: 3%; margin-bottom: 3%; table-layout: fixed;">
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
            <td style="text-align: center">
                @if (!is_null($cpe->month1) && !in_array(strtolower($cpe->month1), ['na', 'n/a', 'none']))
                    <span class="currency-sign">&#8369;</span> {{ $cpe->month1}}
                @else
                    {{ $cpe->month1 }}
                @endif
            </td>
            <td style="text-align: center">
                @if (!is_null($cpe->month2) && !in_array(strtolower($cpe->month2), ['na', 'n/a', 'none']))
                    <span class="currency-sign">&#8369;</span> {{ $cpe->month2}}
                @else
                    {{ $cpe->month2 }}
                @endif
            </td>
            <td style="text-align: center">
                @if (!is_null($cpe->month3) && !in_array(strtolower($cpe->month3), ['na', 'n/a', 'none']))
                    <span class="currency-sign">&#8369;</span> {{ $cpe->month3}}
                @else
                    {{ $cpe->month3 }}
                @endif
            </td>


        </tr>
    </tbody>

        @foreach ($total_consumption_of_water as $tow)
            @if($cpe->id == $tow->id)
                <tbody>
            <tr>
                <td>Total Consumption of Water (cubic meters)</td>
                <td style="text-align: center">
                    @if (!is_null($tow->month1) && !in_array(strtolower($tow->month1), ['na', 'n/a', 'none']))
                    <span class="currency-sign">&#8369;</span> {{ $tow->month1}}
                    @else
                        {{ $tow->month1 }}
                    @endif
                    </td>
                    <td style="text-align: center">
                        @if (!is_null($tow->month2) && !in_array(strtolower($tow->month2), ['na', 'n/a', 'none']))
                            <span class="currency-sign">&#8369;</span> {{ $tow->month2}}
                        @else
                            {{ $tow->month2 }}
                        @endif
                    </td>
                    <td style="text-align: center">
                        @if (!is_null($tow->month3) && !in_array(strtolower($tow->month3), ['na', 'n/a', 'none']))
                            <span class="currency-sign">&#8369;</span> {{ $tow->month3}}
                        @else
                            {{ $tow->month3 }}
                        @endif
                    </td>

            </tr>
                </tbody>
        @endif
    @endforeach {{--total_consumption_of_water--}}

        @foreach ($total_cost_of_chemicals_used as $tcocu)
            @if($cpe->id == $tcocu->id)
                <tbody>
                <tr>
                    <td>Total Cost of Chemicals used (e.g., activated carbon, KMnO4)</td>
                    <td style="text-align: center">
                        @if (!is_null($tcocu->month1) && !in_array(strtolower($tcocu->month1), ['na', 'n/a', 'none']))
                        <span class="currency-sign">&#8369;</span> {{ $tcocu->month1}}
                        @else
                            {{ $tcocu->month1 }}
                        @endif
                        </td>
                        <td style="text-align: center">
                            @if (!is_null($tcocu->month2) && !in_array(strtolower($tcocu->month2), ['na', 'n/a', 'none']))
                                <span class="currency-sign">&#8369;</span> {{ $tcocu->month2}}
                            @else
                                {{ $tcocu->month2 }}
                            @endif
                        </td>
                        <td style="text-align: center">
                            @if (!is_null($tcocu->month3) && !in_array(strtolower($tcocu->month3), ['na', 'n/a', 'none']))
                                <span class="currency-sign">&#8369;</span> {{ $tcocu->month3}}
                            @else
                                {{ $tcocu->month3 }}
                            @endif
                        </td>
                </tr>
                </tbody>
        @endif
    @endforeach {{--total_cost_of_chemicals_used--}}

        @foreach ($total_consumption_of_electricity as $tcoe)
            @if($cpe->id == $tcoe->id)
                <tbody>
                <tr>
                    <td>Total Consumption of Electricity (kWh)</td>
                    <td style="text-align: center">
                        @if (!is_null($tcoe->month1) && !in_array(strtolower($tcoe->month1), ['na', 'n/a', 'none']))
                        <span class="currency-sign">&#8369;</span> {{ $tcoe->month1}}
                        @else
                            {{ $tcoe->month1 }}
                        @endif
                        </td>
                        <td style="text-align: center">
                            @if (!is_null($tcoe->month2) && !in_array(strtolower($tcoe->month2), ['na', 'n/a', 'none']))
                                <span class="currency-sign">&#8369;</span> {{ $tcoe->month2}}
                            @else
                                {{ $tcoe->month2 }}
                            @endif
                        </td>
                        <td style="text-align: center">
                            @if (!is_null($tcoe->month3) && !in_array(strtolower($tcoe->month3), ['na', 'n/a', 'none']))
                                <span class="currency-sign">&#8369;</span> {{ $tcoe->month3}}
                            @else
                                {{ $tcoe->month3 }}
                            @endif
                        </td>
                </tr>
                </tbody>
        @endif
    @endforeach {{--total_consumption_of_electricity--}}

        @foreach ($administrative_and_overhead_costs as $aaoc)
            @if($cpe->id == $aaoc->id)
                <tbody>
                <tr>
                    <td>Administrative and Overhead Costs</td>
                    <td style="text-align: center">
                        @if (!is_null($aaoc->month1) && !in_array(strtolower($aaoc->month1), ['na', 'n/a', 'none']))
                        <span class="currency-sign">&#8369;</span> {{ $aaoc->month1}}
                        @else
                            {{ $aaoc->month1 }}
                        @endif
                        </td>
                        <td style="text-align: center">
                            @if (!is_null($aaoc->month2) && !in_array(strtolower($aaoc->month2), ['na', 'n/a', 'none']))
                                <span class="currency-sign">&#8369;</span> {{ $aaoc->month2}}
                            @else
                                {{ $aaoc->month2 }}
                            @endif
                        </td>
                        <td style="text-align: center">
                            @if (!is_null($aaoc->month3) && !in_array(strtolower($aaoc->month3), ['na', 'n/a', 'none']))
                                <span class="currency-sign">&#8369;</span> {{ $aaoc->month3}}
                            @else
                                {{ $aaoc->month3 }}
                            @endif
                        </td>

                </tr>
                </tbody>
        @endif
    @endforeach {{--administrative_and_overhead_costs--}}

        @foreach ($cost_of_operating_in_house_laboratory as $cooihl)
            @if($cpe->id == $cooihl->id)
                <tbody>
                <tr>
                    <td>Cost of operating in-house laboratory</td>
                    <td style="text-align: center">
                        @if (!is_null($cooihl->month1) && !in_array(strtolower($cooihl->month1), ['na', 'n/a', 'none']))
                        <span class="currency-sign">&#8369;</span> {{ $cooihl->month1}}
                        @else
                            {{ $cooihl->month1 }}
                        @endif
                        </td>
                        <td style="text-align: center">
                            @if (!is_null($cooihl->month2) && !in_array(strtolower($cooihl->month2), ['na', 'n/a', 'none']))
                                <span class="currency-sign">&#8369;</span> {{ $cooihl->month2}}
                            @else
                                {{ $cooihl->month2 }}
                            @endif
                        </td>
                        <td style="text-align: center">
                            @if (!is_null($cooihl->month3) && !in_array(strtolower($cooihl->month3), ['na', 'n/a', 'none']))
                                <span class="currency-sign">&#8369;</span> {{ $cooihl->month3}}
                            @else
                                {{ $cooihl->month3 }}
                            @endif
                        </td>

                </tr>
                </tbody>
            @endif
        @endforeach {{--cost_of_operating_in_house_laboratory--}}

        @foreach ($improvement_or_modification as $iom)
            @if($cpe->id == $iom->id)
                <tbody>
                <tr>
                    <td>improvement or modification, if any. (description)</td>
                    <td style="text-align: center">
                            {{ $iom->month1}}
                    </td>
                    <td style="text-align: center">
                            {{ $iom->month2}}
                    </td>
                    <td style="text-align: center">
                            {{ $iom->month3}}
                    </td>

                </tr>
                </tbody>
            @endif
        @endforeach {{--improvement_or_modification--}}

        @foreach ($cost_of_improvement_of_modification as $coiom)
            @if($cpe->id == $coiom->id)
                <tbody>
                <tr>
                    <td>Cost of improvement of modification</td>
                    <td style="text-align: center">
                        @if (!is_null($coiom->month1) && !in_array(strtolower($coiom->month1), ['na', 'n/a', 'none']))
                        <span class="currency-sign">&#8369;</span> {{ $coiom->month1}}
                        @else
                            {{ $coiom->month1 }}
                        @endif
                        </td>
                        <td style="text-align: center">
                            @if (!is_null($coiom->month2) && !in_array(strtolower($coiom->month2), ['na', 'n/a', 'none']))
                                <span class="currency-sign">&#8369;</span> {{ $coiom->month2}}
                            @else
                                {{ $coiom->month2 }}
                            @endif
                        </td>
                        <td style="text-align: center">
                            @if (!is_null($coiom->month3) && !in_array(strtolower($coiom->month3), ['na', 'n/a', 'none']))
                                <span class="currency-sign">&#8369;</span> {{ $coiom->month3}}
                            @else
                                {{ $coiom->month3 }}
                            @endif
                        </td>

                </tr>
            @endif
        @endforeach {{--cost_of_improvement_of_modification--}}
    </tbody>

</table>
</div>
@endforeach {{--cost_of_person_employed--}}

<h2 class="mt-3 mx-2 text-success text-left " style="font-size: 20px; font-weight: bolder">DETAILED REPORT OF AIR EMISSION CHARACTERISTICS</h2>
<table  style="border-style: solid;  margin-top: 3%; margin-bottom: 3%; table-layout: fixed;">
    @foreach($detail_parameter as $parameter)
<thead>
<tr>
    <th style="text-align:center; border-bottom-style: none;">FBE No.</th>
    <th style="text-align:center; border-bottom-style: none;">Date</th>
    <th style="text-align:center; border-bottom-style: none;">Flow Rate (Ncm/ day)</th>
    <th style="text-align:center; border-bottom-style: none;">CO (mg/ Ncm)</th>
    <th style="text-align:center; border-bottom-style: none;">NOx (mg/Ncm)</th>
    <th style="text-align:center; border-bottom-style: none;">Particulates (mg/Ncm)</th>
    <th style="text-align:center; border-bottom-style: none;">SOx (mg/Ncm)</th>
    <th style="text-align:center; border-bottom-style: none;">{{$parameter->parameter1}}</th>
    <th style="text-align:center; border-bottom-style: none;">{{$parameter->parameter2}}</th>
    <th style="text-align:center; border-bottom-style: none;">{{$parameter->parameter3}}</th>

</tr>
</thead>
    @endforeach

<tbody>
<tr>
    <td colspan="1" style="border-top-style: none; border-bottom-style: none; "></td>
    <td colspan="1" style="border-top-style: none; border-bottom-style: none; "></td>
    <td colspan="1" style="border-top-style: none; border-bottom-style: none; "></td>
    <td colspan="1" style="border-top-style: none; border-bottom-style: none; "></td>
    <td colspan="1" style="border-top-style: none; border-bottom-style: none; "></td>
    <td colspan="1" style="border-top-style: none; border-bottom-style: none; "></td>
    <td colspan="1" style="border-top-style: none; border-bottom-style: none; "></td>
            <td style="text-align:center; border-top-style: none;">mg/Ncm</td>
            <td style="text-align:center; border-top-style: none;">mg/Ncm</td>
            <td style="text-align:center; border-top-style: none;">mg/Ncm</td>

</tr>
@foreach ($detailreport as $detail)
<tr>
    <td style="text-align:center">{{$detail->FBE_No}}</td>
    <td style="text-align:center">{{$detail->Date}}</td>
    <td style="text-align:center">{{$detail->Flow_Rate_Ncm_day}}</td>
    <td style="text-align:center">{{$detail->CO_mg_Ncm}}</td>
    <td style="text-align:center">{{$detail->NOx_mg_Ncm}}</td>
    <td style="text-align:center">{{$detail->Particulates_mg_Ncm}}</td>
    <td style="text-align:center">{{$detail->SOx_mg_Ncm}}</td>
    @foreach ($detail_parameter_value as $index => $dvalue)
        @if ($loop->parent->index == $index)
            <td style="text-align:center">{{$dvalue->value_parameter1}}</td>
            <td style="text-align:center">{{$dvalue->value_parameter2}}</td>
            <td style="text-align:center">{{$dvalue->value_parameter3}}</td>
        @endif
    @endforeach
</tr>
</tbody>
        @endforeach
</table>

