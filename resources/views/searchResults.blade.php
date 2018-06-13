@extends('master')

@section('content')
<div class="wrapper">
    <div class="search-form">
             <div class="form-group" id="client">
                    <label>Client Name</label>
                    <br>
                    <select class="form-control" id="box-width" style="width:300px;">
                      
                    </select>

                    <button type="submit" class="btn btn-primary" style="margin-left:5px;">Search</button>




            </div>

         

    </div>


        <!-- /.client info -->

    <div class="card-client card-client-padding">
              <div class="card-header">
              <h3 class="card-title" style="text-align:center"> <b> Client Info </b> </h3> 
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Contract created</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                  </tr>
                  <tr>
                    <td> 1 </td>  
                    <td>21</td>
                    <td>SOS Pokhara</td>
                    <td>Pokhara</td>
                    <td>98412345678</td>
                    <td> sospokhara@gmail.com </td>
                    <td>2071-10-09 </td>
                    <td>2075-02-29</td>
                    <td>2075-02-29 </td>
                  </tr>

                  
                  
                </table>
              </div>
              <!-- /.card-body -->

        <!-- /.Info table finishes -->
 <hr> 

<!-- /.Payment Table -->
               <div class="card-header" id="header-padding" style="padding-top:20px;">
                <h3 class="card-title" style="text-align:center"> <b> Payment Details </b> </h3> 
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0 ">
                <table class="table table-striped   mycard">
                  <tr>
                    <th style="width: 10px;">#</th>
                    <th>Id</th>
                    <th >Paid At</th>
                    <th >payment_mode</th>
                    <th >payment_status</th>
                    <th>paid_amount</th>
                    <th>total_amount</th>
                    <th>remaining_amount</th>
                    <th >Created At</th>
                    <th>Updated At</th>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>21</td>
                    <td>2075-03-04</td>
                    <td>cheque</td>
                    <td> pending</td>
                    <td>10000</td>
                    <td> 20000</td>
                    <td> 10000</td>
                    <td>2075-02-29</td>
                    <td>2075-02-29 </td>
                  </tr>

                  
                </table>
              </div>

              <hr> 

        <!-- service table start -->

            <div class="card-header header-padding">
              <h3 class="card-title" style="text-align:center"> <b> Service Records </b> </h3> 
              
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <tr>
                    <th style="width: 10px;">#</th>
                    <th>Id</th>
                    <th>service date</th>
                    <th>served by</th>
                    <th>remarks</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>21</td>
                    <td>2075-05-05</td>
                    <td>Pratik Joshi</td>
                    <td> Support provided </td>
                    <td> 2073-09-09 </td>
                    <td> 2075-02-10 </td>
                  </tr>

                  
                  
                </table>
              </div>
              
              <hr> 
<!-- Service Table stop -->

<!-- Renewals Table start -->

                <div class="card-header header-padding">
              <h3 class="card-title" style="text-align:center"> <b> Renewals Info </b> </h3> 
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Id</th>
                    <th>renewal_date</th>
                    <th> Total Receipt Amount</th>
                    <th>Next Renewal</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>21</td>
                    <td> 2075-02-29 </td>
                    <td>20000</td>
                    <td>2076-10-16</td>
                    <td> 2075-02-29</td>
                    <td> 2075-03-03</td>
                  </tr>

                  
                  
                </table>
              </div>

<hr> 
<!-- Renewals Table stop -->


<!-- Staff Table start -->


              <div class="card-header">
              <h3 class="card-title" style="text-align:center;"> <b> Client Staffs </b> </h3> 
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Id</th>
                    <th>Position</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>21</td>
                    <td>Principal</td>
                    <td>Hermain Geminier</td>
                    <td> 9876543212</td>
                    <td>sirji@yahoo.com</td>
                    <td>Gongabu,Kathmandu</td>
                    <td>2075-05-05</td>
                    <td>2075-09-09</td>
                    
                  </tr>

                  
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

</div>

@stop