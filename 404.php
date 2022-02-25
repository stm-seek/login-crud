<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ทำไรอะวัยรุ่น</title>
    <link rel="stylesheet" type="text/css" href="css/404.css">
</head>

<body>

    <section class="wrapper">
        <div class="container">
            <div id="scene" class="scene" data-hover-only="false">

                <div class="circle" data-depth="1.2"></div>
                <div class="one" data-depth="0.9">
                    <div class="content">
                        <span class="piece"></span>
                        <span class="piece"></span>
                        <span class="piece"></span>
                    </div>
                </div>
                <div class="two" data-depth="0.60">
                    <div class="content">
                        <span class="piece"></span>
                        <span class="piece"></span>
                        <span class="piece"></span>
                    </div>
                </div>
                <div class="three" data-depth="0.40">
                    <div class="content">
                        <span class="piece"></span>
                        <span class="piece"></span>
                        <span class="piece"></span>
                    </div>
                </div>
                <p class="p404" data-depth="0.50">404</p>
                <p class="p404" data-depth="0.10">404</p>
            </div>
            <div class="text">
                <article>
                    <p>Uh oh! Looks like you got lost. <br>Plese login first!</p>
                    <button><a href="index.php">Click here!</a></button>
                </article>
            </div>
        </div>
    </section>


    <script>
        // Parallax Code
        var scene = document.getElementById('scene');
        var parallax = new Parallax(scene);
    </script>
</body>

</html>