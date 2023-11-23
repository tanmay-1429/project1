<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&display=swap');

            body {
                background-image: linear-gradient(40deg,
                        hsl(240deg 56% 48%) 0%,
                        hsl(250deg 48% 49%) 10%,
                        hsl(260deg 40% 49%) 24%,
                        hsl(271deg 34% 50%) 42%,
                        hsl(285deg 28% 50%) 57%,
                        hsl(305deg 24% 50%) 68%,
                        hsl(325deg 29% 54%) 75%,
                        hsl(340deg 34% 58%) 81%,
                        hsl(354deg 40% 62%) 85%,
                        hsl(358deg 39% 63%) 89%,
                        hsl(353deg 31% 62%) 92%,
                        hsl(345deg 22% 61%) 94%,
                        hsl(330deg 14% 60%) 96%,
                        hsl(284deg 9% 60%) 97%,
                        hsl(232deg 12% 62%) 98%,
                        hsl(212deg 22% 61%) 99%,
                        hsl(204deg 32% 60%) 100%,
                        hsl(200deg 41% 58%) 100%);
                background-repeat: no-repeat;
                height: 99vh;
                overflow-y: hidden;
                display: flex;
                justify-content: center;
                align-items: center;
                font-family: 'Quicksand', sans-serif;
            }

            .formBox {
                padding: 15px;
                text-align: center;
                min-height: 50vh;
                min-width: 50vw;
                display: flex;
                flex-direction: column;
                background: #f8f8f885;
                border-radius: 30px;
                backdrop-filter: blur(10px);

            }

            h2 {
                margin-bottom: -10px;
            }

            p {
                font-weight: 500;
                font-size: 1.1em;
            }


            form {
                padding: 10px;
            }

            form>div {
                padding: 10px;
                position: relative;
                font-size: 1.3em;
            }

            form>div i {
                position: absolute;
                top: 22px;
                margin-left: 10px;
                opacity: 0.6;
            }

            form>div input {
                height: 2em;
                width: 70vw;
                padding-left: 40px;
                font-size: 1em;
                border-radius: 20px;
                outline: none;
                border: 1px solid #b5adad;
                background-color: #f1f1f1;
            }

            div>input:focus {
                border: 1px solid #6f6a6a;

            }

            form>div:hover>i {

                opacity: 1;
                transition: opacity 1s;
            }

            textarea {
                border: none;
                width: 70vw;
                border-radius: 20px;
                padding: 10px;
                outline: none;
                font-size: 1em;
            }

            button {
                width: 50%;
                height: 5vh;
                color: #ffffff;
                background: #00d689;
                outline: none;
                border: none;
                border-radius: 10px;
                cursor: pointer;
                font-size: 0.8em;
            }

            @media screen and (min-width:900px) {
                form>div input {
                    width: 50vw;
                }

                textarea {
                    width: 50vw;
                }
            }
        </style>

</head>

<body>
        <div class="formBox">
            <h2>Contact Us</h2>
            <p>You will hear from us at the earliest!</p>
            <form action="#">

                <div class="nameInp">
                    <i class="fa fa-user icon"></i>
                    <input type="text" placeholder="Full Name" name="name" id="name">

                </div>

                <div class="mailInp">
                    <i class="fa fa-envelope"></i>
                    <input type="email" name="mail" id="mail" placeholder="Email">
                </div>

                <div class="phoneInp">
                    <i class="fa-solid fa-phone"></i>
                    <input type="number" name="phone" id="phone" placeholder="Phone" min="100000" max="9999999999">
                </div>

                <div class="queryInp">
                    <textarea name="query" id="query" cols="30" rows="5"
                        placeholder="Any comment or your query"></textarea>
                </div>

                <div class="submitBtn">
                    <button id="btn" onclick="notif()">Send</button>
                </div>
                
            </form>
            <p class="extra">You can also contact us at 9876543210</p>
        </div>
        
    </body>

</html>