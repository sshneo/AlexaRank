<?php
 
header("Content-Type: application/html");
header("Expires: 0");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$url =$_POST["SiteName"];



$alexaUrl='http://data.alexa.com/data?cli=10&dat=snbamz&url=';							 
$xml = simplexml_load_file($alexaUrl.$url);

//var_dump($xml);

$rankGLOBAL=isset($xml->SD[1]->POPULARITY)?$xml->SD[1]->POPULARITY->attributes()->TEXT:"Data Mevcut Değil";
$rankTR=isset($xml->SD[1]->COUNTRY)?$xml->SD[1]->COUNTRY->attributes()->RANK:"Data Mevcut Değil";
$web=(string)$xml->SD[0]->attributes()->HOST;$url;
$alexaUrl='http://data.alexa.com/data?cli=10&dat=snbamz&url=';							 
$xml = simplexml_load_file($alexaUrl.$url);

$rankGLOBAL=isset($xml->SD[1]->POPULARITY)?$xml->SD[1]->POPULARITY->attributes()->TEXT:"Data Mevcut Değil";
$rankTR=isset($xml->SD[1]->COUNTRY)?$xml->SD[1]->COUNTRY->attributes()->RANK:"Data Mevcut Değil";
$web=(string)$xml->SD[0]->attributes()->HOST;

?>
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