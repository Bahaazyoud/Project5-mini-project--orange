<?php
session_start();
require_once('./php/createDB.php');
require_once('./php/component.php');
$database = new createDb(dbname:"productdb",tablename:"producttb");
if(isset($_POST["add"])){
    // print_r($_POST["product_id"]);
    if(isset($_SESSION["cart"])){
        $item_array_id = array_column($_SESSION["cart"],"product_id");
        print_r($item_array_id);
        if(in_array($_POST['product_id'],$item_array_id)){
            echo "<script>alert('product is already add in the cart')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{
           $count = count($_SESSION["cart"]);
           $item_array=array(
            'product_id'=>$_POST['product_id']
        );
        $_SESSION['cart'][$count] = $item_array;
        print_r($_SESSION["cart"]);
        }

    }else{
        $item_array=array(
            'product_id'=>$_POST['product_id']
        );
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION["cart"]);
    }
}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
        />
        <link rel="stylesheet" href="index.css">

    </head>

    <body>
        <?php require_once("./php/header.php"); ?>
        



        <!-- horizantel div -->
        <div class="wrap">
            <div class="panel p1">
                <h2>The Best Places to Buy and Rent PC Games</h2>
                <button class="b1">Show Games</button>
                <video autoplay muted loop>
                <!-- <source src="videos/videoplayback (3).mp4" type="video/mp4">     -->
            </video>
            </div>
            <div class="panel p2 bg-danger"></div>
            <div class="panel p3 bg-dark">
                <div class="container">
                    <div class="row text-center py-5">
                        <?php 
                    component(productname:"warhammer",productprice:"59$",productimg:"./images/warhammer.jpg",productid:"1");
                    component(productname:"forza-horizon-5",productprice:"49$",productimg:"./images/forza-horizon-5.jpg",productid:"2");
                    component(productname:"fifa22",productprice:"30$",productimg:"./images/fifa-22-pc-game-origin-cover.jpg",productid:"3");
                    component(productname:"After the Fall",productprice:"59$",productimg:"./images/after-the-fall-pc-game-steam-cover.jpg",productid:"4");
                     ?>
                    </div>
                </div>
            </div>
            <div class="panel p4 bg-dark"> five</div>
            <div class="panel p5 bg-dark"> five</div>
        </div>
        <!-- row div  -->
        <div class="text-center bg-dark h-100 row">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/forza-horizon-5.jpg" />
                        <p>Forza Horizon 5 </p>
                        <button>Click</button>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/warhammer.jpg" />
                        <p>Warhammer </p>
                        <button>Click</button>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/after-the-fall-pc-game-steam-cover.jpg" />
                        <p>After the Fall</p>
                        <button>Click</button>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/deep-rock-galactic-pc-game-steam-cover.jpg" />
                        <p>Deep Rock Galactic</p>
                        <button>Click</button>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/risk-of-rain-2-survivors-of-the-void-dlc-pc-game-steam-cover.jpg" />
                        <p>Risk of Rain 2</p>
                        <button>Click</button>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/motogp-22-pc-game-steam-cover.jpg" />
                        <p>MotoGP 22</p>
                        <button>Click</button>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/fifa-22-pc-game-origin-cover.jpg" />
                        <p>FIFA 22</p>
                        <button>Click</button>
                    </div>
                </div>

            </div>

            <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
            <script src="main.js"></script>
            <script>
                var swiper = new Swiper(".mySwiper", {
                    effect: "coverflow",
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: "auto",
                    coverflowEffect: {
                        rotate: 60,
                        stretch: 10,
                        depth: 650,
                        modifier: 1,
                        slideShadows: true,
                    },
                    loop: true,
                    autoplay: {
                        delay: 1000,
                        disableOnInteraction: false,
                    },
                });
            </script>
    </body>

    </html>