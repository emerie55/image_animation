<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CERT</title>

    <style>
        .certbox{
            margin: 50px auto;
            width:30%;
            height: ;
            padding: 5px 5px 2px 5px;
            background-image: linear-gradient(to bottom right, #305170, #6dfc6b);
            box-shadow: 0px 10px 10px -5px #000;
            border-radius:10px;
            overflow:hidden;
            /* box-shadow: 4.0px 8.0px 8.0px hsl(0deg 0% 0% / 0.38); */
        }

        

        .certimg{
            width:100%;
            border-radius:10px;
            transform: scale(1);
            /* transform: translateY(0); */
            transition: .5s ease-in-out;
            
        }

        .certbox:hover{
            box-shadow: 4.0px 8.0px 8.0px hsl(0deg 0% 0% / 0.38);
            
        }

        .certbox:hover .certimg{
            transform: scale(1.2);
            /* transform: translateY(300px); */

        }
    </style>
</head>
<body>
    <center>
        <h2><u>Image Animation</u></h2>
    </center>
    <div class="certbox">
        <img src="cert.jpg" alt="JBC CERT" class="certimg">
    </div>
</body>
</html>