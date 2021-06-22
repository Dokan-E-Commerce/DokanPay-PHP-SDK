<?php

class DokanPaySDKPHP{

    const MerchantApiToken = '7704980c3671dd9fbafe333ee079e137';
    const DokanPayApiEndPoint = 'https://merchant-api.dokan.sa/v1/DokanPay/Transaction/';

    
    function CreateTransaction($data){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => self::DokanPayApiEndPoint.'Create',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer ' . self::MerchantApiToken
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response,true);
    }

    function CancelTransaction($txid){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => self::DokanPayApiEndPoint.'Cancel',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('id' => $txid),
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer ' . self::MerchantApiToken
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response,true);
    }

    function CheckTransaction($txid){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => self::DokanPayApiEndPoint.'Check/' . $txid,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer ' . self::MerchantApiToken
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response,true);

    }

}