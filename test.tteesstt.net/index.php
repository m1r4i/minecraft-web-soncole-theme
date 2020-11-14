<!DOCTYPE html>
<html lang="ja">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link href="../metro/css/metro-all.css?ver=@@b-version" rel="stylesheet">
    <link id="color-scheme" href="../metro/css/schemes/darcula.css" rel="stylesheet">

    <title>test.tteesstt.net - WebConsolePanel</title>

    <style>
@font-face{
font-family: 'hackgen';
  src: url('hackgen') format('truetype');
}
#panel{
font-family:hackgen;
}
        h2 {
            margin-top: 20px;
        }
        .app-bar-menu li {
            list-style: none!important;
        }
.dropdown-toggle{
display:none !important;
}
.panel{
min-width:75% !important;
}
div::-webkit-scrollbar{
  width: 12px;
}
div::-webkit-scrollbar-track{
  background: #fff;
  border: none;
  border-radius: 10px;
  box-shadow: inset 0 0 2px #777; 
}
div::-webkit-scrollbar-thumb{
  background: #aaa;
  border-radius: 10px;
  box-shadow: none;
}
*::-webkit-scrollbar{
  width: 12px;
}
*::-webkit-scrollbar-track{
  background: #fff;
  border: none;
  border-radius: 10px;
  box-shadow: inset 0 0 2px #777; 
}
*::-webkit-scrollbar-thumb{
  background: #aaa;
  border-radius: 10px;
  box-shadow: none;
}

    </style>

    <script>
        function changeSchemeTo(n){
            $("#color-scheme").attr("href", "../metro/css/schemes/" + n);
            $("#scheme-name").html(n);
            Metro.utils.addCssRule(Metro.sheet, ".app-bar-menu li", "list-style: none!important;");
        }
    </script>

   <script src="../js/jquery-3.3.1.min.js"></script>
<?php session_start(); ?>
<?php
if($_SESSION["sky"]){
echo "<script>changeSchemeTo('sky-net.css')</script>";
}
?>

<body>
    <div class="container" style="margin-bottom: 200px;">
        <div class="pos-fixed z-top p-4 bg-light" style="top: 10px; right: 10px;">
            <button class="button" id="dar" style="background-color: #585b5d" onclick="changeSchemeTo('darcula.css')">darcula</button>
            <button class="button" id="sky" style="background-color: #0CA9F2" onclick="changeSchemeTo('sky-net.css')">sky-net</button>
        </div>
<script>
$("#dar").click(function(){
  $.ajax('../theme.php',
      {
        type: 'get',
        data: { mode: "dar" }      }
    );
$("#nnnn").removeClass("btn-dark");
$("#nnnn").addClass("btn-light");
});
$("#sky").click(function(){
  $.ajax('../theme.php',
      {
        type: 'get',
        data: { mode: "sky" }      }
    );
$("#nnnn").removeClass("btn-light");
$("#nnnn").addClass("btn-dark");

});



</script>

        <h2 id="sidenav">test.tteesstt.net</h2>
        <div class="example">
            <div class="row">
                <div class="cell-md-4">
                    <h6 class="text-light">Menu</h6>
                    <ul class="sidenav-simple sidenav-simple-expand-fs h-auto">
                        <li class=""><a href="../">
                            <span class="mif-apps icon"></span>
                            <span class="title">Home</span>
                        </a></li>
                        <li class="active"><a href="#">
                            <span class="mif-vpn-lock icon"></span>
                            <span class="title">test.tteesstt.net</span>
                        </a></li>
                        <li><a href="../select">
                            <span class="mif-plus icon"></span>
                            <span class="title">Add New Console</span>
                        </a></li>
         <li><a href="../credits">
                            <span class="mif-profile icon"></span>
                            <span class="title">Credits</span>
                        </a></li>
     <li><a href="#">
                            <span class="mif-exit  icon"></span>
                            <span class="title">Logout</span>
                        </a></li>

                    </ul>
                </div>
                           <div class="cell-md-6">
                    <div id="console" style="padding:10px;" data-role="panel" style=" " data-title-icon="<span class='mif-apps'></span>" data-title-caption="test.tteesstt.net" data-collapsible="true">
<div style="border:double #000 3px; max-height:400px; overflow-y:scroll;" id="ert">

                    </div>
                <input type="text" data-role="input" data-append="" placeholder="Command..." data-validate="minlength=6"><input type="checkbox" id="ine" value="AutoScroll" name="scroll">AutoScroll<div class='btn <?php if($_SESSION["sky"]){echo'btn-dark';}else{echo 'btn-light';} ?>' id="nnnn" style='min-height:45px !important; padding:0 auto !important; float:right;'>Send</div>

                </div>
    </div>

    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../metro/js/metro.js"></script>
    <script>
        $("input[name=r3]").on("click", function(){
            var checked = $(this).is(":checked");
            if (checked) {
                $("#listview-1").data("listview").view(this.value);
            }
        });
    </script>
<script>

setInterval(function(){
 $.ajax({
                    url:'../secure/inty.php',
                    type:'GET'
                })
                // Ajaxリクエストが成功した時発動
                .done( (data) => {
$("#ert").html(data);
if ($('input:checkbox[name="scroll"]:checked').val()=="AutoScroll"){
 $('#ert').delay(100).animate({
      scrollTop: $("#ert").innerHeight()+3000
    },500);
}
                });
},700);
setTimeout(function(){
  $('#ert').delay(100).animate({
      scrollTop: $("#ert").innerHeight()+3000
    },500);
},700);
</script>
    <!-- ads-script -->
</body>
</html>