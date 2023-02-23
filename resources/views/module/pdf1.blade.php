
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
                    <p class="p-1 mt-3   text-light" style="background-color:gray; font-size:20px ">
                      MODULE 1: GENERAL INFORMATION 
                    </p>
                  </div>
         <div class="container pt-4">    
                <P class="text-secondary ml-3 mt-3">Please provide the necessary revised, corrected or updated information not
                        contained in your <br> General Information Sheet.</P>
                  </div>

<table>
<tbody>
                    @foreach ($gic as $item)
                  <tr>

                    <td>{{$item->description}}</td>

                  </tr>
                  @endforeach
</tbody>
                  </table>

                  <table>
                    <h3 class="mt-3 mx-2 text-success">DENR PERMITS/LICENSE/CLEARANCES</h3>

                    <thead>
                      <tr>
                        <th>Environmental Laws</th>
                        <th></th>
                        <th>Permits</th>
                        <th>Data issued</th>
                        <th>Expiry Data</th>
                      </tr>
                    </thead>
                  
                    <tbody>
                      @foreach ($aircon as $air)
                      <tr>
                        <td>RA 9275</td>
                        <td>A/C</td>
                        <td>{{$air->permit}}</td>
                        <td>{{$air->dateIssued}}</td>
                        <td>{{$air->dateExpired}}</td>

                      </tr>
                      @endforeach
                    </tbody>

                    <tbody>

                    @foreach ($dpno as $dp)
                        <tr>
                          <td></td>
                          <td>DP no.</td>
                          <td>{{$dp->permit}}</td>
                          <td>{{$dp->dateIssued}}</td>
                          <td>{{$dp->dateExpired}}</td>
                            
              
                        </tr>
                        @endforeach


                    </tbody>

                    <tbody>
                      @foreach ($cncno as $cn)
                        <tr>
                            <td>PD 1586</td>
                            <td>ECC/CNC no.</td>
                            <td>{{$cn->permit}}</td>
                            <td>{{$cn->dateIssued}}</td>
                            <td>{{$cn->dateExpired}}</td>
                            
                          
                        </tr>
                        @endforeach
                    </tbody>
                            @foreach ($denrid as $denr)
                    <tbody>
                        <tr>
                            <td>RA 6969</td>
                            <td>DENR Registry ID</td>
                            <td>{{$denr->permit}}</td>
                            <td>{{$denr->dateIssued}}</td>
                            <td>{{$denr->dateExpired}}</td>
                            

                        </tr>
                        @endforeach
                    </tbody>

                   @foreach ($transporterReg as $trans)

                   <tbody>
                        <tr>
                            <td></td>
                            <td>Transporter Registration</td>
                            <td>{{$trans->permit}}</td>
                            <td>{{$trans->dateIssued}}</td>
                            <td>{{$trans->dateExpired}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    @foreach ($tsdreg as $tsd)
                    <tbody>
                        <tr>
                            <td></td>
                            <td>TSD Registration</td>
                            <td>{{$tsd->permit}}</td>
                            <td>{{$tsd->dateIssued}}</td>
                            <td>{{$tsd->dateExpired}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    @foreach ($ccoreg as $cco)

                    <tbody>
                        <tr>
                            <td></td>
                            <td>CCO Registration</td>
                            <td>{{$cco->permit}}</td>
                            <td>{{$cco->dateIssued}}</td>
                            <td>{{$cco->dateExpired}}</td>
                        </tr>
                        @endforeach
                    </tbody>

                    @foreach ($import as $imp)

                    <tbody>
                        <tr>
                            <td></td>
                            <td>Importation Clearance No.</td>
                            <td>{{$imp->permit}}</td>
                            <td>{{$imp->dateIssued}}</td>
                            <td>{{$imp->dateExpired}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    @foreach ($permit as $permt)

                    <tbody>
                        <tr>
                            <td></td>
                            <td>Permit to Transport</td>
                            <td>{{$permt->permit}}</td>
                            <td>{{$permt->dateIssued}}</td>
                            <td>{{$permt->dateExpired}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    @foreach ($smallquan as $small)
                    <tbody>
                        <tr>
                            <td></td>
                            <td> Small Quantity Importation</td>
                            <td>{{$small->permit}}</td>
                            <td>{{$small->dateIssued}}</td>
                            <td>{{$small->dateExpired}}</td>
                        </tr>
                        @endforeach
                    </tbody>

                    @foreach ($priority as $prio)
                    <tbody>
                        <tr>
                            <td></td>
                            <td>Priority Chemical List</td>
                            <td>{{$prio->permit}}</td>
                            <td>{{$prio->dateIssued}}</td>
                            <td>{{$prio->dateExpired}}</td>
                        </tr>
                        @endforeach
                    </tbody>

                    @foreach ($piccs as $pic)
                    <tbody id="piccs">
                        <tr>
                            <td></td>
                            <td>PICCS</td>
                            <td>{{$pic->permit}}</td>
                            <td>{{$pic->dateIssued}}</td>
                            <td>{{$pic->dateExpired}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    @foreach ($pmpin as $pin)
                    <tbody>
                        <tr>
                            <td></td>
                            <td>PMPIN</td>
                            <td>{{$pin->permit}}</td>
                            <td>{{$pin->dateIssued}}</td>
                            <td>{{$pin->dateExpired}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    @foreach ($acno as $ac)
                    <tbody>
                        <tr>
                            <td>RA 8749</td>
                            <td>A/C no.</td>
                            <td>{{$ac->permit}}</td>
                            <td>{{$ac->dateIssued}}</td>
                            <td>{{$ac->dateExpired}}</td>

                        </tr>
                        @endforeach

                    </tbody>
                    @foreach ($pono as $pn)

                    <tbody>
                        <tr>
                            <td></td>
                            <td>PO No.</td>
                            <td>{{$pn->permit}}</td>
                            <td>{{$pn->dateIssued}}</td>
                            <td>{{$pn->dateExpired}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>

                  <table>
                        <h3 class="mt-3 mx-2 text-success">OPERATION</h3>

                        <thead>

                            <th></th>
                            <th></th>
                         
                                <th>Operating hours/day</th>
                                <th>Operating days/week</th>
                                <th># shift/day</th>
                           
                        </thead>
                          @foreach ($operation as $operate)
                        <tbody>
                            <tr>
                                <td>Average</td>
                                <td></td>
                                <td>{{$operate->aveOPhours}}</td>
                                <td>{{$operate->aveOPdays}}</td>
                                <td>{{$operate->aveOPshift}}</td>
                            </tr>
                        </tbody>

                            <tbody>
                            <tr>
                                <td>Maximum</td>
                                <td></td>
                                <td>{{$operate->maxOPhours}}</td>
                                <td>{{$operate->maxOPdays}}</td>
                                <td>{{$operate->maxOPshift}}</td>
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <table>
                        <h3 class="mt-3 mx-2 text-success">OPERATION / PRODUCTION / QUALITY</h3>

                            <tbody>
                              @foreach ($production as $product)
                                <tr>
                                    <td>Average Daily Production Output</td>
                                    <td>{{$product->aveProduction}}</td>

                                    <td>Total Output This Quarter</td>
                                    <td>{{$product->totalOutput}}</td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr>
                                    <td>Total Consuption This Quarter</td>
                                    <td>{{$product->totalConsumption}}</td>

                                    <td>Total Electric Consumption this Quarter (kwh)</td>
                                    <td>{{$product->totalElectric}}</td>
                                   
                                </tr>
                                @endforeach
                            </tbody>

                    </table>


                

                  