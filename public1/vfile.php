<?php
if(isset($_GET['file'])){
# http://localhost/public/vfile.php?file=files/doc/test.pdf
}else{ ?>
<meta http-equiv="refresh" content="0; url=index.php" />
<?php
}
?>
<style>
    *{
        margin: 0;
        padding: 0;
        border: none;
    }
#overlay {
    position: absolute;
    display: block;
    width: calc(100% - 18px);
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0);
    z-index: 2;
}
</style>

<div id ='div' style="
    position: absolute;
    width: 100%;
">

<div id="overlay" ></div>
   <?php
if(isset($_GET['file'])){
    ?>
<iframe src="<?php echo $_GET['file']; ?>#toolbar=0&navpanes=0&statusbar=0&view=Fit;readonly=true; disableprint=true;" width="100%" height="100%"></iframe>
    <?php
}else{
    exit;
}
?>

</div>
<script language="JavaScript">

    document.addEventListener("keydown", function(e) {
  if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
    e.preventDefault();
    console.log('captured');
  }
}, false);
  window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
    document.addEventListener("keydown", function(e) {
    //document.onkeydown = function(e) {
      // "I" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
        disabledEvent(e);
      }
      // "J" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
        disabledEvent(e);
      }
      // "S" key + macOS
      if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
        disabledEvent(e);
      }
      // "U" key
      if (e.ctrlKey && e.keyCode == 85) {
        disabledEvent(e);
      }
      // "F12" key
      if (event.keyCode == 123) {
        disabledEvent(e);
      }
    }, false);
    function disabledEvent(e){
      if (e.stopPropagation){
        e.stopPropagation();
      } else if (window.event){
        window.event.cancelBubble = true;
      }
      e.preventDefault();
      return false;
    }
  };
</script>