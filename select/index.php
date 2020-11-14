<!DOCTYPE html>
<html lang="ja">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">



    <link href="../metro/css/metro-all.css?ver=@@b-version" rel="stylesheet">
    <link id="color-scheme" href="../metro/css/schemes/darcula.css" rel="stylesheet">

    <title>AddNewServer - WebConsolePanel</title>

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



        <h2 id="sidenav">AddServer</h2>
        <div class="example">
            <div class="row">
                <div class="cell-md-4">
                    <h6 class="text-light">Menu</h6>
                    <ul class="sidenav-simple sidenav-simple-expand-fs h-auto">
                        <li ><a href="../">
                            <span class="mif-apps icon"></span>
                            <span class="title">Home</span>
                        </a></li>
                        <li><a href="../test.tteesstt.net">
                            <span class="mif-vpn-lock icon"></span>
                            <span class="title">test.tteesstt.net</span>
                        </a></li>
                        <li class="active"><a href="#">
                            <span class="mif-plus icon"></span>
                            <span class="title">Add New Console</span>
                        </a></li>
         <li class=""><a href="../credits">
                            <span class="mif-profile icon"></span>
                            <span class="title">Credits</span>
                        </a></li>
     <li><a href="#">
                            <span class="mif-exit  icon"></span>
                            <span class="title">Logout</span>
                        </a></li>

                    </ul>
                </div>
                           <div class="cell-md-6" style="min-width:650px;">
                    <div data-role="panel" style="min-width:600px;" data-title-icon="<span class='mif-apps'></span>" data-title-caption="選択してください" data-collapsible="true">
                <button class="command-button add" style="display:inline-block; min-height:500px; max-width:48% !important;">
                    <span class="mif-server icon"></span>
                    <span class="caption" style="font-size:18px;">
                        私はサーバーの管理者です
                        <small style="font-size:11px;"><br>新しいサーバー用のセットアップをお手伝いいたします</small>
                    </span>
                </button>

                <button class="command-button connect" style="float:right; display:inline-block; max-width:48% !important; min-height:500px">
                    <span class="mif-user-plus icon"></span>
                    <span class="caption"  style="font-size:17px;">
                        私はサーバーのスタッフです
                        <small style="font-size:11px;"><br>既存のコンソールへの接続をお手伝いします<br>管理者から提供されるアクセスコードが必要です</small>
                    </span>
                </button>
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
$(".add").click(function(){
location.href="../addserver";
});
    </script>
    <!-- ads-script -->
</body>
</html>