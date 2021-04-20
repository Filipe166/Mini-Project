<!DOCTYPE html>

<head>
    <style>
        .light {
            position: absolute;
            width: 0px;
            opacity: 0.75;
            background-color: white;
            box-shadow: #e9f1f1 0px 0px 20px 2px;
            opacity: 0;
            top: 100vh;
            bottom: 0px;
            left: 0px;
            right: 0px;
            margin: auto;
        }

        .x1 {
            -webkit-animation: floatUp 4s infinite linear;
            -moz-animation: floatUp 4s infinite linear;
            -o-animation: floatUp 4s infinite linear;
            animation: floatUp 4s infinite linear;
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }

        .x2 {
            -webkit-animation: floatUp 7s infinite linear;
            -moz-animation: floatUp 7s infinite linear;
            -o-animation: floatUp 7s infinite linear;
            animation: floatUp 7s infinite linear;
            -webkit-transform: scale(1.6);
            -moz-transform: scale(1.6);
            -o-transform: scale(1.6);
            transform: scale(1.6); 
            left: 15%;
        }

        .x3 {
            -webkit-animation: floatUp 2.5s infinite linear;
            -moz-animation: floatUp 2.5s infinite linear;
            -o-animation: floatUp 2.5s infinite linear;
            animation: floatUp 2.5s infinite linear;
            -webkit-transform: scale(0.5);
            -moz-transform: scale(0.5);
            -o-transform: scale(0.5);
            transform: scale(0.5);
            left: -15%;
        }

        .x4 {
            -webkit-animation: floatUp 4.5s infinite linear;
            -moz-animation: floatUp 4.5s infinite linear;
            -o-animation: floatUp 4.5s infinite linear;
            animation: floatUp 4.5s infinite linear;
            -webkit-transform: scale(1.2);
            -moz-transform: scale(1.2);
            -o-transform: scale(1.2);
            transform: scale(1.2);
            left: -34%;
        }

        .x5 {
            -webkit-animation: floatUp 8s infinite linear;
            -moz-animation: floatUp 8s infinite linear;
            -o-animation: floatUp 8s infinite linear;
            animation: floatUp 8s infinite linear;
            -webkit-transform: scale(2.2);
            -moz-transform: scale(2.2);
            -o-transform: scale(2.2);
            transform: scale(2.2);
            left: -57%;
        }

        .x6 {
            -webkit-animation: floatUp 3s infinite linear;
            -moz-animation: floatUp 3s infinite linear;
            -o-animation: floatUp 3s infinite linear;
            animation: floatUp 3s infinite linear;
            -webkit-transform: scale(0.8);
            -moz-transform: scale(0.8);
            -o-transform: scale(0.8);
            transform: scale(0.8);
            left: -81%;
        }

        .x7 {
            -webkit-animation: floatUp 5.3s infinite linear;
            -moz-animation: floatUp 5.3s infinite linear;
            -o-animation: floatUp 5.3s infinite linear;
            animation: floatUp 5.3s infinite linear;
            -webkit-transform: scale(3.2);
            -moz-transform: scale(3.2);
            -o-transform: scale(3.2);
            transform: scale(3.2);
            left: 37%;
        }

        .x8 {
            -webkit-animation: floatUp 4.7s infinite linear;
            -moz-animation: floatUp 4.7s infinite linear;
            -o-animation: floatUp 4.7s infinite linear;
            animation: floatUp 4.7s infinite linear;
            -webkit-transform: scale(1.7);
            -moz-transform: scale(1.7);
            -o-transform: scale(1.7);
            transform: scale(1.7);
            left: 62%;
        }

        .x9 {
            -webkit-animation: floatUp 4.1s infinite linear;
            -moz-animation: floatUp 4.1s infinite linear;
            -o-animation: floatUp 4.1s infinite linear;
            animation: floatUp 4.1s infinite linear;
            -webkit-transform: scale(0.9);
            -moz-transform: scale(0.9);
            -o-transform: scale(0.9);
            transform: scale(0.9);
            left: 85%;
        }

        button:focus {
            outline: none;
        }

        @-webkit-keyframes floatUp {
            0% {
                top: 100vh;
                opacity: 0;
            }

            25% {
                opacity: 1;
            }

            50% {
                top: 0vh;
                opacity: 0.8;
            }

            75% {
                opacity: 1;
            }

            100% {
                top: -100vh;
                opacity: 0;
            }
        }

        @-moz-keyframes floatUp {
            0% {
                top: 100vh;
                opacity: 0;
            }

            25% {
                opacity: 1;
            }

            50% {
                top: 0vh;
                opacity: 0.8;
            }

            75% {
                opacity: 1;
            }

            100% {
                top: -100vh;
                opacity: 0;
            }
        }

        @-o-keyframes floatUp {
            0% {
                top: 100vh;
                opacity: 0;
            }

            25% {
                opacity: 1;
            }

            50% {
                top: 0vh;
                opacity: 0.8;
            }

            75% {
                opacity: 1;
            }

            100% {
                top: -100vh;
                opacity: 0;
            }
        }

        @keyframes floatUp {
            0% {
                top: 100vh;
                opacity: 0;
            }

            25% {
                opacity: 1;
            }

            50% {
                top: 0vh;
                opacity: 0.8;
            }

            75% {
                opacity: 1;
            }

            100% {
                top: -100vh;
                opacity: 0;
            }
        }

        #head1,
        #head2,
        #head3,
        #head4,
        #head5 {
            opacity: 0;
        }

        #head1 {
            -webkit-animation: fadeOut 1 5s ease-in;
            -moz-animation: fadeOut 1 5s ease-in;
            -o-animation: fadeOut 1 5s ease-in;
            animation: fadeOut 1 5s ease-in;
        }

        #head2 {
            -webkit-animation: fadeOut 1 5s ease-in;
            -moz-animation: fadeOut 1 5s ease-in;
            -o-animation: fadeOut 1 5s ease-in;
            animation: fadeOut 1 5s ease-in;
            -webkit-animation-delay: 6s;
            -moz-animation-delay: 6s;
            -o-animation-delay: 6s;
            animation-delay: 6s;
        }

        #head3 {
            -webkit-animation: fadeOut 1 5s ease-in;
            -moz-animation: fadeOut 1 5s ease-in;
            -o-animation: fadeOut 1 5s ease-in;
            animation: fadeOut 1 5s ease-in;
            -webkit-animation-delay: 12s;
            -moz-animation-delay: 12s;
            -o-animation-delay: 12s;
            animation-delay: 12s;
        }

        #head4 {
            -webkit-animation: fadeOut 1 5s ease-in;
            -moz-animation: fadeOut 1 5s ease-in;
            -o-animation: fadeOut 1 5s ease-in;
            animation: fadeOut 1 5s ease-in;
            -webkit-animation-delay: 17s;
            -moz-animation-delay: 17s;
            -o-animation-delay: 17s;
            animation-delay: 17s;
        }

        #head5 {
            -webkit-animation: finalFade 1 5s ease-in;
            -moz-animation: finalFade 1 5s ease-in;
            -o-animation: finalFade 1 5s ease-in;
            animation: finalFade 1 5s ease-in;
            -webkit-animation-fill-mode: forwards;
            -moz-animation-fill-mode: forwards;
            -o-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
            -webkit-animation-delay: 22s;
            -moz-animation-delay: 22s;
            -o-animation-delay: 22s;
            animation-delay: 22s;
        }

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @-moz-keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @-o-keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeOut {
            0% {
                opacity: 0;
            }

            30% {
                opacity: 1;
            }

            80% {
                opacity: 0.9;
            }

            100% {
                opacity: 0;
            }
        }

        @-moz-keyframes fadeOut {
            0% {
                opacity: 0;
            }

            30% {
                opacity: 1;
            }

            80% {
                opacity: 0.9;
            }

            100% {
                opacity: 0;
            }
        }

        @-o-keyframes fadeOut {
            0% {
                opacity: 0;
            }

            30% {
                opacity: 1;
            }

            80% {
                opacity: 0.9;
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes fadeOut {
            0% {
                opacity: 0;
            }

            30% {
                opacity: 1;
            }

            80% {
                opacity: 0.9;
            }

            100% {
                opacity: 0;
            }
        }

        @-webkit-keyframes finalFade {
            0% {
                opacity: 0;
            }

            30% {
                opacity: 1;
            }

            80% {
                opacity: 0.9;
            }

            100% {
                opacity: 1;
            }
        }

        @-moz-keyframes finalFade {
            0% {
                opacity: 0;
            }

            30% {
                opacity: 1;
            }

            80% {
                opacity: 0.9;
            }

            100% {
                opacity: 1;
            }
        }

        @-o-keyframes finalFade {
            0% {
                opacity: 0;
            }

            30% {
                opacity: 1;
            }

            80% {
                opacity: 0.9;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes finalFade {
            0% {
                opacity: 0;
            }

            30% {
                opacity: 1;
            }

            80% {
                opacity: 0.9;
            }

            100% {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <div class='light x1'></div>
    <div class='light x2'></div>
    <div class='light x3'></div>
    <div class='light x4'></div>
    <div class='light x5'></div>
    <div class='light x6'></div>
    <div class='light x7'></div>
    <div class='light x8'></div>
    <div class='light x9'></div>
</body>

</html>