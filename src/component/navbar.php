<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/dist/output.css">
    <link rel="stylesheet" href="../assets/style/global.css">
    <style>
        a{
            color: black;
        }
        a:hover{
            color: black;
        }
        #nav-sidebar{
            transition: all 0.3s;
            transform: translateX(100%);
            -ms-overflow-style: none; 
            scrollbar-width: none;
        }
        #nav-sidebar::-webkit-scrollbar { 
            display: none;  /* Safari and Chrome */
        }
    </style>
</head>
<body>
    <div class="fixed w-full t-0 r-0 z-30 ">
    <nav class="border h-[55px] sm:h-[60px] border-b-gray-300 px-3 md:px-6 py-2 flex justify-between bg-white items-center">
        <div>
            <a href="/">
            <svg class="h-[35px] w-[70px] sm:h-[50px] sm:w-[100px]" viewBox="0 0 142 61" fill="black" xmlns="http://www.w3.org/2000/svg" class="logo-nav">
                <path d="M27.16 23.712C27.3307 23.776 27.448 23.8827 27.512 24.032C27.5973 24.1813 27.608 24.3413 27.544 24.512C27.48 24.6613 27.3733 24.768 27.224 24.832C26.136 25.3227 24.056 25.7707 20.984 26.176C20.1733 29.7813 19.3733 33.824 18.584 38.304C17.7947 42.784 17.2827 46.1333 17.048 48.352C17.2187 48.2667 17.3893 48.256 17.56 48.32C17.6667 48.3627 17.752 48.4267 17.816 48.512C17.9013 48.5973 17.944 48.6827 17.944 48.768C17.9653 48.8747 17.9653 48.992 17.944 49.12C17.6667 49.8667 17.432 50.4 17.24 50.72C17.048 51.0613 16.8133 51.232 16.536 51.232C16.472 51.232 16.3973 51.2213 16.312 51.2C15.992 51.0933 15.8 50.8053 15.736 50.336C15.6933 49.8667 15.7467 48.96 15.896 47.616C16.088 45.9307 16.4187 43.6693 16.888 40.832C17.5067 37.1413 18.2107 33.4187 19 29.664C16.2693 34.656 13.56 38.3893 10.872 40.864C8.20533 43.3387 5.89067 44.2133 3.928 43.488C2.09333 42.8053 1.016 40.864 0.696 37.664C0.376 34.4853 0.866667 30.496 2.168 25.696C3.14933 22.0907 4.81333 17.9947 7.16 13.408C9.528 8.8 11.896 5.23733 14.264 2.72C15.2453 1.67467 16.216 0.981332 17.176 0.639999C18.1573 0.298665 19.0213 0.330665 19.768 0.735998C20.088 0.927998 20.376 1.19467 20.632 1.536C20.9093 1.856 21.1653 2.37867 21.4 3.104C21.6347 3.82933 21.7627 4.69333 21.784 5.696C21.8267 6.69867 21.7307 8.02133 21.496 9.664C21.2827 11.3067 20.8987 13.1413 20.344 15.168C20.3013 15.3387 20.2053 15.4667 20.056 15.552C19.9067 15.6373 19.7467 15.6587 19.576 15.616C19.4267 15.5733 19.3093 15.4773 19.224 15.328C19.1387 15.1787 19.1173 15.0187 19.16 14.848C19.864 12.224 20.2907 9.94133 20.44 8C20.6107 6.03733 20.568 4.58666 20.312 3.648C20.0773 2.70933 19.6933 2.10133 19.16 1.824C18.6907 1.54667 18.0933 1.568 17.368 1.888C16.664 2.208 15.928 2.76266 15.16 3.552C12.856 6.00533 10.552 9.48267 8.248 13.984C5.944 18.464 4.312 22.4747 3.352 26.016C2.072 30.7307 1.592 34.592 1.912 37.6C2.18933 40.2667 3.01067 41.8453 4.376 42.336C4.76 42.4853 5.19733 42.528 5.688 42.464C6.17867 42.4 6.69067 42.24 7.224 41.984C7.77867 41.728 8.35467 41.3653 8.952 40.896C9.57067 40.4267 10.2 39.872 10.84 39.232C13.656 36.3733 16.4827 32.0853 19.32 26.368C18.4453 26.4533 17.08 26.592 15.224 26.784C12.0667 27.104 9.74133 27.3707 8.248 27.584C8.22667 27.584 8.20533 27.584 8.184 27.584C8.03467 27.584 7.896 27.5307 7.768 27.424C7.66133 27.3173 7.59733 27.1893 7.576 27.04C7.55467 26.9333 7.56533 26.8267 7.608 26.72C7.65067 26.6133 7.71467 26.528 7.8 26.464C7.88533 26.4 7.98133 26.3573 8.088 26.336C9.60267 26.144 11.9387 25.888 15.096 25.568C17.3147 25.3333 18.936 25.1627 19.96 25.056C19.96 25.0347 19.9707 25.0027 19.992 24.96C20.0133 24.896 20.0347 24.8533 20.056 24.832C20.2053 24.4907 20.4613 24.384 20.824 24.512C20.9947 24.576 21.1227 24.704 21.208 24.896C23.96 24.5333 25.7947 24.1387 26.712 23.712C26.8613 23.648 27.0107 23.648 27.16 23.712ZM39.8243 24.896C39.9949 24.8747 40.1443 24.9173 40.2723 25.024C40.4216 25.1307 40.5069 25.2693 40.5283 25.44C40.5496 25.6107 40.5069 25.76 40.4003 25.888C39.5256 27.0187 38.4803 27.904 37.2643 28.544C36.0483 29.184 34.9069 29.3867 33.8403 29.152C33.5416 29.8773 33.1256 30.4533 32.5923 30.88C32.0589 31.2853 31.5043 31.488 30.9283 31.488H30.8963C30.3203 31.4667 29.8083 31.2747 29.3603 30.912C28.9336 30.528 28.6349 30.0053 28.4642 29.344C28.1869 28.2987 28.2402 27.3067 28.6242 26.368C28.9869 25.408 29.5203 24.704 30.2243 24.256C30.3736 24.1493 30.5443 24.128 30.7363 24.192C30.9283 23.7227 31.1949 23.36 31.5363 23.104C31.8989 22.848 32.2723 22.752 32.6562 22.816C32.8696 22.8587 33.0616 22.9547 33.2323 23.104C33.4243 23.232 33.6056 23.4453 33.7763 23.744C33.9683 24.0427 34.1069 24.5013 34.1923 25.12C34.2776 25.7387 34.2989 26.4747 34.2563 27.328C34.2349 27.5413 34.2029 27.7547 34.1603 27.968C34.9709 28.1387 35.8669 27.936 36.8483 27.36C37.8509 26.784 38.7043 26.0373 39.4083 25.12C39.5149 24.992 39.6536 24.9173 39.8243 24.896ZM30.9283 30.24C31.2269 30.24 31.5363 30.1013 31.8563 29.824C32.1976 29.5467 32.4749 29.1733 32.6883 28.704C31.3016 27.936 30.5763 26.8907 30.5123 25.568C30.0856 25.9733 29.7869 26.5173 29.6163 27.2C29.4669 27.8827 29.4776 28.48 29.6483 28.992C29.8829 29.824 30.3096 30.24 30.9283 30.24ZM33.0083 27.264C33.0509 26.752 33.0509 26.3147 33.0083 25.952C32.9869 25.568 32.9549 25.2587 32.9123 25.024C32.8696 24.7893 32.8163 24.5973 32.7523 24.448C32.6883 24.2987 32.6243 24.192 32.5603 24.128C32.5176 24.064 32.4856 24.032 32.4643 24.032H32.4323C32.3469 24.032 32.2403 24.1067 32.1123 24.256C31.9843 24.384 31.8883 24.5653 31.8243 24.8C31.6963 25.248 31.7176 25.7067 31.8883 26.176C32.0589 26.6453 32.4323 27.072 33.0083 27.456C33.0083 27.392 33.0083 27.328 33.0083 27.264ZM50.0743 24.896C50.2449 24.8747 50.3943 24.9173 50.5223 25.024C50.6716 25.1307 50.7569 25.2693 50.7783 25.44C50.7996 25.6107 50.7569 25.76 50.6503 25.888C49.7756 27.0187 48.7303 27.904 47.5143 28.544C46.2983 29.184 45.1569 29.3867 44.0903 29.152C43.7916 29.8773 43.3756 30.4533 42.8423 30.88C42.3089 31.2853 41.7543 31.488 41.1783 31.488H41.1463C40.5703 31.4667 40.0583 31.2747 39.6103 30.912C39.1836 30.528 38.8849 30.0053 38.7142 29.344C38.4369 28.2987 38.4902 27.3067 38.8742 26.368C39.2369 25.408 39.7703 24.704 40.4743 24.256C40.6236 24.1493 40.7943 24.128 40.9863 24.192C41.1783 23.7227 41.4449 23.36 41.7863 23.104C42.1489 22.848 42.5223 22.752 42.9062 22.816C43.1196 22.8587 43.3116 22.9547 43.4823 23.104C43.6743 23.232 43.8556 23.4453 44.0263 23.744C44.2183 24.0427 44.3569 24.5013 44.4423 25.12C44.5276 25.7387 44.5489 26.4747 44.5063 27.328C44.4849 27.5413 44.4529 27.7547 44.4103 27.968C45.2209 28.1387 46.1169 27.936 47.0983 27.36C48.1009 26.784 48.9543 26.0373 49.6583 25.12C49.7649 24.992 49.9036 24.9173 50.0743 24.896ZM41.1783 30.24C41.4769 30.24 41.7863 30.1013 42.1063 29.824C42.4476 29.5467 42.7249 29.1733 42.9383 28.704C41.5516 27.936 40.8263 26.8907 40.7623 25.568C40.3356 25.9733 40.0369 26.5173 39.8663 27.2C39.7169 27.8827 39.7276 28.48 39.8983 28.992C40.1329 29.824 40.5596 30.24 41.1783 30.24ZM43.2583 27.264C43.3009 26.752 43.3009 26.3147 43.2583 25.952C43.2369 25.568 43.2049 25.2587 43.1623 25.024C43.1196 24.7893 43.0663 24.5973 43.0023 24.448C42.9383 24.2987 42.8743 24.192 42.8103 24.128C42.7676 24.064 42.7356 24.032 42.7143 24.032H42.6823C42.5969 24.032 42.4903 24.1067 42.3623 24.256C42.2343 24.384 42.1383 24.5653 42.0743 24.8C41.9463 25.248 41.9676 25.7067 42.1383 26.176C42.3089 26.6453 42.6823 27.072 43.2583 27.456C43.2583 27.392 43.2583 27.328 43.2583 27.264ZM62.8523 5.28C63.4069 5.83467 63.1296 7.79733 62.0203 11.168C61.9349 11.424 61.8176 11.776 61.6683 12.224C61.1989 13.6533 60.8149 14.7947 60.5163 15.648C60.2176 16.5013 59.7483 17.696 59.1083 19.232C58.4683 20.768 57.7749 22.24 57.0283 23.648C56.4096 26.592 55.8229 29.728 55.2683 33.056C54.3083 38.752 53.7963 42.6133 53.7323 44.64C53.9029 44.576 54.0736 44.576 54.2443 44.64C54.3936 44.7253 54.4896 44.8427 54.5323 44.992C54.5963 45.1627 54.5963 45.3227 54.5323 45.472C54.1483 46.2827 53.7643 46.688 53.3802 46.688C53.2949 46.688 53.2096 46.6773 53.1243 46.656C52.8896 46.5707 52.7189 46.4107 52.6123 46.176C52.5269 45.9627 52.4843 45.4933 52.4843 44.768C52.5056 44.064 52.6016 43.0187 52.7723 41.632C53.0283 39.4133 53.4549 36.4907 54.0523 32.864C54.3936 30.88 54.7456 28.9493 55.1083 27.072C54.4469 28.1387 53.7429 29.2053 52.9963 30.272C51.5883 32.32 50.3616 33.056 49.3163 32.48C48.6336 31.9893 48.3029 31.1253 48.3242 29.888C48.3456 28.6293 48.6549 27.36 49.2523 26.08C49.9563 24.5867 50.7883 23.488 51.7483 22.784C52.7083 22.08 53.5616 21.8453 54.3083 22.08C55.0549 22.2933 55.4816 22.848 55.5883 23.744C55.6949 23.5733 55.7909 23.4027 55.8763 23.232C57.0069 17.8773 58.1376 13.5787 59.2683 10.336C60.4203 7.072 61.3589 5.32267 62.0843 5.088C62.3829 4.98133 62.6389 5.04533 62.8523 5.28ZM52.0043 29.568C53.0069 28.1173 53.9243 26.6667 54.7563 25.216C54.4363 25.1093 54.3083 24.896 54.3723 24.576C54.4576 23.7867 54.3189 23.3387 53.9563 23.232C53.9136 23.232 53.8496 23.232 53.7643 23.232C53.3163 23.232 52.7616 23.5307 52.1003 24.128C51.4603 24.704 50.8843 25.536 50.3723 26.624C50.0309 27.328 49.7963 28.0533 49.6683 28.8C49.5616 29.5253 49.5403 30.1227 49.6043 30.592C49.6683 31.04 49.7856 31.3067 49.9563 31.392C50.0203 31.4347 50.1163 31.4347 50.2443 31.392C50.3936 31.328 50.6283 31.1467 50.9483 30.848C51.2683 30.528 51.6203 30.1013 52.0043 29.568ZM60.8363 10.784C61.2629 9.48267 61.5723 8.37333 61.7643 7.456C60.7189 9.65333 59.5989 13.0773 58.4043 17.728C59.0016 16.2773 59.6949 14.3253 60.4843 11.872C60.6336 11.4027 60.7509 11.04 60.8363 10.784ZM74.4835 24.704C74.6542 24.7253 74.7822 24.8107 74.8675 24.96C74.9742 25.088 75.0062 25.2373 74.9635 25.408C74.9208 25.5787 74.8355 25.7067 74.7075 25.792C70.9315 28.2453 67.8382 30.688 65.4275 33.12C64.1688 40.6507 62.7928 46.7627 61.2995 51.456C59.5288 56.9813 57.8115 59.9787 56.1475 60.448C55.9982 60.4907 55.8382 60.512 55.6675 60.512C55.1768 60.512 54.7502 60.2987 54.3875 59.872C53.7902 59.104 53.4702 57.8347 53.4275 56.064C53.3635 54.2933 53.6408 52.2027 54.2595 49.792C54.8568 47.3813 55.7315 45.056 56.8835 42.816C58.9102 38.9547 61.3848 35.52 64.3075 32.512C64.6275 30.5067 64.9475 28.4053 65.2675 26.208C64.6062 27.2107 63.9875 28.0533 63.4115 28.736C62.4728 29.888 61.5768 30.208 60.7235 29.696C60.0195 29.2693 59.6462 28.384 59.6035 27.04C59.5608 25.6747 59.8702 24.192 60.5315 22.592C60.5955 22.4427 60.7022 22.336 60.8515 22.272C61.0222 22.208 61.1822 22.208 61.3315 22.272C61.4808 22.336 61.5875 22.4427 61.6515 22.592C61.7368 22.7413 61.7475 22.9013 61.6835 23.072C61.1075 24.6293 60.8195 25.8987 60.8195 26.88C60.8408 27.8613 61.0222 28.448 61.3635 28.64C61.5982 28.7893 61.9608 28.5653 62.4515 27.968C63.5182 26.688 64.6168 25.0667 65.7475 23.104C65.9182 22.8053 66.1635 22.72 66.4835 22.848C66.8035 22.9547 66.9422 23.168 66.8995 23.488C66.5368 26.1547 66.1635 28.6827 65.7795 31.072C67.9768 29.024 70.7288 26.9227 74.0355 24.768C74.1635 24.6827 74.3128 24.6613 74.4835 24.704ZM60.1155 51.104C61.4808 46.8373 62.7502 41.3867 63.9235 34.752C61.6195 37.312 59.6355 40.192 57.9715 43.392C57.0542 45.1413 56.3288 46.9227 55.7955 48.736C55.2408 50.5707 54.8995 52.1707 54.7715 53.536C54.6435 54.9013 54.6328 56.0747 54.7395 57.056C54.8462 58.0373 55.0488 58.7093 55.3475 59.072C55.4968 59.2427 55.6462 59.3067 55.7955 59.264C55.9022 59.2427 56.0195 59.1893 56.1475 59.104C56.2755 59.0187 56.4888 58.7947 56.7875 58.432C57.0862 58.0907 57.3848 57.6427 57.6835 57.088C57.9822 56.5547 58.3555 55.7653 58.8035 54.72C59.2515 53.6747 59.6888 52.4693 60.1155 51.104ZM97.4915 24.64C97.6622 24.6827 97.7902 24.7787 97.8755 24.928C97.9822 25.056 98.0142 25.2053 97.9715 25.376C97.9502 25.5467 97.8648 25.6747 97.7155 25.76C93.8755 28.256 90.8568 30.4427 88.6595 32.32C87.3155 40.4267 85.7475 46.592 83.9555 50.816C82.1635 55.04 80.4142 57.3867 78.7075 57.856C78.4728 57.92 78.2488 57.952 78.0355 57.952C77.3528 57.952 76.7662 57.6533 76.2755 57.056C75.3582 55.904 75.0275 54.0587 75.2835 51.52C75.5822 48.7893 76.5102 45.9947 78.0675 43.136C80.3502 39.0187 83.4968 35.2 87.5075 31.68C87.8062 29.8667 88.0835 27.968 88.3395 25.984C87.6568 27.008 87.0275 27.904 86.4515 28.672C85.5555 29.8453 84.7875 30.336 84.1475 30.144C83.6355 29.9947 83.3368 29.5253 83.2515 28.736C83.1875 27.9893 83.2942 27.0293 83.5715 25.856C83.8702 24.6613 84.3502 23.488 85.0115 22.336C85.6728 21.184 86.3982 20.416 87.1875 20.032C88.2755 19.4773 89.3315 19.6587 90.3555 20.576C90.4835 20.704 90.5475 20.8533 90.5475 21.024C90.5688 21.1733 90.5155 21.312 90.3875 21.44C90.2808 21.568 90.1422 21.6427 89.9715 21.664C89.8008 21.664 89.6515 21.6107 89.5235 21.504C88.7555 20.8 87.9768 20.8 87.1875 21.504C86.2915 22.3147 85.5768 23.6053 85.0435 25.376C84.5102 27.1253 84.3395 28.2987 84.5315 28.896C84.7662 28.7467 85.0755 28.4267 85.4595 27.936C86.8248 26.144 87.9235 24.512 88.7555 23.04C88.9262 22.7627 89.1715 22.6773 89.4915 22.784C89.8115 22.8693 89.9502 23.0827 89.9075 23.424C89.6088 25.8773 89.2888 28.224 88.9475 30.464C90.9315 28.8427 93.6302 26.9333 97.0435 24.736C97.1928 24.6293 97.3422 24.5973 97.4915 24.64ZM78.3555 56.672C78.9315 56.5227 79.5608 56.0107 80.2435 55.136C80.9048 54.2613 81.6302 52.9813 82.4195 51.296C83.2088 49.6107 84.0195 47.2427 84.8515 44.192C85.7048 41.1413 86.4835 37.632 87.1875 33.664C83.8168 36.7787 81.1395 40.1387 79.1555 43.744C78.5155 44.896 77.9928 46.048 77.5875 47.2C77.1608 48.352 76.8622 49.3973 76.6915 50.336C76.5208 51.2747 76.4355 52.1387 76.4355 52.928C76.4355 53.7387 76.5102 54.4213 76.6595 54.976C76.8088 55.5307 77.0008 55.968 77.2355 56.288C77.5555 56.672 77.9288 56.8 78.3555 56.672ZM107.543 24.896C107.714 24.8747 107.863 24.9173 107.991 25.024C108.14 25.1307 108.226 25.2693 108.247 25.44C108.268 25.6107 108.226 25.76 108.119 25.888C107.244 27.0187 106.199 27.904 104.983 28.544C103.767 29.184 102.626 29.3867 101.559 29.152C101.26 29.8773 100.844 30.4533 100.311 30.88C99.7777 31.2853 99.223 31.488 98.647 31.488H98.615C98.039 31.4667 97.527 31.2747 97.079 30.912C96.6523 30.528 96.3537 30.0053 96.183 29.344C95.9057 28.2987 95.959 27.3067 96.343 26.368C96.7057 25.408 97.239 24.704 97.943 24.256C98.0923 24.1493 98.263 24.128 98.455 24.192C98.647 23.7227 98.9137 23.36 99.255 23.104C99.6177 22.848 99.991 22.752 100.375 22.816C100.588 22.8587 100.78 22.9547 100.951 23.104C101.143 23.232 101.324 23.4453 101.495 23.744C101.687 24.0427 101.826 24.5013 101.911 25.12C101.996 25.7387 102.018 26.4747 101.975 27.328C101.954 27.5413 101.922 27.7547 101.879 27.968C102.69 28.1387 103.586 27.936 104.567 27.36C105.57 26.784 106.423 26.0373 107.127 25.12C107.234 24.992 107.372 24.9173 107.543 24.896ZM98.647 30.24C98.9457 30.24 99.255 30.1013 99.575 29.824C99.9163 29.5467 100.194 29.1733 100.407 28.704C99.0203 27.936 98.295 26.8907 98.231 25.568C97.8043 25.9733 97.5057 26.5173 97.335 27.2C97.1857 27.8827 97.1963 28.48 97.367 28.992C97.6017 29.824 98.0283 30.24 98.647 30.24ZM100.727 27.264C100.77 26.752 100.77 26.3147 100.727 25.952C100.706 25.568 100.674 25.2587 100.631 25.024C100.588 24.7893 100.535 24.5973 100.471 24.448C100.407 24.2987 100.343 24.192 100.279 24.128C100.236 24.064 100.204 24.032 100.183 24.032H100.151C100.066 24.032 99.959 24.1067 99.831 24.256C99.703 24.384 99.607 24.5653 99.543 24.8C99.415 25.248 99.4363 25.7067 99.607 26.176C99.7777 26.6453 100.151 27.072 100.727 27.456C100.727 27.392 100.727 27.328 100.727 27.264ZM117.793 24.896C117.964 24.8747 118.113 24.9173 118.241 25.024C118.39 25.1307 118.476 25.2693 118.497 25.44C118.518 25.6107 118.476 25.76 118.369 25.888C117.494 27.0187 116.449 27.904 115.233 28.544C114.017 29.184 112.876 29.3867 111.809 29.152C111.51 29.8773 111.094 30.4533 110.561 30.88C110.028 31.2853 109.473 31.488 108.897 31.488H108.865C108.289 31.4667 107.777 31.2747 107.329 30.912C106.902 30.528 106.604 30.0053 106.433 29.344C106.156 28.2987 106.209 27.3067 106.593 26.368C106.956 25.408 107.489 24.704 108.193 24.256C108.342 24.1493 108.513 24.128 108.705 24.192C108.897 23.7227 109.164 23.36 109.505 23.104C109.868 22.848 110.241 22.752 110.625 22.816C110.838 22.8587 111.03 22.9547 111.201 23.104C111.393 23.232 111.574 23.4453 111.745 23.744C111.937 24.0427 112.076 24.5013 112.161 25.12C112.246 25.7387 112.268 26.4747 112.225 27.328C112.204 27.5413 112.172 27.7547 112.129 27.968C112.94 28.1387 113.836 27.936 114.817 27.36C115.82 26.784 116.673 26.0373 117.377 25.12C117.484 24.992 117.622 24.9173 117.793 24.896ZM108.897 30.24C109.196 30.24 109.505 30.1013 109.825 29.824C110.166 29.5467 110.444 29.1733 110.657 28.704C109.27 27.936 108.545 26.8907 108.481 25.568C108.054 25.9733 107.756 26.5173 107.585 27.2C107.436 27.8827 107.446 28.48 107.617 28.992C107.852 29.824 108.278 30.24 108.897 30.24ZM110.977 27.264C111.02 26.752 111.02 26.3147 110.977 25.952C110.956 25.568 110.924 25.2587 110.881 25.024C110.838 24.7893 110.785 24.5973 110.721 24.448C110.657 24.2987 110.593 24.192 110.529 24.128C110.486 24.064 110.454 24.032 110.433 24.032H110.401C110.316 24.032 110.209 24.1067 110.081 24.256C109.953 24.384 109.857 24.5653 109.793 24.8C109.665 25.248 109.686 25.7067 109.857 26.176C110.028 26.6453 110.401 27.072 110.977 27.456C110.977 27.392 110.977 27.328 110.977 27.264ZM130.571 5.28C131.126 5.83467 130.848 7.79733 129.739 11.168C129.654 11.424 129.536 11.776 129.387 12.224C128.918 13.6533 128.534 14.7947 128.235 15.648C127.936 16.5013 127.467 17.696 126.827 19.232C126.187 20.768 125.494 22.24 124.747 23.648C124.128 26.592 123.542 29.728 122.987 33.056C122.027 38.752 121.515 42.6133 121.451 44.64C121.622 44.576 121.792 44.576 121.963 44.64C122.112 44.7253 122.208 44.8427 122.251 44.992C122.315 45.1627 122.315 45.3227 122.251 45.472C121.867 46.2827 121.483 46.688 121.099 46.688C121.014 46.688 120.928 46.6773 120.843 46.656C120.608 46.5707 120.438 46.4107 120.331 46.176C120.246 45.9627 120.203 45.4933 120.203 44.768C120.224 44.064 120.32 43.0187 120.491 41.632C120.747 39.4133 121.174 36.4907 121.771 32.864C122.112 30.88 122.464 28.9493 122.827 27.072C122.166 28.1387 121.462 29.2053 120.715 30.272C119.307 32.32 118.08 33.056 117.035 32.48C116.352 31.9893 116.022 31.1253 116.043 29.888C116.064 28.6293 116.374 27.36 116.971 26.08C117.675 24.5867 118.507 23.488 119.467 22.784C120.427 22.08 121.28 21.8453 122.027 22.08C122.774 22.2933 123.2 22.848 123.307 23.744C123.414 23.5733 123.51 23.4027 123.595 23.232C124.726 17.8773 125.856 13.5787 126.987 10.336C128.139 7.072 129.078 5.32267 129.803 5.088C130.102 4.98133 130.358 5.04533 130.571 5.28ZM119.723 29.568C120.726 28.1173 121.643 26.6667 122.475 25.216C122.155 25.1093 122.027 24.896 122.091 24.576C122.176 23.7867 122.038 23.3387 121.675 23.232C121.632 23.232 121.568 23.232 121.483 23.232C121.035 23.232 120.48 23.5307 119.819 24.128C119.179 24.704 118.603 25.536 118.091 26.624C117.75 27.328 117.515 28.0533 117.387 28.8C117.28 29.5253 117.259 30.1227 117.323 30.592C117.387 31.04 117.504 31.3067 117.675 31.392C117.739 31.4347 117.835 31.4347 117.963 31.392C118.112 31.328 118.347 31.1467 118.667 30.848C118.987 30.528 119.339 30.1013 119.723 29.568ZM128.555 10.784C128.982 9.48267 129.291 8.37333 129.483 7.456C128.438 9.65333 127.318 13.0773 126.123 17.728C126.72 16.2773 127.414 14.3253 128.203 11.872C128.352 11.4027 128.47 11.04 128.555 10.784ZM140.73 24.512C140.901 24.4907 141.05 24.544 141.178 24.672C141.306 24.7787 141.381 24.9173 141.402 25.088C141.424 25.2587 141.37 25.408 141.242 25.536C137.104 30.3573 134.736 33.1413 134.138 33.888C133.776 34.3573 133.424 34.816 133.082 35.264C133.381 36.48 133.402 37.6533 133.146 38.784C132.89 39.9147 132.528 40.8853 132.058 41.696C131.589 42.5067 131.034 43.168 130.394 43.68C129.797 44.192 129.242 44.448 128.73 44.448C128.41 44.448 128.144 44.3413 127.93 44.128C126.8 43.04 128.069 40 131.738 35.008C131.504 34.1973 131.13 33.408 130.618 32.64C129.552 31.04 128.762 29.7067 128.25 28.64C127.738 27.5733 127.504 26.6027 127.546 25.728C127.589 24.8747 127.813 24.1067 128.218 23.424C128.645 22.7413 129.21 22.1867 129.914 21.76C130.512 21.3973 131.141 21.184 131.802 21.12C132.464 21.056 133.072 21.152 133.626 21.408C133.776 21.4933 133.872 21.6213 133.914 21.792C133.978 21.9413 133.968 22.0907 133.882 22.24C133.818 22.3893 133.701 22.496 133.53 22.56C133.381 22.6027 133.232 22.592 133.082 22.528C132.314 22.1653 131.472 22.2613 130.554 22.816C129.445 23.4773 128.858 24.4693 128.794 25.792C128.752 26.496 128.976 27.3387 129.466 28.32C129.957 29.28 130.682 30.4853 131.642 31.936C132.048 32.5547 132.378 33.184 132.634 33.824C132.805 33.6107 132.986 33.376 133.178 33.12C133.776 32.3733 136.154 29.5787 140.314 24.736C140.421 24.608 140.56 24.5333 140.73 24.512ZM130.778 41.408C131.717 39.9787 132.133 38.4107 132.026 36.704C131.13 37.984 130.405 39.1253 129.85 40.128C129.317 41.1307 128.986 41.8453 128.858 42.272C128.752 42.72 128.72 43.0293 128.762 43.2C128.954 43.1787 129.242 43.008 129.626 42.688C130.01 42.3893 130.394 41.9627 130.778 41.408Z"/>
            </svg>
            </a>
        </div>
        <div class="flex items-center">
            <a id="search" class="mr-3" href="/src/landing/search/">
            <svg class="w-[22px] h-[22px] sm:w-[24px] sm:h-[24px] " viewBox="0 0 24 24"><path fill="currentColor" d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 0 0 1.48-5.34c-.47-2.78-2.79-5-5.59-5.34a6.505 6.505 0 0 0-7.27 7.27c.34 2.8 2.56 5.12 5.34 5.59a6.5 6.5 0 0 0 5.34-1.48l.27.28v.79l4.25 4.25c.41.41 1.08.41 1.49 0c.41-.41.41-1.08 0-1.49L15.5 14zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14z"/></svg>
            </a>
            <a id="bag" class="mr-3 relative" href=<?php
            if(isset($_SESSION['email'])){
                echo "/src/landing/order/";
            }else{
                echo "/src/landing/login/";
            }
            ?>>
                <svg class="w-[20px] h-[20px] sm:w-[22px] sm:h-[22px] " viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M3.977 9.84A2 2 0 0 1 5.971 8h12.058a2 2 0 0 1 1.994 1.84l.803 10A2 2 0 0 1 18.833 22H5.167a2 2 0 0 1-1.993-2.16l.803-10Z"/><path d="M16 11V6a4 4 0 0 0-4-4v0a4 4 0 0 0-4 4v5"/></g></svg>
                <?php
                $stmt = $con->prepare("SELECT * FROM cart WHERE EXISTS (SELECT id FROM product WHERE cart.product_id = product.id and cart.user_email = ?)");
                if (isset($_SESSION['email'])) {
                    $stmt->execute([$_SESSION['email']]);
                }
                $result = $stmt->fetchAll();
                ?>
                    <div id="countOrder" class="absolute -top-1 -right-[4px] bg-black text-white text-[0.6rem] rounded-full flex <?php if($stmt->rowCount() == 0){echo "hidden";}  ?> justify-center items-center w-[15px] h-[15px]"> <?php
                        echo $stmt->rowCount() ?>
                    </div> <?php
                ?>
                
            </a>
            <a id="heart" class="mr-3" href="/src/landing/wishlist/">
                <svg class="w-[20px] h-[20px] sm:w-[22px] sm:h-[22px] " viewBox="0 0 24 24"><path fill="currentColor" d="m12.1 18.55l-.1.1l-.11-.1C7.14 14.24 4 11.39 4 8.5C4 6.5 5.5 5 7.5 5c1.54 0 3.04 1 3.57 2.36h1.86C13.46 6 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5c0 2.89-3.14 5.74-7.9 10.05M16.5 3c-1.74 0-3.41.81-4.5 2.08C10.91 3.81 9.24 3 7.5 3C4.42 3 2 5.41 2 8.5c0 3.77 3.4 6.86 8.55 11.53L12 21.35l1.45-1.32C18.6 15.36 22 12.27 22 8.5C22 5.41 19.58 3 16.5 3Z"/></svg>
            </a>
            <?php
                if(!isset($_SESSION['email'])){?>
                    <a id="login" class="mr-3" href="/src/landing/login/">
                        <svg class="w-[20px] h-[20px] sm:w-[22px] sm:h-[22px] " viewBox="0 0 24 24"><path fill="currentColor" d="M4 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H4zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6s6 2.685 6 6s-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4s-4 1.79-4 4s1.79 4 4 4z"/></svg>
                    </a><?php
                    
                }else{?>
                <div id="logout" class="mr-3 cursor-pointer" href="" onclick="logout()">
                    <svg class="w-[20px] h-[20px] sm:w-[22px] sm:h-[22px] " viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12h-9.5m7.5 3l3-3l-3-3m-5-2V6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h5a2 2 0 0 0 2-2v-1"/></svg>
                    
                </div><?php }
            ?>
            <div class="cursor-pointer">
                <svg id="nav-ham" class="z-50 w-[20px] h-[20px] sm:w-[22px] sm:h-[22px] " viewBox="0 0 16 16"><path fill="currentColor" d="M2 3.75A.75.75 0 0 1 2.75 3h10.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 3.75Zm0 4A.75.75 0 0 1 2.75 7h10.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 7.75Zm0 4a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Z"/></svg>
            </div>
            
        </div>
    </nav>
    </div>
    <div class="fixed top-0 right-0 bg-[#fff] w-full min-[400px]:w-[300px] border h-full border-l-gray-300 p-4 test z-[1000] overflow-auto" id="nav-sidebar">
        
        <div class="flex justify-end mb-4">
        <svg class="h-5 w-5 cursor-pointer" id="nav-cross" viewBox="0 0 15 15"><path fill="currentColor" d="M3.64 2.27L7.5 6.13l3.84-3.84A.92.92 0 0 1 12 2a1 1 0 0 1 1 1a.9.9 0 0 1-.27.66L8.84 7.5l3.89 3.89A.9.9 0 0 1 13 12a1 1 0 0 1-1 1a.92.92 0 0 1-.69-.27L7.5 8.87l-3.85 3.85A.92.92 0 0 1 3 13a1 1 0 0 1-1-1a.9.9 0 0 1 .27-.66L6.16 7.5L2.27 3.61A.9.9 0 0 1 2 3a1 1 0 0 1 1-1c.24.003.47.1.64.27Z"/></svg>
        </div>
        <div id="category" class="flex items-center cursor-pointer select-none">
            <div class=" bg-sky-100 p-2 rounded-md mr-2">
                <svg class="h-6 w-6 text-sky-400" viewBox="0 0 24 24"><path fill="currentColor" d="M6.5 11L12 2l5.5 9Zm11 11q-1.875 0-3.188-1.312Q13 19.375 13 17.5q0-1.875 1.312-3.188Q15.625 13 17.5 13q1.875 0 3.188 1.312Q22 15.625 22 17.5q0 1.875-1.312 3.188Q19.375 22 17.5 22ZM3 21.5v-8h8v8ZM17.5 20q1.05 0 1.775-.725Q20 18.55 20 17.5q0-1.05-.725-1.775Q18.55 15 17.5 15q-1.05 0-1.775.725Q15 16.45 15 17.5q0 1.05.725 1.775Q16.45 20 17.5 20ZM5 19.5h4v-4H5ZM10.05 9h3.9L12 5.85ZM12 9Zm-3 6.5Zm8.5 2Z"/></svg>
            </div>
            <div class="flex justify-between items-center w-full">
                <div>
                    <div class="font-medium text-lg">ประเภท</div>
                    <div class="text-xs text-gray-500">
                        เเสดงประเภททั้งหมด
                    </div>
                </div>
                <svg id="iconCategory" class="h-6 w-6 text-sky-400  " viewBox="0 0 24 24"><path fill="currentColor" d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6l-6-6l1.41-1.41z"/></svg>
                
            </div>
        </div>
        <div id="showCategory" class="hidden mt-2 ">
            <div class="flex flex-col border-l-2 border-l-sky-300 pl-2">
                <a  href="/src/landing/type/mirror/">กระจกเงา</a>
                <a class="mt-1" href="/src/landing/type/board/">กระดาน</a>
                <a class="mt-1" href="/src/landing/type/tree/">กระถางดอกไม้และต้นไม้</a>
                <a class="mt-1" href="/src/landing/type/box/">กล่องเก็บของและตะกร้า</a>
                <a class="mt-1" href="/src/landing/type/flower/">ดอกไม้ประดิษฐ์และดอกไม้แห้ง</a>
                <a class="mt-1" href="/src/landing/type/picture/">รูปภาพและกรอบรูป</a>
                <a class="mt-1" href="/src/landing/type/incense/">เครื่องหอม</a>
                <a class="mt-1" href="/src/landing/type/plate/">แจกันและจานชาม</a>
            </div>
        </div>
        <a href="/src/landing/products/" class="flex items-center mb-4 group mt-4">
            <div class=" bg-cyan-100 p-2 rounded-md mr-2">
                <svg class="h-6 w-6 text-cyan-400" viewBox="0 0 48 48"><g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="4"><path d="M44 14L24 4L4 14v20l20 10l20-10V14Z"/><path stroke-linecap="round" d="m4 14l20 10m0 20V24m20-10L24 24M34 9L14 19"/></g></svg> 
            </div>
            <div class="flex justify-between items-center w-full">
                <div>
                    <div class="font-medium text-lg">ผลิตภัณฑ์</div>
                    <div class="text-xs text-gray-500">
                        เเสดงผลิตภัณฑ์ทั้งหมด
                    </div>
                </div>
                <svg class="h-6 w-6 text-cyan-400 transition -translate-x-0.5 duration-300 opacity-0 group-hover:opacity-100 group-hover:translate-x-0.5" viewBox="0 0 24 24"><path fill="currentColor" d="M13.3 17.275q-.3-.3-.288-.725q.013-.425.313-.725L16.15 13H5q-.425 0-.713-.288Q4 12.425 4 12t.287-.713Q4.575 11 5 11h11.15L13.3 8.15q-.3-.3-.3-.713q0-.412.3-.712t.713-.3q.412 0 .712.3L19.3 11.3q.15.15.213.325q.062.175.062.375t-.062.375q-.063.175-.213.325l-4.6 4.6q-.275.275-.687.275q-.413 0-.713-.3Z"/></svg>
            </div>
        </a>
        <a href="/src/landing/sampleroom/" class="flex items-center mb-4 group">
            <div class=" bg-indigo-100 p-2 rounded-md mr-2">
            <svg class="h-6 w-6 text-indigo-400" viewBox="0 0 24 24"><path fill="currentColor" d="M6 19h3v-6h6v6h3v-9l-6-4.5L6 10Zm-2 2V9l8-6l8 6v12h-7v-6h-2v6Zm8-8.75Z"/></svg>
            </div>
            <div class="flex justify-between items-center w-full">
                <div>
                    <div class="font-medium text-lg">ห้องตัวอย่าง</div>
                    <div class="text-xs text-gray-500">
                    ตัวอย่างเเละลักษณะของห้อง
                    </div>
                </div>
                <svg class="h-6 w-6 text-indigo-400 transition -translate-x-0.5 duration-300 opacity-0 group-hover:opacity-100 group-hover:translate-x-0.5" viewBox="0 0 24 24"><path fill="currentColor" d="M13.3 17.275q-.3-.3-.288-.725q.013-.425.313-.725L16.15 13H5q-.425 0-.713-.288Q4 12.425 4 12t.287-.713Q4.575 11 5 11h11.15L13.3 8.15q-.3-.3-.3-.713q0-.412.3-.712t.713-.3q.412 0 .712.3L19.3 11.3q.15.15.213.325q.062.175.062.375t-.062.375q-.063.175-.213.325l-4.6 4.6q-.275.275-.687.275q-.413 0-.713-.3Z"/></svg>
            </div>
        </a>
        <a href="/src/landing/products/bestseller/" class="flex items-center mb-4 group">
            <div class=" bg-violet-100 p-2 rounded-md mr-2">
            <svg class="h-6 w-6 text-violet-400" viewBox="0 0 24 24"><path fill="currentColor" d="M7.25 9.925V17.5h8.45l2.55-5.95V9.5h-5.6l.6-3.4v-.6l-1-1ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Zm0-10Zm0 8q3.325 0 5.663-2.337Q20 15.325 20 12t-2.337-5.663Q15.325 4 12 4T6.338 6.337Q4 8.675 4 12t2.338 5.663Q8.675 20 12 20Z"/></svg>
            </div>
            <div class="flex justify-between items-center w-full">
                <div>
                    <div class="font-medium text-lg">สินค้าเเนะนำ</div>
                    <div class="text-xs text-gray-500">
                    สินค้าที่ขายดีที่สุดของร้าน
                    </div>
                </div>
                <svg class="h-6 w-6 text-violet-400 transition -translate-x-0.5 duration-300 opacity-0 group-hover:opacity-100 group-hover:translate-x-0.5" viewBox="0 0 24 24"><path fill="currentColor" d="M13.3 17.275q-.3-.3-.288-.725q.013-.425.313-.725L16.15 13H5q-.425 0-.713-.288Q4 12.425 4 12t.287-.713Q4.575 11 5 11h11.15L13.3 8.15q-.3-.3-.3-.713q0-.412.3-.712t.713-.3q.412 0 .712.3L19.3 11.3q.15.15.213.325q.062.175.062.375t-.062.375q-.063.175-.213.325l-4.6 4.6q-.275.275-.687.275q-.413 0-.713-.3Z"/></svg>
            </div>
        </a>
        <a href="/src/landing/article/" class="flex items-center group">
            <div class=" bg-pink-100 p-2 rounded-md mr-2">
            <svg class="h-6 w-6 text-pink-400" viewBox="0 0 24 24"><path fill="currentColor" d="M7 17h7v-2H7Zm0-4h10v-2H7Zm0-4h10V7H7ZM5 21q-.825 0-1.413-.587Q3 19.825 3 19V5q0-.825.587-1.413Q4.175 3 5 3h14q.825 0 1.413.587Q21 4.175 21 5v14q0 .825-.587 1.413Q19.825 21 19 21Zm0-2h14V5H5v14ZM5 5v14V5Z"/></svg>
            </div>
            <div class="flex justify-between items-center w-full">
                <div>
                    <div class="font-medium text-lg">บทความ</div>
                    <div class="text-xs text-gray-500">
                    ความหมายของสีเเละห้องต่าง ๆ
                    </div>
                </div>
                <svg class="h-6 w-6 text-pink-400 transition -translate-x-0.5 duration-300 opacity-0 group-hover:opacity-100 group-hover:translate-x-0.5" viewBox="0 0 24 24"><path fill="currentColor" d="M13.3 17.275q-.3-.3-.288-.725q.013-.425.313-.725L16.15 13H5q-.425 0-.713-.288Q4 12.425 4 12t.287-.713Q4.575 11 5 11h11.15L13.3 8.15q-.3-.3-.3-.713q0-.412.3-.712t.713-.3q.412 0 .712.3L19.3 11.3q.15.15.213.325q.062.175.062.375t-.062.375q-.063.175-.213.325l-4.6 4.6q-.275.275-.687.275q-.413 0-.713-.3Z"/></svg>
            </div>
        </a>
    </div>
    <div id="wide" class="hidden fixed top-0 left-0 bottom-0 right-0 z-[555] bg-black/[0.4]"></div>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <link
  rel="stylesheet"
  href="https://unpkg.com/tippy.js@6/animations/perspective-extreme.css"
/>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        
        tippy('#search', {
            content: 'ค้นหา',
            animation: 'perspective-extreme',
        });
        tippy('#bag', {
            content: 'ตะกร้า',
            animation: 'perspective-extreme',
        });
        tippy('#heart', {
            content: 'สินค้าที่ถูกใจ',
            animation: 'perspective-extreme',
        });
        tippy('#login', {
            content: 'เข้าสู่ระบบ',
            animation: 'perspective-extreme',
        });
        tippy('#logout', {
            content: 'ออกจากระบบ',
            animation: 'perspective-extreme',
        });
    </script>
    <script>
        let navham = document.getElementById("nav-ham"),
        cross = document.getElementById("nav-cross"),
        navsidebar = document.getElementById("nav-sidebar"),
        wide = document.getElementById("wide")
        navham.addEventListener("click", ()=>{
            navsidebar.style.transform = "translateX(0%)"
            wide.classList.remove("hidden")
        })
        wide.addEventListener("click", ()=>{
            navsidebar.style.transform = "translateX(100%)"
            wide.classList.add("hidden")
        })
        cross.addEventListener("click", ()=>{
            navsidebar.style.transform = "translateX(100%)"
            wide.classList.add("hidden")
        })
        async function logout(){
            await Swal.fire({
                title: 'ยินดีด้วย',
                text: 'ออกจากระบบสำเร็จเเล้ว',
                icon: 'success',
                confirmButtonText: 'รับทราบ'
                })
            window.location = "/src/component/logout.php"
        }

        let category = document.getElementById("category"),
        showCategory = document.getElementById("showCategory"),
        iconCategory = document.getElementById("iconCategory")
        countCat = 1

        category.addEventListener("click", ()=>{
            if(countCat%2 != 0 ){
                showCategory.classList.remove("hidden")
                iconCategory.classList.add("rotate-180")

            }else{
                showCategory.classList.add("hidden")
                iconCategory.classList.remove("rotate-180")
            }
            countCat++;
        })
    </script>
</body>
</html>