
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

<table style="border-style: solid">
<tbody>
                    @foreach ($gic as $item)

                  <tr>

                    <td>{{$item->description}}</td>

                  </tr>

                  @endforeach
</tbody>
                  </table>


  <h2 class="mt-3 mx-2 text-success text-left " style="font-size: 20px; font-weight: bolder">DENR PERMITS/LICENSE/CLEARANCES</h2>

  <table style="table-layout:fixed; border-style: solid;">

                    <thead>
                      <tr>
                        <th style="text-align: center;">Environmental Laws</th>
                        <th style="text-align: center;">Permits</th>
                        <th style="text-align: center;">Data issued</th>
                        <th style="text-align: center;">Expiry Data</th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach ($aircon as $air)

                      <tr>
                        <td colspan="4"><b>RA 9275</b></td>
                      </tr>

                      <tr>
                          <td style="text-align: center; background-color: white;">A/C</td>
                          <td style="text-align: center; background-color: white;">{{$air->permit}}</td>
                          <td style="text-align: center; background-color: white">{{$air->dateIssued}}</td>
                          <td style="text-align: center; background-color: white">{{$air->dateExpired}}</td>
                      </tr>



                      @endforeach
                    </tbody>

                    <tbody>

                    @foreach ($dpno as $dp)

                        <tr>
                          <td style="text-align: center; ">DP no.</td>
                          <td style="text-align: center;">{{$dp->permit}}</td>
                          <td style="text-align: center;">{{$dp->dateIssued}}</td>
                          <td style="text-align: center;">{{$dp->dateExpired}}</td>

                        </tr>

                        @endforeach


                    </tbody>

                    <tbody>

                      @foreach ($cncno as $cn)


                        <tr>
                            <td colspan="4"><b>PD 1586</b></td>

                        </tr>

                          <tr>
                              <td style="text-align: center; background-color: white">ECC/CNC no.</td>
                              <td style="text-align: center; background-color: white">{{$cn->permit}}</td>
                              <td style="text-align: center; background-color: white">{{$cn->dateIssued}}</td>
                              <td style="text-align: center; background-color: white">{{$cn->dateExpired}}</td>
                          </tr>
                        @endforeach
                    </tbody>
                            @foreach ($denrid as $denr)

                    <tbody>
                        <tr>
                            <td colspan="4"><b>RA 6969</b></td>

                        </tr>

                        <tr>
                            <td style="text-align: center; background-color: white">DENR Registry ID</td>
                            <td style="text-align: center; background-color: white">{{$denr->permit}}</td>
                            <td style="text-align: center; background-color: white">{{$denr->dateIssued}}</td>
                            <td style="text-align: center; background-color: white">{{$denr->dateExpired}}</td>
                        </tr>

                        @endforeach
                    </tbody>

                   @foreach ($transporterReg as $trans)

                   <tbody>
                        <tr>
                            <td style="text-align: center;">Transporter Registration</td>
                            <td style="text-align: center;">{{$trans->permit}}</td>
                            <td style="text-align: center;">{{$trans->dateIssued}}</td>
                            <td style="text-align: center;">{{$trans->dateExpired}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    @foreach ($tsdreg as $tsd)

                    <tbody>
                        <tr>
                            <td style="text-align: center;">TSD Registration</td>
                            <td style="text-align: center;">{{$tsd->permit}}</td>
                            <td style="text-align: center;">{{$tsd->dateIssued}}</td>
                            <td style="text-align: center;">{{$tsd->dateExpired}}</td>
                        </tr>

                        @endforeach
                    </tbody>
                    @foreach ($ccoreg as $cco)


                    <tbody>
                        <tr>
                            <td style="text-align: center;">CCO Registration</td>
                            <td style="text-align: center;">{{$cco->permit}}</td>
                            <td style="text-align: center;">{{$cco->dateIssued}}</td>
                            <td style="text-align: center;">{{$cco->dateExpired}}</td>
                        </tr>

                        @endforeach
                    </tbody>

                    @foreach ($import as $imp)


                    <tbody>
                        <tr>
                            <td style="text-align: center;">Importation Clearance No.</td>
                            <td style="text-align: center;">{{$imp->permit}}</td>
                            <td style="text-align: center;">{{$imp->dateIssued}}</td>
                            <td style="text-align: center;">{{$imp->dateExpired}}</td>
                        </tr>

                        @endforeach
                    </tbody>
                    @foreach ($permit as $permt)


                    <tbody>
                        <tr>
                            <td style="text-align: center;">Permit to Transport</td>
                            <td style="text-align: center;">{{$permt->permit}}</td>
                            <td style="text-align: center;">{{$permt->dateIssued}}</td>
                            <td style="text-align: center;">{{$permt->dateExpired}}</td>
                        </tr>

                        @endforeach
                    </tbody>
                    @foreach ($smallquan as $small)

                    <tbody>
                        <tr>
                            <td style="text-align: center;"> Small Quantity Importation</td>
                            <td style="text-align: center;">{{$small->permit}}</td>
                            <td style="text-align: center;">{{$small->dateIssued}}</td>
                            <td style="text-align: center;">{{$small->dateExpired}}</td>
                        </tr>

                        @endforeach
                    </tbody>

                    @foreach ($priority as $prio)

                    <tbody>
                        <tr>
                            <td style="text-align: center;">Priority Chemical List</td>
                            <td style="text-align: center;">{{$prio->permit}}</td>
                            <td style="text-align: center;">{{$prio->dateIssued}}</td>
                            <td style="text-align: center;">{{$prio->dateExpired}}</td>
                        </tr>

                        @endforeach
                    </tbody>

                    @foreach ($piccs as $pic)

                    <tbody id="piccs">
                        <tr>
                            <td style="text-align: center;">PICCS</td>
                            <td style="text-align: center;">{{$pic->permit}}</td>
                            <td style="text-align: center;">{{$pic->dateIssued}}</td>
                            <td style="text-align: center;">{{$pic->dateExpired}}</td>
                        </tr>

                        @endforeach
                    </tbody>
                    @foreach ($pmpin as $pin)

                    <tbody>
                        <tr>
                            <td style="text-align: center;">PMPIN</td>
                            <td style="text-align: center;">{{$pin->permit}}</td>
                            <td style="text-align: center;">{{$pin->dateIssued}}</td>
                            <td style="text-align: center;">{{$pin->dateExpired}}</td>
                        </tr>

                        @endforeach
                    </tbody>
                    @foreach ($acno as $ac)

                    <tbody>
                        <tr>
                            <td colspan="4"><b>RA 8749</b></td>

                        </tr>


                        <tr>
                            <td style="text-align: center; background-color: white">A/C no.</td>
                            <td style="text-align: center; background-color: white">{{$ac->permit}}</td>
                            <td style="text-align: center; background-color: white">{{$ac->dateIssued}}</td>
                            <td style="text-align: center; background-color: white">{{$ac->dateExpired}}</td>

                        </tr>
                        @endforeach

                    </tbody>
                    @foreach ($pono as $pn)


                    <tbody>
                        <tr>
                            <td style="text-align: center;">PO No.</td>
                            <td style="text-align: center;">{{$pn->permit}}</td>
                            <td style="text-align: center;">{{$pn->dateIssued}}</td>
                            <td style="text-align: center;">{{$pn->dateExpired}}</td>
                        </tr>
                        @endforeach
                    </tbody>
  </table>
  <h2 class="mt-3 mx-2 text-success text-left " style="font-size: 20px; font-weight: bolder">OPERATION</h2>

                  <table style="border-style: solid">


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
                    <table style="border-style: solid">


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




