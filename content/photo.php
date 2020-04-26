<h1>Фотогалерея</h1>
<p class="flow-text">В данном разделе представлены различные фотографии</p>
<?php           
require_once("/../dbscripts/getfoto.php");
?>
<script>
	document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
</script>