<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Maroc</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="icon" href="/images/maroc.png" width="-91px">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
            body{
                background-color: #5DADE2;
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
            .dex h1{
                color: white;
                position: absolute;
                top: 26%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
            .dex1{
                position: absolute;
                background-color: #5DADE2;
                margin-top: 344px;
                border-radius: 15px;
                width: 89%;   
                top: 20%;
                left: 50%;
                transform: translate(-50%, -50%);
                height: 402px;
            }
            .dex2{
                box-shadow: 0px 0px 10px white;
                background-color: white;
                width: 340px;
                height: 380px;
                border-radius: 33px;
                margin-left: 8px;
                position: absolute;
            }
            .dex2 img{
                border-radius: 33px;
                width: 341px;
                height: 225px;
            }
            .dex2 h1{
                color: #000;
                font-size: 21px;
                top: 239px; 
            }
            .dex2 button{
                padding: 12px 38px;
                width: 170px;
                height: 40px;
                border: none;
                font-size: 100%;
                color: white;
                background-color: PaleVioletRed;
                border-radius: 26px; 
                margin-top: 78px;
                margin-left: 87px;
                transition: 0.25s ease-in-out;
                cursor: pointer;
                color: #fff;
                border-radius: 6px;
            }
            .dex3{
                box-shadow: 0px 0px 10px white;
                background-color: white;
                width: 340px;
                height: 380px;
                border-radius: 33px;
                margin-left: 438px;
                position: absolute;
            }
            .dex3 img{
                border-radius: 33px;
                width: 341px;
                height: 225px;
            }
            .dex3 h1{
                color: #000;
                font-size: 21px;
                top: 239px; 
            }
            .dex3 button{
                padding: 12px 38px;
                width: 170px;
                height: 40px;
                border: none;
                font-size: 100%;
                color: white;
                background-color: PaleVioletRed;
                border-radius: 26px; 
                margin-top: 78px;
                margin-left: 87px;
                transition: 0.25s ease-in-out;
                cursor: pointer;
                color: #fff;
                border-radius: 6px;
            }
            .dex4{
                box-shadow: 0px 0px 10px white;
                background-color: white;
                width: 340px;
                height: 380px;
                border-radius: 33px;
                margin-left: 858px;
                position: absolute;
            }
            .dex4 img{
                border-radius: 33px;
                width: 341px;
                height: 225px;
            }
            .dex4 h1{
                color: #000;
                font-size: 21px;
                top: 239px; 
            }
            .dex4 button{
                padding: 12px 38px;
                width: 170px;
                height: 40px;
                border: none;
                font-size: 100%;
                color: white;
                background-color: PaleVioletRed;
                border-radius: 26px; 
                margin-top: 78px;
                margin-left: 87px;
                transition: 0.25s ease-in-out;
                cursor: pointer;
                color: #fff;
                border-radius: 6px;
            }
            .dex5{
                background-color: PaleVioletRed;
                top: -349px;
                left: 1288px;   
                width: 39px;
                height: 39px;
                border-radius: 26px; 
                position: absolute;
                cursor: pointer;
            }
            .dex5 h4{    
                text-decoration: none;
                display: inline-block;
                color: white;
                margin-top: 10px;
                margin-left: 15px; 
                cursor: pointer;
                font-family: serif;
            }
            .dis{
                position: absolute;
                background-color: white;
                margin-top: 820px;
                margin-left: -8px;
                width: 100%;
                height: 666px;
            }
            .dis h1{
                position: absolute;
                top: 15%;
                left: 50%;
                transform: translate(-50%, -50%);
            } 
            .dis h2{
                position: absolute;
                top: 22%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
            .dis1{
                background-color: white;
                border: 0.125em solid rgb(209,213,219);
                top: 223px;
                position: absolute;
                border-radius: 12px;
                left: 72px;
                height: 347px;
                width: 290px;
                cursor: pointer;
            }
            .dis1 img{
                width: 110px;
                top: 29px;
                left: 90px;
                position: absolute;
                cursor: pointer;
            }
            .dis1 h1{
                top: 227px;
                font-size: 30px;
                position: relative;
                left: 146px;
                text-decoration: none;
                display: inline-block;
            }            
            .dis2{
                background-color: white;
                border: 0.125em solid rgb(209,213,219);
                top: 223px;
                position: absolute;
                border-radius: 12px;
                left: 530px;
                height: 347px;
                width: 290px;
                cursor: pointer;
            }
            .dis2 img{
                width: 110px;
                top: 29px;
                left: 90px;
                position: absolute;
                cursor: pointer;
            }
            .dis2 h1{
                top: 227px;
                font-size: 30px;
                position: relative;
                left: 146px;
                text-decoration: none;
                display: inline-block;
            }
            .dis3{
                background-color: white;
                border: 0.125em solid rgb(209,213,219);
                top: 223px;
                position: absolute;
                border-radius: 12px;
                left: 972px;
                height: 347px;
                width: 290px;
                cursor: pointer;
            }
            .dis3 img{
                width: 110px;
                top: 29px;
                left: 90px;
                position: absolute;
                cursor: pointer;
            }
            .dis3 h1{
                top: 227px;
                font-size: 30px;
                position: relative;
                left: 146px;
                text-decoration: none;
                display: inline-block;
            }
            .voy{
                position: relative;
                background-color: white;
                margin-top: 760px;
                width: 100%;
                height: 686px;
            }
            .voy h1 {
                color: black;
                position: absolute;
                margin-top: 14px;
                left: 570px;
                transform: translate(-5%, -50%);
            }
            .voy1{
                background-color: white;
                width: 280px;
                height: 270px;
                border-radius: 33px;
                margin-top: 170px;
                margin-left: 33px;
                position: absolute;
            }
            .voy1 img{
                width: 210px;
                position: absolute;
                top: -117px;
                left: 46px;
            }
            .voy1 h1{
                margin-top: 70px;
                margin-left: -468px;
                font-family: cursive;
                color: black;
                font-size: 20px;
                position: absolute; 
            }
            .voy1 p{  
                float: left;  
                width: 259px;
                height: 90px;
                font-family: fangsong;
                font-size: 15px;
                position: absolute; 
                margin-top: 157px;
                margin-left: 11px;
            }
            .voy2{
                background-color: white;
                width: 280px;
                height: 270px;
                border-radius: 33px;
                margin-top: 170px;
                margin-left: 533px;
                position: absolute;
            }
            .voy2 img{
                width: 210px;
                height: 185px;
                position: absolute;
                top: -94px;
                left: 46px;
            }
            .voy2 h1{
                margin-top: 70px;
                margin-left: -468px;
                font-family: cursive;
                color: black;
                font-size: 20px;
                position: absolute; 
            }
            .voy2 p{  
                float: left;  
                width: 259px;
                height: 90px;
                font-family: fangsong;
                font-size: 15px;
                position: absolute; 
                margin-top: 157px;
                margin-left: 11px;
            }
            .voy3{
                background-color: white;
                width: 280px;
                height: 270px;
                border-radius: 33px;
                margin-top: 170px;
                margin-left: 1033px;
                position: absolute;
            }
            .voy3 img{
                width: 210px;
                height: 155px;
                position: absolute;
                top: -82px;
                left: 46px;
            }
            .voy3 h1{
                margin-top: 70px;
                margin-left: -468px;
                font-family: cursive;
                color: black;
                font-size: 20px;
                position: absolute; 
            }
            .voy3 p{  
                float: left;  
                width: 259px;
                height: 90px;
                font-family: fangsong;
                font-size: 15px;
                position: absolute; 
                margin-top: 157px;
                margin-left: 11px;
            }
            .vo {
                box-shadow: 0px 0px 10px grey;
                background-color: white;
                width: 100%;
                margin-top: 189px;
                height: 480px;
                border-radius: 33px;
                position: absolute;
            }
                    </style>
    </head>
    <body>
        <div class="pre">
            <img src="images/maroc.png" alt="">
            <h1>Maroc</h1>
            <div class="nav">
                <nav>
                    <ul>
                        <li>
                <a href="/Casablanca">Visiter Casablanca</a>  
                <a href="/Agadir">Visiter Agadir</a>  
                <a href="">Visiter Marrakech</a>  
                <a href="">Visiter Tous</a>
        </li>
        </ul>
        </nav>
            </div>
        </div>
        <div class="dex">
            <h1>Découvrez les villes du Maroc</h1>
        <div class="dex1">
            <div class="dex2">
                <img src="images/meknes.png"></img>
                <h1>Visiter Meknes</h1>
                <button>Découvrir</button>
            </div>
            <div class="dex3">
                <img src="images/fes.png"></img>
                <h1>Visiter Fes</h1>
                <button>Découvrir</button>
            </div>     
             <div class="dex4">
                <img src="images/tetouan.png"></img>
                <h1>Visiter Tétouan</h1>
                <button>Découvrir</button>
            </div>
        
            </div>
        </div> 
        <div class="dis">
            <h1>Destinations<br><h2>Tout proche ou plus loin, à vous de choisir !</h2></h1>
            <div class="dis1">
                <a href="/Casablanca"><img src="images/hassan2.png"></img></a>
                <a href=""><h1>Visiter Casablanca</h1></a>
            </div>
            <div class="dis2">
                <a href=""><img src="images/sawma.png"></img></a>
                <a href=""><h1>Visiter Rabat</h1></a>
            </div>
            <div class="dis3">
                <a href=""><img src="images/tan.png"></img></a>
                <a href=""><h1>Visiter Tanger</h1></a>
            </div>    
            <div class="dex5">
            <a href=""><h4>></h4></a>
            </div>  
            <div class="voy">
            <h1>Voyage Au Maroc</h1>
            <div class="vo">
                <div class="voy1">
                    <img src="images/vu.png"></img>
                    <h1>Navigation</h1>
                    <p>Visitez plus de 211 villes du monde à pied grâce à nos circuits et à la navigation en temps réel.</p>
                </div>
                <div class="voy2">
                    <img src="images/search.png"></img>
                    <h1>Audioguides</h1>
                    <p>Apprenez les histoires des monuments incontournables des grandes villes du monde.</p>
                </div>
                <div class="voy3">
                    <img src="images/loca.png"></img>
                    <h1>Autonomie</h1>
                    <p>Partez où et quand vous voulez en autonomie et sans contrainte. Profiter de vos visites en toute liberté !</p>
                </div>
        </div>
        </div>  
         
        </div>
      
    </body>
</html>
