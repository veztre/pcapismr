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
                            <p class="p-1 mt-3  text-light" style="background-color:gray; font-size:20px " >
                          MODULE 3: RA 9275
                            </p>
                        </div>

                        <div class="container " >
                            <table >
                                <h3 class="mt-3 mx-2 text-success">WATER POLLUTION DATA</h3>
                        </div>

                        <table>

                        <tbody>
                        <tr>
                        <td>Domestic wastewater (cubicmeters/day)</td>
                        <td>Processs wastewater (cubicmeters/day)</td>
                        <td>Cooling water (cubicmeters/day)</td>
                        <td>others (cubicmeters/day)</td>
                        <td>others (cubicmeters/day)</td>
                        <td>Waste water, equipment (cubicmeters/day)</td>
                        <td>Waste water, floor (cubicmeters/day)</td>

                        </tr>
                        </tbody>

                        <tbody>

                            @foreach ($waterpolutiondata as $water)
                            <tr>
                                <td>{{$water->Domestic_wastewater}}</td>
                                <td>{{$water->Processs_wastewater}}</td>
                                <td>{{$water->Cooling_water}}</td>
                                <td>{{$water->others_n}}</td>
                                <td>{{$water->others_m}}</td>
                                <td>{{$water->Waste_water_equipment}}</td>
                                <td>{{$water->Waste_water_floor}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>

                        <table>
                                <h3 class="mt-3 mx-2 text-success">RECORD COST OF TREATMENT</h3>
                        
                        </table>
                        <table>
                        <thead>
                                        <tr>
                                            <td></td>
                                            <td style="text-align: center">Month 1</td>
                                            <td style="text-align: center">Month 2</td>
                                            <td style="text-align: center">Month 3</td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        @foreach ($personEmployed as $employe)
                                        <tr>
                                            <td>Person employed, (# of employees)</td>
                                           <td>{{ $employe->Month_1}}</td>
                                           <td>{{ $employe->Month_2}}</td>
                                           <td>{{ $employe->Month_3}}</td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody> 
                                    
                                    <tbody>
                                        @foreach ($personEmployedCost as $employee)
                                        <tr>
                                            <td>Person employed, (cost)</td>
                                           <td>{{ $employee->Month_1}}</td>
                                           <td>{{ $employee->Month_2}}</td>
                                           <td>{{ $employee->Month_3}}</td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>    

                                    <tbody>
                                        @foreach ($costofchemical as $coc)
                                        <tr>
                                            <td>Cost of Chemicals used by WTP</td>
                                           <td>{{ $coc->Month_1}}</td>
                                           <td>{{ $coc->Month_2}}</td>
                                           <td>{{ $coc->Month_3}}</td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>   
                                    
                                    <tbody>
                                        @foreach ($utilitycost as $utility)
                                        <tr>
                                        <td>Utility Costs of WTP(electricity & water)</td>
                                           <td>{{ $utility->Month_1}}</td>
                                           <td>{{ $utility->Month_2}}</td>
                                           <td>{{ $utility->Month_3}}</td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>    

                                    <tbody>
                                        @foreach ($administrativecosts as $admins)
                                        <tr>
                                        <td>Administrative and Overhead Costs</td>
                                           <td>{{ $admins->Month_1}}</td>
                                           <td>{{ $admins->Month_2}}</td>
                                           <td>{{ $admins->Month_3}}</td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>    
                
                                    <tbody>
                                        @foreach ($costofoperating as $costoper)
                                        <tr>
                                        <td>Cost of operating in-house laboratory</td>
                                           <td>{{ $costoper->Month_1}}</td>
                                           <td>{{ $costoper->Month_2}}</td>
                                           <td>{{ $costoper->Month_3}}</td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>  

                                    <tbody>
                                        @foreach ($newinvestment as $new)
                                        <tr>
                                        <td>New/Additional Investments in WTP(description)</td>
                                           <td>{{ $new->Month_1}}</td>
                                           <td>{{ $new->Month_2}}</td>
                                           <td>{{ $new->Month_3}}</td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>    

                                    <tbody>
                                        @foreach ($costofnew as $cnew)
                                        <tr>
                                        <td>Costs of New/Add Investments(description)</td>
                                           <td>{{ $cnew->Month_1}}</td>
                                           <td>{{ $cnew->Month_2}}</td>
                                           <td>{{ $cnew->Month_3}}</td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>

                            <table>
                                <h3 class="mt-3 mx-2 text-success">WTP DISCHARGE LOCATION</h3>
                
                                    <thead>
                                        <tr>
                                            <th style="text-align: center">Outlet Number</th>
                                            <th style="text-align: center">Location of Outlet</th>
                                            <th style="text-align: center">Name of Receiving water body</th>
                                        </tr>
        
                                        </thead>
                                        <tbody>

                                            @foreach ($dischargeLocation as $discharge)
                                        <tr>
                                            <td>{{$discharge->Outlet_Number}}</td>
                                            <td>{{$discharge->Location_of_Outlet}}</td>
                                            <td>{{$discharge->Name_of_Receiving_water_body}}</td>

                                        </tr>
                                        @endforeach
                                    </tbody>        

                            </table>

                            <table>
                                <h3 class="mt-3 mx-2 text-success">DETAILED REPORT OF WASTEWATER CHARACTERISTICS FOR CONVENTIONAL POLLUTANTS</h3>
                            </table>
                                  <table>
                                    <thead>
                                        <tr>
                                            <th style="text-align: center">Outlet No.</th>
                                            <th style="text-align: center">Date</th>
                                            <th style="text-align: center">NEffluent Flow Rate (m3/day)</th>
                                            <th style="text-align: center">BOD (mg/L)</th>   
                                            <th style="text-align: center">TSS (mg/L)</th>
                                            <th style="text-align: center">Color</th>   
                                            <th style="text-align: center">pH</th>
                                            <th style="text-align: center">Oil & Grease (mg/L)</th>   
                                            <th style="text-align: center">Temp Rise ©</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                            @foreach ($dreportofwaste as $report)
                                        <tr>
                                            <td>{{$report->Outlet_No}}</td>
                                            <td>{{$report->date}}</td>
                                            <td>{{$report->NEffluent_Flow_Rate}}</td>
                                            <td>{{$report->BOD_mg_L}}</td>
                                            <td>{{$report->TSS_mg_L}}</td>
                                            <td>{{$report->Color}}</td>
                                            <td>{{$report->pH}}</td>
                                            <td>{{$report->Oil_Grease_mg_L}}</td>
                                            <td>{{$report->Temp_Rise}}</td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>

                            <table>
                                <h3 class="mt-3 mx-2 text-success">DETAILED REPORT OF WASTEWATER CHARACTERISTICS FOR OTHER POLLUTANTS</h3>
                            </table>
                                  <table>
                                    <thead>
                                        <tr>
                                            
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th style="text-align: center">Name</th>
                                            <th style="text-align: center">Name</th>
                                            <th style="text-align: center">Name</th>
                                            <th style="text-align: center">Name</th>   
                                            <th style="text-align: center">Name</th>
                                            <th style="text-align: center">Name</th>   
                                          
                                        </tr>
                                    </thead>

                            <tbody>
                                @foreach ($drowcfop as $dro)
                                <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td >{{$dro->name1}}</td>
                                        <td>{{$dro->name2}}</td>
                                        <td>{{$dro->name3}}</td>
                                        <td>{{$dro->name4}}</td>
                                        <td>{{$dro->name5}}</td>
                                        <td>{{$dro->name6}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <thead>
                                        <tr>
                                            
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th style="text-align: center">Unit</th>
                                            <th style="text-align: center">Unit</th>
                                            <th style="text-align: center">Unit</th>
                                            <th style="text-align: center">Unit</th>   
                                            <th style="text-align: center">Unit</th>
                                            <th style="text-align: center">Unit</th>   
                                          
                                        </tr>
                                    </thead>

                                    <tbody>
                                @foreach ($drowcfop as $dro)
                                <tr>
                                        
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td >{{$dro->unit1}}</td>
                                        <td>{{$dro->unit2}}</td>
                                        <td>{{$dro->unit3}}</td>
                                        <td>{{$dro->unit4}}</td>
                                        <td>{{$dro->unit5}}</td>
                                        <td>{{$dro->unit6}}</td>
                                </tr>
                                @endforeach
                                    </tbody>

                                    <thead>
                                        <tr>
                                            
                                            <th style="text-align: center">Outlet No.</th>
                                            <th style="text-align: center">Date</th>
                                            <th style="text-align: center">Effluent Flow Rate (m3/day)</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
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
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
