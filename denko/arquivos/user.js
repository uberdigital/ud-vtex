$(document).ready(function() {


  //$('body').appendTo('<script type="text/javascript">WebFontConfig={google:{families:["Share+Tech+Mono::latin"]}};(function(){var a=document.createElement("script");a.src=("https:"==document.location.protocol?"https":"http")+"://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js";a.type="text/javascript";a.async="true";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})();</script>');

  $("body.checkout .searchWrapper:last, body.minha-conta .searchWrapper:last, body.fale-conosco .searchWrapper:last, body.sku .searchWrapper:last").addClass('bottomSearchWrapper');

  if ($("body").attr("class") == "carrinho")
  {
    $("iframe").attr( "scrolling", "no");
    $("iframe").attr( "style", "overflow : hidden; width : 640px; height : 400px;");
    $("iframe").parent().attr( "style", "overflow : visible; width : 640px; height : 400px;");
    
    $("a.thickbox.tbstarted").click ( function ()
    {
      $("iframe").attr( "scrolling", "no");
      $("iframe").attr( "style", "overflow : hidden; width : 640px; height : 400px;");
      $("iframe").parent().attr( "style", "overflow : visible; width : 640px; height : 400px;");
    });
    
    if ( $.browser.safari )
    {
      $("iframe").parent().css({ "width" : "600px", "height" : "400px", "overflow" : "hidden" });
      $("iframe").css({ "width" : "600px", "height" : "450px", "overflow" : "hidden" });
    }
  };
  
  if ($("body").attr("class") == "checkout")
  {
    $("iframe").attr( "scrolling", "no");
    $("iframe").attr( "style", "overflow : hidden; width : 640px; height : 400px;");
    $("iframe").parent().attr( "style", "overflow : visible; width : 640px; height : 400px;");
    
    $("a.thickbox.tbstarted").click ( function ()
    {
      $("iframe").attr( "scrolling", "no");
      $("iframe").attr( "style", "overflow : hidden; width : 640px; height : 400px;");
      $("iframe").parent().attr( "style", "overflow : visible; width : 640px; height : 400px;");
    });
    
    if ( $.browser.safari )
    {
      $("iframe").parent().css({ "width" : "600px", "height" : "400px", "overflow" : "hidden" });
      $("iframe").css({ "width" : "600px", "height" : "450px", "overflow" : "hidden" });
    }
  };

});