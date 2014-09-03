RisePay-PHP -- Simple Risepay Payment API wrapper

<hr>
### Table of Contents
**[Initialization](#initialization)**

**[Sale Transaction](#sale-transaction)**

**[Auth Transaction](#authorization-transaction)**

**[Void Transaction](#void-transaction)**

**[Return Transaction](#return-transaction)**

**[Capture Transaction](#capture-transaction)**

### Initialization
To utilize this class, first import Risepay.php into your project, and require it.

```php
require_once ('Risepay.php');
```

After that, create a new instance of the class.

```php
$risepay = new Risepay ('gatewayApiUser', 'userPassword');
```

To obtain an initialized instance of the class from another class without:
```php
    $db = Risepay::getInstance();
```

### Sale Transaction
To make a purchase using a credit card:

Functional API:
```php
$risepay = new Risepay ("demo","demo");

$data['NameOnCard'] = "John Doe";
$data['CardNum'] = "4111111111111111";
$data['ExpDate'] = "1215";
$data['Amount'] = "10";
$data['CVNum'] = "734";

$resp = $risepay->sale($data);
if ($resp->Approved) {
    echo "Approved. Transaction ID = " . $resp->PNRef;
    echo "AuthCode = " . $resp->AuthCode;
} else {
    echo "Declined: " . $resp->Message;
    print_r ($resp);
}

```

Object API:
```php
$risepay = new Risepay ("demo","demo");

$risepay->NameOnCard = "John Doe";
$risepay->CardNum = "4111111111111111";
$risepay->ExpDate = "1215";
$risepay->Amount = "10";
$risepay->CVNum = "734";

$resp = $risepay->sale();
...
```

### Authorization Transaction
To make an authorization using a credit card:

Functional API:
```php
$risepay = new Risepay ("demo","demo");

$data['NameOnCard']= "John Doe";
$data['CardNum']="4111111111111111";
$data['ExpDate']="1215";
$data['Amount']="10";
$data['CVNum']="734";


$resp = $risepay->auth($data);

if ($resp->Approved) {
    echo "Approved. Transaction ID = " . $resp->PNRef;
    echo "AuthCode = " . $resp->AuthCode;
} else {
    echo "Declined: " . $resp->Message;
    print_r ($resp);
}
```

### Void Transaction

To void a transaction:

Functional API:
```php
$risepay = new Risepay ("demo","demo");

$data['NameOnCard'] = "John Doe";
$data['CardNum'] = "4111111111111111";
$data['ExpDate'] = "1215";
$data['Amount'] = "10";
$data['CVNum'] = "734";
$data['PNRef'] = "24324";

$resp = $risepay->void($data);

if ($resp->Approved) {
    echo "Approved. Transaction ID = " . $resp->PNRef;
    echo "AuthCode = " . $resp->AuthCode;
} else {
    echo "Declined: " . $resp->Message;
    print_r ($resp);
}
```

### Capture Transaction

To capture a previously Authorized transaction:

Functional API
```php
$risepay = new Risepay ("demo","demo");

$data['NameOnCard'] = "John Doe";
$data['CardNum'] = "4111111111111111";
$data['ExpDate'] = "1215";
$data['Amount'] = "10";
$data['CVNum'] = "734";
$data['PNRef'] = "24324";

$resp = $risepay->capture($data);

if ($resp->Approved) {
    echo "Approved. Transaction ID = " . $resp->PNRef;
    echo "AuthCode = " . $resp->AuthCode;
} else {
    echo "Declined: " . $resp->Message;
    print_r ($resp);
}
```

### Return Transaction

To return a payment for already batched transaction:

Functional API

```php
$risepay = new Risepay ("demo","demo");

$data['NameOnCard'] = "John Doe";
$data['CardNum'] = "4111111111111111";
$data['ExpDate'] = "1215";
$data['Amount'] = "10";
$data['CVNum'] = "734";
$data['PNRef'] = "24324";

$resp = $risepay->returnTrans($data);

if ($resp->Approved) {
    echo "Approved. Transaction ID = " . $resp->PNRef;
    echo "AuthCode = " . $resp->AuthCode;
} else {
    echo "Declined: " . $resp->Message;
    print_r ($resp);
}
```

To see complete list of an extra RisePay API variables, review our <a href='https://gateway1.risepay.com/vt/nethelp/Documents/processcreditcard.htm'>documentation</a>.  You can request developer credentials from our <a href='http://sales.risepay.com/rise-dev-access.html'>Dev Portal</a>; if you would like to certify your application, then submit a <a href='http://sales.risepay.com/rise-cert-lab-access.html'>Cert Lab request</a>.
