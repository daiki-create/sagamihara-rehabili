<?php


/* -- 以下、基本の設定 ------------------------------------------------------------------------------------------------------------------------------------------------- */


//【必須】 自分のメールアドレスの設定 -- 複数のメールアドレスに送信したい場合は、以下の行をコピーして増やしていけばOKです。行頭の//を消せば有効となります。いくつでも追加可能。 --

$rm_send_address[] = 'info@sagamihara-rehabili.com';
$rm_send_address[] = 'info@webcreat.biz';


//【必須】 サンクスページのURL -- index.htmlからの相対パス、またはhttp://からの絶対パス --
$rm_thanks_page_url = 'https://sagamihara-rehabili.com/mail/thanks.html';








/* -- 以下、自分に届くメールの設定 ------------------------------------------------------------------------------------------------------------------------------------- */


//【任意】 自分に届くメールの題名
$rm_send_subject = '相模原訪問リハビリセンター　メールフォームからのお問い合わせ';




//【任意】 自分に届くメールの本文 -- EOMからEOM;までの間の文章を自由に変更してください。 --
$rm_send_body = <<<EOM

相模原訪問リハビリセンター　メールフォームからお問い合わせがありました。
お問い合わせの内容は以下の通りです。

EOM;








/* -- 以下、相手への自動返信メールの設定 ------------------------------------------------------------------------------------------------------------------------------- */


//【任意】 相手に自動返信メールを送るかどうか -- 送らない場合は0、送る場合は1にしてください。 --
$rm_reply_mail = 1;




//【だいたい必須】 メールの差出人名に表示される自分の名前 -- 相手への自動返信メールに使用されます --
$rm_send_name = '相模原訪問リハビリセンター';




//【任意】 相手に届く自動返信メールの題名
$rm_thanks_subject = '相模原訪問リハビリセンターへお問い合わせ頂きありがとうございます';




//【任意】 相手に届く自動返信メールの本文 -- EOMからEOM;までの間の文章を自由に変更してください。 --
$rm_thanks_body  = <<<EOM

この度は相模原訪問リハビリセンターへお問い合わせ頂きありがとうございます。
折り返し担当者から返信が行きますので、しばらくお待ちください。
以下の内容でお問い合わせをお受けいたしました。

EOM;




//【だいたい必須】 相手に届く自動返信メールの最後に付加される署名 -- EOMからEOM;までの間の文章を自由に変更してください。 --
$rm_thanks_body_signature = <<<EOM

この度はお問い合わせを頂き、重ねてお礼申し上げます。
-----------------------------------------------------------------------------------

相模原訪問リハビリセンター
〒252-0303 
神奈川県相模原市南区相模大野6-23-15-1008 
080-3415-0174
営業時間　9：00〜20：00(年中無休)
https://sagamihara-rehabili.com/
info@sagamihara-rehabili.com
-----------------------------------------------------------------------------------

EOM;








/* -- 以下、スパム対策機能 --------------------------------------------------------------------------------------------------------------------------------------------- */


//【任意】 メールフォームを設置するサイトのドメイン -- 記入した場合はリファラチェック機能が有効になります。 --
$rm_domain_name = '';
//$rm_domain_name = '1-firststep.com';








