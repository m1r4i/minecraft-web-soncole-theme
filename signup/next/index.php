<?php 
$rand = rand(112,999998);
$fp = fopen('./etcetc/'.$rand.'.active',"wb");
fwrite($fp,$_POST["email"].",".time().",");
$mail_from      = 'no-reply@anvil-mc.net';
$mail_to        = 'point_yukkuri@outlook.jp';
$mail_from_name = 'WebConsole - Anvil Network';

$subject = 'メールアドレスを確認してください';

$body_html = '<!doctype html><html><style>*{color:#777;}
.btn-flat-double-border {
  display: inline-block;
  padding: 0.5em 1em;
  text-decoration: none;
  color: #67c5ff;
  border: double 4px #67c5ff;
  border-radius: 3px;
  transition: .4s;
}
.btn-flat-double-border:hover {
  background: #fffbef;
}</style><boby><p>Webconsoleへの仮登録を行いました<br>以下ボタンをクリックして続行してください</p><br><h4><a class="btn-flat-double-border" href="https://rei-cat.ml/test000/signup/mailconfirm/'.$rand.'">メールアドレスを認証</a></h4></body></html>';

$parameter = "-f ".$mail_from;

$boundary = "--".uniqid(rand(),1);

// ヘッダー情報
$headers = '';
$headers .= 'Content-Type: multipart/alternative; boundary="' . $boundary . '"' . "\r\n";
$headers .= 'Content-Transfer-Encoding: binary' . "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= "From: " . mb_encode_mimeheader($mail_from_name) . "<" . $mail_from . ">" . "\r\n";
// 送信者名を指定しない場合は次のよう
// $headers .= "From: " . $mail_from . "\r\n";

// メッセージ部分
$message .= quoted_printable_decode ( $body_html ) . "\r\n";

// 送信する
if(!mail($mail_to,$subject, $message, $headers, $parameter)){
  echo "送信失敗";
}else{
  echo "送信成功";
echo "<script>window.history.replaceState(null, null, \"OK\"); location.href=\"../mail-sent\";</script>";
}

?>