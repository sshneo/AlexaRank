
<?php

/*
Halil ŞAHİN
Created:Aralık 2018
Updated: 
Nam-ı Diğer: @sshneo
*/

$Version="2.0";
$defaultURL="http://mynet.com";
// #Info ,Warning, Error Message

?>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="https://try.alexa.com/wp-content/uploads/2017/01/favicon-16x16-5.png" type="image/x-icon" />
<title>Alexa Rank <?php echo $Version?></title>
</head>

<script type="text/javascript">
	$(document).ready(function(){

		$("#btnRefresh").click(function(){

      
      var siteURL=$('#txtWebSiteName').val();
       //alert(siteURL);

			$.ajax
			({	
		    
				type	: "POST",
 
				url:'./queryProccess.php',
                        
			
				data:{"SiteName":siteURL},
                    
       
				beforeSend :function()
				{
					$("#ajaxResult").html("<img src='https://cdn.dribbble.com/users/107759/screenshots/2436386/copper-loader.gif'>");
        
				},
 
				success	:function(resultData)
				{
					$("#ajaxResult").html(resultData);
				},
	 
				error:function(request, status, error)
				{

          
        alert(request.responseText);

		 
				},
      
                          complate:function()
				{
					$("#ajaxResult").html("");
				},
                          statusCode: 
                                {
                                  404: function() 
                                  {
                                    alert("Sayfa Bulunamadı");
                                  }
                                }
			})
		})
	})
</script>

 
 
 
<div class="container">
 
 <div  class="alert alert-secondary" role="alert">
 <div class="row">
  <div class="col-11">
  
  <div class="form-group">
 
  <input type="text" class="form-control" id="txtWebSiteName" placeholder="Lütfen Http İle Başlayan Site İsmi Giriniz." value="<?php echo $defaultURL?>">
</div>

  
 <a href="<?php echo $url?>" target="new" class=" btn-link"><?php echo $url?></a>   
  </div>
    <div class="col-1">
   <button id="btnRefresh" class="btn btn-info"><i class="fa fa-refresh"></i></button>
   </div>
   </div>
 </div>
 
 <div id="ajaxResult">
 
 </div>
 

<div class="card-footer text-muted">
   Not: Veriler Alexa.com'dan sağlanmaktadır.
  </div>
  </div>
 
 </div>
 
 
 
 
 
 
