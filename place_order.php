<?php
$curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://apiv2.shiprocket.in/v1/external/orders/create/adhoc",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS =>'

  {
  "order_id": "1107",
  "order_date": "2022-04-07T13:21:56.000000Z",
  "pickup_location": "Shoppingwheel",
  "billing_customer_name": "test nitin",
  "billing_last_name": "vohra",
  "billing_address": "HOUSE NO.248 GF SECTOR-1",
  "billing_address_2": "vasundhara ghaziabad",
  "billing_city": "VASUNDHARA",
  "billing_pincode": "201012",
  "billing_state": "nitin",
  "billing_country": "IN",
  "billing_email": "nitinvohra1997@gmail.com",
  "billing_phone": "7838509550",
  "shipping_is_billing": false,
  "shipping_customer_name": "testnitin",
  "shipping_last_name": "vohra",
  "shipping_address": "HOUSE NO.248 GF SECTOR-1",
  "shipping_address_2": "vasundhara ghaziabad",
  "shipping_city": "VASUNDHARA",
  "shipping_pincode": "201012",
  "shipping_country": "IN",
  "shipping_state": "nitin",
  "shipping_email": "nitinvohra1997@gmail.com",
  "shipping_phone": "7838509550",
  "order_items": [{
    "name": "testblack eyeliner",
    "sku": "123BLEYE55",
    "units": 1,
    "selling_price": "55",
    "discount": "",
    "tax": "",
    "hsn": "3304"
  }],
  "payment_method": "cod",
  "shipping_charges": 0,
  "giftwrap_charges": 0,
  "transaction_charges": 0,
  "total_discount": 0,
  "sub_total": "55",
  "length": 10,
  "breadth": 15,
  "height": 20,
  "weight": 2.5
}
  ',
    CURLOPT_HTTPHEADER => array(
      "Content-Type: application/json",
	   "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjI2MjIyNDEsImlzcyI6Imh0dHBzOi8vYXBpdjIuc2hpcHJvY2tldC5pbi92MS9leHRlcm5hbC9hdXRoL2xvZ2luIiwiaWF0IjoxNjUxODYxNDI3LCJleHAiOjE2NTI3MjU0MjcsIm5iZiI6MTY1MTg2MTQyNywianRpIjoiTXNkVUtXM3UwM2VwY3FDQyJ9.qIfdTFHDeZs01Edhz3G8Y-J4IcY-0vm9_dqeo505W9Q"
    ),
  ));
  $SR_login_Response = curl_exec($curl);
  curl_close($curl);
  //$SR_login_Response_out = json_decode($SR_login_Response);
  echo '<pre>';
  print_r($SR_login_Response);
?>