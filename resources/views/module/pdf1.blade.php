
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
}
td {
    border: 1px solid #dddddd;
    padding: 8px;
    background-color: white;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>


  <div class="col">
  <p class="p-1 mt-3   text-light" style="background-color:gray; font-size:25px ">
                      MODULE 1: GENERAL INFORMATION
                    </p>
                  </div>

  <div class="container pt-0">

      @foreach ($ref_no as $ref_nos)

          <p class="text-secondary ml-2 mt-2" style="font-size: 15px; "><b>Reference No.:</b> {{ $ref_nos->ref_no }} </p>
      @endforeach


      @foreach ($year as $years)

          <p class="text-secondary ml-2 mt-2" style="font-size: 15px; "><b>Year:</b> {{$years->year}}

      @endforeach

          @foreach ($quarter as $quarters)

         <b>Quarter:</b> {{$quarters->quarter}} </p>

      @endforeach

  @foreach ($plants as $plant)

    <p class="text-secondary ml-2 mt-2" style="font-size: 15px; "><b>Name of Plant:</b> {{$plant->plantname}} </p>

      @endforeach

  </div>

         <div class="container pt-4">
                <p class="text-secondary ml-2 mt-2" style="font-size: 15px; ">Please provide the necessary revised, corrected or updated information not
                        contained in your <br> General Information Sheet.</p>
                  </div>

  <table  style="border-style: solid;  margin-top: 3%; margin-bottom: 3%;">
<tbody>
                    @foreach ($gic as $item)

                  <tr>

                    <td style="text-align: justify ">{{$item->description}}</td>

                  </tr>

                  @endforeach
</tbody>
                  </table>


  <h2 class="mt-3 mx-2 text-success text-left " style="font-size: 20px; font-weight: bolder">DENR PERMITS/LICENSE/CLEARANCES</h2>

  <table style="table-layout:fixed; border-style: solid; margin-top: 3%; margin-bottom: 3%;">

                    <thead>
                      <tr>
                        <th style="text-align: center;">Environmental Laws</th>
                        <th style="text-align: center;">Permits</th>
                        <th style="text-align: center;">Data issued</th>
                        <th style="text-align: center;">Expiry Data</th>
                      </tr>
                    </thead>


                    <tbody>

                      <tr>
                        <td colspan="4"><b>RA 9275</b></td>
                      </tr>
                      @foreach ($aircon as $air)
                      <tr>

                          <td style="text-align: center; background-color: white;">A/C</td>
                          <td style="text-align: center; background-color: white;">{{$air->permit}}</td>
                          <td style="text-align: center; background-color: white;">{{$air->dateIssued}}</td>
                          <td style="text-align: center; background-color: white;">{{$air->dateExpired}}</td>
                      </tr>
                      @endforeach

                    </tbody>

                    <tbody>


                    @foreach ($dpno as $dp)
                        <tr>
                            @if ($loop->first)
                                <td style="text-align: center; background-color: white; border-bottom-style: none;">DP no.</td>
                                <td style="text-align: center; background-color: white;">{{$dp->permit}}</td>
                                <td style="text-align: center; background-color: white;">{{$dp->dateIssued}}</td>
                                <td style="text-align: center; background-color: white;">{{$dp->dateExpired}}</td>
                            @else
                                <td style="text-align: center; background-color: white; border-style: none">&nbsp;</td>
                                <td style="text-align: center; background-color: white;">{{$dp->permit}}</td>
                                <td style="text-align: center; background-color: white;">{{$dp->dateIssued}}</td>
                                <td style="text-align: center; background-color: white;">{{$dp->dateExpired}}</td>
                            @endif
                        </tr>

                    @endforeach
                    </tbody>

                    <tbody>




                        <tr>
                            <td colspan="4"><b>PD 1586</b></td>

                        </tr>
                        @foreach ($cncno as $cn)
                          <tr>
                              @if ($loop->first)
                                  <td style="text-align: center; background-color: white; border-bottom-style: none;">ECC/CNC no.</td>
                                  <td style="text-align: center; background-color: white">{{$cn->permit}}</td>
                                  <td style="text-align: center; background-color: white">{{$cn->dateIssued}}</td>
                                  <td style="text-align: center; background-color: white">{{$cn->dateExpired}}</td>
                              @else
                                  <td style="text-align: center; background-color: white; border-style: none">&nbsp;</td>
                                  <td style="text-align: center; background-color: white;">{{$cn->permit}}</td>
                                  <td style="text-align: center; background-color: white;">{{$cn->dateIssued}}</td>
                                  <td style="text-align: center; background-color: white;">{{$cn->dateExpired}}</td>
                              @endif
                          </tr>
                              @endforeach
                    </tbody>


                    <tbody>
                        <tr>
                            <td colspan="4"><b>RA 6969</b></td>

                        </tr>
                        @foreach ($denrid as $denr)
                        <tr>
                            <td style="text-align: center; background-color: white">DENR Registry ID</td>


                            <td style="text-align: center; background-color: white">{{$denr->permit}}</td>
                            <td style="text-align: center; background-color: white">{{$denr->dateIssued}}</td>
                            <td style="text-align: center; background-color: white">{{$denr->dateExpired}}</td>
                        </tr>

                            @endforeach
                    </tbody>



                   <tbody>
                   @foreach ($transporterReg as $trans)
                        <tr>
                            <td style="text-align: center; ">Transporter Registration</td>
                            <td style="text-align: center; ">{{$trans->permit}}</td>
                            <td style="text-align: center; ">{{$trans->dateIssued}}</td>
                            <td style="text-align: center;">{{$trans->dateExpired}}</td>
                        </tr>
                            @endforeach
                    </tbody>



                    <tbody>
                    @foreach ($tsdreg as $tsd)
                        <tr>
                            <td style="text-align: center;">TSD Registration</td>
                            <td style="text-align: center;">{{$tsd->permit}}</td>
                            <td style="text-align: center;">{{$tsd->dateIssued}}</td>
                            <td style="text-align: center;">{{$tsd->dateExpired}}</td>
                        </tr>

                        @endforeach
                    </tbody>



                    <tbody>
                    @foreach ($ccoreg as $cco)
                        <tr>
                            @if ($loop->first)
                                <td style="text-align: center; background-color: white; border-bottom-style: none;">CCO Registration</td>
                                <td style="text-align: center;">{{$cco->permit}}</td>
                                <td style="text-align: center;">{{$cco->dateIssued}}</td>
                                <td style="text-align: center;">{{$cco->dateExpired}}</td>
                            @else
                                <td style="text-align: center; background-color: white; border-style: none">&nbsp;</td>
                                <td style="text-align: center; background-color: white;">{{$cco->permit}}</td>
                                <td style="text-align: center; background-color: white;">{{$cco->dateIssued}}</td>
                                <td style="text-align: center; background-color: white;">{{$cco->dateExpired}}</td>
                            @endif
                        </tr>

                           @endforeach
                    </tbody>




                    <tbody>
                    @foreach ($import as $imp)
                        <tr>
                            @if ($loop->first)
                                <td style="text-align: center; background-color: white; border-bottom-style: none;">Importation Clearance No.</td>
                                <td style="text-align: center;">{{$imp->permit}}</td>
                                <td style="text-align: center;">{{$imp->dateIssued}}</td>
                                <td style="text-align: center;">{{$imp->dateExpired}}</td>
                            @else
                                <td style="text-align: center; background-color: white; border-style: none">&nbsp;</td>
                                <td style="text-align: center; background-color: white;">{{$imp->permit}}</td>
                                <td style="text-align: center; background-color: white;">{{$imp->dateIssued}}</td>
                                <td style="text-align: center; background-color: white;">{{$imp->dateExpired}}</td>
                            @endif
                        </tr>

                            @endforeach
                    </tbody>



                    <tbody>
                    @foreach ($permit as $permt)
                        <tr>
                            @if ($loop->first)
                                <td style="text-align: center; background-color: white; border-bottom-style: none;">Permit to Transport</td>
                                <td style="text-align: center;">{{$permt->permit}}</td>
                                <td style="text-align: center;">{{$permt->dateIssued}}</td>
                                <td style="text-align: center;">{{$permt->dateExpired}}</td>
                            @else
                                <td style="text-align: center; background-color: white; border-style: none">&nbsp;</td>
                                <td style="text-align: center; background-color: white;">{{$permt->permit}}</td>
                                <td style="text-align: center; background-color: white;">{{$permt->dateIssued}}</td>
                                <td style="text-align: center; background-color: white;">{{$permt->dateExpired}}</td>
                            @endif
                        </tr>

                             @endforeach
                    </tbody>


                    <tbody>
                    @foreach ($smallquan as $small)
                        <tr>
                            @if ($loop->first)
                                <td style="text-align: center; background-color: white; border-bottom-style: none;">Small Quantity Importation</td>
                                <td style="text-align: center;">{{$small->permit}}</td>
                                <td style="text-align: center;">{{$small->dateIssued}}</td>
                                <td style="text-align: center;">{{$small->dateExpired}}</td>
                            @else
                                <td style="text-align: center; background-color: white; border-style: none">&nbsp;</td>
                                <td style="text-align: center; background-color: white;">{{$small->permit}}</td>
                                <td style="text-align: center; background-color: white;">{{$small->dateIssued}}</td>
                                <td style="text-align: center; background-color: white;">{{$small->dateExpired}}</td>
                            @endif
                        </tr>

                            @endforeach
                    </tbody>



                    <tbody>
                    @foreach ($priority as $prio)
                        <tr>
                            @if ($loop->first)
                                <td style="text-align: center; background-color: white; border-bottom-style: none;">Priority Chemical List</td>
                                <td style="text-align: center;">{{$prio->permit}}</td>
                                <td style="text-align: center;">{{$prio->dateIssued}}</td>
                                <td style="text-align: center;">{{$prio->dateExpired}}</td>
                            @else
                                <td style="text-align: center; background-color: white; border-style: none">&nbsp;</td>
                                <td style="text-align: center; background-color: white;">{{$prio->permit}}</td>
                                <td style="text-align: center; background-color: white;">{{$prio->dateIssued}}</td>
                                <td style="text-align: center; background-color: white;">{{$prio->dateExpired}}</td>
                            @endif
                        </tr>

                            @endforeach
                    </tbody>



                    <tbody id="piccs">

                    @foreach ($piccs as $pic)
                        <tr>
                            @if ($loop->first)
                                <td style="text-align: center; background-color: white; border-bottom-style: none;">PICCS</td>
                                <td style="text-align: center;">{{$pic->permit}}</td>
                                <td style="text-align: center;">{{$pic->dateIssued}}</td>
                                <td style="text-align: center;">{{$pic->dateExpired}}</td>
                            @else
                                <td style="text-align: center; background-color: white; border-style: none">&nbsp;</td>
                                <td style="text-align: center; background-color: white;">{{$pic->permit}}</td>
                                <td style="text-align: center; background-color: white;">{{$pic->dateIssued}}</td>
                                <td style="text-align: center; background-color: white;">{{$pic->dateExpired}}</td>
                            @endif
                        </tr>

                            @endforeach
                    </tbody>


                    <tbody>
                    @foreach ($pmpin as $pin)
                        <tr>
                            @if ($loop->first)
                                <td style="text-align: center; background-color: white; border-bottom-style: none;">PMPIN</td>
                                <td style="text-align: center;">{{$pin->permit}}</td>
                                <td style="text-align: center;">{{$pin->dateIssued}}</td>
                                <td style="text-align: center;">{{$pin->dateExpired}}</td>
                            @else
                                <td style="text-align: center; background-color: white; border-style: none">&nbsp;</td>
                                <td style="text-align: center; background-color: white;">{{$pin->permit}}</td>
                                <td style="text-align: center; background-color: white;">{{$pin->dateIssued}}</td>
                                <td style="text-align: center; background-color: white;">{{$pin->dateExpired}}</td>
                            @endif
                        </tr>

                            @endforeach
                    </tbody>


                    <tbody>
                        <tr>
                            <td colspan="4"><b>RA 8749</b></td>

                        </tr>

                        @foreach ($acno as $ac)

                        <tr>
                            <td style="text-align: center; background-color: white">A/C no.</td>
                            <td style="text-align: center; background-color: white">{{$ac->permit}}</td>
                            <td style="text-align: center; background-color: white">{{$ac->dateIssued}}</td>
                            <td style="text-align: center; background-color: white">{{$ac->dateExpired}}</td>

                        </tr>
                        @endforeach

                    </tbody>



                    <tbody>
                    @foreach ($pono as $pn)
                        <tr>
                            @if ($loop->first)
                                <td style="text-align: center; background-color: white; border-bottom-style: none;">PO No.</td>
                                <td style="text-align: center;">{{$pn->permit}}</td>
                                <td style="text-align: center;">{{$pn->dateIssued}}</td>
                                <td style="text-align: center;">{{$pn->dateExpired}}</td>
                            @else
                                <td style="text-align: center; background-color: white; border-style: none">&nbsp;</td>
                                <td style="text-align: center; background-color: white;">{{$pn->permit}}</td>
                                <td style="text-align: center; background-color: white;">{{$pn->dateIssued}}</td>
                                <td style="text-align: center; background-color: white;">{{$pn->dateExpired}}</td>
                            @endif
                        </tr>
                            @endforeach
                    </tbody>
  </table>
  <h2 class="mt-3 mx-2 text-success text-left " style="font-size: 20px; font-weight: bolder">OPERATION</h2>

                  <table style="border-style: solid; margin-top: 3%; margin-bottom: 3%;">


                        <thead>

                            <th></th>
                                <th style="text-align: center;">Operating hours/day</th>
                                <th style="text-align: center;">Operating days/week</th>
                                <th style="text-align: center;"># shift/day</th>

                        </thead>

                      @foreach ($operation as $operate)
                        <tbody>
                            <tr>
                                <td><b>Average</b></td>


                                <td style="text-align: center;">{{$operate->aveOPhours}}</td>
                                <td style="text-align: center;">{{$operate->aveOPdays}}</td>
                                <td style="text-align: center;">{{$operate->aveOPshift}}</td>
                            </tr>


                        </tbody>

                            <tbody>
                            <tr>
                                <td><b>Maximum</b></td>
                                <td style="text-align: center;">{{$operate->maxOPhours}}</td>
                                <td style="text-align: center;">{{$operate->maxOPdays}}</td>
                                <td style="text-align: center;">{{$operate->maxOPshift}}</td>

                            </tr>

                               @endforeach
                        </tbody>
                    </table>


  <h2 class="mt-3 mx-2 text-success text-left " style="font-size: 20px; font-weight: bolder">OPERATION / PRODUCTION / QUALITY</h2>
                    <table style="border-style: solid; margin-top: 3%; margin-bottom: 3%;">


                            <tbody>
                              @foreach ($production as $product)

                                <tr>
                                    <td style="width:50%"><b>Average Daily Production Output</b></td>
                                    <td style="text-align: center;">{{$product->aveProduction}}</td>
                                </tr>
                                <tr>
                                    <td style="background-color: white;"><b>Total Output This Quarter</b></td>
                                    <td style="text-align: center; background-color: white;">{{$product->totalOutput}}</td>
                                </tr>

                                <tr>
                                    <td><b>Total Consuption This Quarter</b></td>
                                    <td style="text-align: center;">{{$product->totalConsumption}}</td>
                                </tr>

                                <tr>
                                    <td style="background-color: white;"><b>Total Electric Consumption this Quarter (kwh)</b></td>
                                    <td style="text-align: center; background-color: white;">{{$product->totalElectric}}</td>

                                </tr>

                                @endforeach
                            </tbody>

                    </table>




