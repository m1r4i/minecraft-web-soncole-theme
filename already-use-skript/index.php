<!DOCTYPE html>
<html lang="ja">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">



    <link href="../metro/css/metro-all.css?ver=@@b-version" rel="stylesheet">
    <link id="color-scheme" href="../metro/css/schemes/darcula.css" rel="stylesheet">

    <title>すでにサーバーでSkriptを利用している方へ - WebConsolePanel</title>

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



        <h2 id="sidenav">すでにサーバーでSkriptをご利用中の皆様へ</h2>
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
                        <li><a href="../select">
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
                           <div class="cell-md-6">
                    <div data-role="panel" data-title-icon="<span class='mif-apps'></span>" data-title-caption="Important!!" data-collapsible="true">
      <p>このサービスではサーバーとの通信にSkriptを使用しています(安全に暗号化されているためセキュリティ上の問題はありません)<br><br>その特性上すでにSkriptをご利用いただいている方には一部環境の変更が必要となる場合がございます<br>(ここに記載されている手順で導入された場合先ほどのページのキットの導入は不要です)<br><br>1. skript-logs addonの導入 <a href="https://github.com/Blueyescat/skript-logs/releases">ここからダウンロード</a><br>2. webconsole.sk の導入 <a href="#">ここからダウンロード</a><br>
<br>また互換性等の関係で動かない場合もございます その際はご自身で改変していただければ幸いです(ただしskript内の変数名等は一切いじらないでください)<br><br>
開発環境(動作確認済み):<br>
Spigot-1.12.2<br>
Skript 2.4<br>
SkRayfall v1.9.16<br>
skUtilities v0.9.2<br>
SkQuery v3.6.4<br>
skript-logs v0.1.1<br>
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