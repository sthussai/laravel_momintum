@extends('payments.layout')

@section('content')
<div class='w3-card w3-content w3-padding-large'>


<div class='w3-round w3-center w3-padding w3-card w3-light-green w3-margin-bottom '>

@if (session('status'))
    <div class="w3-round w3-center  w3-card w3-light-green">
        {{ session('status') }}
    </div>
@endif

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


<!--START Account Billing Info Section -->
@if($stripe_enabled === true)
  <div >

    <h3>Account Billing Information
      <a href="/editbillinginfo" class=' w3-right w3-button w3-small w3-light-grey w3-ripple'>Edit Billing Information</a>
      </h3>


      <div class="w3-row w3-section">

          <div class="">
          <!-- <p class="w3-input " name="id">Customer ID: {{$customer->id}}</p> --> 
          <p class="w3-input " name="first">Name on Card: {{$customer->name}}</p> 
          <p class="w3-input " name="last" type="text" placeholder="">
            Address: @isset($customer->address->line1) {{$customer->address->line1}} 
            {{$customer->address->city}} {{$customer->address->state}}  
            @endisset 
            </p>
          <p class="w3-input " name="email" type="text" >Email: {{$customer->email}}</p> 
          <p class="w3-input " name="phone" type="text" placeholder="">Phone: {{$customer->phone}}</p>
          </div>
      </div>




  </div>
<!-- END Account Billing Info Section -->


    
    <h3>Payment Methods on File<a href="/addpaymentmethod" class=' w3-right w3-button w3-small w3-light-grey w3-ripple'>Add Card</a>
      </h3>

    <div class='w3-responsive' >                              
      <table  class="w3-table-all w3-hoverable ">
        <thead>
          <tr class="w3-blue-grey">
            
            <th>Card</th>
            <th>Last 4 digits</th>
            <th>Name on Card</th>
            <th>Action</th>
            
          </tr>
        </thead>
        @if(@isset($cardonfile))

        @foreach ($paymentMethods as $paymentMethod)
        <tr>

          <td>{{ $paymentMethod->card->brand }}</td>
          <td>{{ $paymentMethod->card->last4 }}</td>
          <td>{{ $paymentMethod->billing_details->name }}</td>
          
          @if($paymentMethod->id === $defaultPaymentMethod->id)
          <td>Default Payment Method</td>
          @else
          <td><form method='get' action="/deletePaymentMethod/{{ $paymentMethod->id }}">

          <button class='w3-btn w3-pale-red'>Delete Payment Method</button>
          </form></td> 
          @endif
        </tr>
        @endforeach
        @else
        <tr>
          <td>No Card on file</td>
        <td> 
          
          <a href='/addpaymentmethod' class='w3-btn w3-pale-green'>Add Card?</a>
          
        </td>

        </tr>

        @endif
        
      </table>

  </div>

  <form method='get' action="/paytest">

<button class='w3-btn w3-pale-red'>Pay One Time Invoice</button>
</form>    




<h3>View All Charges</h3>
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
                                                        @foreach ($charges as $charge)
                                                        <tr>
                                                          <td>{{$charge->created}}</td>
                                                          <td>{{$charge->amount}}</td>
                                                          <td>{{$charge->customer}}</td>
                                                          <td>{{$charge->description}}</td>
                                                          <td>{{$charge->payment_intent}}</td>
                                                          <td>{{$charge->status}}</td>

                                  
                                                  
                                                          <td>
                                                          <form method='get' action="/user/refund/{{ $charge->payment_intent }}/{{$charge->id}}">
                                                          @csrf
                                                          <button class='w3-btn w3-pale-red'>Cancel</button>
                                                          </form>
                                                          </td>
                                                      
                                                                
                                                        </tr>
                                                        @endforeach
                                                        <tr>
                                                      </table>
    
                                      </div>



<h3>View All Invoices</h3>
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
                                                            
                                                          </tr>
                                                        </thead>
                                                        @foreach ($invoices as $invoice)
                                                        <tr>
                                                          <td>{{$invoice->date()->toFormattedDateString()}}</td>
                                                          <td>{{$invoice->total()}}</td>
                                                          <td>{{$invoice->customer_email}}</td>
                                                          <td>{{$invoice->description}}</td>
                                                          <td>{{$invoice->status}}</td>

                                                          <td><a href="/user/invoice/{{ $invoice->id }}/{{$invoice->description}}" class='w3-blue-grey w3-padding'>Download</a></td>

                                                        
                                                                
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
                                                            
                                                            <th>Payment Intent ID</th>
                                                            <th>Charge ID</th>
                                                            <th>Refund Amount</th>
                                                            <th>Customer</th>


                                                     
                                                          </tr>
                                                        </thead>  
                                                        @foreach ($refunds as $refund)
                                                        <tr>
                                                          <td>{{$refund->payment_intent}}</td>
                                                          <td>{{$refund->charge}}</td>
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