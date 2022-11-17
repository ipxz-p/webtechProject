<?php
session_start();
include_once('../../services/connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goody goody</title>
    <link rel="stylesheet" href="/dist/output.css">
    <link rel="stylesheet" href="/src/assets/style/global.css">
</head>

<body>
    <?php
    include('../../component/navbar.php')
    ?>
    <div class="pt-[70px] sm:pt-[80px] pb-4 sm:pb-10">
        <div class="palm-container">
            <div class="border-2 p-3 rounded bg-white">
                <div class=" font-medium text-xl">รายการสินค้าที่บันทึกไว้</div>
                <?php
                if (isset($_SESSION['email'])) {
                    $email = $_SESSION['email'];
                }
                $stmt = $con->prepare("SELECT * FROM wishlist WHERE EXISTS (SELECT id FROM product WHERE wishlist.product_id = product.id and wishlist.user_email = ?)");
                if (isset($_SESSION['email'])) {
                    $stmt->execute([$email]);
                }
                $result = $stmt->fetchAll();
                $countRow = 0;
                foreach($result as $row){
                    $countRow++;
                }
                if ($countRow == 0) { ?>
                    <div class="text-center text-gray-500 my-4 flex flex-col items-center">
                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 361.75 293.52" width="306" height="206" class="illustration styles_illustrationTablet__1DWOa"><defs><linearGradient id="linear-gradient" x1="122.27" y1="86.3" x2="101.97" y2="210" gradientUnits="userSpaceOnUse"><stop offset="0.01" stop-color="#fff"></stop><stop offset="0.13" stop-color="#fff" stop-opacity="0.69"></stop><stop offset="1" stop-color="#fff" stop-opacity="0"></stop></linearGradient><linearGradient id="linear-gradient-2" x1="153.59" y1="214.26" x2="86.86" y2="425.75" xlink:href="#linear-gradient"></linearGradient><linearGradient id="linear-gradient-3" x1="319.2" y1="172.86" x2="298.27" y2="219.8" xlink:href="#linear-gradient"></linearGradient><linearGradient id="linear-gradient-4" x1="212.81" y1="244.33" x2="205.17" y2="306.24" gradientUnits="userSpaceOnUse"><stop offset="0.01"></stop><stop offset="0.13" stop-opacity="0.69"></stop><stop offset="1" stop-opacity="0"></stop></linearGradient><linearGradient id="linear-gradient-5" x1="238.98" y1="271.71" x2="203.83" y2="256.58" xlink:href="#linear-gradient"></linearGradient><linearGradient id="linear-gradient-6" x1="195.26" y1="262.79" x2="228.5" y2="287.43" xlink:href="#linear-gradient"></linearGradient><linearGradient id="linear-gradient-7" x1="221.24" y1="254.87" x2="327.66" y2="319.84" xlink:href="#linear-gradient"></linearGradient><linearGradient id="linear-gradient-8" x1="223.5" y1="258.47" x2="213.84" y2="257" xlink:href="#linear-gradient-4"></linearGradient><linearGradient id="linear-gradient-9" x1="213.03" y1="272.41" x2="251.58" y2="286.14" xlink:href="#linear-gradient"></linearGradient><linearGradient id="linear-gradient-10" x1="286.7" y1="294.19" x2="210.25" y2="262.26" xlink:href="#linear-gradient-4"></linearGradient><linearGradient id="linear-gradient-11" x1="225.66" y1="249.52" x2="229.04" y2="249.52" xlink:href="#linear-gradient-4"></linearGradient><linearGradient id="linear-gradient-12" x1="193.94" y1="217.09" x2="194.55" y2="227.19" xlink:href="#linear-gradient-4"></linearGradient><linearGradient id="linear-gradient-13" x1="204.14" y1="216.43" x2="204.75" y2="226.53" xlink:href="#linear-gradient-4"></linearGradient><linearGradient id="linear-gradient-14" x1="221.42" y1="241.99" x2="216.8" y2="223.36" xlink:href="#linear-gradient-4"></linearGradient><linearGradient id="linear-gradient-15" x1="231.12" y1="239.58" x2="226.5" y2="220.96" xlink:href="#linear-gradient-4"></linearGradient><linearGradient id="linear-gradient-16" x1="213.11" y1="279.68" x2="217.4" y2="352.68" xlink:href="#linear-gradient"></linearGradient><linearGradient id="linear-gradient-17" x1="224.62" y1="268.45" x2="224.55" y2="256.2" xlink:href="#linear-gradient-4"></linearGradient><linearGradient id="linear-gradient-18" x1="230.93" y1="260.18" x2="223.02" y2="257.91" xlink:href="#linear-gradient-4"></linearGradient><linearGradient id="linear-gradient-19" x1="116.56" y1="232.38" x2="196.59" y2="149.39" xlink:href="#linear-gradient-4"></linearGradient><linearGradient id="linear-gradient-20" x1="289.32" y1="95" x2="151.98" y2="147.36" xlink:href="#linear-gradient"></linearGradient><linearGradient id="linear-gradient-21" x1="210.09" y1="331.86" x2="209.46" y2="236.72" xlink:href="#linear-gradient-4"></linearGradient><linearGradient id="linear-gradient-22" x1="229.76" y1="268.53" x2="109.99" y2="316.33" xlink:href="#linear-gradient-4"></linearGradient></defs><title>7</title><path d="M380.15,242.21C376.79,265.39,370,290,351.81,304.69c-27.88,22.58-68.46,12.92-103.82,6.86a396.13,396.13,0,0,0-88.22-5.11c-20.11,1.1-40.26,3.74-60.32,2s-40.56-8.52-54.29-23.25a59.51,59.51,0,0,1-4.87-6c-13.86-19.26-16-45.51-14.19-69.61.19-2.6.42-5.22.7-7.83,6.09-58.26,32.46-116.08,80.07-149.92C140.41,28,178.09,23.73,218,25.85c42.07,2.25,85.35,2.84,117.22,34.09C384.72,108.45,389.67,176.57,380.15,242.21Z" transform="translate(-25.56 -25.37)" fill="#000000" opacity="0.18" style="isolation: isolate;"></path><path d="M292.55,268.07c-1.47,10.14-4.43,20.87-12.39,27.32-12.19,9.87-29.93,5.64-45.39,3a173,173,0,0,0-38.57-2.23c-8.79.48-17.6,1.63-26.37.86s-17.73-3.73-23.74-10.17a25.9,25.9,0,0,1-2.12-2.6c-6.06-8.43-7-19.9-6.21-30.43.09-1.15.19-2.29.31-3.43,2.66-25.47,14.19-50.75,35-65.54,14.67-10.42,31.14-12.29,48.59-11.36,18.39,1,37.31,1.24,51.25,14.9C294.55,209.59,296.71,239.37,292.55,268.07Z" transform="translate(-25.56 -25.37)" fill="#000000" opacity="0.18" style="isolation: isolate;"></path><path d="M292.55,268.07c-1.47,10.14-4.43,20.87-12.39,27.32-12.19,9.87-29.93,5.64-45.39,3a173,173,0,0,0-38.57-2.23c-8.79.48-17.6,1.63-26.37.86s-17.73-3.73-23.74-10.17a25.9,25.9,0,0,1-2.12-2.6c-6.06-8.43-7-19.9-6.21-30.43.09-1.15.19-2.29.31-3.43,2.66-25.47,14.19-50.75,35-65.54,14.67-10.42,31.14-12.29,48.59-11.36,18.39,1,37.31,1.24,51.25,14.9C294.55,209.59,296.71,239.37,292.55,268.07Z" transform="translate(-25.56 -25.37)" fill="#000000" opacity="0.18" style="isolation: isolate;"></path><path d="M131.5,76.6a20.12,20.12,0,0,0-13.17,14.56A15.55,15.55,0,0,0,98,112.39a22.57,22.57,0,0,0-19.84,5c-5.81,5.15-10,13.86-17.79,13.94q55-4,110.11-6.51c-1.37-4.31-6.45-6.53-8.09-10.75-3.8-9.75,13-17.52,11.25-27.85-.77-4.61-5.36-7.88-10-8.43-3.38-.4-6,1-9.2,1.29-4.61.4-3,.23-7.33-1C141.56,76.54,137.4,74.68,131.5,76.6Z" transform="translate(-25.56 -25.37)" fill="url(#linear-gradient)"></path><path d="M273.89,247.38a1182.9,1182.9,0,0,1-146.21,17c-5.73.31-12,.77-16.19,4.63-1.89,1.73-3.22,4-5.2,5.61-3.81,3.08-9.2,3.13-14.08,2.7a114.65,114.65,0,0,1-35-8.78c-2.6,6.61-9.74,10.39-16.94,10.65-13.86-19.26-16-45.51-14.19-69.61.19-2.6.42-5.22.7-7.83,1.7-1.25,3.38-2.52,5-3.88,12.25-10.25,25.42-16,41.75-11.6,15.43,4.17,28,15.83,36.36,29.47,2.54-9.1,16.32-9.32,23.59-3.3s10.8,15.43,17.08,22.48a8,8,0,0,0,4.06,2.83c1.93.42,3.85-.46,5.74-1,10.51-3.05,20.94,4,31.47,7,6.83,1.91,14,2.08,21.11,2.25Q243.44,246.67,273.89,247.38Z" transform="translate(-25.56 -25.37)" fill="url(#linear-gradient-2)"></path><path d="M259.39,161.84c-2,4.42-2.84,9.5-6,13.2-2.06,2.42-4.92,4-7.7,5.52l-21.14,11.53c18.62,4.95,38.26,3,57.52,3.14a12.15,12.15,0,0,1,4.38.58c4.72,1.84,5.38,8.05,7.52,12.63,2.57,5.48,8,9.22,13.83,10.91s12,1.58,18,1.06c2.47-.21,5.06-.47,7.33.52,2,.86,3.44,2.56,5.08,4,5.11,4.36,12.19,5.84,18.9,5.44s13.19-2.52,19.57-4.61c2.09-.69,4.27-1.43,5.8-3,1.81-1.87,2.4-4.57,2.85-7.13a135.24,135.24,0,0,0-2.08-55.68c-2.39-9.54-6.29-19.43-14.42-25-8.53-5.8-20.22-5.43-29.53-1-9.65,4.6-15.77,12.64-22.3,20.66C300.44,145.18,269.19,140.38,259.39,161.84Z" transform="translate(-25.56 -25.37)" fill="url(#linear-gradient-3)"></path><path d="M194.05,253.56l13.75-.77a97.27,97.27,0,0,1,11.95-.19c7.4.5,14.58,2.69,21.67,4.86,1.37.42,3.08,1.39,2.7,2.78-8.5,4.11-18.86,5.59-28.15,7.08a36.59,36.59,0,0,1-10.22.6c-9.4-1.13-18.93-7.07-27.55-10.82a1.79,1.79,0,0,1,.77-2.25,5.25,5.25,0,0,1,2.52-.58Z" transform="translate(-25.56 -25.37)" fill="url(#linear-gradient-4)"></path><path d="M223.24,267.6a20.57,20.57,0,0,0,5.64,4.8,9.08,9.08,0,0,0,7.19.8,4.81,4.81,0,0,1,1.28-.37,5.31,5.31,0,0,1,1.69.35,1.94,1.94,0,0,0,1.67-.11c.48-.34.54-1.2,0-1.43a1.45,1.45,0,0,0,1.35-1.45,1.68,1.68,0,0,0-1.34-1.54,1.58,1.58,0,0,0-1.23-1.77,2.75,2.75,0,0,0-2.24.6,2.47,2.47,0,0,1-.56.37,1.93,1.93,0,0,1-.83.08,20.33,20.33,0,0,1-4.68-.58,7,7,0,0,1-3.89-2.51c-.74-1-1.21-2.44-2.41-2.87a3.26,3.26,0,0,0-1.12-.15,3.3,3.3,0,0,0-2.4.81C220.07,264,222.33,266.58,223.24,267.6Z" transform="translate(-25.56 -25.37)" fill="url(#linear-gradient-5)"></path><path d="M202.46,252.39a9.21,9.21,0,0,0-4.27,5,24.37,24.37,0,0,1-1.13-4.18,18.62,18.62,0,0,0-1.8,6.33,5.69,5.69,0,0,0-1.15-2.12c-1.62,3.07-3.26,6.21-3.82,9.63s.14,7.25,2.63,9.65c1.12,1.08,2.77,1.85,4.22,1.3s2.06-1.88,2.62-3.17c1.36-3.09,3.14-6.84,3-10.27-.07-1.93-.35-3.85-.41-5.79C202.35,258,201.88,252.7,202.46,252.39Z" transform="translate(-25.56 -25.37)" fill="#000000"></path><path d="M202.46,252.39a9.21,9.21,0,0,0-4.27,5,24.37,24.37,0,0,1-1.13-4.18,18.62,18.62,0,0,0-1.8,6.33,5.69,5.69,0,0,0-1.15-2.12c-1.62,3.07-3.26,6.21-3.82,9.63s.14,7.25,2.63,9.65c1.12,1.08,2.77,1.85,4.22,1.3s2.06-1.88,2.62-3.17c1.36-3.09,3.14-6.84,3-10.27-.07-1.93-.35-3.85-.41-5.79C202.35,258,201.88,252.7,202.46,252.39Z" transform="translate(-25.56 -25.37)" fill="url(#linear-gradient-6)"></path><path d="M209.27,287.71c-2.57.07-5.34.1-7.47-1.34a11.46,11.46,0,0,1-2.69-2.82c-1.66-2.21-3.28-4.61-3.68-7.35a9.19,9.19,0,0,1,2.91-8c2.6-2.33,6.27-2.95,9.38-4.52a16.65,16.65,0,0,0,8.31-10,3.45,3.45,0,0,1-2.62-3.35,10.07,10.07,0,0,1,1.13-4.42l2.63-6.15-2.25-8.46a31.21,31.21,0,0,1-1.43-8.16,10.57,10.57,0,0,1,2.85-7.58,2.58,2.58,0,0,1,2-.9c1.27.18,1.76,1.73,2,3a72.4,72.4,0,0,1,1,7.75c.27,4.64-.36,9.37.73,13.88,1.41,0,2.39-1.37,2.85-2.7a10.3,10.3,0,0,0,.24-4.18l-1.34-16.14a2.21,2.21,0,0,1,.21-1.44c.49-.68,1.55-.56,2.3-.21a7.85,7.85,0,0,1,3.88,4.85,21.34,21.34,0,0,1,.7,6.33c0,3.84-.14,7.77-1.54,11.35a6.36,6.36,0,0,0-.53,1.65,5.61,5.61,0,0,0,1,3.4c1.29,2.28,2.79,4.54,3.22,7.13s-.58,5.66-3,6.63c-1.9,3.11-1.28,6.86-.64,10.45l1.2,6.84c.31,1.76.59,3.7-.32,5.24-.15.25-.6.44-.66.15-1.56.75-2.16,2.19-2.87,3.77a17.13,17.13,0,0,1-.81,1.86c-1,1.74-3.15,2.47-5.12,2.95a57.39,57.39,0,0,1-6.25,1.19C212.74,288.69,210.6,289.08,209.27,287.71Z" transform="translate(-25.56 -25.37)" fill="#000000"></path><path d="M209.27,287.71c-2.57.07-5.34.1-7.47-1.34a11.46,11.46,0,0,1-2.69-2.82c-1.66-2.21-3.28-4.61-3.68-7.35a9.19,9.19,0,0,1,2.91-8c2.6-2.33,6.27-2.95,9.38-4.52a16.65,16.65,0,0,0,8.31-10,3.45,3.45,0,0,1-2.62-3.35,10.07,10.07,0,0,1,1.13-4.42l2.63-6.15-2.25-8.46a31.21,31.21,0,0,1-1.43-8.16,10.57,10.57,0,0,1,2.85-7.58,2.58,2.58,0,0,1,2-.9c1.27.18,1.76,1.73,2,3a72.4,72.4,0,0,1,1,7.75c.27,4.64-.36,9.37.73,13.88,1.41,0,2.39-1.37,2.85-2.7a10.3,10.3,0,0,0,.24-4.18l-1.34-16.14a2.21,2.21,0,0,1,.21-1.44c.49-.68,1.55-.56,2.3-.21a7.85,7.85,0,0,1,3.88,4.85,21.34,21.34,0,0,1,.7,6.33c0,3.84-.14,7.77-1.54,11.35a6.36,6.36,0,0,0-.53,1.65,5.61,5.61,0,0,0,1,3.4c1.29,2.28,2.79,4.54,3.22,7.13s-.58,5.66-3,6.63c-1.9,3.11-1.28,6.86-.64,10.45l1.2,6.84c.31,1.76.59,3.7-.32,5.24-.15.25-.6.44-.66.15-1.56.75-2.16,2.19-2.87,3.77a17.13,17.13,0,0,1-.81,1.86c-1,1.74-3.15,2.47-5.12,2.95a57.39,57.39,0,0,1-6.25,1.19C212.74,288.69,210.6,289.08,209.27,287.71Z" transform="translate(-25.56 -25.37)" fill="url(#linear-gradient-7)"></path><path d="M217.06,256.38l-1.14-.5a2.14,2.14,0,0,0-1.45-.25,1.07,1.07,0,0,0-.74.93,1.38,1.38,0,0,0,.46,1.08,3.64,3.64,0,0,0,1,.64,16.44,16.44,0,0,0,2.35.84,2.89,2.89,0,0,0,1.05.13,1.08,1.08,0,0,0,.85-.56,1.8,1.8,0,0,0,.11-.56c.06-.92.14-.93-.74-1.11A9.46,9.46,0,0,1,217.06,256.38Z" transform="translate(-25.56 -25.37)" fill="#000000"></path><path d="M217.06,256.38l-1.14-.5a2.14,2.14,0,0,0-1.45-.25,1.07,1.07,0,0,0-.74.93,1.38,1.38,0,0,0,.46,1.08,3.64,3.64,0,0,0,1,.64,16.44,16.44,0,0,0,2.35.84,2.89,2.89,0,0,0,1.05.13,1.08,1.08,0,0,0,.85-.56,1.8,1.8,0,0,0,.11-.56c.06-.92.14-.93-.74-1.11A9.46,9.46,0,0,1,217.06,256.38Z" transform="translate(-25.56 -25.37)" fill="url(#linear-gradient-8)"></path><path d="M217.6,269.62a10.6,10.6,0,0,1,5.91-5.4A4.78,4.78,0,0,1,230,268a13.09,13.09,0,0,1-.13,5.25,22.2,22.2,0,0,1-3.56,9.38c-2,2.71-5.19,4.73-8.56,4.61a20.72,20.72,0,0,0-2.28-7c-1.32-2.13-.71-2.52,0-4.57A39.37,39.37,0,0,1,217.6,269.62Z" transform="translate(-25.56 -25.37)" fill="#000000"></path><path d="M217.6,269.62a10.6,10.6,0,0,1,5.91-5.4A4.78,4.78,0,0,1,230,268a13.09,13.09,0,0,1-.13,5.25,22.2,22.2,0,0,1-3.56,9.38c-2,2.71-5.19,4.73-8.56,4.61a20.72,20.72,0,0,0-2.28-7c-1.32-2.13-.71-2.52,0-4.57A39.37,39.37,0,0,1,217.6,269.62Z" transform="translate(-25.56 -25.37)" fill="url(#linear-gradient-9)"></path><path d="M229.71,256.09a2.37,2.37,0,0,0-1.74-.71,13.78,13.78,0,0,1-1.93-.07c-.74-.14-1.43-.55-2.18-.62-.37,0-.74,0-1.1,0-1-.11-1.85-.84-2.85-.83l.19.66-1.92-.19c-.23.52.35,1,.52,1.54a1.56,1.56,0,0,1-1.21,1.79,5,5,0,0,1-2.37-.14.87.87,0,0,0-.39,0,.72.72,0,0,0-.46.71,2,2,0,0,0,1,1.64,5.71,5.71,0,0,0,1.9.65,4,4,0,0,0,.37,2.06l5.36-.87-.87,1.42a11.56,11.56,0,0,1,5.47-.29c-2.34,3.21-2.23,7.61-4,11.17-1.17.76-3,.45-4.27-.21s-2.57-1.44-3.93-1.12a4.67,4.67,0,0,0,2.5,4.55,14.58,14.58,0,0,0,5.3,1.46,1.18,1.18,0,0,1,.55.17,1.28,1.28,0,0,1,.42.89,7.41,7.41,0,0,0,.65,2.45,2.24,2.24,0,0,0,2,1.29,2.3,2.3,0,0,0,1.82-1.87,9,9,0,0,0,0-2.79c-.4-5.09,1.6-10,3.19-14.89a1.17,1.17,0,0,0,.07-.8,1.38,1.38,0,0,0-.44-.46A6,6,0,0,1,229.71,256.09Z" transform="translate(-25.56 -25.37)" fill="url(#linear-gradient-10)"></path><path d="M227.09,248.25a1.92,1.92,0,0,0-1,.14.67.67,0,0,0-.31.9,1.29,1.29,0,0,0,.21.19l1.31,1a1.2,1.2,0,0,0,.45.26c.42.1.81-.26,1-.64a1.73,1.73,0,0,0,.29-1C228.92,248.1,227.81,248.29,227.09,248.25Z" transform="translate(-25.56 -25.37)" fill="url(#linear-gradient-11)"></path><circle cx="194.11" cy="220" r="0.84" fill="url(#linear-gradient-12)"></circle><circle cx="204.31" cy="219.34" r="0.84" fill="url(#linear-gradient-13)"></circle><path d="M227.69,252a1.76,1.76,0,0,1-1,.7,5.66,5.66,0,0,1-1.23.14c-.07.13.11.26.26.29a2.35,2.35,0,0,0,2-.44,1.94,1.94,0,0,0,1.41.27.21.21,0,0,0,.13-.07c.07-.11-.09-.22-.22-.23-.35,0-.78.06-1-.22a.81.81,0,0,1-.05-.67c0-.14.32-1.11,0-.94S227.85,251.73,227.69,252Z" transform="translate(-25.56 -25.37)" fill="#000000"></path><path d="M218.05,232.3c.42-2.13,1.11-4.2,1.39-6.35a16.55,16.55,0,0,0-1.33-8.86.63.63,0,0,0-.27-.35.61.61,0,0,0-.52.07,3.37,3.37,0,0,0-1.72,3.54.74.74,0,0,0-.42-.67,5.55,5.55,0,0,0-1.25,3.94,16.41,16.41,0,0,0,.9,4.13l1.91,6.16a7.2,7.2,0,0,1,.17-3,40.37,40.37,0,0,0,.87,6.74C218,235.83,217.7,234.1,218.05,232.3Z" transform="translate(-25.56 -25.37)" fill="#000000"></path><path d="M228.31,223.69a20.94,20.94,0,0,0-2-7.91,7.84,7.84,0,0,1,3,4.6,22.9,22.9,0,0,1-1.63,17.05c1-1.07.22-5,.33-6.47A55.22,55.22,0,0,0,228.31,223.69Z" transform="translate(-25.56 -25.37)" fill="#000000"></path><path d="M218.05,232.3c.42-2.13,1.11-4.2,1.39-6.35a16.55,16.55,0,0,0-1.33-8.86.63.63,0,0,0-.27-.35.61.61,0,0,0-.52.07,3.37,3.37,0,0,0-1.72,3.54.74.74,0,0,0-.42-.67,5.55,5.55,0,0,0-1.25,3.94,16.41,16.41,0,0,0,.9,4.13l1.91,6.16a7.2,7.2,0,0,1,.17-3,40.37,40.37,0,0,0,.87,6.74C218,235.83,217.7,234.1,218.05,232.3Z" transform="translate(-25.56 -25.37)" fill="url(#linear-gradient-14)"></path><path d="M228.31,223.69a20.94,20.94,0,0,0-2-7.91,7.84,7.84,0,0,1,3,4.6,22.9,22.9,0,0,1-1.63,17.05c1-1.07.22-5,.33-6.47A55.22,55.22,0,0,0,228.31,223.69Z" transform="translate(-25.56 -25.37)" fill="url(#linear-gradient-15)"></path><path d="M213,270.61a20.4,20.4,0,0,0,5.64,4.8,9.08,9.08,0,0,0,7.19.8,4.85,4.85,0,0,1,1.27-.37,5.32,5.32,0,0,1,1.7.35,2,2,0,0,0,1.67-.11c.47-.34.54-1.2,0-1.43a1.46,1.46,0,0,0,1.36-1.45,1.68,1.68,0,0,0-1.34-1.54,1.59,1.59,0,0,0-1.23-1.77,2.74,2.74,0,0,0-2.24.6,2.32,2.32,0,0,1-.57.37,1.93,1.93,0,0,1-.83.08,20.31,20.31,0,0,1-4.67-.58,7,7,0,0,1-3.89-2.51c-.74-1-1.21-2.44-2.41-2.87a3.26,3.26,0,0,0-1.12-.15,3.3,3.3,0,0,0-2.4.81C209.85,267,212.11,269.59,213,270.61Z" transform="translate(-25.56 -25.37)" fill="#fff"></path><path d="M218,281c1.29,2.15,1.3,5.18-.45,7l9.45.52a2.92,2.92,0,0,1,1.41.32,1,1,0,0,1,.49,1.24,1.32,1.32,0,0,1-.59.53c-2,1.05-4.53.19-6.81.52l-.11.67c-5.89.58-11.85,1.16-17.71.35a3.43,3.43,0,0,1-2-.75c-1.06-1-.54-2.8-.95-4.21s-1.83-2.45-2.48-3.83a4.21,4.21,0,0,1,1.12-4.95c1.44-1.17,3.46-1.23,5.32-1.23C209.44,277.18,215.29,275.88,218,281Z" transform="translate(-25.56 -25.37)" fill="#000000"></path><path d="M218,281c1.29,2.15,1.3,5.18-.45,7l9.45.52a2.92,2.92,0,0,1,1.41.32,1,1,0,0,1,.49,1.24,1.32,1.32,0,0,1-.59.53c-2,1.05-4.53.19-6.81.52l-.11.67c-5.89.58-11.85,1.16-17.71.35a3.43,3.43,0,0,1-2-.75c-1.06-1-.54-2.8-.95-4.21s-1.83-2.45-2.48-3.83a4.21,4.21,0,0,1,1.12-4.95c1.44-1.17,3.46-1.23,5.32-1.23C209.44,277.18,215.29,275.88,218,281Z" transform="translate(-25.56 -25.37)" fill="url(#linear-gradient-16)"></path><path d="M220.35,255a1.14,1.14,0,0,0-.63-.05.76.76,0,0,0-.47.58,1.56,1.56,0,0,0,.09.77.38.38,0,0,1,0,.31.38.38,0,0,1-.18.15,2.41,2.41,0,0,0-.92,1.27,5.64,5.64,0,0,0-.23,1.58,1.17,1.17,0,0,0,.05.53,1.38,1.38,0,0,0,.52.58,3.07,3.07,0,0,0,1.15.62,2.75,2.75,0,0,0,1.77-.42c.9-.49,1.75-1.07,2.67-1.51a1.41,1.41,0,0,1,.65-.18,1.64,1.64,0,0,1,.77.35,7.49,7.49,0,0,0,3.46,1.18,1.44,1.44,0,0,0,.77-.09.57.57,0,0,0,.31-.65,1.26,1.26,0,0,0-.34-.39.42.42,0,0,1-.15-.47.61.61,0,0,1,.21-.18,2.75,2.75,0,0,0,1.21-2,.88.88,0,0,0,0-.4.64.64,0,0,0-.2-.23,2.75,2.75,0,0,0-1.78-.49c-1.54,0-3,.49-4.57.51a4.52,4.52,0,0,1-1.92-.62A18.93,18.93,0,0,0,220.35,255Z" transform="translate(-25.56 -25.37)" fill="#000000"></path><path d="M220.35,255a1.14,1.14,0,0,0-.63-.05.76.76,0,0,0-.47.58,1.56,1.56,0,0,0,.09.77.38.38,0,0,1,0,.31.38.38,0,0,1-.18.15,2.41,2.41,0,0,0-.92,1.27,5.64,5.64,0,0,0-.23,1.58,1.17,1.17,0,0,0,.05.53,1.38,1.38,0,0,0,.52.58,3.07,3.07,0,0,0,1.15.62,2.75,2.75,0,0,0,1.77-.42c.9-.49,1.75-1.07,2.67-1.51a1.41,1.41,0,0,1,.65-.18,1.64,1.64,0,0,1,.77.35,7.49,7.49,0,0,0,3.46,1.18,1.44,1.44,0,0,0,.77-.09.57.57,0,0,0,.31-.65,1.26,1.26,0,0,0-.34-.39.42.42,0,0,1-.15-.47.61.61,0,0,1,.21-.18,2.75,2.75,0,0,0,1.21-2,.88.88,0,0,0,0-.4.64.64,0,0,0-.2-.23,2.75,2.75,0,0,0-1.78-.49c-1.54,0-3,.49-4.57.51a4.52,4.52,0,0,1-1.92-.62A18.93,18.93,0,0,0,220.35,255Z" transform="translate(-25.56 -25.37)" fill="url(#linear-gradient-17)"></path><path d="M224.05,256.45a.25.25,0,0,0-.15,0,.29.29,0,0,0-.08.13,5.2,5.2,0,0,0,0,3.33.65.65,0,0,0,.18.31.73.73,0,0,0,.29.11,3,3,0,0,0,.84,0,.65.65,0,0,0,.28-.08.67.67,0,0,0,.19-.25,5.07,5.07,0,0,0,.58-2.41c0-.45-.08-.92-.54-1.06A5.25,5.25,0,0,0,224.05,256.45Z" transform="translate(-25.56 -25.37)" fill="#000000"></path><path d="M224.05,256.45a.25.25,0,0,0-.15,0,.29.29,0,0,0-.08.13,5.2,5.2,0,0,0,0,3.33.65.65,0,0,0,.18.31.73.73,0,0,0,.29.11,3,3,0,0,0,.84,0,.65.65,0,0,0,.28-.08.67.67,0,0,0,.19-.25,5.07,5.07,0,0,0,.58-2.41c0-.45-.08-.92-.54-1.06A5.25,5.25,0,0,0,224.05,256.45Z" transform="translate(-25.56 -25.37)" fill="url(#linear-gradient-18)"></path><path d="M274.7,150.51v.34a86.49,86.49,0,0,1-1.07,13.82,64.64,64.64,0,0,1-7.89,22.67c-.2.35-.41.7-.62,1A55.51,55.51,0,0,1,257,198.7c-12.66,12.79-31,19-50.63,19-17.78,0-33.42-5-44.8-15.42a52.16,52.16,0,0,1-8-9.21,61.89,61.89,0,0,1-8.84-20.32,90.79,90.79,0,0,1-2.47-21.85c0-1,0-2,0-3,.07-2.65.24-5.35.5-8.08a144.34,144.34,0,0,1,2.73-17.31c6.07-28,20.18-56.59,38.23-71.14,7.63-6.15,16-9.79,24.69-9.79C245,41.56,274.55,105,274.7,150.51Z" transform="translate(-25.56 -25.37)" fill="#000000"></path><path d="M274.7,150.51v.34a86.49,86.49,0,0,1-1.07,13.82,64.64,64.64,0,0,1-7.89,22.67c-.2.35-.41.7-.62,1A55.51,55.51,0,0,1,257,198.7c-12.66,12.79-31,19-50.63,19-17.78,0-33.42-5-44.8-15.42a52.16,52.16,0,0,1-8-9.21,61.89,61.89,0,0,1-8.84-20.32,90.79,90.79,0,0,1-2.47-21.85c0-1,0-2,0-3,.07-2.65.24-5.35.5-8.08a144.34,144.34,0,0,1,2.73-17.31c6.07-28,20.18-56.59,38.23-71.14,7.63-6.15,16-9.79,24.69-9.79C245,41.56,274.55,105,274.7,150.51Z" transform="translate(-25.56 -25.37)" fill="url(#linear-gradient-19)"></path><path d="M274.69,150.85c0,15.17-3.52,27.65-9.57,37.53-12,8.85-27.48,13.13-43.89,13.13-36.56,0-64.11-21.24-64.11-66.81,0-27.1,10.49-60.63,26.68-83.35,7.64-6.16,16-9.79,24.7-9.79C245.06,41.56,274.69,105.28,274.69,150.85Z" transform="translate(-25.56 -25.37)" fill="#000000"></path><path d="M274.69,150.85c0,15.17-3.52,27.65-9.57,37.53-12,8.85-27.48,13.13-43.89,13.13-36.56,0-64.11-21.24-64.11-66.81,0-27.1,10.49-60.63,26.68-83.35,7.64-6.16,16-9.79,24.7-9.79C245.06,41.56,274.69,105.28,274.69,150.85Z" transform="translate(-25.56 -25.37)" fill="url(#linear-gradient-20)"></path><polygon points="126.94 73.72 140.97 78.55 160.29 70.2 176.53 78.55 193.22 70.2 208.59 80.3 224.4 70.2 239.5 75.25 243.29 86.89 226.59 80.08 204.64 89.96 190.77 80.08 175 90.84 157.87 78.55 137.45 93.48 123.09 85.13 126.94 73.72" fill="#000000"></polygon><polygon points="126.94 73.72 140.97 78.55 160.29 70.2 176.53 78.55 193.22 70.2 208.59 80.3 224.4 70.2 239.5 75.25 243.29 86.89 226.59 80.08 204.64 89.96 190.77 80.08 175 90.84 157.87 78.55 137.45 93.48 123.09 85.13 126.94 73.72" fill="#fff"></polygon><path d="M274.7,150.51v.34a86.49,86.49,0,0,1-1.07,13.82,48.78,48.78,0,0,1-8.61-7.56c-1.88-2.1-3.78-4.47-6.51-5.17-3.06-.78-6.26.86-8.62,3s-4.24,4.76-6.78,6.65a15.37,15.37,0,0,1-12.51,2.58c-4.12-1-7.62-3.62-11.26-5.8s-7.9-4-12-3c-6.05,1.38-9.3,7.85-14.3,11.5a17.6,17.6,0,0,1-21.07-.71c-3.41-2.85-6.2-7.29-10.64-7.53-4.13-.24-7.38,3.33-9.71,6.72-1.91,2.79-3.94,5.87-6.81,7.4a90.79,90.79,0,0,1-2.47-21.85c0-1,0-2,0-3a1,1,0,0,1,.27.13,14.36,14.36,0,0,1,17.37-3.1c3.15,1.78,5.48,4.68,8.47,6.71a17.94,17.94,0,0,0,15.69,2c6-2.07,10.35-7.14,14.11-12.22,2.59-3.51,8.33-2.72,12.52-1.49s7.79,3.88,11,6.83c3.82,3.51,7.84,7.78,13,7.81,5.67,0,10-5.13,12.33-10.3.94-2.09,1.83-4.42,3.78-5.61a10.4,10.4,0,0,1,4.31-1.12c4.21-.44,8.95-.74,12.18,2s3.89,8.08,7.25,10.94Z" transform="translate(-25.56 -25.37)" fill="#fff" opacity="0.74"></path><path d="M265.74,187.34c-.2.35-.41.7-.62,1A55.51,55.51,0,0,1,257,198.7a34.3,34.3,0,0,1-10.55-.91c-5.46-1.42-10.41-4.55-16-5.56-12.1-2.2-23.91,6-36.2,5.58-4.47-.16-8.8-1.46-13.22-2.11s-9.18-.64-13,1.63c-2.34,1.37-4.17,3.48-6.46,4.9a52.16,52.16,0,0,1-8-9.21,33.5,33.5,0,0,0,13.77-4.52c4.73-2.89,9.59-6.81,15.07-6,2.86.39,5.37,2.06,8,3.32a30.14,30.14,0,0,0,13.71,3,17.32,17.32,0,0,0,7.88-1.73c1.76-.93,3.25-2.24,4.95-3.24,3.59-2.09,7.83-2.6,11.95-3.06a17.72,17.72,0,0,1,6,0c3.27.74,5.81,3.22,8.72,4.91C250.22,189.51,258.08,189,265.74,187.34Z" transform="translate(-25.56 -25.37)" fill="#fff"></path><circle cx="154.19" cy="105.88" r="8.78" fill="#fff"></circle><circle cx="192.9" cy="103.13" r="8.78" fill="#fff"></circle><circle cx="225.22" cy="99.13" r="8.78" fill="#fff"></circle><path d="M153.62,131.25a8.78,8.78,0,0,1-8.78,8.78,8.67,8.67,0,0,1-2-.23,144.34,144.34,0,0,1,2.73-17.31A8.8,8.8,0,0,1,153.62,131.25Z" transform="translate(-25.56 -25.37)" fill="#fff"></path><path d="M153.62,174.6a1.8,1.8,0,0,0-.86.59,1.92,1.92,0,0,0-.25.95l-.12,1.53a2.38,2.38,0,0,0,.05,1,2.06,2.06,0,0,0,2.19,1.09,15.53,15.53,0,0,0,4.12-1.15c3.89-1.32,8.08-1.3,12.18-1.37.85,0,1.86-.12,2.27-.86,1.46-2.61-5.62-4-7.18-4A28.07,28.07,0,0,0,153.62,174.6Z" transform="translate(-25.56 -25.37)" fill="#fff"></path><path d="M199.67,170.87c-1.66.53-3.43,1.28-4.29,2.81a1.24,1.24,0,0,0-.19,1c.2.61,1,.7,1.65.68l18.57-.61c1.8-.06,3.52-1.43,3-3.44-.44-1.83-2.09-2-3.71-2.2A37,37,0,0,0,199.67,170.87Z" transform="translate(-25.56 -25.37)" fill="#fff"></path><path d="M244.93,167.1a31.11,31.11,0,0,0-8.62.72c-.75.21-1.58.58-1.77,1.34a2,2,0,0,0,.82,1.84,8.49,8.49,0,0,0,4.93,1.83c1.77.15,3.56,0,5.33.18,3.94.33,8,2,11.68.43a1.14,1.14,0,0,0,.53-.36c1.49-2-2.13-5.13-3.85-5.66C251.27,166.58,247.73,167.12,244.93,167.1Z" transform="translate(-25.56 -25.37)" fill="#fff"></path><polygon points="126.87 153.27 154.19 237.17 157.63 239.07 129.06 154.36 126.87 153.27" fill="#000000"></polygon><polygon points="243.67 153.27 216.35 237.17 212.91 239.07 241.49 154.36 243.67 153.27" fill="#000000"></polygon><polygon points="188.13 156.74 184.19 240.8 181.28 242.7 186.25 157.82 188.13 156.74" fill="#000000"></polygon><path d="M210.76,264.82c-6.4-1.22-12-5-18.31-6.77a30.87,30.87,0,0,0-13-.84,6,6,0,0,0-2.31.71,5.49,5.49,0,0,0-2,2.68c-1.69,4.11-1.55,8.72-1.39,13.16l.77,21.22c.09,2.6.25,5.38,1.82,7.46,1.77,2.35,4.88,3.19,7.76,3.76a117.35,117.35,0,0,0,53-1.68c1.87-.5,3.85-1.12,5.07-2.62a9.15,9.15,0,0,0,1.6-4.4,114.15,114.15,0,0,0,1.43-19.37c0-3.78,1.44-14.92-1.61-17.52s-11.43,1.56-14.79,2.47C223,264.67,216.88,266,210.76,264.82Z" transform="translate(-25.56 -25.37)" fill="#000000"></path><path d="M245.3,278.13a114.07,114.07,0,0,1-1.43,19.37,9.15,9.15,0,0,1-1.6,4.4c-1.22,1.49-3.2,2.12-5.07,2.61a117.13,117.13,0,0,1-53,1.69c-2.88-.57-6-1.4-7.76-3.76-1.57-2.07-1.73-4.87-1.82-7.45q-.39-10.64-.77-21.24c-.16-4.43-.3-9,1.39-13.14a5.4,5.4,0,0,1,2-2.68,6,6,0,0,1,2.31-.72,30.88,30.88,0,0,1,13,.85c5.65,1.61,10.78,4.82,16.42,6.32.62.18,1.25.31,1.89.44,6.12,1.17,12.23-.14,18.14-1.75,3.36-.89,11.6-5.19,14.79-2.46S245.29,274.36,245.3,278.13Z" transform="translate(-25.56 -25.37)" fill="url(#linear-gradient-21)"></path><path d="M207.14,297.44c.17,2.82,1.47,7.11,1.94,11a116.51,116.51,0,0,1-24.92-2.24c-2.88-.57-6-1.4-7.76-3.76-1.57-2.07-1.73-4.87-1.82-7.45q-.39-10.64-.77-21.24c-.16-4.43-.3-9,1.39-13.14a5.4,5.4,0,0,1,2-2.68,6,6,0,0,1,2.31-.72,30.88,30.88,0,0,1,13,.85c5.65,1.61,10.78,4.82,16.42,6.32,1,3.5.17,7.62-.49,11.33A92.57,92.57,0,0,0,207.14,297.44Z" transform="translate(-25.56 -25.37)" fill="url(#linear-gradient-22)"></path></svg>
                        <div class="mt-2">
                            ไม่มีสินค้าที่บันทึกไว้
                        </div>
                    </div>
                <?php
                }
                foreach ($result as $row) {

                ?>
                    <a href="/src/landing/products/product?id=<?php echo $row['product_id']; ?>" >
                    <div class="flex max-[350px]:p-[5px] p-2 border rounded mt-2">
                        <div class="max-[350px]:mr-1 mr-2">
                            <img class="w-[80px] rounded" src="../../assets/img/<?php echo $row["img1"]; ?>" alt="">
                        </div>
                        <div class="w-full px-1 sm:px-2 flex flex-col justify-center">
                            <div class="flex w-full justify-between items-center">
                                <div class="fs-5 fw-normal">
                                    <?php echo $row["name"] ?>
                                </div>
                                <div class="">
                                    ฿<?php echo $row["cost"] ?>
                                </div>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="palm-order-containertext text-gray-500 max-[400px]:max-w-[100px] max-[520px]:max-w-[150px] max-[766px]:max-w-[300px] max-[850px]:max-w-[200px] max-[1024px]:max-w-[600px] max-w-[700px] truncate">
                                    <?php echo $row["des"] ?>
                                </div>
                                <div class="flex items-center justify-between">
                                    
                                    <div onclick="deleteBt(event, <?php echo $row['product_id']; ?>)" class="">
                                        <svg id="delete" class="cursor-pointer" width="20" height="20" viewBox="0 0 1024 1024">
                                            <path fill="currentColor" d="m896.8 159.024l-225.277.001V71.761c0-40.528-33.008-72.496-73.536-72.496H426.003c-40.528 0-73.52 31.968-73.52 72.496v87.264h-225.28c-17.665 0-32 14.336-32 32s14.335 32 32 32h44.015l74.24 739.92c3.104 34.624 32.608 61.776 67.136 61.776h398.8c34.528 0 64-27.152 67.088-61.472l74.303-740.24h44.016c17.68 0 32-14.336 32-32s-14.32-31.985-32-31.985zM416.482 71.762c0-5.232 4.271-9.505 9.52-9.505h171.984c5.248 0 9.536 4.273 9.536 9.505v87.264h-191.04zm298.288 885.44c-.16 1.777-2.256 3.536-3.376 3.536h-398.8c-1.12 0-3.232-1.744-3.425-3.84l-73.632-733.856H788.45z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a> <?php
                        }
                            ?>



            </div>
        </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        tippy('#delete', {
            content: 'ลบรายการนี้',
            animation: 'perspective-extreme',
            placement: 'bottom',
        });
        function deleteBt(event, id) {
            event.preventDefault();
            $.ajax({
                url: "/src/services/handleDeleteWishlist.php",
                type: "POST",
                data: {
                    "p_id": id
                },
                success: function() {
                    location.reload();
                }
            })
        }
    </script>
</body>

</html>