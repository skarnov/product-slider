<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Product Slider</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
        <style>
            .zoom {
                display:inline-block;
                position: relative;
            }

            .product-details{
                max-width: 30rem;
                max-height: 20rem; 
            }

            .product-thumbnail{
                width: 7rem;
            }
        </style>
    </head>

    <body>
        <div class="container mt-5">
            <div class="col-md-12">
                <h2>Product Slider</h2>
            </div>
            <div class="col-md-4">
                <div class="main">
                    <div class="slider slider-for">
                        <div>
                            <span class='zoom' id='ex1'>
                                <img src='assets/images/kitchen_adventurer_caramel.jpg' alt='' class='product-details'/>
                            </span>
                        </div>
                        <div>
                            <span class='zoom' id='ex2'>
                                <img src='assets/images/kitchen_adventurer_caramel.jpg' alt='' class='product-details'/>
                            </span>
                        </div>
                        <div>
                            <span class='zoom' id='ex3'>
                                <img src='assets/images/kitchen_adventurer_caramel.jpg' alt='' class='product-details'/>
                            </span>
                        </div>
                        <div>
                            <span class='zoom' id='ex4'>
                                <img src='assets/images/kitchen_adventurer_caramel.jpg' alt='' class='product-details'/>
                            </span>
                        </div>
                        <div>
                            <span class='zoom' id='ex5'>
                                <img src='assets/images/kitchen_adventurer_caramel.jpg' alt='' class='product-details'/>
                            </span>
                        </div>
                    </div>
                    <div class="slider slider-nav">
                        <div>
                            <span class='zoom' id='ex1'>
                                <img src='assets/images/kitchen_adventurer_caramel.jpg' alt='' class='product-thumbnail'/>
                            </span>
                        </div>
                        <div>
                            <span class='zoom' id='ex2'>
                                <img src='assets/images/kitchen_adventurer_caramel.jpg' alt='' class='product-thumbnail'/>
                            </span>
                        </div>
                        <div>
                            <span class='zoom' id='ex3'>
                                <img src='assets/images/kitchen_adventurer_caramel.jpg' alt='' class='product-thumbnail'/>
                            </span>
                        </div>
                        <div>
                            <span class='zoom' id='ex4'>
                                <img src='assets/images/kitchen_adventurer_caramel.jpg' alt='' class='product-thumbnail'/>
                            </span>
                        </div>
                        <div>
                            <span class='zoom' id='ex5'>
                                <img src='assets/images/kitchen_adventurer_caramel.jpg' alt='' class='product-thumbnail'/>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="assets/vendor/imagezoom/jquery.zoom.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>

        <script>
            $(document).ready(function () {
                $('#ex1').zoom();
                $('#ex2').zoom();
                $('#ex3').zoom();
                $('#ex4').zoom();
                $('#ex5').zoom();

                $('.slider-for').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    fade: true,
                    asNavFor: '.slider-nav'
                });
                $('.slider-nav').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    asNavFor: '.slider-for',
                    dots: true,
                    focusOnSelect: true
                });
                
            });
        </script>
    </body>
</html>