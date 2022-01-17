<?php

// * => callback_url
//This Is Example of Dokan Pay WebHook System. (You must create a route or page Which takes a post request.), and it gets an GET Parameter (/txid?=EXample Id), Then you check it via Check Transaction Function.
// هذا نظام الويب هوك الخاص بدُكان تب , لإستخدامه يجب عليك تمرير متغير * في إنشاء معاملة وعند دفع العميل سيقوم نظام دُكان تب بإرسال ركوست للرابط الذي قمت بوضعه بميثود بوست
// ستقوم بأخذ رمز المعاملة من متغير $_GET['txid'];
// ثم ستقوم بفحصه من خلال فنكشن جلب المعاملة وستتأكد إذا كانت المعامله تامه او لا 
// يعتبر النظام أفضل من ناحية عدم فقدان المعاملة او خطة إحتياطية لـ الميثود الأول . 


?>
