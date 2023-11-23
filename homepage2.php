<!DOCTYPE htaml>
<html lang="en">

<head>
        
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage</title>
        
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans&display=swap");
            body {
                font-family: "Open Sans", sans-serif;
                margin: 0;
            }
            a {
                text-decoration: none;
                color:#000;
            }
            a:hover {
                color: rgb(218, 50, 50);
            }
            .site-header {
                border-bottom: 5px solid #4d0404;
                background-color: rgb(0, 191, 255);
                padding: 0.5em 1em;
                display: flex;
                justify-content: space-between;
            }
            .site-identity h1 {
                font-size: 1.5em;
                margin: 0.6em 0;
                display: inline-block;
            }
            .site-navigation ul,
            .site-navigation li {
                margin: 0;
                padding: 0;
            }
            .site-navigation li {
                display: inline-block;
                margin: 1.4em 1em 1em 1em;
            }
            .body1 h2 {
                font-size: 50px;
                color: #ff0077;
            }
            .body2 h2 {
                font-size: 50px;
                color: #ff0077;
            }
            .body1 p{
                font-size: 25px;
                color: #000000;
            }
            .body2 p{
                font-size: 25px;
                color: #000000;
            }
            .body1 img{
                height: auto;
                position: relative;
                size: 50%;
                padding-right: top;
            }
            .body2 img{
                height: auto;
                position: relative;
                size: 50%;
                padding: right bottom;
            }

            .container{
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding:20px;
            padding-bottom: 60px;
            }

            .container .content{
            text-align: center;
            }

            .container .content h3{
            font-size: 30px;
            color:#000;
            
            }

            .container .content h3 span{
            background: crimson;
            color:#fff;
            border-radius: 5px;
            padding:0 15px;
            }

            .container .content h1{
            font-size: 50px;
            color: #000eab;
            }

            .container .content h1 span{
            color:crimson;
            }

            .container .content p{
            font-size: 25px;
            margin-bottom: 20px;
            }

            .container .content .btn{
            display: inline-block;
            padding:10px 30px;
            font-size: 20px;
            background: black;
            color:#fff;
            margin:0 5px;
            text-transform: capitalize;
            }

            .container .content .btn:hover{
            background: crimson;
            }
    </style>
</head>
    
    
<body style="background-image: url('img4.jpg');">
    <header class="site-header">
            
        <div class="site-identity">
           <h1><a href="#">E & T tracker</a></h1>
        </div>
            
        <nav class="site-navigation">               
                <ul class="nav">      
                    <li><a href="homepage2.html">Home</a></li>
                    <li><a href="aboutpage.html">About</a></li>            
                    <li><a href="contactus.html">Contact</a></li>             
            </ul>        
        </nav>        
    </header>

    <div class="container">

        <div class="content">
               
            <h3>Hello, <span>USER</span></h3>
            <h1>welcome <span>  </span></h1>
            <p>Getting started with INTEGRATED Expense and Time TRACKER!!</p>
            <br><br>
            <p>What do you want to Track ?</p>
            <br><br><br>
            <a href="expanse1.php" class="btn">Expense</a>
            <a href="time.html" class="btn">Time</a>              
        </div>         
    </div>        
    </body>
    
</html>