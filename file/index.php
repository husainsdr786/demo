<!DOCTYPE html>
<html>
<head>
	<title>Ajax Image Upload</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	
</head>
<body>
<span id="msg" style="color:red"></span><br/>
<input type="file" id="photo" name="image"><br/><br/>
<a href="showimage.php">Show All Image</a>

  <script type="text/javascript">
    $(document).ready(function(){

      $(document).on('change','#photo',function(){
        var property = document.getElementById('photo').files[0];
        var image_name = property.name;
        var image_extension = image_name.split('.').pop().toLowerCase();

        if(jQuery.inArray(image_extension,['gif','jpg','jpeg','']) == -1){
          alert("Invalid image file");
        }

        var form_data = new FormData();
        form_data.append("file",property);
        $.ajax({
          url:'upload.php',
          method:'POST',
          data:form_data,
          contentType:false,
          cache:false,
          processData:false,
          beforeSend:function(){
            $('#msg').html('Loading......');
          },
          success:function(data){
            console.log(data);
            $('#msg').html(data);
          }
        });
      });
    });

  </script>




</body>
</html>