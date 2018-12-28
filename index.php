
<?php

//Javascript ile daha hızlı çalışır.

$url="http://mynet.com";
							 
$xml = simplexml_load_file('http://data.alexa.com/data?cli=10&dat=snbamz&url='.$url);

$rankGLOBAL=isset($xml->SD[1]->POPULARITY)?$xml->SD[1]->POPULARITY->attributes()->TEXT:"Data Mevcut Değil";
$rankTR=isset($xml->SD[1]->COUNTRY)?$xml->SD[1]->COUNTRY->attributes()->RANK:"Data Mevcut Değil";
$web=(string)$xml->SD[0]->attributes()->HOST;
 


 


?><head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="https://try.alexa.com/wp-content/uploads/2017/01/favicon-16x16-5.png" type="image/x-icon" />
<title><?php echo $url?></title>
</head>



 
 
 
<div class="container">
 
 <div  class="alert alert-secondary" role="alert">
 <div class="row">
  <div class="col-11">
 <a href="<?php echo $url?>" target="new" class=" btn-link"><?php echo $url?></a>   
  </div>
    <div class="col-1">
   <button class="btn btn-info"><i class="fa fa-refresh"></i></button>
   </div>
   </div>
 </div>
 
 
 
<div class="col-4">
 <?php 
 echo "<h5><i class='fa fa-globe'></i> Dünya Sıralaması :  ".number_format((int)$rankGLOBAL,0)."</span>";
 ?>
 </div>
 <div class="col-4">
 <?php
echo "<h5><i class='fa fa-flag'></i> Türkiye Sıralaması :".number_format((int)$rankTR,0)."</h5>";
 ?>
 </div>
 
 
 <div class="card">
  <div class="card-header">
  <div class="row"> 
  <div class="col-6">
  <h5 >TRAFİK SIRALAMASI GRAFİĞİ</h5>
  </div>
  
  <div class="col-6">
 <h5>ARAMA SIKLIĞI GRAFİĞİ</h5>
   </div>
  </div>
  
  </div>
 
  <div class="card-body">
   <div class="row"> 
  <div class="col-6">
    <img class="card-img-top"  src="http://traffic.alexa.com/graph?w=300&amp;h=230&amp;o=f&amp;c=1&amp;y=q&amp;b=ffffff&amp;n=666666&amp;r=2y&amp;u=<?php echo $url ?>">
    </div>
    <div class="col-6">
     <img class="card-img-top"  src="http://traffic.alexa.com/graph?w=300&h=230&o=f&c=1&y=t&b=ffffff&n=666666&r=2y&u=<?php echo $url?>" /> 
     </div>
     </div>

</div>
<div class="card-footer text-muted">
   Not: Veriler Alexa.com'dan sağlanmaktadır.
  </div>
  </div>
 
 </div>
 
 
 
 
 
 
