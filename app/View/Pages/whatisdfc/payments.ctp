<?php echo $this->element('whatisdfc'); ?>

<div class="insidepage">
	<div class="contents">
		<h1>Submit Payment</h1>
		<p class="pagetitle">Submit your payment for <?php echo $_GET['quantity'] ?> Design for Change Curriculum Books.</p>
		<div class="normaltext">
			<form action="/charge" method="POST">
			  <script
			    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
			    data-key="pk_test_PydTIqM9h7XzXZJqxHxHNvkV"
			    data-name="Design for Change USA Inc."
			    data-description="<?php echo $_GET['quantity'] ?> Curriculum Books"
			    data-amount="<?php echo $_GET['quantity'] * 1500 ?>">
			  </script>
			</form>
		</div>
	</div>
</div>
<div class="clear"></div>