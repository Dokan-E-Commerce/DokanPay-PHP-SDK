<?php

//Importing the DokanPay Lib Manager
include('index.php');

//Importing Dokan Pay Class - تبويب كلاس دكان باي
$Payment = new DokanPaySDKPHP();

//Creating Data Object to pass to dokan pay - عمل متغير بيانات لنقله لدُكان باي
//The ones without Nullable are necessary - الي مو بجنبهم غير إلزامي مهمين
$data = [
    'name' => 'Ahmed Ali', // Nullable - غير إلزامي
    'number' => '+966555555555', // Nullable - غير إلزامي
    'custom-param' => 'user id = 4', // Nullable - غير إلزامي
    'amount' => 20,
    'email' => 'dev@dokan.sa', // Nullable - غير إلزامي
    'success_url' => 'http://localhost/checkpayment.php', // Nullable But important to return the user with transaction data in GET PARAM - غير إلزامي ولكن ضروري إذا كنت تود إرجاع العميل لصفحة ما مع تمرير بيانات المعاملة في الرابط كمتغيرات قيت
];
 
// Creating Transaction Via Dokan Pay SDK - عمل معاملة من خلال كلاس دُكان باي
$payment = $Payment->CreateTransaction($data);

// Redirecting client to dokan pay payment page if it is success - نقل العميل لصفحة الدفع في دُكان باي إذا تم إنشاء العملية بنجاح
if($payment['DOKAN.API.SUCCESS'] == true) {
    header('Location: '.$payment['DOKAN.API.DATA']['Payment-Link']);
}

// Printing Fail Message if it couldn't redirect the client to pay page -  طباعة الخطأ عند فشل نقل العميل لصفحة دُكان باي
echo 'Couldnt Redirect to payment page';
