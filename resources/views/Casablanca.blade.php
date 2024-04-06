<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Maroc - Casablanca</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="icon" href="/images/maroc.png" width="-91px">    </head>
    <body>
        <style>
            body{
                background-image: url("https://www.hellomoroccotrip.com/wp-content/uploads/2016/12/casablanca-city-night-bestofdesert-1-1024x683-1.jpg");
                background-size: cover;
                background-repeat: no-repeat;
                
            }
            .pre img{
                float: left;
                cursor: pointer;
                margin-left: 60px;
                width: 40px;
                margin-top: 23px;
            }
            .pre h1{
                position: absolute;
                font-size: 25px;
                margin-top: 36px;
                float: left;
                cursor: pointer;
                margin-left: 100px;
                color: white;
            }
            .nav{
                float: right;
            }
            .nav nav ul li{
                display: inline-block;
                margin-top: 10px;
                padding: 15px 12px;
            }
            .nav nav ul li a{
                padding: 2px 5px;
                text-decoration: none;
                display: inline-block;
                color: white;
                font-size: 17px;
            }
            .nav nav ul li a:hover{
                color: #5DADE2;
                background-color: white;
            }
            .pre h2{
                color: white;
                font-family: serif;
                position: absolute;
                top: 39%;
                left: 50%;
                font-size: 99px;
                transform: translate(-50%, -50%);
            }
            .de{
                box-shadow: 0px 0px 10px grey;
                background-color: white;
                width: 1330px;
                height: 60px;
                margin-left: 8px;
                margin-top: 667px;
                position: absolute;
}
            .de h4{
                padding: 1px 59px;
                text-decoration: none;
                cursor: pointer;
                color: #000;
                display: inline-block;
            }
            .de h4:hover{
                color: brown;
            }
            .acc{
                background-color: white;
                margin-top: 697px;
                position: absolute;
                width: 100%;
                height: 522px;
                left: 0px;
            }
            .acc1 h1{
                font-size: 16px;
                padding: 0px 0px;
                text-decoration: none;
                display: inline-block;
                margin-left: 410px;
                margin-top: 90px;
            }
            .acc1 p{
                font-size: 16px;
                padding: 55px 9px;
                text-decoration: none;
                display: inline-block;
                margin-left: -210px;
                margin-top: 9px;
                color: grey;
            }
            .acc1 h2{
                font-size: 16px;
                padding: 0px 0px;
                text-decoration: none;
                display: inline-block;
                margin-left: 30px;
                margin-top: 90px;
                color: brown;
            }
            .div h1{
                position: absolute;
                margin-top: 890px;
                text-decoration: none;
                display: inline-block;
                font-size: 17px;
                width: 480px;
            }
            .div img{
                width: 670px;
                left: 660px;
                top: 940px;
                height: 370px;
                position: absolute;
            }
            .voir{
                overflow: hidden;
            }
            .voir h1{
                width: 490px;
                font-size: 25px;
                color: brown;
                top: 1459px;
                transform: translate(70%, 50%);
                position: absolute;
            }
            .voir1 img{
                position: absolute;
                top: 1640px;
                object-fit: cover;
                transition: transform 0.8s;
                height: 502px;
                left: 60px;
                width: 360px;
            }
            .voir1 img:hover{
                transform: scale(1.1);
            }
            .voir1 button{
                background-color: PaleVioletRed; 
                padding: 12px 38px;
                width: 170px;
                height: 40px;
                border: none;
                font-size: 100%;
                color: white;
                border-radius: 26px;
                margin-top: 1648px;                position: absolute;
                margin-left: -37px;
                transition: 0.25s ease-in-out;
                cursor: pointer;
            }
            .voir2 img{
                position: absolute;
                top: 1640px;
                height: 502px;
                left: 940px;
                width: 360px;
                object-fit: cover;
                transition: transform 0.8s;
            }
            .voir img:hover{
                transform: scale(1.1);
            }
            .voir2 button{
                background-color: green; 
                padding: 12px 38px;
                width: 170px;
                height: 40px;
                border: none;
                font-size: 100%;
                color: white; border-radius: 26px;
                margin-top: 1648px;                position: absolute;
                margin-left: 840px;
                transition: 0.25s ease-in-out;
                cursor: pointer;
            }    
            .voir3 img{
                position: absolute;
                top: 1640px;
                object-fit: cover;
                transition: transform 0.8s;
                height: 502px;
                left: 510px;
                width: 360px;
            }
            .voir3 img:hover{
                transform: scale(1.1);
            }
            .voir3 button{
                background-color: #66B2FF; 
                padding: 12px 38px;
                width: 170px;
                height: 40px;
                border: none;
                font-size: 100%;
                color: white;
                border-radius: 26px;
                margin-top: 1648px;                
                position: absolute;
                margin-left: 417px;
                transition: 0.25s ease-in-out;
                cursor: pointer;
            }
            .inc{
                overflow: hidden;
            }
            .inc h1{
                width: 778px;
                font-size: 26px;
                color: black;
                top: 2459px;
                transform: translate(-7%, 5%);
                position: absolute;
            }
            .inc button {
                position: absolute;
                display: inline-block;
                margin-top: 2460px;
                padding: 9px 14px;
                text-align: center;
                font-size: 18px;
                letter-spacing: 1px;
                text-decoration: none;
                color: black;
                left: 1170px;
                background: transparent;
                cursor: pointer;
                transition: ease-out 0.5s;
                border: 2px solid black;
                border-radius: 10px;
                box-shadow: inset 0 0 0 0 #725AC1;
            }
            .inc button:hover {
                color: white;
                box-shadow: inset 0 -100px 0 0 black;
            }
            .inc button:active {
                transform: scale(0.9);
            }
            .inc1 img{
                position: absolute;
                margin-left: -50px;
                margin-top: 2570px;
                width: 333px;
                height: 290px;
            }
            .inc1 h1{
                position: absolute;
                margin-left: 4px;
                margin-top: 420px;
                font-family: "Roboto Mono", monospace;
                color: #000;
                font-size: 18px;
            }
            .inc1 button {
                position: absolute;
                display: inline-block;
                margin-top: 2920px;
                padding: 9px 14px;
                text-align: center;
                font-size: 18px;
                letter-spacing: 1px;
                text-decoration: none;
                color: black;
                left: 60px;
                cursor: pointer;
                transition: ease-out 0.5s;
                border-radius: 10px;
            }
            .inc2 img{
                position: absolute;
                margin-left: 432px;
                margin-top: 2570px;
                width: 333px;
                height: 290px;
            }
            .inc2 h1{
                position: absolute;
                margin-left: 486px;
                margin-top: 420px;
                font-family: "Roboto Mono", monospace;
                color: #000;
                font-size: 18px;
            }
            .inc2 button {
                position: absolute;
                display: inline-block;
                margin-top: 2920px;
                padding: 9px 14px;
                text-align: center;
                font-size: 18px;
                letter-spacing: 1px;
                text-decoration: none;
                color: black;
                margin-left: -630px;
                cursor: pointer;
                transition: ease-out 0.5s;
                border-radius: 10px;
            }
            .inc3 img{
                position: absolute;
                margin-left: 850px;
                margin-top: 2570px;
                width: 333px;
                height: 290px;
            }
            .inc3 h1{
                position: absolute;
                float: left;
                margin-top: 2871px;
                font-family: "Roboto Mono", monospace;
                color: #000;
                left: 957px;
                font-size: 18px;
            }
            .inc3 button {
                position: absolute;
                display: inline-block;
                margin-top: 2920px;
                padding: 9px 14px;
                text-align: center;
                font-size: 18px;
                letter-spacing: 1px;
                text-decoration: none;
                color: black;
                left: 960px;
                cursor: pointer;
                transition: ease-out 0.5s;
                border-radius: 10px;
            }  
            .vid{
                background-color: brown; 
                height: 650px;   
                margin: auto;
                position: absolute;
            }
            .vid h1{
                font-size: 25px;
                color: white;
                letter-spacing: 0;
                background: url(https://i.pinimg.com/564x/ac/00/b0/ac00b0c9367e0526945ab6514b41ac19.jpg);
                background-position: left center;
                background-clip: text;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                top: 3059px;
                left: 490px;
                font-family: Georgia, serif;
                transform: translate(-15%, 50%);
            }
            .vid1 img{
                position: absolute;
                margin-left: 1px;
                margin-top: 90px;
                width: 440px;
                height: 368px;
            }
            .vid2 img{
                position: absolute;
                margin-left: 449px;
                margin-top: 90px;
                width: 444px;
                height: 368px;
            }
            .vid3 img{
                position: absolute;
                margin-left: 899px;
                margin-top: 90px;
                width: 450px;
                height: 368px;
            }
             



            /* Modal Styles */
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    overflow: hidden;
}

.modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    padding: 20px;
    text-align: center;
}

.close{
    position: absolute;
    right: 10px;
    font-size: 20px;
    margin-top: -550px;
    cursor: pointer;
}

/* Responsive Video */
iframe {
    width: 1098px;
    left: -530px;     
    margin-top: -350px;
    height: 670px;
    position: absolute;
}
.aven h1{
    font-size: 25px;
    color: black;
    letter-spacing: 0;
    top: 3699px;
    position: absolute;    
    left: 550px;
    font-family: Georgia, serif;
    transform: translate(-5%, 50%);
}
.aven2 p{
    font-size: 17px;
    color: black;
    letter-spacing: 0;
    top: 3750px;
    position: absolute;    
    left: 125px;
    font-family: Georgia, serif;
    transform: translate(-5%, 50%);
}
.aven3 h1{
    font-size: 25px;
    color: black;
    letter-spacing: 0;
    top: 3930px;
    position: absolute;    
    left: 530px;
    font-family: Georgia;
    transform: translate(-5%, 50%);
}
.aven3 img{
    position: absolute;    
    top: 4040px;
    width: 540px;
    left: 9px;
}
.aven3 p{
    padding: 19px 9px;
    background: #fff;
    opacity: 0.86;
    font-size: 23px;
    color: black;
    letter-spacing: 0;
    top: 4070px;
    position: absolute;    
    left: 530px;
    font-family: sans-serif;
    transform: translate(-5%, 50%);
}
.aven3 h3{
    padding: 19px 9px;
    background: #fff;
    opacity: 0.86;
    font-size: 23px;
    color: black;
    letter-spacing: 0;
    top: 4091px;
    position: absolute;    
    left: 501px;
    font-family: sans-serif;
    transform: translate(-5%, 50%);
}
.aven4 h1{
    font-size: 25px;
    color: black;
    letter-spacing: 0;
    top: 4550px;
    position: absolute;    
    left: 530px;
    font-family: Georgia;
    transform: translate(-5%, 50%);
}
.aven4 img{
    position: absolute;    
    top: 4640px;
    width: 540px;
    left: 799px;
}
.aven4 p{
    padding: 19px 79px;
    background: #fff;
    opacity: 0.86;
    font-size: 23px;
    color: black;
    letter-spacing: 0;
    top: 4830px;
    position: absolute; 
    width: 469px;
    height: 90px;   
    left: 230px;
    font-family: sans-serif;
    transform: translate(-5%, 50%);
}
.aven4 h3{
    padding: 19px 9px;
    background: #fff;
    opacity: 0.86;
    width: 539px;
    font-size: 23px;
    color: black;
    letter-spacing: 0;
    top: 4799px;
    position: absolute;    
    left: 297px;
    font-family: sans-serif;
    transform: translate(-5%, 50%);
}
.aven5 img{
    position: absolute;    
    top: 5150px;
    width: 540px;
    left: 9px;
}
.aven5 p{
    padding: 19px 9px;
    background: #fff;
    opacity: 0.86;
    font-size: 23px;
    color: black;
    letter-spacing: 0;
    top: 5170px;
    position: absolute;    
    left: 530px;
    font-family: sans-serif;
    transform: translate(-5%, 50%);
}
.aven5 h3{
    padding: 19px 9px;
    background: #fff;
    opacity: 0.86;
    font-size: 23px;
    color: black;
    letter-spacing: 0;
    top: 5199px;
    position: absolute;    
    left: 493px;
    font-family: sans-serif;
    transform: translate(-5%, 50%);
}
.aven6 img{
    position: absolute;    
    top: 5640px;
    width: 540px;
    left: 799px;
}
.aven6 p{
    padding: 19px 79px;
    background: #fff;
    opacity: 0.86;
    font-size: 23px;
    color: black;
    letter-spacing: 0;
    top: 5698px;
    position: absolute; 
    width: 469px;
    height: 240px;   
    left: 230px;
    font-family: sans-serif;
    transform: translate(-5%, 50%);
}
.aven6 h3{
    padding: 19px 9px;
    background: #fff;
    opacity: 0.86;
    width: 539px;
    font-size: 23px;
    color: black;
    letter-spacing: 0;
    top: 5743px;
    position: absolute;    
    left: 297px;
    font-family: sans-serif;
    transform: translate(-5%, 50%);
}
.sport h1 {
    font-size: 25px;
    color: black;
    letter-spacing: 0;
    top: 6229px;
    position: absolute;
    left: 570px;
    font-family: Georgia, serif;
    transform: translate(-5%, 50%);
}
.sport1 img{
    position: absolute;
    top: 6339px;
    width: 402px;
}
.sport1 h1{
    background-color: white;
    color: #000;
    position: absolute;
    top: 6420px;
    left: 19px;
    width: 402px;
}
.sport1 p{
    color: #000;
    position: absolute;
    background-color: white;
    top: 6440px;
    left: 1px;
    width: 402px;
}
.sport2 img{
    position: absolute;
    top: 6339px;
    width: 402px;
    left: 939px;
}
.sport2 h1{   
    background-color: white;
    color: #000;
    position: absolute;
    top: 6389px;
    left: 949px;
    width: 372px;
}
.sport2 p{
    color: #000;
    background-color: white;
    position: absolute;
    top: 6451px;
    left: 929px;
    width: 373px;
    height: 153px;
}
.sport3 img{
    position: absolute;
    top: 6339px;
    width: 402px;
    left: 475px;
}
.sport3 h1{
    background-color: white;
    color: #000;
    position: absolute;
    top: 6400px;
    left: 483px;
    width: 302px;
}
.sport3 p{
    color: #000;
    background-color: white;
    position: absolute;
    top: 6462px;
    left: 467px;
    width: 373px;
    height: 120px;
}
.shopp h1 {
    font-size: 25px;
    color: black;
    letter-spacing: 0;
    top: 7029px;
    position: absolute;
    left: 570px;
    font-family: Georgia, serif;
    transform: translate(-5%, 50%);
}
.shopp1 img{
    position: absolute;
    top: 7139px;
    height: 290px;
    width: 402px;
}
.shopp1 h1{
    background-color: white;
    color: #000;
    position: absolute;
    top: 7105px;
    left: 19px;
    font-size: 17px;
    width: 392px;
}
.shopp1 p{
    color: #000;
    position: absolute;
    font-size: 14px;
    background-color: white;
    top: 7107px;
    height: 66px;
    left: 1px;
    width: 389px;
}
.shopp2 img{
    position: absolute;
    top: 7139px;
    height: 290px;
    left: 939px;
    width: 402px;
}
.shopp2 h1{   
    background-color: white;
    color: #000;
    font-size: 17px;
    position: absolute;
    top: 7079px;
    left: 949px;
    width: 372px;
}
.shopp2 p{
    color: #000;
    background-color: white;
    position: absolute;
    top: 7138px;
    left: 930px;
    width: 370px;
    height: 66px;
    font-size: 14px;
}
.shopp3 img{
    position: absolute;
    top: 7139px;
    height: 290px;
    left: 475px;
    width: 402px;
}
.shopp3 h1{
    background-color: white;
    color: #000;
    font-size: 17px;
    position: absolute;
    top: 7102px;
    left: 485px;
    width: 372px;
}
.shopp3 p{
    color: #000;
    background-color: white;
    position: absolute;
    top: 7102px;
    left: 467px;
    width: 373px;
    height: 80px;
}
.content{
    width: 10%;
    height: 100%;
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    opacity: 0;
    transition: 0.6s;
}
.content:hover{
    opacity: 1;
}
.content .sport1 h1{
    color: black;
}

.content .sport1 h1{
    color: black;
}
.content p{
    color: black;
}
.content > *{
    transform: translateY(25px);
    transition: transform 0.6s;
}
         </style>   
            <div class="vid" style="margin-left: -8px; margin-top: 2920px; width: 100%;">
            <h1 id="VIDÉOTHÈQUE" style="margin-left: 638px; margin-top: 69px">VIDÉOTHÈQUE</h1>
            <div class="vid1">
                <img src="images/casa1.png"></img>
                <img src="images/play.png" id="openModal" style="cursor: pointer; position: absolute; margin-top:220px; height: 90px; margin-left: 160px; width: 90px;" class="btn-play"></img>
            </div>  
            <div class="vid2">
                <img src="images/casa2.png"></img>
                <img src="images/play.png" id="opeModal" style="cursor: pointer; position: absolute; margin-top:220px; height: 90px; margin-left: 620px; width: 90px;" class="btn-play"></img>
            </div>  
            <div class="vid3">
                <img src="images/casa3.png"></img>
                <img src="images/play.png" id="opModal" style="cursor: pointer; position: absolute; margin-top:220px; height: 90px; margin-left: 1080px; width: 90px;" class="btn-play"></img>
            </div>  
        </div> 
    <div id="videoModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModal"></span>
            <iframe id="videoFrame" src="https://www.youtube.com/embed/6woXLSo-nEA?si=aIsUBd2fP6rx6lno" frameborder="0" allowfullscreen></iframe>
        </div>
    </div> 
    <script>
        // Get elements
var openModal = document.getElementById("openModal");
var closeModal = document.getElementById("closeModal");
var videoModal = document.getElementById("videoModal");
var videoFrame = document.getElementById("videoFrame");

// Open the modal
openModal.addEventListener("click", function() {
    videoFrame.src = "https://www.youtube.com/embed/dlA0jplZgJQ?si=AdSdwQClSElsnfoJ"; // Replace with your video's URL
    videoModal.style.display = "block";
});
opeModal.addEventListener("click", function() {
    videoFrame.src = "https://www.youtube.com/embed/pkR-mUEf2ic?si=beVFifcnkUqrgzwQ"; // Replace with your video's URL
    videoModal.style.display = "block";
});
opModal.addEventListener("click", function() {
    videoFrame.src = "https://www.youtube.com/embed/8YCuqZCCPeg?si=UcWw2ZXKVEnUk2cd"; // Replace with your video's URL
    videoModal.style.display = "block";
});

// Close the modal
closeModal.addEventListener("click", function() {
    videoModal.style.display = "none";
});

// Close the modal if the background is clicked
window.addEventListener("click", function(event) {
    if (event.target == videoModal) {
        videoModal.style.display = "none";
        videoFrame.src = "";
    }
});

    </script> 
</body>
</html>