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
                        
                        
                        <div class="col">
                        <p class="p-1 mt-3  text-light" style="background-color:gray; font-size:20px ">
                             MODULE 4: RA 8789 (AIR POLLUTION)  
                             
            
                        </p>
                    </div>

                
                    <div class="container " >
                        <table >
                            <h3 class="mt-3 mx-2 text-success">SUMMARY OF APSE / APCF</h3>
                        </div>
                            </table>

                            <!-- SUMMARY OF APSE / APCF -->

                   

                            <table >
                                <tbody>
                                    <tr>
                                        <td style="text-align: center">Process Equipment</td>
                                        <td style="text-align: center">Location</td>
                                        <td style="text-align: center"># of hours of operation for the quarter</td>
                                    </tr>
                                    @foreach ($summary1 as $summary)
                                    <tr>
                                    <td style="text-align: center">{{ $summary->Process_Equipment }}</td>
                                    <td style="text-align: center">{{ $summary->Location }}</td>
                                    <td style="text-align: center">{{ $summary->no_of_hours_of_operation_for_the_quarter }}</td>
                                 
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <table >
                                <tbody>
                                    
                                    <tr>
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
                                        <td style="text-align:center">Quantity</td>
                                        <td style="text-align:center">Unit</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <br>
                                    @foreach ($summary2 as $summaryy)
                                    <tr>
                                    <td style="text-align: center">{{ $summaryy->Fuel_Burning_Equipment }}</td>
                                    <td style="text-align: center">{{ $summaryy->Rated_Capacity }}</td>
                                    <td style="text-align: center">{{ $summaryy->Location }}</td>
                                    <td style="text-align: center">{{ $summaryy->Fuel_Used }}</td>
                                    <td style="text-align: center">{{ $summaryy->Quantity_Consumed_for_the_quarter }}</td>
                                    <td style="text-align: center">{{ $summaryy->Unit_Consumed_for_the_quarter }}</td>
                                    <td></td>
                                    <td></td>
                                    <td style="text-align: center">{{ $summaryy->no_of_hours_of_operation_for_the_quarter }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <table >

                            <tbody>
                            <tr>
                            <table>
                                <tbody>
                                    <tr>
                                        <td >Process Control Facility</td>
                                        <td>Location</td>
                                        <td># of hours of operation for the quarter</td>
                                    </tr>
                                    @foreach ($summary3 as $summaryyy)
                                    <tr>
                                    <td style="text-align: center">{{ $summaryyy->Pollution_Control_Facility }}</td>
                                    <td style="text-align: center">{{ $summaryyy->Location }}</td>
                                    <td style="text-align: center">{{ $summaryyy->no_of_hours_of_operation_for_the_quarter }}</td>
                                 
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <table>

                        <thead>
                    <tr>
                         <th class="text-success">RECORD COST OF TREATMENT</th>
                     </tr>
                    </thead>

                    </table>

                    <table >

                    <thead>
                     <tr>
                     <th></th>
                     <th style="text-align:center">Month 1</th>
                     <th style="text-align:center">Month 2</th>
                     <th style="text-align:center">Month 3</th>
                    </tr>
                    </thead>
                    <tbody>
                     @foreach ($cost_of_person_employed as $item)
                    <tr>
    
                    <td>Cost of Person employed, (# of employess)</td>
                    <td style="text-align:center">{{ $item->month1 }}</td>
                     <td style="text-align:center">{{ $item->month2 }}</td>
                     <td style="text-align:center">{{ $item->month3 }}</td>

                    </tr>
                    @endforeach
                    
                    @foreach ($total_consumption_of_water as $tow)
                    <tr>

                    <td>Total Consumption of Water (cubic meters)</td>
                    <td style="text-align:center">{{ $tow->month1 }}</td>
                     <td style="text-align:center">{{ $tow->month2 }}</td>
                     <td style="text-align:center">{{ $tow->month3 }}</td>

                    </tr>

                    @endforeach
                    @foreach ($total_cost_of_chemicals_used as $tcocu)
                    <tr>
                    <td>Total Cost of Chemicals used (e.g., activated carbon, KMnO4)</td>
                    <td style="text-align:center">{{ $tcocu->month1 }}</td>
                     <td style="text-align:center">{{ $tcocu->month2 }}</td>
                     <td style="text-align:center">{{ $tcocu->month3 }}</td>
                    
                    </tr>
                    @endforeach

                    @foreach ($total_consumption_of_electricity as $tcoe)
                    <tr>
                    <td>Total Consumption of Electricity (kWh)</td>
                    <td style="text-align:center">{{ $tcoe->month1 }}</td>
                     <td style="text-align:center">{{ $tcoe->month2 }}</td>
                     <td style="text-align:center">{{ $tcoe->month3 }}</td>
                    
                    </tr>
                    @endforeach

                    @foreach ($administrative_and_overhead_costs as $aaoc)
                    <tr>
                    <td>Administrative and Overhead Costs</td>
                    <td style="text-align:center">{{ $aaoc->month1 }}</td>
                     <td style="text-align:center">{{ $aaoc->month2 }}</td>
                     <td style="text-align:center">{{ $aaoc->month3 }}</td>
                    
                    </tr>
                    @endforeach

                    @foreach ($cost_of_operating_in_house_laboratory as $cooihl)
                    <tr>
                    <td>Cost of operating in-house laboratory</td>
                    <td style="text-align:center">{{ $cooihl->month1 }}</td>
                     <td style="text-align:center">{{ $cooihl->month2 }}</td>
                     <td style="text-align:center">{{ $cooihl->month3 }}</td>
                    
                    </tr>
                    @endforeach
                    
                    @foreach ($improvement_or_modification as $iom)
                    <tr>
                    <td>improvement or modification, if any. (description)</td>
                    <td style="text-align:center">{{ $iom->month1 }}</td>
                     <td style="text-align:center">{{ $iom->month2 }}</td>
                     <td style="text-align:center">{{ $iom->month3 }}</td>
                    
                    </tr>
                    @endforeach

                    @foreach ($cost_of_improvement_of_modification as $coiom)
                    <tr>
                    <td>Cost of improvement of modification</td>
                    <td style="text-align:center">{{ $coiom->month1 }}</td>
                     <td style="text-align:center">{{ $coiom->month2 }}</td>
                     <td style="text-align:center">{{ $coiom->month3 }}</td>
                    
                    </tr>
                    @endforeach
                    </tbody>
                    </table>

                    <table>

                                <thead>
                                    <tr>
                                        <th class="text-success">DETAILED REPORT OF AIR EMISSION CHARACTERISTICS</th>
                                    </tr>
                                </thead>

                            </table>

                            <table>

                                <tbody>
                                    <tr>
                                        <td style="text-align:center">FBE No.</td>
                                        <td style="text-align:center">Date</td>
                                        <td style="text-align:center">Flow Rate (Ncm/ day)</td>
                                        <td style="text-align:center">CO (mg/ Ncm)</td>
                                        <td style="text-align:center">NOx (mg/Ncm)</td>
                                        <td style="text-align:center">Particulates (mg/Ncm)</td>
                                        <td style="text-align:center">SOx (mg/Ncm)</td>
                                    </tr>

                                    @foreach ($detailreport as $dr)
                                   <tr>
                                        
                                        <td style="text-align:center">{{$dr->FBE_No}}</td>
                                        <td style="text-align:center">{{$dr->Date}}</td>
                                        <td style="text-align:center">{{$dr->Flow_Rate_Ncm_day}}</td>
                                        <td style="text-align:center">{{$dr->CO_mg_Ncm}}</td>
                                        <td style="text-align:center">{{$dr->NOx_mg_Ncm}}</td>
                                        <td style="text-align:center">{{$dr->Particulates_mg_Ncm}}</td>
                                        <td style="text-align:center">{{$dr->SOx_mg_Ncm}}</td>
                                   </tr>
                                   @endforeach
                                </tbody>
                            </table>