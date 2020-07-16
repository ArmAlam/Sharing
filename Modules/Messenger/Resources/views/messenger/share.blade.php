<html>
<head>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Messenger</title>
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


    <div id="share" class="btn btn-primary btn-sm clearfix">Share via Messenger</div>
    <script>
        document.getElementById('share').onclick = function() {
            FB.ui({
            method: 'send',
            link: 'https://www.orangetoolz.com',
        });
        }
    </script>
</body>