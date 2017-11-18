<?php

/* Example of Charnacoin Payment  */
 require_once('src/jsonRPCClient.php');
require_once('src/Charnacoin_Payments.php');

/* Edit it with your ip and your port of Charnacoin RPC */
$charnacoin_daemon = new Charnacoin_Payments('127.0.0.1','2080');

?>
<html>
  <body>
    <h1>Example of Charnacoin Library</h1>
	<p>Welcome to Charnacoin PHP and JSON Library, developed by SerHack! Please report any issue <a href="https://github.com/charnacrypto/charnacoin_php/issues">here</a></p>
	<h2>Informations</h2>
    <h3>Charnacoin Address</h3>
    <?php $address = $charnacoin_daemon->address(); 
	$charnacoin_daemon->_print($address); ?>
    <h3>Balance</h3>
    <?php $balance = $charnacoin_daemon->getbalance();
	 $charnacoin_daemon->_print($balance); ?>
	<h3>Height</h3>
	<?php $height = $charnacoin_daemon->getheight();
		$charnacoin_daemon->_print($height); ?>
	<h3>Incoming transfers</h3>
	<h4>All</h4>
	<?php $incoming_transfers = $charnacoin_daemon->incoming_transfer('all'); 
		$charnacoin_daemon->_print($incoming_transfers); ?>
	<h4>Available</h4>
	<?php $available = $charnacoin_daemon->incoming_transfer('available');
		$charnacoin_daemon->_print($available); ?>
	<h4>Unavailable</h4>
	<?php $unavailable = $charnacoin_daemon->incoming_transfer('unavailable');
		$charnacoin_daemon->_print($unavailable); ?>
	<h3>Get transfers</h3>
	<?php $get_transfers = $charnacoin_daemon->get_transfers('pool', true);
		$charnacoin_daemon->_print($get_transfers); ?>
	<h3>View key</h3>
	<?php $view_key = $charnacoin_daemon->view_key();
		$charnacoin_daemon->_print($view_key); ?>
<?php	
	/*
	 *	Available Function
	 * --------------------------------------------------------------------
	 *	make_integrated_address => make a integrated address
	 *	$charnacoin_daemon->make_integrated_address('');
	 * --------------------------------------------------------------------
	 *	split_integrated_address => Retrieve integrated address
	 *	$integrated_address = integrated address
	 *	$charnacoin_daemon->splt_integrated_Address($integrated_address);
	 * --------------------------------------------------------------------
	 *	make_uri => useful for generating uri like charnacoin:9aksi1o2...
	 *	$address = wallet address string
	 *	$amount (optional) = amount (library will convert into atomic unit, then use 1 xmr)
	 * 	$recipient_name (optional) = string name of the payment recipient
	 *	tx_description (optional) = string describing the reason for the tx
	 *	$charnacoin_daemon->make_uri($address, $address, $amount, $recipient_name, $description);
	 * --------------------------------------------------------------------
	 *	parse_uri => parse the uri
	 * 	$uri = the uri
	 *	$charnacoin_daemon->parse_uri($uri);
	 * --------------------------------------------------------------------
	 *	get_payments => Get a list of incoming payments using a given payment id (useful for verifying payment with plugins)
	 * 	$payment_id = id of payment
	 *	$charnacoin_daemon->get_payments($payment_id);
	 * --------------------------------------------------------------------
	 *	transfer => transfer function 
	 * 	$amount = amount
	 *	$address = wallet address (not your address)
	 *	$charnacoin_daemon->transfer($amount, $address);
	 * --------------------------------------------------------------------
	 *	get_bulk_payments => Get a list of incoming payments using a given payment id or height
	 * 	$payment_id = array of payments id 
	 *	$min_block_height = The block height at which to start looking for payments.
	 *	$charnacoin_daemon->get_bulk_payments($payments_id, $min_block_height);
	 *
	*/
	?>
  </body>
</html>
