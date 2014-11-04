<div class="rightContent">
	<div class="top">
    	<h1><strong>Payment</strong></h1>
    </div>

		<div class="insidepage">
			<p class="pagetitle nomargin">Make a Payment</p>
	
			<div class="normaltext">
				<p><span>Please press the button below to make a payment:<br>			
				<br>
				
				<script src="https://checkout.stripe.com/checkout.js"></script>
				Amount ($): <input type="text" id="amount">
				<button id="customButton">Pay by Credit Card</button>

				<script>
				  var handler = StripeCheckout.configure({
				    key: 'pk_live_wfwYw9q9pmTkUJzXYDe1Hz8s',
				    token: function(token) {
				      // Use the token to create the charge with a server-side script.
				      // You can access the token ID with `token.id`
				    }
				  });

				  document.getElementById('customButton').addEventListener('click', function(e) {
				    // Open Checkout with further options
				    handler.open({
				      name: 'Design for Change USA',
				      description: 'Vendor Payment',
				      amount: $('#amount').val() * 100
				    });
				    e.preventDefault();
				  });
				</script>
			</div>

		</div>
		<br class="clear">
	</div>
</div>
<div class="clear"></div>