<?php
require_once 'braintree-php-2.30.0/lib/Braintree.php';

Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('-----------');
Braintree_Configuration::publicKey('-----------');
Braintree_Configuration::privateKey('-----------');
if(isset($_POST['submit'])){
    /* process transaction */
    $result = Braintree_Transaction::sale(array(
        'amount' => '100.00',
        'creditCard' => array(
            'number' => '5454545454545454',
            'expirationDate' => '08/19'
        )
    ));

    if ($result->success) {
        print_r("success!: " . $result->transaction->id);
    } else if ($result->transaction) {
        print_r("Error processing transaction:");
        print_r("\n  code: " . $result->transaction->processorResponseCode);
        print_r("\n  text: " . $result->transaction->processorResponseText);
    } else {
        print_r("Validation errors: \n");
        print_r($result->errors->deepAll());
    }
}

$clientToken = Braintree_ClientToken::generate();

?>

<html>
<head>
</head>
<body>
<div id="checkout" method="post" action="/checkout">
    <div id="dropin"></div>
    <input data-braintree-name="number" value="4111111111111111">
    <input data-braintree-name="expiration_date" value="10/20">
    <input type="submit" id="submit" value="Pay">
    <div id="paypal-button"></div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-2.1.1.js"></script>
<script src="https://js.braintreegateway.com/v2/braintree.js"></script>
<script>
    braintree.setup(clientToken, "dropin", {
        container: "payment-form",
        form: jQuery("#checkout") ,
        paypal: {
            container: "payment-form",
            singleUse: false,
        },
        dataCollector: {
            paypal: true
        },
        paymentMethodNonceReceived: function (event, nonce) {
            // do something
        }
    });
</script>

</body>
</html>