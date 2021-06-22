<?php

//Importing the DokanPay Lib Manager
include('index.php');

//Importing Dokan Pay Class - تبويب كلاس دكان باي
$Payment = new DokanPaySDKPHP();

//Transaction Variable - متغير العملية المراد فحصها 
$transaction = 'MS34KAL12NSAD';

//Getting Transaction Data - جلب بيانات المعاملة
$Payment->CancelTransaction($transaction);