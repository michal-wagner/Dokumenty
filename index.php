<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '375615175969299',
      xfbml      : true,
      version    : 'v2.3'
    });

    // ADD ADDITIONAL FACEBOOK CODE HERE
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

   function pridejSmajlik(smilie){
    		document.fb_dtsg.xhpc_message.focus();
    		document.fb_dtsg.xhpc_message.value += smilie + " ";
    		document.fb_dtsg.xhpc_message.focus();
		}
</script>
<html>
	<a href="javascript:pridejSmajlik(':-)')"><img src="https://www.denikpolitika.cz/img/4/d/b/4db0da65222d624d101c1d00_50px.jpg" border="0"></a>
</html>
