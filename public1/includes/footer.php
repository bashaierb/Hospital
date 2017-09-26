<style>
    footer {
        padding: 1em;
        color: #fff;
        clear: left;

        padding-top : 25px;
        text-align: left;
    }
    
    footer a{
        color: #fff;
    }
</style>
<footer class="footer navbar navbar-default" >

    <div class="row">
        <div class="col-md-4">Saudi German Hospital-Madinah<br>
            T:+966  444444 <br>
            F:+966  444444<br>
            www.sghgroup.com<br>
        </div>

        <div class="navbar-text pull-right" style="color:#fff">
            <a href="http://www.facebook.com/user/saudigermanhospitaljeddah"><i class="fa fa-facebook-square fa-3x"></i></a>
            <a href="https://twitter.com/saudigermanhosp"><i class="fa fa-twitter-square fa-3x"></i></a>
            <a href="http://www.youtube.com/user/saudigermanhospitals"><i class="fa fa-youtube-square fa-3x"></i></a>
            <a href="https://www.instagram.com/polyclinicsghmadinah/"><i class="fa fa-instagram fa-3x"></i></a>
        </div>
    </div>

    <div class="col-12 text-center" style="padding-top:10px">
        <span class="text-muted">
            Copyright © 2017 MEAHCO - Saudi German Hospitals. All Rights Reserved.
        </span>
    </div>

</footer>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.2.1.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
<script>
    $(".myli a:not('.nor')").each(function() {
        var $this = $(this);
        var _href = $this.attr("href");
        $this.attr("href", "vfile.php?file=" + _href );
    });
</script>


<script>
    function search(myinput,myul,myli) {
        var input, filter, ul, li, a, i;
        input = document.getElementById(myinput);
        filter = input.value.toUpperCase();
        ul = document.getElementById(myul);
        li = ul.getElementsByClassName(myli);
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";

            }
        }
    }
</script>
</div>

</body>
<html>