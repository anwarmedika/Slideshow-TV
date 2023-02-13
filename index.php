<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Display1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bootstrap-5.1.3/css/bootstrap.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">

</head>


<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <video controls loop autoplay style="width: 100%;height: 500px;">
                    <source src="fullvid.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

            </div>
            <div class="col-6">
                <div class="slider" style="text-align: center;color: white;">
                    <?php for ($i = 1; $i <= 17; $i++) { ?>
                        <div class="div">
                            <img src="img/<?= $i; ?>.png" style="width: 100%;height: 500px">
                        </div>
                    <?php } ?>
                </div>

            </div>
            <div class="col-6">
                <div class="slider2" style="text-align: center;color: white;">
                    <?php for ($i = 1; $i <= 6; $i++) { ?>
                        <div class="div">
                            <img src="gambar/g<?= $i; ?>.jpg" style="width: 100%;height: 550px">
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-6">
                <div class="slider3" style="text-align: center;color: white;">
                    <?php for ($i = 7; $i <= 12; $i++) { ?>
                        <div class="div">
                            <img src="gambar2/g<?= $i; ?>.jpg" style="width: 100%;height: 550px">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>




        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>



        <!-- slick slider JS -->
        <script type="text/javascript" src="slick/slick.js"></script>
        <script>
            $(".slider").slick({
                arrows: false,
                dots: false,
                autoplay: true,
                autoplaySpeed: 5000,
                infinite: true,

            });
            $(".slider2").slick({
                arrows: false,
                dots: false,
                autoplay: true,
                autoplaySpeed: 5000,
                infinite: true,

            });
            $(".slider3").slick({
                arrows: false,
                dots: false,
                autoplay: true,
                autoplaySpeed: 5000,
                infinite: true,

            });
        </script>
</body>

</html>