




            <div class="icon-container" class=''>
              <i class="w3-xxlarge w3-padding-small w3-right fa fa-cc-visa" style="color:navy;"></i>
              <i class="w3-xxlarge w3-padding-small w3-right fa fa-cc-amex" style="color:blue;"></i>
              <i class="w3-xxlarge w3-padding-small w3-right fa fa-cc-mastercard" style="color:red;"></i>
              <i class="w3-xxlarge w3-padding-small w3-right fa fa-cc-discover" style="color:orange;"></i>
            </div>
 

<h3>Account Payment Details</h3>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
    <p class="w3-input " name="first">Name on Card: {{$customer->name}}</p> 
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-address-card-o"></i></div>
    <div class="w3-rest">
      <p class="w3-input " name="last" type="text" placeholder="">
      Address: @isset($customer->address->line1) {{$customer->address->line1}} 
      {{$customer->address->city}} {{$customer->address->state}}  
      @endisset 
      </p>
    </div>
</div>




<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <p class="w3-input " name="email" type="text" >Email: {{$customer->email}}</p>
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <p class="w3-input " name="phone" type="text" placeholder="">Phone: {{$customer->phone}}</p>
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-visa"></i></div>
    <div class="w3-rest ">
    <p class="w3-input ">Card on file: @if(@isset($cardonfile)){{$cardonfile}} ending in {{$user->card_last_four}}
    @else {{'No card on file'}}
    @endif
    </p>
    </div>
</div>
