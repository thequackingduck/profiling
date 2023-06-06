<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="{{URL::to('admin/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{URL::to('admin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{URL::to('admin/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/css/DragAndDropUpload.css')}}">
    <!-- Main CSS-->
    <link href="{{URL::to('admin/css/theme.css')}}" rel="stylesheet" media="all">
    <style>
        .login-content{
            position: absolute;
            right: 5%;
            top: 9%;
            height: auto;
            width: auto;         
    }
    
   
    .page-content--bge5{
            background-color: #8BC6FC;
    }
    .container{
            background: rgba(255,255,255 0);
            box-shadow: 20px 20px 30px black;
            height: 80%;
            width: 90%;
            position: absolute;
            top: 10%;
            left: 5.5%;
            border-radius: 10px;
            display: inline-block;
           
    }
    .guidance{
        display: block;
        position: absolute;
        top: 5%;
        left: 2%;
        height: 100%;
        width: auto;
        
    }
    .bisu{
        position: absolute;
        top: 24px;
        left: 85px;
        width: auto;
        font-size: 15px;
        line-height: 13px;
        font-family: 'Poppins', sans-serif;
        color: black;
        
    }
    .logo{
        margin: 15px 0 0 12px;
        width: 50px;
        height: 50px;
        position: relative;
    }
    .text{
        text-align: center;
        padding-top: 20px;
        line-height: 30px;
        font-weight: bold;
        font-family: 'Noe Display', sans-serif;
        
       
        background-image: linear-gradient(
                    -225deg,
            #088F8F 0%,
            #6495ED 29%,
            #0047AB 67%,
            #1434A4 100%
  );
        background-size: auto auto;
        background-clip: border-box;
        background-size: 200% auto;
        color: #008080;
        background-clip: text;
        text-fill-color: transparent;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: textclip 2s linear infinite;
        display: inline-block;
        font-size: 30px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
      
      .login-form{
        color: black;
      }
    footer{
        position: absolute;
        bottom: 0.5%;
        left: 10px;
        opacity: 0.3;
    }
    .bg{
        
        height: 100%;
        width: 100%;
        -webkit-transform: scaleX(-1);
        transform: scaleX(-1);
    }
        .pass_show{position: relative} 

        .pass_show .ptxt { 
            position: absolute; 
            top: 72%;
            right: 10px; 
            z-index: 1; 
            color: #f36c01; 
            margin-top: -10px; 
            cursor: pointer; 
            transition: .3s ease all; 
            font-size: 12px;
        } 

        .pass_show .ptxt:hover{color: #333333;} 
    </style>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5" >
        <img class="bg" src="/admin/images/background4.png" alt="guidance"> 
            <div class="container">
            <img class="guidance" src="/admin/images/guidance.png" alt="guidance"> 
            <div>
            <img class="logo" src="/admin/images/logo.png" alt="guidance">
                <p class="bisu">Bohol Island State University <br> Balilihan Campus</p>
                </div>
                <div class="login-wrap">
                    <div class="login-content">
                    <div class= "text">
                        <p > Guidance Individual <br>Profiling System <br></p>
                        </div>
                        <br>
                       
                        <div class="login-form">
                            <form method="POST" action="{{ route('login') }}" autocomplete="off">
                                @csrf
                                <div class="form-group">
                                    <label>Username / Student ID</label>
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="border: 1px solid rgba(0,0,0,.125);" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                    
                                </div>
                                <div class="form-group pass_show">
                                    <label>Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="border: 1px solid rgba(0,0,0,.125);">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" style="background-color: #00ABE4;">log in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
  <p> Copyright 2023, BISU Balilihan. All Rights Reserved.<br></p>
</footer>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{URL::to('admin/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{URL::to('admin/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{URL::to('admin/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{URL::to('admin/vendor/wow/wow.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{URL::to('admin/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{URL::to('admin/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{URL::to('admin/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <!-- Main JS-->
    <script src="{{URL::to('admin/js/main.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('.pass_show').append('<span class="ptxt">Show</span>');  
            });
            

            $(document).on('click','.pass_show .ptxt', function(){ 

            $(this).text($(this).text() == "Show" ? "Hide" : "Show"); 

            $(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; }); 

        });  
    </script>
</body>

</html>
<!-- end document-->