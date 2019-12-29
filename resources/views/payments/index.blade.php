@extends('payments.layout')

@section('content')
<div class='w3-card w3-content w3-padding-large'>


<div class='w3-round w3-center w3-padding w3-card w3-light-green w3-margin-bottom '>

@php

if (session()->has('status')) {
          
      $value = session('status');    
        echo $value;
        } else {$value =null;}

@endphp

@isset($message)

{{$message}}



  @if($stripe_enabled === false)
  <form action="/enablestripe" method="POST">
  @csrf
  <button class="w3-button w3-section w3-center w3-blue-grey w3-ripple"> Enable Online Payments</button>
    
  </form>
  @endif

  @if($message == 'Subscribed to momintum!')
  <form action="/payment" method="POST">
  @method('DELETE')
  @csrf
    <button class="w3-button w3-section w3-red w3-ripple"> Cancel Registration ?</button>
  </form>
  @endif

@endisset
</div>


@if($stripe_enabled === true)
  <div class="form-row ">

  @include('payer.sections.payer_info_section')


  </div>

<h3>View All Payments</h3>
<div class='w3-responsive' >                              
                                                      <table  class="w3-table-all w3-hoverable ">
                                                        <thead>
                                                          <tr class="w3-blue-grey">
                                                            
                                                            <th>Date</th>
                                                            <th>Amount</th>
                                                            <th>Customer</th>
                                                            <th>Description</th>
                                                            <th>Status</th>
                                                            <th>Invoice</th>
                                                            <th>Action</th>
                                                          </tr>
                                                        </thead>
                                                        @foreach ($invoices as $invoice)
                                                        <tr>
                                                          <td>{{$invoice->date()->toFormattedDateString()}}</td>
                                                          <td>{{$invoice->total()}}</td>
                                                          <td>{{$invoice->customer_email}}</td>
                                                          <td>{{$invoice->description}}</td>
                                                          <td>{{$invoice->status}}</td>

                                                          <td><a href="/user/invoice/{{ $invoice->id }}">Download</a></td>
                                                          <td><form method='get' action="/user/refund/{{ $invoice->id }}">
                                                          @csrf
                                                          <button class='w3-btn w3-pale-red'>Cancel</button>
                                                          </form></td>      
                                                        </tr>
                                                        @endforeach
                                                        <tr>
                                                      </table>
    
                                      </div>


</div>
@endif



@if($stripe_enabled === true)
<h3>View Refunds</h3>
<div >                              
                                                      <table  class="w3-table-all w3-hoverable ">
                                                        <thead>
                                                          <tr class="w3-blue-grey">
                                                            
                                                            <th>Date</th>
                                                            <th>Refund Amount</th>
                                                            <th>Customer</th>


                                                     
                                                          </tr>
                                                        </thead>
                                                        @foreach ($refunds as $refund)
                                                        <tr>
                                                          <td>{{$refund->date}}</td>
                                                          <td>{{$refund->amount}}</td>
                                                          <td>{{$refund->charge}}</td>
                                                                
                                                        </tr>
                                                        @endforeach
                                                        <tr>
                                                      </table>
    
                                      </div>


</div>

@endif


<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <h5>Footer</h5>
</footer>


</body>
</html>

@endsection