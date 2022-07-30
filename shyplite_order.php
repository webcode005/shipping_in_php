<?php 
function set_order() {
    $timestamp    = time();
    $appID        = 9859;
    $key          = 'jauXND3eJII=';
    $secret       = 'Go4cgT0Ns1AOLEKmUDz67/93KgtEbk8x2x540yE6/85z734dC8w8Nolyr5P6Hd3B1ZMo3zaAfccOWPuQNDazFA==';
    
    $sign = "key:". $key ."id:". $appID. ":timestamp:". $timestamp;
    $authtoken = rawurlencode(base64_encode(hash_hmac('sha256', $sign, $secret, true)));
    $ch = curl_init();

    $data = Array(
        "orders" => Array(
            "0" => Array(
                "orderId" => "TSTAPI038",
                "customerName" => "Pushpendra Kumar",
                "customerAddress" => "Address Line1, Address Line2, Address Line3",
                "customerCity" => "New Delhi",
                "customerPinCode" => "110016",
                "customerContact" => "9876543210",
                "orderType" => "Prepaid",
                "modeType" => "Air",
                "orderDate" => "2022-05-06",
                "package" => Array( 
                    "itemLength" => 12,
                    "itemWidth" => 15,
                    "itemHeight"=> 20,
                    "itemWeight" => 1.5
                ),
                "skuList" => Array(
                    "0" => Array(
                        "sku" => "Test",
                        "itemName" => "Item1",
                        "quantity" => 1,
                        "price" => 45.00,
                        "itemLength" => 10, //optional
                        "itemWidth" => 3, //optional
                        "itemHeight"=> 2, //optional
                        "itemWeight" => 2 //optional
                    ),
                    "1" => Array(
                        "sku" => "Test1",
                        "itemName" => "Item2",
                        "quantity" => 1,
                        "price" => 45.00,
                        "itemLength" => null, //optional
                        "itemWidth" => null, //optional
                        "itemHeight"=> null, //optional
                        "itemWeight" => null //optional
                    ),
                    "2" => Array(
                        "sku" => "Test1",
                        "itemName" => "Item3",
                        "quantity" => 1,
                        "price" => 45.00,
                        "itemLength" => 0, //optional
                        "itemWidth" => 0, //optional
                        "itemHeight"=> 0, //optional
                        "itemWeight" => 0 //optional
                    )
                ),
                "totalValue" => 1320,
                "sellerAddressId" => 103654
            )
        )
    );

    $data_json = json_encode($data);


    //print_r($data_json); die;

    $header = array(
        "x-appid: $appID",
        "x-sellerid:199385",
        "x-timestamp: $timestamp",
        "x-version:3", // for auth version 3.0 only
        "Authorization: $authtoken",
        "Content-Type: application/json",
        "Content-Length: ".strlen($data_json)
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.shyplite.com/order?method=sku');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response  = curl_exec($ch);
    var_dump($response);
    exit;
    curl_close($ch);

}

echo set_order();
                   
?>