<!DOCTYPE html>
<html lang="ja">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">



    <link href="../metro/css/metro-all.css?ver=@@b-version" rel="stylesheet">
    <link id="color-scheme" href="../metro/css/schemes/darcula.css" rel="stylesheet">

    <title>Signup - WebConsolePanel</title>

    <style>
        h2 {
            margin-top: 20px;
        }
        .app-bar-menu li {
            list-style: none!important;
        }
.dropdown-toggle{
display:none !important;
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
});
$("#sky").click(function(){
  $.ajax('../theme.php',
      {
        type: 'get',
        data: { mode: "sky" }      }
    );
});



</script>



        <h2 id="sidenav">Signup</h2>
        <div class="example">
            <div class="row">
                <div class="cell-md-4">
                    <h6 class="text-light">Menu</h6>
                    <ul class="sidenav-simple sidenav-simple-expand-fs h-auto">
                        <li><a href="../signin">
                            <span class="mif-user icon"></span>
                            <span class="title">Signin</span>
                        </a></li>
         <li class="active"><a href="#">
                            <span class="mif-profile icon"></span>
                            <span class="title">Signup</span>
                        </a></li>

                    </ul>
                </div>
                           <div class="cell-md-6">
                    <div data-role="panel" data-title-icon="<span class='mif-apps'></span>" data-title-caption="アカウントを作成" data-collapsible="true">
<form action="./next/index.php" method="post">
<div class="input"><input type="email" data-role="input" data-prepend="Your name" style="color:#fff;" placeholder="user@domain.jp" data-validate="minlength=6" class="" data-role-input="true" name="email"><div class="button-group"><button class="button input-clear-button" tabindex="-1" type="button"><span class="default-icon-cross"></span></button></div><div class="prepend">Email</div></div>
<button type="submit" class="command-button" style="margin:25%; margin-top:25px; margin-bottom:25px;">
                    <span class="mif-mail icon"></span>
                    <span class="caption">
                        仮登録メールを送信                        <small>届いたメール内のURLをクリックして続行</small>
                    </span>
                </button>     
</form>          
 </div>
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
    <!-- ads-script -->
</body>
</html>