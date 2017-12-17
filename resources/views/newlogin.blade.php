<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            @import url('https://fonts.googleapis.com/css?family=Nunito');
            @import url('https://fonts.googleapis.com/css?family=Poiret+One');

            body, html {
                background-repeat: no-repeat;    /*background-image: linear-gradient(rgb(12, 97, 33),rgb(104, 145, 162));*/
                background:#5285d2;
                position: relative;
            }
            #login-box {
                position: absolute;
                top: 0px;
                left: 50%;
                transform: translateX(-50%);
                width: 350px;
                margin: 0 auto;
                border: 1px solid black;
                background: rgb(1, 15, 41);
                min-height: 250px;
                padding: 20px;
                z-index: 9999;
            }
            #login-box .logo .logo-caption {
                font-family: 'Poiret One', cursive;
                color: white;
                text-align: center;
                margin-bottom: 0px;
            }
            #login-box .logo .tweak {
                color: #526fff;
            }
            #login-box .controls {
                padding-top: 30px;
            }
            #login-box .controls input {
                border-radius: 0px;
                background: rgb(98, 96, 96);
                border: 0px;
                color: white;
                font-family: 'Nunito', sans-serif;
            }
            #login-box .controls input:focus {
                box-shadow: none;
            }
            #login-box .controls input:first-child {
                border-top-left-radius: 2px;
                border-top-right-radius: 2px;
            }
            #login-box .controls input:last-child {
                border-bottom-left-radius: 2px;
                border-bottom-right-radius: 2px;
            }
            #login-box button.btn-custom {
                border-radius: 2px;
                margin-top: 8px;
                background: #526fff;
                border-color: rgba(48, 46, 45, 1);
                color: white;
                font-family: 'Nunito', sans-serif;
            }
            #login-box button.btn-custom:hover{
                -webkit-transition: all 500ms ease;
                -moz-transition: all 500ms ease;
                -ms-transition: all 500ms ease;
                -o-transition: all 500ms ease;
                transition: all 500ms ease;
                background: rgba(48, 46, 45, 1);
                border-color: #526fff;
            }
            #particles-js{
                width: 100%;
                height: 100%;
                background-size: cover;
                background-position: 50% 50%;
                position: fixed;
                top: 0px;
                z-index:1;
            }
            .vertical-center {
                min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
                min-height: 100vh; /* These two lines are counted as one :-)       */

                display: flex;
                align-items: center;
            }
        </style>
    </head>
    <body>

            <div class="container vertical-center">
                <div id="login-box">
                    <div class="logo">
                        <img src="{{ url('img/logo-invert.png') }}" class="img img-responsive center-block"/>
                        <h1 class="logo-caption"><span class="tweak">Admin</span> Login</h1>
                    </div><!-- /.logo -->
                    <div class="controls">
                        <input type="text" name="email" placeholder="Email" class="form-control" />
                        <input type="text" name="password" placeholder="Password" class="form-control" />
                        <button type="button" class="btn btn-default btn-block btn-custom">Login</button>
                    </div><!-- /.controls -->
                </div><!-- /#login-box -->
            </div><!-- /.container -->
            <div id="particles-js"></div>
            <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>-->


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <script>
            $.getScript("https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js", function(){
                particlesJS('particles-js',
                {
                    "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                        "enable": true,
                        "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#ffffff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                        "width": 0,
                        "color": "#000000"
                        },
                        "polygon": {
                        "nb_sides": 5
                        },
                        "image": {
                        "width": 100,
                        "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                        }
                    },
                    "size": {
                        "value": 5,
                        "random": true,
                        "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 6,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                        }
                    }
                    },
                    "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                        "enable": true,
                        "mode": "repulse"
                        },
                        "onclick": {
                        "enable": true,
                        "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                        },
                        "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                        },
                        "repulse": {
                        "distance": 200
                        },
                        "push": {
                        "particles_nb": 4
                        },
                        "remove": {
                        "particles_nb": 2
                        }
                    }
                    },
                    "retina_detect": true,
                    "config_demo": {
                    "hide_card": false,
                    "background_color": "#b61924",
                    "background_image": "",
                    "background_position": "50% 50%",
                    "background_repeat": "no-repeat",
                    "background_size": "cover"
                    }
                }
                );
            });
        </script>
    </body>
</html>