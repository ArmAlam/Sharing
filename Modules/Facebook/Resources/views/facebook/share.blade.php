{{--
  
  
  ************* This works for Live Domain added in Facebook App*******************

 <html>
<head>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Facebook</title>
</head>
<body>
    <script>
        window.fbAsyncInit = function() {
          FB.init({
            appId            : '287026175872629',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v7.0'
          });
        };
      </script>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>


    <div id="share" class="btn btn-primary btn-sm clearfix">Share via Facebook</div>
    <script>
        document.getElementById('share').onclick = function() {
            FB.ui({
            method: 'share',
            href: 'https://www.orangetoolz.com',
            }, function(response){});
        }
    </script>
</body> --}}

























<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sharing via Facebook</title>
</head>
<body>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0&appId=287026175872629&autoLogAppEvents=1" nonce="ClcOph3Q"></script>
<div class="container">
    <div class="col-md-6">
        <div class="fb-share-button" data-href="https://www.orangetoolz.com" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.orangetoolz.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
    </div>
</div>
    
</body>
</html>