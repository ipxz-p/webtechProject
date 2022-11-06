<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mind_style.css">
    <title>ห้องตัวอย่าง</title>
    <link rel="stylesheet" href="/dist/output.css">
    <link rel="stylesheet" href="/src/assets/style/global.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Prompt', sans-serif;
            box-sizing: border-box;
        }


        img {
            width: 100%;
            border-radius: 10px;
            height: 600px;
        }

        .mind-grid {
            margin: 0 auto;
            display: grid;
            max-width: 100%;
            grid-template-columns: repeat(2, 1fr);
            gap: 5px;
            float: left;
            padding: 30px;
        }

        .mind-article {
            padding: 10px;
            margin-left: 40px;
        }

        .mind-color {
            color: #645cac;
            font-size: 25px;
            margin-top: 10px;
            text-decoration: underline
        }

        .mind-subline {
            font-size: 20px;
        }

        .m-topic {
            margin-top: 15px;
            color: #645cac;
            font-size: 25px;
        }

        h1 {
            text-align: center;
            margin: 12px;
            color: #645CAA;
            font-size: 50px;
        }

        h2 {
            color: #645cac;
            font-size: 30px;
            text-decoration: underline;
            padding: 10px;
            margin-left: 40px;
        }


        .ph1 {
            padding: 25px;
        }

        .ph2 {
            padding: 25px;
        }

        .img2 {
            height: 500px;
        }

        .m-foot {
            width: 100%;
            height: 100%;
            margin-left: 50%;
            margin-bottom: 20px;
            border: 1px solid black;
        }

        .foot-sub {
            text-align: center;
        }

        @media screen and (max-width: 640px) {
            .mind-grid {
                grid-template-columns: repeat(1, 1fr);
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <h1>บทความเกี่ยวกับจิตวิทยา</h1>
    <div class="mind-article">
        <h3 class="mind-color">จิตวิทยาสี กับ การเลือกสีห้องให้อยู่สบาย</h3>
        <p class="mind-subline">
            สีมีอิทธิพลทางจิตวิทยา ที่จะกระตุ้นให้เกิดหรือลดความรู้สึกและอารมณ์ต่างๆได้
            ดังนั้นความรู้ความเข้าใจในเรื่องจิตวิทยาสีและอารมณ์จะช่วยให้คุณเลือกโทนที่เหมาะสมได้ง่ายขึ้น
        </p>
    </div>

    <!-- --------------สีห้อง--------------- -->
    <div class="mind-grid">
        <div class="room_color1">
            <!-- --------------แดง--------------- -->
            <div class="ph1">
                <img src="http://cdn.home-designing.com/wp-content/uploads/2019/10/red-bedroom-chair.jpg" class="img2">
                <h3 class="m-topic">สีแดง</h3>
                <p>
                    สีแดง ถือเป็นสีแห่งความตื่นเต้น มีชีวิตชีวา ความรัก ความอุดมสมบูรณ์ มั่งคั่ง
                    และยังมีความหมายแฝงในเรื่องของกามารมณ์ ให้ความรู้สึกที่ร้อนแรง มีพลัง
                </p>
            </div>

            <!-- --------------เหลือง--------------- -->
            <div class="ph1">
                <img src="https://i.pinimg.com/564x/a7/ea/70/a7ea7053b09b59c1515e68b760a9ae92.jpg">
                <h3 class="m-topic">สีเหลือง</h3>
                <p>
                    สีเหลือง ทำให้รู้สึกสดชื่นแจ่มใส เบิกบาน และมีชีวิตชีวา เป็นสีแห่งอำนาจบารมี
                    นอกจากนี้สีเหลืองยังเป็นสีแห่งปัญญา ความรู้ ความคิดสร้างสรรค์ และการมองโลกในแง่ดีอีกด้วย
                </p>
            </div>
            <!-- --------------สีน้ำเงิน--------------- -->
            <div class="ph1">
                <img src="http://cdn.home-designing.com/wp-content/uploads/2018/03/marilyn-monroe-kids-room-blue-bedroom-furniture.jpg">
                <h3 class="m-topic">สีน้ำเงิน</h3>
                <p>
                    สีน้ำเงิน สีที่มีความเชื่อมโยงกับท้องฟ้าและสายน้ำ สื่อถึงความสงบ สุภาพ หนักแน่น และเคร่งขรึม
                    สามารถช่วยให้มีสมาธิและลดความตื่นเต้นได้ มีความสงบและผ่อนคลายมากกว่าสีอื่นๆ
                    นิยมนำไปใช้ในการบำบัดความเครียดหรืออาการนอนไม่หลับ
                </p>
            </div>

            <!-- --------------สีฟ้า--------------- -->
            <div class="ph1">
                <img src="https://i.pinimg.com/564x/e9/4d/dd/e94ddd8c814c7b141fe0f12bde294d9f.jpg">
                <h3 class="m-topic">สีฟ้า</h3>
                <p>
                    ในทางจิตวิทยาสี สีฟ้า เป็นสีที่ให้ความรู้สึกเป็นอิสระ สงบเยือกเย็น ปลอดภัย
                    และปลอดโปร่งสามารถช่วยลดความกระวนกระวายและกระตุ้นความคิดสร้างสรรค์และสมาธิได้
                </p>
            </div>

            <!-- --------------สีเขียว--------------- -->
            <div class="ph1">
                <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/green-bedroom-ideas-1652736202.jpg?crop=0.624xw:1.00xh;0.190xw,0&resize=980:*">
                <h3 class="m-topic">สีเขียว</h3>
                <p>
                    สีเขียว เป็นสีวรรณะเย็น สีแห่งความเป็นธรรมชาติ สามารถช่วยให้รู้สึกผ่อนคลาย ปลอดภัย
                    ถือเป็นอีกหนึ่งสีที่ใช้ในการผ่อนคลายความเครียด จึงได้รับความนิยมมากที่สุดในการตกแต่งอาคารหรือห้องต่าง ๆ
                    เพื่อทำให้รู้สึกถึงความสุขนั่นเอง
                </p>
            </div>

            <!-- --------------สีม่วง--------------- -->
            <div class="ph1">
                <img src="http://cdn.home-designing.com/wp-content/uploads/2018/10/Purple-duvet-cover.jpg">
                <h3 class="m-topic">สีม่วง</h3>
                <p>
                    สีม่วง ให้อารมณ์ความรู้สึกที่เร้นลับน่าค้นหา และมีเสน่ห์อยู่ในตัว เป็นสีที่ช่วยในการปลอบโยนจิตใจให้สงบ อ่อนโยน
                    และฟื้นกลับมาจากสภาพจิตใจที่ตกต่ำ จะกระตุ้นสมองให้มีความฮึกเหิม
                    แต่ในทางกลับกันก็หมายถึงความเศร้าเสียใจได้เช่นเดียวกัน
                </p>
            </div>
        </div>



        <!-- ---------------------------------------room2-------------------------------------- -->

        <div class="room_color2">
            <!-- --------------สีส้ม--------------- -->
            <div class="ph1">
                <img src="https://homedecorbliss.com/wp-content/uploads/2019/05/15-1024x846.jpg" class="img2">
                <h3 class="m-topic">สีส้ม</h3>
                <p>
                    สีส้ม เป็นสีโทนร้อน ที่มีความอบอุ่น มีชีวิตชีวา ทำให้มีความรู้สึกให้ตื่นตัว
                    สื่อถึงความระมัดระวังและสุขภาพที่ดี ช่วยให้กระตุ้นความอยากอาหารจึงนิยมนำมาใช้กับร้านอาหารหรือแบรนด์อาหาร
                </p>
            </div>

            <!-- --------------สีชมพู--------------- -->
            <div class="ph1">
                <img src="http://cdn.home-designing.com/wp-content/uploads/2019/04/grey-and-pink-bedroom.jpg">
                <h3 class="m-topic">สีชมพู</h3>
                <p>
                    สีชมพู หมายถึงการมีน้ำใจ มีจิตใจดี
                    การมีสีชมพูรายล้อมยังทำให้รู้สึกถึงความปลอดภัย นักจิตวิทยาจึงมักนำสีชมพูมาเพื่อบำบัดผู้ที่มีความรู้สึกอ้างว้างโดดเดี่ยว
                </p>
            </div>
            <!-- --------------สีขาว--------------- -->
            <div class="ph1">
                <img src="https://i.pinimg.com/564x/70/37/2b/70372b80cc6caf50b0e206b52b38f389.jpg">
                <h3 class="m-topic">สีขาว</h3>
                <p>
                    สีขาว เป็นสีแห่งความบริสุทธิ์ เมตตา และอ่อนโยน ในเชิงจิตวิทยาสีให้ความรู้สึกถึงความศรัทธา
                    และความสะอาด ซึ่งเห็นได้จากการชุดสวมใส่ขณะปฏิบัติธรรมและการตกแต่งภายในโรงพยาบาล
                    นอกจากนี้ สีขาวยังสามารถช่วยบรรเทาอารมณ์ต่างๆ จากการวิตกกังวลได้อีกด้วย
                </p>
            </div>

            <!-- --------------สีดำ--------------- -->
            <div class="ph1">
                <img src="http://cdn.home-designing.com/wp-content/uploads/2018/09/black-and-gold-bedroom-decor.jpg">
                <h3 class="m-topic">สีดำ</h3>
                <p>
                    สำหรับ สีดำ มีความหมายในเชิงจิตวิทยาสีว่า การควบคุมพลังอำนาจ
                    แต่ในทางกลับกันก็ยังหมายถึงการหมดพลังและอ่อนล้า
                </p>
            </div>

            <!-- --------------สีเทา--------------- -->
            <div class="ph1">
                <img src="https://www.storynorth.com/ezoimgfmt/lh5.googleusercontent.com/VTV_eMywudxRo0hC2CiLr4jf1IL4TVzepelDRMPJHqkez_tU-z3oL1ya0dzmPI9pcMcZm9PI1GTGqCcL0s5BI5KCH5EMLOi3vo55_c1Nn-7ejvkVELTSRUg01fxgwV-2C7SLtvnk=s0?ezimgfmt=rs:563x690/rscb1/ng:webp/ngcb1">
                <h3 class="m-topic">สีเทา</h3>
                <p>
                    สีเทา ให้ความรู้สึกถึงความโศกเศร้า หดหู่ และท้อแท้
                    เนื่องจากเป็นสีกลางระหว่างดำและขาวทำให้มีความสมดุล
                    และสามารถใช้เพื่อดึงดูดความสนใจจากคนในปริมาณมากได้อีกด้วย
                    และยังเป็นสีที่ทำให้รู้สึกถึงความเย็น แต่ควรระมัดระวังการใช้สีเทา โดยใช้คู่กับสีอื่น ๆ
                </p>
            </div>

            <!-- --------------สีน้ำตาล--------------- -->
            <div class="ph1">
                <img src="https://i.pinimg.com/originals/21/91/1b/21911b91e08f10849a21cc8f8c72f164.jpg">
                <h3 class="m-topic">สีน้ำตาล</h3>
                <p>
                    สีน้ำตาล เป็นสีแห่งความอบอุ่นและการพักผ่อน
                    เป็นสัญลักษณ์ของความแน่วแน่และความอุดมสมบูรณ์เหมือนสีดินและธรรมชาติ
                    โดยมีสีน้ำตาลอ่อนที่หมายถึงความจริง สีน้ำตาลเข้มที่หมายถึงไม้หรือหนัง
                    แต่การใช้สีน้ำตาลเยอะจนเกินไปก็อาจทำให้เกิดความรู้สึกหดหู่ได้
                </p>
            </div>
        </div>
    </div>


    <!-- ----------------------------เลือกสีห้องให้เหมาะ-------------------------------------- -->
    <h2>การเลือกสีห้องให้เหมาะสม</h2>
    <div class="mind-grid">
        <div class="m-room">

            <div class="ph2">
                <img src="https://wpb.cdn.kaidee.com/wp-media-folder-kaidee-blog/wp-content/uploads/2020/12/%E0%B8%AB%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B8%99%E0%B8%AD%E0%B8%99%E0%B8%AA%E0%B8%B5%E0%B8%9F%E0%B9%89%E0%B8%B2.jpg" class="img2">
                <h3 class="m-topic">ห้องนอน</h3>
                <p>
                    ห้องนอนถือเป็นห้องแห่งการพักผ่อน สีที่เหมาะกับการทาห้องนอน คือแนวสีโทนเย็น
                    เช่น สีน้ำเงินหรือสีฟ้าที่มีความเชื่อมโยงกับท้องฟ้าและแม่น้ำ ช่วยให้นอนหลับได้ง่ายขึ้น
                    ควรระวังในการเลือกเฉดสีไม่ให้เข้มจนเกินไปเพราะอาจส่งผลให้เกิดอารมณ์ที่หม่นหมองได้
                </p>
            </div>

            <div class="ph2">
                <img src="https://www.thespruce.com/thmb/ERU9QydkjCdPYyqkgMBz7AWQrx4=/2048x1366/filters:fill(auto,1)/fancy-bathroom-ideas-4325947-hero-4777bf14fe2b447b86a21e8a64194c29.jpg" class="img2">
                <h3 class="m-topic">ห้องน้ำ</h3>
                <p>
                    สั่งเกตได้ว่าสีของห้องน้ำส่วนใหญ่จะเป็นสีขาวเพราะเป็นสัญลักษณ์ของความสะอาดและบริสุทธิ์
                    ถ้าหากว่าต้องการจะเปลี่ยนสีของห้องน้ำให้สดใสขึ้น อาจใช้สีที่มีความอ่อนและทำให้รู้สึกสบายใจ เช่น สีเทา สีฟ้า
                    และสีเขียวอ่อนเพื่อลดความกระวนกระวายและรู้สึกถึงความสะอาดสดชื่นนั่นเอง
                </p>
            </div>

            <div class="ph2">
                <img src="http://www.banidea.com/wp-content/uploads/2015/09/Red-Kitchen-2.jpg" class="img2">
                <h3 class="m-topic">ห้องครัวและห้องรับประทานอาหาร</h3>
                <p>
                    สีแดงและสีส้มนอกจากจะเป็นสีที่มีความสดใสแล้ว
                    ยังเป็นสีที่ช่วยกระตุ้นความอยากอาหารได้เป็นอย่างดี จึงควรจะใช้สีเหล่านี้ในการทาสีห้องครัวและห้องรับประทานอาหาร
                    สีที่ไม่ควรที่ใช้ได้แก่ สีเขียว สีเหลือง และสีฟ้า เพราะตามหลักจิตวิทยา สีเหล่านี้จะส่งผลให้ความอยากอาหารลดลงไปมากเลยทีเดียว
                </p>
            </div>
        </div>


        <div class="m-room">

            <div class="ph2">
                <img src="https://i.pinimg.com/originals/c3/35/65/c33565394f6513c2f1176eea38ae6596.jpg" class="img2">
                <h3 class="m-topic">ห้องนั่งเล่น</h3>
                <p>
                    เนื่องจากห้องนั่งเล่นเป็นห้องที่รวบรวมสมาชิกภายในบ้าน
                    ดังนั้นสีที่เหมาะกับการทาห้องนั่งเล่น คือ สีน้ำตาลและสีชมพู ซึ่งเป็นสีแห่งความอบอุ่นและพักผ่อน
                    สีที่ควรหลีกเลี่ยง ได้แก่ สีที่มีความเข้มมากอย่างสีดำ หรือกรม เพราะจะทำให้คนที่อยู่ในห้องรู้สึกอึดอัด อึมครึม และหดหู่
                </p>
            </div>

            <div class="ph2">
                <img src="https://tonkit360.com/wp-content/uploads/2021/03/%E0%B8%AB%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B8%97%E0%B8%B3%E0%B8%87%E0%B8%B2%E0%B8%99-1024x683.jpg" class="img2">
                <h3 class="m-topic">ห้องทำงาน</h3>
                <p>
                    สีที่เหมาะกับห้องทำงาน ซึ่งเป็นห้องที่ต้องใช้สมาธิและห้องแห่งความสร้างสรรค์ ห้องที่มีสีเขียว จะช่วยเพิ่มสมาธิในการทำงานแต่ก็ไม่ตึงเครียดจนเกินไป
                    หรือสีที่จะช่วยเพิ่มประสิทธิภาพการทำงาน อย่างเช่น สีม่วงอ่อน สีส้ม และ สีเหลือง
                </p>
            </div>

            <div class="ph2">
                <img src="https://image.makewebeasy.net/makeweb/0/3J7vLYTRY/DefaultData/q14_resize_13.jpg" class="img2">
                <h3 class="m-topic">ห้องเด็ก</h3>
                <p>
                    ผนังห้องนอนของเด็กๆ มักจะถูกตกแต่งด้วยสีสันสดใสอย่างสีฟ้า ชมพู เหลือง และเขียวพาสเทล
                    เพื่อเสริมสร้างความคิดสร้างสรรค์ของเด็ก ๆ แต่ก็ไม่ฉูดฉาดจนเกินไปเพราะอาจจะทำให้เกิดการกระตุ้นอารมณ์ที่มากเกินไป
                </p>
            </div>
        </div>
    </div>

</body>

</html>