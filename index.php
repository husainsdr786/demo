<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.6/css/jquery.fancybox.min.css" rel="stylesheet" />
</head>
<body>
  <a class="fancybox" href="#donation-info" alt="">Fancybox</a>

  <div style="display:none">
    <div id="donation-info">
       <h2>To all our readers:</h2>
       <p>some text goes here</p>
        <div style="text-align:center"><a href="/somepage" id="donate" class="donate-link" >Donate</a></div>
    </div>
  </div>
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.6/js/jquery.fancybox.min.js"></script>
  <script>
    $(function () {
      // Define cookie name
      var cookieName = 'hide_donate';
  
      // Configure fancyBox
      $('.fancybox').fancybox({
          autoDimensions: false,
          autoSize: false,
          height: 'auto',
          padding: 0,
          width: 650,
          beforeLoad: function() {
            // Returning false will stop fancybox from opening
            return ! $.cookie(cookieName);
          },
          afterClose: function() {
            // Set cookie to hide fancybox for 1 day
            $.cookie(cookieName, true, { expires: 1 });
          }
      });
  
      // Handle donate click event
      $('a#donate').on('click', function (event) {
          event.preventDefault(); 
  
          // Hide fancybox and set cookie to hide fancy box for 7 days
          $.fancybox.close();
          $.cookie(cookieName, true, { expires: 7 });
      });
  
      // Launch fancyBox on first element
          setTimeout(function () {
          $(".fancybox").trigger('click');
      }, 2000);
    });
  </script>
</body>
</html>
