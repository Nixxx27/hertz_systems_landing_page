<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="script-src 'self' www.googletagmanager.com connect.facebook.net cdn.jsdelivr.net www.google-analytics.com www.googleadservices.com googleads.g.doubleclick.net https://*.googleapis.com https://*.gstatic.com *.google.com *.googleusercontent.com
	'unsafe-inline'; ">
    <meta content="text/html; charset=UTF-8; X-Content-Type-Options=nosniff" http-equiv="Content-Type" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="Xno8DZf17zgjJQ2LvCBM6r8q7MmjlzcY35ZMgO7u"><title>Hertz Systems Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{asset('assets/css/app.css')}}" rel="stylesheet">

    <style media="screen">

        :root {
            --hertz-color:#ffcc00;
            --hertz-btn-bg:#ffab40;
            --hertz-gray:#58594b;
            --hertz-gray-light:#808285;
            --hertz-border-color:#f3dd87;
            --hertz-min-width: 32rem;
            --hertz-max-width: 48rem;
            --hertz-nav-height: 3.5rem;
        }

        .container {
            height: 100vh;
            align-items: center;
        }

        .login {
            background-color: #FFFFFF;
            width: 100%;
            max-width: 768px;
            height: 100%;
            max-height: 650px;
            border-radius: 2rem;
        }

        form {
            padding: 0rem 1.5rem;
            width: 50%;
        }

        .logo-card {
            padding-top: 50px;
            width: 50%;
        }
        
        .logo {
            text-align: center;
            width: 195px;
            height: 68px;
        }

        .header {
            width: 50%;
            font-weight: 700;
            padding-top: 45px;
            padding-bottom: 10px;
        }

        .hertz-login-form-field {
            position: relative;
            padding: 10px 0;
        }
    

        .hertz-login-form-field span{
            display: none; 
            position: absolute; 
            top: 30%; 
            right: 30px; 
            cursor: pointer;
        }

        .hertz-login-form-field img {
            width: 20px;
            cursor: pointer;
            display: flex;
            position: absolute;
        }
        
        .hertz-login-form-field label {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: gray;
            pointer-events: none;
            font-weight: 600;
            font-size: 15px;
            margin-left: 10px;
            transition: 0.5s ease;
        }
        
        .hertz-login-form-field.focus:before {
            right: 50%;
        }
        
        .hertz-login-form-field.focus:after {
            left: 50%;
        }
        
        .hertz-login-form-field.focus:before, 
        .hertz-login-form-field.focus:after {
            width: 50%;
        }
        
        .hertz-login-form-field.focus label {
            color: #1c1c1c;
            background-color: #FFFFFF;
            top: 7px;
            font-size: 12px;
            font-weight: 600;
        }

        .hertz-login-form-field input.hertz-input{
            background: #FFFFFF;
            border: 1px solid #808285;
            border-radius: 5px; 
            padding: 5px 0px 5px 20px;
            font-weight: 500;
            font-size: 13px;
            margin: 3px;
        }
        
        .hertz-login-form-field input.hertz-input:focus {
            border: 2px solid  #1c1c1c;
        }
    
        
        .hertz-login-form-field input:not(:placeholder-shown) {
            border: 1px solid #1c1c1c;
        }

        @keyframes onAutoFillStart {}
        
        input:-webkit-autofill {
            animation-name: onAutoFillStart;
            animation-duration: 0.01s;
            animation-iteration-count: 1;
            -webkit-box-shadow: 0 0 0px 1000px #FFFFFF inset !important;
            box-shadow: 0 0 0px 1000px #FFFFFF inset !important;
        }
        
        .hertz-login-form-field.focus label,
        .hertz-login-form-field input.filled + label,
        .hertz-login-form-field input:-webkit-autofill + label {
            font-size: 11px;
            color: #1c1c1c;
            background: #FFFFFF;
            padding: 0 4px;
        }


        .hertz-login-form-field input.hertz-input.valid {
            border: 1px solid #1c1c1c;
        }
        
        .hertz-login-form-field input.hertz-input.invalid {
            border: 2px solid #e3342f;
        }

        .hertz-login-form-field.error label {
            color:  #e3342f;
        }

        .error-msg {
            color: #e3342f;
            display: none;
            font-size: 12px;
            font-weight: 600;
            padding-bottom: 8px;
        }
        
        .error-msg.visible {
            display: block;
        }
        
        .hertz-login-form-field.error .email-icon {
            color: #e3342f;
        }

        .error-icon {
            color:  #e3342f;
        }
        
        .form-option {
            padding: 10px 0px 10px 0px;
        }

        .text-muted {
            font-size: 11px;
            font-weight: 600;
        }

        .btn-link
        {
            font-weight: 600;
            font-size: 11px;
            color: #343a40;
            text-decoration: none  !important;
        }   

        .btn-link:hover {
            color: #FFC400;
            text-decoration: uderline;
        }

        .btn-signin {
            padding-top: 1px;
        }
        
        .signup {
            color: black;
            font-weight: 500;
            font-size: 12px;
            padding: 15px 0px 0px 0px;
        }

        .signup a {
            font-weight: 700;
        }

        .signup a:hover {
            color: #FFC400;
            text-decoration: underline;
        }
        
        .custom-checkbox {
            background-color: white;
            border: 1px solid black;
            border-radius: 1px;
            cursor: pointer;
        }
        
        .custom-checkbox:checked {
            background-color: #ffcc00;
        }
        
        .sign-in-btn {
            background: #ffcc00;
            box-shadow: 0px 4px 5px #00000040;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .sign-in-btn:hover {
            background-color: #FFE04D;
        }

        .tint-overlay {
            background: linear-gradient(90deg, rgba(0, 0, 0, 0.2) 10%, rgba(0, 0, 0, 0.99) 50%, rgba(0, 0, 0, 0.2) 90%);
            background-size: cover;
            overflow: hidden;
        }
        
        .body-bg {
            background-image: url(/img/BlackBG.png);
            background-size: cover;
            overflow: hidden;
        }

        .body-bg::before{
            content: "";
            display: block;
            position: absolute;
            z-index: -10;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: #353535;
            background: -webkit-linear-gradient(bottom, #353535, #656565);
            opacity: 0.6;
        }

        a {
            color: #212529;
            text-decoration: none;
            background-color: transparent;
        }
        a:hover {
            color: #ffcc00;
            text-decoration: none !important;

        }

        .toggle-container{
            justify content: center;
            align-items: center;
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: all 0.6s ease-in-out;
            border-radius: 30px 0 0 30px;
            z-index: 1000;
        }
        
        .toggle-container img {
            left: -50%;
            position: absolute;
            justify content: center;
            align-items: center;
            display: flex;
            height: 100%;
            width: 1080px;
        }
        
        .toggle{
            justify content: center;
            align-items: center;
            height: 100%;
            color: #fff;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: all 0.6s ease-in-out;
        }
        
        .toggle-overlay {
            right: 0;
            background-color: rgba(0,0,0,0.75);
            position: absolute;
            width: 50%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 30px;
            text-align: center;
            top: 0;
            transform: translateX(0);
            transition: all 0.6s ease-in-out;
        }
        
        .toggle h2 {
            position: absolute;
            top: 40%;
            font-weight: 700;
            font-size: 40px;
            color: #FFFFFF;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeAscend 1s ease-out forwards;
        }
        
        .toggle h1 {
            position: absolute;
            top: 47%;
            font-size: 45px;
            font-weight: 800;
            color: #ffcc00;
             opacity: 0;
             transform: translateY(20px);
             animation: fadeAscend 1.5s ease-out forwards;
        }

        @keyframes fadeAscend {
            to {
                 opacity: 1;
                 transform: translateY(0);
                }
            }

        footer {
            width: 50%;
            padding-top: 15px;
            padding-bottom: 10px;
        }
                
        .dpo-container{
            color: #808285;
            font-size: 15px;
            font-weight: 500;
            gap: 12px;
        }

        .dpo-container img{
            cursor: pointer;
        }

        .dpo-container .sticker{
            width: 50px;
            height: 45px;
            object-fit: contain;
            display: block;
        }

        .footer-group .sticker:hover {
         transform: scale(1.1);
        }

        .dpo-container .certificate{
            width: 100px;
            height: 45px;
            object-fit: contain;
            display: block;
        }

        .footer-group .certificate:hover {
         transform: scale(1.1);
        }

        .copyright{
            font-size: 10px;
        }

       .footer-group {
            background-color: rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(5px);
            border-radius: 0.5rem;
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1);
            width: 100px;
            height: 50px;
        }
            

        .rounded {
            border-radius: 0.5px;
        }

        .modal img.sticker{
            width: 177px;
            height: 328px;
            object-fit: cover;
        }

        .modal img.category{
            width: fit-content;
            height: 328px;
            object-fit: contain;
        }

        .modal .btn-close{
            background-color: black !important;
            color: white !important;
            font-size: 15px;
            font-weight: 500;
        }

        @media (max-width: 350px) {
            .container {
                padding: 5vh;
            }

            .logo-card {
                padding-top: 5px;
                width: 100%;
            }

             .header {
                padding: 1px 0px 0px 0px;
                width: 100%;
            }

            form {
                padding: 1px;
            }

            .login {
                height: 400px;
                padding: 1rem;
                overflow-y: auto;
            }

            .logo {
             width: 90px;
             height: 36px;
             padding: 0px 0px 5px;
            }

            form {
                width: 100%;
            }

            .hertz-login-form-field {
            padding: 1px 0;
        }
            
            .hertz-login-form-field label {
                font-size: 12px;
            }
            
            .hertz-login-form-field.focus label {
                font-size: 10px;
            }
            
            .hertz-login-form-field input.hertz-input {
                font-size: 12px;
            }
            
            .form-option {
                padding-top: 2px;
                font-size: 10px;
            }
            
            .error-msg {
                font-size: 10px;
            }
            
            .text-muted {
                font-size: 9px;
            }
            
            .btn-link {
                font-size: 9px;
            }
            
            .signup {
                font-size: 11px;
                padding: 5px 0px 0px 0px;
            }
            
            .sign-in-btn {
                font-size: 12px;
            }
            
            .copyright{
            font-size: 8.5px;
        }

            .btn-signin {
            padding-top: 1px;
        }

        footer {
            padding-top: 1px;
            width: 100%;
        }

        .dpo-container .sticker{
            width: 50px;
            height: 45px;
            object-fit: contain;
        }

        .dpo-container .certificate{
            width: 58px;
            height: 26px;
            object-fit: contain;
        }

        .toggle-container {
            display: none;
        }

        }

        
                        
        @media (min-width: 350px) and (max-width: 760px) {

            .container {
                padding: 5vh;
            }

            .logo-card {
                width: 100%;
            }

            .login {
                height: 600px;
                padding: 1rem;
                overflow-y: auto;
            }

            .header {
                padding-top: 20px;
                padding-bottom: 1px;
                width: 100%;
            }

            form {
                padding: 0 5px;
                width: 100%;
            }

            .hertz-login-form-field input.hertz-input {
                font-size: 12px;
            }

            footer {
            width: 100%;
            padding-top: 3px;
            padding-bottom: 20px
        }

            .copyright{
            font-size: 9px;
        }

        .toggle-container {
            display: none;
        }

        }

        .jconfirm .jconfirm-box.jconfirm-type-hertz{
            border-top: solid 1px var(--hertz-color);
            -webkit-animation-name: type-hertz;
            animation-name: type-hertz;
        }
        @-webkit-keyframes type-hertz{
            1%,
            100%{
                border-color:var(--hertz-color)
            }
            50%{
                border-color:var(--hertz-color)
            }
        }
        @keyframes  type-hertz{
            1%,
            100%{
                border-color:var(--hertz-color)
            }
            50%{
                border-color:var(--hertz-color)
            }
        }

        /* overlay */
    </style>

    <style media="screen">
        /* Loading CSS */
        .w-49{
            width: 48.5% !important;
        }
        .w-33{
            width: 32% !important;
        }
        .ul-li{
            height: 65px !important;
        }
        .input-box{
            height: 35px !important;
        }
        .shine {
        	width:100%;
        	background: #f6f7f8;
        	background-image: linear-gradient(to right, #f6f7f8 0%, #edeef1 20%, #f6f7f8 40%, #f6f7f8 100%);
        	background-repeat: no-repeat;
        	background-size: 800px 104px;
        	display: inline-block;
        	position: relative;

        	-webkit-animation-duration: 1s;
        	-webkit-animation-fill-mode: forwards;
        	-webkit-animation-iteration-count: infinite;
        	-webkit-animation-name: placeholderShimmer;
        	-webkit-animation-timing-function: linear;
        }
        @-webkit-keyframes placeholderShimmer {
          0% {
            background-position: -468px 0;
          }

          100% {
            background-position: 468px 0;
          }
        }
    </style>
    <style media="screen">
        /* Customize Radio Button */
        .hertz-radios label {
            display: block;
            position: relative;
            height: 1em;
            cursor: pointer;
            font-size: 1rem;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            color: #555;
            letter-spacing: 1px;
        }
        .hertz-radios label:hover input:not(:checked) ~ .radio {
            opacity: 0.8;
        }
        .hertz-radios .label {
            /* display: -webkit-box;
            display: flex; */
            -webkit-box-align: center;
            align-items: center;
            /* padding-left: 1.5rem; */
        }
        .hertz-radios .label span {
            line-height: 1em;
        }
        .hertz-radios input {
            position: absolute;
            cursor: pointer;
            height: 0;
            width: 0;
            left: -2000px;
        }
        .hertz-radios input:checked ~ .radio {
            background-color: var(--hertz-color);
            -webkit-transition: background .3s;
            transition: background .3s;
        }
        .hertz-radios input:checked ~ .radio::after {
            opacity: 1;
        }
        .hertz-radios input:checked ~ .label {
            //color: var(--hertz-color);
            border-bottom: 1px solid var(--hertz-color);
        }
        .radio {
            position: absolute;
            top: 0.2rem;
            left: 0;
            height: 1rem;
            width: 1rem;
            background-color: var(--hertz-gray-light);
            border-radius: 50%;
        }
        .radio::after {
            content: '';
            position: absolute;
            opacity: 0;
            top: .25rem;
            left: .25rem;
            width: .5rem;
            height: .5rem;
            border-radius: 50%;
            background: #fff;
        }

        </style>

        <style media="screen">
        .btn-hertz:hover{
            color: #FFF;
        }
        .btn-hertz:focus{
            box-shadow: none !important;
        }
        .btn-hertz{
            background-color: var(--hertz-color);
            border-color: var(--hertz-border-color);
        	color: #000;
            box-shadow: none;
        }
        .input-label{
            position: absolute;
            top: 6px;
            left: 5px;
            font-size: .75rem;
            color: var(--hertz-gray-light);
            margin-bottom: 0 !important;
        }
        .g-maps{
            padding-left: 40px;
            padding-right: 50px !important;
        }
        .datetime-input{
            padding-left: 70px;
            //padding-right: calc(1.6em + 0.75rem);
        }
        .datetime-input:valid{
            //background-position: right calc(1.4em) bottom 0.3rem !important;

        }
        .datetime-input:invalid{
            //background-position: right calc(1.4em) bottom 0.3rem !important;
        }
        .form-input{
            background: #ffffff !important;
            border-radius: 5px;
        }
    </style>
    <style media="screen">
        /* Loading Form */
        .spinner {
            margin: 0 auto;
            width: 50px;
            height: 20px;
            text-align: center;
            font-size: 10px;
        }

        .spinner > div {
            background-color: #333;
            height: 100%;
            width: 6px;
            display: inline-block;

            -webkit-animation: sk-stretchdelay 1.2s infinite ease-in-out;
            animation: sk-stretchdelay 1.2s infinite ease-in-out;
        }

        .spinner .rect2 {
            -webkit-animation-delay: -1.1s;
            animation-delay: -1.1s;
        }

        .spinner .rect3 {
            -webkit-animation-delay: -1.0s;
            animation-delay: -1.0s;
        }

        .spinner .rect4 {
            -webkit-animation-delay: -0.9s;
            animation-delay: -0.9s;
        }

        .spinner .rect5 {
            -webkit-animation-delay: -0.8s;
            animation-delay: -0.8s;
        }

        @-webkit-keyframes sk-stretchdelay {
            0%, 40%, 100% { -webkit-transform: scaleY(0.4) }
            20% { -webkit-transform: scaleY(1.0) }
        }

        @keyframes  sk-stretchdelay {
            0%, 40%, 100% {
                transform: scaleY(0.4);
                -webkit-transform: scaleY(0.4);
                }  20% {
                    transform: scaleY(1.0);
                    -webkit-transform: scaleY(1.0);
                }
            }
    </style>
    <style media="screen">
    /* Flat Radio Button */
        .button-wrap {
            position: relative;
            text-align: center;
            width: 100%;
        }
        .button-label-services {
            display: flex;
            padding: .2em 2em;
            width: 100%;
            cursor: pointer;
            color: #292929;
            border-radius: 0.25em;
            background: #efefef;
            box-shadow: 0 0px 0px rgba(0, 0, 0, 0.2), inset 0 -3px 0 rgba(0, 0, 0, 0.22);
            -webkit-transition: 0.3s;
            transition: 0.3s;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            margin: 0.25rem;
            white-space: nowrap;
        }
        .button-label-services h1 {
            font-size: 1em;
            margin: 0 auto !important;
            padding: .2rem;
        }
        .button-label-services:hover {
            background: #d6d6d6;
            color: #101010;
            box-shadow: 0 0px 0px rgba(0, 0, 0, 0.2), inset 0 -3px 0 rgba(0, 0, 0, 0.32);
        }
        .button-label-services:active {
            -webkit-transform: translateY(2px);
            transform: translateY(2px);
            box-shadow: 0 0px 0px rgba(0, 0, 0, 0.2), inset 0px -1px 0 rgba(0, 0, 0, 0.22);
        }
        .hertz-radio-button:checked + .button-label-services {
            background: #ffcc00;
            color: #000;
        }
        .hertz-radio-button:checked + .button-label-services:hover {
            background: #ffcc00;
            color: #000;
        }
        .button-label {
            display: flex;
            padding: .2em 2em;
            width: 100%;
            cursor: pointer;
            color: #292929;
            border-radius: 0.25em;
            background: #efefef;
            box-shadow: 0 0px 0px rgba(0, 0, 0, 0.2), inset 0 -3px 0 rgba(0, 0, 0, 0.22);
            -webkit-transition: 0.3s;
            transition: 0.3s;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            margin: 0.25rem;
            white-space: nowrap;
        }
        .button-label h1 {
            font-size: 1em;
            margin: 0 auto !important;
            padding: .2rem;
        }
        .button-label:hover {
            background: #d6d6d6;
            color: #101010;
            box-shadow: 0 0px 0px rgba(0, 0, 0, 0.2), inset 0 -3px 0 rgba(0, 0, 0, 0.32);
        }
        .button-label:active {
            -webkit-transform: translateY(2px);
            transform: translateY(2px);
            box-shadow: 0 0px 0px rgba(0, 0, 0, 0.2), inset 0px -1px 0 rgba(0, 0, 0, 0.22);
        }
        .hertz-radio-button:checked + .button-label {
            background: #ffcc00;
            color: #000;
        }
        .hertz-radio-button:checked + .button-label:hover {
            background: #ffcc00;
            color: #000;
        }
        .hidden {
            display: none;
        }
    </style>
    
    <script type="text/javascript">
        var loadingChForm = '<div class="loading w-100">';
                loadingChForm += '<div class="shine input-box mb-2"></div>';
                loadingChForm += '<div class="shine input-box mb-2"></div>';
                loadingChForm += '<div class="shine input-box mb-2"></div>';
                loadingChForm += '<div class="shine input-box mb-2 w-49 mr-1"></div>';
                loadingChForm += '<div class="shine input-box mb-2 w-49 ml-1"></div>';
            loadingChForm += '</div>';
        var loadingTForm = '<div class="loading w-100">';
                loadingTForm += '<div class="shine input-box mb-2"></div>';
                loadingTForm += '<div class="shine input-box mb-2"></div>';
                loadingTForm += '<div class="shine input-box mb-2 w-49 mr-1"></div>';
                loadingTForm += '<div class="shine input-box mb-2 w-49 ml-1"></div>';
            loadingTForm += '</div>';
        var loadingUl = '<div class="loading w-100">';
                loadingUl += '<p class="shine">&nbsp;</p>';
                loadingUl += '<div class="shine mb-2 ul-li"></div>';
                loadingUl += '<div class="shine mb-2 ul-li"></div>';
                loadingUl += '<div class="shine mb-2 ul-li"></div>';
            loadingUl += '</div>';
        var loadingForm = '<div class="spinner"> <div class="rect1"></div>  <div class="rect2"></div>  <div class="rect3"></div>  <div class="rect4"></div>  <div class="rect5"></div></div>';
    </script>
</head>
<body>
    <div id="app">
        <div class="vh-100 body-bg ">
            <div class="tint-overlay">
            <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="container d-flex align-items-center justify-content-center">
                        <div class="card login overflow-hidden"> 
                            <div class="d-flex justify-content-center logo-card">
                                <img class="logo" src="/img/Hertz_Primary_Logo_Black_Yellow_Line_RGB.png" alt="Hertz Logo" />
                            </div>
                                <div class="text-center header">
                                    <h3>Sign In</h3></div>
                            <div class="form-group align-items-center">
                                    <!--  -->
                                    @include('notifications.error')
                                    <form method="POST" id="login-form" class="align-items-center" action="{{ route('login') }}">
                                        @csrf
                                        <div class="pt-2 hertz-login-form-field">
                                            <div class="input-wrapper">
                                                <label for="">Enter E-mail Address</label>
                                                <input id="email" type="email" class="form-control hertz-input" placeholder=" " name="email" value="" required  autofocus>
                                            </div></div>
                                            <div id="email-error" class="error-msg">Please enter a valid E-mail Address</div>

                                            <div class="pt-2 hertz-login-form-field">
                                                    <span id="toggle-password">
                                                        <img class="hide" src="/img/hidden.png" alt="Hide Password" id="hide-icon" />
                                                        <img class="show" src="/img/eye.png" alt="Show Password" id="show-icon" />
                                                    </span>   
                                                    <div class="input-wrapper">
                                                        <label for="">Enter Password</label>
                                                        <input id="password" type="password" class="form-control hertz-input" placeholder=" " name="password" required autocomplete="off">
                                                    </div></div>
                                                    <div class="d-flex justify-content-between form-option">
                                                        <div class="form-group text-sm-start form-check" >
                                                            <input type="checkbox" class="form-check-input custom-checkbox" id="remember">
                                                            <label class="form-check-label text-muted" for="remember">Remember Me</label>
                                                        </div>
                                                        <div class="w-60 text-right">
                                                            @if (Route::has('password.request'))
                                                            <a title="Reset password?" class="btn btn-link" href="{{ route('password.request') }}">
                                                                {{ __('Forgot Your Password?') }}
                                                            </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-center btn-signin">
                                                        <button type="button" class="btn btn-warning pl-3 pr-3 font-weight-bold text-nowrap w-50 sign-in-btn" id="btnSubmit">Sign In</button></div>
                                                    </form>
                                                </div>
                                                 <footer class="mt-auto position-relative z-index-1 small border-top">
                                                    <div class="d-flex flex-column justify-content-center align-items-center w-100 text-center">
                                                        <div class="d-flex justify-content-center align-items-center mb-md-0 footer-group">
                                                            <img src="{{ asset('img/dpo/sticker.png') }}" alt="DPO Sticker"
                                                            class="sticker mr-1 img-fluid seal rounded" style="width: 24px; height: auto;"
                                                            data-toggle="modal" data-target="#dpoStickerModal">
                                                            <img src="{{ asset('img/dpo/certificate.png') }}" alt="DPO Certificate"
                                                            class="certificate ml-1 img-fluid seal rounded" style="width: 60px; height: auto;"
                                                            data-toggle="modal" data-target="#dpoCertificateModal">
                                                        </div>
                                                        <p class="m-0 text-dark flex-grow-1 order-2 order-md-1 copyright">
                                                            Copyright © {{ now()->year }} Hertz Philippines. All rights reserved.</p>
                                                        </div>
                                                    </footer>
                                                    <div class="toggle-container">
                                                        <img class="toggle-bg" src="/img/Hertz_BG.jpg" alt="Hertz BG" />
                                                        <div class="toggle">    
                                                            <div class="toggle-overlay">
                                                                <h2>Right ride.<br>Right here.</h2>
                                                                <h1><br>Right now.</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <script type="text/javascript">
                                                    $(document).ready(function () {
                                                        $("#btnSubmit").on('click', function () {
                                                            $(this).html('Signing in...');
                                                            $(this).prop('disabled', true);
                                                            document.getElementById('login-form').submit();
                                                        });
                                                        $(".hertz-input").keyup(function(event) {
                                                            if (event.keyCode === 13) {
                                                                $('#btnSubmit').trigger('click');
                                                                }
                                                            });
                                                        });
                                                    </script>
                                      <script>
document.addEventListener('DOMContentLoaded', function () {
  // Password field
  const passwordInput = document.getElementById('password');
  const togglePassword = document.getElementById('toggle-password');
  const hideIcon = document.getElementById('hide-icon');
  const showIcon = document.getElementById('show-icon');
  passwordInput.addEventListener('input', function () {
    if (this.value.length > 0) {
      togglePassword.style.display = 'block';
    } else {
      togglePassword.style.display = 'none';
      passwordInput.type = 'password';
      hideIcon.style.display = 'block';
      showIcon.style.display = 'none';
    }
  });
  togglePassword.addEventListener('click', function () {
    const isHidden = passwordInput.type === 'password';
    passwordInput.type = isHidden ? 'text' : 'password';
    hideIcon.style.display = isHidden ? 'none' : 'block';
    showIcon.style.display = isHidden ? 'block' : 'none';
  });
});
</script>
                                                     <script>
                                                     const emailInput = document.getElementById('email');
                                                     const errorMsg = document.getElementById('email-error');
                                                     const formField = emailInput.closest('.hertz-login-form-field');
                                                     
                                                     emailInput.addEventListener('blur', () => {
                                                        const emailValue = emailInput.value.trim();
                                                        const isValidFormat = emailInput.checkValidity();
                                                        
                                                        if (emailValue !== '' && !isValidFormat) {
                                                            errorMsg.classList.add('visible');
                                                            emailInput.classList.add('invalid');
                                                            formField.classList.add('error')
                                                        } else {
                                                            errorMsg.classList.remove('visible');
                                                            emailInput.classList.remove('invalid');
                                                            formField.classList.remove('error')
                                                        }
                                                    });

                                                    emailInput.addEventListener('input', () => {
                                                        errorMsg.classList.remove('visible');
                                                        emailInput.classList.remove('invalid');
                                                        });
                                                        </script>

                                                    <script>
                                                        window.addEventListener('DOMContentLoaded', () => {
                                                            const inputs = document.querySelectorAll('.hertz-login-form-field input');
                                                            
                                                            inputs.forEach(input => {
                                                                const parent = input.closest('.hertz-login-form-field');
                                                                
                                                                if (input.value.trim() !== '') {
                                                                    parent.classList.add('focus');
                                                                    input.classList.add('filled');
                                                                }
                                                                
                                                                input.addEventListener('focus', () => {
                                                                     parent.classList.add('focus');
                                                                    });

                                                                    input.addEventListener('blur', () => {
                                                                        if (input.value.trim() === '') {
                                                                            parent.classList.remove('focus');
                                                                            input.classList.remove('filled');
                                                                        }
                                                                    });
                                                                    
                                                                    input.addEventListener('input', () => {
                                                                        if (input.value.trim() !== '') {
                                                                            input.classList.add('filled');
                                                                            parent.classList.add('focus');
                                                                        } else {
                                                                            input.classList.remove('filled');
                                                                            parent.classList.remove('focus');
                                                                        }
                                                                    });
                                                                });
                                                            });
                                                            
                                                            document.addEventListener('animationstart', (e) => {
                                                                if (e.animationName === 'onAutoFillStart') {
                                                                    const input = e.target;
                                                                    const parent = input.closest('.hertz-login-form-field');
                                                                    if (input && parent) {
                                                                         input.classList.add('filled');
                                                                          parent.classList.add('focus');
                                                                        }
                                                                    }
                                                                });

                                                            </script>
                                                            </div>
                                            </div>
                                            <!-- The Modal -->
                                             @include('dpo.modal')
    </body>
</html>