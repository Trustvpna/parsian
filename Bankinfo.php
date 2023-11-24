<?php
function bank_information($CardNumber){
    $CardNumber = (integer)$CardNumber;
    if ($CardNumber == 603799 || $CardNumber == 170019 || $CardNumber == 589905) {
      $bankname = "#meli";  
      $bankinfo = "بانک ملی
⁉️Site: bale.apk
⁉️USSD: *717#  
⁉️TBank: 09622
";
      }elseif ($CardNumber == 5892) {
        $bankname = "#sepah";
        $bankinfo = "بانک سپه
⁉️Site: https://ib.ebanksepah.ir/desktop/sepahPages/shetabCard.sepah
⁉️USSD: #
⁉️TBank: 021 64058
";
      }elseif ($CardNumber == 6276 || $CardNumber == 2071) {
        $bankname = "#tosee_saderat";
        $bankinfo = "بانک توسعه صادرات
⁉️Site: #
⁉️USSD: #
⁉️TBank: 021 2722
";
      }elseif ($CardNumber == 627961) {
        $bankname = "#sanat_madan";
        $bankinfo = "بانک صنعت و معدن
⁉️Site: #
⁉️USSD: *719#
⁉️TBank: 021 75024
";
      }elseif ($CardNumber == 6037 || $CardNumber == 6392) {
        $bankname = "#keshavarzi";
        $bankinfo = "بانک کشاورزی
⁉️Site: https://ib.bki.ir/pid46.lmx
⁉️USSD: *730#
⁉️TBank: 09603
";
      }elseif ($CardNumber == 6280) {
        $bankname = "#maskan";
        $bankinfo = "بانک مسکن
⁉️Site: #
⁉️USSD: *714#, *737#
⁉️TBank: 021 64096
";
      }elseif ($CardNumber == 6277) {
        $bankname = "#post_bank_iran";
        $bankinfo = "پست بانک ایران
⁉️Site: #
⁉️USSD: *747#
⁉️TBank: 021 84284
";
      }elseif ($CardNumber == 5029) {
        $bankname = "#tosee_taavon";
        $bankinfo = "بانک توسعه تعاون
⁉️Site: https://epayment.ttbank.ir
⁉️USSD: #
⁉️TBank: #
";
      }elseif ($CardNumber == 6274) {
        $bankname = "#eghtsad_novin";
        $bankinfo = "بانک اقتصاد نوین
⁉️Site: https://modern.enbank.net/CustomerManager/viewLogin.html
⁉️USSD: #
⁉️TBank: 021 85292
";
      }elseif ($CardNumber == 6221 || $CardNumber == 6391 || $CardNumber == 6278) {
        $bankname = "#parsian";
        $bankinfo = "بانک پارسیان
⁉️Site: #
⁉️USSD: *708#
⁉️TBank: 021 89111
";
      }elseif ($CardNumber == 5022 || $CardNumber == 6393) {
        $bankname = "#pasargad";
        $bankinfo = "بانک پاسارگاد
⁉️Site: https://epay.bpi.ir/balanceinquiry.aspx
⁉️USSD: *720#
⁉️TBank: 021 828991111
";
      }elseif ($CardNumber == 6274 || $CardNumber == 5029) {
        $bankname = "#kar_afarin";
        $bankinfo = "بانک کار افرین
⁉️Site: #
⁉️USSD: #
⁉️TBank: 021 23640
";
      }elseif ($CardNumber == 621986) {
        $bankname = "#saman";
        $bankinfo = "بانک سامان
⁉️Site: #
⁉️USSD: *724#
⁉️TBank: 021 6422
";
      }elseif ($CardNumber == 6393) {
        $bankname = "#sina";
        $bankinfo = "بانک سینا
⁉️Site: https://sina24h.com/CustomerService2/viewLogin.html
⁉️USSD: *727#
⁉️TBank: 021 82487
";
      }elseif ($CardNumber == 6396) {
        $bankname = "#sarmaye";
        $bankinfo = "بانک سرمایه
⁉️Site: https://pg.sbank.ir/balanceRequest.do
⁉️USSD: #
⁉️TBank: 021 8254
";
      }elseif ($CardNumber == 6362) {
        $bankname = "#ayande";
        $bankinfo = "بانک آینده
⁉️Site: #
⁉️USSD: *745#
⁉️TBank: 021 2957
";
      }elseif ($CardNumber == 5028 || $CardNumber == 5047) {
        $bankname = "#shahr";
        $bankinfo = "بانک شهر
⁉️Site: https://ebank.city-bank.net/customermanager/viewLogin.html
⁉️USSD: *787#
⁉️TBank: 021 87611
";
      }elseif ($CardNumber == 5029) {
        $bankname = "#day";
        $bankinfo = "بانک دی
⁉️Site: #
⁉️USSD: #
⁉️TBank: 021 2726
";
      }elseif ($CardNumber == 6037) {
        $bankname = "#saderat";
        $bankinfo = "بانک صادرات
⁉️Site: #
⁉️USSD: *719#
⁉️TBank: 09602
";
      }elseif ($CardNumber == 6104 || $CardNumber == 9919) {
        $bankname = "#mellat";
        $bankinfo = "بانک ملت
⁉️Site: #
⁉️USSD: *720#
⁉️TBank: 021 8132
";
      }elseif ($CardNumber == 5859) {
        $bankname = "#tejarat";
        $bankinfo = "بانک تجارت
⁉️Site: https://pg.tejaratbank.ir/paymentGateway/getBalance
⁉️USSD: #
⁉️TBank: 021 81277
";
      }elseif ($CardNumber == 5894) {
        $bankname = "#refah";
        $bankinfo = "بانک رفاه
⁉️Site: #
⁉️USSD: *729#
⁉️TBank: 021 84043000
";
      }elseif ($CardNumber == 6273) {
        $bankname = "#ansar";
        $bankinfo = "بانک انصار
⁉️Site: https://ebank.ansarbank.com/customermanager/viewLogin.html
⁉️USSD: *763#
⁉️TBank: 021 48049
";
      }elseif ($CardNumber == 5057) {
        $bankname = "#iran_zamin";
        $bankinfo = "بانک ایران زمین
⁉️Site: #
⁉️USSD: #
⁉️TBank: 021 24760
";
      }elseif ($CardNumber == 6367) {
        $bankname = "#markazi";
        $bankinfo = "بانک مرکزی
⁉️Site: #
⁉️USSD: #
⁉️TBank: #
";
      }elseif ($CardNumber == 6369) {
        $bankname = "#hekmat";
        $bankinfo = "بانک حکمت
⁉️Site: #
⁉️USSD: #
⁉️TBank: 021 89555
";
      }elseif ($CardNumber == 5054) {
        $bankname = "#gardeshgary";
        $bankinfo = "بانک گردشگری
⁉️Site: https://epayment.tourism-bank.com/BalanceInquiry.aspx
⁉️USSD: *764#
⁉️TBank: 021 22630345
";
      }elseif ($CardNumber == 6063) {
        $bankname = "#qarzolhasane_iran";
        $bankinfo = "بانک قرضالحسنه ایران
⁉️Site: https://epayment.rqb.ir/BalanceInquiry.aspx
⁉️USSD: #
⁉️TBank: 021 8528
";
      }elseif ($CardNumber == 6281) {
        $bankname = "#moasse_etebari_tosee";
        $bankinfo = "موسسه اعتباری توسعه
⁉️Site: #
⁉️USSD: #
⁉️TBank: 021 81461
";
      }elseif ($CardNumber == 5058) {
        $bankname = "#kosar";
        $bankinfo = "بانک کوثر
⁉️Site: #
⁉️USSD: *744#
⁉️TBank: 021 86777
";
      }elseif ($CardNumber == 6393) {
        $bankname = "#moasse_mehr";
        $bankinfo = "موسسه مهر
⁉️Site: https://modern.qmbi24.com/customermngr/viewLogin.html
⁉️USSD: #
⁉️TBank: 021 8989
";
      }elseif ($CardNumber == 6395) { 
        $bankname = "#qavamin";
        $bankinfo = "بانک قوامین
⁉️Site: #
⁉️USSD: #
⁉️TBank: 021 84270
";
      }else{
        $bankname = "#بانک_نامعلوم";
        $bankinfo = "کارت فیکه!";
      }
      return array($bankinfo,$bankname);
}

?>
