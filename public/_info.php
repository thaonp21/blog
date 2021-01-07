<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://47.57.106.86/yuenan-interface-web/order/orderAction!createOrder.action',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('logistics_interface' => '{"eccompanyid":"CUSMODEL","customerid":"084LC012345","txlogisticid":"18092A801960","ordertype":1,"servicetype":1,"sender":{"name":"Nguyen Thao","phone":"0793647929","mobile":"0793647929","prov":"H\\u1ed3 Ch\\u00ed Minh","city":"Ho Chi Minh","area":"Ph\\u01b0\\u1eddng B\\u1ebfn Ngh\\u00e9-028QQ101","address":"Ph\\u01b0\\u1eddng B\\u1ebfn Ngh\\u00e9, Qu\\u1eadn 1,Tp. H\\u1ed3 Ch\\u00ed Minh"},"receiver":{"name":"Nguyen Van B","phone":"0987654321","mobile":"0987654321","prov":"H\\u00e0 N\\u1ed9i","city":"Ha N\\u1ed9i","area":"Th\\u1ecb tr\\u1ea5n T\\u00e2y \\u0110\\u1eb1ng-024HBV01","address":"4001. Th\\u1ecb tr\\u1ea5n T\\u00e2y \\u0110\\u1eb1ng"},"createordertime":"2020-01-05 12:16:20","sendstarttime":"2020-01-05 12:16:20","sendendtime":"2020-01-05 12:16:20","paytype":"PP_PM","itemsvalue":"20000","goodsvalue":"20000","isInsured":"1","items":[{"itemname":"\\u0110i\\u1ec7n tho\\u1ea1i OPPO","englishName":"OPPO","number":"1","itemvalue":"5000","desc":"Tapestry"},{"itemname":"\\u0110i\\u1ec7n tho\\u1ea1i Iphone","englishName":"Iphone","number":"2","itemvalue":"5000","desc":"Tapestry"}],"weight":"18","volume":"6","remark":"Kh\\u00f4ng cho xem h\\u00e0ng"}','data_digest' => 'NzAyZDAxODk2NTE5ZWMxOWQzNTY1N2YyZTZjZTU1YTA=','msg_type' => 'ORDERCREATE','eccompanyid' => 'CUSMODEL'),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;


/*
$data = array(
    "eccompanyid" => "CUSMODEL",
    "customerid" => "084LC012345",
    "txlogisticid" => "18092A801960",
    "ordertype" => 1,
    "servicetype" => 1, 
    "sender" => array(
        "name" => "Nguyen Thao",
        "phone" => "0793647929",
        "mobile" => "0793647929",
        "prov" => "Hồ Chí Minh",
        "city" => "Ho Chi Minh",
        "area" => "Phường Bến Nghé-028QQ101",
        "address" => "Phường Bến Nghé, Quận 1,Tp. Hồ Chí Minh"
    ),
    "receiver" => array(
        "name" => "Nguyen Van B",
        "phone" => "0987654321",
        "mobile" => "0987654321",
        "prov" => "Hà Nội",
        "city" => "Ha Nội",
        "area" => "Thị trấn Tây Đằng-024HBV01",
        "address" => "4001. Thị trấn Tây Đằng"
    ),
    "createordertime" => "2020-01-05 12:16:20",
    "sendstarttime" => "2020-01-05 12:16:20",
    "sendendtime" => "2020-01-05 12:16:20",
    "paytype" => "PP_PM",
    "itemsvalue" => "20000",
    "goodsvalue" =>"20000",
    "isInsured" => "1",
    "items" => array(
        array(
            "itemname" => "Điện thoại OPPO",
            "englishName" => "OPPO",
            "number" => "1",
            "itemvalue" => "5000",
            "desc" => "Tapestry",
        ),
        array(
            "itemname" => "Điện thoại Iphone",
            "englishName" => "Iphone",
            "number" => "2",
            "itemvalue" => "5000",
            "desc" => "Tapestry",
        )
    ),
    "weight" => "18",
    "volume" => "6",
    "remark" => "Không cho xem hàng"
);


$key = '04fc653c0f661e1204bd804774e01824';
$logistics_interface = json_encode($data);
echo $logistics_interface;
echo "<br/>";
$data_digest = base64_encode(md5($logistics_interface.$key));

echo $data_digest;