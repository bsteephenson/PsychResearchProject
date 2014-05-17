<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personality Study</title>
    <link rel="shortcut icon" type="image/x-icon" href={{asset('img/minilogo.ico')}} />

    <!-- Bootstrap -->
    {{HTML::style("css/bootstrap.min.css")}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{HTML::script("js/bootstrap.min.js")}}

    {{HTML::script("js/raphael.js")}}
    {{HTML::script("js/progressstep.js")}}

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
    <style>
      body{
        background-color: #4D6684;
        color: #BEC9D6;
        font-family: 'Open Sans', 'sans-serif';
        font-weight: 300;
        font-size: 20px;
      }
      a{
        color: #83AA30;
      }
      a:hover{
        color: #83AA30;
      }
      div#content{
        margin-left: 15%;
        margin-right: 15%;
        margin-top: 15px;

      }
      #mainHeader{
        width:75%;
        margin: 0 auto;
        text-align: center;
        font-size: 40px;
        font-weight: 100;
      }
      #mainHeader>img{
        margin: 0 auto;
        margin-bottom: 10px;
        display: block;
        width: 100px;
      }
      #progressBar{
        height: 75px;
        width: 300px;
        margin: 0 auto;
      }
      #logout{
        margin-top: 10px;
        font-size: 10px;
        text-align: center;
      }

      input[type="text"]{
        text-align: center;
        width: 75%;
        height: 50px;
        margin-left : 12.5%;
        margin-right : 12.5%;
        margin-top: 25px;
        margin-bottom: 25px;
        font-weight: 400;
        background-color: #F8ECC2;
        letter-spacing: -1px;
        font-size: 20px;
      }
      .center{
        width: 20%;
        margin-left: 40%;
        margin-right: :40%;
        margin-top: 10px;
      }
      @yield('css')
    </style>
    <script type="text/javascript">
    $(document).ready(function(){

      $('input[type="submit"]').each(function(index, value){
        $(value).addClass('btn btn-success btn-large');
      });

      <?php if(isset($numberOfSteps) && isset($stepNumber)) : ?>
        var $progressDiv = $("#progressBar");  
        var $progressBar = $progressDiv.progressStep({ radius : 8, strokeWidth : 4,strokeColor: '#83AA30', 
          fillColor : '#4D6684', activeColor: '#83AA30', visitedFillColor : '#83AA30',  marginTop : 20, labelOffset : 20 });
        
        for(var a = 0; a < {{$numberOfSteps}}; a++){
          $progressBar.addStep("something");
        }

        $progressBar.refreshLayout();  
        
        for(var a = 0; a < {{$stepNumber}}; a++){
          $progressBar.setCurrentStep(a);        
        }
      <?php endif; ?>
      @yield('javascript')      
    });
    </script>

  </head>
  <body>
    <div id='content'>
      <div id='mainHeader'>
        <img src={{asset('img/logo.png')}}></img>
        Fancy Psych Study
      </div>
      <?php if(isset($numberOfSteps) && isset($stepNumber)) : ?>
        <div id='progressBar'></div>
      <?php endif; ?>
      @yield('body')

      <div id='logout'>
        {{link_to_action('SessionController@getLogout', 'LogOut')}}
      </div>
    </div>
  </body>
</html>
