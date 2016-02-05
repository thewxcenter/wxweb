<?php
/* Smarty version 3.1.29, created on 2016-02-05 02:24:35
  from "/var/www/wxcenter/httpdocs/dev/wxweb-master/includes/templates/includes/googleforecast.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56b44e33692b57_54572323',
  'file_dependency' => 
  array (
    '93868163bcc6eac0e7a00689eb4e2d464e5fb8e5' => 
    array (
      0 => '/var/www/wxcenter/httpdocs/dev/wxweb-master/includes/templates/includes/googleforecast.tpl',
      1 => 1454657060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56b44e33692b57_54572323 ($_smarty_tpl) {
?>
 <?php echo '<script'; ?>
 type="text/javascript"
        src="http://maps.googleapis.com/maps/api/js?api=<?php echo $_smarty_tpl->tpl_vars['googleapi']->value;?>
&amp;sensor=false"><?php echo '</script'; ?>
>
        
 <?php echo '<script'; ?>
 type="text/javascript" >
 function initialize() {
  var myLatlng = new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['lat']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['lon']->value;?>
);
  var myOptions = { 
    zoom: 8,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.TERRAIN
  } 
  var map = new google.maps.Map(document.getElementById("forecast_map"), myOptions);
 
  var marker = new google.maps.Marker({ 
      position: myLatlng,
      map: map,
      title:"Hello World!"
  });
  
   google.maps.event.addListener(map, 'click', function(event)  {  
    var myLatLng = event.latLng;
    var lat = myLatLng.lat();
    var lng = myLatLng.lng();
     link(lat, lng); });
     
     function link(lat,lon){
     window.location="http://www.michiganwxsystem.com/wxweb.php?run=quikcast&lat=" +lat+ "&lon=" +lon ;
      }
   
    
  }
  
   google.maps.event.addDomListener(window, 'load', initialize);
<?php echo '</script'; ?>
>


<div id="forecast_map"></div><?php }
}
