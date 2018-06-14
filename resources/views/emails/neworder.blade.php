<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cakes By Toni - Thank You :)</title>
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Cabin+Sketch|Sacramento" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Amatic SC', cursive;
                color: #E7ECEF;
                height: 100%;
                /*background-image: url("/img/memphis-colorful.png");*/
                background-color: #6096BA;
                /*font-family: 'Sacramento', cursive;*/
                /*font-family: 'Cabin Sketch', cursive;*/
                font-size: 3vmin;
            }

            .underline-hover {
            position: relative;
            color: #E7ECEF;
            text-decoration: none;
            }

            .underline-hover:hover {
            color: #E7ECEF;
            text-decoration: none;
            }

            .underline-hover:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #E7ECEF;
            visibility: hidden;
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transition: all 0.3s ease-in-out 0s;
            transition: all 0.3s ease-in-out 0s;
            }

            .underline-hover:hover:before {
            visibility: visible;
            -webkit-transform: scaleX(1);
            transform: scaleX(1);
            }

            .image-container {
                position: relative;
            }

            .image {
            opacity: 1;
            display: block;
            width: 100%;
            transition: .5s ease;
            backface-visibility: hidden;
            }

            .text-container {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
            }

            .image-container:hover .image {
            opacity: 0.3;
            }

            .image-container:hover .text-container {
            opacity: 1;
            }

            .icon{
                width: 10%;
                height: 10%;
            }

            #contact-form{
                background-color: #274c77;
                padding: 5%;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="text-center">
                    <h1 class="display-1">Yay! You have a new customer!</h1>
                    <p>This cool guy wants a {{ $order->product }} :)</p>
                    <br>
                    <h2>Here's the deets:</h2>
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Customer</th>
                                <th scope="col">Email</th>
                                <th scope="col">Product</th>
                                <th scope="col">Instructions</th>
                                <th scope="col">Phone #</th>
                                <th scope="col">Due!</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $order->first_name }} {{ $order->last_name }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->product }}</td>
                                <td>{{ $order->instructions }}</td>
                                <td>{{ $order->phone_number }}</td>
                                <td>{{ $order->due_date }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
        crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script>
            $(document).on('click', 'a[href^="#"]', function (event) {
                event.preventDefault();

                $('html, body').animate({
                    scrollTop: $($.attr(this, 'href')).offset().top
                }, 500);
            });

            $(window).scroll(function () {
                //if you hard code, then use console
                //.log to determine when you want the 
                //nav bar to stick.  
                if ($(window).scrollTop() > 280) {
                    $('.navbar').addClass('fixed-top');
                }
                if ($(window).scrollTop() < 280) {
                    $('.navbar').removeClass('fixed-top');
                }
            });

            window.sr = ScrollReveal({ reset: true, duration: 1000 });
            sr.reveal('#cake', { origin: 'left', rotate: { z: 180 }, distance: '20vw', scale: 0.1 });
            sr.reveal('#cookie', { origin: 'bottom', rotate: { z: -180 }, distance: '20vw', scale: 0.1 });
            sr.reveal('#icecream', { origin: 'top', rotate: { z: 180 }, distance: '20vw', scale: 0.1 });
            sr.reveal('#pastry', { origin: 'right', rotate: { z: -180 }, distance: '20vw', scale: 0.1 });

            sr.reveal('#vegan', { origin: 'right', rotate: { z: 180 }, distance: '20vw', scale: 0.1 });
            sr.reveal('#gmo', { origin: 'left', rotate: { z: -180 }, distance: '20vw', scale: 0.1 });
            sr.reveal('#gluten', { origin: 'right', rotate: { z: 180 }, distance: '20vw', scale: 0.1 });
            sr.reveal('#organic', { origin: 'left', rotate: { z: -180 }, distance: '20vw', scale: 0.1 });
        </script>
    </body>
</html>