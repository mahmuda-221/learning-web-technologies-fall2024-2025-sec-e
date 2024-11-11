<?php
	// Function to calculate VAT
	function calculateVAT($amount) {
    $vatRate = 0.15; 
    $vatAmount = $amount * $vatRate; 
    return $vatAmount;
}

	
	$amount = 200; 
	$vat = calculateVAT($amount); 
	$totalAmount = $amount + $vat; 

	// Display results
	echo "Amount: $" . number_format($amount, 2) . "<br>";
	echo "VAT (15%): $" . number_format($vat, 2) . "<br>";
	echo "Total Amount (including VAT): $" . number_format($totalAmount, 2);
?>
