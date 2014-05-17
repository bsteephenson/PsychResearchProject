<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

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
      @yield('css')
    </style>
    <script type="text/javascript">
    $(document).ready(function(){
      @yield('javascript')      
    });
    </script>

  </head>
  <body>
    <div id='content'>
      @yield('body')
    </div>
  </body>
</html>
