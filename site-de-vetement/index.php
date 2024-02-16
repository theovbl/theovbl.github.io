<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <title>Site de vetement</title>
</head>
<body>
    <header>
        <div class="header-span-site">mon site internet</div>
        <?php
        session_start();
        if (isset($_SESSION['user'])) {
            echo '<div class="dropdown">
                    <button class="header-span-register">' . $_SESSION['user'] . '</button>
                    <div class="dropdown-content">
                        <a href="#">Profil</a>
                        <a href="#">Paramètres</a>
                        <a href="#">Mode nuit</a>
                        <a href="#">Déconnexion</a>
                    </div>
                </div>';
        } else {
            echo '<button class="header-span-register"><a href="./view/login.php">register/login</a></button>';
        }
    ?>
    </header>     
    <nav>
        <ul>
            <li>Pulls</li>
            <li>Pantalons</li>
            <li>T-Shirts</li>
            <li>Pyjamas</li>
            <li>Parkas</li>
            <li>Vestes</li>
            <li>Cramptés</li>
        </ul>
    </nav>
    <main>
        <h1>Tendances du moment</h1>
        <div class="carrousel-image">
            <div><img src="./img/Salopette 1.png" alt="Slide 1"></div>
            <div><img src="./img/Manteau Robe 1.png" alt="Slide 2"></div>
            <div><img src="./img/Blazer 1.png" alt="Slide 2"></div>
            <div><img src="./img/Famille 1.png" alt="Slide 3"></div>
            <div><img src="./img/Pyjama 1.png" alt="Slide 4"></div>
            <div><img src="./img/Ensemble Rouge 1.png" alt="Slide 5"></div>
            <div><img src="./img/Salopette 1.png" alt="Slide 1"></div>
            <div><img src="./img/Manteau Robe 1.png" alt="Slide 2"></div>
            <div><img src="./img/Blazer 1.png" alt="Slide 2"></div>
            <div><img src="./img/Famille 1.png" alt="Slide 3"></div>
            <div><img src="./img/Pyjama 1.png" alt="Slide 4"></div>
            <div><img src="./img/Ensemble Rouge 1.png" alt="Slide 5"></div>
            <div><img src="./img/Salopette 1.png" alt="Slide 1"></div>
            <div><img src="./img/Manteau Robe 1.png" alt="Slide 2"></div>
            <div><img src="./img/Blazer 1.png" alt="Slide 2"></div>
            <div><img src="./img/Famille 1.png" alt="Slide 3"></div>
            <div><img src="./img/Pyjama 1.png" alt="Slide 4"></div>
            <div><img src="./img/Ensemble Rouge 1.png" alt="Slide 5"></div>
            <div><img src="./img/Salopette 1.png" alt="Slide 1"></div>
            <div><img src="./img/Manteau Robe 1.png" alt="Slide 2"></div>
            <div><img src="./img/Blazer 1.png" alt="Slide 2"></div>
            <div><img src="./img/Famille 1.png" alt="Slide 3"></div>
            <div><img src="./img/Pyjama 1.png" alt="Slide 4"></div>
            <div><img src="./img/Ensemble Rouge 1.png" alt="Slide 5"></div>
        </div>
    </main>
  
    

  <script>
        $(document).ready(function(){
            $('.carrousel-image').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 6,
                slidesToScroll: 6,
                prevArrow: '<button type="button" class="slick-prev">Previous</button>',
                nextArrow: '<button type="button" class="slick-next">Next</button>',
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 4
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
            $(document).ready(function(){
    $('.header-span-register').click(function(){
        $('.dropdown-content').toggle();
    });
    
    $(document).click(function(event) { 
        if(!$(event.target).closest('.dropdown').length) {
            if($('.dropdown-content').is(":visible")) {
                $('.dropdown-content').hide();
            }
        }        
    });
});

        });
</script>
</body>
</html>
