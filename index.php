<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<a href="bkash.php" style="color:green;">Pay with bikash</a>
<button type="button" style="width:40%;margin-left:30%;background-color:#e33771;padding:5px;color:white;cursor:pointer" data-toggle="modal" data-target="#exampleModal" id="bKash_button" class="btn btn-primary">Pay With bKash</button>
<!-- <div id="bKashFrameWrapper" style=""><iframe id="bKash-iFrame-301" frameborder="0" src="https://client.pay.bka.sh/checkout" name="bKash_checkout_app" style=" display: none; border: none; margin: 0; padding: 0; height: 100%; width: 100%; -webkit-transform: translate3d(0, 0, 0);"></iframe></div> -->



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class='form-signin' action='#' method='POST' id='login_form'>
      <div id='logoHolder'><img id='logo' class='mb-4' src='https://www.bkash.com/sites/all/themes/bkash/logo.png' alt='bKash logo' height='72'></div>
      <!--<h5 class='h3 mb-3 font-weight-normal' id='pageHeader'>bKash Checkout</h5>-->
      <div id='trxInfo'><b>Merchant :</b> <span id='merchant_name'></span><br/><b>Invoice no : </b><span id='merchantInvoice'></span><br/>
          <b>Amount :</b> BDT <span id='amount_to_be_paid'></span>
      </div>
      <br/>
      <label for='wallet' class='sr-only'>Your bKash account number</label>
      <input type='text' id='wallet'
             name='wallet' class='form-control'
             placeholder='e.g 01XXXXXXXXX'
             required>
      <br/><input type='checkbox' id='toc' value='agreement'> I agree to the <b><a href='https://www.bkash.com/terms-of-use-checkout' target='_blank'>terms and conditions</a></b><br/>


  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Proceed</button>
      </div>
    </div>
  </div>
</div>
</body>

	<script>
  $('#bKash_button').on('click',function(e){
  	 //	e.preventDefault();

  	 });
	</script>
</html>
</html>
