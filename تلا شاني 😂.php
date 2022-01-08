  <?php
flush();
ob_start();
##########
$token = "5028472780:AAG6E7-DwvXPHjfxR1ZXCmUf6YXOvrjHOWw";
$kindi = "5028472780:AAG6E7-DwvXPHjfxR1ZXCmUf6YXOvrjHOWw";
$sudo = "5096681918";
$buy = "BLACIK0";//معرف المطور الاساسي1
$Dev = array("$sudo","5096681918");
$eri = array("$sudo","5096681918");//مطور السورس
$idBot = "5028472780";//ايدي البوت
$userbot ="LAEK1iBot";//معرف البوت
$admin = "$sudo";
$admmm = $sudo;
$ADMIN = $sudo;
$Devd = "$sudo";
$tbbots = LAEK1iBot;

$channel = "alatshawy";
$chinnl = "$channel";
$DevUser = "@$buy";
$Devch = "@$buy";
$Userbot = "$tbbots";
//~~~~~~~~/
define('API_KEY',$token);
echo "setWebhook ~> <a href=\"https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."\">https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."</a>";
  function bot($method,$datas=[]){
 $ALI = http_build_query($datas);
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$update = json_decode(file_get_contents('php://input'));
@$message = $update->message;
@$from_id = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
@$text= $message->text;
$new = $message->new_chat_member;
$left= $update->message->left_chat_member;
$video      = $update->message->video;
$photo      = $update->message->photo;
$voice      = $update->message->voice;
$caption = $message->text;
$type= $update->message->chat->type;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
/*===== dev ~ BLACIK0 =====*/
@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
/*===== dev ~ BLACIK0 =====*/
@$newchatmemberid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$message_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$caption = $update->message->caption;
/*===== dev ~ BLACIK0 =====*/
@$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$status = $statjson['result']['status'];
@$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
@$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
@$statusq = $statjsonq['result']['status'];
@$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
@$you = $info['result']['status'];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
/*===== dev ~ BLACIK0 =====*/
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);
@$filterget = $settings["filterlist"];

$mem = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg = explode("\n",$cmg);
$cmsg = count($cmssg);

if ($tc == 'private'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($from_id, $user["userlist"])) {
$user["userlist"][]="$from_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif ($tc == 'group' | $tc == 'supergroup'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($chat_id, $user["grouplist"])) {
$user["grouplist"][]="$chat_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
$re = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;

$grouplisturl = $user["grouplist"];
if ($tc == 'group' | $tc == 'supergroup'){
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($chat_id, $user["grouplist"])) {
$user["grouplist"][]="$chat_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
$grouplisturl = $user["grouplist"];
if( $text == "الروابط" or $text == "🏴روابط الجروبات🏳️" or $text == "قائمة روابط الجروبات" or $text == "قائمه روابط الجروبات" or $text == "قائمة الروابط" and $settings["silentlist"]!== NULL){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)) {
$grouplisturl = $user["grouplist"];
for($z = 0;$z <= count($grouplisturl)-1;$z++){
$groupinlink = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$grouplisturl[$z]"));
$grouplinkem = $groupinlink->result;
$result = $result."┇$z-$grouplinkem"."\n";
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠¦ قائمه الروابط/للجروبات :
❪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)* ❫ ❫
-$result",
]);
}
}
######
include "k.php";
###########
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
if( $text=="/start" &&  $tc == "private" or $text=="رجوع" &&  $tc == "private" ){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/$userbot",
'caption'=>"
╭─────────╮
│ 𝗕𝘆➪𐂠 @$buy
│╭────────╯
││𐂠ᯓمرحبا بك في 𐂠ᯓтαℓαsнαηεᯓ𐂠
││𐂠ᯓآهلا انآ بــــوت آســمـي тαℓαsнαηε 
││𐂠ᯓ آختـصاصـي حمايـة آلمجـموعـات ..
││𐂠ᯓ مـن آلبوتات وآلتوجيه وآلتكرآر وآلخ
││𐂠ᯓ لتفعيل آلبوت آتبــع الشـروط  ⇊
││𐂠ᯓ ❬اضف البوت الى المجموعة❭ 
││𐂠ᯓ ❬ارفع البوت ادمن في المجموعة❭
││𐂠ᯓ ❬  اكتب تفعيل وسيتم رفعك مالك في البوت ورفع الادمنيه الجروب تلقائيا ❭  
│╰────────╮
│ 𝗖𝗵²➪𐂠 @$buy
╰─────────╯",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[ 
[['text'=>"𐂠•━━━━━ᯓ🏴تحديث السورس🏳️ᯓ━━━━━•𐂠","url"=>"t.me/alatshawy"]],
[["text"=>"𐂠ᯓمبرمج السورسᯓ𐂠",'url'=>"t.me/BLACIK0"]],
[['text'=>"🏴روابط الجروبات🏳️"]],
[['text'=>"ᯓтαℓαsнαηεᯓ"],['text'=>"ᯓтαℓαsнαηεᯓ"]],
[['text'=>"🏴حظر مجموعه🏳️"]],
[['text'=>"🏴تغير اسم البوت🏳️"],['text'=>"🏴تغير كليشة مطور🏳️"]],
[['text'=>"🏴قسم الاذاعة والاحصائيات🏳️"]],

[['text'=>"🏴تفعيل التنبيه🏳️"],['text'=>"🏴تعطيل التنبيه🏳️"]],
[['text'=>"🏴قسم التواصل🏳️"]],
[['text'=>"🏴تفعيل start🏳️"],['text'=>"🏴تعطيل start🏳️"]],
[['text'=>"🏴جلب start🏳️"]],
[['text'=>"🏴اضف رد عام🏳️"],['text'=>"🏴الردود العامة🏳️"]],
[['text'=>"🏴مسح الردود العامة🏳️"],['text'=>"🏴مسح رد عام🏳️"]],
[['text'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠"]],
[['text'=>"🏴قسم الاشتراك الاجباري🏳️"]],

],
'resize_keyboard'=>true
])
]);
}
}
if( $text=="🏴قسم التواصل🏳️"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠 مرحبا ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠 انت الان في القسم العام بالتواصل
❪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)* ❫ ❫
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🏴جلب التواصل🏳️"]],
[['text'=>"🏴تعين رد التواصل🏳️"],['text'=>"🏴حذف رد التواصل🏳️"]],
[['text'=>"🏴تعطيل التواصل🏳️"],['text'=>"🏴تفعيل التواصل🏳️"]],
[ ['text'=>"رجوع"] ],
],
'resize_keyboard'=>true
])
]);
}
}
if( $text=="🏴قسم الاذاعة والاحصائيات🏳️"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠 مرحبا ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠 انت الان في القسم الاحصائيات و الاذاعه",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🏴الاحصائيات🏳️"]],
[['text'=>"🏴اذاعه خاص بالتوجيه🏳️"]],
[['text'=>"🏴اذاعه عام🏳️"],['text'=>"🏴اذاعه خاص🏳️"]],
[['text'=>"🏴اذاعه عام بالتوجيه🏳️"]],
[['text'=>"🏴المجموعات🏳️"]],
[['text'=>"🏴المشتركين🏳️"]],
[ ['text'=>"رجوع"]],
],
'resize_keyboard'=>true
])
]);
}
}
if($text=="🏴قسم الاشتراك الاجباري🏳️"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠 مرحبا ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠 انت الان في القسم الاشتراك الاجباري",
'parse_mode'=>'MarkDown',
'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🏴حذف قناة الاشتراك🏳️"],['text'=>"🏴تعيين قناة الاشتراك🏳️"]],
[['text'=>"🏴جلب قناة الاشتراك🏳️"]],
[['text'=>"🏴تعطيل الاشتراك الاجباري🏳️"]],
[['text'=>"🏴تفعيل الاشتراك الاجباري🏳️"]],
[ ['text'=>"رجوع"]],
],
'resize_keyboard'=>true
])]);}
}

$developers_info = file_get_contents("data/developers/developer.txt");
$developer = explode ("\n",$developers_info);
$developers_infos = file_get_contents("data/developers/developers.txt");
$developers = explode("\n",$developers_infos);
$list_developers ="";
$list_developers = $list_developers.""."$developers_infos ϗ•━━━━━SORSBLACK━━━━━•ϗ";
/*===== dev ~ BLACIK0 =====*/
$nazarr_info = file_get_contents("data/nazar/$chat_id.txt");
$nazar  = explode("\n",$nazarr_info);
$nazarr_infos = file_get_contents("data/nazar/$chat_id/nazr.txt");
$nazarr = explode ("\n",$nazarr_infos);
/*===== dev ~ BLACIK0 =====*/
$carloss_info = file_get_contents("data/carlos/$chat_id.txt");
$carlos  = explode("\n",$carloss_info);
$carloss_infos = file_get_contents("data/carlos/$chat_id/crlo.txt");
$carloss = explode ("\n",$carloss_infos);
/*===== dev ~ BLACIK0 =====*/
$mangers_info = file_get_contents("data/manger/$chat_id.txt");
$manger  = explode("\n",$mangers_info);
$mangers_infos = file_get_contents("data/manger/$chat_id/mange.txt");
$mangers = explode ("\n",$mangers_infos);
/*===== dev ~ BLACIK0 =====*/
$admin_users_info = file_get_contents("data/admin_user/$chat_id.txt");
$admin_user  = explode("\n",$admin_users_info);
$admin_users_infos = file_get_contents("data/admin_user/$chat_id/mange.txt");
$admin_users = explode ("\n",$admin_users_infos);
/*===== dev ~ BLACIK0 =====*/
$mmyazs_info = file_get_contents("data/mmyaz/$chat_id.txt");
$mmyaz  = explode("\n",$mmyazs_info);
$mmyazs_infos = file_get_contents("data/mmyaz/$chat_id/mange.txt");
$mmyazs = explode ("\n",$mmyazs_infos);
/*===== dev ~ BLACIK0 =====*/
mkdir("data");
mkdir("data/developers");
mkdir("data/nazar");
mkdir("data/nazar/$chat_id");
mkdir("data/carlos");
mkdir("data/carlos/$chat_id");
mkdir("data/manger");
mkdir("data/manger/$chat_id");
mkdir("data/admin_user");
mkdir("data/admin_user/$chat_id");
mkdir("data/mmyaz");
mkdir("data/mmyaz/$chat_id");
mkdir("statistics");
mkdir("SudoOrders");

$setch = file_get_contents("SudoOrders/setch.txt");
$setchannel = file_get_contents("SudoOrders/setchannel.txt");
if($text == "تفعيل" or $text == "حظر" or $text == "ايدي" or $text == "كتم" or $text == "تقيد" or $text == "الاعدادات" or $text == "نسبه جمالي" or $text == "رتبتي" or $text == "كشف" or $text == "الرتبه" or $text == "انا مين" or $text == "اضف رد" or $text == "حذف رد" or $text == "الاغاني" or $text == "تاك" or $text == "cv" or $text == "حذف امر" or $text == "اضف امر" or $text == "المطور" or $text == "/start" or $text == "الاوامر" or $text == "اوامر الحمايه" or $text == "اوامر الادمنيه" or $text == "اوامر المدراء" or $text == "اوامر المطور" or $text == "اوامر المطور الاساسي" or $text == "القران" or $text == "اوامر التسليه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true){
if($setchannel == "الاشتراك الاجباري مفعل"){
$join = file_get_contents("https://api.telegram.org/bot".$kindi."/getChatMember?chat_id=@$setch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/$re_user",
'caption'=>"*𐂠 مرحبا بگ عزيزي ،
 𐂠 لا يمڪنـك استخدام البوت ،
 𐂠 عليك الإشتراگ في قناة البوت ،
 𐂠 القناة  ❪ @$setch ❫️ ؛*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🏴للاشتراك اضغط هنا🏳️",'url'=>"t.me/$setch"]],]])]);
 bot("sendmessage",[
      "chat_id"=>$Devd,
      "text"=>"𐂠ᯓ  مرحبأ عزيزي المطور 
 ❪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)* ❫ ❫
 𐂠ᯓ اليك معلومات العضو قام بدخول قناة
❪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)* ❫ ❫
 𐂠ᯓ اسم العضو  $first_name
 𐂠ᯓ معرف العضو  @$username
 𐂠ᯓ ايدي العضو  $from_id
❪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)* ❫ ❫
 𐂠ᯓ قناة الاشتراك الاجباري  @$setch",
      ]);
      die('اا');
  }
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>" ",'reply_to_message_id'=>$message->message_id,]);}}}}}

if(in_array($from_id,$eri)){
$info = "𖡞المبرمج𖡞";
}
elseif(in_array($from_id,$Dev) ){
$info = "🏴 صاحب البوت🏳️";
}
elseif(in_array($from_id,$developer) ){
$info = "مطور ثانوي";
}
elseif(in_array($from_id,$nazar) ){
$info = "مطوري";
}
elseif(in_array($from_id,$carlos) ){
$info = "منشئ";
}
elseif($status == "creator"){
$info = "المالك";
}
elseif($status == "administrator"){
$info = "المشرف";
}
elseif(in_array($from_id,$manger) ){
$info = "المدير";
}
elseif(in_array($from_id,$admin_user) ){
$info = "ادمن";
}
elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز";
}elseif($status == "member" ){
$info = "عضو فقط";
}
if(!@$username){
$casss = "لايوجد يوزر";
}elseif(@$username){
$casss = "@$username";
}
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$user = $update->message->from->username;
if($text == "رتبتي" or $text == "انا مين" or $text == "صورتي" and in_array($from_id, $Dev)){
if($user){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$file_id",
'caption'=>"
𐂠𐎄𝒏𝒂𝒎𝒆  $from_id 
𐂠𐎄𝒖𝒔  @$user
𐂠𐎄 𝒃𝒊  $info ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━━━ᯓтαℓαsнαηεᯓ━━━━━•𐂠","url"=>"t.me/alatshawy"]],
[["text"=>"𐂠ᯓ مبرمج السورس ᯓ𐂠",'url'=>"t.me/BLACIK0"]],
]
])
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"l𐂠𐎄𝒊𝒅  $from_id 
 𐂠𐎄𝒔𝒆𝒓  $usr 
l𐂠𐎄 𝒃𝒊  $info ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━━━ᯓтαℓαsнαηεᯓ━━━━━•𐂠","url"=>"t.me/alatshawy"]]
]
])
]);
}
}
/*===== dev ~ BLACIK0 =====*/
$type = $update->message->chat->type;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$statjson = json_decode(file_get_contents("https://api.telegram.org/bot".$API_KEY."/getChatMember?chat_id=".$chat_id."&user_id=".$from_id),true);
$status = $statjson['result']['status'];
$BGBBB = json_decode(file_get_contents("BGBBB.json"),true);
if($text){
if($BGBBB[$chat_id][$text]){
$text = $BGBBB[$chat_id][$text] or $text;
}
}
if ($type == 'group' || $type == 'supergroup'){
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if($text == "حذف امر"){
$aa ="𐂠ᯓ ارسل الامر القديم الان .";
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$aa,'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$BGBBB["trued"][$chat_id][$from_id]="true";
file_put_contents("BGBBB.json",json_encode($BGBBB,true));
}
if($text != "حذف امر" and $BGBBB["trued"][$chat_id][$from_id]=="true"){
$BGBBB["trued"][$chat_id][$from_id]="true1";
file_put_contents("BGBBB.json",json_encode($BGBBB,true));
$aa ="𐂠ᯓ تم حذف الامر بنجاح .";
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$aa,'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$key = array_search($BGBBB[$chat_id][$BGBBB[$chat_id][$text]],$BGBBB[$chat_id]["List"]);
unset($BGBBB[$chat_id]["List"][$key]);
$BGBBB[$chat_id]["List"] = array_values($BGBBB[$chat_id]["List"]);
unset($BGBBB[$chat_id][$BGBBB[$chat_id][$text]]);
unset($BGBBB[$chat_id][$text]);
unset($BGBBB["trued"][$chat_id][$from_id]);
unset($BGBBB["trued"][$chat_id]);
file_put_contents("BGBBB.json",json_encode($BGBBB,true));
}
if($text == "اضف امر"){
$aa =" 𐂠ᯓ ارسل الامر القديم الان .";
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$aa,'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$BGBBB["true"][$chat_id][$from_id]="true";
file_put_contents("BGBBB.json",json_encode($BGBBB,true));
}
if($text != "اضف امر" and $BGBBB["true"][$chat_id][$from_id]=="true"){
$BGBBB["true"][$chat_id][$from_id]="true1";
file_put_contents("BGBBB.json",json_encode($BGBBB,true));
$aa =" 𐂠ᯓ ارسل الامر الجديد الان .";
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$aa,'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$BGBBB["true"][$chat_id]["c"]=$text;
file_put_contents("BGBBB.json",json_encode($BGBBB,true));
}
$recv = $BGBBB["true"][$chat_id]["c"];
if($text != $BGBBB["true"][$chat_id]["c"] and $BGBBB["true"][$chat_id][$from_id]== "true1"){
$aa =" 𐂠ᯓ تم حفظ الامر بنجاح .";
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$aa,'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$BGBBB[$chat_id]["List"][]=$text;
$BGBBB[$chat_id][$recv] = $text;
$BGBBB[$chat_id][$text]= $BGBBB["true"][$chat_id]["c"];
unset($BGBBB["true"][$chat_id]);
file_put_contents("BGBBB.json",json_encode($BGBBB,true));
}
if($text == "مسح الاوامر المضافه"){
$aa =" 𐂠ᯓ تم مسح الاوامر المضافه .";
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$aa,'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
for($j=0;$j<count($BGBBB[$chat_id]["List"]); $j++){
$deal = $BGBBB[$chat_id]["List"][$j];
$d = $BGBBB[$chat_id][$deal];
unset($BGBBB[$chat_id][$d]);
unset($BGBBB[$chat_id][$deal]);
}
unset($BGBBB[$chat_id]["List"]);
file_put_contents("BGBBB.json",json_encode($BGBBB,true));
}
if($text == "الاوامر المضافه" ){
if(!$BGBBB[$chat_id]["List"]){
$aa =" 𐂠ᯓ لا يوجد اوامر مضافه";
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$aa,'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text == "الاوامر المضافه"){
if($BGBBB[$chat_id]["List"]){
for($j=0;$j<count($BGBBB[$chat_id]["List"]); $j++){
$Eq = $BGBBB[$chat_id]["List"][$j];
$dr = $BGBBB[$chat_id][$Eq];
$msg = $msg. $j."- ".$Eq." ~ ( ".$dr." ) \n";
}
$j = "𐂠ᯓ قائمه الاوامر المضافه هي :  
❪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)* ❫ ❫
".$msg;
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>$j,'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
}
}
/*===== dev ~ BLACIK0 =====*/
if($re and $text == "رفع مطور ثانوي" and $re_id !=$id_Bot and  in_array($from_id,$Dev) || in_array($from_id,$eri) and !in_array($re_id,$developer)){
file_put_contents("data/developers/developer.txt",$re_id ."\n " , FILE_APPEND);
file_put_contents("data/developers/developers.txt",'[@'.$re_user ."]". "\n " , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو 「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` ، 
 𐂠ᯓ تم ترقية ليصبح مطور ثانوي
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع مطور ثانوي"  and $re_id !=$id_Bot and in_array($from_id,$Dev) and  in_array($from_id,$eri) and in_array($re_id,$developer)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」 
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓ هوا بالفعل مطور ثانوي
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if(in_array($from_id,$Dev) || in_array($from_id,$eri)){
if($re and $text == "تنزيل مطور ثانوي" and in_array($re_id,$developer)){
$re_id_info = file_get_contents("data/developers/$chat_id.txt");
$devr = file_get_contents("data/developers/$chat_id/developer.txt");
$devr1 = explode("             \n",$devr);
$str = str_replace($re_id,"",$re_id_info);
$str2 = str_replace(" 𐂠 ❨ [" . "@". $re_user ."] ❩ " . "•" . " ❨ `". $re_id ."` ❩ ","",$devr1);
file_put_contents("data/developers/developer.txt",$str);
file_put_contents("data/developers/developers.txt",$str);
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ تم تنزيله من قائمة المطورين
", 'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }}

if(in_array($from_id,$Dev)){
if($re and $text == "تنزيل مطور ثانوي" and !in_array($re_id,$developer)){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ هو ليس مطور ليتم تنزيله من الثانوي
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); } }

if($text == "مسح المطورين الثانوين" and   in_array($from_id,$Dev)){
			file_put_contents("data/developers/developer.txt"," ");
			file_put_contents("data/developers/developers.txt"," ");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ عزيزي ⁦𐎄「 [$first_name](tg://user?id=$from_id) 」 
 𐂠ᯓ تم مسح قائمة المطورين الثانويه
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المطورين الثانوين"  and   in_array($from_id,$Dev) and $developers_info != NULL and $developers_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ اليك قائمة ⁦𐎄 المطورين
$list_developers
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المطورين الثانوين" and   in_array($from_id,$Dev) and $developers_info == NULL || $developers_info == " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ عزيزي ⁦𐎄「 [$first_name](tg://user?id=$from_id) 」 
 𐂠ᯓ لايوجد مطورين ثانويه حالين
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$eri)) {
if($re and $text == "رفع مطور" || $text == "رفع مطور"  and !in_array($re_id,$manger)){
			file_put_contents("data/nazar/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/nazar/$chat_id/nazr.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ تم ترقية ليصبح مطور
"
,'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع مطور" || $text == "رفع مطور" and in_array($re_id,$nazar)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ هوا بالفعل مطور
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المطورين" ){
file_put_contents("data/nazar/$chat_id.txt","");
file_put_contents("data/nazar/$chat_id.txt","");
file_put_contents("data/nazar/$chat_id/nazr.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطة ⁦𐎄「 [$first_name](tg://user?id=$from_id) 」 
 𐂠ᯓ تم مسح قائمة المطورين
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}
if($re and $text == "تنزيل مطور" || $text == "تنزيل مطور"  and in_array($re_id,$nazar)){
	$re_id_info = file_get_contents("data/nazar/$chat_id.txt");
	$mdrs = file_get_contents("data/nazar/$chat_id/nazr.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/nazar/$chat_id.txt",$str);
	file_put_contents("data/nazar/$chat_id/nazr.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ تم تنزيله من قائمة المطورين
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل مطور" || $text == "تنزيل مطور" || $text == "ت م ا" || $text == "تنما" and !in_array($re_id,$nazar)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ هوا ليس من المطورين
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المطورين" || $text == "قائمه المطورين" and $nazarr_info != NULL and $nazarr_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ اليك قائمة ⁦𐎄 المطورين
$nazarr_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المطورين" ||  $text == "المطورين" and $nazarr_info == NULL || $nazarr_info == " " || $nazarr_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ عزيزي ⁦𐎄「 [$first_name](tg://user?id=$from_id) 」 
 𐂠ᯓ لايوجد اي مطور
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {
if($re and $text == "رفع منشئ" || $text == "رفع المنشئ"  and !in_array($re_id,$manger)){
			file_put_contents("data/carlos/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/carlos/$chat_id/crlo.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ تم ترقية ليصبح منشئ
",'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع منشئ" || $text == "رفع المنشئ" || $text == "رفع منشئ" || $text == "رفع المنشئ" and in_array($re_id,$carlos)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ هوا بالفعل منشئ 
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المنشيئن" ){
file_put_contents("data/carlos/$chat_id.txt","");
file_put_contents("data/carlos/$chat_id.txt","");
file_put_contents("data/carlos/$chat_id/crlo.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ عزيزي ⁦𐎄「 [$first_name](tg://user?id=$from_id) 」 
 𐂠ᯓ تم مسح قائمة المنشئين
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل المنشئ" || $text == "تنزيل منشئ"  and in_array($re_id,$carlos)){
	$re_id_info = file_get_contents("data/carlos/$chat_id.txt");
	$mdrs = file_get_contents("data/carlos/$chat_id/crlo.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/carlos/$chat_id.txt",$str);
	file_put_contents("data/carlos/$chat_id/crlo.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ تم تنزيله من قائمة المنشئين
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل المنشئ" || $text == "تنزيل منشئ" || $text == "ت م" || $text == "تنم" and !in_array($re_id,$carlos)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ ليس منشئ ليتم تنزيله 
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المنشئين" || $text == "قائمه المنشئين" and $carloss_info != NULL and $carloss_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ اليك قائمة ⁦𐎄 المشئينن
$carloss_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المنشيئن" ||  $text == "قائمه المنشيئن" and $carloss_info == NULL || $carloss_info == " " || $carloss_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ عزيزي ⁦𐎄「 [$first_name](tg://user?id=$from_id) 」 
 𐂠ᯓ لايوجد منشئ حاليأ
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri)  || in_array($from_id,$nazar)) {
if($re and $text == "رفع مدير" || $text == "رفع المدير"  || $text == "ر مدير"  and !in_array($re_id,$manger)){
			file_put_contents("data/manger/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/manger/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ تم ترقية ليصبح مدير
",'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع مدير" || $text == "رفع المدير" and in_array($re_id,$manger)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ هوا بالفعل مدير
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المدراء" ){
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطة ⁦𐎄「 [$first_name](tg://user?id=$from_id) 」 
 𐂠ᯓ تم مسح قائمة المدراء
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}
if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير"  and in_array($re_id,$manger)){
	$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ تم تنزيله من قائمة المدراء
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير" and !in_array($re_id,$manger)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ ليس مدير ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المدراء" || $text == "قائمه المدراء" and $mangers_info != NULL and $mangers_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ اليك قائمة ⁦𐎄 المدراء
$mangers_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المدراء" ||  $text == "قائمه المدراء" and $mangers_info == NULL || $mangers_info == " " || $mangers_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ عزيزي ⁦𐎄「 [$first_name](tg://user?id=$from_id) 」 
 𐂠ᯓ لايوجد اي مدراء حاليأ
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {
if($re and $text == "رفع ادمن" || $text == "ر ادمن"  and !in_array($re_id,$admin_user)){
			file_put_contents("data/admin_user/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/admin_user/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ تم ترقية ليصبح ادمن
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع ادمن" || $text == "رفع ادمن" || $text == "ر ادمن"  and in_array($re_id,$admin_user)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ هوه بالفعل ادمن
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح الادمنية" ){
file_put_contents("data/admin_user/$chat_id.txt","");
file_put_contents("data/admin_user/$chat_id.txt","");
file_put_contents("data/admin_user/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطة ⁦𐎄「 [$first_name](tg://user?id=$from_id) 」 
 𐂠ᯓ تم مسح قائمة الادمنيه
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل ادمن" and in_array($re_id,$admin_user)){
	$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ تم تنزيله من قائمة الادمنيه
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل ادمن"  and !in_array($re_id,$admin_user)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ هوه ليس ادمن ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "الادمنيه" || $text == "قائمه الادمنيه" and $admin_users_info != NULL and $admin_users_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ اليك قائمة ⁦𐎄 الادمنيه
$admin_users_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "الادمنيه" ||  $text == "قائمه الادمنيه" and $admin_users_info == NULL || $admin_users_info == " " || $admin_users_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ عزيزي ⁦𐎄「 [$first_name](tg://user?id=$from_id) 」 
 𐂠ᯓ لايوجد اي ادمن حاليأ
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger) or in_array($from_id,$carlos) or in_array($from_id,$eri) || in_array($from_id,$nazar)) {
if($re and $text == "رفع مميز"  || $text == "رمميز"  and !in_array($re_id,$mmyaz)){
			file_put_contents("data/mmyaz/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/mmyaz/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ تم ترقيه ليصبح مميز
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع مميز"  || $text == "رمميز"  and in_array($re_id,$mmyaz)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」 
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓ هوا بالفعل مميز 
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المميزين" ){
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطة ⁦𐎄「 [$first_name](tg://user?id=$from_id) 」 
 𐂠ᯓ تم مسح قائمة المميزين
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل مميز"   and in_array($re_id,$mmyaz)){
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ تم تنزيله من قائمة المميزين
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل مميز" and !in_array($re_id,$mmyaz)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ هو ليس مميز ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المميزين" || $text == "قائمه المميزين" and $mmyazs_info != NULL and $mmyazs_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ اليك قائمة ⁦𐎄 المميزين
$mmyazs_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المميزين" ||  $text == "قائمه المميزين" and $mmyazs_info == NULL || $mmyazs_info == " " || $mmyazs_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ عزيزي ⁦𐎄「 [$first_name](tg://user?id=$from_id) 」 
 𐂠ᯓ لايوجد اي مميز حاليأ
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($re and $text == "تنزيل الكل" || $text == "تنزيل من الكل" || $text == "تنزيله من الكل"){
if($status == "creator" ||in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$nazar)){
$re_id_info = file_get_contents("data/manger/$chat_id.txt");
$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
$mdrs1 = explode(" \n",$mdrs);
$str = str_replace($re_id,"",$re_id_info);
$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
file_put_contents("data/manger/$chat_id.txt",$str);
file_put_contents("data/manger/$chat_id/mange.txt",$str2);
$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
$admn1 = explode(" \n",$admn);
$str = str_replace($re_id,"",$re_id_info);
$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$admn1);
file_put_contents("data/admin_user/$chat_id.txt",$str);
file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
$mdrs1 = explode(" \n",$mdrs);
$str = str_replace($re_id,"",$re_id_info);
$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
file_put_contents("data/mmyaz/$chat_id.txt",$str);
file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
bot('restrictChatMember',[
'user_id'=>$re_id,
'chat_id'=>$chat_id,
'can_post_messages'=>true,
'can_add_web_page_previews'=>false,
'can_send_other_messages'=>true,
'can_send_media_messages'=>true,
]);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ تم تنزيله من كل الرتب
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

#tag
if ($settings["lock"]["tag"] == "مقفول"){
if (strstr($text ,"#") == true or strstr($caption,"#") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
#link
if($settings["lock"]["link"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if (strstr($text,"t.me") == true or strstr($text,"telegram.me") == true or strstr($text,"https://") == true or strstr($text,"://") == true or strstr($text,"wWw.") == true or strstr($text,"WwW.") == true or strstr($text,"T.me/") == true or strstr($text,"WWW.") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id,]);}}}
#photo
if($settings["lock"]["photo"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if ($update->message->photo){  
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}
# inline
$inline = json_decode(file_get_contents('php://input'),true);
if($settings["lock"]["inline"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if(isset($inline['message']['reply_markup']['inline_keyboard'][0][0]['text'])){
bot('deleteMessage',['chat_id'=>$message->chat->id,'message_id'=>$message->message_id]);}}}
#gif
if($settings["lock"]["gif"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if ($update->message->document){  
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}
# document
if($settings["lock"]["document"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if ($update->message->document){  
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}
# video
if($settings["lock"]["video"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if ($update->message->video){  
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}
# ar
if ($settings["lock"]["ar"] == "مقفول"){
if (strstr($text,"") == true  or strstr($text,"") == true or strstr($text,"") == true  or  strstr($text,"") == true   or strstr($text,"") == true or  strstr($text,"") == true  or strstr($text,"") == true or strstr($text,"") == true  or  strstr($text,"") == true   or strstr($text,"") == true or strstr($text,"") == true  or strstr($text,"") == true or strstr($text,"") == true  or  strstr($text,"") == true   or strstr($text,"") == true or  strstr($text,"") == true  or strstr($text,"") == true or strstr($text,"") == true  or  strstr($text,"") == true   or strstr($text,"") == true or strstr($text,"") == true or strstr($text,"") == true  or  strstr($text,"") == true   or strstr($text,"") == true or  strstr($text,"") == true  or strstr($text,"") == true or strstr($text,"") == true  or  strstr($text,"") == true   or strstr($text,"") == true or strstr($text,"") == true  or strstr($text,"") == true or strstr($text,"") == true  or  strstr($text,"") == true   or strstr($text,"") == true or  strstr($text,"") == true  or strstr($text,"") == true ) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
# en
if ($settings["lock"]["en"] == "مقفول"){
if (strstr($text,"q") == true  or strstr($text,"w") == true or strstr($text,"e") == true  or  strstr($text,"r") == true   or strstr($text,"t") == true or  strstr($text,"y") == true  or strstr($text,"u") == true or strstr($text,"i") == true  or  strstr($text,"o") == true   or strstr($text,"p") == true or strstr($text,"a") == true  or strstr($text,"s") == true or strstr($text,"d") == true  or  strstr($text,"f") == true   or strstr($text,"g") == true or  strstr($text,"h") == true  or strstr($text,"j") == true or strstr($text,"k") == true  or  strstr($text,"l") == true   or strstr($text,"z") == true or strstr($text,"x") == true or strstr($text,"c") == true  or  strstr($text,"v") == true   or strstr($text,"b") == true or  strstr($text,"n") == true  or strstr($text,"m") == true or strstr($text,"Q") == true  or  strstr($text,"X") == true   or strstr($text,"C") == true or strstr($text,"F") == true  or strstr($text,"G") == true or strstr($text,"H") == true  or  strstr($text,"A") == true   or strstr($text,"L") == true or  strstr($text,"O") == true  or strstr($text,"P") == true ) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
# edit 
if($editgetsettings["lock"]["edit"] == "مقفول"){
if ( $you != 'creator' && $you != 'administrator' && $edit_for_id != $Dev && $edit_for_id != $manger && $edit_for_id != $admin_user && $edit_for_id != $vipmem && $edit_for_id != $developer){
if ($update->edited_message->text){  
bot('deletemessage',['chat_id'=>$chat_edit_id,'message_id'=>$message_edit_id]);}}}
# contact
if ($settings["lock"]["contact"] == "مقفول"){
if($update->message->contact){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
# edit media
$edit_media  = $update->edited_message->message_id;
$edit_chat_id_media = $update->edited_message->chat->id;
$edit_medias  = $update->edited_message->text;
$video_media = $update->edited_message->video;
$voice_media = $update->edited_message->voice;
$photo_media = $update->edited_message->photo;
$document_media = $update->edited_message->document;
$audio_media = $update->edited_message->audio;
$location_media = $update->edited_message->location;
if ($editgetsettings["lock"]["editmd"] == "مقفول"){
if ( $you != 'creator' && $you != 'administrator' && $edit_for_id != $Dev && $edit_for_id != $manger && $edit_for_id != $admin_user && $edit_for_id != $developer && $edit_for_id != $carlos && $edit_for_id != $eri && $edit_for_id != $nazar){
if(edit_medias || $photo_media || $document_media || $video_media || $voice_media || $audio_media || $location_media || preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$edit_medias) ){
bot('deleteMessage',['chat_id'=>$edit_chat_id_media,'message_id'=>$edit_media,]);}}}

// username 
if ($settings["lock"]["username"] == "مقفول"){
if (strstr($text ,"@") == true or  strstr($caption,"@") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}}}}
// audio
if ($settings["lock"]["audio"] == "مقفول"){
if($update->message->audio){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}}}}
// voice 
if ($settings["lock"]["voice"] == "مقفول"){
if($update->message->voice){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}}}}
if ($settings["lock"]["markdown"] == "مقفول"){
if($update->message->entities){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}}}}
if($settings["lock"]["bot"] == "مقفول"){
if ($message->new_chat_member->is_bot) {
$hardmodebot = $settings["information"]["hardmodebot"];
if($hardmodebot == "مقفول"){
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$update->message->new_chat_member->id
]);
}
else
{
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$update->message->new_chat_member->id
]);
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id
]);
}}}
// sticker is_sticker
if ($settings["lock"]["sticker"] == "مقفول"){
if($update->message->sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}}}}
if ($settings["lock"]["is_sticker"] == "مقفول"){
if($update->message->sticker->is_sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}}}}
// forward
if ($settings["lock"]["forward"] == "مقفول"){
if($update->message->forward_from | $update->message->forward_from_chat){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}}}}
// muteall
if ($settings["lock"]["mute_all"] == "مقفول"){
if($update->message){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
}
}
// replay
if ($settings["lock"]["reply"] == "مقفول"){
if($update->message->reply_to_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message->message_id
 ]);
 }
}
}
}
// tg
if ($settings["lock"]["tgservic"] == "مقفول"){
if($update->message->new_chat_member | $update->message->new_chat_photo | $update->message->new_chat_title | $update->message->left_chat_member | $update->message->pinned_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
 bot('deletemessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message->message_id
 ]);
 }
}
}
}
// text
if ($settings["lock"]["text"] == "مقفول"){
if($update->message->text){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
 bot('deletemessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message->message_id
 ]);
 }
}
}
}
// video note
if ($settings["lock"]["video_msg"] == "مقفول"){
if($update->message->video_note){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
 bot('deletemessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message->message_id
 ]);
 }
}
}
}



if($settings["information"]["add"] == "مقفول") {
if($newchatmemberid == true){
$add = $settings["addlist"]["$from_id"]["add"];
$addplus = $add +1;
$settings["addlist"]["{$from_id}"]["add"]="$addplus";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}

//game
if($settings["lock"]["game"] == "مقفول"){
if($update->message->game){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id
 ]);
}
}
}
}
// location
if ($settings["lock"]["location"] == "مقفول"){
if($update->message->location){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id
 ]);
}
}
}
}
function check_filter($str){
global $filterget;
foreach($filterget as $d){
if (mb_strpos($str, $d) !== false) {
return true;
}
}
}
//linkk
if($settings["lock"]["linkk"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if (strstr($text,"t.me") == true or strstr($text,"telegram.me") == true or strstr($text,"https://") == true or strstr($text,"://") == true or strstr($text,"wWw.") == true or strstr($text,"WwW.") == true or strstr($text,"T.me/") == true or strstr($text,"WWW.") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id,]);
bot('kickChatMember',['user_id'=>$from_id,'chat_id'=>$chat_id,]);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>" 𐂠ᯓ عزيزي - [$first_name](tg://user?id=$from_id)\n 𐂠ᯓ ممنوع نشر الروابط هنا تم طردك",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,]);}}}
//linkw
if($settings["lock"]["linkw"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$carlos) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if (strstr($text,"t.me") == true or strstr($text,"telegram.me") == true or strstr($text,"https://") == true or strstr($text,"://") == true or strstr($text,"wWw.") == true or strstr($text,"WwW.") == true or strstr($text,"T.me/") == true or strstr($text,"WWW.") == true or strstr($text,"https://") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id,]);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>" 𐂠ᯓ عزيزي - [$first_name](tg://user?id=$from_id)\n 𐂠ᯓ ممنوع نشر الروابط هنا ",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,]);}}}

if($text =="قفل الروابط" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل الروابط بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الروابط" or $text =="فتح روابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح الروابط بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if($text =="قفل الروابط بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل الروابط بنجاح
 𐂠ᯓ خاصية ⁦𐎄 الطرد
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkk"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الروابط بالطرد" or $text =="فتح روابط بالطرد"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح الروابط بالطرد
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkk"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if($text =="قفل الروابط بالتحذير" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل الروابط بنجاح
 𐂠ᯓ خاصية ⁦𐎄 التحذير
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkw"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الروابط بالتحذير" or $text =="فتح روابط بالتحذير"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح الروابط بالتحذير
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkw"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if($text =="قفل الانلاين" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل الانلاين بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["inline"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الانلاين" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح الانلاين بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["inline"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if($text =="قفل الانكليزيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل الانكليزيه بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الانكليزيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح الانكليزيه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// lock photo
elseif($text =="قفل الصور" or $text =="قفل صور"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل الصور بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الصور" or $text =="فتح صور"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قتح الصور بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["photo"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="قفل الملصقات المتحركة" or $text =="قفل الملصقات المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفل الملصقات المتحركة
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["is_sticker"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الملصقات المتحركة" or $text =="فتح الملصقات المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح الملصقات المتحركه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["is_sticker"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// gif
elseif($text =="قفل المتحركة" or $text =="قفل المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل المتحركه بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["gif"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح المتحركة" or $text =="فتح المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح المتحركه بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="قفل الماركدوان" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل الماركدوان بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["markdown"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الماركدوان" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح الماركدوان بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdown"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="قفل العربيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل العربيه بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["ar"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح العربيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح العربيه بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// document
elseif($text =="قفل الملفات" or $text =="قفل ملفات،"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل الملفات بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["document"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الملفات" or $text =="فتح ملفات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح الملفات بنجاح
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["document"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// video
elseif($text =="قفل الفيديو" or $text =="قفل فيديو"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل الفيديو بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الفيديو" or $text =="فتح فيديو"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل الفيديو بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// edit
elseif($text =="قفل التعديل" or $text =="قفل تعديل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل التعديل بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["edit"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح التعديل" or $text =="فتح تعديل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح التعديل بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["edit"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// game
elseif($text =="قفل الالعاب" or $text =="قفل العاب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل الالعاب بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["game"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الالعاب" or $text =="فتح العاب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح الالعاب بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 $settings["lock"]["game"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// location
elseif($text =="قفل المواقع" or $text =="قفل الموقع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل المواقع بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["location"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح المواقع" or $text =="فتح الموقع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح المواقع بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["location"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// contact
elseif($text =="قفل الجهات" or $text =="قفل جهات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل الجهات بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["contact"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الجهات" or $text =="فتح جهات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح الجهات بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["contact"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="قفل تعديل الميديا" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل تعديل الميديا بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["editmd"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح تعديل الميديا" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح تعديل الميديا
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["editmd"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// tag
elseif($text =="قفل التاك" or $text =="قفل الهاش تاك"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل التاك بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tag"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح التاك" or $text =="فتح الهاش تاك"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح التاك بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tag"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
 
elseif($text =="قفل المعرفات" or $text =="قفل المعرف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل المعرفات بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["username"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح المعرفات" or $text =="فتح المعرف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح المعرفات بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["username"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// audio
elseif($text =="قفل الصوت" or $text =="قفل الموسيقى"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل الصوت بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["audio"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الصوت" or $text =="فتح صوت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح الصوت بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["audio"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="قفل الاشعارات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل الاشعارات بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tgservic"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الاشعارات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح الاشعارات بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tgservic"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// video note
elseif($text =="قفل بصمة الفيديو" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل بصمة الفيديو بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video_msg"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح بصمة الفيديو" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح بصمة الفيديو بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video_msg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// lock bots
elseif ($text== "قفل البوتات" or $text== "قفل بوتات" or $text== "قفل البوت") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل البوتات بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bot"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif ($text== "فتح البوتات" or $text== "فتح بوتات"or $text== "فتح البوت") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح البوتات بنجاح ",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bot"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if($text =="قفل البصمات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل البصمات بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["voice"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح البصمات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح البصمات بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["voice"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if($text =="قفل الاباحي" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل الاباحي بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["xi"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الاباحي" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح الاباحي بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["xi"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// sticker
elseif($text =="قفل الملصقات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل الملصقات بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["sticker"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الملصقات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح الملصقات بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["sticker"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// forward
elseif($text =="قفل التوجيه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل التوجيه بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["forward"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح التوجيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح التوجيه بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["forward"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// fosh
elseif($text =="قفل السيئات" or $text =="قفل الممنوعات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل السيئات بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["fosh"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح السيئات" or $text =="فتح الممنوعات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح السيئات بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["fosh"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif( $text =="قفل الكلايش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
$pluscharacter = $settings["information"]["pluscharacter"];
$downcharacter = $settings["information"]["downcharacter"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل الكلايش بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lockcharacter"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif( $text =="فتح الكلايش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح الكلايش بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lockcharacter"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if( $text =="قفل الدردشه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم قفـل الدردشه بنجاح
 𐂠ᯓ خاصية ⁦𐎄 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["text"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif( $text =="فتح الدردشه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم فتح الدردشه بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["text"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="قفل تحويل الصيغ" or $text =="قفل الصيغ"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
 𐂠ᯓ تم قفل تحويل الصيغ  
 𐂠ᯓ بواسطة ⁦𐎄 *[$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["sigmidia"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}}
elseif($text =="فتح تحويل الصيغ" or $text =="فتح الصيغ"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
 𐂠ᯓ تم فتح تحويل الصيغ  
 𐂠ᯓ بواسطة⁦𐎄 * [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["sigmidia"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}}
elseif($text =="قفل تحميل الفديو" or $text =="قفل تحميل الميديا" or $text == "قفل التحميل"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
 𐂠ᯓ تم قفل تحميل الميديا  
 𐂠ᯓ بواسطة ⁦𐎄 * [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["downloadmid"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}}
elseif($text =="فتح تحميل الفديو" or $text =="فتح تحميل الميديا" or $text == "فتح التحميل"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
 𐂠ᯓ تم فتح تحميل الميديا  
 𐂠ᯓ بواسطة ⁦𐎄 * [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["downloadmid"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}}}

elseif( $text =="تعطيل الايدي" or $text == "تعطيل الايدي بالصوره" or $text == "قفل الايدي بلصوره"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم تعطيل الايدي بالصوره
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["iduser"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="تفعيل الايدي" or $text == "تفعيل الايدي بالصوره" or $text == "فتح الايدي بلصوره"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم تفعيل الايدي بالصوره
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["iduser"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="تعطيل ردود السورس" or $text == "تعطيل ردود السورس"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم تعطيل ردود السورس
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rdona"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="تفعيل ردود السورس" or $text == "تفعيل ردود السورس"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم تفعيل ردود السورس
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rdona"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif( $text =="تعطيل اطردني" or $text == "تعطيل امر اطردني"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم تعطيل الامر اطردني
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bannnnn"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="تفعيل اطردني" or $text == "تفعيل امر اطردني"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم تفعيل الامر اطردني
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bannnnn"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif( $text =="تعطيل اوامر التسليه" or $text == "تعطيل التسليه"){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) ||  in_array($from_id,$carlos) || in_array($from_id,$nazar) || in_array($from_id,$eri) || in_array($from_id,$manger)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم تعطيل اوامر التسليه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["jooki"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="تفعيل اوامر التسليه" or $text == "تفعيل التسليه"){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) ||  in_array($from_id,$carlos) || in_array($from_id,$nazar) || in_array($from_id,$eri) || in_array($from_id,$manger)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم تفعيل اوامر التسليه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["jooki"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}

elseif($rt && $text== "مسح"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) { bot('deletemessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$re_msgid
 ]);
 bot('deletemessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id
 ]);
 }
}

//setname
elseif (strpos($text, 'ضع اسم') !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {$newname= str_replace(['ضع اسم '],'',$text );
 bot('setChatTitle',[
 'chat_id'=>$chat_id,
 'title'=>$newname
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم وضع اسم للموجوعة بنجاح 
 𐂠ᯓ *$text*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
 }
}

if ($text =="تفعيل القوانين" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
 𐂠ᯓ تم تفعيل القوانين بنجاح
 𐂠ᯓ بواسطة ⁦𐎄 [$first_name](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["bbhi"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تعطيل القوانين" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
 𐂠ᯓ تم تعطيل القوانين بنجاح
 𐂠ᯓ بواسطة ⁦𐎄 [$first_name](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bbhi"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}

elseif ( $text== "تفعيل الرابط") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
$text = $settings["information"]["added"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم تفعيل رابط المجموعة بنجاح
 𐂠ᯓ المجموعة  $namegroup
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["cmd"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif ( $text== "تعطيل الرابط") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم تعطيل رابط المجموعة بنجاح
 𐂠ᯓ اسم المجموعة  $namegroup
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["cmd"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif( $text =="الرابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "مفتوح"){

$getlink = file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ G𝚁𝙾𝚄𝙿 𝙽𝙰𝙼 ࿊ ⁦𐎄 $namegroup :
 𐂠ᯓ $getlinkde
",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
else
{
$getlink = file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ 𝗚𝗥𝗢𝗨𝗣 𝗟𝗜𝗡𝗞 :- $namegroup :
 𐂠ᯓ $getlinkde
",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
if($text== "تفعيل مجاني") {
if ( $status == 'creator' or $status == 'administrator'){
$url = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMembersCount?chat_id=$chat_id");
$getchat = json_decode($url, true);
$howmember = $getchat["result"];
$add = $settings["information"]["added"];
$dataadd = $settings["information"]["dataadded"];
if ($add == true) {
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$file_id",
'caption'=>"
 𐂠ᯓ بواسطة [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم تفعيل المجموعة بنجاح 
࿊ᯓ G𝚁𝙾𝚄 ⁦𐎄 $namegroup
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
 'inline_keyboard'=>[[
['text'=>"$chinnl",'url'=>"https://t.me/$chinnl"],['text'=>"$dataadd",'callback_data'=>"text"]
],]])]); 
}
else
{
if($howmember >=1){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$file_id",
'caption'=>"
 𐂠ᯓ بواسطة [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم تفعيل المجموعة بنجاح 
࿊ᯓ G𝚁𝙾𝚄 ⁦𐎄 $namegroup
",'reply_to_message_id'=>$message_id,
]); 
bot('sendphoto',[
'chat_id'=>$Dev[0],
'photo'=>"https://t.me/$channel",
'caption'=>"
 𐂠ᯓتم تفعيل مجموعة جديده
 ᯓтαℓαsнαηεᯓ
 𐂠ᯓ بواسطة الادمن @$username
 𐂠ᯓ اسم المجموعة $namegroup
 𐂠ᯓ ايدي المجموعة $chat_id
 𐂠ᯓعدد اعضاء المجموعة?? $mem
 𐂠ᯓالادمنية $cmsg
- $getlinkde
", 
]); 
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
$settings = '{"lock": {
"text": "مفتوح",
"photo": "مفتوح",
"link": "مفتوح",
"tag": "مفتوح",
"username": "مفتوح",
"sticker": "مفتوح",
"video": "مفتوح",
"voice": "مفتوح",
"audio": "مفتوح",
"gif": "مفتوح",
"inline": "مفتوح",
"is_sticker": "مفتوح",
"bot": "مفتوح",
"forward": "مفتوح",
"document": "مفتوح",
"tgservic": "مفتوح",
"edit": "مفتوح",
"reply": "مفتوح",
"contact": "مفتوح",
"location": "مفتوح",
"game": "مفتوح",
"editmd": "مفتوح",
"cmd": "مفتوح",
"mute_all": "مفتوح",
"mute_all_time": "مفتوح",
"fosh": "مفتوح",
"lockauto": "مفتوح",
"lockcharacter": "مفتوح",
"video_msg": "مفتوح",
"sigmidia": "مفتوح",
"downloadmid": "مفتوح"
},
"information": {
"added": "true",
"welcome": "مفتوح",
"add": "مفتوح",
"rdodsg": "مقفول",
"markdown": "مفتوح",
"lockchannel": "مفتوح",
"hardmodebot": "مفتوح",
"hardmodewarn": "كتم العضو ♨️",
"charge": "999 يوم",
"setadd": "3",
"dataadded": "",
"en": "مفتوح",
"ar": "مفتوح",
"expire": "",
"textwelcome": "اهلا بك عزيزي",
"rules": "غير مسجل",
"msg": "",
"timelock": "00:00",
"timeunlock": "00:00",
"pluscharacter": "300",
"downcharacter": "0",
"$lockgame" : "مفتوح",
"setwarn": "3"
}
}';
$settings = json_decode($settings,true);
$settings["information"]["expire"]="$next_date";
$settings["information"]["dataadded"]="$dateadd";
$settings["information"]["msg_id"]="$message_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
if ($add != true) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📍 عدد الاعضاء قليل جدا
❪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)* ❫ ❫
⚒ليس لديك مايكفي م̷ـــِْن الاعضاء على. الاقل عضو واحد 
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
 'inline_keyboard'=>[
 [
['text'=>"$chinnl",'url'=>"https://t.me/$chinnl"]
],]])]);}}}}
}

elseif($text== "تفعيل") {
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$eri)  or in_array($from_id,$developer)){
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
$export = file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($export, true);
$getlinkde = $jsonlink['result'];
if ($add != true) {
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$file_id",
'caption'=>"ـ $namegroup
 𐂠ᯓ بواسطة
 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم تفعيل المجموعة بنجاح

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━━━ᯓтαℓαsнαηεᯓ━━━━━•𐂠","url"=>"t.me/alatshawy"]],
[["text"=>"𐂠ᯓمبرمج السورسᯓ𐂠",'url'=>"t.me/BLACIK0"]],
]
])
]);
bot('sendphoto',[
'chat_id'=>$Dev[0],
'photo'=>"https://t.me/$channel",
'caption'=>"
𐂠ᯓتم تفعيل مجموعة جديده
❪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)* ❫ ❫
 𐂠ᯓ بواسطة الادمن @$username
 𐂠ᯓ اسم المجموعة $namegroup
 𐂠ᯓ ايدي المجموعة $chat_id
 𐂠ᯓعدد اعضاء المجموعة $mem
 𐂠ᯓالادمنية $cmsg
- $getlinkde
",'disable_web_page_preview'=>true,
]); 
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
$settings = '{"lock": {
"text": "مفتوح",
"photo": "مفتوح",
"link": "مفتوح",
"tag": "مفتوح",
"username": "مفتوح",
"sticker": "مفتوح",
"video": "مفتوح",
"voice": "مفتوح",
"editmd": "مفتوح",
"audio": "مفتوح",
"iduser": "مقفول",
"gif": "مفتوح",
"is_sticker": "مفتوح",
"markdown": "مفتوح",
"bot": "مفتوح",
"inline": "مفتوح",
"forward": "مفتوح",
"document": "مفتوح",
"tgservic": "مفتوح",
"edit": "مفتوح",
"reply": "مفتوح",
"en": "مفتوح",
"ar": "مفتوح",
"contact": "مفتوح",
"rdodsg": "مقفول",
"location": "مفتوح",
"game": "مفتوح",
"cmd": "مفتوح",
"mute_all": "مفتوح",
"mute_all_time": "مفتوح",
"fosh": "مفتوح",
"lockauto": "مفتوح",
"lockcharacter": "مفتوح",
"video_msg": "مفتوح",
"sigmidia": "مفتوح",
"downloadmid": "مفتوح"
},
"information": {
"added": "true",
"welcome": "مفتوح",
"add": "مفتوح",
"lockchannel": "مفتوح",
"hardmodebot": "مفتوح",
"hardmodewarn": "كتم العضو ♨️",
"charge": "999 يوم",
"setadd": "3",
"dataadded": "",
"expire": "",
"msg": "",
"timelock": "00:00",
"timeunlock": "00:00",
"pluscharacter": "300",
"downcharacter": "0",
"textwelcome": "اهلا بك عزيزي",
"rules": "غير مسجل",
"setwarn": "3"
}
}';
$settings = json_decode($settings,true);
$settings["information"]["expire"]="$next_date";
$settings["information"]["dataadded"]="$dateadd";
$settings["information"]["msg_id"]="$message_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
$dataadd = $settings["information"]["dataadded"];
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/$userbot",
'caption'=>" 𐂠ᯓ بالك اي انا متفعل بدين امك
 [$first_name](tg://user?id=$from_id)
 𐂠ᯓبطل ظيطه😡🤬
 $namegroup
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━━━ᯓтαℓαsнαηεᯓ━━━━━•𐂠","url"=>"t.me/alatshawy"]],
[["text"=>"𐂠ᯓمبرمج السورسᯓ𐂠",'url'=>"t.me/BLACIK0"]],
]
])
]); }}}
}
if($text== 'غادر'){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)  or in_array($from_id,$developer)){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/$userbot",
'caption'=>" 𐂠ᯓ سلاموز بلموز 😂👍 ⁦𐎄
 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم مغادرة المجموعة بنجاح 
ـ $namegroup
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
bot('LeaveChat',[
'chat_id'=>$chat_id,
]);
}
else
{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ عذرا الامر ليس لك عزيزي",
]);
}
}
elseif($text== 'تعطيل' ){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)  or in_array($from_id,$developer)){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/tlashan/3",
'caption'=>" 𐂠ᯓ با هي كده🤨
[$first_name](tg://user?id=$from_id)
 𐂠ᯓ وسع كده انا رايح لل مطور 😂  
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━━━ᯓтαℓαsнαηεᯓ━━━━━•𐂠","url"=>"t.me/alatshawy"]],
[["text"=>"𐂠ᯓمبرمج السورسᯓ𐂠",'url'=>"t.me/BLACIK0"]],
]
])
]);
unlink("data/$chat_id.json");
}
}
elseif($text== "قفل الكل"or $text== "automatic" or $text== "قفل كل") {
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$eri) or in_array($from_id,$carlos) or in_array($from_id,$nazar)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ تم قفل الكل بنجاح  
 𐂠ᯓ بواسطة [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["link"]="مقفول";
$settings["lock"]["username"]="مقفول";
$settings["lock"]["bot"]="مقفول";
$settings["lock"]["forward"]="مقفول";
$settings["lock"]["tgservices"]="مقفول";
$settings["lock"]["contact"]="مقفول";
$settings["lock"]["text"]="مقفول";
$settings["lock"]["is_sticker"]="مقفول";
$settings["lock"]["sticker"]="مقفول";
$settings["lock"]["gif"]="مقفول";
$settings["lock"]["voice"]="مقفول";
$settings["lock"]["fosh"]="مقفول";
$settings["lock"]["lockcharacter"]="مقفول";
$settings["lock"]["inline"]="مقفول";
$settings["lock"]["en"]="مقفول";
$settings["lock"]["photo"]="مقفول";
$settings["lock"]["markdown"]="مقفول";
$settings["lock"]["ar"]="مقفول";
$settings["lock"]["document"]="مقفول";
$settings["lock"]["video"]="مقفول";
$settings["lock"]["edit"]="مقفول";
$settings["lock"]["game"]="مقفول";
$settings["lock"]["location"]="مقفول";
$settings["lock"]["editmd"]="مقفول";
$settings["lock"]["tag"]="مقفول";
$settings["lock"]["audio"]="مقفول";
$settings["lock"]["iduser"]="مقفول";
$settings["lock"]["reply"]="مقفول";
$settings["lock"]["tgservic"]="مقفول";
$settings["lock"]["video_msg"]="مقفول";
$settings["lock"]["bot"]="مقفول";
$settings["lock"]["sigmidia"]="مقفول";
$settings["lock"]["downloadmid"]="مقفول";

$settings["lock"]["forwardr"]="مقفول";
$settings["lock"]["linkr"]="مقفول";
$settings["lock"]["linkw"]="مقفول";
$settings["lock"]["forwardw"]="مقفول";
$settings["lock"]["userw"]="مقفول";
$settings["lock"]["userr"]="مقفول";
$settings["lock"]["botk"]="مقفول";
$settings["lock"]["linkk"]="مقفول";
$settings["lock"]["forwardk"]="مقفول";
$settings["lock"]["userk"]="مقفول";

$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ يجب تفعيل البوت في المجموعة
ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}}}
elseif($text =="unmute all" or $text =="فتح الكل"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$eri) or in_array($from_id,$carlos) or in_array($from_id,$nazar)) {
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
 𐂠ᯓ تم فتح الكل بنجاح 
 𐂠ᯓ بواسطة⁦𐎄* [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["link"]="مفتوح";
$settings["lock"]["username"]="مفتوح";
$settings["lock"]["bot"]="مفتوح";
$settings["lock"]["forward"]="مفتوح";
$settings["lock"]["tgservices"]="مفتوح";
$settings["lock"]["contact"]="مفتوح";
$settings["lock"]["text"]="مفتوح";
$settings["lock"]["is_sticker"]="مفتوح";
$settings["lock"]["sticker"]="مفتوح";
$settings["lock"]["gif"]="مفتوح";
$settings["lock"]["voice"]="مفتوح";
$settings["lock"]["fosh"]="مفتوح";
$settings["lock"]["lockcharacter"]="مفتوح";
$settings["lock"]["inline"]="مفتوح";
$settings["lock"]["en"]="مفتوح";
$settings["lock"]["photo"]="مفتوح";
$settings["lock"]["markdown"]="مفتوح";
$settings["lock"]["ar"]="مفتوح";
$settings["lock"]["document"]="مفتوح";
$settings["lock"]["video"]="مفتوح";
$settings["lock"]["edit"]="مفتوح";
$settings["lock"]["game"]="مفتوح";
$settings["lock"]["location"]="مفتوح";
$settings["lock"]["editmd"]="مفتوح";
$settings["lock"]["tag"]="مفتوح";
$settings["lock"]["audio"]="مفتوح";
$settings["lock"]["iduser"]="مفتوح";
$settings["lock"]["reply"]="مفتوح";
$settings["lock"]["tgservic"]="مفتوح";
$settings["lock"]["video_msg"]="مفتوح";
$settings["lock"]["bot"]="مفتوح";
$settings["lock"]["sigmidia"]="مفتوح";
$settings["lock"]["downloadmid"]="مفتوح";

$settings["lock"]["forwardr"]="مفتوح";
$settings["lock"]["linkr"]="مفتوح";
$settings["lock"]["linkw"]="مفتوح";
$settings["lock"]["forwardw"]="مفتوح";
$settings["lock"]["userw"]="مفتوح";
$settings["lock"]["userr"]="مفتوح";
$settings["lock"]["botk"]="مفتوح";
$settings["lock"]["linkk"]="مفتوح";
$settings["lock"]["forwardk"]="مفتوح";
$settings["lock"]["userk"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}}}

if( $text =="الاعدادات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
$locklink = $settings["lock"]["link"];
$markdown = $settings["lock"]["markdown"];
$editmd = $settings["lock"]["editmd"];
$lockusername = $settings["lock"]["username"];
$locktag = $settings["lock"]["tag"];
$rdodsg = $settings["lock"]["rdodsg"];
$ar = $settings["lock"]["ar"];
$inline = $settings["lock"]["inline"];
$en = $settings["lock"]["en"];
$is_sticker = $settings["lock"]["is_sticker"]; 
$lockedit = $settings["lock"]["edit"];
$lockfosh = $settings["lock"]["fosh"];
$lockbots = $settings["lock"]["bot"];
$lockforward = $settings["lock"]["forward"];
$locktg = $settings["lock"]["tgservic"];
$lockreply = $settings["lock"]["reply"];
$lockcmd = $settings["lock"]["cmd"];
$lockdocument = $settings["lock"]["document"];
$lockgif = $settings["lock"]["gif"];
$iduser = $settings["lock"]["iduser"];
$lockvideo_note = $settings["lock"]["video_msg"];
$locklocation = $settings["lock"]["location"];
$lockphoto = $settings["lock"]["photo"];
$lockcontact = $settings["lock"]["contact"];
$lockaudio = $settings["lock"]["audio"];
$lockvoice = $settings["lock"]["voice"];
$locksticker = $settings["lock"]["sticker"];
$lockgame = $settings["lock"]["game"];
$lockvideo = $settings["lock"]["video"];
$locktext = $settings["lock"]["text"];

$mute_all = $settings["lock"]["mute_all"];
$welcome = $settings["information"]["welcome"];
$add = $settings["information"]["add"];
$setwarn = $settings["information"]["setwarn"];
$charge = $settings["information"]["charge"];
$lockauto = $settings["lock"]["lockauto"];
$lockcharacter = $settings["lock"]["lockcharacter"];
$startlock = $settings["information"]["timelock"];
$endlock = $settings["information"]["timeunlock"];
$startlockcharacter = $settings["information"]["pluscharacter"];
$endlockcharacter = $settings["information"]["downcharacter"];
$sigchange = $settings["lock"]["downloadmid"];
$Middown = $settings["lock"]["downloadmid"];
$text = str_replace("| فعال |","","مرحبا بك في 𐂠ᯓᯓ ᯓтαℓαsнαηεᯓ : 
𐂠ᯓ اعدادات المجموعة ᯓ
𐂠ᯓ❪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)* ❫ ❫
ᯓ التاك  { $locktag }
ᯓ العربية  { $ar }
ᯓ الاتجليزية  { $en }
ᯓ المعرفات  { $lockusername }
ᯓ التعديل  { $lockedit }
ᯓ الروابط  { $locklink }
ᯓ المتحركه  { $lockgif }
 ᯓالصور  { $lockphoto }
 ᯓ الايدي  { $iduser }
ᯓ الموسيقى  { $lockaudio }
ᯓ البصمات  { $lockvoice }
𐂠ᯓ❪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)* ❫ ❫
ᯓ الكلايش  { $lockcharacter }
ᯓ الالعاب  { $lockgame }
ᯓ التوجيه  { $lockforward }
ᯓ الانلاين  { $inline }
ᯓ السيئات  { $lockfosh }
ᯓ الكلايش  { $lockcharacter }
ᯓ الرد  { $lockreply }
ᯓ الاشعارات  { $locktg }
ᯓ بصمة الفيديو  { $lockvideo_note }
ᯓ الموقع  { $locklocation }
𐂠ᯓ❪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)* ❫ ❫
ᯓ الملفات  { $lockdocument }
ᯓ الجهات  { $lockcontact }
ᯓ الماركدوان  { $markdown }
ᯓ تعديل الميديا  { $locklink }
ᯓ الملصقات  { $locksticker }
ᯓ الدردشة  { $locktext }
ᯓ البوتات  { $lockbots }
ᯓ الردود  { $rdodsg }
𐂠ᯓ❪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)* ❫ ❫
ᯓ تحويل الصيغ  { $sigchange }
ᯓ تحميل الميديا  { $Middown }
ᯓ الملصقات المتحركة  { $is_sticker }
𐂠ᯓ❪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)* ❫ ❫
");
$text2 = str_replace("| غير مفعل |","","$text");
bot('sendmessage',[ 
 'chat_id'=>$chat_id,
 'text'=>"$text2",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"$chinnl",'url'=>"https://t.me/$chinnl"]
],]])]); 
}}
if (strpos($text, "ضع ترحيب") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)  or in_array($from_id,$eri) or in_array($from_id,$carlos) or in_array($from_id,$nazar)) {
$add = $settings["information"]["added"];
if ($add == true) {
$we = str_replace(['ضع ترحيب'],'',$text );
$plus = mb_strlen("$we");
if($plus < 1000){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم وضع الترحيب بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["textwelcome"]="$we";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ ارسلت رسالة تحتوي على 1000 حرف لٱ يمكنك ارسال اكثر م̷ـــِْن 1000 حرف
",'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif ($text == "الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)  or in_array($from_id,$eri) or in_array($from_id,$carlos) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
$text = $settings["information"]["textwelcome"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$text
",'reply_to_message_id'=>$message_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
$settings["information"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}

}
}
// welcome enbale and disable
elseif ( $text== "تفعيل الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)  or in_array($from_id,$eri) or in_array($from_id,$carlos) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
$text = $settings["information"]["textwelcome"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم تفعيل الترحيب بنجاح
 𐂠ᯓ اسم المجموعة ⁦𐎄 
ـ $namegroup
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["welcome"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif ( $text== "تعطيل الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم تعطيل الترحيب بنجاح
 𐂠ᯓ اسم المجموعه ⁦𐎄 
ـ $namegroup
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if ($text =="تفعيل الطرد" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$carlos) || in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم تفعيل الطرد بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["katei"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تعطيل الطرد" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$carlos) || in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
 𐂠ᯓ بواسطه ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم تعطيل الطرد بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["katei"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);}}
}

elseif (strpos($text, "/banall ") !== false or strpos($text, "حظر عام") !== false) {
if (in_array($from_id,$Dev)) {
$text = str_replace(['/banall ','حظر عام '],'',$text );
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠?? ايديه  `$re_id` 
 𐂠ᯓ تم حظره من كل المجموعات
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$user["banlist"][]="$text";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif (strpos($text, "/unbanall ") !== false or strpos($text, "الغاء الحظر العام ") !== false) {
if (in_array($from_id,$Dev)) {
$text = str_replace(['/unbanall ','الغاء الحظر العام '],'',$text );
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ تم الغاء حظره من كل المجموعات
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$key = array_search($text,$user["banlist"]);
unset($user["banlist"][$key]);
$user["banlist"] = array_values($user["banlist"]); 
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif( $text== "المحظورين عام") {
if ( in_array($from_id,$Dev)) {
$silent = $user["banlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result.$silent[$z]."\n";
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ اليك قائمة ⁦𐎄 المحظورين عام
$result",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}

$re_user = $update->message->reply_to_message->from->username;
$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
$re = $update->message->reply_to_message;
if(in_array($re_id,$eri)){
$infor = "𖡞المبرمج𖡞";
}
elseif(in_array($re_id,$Dev) ){
$infor = "🏴صاحب البوت🏳️";
}
elseif(in_array($re_id,$developer) ){
$infor = "مطور ثانوي";
}
elseif(in_array($re_id,$nazar) ){
$infor = "مطور";
}
elseif(in_array($re_id,$carlos) ){
$infor = "المنشئ";
}
elseif($statusrt == "creator"){
$infor = "المالك";
}
elseif($statusrt == "administrator"){
$infor = "المشرف";
}
elseif(in_array($re_id,$manger) ){
$infor = "المدير";
}
elseif(in_array($re_id,$admin_user) ){
$infor = "الادمن";
}
elseif(in_array($re_id,$mmyaz) ){
$infor = "عضو مميز";
}elseif($statusrt !== "creator" || $statusrt !== "administrator" || $statusrt !== "member" || !in_array($re_id,$admin_user) || !in_array($re_id,$mmyaz) || !in_array($re_id,$manger) || !in_array($re_id,$developer) ){
$infor = "فقط عضو";
}elseif($statusrt == "member" ){
$infor = "فقط عضو";
} 
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$user = $update->message->from->username;
if($text == "كشف" or $text == "الرتبه" or $text == "انتا مين "){
if($user){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/$re_user",
'caption'=>"
𐂠𐎄 𝒊𝒅  $re_id 
??𐎄 $infor 
𐂠𐎄 𝒖𝒔 @$re_user 
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━━━ᯓтαℓαsнαηεᯓ━━━━━•𐂠","url"=>"t.me/alatshawy"]],
[["text"=>"𐂠ᯓمبرمج السورسᯓ𐂠",'url'=>"t.me/BLACIK0"]],
]
])
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𐂠𐎄 𝒊𝒅  $re_id 
𐂠𐎄  $infor 
𐂠𐎄 𝒖𝒔 @$re_user 
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━━━ᯓтαℓαsнαηεᯓ━━━━━•𐂠","url"=>"t.me/alatshawy"]]
]
])
]);
}
}

$HHMHHH = str_replace("كشف ","$HHMHHH",$text); 
$datainfo = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$HHMHHH"));
$names =$datainfo->result->first_name;
$ids =$datainfo->result->id;
$bios =$datainfo->result->bio;
$users =$datainfo->result->username;
if($text == "كشف $HHMHHH"){
bot('sendmessage', [
'chat_id'=>$chat_id,
'text'=>"
𐎄: 𝒖𝒔  @$re_user𐂠➸.
𐎄: 𝒃𝒊  $infor  𐂠➸.
𐎄: 𝒊𝒅  $re_id  𐂠➸.
",'reply_to_message_id'=>$message->message_id, 
'parse_mode'=>'MarkDown'
]);
}


if ($rt && $text == "طرد" ){
if($settings["lock"]["katei"] == "مقفول"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$vipmem) && !in_array($re_id,$developer) && !in_array($re_id,$carlos)) {
bot('KickChatMember',['chat_id'=>$chat_id,'user_id'=>$re_id]);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ تم طرده من المجموعة
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,]);} 
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>" 𐂠ᯓ عذرا لا تستطيع طرد ⁦𐎄 ( $infor )",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}

$s = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$from_id"));
$sn =$s->result->first_name;
$su =$s->result->username;
$replace = json_decode(file_get_contents("replace.json"),true);
$user = $replace[$from_id]["user"];
$name = $replace[$from_id]["name"];
if($message and $su != $user and $user != null and $user != ""){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"* 𐂠معرفتكش انا كده بعد مغيرت اسمك😹:* @$user ",'parse_mode' =>"markdown", 'reply_to_message_id'=>$message->message_id, 
]);
} 
if($message and ! in_array($su,$user)){
$replace[$from_id]["user"] = "$su";
file_put_contents("replace.json",json_encode($replace));
}

if($message and $sn != $name and $name != null and $name != ""){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"* 𐂠 معرفتكش انا كده بعد مغيرت اسمك😹:* $name ",'parse_mode' =>"markdown", 'reply_to_message_id'=>$message->message_id, 
]);
} 
if($message and ! in_array($sn,$name)){
$replace[$from_id]["name"] = "$sn";
file_put_contents("replace.json",json_encode($replace));
}
 $result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$count=$result["result"]["total_count"]; 
$pr = str_replace("صورتي ", "", $text);
if($text=="صورتي $pr" && $pr <= $count){
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id=$result["result"]["photos"][$pr-1][0]["file_id"];
$count=$result["result"]["total_count"];var_dump(
  
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$file_id",
'caption' =>" 𐂠ᯓ هذه هي الصوره رقم $pr
 𐂠ᯓ عدد صورك $count", 'reply_to_message_id'=>$message->message_id, 
]));
}elseif($text == "صورتي $pr" && $pr > $count){
bot('sendMessage',[
'chat_id' =>$chat_id,
'text' =>" 𐂠ᯓ عذرا انت تمتلك $count صورة فقط",'reply_to_message_id'=>$message->message_id, 
]);
}

$date = date('h:i:s'); $d = date('A');
$aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
date_default_timezone_set('Asia/Baghdad');
$times = date('h:i:s');
$year = date('Y');
$month = date('n');
$day = date('j');
$time = time() + (979 * 11 + 1 + 30);
$blod1 = "http://api.telegram.org/bot".$API_KEY."/getChatMembersCount?chat_id=$chat_id";
$blod2 = file_get_contents($blod1);
$blod3 = json_decode($blod2);
$blod4 = $blod3->result;
$title = $message->chat->title;

if($text == "الساعة" or $text == "الزمن" or $text == "الساعه" or $text == "الوقت"){
bot ('sendMessage',['chat_id'=>$chat_id,'text'=>"
 𐂠ᯓ الساعة ⁦𐎄 $times $aa
 𐂠ᯓ التاريخ ⁦𐎄 ".date("Y")."/".date("n")."/".date("d")."
",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,]);}

$rt = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;
$from_id = $message->from->id;
$token = "5028472780:AAG6E7-DwvXPHjfxR1ZXCmUf6YXOvrjHOWw";
if($rt and $text == "لقبه"){
$a = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=$re_id"));
$b = $a->result->custom_title;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"ᯓ لقبه  $b",
'reply_to_message_id'=>$message->message_id,
]);
}

if($text == "لقبي"){
$a = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=$from_id"));
$b = $a->result->custom_title;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𐂠ᯓ لقبك  $b",
'reply_to_message_id'=>$message->message_id,
]);
}

$saiko = file_get_contents("saikoo.txt");
if($text=="ضع قوانين"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ اهلا بك عزيزي
 𐂠ᯓ الان قم بارسال القوانين
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("saikoo.txt","saiko");
}
}
if($text and $saiko =="saiko"){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ اهلا بك عزيزي
 𐂠ᯓ تم حفظ القوانين بنجاح
 𐂠ᯓ الان قم بارسال القوانين لعرض القوانين
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("ssaiko.txt","$text");
unlink("saikoo.txt");
}
}
$ameer = file_get_contents("ssaiko.txt");
if($text=="القوانين"){
if($settings["lock"]["bbhi"] == "مقفول"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$ameer
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
}
}
if($text=="القوانين"){
if($settings["lock"]["bbhi"] == "مفتوح"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ عذرا عزيزي عليك تفعيل القوانين
 𐂠ᯓ للتفعيل ارسل  تفعيل القوانين
",'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
}
}
if($text=="مسح القوانين"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ تم مسح القوانين بنجاح
",'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("ssaiko.txt","");
}
}
$ameer = file_get_contents("ssaiko.txt");
if($text=="القوانين" and $ameer == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ عزيزي لايوجد قوانين
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
}

if(strpos($text, 'ضع وصف')!== false){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
$newdec= str_replace('ضع وصف','',$text);
bot('setChatDescription',[
'chat_id'=>$chat_id,
'description'=>$newdec
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"* 𐂠ᯓ تم وضع الوصف  
 𐂠ᯓ بواسطة* [$first_name](tg://user?id=$from_id)
",'parse_mode'=>'MarkDown',
]);}
}

$MSg_Id = $message->message_id;
$FN_MSg = $message->from->first_name;
$UM_MSg = $message->from->username;
$Id_MSg = $message->from->id;
if(!$UM_MSg){
$MsG = " 𐂠ᯓ الاسم : $FN_MSg
 𐂠ᯓ الايدي : $Id_MSg
 𐂠ᯓ قام بنشر صورة اباحية : ☞︎︎︎
";
}elseif($UM_MSg){
$MsG = " 𐂠ᯓ الاسم : $FN_MSg
 𐂠ᯓ المعرف : @".$UM_MSg."
 𐂠ᯓ قام بنشر صورة اباحية : ☞︎
";
}
if($message->photo){
$file = $message->photo[count($message->photo)-1]->file_id;
$get = bot('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
$url = "https://api.telegram.org/file/bot".API_KEY."/$patch"; 
$Api = json_decode(file_get_contents("https://forhassan.ml/my_ip/ImageInfo.php?url=".$url),true);
if($Api['ok']["Info"] == "Indecent"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$MSg_Id,
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MsG,
]);}
}

elseif( $rt && $text == "حظر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ تم حظره من المجموعة بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" 𐂠ᯓ عذرا لا تستطيع حظر ⁦𐎄 ( $infor )",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
 elseif( $rt && $text == "الغاء الحظر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
	bot('unbanChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」
 𐂠ᯓ ايديه  `$re_id` 
 𐂠ᯓ تم الغاء حظره من المجموعة
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" 𐂠ᯓ عذرا لا تستطيع الغاء حظر ⁦𐎄 ( $infor )",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
  
$user = $update->message->from->username;
$s = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$bot_id);
$ss = json_decode($s, true);
$bot = $ss['result']['status'];

mkdir("banduser");
$get_Busers = file_get_contents("banduser/$chat_id.txt");
$get_Buser = explode("\n",$get_Busers);
$kick = explode(" " ,$text);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if($kick[0] == "ححظر" || $kick[0] == "حظر" and isset($kick[1])){
$text = str_replace(['حظر','ححظر'],'',$text);
$stat = file_get_contents("https://api.telegram.org/bot
$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];

if($text != $sudo && $text != $buyy && !in_array($text,$Dev) and !in_array($text,$manger) and !in_array($text,$developer) and !in_array($text,$mmyaz) and !in_array($text,$admin_user) and !in_array($text,$Dev)){
if(strpos($text ,"@") !== false and !in_array($text,$get_Buser)){
file_put_contents("banduser/$chat_id.txt","\n" . $text ."\n" , FILE_APPEND);}
if($stat !== false and !in_array("@$username",$get_Buser)){
file_put_contents("banduser/$chat_id.txt","\n" . "@$username" ."\n" , FILE_APPEND);}

bot('KickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id
  ]);
 bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」 
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓ تم حظره من المجموعه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" 𐂠ᯓ عذرا لا تستطيع حظر ⁦𐎄 ( $infor )",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if($kick[0] == "الغاء" and $kick[1] == "حظر" and isset($kick[2])){
$text = str_replace('الغاء حظر ','',$text);

$stat = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];

if($stat != false and in_array("@$username",$get_Buser)){
$str2 = str_replace("@$username",'',$get_Busers);
$ex2 = explode("\n",$str2);
file_put_contents("banduser/$chat_id.txt",$ex2);}

if(strpos($text ,"@") !== false and in_array($text,$get_Buser)){
$str = str_replace("$text",'',$get_Busers);
$ex = explode("\n",$str);
file_put_contents("banduser/$chat_id.txt",$ex);}

bot('promoteChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$id,
        'can_send_messages'=>true,
  ]);
bot('sendmessage', [
 'chat_id' => $chat_id,
 'text'=>" 𐂠ᯓ العضو ⁦𐎄「 [$re_name](tg://user?id=$re_id) 」 
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓ تم الغاء حظره من المجموعه
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
   ]);
}
if($text == "مسح المحظورين"){
file_put_contents("banduser/$chat_id.txt","");
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ بواسطة ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم مسح قائمة المحظورين
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
}
if($text == "المحظورين" and $get_Busers != NULL || $get_Busers != ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ بواسطة ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم عرض قائمة المحظورين
[$get_Busers]",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
if($text == "المحظورين" and $get_Busers == NULL || $get_Busers == ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ عزيزي ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ لايوجد اي محظور حاليأ
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}

if( $text =="قائمة المنع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$filter = $settings["filterlist"];
for($z = 0;$z <= count($filter)-1;$z++){
$result = $result.$filter[$z]."\n";
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ عزيزي ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ اليك قائمة الممنوعات
❪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)* ❫ ❫
$result
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif (strpos($text , "جفلتر ") !== false or strpos($text , "منع") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$text1 = str_replace(['فلتر ','منع'],'',$text);
bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"
 𐂠ᯓ بواسطة ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم منع كلمة *$text1* بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$settings["filterlist"][]="$text1";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" 𐂠ᯓ لم يتم تفعيل البوت في مجموعتك",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif ( strpos($text  , "الغاء فلتر") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$text1 = str_replace(['الغاء فلترة'],'',$text );
bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"
 𐂠ᯓ بواسطة ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم الغاء منع كلمة *$text1* بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$key = array_search($text1,$settings["filterlist"]);
unset($settings["filterlist"][$key]);
$settings["filterlist"] = array_values($settings["filterlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
elseif( $text =="مسح قائمة المنع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطة ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم مسح قائمة الممنوعات بنجاح
",'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
unset($settings["filterlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);}}
}
 
$sttings = json_decode(file_get_contents("media.json"),1);
$media = $sttings["media"][$chat_id];
$ameer = $sttings["ameer"][$chat_id];
if($sttings["media"][$chat_id]==null){
$sttings["media"][$chat_id]=0;
file_put_contents("media.json",json_encode($sttings));
}
$oo = $message->message_id;
if ($message->sticker){
file_put_contents("media.json");
$sttings['ameer'][$chat_id][] = "$oo";
$sttings["media"][$chat_id]+=1;
file_put_contents("media.json",json_encode($sttings));
}
if ($message->photo){
file_put_contents("media.json");
$sttings['ameer'][$chat_id][] = "$oo";
$sttings["media"][$chat_id]+=1;
file_put_contents("media.json",json_encode($sttings));
}
if ($message->video){
file_put_contents("media.json");
$sttings['ameer'][$chat_id][] = "$oo";
$sttings["media"][$chat_id]+=1;
file_put_contents("media.json",json_encode($sttings));
}
if ($message->video_note){
file_put_contents("media.json");
$sttings['ameer'][$chat_id][] = "$oo";
$sttings["media"][$chat_id]+=1;
file_put_contents("media.json",json_encode($sttings));
}
if ($message->animation){
file_put_contents("media.json");
$sttings['ameer'][$chat_id][] = "$oo";
$sttings["media"][$chat_id]+=1;
file_put_contents("media.json",json_encode($sttings));
}
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if($text == "عدد الميديا"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ عدد الميديا ⁦𐎄 $media
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
exit();
}
}
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
if($text == "مسح الميديا"){
if($media == "0"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ عدد الميديا ⁦𐎄 $media
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
exit();
}
}
}
date_default_timezone_set("Asia/Baghdad");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
if($text == "مسح الميديا"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ جار مسح الميديا انتظر قليلا....
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
for($i=0;$i<=$sttings["media"][$chat_id];$i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>"$ameer[$i]",
]);
}
$date = $message->date;
$gettime = time();
$sppedtime = $gettime - $date;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ بواسطة ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ  تم مسح الميديا ⁦𐎄 $media بنجاح
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
unset($sttings['media'][$chat_id]);
unset($sttings['ameer'][$chat_id]);
file_put_contents("media.json",json_encode($sttings));
exit();
}
}

elseif($text =="تفعيل ردود المطور" or $text == "تفعيل ردود مطور"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطة ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ  تم تفعيل ردود المطور بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($text =="تعطيل ردود المطور" or $text == "تعطيل ردود مطور"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ بواسطة ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ  تم تعطيل ردود المطور بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rdodsg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}

$id = file_get_contents('id.txt');
if($id == "✓"){
$namw = $message->new_chat_member->first_name;
$nam = $message->new_chat_member->last_name;
$idw = $message->new_chat_member->id;
$usw = $message->new_chat_member->username;
$Datauser = $update->callback_query->from->username;
$Dataid = $update->callback_query->from->id;
$chat_id2 = $update->callback_query->message->chat->id;
mkdir("Ali");
mkdir("Ali/$chat_id");
$get = file_get_contents("Ali/$chat_id2/$Dataid.txt");
if($message->new_chat_member){
bot('restrictChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$idw,
]);
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
* 𐂠ᯓ العضو ⁦𐎄 *[@$usw]*
 𐂠ᯓ  الايدي ⁦𐎄 *[$idw](tg://user?id=$idw)*
 𐂠ᯓ تم تقييدك بواسطة البوت اضغط على زر انا لست روبوت*
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>" 𐂠ᯓ انا لست روبوت","callback_data"=>"unban-$idw"]],
]
])
]);
file_put_contents("Ali/$chat_id/$from_id.txt",$idw);
}
$Ali = explode('-', $data);
if($data == "unban-$Ali[1]" and $get == $Dataid){
bot('promoteChatMember',[
'chat_id'=>$chat_id2,
'user_id'=>$Ali[1],
'can_send_messages'=>true,
]);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$update->callback_query->message->message_id,
'text'=>" 𐂠ᯓ تم الغاء تقييدك بنجاح 
 𐂠ᯓ انت لست روبوت بالفعل...",
'parse_mode'=>"MarkDown",
]);
unlink("Ali/$chat_id2/$Dataid.txt");
}}
elseif( $text =="فتح التحقق"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>" 𐂠ᯓ بواسطة ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ  تم فتح التحقق بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('id.txt',✓);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if( $text =="قفل التحقق"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>" 𐂠ᯓ بواسطة ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ  تم قفل التحقق بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 file_put_contents('id.txt',✘);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);}}
}

$token = API_KEY;
$mustafa = json_decode(file_get_contents("data/$chat_id.json"),true);
$cei = $update->edited_message->chat->id;
$cfi = $update->edited_message->from->id;
$stn = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
$runk = $stn['result']['status'];
$result = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$cei&user_id=".$cfi),true);
$result_admin = $result['result']['status'];
mkdir("data");
if($mustafa == null ){
$mustafa = '{"lock": {"put": "مفتوح"}}';
$mustafa = json_decode($mustafa,true);
file_put_contents("data/$chat_id.json",$mustafa);
}
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if ($text == "قفل الدخول" ) {
bot('sendMessage',[
     'chat_id'=>$chat_id,
     'text'=>" 𐂠ᯓ بواسطة ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ  تم قفل الدخول بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$mustafa["lock"]["put"]="مقفول️";
file_put_contents("data/$chat_id.json",json_encode($mustafa,true));
}
}
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if ($text == "فتح الدخول"  ) {
bot('sendMessage',[
     'chat_id'=>$chat_id,
     'text'=>" 𐂠ᯓ بواسطة ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ  تم فتح الدخول بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$mustafa["lock"]["put"]="مفتوح";
file_put_contents("data/$chat_id.json",json_encode($mustafa,true));
}
}
if($mustafa["lock"]["put"] == "مقفول️"){
if($update->message->new_chat_member){
 bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$update->message->new_chat_member->id
]);
}
}

$set = file_get_contents("SudoOrders/set.txt");
$setch = file_get_contents("SudoOrders/setch.txt");
if(in_array($from_id,$Dev)){
if ($text == "تغيير الاشتراك الاجباري" or $text == "تعيين الاشتراك الاجباري" or $text == "تغيير قناة الاشتراك" or $text == "🏴تعيين قناة الاشتراك🏳️"){
file_put_contents("SudoOrders/set.txt","setch");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"
* 𐂠ᯓ قم بأرسال معرف القناة بدون @*\n",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
if($text && $set =="setch" and in_array($from_id,$Dev)){
file_put_contents("SudoOrders/setch.txt",$text); 
file_put_contents("SudoOrders/set.txt","");
bot("sendmessage",["chat_id"=>$chat_id,"text"=>"
 𐂠ᯓ تم حفظ معرف القناة بنجاح\n قم برفعي ادمن في القناة\n ثم ارسل تفعيل الاشتراك الاجباري",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}

if(in_array($from_id,$Dev)){
if($text == "مسح قناة الاشتراك" or $text == "🏴حذف قناة الاشتراك🏳️"){
file_put_contents("SudoOrders/setch.txt","");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>" 𐂠ᯓ تم حذف قناة الاشتراك الاجباري",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}

if($text == "🏴جلب قناة الاشتراك🏳️" or $text == "قناة الاشتراك" or $text == "الاشتراك الاجباري" or $text == "قناة الاشتراك الاجباري"){
bot("sendMessage",["chat_id"=>$chat_id,"text"=>" 𐂠ᯓ مرحبا بك اليك قناة الاشتراك - @$setch",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
}

mkdir("data");
mkdir("data/addrd");
$opption = file_get_contents("data/addrd/$chat_id/opption.txt");
$get_from_id = file_get_contents("data/addrd/$chat_id/from_id.txt");
$get_rd = file_get_contents("data/addrd/$chat_id/getrd.txt");
$opption_ = file_get_contents("data/addrd/opption.txt");
$get_from_id1_ = file_get_contents("data/addrd/from_id.txt");
$I_get_rd = file_get_contents("data/addrd/getrd.txt");
$get_from_id_1 = explode("\n",$get_from_id1_);
$get_from_id_ = explode("\n",$get_from_id);
if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$useradmin) || in_array($from_id,$getCCmember) ) {
if($text == "اضف رد"){
mkdir("data/addrd/$chat_id");
mkdir("data/addrd/$chat_id/media");
mkdir("data/addrd/$chat_id/media/sticker");
mkdir("data/addrd/$chat_id/media/video");
mkdir("data/addrd/$chat_id/media/videonote");
mkdir("data/addrd/$chat_id/media/document");
mkdir("data/addrd/$chat_id/media/photo");
mkdir("data/addrd/$chat_id/media/audio");
mkdir("data/addrd/$chat_id/media/contact");
file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
file_put_contents("data/addrd/$chat_id/opption.txt","GG1ZZ");
bot("SendMessage",[
"chat_id"=>$chat_id,
"text"=>"
 𐂠ᯓ العضو ⁦𐎄 [$first_name](tg://user?id=$from_id)  
 𐂠ᯓ حسننا , الان ارسل كلمه الرد ✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text and in_array($from_id,$get_from_id_) and $opption == "GG1ZZ"){
 file_put_contents("data/addrd/$chat_id/opption.txt","IBADLZ");
file_put_contents("data/addrd/$chat_id/mod.txt",$text);
file_put_contents("data/addrd/$chat_id/media/media.txt",$text);
file_put_contents("data/addrd/$chat_id/getrd.txt", "- ". $text . "\n" , FILE_APPEND);
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>" 𐂠ᯓ جيد , يمكنك الان ارسال جواب الرد 
 𐂠ᯓ نص,صوره,فيديو,متحركه,بصمه,اغنيه ✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($message and in_array($from_id,$get_from_id_) and $opption == "IBADLZ"){
file_put_contents("data/addrd/$chat_id/opption.txt","");
$IB_3ADLZ = file_get_contents("data/addrd/$chat_id/mod.txt");
$IB_4ADLZ = file_get_contents("data/addrd/$chat_id/media/media.txt");

$IB_2ADLZ = fopen("data/addrd/$chat_id/mod.txt", "a") or die("Unable to open file!"); 
fwrite($IB_2ADLZ, "$IB_3ADLZ\n");
fclose($IB_2ADLZ);

$IB_5ADLZ = fopen("data/addrd/$chat_id/media/media.txt", "a") or die("Unable to open file!"); 
fwrite($IB_5ADLZ, "$IB_4ADLZ\n");
fclose($IB_5ADLZ);

file_put_contents("data/addrd/$chat_id/$IB_3ADLZ.txt",$text);
file_put_contents("data/addrd/$chat_id/mod.txt","");
file_put_contents("data/addrd/$chat_id/media/media.txt","");
file_put_contents("data/addrd/$chat_id/media/$IB_4ADLZ.txt",$message->voice->file_id);
file_put_contents("data/addrd/$chat_id/media/sticker/$IB_4ADLZ.txt",$message->sticker->file_id );
file_put_contents("data/addrd/$chat_id/media/document/$IB_4ADLZ.txt",$message->document->file_id);
file_put_contents("data/addrd/$chat_id/media/videonote/$IB_4ADLZ.txt",$message->video_note->file_id);
file_put_contents("data/addrd/$chat_id/media/contact/$IB_4ADLZ.txt",$message->contact->phone_number);
file_put_contents("data/addrd/$chat_id/media/video/$IB_4ADLZ.txt",$message->video->file_id);
file_put_contents("data/addrd/$chat_id/media/photo/$IB_4ADLZ.txt",$message->photo[0]->file_id);
file_put_contents("data/addrd/$chat_id/media/audio/$IB_4ADLZ.txt",$message->audio->file_id );
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>" 𐂠ᯓ العضو ⁦𐎄 [$first_name](tg://user?id=$from_id)  
 𐂠ᯓ تم اضافة الرد بنجاح  ✓
",'parse_mode'=>"markdown",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if($text == "مسح رد"){
 file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
 file_put_contents("data/addrd/$chat_id/opption.txt","delete");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>" 𐂠ᯓ حسننا عزيزي ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ الان ارسل الرد ليتم مسحه من المجموعة",
 'parse_mode'=>"markdown",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if(file_exists("data/addrd/$chat_id/$text.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
 $str = str_replace("- $text","",$get_rd);
file_put_contents("data/addrd/$chat_id/getrd.txt",$str);
file_put_contents("data/addrd/$chat_id/from_id.txt","");
file_put_contents("data/addrd/$chat_id/opption.txt","");
 unlink("data/addrd/$chat_id/$text.txt");
unlink("data/addrd/$chat_id/media/$text.txt");
unlink("data/addrd/$chat_id/media/sticker/$text.txt");
unlink("data/addrd/$chat_id/media/video/$text.txt");
unlink("data/addrd/$chat_id/media/videonote/$text.txt");
unlink("data/addrd/$chat_id/media/document/$text.txt");
unlink("data/addrd/$chat_id/media/photo/$text.txt");
unlink("data/addrd/$chat_id/media/audio/$text.txt");
unlink("data/addrd/$chat_id/media/contact/$text.txt");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>" 𐂠ᯓ حسننا عزيزي ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم مسح الرد بنجاح 
",'parse_mode'=>"markdown",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
elseif(!file_exists("data/addrd/$chat_id/$text.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
file_put_contents("data/addrd/$chat_id/from_id.txt","");
 file_put_contents("data/addrd/$chat_id/opption.txt","");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>" 𐂠ᯓ هذا الرد ليس مضاف في قائمة الردود ",
 'parse_mode'=>"markdown",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }

if($text == "مسح الردود"){
$links = __DIR__ . "/data/addrd/$chat_id";
$media = __DIR__ . "/data/addrd/$chat_id/media";
$media_contact = __DIR__ . "/data/addrd/$chat_id/media/contact";
$media_document = __DIR__ . "/data/addrd/$chat_id/media/document";
$media_video = __DIR__ . "/data/addrd/$chat_id/media/video";
$media_videonote = __DIR__ . "/data/addrd/$chat_id/media/videonote";
$media_photo = __DIR__ . "/data/addrd/$chat_id/media/photo";
$media_sticker = __DIR__ . "/data/addrd/$chat_id/media/sticker";
$media_audio = __DIR__ . "/data/addrd/$chat_id/media/audio";
$files = scandir($links);
$files_media = scandir($media);
$files_media_contact = scandir($media_contact);
$files_media_document = scandir($media_document);
$files_media_video = scandir($media_video);
$files_media_videonote = scandir($media_videonote);
$files_media_photo = scandir($media_photo);
$files_media_sticker = scandir($media_sticker);
$files_media_audio = scandir($media_audio);

foreach ($files as $file) {
if(is_file($links . "/" . $file)){
unlink ($links . "/" .$file);
}
}
foreach ($files_media as $filemedia) {
if(is_file($media . "/" . $filemedia)){
unlink ($media . "/" .$filemedia);
}
}
foreach ($files_media_contact as $file_media_contact) {
if(is_file($media_contact . "/" . $file_media_contact)){
unlink ($media_contact . "/" .$file_media_contact);
}
}
foreach ($files_media_document as $file_media_document) {
if(is_file($media_document . "/" . $file_media_document)){
unlink ($media_document . "/" .$file_media_document);
}
}
foreach ($files_media_video as $file_media_video) {
if(is_file($media_video . "/" . $file_media_video)){
unlink ($media_video . "/" .$file_media_video);
}
}
foreach ($files_media_videonote as $file_media_videonote) {
if(is_file($media_videonote . "/" . $file_media_videonote)){
unlink ($media_videonote . "/" .$file_media_videonote);
}
}
foreach ($files_media_photo as $file_media_photo) {
if(is_file($media_photo . "/" . $file_media_photo)){
unlink ($media_photo . "/" .$file_media_photo);
}
}
foreach ($files_media_sticker as $file_media_sticker) {
if(is_file($media_sticker . "/" . $file_media_sticker)){
unlink ($media_sticker . "/" . $file_media_sticker);
}
}
foreach ($files_media_audio as $file_media_audio) {
if(is_file($media_audio . "/" . $file_media_audio)){
unlink ($media_audio . "/" . $file_media_audio);
}
}
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ عزيزي ⁦𐎄 [$first_name](tg://user?id=$from_id)  
 𐂠ᯓ تم مسح كل الردود ✓
",'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("data/addrd/$chat_id/getrd.txt", "");
}

if($text == "الردود" and $get_rd != NULL and $get_rd != "" and $get_rd != " " and $get_rd != "\n\n" and $get_rd != "\n" and $get_rd != "\n\n\n" and $get_rd != "\n\n\n\n" and $get_rd != "\n\n\n\n\n" and $get_rd != "\n\n\n\n\n\n"){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ الردود المضافة في المجموعة
$get_rd

❪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)* ❫ ❫
",'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "الردود" and $get_rd == NULL || $get_rd == "" || $get_rd == " " || $get_rd == "\n\n" || $get_rd == "\n" || $get_rd == "\n\n\n" || $get_rd == "\n\n\n\n" || $get_rd == "\n\n\n\n\n" || $get_rd == "\n\n\n\n\n\n"){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ لا يوجد ردود مضافة حاليا ❕",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
if ($text == "🏴اضف رد عام🏳️" and in_array($from_id,$Dev)){
mkdir("data/addrd/media");
mkdir("data/addrd/$chat_id/media");
mkdir("data/addrd/media/sticker");
mkdir("data/addrd/media/video");
mkdir("data/addrd/media/videonote");
mkdir("data/addrd/media/document");
mkdir("data/addrd/media/photo");
mkdir("data/addrd/media/audio");
mkdir("data/addrd/media/contact");
 file_put_contents("data/addrd/from_id.txt",$from_id);
 file_put_contents("data/addrd/opption.txt","I_GG1ZZ");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
 𐂠ᯓ العضو ⁦𐎄 [$first_name](tg://user?id=$from_id)  
 𐂠ᯓ حسننا , الان ارسل كلمه الرد ✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text and in_array($from_id,$get_from_id_1) and $opption_ == "I_GG1ZZ"){
 file_put_contents("data/addrd/opption.txt","I_BADLZ");
 file_put_contents("data/addrd/mod.txt",$text);
 file_put_contents("data/addrd/media/media.txt",$text);
 file_put_contents("data/addrd/getrd.txt", "- ". $text . "\n" , FILE_APPEND);
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
 𐂠ᯓ جيد , يمكنك الان ارسال جواب الرد 
 𐂠ᯓ نص,صوره,فيديو,متحركه,بصمه,اغنيه ✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
$message = $update->message;
if($message and in_array($from_id,$get_from_id_1) and $opption_ == "I_BADLZ"){
file_put_contents("data/addrd/opption.txt","");
$IB_3ADLZ = file_get_contents("data/addrd/mod.txt");
$IB_4ADLZ = file_get_contents("data/addrd/media/media.txt");
$IB_2ADLZ = fopen("data/addrd/mod.txt", "a") or die("Unable to open file!"); 
fwrite($IB_2ADLZ, "$IB_3ADLZ\n");
fclose($IB_2ADLZ);
$IB_5ADLZ = fopen("data/addrd/media/media.txt", "a") or die("Unable to open file!"); 
fwrite($IB_5ADLZ, "$IB_4ADLZ\n");
fclose($IB_5ADLZ);
file_put_contents("data/addrd/$IB_3ADLZ.txt",$text);
file_put_contents("data/addrd/mod.txt","");
file_put_contents("data/addrd/media/media.txt","");
file_put_contents("data/addrd/media/$IB_4ADLZ.txt",$message->voice->file_id);
file_put_contents("data/addrd/media/sticker/$IB_4ADLZ.txt",$message->sticker->file_id );
file_put_contents("data/addrd/media/document/$IB_4ADLZ.txt",$message->document->file_id);
file_put_contents("data/addrd/media/videonote/$IB_4ADLZ.txt",$message->video_note->file_id);
file_put_contents("data/addrd/media/contact/$IB_4ADLZ.txt",$message->contact->phone_number);
file_put_contents("data/addrd/media/video/$IB_4ADLZ.txt",$message->video->file_id);
file_put_contents("data/addrd/media/photo/$IB_4ADLZ.txt",$message->photo[0]->file_id);
file_put_contents("data/addrd/media/audio/$IB_4ADLZ.txt",$message->audio->file_id );
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ تم اضافة الرد بنجاح ✓
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
 if ($text == "🏴مسح رد عام🏳️" and in_array($from_id,$Dev)){
 file_put_contents("data/addrd/from_id.txt",$from_id);
 file_put_contents("data/addrd/opption.txt","I_delete");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>" 𐂠ᯓ حسننا عزيزي ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ الان ارسل الرد ليتم مسحه من المجموعات
",'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if(file_exists("data/addrd/$text.txt") and in_array($from_id,$get_from_id_1) and $opption_ == "I_delete"){
$str = str_replace("- $text","",$I_get_rd);
file_put_contents("data/addrd/getrd.txt",$str);
file_put_contents("data/addrd/from_id.txt","");
file_put_contents("data/addrd/opption.txt","");
unlink("data/addrd/$text.txt");
unlink("data/addrd/media/$text.txt");
unlink("data/addrd/media/sticker/$text.txt");
unlink("data/addrd/media/video/$text.txt");
unlink("data/addrd/media/videonote/$text.txt");
unlink("data/addrd/media/document/$text.txt");
unlink("data/addrd/media/photo/$text.txt");
unlink("data/addrd/media/audio/$text.txt");
unlink("data/addrd/media/contact/$text.txt");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"($text)
 𐂠ᯓ حسننا عزيزي ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم مسح الرد بنجاح",
 'parse_mode'=>"markdown",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
elseif(!file_exists("data/addrd/$text.txt") and in_array($from_id,$get_from_id_1) and $opption_ == "I_delete"){
file_put_contents("data/addrd/from_id.txt","");
 file_put_contents("data/addrd/opption.txt","");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>" 𐂠ᯓ لا يوجد ردود مضافه حاليا ",
 'parse_mode'=>"markdown",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
 if($text == "🏴مسح الردود العامة🏳️" || $text == "مسح الردود العامة"){
$links = __DIR__ . "/data/addrd";
$media = __DIR__ . "/data/addrd/media";
$media_contact = __DIR__ . "/data/addrd/media/contact";
$media_document = __DIR__ . "/data/addrd/media/document";
$media_video = __DIR__ . "/data/addrd/media/video";
$media_videonote = __DIR__ . "/data/addrd/media/videonote";
$media_photo = __DIR__ . "/data/addrd/media/photo";
$media_sticker = __DIR__ . "/data/addrd/media/sticker";
$media_audio = __DIR__ . "/data/addrd/media/audio";
$files = scandir($links);
$files_media = scandir($media);
$files_media_contact = scandir($media_contact);
$files_media_document = scandir($media_document);
$files_media_video = scandir($media_video);
$files_media_videonote = scandir($media_videonote);
$files_media_photo = scandir($media_photo);
$files_media_sticker = scandir($media_sticker);
$files_media_audio = scandir($media_audio);
foreach ($files as $file) {
if(is_file($links . "/" . $file)){
unlink ($links . "/" .$file);
}
}
foreach ($files_media as $filemedia) {
if(is_file($media . "/" . $filemedia)){
unlink ($media . "/" .$filemedia);
}
}
foreach ($files_media_contact as $file_media_contact) {
if(is_file($media_contact . "/" . $file_media_contact)){
unlink ($media_contact . "/" .$file_media_contact);
}
}
foreach ($files_media_document as $file_media_document) {
if(is_file($media_document . "/" . $file_media_document)){
unlink ($media_document . "/" .$file_media_document);
}
}
foreach ($files_media_video as $file_media_video) {
if(is_file($media_video . "/" . $file_media_video)){
unlink ($media_video . "/" .$file_media_video);
}
}
foreach ($files_media_videonote as $file_media_videonote) {
if(is_file($media_videonote . "/" . $file_media_videonote)){
unlink ($media_videonote . "/" .$file_media_videonote);
}
}
foreach ($files_media_photo as $file_media_photo) {
if(is_file($media_photo . "/" . $file_media_photo)){
unlink ($media_photo . "/" .$file_media_photo);
}
}
foreach ($files_media_sticker as $file_media_sticker) {
if(is_file($media_sticker . "/" . $file_media_sticker)){
unlink ($media_sticker . "/" . $file_media_sticker);
}
}
foreach ($files_media_audio as $file_media_audio) {
if(is_file($media_audio . "/" . $file_media_audio)){
unlink ($media_audio . "/" . $file_media_audio);
}
}
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ عزيزي ⁦𐎄 [$first_name](tg://user?id=$from_id)  
 𐂠ᯓ تم مسح كل الردود  ✓",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("data/addrd/getrd.txt", "");
}
}

if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
if ($text == "🏴الردود العامة🏳️" and $I_get_rd != NULL and $I_get_rd != "" and $I_get_rd != " " and $I_get_rd != "\n\n" and $I_get_rd != "\n" and $I_get_rd != "\n\n\n" and $I_get_rd != "\n\n\n\n" and $I_get_rd != "\n\n\n\n\n" and $I_get_rd != "\n\n\n\n\n\n"){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ الردود العامه المضافه في البوت

$I_get_rd

❪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)* ❫ ❫",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}

if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
if ($text == "🏴الردود العامة🏳️" and $I_get_rd == NULL || $I_get_rd == "" || $I_get_rd == " " || $I_get_rd == "\n\n" || $I_get_rd == "\n" || $I_get_rd == "\n\n\n" || $I_get_rd == "\n\n\n\n" || $I_get_rd == "\n\n\n\n\n" || $I_get_rd == "\n\n\n\n\n\n"){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ لا يوجد ردود مضافه حاليا ❕*",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
}
 //♥
 if($settings["lock"]["rdodsg"] == "مقفول"){
 if($message->text and file_exists("data/addrd/$chat_id/$text.txt")) {
    $MoStaFa = file_get_contents("data/addrd/$chat_id/$text.txt");
   bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$MoStaFa,
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }}
  if($settings["lock"]["rdodsg"] == "مقفول"){
 if($message->text and file_exists("data/addrd/$chat_id/media/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/$text.txt");
   bot('Sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>$MoStaFa,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }}
  if($settings["lock"]["rdodsg"] == "مقفول"){
 if($message->text and file_exists("data/addrd/$chat_id/media/audio/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/audio/$text.txt");
 bot('SendAudio',[
    'chat_id'=>$chat_id,
    'audio'=>$MoStaFa,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }}
  if($settings["lock"]["rdodsg"] == "مقفول"){
 if($message->text and file_exists("data/addrd/$chat_id/media/sticker/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/sticker/$text.txt");
 bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$MoStaFa,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/video/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/video/$text.txt");
bot('Sendvideo',[
'chat_id'=>$chat_id,
'video'=>$MoStaFa,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/photo/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/photo/$text.txt");
bot('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$MoStaFa,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/videonote/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/videonote/$text.txt");
 bot('Sendvideonote',[
'chat_id'=>$chat_id,
'video_note'=>$MoStaFa,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/document/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/document/$text.txt");
 bot('SendDocument',[
'chat_id'=>$chat_id,
'document'=>$MoStaFa,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/contact/$text.txt")) {
 $MoStaFa = file_get_contents("data/addrd/$chat_id/media/contact/$text.txt");
bot('SendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$MoStaFa,
'first_name'=>$message->from->first_name,
'last_name'=>$message->from->last_name,
'reply_to_message_id'=>$message->message_id,
]);
 }
}

$kdeveloper = file_get_contents("kdevelopers.txt");
$kdevelopers = file_get_contents("kdeveloper.txt");
if ($text == "🏴تغير كليشة مطور🏳️" and in_array($from_id,$Dev)){
file_put_contents("kdevelopers.txt","namdev");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>" 𐂠ᯓ حسننا عزيزي المطور،
 𐂠ᯓ الان ارسل كليشة المطور
√",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $kdeveloper =="namdev" and in_array($from_id,$Dev)){
file_put_contents("kdeveloper.txt",$text); 
file_put_contents("kdevelopers.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => " 𐂠ᯓ حسننا عزيزي المطور،
 𐂠ᯓ تم حفظ  كليشة المطور الخاصه فيك
 -",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text == "المطور" ){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"$kdevelopers",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id,
]);}}

if($text =="🏴تعطيل الاشتراك الاجباري🏳️"){
if (in_array($from_id,$Dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>" 𐂠ᯓ تم تعطيل الاشتراك الاجباري",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
file_put_contents("SudoOrders/setchannel.txt","الاشتراك الاجباري معطل");}}

if($text =="🏴تفعيل الاشتراك الاجباري🏳️"){
if (in_array($from_id,$Dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>" 𐂠ᯓ تم تفعيل الاشتراك الاجباري",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
file_put_contents("SudoOrders/setchannel.txt","الاشتراك الاجباري مفعل");}}

if($text == "العاب"){ 
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𐂠ᯓ اهلا بك في قائمة الالعاب للبوت 𐂠
𐂠ᯓ❪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)* ❫ ❫
𐂠ᯓ هناك 19 العاب تستطيع اللعب بها،
𐂠ᯓ لتفعيل الالعاب او تعطيلها ارسل،
𐂠ᯓ تفعيل  • تعطيل •  الالعاب،
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"ᴄᴀʀʟᴏѕ ᴛᴇᴀᴍ",'url'=>'https://t.me/QO8_Q']],
[['text'=>  "لعبة فلابي بيرد 🐥"  ,'url'=>'https://t.me/awesomebot?game=FlappyBird'],['text'=>"تحداني فالرياضيات 🔢",'url'=>'https://t.me/gamebot?game=MathBattle']],
[['text'=>"تحداني في ❌⭕️",'url'=>'t.me/Xo_motazbot?start3836619']],
[['text'=>"سباق الدراجات 🏍",'url'=>'https://t.me/gamee?game=MotoFX'],['text'=>"سباق سيارات 🏎",'url'=>'https://t.me/gamee?game=F1Racer']],
[['text'=>"متشابه 👾",'url'=>'https://t.me/gamee?game=DiamondRows']],
[['text'=>"كرة قدم ⚽",'url'=>'https://t.me/gamee?game=FootballStar'],['text'=>"دومنا🥇",'url'=>'https://vipgames.com/play/?affiliateId=wpDom/#/games/domino/lobby']],
[['text'=>"❕ليدو",'url'=>'https://vipgames.com/play/?affiliateId=wpVG#/games/ludo/lobby']],
[['text'=>"ورق🤹‍♂",'url'=>'https://t.me/gamee?game=Hexonix'],['text'=>"Hexonix❌",'url'=>'https://t.me/gamee?game=Hexonix']],
[['text'=>"MotoFx🏍️",'url'=>'https://t.me/gamee?game=MotoFx']],
[['text'=>"لعبة 2048 🎰",'url'=>'https://t.me/awesomebot?game=g2048'],['text'=>"Squares🏁",'url'=>'https://t.me/gamee?game=Squares']],
[['text'=>"Atomic 1▶️",'url'=>'https://t.me/gamee?game=AtomicDrop1']],
[['text'=>"Corsairs",'url'=>'https://t.me/gamebot?game=Corsairs'],['text'=>"LumberJack",'url'=>'https://t.me/gamebot?game=LumberJack']],
[['text'=>"LittlePlane",'url'=>'https://t.me/gamee?game=LittlePlane'],['text'=>"RollerDisco",'url'=>'https://t.me/gamee?game=RollerDisco']],
]
])
]);
}
}
if($text == "الالعاب" || $text == "قائمه الالعاب"){
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
𐂠ᯓ اهلا بك في قائمة الالعاب للبوت𐂠
   𐂠━━━ᯓтαℓαsнαηεᯓ━━━𐂠
ᯓ هناك 10 العاب تستطيع اللعب بها،𐂠
ᯓ لتفعيل الالعاب او تعطيلها ارسل𐂠
𐂠ᯓ تفعيل  • تعطيل •  الالعاب،
   𐂠━━━ᯓтαℓαsнαηεᯓ━━━𐂠
ᯓ  الاسرع  اسـرع واحد 
ᯓ  معاني  معاني السمايلات
ᯓ  ترتيب  ترتيب الكلمات 
ᯓ رياضيات  لعبة احصاء
ᯓ  الاسئله  اسئله عامه 
ᯓ امثله  لعبه امثله قديمه 
ᯓ  المختلف  تشابه واختلاف 
ᯓ  سمايلات  لعبة سمايلات
ᯓ   تخمين  لعبة تخمين ارقام
ᯓ  العكس  لعبة عكس الكلمات
   𐂠━━━ᯓтαℓαsнαηεᯓ━━━𐂠
",'reply_to_message_id'=>$message->message_id,
]);
}
}
$game = json_decode(file_get_contents('game.json'),true);
$from_user = $message->from->username;
$from_name = $message->from->first_name;
$get_game = file_get_contents("game.txt");
$game1 = explode("\n",$get_game);
$gg1zz = array('اســرع واحد يرتب » { ل ، س ، ا ، ق ، ت ، ب ،ا } «','اســرع واحد يرتب » { ر ، و ، ح ، س } «','اســرع واحد يرتب » { ن ، ف ، ه ، ق } «','اســرع واحد يرتب » { و ، ن ، ي ، ا ، ف } «','اســرع واحد يرتب » { ن ، و ، ه ، ب ، ز } «','اســرع واحد يرتب » { ر ، ك ، و ، س ، ت ، ن ، ا ، ي } «','اســرع واحد يرتب » { ا ، ن ، م ، ل ، ي } «','اســرع واحد يرتب » { و ، ه ، ق ، ه } «','اســرع واحد يرتب » { ف ، ي ، س ، ه ، ن } «','اســرع واحد يرتب » { ج ، ا ، د ، ج ، ه } «','اســرع واحد يرتب » { س ، م ، ر ، د ، ه } «','اســرع واحد يرتب » { ا ، ن ، ا ، و ، ل } «','اســرع واحد يرتب » { ه ، غ ، ف ، ر ، } «','اســرع واحد يرتب » { ج ، ه ، ث ، ل ، ا } «','اســرع واحد يرتب » { خ ، م ، ب ، ط } «');
$get_iBadlz = array_rand($gg1zz, 1);
$fast = array('• اسرع واحد يرسل » { كارلوس }','• اسرع واحد يرسل » { تايكر }','• اسرع واحد يرسل » { رمضان }','• اسرع واحد يرسل » { ارنب }','• اسرع واحد يرسل » { Nazar }','• اسرع واحد يرسل » { حمود }','• اسرع واحد يرسل » { تيم كارلوس }','• اسرع واحد يرسل » { مهند }','• اسرع واحد يرسل » { سورس كارلوس }','• اسرع واحد يرسل » { ءبوايهاب }','• اسرع واحد يرسل » { الاحواز }','• اسرع واحد يرسل » { الاحوازي }','• اسرع واحد يرسل » { العراق }','• اسرع واحد يرسل » { سعوديه }');
$faster = array_rand($fast, 1);
$mthal = array('• اكمل المثل التالي ؛👇
• { لكل حالة مقاله ولكل .... برع } •','• اكمل المثل التالي ؛👇
• { عادت .... الى عادتها القديمه } •','• اكمل الحكمة التاليه ؛👇
• { من .... العلى سهر الليالي } •','• اكمل المثل التالي ؛👇
• { مخرب .... الف عمار } •','• اكمل المثل التالي ؛👇
• { من .... لقي } •','• اكمل المثل التالي ؛👇
• { ادخلها من ..... واخرجها من الثانيه } •','• اكمل المثل التالي ؛👇
• { ادق من خيط .... } •','• اكمل المثل التالي ؛👇
• { اذا التقت .... هانت الحقوق } •','•اكمل المثل التالي ؛👇
• { كل .... فيه خير } •',' • اكمل الجمله التالي ؛👇
• { كما تدين .... } •',' • اكمل الجمله التالي ؛👇
• { الصميل خرج من .... } •',' • اكمل المثل التالي ؛👇
• { اللي مايعرف .... يشويه } •',' • اكمل المثل التالي ؛👇
• { الهربات كثير و ..... وحده } •',' • اكمل المثل التالي ؛👇
• { القبيلي .... نفسه } •'
);
$qui1 = array('•| سؤال :/ ماهو اسرع المخلوقات البحريه على الاطلاق؟!','•| سؤال :/ ماهي اقوى انواع الحجارة؟!','•| سؤال :/ ماهي السورة التي ذكر فيها بالعوض؟!','•| سؤال :/ ماهي اول عمله اسلاميه؟!','•| سؤال :/ ماهو الحيوان الذي اذا قطعت احدى اذرعته نمت مره اخرى؟!','•| سؤال :/ ماهو اسرع الحيوان الذي يصاب بالحصبه كالانسان؟!','•| سؤال :/ ماهو العنصر الذي اذا وجد في الحليب اصبح الحليب غذاء كامل؟!','•| سؤال :/ من هو مؤسس علم الجبر؟!','•| سؤال :/ من هو اقوى الحيوانات ذاكرة؟!');
$qui2 = array_rand($qui1,1);
$ope1 = array('
• ماعكس هاذه الكلمه •{ جاوع }•','• ماعكس هاذه الكلمه •{ فارغ }•','• ماعكس هاذه الكلمه •{ سمين }•','• ماعكس هاذه الكلمه •{ بخيل }•','
• ماعكس هاذه الكلمه •{ شجاع }•','
• ماعكس هاذه الكلمه •{ الخوف }•','
• ماعكس هاذه الكلمه •{ عاقل }•','
• ماعكس هاذه الكلمه •{ كن }•','
• ماعكس هاذه الكلمه •{ الذهاب }•','
• ماعكس هاذه الكلمه •{ العودة }•','
• ماعكس هاذه الكلمه •{ مطفئه }•','
• ماعكس هاذه الكلمه •{ الليل }•','
• ماعكس هاذه الكلمه •{ مضلم }•','
• ماعكس هاذه الكلمه •{ حالي }•'
);
$ope2 = array_rand($ope1 ,1);
$mog1 = array('
• ارسل المختلف من الايموجي 👇
{ 😫😫😫😫😩😫😫😫 }','
• ارسل المختلف من الايموجي ??
{ ✌️✌️🤘✌️✌️✌️✌️✌️ }','
• ارسل المختلف من الايموجي 👇
{ ??‍♂🧝‍♂🧝‍♂🧝‍♂🧝‍♀🧝‍♂🧝‍♂🧝‍♂ }','
• ارسل المختلف من الايموجي 👇
{ 😰😰😰😰😥😰😰😰 }','
• ارسل المختلف من الايموجي 👇
{ 💏💏💏👩‍❤️‍💋‍👩💏💏💏💏 }','
• ارسل المختلف من الايموجي 👇
{ 👨‍👦👨‍👧👨‍👦👨‍??👨‍👦👨‍👦👨‍??👨‍👦 }','
• ارسل المختلف من الايموجي 👇
{ ❤️❤️❤️❤️🧡❤️❤️❤️️ }','
• ارسل المختلف من الايموجي 👇
{ 💗💗💗💗💗💗💓💗 }');
$mog2 = array_rand($mog1, 1);
$meen1 = array('
• مامعنى هاذه الكلمه •{ فحط }•','• مامعنى هاذه الكلمه •{ ذهب }•','• مامعنى هاذه الكلمه •{ عاد }•','
• مامعنى هاذه الكلمه •{ يلفظ }•','
• مامعنى هاذه الكلمه •{ خروج }•','
• مامعنى هاذه الكلمه •{ يراعي }•','
• مامعنى هاذه الكلمه •{ ينتظر }•','
• مامعنى هاذه الكلمه •{ مؤمن }•','
• مامعنى هاذه الكلمه •{ مسلم }•','
• مامعنى هاذه الكلمه •{ بيت }•','
• مامعنى هاذه الكلمه •{ محافظة }•','
• مامعنى هاذه الكلمه •{ دولة }•');
$ras = array('113+133-2=??','876+11-9=??','197×2-190=??','44-15+15=??','13+12-13-1+4=??','900000+2-900000=??','5322+1-1=??','21+25-13=??','909+75-5=??','44-1+11=??','532+256=??','6321+4667-10000=??');
$rass = array_rand($ras, 1);
$meen2 = array_rand($meen1, 1);
mkdir("game/$chat_id");
$level = file_get_contents("game/$chat_id/game.txt");
$mthals = array_rand($mthal, 1);
if(in_array($chat_id,$game1) and $text == '244' or $text == '878'or $text == '204'or $text == '44'or $text == '15'or $text == '2' or$text == '5322' or $text == '33' or $text == '979' or $text == '34' or $text == '788' or $text == '988'){
if($level == "gamere"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* 𐂠ᯓ مبروك لقد ربحت نقطه
 𐂠ᯓ اصبح لديك ⁦𐎄 { ".$game['game'][$chat_id][$from_id]." } نقطه ??️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
if($text =="امثله" or $text =="امثلة"){
file_put_contents("game/$chat_id/game.txt","gamem");
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$mthal[$mthals],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="رياضيات" or $text =="الرياضيات"){
file_put_contents("game/$chat_id/game.txt","gamere");
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ras[$rass],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="كلمات" or $text =="الاسرع"){
file_put_contents("game/$chat_id/game.txt","gamew");
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$fast[$faster],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="معاني" or $text =="المعاني"){
file_put_contents("game/$chat_id/game.txt","gamees");
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$meen1[$meen2],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="اسئله" or $text =="الاسئله" or $text == "الاسئلة"){
file_put_contents("game/$chat_id/game.txt","gameq");
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$qui1[$qui2],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="المختلف" or $text =="مختلف"){
file_put_contents("game/$chat_id/game.txt","gamed");
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$mog1[$mog2],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="العكس" or $text =="عكس"){
file_put_contents("game/$chat_id/game.txt","gameo");
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ope1[$ope2],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="الترتيب" or $text =="ترتيب"){
file_put_contents("game/$chat_id/game.txt","gamet");
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$gg1zz[$get_iBadlz],
'reply_to_message_id'=>$message->message_id]);
}}
if(in_array($chat_id,$game1) and $text == 'سحور' or $text == 'سياره'or $text == 'استقبال' or $text == 'قنفه'or $text == 'ايفون' or $text == 'بزونه' or $text == 'مطبخ' or $text == 'كرستيانو' or $text == 'دجاجه' or $text == 'مدرسه' or $text == 'الوان' or $text == 'غرفه' or $text == 'ثلاجه' or $text == 'قهوه' or $text == 'سفينه' or $text == 'اليمن'){
if($level == "gamet"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* 𐂠ᯓ مبروك لقد ربحت نقطه
 𐂠ᯓ اصبح لديك ⁦𐎄 { ".$game['game'][$chat_id][$from_id]." } نقطه*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
unlink("game");
}}
if(in_array($chat_id,$game1) and $text == "🧝‍♀" or $text == "👩‍❤️‍💋‍👩" or $text == "😩" or $text == "🧡" or $text == " ‍‍‍👨‍👦" or $text == '💓'or $text == '🤘' or $text == '👨' or $text == '😥'){
if($level == "gamed"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("gamess.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* 𐂠ᯓ مبروك لقد ربحت نقطه
 𐂠ᯓ اصبح لديك ⁦𐎄 { ".$game['game'][$chat_id][$from_id]." } نقطه*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
unlink("game");
}}
if(in_array($chat_id,$game1) and $text == 'ينطق' or $text == 'مغادره'or $text == 'منزل'or $text == 'ينتظر'or $text == 'يراعي'or $text == 'مؤمن' or$text == 'مسلم' or $text == 'دولة' or $text == 'دوله' or $text == 'مدينه' or $text == 'مدينة' or $text == "هرب" or $text == "رجع" or $text == "راح"){
if($level == "gamees"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("gamess.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* 𐂠ᯓ مبروك لقد ربحت نقطه
 𐂠ᯓ اصبح لديك ⁦𐎄 { ".$game['game'][$chat_id][$from_id]." } نقطه *",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
unlink("game");
}}
if(in_array($chat_id,$game1) and $text == 'شابع' or $text == 'ممتلئ'or $text == 'مليان'or $text == 'نحيف'or $text == 'سخي'or $text == 'خائف' or$text == 'الشجاعه' or $text == 'مجنون' or $text == 'لاتكن' or $text == 'الاياب' or $text == 'الإياب' or $text == 'الرجوع' or $text == 'منيره' or $text == 'النهار' or $text == 'منير' or $text == 'مضيئ' or $text == "مالح" or $text == "حامض"){
if($level == "gameo"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("gamess.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* 𐂠ᯓ مبروك لقد ربحت نقطه
 𐂠ᯓ اصبح لديك ⁦𐎄 { ".$game['game'][$chat_id][$from_id]." } نقطه*
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
unlink("game");
}}
if(in_array($chat_id,$game1) and $text == 'شقي' or $text == 'دقه'or $text == 'دقة'or $text == 'حليمه'or $text == 'حليمة'or $text == 'طلب' or$text == 'غلب' or $text == 'الوجوه' or $text == 'الوجوة' or $text == 'الاوجه' or $text == 'الاوجة' or $text == 'اذن' or $text == 'أذن' or $text == 'الابره' or $text == 'الابرة' or $text == "تاخير" or $text == "تدان" or $text == "الجنه" or $text == "الجنة" or $text == "الصقر" or $text == "الودافه" or $text == "قاتل"){
if($level == "gamem"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* 𐂠ᯓ مبروك لقد ربحت نقطه
 𐂠ᯓ اصبح لديك ⁦𐎄 { ".$game['game'][$chat_id][$from_id]." } نقطه*
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
unlink("game");
}}
if(in_array($chat_id,$game1) and $text == 'نجم البحر' or $text == 'الخوارزمي'or $text == 'سمك التونه'or $text == 'سمك التونة'or $text == 'الالماس'or $text == 'البقره' or$text == 'البقرة' or $text == 'الدينار الذهبي' or $text == 'القرد' or $text == 'الحديد' or $text == 'الجمل' or $text == 'الدينار'){
if($level == "gameq"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* 𐂠ᯓ مبروك لقد ربحت نقطه
 𐂠ᯓ اصبح لديك ⁦𐎄 { ".$game['game'][$chat_id][$from_id]." } نقطه*
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
if(in_array($chat_id,$game1) and $text == 'كارلوس' or $text == 'مهند'or $text == 'العراق'or $text == 'سعوديه'or $text == 'ارنب'or $text == 'Nazar' or$text == 'الاحواز' or $text == 'رمضان' or $text == 'تيم كارلوس' or $text == 'تايكر' or $text == 'حمود' or $text == 'سورس كارلوس' or $text == 'ءبوايهاب' or $text == 'الاحوازي'){
if($level == "gamew"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* 𐂠ᯓ مبروك لقد ربحت نقطه
 𐂠ᯓ اصبح لديك ⁦𐎄 { ".$game['game'][$chat_id][$from_id]." } نقطه*
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
unlink("game");
}}
$iBadlz_smile = array('🍏','🍎','843578','9755','25677','578866','14589','🍐','🍊','🍋','🍌','🍉','🍇','🍓','🍈','🍒','🍑','🍍','🥥','🥝','🍅','🍆','🥑','🥦','??','🌶','🌽','🥕','🥔','🍠','🥐','🍞','🥖','🥨','🧀','🥚','🍳','🥞','??','🥩','🍗','??','🌭','🍔','🍟','🍕','🥪','🥙','🍼','☕️','🍵','🥤','🍶','🍺','🍻','🏀','⚽️','🏈','⚾️','🎾','🏐','🏉','🎱','🏓','🏸','🥅','🎰','🎮','🎳','🎯','🎲','🎻','🎸','🎺','🥁','🎹','🎼','🎧','🎤','🎬','🎨','🎭','🎪','🎟','🎫','🎗','🏵','🎖','🏆','🥌','🛷','🚕','7643','93289','3457','95439','378865','24568','9976','289','2288','2854','🚗','🚙','🚌','🚎','🏎','🚓','🚑','🚚','🚛','🚜','🇸🇦','⚔','🛡','🔮','🌡','💣','⚒','📍','📓','📗',' 𐂠','📅','📪','📫','📬','📭','⏰','📺','🎚','☎️','🔗');
$MOD = array_rand($iBadlz_smile,1);
if($text =="سمايلات" || $text =="سمايل"){
file_put_contents("game/$chat_id/game.txt","games");
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
file_put_contents("game.txt",$chat_id);bot('sendMessage',['chat_id'=>$chat_id,'text'=>"اسرع واحد يدز هذهہٓ ›› `$iBadlz_smile[$MOD]`",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}}
if(in_array($text,$iBadlz_smile) and in_array($chat_id,$game1) and $level == "games"){file_put_contents("gamess.txt","");$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);file_put_contents('game.json', json_encode($game));
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* 𐂠 مبروك لقد ربحت نقطه
 𐂠ᯓ اصبح لديك ⁦𐎄 { ".$game['game'][$chat_id][$from_id]." } نقطه*
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
unlink("game");
}
if (strpos($text, 'بيع نقاطي') !== false or strpos($text, 'بيع نقودي') !== false){
if($game['game'][$chat_id][$from_id] >= 1 and $game['game'][$chat_id][$from_id] != null){
$num= str_replace(['بيع نقودي','بيع نقاطي'],'',$text);
if ($num <= 300 && $num >= 1){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ تم خصم ~ { $num } من مجوهراتك 
 𐂠ᯓ وتم زيادة تفاعلك في المجموعة",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+$num*5);
file_put_contents('msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-$num);file_put_contents('game.json', json_encode($game));
}
}
}
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
if ($rt && strpos($text, 'اضف رسائل') !== false){
$num= str_replace('اضف رسائل','',$text);
if ($num <= 300000000 && $num >= 1){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠تم اضافة له {$num} من الرسائل
",
'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,
]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$re_id] = ($msgs['msgs'][$chat_id][$re_id]+$num);
file_put_contents('msgs.json', json_encode($msgs));
}
}
}
if($text == "نقاطي" and $game['game'][$chat_id][$from_id]!== NULL || $game['game'][$chat_id][$from_id]!== 0){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠عزيزي - [$first_name](tg://user?id=$from_id)
 𐂠ᯓ نقودك هي ⁦𐎄 .".$game['game'][$chat_id][$from_id].".
",'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,
]);
}
if($message and $tc == "supergroup"){
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);
file_put_contents('msgs.json', json_encode($msgs));
}
if($text == "msg" or $text == "رسائلي"){bot('sendmessage',['chat_id'=>$chat_id,'text'=>"*💬 ❉ رسائلك »{ ".$msgs['msgs'][$chat_id][$from_id]." } ➺*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,]);}
if($text == "مسح رسايلي" or $text == "مسح رسائلي"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠تم مسح جميع رسائلك",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]=0);
file_put_contents('msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-20);file_put_contents('game.json', json_encode($game));
}
$chatid = $update->edited_message->chat->id;
$fromid = $update->edited_message->from->id;
$edit = json_decode(file_get_contents('edit.json'),true);
$editMessage = $update->edited_message;
if($editMessage){
$edit['edit'][$chatid][$fromid] = ($edit['edit'][$chatid][$fromid]+1);
file_put_contents('edit.json', json_encode($edit));
}
if($edit['edit'][$chat_id][$from_id] == null){
$editt = 0;
}else{
$editt = $edit['edit'][$chat_id][$from_id];
}
if($text == 'تعديلاتي'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>' 𐂠تعديلاتك : '.$editt,
]);
}
if($msgs['msgs'][$chat_id][$from_id] > 8000){
$rate = array("100%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 7000){
$rate = array("97%","90%","99%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 6000){
$rate = array("83%","80%","87%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 3000){
$rate = array("77%","70%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$rate = array('69%','56%',);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 200){
$rate = array("40%","43%","39%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 100){
$rate = array("36%","29%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$rate = array('18%','20%','6%',);
$rate1 = array_rand($rate,1);
}
if($msgs['msgs'][$chat_id][$from_id] > 8000){
$active = array("حارك الجروب ",);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 7000){
$active = array("معلك لربك ",);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 6000){
$active = array("جهنم حبي ","نار وشرار ",);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 3000){
$active = array("خوش متفاعل ","اسطورة التفاعل ","الله مال تفاعل ","نايس التفاعل ","قمه التفاعل ",);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$active = array('متوسط ','متفاعل ',);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$active = array('ضعيف ',);
$abstfal = array_rand($active,1);
}
$new = json_decode(file_get_contents('new.json'),true);
if($message->new_chat_member){
$new['new'][$chat_id][$from_id] = ($new['new'][$chat_id][$from_id]+1);
file_put_contents('new.json', json_encode($new));
}

if($new['new'][$chat_id][$from_id] == null){
$new = 0;
}else{
$new = $new['new'][$chat_id][$from_id];
}
if($text == 'جهاتي'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠عدد جهاتك المضافه هنا ~ $new
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
}
if(in_array($from_id,$eri)){
$info = "𖡞المبرمج𖡞";
}
elseif(in_array($from_id,$Dev) ){
$info = "🏴 صاحب البوت🏳️";
}
elseif(in_array($from_id,$developer) ){
$info = "مطوري ثانوي";
}
elseif(in_array($from_id,$nazar) ){
$info = "مطوري";
}
elseif(in_array($from_id,$carlos) ){
$info = "منشئ";
}
elseif($status == "creator"){
$info = "المالك";
}
elseif($status == "administrator"){
$info = "المشرف";
}
elseif(in_array($from_id,$manger) ){
$info = "المدير";
}
elseif(in_array($from_id,$admin_user) ){
$info = "ادمن";
}
elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز";
}elseif($status == "member" ){
$info = "عضو فقط";
}
if(!$username){
$casss = "لايوجد يوزر";
}elseif($username){
$casss = "$username";
}

if(!$username){
$usr = "لا يوجد معرف";
}elseif($username){
$usr = "@$username";
}
$usr = "@$username";

$armofom = $settings["information"]["textaddid"];
$idchange = file_get_contents("ok.txt");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
if($text == "تعيين الايدي" or $text == "تغيير الايدي"){
file_put_contents("ok.txt",$chat_id);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ ارسل الان النص..
 𐂠ᯓ اضغط للنسخ
 𐂠ᯓ يمكنك اضافه  ⇊
   𐂠━━━ᯓтαℓαsнαηεᯓ━━━𐂠
 𐂠- لعرض المعرف > `{المعرف}`
 𐂠- لعرض الرسائل > `{الرسائل}`
 𐂠- لعرض الصور > `{الصور}`
 𐂠- لعرض الايدي > `{الايدي}`
 𐂠- لعرض ٠ > `{الرتبه}`
 𐂠- لعرض مجوهرات > `{المجوهرات}`
 𐂠- لعرض جهات > `{جهاتي}`
 𐂠- لعرض تفاعل > `{تفاعل}`
 𐂠- لعرض نسبة تفاعل > `{نسبة تفاعل}`
 𐂠- لعرض سحكات > `{تعديلاتي}`
   𐂠━━━ᯓтαℓαsнαηεᯓ━━━𐂠
 𐂠ᯓ قناة كلايش الايدي : [@$chinnl]",'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $idchange == $chat_id){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer)){
file_put_contents("ok.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠تم تعين الايدي
",'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$settings["information"]["textaddid"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
elseif($text == "حذف الايدي" or $text == "مسح الايدي"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"* 𐂠بواسطة ⁦𐎄* [$first_name](tg://user?id=$from_id) 
* 𐂠 تم حذف الايدي بنجاح*
",'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$settings["information"]["textaddid"]="";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
$armofom = $settings["information"]["textaddid"];
if($text=="ايدي" or $text=="ايديي" or $text=="ا"){
$iduser = $settings["lock"]["iduser"];
$armofom = $settings["information"]["textaddid"];
if($armofom !== null){
if($iduser == "مفتوح"){
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$count = $result["result"]["total_count"];
$a = str_replace('{الاسم}',"$first_name",$armofom);
$a = str_replace('{الايدي}',$from_id,$a);
$a = str_replace('{المعرف}',$usr,$a);
$a = str_replace('{الرتبه}',$info,$a);
$a = str_replace('{المجوهرات}',$game['game'][$chat_id][$from_id],$a);
$a = str_replace('{الرسائل}',$msgs['msgs'][$chat_id][$from_id],$a);
$a = str_replace('{الصور}',$count,$a);
$a = str_replace('{تعديلاتي}',$editt,$a);
$a = str_replace('{جهاتي}',$new,$a);
$a = str_replace('{تفاعل}',$active[$abstfal],$a);
$a = str_replace('{نسبة تفاعل}',$rate[$rate1],$a);
$g = $a;
var_dump(
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$file_id",
'caption'=>"$g",
'reply_to_message_id'=>$message->message_id,
]));}}
}
$armofom = $settings["information"]["textaddid"];
if($text == "ايدي" or $text=="ايديي" or $text=="ا"){
$armofom = $settings["information"]["textaddid"];
if($armofom !== null){
if($iduser !== "مفتوح"){
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$count = $result["result"]["total_count"];
$g = array_rand($a,1);
$a = str_replace('{الاسم}',"$first_name",$armofom);
$a = str_replace('{الايدي}',$from_id,$a);
$a = str_replace('{المعرف}',$usr,$a);
$a = str_replace('{الرتبه}',$info,$a);
$a = str_replace('{المجوهرات}',$game['game'][$chat_id][$from_id],$a);
$a = str_replace('{الرسائل}',$msgs['msgs'][$chat_id][$from_id],$a);
$a = str_replace('{الصور}',$count,$a);
$a = str_replace('{تعديلاتي}',$editt,$a);
$a = str_replace('{جهاتي}',$new,$a);
$a = str_replace('{تفاعل}',$active[$abstfal],$a);
$a = str_replace('{نسبة تفاعل}',$rate[$rate1],$a);
$g = $a;
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$g",
'reply_to_message_id'=>$message->message_id,
]);}}
}
$armofom = $settings["information"]["textaddid"];
if($text=="ايدي" or $text=="ايديي" or $text=="ا"){
$iduser = $settings["lock"]["iduser"];
$armofom = $settings["information"]["textaddid"];
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$count = $result["result"]["total_count"];
if($armofom == null){
if($iduser == "مفتوح"){
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id=$result["result"]["photos"][0][0]["file_id"];
$count=$result["result"]["total_count"];
var_dump(
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$file_id",
'caption'=>"
𐂠𐎄 𝒊𝒅  $from_id
𐂠𐎄 𝒖𝒔  $usr
𐂠𐎄 𝒃𝒊  $info
𐂠(｡◕‿◕｡) $namegroup
𐂠𐎄 رسائلك  ".$msgs['msgs'][$chat_id][$from_id]."
",'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━━━ᯓтαℓαsнαηεᯓ━━━━━•𐂠","url"=>"t.me/BLACIK0"]],
]
])
]));}}
}
$armofom = $settings["information"]["textaddid"];
if($text == "ايدي" or $text=="ايديي" or $text=="ا"){
$armofom = $settings["information"]["textaddid"];
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$count = $result["result"]["total_count"];
if($armofom == null){
if($iduser !== "مفتوح"){
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id=$result["result"]["photos"][0][0]["file_id"];
$count=$result["result"]["total_count"];
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
𐂠𐎄 𝒊𝒅  $from_id •
𐂠𐎄 𝒖𝒔  $usr •
𐂠𐎄 𝒃𝒊  $info •
𐂠𐎄 رسائلك  ".$msgs['msgs'][$chat_id][$from_id]." •
",'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━━━ᯓтαℓαsнαηεᯓ━━━━━•𐂠","url"=>"t.me/alatshawy"]],
[["text"=>"𐂠ᯓمبرمج السورسᯓ𐂠",'url'=>"t.me/BLACIK0"]],
]
])
]);}}
}
if($text == "مصر"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"😻ام الدنيا بلد مطورين بلد العظماء تسجيل حضور المصريين",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "متيجي"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"😹اجي فين يوسخ",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "تعالي خاص"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"😹ونبي ياكبتن خدوني معاكو ",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "تعالي بريفت"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"😹ونبي ياكبتن خدوني معاكو ",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "تعالي بف"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"😹ونبي ياكبتن خدوني معاكو ",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "@$buy"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" 𐂠ده يوزر المطور نتا تعرفو منين😻
",'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "بف"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"😹ونبي ياكبتن خدوني معاكو ",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "تلاشاني"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"  😻💔مبرمج السورس مطور العظمه يقلبي متقربش 𐂠",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "حبك"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"  💔😻ونا بموت فيك 𐂠",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "بحبك"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" 😻ينوحي ونا بعشقق",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "وات"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" 😹هتعمالي فيها اجنبي بروح خالتك 𐂠",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "باي"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"😹💔 ..طريق السلامه نتاا 𐂠",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "السلام عليكم"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وعليكم السلام ورحمة الله و بركاتة 𐂠",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "سلام"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"رايح فين يعم انتا 𐂠",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "هاي"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" 😽💔باي",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "نورت"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"😌💔نورك يروحي",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "تمام"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"واي كمان😹",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "هلوو"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اجنبي وكده يعني💔😹",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "هلو"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اجنبي وكده يعني💔😹",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "تحديث"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/$channel",
'caption'=>"جاري التحديث
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️0%
 انتظر...
⬛️⬜️⬜️⬜️⬜️⬜️⬜️⬜️10%
انتظر..
⬛️⬛️⬜️⬜️⬜️⬜️⬜️⬜️20%
لحظات...
⬛️⬛️⬛️⬜️⬜️⬜️⬜️⬜️30%
جاري التحميل..
⬛️⬛️⬛️🔳⬜️⬜️⬜️⬜️40%
..
⬛️⬛️⬛️⬛️⬜️⬜️⬜️⬜️50%
..
⬛️⬛️⬛️⬛️⬛️⬜️⬜️⬜️60%
.....
⬛️⬛️⬛️⬛️⬛️▪️⬜️⬜️70%
...
⬛️⬛️⬛️⬛️⬛️⬛️⬜️⬜️80%
..
⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️90%
..
⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️100%
🏴ᯓтαℓαsнαηεᯓتم تحديث البوت ولديك اخر اصدار من سورس 🏳️",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━━━ᯓтαℓαsнαηεᯓ━━━━━•𐂠","url"=>"t.me/alatshawy"]],
[["text"=>"𐂠ᯓمبرمج السورسᯓ𐂠",'url'=>"t.me/BLACIK0"]],
]
])
]);
}
}

if($text == "رابط حذف" or $text == "رابط الحذف" or $text == "اريد احذف الحساب" or $text == "ححذف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" *
 𐂠ᯓ  رابط حذف التليجرام  𐂠
 𐂠ᯓ  *[اضغط هنا ثم تحذف حسابك](https://telegram.org/deactivate)*
 𐂠ᯓ  #تنبيه :-  جون هتوحشنا يحبيب قلبي وهتوحشني يا جون  نتا مين يبني😹
❪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)* ❫ ❫
 𐂠 link ⁦𐎄 https://telegram.org/deactivate 
*",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}

$message_idd = $update->message->message_id;
if($text == "ترقية حمار"  || $text == "ح" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو  [$re_name](tg://user?id=$re_id)
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓ تم رفعه تلاشانياوي في الروم مرحبا بك يا مطور العظمه😻
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "حذف حمار"  || $text == "حذ" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو  [$re_name](tg://user?id=$re_id)
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓ?? تم تنزيله من قائمه مطور العظمه😔
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
##########
$message_idd = $update->message->message_id;
if($text == "رفع قلبي"  || $text == "ارتقاء قلبي" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو  [$re_name](tg://user?id=$re_id)
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓ تم رفعه في قلبك اقفل عليه اوعي يهرب منك😻
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "تنزيل قلبي"  || $text == "حذف قلبي" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو  [$re_name](tg://user?id=$re_id)
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓ تم تنزيله من قلبك يلا يلاا شوفلك كلبه😹
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "رفع حمار"  || $text == "ارتقاء حمار" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو  [$re_name](tg://user?id=$re_id)
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓ تم رفعه حمار في الروم يلا يحمار شيييي
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "تنزيل حمار"  || $text == "حذف حمار" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو  [$re_name](tg://user?id=$re_id)
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓ تم تنزيله من قائمة الحمير ليصبح حمار صغير😹
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "رفع كلب"  || $text == "ارتقاء كلب" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو  [$re_name](tg://user?id=$re_id)
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓ تم رفعه ليصبح كلب تعالي اديلو عضمه😹
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
$message_idd = $update->message->message_id;
if($text == "تنزيل كلب"  || $text == "حذف كلب" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو  [$re_name](tg://user?id=$re_id)
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓتم تنزيله من قائمة الككلاب 
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "رفع وتكه"  || $text == "ارتقاء وتكه" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو  [$re_name](tg://user?id=$re_id)
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓتم رفعه لتصبح وتكه في الروم
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "تنزيل وتكه"  || $text == "حذف وتكه" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو  [$re_name](tg://user?id=$re_id)
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓتم تنزيله من قائمه الوتكات😗
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "رفع بطل"  || $text == "ارتقاء بطل" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو  [$re_name](tg://user?id=$re_id)
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓتم رفعه ليصبح بطل في الروم😗
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "تنزيل بطل"  || $text == "حذف بطل" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو  [$re_name](tg://user?id=$re_id)
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓتم تنزيله من قائمه بطل ومبتعوضش😹
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "رفع ملك"  || $text == "ارتقاء ملك" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو  [$re_name](tg://user?id=$re_id)
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓ  تم رفعه ليصبح ملك وسع كده نتا ملك😻
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "تنزيل ملك"  || $text == "حذف ملك" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو  [$re_name](tg://user?id=$re_id)
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓ  تم تنزيله من الملوكيه عمك تلاشاني😒
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

$message_idd = $update->message->message_id;
if($text == "رفع زوجتي"  || $text == "ارتقاء زوجتي" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو  [$re_name](tg://user?id=$re_id)
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓ  تم رفعه ليصبح زوجتك يعيني عليك كنت طيب اوي 😹
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "تنزيل زوجتي"  || $text == "حذف زوجتي" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو  [$re_name](tg://user?id=$re_id)
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓ  تم تنزيل زوجتك حد يسيب بطل زي دي😻
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

#Developer~> ᯓтαℓαsнαηεᯓ
#Channel~> ᯓтαℓαsнαηεᯓ

$message_idd = $update->message->message_id;
if($text == "رفع زوجي"  || $text == "ارتقاء زوجي" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو  [$re_name](tg://user?id=$re_id)
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓ  تم رفعه ليصبح زوج يلا حلال عليكي😹
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "تنزيل زوجي"  || $text == "حذف زوجي" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو  [$re_name](tg://user?id=$re_id)
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓ  تم تنزيله من زوج الي مطلق ابن مطلقه😹
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

$message_idd = $update->message->message_id;
if($text == "رفع قرد"  || $text == "ارتقاء قرد" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو  [$re_name](tg://user?id=$re_id)
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓ  تم رفعه ليصبح قرد تعالي اديلو موز 🍌
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$message_idd = $update->message->message_id;
if($text == "تنزيل قرد"  || $text == "حذف قرد" and $from_id == $sudo || in_array($from_id,$Dev)){
if($settings["lock"]["jooki"] == "مقفول"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ العضو  [$re_name](tg://user?id=$re_id)
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓ  تم تنزيله من قائمة القرود اسحب منو الموزه 🍌
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if(strpos($text,"اديني رايك في يابوت ")!== false){
$lockcmd = $settings["lock"]["jooki"];
if ($lockcmd == "مقفول") {
$armof = array("🤬لك هذا فيطي😂","لك كمر 🙃🙃هذا","احبه 😍😋","اكرهه","يكبسل هذا😂😃",);
$b = array_rand($armof,1);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$armof[$b]",
'reply_to_message_id'=>$message->message_id,
]);
}
}

if ( $rt && $text =="تثبيت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) { bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
 𐂠ᯓ  تم تثبيت الرسالة بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
elseif(  $text =="الغاء التثبيت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) { bot('unpinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
 𐂠ᯓ تم الغاء تثبيت الرسالة بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}

if ($text =="تفعيل البحث" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
 𐂠ᯓ بواسطة  [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم تفعيل البحث بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["serhi"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تعطيل البحث" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
 𐂠ᯓ بواسطة  [$first_name](tg://user?id=$from_id)
 𐂠ᯓ  تم تعطيل البحث بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["serhi"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="تفعيل اغاني" or $text == "تفعيل الاغاني"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
 𐂠ᯓ بواسطة  [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم تفعيل الاغاني بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ahbgii"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if ( $text =="تعطيل الاغاني" or $text == "تعطيل اغاني"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
 𐂠ᯓ بواسطة  [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم تعطيل الاغاني بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["ahbgii"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تفعيل الالعاب" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
 𐂠ᯓ بواسطة  [$first_name](tg://user?id=$from_id)
 𐂠ᯓ تم تفعيل الالعاب بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["game"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if ($text =="تعطيل الالعاب" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
 𐂠ᯓ بواسطة  [$first_name](tg://user?id=$from_id)
 𐂠ᯓ  تم تعطيل الالعاب بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["game"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
$m = "*
╭────𝙲𝙾𝙼𝙼𝙰𝙽𝙳𝚂──╮
│𝗕𝘆➪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)*
│╭───𝙲𝙾𝙼𝙼𝙰𝙽𝙳𝚂──╯
││    ᯓاوامر الحمايهᯓ
│╰─ᯓтαℓαsнαηεᯓ─╮   
│       𖠶اوامر الادمانيه𖠶    │     
│╭─ᯓтαℓαsнαηεᯓ─╯
││     𖠶اوامر المدراء𖠶
│╰─────𖠶𖠶─────╮
│       ᯓاوامر المطورᯓ    │
│╭─────𖠶𖠶─────╯    
││ᯓاوامرالمطورالاساسيᯓ
│╰─ᯓтαℓαsнαηεᯓ─╮
│      ᯓاوامر التسليهᯓ    │
│╭─ᯓтαℓαsнαηεᯓ─╯
││       ᯓالمميزاتᯓ
│╰─ᯓтαℓαsнαηεᯓ─╮
│𝗖𝗵²➪ *[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
╰──ᯓтαℓαsнαηεᯓ─╯
*";
$m1 = "*
╭────────────────╮
│𝗕𝘆➪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)*??
│╭───────────────╯
│╰𐂠ᯓاوامر حمايه المجموعة
│╭*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
││𐂠ᯓقفل/فتح + الاوامر الادناه
││𐂠ᯓقفل/فتح + الامر بالتقيد • بالطرد • بالكتم
│╰*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
│╭𐂠ᯓ الروابط
││𐂠ᯓ المعرف
││𐂠ᯓ التاك
││𐂠ᯓ التعديل
││𐂠ᯓ المتحركه
││𐂠ᯓ الملفات
││𐂠ᯓ الصور
││𐂠ᯓ الملصقات
││𐂠ᯓ الفيديو
││𐂠ᯓ الانلاين
││𐂠ᯓ الدردشه
││𐂠ᯓ التوجيه
││𐂠ᯓ الصوت
││𐂠ᯓ الجهات
││𐂠ᯓ الاشعارات
││𐂠ᯓ الماركداون
││𐂠ᯓ البوتات
││𐂠ᯓ التكرار
│╰───────────────╮
│𝗖𝗵²➪*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
╰────────────────╯
*";
$m2 = "*
╭────────────────╮
│𝗕𝘆➪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)*
│╭───────────────╯
│╰𐂠ᯓ اوامر الادمنيه
│╭*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
││𐂠ᯓ رفع/تنزيل مميز
││𐂠ᯓ تاك للكل
││𐂠ᯓ المجموعه
││𐂠ᯓ كتم
││𐂠ᯓ حظر
││𐂠ᯓ طرد
││𐂠ᯓمنع+كلمه
││𐂠ᯓ تقيد
││𐂠ᯓ الغاء حظر
││𐂠ᯓ الغاء كتم
││𐂠ᯓ الغاء تقيد
││𐂠ᯓ الغاء منع
││𐂠ᯓ المحظورين
││𐂠ᯓ المكتومين
││𐂠ᯓ المقيدين
││𐂠ᯓ المميزين
││𐂠ᯓ قائمه المنع
│╰*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
│╭𐂠ᯓ تثبيت
││??ᯓ الغاء تثبيت
││𐂠ᯓ الغاء قائمة التثبيت
│╰𐂠ᯓ الاعدادات
│╭*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
││𐂠ᯓ الرابط
││𐂠ᯓ القوانين
│╰*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
│╭𐂠ᯓ  الترحيب
││𐂠ᯓ تفعيل/تعطيل الترحيب
││𐂠ᯓ ايدي
││𐂠ᯓ جهاتي
││𐂠ᯓ تعديلاتي
││𐂠ᯓ رسائلي
│╰𐂠ᯓ كشف البوت
│╭*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
││𐂠ᯓ ضع + الاوامر الادناه
│╰*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
│╭𐂠ᯓ اسم
││𐂠ᯓ صوره
││𐂠ᯓ ترحيب
│╰𐂠ᯓ قوانين
│╭*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
││𐂠ᯓ مسح + الاوامر الادناه
│╰*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
│╭𐂠ᯓ قائمه المنع
││𐂠ᯓ المحظورين
││𐂠ᯓ المميزين
││𐂠ᯓ المنشئين
││𐂠ᯓ الادمنيه
││𐂠ᯓ المدراء
│╰────────────────╮
│𝗖𝗵²➪*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
╰─────────────────╯
*";
$m3 = "*
╭─────────╮
│ 𝗕𝘆➪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)*
│╭────────╯
│╰𐂠ᯓ اوامر المدراء
│╭*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
││𐂠ᯓ رفع/تنزيل ادمن
││𐂠ᯓ فك تقيد
│╰𐂠ᯓ تنزيل الكل
│╭*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
││𐂠ᯓ تفعيل/تعطيل تفال
││𐂠ᯓ تفعيل/تعطيل هينه
││𐂠ᯓ تفعيل/تعطيل اغاني
││𐂠ᯓ تفعيل/تعطيل الايدي بالصوره
││𐂠ᯓ تفعيل/تعطيل الايدي
││𐂠ᯓ تفعيل/تعطيل ردود السورس
││𐂠ᯓ تفعيل/تعطيل اللعبه/الالعاب
││𐂠ᯓ تفعيل/تعطيل الردود
││𐂠ᯓ تفعيل/تعطيل اطردني
││𐂠ᯓ تفعيل/تعطيل الرفع
││𐂠ᯓ تفعيل/تعطيل الطرد
││𐂠ᯓ تفعيل/تعطيل الرابط
│╰𐂠ᯓ تفعيل/تعطيل اوامر التسليه
│╭*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
││𐂠ᯓ التسليه
││𐂠ᯓ تعين الايدي
│╰𐂠ᯓ حذف الايدي
│╭*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
││𐂠ᯓ رفع الادمنيه
││𐂠ᯓ اضف/حذف رد
││𐂠ᯓ الادمنيه
││𐂠ᯓ الردود
│╰*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
│╭𐂠ᯓ مسح + عدد
││𐂠ᯓ مسح الادمنيه
││𐂠ᯓ مسح الردود
│╰──────────────╮
│ 𝗖𝗵²➪*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
╰───────────────╯
*";
$m4 = "*
╭───────────────╮
│𝗕𝘆➪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)*
│╭──────────────╯
│╰𐂠ᯓ اوامر المطورين
│╭*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
││𐂠ᯓ رفع/تنزيل منشئ
││𐂠ᯓ المنشئين
││𐂠ᯓ مسح المنشئين
││𐂠ᯓ اوامر المنشئين
│╰*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
│╭𐂠ᯓ رفع/تنزيل مدير
││𐂠ᯓ المدراء
││𐂠ᯓ مسح المدراء
││𐂠ᯓ تعين/حذف الايدي
││𐂠ᯓ اضف/حذف امر
││𐂠ᯓ الاوامر المضافه
││𐂠ᯓ حذف/مسح الاوامر المضافه
││𐂠ᯓ اضف رسائل + العدد بالرد
│╰──────────────╮
│𝗖𝗵²➪*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*𐂠
╰───────────────╯
*";
$m5 = "*
╭──────────────╮
│𝗕𝘆➪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)*
│╭─────────────╯
│╰𐂠ᯓ اوامر المطور الاساسي
│╭*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
││𐂠ᯓ حظر عام
││𐂠ᯓ الغاء العام
││𐂠ᯓ مسح قائمه العام
││𐂠ᯓ تغير اسم البوت
││𐂠ᯓ رفع /تنزيل مطور ثانوي
││𐂠ᯓ المطورين الثانوين
││𐂠ᯓ مسح المطورين الثانوين
││𐂠ᯓ رفع /تنزيل مطور
││𐂠ᯓ مسح المطورين
││𐂠ᯓ المطورين
││𐂠ᯓ رفع منشئ
││𐂠ᯓ اضف/حذف رد للكل
││𐂠ᯓ مسح ردود المطور
││𐂠ᯓ ردود المطور
││𐂠ᯓ تفعيل /تعطيل
││𐂠ᯓ رفع منشئ
││𐂠ᯓ غادر
││𐂠ᯓ غادر + الايدي
││𐂠ᯓ اذاعه
││𐂠ᯓ اذاعه بالتوجيه
││𐂠ᯓ اذاعه خاص
││𐂠ᯓ الاحصائيات
││𐂠ᯓرساله +ايدي الشخص  لارسال رساله له
│╰──────────────╮
│𝗖𝗵²➪*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
╰───────────────╯
*";
$m6 = "*
╭──────────────╮
│𝗕𝘆➪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)*
│╭─────────────╯
│╰𐂠ᯓاوامر التسليه𐂠ᯓ
│╭*[𐂠━━ᯓтαℓαsнαηεᯓ━━𐂠](t.me/$channel)*
││   𐂠ᯓ تفعيل + تعطيل اوامر التسليه
│╰*[𐂠━━ᯓтαℓαsнαηεᯓ━━𐂠](t.me/$channel)*
│╭𐂠ᯓ رفع/تنزيل ملك
││𐂠ᯓ رفع/تنزيل تلاشانياوي
││𐂠ᯓ رفع/تنزيل بطل
││𐂠ᯓ رفع/تنزيل قلبي
││𐂠ᯓ رفع/تنزيل وتكه
││𐂠ᯓ رفع/تنزيل حمار
││𐂠ᯓ رفع/تنزيل قرد
││𐂠ᯓ رفع/تنزيل زوجي 
││𐂠ᯓ رفع/تنزيل زوجتي
││𐂠ᯓ اديني رايك في يابوت + بالرد
││𐂠ᯓ نسبه جمالي/جمالي
││𐂠ᯓ جماله برد لكشف نسبه جمال الشخص
│╰──────────────╮
│𝗖𝗵²➪*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
╰───────────────╯
*";
$time = date('h:i A');
date_default_timezone_set('Asia/Baghdad');
if($text =="الاوامر" or $text =="مساعدة" or $text =="مساعده"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$eri) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$m"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𐎄المميزات𐎄','callback_data'=>'m11']],
[['text'=>'𐎄اوامر الادمنيه𐎄','callback_data'=>'2'],['text'=>'𐎄اوامر الحمايه𐎄','callback_data'=>'1']],
[['text'=>'𐎄اوامر المدراء𐎄','callback_data'=>'3'],['text'=>'𐎄اوامر المطور𐎄','callback_data'=>'4']],
[['text'=>'𐎄اوامر المطور الاساسي𐎄','callback_data'=>'5']],
[['text'=>'𐎄اوامر التسليه𐎄','callback_data'=>'6']],
]])
]); 
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
 𐂠 `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);}}}}
elseif($text =="اوامر الحمايه"){
if( $statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$carlos) or in_array($from_id2,$nazar)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$m1
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠لم يتم تفعيل البوت في المجموعة ! ",'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);}}}}
elseif($text =="اوامر الادمنيه"){
if( $statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$carlos) or in_array($from_id2,$nazar)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$m2",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠 لم يتم تفعيل البوت في المجموعة !",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);}}}}
elseif($text =="اوامر المدراء"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if($add == true){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$m3",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠لم يتم تفعيل البوت في المجموعة !",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);}}}}
elseif($text =="اوامر المطور"){
if( $statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$carlos) or in_array($from_id2,$nazar)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$m4",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠لم يتم تفعيل البوت في المجموعة !",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}}}}
elseif($text == "اوامر المطور الاساسي"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$eri)){
$add = $settings["information"]["added"];
if($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$m5",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠هذا الامر ليس لك عزيزي »",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}}
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$from_id2 = $update->callback_query->from->id;
$statjsond = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id2&user_id=$from_id2"),true);
$statusd = $statjsond['result']['status'];

if($data == "1" ){
if( $statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$carlos) or in_array($from_id2,$nazar)) {
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$m1",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>". $time ." ,'callback_data'=>'00']],
[['text'=>' 𐂠' ,'callback_data'=>"home"]],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>" 𐂠هذا الامر ليس لك", 
'show_alert'=>true 
 ]); 
} 
}
if($data == "2" ){
if( $statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$carlos) or in_array($from_id2,$nazar)) {
$statjsond = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id2&user_id=".$from_id2),1);
$statusd = $statjsond['result']['status'];
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$m2",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>". $time ." ,'callback_data'=>'00']],
[['text'=>' 𐂠' ,'callback_data'=>"home"]],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>" 𐂠هذا الامر ليس لك", 
'show_alert'=>true 
 ]); 
} 
}
if($data == "6" ){
if( $statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$carlos) or in_array($from_id2,$nazar)) {
$statjsond = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id2&user_id=".$from_id2),1);
$statusd = $statjsond['result']['status'];
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$m6",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>". $time ." ,'callback_data'=>'00']],
[['text'=>' 《??》' ,'callback_data'=>"home"]],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>" 𐂠هذا الامر ليس لك", 
'show_alert'=>true 
 ]); 
} 
}

if($data == "3" ){
if( $statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$carlos) or in_array($from_id2,$nazar)) {
$statjsond = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id2&user_id=".$from_id2),1);
$statusd = $statjsond['result']['status'];
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$m3",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>". $time ." ,'callback_data'=>'00']],
[['text'=>' 𐂠' ,'callback_data'=>"home"]],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>" 𐂠هذا الامر ليس لك", 
'show_alert'=>true 
 ]); 
} 
}
if($data == "4" ){
if( $statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$carlos) or in_array($from_id2,$nazar)) {
$statjsond = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id2&user_id=".$from_id2),1);
$statusd = $statjsond['result']['status'];
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$m4",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>". $time ." ,'callback_data'=>'00']],
[['text'=>' 𐂠' ,'callback_data'=>"home"]],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>" 𐂠هذا الامر ليس لك", 
'show_alert'=>true 
 ]); 
} 
}
if($data == "5" ){
if(in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri)) {
$statjsond = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id2&user_id=".$from_id2),1);
$statusd = $statjsond['result']['status'];
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$m5",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>". $time ." ,'callback_data'=>'00']],
[['text'=>' 𐂠' ,'callback_data'=>"home"]],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>" 𐂠هذا الامر ليس لك 𐂠", 
'show_alert'=>true 
 ]); 
} 
}
if($data == "home" ){
if( $statusd == 'creator' or $statusd == 'administrator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$carlos) or in_array($from_id2,$nazar)) {
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$m"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𐎄المميزات𐎄','callback_data'=>'m11']],
[['text'=>'𐎄اوامر الادمنيه𐎄','callback_data'=>'2'],['text'=>'𐎄اوامر الحمايه𐎄','callback_data'=>'1']],
[['text'=>'𐎄اوامر المدراء𐎄','callback_data'=>'3'],['text'=>'𐎄اوامر المطور𐎄','callback_data'=>'4']],
[['text'=>'𐎄اوامر المطور الاساسي𐎄','callback_data'=>'5']],
[['text'=>'𐎄اوامر التسليه𐎄','callback_data'=>'6']],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>" 𐂠هذا الامر ليس لك 𐂠", 
'show_alert'=>true 
 ]); 
} 
}

if($text =="اوامر التسليه" or $text =="التسليه" or $text =="اوامر التسليه"){ 
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {	if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"
╭─────────╮
│𝗕𝘆➪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)*𐂠
│╭────────╯
│╰𐂠ᯓ اوامر التسليه
│╭*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
││𐂠ᯓ تفعيل + تعطيل اوامر التسليه
│╰*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
│╭𐂠ᯓ رفع/تنزيل ملك
││𐂠ᯓ رفع/تنزيل تلاشانياوي
││𐂠ᯓ رفع/تنزيل بطل
││𐂠ᯓ رفع/تنزيل قلبي
││𐂠ᯓ رفع/تنزيل وتكه
││𐂠ᯓ رفع/تنزيل حمار
││𐂠ᯓ رفع/تنزيل قرد
││𐂠ᯓ رفع/تنزيل زوجي 
││𐂠ᯓ رفع/تنزيل زوجتي
││𐂠ᯓ اديني رايك في يابوت + بالرد
││𐂠ᯓ نسبه جمالي/جمالي
││𐂠ᯓ جماله برد لكشف نسبه جمال الشخص
│╰────────╮
│𝗖𝗵²➪*[ᯓтαℓαsнαηεᯓ](t.me/$channel)*
╰─────────╯
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>" 𐂠 قم بتفيل البوت اولا
",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}

if(preg_match('/^(بحث) (.*)/s', $text, $stor)){
if($settings["lock"]["serhi"] == "مقفول"){
$rs = 'https://play.google.com/store/search?q='.urlencode($stor[2]);
$rs1 = 'http://www.mobogenie.com/search.html?q='.urlencode($stor[2]);
$rs2 = 'http://www.mobomarket.net/search?keyword='.urlencode($stor[2]);
$rs3 = "http://www.apkmirror.com/?s=".urlencode($stor[2])."&post_type=app_release&searchtype=apk";
$rs4 = 'http://www.appsodo.com/search_'.urlencode($stor[2])."_1";
$rs5 = 'https://es.aptoide.com/search?query='.urlencode($stor[2])."&type=apps";
$rs6 = 'http://html5.oms.apps.opera.com/en_in/catalog.php?search='.urlencode($stor[2]);
$rs7 = 'https://www.androiddrawer.com/search-results/?q='.urlencode($stor[2]);
bot('sendChatAction', [
'chat_id'=>$chat_id,
'action'=>'typing',]);
sleep(1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>" 𐂠 اهلا عزيزي ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ اليك نتائج البحث ( $text )
",'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
       [['text'=>"Googli Play Market", 'url'=>"$rs"]],
       [['text'=>"Mobogenie Market", 'url'=>"$rs1"]],  
       [['text'=>"Mobo Market", 'url'=>"$rs2"]],
          [['text'=>"Apkmirror Market", 'url'=>"$rs3"]],
       [['text'=>"Appsodo Market", 'url'=>"$rs4"]],
       [['text'=>"Appoide Market", 'url'=>"$rs5"]],  
       [['text'=>"Opera Market", 'url'=>"$rs6"]],
          [['text'=>"Androide Dwar Market", 'url'=>"$rs7"]],
 ]])]);}
 }
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$setnamebot = file_get_contents("setname.txt");
$namebot = file_get_contents("namebot.txt");
if($text=="/start" and $starttext == null){
$st1 = file_get_contents("startlock.txt");
if($st1 == "✔"){
if($tc == "private"){
if( !in_array($from_id,$Dev) && !in_array($from_id,$eri)){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/$userbot",
'caption'=>"*
╭─────────╮
│ 𝗕𝘆➪𐂠 $buy
│╭────────╯
│╰𐂠ᯓمرحبا بك في 𐂠ᯓтαℓαsнαηεᯓ𐂠
│╭𐂠ᯓآهلا انآ بــــوت آســمـي тαℓαsнαηε 
│╰𐂠ᯓ آختـصاصـي حمايـة آلمجـموعـات ..
│╭𐂠ᯓ مـن آلبوتات وآلتوجيه وآلتكرآر وآلخ
││𐂠ᯓ لتفعيل آلبوت آتبــع الشـروط  ⇊
│╰𐂠ᯓ ❬اضف البوت الى المجموعة❭ 
│╭𐂠ᯓ ❬ارفع البوت ادمن في المجموعة❭
││𐂠ᯓ ❬  اكتب تفعيل وسيتم رفعك مالك في البوت ورفع الادمنيه الجروب تلقائيا ❭  
│╰────────╮
│ 𝗖𝗵²➪𐂠━━ᯓ$channel
╰─────────╯
*",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" 𐂠ᯓ اضغط هنا للاضافة الى مجموعتك ᯓ𐂠 ",'url'=>"https://telegram.me/$tbbots?startgroup=start"]],
[['text'=>" 𐂠 قناة المطور ؛  𐂠.",'url'=>"https://t.me/$channel"]],
[["text"=>"𐂠ᯓ المطـور ᯓ𐂠",'url'=>"t.me/$buy"]],
]])
]);
}}}}
$starttext = file_get_contents("starttxt.txt");
if($text=="/start" and $starttext != null){
if($tc == "private"){
$st1 = file_get_contents("startlock.txt");
if($st1 == "✔"){
if( !in_array($from_id,$Dev) && !in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$starttext
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Source Channel",'url'=>"t.me/$channel"]],
]])
]);
}}}}
$startt = file_get_contents("start.txt");
$starttext = file_get_contents("starttxt.txt");
if($text=="🏴جلب start🏳️" and $starttext == null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
╭─────────╮
│ 𝗕𝘆➪𐂠 $buy
│╭────────╯
││𐂠ᯓمرحبا بك في 𐂠ᯓтαℓαsнαηεᯓ𐂠
││𐂠ᯓآهلا انآ بــــوت آســمـي тαℓαsнαηε 
││𐂠ᯓ آختـصاصـي حمايـة آلمجـموعـات ..
││𐂠ᯓ مـن آلبوتات وآلتوجيه وآلتكرآر وآلخ
││𐂠ᯓ لتفعيل آلبوت آتبــع الشـروط  ⇊
││𐂠ᯓ ❬اضف البوت الى المجموعة❭ 
││𐂠ᯓ ❬ارفع البوت ادمن في المجموعة❭
││𐂠ᯓ ❬  اكتب تفعيل وسيتم رفعك مالك في البوت ورفع الادمنيه الجروب تلقائيا ❭  
│╰────────╮
│ 𝗖𝗵²➪𐂠 $channel
╰─────────╯*
",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
]);
}}}
$starttext = file_get_contents("starttxt.txt");
if($text=="🏴جلب start🏳️" and $starttext != null){
if($tc == "private"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠 { `رسالة الستارت الحالية` }  𐂠

$starttext
",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  }} 
if($text =="🏴تعطيل start🏳️"){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" 𐂠تم تعطيل start الدخول بنجاح
 𐂠 بواسطة ⁦𐎄 [$info](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("startlock.txt","✖");
}
}
if($text =="🏴تفعيل start🏳️"){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" 𐂠تم تفعيل start الدخول بنجاح
 𐂠 بواسطة ⁦𐎄 [$info](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("startlock.txt","✔");
}
}

if($text =="🏴تعطيل التواصل🏳️" ){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" 𐂠تم تعطيل التواصل بنجاح
 𐂠 بواسطة ⁦𐎄 [$info](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("openst.txt","✖");
}}
if($text =="🏴تفعيل التواصل🏳️"){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" 𐂠ᯓ تم تفعيل التواصل بنجاح
 𐂠ᯓ بواسطة  [$info](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("openst.txt","✔");
}
}
$Twassl = file_get_contents("twassl.txt");
$Twasl = file_get_contents("twasl.txt");
$locktwas = file_get_contents("openst.txt");
if($text != "/start" and $Twasl == null and !in_array($from_id,$Dev)){
if($locktwas == "✔"){
if($tc == 'private'){
    bot('forwardMessage',[
        'chat_id'=>$Dev[0],
        'from_chat_id'=>$chat_id,
  'message_id'=>$update->message->message_id,
'text'=>$text,
    ]);
    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>" 𐂠ᯓ تم ارسال رسالتك لـ المطور ✓
 𐂠ᯓ معرف المطور  @$buy
 𐂠 [للمزيد اضغط هنا](t.me/$channel)
𐂠━━ᯓтαℓαsнαηεᯓ━━𐂠
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
               ]])]);}}
}
$Twassl = file_get_contents("twassl.txt");
$Twasl = file_get_contents("twasl.txt");
$locktwas = file_get_contents("openst.txt");
if($text != "/start" and $Twasl != null and !in_array($from_id,$Dev)){
if($locktwas == "✔"){
if($tc == 'private'){
    bot('forwardMessage',[
        'chat_id'=>$Dev[0],
        'from_chat_id'=>$chat_id,
  'message_id'=>$update->message->message_id,
'text'=>$text,
    ]);
    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"
$Twasl",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
                [['text'=>'$chinnl','url'=>'https://t.me/$channel']],
               ]])]);}}}

if($message->reply_to_message->forward_from->id and in_array($from_id,$Dev)){
    bot('sendMessage',[ 
'chat_id'=>$message->reply_to_message->forward_from->id,
        'text'=>$text,
    ]);
    bot('sendmessage',[
       'chat_id'=>$Dev[0],
        'text'=>" 𐂠ᯓ تم ارسال رسالتك بنجاح",
]);}
$twasl = file_get_contents("twasl.txt");
if($text=="🏴جلب التواصل🏳️" and $twasl == null){
if($tc == "private"){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠 { `رد التواصل الحالي` }  𐂠
 𐂠ᯓ تم ارسال رسالتك لـ المطور ✓
 𐂠ᯓ معرف المطور  @$buy
 𐂠❪*[ᯓтαℓαsнαηεᯓ](t.me/$buy)* ❫ ❫
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
               ]])]);}}}

$twasl = file_get_contents("twasl.txt");
if($text==" 𐂠جلب رد التواصل" and $twasl != null){
if($tc == "private"){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠 { `رد التواصل الجديد` }  𐂠
$twasl
",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$chinnl",'url'=>"t.me/$channel"]],
]])
]);
}}}
$Twassl = file_get_contents("twassl.txt");
$Twasl = file_get_contents("twasl.txt");
if ($text == "🏴تعين رد التواصل🏳️" or $text == "تعيين رد التواصل" and in_array($from_id,$Dev)){
file_put_contents("twassl.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>" 𐂠ᯓ قم بارسال الرد الان عزيزي
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "🏴حذف رد التواصل🏳️" or $text == "حذف رد التواصل" and in_array($from_id,$Dev)){
file_put_contents("twasl.txt","");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>" 𐂠ᯓ تم حذف رد التواصل بنجاح
",'parse_mode'=>"MARKDOWN",
 'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━━━ᯓтαℓαsнαηεᯓ━━━━━•𐂠","url"=>"t.me/alatshawy"]],
[["text"=>"𐂠ᯓمبرمج السورسᯓ𐂠",'url'=>"t.me/BLACIK0"]],
]
])
]);}
if($text && $Twassl =="nam" and in_array($from_id,$Dev)){
file_put_contents("twasl.txt",$text); 
file_put_contents("twassl.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => " 𐂠ᯓ تم تعيين رد التواصل بنجاح
 𐂠$text
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
 
 $setnamebot = file_get_contents("setname.txt");
$namebot = file_get_contents("namebot.txt");
if ($text == "🏴تغير اسم البوت🏳️" and in_array($from_id,$Dev)){
file_put_contents("setname.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>" 𐂠ᯓ قم بأرسال اسم البوت الان",'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━━━ᯓтαℓαsнαηεᯓ━━━━━•𐂠","url"=>"t.me/alatshawy"]],
[["text"=>"𐂠ᯓمبرمج السورسᯓ𐂠",'url'=>"t.me/BLACIK0"]],
]
])
]);}
if($text && $setnamebot =="nam" and in_array($from_id,$Dev)){
file_put_contents("namebot.txt",$text); 
file_put_contents("setname.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" =>" 𐂠ᯓ تم تغير اسم البوت بنجاح
 𐂠ᯓاسمي الان  $text
",'parse_mode'=>"MARKDOWN",
 'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━━━ᯓтαℓαsнαηεᯓ━━━━━•𐂠","url"=>"t.me/alatshawy"]],
[["text"=>"𐂠ᯓمبرمج السورسᯓ𐂠",'url'=>"t.me/BLACIK0"]],
]
])
]);}
$botproxre = array("* 𐂠 يعم اسمي  $namebot *",
"* 𐂠 يعم عليا الطلاق من بوتي نا اسمي تلاشاني*",
"* 𐂠 لا مش بوت لا اسمي $namebot*",
"* 𐂠 يجدع ارحم امي اسمي$namebot*",
"* 𐂠 اسمي انا $namebot*");
 $reproxbot = array_rand($botproxre, 1);
if($text == "ميشو" || $text == "اسمك اي" || $text == "بوتي" || $text == "البوت" || $text == "بوت" and $namebot == NULL){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/$userbot",
'caption'=>"$botproxre[$reproxbot]",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━━━ᯓтαℓαsнαηεᯓ━━━━━•𐂠","url"=>"t.me/alatshawy"]],
[["text"=>"𐂠ᯓمبرمج السورسᯓ𐂠",'url'=>"t.me/BLACIK0"]],
]
])
]);}}
$botre = array("* 𐂠 ثواني بتشقط وجاي🤓*",
"* 𐂠 اي ياعيون البوت معاك😌*",
"* 𐂠 ولد عيب اسمي  $namebot*",
"* 𐂠 اي يقلبي متجيب بوسه😻*");
$rebot = array_rand($botre, 1);
if($text == "ميشو" || $text == "اسمك اي" || $text == "بوتي" || $text == "البوت" || $text == "بوت" and $namebot != NULL){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/$userbot",
'caption'=>"$botre[$rebot]",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━━━ᯓтαℓαsнαηεᯓ━━━━━•𐂠","url"=>"t.me/alatshawy"]],
[["text"=>"𐂠ᯓمبرمج السورسᯓ𐂠",'url'=>"t.me/BLACIK0"]],
]
])
]);}}
$namere = array("* 𐂠 ثواني بتشقط وجاي🤓*",
"* 𐂠 اقراء اسمي ᯓтαℓαsнαηεᯓ  *",
"* 𐂠 عايز اي يعم انتا 😒*",
"* 𐂠 صلي علي محمد😻*");
$rename = array_rand($namere, 1);
if($text == "$namebot" and $namebot != NULL){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/$userbot",
'caption'=>$namere[$rename],
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━━━ᯓтαℓαsнαηεᯓ━━━━━•𐂠","url"=>"t.me/alatshawy"]],
[["text"=>"𐂠ᯓمبرمج السورسᯓ𐂠",'url'=>"t.me/BLACIK0"]],
]
])
]);}}
$proxre = array("* 𐂠اسمي تلاشاني يا بغل😒*",
"* 𐂠 اي يقلبي انا تلاشاني😻*",
"* 𐂠 قول يعم عايز  اي 😌*",
"* 𐂠 لاإله إلا الله وحده لاشريك له*");
$reprox = array_rand($proxre, 1);
if($text == "ᯓтαℓαsнαηεᯓ" and $namebot == NULL){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/$userbot",
'caption'=>$proxre[$reprox],
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━━━ᯓтαℓαsнαηεᯓ━━━━━•𐂠","url"=>"t.me/alatshawy"]],
[["text"=>"𐂠ᯓمبرمج السورسᯓ𐂠",'url'=>"t.me/BLACIK0"]],
]
])
]);}}

////////////////////////////////////////////////
$step1 = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$idBot"),true);
$step3 = $step1['result']['can_change_info'];
$step4 =  $step1['result']['can_delete_messages'];
$step5 = $step1['result']['can_restrict_members'];
$step6 = $step1['result']['can_invite_users'];
$step7 = $step1['result']['can_pin_messages'];
$step8 = $step1['result']['can_promote_members'];

if($step3 == 1){
$check3 = '✅';
}elseif($step3 != 1){
$check3 = '❌';
}if($step4 == 1){
$check4 = '✅';
}elseif($step4 != 1){
$check4 = '❌';
}if($step5 == 1){
$check5 = '✅';
}elseif($step5 != 1){
$check5 = '❌';
}if($step6 == 1){
$check6 = '✅';
}elseif($step6 != 1){
$check6 = '❌';
}if($step7 == 1){
$check7 = '✅';
}elseif($step7 != 1){
$check7 = '❌';
}if($step8 == 1){
$check8 = '✅';
}elseif($step8 != 1){
$check8 = '❌';
}

if($text == 'كشف البوت' ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$carlos) or in_array($from_id,$eri)) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*
 𐂠ᯓاهلا بك عزيزي 
 𐂠ᯓ هذه صلاحيات البوت ادناه 
 𐂠ᯓ علامة ❪✅❫ مفتوحة ❪❎❫ مقفولة  ⇊
         𐂠━━━ᯓтαℓαsнαηεᯓ━━━𐂠
 𐂠 تغيير معلومات المجموعة:-❪ $check3 ❫
 《??》 دعوة الاعضاء الجديدة :-❪ $check6 ❫
 𐂠 تثبيت رسائل الاعضاء :-❪ $check7 ❫
 𐂠 حظر تقيد الاعضاء:-❪ $check5 ❫
 𐂠 اضافة مشرفين:-❪ $check8 ❫
 𐂠 حذف الرسائل:-❪ $check4 ❫
         𐂠━━━ᯓтαℓαsнαηεᯓ━━━𐂠
",'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
]);}}
elseif($rt && $text =="رفع مشرف"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ العضو  [$re_name](tg://user?id=$re_id)
 𐂠 تم ترقية ليصبح مشرف  
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 bot('promoteChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$re_id,
 'can_change_info'=>True,
  'can_delete_messages'=>True,
  'can_invite_users'=>True,
  'can_restrict_members'=>True,
  'can_pin_messages'=>True,
  'can_promote_members'=>false
]);
	}
}
elseif($rt && $text =="تنزيل مشرف"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ العضو  [$re_name](tg://user?id=$re_id)
 𐂠 تم تنزيله من قائمة المشرفين
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);}}

$silent = $settings["silentlist"];
if($rt && $text == "كتم" or $rt && $text == "اكتم" or $rt && $text == "قيد" or $rt && $text == "تقييد" or $rt && $text == "تقيد" and !in_array($re_id,$silent)){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer) && !in_array($re_id,$carlos) && !in_array($re_id,$nazar) && !in_array($re_id,$eri)) {
$add = $settings["information"]["added"];
if ($add == true){
bot('restrictChatMember',[
'user_id'=>$re_id,
'chat_id'=>$chat_id,
'can_post_messages'=>false,
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ العضو  [$re_nam e](tg://user?id=$re_id)
 𐂠ᯓ ايديه  `$re_id`
 𐂠ᯓ تم كتمه/تقييده من المجموعة
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$re_msgid,
]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>" 𐂠قم بتفيل البوت اولا",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>" 𐂠ᯓلايمكن تقييد او طرد او كتم الادمنية او المدراء او المميزين",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif (strpos($text, "كتم لمدة") !== false && $rt or strpos($text, "تقييد لمدة ") !== false && $rt) {
if(!in_array($re_id,$silent)){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer) && !in_array($re_id,$carlos) && !in_array($re_id,$nazar) && !in_array($re_id,$eri)) {
$add = $settings["information"]["added"];
$we = str_replace(['كتم لمدة ',' تقييد لمدة'],'',$text );
if ($we <= 1000 && $we >= 1){
if ($add == true) {
$weplus = $we + 0;
 bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>" 𐂠ᯓ العضو  [$re_nam e](tg://user?id=$re_id)
 𐂠ᯓ ايديه  `$re_id`
 𐂠 تم كتمه لمدة $we دقيقه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
bot('restrictChatMember',[
'user_id'=>$re_id,
'chat_id'=>$chat_id,
'can_post_messages'=>false,
'until_date'=>time()+$weplus*60,
]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>" 𐂠قم بتفيل البوت اولا",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>" 𐂠خطا
𐂠━━ᯓтαℓαsнαηεᯓ━━𐂠
 𐂠 يجب اختيار عدد بين 1 الى 1000
",'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
'chat_id' => $chat_id,
'text'=>" 𐂠لايمكنني تقييد الادمنية او المدراء او المطورين او المميزين",
'reply_markup'=>$inlinebutton,
]);
}
}
}
$idp == file_get_contents("data/$chat_id/bans.txt");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if($rt and $text == "الغاء الكتم" or $rt and $text == "الغاء كتم" or $rt and $text == "الغاء تقيد" or $rt and $text == "الغاء تقييد" or $rt and $text == "الغاء التقييد"){
bot('restrictChatMember',[
'user_id'=>$re_id,
'chat_id'=>$chat_id,
'can_post_messages'=>true,
'can_add_web_page_previews'=>false,
'can_send_other_messages'=>true,
'can_send_media_messages'=>true,
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>" 𐂠 العضو » [$re_name](tg://user?id=$re_id)
 𐂠 ايديه  `$re_id`
 𐂠 تم الغاء كتمه/تقييده بنجاح
 𐂠 بواسطة ⁦𐎄「 [$first_name](tg://user?id=$from_id) 」
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$key = array_search($re_id,$settings["silentlist"]);
unset($settings["silentlist"][$key]);
$settings["silentlist"] = array_values($settings["silentlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
} 
}
$silent = $settings["silentlist"];
if( $text == "المكتومين" or $text == "المقيدين" or $text == "قائمة المقيدين" or $text == "قائمه المقيدين" or $text == "قائمة المكتومين" and $settings["silentlist"]!== NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$Apimktom = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$silent[$z]"));
$Usermktom =$Apimktom->result->username;
$result = $result." 𐂠$z- @$Usermktom"."\n";
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠 قائمه المكتومين/ المقيدين :
 𐂠 $result",
 ]);
}
}
if( $text == "مسح المكتومين" or $text == "مسح المكاتيم" or $text == "مسح المقيدين" or $text == "مسح المقيديين"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
$add = $settings["information"]["added"];
if ($add == true){
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
 bot('restrictChatMember',[
'user_id'=>$silent[$z],
'chat_id'=>$chat_id,
'can_post_messages'=>true,
'can_add_web_page_previews'=>false,
'can_send_other_messages'=>true,
'can_send_media_messages'=>true,
]);}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠تم مسح سلة المكتومين/المقيدين
 𐂠 بواسطة ⁦𐎄「 [$first_name](tg://user?id=$from_id) 」
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unset($settings["silentlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>" 𐂠قم بتفيل البوت اولا",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}

$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$sudo         = 2116439329; // ايديك.
$bot_id       = 2147009312; // ايدي بوتك .
$from_id     = $message->from->id;
$first_name = $message->from->first_name;
$type       = $update->message->chat->type;

mkdir("Fri3nd_s");

$message_id = $message->message_id;
$gp_get = file_get_contents("Fri3nd_s/groups.txt");
$groups = explode("\n", $gp_get);
$GG1ZZ = file_get_contents("Fri3nd_s/iBadlz.txt");
$pirvate = explode("\n",file_get_contents("Fri3nd_s/pirvate.txt"));
$forward = $update->message->forward_from;
$MOhaMMed = count($pirvate)-1;
$MoHaMMedd = count($groups)-1;

if($text == "اذاعه بالتوجيه" || $text == "🏴اذاعه عام بالتوجيه🏳️" || $text == "اذاعه للكل بالتوجيه" || $text =="🏴اذاعه عام توجيه🏳️"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
    file_put_contents("Fri3nd_s/iBadlz.txt","iBadlz");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"* 𐂠 اهلا عزيزي الـمطور ، 
 𐂠 قم بتوجيه رسالتك الان ...
*",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id
  ]);
  }}
if($message and $GG1ZZ == "iBadlz"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
  for($i=0;$i<count($groups);$i++){
bot('ForwardMessage',[
 'chat_id'=>$groups[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message_id,
 ]);
}
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"* 𐂠ᯓ اهلا عزيزي الـمطور ، 
 𐂠ᯓ تم ارسال رسالتك الى ⁦𐎄 $MOhaMMed عضوا
 ⁦𐎄 $MoHaMMedd مجموعة*
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id
   ]);
}}
if($text and $type == "private" and !in_array($from_id, $pirvate)){
file_put_contents("Fri3nd_s/pirvate.txt", "$from_id\n",FILE_APPEND);
}
if($text and $type == "supergroup" and !in_array($chat_id, $groups)) {
file_put_contents("Fri3nd_s/groups.txt", "$chat_id\n",FILE_APPEND);
}

if($text == "اذاعه خاص" || $text =="🏴اذاعه خاص🏳️"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
    file_put_contents("Fri3nd_s/iBadlz.txt","JJ119");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"* 𐂠اهلا عزيزي الـمطور ، قم بأرسال رسالتك
 𐂠 ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MarkDown",
    'reply_to_message_id'=>$message->message_id
  ]);
  }}
if($message and $GG1ZZ == "JJ119"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
    for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 file_put_contents("Fri3nd_s/iBadlz.txt","MMoHaMMeD");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"* 𐂠ᯓ اهلا عزيزي الـمطور ، 
 𐂠ᯓ تم ارسال رسالتك الى $MOhaMMed عضوا ،*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
          ]);
}}
if ($text == "اذاعه للكل" || $text == "اذاعه عام" || $text == "اذاعه"  ||$text == "🏴اذاعه عام🏳️" || $text =="🏴اذاعه عام🏳️"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
    file_put_contents("Fri3nd_s/iBadlz.txt","LE_C4_KR");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"* 𐂠ᯓ اهلا عزيزي الـمطور ، قم بأرسال رسالتك
 𐂠 ملاحظةهہ : يمكنك استعمال الماركداون ، *",
'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }}
if($message and $GG1ZZ == "LE_C4_KR"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
    for ($i=0; $i<count($groups); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$groups[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

]);
} 
for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*
 𐂠ᯓ اهلا عزيزي الـمطور ، 
 𐂠ᯓ تم ارسال رسالتك الى ⁦𐎄 $MOhaMMed عضوا
و ⁦𐎄 $MoHaMMedd مجموعة*
",'parse_mode'=>"MarkDown",'reply_to_message_id'=>$message->message_id
          ]);}}

if($text == "اذاعه خاص بالتوجيه" || $text == "🏴اذاعه خاص بالتوجيه🏳️"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
    file_put_contents("Fri3nd_s/iBadlz.txt","od_1j");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"* 𐂠ᯓ اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id
  ]);}}
if($message and $GG1ZZ == "od_1j"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"* 𐂠 اهلا عزيزي الـمطور ، 
 𐂠ᯓ تم ارسال رسالتك الى ⁦𐎄 $MOhaMMed عضوا
و ⁦𐎄 $MoHaMMedd مجموعة*
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id
   ]);}}
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
if($text == "🏴الاحصائيات🏳️" or $text == "الاحصائيات"){
$c = count($groups);
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" 𐂠احصائيات البوت 

 𐂠 عدد المجموعات المفعلة ⁦𐎄 $c
 𐂠 عدد المشتركين ⁦𐎄 $MOhaMMed
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}}
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
if($text == "🏴المشتركين🏳️" or $text == "المشتركين"){
$c = count($groups);
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" 𐂠 احصائيات المشتركين

 𐂠 عدد المشتركين ~ $MOhaMMed
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}}
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
if($text == "🏴المجموعات🏳️" or $text == "المجموعات"){
$c = count($groups);
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" 𐂠 احصائيات المجموعات

 𐂠 عدد المجموعات ~ $c
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}}

elseif($text =="🏴حظر مجموعه🏳️" ){
if ($tc == "private") {
if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"  𐂠ᯓ حسننا عزيزي المطور،
 𐂠 الان ارسل غادر + ايدي المجموعة
",'reply_to_message_id'=>$message_id,
 ]);}}
}
elseif(strpos($text  , "غادر" ) !== false or strpos($text  , "/left " ) !== false) {
$text = str_replace(['/left ','غادر'],'',$text );
if ($tc == "private") {
if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 𐂠ᯓ تم حظر المجموعه بنجاح 
ايدي المجموعه: $text
",]);
bot('LeaveChat',[
  'chat_id'=>$text,
]);unlink("data/$text.json");}}}
####
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)){
if($rt and $text == "ضع صوره" or $text == "ضع صورة" and $re_msd->photo){
 $file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$re_msd->photo[1]->file_id])->result->file_path; file_put_contents("$chat_id.jpg",file_get_contents($file));
bot('setChatPhoto',[
'chat_id'=>$chat_id,
'photo'=>new CURLFile("$chat_id.jpg"),
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"* 𐂠تم تعيين صورة المجموعة  
 ??ᯓ بواسطة ⁦𐎄* [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unlink("$chat_id.jpg");
}}
if($status != 'creator' or $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$carlos) and !in_array($from_id,$nazar) and !in_array($from_id,$eri)){
if($rt and $text == "ضع صوره" or $text == "ضع صورة" and $re_msd->photo){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"* 𐂠هذا الامر ليس لك  
 𐂠ᯓ عزيزي* [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}

if($text == "محيبس"){
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👊1،👊2،👊3،👊4،👊5
اختار وجرب حظك 💬💢",
]);
}
$b = array("✅صح","❌خطاء","❌خطاء","❌خطاء","❌خطاء","❌خطاء","❌خطاء");
$c = array_rand($b,1);
$armof = array("الحمد لله","سبحان الله","استغفر الله");
$adi = array_rand($armof,1);
if($text == "1" or $text == "2" or $text == "3" or $text == "4" or $text == "5"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
 𐂠 جوابك - $b[$c]
 𐂠 $armof[$adi]*
",'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
####
if($text == "غ1"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQ7_W/238",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ2"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQ7_W/243",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ3"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQ7_W/242",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ4"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQ7_W/241",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ5"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQ7_W/240",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ6"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQ7_W/239",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ7"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQ7_W/237",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ8"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQ7_W/236",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ9"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQ7_W/235",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ10"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQ7_W/234",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ11"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQQ_YQ/377",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ12"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQQ_YQ/374",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ13"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQQ_YQ/373",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ14"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQQ_YQ/370",
 reply_to_message_id =>$message->message_id, 
]);
}
}
if($text == "غ15"){
if($settings["lock"]["ahngii"] == "مقفول"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/QQQ_YQ/368",
 reply_to_message_id =>$message->message_id, 
]);
}
}
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
$taag = $settings["tagusermy"];
if($message and !in_array($from_id,$taag)){
$settings["tagusermy"][]="$from_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
if($text == "تاك" or $text == "تاك الكل" or $text == "#all"){
$taag = $settings["tagusermy"];
for($z = 0;$z <= count($taag)-1;$z++){
$Apitag = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$taag[$z]"));
@$Usertag = $Apitag->result->username;
$first_natg = $Apitag->result->first_name;
$idtg =$Apitag->result->id;
if(!$Usertag){
$Usertag = "$idtg";
}elseif($Usertag){
$Usertag = "@$Usertag";
}
$tagmy = $tagmy."$z - { $Usertag }."."\n";
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠 قائمة الاعضاء 

 𐂠 $tagmy
",'reply_to_message_id'=>$re_msgid,
 ]);
}
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
if($text =="مغادرة" or $text =="اطردني"){
	$lockgamess = $settings["lock"]["bannnnn"];
if($settings["lock"]["bannnnn"] == "مفتوح"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تفضل اتسرسح منا",
]);
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id
]);
}}
if(isset($update->callback_query)){
  $chat_id = $update->callback_query->message->chat->id;
  $message_id = $update->callback_query->message->message_id;
  $data  = $update->callback_query->data;
 $user = $update->callback_query->from->username;
}
if($text == 'رابط الحذف' || $text == 'بوت الحذف'){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id,  
'text'=>"
𐂠ᯓ رابط الحذف في جميع مواقع التواصل .
", 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𐂠ᯓ Telegram ܁','url'=>'https://my.telegram.org/auth?to=delete']],
[['text'=>'𐂠ᯓ instagram ܁','url'=>'https://www.instagram.com/accounts/login/?next=/accounts/remove/request/permanent/']], 
[['text'=>'𐂠ᯓ Facebook ܁','url'=>'https://www.facebook.com/help/deleteaccount']], 
[['text'=>'𐂠ᯓ Snspchat ܁','url'=>'https://accounts.snapchat.com/accounts/login?continue=https%3A%2F%2Faccounts.snapchat.com%2Faccounts%2Fdeleteaccount']], 
[['text'=>'𐂠ᯓ Bot deletion .','url'=>'t.me/LC6BOT']], 
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"m11"]],
]])]);}

if($data == "delateddd" ){
bot('sendMessage',[ 
'chat_id'=>$chat_id,  
'text'=>"
𐂠ᯓ رابط الحذف في جميع مواقع التواصل .
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𐂠ᯓ Telegram ܁','url'=>'https://my.telegram.org/auth?to=delete']],
[['text'=>'𐂠ᯓ instagram ܁','url'=>'https://www.instagram.com/accounts/login/?next=/accounts/remove/request/permanent/']], 
[['text'=>'𐂠ᯓ Facebook ܁','url'=>'https://www.facebook.com/help/deleteaccount']], 
[['text'=>'𐂠ᯓ Snspchat ܁','url'=>'https://accounts.snapchat.com/accounts/login?continue=https%3A%2F%2Faccounts.snapchat.com%2Faccounts%2Fdeleteaccount']], 
[['text'=>'𐂠ᯓ Bot deletion .','url'=>'t.me/LC6BOT']], 
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"??ᯓرجوعᯓ𐂠",'callback_data'=>"m11"]],
]])]);}

if($text == 'ترفيه' || $text == 'المميزات'){  
bot( sendphoto ,[
 chat_id =>$chat_id,
 photo =>"https://t.me/$channel",
 caption =>"
𐂠ᯓтαℓαsнαηεᯓ𐂠
اختار المميزات التي 
𐂠ᯓтαℓαsнαηεᯓ𐂠
", 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 𐂠اغاني𐂠','callback_data'=>"aganeyy"],['text'=>'𐂠 قران𐂠','callback_data'=>"qorannnn"]],
[['text'=>'𐂠 لأذكار والأدعية𐂠','callback_data'=>"starta"]],
[['text'=>'𐂠 قصص من القران𐂠','callback_data'=>"Qasass"],['text'=>'𐂠 الرقيه الشرعيه𐂠','callback_data'=>"roqua"]],
[['text'=>'𐂠 الروايات𐂠','callback_data'=>"rels"]],
[['text'=>'رابط الحذف','callback_data'=>"delateddd"]],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/alatshawy']],
]])]);}

if($data == "m11" ){
bot( sendphoto ,[
 chat_id =>$chat_id,
 photo =>"https://t.me/$channel",
 caption =>'
𐂠ᯓтαℓαsнαηεᯓ𐂠
اختار المميزات التي تريدها
𐂠ᯓтαℓαsнαηεᯓ𐂠
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 𐂠اغاني𐂠','callback_data'=>"aganeyy"],['text'=>'𐂠 قران𐂠','callback_data'=>"qorannnn"]],
[['text'=>'𐂠 لأذكار والأدعية𐂠','callback_data'=>"starta"]],
[['text'=>'𐂠 قصص من القران𐂠','callback_data'=>"Qasass"],['text'=>'𐂠 الرقيه الشرعيه𐂠','callback_data'=>"roqua"]],
[['text'=>'𐂠 الروايات𐂠','callback_data'=>"rels"]],
[['text'=>' الحذف','callback_data'=>"delateddd"]],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
]])]);}

if($text ==  'روايات' and !in_array($from_id, $getid) and !strpos($ch1 , '"status":"left"' ) !== false){
bot( sendphoto ,[
 chat_id =>$chat_id,
 photo =>"https://t.me/tlashan/24",
 caption =>"

قسم الروايات
",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"  الدخول الي قسم الروايات", 'callback_data'=>'rels']],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"m11"]],
]
])]);}

if($data=="rewayat"){
bot( sendphoto ,[
 chat_id =>$chat_id,
 photo =>"https://t.me/tlashan/24",
 caption =>"
قسم الروايات",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"  الدخول الي قسم الروايات", 'callback_data'=>'rels']],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"m11"]],
]
])]);}

if($data=="rels"){
bot( sendphoto ,[
 chat_id =>$chat_id,
 photo =>"https://t.me/tlashan/24",
 caption =>"
قسم الروايات",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ذائقة الموت 𐂠ᯓ",'callback_data'=>'yy'],['text'=>"قد شغفها حبآ 😻♥️",'callback_data'=>'q1']],
[['text'=>"في ديسمبر تنتهي كل الأحلام 𐂠ᯓ",'callback_data'=>'nk']],
[['text'=>"ليتنا لم نلتقي 𐂠ᯓ",'callback_data'=>'kl'],['text'=>"كتاب النسيان 𐂠ᯓ",'callback_data'=>'sf']],
[['text'=>"مميز بالأصفر 🌿💛",'callback_data'=>'zn']],
[['text'=>"في قلبي أنثى عبرية 🍀♥️",'callback_data'=>'uq'],['text'=>"أحببتك أكثر مما ينبغي 💜🌱",'callback_data'=>'yt']],
[['text'=>"كن خائنا تكن أجمل 𐂠ᯓ",'callback_data'=>'rx']],
[['text'=>"فلتغفري 𐂠ᯓ",'callback_data'=>'sr'],['text'=>"أنت لي 𐂠ᯓ",'callback_data'=>'ys']],
[['text'=>" 𐂠ᯓالتالي𐂠ᯓ",'callback_data'=>'next']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"rewayat"]],
]])]);}
if($data=="next"){
bot( sendphoto ,[
 chat_id =>$chat_id,
 photo =>"https://t.me/tlashan/24",
 caption =>"
قسم الروايات

 إختر اسم الرواية التي تريدها وسوف أقوم بإرسال نبذة عنها أيضاً ، ✋🏼💛ش

",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"قواعد العشق الأربعون 𐂠ᯓ",'callback_data'=>'xx']],
[['text'=>"غادرتك فلا تذبلني 𐂠ᯓ",'callback_data'=>'po'],['text'=>"مئة عام من العزلة 🖤🌿",'callback_data'=>'he']],
[['text'=>"البؤساء 𐂠ᯓ",'callback_data'=>'tw']],
[['text'=>"أرض زيكولا 𐂠ᯓ",'callback_data'=>'kr'],['text'=>"فوضى الحواس 𐂠ᯓ",'callback_data'=>'qyo']],
[['text'=>"الأسود يليق بك 🖤🌿",'callback_data'=>'bqu']],
[['text'=>"عتبة الألم 🖤🌿",'callback_data'=>'vuq'],['text'=>"نبض 💙🌿",'callback_data'=>'pua']],
[['text'=>" 𐂠ᯓالتالي𐂠ᯓ ",'callback_data'=>'next1']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"rels"]],
]])]);}
if($data=="next1"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"
قسم الروايات'

- إختر اسم الرواية التي تريدها وسوف أقوم بإرسال نبذة عنها أيضاً ، ✋🏼💛'
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"نـطـفـة 𐂠ᯓ",'callback_data'=>'xxu'],['text'=>"هيـٻـي 𐂠ᯓ",'callback_data'=>'ppen']],
[['text'=>"ملهمون 𖠶",'callback_data'=>'iqk']],
[['text'=>"رواية ألف 𐂠ᯓ",'callback_data'=>'kkkkw'],['text'=>"المتمرد 💙🌿",'callback_data'=>'fffto']],
[['text'=>"حبيبي داعشي 𐂠ᯓ",'callback_data'=>'ggwi']],
[['text'=>"غربة الياسمين 𐂠ᯓ",'callback_data'=>'vqps'],['text'=>"طرائف العرب 💙🌿",'callback_data'=>'xbro']],
[['text'=>"عن شيئ اسمه حب 𐂠ᯓ",'callback_data'=>'uuqph']],
[['text'=>"لا تقرب النساء قبل سن ال 25 𐂠ᯓ",'callback_data'=>'kkepa']],
[['text'=>"ما معنى أن تكون وحيدآ 💙🌿",'callback_data'=>'ccnro']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"next"]],
]])]);}

if($data == "yy"){
bot('senddocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/3",
'caption'=>"ذائقة الموت 𐂠ᯓ",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"-
- ما الفرق بين من يقرأ ومن لا يقرأ إذاً ؟
- تماماً كالفرق بين #الحي_والميت ،
الذين يقرؤون أحياء والذين لا يقرؤون أموات ولو أكلوا وشربوا وناموا وقاموا ♥️!
",
]);}
if($data == "fffto"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/26",
'caption'=>"المتمرد 💙🌿",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"الأبيض والأسود ليسا متناقضان فهما يشتركان في الرمادي أليس كذلك ؟
الثلج والنار أيضاً ليسا متناقضين كلاهما يشتركان في صفة قتل بعضهما أليس كذلك ؟
التناقض الأحقّ #أنا_وأنتِ 💙🌪
",
]);}
if($data == "iqk"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/25",
'caption'=>"ملهمون 𖠶",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"- يتحدث هذا الكتاب عن قصص وسِير لعظماء بدأوا من الصفر وكيف أنهم تحدوا الظروف إلى أن وصلوا إلى القمة ..
وأصبحوا مخلدين في التاريخ وكيف أنهم أصبحوا مصدر إلهام للجميع 💙!
",
]);}
if($data == "ppen"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/23",
'caption'=>"هـيـپـي 𐂠ᯓ",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"
️خِلتُ أن رحلتي #انتهت ،
وقد #استنزفت كل طاقتي ..
أن الدرب أمامي #مسدودةٌ ، أن مؤني #نفدت
وأن الآوان آن لالتجئ إلى #صمت الظلام ..
وإذّ بي أكتشف أن #إرادتي لا تعرف حدوداً
وأن كلماتي العتيقة متى تعطّلت على لساني ،
#انبثقت ألحانٌ جديدة من قلبي ..
وأن السُبل القديمة متى فُقِدت ،
تجلّت بلادٌ جديدة بكل #عجائبها 😌💚
",
]);}
if($data == "ggwi"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/28",
'caption'=>"حبيبي داعشي 𐂠ᯓ",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"حبيبة العمر أنتِ وستظلي 💙🌸
",
]);}
if($data == "kkepa"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/32",
'caption'=>"لا تقرب النساء قبل سن ال 25 𐂠ᯓ",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"-
لم تكن امرأةً - رغم جمالها - جل ما يشغلها هو ما ترتديه ، كم من الحمرة يجب أن تضع ، ولم تكن تهتم بطول ضفائرها كما تهتم بطول حلمها ..
' كانت #تقرأ بما يكفي
لجعلها تدرك أن الحياة بسيطة جداً 💚💫 '
",
]);}
if($data == "xbro"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/29",
'caption'=>"طرائف العرب 💙🌿",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"كان أشعب يقصُّ على أحد الأمراء قصة بدأها بقوله
' كان هناك رجل .. '
وعندها فجأة أبصر المائدة قد حضرت فـ علم أن القصة ستلهيه عن الطعام فسكت ،
فقال له الأمير ' وماذا يا أشعب ؟! '
فقال : ومات 🌚💙
",
]);}
if($data == "uuqph"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/31",
'caption'=>"عن شيء اسمه الحب 𐂠ᯓ",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"حتى قبل أن ألتقي بك كنت #أحبك !
كان في داخلي شيء لا ينام وهو أنت ..
عمري قبلك كان لحظات أنفقتها في انتظارك ♥️🔗
",
]);}
if($data == "vqps"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/30",
'caption'=>"غربة الياسمين 𐂠ᯓ",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"️-
ربّما كانت اللحظة التي أدركت فيها تغيّر نظرتها إلى الأمور هي اللحظة #الفاصلة في مسيرتها الشخصية !
تكّة موسيقية تسمعها وحدها ♥️♪
ترّن في وعيها فجأة لتعلن مرورها إلى #مرحلة_أخرى
",
]);}
if($data == "ccnro"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/34",
'caption'=>"ما معنى أن تكون وحيداً 💙🌿",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"-
كيف السبيل إليك وكل الطرق مهشّمة ؟!
وكيف النسيان ولا زالت الذاكرة تُعانق جرحك ، وكيف الهروب وأنا أهرب #منك_إليك 💙!
",
]);}
if($data == "kkkkw"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/27",
'caption'=>"رواية ألـف 𐂠ᯓ",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"الرواية عبارة عن تجسيد تجربة واقعية ثرية في حياة الكاتب يحرك من خلالها الساكن في الساحة الأدبية العالمية ، بهذه الرواية يتناول فيها تجلياته أثناء رحلة آسيوية بالقطار عام 2006 عبر سيبيريا ..
تدور في عالم من السحر والخيال حول بطلة من تركيا تسمى 'هلا' تحاول الخروج من حالة العزلة وفتح آفاق جديدة للصداقة والتواصل مع الآخر وذلك بعدما وصلت لحالة من السلام الداخلي والتصالح النفسي ، وقطعت هلال رحلة لمدة 15 يوم تبدأ من سيبيريا 💙✨
",
]);}
if($data == "xxu"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/24",
'caption'=>"نـطـفـة 𐂠ᯓ",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"
️حكايتنا تشبه حكاية ملايين البشر الذين التقوا وأحبّوا
مع فارق ضئيل أنّ كل رجل حصل على امرأة ،
وأنا حصلت عليهن كلهنَّ يوم حصلت عليك 🖤!
كنتِ انتِ حظي #الجميل 
وكنتُ أنا حظك العاثر !
كنتِ #أجمل ما حدث لي 
وكنتُ اسوأ ما حدث لك !
ولكنني أحببتك كما لم أحبُّ أحداً من قبل 🙈
وهِمت بك كما أشكّ أن أحداً هامَ بأحد هكذا من قبل ..
#أحببتك_حد_التلف 🙁✨
",
]);}


if($data == "q1"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/4",
'caption'=>"قد شغفها حبآ 😻♥",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"أن تتزوجي مقاوما ً
- يعني أن يكون الوطن على مقاس يده وبلون دمه وبحجم قلبه ، يعني أن يصبح هو أرضك وسماءك ووطنك
والوطن لا يخان ♥️!
- أن يأخذ بيدك إلى الله فتعرفين أن للسماء أبواباً لا تغلق ، وأن للمقاومة لحناً لا بد أن يُسمع ♥️!

#قد_شغفها_حباً 😻🌿
",
]);}

if($data == "nk"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/5",
'caption'=>"في ديسمبر تنتهي كل الأحلام 𐂠ᯓ️",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"سألته بدهشة : ماذا تعني بهذه الرسالة الفارغة ؟! 
قال لي وهو يغالب دموعه المشتعلة وجعاً :
حينما #أشتاقها أرسل إليها برسالة فارغة وحينما تشتاقني ترسل لي أيضاً ♥️
أرسلت لها قبل قليل برسالة لأنني أفتقدها بشدة فردت عليّ برسالتين فارغتين !
- وماذا تعني الرسالتان ؟!
- أظن بأنها تفتقدني أكثر مما أفتقدها 🔗
",
]);}
if($data == "kl"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/6",
'caption'=>"ليتنا لم نلتقِ 𐂠ᯓ",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"كثيراً ما تمنيت قَبلاً أن أكون بطلة في قصة عشق ،
تجعلني اختبئ خلف ضحكاتها ودموعها 💜
كنت دوماً أحسد ليلى وعبلة وبثينة ..
مغرمةٌ أنا #بالحب_العذري لكن خوفي من عدم وجوده حال بيني وبين تجارب الحب 🔗
",
]);}
if($data == "sf"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/7",
'caption'=>"كتاب النسيان 𐂠ᯓ",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"لا يولد البشر مرّة واحدة يوم تلدهم أمهاتهم وحسب ، 
فالحياة ترغمهم على أن ينجبوا أنفسهم 💜🌵
",
]);}
if($data == "zn"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/8",
'caption'=>"مميز بالأصفر 🌿💛",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"لقد جعلنا العالم كله من حولنا نعتقد أن سعادتنا تعتمد على حب الآخرين لنا ، ولكن هذا النوع من التفكير المقلوب هو الذي سبب لنا العديد من مشكلاتنا ، والحقيقة هي أن سعادتنا تعتمد على منح الحب وليس على تلقيه ، فليس المهم هو ما نتلقاه ، ولكن المهم هو ما نعطيه 💛🌿
",
]);}
if($data == "uq"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/9",
'caption'=>"في قلبي أنثى عبرية 🍀♥",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"️إنني أخننق ، أموت في اليوم مائة مرة ، أريد أن أتنفس .. #أريد_أن_أخرج من السجن الذي انا فيه ، لم أعد أستطيع التحمل ، بقيت خطوة واحدة على أية حال ، لن تكون الحال أسوأ مما هي عليه الآن!! ، توكلت على الله ..𐂠ᯓ
",
]);}
if($data == "yt"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/10",
'caption'=>"أحببتك أكثر مما ينبغي 𐂠ᯓ",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"تجري الأيام مسرعةً .. أسرع مما ينبغي 💜
ظننت بأننا سنكون في عمرنا هذا معاً وطفلنا الصغير يلعب بيننا ، لكنني أجلس اليوم إلى جوارك أندب أحلامي الحمقى غارقةً في حبي لك ولا قدرة لي على انتشال بقايا أحلامي من بين حطامك 💜
أشعر وكأنك تخنقني بيديك القويتين يا عزيز !
تخنقني وأنت تبكي حباً ..
لا أدري لماذا تتركني عالقة بين السماء والأرض ، لكنني أدرك بأنك تسكن أطرافي وبأنك عزيزٌ كما كنت .. أحببتك أكثر مما ينبغي !
وأحببتني أقل مما أستحق 💜🌵
",
]);}

if($data == "rx"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/11",
'caption'=>"كن خائناً تكن أجمل 𐂠ᯓ",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"
️مكتوب بأول صفحة من الرواية #تحذير_هام :
 يُمنع قراءة هذه الرواية من قبل الشباب المقبلين على الزواج ومن هم في مرحلة الخطبة ، لأن قراءتها قد تتسبب في إنهاء زواجهم قبل أن يبدأ ..
وأُخلي مسؤوليتي أمام الله من أي تغيير قد يحدث في شخصية كل إنسان يقرأها وما قد تسببه له من هواجس وأفكار شيطانية وعقد 😐💜
",
]);}
if($data == "sr"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/12",
'caption'=>"فلتغفري 𐂠ᯓ
الجزء الثاني لـ { أحببتك أكثر مما ينبغي } لكن من وجهة نظر جمانة وهي من وجهة نظر عزيز ..",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"
️تجلسين ساكنةً بجواري ..
تعبثين بخصلات شعرك المجعد مرتخية فوق مقعد السيارة كطفل منهك خائر ومريض 💜
أعرف بماذا تفكرين .. تفكرين بي !
تفكرين في مدى حقارتي وتبحثين عن أسباب خذلاني إياكِ ، #خذلتك أعرف أنني خذلتك ..
قسوت عليك على الرغم من أنكِ أحنّ البشر عليّ ،
ولا أعرف كيق قدرت على هذا !
 'غارقةٌ أنتِ في خيبتك وغارقٌ أنا في معصيتي'
لكنني أحبك يا جمانة #فاغفري 💜🌵
",
]);}
if($data == "ys"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/13",
'caption'=>"أنـت لـي 𐂠ᯓ",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"
️_ من أنا ؟؟
_ أنتَ لي  
يا لهذه الصغيرة المضحكة!! 😻💜
",
]);}
if($data == "xx"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/14",
'caption'=>"قواعد العشق الأربعون 𐂠ᯓ",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"
️تقول القاعدة الأربعون :
لا قيمة للحياة من دون #عشق !
لا تسأل نفسك ما نوع العشق الذي تريده 
روحي أم مادي ، إلهي أم دنيوي ، غربي أم شرقي ..
فالانقسامات لا تؤدي إلّا إلى مزيد من الانقسامات 
ليس للعشق تسميات ولا علامات ولا تعاريف ،
إنه كما هو نقي بسيط 💜✨
",
]);}

if($data == "po"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/15",
'caption'=>"غادرتك فلا تذبلي 𐂠ᯓ",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"
️لن ينفع التمنّي الآن في كتاباتي السريعة قبل النفاد !
حبّذا لو كنتِ هنا أيتها الغائبة عنّي ..
والقريبة إلى ذاكرتي 💜
أريدك أن تمسحي على رأسي كما كانت تفعل أمي عندما أمرض ، أريد شفتيك على جبهتي وخدّي 
فقط امنحيني وقتاً كي أطيل التحديق في عينيك 💜
ياسمين لا أجيد الكلام في منطق الحب ،
وكلماتي لا ترضى أن تلين له ،
ويديّ كذلك لا تُجيد خط الوصايا ..
لذا فهذه هي آخر كلماتي لكِ لربما هي آخر ما أملك من رصيدٍ لغويّ قبل أن ينفد وأنفد #غادرتك_فلا_تذبلي⚡️
",
]);}
if($data == "he"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/16",
'caption'=>"مئة عام من العزلة 🖤🌿",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"
️لا تحب بعمق ..
حتى تتأكد بأن الطرف الآخر يحبك بنفس العمق ،
فـ عمق حبك اليوم هو عمق #جرحك غداً 🖤🌿!
",
]);}
if($data == "tw"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/17",
'caption'=>"البـؤسـاء 𐂠ᯓ",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"
️_ إن مريضك مريض جداً 
_ مم يشكو ؟؟
_ من كل شيء ، ومن لا شيء ، إنه رجل يُستدل من جميع المظاهر ، إنه فقد شخصاً أثيراً لديه ، إن المرء ليموت بسبب ذلك . .𐂠ᯓ
",
]);}
if($data == "qyo"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/18",
'caption'=>"فوضى الحواس 𐂠ᯓ",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"
️الحب لا يجمع المتشابهين ..
الحب يجمع #المختلفين دائماً 🌸
كإثنين بينهما فارق في العمر ،
أو أحدهم يعشق الاهتمام وآخر يحتويه البرود أو قد تغير نفسك من أجل شخص بينما هو لا يحرك ساكناً !
' لأن أحدهما به ماضي والآخر يحب لأول مرة 💚🌵 '
",
]);}
if($data == "kr"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/19",
'caption'=>"أرض زيكولا 𐂠ᯓ",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"
️هل جرّبت أن تتعامل بعملة مختلفة عن العملات الورقية ليست معدنية وليست ذهبية ؟
الثروة هنا من نوع آخر لن تدفع مالاً لتأخذ ..
بل ستدفع من ذكائك ،
ستدفع من وحدات عقلك !
ولكن #انتبه فـ للثروة حدود فهنا المفلس لا يعامل باحتقار أو يُهان كما يحدث في عالمك !
❌ بل يتعرض للموت ❌
احذر ، فأنت في #أرض_زيكولا 🤭♥️
",
]);}
if($data == "bqu"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/20",
'caption'=>"الأسود يليق بك 🖤🌿",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"
️-
وضمّته إلى صدرها دون أن تُفلته ، كأنّما تريد أن يدخل إلى أحشائها فلا يخرج من هناك أبداً ..
كانت تريد أن تُذيبه في ضلوعها وتغلق عليه تلك الضلوع ، فيعيشان معاً كما لو كانا
جسداً #واحداً وروحاً #واحدة 🙊🖤 !!️
",
]);}
if($data == "pua"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/21",
'caption'=>"نـبـض 💙🌿",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"
️-
وأنظرُ في عينيك ويصبح الأسود سيّد الألوان !
فكل أسود هو لون حداد ،
إلا الأسود في عينيك #عرسي_أنا 💙
اهدأ حين أنظر في عينيك ..
اهدأ كطفلٍ كان يبكي غياب أمّه #فضمته 💙!️
",
]);}
if($data == "vuq"){
bot('senddocument',[
'chat_id'=>$chat_id,
 'document'=>"https://t.me/tttttttof/22",
'caption'=>"عتبة الألم 🖤🌿",
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"
️-
إلى أين وصلنا يا الله !
وماذا زرعنا لنحصدَ هذا الخراب كلّه🙁🖤 ؟!️
",
]);}

if($text ==  'قران' ){
    bot( sendphoto ,[
 chat_id =>$chat_id,
 photo =>"https://t.me/tlashan/11",
 caption => "أهلاً بك القسم العام اختار الذي تريده
    "
     ,
     reply_markup =>json_encode([
     inline_keyboard =>[
    [['text'=> ' القران الكريم.' ,callback_data => 'qorannnn'],[ 'text' => 'الأذكار والأدعية .',callback_data => 'starta' ]],
    [['text'=> 'قصص من القران .' ,callback_data => 'Qasass'],[ 'text' => 'الرقيه الشرعيه',callback_data => 'roqua' ]],
   [['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/$channel']], 
   
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"m11"]],
    ]
    ])
    ]);
    }
if($text ==  'qorannnn' ){
    bot( sendphoto ,[
 chat_id =>$chat_id,
 photo =>"https://t.me/tlashan/11",
 caption =>"
قسم القرآن الكريم'

- اختر اسم القارىء من الاسفل 

",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"عبد الرحمن السديسي",'callback_data'=>'sodes']],
[['text'=>"ماهر المعيقلي",'callback_data'=>'meaqly'],['text'=>"عبد الباسط عبد الصمد",'callback_data'=>'samad']],
[['text'=>"ياسر الدوسري",'callback_data'=>'dosry']],
[['text'=>"ابو بكر الشاطري",'callback_data'=>'satry'],['text'=>"سعد الغامدي",'callback_data'=>'kamedy']],
[['text'=>"احمد العجمي",'callback_data'=>'agmy']],
[['text'=>"فارس عباد",'callback_data'=>'fares'],['text'=>" مشاري بن راشد العفاسي",'callback_data'=>'afasy']],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"deneyy"]],
]])]);}

if($data=="deneyy"){
    bot( sendphoto ,[
 chat_id =>$chat_id,
 photo =>"https://t.me/tlashan/25",
 caption =>"أهلاً بك في القسم الديني ..
     
    "
     ,
     reply_markup =>json_encode([
     inline_keyboard =>[
    [['text'=> ' القران الكريم.' ,callback_data => 'deneyy'],[ 'text' => 'الأذكار والأدعية .',callback_data => 'starta' ]],
    [['text'=> 'قصص من القران .' ,callback_data => 'Qasass'],[ 'text' => 'الرقيه الشرعيه',callback_data => 'roqua' ]],
 [['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/$channel']], 
  
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"m11"]],
    ]
    ])
    ]);
    }
if($data=="sodes"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"
قسم القرآن الكريم بصوت القاريء عبد الرحمن السديسي'



",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"سورة الفاتحه",'callback_data'=>'sodes1'],['text'=>"سورة البقره",'callback_data'=>'sodes2']],
[['text'=>"سورة ال عمران",'callback_data'=>'sodes3'],['text'=>"سورة النساء",'callback_data'=>'sodes4']],
[['text'=>"سورة المائده",'callback_data'=>'sodes5'],['text'=>"سورة الانعام",'callback_data'=>'sodes6']],
[['text'=>"سورة الاعراف",'callback_data'=>'sodes7'],['text'=>"سورة الانفال",'callback_data'=>'sodes8']],
[['text'=>" سورة التوبه",'callback_data'=>'sodes9'],['text'=>"سورة يونس",'callback_data'=>'sodes10']],
[['text'=>"سورة هود",'callback_data'=>'sodes12'],['text'=>"سورة يوسف",'callback_data'=>'sodes12']],
[['text'=>"سورة الرعد",'callback_data'=>'sodes13'],['text'=>"سورة ابراهيم",'callback_data'=>'sodes14']],
[['text'=>"سورة الحجر",'callback_data'=>'sodes15'],['text'=>"سورة النحل",'callback_data'=>'sodes16']],
[['text'=>"سورة الاسراء",'callback_data'=>'sodes17'],['text'=>"سورة الكهف",'callback_data'=>'sodes18']],
[['text'=>" سورة مريم",'callback_data'=>'sodes19'],['text'=>" سورة طه",'callback_data'=>'sodes20']],
[['text'=>"سورة الانبياء",'callback_data'=>'sodes21'],['text'=>"سورة الحج",'callback_data'=>'sodes22']],
[['text'=>"سورة المؤمنون",'callback_data'=>'sodes23'],['text'=>"سورة النور",'callback_data'=>'sodes24']],
[['text'=>"سورة الفرقان",'callback_data'=>'sodes25'],['text'=>"سورة الشعراء",'callback_data'=>'sode26']],
[['text'=>"سورة النمل",'callback_data'=>'sodes27'],['text'=>"سورة القصص",'callback_data'=>'sodes28']],
[['text'=>"سورة العنكبوت",'callback_data'=>'sodes29'],['text'=>" سورة الروم",'callback_data'=>'sodes30']],
[['text'=>"سورة لقمان",'callback_data'=>'sodes31'],['text'=>"سورة السجده",'callback_data'=>'sodes32']],
[['text'=>"سورة الاحزاب",'callback_data'=>'sodes33'],['text'=>"سورة سبا",'callback_data'=>'sodes34']],
[['text'=>"سورة فاطر",'callback_data'=>'sodes35'],['text'=>"سورة يس",'callback_data'=>'sodes36']],
[['text'=>"سورة الصافات",'callback_data'=>'sodes37'],['text'=>"سورة ص",'callback_data'=>'sodes38']],
[['text'=>" سورة الزمر",'callback_data'=>'sodes39'],['text'=>"سورة غافر",'callback_data'=>'sodes40']],
[['text'=>"سورة فصلت",'callback_data'=>'sodes41'],['text'=>"سورة الشورى",'callback_data'=>'sodes42']],
[['text'=>"سورة الزخرف",'callback_data'=>'sodes43'],['text'=>"سورة الدخان",'callback_data'=>'sodes44']],
[['text'=>"سورة الجاثيه",'callback_data'=>'sodes45'],['text'=>"سورة الاحقاف",'callback_data'=>'sodes46']],
[['text'=>"سورة محمد",'callback_data'=>'sodes47'],['text'=>"سورة الفتح",'callback_data'=>'sodes48']],
[['text'=>" سورة الحجرات",'callback_data'=>'sodes49'],['text'=>" سورة ق",'callback_data'=>'sodes50']],
[['text'=>"سورة الذريات",'callback_data'=>'sodes51'],['text'=>"سورة الطور",'callback_data'=>'sodes52']],
[['text'=>"سورة النجم",'callback_data'=>'sodes53'],['text'=>"سورة القمر",'callback_data'=>'sodes54']],
[['text'=>"سورة الرحمن",'callback_data'=>'sodes55'],['text'=>"سورة الواقعه",'callback_data'=>'sodes56']],
[['text'=>"سورة الحديد",'callback_data'=>'sodes57'],['text'=>"سورة المجادله",'callback_data'=>'sodes58']],
[['text'=>"سورة الحشر",'callback_data'=>'sodes59'],['text'=>" سورة الممتحنه",'callback_data'=>'sodes60']],
[['text'=>"𐂠ᯓالتالي𐂠ᯓ .",'callback_data'=>"sodesy2"]],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"deneyy"]],
]])]);}

if($data=="sodesy2"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"
قسم القرآن الكريم بصوت القاريء عبد الرحمن السديسي'

",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"سورة الصف",'callback_data'=>'sodes61']],
[['text'=>"سورة الجمعه",'callback_data'=>'sodes62'],['text'=>"سورة المنافقون",'callback_data'=>'sodes63']],
[['text'=>"سورة التغابن",'callback_data'=>'sodes64'],['text'=>"سورة الطلاق",'callback_data'=>'sodes65']],
[['text'=>"سورة التحريم",'callback_data'=>'sodes66'],['text'=>"سورة الملك",'callback_data'=>'sodes67']],
[['text'=>" سورة القلم",'callback_data'=>'sodes68'],['text'=>"سورة الحاقه",'callback_data'=>'sodes69']],
[['text'=>"سورة المعارج",'callback_data'=>'sodes70'],['text'=>"سورة نوح",'callback_data'=>'sodes71']],
[['text'=>"سورة الجن",'callback_data'=>'sodes72'],['text'=>"سورة المزمل",'callback_data'=>'sodes73']],
[['text'=>"سورة المدثر",'callback_data'=>'sodes74'],['text'=>"سورة القيامه",'callback_data'=>'sodes75']],
[['text'=>"سورة الانسان",'callback_data'=>'sodes76'],['text'=>"سورة المرسلات",'callback_data'=>'sodes77']],
[['text'=>" سورة النبا",'callback_data'=>'sodes78'],['text'=>" سورة النازعات",'callback_data'=>'sodes79']],
[['text'=>"سورة عبس",'callback_data'=>'sodes80'],['text'=>"سورة التكوير",'callback_data'=>'sodes81']],
[['text'=>"سورة الانفطار",'callback_data'=>'sodes82'],['text'=>"سورة المطففين",'callback_data'=>'sodes83']],
[['text'=>"سورة الانشقاق",'callback_data'=>'sodes84'],['text'=>"سورة البروج",'callback_data'=>'sodes85']],
[['text'=>"سورة الطارق",'callback_data'=>'sodes86'],['text'=>"سورة الاعلى",'callback_data'=>'sodes87']],
[['text'=>"سورة الغاشيه",'callback_data'=>'sodes88'],['text'=>" سورة الفجر",'callback_data'=>'sodes89']],
[['text'=>"سورة البلد",'callback_data'=>'sodes90'],['text'=>"سورة الشمس",'callback_data'=>'sodes91']],
[['text'=>"سورة الليل",'callback_data'=>'sodes92'],['text'=>"سورة الضحى",'callback_data'=>'sodes93']],
[['text'=>"سورة الشرح",'callback_data'=>'sodes94'],['text'=>"سورة التين",'callback_data'=>'sodes95']],
[['text'=>"سورة العلق",'callback_data'=>'sodes96'],['text'=>"سورة القدر",'callback_data'=>'sodes97']],
[['text'=>" سورة البينه",'callback_data'=>'sodes98'],['text'=>"سورة الزلزله",'callback_data'=>'sodes99']],
[['text'=>"سورة العاديات",'callback_data'=>'sodes100'],['text'=>"سورة القارعه",'callback_data'=>'sodes101']],
[['text'=>"سورة التكاثر",'callback_data'=>'sodes102'],['text'=>"سورة العصر",'callback_data'=>'sodes103']],
[['text'=>"سورة الهمزه",'callback_data'=>'sodes104'],['text'=>"سورة الفيل",'callback_data'=>'sodes105']],
[['text'=>"سورة قريش",'callback_data'=>'sodes106'],['text'=>"سورة الماعون",'callback_data'=>'sodes107']],
[['text'=>" سورة الكوثر",'callback_data'=>'sodes108'],['text'=>" سورة الكافرون",'callback_data'=>'sodes109']],
[['text'=>"سورة النصر",'callback_data'=>'sodes110'],['text'=>"سورة المسد",'callback_data'=>'sodes111']],
[['text'=>"سورة الاخلاص",'callback_data'=>'sodes112'],['text'=>"سورة الفلق",'callback_data'=>'sodes113']],
[['text'=>"سورة الناس",'callback_data'=>'sodes114']],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"deneyy"]],
]])]);}

if($data == "sodes1"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/2",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes2"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/3",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes3"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/4",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes4"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/5",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes5"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/6",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes6"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/7",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes7"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/8",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes8"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/9",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes9"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/10",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes10"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/11",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes11"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/12",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes12"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/13",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes13"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/14",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes14"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/15",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes15"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/16",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes16"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/17",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes17"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/18",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes18"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/19",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes19"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/20",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes20"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/21",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes21"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/22",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes22"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/23",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes23"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/24",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes24"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/25",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes25"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/26",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes26"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/27",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes27"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/28",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes28"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/29",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes29"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/30",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes30"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/31",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes31"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/32",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes32"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/33",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes33"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/34",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes34"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/35",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes35"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/36",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes36"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/37",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes37"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/38",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes38"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/39",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes39"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/40",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes40"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/41",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes41"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/42",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes42"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/43",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes43"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/44",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes44"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/45",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes45"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/46",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes46"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/47",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes47"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/48",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes48"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/49",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes49"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/50",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes50"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/51",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes51"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/52",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes52"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/53",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes53"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/54",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes54"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/55",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes55"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/56",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes56"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/57",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes57"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/58",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes58"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/59",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes59"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/60",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes60"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/61",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes61"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/62",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes62"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/63",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes63"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/64",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes64"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/65",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes65"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/66",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes66"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/67",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes67"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/68",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes68"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/69",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes69"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/70",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes70"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/71",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes71"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/72",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes72"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/73",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes73"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/74",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes74"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/75",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes75"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/76",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes76"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/77",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes77"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/78",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes78"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/79",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes79"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/80",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes80"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/81",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes81"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/82",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes82"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/83",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes83"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/84",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes84"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/85",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes85"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/86",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes86"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/87",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes87"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/88",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes88"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/89",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes89"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/90",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes90"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/91",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes91"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/92",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes92"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/93",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes93"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/94",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes94"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/95",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes95"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/96",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes96"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/97",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes97"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/98",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes98"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/99",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes99"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/100",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes100"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/101",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes101"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/102",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes102"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/103",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes103"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/104",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes104"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/105",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes105"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/106",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes106"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/107",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes107"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/108",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes108"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/109",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes109"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/110",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes110"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/111",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes111"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/112",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes112"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/113",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes113"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/114",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sodes114"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sodesye/115",
reply_to_message_id =>$message->message_id, 
]);}
/*
نهاية الشيخ عبد الرحمن السديسي
*/

// الشيخ احمد العجمي 

if($data=="agmy"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"
قسم القرآن الكريم بصوت القاريء أحمد العجمي'

",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"سورة الفاتحه",'callback_data'=>'agmy1'],['text'=>"سورة البقره",'callback_data'=>'agmy2']],
[['text'=>"سورة ال عمران",'callback_data'=>'agmy3'],['text'=>"سورة النساء",'callback_data'=>'agmy4']],
[['text'=>"سورة المائده",'callback_data'=>'agmy5'],['text'=>"سورة الانعام",'callback_data'=>'agmy6']],
[['text'=>"سورة الاعراف",'callback_data'=>'agmy7'],['text'=>"سورة الانفال",'callback_data'=>'agmy8']],
[['text'=>" سورة التوبه",'callback_data'=>'agmy9'],['text'=>"سورة يونس",'callback_data'=>'agmy10']],
[['text'=>"سورة هود",'callback_data'=>'agmy12'],['text'=>"سورة يوسف",'callback_data'=>'agmy12']],
[['text'=>"سورة الرعد",'callback_data'=>'agmy13'],['text'=>"سورة ابراهيم",'callback_data'=>'agmy14']],
[['text'=>"سورة الحجر",'callback_data'=>'agmy15'],['text'=>"سورة النحل",'callback_data'=>'agmy16']],
[['text'=>"سورة الاسراء",'callback_data'=>'agmy17'],['text'=>"سورة الكهف",'callback_data'=>'agmy18']],
[['text'=>" سورة مريم",'callback_data'=>'agmy19'],['text'=>" سورة طه",'callback_data'=>'agmy20']],
[['text'=>"سورة الانبياء",'callback_data'=>'agmy21'],['text'=>"سورة الحج",'callback_data'=>'agmy22']],
[['text'=>"سورة المؤمنون",'callback_data'=>'agmy23'],['text'=>"سورة النور",'callback_data'=>'agmy24']],
[['text'=>"سورة الفرقان",'callback_data'=>'agmy25'],['text'=>"سورة الشعراء",'callback_data'=>'sode26']],
[['text'=>"سورة النمل",'callback_data'=>'agmy27'],['text'=>"سورة القصص",'callback_data'=>'agmy28']],
[['text'=>"سورة العنكبوت",'callback_data'=>'agmy29'],['text'=>" سورة الروم",'callback_data'=>'agmy30']],
[['text'=>"سورة لقمان",'callback_data'=>'agmy31'],['text'=>"سورة السجده",'callback_data'=>'agmy32']],
[['text'=>"سورة الاحزاب",'callback_data'=>'agmy33'],['text'=>"سورة سبا",'callback_data'=>'agmy34']],
[['text'=>"سورة فاطر",'callback_data'=>'agmy35'],['text'=>"سورة يس",'callback_data'=>'agmy36']],
[['text'=>"سورة الصافات",'callback_data'=>'agmy37'],['text'=>"سورة ص",'callback_data'=>'agmy38']],
[['text'=>" سورة الزمر",'callback_data'=>'agmy39'],['text'=>"سورة غافر",'callback_data'=>'agmy40']],
[['text'=>"سورة فصلت",'callback_data'=>'agmy41'],['text'=>"سورة الشورى",'callback_data'=>'agmy42']],
[['text'=>"سورة الزخرف",'callback_data'=>'agmy43'],['text'=>"سورة الدخان",'callback_data'=>'agmy44']],
[['text'=>"سورة الجاثيه",'callback_data'=>'agmy45'],['text'=>"سورة الاحقاف",'callback_data'=>'agmy46']],
[['text'=>"سورة محمد",'callback_data'=>'agmy47'],['text'=>"سورة الفتح",'callback_data'=>'agmy48']],
[['text'=>" سورة الحجرات",'callback_data'=>'agmy49'],['text'=>" سورة ق",'callback_data'=>'agmy50']],
[['text'=>"سورة الذريات",'callback_data'=>'agmy51'],['text'=>"سورة الطور",'callback_data'=>'agmy52']],
[['text'=>"سورة النجم",'callback_data'=>'agmy53'],['text'=>"سورة القمر",'callback_data'=>'agmy54']],
[['text'=>"سورة الرحمن",'callback_data'=>'agmy55'],['text'=>"سورة الواقعه",'callback_data'=>'agmy56']],
[['text'=>"سورة الحديد",'callback_data'=>'agmy57'],['text'=>"سورة المجادله",'callback_data'=>'agmy58']],
[['text'=>"سورة الحشر",'callback_data'=>'agmy59'],['text'=>" سورة الممتحنه",'callback_data'=>'agmy60']],
[['text'=>"𐂠ᯓالتالي𐂠ᯓ .",'callback_data'=>"agmyy2"]],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"deneyy"]],
]])]);}

if($data=="agmyy2"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"
قسم القرآن الكريم بصوت القاريء أحمد العجمي'

",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"سورة الصف",'callback_data'=>'agmy61']],
[['text'=>"سورة الجمعه",'callback_data'=>'agmy62'],['text'=>"سورة المنافقون",'callback_data'=>'agmy63']],
[['text'=>"سورة التغابن",'callback_data'=>'agmy64'],['text'=>"سورة الطلاق",'callback_data'=>'agmy65']],
[['text'=>"سورة التحريم",'callback_data'=>'agmy66'],['text'=>"سورة الملك",'callback_data'=>'agmy67']],
[['text'=>" سورة القلم",'callback_data'=>'agmy68'],['text'=>"سورة الحاقه",'callback_data'=>'agmy69']],
[['text'=>"سورة المعارج",'callback_data'=>'agmy70'],['text'=>"سورة نوح",'callback_data'=>'agmy71']],
[['text'=>"سورة الجن",'callback_data'=>'agmy72'],['text'=>"سورة المزمل",'callback_data'=>'agmy73']],
[['text'=>"سورة المدثر",'callback_data'=>'agmy74'],['text'=>"سورة القيامه",'callback_data'=>'agmy75']],
[['text'=>"سورة الانسان",'callback_data'=>'agmy76'],['text'=>"سورة المرسلات",'callback_data'=>'agmy77']],
[['text'=>" سورة النبا",'callback_data'=>'agmy78'],['text'=>" سورة النازعات",'callback_data'=>'agmy79']],
[['text'=>"سورة عبس",'callback_data'=>'agmy80'],['text'=>"سورة التكوير",'callback_data'=>'agmy81']],
[['text'=>"سورة الانفطار",'callback_data'=>'agmy82'],['text'=>"سورة المطففين",'callback_data'=>'agmy83']],
[['text'=>"سورة الانشقاق",'callback_data'=>'agmy84'],['text'=>"سورة البروج",'callback_data'=>'agmy85']],
[['text'=>"سورة الطارق",'callback_data'=>'agmy86'],['text'=>"سورة الاعلى",'callback_data'=>'agmy87']],
[['text'=>"سورة الغاشيه",'callback_data'=>'agmy88'],['text'=>" سورة الفجر",'callback_data'=>'agmy89']],
[['text'=>"سورة البلد",'callback_data'=>'agmy90'],['text'=>"سورة الشمس",'callback_data'=>'agmy91']],
[['text'=>"سورة الليل",'callback_data'=>'agmy92'],['text'=>"سورة الضحى",'callback_data'=>'agmy93']],
[['text'=>"سورة الشرح",'callback_data'=>'agmy94'],['text'=>"سورة التين",'callback_data'=>'agmy95']],
[['text'=>"سورة العلق",'callback_data'=>'agmy96'],['text'=>"سورة القدر",'callback_data'=>'agmy97']],
[['text'=>" سورة البينه",'callback_data'=>'agmy98'],['text'=>"سورة الزلزله",'callback_data'=>'agmy99']],
[['text'=>"سورة العاديات",'callback_data'=>'agmy100'],['text'=>"سورة القارعه",'callback_data'=>'agmy101']],
[['text'=>"سورة التكاثر",'callback_data'=>'agmy102'],['text'=>"سورة العصر",'callback_data'=>'agmy103']],
[['text'=>"سورة الهمزه",'callback_data'=>'agmy104'],['text'=>"سورة الفيل",'callback_data'=>'agmy105']],
[['text'=>"سورة قريش",'callback_data'=>'agmy106'],['text'=>"سورة الماعون",'callback_data'=>'agmy107']],
[['text'=>" سورة الكوثر",'callback_data'=>'agmy108'],['text'=>" سورة الكافرون",'callback_data'=>'agmy109']],
[['text'=>"سورة النصر",'callback_data'=>'agmy110'],['text'=>"سورة المسد",'callback_data'=>'agmy111']],
[['text'=>"سورة الاخلاص",'callback_data'=>'agmy112'],['text'=>"سورة الفلق",'callback_data'=>'agmy113']],
[['text'=>"سورة الناس",'callback_data'=>'agmy114']],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"deneyy"]],
]])]);}
//تنفيذ احمد العجمي 

if($data == "agmy1"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/2",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy2"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/3",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy3"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/4",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy4"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/5",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy5"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/6",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy6"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/7",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy7"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/8",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy8"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/9",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy9"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/10",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy10"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/11",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy11"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/12",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy12"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/13",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy13"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/16",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy14"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/14",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy15"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/15",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy16"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/17",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy17"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/18",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy18"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/19",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy19"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/20",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy20"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/21",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy21"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/22",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy22"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/23",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy23"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/24",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy24"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/25",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy25"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/26",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy26"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/27",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy27"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/28",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy28"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/29",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy29"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/30",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy30"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/31",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy31"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/32",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy32"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/33",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy33"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/34",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy34"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/35",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy35"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/36",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy36"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/37",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy37"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/38",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy38"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/39",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy39"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/40",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy40"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/41",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy41"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/42",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy42"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/43",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy43"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/44",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy44"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/45",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy45"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/46",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy46"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/47",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy47"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/48",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy48"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/49",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy49"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/50",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy50"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/51",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy51"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/52",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy52"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/53",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy53"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/54",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy54"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/55",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy55"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/56",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy56"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/57",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy57"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/58",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy58"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/59",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy59"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/60",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy60"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/61",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy61"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/62",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy62"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/63",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy63"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/64",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy64"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/65",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy65"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/66",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy66"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/67",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy67"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/68",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy68"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/69",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy69"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/70",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy70"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/71",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy71"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/72",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy72"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/73",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy73"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/74",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy74"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/75",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy75"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/76",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy76"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/77",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy77"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/78",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy78"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/79",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy79"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/80",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy80"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/81",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy81"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/82",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy82"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/83",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy83"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/84",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy84"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/85",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy85"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/86",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy86"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/87",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy87"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/88",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy88"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/89",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy89"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/90",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy90"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/91",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy91"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/92",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy92"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/93",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy93"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/94",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy94"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/95",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy95"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/96",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy96"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/97",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy97"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/98",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy98"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/99",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy99"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/100",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy100"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/101",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy101"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/102",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy102"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/103",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy103"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/104",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy104"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/105",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy105"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/106",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy106"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/107",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy107"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/108",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy108"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/109",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy109"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/110",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy110"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/111",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy111"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/112",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy112"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/113",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy113"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/114",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "agmy114"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/agamyyq/115",
reply_to_message_id =>$message->message_id, 
]);}

/*
نهاية الشيخ احمد العجمي 
*/

//الشيخ ماهر المعيقلي

if($data=="meaqly"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"
قسم القرآن الكريم بصوت القاريء ماهر المعيقلي'
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"سورة الفاتحه",'callback_data'=>'meaqly1'],['text'=>"سورة البقره",'callback_data'=>'meaqly2']],
[['text'=>"سورة ال عمران",'callback_data'=>'meaqly3'],['text'=>"سورة النساء",'callback_data'=>'meaqly4']],
[['text'=>"سورة المائده",'callback_data'=>'meaqly5'],['text'=>"سورة الانعام",'callback_data'=>'meaqly6']],
[['text'=>"سورة الاعراف",'callback_data'=>'meaqly7'],['text'=>"سورة الانفال",'callback_data'=>'meaqly8']],
[['text'=>" سورة التوبه",'callback_data'=>'meaqly9'],['text'=>"سورة يونس",'callback_data'=>'meaqly10']],
[['text'=>"سورة هود",'callback_data'=>'meaqly12'],['text'=>"سورة يوسف",'callback_data'=>'meaqly12']],
[['text'=>"سورة الرعد",'callback_data'=>'meaqly13'],['text'=>"سورة ابراهيم",'callback_data'=>'meaqly14']],
[['text'=>"سورة الحجر",'callback_data'=>'meaqly15'],['text'=>"سورة النحل",'callback_data'=>'meaqly16']],
[['text'=>"سورة الاسراء",'callback_data'=>'meaqly17'],['text'=>"سورة الكهف",'callback_data'=>'meaqly18']],
[['text'=>" سورة مريم",'callback_data'=>'meaqly19'],['text'=>" سورة طه",'callback_data'=>'meaqly20']],
[['text'=>"سورة الانبياء",'callback_data'=>'meaqly21'],['text'=>"سورة الحج",'callback_data'=>'meaqly22']],
[['text'=>"سورة المؤمنون",'callback_data'=>'meaqly23'],['text'=>"سورة النور",'callback_data'=>'meaqly24']],
[['text'=>"سورة الفرقان",'callback_data'=>'meaqly25'],['text'=>"سورة الشعراء",'callback_data'=>'sode26']],
[['text'=>"سورة النمل",'callback_data'=>'meaqly27'],['text'=>"سورة القصص",'callback_data'=>'meaqly28']],
[['text'=>"سورة العنكبوت",'callback_data'=>'meaqly29'],['text'=>" سورة الروم",'callback_data'=>'meaqly30']],
[['text'=>"سورة لقمان",'callback_data'=>'meaqly31'],['text'=>"سورة السجده",'callback_data'=>'meaqly32']],
[['text'=>"سورة الاحزاب",'callback_data'=>'meaqly33'],['text'=>"سورة سبا",'callback_data'=>'meaqly34']],
[['text'=>"سورة فاطر",'callback_data'=>'meaqly35'],['text'=>"سورة يس",'callback_data'=>'meaqly36']],
[['text'=>"سورة الصافات",'callback_data'=>'meaqly37'],['text'=>"سورة ص",'callback_data'=>'meaqly38']],
[['text'=>" سورة الزمر",'callback_data'=>'meaqly39'],['text'=>"سورة غافر",'callback_data'=>'meaqly40']],
[['text'=>"سورة فصلت",'callback_data'=>'meaqly41'],['text'=>"سورة الشورى",'callback_data'=>'meaqly42']],
[['text'=>"سورة الزخرف",'callback_data'=>'meaqly43'],['text'=>"سورة الدخان",'callback_data'=>'meaqly44']],
[['text'=>"سورة الجاثيه",'callback_data'=>'meaqly45'],['text'=>"سورة الاحقاف",'callback_data'=>'meaqly46']],
[['text'=>"سورة محمد",'callback_data'=>'meaqly47'],['text'=>"سورة الفتح",'callback_data'=>'meaqly48']],
[['text'=>" سورة الحجرات",'callback_data'=>'meaqly49'],['text'=>" سورة ق",'callback_data'=>'meaqly50']],
[['text'=>"سورة الذريات",'callback_data'=>'meaqly51'],['text'=>"سورة الطور",'callback_data'=>'meaqly52']],
[['text'=>"سورة النجم",'callback_data'=>'meaqly53'],['text'=>"سورة القمر",'callback_data'=>'meaqly54']],
[['text'=>"سورة الرحمن",'callback_data'=>'meaqly55'],['text'=>"سورة الواقعه",'callback_data'=>'meaqly56']],
[['text'=>"سورة الحديد",'callback_data'=>'meaqly57'],['text'=>"سورة المجادله",'callback_data'=>'meaqly58']],
[['text'=>"سورة الحشر",'callback_data'=>'meaqly59'],['text'=>" سورة الممتحنه",'callback_data'=>'meaqly60']],
[['text'=>"𐂠ᯓالتالي𐂠ᯓ .",'callback_data'=>"meaqlyy2"]],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"deneyy"]],
]])]);}

if($data=="meaqlyy2"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"
قسم القرآن الكريم بصوت القاريء ماهر المعيقلي'
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"سورة الصف",'callback_data'=>'meaqly61']],
[['text'=>"سورة الجمعه",'callback_data'=>'meaqly62'],['text'=>"سورة المنافقون",'callback_data'=>'meaqly63']],
[['text'=>"سورة التغابن",'callback_data'=>'meaqly64'],['text'=>"سورة الطلاق",'callback_data'=>'meaqly65']],
[['text'=>"سورة التحريم",'callback_data'=>'meaqly66'],['text'=>"سورة الملك",'callback_data'=>'meaqly67']],
[['text'=>" سورة القلم",'callback_data'=>'meaqly68'],['text'=>"سورة الحاقه",'callback_data'=>'meaqly69']],
[['text'=>"سورة المعارج",'callback_data'=>'meaqly70'],['text'=>"سورة نوح",'callback_data'=>'meaqly71']],
[['text'=>"سورة الجن",'callback_data'=>'meaqly72'],['text'=>"سورة المزمل",'callback_data'=>'meaqly73']],
[['text'=>"سورة المدثر",'callback_data'=>'meaqly74'],['text'=>"سورة القيامه",'callback_data'=>'meaqly75']],
[['text'=>"سورة الانسان",'callback_data'=>'meaqly76'],['text'=>"سورة المرسلات",'callback_data'=>'meaqly77']],
[['text'=>" سورة النبا",'callback_data'=>'meaqly78'],['text'=>" سورة النازعات",'callback_data'=>'meaqly79']],
[['text'=>"سورة عبس",'callback_data'=>'meaqly80'],['text'=>"سورة التكوير",'callback_data'=>'meaqly81']],
[['text'=>"سورة الانفطار",'callback_data'=>'meaqly82'],['text'=>"سورة المطففين",'callback_data'=>'meaqly83']],
[['text'=>"سورة الانشقاق",'callback_data'=>'meaqly84'],['text'=>"سورة البروج",'callback_data'=>'meaqly85']],
[['text'=>"سورة الطارق",'callback_data'=>'meaqly86'],['text'=>"سورة الاعلى",'callback_data'=>'meaqly87']],
[['text'=>"سورة الغاشيه",'callback_data'=>'meaqly88'],['text'=>" سورة الفجر",'callback_data'=>'meaqly89']],
[['text'=>"سورة البلد",'callback_data'=>'meaqly90'],['text'=>"سورة الشمس",'callback_data'=>'meaqly91']],
[['text'=>"سورة الليل",'callback_data'=>'meaqly92'],['text'=>"سورة الضحى",'callback_data'=>'meaqly93']],
[['text'=>"سورة الشرح",'callback_data'=>'meaqly94'],['text'=>"سورة التين",'callback_data'=>'meaqly95']],
[['text'=>"سورة العلق",'callback_data'=>'meaqly96'],['text'=>"سورة القدر",'callback_data'=>'meaqly97']],
[['text'=>" سورة البينه",'callback_data'=>'meaqly98'],['text'=>"سورة الزلزله",'callback_data'=>'meaqly99']],
[['text'=>"سورة العاديات",'callback_data'=>'meaqly100'],['text'=>"سورة القارعه",'callback_data'=>'meaqly101']],
[['text'=>"سورة التكاثر",'callback_data'=>'meaqly102'],['text'=>"سورة العصر",'callback_data'=>'meaqly103']],
[['text'=>"سورة الهمزه",'callback_data'=>'meaqly104'],['text'=>"سورة الفيل",'callback_data'=>'meaqly105']],
[['text'=>"سورة قريش",'callback_data'=>'meaqly106'],['text'=>"سورة الماعون",'callback_data'=>'meaqly107']],
[['text'=>" سورة الكوثر",'callback_data'=>'meaqly108'],['text'=>" سورة الكافرون",'callback_data'=>'meaqly109']],
[['text'=>"سورة النصر",'callback_data'=>'meaqly110'],['text'=>"سورة المسد",'callback_data'=>'meaqly111']],
[['text'=>"سورة الاخلاص",'callback_data'=>'meaqly112'],['text'=>"سورة الفلق",'callback_data'=>'meaqly113']],
[['text'=>"سورة الناس",'callback_data'=>'meaqly114']],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"deneyy"]],
]])]);}
//تنفيذ ماهر المعيقلي

if($data == "meaqly1"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/2",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly2"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/3",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly3"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/4",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly4"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/5",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly5"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/6",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly6"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/7",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly7"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/8",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly8"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/9",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly9"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/10",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly10"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/11",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly11"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/12",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly12"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/13",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly13"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/14",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly14"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/15",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly15"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/16",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly16"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/17",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly17"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/18",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly18"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/19",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly19"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/20",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly20"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/21",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly21"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/22",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly22"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/23",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly23"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/24",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly24"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/25",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly25"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/26",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly26"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/27",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly27"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/28",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly28"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/29",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly29"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/30",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly30"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/31",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly31"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/32",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly32"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/33",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly33"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/34",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly34"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/35",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly35"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/36",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly36"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/37",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly37"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/38",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly38"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/39",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly39"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/40",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly40"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/41",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly41"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/42",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly42"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/43",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly43"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/44",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly44"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/45",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly45"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/46",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly46"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/47",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly47"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/48",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly48"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/49",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly49"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/50",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly50"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/51",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly51"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/52",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly52"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/53",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly53"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/54",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly54"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/55",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly55"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/56",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly56"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/57",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly57"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/58",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly58"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/59",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly59"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/60",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly60"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/61",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly61"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/62",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly62"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/63",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly63"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/64",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly64"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/65",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly65"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/66",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly66"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/67",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly67"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/68",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly68"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/69",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly69"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/70",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly70"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/71",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly71"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/72",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly72"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/73",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly73"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/74",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly74"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/75",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly75"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/76",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly76"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/77",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly77"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/78",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly78"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/79",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly79"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/80",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly80"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/81",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly81"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/82",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly82"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/83",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly83"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/84",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly84"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/85",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly85"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/86",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly86"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/87",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly87"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/88",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly88"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/89",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly89"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/90",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly90"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/91",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly91"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/92",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly92"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/93",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly93"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/94",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly94"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/95",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly95"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/96",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly96"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/97",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly97"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/98",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly98"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/99",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly99"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/100",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly100"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/101",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly101"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/102",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly102"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/103",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly103"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/104",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly104"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/105",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly105"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/106",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly106"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/107",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly107"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/108",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly108"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/109",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly109"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/110",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly110"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/111",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly111"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/112",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly112"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/113",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly113"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/114",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "meaqly114"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mahermekly/115",
reply_to_message_id =>$message->message_id, 
]);}

/*

نهاية ماهر المعيقلي

*/

//الشيخ ياسر الدوسري

if($data=="dosry"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"
قسم القرآن الكريم بصوت القاريء ياسر الدوسري'
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"سورة الفاتحه",'callback_data'=>'dosry1'],['text'=>"سورة البقره",'callback_data'=>'dosry2']],
[['text'=>"سورة ال عمران",'callback_data'=>'dosry3'],['text'=>"سورة النساء",'callback_data'=>'dosry4']],
[['text'=>"سورة المائده",'callback_data'=>'dosry5'],['text'=>"سورة الانعام",'callback_data'=>'dosry6']],
[['text'=>"سورة الاعراف",'callback_data'=>'dosry7'],['text'=>"سورة الانفال",'callback_data'=>'dosry8']],
[['text'=>" سورة التوبه",'callback_data'=>'dosry9'],['text'=>"سورة يونس",'callback_data'=>'dosry10']],
[['text'=>"سورة هود",'callback_data'=>'dosry12'],['text'=>"سورة يوسف",'callback_data'=>'dosry12']],
[['text'=>"سورة الرعد",'callback_data'=>'dosry13'],['text'=>"سورة ابراهيم",'callback_data'=>'dosry14']],
[['text'=>"سورة الحجر",'callback_data'=>'dosry15'],['text'=>"سورة النحل",'callback_data'=>'dosry16']],
[['text'=>"سورة الاسراء",'callback_data'=>'dosry17'],['text'=>"سورة الكهف",'callback_data'=>'dosry18']],
[['text'=>" سورة مريم",'callback_data'=>'dosry19'],['text'=>" سورة طه",'callback_data'=>'dosry20']],
[['text'=>"سورة الانبياء",'callback_data'=>'dosry21'],['text'=>"سورة الحج",'callback_data'=>'dosry22']],
[['text'=>"سورة المؤمنون",'callback_data'=>'dosry23'],['text'=>"سورة النور",'callback_data'=>'dosry24']],
[['text'=>"سورة الفرقان",'callback_data'=>'dosry25'],['text'=>"سورة الشعراء",'callback_data'=>'sode26']],
[['text'=>"سورة النمل",'callback_data'=>'dosry27'],['text'=>"سورة القصص",'callback_data'=>'dosry28']],
[['text'=>"سورة العنكبوت",'callback_data'=>'dosry29'],['text'=>" سورة الروم",'callback_data'=>'dosry30']],
[['text'=>"سورة لقمان",'callback_data'=>'dosry31'],['text'=>"سورة السجده",'callback_data'=>'dosry32']],
[['text'=>"سورة الاحزاب",'callback_data'=>'dosry33'],['text'=>"سورة سبا",'callback_data'=>'dosry34']],
[['text'=>"سورة فاطر",'callback_data'=>'dosry35'],['text'=>"سورة يس",'callback_data'=>'dosry36']],
[['text'=>"سورة الصافات",'callback_data'=>'dosry37'],['text'=>"سورة ص",'callback_data'=>'dosry38']],
[['text'=>" سورة الزمر",'callback_data'=>'dosry39'],['text'=>"سورة غافر",'callback_data'=>'dosry40']],
[['text'=>"سورة فصلت",'callback_data'=>'dosry41'],['text'=>"سورة الشورى",'callback_data'=>'dosry42']],
[['text'=>"سورة الزخرف",'callback_data'=>'dosry43'],['text'=>"سورة الدخان",'callback_data'=>'dosry44']],
[['text'=>"سورة الجاثيه",'callback_data'=>'dosry45'],['text'=>"سورة الاحقاف",'callback_data'=>'dosry46']],
[['text'=>"سورة محمد",'callback_data'=>'dosry47'],['text'=>"سورة الفتح",'callback_data'=>'dosry48']],
[['text'=>" سورة الحجرات",'callback_data'=>'dosry49'],['text'=>" سورة ق",'callback_data'=>'dosry50']],
[['text'=>"سورة الذريات",'callback_data'=>'dosry51'],['text'=>"سورة الطور",'callback_data'=>'dosry52']],
[['text'=>"سورة النجم",'callback_data'=>'dosry53'],['text'=>"سورة القمر",'callback_data'=>'dosry54']],
[['text'=>"سورة الرحمن",'callback_data'=>'dosry55'],['text'=>"سورة الواقعه",'callback_data'=>'dosry56']],
[['text'=>"سورة الحديد",'callback_data'=>'dosry57'],['text'=>"سورة المجادله",'callback_data'=>'dosry58']],
[['text'=>"سورة الحشر",'callback_data'=>'dosry59'],['text'=>" سورة الممتحنه",'callback_data'=>'dosry60']],
[['text'=>"𐂠ᯓالتالي𐂠ᯓ .",'callback_data'=>"dosryy2"]],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"deneyy"]],
]])]);}

if($data=="dosryy2"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"
قسم القرآن الكريم بصوت القاريء ياسر الدوسري'



",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"سورة الصف",'callback_data'=>'dosry61']],
[['text'=>"سورة الجمعه",'callback_data'=>'dosry62'],['text'=>"سورة المنافقون",'callback_data'=>'dosry63']],
[['text'=>"سورة التغابن",'callback_data'=>'dosry64'],['text'=>"سورة الطلاق",'callback_data'=>'dosry65']],
[['text'=>"سورة التحريم",'callback_data'=>'dosry66'],['text'=>"سورة الملك",'callback_data'=>'dosry67']],
[['text'=>" سورة القلم",'callback_data'=>'dosry68'],['text'=>"سورة الحاقه",'callback_data'=>'dosry69']],
[['text'=>"سورة المعارج",'callback_data'=>'dosry70'],['text'=>"سورة نوح",'callback_data'=>'dosry71']],
[['text'=>"سورة الجن",'callback_data'=>'dosry72'],['text'=>"سورة المزمل",'callback_data'=>'dosry73']],
[['text'=>"سورة المدثر",'callback_data'=>'dosry74'],['text'=>"سورة القيامه",'callback_data'=>'dosry75']],
[['text'=>"سورة الانسان",'callback_data'=>'dosry76'],['text'=>"سورة المرسلات",'callback_data'=>'dosry77']],
[['text'=>" سورة النبا",'callback_data'=>'dosry78'],['text'=>" سورة النازعات",'callback_data'=>'dosry79']],
[['text'=>"سورة عبس",'callback_data'=>'dosry80'],['text'=>"سورة التكوير",'callback_data'=>'dosry81']],
[['text'=>"سورة الانفطار",'callback_data'=>'dosry82'],['text'=>"سورة المطففين",'callback_data'=>'dosry83']],
[['text'=>"سورة الانشقاق",'callback_data'=>'dosry84'],['text'=>"سورة البروج",'callback_data'=>'dosry85']],
[['text'=>"سورة الطارق",'callback_data'=>'dosry86'],['text'=>"سورة الاعلى",'callback_data'=>'dosry87']],
[['text'=>"سورة الغاشيه",'callback_data'=>'dosry88'],['text'=>" سورة الفجر",'callback_data'=>'dosry89']],
[['text'=>"سورة البلد",'callback_data'=>'dosry90'],['text'=>"سورة الشمس",'callback_data'=>'dosry91']],
[['text'=>"سورة الليل",'callback_data'=>'dosry92'],['text'=>"سورة الضحى",'callback_data'=>'dosry93']],
[['text'=>"سورة الشرح",'callback_data'=>'dosry94'],['text'=>"سورة التين",'callback_data'=>'dosry95']],
[['text'=>"سورة العلق",'callback_data'=>'dosry96'],['text'=>"سورة القدر",'callback_data'=>'dosry97']],
[['text'=>" سورة البينه",'callback_data'=>'dosry98'],['text'=>"سورة الزلزله",'callback_data'=>'dosry99']],
[['text'=>"سورة العاديات",'callback_data'=>'dosry100'],['text'=>"سورة القارعه",'callback_data'=>'dosry101']],
[['text'=>"سورة التكاثر",'callback_data'=>'dosry102'],['text'=>"سورة العصر",'callback_data'=>'dosry103']],
[['text'=>"سورة الهمزه",'callback_data'=>'dosry104'],['text'=>"سورة الفيل",'callback_data'=>'dosry105']],
[['text'=>"سورة قريش",'callback_data'=>'dosry106'],['text'=>"سورة الماعون",'callback_data'=>'dosry107']],
[['text'=>" سورة الكوثر",'callback_data'=>'dosry108'],['text'=>" سورة الكافرون",'callback_data'=>'dosry109']],
[['text'=>"سورة النصر",'callback_data'=>'dosry110'],['text'=>"سورة المسد",'callback_data'=>'dosry111']],
[['text'=>"سورة الاخلاص",'callback_data'=>'dosry112'],['text'=>"سورة الفلق",'callback_data'=>'dosry113']],
[['text'=>"سورة الناس",'callback_data'=>'dosry114']],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"deneyy"]],
]])]);}

/* 
تنفيذ ياسر الدوسري
*/

if($data == "dosry1"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/2",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry2"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/3",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry3"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/4",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry4"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/5",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry5"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/6",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry6"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/7",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry7"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/8",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry8"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/9",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry9"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/10",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry10"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/11",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry11"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/12",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry12"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/13",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry13"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/14",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry14"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/15",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry15"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/16",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry16"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/17",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry17"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/18",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry18"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/19",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry19"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/20",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry20"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/21",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry21"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/22",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry22"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/23",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry23"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/24",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry24"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/25",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry25"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/26",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry26"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/27",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry27"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/28",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry28"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/29",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry29"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/30",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry30"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/31",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry31"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/32",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry32"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/33",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry33"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/34",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry34"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/35",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry35"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/36",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry36"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/37",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry37"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/38",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry38"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/39",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry39"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/40",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry40"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/41",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry41"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/42",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry42"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/43",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry43"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/44",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry44"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/45",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry45"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/46",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry46"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/47",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry47"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/48",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry48"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/49",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry49"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/50",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry50"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/51",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry51"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/52",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry52"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/53",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry53"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/54",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry54"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/55",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry55"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/56",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry56"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/57",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry57"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/58",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry58"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/59",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry59"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/60",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry60"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/61",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry61"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/62",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry62"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/63",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry63"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/64",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry64"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/65",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry65"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/66",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry66"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/67",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry67"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/68",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry68"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/69",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry69"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/70",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry70"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/71",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry71"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/72",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry72"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/73",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry73"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/74",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry74"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/75",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry75"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/76",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry76"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/77",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry77"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/78",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry78"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/79",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry79"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/80",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry80"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/81",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry81"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/82",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry82"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/83",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry83"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/84",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry84"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/85",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry85"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/86",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry86"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/87",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry87"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/88",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry88"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/89",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry89"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/90",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry90"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/91",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry91"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/92",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry92"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/93",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry93"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/94",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry94"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/95",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry95"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/96",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry96"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/97",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry97"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/98",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry98"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/99",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry99"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/100",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry100"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/101",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry101"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/102",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry102"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/103",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry103"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/104",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry104"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/105",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry105"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/106",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry106"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/107",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry107"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/108",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry108"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/109",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry109"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/110",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry110"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/111",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry111"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/112",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry112"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/113",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry113"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/114",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "dosry114"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/dosarye/115",
reply_to_message_id =>$message->message_id, 
]);}

/*
نهاية الشيخ ياسر الدوسري
*/

//الشيخ مشاري بن راشد العفاسي

if($data=="afasy"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"
قسم القرآن الكريم بصوت القاريء  مشاري بن راشد العفاسي'



",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"سورة الفاتحه",'callback_data'=>'afasy1'],['text'=>"سورة البقره",'callback_data'=>'afasy2']],
[['text'=>"سورة ال عمران",'callback_data'=>'afasy3'],['text'=>"سورة النساء",'callback_data'=>'afasy4']],
[['text'=>"سورة المائده",'callback_data'=>'afasy5'],['text'=>"سورة الانعام",'callback_data'=>'afasy6']],
[['text'=>"سورة الاعراف",'callback_data'=>'afasy7'],['text'=>"سورة الانفال",'callback_data'=>'afasy8']],
[['text'=>" سورة التوبه",'callback_data'=>'afasy9'],['text'=>"سورة يونس",'callback_data'=>'afasy10']],
[['text'=>"سورة هود",'callback_data'=>'afasy12'],['text'=>"سورة يوسف",'callback_data'=>'afasy12']],
[['text'=>"سورة الرعد",'callback_data'=>'afasy13'],['text'=>"سورة ابراهيم",'callback_data'=>'afasy14']],
[['text'=>"سورة الحجر",'callback_data'=>'afasy15'],['text'=>"سورة النحل",'callback_data'=>'afasy16']],
[['text'=>"سورة الاسراء",'callback_data'=>'afasy17'],['text'=>"سورة الكهف",'callback_data'=>'afasy18']],
[['text'=>" سورة مريم",'callback_data'=>'afasy19'],['text'=>" سورة طه",'callback_data'=>'afasy20']],
[['text'=>"سورة الانبياء",'callback_data'=>'afasy21'],['text'=>"سورة الحج",'callback_data'=>'afasy22']],
[['text'=>"سورة المؤمنون",'callback_data'=>'afasy23'],['text'=>"سورة النور",'callback_data'=>'afasy24']],
[['text'=>"سورة الفرقان",'callback_data'=>'afasy25'],['text'=>"سورة الشعراء",'callback_data'=>'sode26']],
[['text'=>"سورة النمل",'callback_data'=>'afasy27'],['text'=>"سورة القصص",'callback_data'=>'afasy28']],
[['text'=>"سورة العنكبوت",'callback_data'=>'afasy29'],['text'=>" سورة الروم",'callback_data'=>'afasy30']],
[['text'=>"سورة لقمان",'callback_data'=>'afasy31'],['text'=>"سورة السجده",'callback_data'=>'afasy32']],
[['text'=>"سورة الاحزاب",'callback_data'=>'afasy33'],['text'=>"سورة سبا",'callback_data'=>'afasy34']],
[['text'=>"سورة فاطر",'callback_data'=>'afasy35'],['text'=>"سورة يس",'callback_data'=>'afasy36']],
[['text'=>"سورة الصافات",'callback_data'=>'afasy37'],['text'=>"سورة ص",'callback_data'=>'afasy38']],
[['text'=>" سورة الزمر",'callback_data'=>'afasy39'],['text'=>"سورة غافر",'callback_data'=>'afasy40']],
[['text'=>"سورة فصلت",'callback_data'=>'afasy41'],['text'=>"سورة الشورى",'callback_data'=>'afasy42']],
[['text'=>"سورة الزخرف",'callback_data'=>'afasy43'],['text'=>"سورة الدخان",'callback_data'=>'afasy44']],
[['text'=>"سورة الجاثيه",'callback_data'=>'afasy45'],['text'=>"سورة الاحقاف",'callback_data'=>'afasy46']],
[['text'=>"سورة محمد",'callback_data'=>'afasy47'],['text'=>"سورة الفتح",'callback_data'=>'afasy48']],
[['text'=>" سورة الحجرات",'callback_data'=>'afasy49'],['text'=>" سورة ق",'callback_data'=>'afasy50']],
[['text'=>"سورة الذريات",'callback_data'=>'afasy51'],['text'=>"سورة الطور",'callback_data'=>'afasy52']],
[['text'=>"سورة النجم",'callback_data'=>'afasy53'],['text'=>"سورة القمر",'callback_data'=>'afasy54']],
[['text'=>"سورة الرحمن",'callback_data'=>'afasy55'],['text'=>"سورة الواقعه",'callback_data'=>'afasy56']],
[['text'=>"سورة الحديد",'callback_data'=>'afasy57'],['text'=>"سورة المجادله",'callback_data'=>'afasy58']],
[['text'=>"سورة الحشر",'callback_data'=>'afasy59'],['text'=>" سورة الممتحنه",'callback_data'=>'afasy60']],
[['text'=>"𐂠ᯓالتالي𐂠ᯓ .",'callback_data'=>"afasyy2"]],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"deneyy"]],
]])]);}

if($data=="afasyy2"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"
قسم القرآن الكريم بصوت القاريء  مشاري بن راشد العفاسي'



",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"سورة الصف",'callback_data'=>'afasy61']],
[['text'=>"سورة الجمعه",'callback_data'=>'afasy62'],['text'=>"سورة المنافقون",'callback_data'=>'afasy63']],
[['text'=>"سورة التغابن",'callback_data'=>'afasy64'],['text'=>"سورة الطلاق",'callback_data'=>'afasy65']],
[['text'=>"سورة التحريم",'callback_data'=>'afasy66'],['text'=>"سورة الملك",'callback_data'=>'afasy67']],
[['text'=>" سورة القلم",'callback_data'=>'afasy68'],['text'=>"سورة الحاقه",'callback_data'=>'afasy69']],
[['text'=>"سورة المعارج",'callback_data'=>'afasy70'],['text'=>"سورة نوح",'callback_data'=>'afasy71']],
[['text'=>"سورة الجن",'callback_data'=>'afasy72'],['text'=>"سورة المزمل",'callback_data'=>'afasy73']],
[['text'=>"سورة المدثر",'callback_data'=>'afasy74'],['text'=>"سورة القيامه",'callback_data'=>'afasy75']],
[['text'=>"سورة الانسان",'callback_data'=>'afasy76'],['text'=>"سورة المرسلات",'callback_data'=>'afasy77']],
[['text'=>" سورة النبا",'callback_data'=>'afasy78'],['text'=>" سورة النازعات",'callback_data'=>'afasy79']],
[['text'=>"سورة عبس",'callback_data'=>'afasy80'],['text'=>"سورة التكوير",'callback_data'=>'afasy81']],
[['text'=>"سورة الانفطار",'callback_data'=>'afasy82'],['text'=>"سورة المطففين",'callback_data'=>'afasy83']],
[['text'=>"سورة الانشقاق",'callback_data'=>'afasy84'],['text'=>"سورة البروج",'callback_data'=>'afasy85']],
[['text'=>"سورة الطارق",'callback_data'=>'afasy86'],['text'=>"سورة الاعلى",'callback_data'=>'afasy87']],
[['text'=>"سورة الغاشيه",'callback_data'=>'afasy88'],['text'=>" سورة الفجر",'callback_data'=>'afasy89']],
[['text'=>"سورة البلد",'callback_data'=>'afasy90'],['text'=>"سورة الشمس",'callback_data'=>'afasy91']],
[['text'=>"سورة الليل",'callback_data'=>'afasy92'],['text'=>"سورة الضحى",'callback_data'=>'afasy93']],
[['text'=>"سورة الشرح",'callback_data'=>'afasy94'],['text'=>"سورة التين",'callback_data'=>'afasy95']],
[['text'=>"سورة العلق",'callback_data'=>'afasy96'],['text'=>"سورة القدر",'callback_data'=>'afasy97']],
[['text'=>" سورة البينه",'callback_data'=>'afasy98'],['text'=>"سورة الزلزله",'callback_data'=>'afasy99']],
[['text'=>"سورة العاديات",'callback_data'=>'afasy100'],['text'=>"سورة القارعه",'callback_data'=>'afasy101']],
[['text'=>"سورة التكاثر",'callback_data'=>'afasy102'],['text'=>"سورة العصر",'callback_data'=>'afasy103']],
[['text'=>"سورة الهمزه",'callback_data'=>'afasy104'],['text'=>"سورة الفيل",'callback_data'=>'afasy105']],
[['text'=>"سورة قريش",'callback_data'=>'afasy106'],['text'=>"سورة الماعون",'callback_data'=>'afasy107']],
[['text'=>" سورة الكوثر",'callback_data'=>'afasy108'],['text'=>" سورة الكافرون",'callback_data'=>'afasy109']],
[['text'=>"سورة النصر",'callback_data'=>'afasy110'],['text'=>"سورة المسد",'callback_data'=>'afasy111']],
[['text'=>"سورة الاخلاص",'callback_data'=>'afasy112'],['text'=>"سورة الفلق",'callback_data'=>'afasy113']],
[['text'=>"سورة الناس",'callback_data'=>'afasy114']],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"deneyy"]],
]])]);}

/*
تنفيذ الشيخ العفاسي
*/

/*
27
50
53
*/

if($data == "afasy1"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/15",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy2"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/4",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy3"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/5",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy4"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/7",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy5"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/8",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy6"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/9",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy7"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/11",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy8"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/12",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy9"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/13",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy10"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/14",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy11"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/17",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy12"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/18",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy13"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/21",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy14"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/25",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy15"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/29",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy16"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/33",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy17"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/37",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy18"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/41",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy19"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/45",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy20"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/47",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy21"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/49",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy22"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/51",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy23"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/53",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy24"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/56",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy25"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/58",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy26"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/60",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy27"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mroan7/2613",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy28"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/62",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy29"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/66",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy30"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/68",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy31"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/70",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy32"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/72",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy33"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/74",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy34"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/76",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy35"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/78",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy36"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/80",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy37"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/82",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy38"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/84",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy39"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/86",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy40"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/88",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy41"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/91",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy42"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/93",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy43"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/95",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy44"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/97",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy45"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/99",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy46"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/101",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy47"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/103",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy48"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/105",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy49"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/107",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy50"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mroan7/2635",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy51"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/111",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy52"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/115",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy53"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/mroan7/2638",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy54"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/121",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy55"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/123",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy56"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/125",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy57"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/127",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy58"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/129",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy59"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/131",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy60"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/133",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy61"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/135",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy62"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/137",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy63"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/139",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy64"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/141",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy65"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/143",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy66"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/145",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy67"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/147",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy68"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/149",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy69"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/364",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy70"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/152",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy71"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/154",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy72"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/156",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy73"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/158",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy74"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/160",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy75"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/162",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy76"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/164",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy77"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/166",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy78"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/168",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy79"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/170",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy80"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/172",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy81"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/174",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy82"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/176",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy83"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/178",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy84"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/180",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy85"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/302",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy86"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/304",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy87"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/306",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy88"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/308",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy89"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/310",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy90"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/312",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy91"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/314",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy92"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/316",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy93"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/318",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy94"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/320",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy95"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/322",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy96"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/324",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy97"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/326",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy98"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/328",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy99"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/330",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy100"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/332",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy101"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/334",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy102"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/336",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy103"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/338",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy104"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/340",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy105"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/342",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy106"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/344",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy107"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/346",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy108"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/348",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy109"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/350",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy110"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/352",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy111"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/354",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy112"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/356",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy113"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/358",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "afasy114"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/bot_qran/358",
reply_to_message_id =>$message->message_id, 
]);} 

/*
نهاية الشيخ العفاسي 
*/

//الشيخ سعد الغامدي 

if($data=="kamedy"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"
قسم القرآن الكريم بصوت القاريء سعد الغامدي'



",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"سورة الفاتحه",'callback_data'=>'kamedy1'],['text'=>"سورة البقره",'callback_data'=>'kamedy2']],
[['text'=>"سورة ال عمران",'callback_data'=>'kamedy3'],['text'=>"سورة النساء",'callback_data'=>'kamedy4']],
[['text'=>"سورة المائده",'callback_data'=>'kamedy5'],['text'=>"سورة الانعام",'callback_data'=>'kamedy6']],
[['text'=>"سورة الاعراف",'callback_data'=>'kamedy7'],['text'=>"سورة الانفال",'callback_data'=>'kamedy8']],
[['text'=>" سورة التوبه",'callback_data'=>'kamedy9'],['text'=>"سورة يونس",'callback_data'=>'kamedy10']],
[['text'=>"سورة هود",'callback_data'=>'kamedy12'],['text'=>"سورة يوسف",'callback_data'=>'kamedy12']],
[['text'=>"سورة الرعد",'callback_data'=>'kamedy13'],['text'=>"سورة ابراهيم",'callback_data'=>'kamedy14']],
[['text'=>"سورة الحجر",'callback_data'=>'kamedy15'],['text'=>"سورة النحل",'callback_data'=>'kamedy16']],
[['text'=>"سورة الاسراء",'callback_data'=>'kamedy17'],['text'=>"سورة الكهف",'callback_data'=>'kamedy18']],
[['text'=>" سورة مريم",'callback_data'=>'kamedy19'],['text'=>" سورة طه",'callback_data'=>'kamedy20']],
[['text'=>"سورة الانبياء",'callback_data'=>'kamedy21'],['text'=>"سورة الحج",'callback_data'=>'kamedy22']],
[['text'=>"سورة المؤمنون",'callback_data'=>'kamedy23'],['text'=>"سورة النور",'callback_data'=>'kamedy24']],
[['text'=>"سورة الفرقان",'callback_data'=>'kamedy25'],['text'=>"سورة الشعراء",'callback_data'=>'sode26']],
[['text'=>"سورة النمل",'callback_data'=>'kamedy27'],['text'=>"سورة القصص",'callback_data'=>'kamedy28']],
[['text'=>"سورة العنكبوت",'callback_data'=>'kamedy29'],['text'=>" سورة الروم",'callback_data'=>'kamedy30']],
[['text'=>"سورة لقمان",'callback_data'=>'kamedy31'],['text'=>"سورة السجده",'callback_data'=>'kamedy32']],
[['text'=>"سورة الاحزاب",'callback_data'=>'kamedy33'],['text'=>"سورة سبا",'callback_data'=>'kamedy34']],
[['text'=>"سورة فاطر",'callback_data'=>'kamedy35'],['text'=>"سورة يس",'callback_data'=>'kamedy36']],
[['text'=>"سورة الصافات",'callback_data'=>'kamedy37'],['text'=>"سورة ص",'callback_data'=>'kamedy38']],
[['text'=>" سورة الزمر",'callback_data'=>'kamedy39'],['text'=>"سورة غافر",'callback_data'=>'kamedy40']],
[['text'=>"سورة فصلت",'callback_data'=>'kamedy41'],['text'=>"سورة الشورى",'callback_data'=>'kamedy42']],
[['text'=>"سورة الزخرف",'callback_data'=>'kamedy43'],['text'=>"سورة الدخان",'callback_data'=>'kamedy44']],
[['text'=>"سورة الجاثيه",'callback_data'=>'kamedy45'],['text'=>"سورة الاحقاف",'callback_data'=>'kamedy46']],
[['text'=>"سورة محمد",'callback_data'=>'kamedy47'],['text'=>"سورة الفتح",'callback_data'=>'kamedy48']],
[['text'=>" سورة الحجرات",'callback_data'=>'kamedy49'],['text'=>" سورة ق",'callback_data'=>'kamedy50']],
[['text'=>"سورة الذريات",'callback_data'=>'kamedy51'],['text'=>"سورة الطور",'callback_data'=>'kamedy52']],
[['text'=>"سورة النجم",'callback_data'=>'kamedy53'],['text'=>"سورة القمر",'callback_data'=>'kamedy54']],
[['text'=>"سورة الرحمن",'callback_data'=>'kamedy55'],['text'=>"سورة الواقعه",'callback_data'=>'kamedy56']],
[['text'=>"سورة الحديد",'callback_data'=>'kamedy57'],['text'=>"سورة المجادله",'callback_data'=>'kamedy58']],
[['text'=>"سورة الحشر",'callback_data'=>'kamedy59'],['text'=>" سورة الممتحنه",'callback_data'=>'kamedy60']],
[['text'=>"??ᯓالتالي𐂠ᯓ .",'callback_data'=>"kamedyy2"]],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"deneyy"]],
]])]);}

if($data=="kamedyy2"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"
قسم القرآن الكريم بصوت القاريء سعد الغامدي'



",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"سورة الصف",'callback_data'=>'kamedy61']],
[['text'=>"سورة الجمعه",'callback_data'=>'kamedy62'],['text'=>"سورة المنافقون",'callback_data'=>'kamedy63']],
[['text'=>"سورة التغابن",'callback_data'=>'kamedy64'],['text'=>"سورة الطلاق",'callback_data'=>'kamedy65']],
[['text'=>"سورة التحريم",'callback_data'=>'kamedy66'],['text'=>"سورة الملك",'callback_data'=>'kamedy67']],
[['text'=>" سورة القلم",'callback_data'=>'kamedy68'],['text'=>"سورة الحاقه",'callback_data'=>'kamedy69']],
[['text'=>"سورة المعارج",'callback_data'=>'kamedy70'],['text'=>"سورة نوح",'callback_data'=>'kamedy71']],
[['text'=>"سورة الجن",'callback_data'=>'kamedy72'],['text'=>"سورة المزمل",'callback_data'=>'kamedy73']],
[['text'=>"سورة المدثر",'callback_data'=>'kamedy74'],['text'=>"سورة القيامه",'callback_data'=>'kamedy75']],
[['text'=>"سورة الانسان",'callback_data'=>'kamedy76'],['text'=>"سورة المرسلات",'callback_data'=>'kamedy77']],
[['text'=>" سورة النبا",'callback_data'=>'kamedy78'],['text'=>" سورة النازعات",'callback_data'=>'kamedy79']],
[['text'=>"سورة عبس",'callback_data'=>'kamedy80'],['text'=>"سورة التكوير",'callback_data'=>'kamedy81']],
[['text'=>"سورة الانفطار",'callback_data'=>'kamedy82'],['text'=>"سورة المطففين",'callback_data'=>'kamedy83']],
[['text'=>"سورة الانشقاق",'callback_data'=>'kamedy84'],['text'=>"سورة البروج",'callback_data'=>'kamedy85']],
[['text'=>"سورة الطارق",'callback_data'=>'kamedy86'],['text'=>"سورة الاعلى",'callback_data'=>'kamedy87']],
[['text'=>"سورة الغاشيه",'callback_data'=>'kamedy88'],['text'=>" سورة الفجر",'callback_data'=>'kamedy89']],
[['text'=>"سورة البلد",'callback_data'=>'kamedy90'],['text'=>"سورة الشمس",'callback_data'=>'kamedy91']],
[['text'=>"سورة الليل",'callback_data'=>'kamedy92'],['text'=>"سورة الضحى",'callback_data'=>'kamedy93']],
[['text'=>"سورة الشرح",'callback_data'=>'kamedy94'],['text'=>"سورة التين",'callback_data'=>'kamedy95']],
[['text'=>"سورة العلق",'callback_data'=>'kamedy96'],['text'=>"سورة القدر",'callback_data'=>'kamedy97']],
[['text'=>" سورة البينه",'callback_data'=>'kamedy98'],['text'=>"سورة الزلزله",'callback_data'=>'kamedy99']],
[['text'=>"سورة العاديات",'callback_data'=>'kamedy100'],['text'=>"سورة القارعه",'callback_data'=>'kamedy101']],
[['text'=>"سورة التكاثر",'callback_data'=>'kamedy102'],['text'=>"سورة العصر",'callback_data'=>'kamedy103']],
[['text'=>"سورة الهمزه",'callback_data'=>'kamedy104'],['text'=>"سورة الفيل",'callback_data'=>'kamedy105']],
[['text'=>"سورة قريش",'callback_data'=>'kamedy106'],['text'=>"سورة الماعون",'callback_data'=>'kamedy107']],
[['text'=>" سورة الكوثر",'callback_data'=>'kamedy108'],['text'=>" سورة الكافرون",'callback_data'=>'kamedy109']],
[['text'=>"سورة النصر",'callback_data'=>'kamedy110'],['text'=>"سورة المسد",'callback_data'=>'kamedy111']],
[['text'=>"سورة الاخلاص",'callback_data'=>'kamedy112'],['text'=>"سورة الفلق",'callback_data'=>'kamedy113']],
[['text'=>"سورة الناس",'callback_data'=>'kamedy114']],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"deneyy"]],
]])]);}

/*
تنفيذ الشيخ سعد الغامدي
*/

if($data == "kamedy1"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/2",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy2"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/3",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy3"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/4",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy4"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/5",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy5"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/6",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy6"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/7",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy7"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/8",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy8"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/9",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy9"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/10",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy10"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/11",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy11"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/12",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy12"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/13",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy13"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/14",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy14"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/15",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy15"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/16",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy16"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/17",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy17"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/18",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy18"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/19",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy19"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/20",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy20"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/21",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy21"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/22",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy22"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/23",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy23"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/24",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy24"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/25",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy25"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/26",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy26"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/27",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy27"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/28",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy28"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/29",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy29"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/30",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy30"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/31",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy31"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/32",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy32"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/33",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy33"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/34",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy34"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/35",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy35"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/36",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy36"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/37",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy37"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/38",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy38"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/39",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy39"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/40",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy40"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/41",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy41"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/42",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy42"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/43",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy43"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/44",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy44"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/45",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy45"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/46",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy46"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/47",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy47"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/48",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy48"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/49",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy49"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/50",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy50"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/51",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy51"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/52",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy52"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/53",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy53"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/54",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy54"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/55",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy55"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/56",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy56"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/57",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy57"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/58",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy58"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/59",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy59"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/60",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy60"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/61",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy61"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/62",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy62"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/63",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy63"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/64",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy64"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/65",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy65"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/66",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy66"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/67",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy67"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/68",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy68"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/69",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy69"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/70",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy70"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/71",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy71"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/72",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy72"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/73",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy73"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/74",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy74"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/75",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy75"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/76",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy76"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/77",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy77"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/78",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy78"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/79",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy79"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/80",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy80"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/81",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy81"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/82",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy82"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/83",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy83"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/84",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy84"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/85",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy85"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/86",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy86"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/87",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy87"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/88",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy88"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/89",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy89"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/90",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy90"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/91",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy91"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/92",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy92"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/93",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy93"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/94",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy94"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/95",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy95"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/96",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy96"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/97",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy97"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/98",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy98"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/99",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy99"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/100",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy100"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/101",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy101"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/102",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy102"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/103",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy103"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/104",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy104"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/105",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy105"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/106",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy106"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/107",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy107"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/108",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy108"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/109",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy109"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/110",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy110"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/111",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy111"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/112",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy112"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/113",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy113"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/114",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "kamedy114"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/s_a_ag/115",
reply_to_message_id =>$message->message_id, 
]);}

/*
نهاية الشيخ الغامدي
*/

//الشيخ عبدالباسط عبد الصمد 

if($data=="samad"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"
قسم القرآن الكريم بصوت القاريء  عبد الباسط عبد الصمد'



",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"سورة الفاتحه",'callback_data'=>'samad1'],['text'=>"سورة البقره",'callback_data'=>'samad2']],
[['text'=>"سورة ال عمران",'callback_data'=>'samad3'],['text'=>"سورة النساء",'callback_data'=>'samad4']],
[['text'=>"سورة المائده",'callback_data'=>'samad5'],['text'=>"سورة الانعام",'callback_data'=>'samad6']],
[['text'=>"سورة الاعراف",'callback_data'=>'samad7'],['text'=>"سورة الانفال",'callback_data'=>'samad8']],
[['text'=>" سورة التوبه",'callback_data'=>'samad9'],['text'=>"سورة يونس",'callback_data'=>'samad10']],
[['text'=>"سورة هود",'callback_data'=>'samad12'],['text'=>"سورة يوسف",'callback_data'=>'samad12']],
[['text'=>"سورة الرعد",'callback_data'=>'samad13'],['text'=>"سورة ابراهيم",'callback_data'=>'samad14']],
[['text'=>"سورة الحجر",'callback_data'=>'samad15'],['text'=>"سورة النحل",'callback_data'=>'samad16']],
[['text'=>"سورة الاسراء",'callback_data'=>'samad17'],['text'=>"سورة الكهف",'callback_data'=>'samad18']],
[['text'=>" سورة مريم",'callback_data'=>'samad19'],['text'=>" سورة طه",'callback_data'=>'samad20']],
[['text'=>"سورة الانبياء",'callback_data'=>'samad21'],['text'=>"سورة الحج",'callback_data'=>'samad22']],
[['text'=>"سورة المؤمنون",'callback_data'=>'samad23'],['text'=>"سورة النور",'callback_data'=>'samad24']],
[['text'=>"سورة الفرقان",'callback_data'=>'samad25'],['text'=>"سورة الشعراء",'callback_data'=>'sode26']],
[['text'=>"سورة النمل",'callback_data'=>'samad27'],['text'=>"سورة القصص",'callback_data'=>'samad28']],
[['text'=>"سورة العنكبوت",'callback_data'=>'samad29'],['text'=>" سورة الروم",'callback_data'=>'samad30']],
[['text'=>"سورة لقمان",'callback_data'=>'samad31'],['text'=>"سورة السجده",'callback_data'=>'samad32']],
[['text'=>"سورة الاحزاب",'callback_data'=>'samad33'],['text'=>"سورة سبا",'callback_data'=>'samad34']],
[['text'=>"سورة فاطر",'callback_data'=>'samad35'],['text'=>"سورة يس",'callback_data'=>'samad36']],
[['text'=>"سورة الصافات",'callback_data'=>'samad37'],['text'=>"سورة ص",'callback_data'=>'samad38']],
[['text'=>" سورة الزمر",'callback_data'=>'samad39'],['text'=>"سورة غافر",'callback_data'=>'samad40']],
[['text'=>"سورة فصلت",'callback_data'=>'samad41'],['text'=>"سورة الشورى",'callback_data'=>'samad42']],
[['text'=>"سورة الزخرف",'callback_data'=>'samad43'],['text'=>"سورة الدخان",'callback_data'=>'samad44']],
[['text'=>"سورة الجاثيه",'callback_data'=>'samad45'],['text'=>"سورة الاحقاف",'callback_data'=>'samad46']],
[['text'=>"سورة محمد",'callback_data'=>'samad47'],['text'=>"سورة الفتح",'callback_data'=>'samad48']],
[['text'=>" سورة الحجرات",'callback_data'=>'samad49'],['text'=>" سورة ق",'callback_data'=>'samad50']],
[['text'=>"سورة الذريات",'callback_data'=>'samad51'],['text'=>"سورة الطور",'callback_data'=>'samad52']],
[['text'=>"سورة النجم",'callback_data'=>'samad53'],['text'=>"سورة القمر",'callback_data'=>'samad54']],
[['text'=>"سورة الرحمن",'callback_data'=>'samad55'],['text'=>"سورة الواقعه",'callback_data'=>'samad56']],
[['text'=>"سورة الحديد",'callback_data'=>'samad57'],['text'=>"سورة المجادله",'callback_data'=>'samad58']],
[['text'=>"سورة الحشر",'callback_data'=>'samad59'],['text'=>" سورة الممتحنه",'callback_data'=>'samad60']],
[['text'=>"𐂠ᯓالتالي𐂠ᯓ .",'callback_data'=>"samady2"]],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"deneyy"]],
]])]);}

if($data=="samady2"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"
قسم القرآن الكريم بصوت القاريء  عبد الباسط عبد الصمد'



",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"سورة الصف",'callback_data'=>'samad61']],
[['text'=>"سورة الجمعه",'callback_data'=>'samad62'],['text'=>"سورة المنافقون",'callback_data'=>'samad63']],
[['text'=>"سورة التغابن",'callback_data'=>'samad64'],['text'=>"سورة الطلاق",'callback_data'=>'samad65']],
[['text'=>"سورة التحريم",'callback_data'=>'samad66'],['text'=>"سورة الملك",'callback_data'=>'samad67']],
[['text'=>" سورة القلم",'callback_data'=>'samad68'],['text'=>"سورة الحاقه",'callback_data'=>'samad69']],
[['text'=>"سورة المعارج",'callback_data'=>'samad70'],['text'=>"سورة نوح",'callback_data'=>'samad71']],
[['text'=>"سورة الجن",'callback_data'=>'samad72'],['text'=>"سورة المزمل",'callback_data'=>'samad73']],
[['text'=>"سورة المدثر",'callback_data'=>'samad74'],['text'=>"سورة القيامه",'callback_data'=>'samad75']],
[['text'=>"سورة الانسان",'callback_data'=>'samad76'],['text'=>"سورة المرسلات",'callback_data'=>'samad77']],
[['text'=>" سورة النبا",'callback_data'=>'samad78'],['text'=>" سورة النازعات",'callback_data'=>'samad79']],
[['text'=>"سورة عبس",'callback_data'=>'samad80'],['text'=>"سورة التكوير",'callback_data'=>'samad81']],
[['text'=>"سورة الانفطار",'callback_data'=>'samad82'],['text'=>"سورة المطففين",'callback_data'=>'samad83']],
[['text'=>"سورة الانشقاق",'callback_data'=>'samad84'],['text'=>"سورة البروج",'callback_data'=>'samad85']],
[['text'=>"سورة الطارق",'callback_data'=>'samad86'],['text'=>"سورة الاعلى",'callback_data'=>'samad87']],
[['text'=>"سورة الغاشيه",'callback_data'=>'samad88'],['text'=>" سورة الفجر",'callback_data'=>'samad89']],
[['text'=>"سورة البلد",'callback_data'=>'samad90'],['text'=>"سورة الشمس",'callback_data'=>'samad91']],
[['text'=>"سورة الليل",'callback_data'=>'samad92'],['text'=>"سورة الضحى",'callback_data'=>'samad93']],
[['text'=>"سورة الشرح",'callback_data'=>'samad94'],['text'=>"سورة التين",'callback_data'=>'samad95']],
[['text'=>"سورة العلق",'callback_data'=>'samad96'],['text'=>"سورة القدر",'callback_data'=>'samad97']],
[['text'=>" سورة البينه",'callback_data'=>'samad98'],['text'=>"سورة الزلزله",'callback_data'=>'samad99']],
[['text'=>"سورة العاديات",'callback_data'=>'samad100'],['text'=>"سورة القارعه",'callback_data'=>'samad101']],
[['text'=>"سورة التكاثر",'callback_data'=>'samad102'],['text'=>"سورة العصر",'callback_data'=>'samad103']],
[['text'=>"سورة الهمزه",'callback_data'=>'samad104'],['text'=>"سورة الفيل",'callback_data'=>'samad105']],
[['text'=>"سورة قريش",'callback_data'=>'samad106'],['text'=>"سورة الماعون",'callback_data'=>'samad107']],
[['text'=>" سورة الكوثر",'callback_data'=>'samad108'],['text'=>" سورة الكافرون",'callback_data'=>'samad109']],
[['text'=>"سورة النصر",'callback_data'=>'samad110'],['text'=>"سورة المسد",'callback_data'=>'samad111']],
[['text'=>"سورة الاخلاص",'callback_data'=>'samad112'],['text'=>"سورة الفلق",'callback_data'=>'samad113']],
[['text'=>"سورة الناس",'callback_data'=>'samad114']],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"deneyy"]],
]])]);}

/*
تنفيذ الشيخ عبدالباسط عبدالصمد
*/

if($data == "samad1"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/2",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad2"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/3",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad3"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/4",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad4"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/5",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad5"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/6",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad6"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/7",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad7"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/8",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad8"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/9",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad9"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/10",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad10"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/11",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad11"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/12",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad12"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/13",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad13"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/14",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad14"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/15",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad15"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/16",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad16"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/17",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad17"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/18",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad18"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/19",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad19"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/20",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad20"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/21",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad21"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/22",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad22"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/23",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad23"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/24",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad24"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/25",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad25"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/26",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad26"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/27",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad27"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/28",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad28"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/29",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad29"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/30",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad30"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/31",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad31"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/32",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad32"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/33",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad33"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/34",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad34"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/35",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad35"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/36",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad36"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/37",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad37"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/38",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad38"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/39",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad39"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/40",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad40"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/41",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad41"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/42",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad42"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/43",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad43"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/44",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad44"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/45",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad45"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/46",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad46"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/47",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad47"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/48",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad48"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/49",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad49"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/50",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad50"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/51",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad51"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/52",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad52"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/53",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad53"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/54",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad54"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/55",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad55"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/56",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad56"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/57",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad57"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/58",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad58"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/59",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad59"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/60",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad60"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/61",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad61"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/62",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad62"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/63",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad63"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/64",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad64"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/65",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad65"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/66",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad66"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/67",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad67"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/68",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad68"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/69",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad69"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/70",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad70"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/71",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad71"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/72",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad72"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/73",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad73"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/74",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad74"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/75",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad75"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/76",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad76"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/77",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad77"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/78",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad78"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/79",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad79"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/80",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad80"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/81",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad81"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/82",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad82"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/83",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad83"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/84",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad84"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/85",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad85"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/86",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad86"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/87",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad87"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/88",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad88"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/89",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad89"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/90",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad90"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/91",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad91"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/92",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad92"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/93",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad93"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/94",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad94"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/95",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad95"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/96",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad96"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/97",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad97"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/98",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad98"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/99",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad99"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/100",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad100"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/101",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad101"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/102",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad102"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/103",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad103"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/104",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad104"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/105",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad105"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/106",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad106"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/107",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad107"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/108",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad108"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/109",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad109"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/110",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad110"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/111",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad111"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/112",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad112"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/113",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad113"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/114",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "samad114"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/a_b_d_al_b/115",
reply_to_message_id =>$message->message_id, 
]);}

/*
نهاية الشيخ عبدالباسط عبدالصمد 
*/

//الشيخ ابو بكر الشاطري

if($data=="satry"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"
قسم القرآن الكريم بصوت القاريء ابو بكر الشاطري'



",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"سورة الفاتحه",'callback_data'=>'satry1'],['text'=>"سورة البقره",'callback_data'=>'satry2']],
[['text'=>"سورة ال عمران",'callback_data'=>'satry3'],['text'=>"سورة النساء",'callback_data'=>'satry4']],
[['text'=>"سورة المائده",'callback_data'=>'satry5'],['text'=>"سورة الانعام",'callback_data'=>'satry6']],
[['text'=>"سورة الاعراف",'callback_data'=>'satry7'],['text'=>"سورة الانفال",'callback_data'=>'satry8']],
[['text'=>" سورة التوبه",'callback_data'=>'satry9'],['text'=>"سورة يونس",'callback_data'=>'satry10']],
[['text'=>"سورة هود",'callback_data'=>'satry12'],['text'=>"سورة يوسف",'callback_data'=>'satry12']],
[['text'=>"سورة الرعد",'callback_data'=>'satry13'],['text'=>"سورة ابراهيم",'callback_data'=>'satry14']],
[['text'=>"سورة الحجر",'callback_data'=>'satry15'],['text'=>"سورة النحل",'callback_data'=>'satry16']],
[['text'=>"سورة الاسراء",'callback_data'=>'satry17'],['text'=>"سورة الكهف",'callback_data'=>'satry18']],
[['text'=>" سورة مريم",'callback_data'=>'satry19'],['text'=>" سورة طه",'callback_data'=>'satry20']],
[['text'=>"سورة الانبياء",'callback_data'=>'satry21'],['text'=>"سورة الحج",'callback_data'=>'satry22']],
[['text'=>"سورة المؤمنون",'callback_data'=>'satry23'],['text'=>"سورة النور",'callback_data'=>'satry24']],
[['text'=>"سورة الفرقان",'callback_data'=>'satry25'],['text'=>"سورة الشعراء",'callback_data'=>'sode26']],
[['text'=>"سورة النمل",'callback_data'=>'satry27'],['text'=>"سورة القصص",'callback_data'=>'satry28']],
[['text'=>"سورة العنكبوت",'callback_data'=>'satry29'],['text'=>" سورة الروم",'callback_data'=>'satry30']],
[['text'=>"سورة لقمان",'callback_data'=>'satry31'],['text'=>"سورة السجده",'callback_data'=>'satry32']],
[['text'=>"سورة الاحزاب",'callback_data'=>'satry33'],['text'=>"سورة سبا",'callback_data'=>'satry34']],
[['text'=>"سورة فاطر",'callback_data'=>'satry35'],['text'=>"سورة يس",'callback_data'=>'satry36']],
[['text'=>"سورة الصافات",'callback_data'=>'satry37'],['text'=>"سورة ص",'callback_data'=>'satry38']],
[['text'=>" سورة الزمر",'callback_data'=>'satry39'],['text'=>"سورة غافر",'callback_data'=>'satry40']],
[['text'=>"سورة فصلت",'callback_data'=>'satry41'],['text'=>"سورة الشورى",'callback_data'=>'satry42']],
[['text'=>"سورة الزخرف",'callback_data'=>'satry43'],['text'=>"سورة الدخان",'callback_data'=>'satry44']],
[['text'=>"سورة الجاثيه",'callback_data'=>'satry45'],['text'=>"سورة الاحقاف",'callback_data'=>'satry46']],
[['text'=>"سورة محمد",'callback_data'=>'satry47'],['text'=>"سورة الفتح",'callback_data'=>'satry48']],
[['text'=>" سورة الحجرات",'callback_data'=>'satry49'],['text'=>" سورة ق",'callback_data'=>'satry50']],
[['text'=>"سورة الذريات",'callback_data'=>'satry51'],['text'=>"سورة الطور",'callback_data'=>'satry52']],
[['text'=>"سورة النجم",'callback_data'=>'satry53'],['text'=>"سورة القمر",'callback_data'=>'satry54']],
[['text'=>"سورة الرحمن",'callback_data'=>'satry55'],['text'=>"سورة الواقعه",'callback_data'=>'satry56']],
[['text'=>"سورة الحديد",'callback_data'=>'satry57'],['text'=>"سورة المجادله",'callback_data'=>'satry58']],
[['text'=>"سورة الحشر",'callback_data'=>'satry59'],['text'=>" سورة الممتحنه",'callback_data'=>'satry60']],
[['text'=>"𐂠ᯓالتالي𐂠ᯓ .",'callback_data'=>"satryy2"]],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"deneyy"]],
]])]);}

if($data=="satryy2"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"
قسم القرآن الكريم بصوت القاريء ابو بكر الشاطري'



",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"سورة الصف",'callback_data'=>'satry61']],
[['text'=>"سورة الجمعه",'callback_data'=>'satry62'],['text'=>"سورة المنافقون",'callback_data'=>'satry63']],
[['text'=>"سورة التغابن",'callback_data'=>'satry64'],['text'=>"سورة الطلاق",'callback_data'=>'satry65']],
[['text'=>"سورة التحريم",'callback_data'=>'satry66'],['text'=>"سورة الملك",'callback_data'=>'satry67']],
[['text'=>" سورة القلم",'callback_data'=>'satry68'],['text'=>"سورة الحاقه",'callback_data'=>'satry69']],
[['text'=>"سورة المعارج",'callback_data'=>'satry70'],['text'=>"سورة نوح",'callback_data'=>'satry71']],
[['text'=>"سورة الجن",'callback_data'=>'satry72'],['text'=>"سورة المزمل",'callback_data'=>'satry73']],
[['text'=>"سورة المدثر",'callback_data'=>'satry74'],['text'=>"سورة القيامه",'callback_data'=>'satry75']],
[['text'=>"سورة الانسان",'callback_data'=>'satry76'],['text'=>"سورة المرسلات",'callback_data'=>'satry77']],
[['text'=>" سورة النبا",'callback_data'=>'satry78'],['text'=>" سورة النازعات",'callback_data'=>'satry79']],
[['text'=>"سورة عبس",'callback_data'=>'satry80'],['text'=>"سورة التكوير",'callback_data'=>'satry81']],
[['text'=>"سورة الانفطار",'callback_data'=>'satry82'],['text'=>"سورة المطففين",'callback_data'=>'satry83']],
[['text'=>"سورة الانشقاق",'callback_data'=>'satry84'],['text'=>"سورة البروج",'callback_data'=>'satry85']],
[['text'=>"سورة الطارق",'callback_data'=>'satry86'],['text'=>"سورة الاعلى",'callback_data'=>'satry87']],
[['text'=>"سورة الغاشيه",'callback_data'=>'satry88'],['text'=>" سورة الفجر",'callback_data'=>'satry89']],
[['text'=>"سورة البلد",'callback_data'=>'satry90'],['text'=>"سورة الشمس",'callback_data'=>'satry91']],
[['text'=>"سورة الليل",'callback_data'=>'satry92'],['text'=>"سورة الضحى",'callback_data'=>'satry93']],
[['text'=>"سورة الشرح",'callback_data'=>'satry94'],['text'=>"سورة التين",'callback_data'=>'satry95']],
[['text'=>"سورة العلق",'callback_data'=>'satry96'],['text'=>"سورة القدر",'callback_data'=>'satry97']],
[['text'=>" سورة البينه",'callback_data'=>'satry98'],['text'=>"سورة الزلزله",'callback_data'=>'satry99']],
[['text'=>"سورة العاديات",'callback_data'=>'satry100'],['text'=>"سورة القارعه",'callback_data'=>'satry101']],
[['text'=>"سورة التكاثر",'callback_data'=>'satry102'],['text'=>"سورة العصر",'callback_data'=>'satry103']],
[['text'=>"سورة الهمزه",'callback_data'=>'satry104'],['text'=>"سورة الفيل",'callback_data'=>'satry105']],
[['text'=>"سورة قريش",'callback_data'=>'satry106'],['text'=>"سورة الماعون",'callback_data'=>'satry107']],
[['text'=>" سورة الكوثر",'callback_data'=>'satry108'],['text'=>" سورة الكافرون",'callback_data'=>'satry109']],
[['text'=>"سورة النصر",'callback_data'=>'satry110'],['text'=>"سورة المسد",'callback_data'=>'satry111']],
[['text'=>"سورة الاخلاص",'callback_data'=>'satry112'],['text'=>"سورة الفلق",'callback_data'=>'satry113']],
[['text'=>"سورة الناس",'callback_data'=>'satry114']],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"deneyy"]],
]])]);}

/*
تنفيذ الشيخ ابو بكر الشاطري 
*/

if($data == "satry1"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/2",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry2"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/3",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry3"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/4",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry4"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/5",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry5"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/6",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry6"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/7",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry7"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/8",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry8"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/9",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry9"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/10",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry10"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/11",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry11"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/12",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry12"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/13",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry13"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/14",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry14"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/15",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry15"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/16",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry16"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/17",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry17"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/18",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry18"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/19",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry19"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/20",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry20"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/21",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry21"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/22",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry22"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/23",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry23"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/24",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry24"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/25",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry25"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/26",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry26"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/27",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry27"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/28",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry28"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/29",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry29"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/30",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry30"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/31",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry31"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/32",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry32"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/33",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry33"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/34",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry34"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/35",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry35"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/36",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry36"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/37",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry37"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/38",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry38"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/39",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry39"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/40",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry40"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/41",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry41"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/42",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry42"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/43",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry43"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/44",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry44"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/45",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry45"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/46",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry46"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/47",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry47"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/48",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry48"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/49",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry49"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/50",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry50"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/51",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry51"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/52",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry52"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/53",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry53"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/54",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry54"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/55",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry55"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/56",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry56"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/57",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry57"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/58",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry58"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/59",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry59"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/60",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry60"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/61",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry61"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/62",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry62"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/63",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry63"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/64",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry64"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/65",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry65"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/66",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry66"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/67",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry67"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/68",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry68"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/69",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry69"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/70",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry70"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/71",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry71"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/72",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry72"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/73",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry73"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/74",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry74"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/75",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry75"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/76",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry76"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/77",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry77"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/78",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry78"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/79",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry79"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/80",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry80"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/81",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry81"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/82",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry82"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/83",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry83"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/84",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry84"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/85",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry85"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/86",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry86"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/87",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry87"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/88",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry88"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/89",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry89"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/90",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry90"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/91",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry91"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/92",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry92"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/93",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry93"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/94",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry94"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/95",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry95"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/96",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry96"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/97",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry97"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/98",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry98"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/99",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry99"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/100",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry100"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/101",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry101"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/102",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry102"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/103",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry103"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/104",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry104"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/105",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry105"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/106",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry106"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/107",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry107"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/108",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry108"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/109",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry109"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/110",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry110"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/111",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry111"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/112",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry112"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/113",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry113"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/114",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "satry114"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/shaterye/115",
reply_to_message_id =>$message->message_id, 
]);}

/*
نهاية الشيخ ابو بكر الشاطري
*/

//الشيخ فارس عباد

if($data=="fares"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"
قسم القرآن الكريم بصوت القاريء فارس عباد'



",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"سورة الفاتحه",'callback_data'=>'fares1'],['text'=>"سورة البقره",'callback_data'=>'fares2']],
[['text'=>"سورة ال عمران",'callback_data'=>'fares3'],['text'=>"سورة النساء",'callback_data'=>'fares4']],
[['text'=>"سورة المائده",'callback_data'=>'fares5'],['text'=>"سورة الانعام",'callback_data'=>'fares6']],
[['text'=>"سورة الاعراف",'callback_data'=>'fares7'],['text'=>"سورة الانفال",'callback_data'=>'fares8']],
[['text'=>" سورة التوبه",'callback_data'=>'fares9'],['text'=>"سورة يونس",'callback_data'=>'fares10']],
[['text'=>"سورة هود",'callback_data'=>'fares12'],['text'=>"سورة يوسف",'callback_data'=>'fares12']],
[['text'=>"سورة الرعد",'callback_data'=>'fares13'],['text'=>"سورة ابراهيم",'callback_data'=>'fares14']],
[['text'=>"سورة الحجر",'callback_data'=>'fares15'],['text'=>"سورة النحل",'callback_data'=>'fares16']],
[['text'=>"سورة الاسراء",'callback_data'=>'fares17'],['text'=>"سورة الكهف",'callback_data'=>'fares18']],
[['text'=>" سورة مريم",'callback_data'=>'fares19'],['text'=>" سورة طه",'callback_data'=>'fares20']],
[['text'=>"سورة الانبياء",'callback_data'=>'fares21'],['text'=>"سورة الحج",'callback_data'=>'fares22']],
[['text'=>"سورة المؤمنون",'callback_data'=>'fares23'],['text'=>"سورة النور",'callback_data'=>'fares24']],
[['text'=>"سورة الفرقان",'callback_data'=>'fares25'],['text'=>"سورة الشعراء",'callback_data'=>'sode26']],
[['text'=>"سورة النمل",'callback_data'=>'fares27'],['text'=>"سورة القصص",'callback_data'=>'fares28']],
[['text'=>"سورة العنكبوت",'callback_data'=>'fares29'],['text'=>" سورة الروم",'callback_data'=>'fares30']],
[['text'=>"سورة لقمان",'callback_data'=>'fares31'],['text'=>"سورة السجده",'callback_data'=>'fares32']],
[['text'=>"سورة الاحزاب",'callback_data'=>'fares33'],['text'=>"سورة سبا",'callback_data'=>'fares34']],
[['text'=>"سورة فاطر",'callback_data'=>'fares35'],['text'=>"سورة يس",'callback_data'=>'fares36']],
[['text'=>"سورة الصافات",'callback_data'=>'fares37'],['text'=>"سورة ص",'callback_data'=>'fares38']],
[['text'=>" سورة الزمر",'callback_data'=>'fares39'],['text'=>"سورة غافر",'callback_data'=>'fares40']],
[['text'=>"سورة فصلت",'callback_data'=>'fares41'],['text'=>"سورة الشورى",'callback_data'=>'fares42']],
[['text'=>"سورة الزخرف",'callback_data'=>'fares43'],['text'=>"سورة الدخان",'callback_data'=>'fares44']],
[['text'=>"سورة الجاثيه",'callback_data'=>'fares45'],['text'=>"سورة الاحقاف",'callback_data'=>'fares46']],
[['text'=>"سورة محمد",'callback_data'=>'fares47'],['text'=>"سورة الفتح",'callback_data'=>'fares48']],
[['text'=>" سورة الحجرات",'callback_data'=>'fares49'],['text'=>" سورة ق",'callback_data'=>'fares50']],
[['text'=>"سورة الذريات",'callback_data'=>'fares51'],['text'=>"سورة الطور",'callback_data'=>'fares52']],
[['text'=>"سورة النجم",'callback_data'=>'fares53'],['text'=>"سورة القمر",'callback_data'=>'fares54']],
[['text'=>"سورة الرحمن",'callback_data'=>'fares55'],['text'=>"سورة الواقعه",'callback_data'=>'fares56']],
[['text'=>"سورة الحديد",'callback_data'=>'fares57'],['text'=>"سورة المجادله",'callback_data'=>'fares58']],
[['text'=>"سورة الحشر",'callback_data'=>'fares59'],['text'=>" سورة الممتحنه",'callback_data'=>'fares60']],
[['text'=>"𐂠ᯓالتالي𐂠ᯓ .",'callback_data'=>"faresy2"]],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"deneyy"]],
]])]);}

if($data=="faresy2"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"
قسم القرآن الكريم بصوت القاريء فارس عباد'



",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"سورة الصف",'callback_data'=>'fares61']],
[['text'=>"سورة الجمعه",'callback_data'=>'fares62'],['text'=>"سورة المنافقون",'callback_data'=>'fares63']],
[['text'=>"سورة التغابن",'callback_data'=>'fares64'],['text'=>"سورة الطلاق",'callback_data'=>'fares65']],
[['text'=>"سورة التحريم",'callback_data'=>'fares66'],['text'=>"سورة الملك",'callback_data'=>'fares67']],
[['text'=>" سورة القلم",'callback_data'=>'fares68'],['text'=>"سورة الحاقه",'callback_data'=>'fares69']],
[['text'=>"سورة المعارج",'callback_data'=>'fares70'],['text'=>"سورة نوح",'callback_data'=>'fares71']],
[['text'=>"سورة الجن",'callback_data'=>'fares72'],['text'=>"سورة المزمل",'callback_data'=>'fares73']],
[['text'=>"سورة المدثر",'callback_data'=>'fares74'],['text'=>"سورة القيامه",'callback_data'=>'fares75']],
[['text'=>"سورة الانسان",'callback_data'=>'fares76'],['text'=>"سورة المرسلات",'callback_data'=>'fares77']],
[['text'=>" سورة النبا",'callback_data'=>'fares78'],['text'=>" سورة النازعات",'callback_data'=>'fares79']],
[['text'=>"سورة عبس",'callback_data'=>'fares80'],['text'=>"سورة التكوير",'callback_data'=>'fares81']],
[['text'=>"سورة الانفطار",'callback_data'=>'fares82'],['text'=>"سورة المطففين",'callback_data'=>'fares83']],
[['text'=>"سورة الانشقاق",'callback_data'=>'fares84'],['text'=>"سورة البروج",'callback_data'=>'fares85']],
[['text'=>"سورة الطارق",'callback_data'=>'fares86'],['text'=>"سورة الاعلى",'callback_data'=>'fares87']],
[['text'=>"سورة الغاشيه",'callback_data'=>'fares88'],['text'=>" سورة الفجر",'callback_data'=>'fares89']],
[['text'=>"سورة البلد",'callback_data'=>'fares90'],['text'=>"سورة الشمس",'callback_data'=>'fares91']],
[['text'=>"سورة الليل",'callback_data'=>'fares92'],['text'=>"سورة الضحى",'callback_data'=>'fares93']],
[['text'=>"سورة الشرح",'callback_data'=>'fares94'],['text'=>"سورة التين",'callback_data'=>'fares95']],
[['text'=>"سورة العلق",'callback_data'=>'fares96'],['text'=>"سورة القدر",'callback_data'=>'fares97']],
[['text'=>" سورة البينه",'callback_data'=>'fares98'],['text'=>"سورة الزلزله",'callback_data'=>'fares99']],
[['text'=>"سورة العاديات",'callback_data'=>'fares100'],['text'=>"سورة القارعه",'callback_data'=>'fares101']],
[['text'=>"سورة التكاثر",'callback_data'=>'fares102'],['text'=>"سورة العصر",'callback_data'=>'fares103']],
[['text'=>"سورة الهمزه",'callback_data'=>'fares104'],['text'=>"سورة الفيل",'callback_data'=>'fares105']],
[['text'=>"سورة قريش",'callback_data'=>'fares106'],['text'=>"سورة الماعون",'callback_data'=>'fares107']],
[['text'=>" سورة الكوثر",'callback_data'=>'fares108'],['text'=>" سورة الكافرون",'callback_data'=>'fares109']],
[['text'=>"سورة النصر",'callback_data'=>'fares110'],['text'=>"سورة المسد",'callback_data'=>'fares111']],
[['text'=>"سورة الاخلاص",'callback_data'=>'fares112'],['text'=>"سورة الفلق",'callback_data'=>'fares113']],
[['text'=>"سورة الناس",'callback_data'=>'fares114']],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"deneyy"]],
]])]);}

/*
تنفيذ الشيخ فارس عباد
*/
if($data == "fares1"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/2",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares2"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/3",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares3"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/4",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares4"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/5",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares5"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/6",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares6"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/7",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares7"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/8",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares8"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/9",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares9"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/10",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares10"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/11",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares11"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/12",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares12"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/13",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares13"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/14",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares14"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/15",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares15"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/16",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares16"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/17",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares17"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/18",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares18"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/19",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares19"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/20",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares20"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/21",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares21"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/22",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares22"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/23",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares23"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/24",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares24"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/25",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares25"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/26",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares26"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/27",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares27"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/28",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares28"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/29",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares29"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/30",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares30"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/31",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares31"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/32",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares32"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/33",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares33"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/34",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares34"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/35",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares35"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/36",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares36"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/37",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares37"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/38",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares38"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/39",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares39"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/40",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares40"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/41",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares41"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/42",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares42"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/43",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares43"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/44",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares44"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/45",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares45"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/46",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares46"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/47",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares47"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/48",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares48"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/49",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares49"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/50",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares50"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/51",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares51"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/52",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares52"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/53",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares53"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/54",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares54"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/55",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares55"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/56",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares56"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/57",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares57"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/58",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares58"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/59",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares59"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/60",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares60"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/61",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares61"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/62",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares62"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/63",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares63"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/64",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares64"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/65",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares65"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/66",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares66"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/67",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares67"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/68",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares68"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/69",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares69"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/70",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares70"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/71",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares71"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/72",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares72"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/73",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares73"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/74",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares74"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/75",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares75"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/76",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares76"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/77",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares77"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/78",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares78"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/79",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares79"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/80",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares80"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/81",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares81"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/82",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares82"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/83",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares83"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/84",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares84"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/85",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares85"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/86",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares86"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/87",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares87"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/88",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares88"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/89",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares89"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/90",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares90"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/91",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares91"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/92",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares92"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/93",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares93"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/94",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares94"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/95",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares95"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/96",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares96"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/97",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares97"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/98",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares98"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/99",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares99"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/100",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares100"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/101",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares101"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/102",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares102"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/103",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares103"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/104",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares104"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/105",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares105"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/106",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares106"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/107",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares107"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/108",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares108"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/109",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares109"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/110",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares110"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/111",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares111"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/112",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares112"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/113",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares113"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/114",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "fares114"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/abadft/115",
reply_to_message_id =>$message->message_id, 
]);}

/*
نهاية الشيخ فارس عباد
*/

/*
الاذكار
*/

  if($data ==  'starta' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'أهلاً بك في قسم لأذكار ..
     
‎     القسم مطور بطريقة مميزة ليسهل عليك قراءة الأذكار 
قران' 
     ,
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'أذكار الصباح .',callback_data => 'c' ]],
    [['text'=> 'أذكار المساء .' ,callback_data => 'e']] ,
    [['text'=> 'أوقات الصلاة .' ,callback_data => 'a']] ,
    [['text'=> 'أركان الإسلام .' ,callback_data => 't']] ,
    [['text'=> 'أجمل دعاء إلى الله .' ,callback_data => 'y']] ,
    [['text'=> 'دعاء يقال في قيام الليل .' ,callback_data => 'r']] ,
    [['text'=> 'الدعاء عند دخول الخلاء و عند الخروج منه .' ,callback_data => 'z']] ,
    [['text'=> 'أوقات يُستحب فيها الدعاء وتُستجاب الدعوات .' ,callback_data => 'u']] ,
    [['text'=> 'كلمتان خفيفتان على اللسان، ثقيلتان في الميزان .' ,callback_data => 'w']] ,
    [['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"m11"]],
    
    ]
    ])
    ]);
    }
    
    
    
    
    
    
    if($data ==  'c' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '▪️أَعُوذُ بِاللهِ مِنْ الشَّيْطَانِ الرَّجِيمِ
     
     ⏺اللّهُ لاَ إِلَـهَ إِلاَّ هُوَ الْحَيُّ الْقَيُّومُ لاَ تَأْخُذُهُ سِنَةٌ وَلاَ نَوْمٌ لَّهُ مَا فِي السَّمَاوَاتِ وَمَا فِي الأَرْضِ مَن ذَا الَّذِي يَشْفَعُ عِنْدَهُ إِلاَّ بِإِذْنِهِ يَعْلَمُ مَا بَيْنَ أَيْدِيهِمْ وَمَا خَلْفَهُمْ وَلاَ يُحِيطُونَ بِشَيْءٍ مِّنْ عِلْمِهِ إِلاَّ بِمَا شَاء وَسِعَ كُرْسِيُّهُ السَّمَاوَاتِ وَالأَرْضَ وَلاَ يَؤُودُهُ حِفْظُهُمَا وَهُوَ الْعَلِيُّ الْعَظِيمُ.[آية الكرسى - البقرة 255]. 
     🔹مرة واحدة ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'c1' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c1' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '➖بِسْمِ اللهِ الرَّحْمنِ الرَّحِيم
     
     ⏺قُلْ هُوَ ٱللَّهُ أَحَدٌ، ٱللَّهُ ٱلصَّمَدُ، لَمْ يَلِدْ وَلَمْ يُولَدْ، وَلَمْ يَكُن لَّهُۥ كُفُوًا أَحَدٌۢ.
     🔹3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'c2' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c2' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '➖بِسْمِ اللهِ الرَّحْمنِ الرَّحِيم
     
     ⏺قُلْ أَعُوذُ بِرَبِّ ٱلْفَلَقِ، مِن شَرِّ مَا خَلَقَ، وَمِن شَرِّ غَاسِقٍ إِذَا وَقَبَ، وَمِن شَرِّ ٱلنَّفَّٰثَٰتِ فِى ٱلْعُقَدِ، وَمِن شَرِّ حَاسِدٍ إِذَا حَسَدَ. 
     🔹3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'c3' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c3' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '➖بِسْمِ اللهِ الرَّحْمنِ الرَّحِيم
     
     ⏺قُلْ أَعُوذُ بِرَبِّ ٱلنَّاسِ، مَلِكِ ٱلنَّاسِ، إِلَٰهِ ٱلنَّاسِ، مِن شَرِّ ٱلْوَسْوَاسِ ٱلْخَنَّاسِ، ٱلَّذِى يُوَسْوِسُ فِى صُدُورِ ٱلنَّاسِ، مِنَ ٱلْجِنَّةِ وَٱلنَّاسِ.
     🔹3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'c4' ]]
    ]
    ])
    ]);
    }
    
    if($data ==  'c4' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '
     🔸أَصْـبَحْنا وَأَصْـبَحَ المُـلْكُ لله وَالحَمدُ لله ، لا إلهَ إلاّ اللّهُ وَحدَهُ لا شَريكَ لهُ، لهُ المُـلكُ ولهُ الحَمْـد، وهُوَ على كلّ شَيءٍ قدير ، رَبِّ أسْـأَلُـكَ خَـيرَ ما في هـذا اليوم وَخَـيرَ ما بَعْـدَه ، وَأَعـوذُ بِكَ مِنْ شَـرِّ ما في هـذا اليوم وَشَرِّ ما بَعْـدَه، رَبِّ أَعـوذُبِكَ مِنَ الْكَسَـلِ وَسـوءِ الْكِـبَر ، رَبِّ أَعـوذُ بِكَ مِنْ عَـذابٍ في النّـارِ وَعَـذابٍ في القَـبْر. ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'c5' ]]
    ]
    ])
    ]);
    }
    
    if($data ==  'c5' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '
     🔸اللّهـمَّ أَنْتَ رَبِّـي لا إلهَ إلاّ أَنْتَ ، خَلَقْتَنـي وَأَنا عَبْـدُك ، وَأَنا عَلـى عَهْـدِكَ وَوَعْـدِكَ ما اسْتَـطَعْـت ، أَعـوذُبِكَ مِنْ شَـرِّ ما صَنَـعْت ، أَبـوءُ لَـكَ بِنِعْـمَتِـكَ عَلَـيَّ وَأَبـوءُ بِذَنْـبي فَاغْفـِرْ لي فَإِنَّـهُ لا يَغْـفِرُ الذُّنـوبَ إِلاّ أَنْتَ . ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'c6' ]]
    ]
    ])
    ]);
    }
    
    if($data ==  'c6' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '🔸رَضيـتُ بِاللهِ رَبَّـاً وَبِالإسْلامِ ديـناً وَبِمُحَـمَّدٍ صلى الله عليه وسلم نَبِيّـاً. 
     🔹3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'c7' ]]
    ]
    ])
    ]);
    }
    
    
    
    if($data ==  'c7' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '
     🔸حَسْبِـيَ اللّهُ لا إلهَ إلاّ هُوَ عَلَـيهِ تَوَكَّـلتُ وَهُوَ رَبُّ العَرْشِ العَظـيم. 
     🔹7 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'c8' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c8' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '🔘بِسـمِ اللهِ الذي لا يَضُـرُّ مَعَ اسمِـهِ شَيءٌ في الأرْضِ وَلا في السّمـاءِ وَهـوَ السّمـيعُ العَلـيم.    
     🔹3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'c9' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c9' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '🔘اللّهُـمَّ بِكَ أَصْـبَحْنا وَبِكَ أَمْسَـينا ، وَبِكَ نَحْـيا وَبِكَ نَمُـوتُ وَإِلَـيْكَ النُّـشُور' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'c10' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c10' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '🔘أَصْبَـحْـنا عَلَى فِطْرَةِ الإسْلاَمِ، وَعَلَى كَلِمَةِ الإِخْلاَصِ، وَعَلَى دِينِ نَبِيِّنَا مُحَمَّدٍ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ، وَعَلَى مِلَّةِ أَبِينَا إبْرَاهِيمَ حَنِيفاً مُسْلِماً وَمَا كَانَ مِنَ المُشْرِكِينَ. ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي' , callback_data => 'c11' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c11' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '
     🔘سُبْحـانَ اللهِ وَبِحَمْـدِهِ عَدَدَ خَلْـقِه ، وَرِضـا نَفْسِـه ، وَزِنَـةَ عَـرْشِـه ، وَمِـدادَ كَلِمـاتِـه.
     🔹3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'c12' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c12' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '🔘اللّهُـمَّ عافِـني في بَدَنـي ، اللّهُـمَّ عافِـني في سَمْـعي ، اللّهُـمَّ عافِـني في بَصَـري ، لا إلهَ إلاّ أَنْـتَ اللّهُـمَّ إِنّـي أَعـوذُ بِكَ مِنَ الْكُـفر ، وَالفَـقْر ، وَأَعـوذُ بِكَ مِنْ عَذابِ القَـبْر ، لا إلهَ إلاّ أَنْـتَ.
     🔹3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'c13' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c13' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '
     🔘اللّهُـمَّ إِنِّـي أسْـأَلُـكَ العَـفْوَ وَالعـافِـيةَ في الدُّنْـيا وَالآخِـرَة ، اللّهُـمَّ إِنِّـي أسْـأَلُـكَ العَـفْوَ وَالعـافِـيةَ في ديني وَدُنْـيايَ وَأهْـلي وَمالـي ، اللّهُـمَّ اسْتُـرْ عـوْراتي وَآمِـنْ رَوْعاتـي ، اللّهُـمَّ احْفَظْـني مِن بَـينِ يَدَيَّ وَمِن خَلْفـي وَعَن يَمـيني وَعَن شِمـالي ، وَمِن فَوْقـي ، وَأَعـوذُ بِعَظَمَـتِكَ أَن أُغْـتالَ مِن تَحْتـي. ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'c14' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c14' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '🔘يَا حَيُّ يَا قيُّومُ بِرَحْمَتِكَ أسْتَغِيثُ أصْلِحْ لِي شَأنِي كُلَّهُ وَلاَ تَكِلُنِي إلَى نَفْسِي طَـرْفَةَ عَيْنٍ.' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'c15' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c15' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '🔘اللّهُـمَّ عالِـمَ الغَـيْبِ وَالشّـهادَةِ فاطِـرَ السّماواتِ وَالأرْضِ رَبَّ كـلِّ شَـيءٍ وَمَليـكَه ، أَشْهَـدُ أَنْ لا إِلـهَ إِلاّ أَنْت ، أَعـوذُ بِكَ مِن شَـرِّ نَفْسـي وَمِن شَـرِّ الشَّيْـطانِ وَشِـرْكِه ، وَأَنْ أَقْتَـرِفَ عَلـى نَفْسـي سوءاً أَوْ أَجُـرَّهُ إِلـى مُسْـلِم. ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'c17' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c17' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '🔘أَعـوذُ بِكَلِمـاتِ اللّهِ التّـامّـاتِ مِنْ شَـرِّ ما خَلَـق.
     🔹3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'c18' ]]
    ]
    ])
    ]);
    }
    
    
    if($data ==  'c18' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '🔘اللَّهُمَّ صَلِّ وَسَلِّمْ وَبَارِكْ على نَبِيِّنَا مُحمَّد.
     ✔️غير مقيد بعدد' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'c19' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c19' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '🔘اللَّهُمَّ إِنَّا نَعُوذُ بِكَ مِنْ أَنْ نُشْرِكَ بِكَ شَيْئًا نَعْلَمُهُ ، وَنَسْتَغْفِرُكَ لِمَا لَا نَعْلَمُهُ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'c20' ]]
    ]
    ])
    ]);
    }
    
    if($data ==  'c20' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     
     
    text => 
     
   "- قران
     "
     
     ,
     reply_markup =>json_encode([
     inline_keyboard =>[
    [['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"starta"]],
    
    ]
    ])
    ]);
    }
    
    
    
    
    
    
    if($data ==  'a' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'الفجْر٤:٣٨ ص' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الفْجر .' , callback_data => 'a1' ]]
    ]
    ])
    ]);
    }
    if($data ==  'a1' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'الشروق٥:٥٩ ص' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الشروق .' , callback_data => 'a2' ]]
    ]
    ])
    ]);
    }
    if($data ==  'a2' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'الظُّهْر١٢:٢٩ م' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الظُّهْر .' , callback_data => 'a3' ]]
    ]
    ])
    ]);
    }
    
    
    if($data ==  'a3' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'العَصر٣:٥٠ م' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'العَصر .' , callback_data => 'a4' ]]
    ]
    ])
    ]);
    }
    if($data ==  'a4' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'المَغرب٦:٥٨ م' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'المَغرب .' , callback_data => 'a5' ]]
    ]
    ])
    ]);
    }
    if($data ==  'a5' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'العِشاء٨:٢٨ م' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'العِشاء .' , callback_data => 'a6' ]]
    ]
    ])
    ]);
    }
    if($data ==  'a6' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     
     
    text => 
     
     "- قران
     "
     
     ,
     reply_markup =>json_encode([
     inline_keyboard =>[
    [['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"starta"]],
    
    ]
    ])
    ]);
    }
    
    
    
    
    
    
    if($data ==  'z' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'عند الدخول يقول : (بِسمِ الله ) اللّهُـمَّ إِنِّـي أَعـوذُ بِـكَ مِـنَ الخُـبثِ وَالخَبائِث. رواه البخاري ومسلم .
وإذا خرج قال: غُفـرانَك. أخرجه أصحاب السنن إلا النسائي' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'z1' ]]
    ]
    ])
    ]);
    }
    if($data ==  'z1' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     
     
    text => 
     
     "- قران
     "
     
     ,
     reply_markup =>json_encode([
     inline_keyboard =>[
    [['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"starta"]],
    
    ]
    ])
    ]);
    }
    
    
    
    
    
    
    if($data ==  'r' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'اللهم أنت ربي لا إله إلا أنت عليك توكلت وأنت رب العرش العظيم ما شاء الله كان وما لم يشأ لم يكن لا حول ولا قوة إلا العظيم العلى العظيم أعلم أن الله على كل شيء قدير وأن الله قد أحاط بكل شيء علما اللهم إني أعوذ بك من شر نفسي ومن شر كل دابة أنت آخذ بناصيتها إن ربي على صراط مستقيم.' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'r1' ]]
    ]
    ])
    ]);
    }
    if($data ==  'r1' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     
     
    text => 
     
     "- قران
     "
     
     ,
     reply_markup =>json_encode([
     inline_keyboard =>[
    [['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"starta"]],
    
    ]
    ])
    ]);
    }
    
    
    
    
    
    
    if($data ==  'w' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'عن أبي هريرة - رضي الله عنه - قال: قال رسول الله - صلى الله عليه وسلم -: ((كلمتان خفيفتان على اللسان، ثقيلتان في الميزان، حبيبتان إلى الرحمن: ((سبحان الله وبحمده، سبحان الله العظيم))، متفق عليه.' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'w1' ]]
    ]
    ])
    ]);
    }
    if($data ==  'w1' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     
     
    text => 
     
     "- قران
     "
     
     ,
     reply_markup =>json_encode([
     inline_keyboard =>[
    [['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"starta"]],
    
    ]
    ])
    ]);
    }
    
    
    
    
    
    if($data ==  'y' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'دُعاء مصدر دَعا، وهو ما يُدْعَى به اللهَ من القول، وهو أيضًا رفع الكفّين بالابتهال والتضرّع إلى الله، وهو من العبادات التي يلجأ بها العبد إلى الله وحده دون غيره في أي وقت شاء، ولا ينحصر الدعاء في صيغة محدّدة، وقد قال تعالى في كتابه الكريم: " وَإِذَا سَأَلَكَ عِبَادِي عَنِّي فَإِنِّي قَرِيبٌ ۖ أُجِيبُ دَعْوَةَ الدَّاعِ إِذَا دَعَانِ" [١]، ولا يقتصر الدعاء على دعاء المرء لنفسه فقط، بل من الجميل قيام المرء بالدعاء لغيره بالخير، وفي هذا المقال حديثٌ عن الدعاء وعن أجمل دعاء إلى الله من الكتاب والسنّة .' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'y1' ]]
    ]
    ])
    ]);
    }
    if($data ==  'y1' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     
     
    text => 
     
     "- قران
     "
     
     ,
     reply_markup =>json_encode([
     inline_keyboard =>[
    [['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"starta"]],
    
    ]
    ])
    ]);
    }
    
    
    
    
    
   
    if($data ==  't' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'الشهادتان (شهادة أن لا إله إلا الله، وشهادة ان محمداً رسول الله)' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الركن الاول .' , callback_data => 't1' ]]
    ]
    ])
    ]);
    }
    if($data ==  't1' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'إقام الصلاة (وهي خمس صلوات في اليوم والليلة)' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الركن الثاني .' , callback_data => 't2' ]]
    ]
    ])
    ]);
    }
    if($data ==  't2' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'إيتاء الزكاة' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الركن الثالث .' , callback_data => 't3' ]]
    ]
    ])
    ]);
    }
    
    
    if($data ==  't3' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'صوم شهر رمضان' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الركن الرابع .' , callback_data => 't4' ]]
    ]
    ])
    ]);
    }
    if($data ==  't4' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'حج البيت (من استطاع إليه سبيلا، أي للقادرين)' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الركن الخامس .' , callback_data => 't5' ]]
    ]
    ])
    ]);
    }
    if($data ==  't5' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     
     
    text => 
     
     "- قران
     "
     
     ,
     reply_markup =>json_encode([
     inline_keyboard =>[
    [['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"starta"]],
    
    ]
    ])
    ]);
    }
    
    
    
    
    
    
    if($data ==  'e' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'أَعُوذُ بِاللهِ مِنْ الشَّيْطَانِ الرَّجِيمِ
     اللّهُ لاَ إِلَـهَ إِلاَّ هُوَ الْحَيُّ الْقَيُّومُ لاَ تَأْخُذُهُ سِنَةٌ وَلاَ نَوْمٌ لَّهُ مَا فِي السَّمَاوَاتِ وَمَا فِي الأَرْضِ مَن ذَا الَّذِي يَشْفَعُ عِنْدَهُ إِلاَّ بِإِذْنِهِ يَعْلَمُ مَا بَيْنَ أَيْدِيهِمْ وَمَا خَلْفَهُمْ وَلاَ يُحِيطُونَ بِشَيْءٍ مِّنْ عِلْمِهِ إِلاَّ بِمَا شَاء وَسِعَ كُرْسِيُّهُ السَّمَاوَاتِ وَالأَرْضَ وَلاَ يَؤُودُهُ حِفْظُهُمَا وَهُوَ الْعَلِيُّ الْعَظِيمُ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'e1' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e1' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'بِسْمِ اللهِ الرَّحْمنِ الرَّحِيم
     قُلْ هُوَ ٱللَّهُ أَحَدٌ، ٱللَّهُ ٱلصَّمَدُ، لَمْ يَلِدْ وَلَمْ يُولَدْ، وَلَمْ يَكُن لَّهُۥ كُفُوًا أَحَدٌۢ 
     3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'e2' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e2' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'بِسْمِ اللهِ الرَّحْمنِ الرَّحِيم
     قُلْ أَعُوذُ بِرَبِّ ٱلْفَلَقِ، مِن شَرِّ مَا خَلَقَ، وَمِن شَرِّ غَاسِقٍ إِذَا وَقَبَ، وَمِن شَرِّ ٱلنَّفَّٰثَٰتِ فِى ٱلْعُقَدِ، وَمِن شَرِّ حَاسِدٍ إِذَا حَسَدَ. 
     3 مرات'
     ,
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'e3' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e3' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'بِسْمِ اللهِ الرَّحْمنِ الرَّحِيم
     قُلْ أَعُوذُ بِرَبِّ ٱلنَّاسِ، مَلِكِ ٱلنَّاسِ، إِلَٰهِ ٱلنَّاسِ، مِن شَرِّ ٱلْوَسْوَاسِ ٱلْخَنَّاسِ، ٱلَّذِى يُوَسْوِسُ فِى صُدُورِ ٱلنَّاسِ، مِنَ ٱلْجِنَّةِ وَٱلنَّاسِ
     3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'e4' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e4' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'أَمْسَيْـنا وَأَمْسـى المـلكُ لله وَالحَمدُ لله ، لا إلهَ إلاّ اللّهُ وَحدَهُ لا شَريكَ لهُ، لهُ المُـلكُ ولهُ الحَمْـد، وهُوَ على كلّ شَيءٍ قدير ، رَبِّ أسْـأَلُـكَ خَـيرَ ما في هـذهِ اللَّـيْلَةِ وَخَـيرَ ما بَعْـدَهـا ، وَأَعـوذُ بِكَ مِنْ شَـرِّ ما في هـذهِ اللَّـيْلةِ وَشَرِّ ما بَعْـدَهـا ، رَبِّ أَعـوذُبِكَ مِنَ الْكَسَـلِ وَسـوءِ الْكِـبَر ، رَبِّ أَعـوذُ بِكَ مِنْ عَـذابٍ في النّـارِ وَعَـذابٍ في القَـبْر. ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'e5' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e5' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'اللّهـمَّ أَنْتَ رَبِّـي لا إلهَ إلاّ أَنْتَ ، خَلَقْتَنـي وَأَنا عَبْـدُك ، وَأَنا عَلـى عَهْـدِكَ وَوَعْـدِكَ ما اسْتَـطَعْـت ، أَعـوذُبِكَ مِنْ شَـرِّ ما صَنَـعْت ، أَبـوءُ لَـكَ بِنِعْـمَتِـكَ عَلَـيَّ وَأَبـوءُ بِذَنْـبي فَاغْفـِرْ لي فَإِنَّـهُ لا يَغْـفِرُ الذُّنـوبَ إِلاّ أَنْتَ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'e6' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e6' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'رَضيـتُ بِاللهِ رَبَّـاً وَبِالإسْلامِ ديـناً وَبِمُحَـمَّدٍ صلى الله عليه وسلم نَبِيّـاً. 3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'e7' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e7' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'حَسْبِـيَ اللّهُ لا إلهَ إلاّ هُوَ عَلَـيهِ تَوَكَّـلتُ وَهُوَ رَبُّ العَرْشِ العَظـيم.   7 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'e8' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e8' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'بِسـمِ اللهِ الذي لا يَضُـرُّ مَعَ اسمِـهِ شَيءٌ في الأرْضِ وَلا في السّمـاءِ وَهـوَ السّمـيعُ العَلـيم. 3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'e9' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e9' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'اللّهُـمَّ بِكَ أَمْسَـينا وَبِكَ أَصْـبَحْنا، وَبِكَ نَحْـيا وَبِكَ نَمُـوتُ وَإِلَـيْكَ الْمَصِيرُ.' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'e10' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e10' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'أَمْسَيْنَا عَلَى فِطْرَةِ الإسْلاَمِ، وَعَلَى كَلِمَةِ الإِخْلاَصِ، وَعَلَى دِينِ نَبِيِّنَا مُحَمَّدٍ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ، وَعَلَى مِلَّةِ أَبِينَا إبْرَاهِيمَ حَنِيفاً مُسْلِماً وَمَا كَانَ مِنَ المُشْرِكِينَ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'e11' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e11' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'اللّهُـمَّ عافِـني في بَدَنـي ، اللّهُـمَّ عافِـني في سَمْـعي ، اللّهُـمَّ عافِـني في بَصَـري ، لا إلهَ إلاّ أَنْـتَ.  اللّهُـمَّ إِنّـي أَعـوذُ بِكَ مِنَ الْكُـفر ، وَالفَـقْر ، وَأَعـوذُ بِكَ مِنْ عَذابِ القَـبْر لا إلهَ إلاّ أَنْـتَ
     3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'e12' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e12' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'اللّهُـمَّ إِنِّـي أسْـأَلُـكَ العَـفْوَ وَالعـافِـيةَ في الدُّنْـيا وَالآخِـرَة ، اللّهُـمَّ إِنِّـي أسْـأَلُـكَ العَـفْوَ وَالعـافِـيةَ في ديني وَدُنْـيايَ وَأهْـلي وَمالـي اللّهُـمَّ اسْتُـرْ عـوْراتي وَآمِـنْ رَوْعاتـي ، اللّهُـمَّ احْفَظْـني مِن بَـينِ يَدَيَّ وَمِن خَلْفـي وَعَن يَمـيني وَعَن شِمـالي ، وَمِن فَوْقـي وَأَعـوذُ بِعَظَمَـتِكَ أَن أُغْـتالَ مِن تَحْتـي. ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'e13' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e13' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'يَا حَيُّ يَا قيُّومُ بِرَحْمَتِكَ أسْتَغِيثُ أصْلِحْ لِي شَأنِي كُلَّهُ وَلاَ تَكِلُنِي إلَى نَفْسِي طَـرْفَةَ عَيْنٍ. 3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'e14' ]]
    ]
    ])
    ]);
    }if($data ==  'e14' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'اللّهُـمَّ عالِـمَ الغَـيْبِ وَالشّـهادَةِ فاطِـرَ السّماواتِ وَالأرْضِ رَبَّ كـلِّ شَـيءٍ وَمَليـكَه ، أَشْهَـدُ أَنْ لا إِلـهَ إِلاّ أَنْت ، أَعـوذُ بِكَ مِن شَـرِّ نَفْسـي وَمِن شَـرِّ الشَّيْـطانِ وَشِـرْكِه ، وَأَنْ أَقْتَـرِفَ عَلـى نَفْسـي سوءاً أَوْ أَجُـرَّهُ إِلـى مُسْـلِم' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'e15' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e15' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'أَعـوذُ بِكَلِمـاتِ اللّهِ التّـامّـاتِ مِنْ شَـرِّ ما خَلَـق
     3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'e16' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e16' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'اللَّهُمَّ صَلِّ وَسَلِّمْ وَبَارِكْ على نَبِيِّنَا مُحمَّد.
     غير مقيد بعدد' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'e17' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e17' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'أسْتَغْفِرُ اللهَ َ الَّذِي لاَ إلَهَ إلاَّ هُوَ، الحَيُّ القَيُّومُ، وَأتُوبُ إلَيهِ. 3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'e19' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e19' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'لَا إلَه إلّا اللهُ وَحْدَهُ لَا شَرِيكَ لَهُ، لَهُ الْمُلْكُ وَلَهُ الْحَمْدُ وَهُوَ عَلَى كُلُّ شَيْءِ قَدِيرِ. 10 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'e20' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e20' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'سُبْحـانَ اللهِ وَبِحَمْـدِهِ.100 مرة' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'e21' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e21' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     
     text => 
     
     "- قران
     "
     
     ,
     reply_markup =>json_encode([
     inline_keyboard =>[
   [['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"starta"]],
    
    
    ]
    ])
    ]);
    }
    
    
    
    
    
    if($data ==  'u' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'ليلة القدر' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
     [['text'=> 'دعاء ليلة القدر .' ,callback_data => 'uu']] ,
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'u1' ]]
    ]
    ])
    ]);
    }
    if($data ==  'u1' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'جوف الليل الأخير' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'u2' ]]
    ]
    ])
    ]);
    }
    if($data ==  'u2' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'ما بين الأذان والإقامة'
     ,
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'u3' ]]
    ]
    ])
    ]);
    }
    if($data ==  'u3' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'عند نزول الغيث' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
     [['text'=> 'دعاء نزول الغيث .' ,callback_data => 'uuu']] ,
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'u4' ]]
    ]
    ])
    ]);
    }
    if($data ==  'u4' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'ساعة من يوم الجمعة 
( وأرجح الأقوال فيها أَنها آخر ساعة من ساعات العصر يوم الجمعة، وقد تكون ساعة الخطبة والصلاة )' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
     [['text'=> 'دعاء يوم الجمعة .' ,callback_data => 'uuuu']] ,
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'u5' ]]
    ]
    ])
    ]);
    }
    if($data ==  'u5' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'عند شُرب ماء زمزم مع صدق النية' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'u6' ]]
    ]
    ])
    ]);
    }
    if($data ==  'u6' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'وقت السجود' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'u7' ]]
    ]
    ])
    ]);
    }
    if($data ==  'u7' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'عند الاستقياظ من النوم ليلاً' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'u8' ]]
    ]
    ])
    ]);
    }
    if($data ==  'u8' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'عند الدعاء بِـ: 
( لَا إِلَهَ إِلَّا أَنْتَ سُبْحَانَكَ إِنِّي كُنْتُ مِنَ الظَّالِمِينَ )' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'u9' ]]
    ]
    ])
    ]);
    }
    if($data ==  'u9' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'دعاء المُسلم لأخيه المُسلم في ظهر الغيب' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ' , callback_data => 'u10' ]]
    ]
    ])
    ]);
    }
    if($data ==  'u10' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'دعاء يوم عرفة' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'u11' ]]
    ]
    ])
    ]);
    }
    if($data ==  'u11' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'دعاء في شهر رمضان' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
     [['text'=> 'أدعية مستحبة في شهر رمضان .' ,callback_data => 'uuuuu']] ,
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'u12' ]]
    ]
    ])
    ]);
    }
    if($data ==  'u12' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'في مجالس الذكر' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'u13' ]]
    ]
    ])
    ]);
    }
    if($data ==  'u13' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'دعاء المسافر' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
     [['text'=> 'دعاء السفر .' ,callback_data => 'uuuuuu']] ,
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'u14' ]]
    ]
    ])
    ]);
    }if($data ==  'u14' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'دعاء المضطر' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'u15' ]]
    ]
    ])
    ]);
    }
    if($data ==  'u15' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'دعاء الولد البار بوالديه' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'u16' ]]
    ]
    ])
    ]);
    }
    if($data ==  'u16' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'الدعاء بعد الوضوء' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'u17' ]]
    ]
    ])
    ]);
    }
    if($data ==  'u17' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     
     text => 
     
     "- قران
     "
     
     ,
     reply_markup =>json_encode([
     inline_keyboard =>[
    [['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"starta"]],
    
    
    ]
    ])
    ]);
    }
    
    
    
    
    
    if($data ==  'uu' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'اللهم اهدنا فيمن هديت، وعافنا فيمن عافيت، وتولنا فيمن توليت، وبارك لنا فيما أعطيت، وقنا برحمتك واصرف عنا شر ما قضيت، إنَّك تقضي ولا يُقضى عليك، إنّه لا يذِلُّ من واليت، ولا يعِزُّ من عاديت، تباركت ربنا وتعاليت، نستغفرك اللهم من جميع الذنوب والخطايا ونتوب إليك، ونؤمن بك ونتوكلُ عليك، اللهم أنتَ الغنيُّ ونحن الفقراء إليك، وأنتَ القويُّ ونحنُ الضعفاءُ اليك، اللَّهُمَّ إِنَّكَ عَفُوٌّ كَرِيمٌ تُحِبُّ الْعَفْوَ فَاعْفُ عَنِّا يا كريم' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'uu1' ]]
    ]
    ])
    ]);
    }if($data ==  'uu1' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'يا إله العالمين، يا مجيب دعوة المضطرين، يا من لا يزداد على السؤال إلا كرمًا وجودًا، وعلى كثرة الإلحاح إلا تفضلاً وإحساناً، نسألك مسألة المساكين، ونبتهل إليك يا ربنا ابتهال الخاضع المذنب الذليل، ندعوك دُعاء من خضعت لكَ رقبته وذلَّ لكَ جسمه ورغم لكَ أنفه وفاضت لك عيناه، يا من يجيب المضطر إذا دعاه، ويكشف السوء عمن ناداه اللهم هؤلاء عبادك، قد نصبوا وجوههم إليك، ورفعوا أكُفَّ الضراعة إليك، في هذه الليلة المباركة، اللهم فأعطهم سؤلهم، ولا تخيب رجاءنا ورجاءهم، ولا تردنا خائبين برحمتك يا أرحم الراحمين' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'uu2' ]]
    ]
    ])
    ]);
    }
    if($data ==  'uu2' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'اللهم إنَّا نسألك في هذا المقام المبارك، وفي هذه الليلة المباركة أن تكتبنا من عتقائك من النار، اللهم أعتق رقابَنا ورقابَ آبائنا وأمهاتنا وسائر قراباتنا من النار يا عزيز يا غفار' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي??ᯓ ' , callback_data => 'uu3' ]]
    ]
    ])
    ]);
    }
    if($data ==  'uu3' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'اللهم أنتَ أحقَّ من ذُكر، وأحقَّ من عبد، وأنصرُ من ابتغى، وأرأف من مَلك، وأجود من سُئل، و أوسعُ من أعطى، أنتَ الملك لا شريك لكَ، والفرد لا تهلك، كل شيء هالك إلا وجهكَ، لن تطاع ألا بأذنك، ولن تعصى إلا بعلمك، تُطاع فتشكر، وتُعصى فتغفر، أقرب شهيد، وأدنى حفيظ، أخذت بالنواصي، وكتبت الآثار، ونسخت الآجال، القلوب لك مفضية، والسرُّ عندك علانية، الحلال ما أحللت، والحرام ما حرمت، والدين ما شرعت والأمر ما قضيت، الخلق خلقكَ، والعبد عبدكَ، وأنتَ الله الرؤوف الرحيم أسألك بنور وجهك الذي أشرقت له السماوات والأرض، أن تقبلنا العشية بإحسانك وأن تُجيرنا من النار برحمتك' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓرجوعᯓ𐂠' , callback_data => 'u17' ]]
    ]
    ])
    ]);
    }
    if($data ==  'u17' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     
     text => 
     
     "- قران
     "
     
     ,
     reply_markup =>json_encode([
     inline_keyboard =>[
    [['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"starta"]],
    
    
    ]
    ])
    ]);
    }
    
    
    
    
    if($data ==  'uuu' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'الدعاء عند اشتداد الريح:
 ( اللهم لقحًا لا عقيمًا )' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'uuu1' ]]
    ]
    ])
    ]);
    }if($data ==  'uuu1' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'دعاء المطر كما ورد عن الرسول -عليه الصلاة والسلام : 
( عن عائشة -رضي الله عنها- أن رسول الله -صلى الله عليه وسلم- كان إذا رأى المطر قال: {صيبًا نافعًا}، ويقصد بهذا الدعاء أن يكون المطر نافعًا دافعًا للفساد والضرر' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'uuu2' ]]
    ]
    ])
    ]);
    }
    if($data ==  'uuu2' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'دعاء المطر : 
(اللَّهم اسقِ بلدكَ وبهائمك، وانشُرْ رحمتك وأحيِ بلدك الميتَ اللهم اسقِنا غيثًا مغيثًا مَريئًا مُريعًا طَبَقًا واسِعًا عاجِلًا غيرَ آجلٍ نافعًا غيرَ ضار اللَّهم سُقْيا رَحمَةٍ ولا سُقْيا عذابٍ ولا هدم ولا غرَق ولا مَحْق اللَّهمَّ اسقنا الغيثَ وانصرنا على الأعداءِ)' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'uuu3' ]]
    ]
    ])
    ]);
    }
    if($data ==  'uuu3' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'دعاء المطر :
(اللَّهم حوالينا ولا علينا اللهم على الآكام والظّراب وبطون الأودية ومنابت الشجر)' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓرجوعᯓ𐂠' , callback_data => 'u3' ]]
    ]
    ])
    ]);
    }
    if($data ==  'u17' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     
     text => 
     
     "- قران
     "
     
     ,
     reply_markup =>json_encode([
     inline_keyboard =>[
    [['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"starta"]],
    
    
    ]
    ])
    ]);
    }
    
    
    
    
    
    if($data ==  'uuuu' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'ما ورد في قوله تعالى في سورة الفرقان: 
*{رَبَّنَا هَبْ لَنَا مِنْ أَزْوَاجِنَا وَذُرِّيَّاتِنَا قُرَّةَ أَعْيُنٍ وَاجْعَلْنَا لِلْمُتَّقِينَ إِمَامًا}*' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'uuuu1' ]]
    ]
    ])
    ]);
    }if($data ==  'uuuu1' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'ماورد في قوله تعالى في سورة الشعراء:
 *{رَبِّ هَبْ لِي حُكْمًا وَأَلْحِقْنِي بِالصَّالِحِينَ* وَاجْعَلْ لِي لِسَانَ صِدْقٍ فِي الآخِرِينَ* وَاجْعَلْنِي مِن وَرَثَةِ جَنَّةِ النَّعِيمِ}*' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'uuuu2' ]]
    ]
    ])
    ]);
    }
    if($data ==  'uuuu2' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'ما ورد في قوله تعالى في سورة الأحقاف:
 {*رَبِّ أَوْزِعْنِي أَنْ أَشْكُرَ نِعْمَتَكَ الَّتِي أَنْعَمْتَ عَلَيَّ وَعَلَى وَالِدَيَّ وَأَنْ أَعْمَلَ صَالِحًا تَرْضَاهُ وَأَصْلِحْ لِي فِي ذُرِّيَّتِي إِنِّي تُبْتُ إِلَيْكَ وَإِنِّي مِنَ الْمُسْلِمِينَ}*' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'uuuu3' ]]
    ]
    ])
    ]);
    }
    if($data ==  'uuuu3' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'ما ورد في قوله تعالى في سورة آل عمران:
 *{ربَّنَا اغْفِرْ لَنَا ذُنُوبَنَا وَإِسْرَافَنَا فِي أَمْرِنَا وَثَبِّتْ أَقْدَامَنَا وانصُرْنَا عَلَى الْقَوْمِ الْكَافِرِينَ}*' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓرجوعᯓ𐂠' , callback_data => 'u4' ]]
    ]
    ])
    ]);
    }
    if($data ==  'u17' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     
     text => 
     
     "- قران
     "
     
     ,
     reply_markup =>json_encode([
     inline_keyboard =>[
    [['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"starta"]],
    
    
    ]
    ])
    ]);
    }
    
    
    
    
    
    if($data ==  'uuuuu' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'رَبَّنَا آتِنَا فِي الدُّنْيَا حَسَنَةً وَفِي الْآخِرَةِ حَسَنَةً وَقِنَا عَذَابَ النَّارِ
' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'uuuuu1' ]]
    ]
    ])
    ]);
    }if($data ==  'uuuuu1' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '*{رَبَّنَا هَبْ لَنَا مِنْ أَزْوَاجِنَا وَذُرِّيَّاتِنَا قُرَّةَ أَعْيُنٍ وَاجْعَلْنَا لِلْمُتَّقِينَ إِمَامًا}*' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'uuuuu2' ]]
    ]
    ])
    ]);
    }
    if($data ==  'uuuuu2' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '{*رَبِّ اجْعَلْنِي مُقِيمَ الصَّلَاةِ وَمِنْ ذُرِّيَّتِي رَبَّنَا وَتَقَبَّلْ دُعَاءِ * رَبَّنَا اغْفِرْ لِي وَلِوَالِدَيَّ وَلِلْمُؤْمِنِينَ يَوْمَ يَقُومُ الْحِسَابُ}*' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'uuuuu3' ]]
    ]
    ])
    ]);
    }
    if($data ==  'uuuuu3' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'اللّهمَّ إنّك عفوٌّ تحبُّ العفوَ فاعفُ عنّي' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓرجوعᯓ𐂠' , callback_data => 'u11' ]]
    ]
    ])
    ]);
    }
    if($data ==  'u17' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     
     text => 
     
     "- قران
     "
     
     ,
     reply_markup =>json_encode([
     inline_keyboard =>[
    [['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"starta"]],
    
    
    ]
    ])
    ]);
    }
    
    
    
    
    
    if($data ==  'uuuuuu' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'يقول المسلم إذا أراد الخروج من المنزل لسفرٍ أو لغيره ما ورد عن أنس بن مالك -رضي الله عنه- أن رسول الله -صلى الله عليه وسلم- قال:
( مَنْ قالَ - يعني إذا خرج من بيته - : باسْمِ اللَّهِ ، تَوَكَّلْتُ على اللَّهِ ، وَلاَ حَوْلَ وَلاَ قُوَّةَ إِلاَّ باللَّهِ . يُقالُ لَهُ : كُفِيتَ وَوُقِيتَ وَهُدِيتَ ، فَتَتَنَحَّى لَهُ الشَّيَاطِينُ ، فَيَقُولُ لَهُ شَيطَانٌ آخَرُ : كَيْفَ لَكَ بِرَجُلٍ قَدْ هُدِيَ وكُفِيَ وَوُقِيَ ) ؟
' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'uuuuuu1' ]]
    ]
    ])
    ]);
    }if($data ==  'uuuuuu1' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'دعاء المسافر للمقيم: 
( أَسْتَوْدِعُكُمُ اللَّهَ الَّذِي لاَ تَضِيعُ وَدَائِعُهُ )' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'uuuuuu2' ]]
    ]
    ])
    ]);
    }
    if($data ==  'uuuuuu2' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'دعاء المقيم للمسافر:
 ( أَسْتَوْدِعُ اللَّهَ دِينَكَ، وَأَمَانَتَكَ، وَخَوَاتِيمَ عَمَلِكَ"، ويقول أيضًا: "زَوَّدَكَ اللَّهُ التَّقْوَى، وَغَفَرَ ذَنْبَكَ، وَيَسَّرَ لَكَ الخَيْرَ حَيْثُ ما كُنْتَ )' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'uuuuuu3' ]]
    ]
    ])
    ]);
    }
    if($data ==  'uuuuuu3' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'الذِكر أثناء السفر:  
الإكثار من التكبير والتسبيح، قَالَ جَابِرٌ رضي الله عنه :
 ( كُنَّا إِذَا صَعَدْنَا كَبَّرْنَا، وَإِذَا نَزَلْنَا سَبَّحْنَا )' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓالتالي𐂠ᯓ ' , callback_data => 'uuuuuu4' ]]
    ]
    ])
    ]);
    }
    if($data ==  'uuuuuu4' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'دعاء المسافر إذا أسحر:
 ( سَمَّعَ سَامِعٌ بِحَمْدِ اللَّهِ، وَحُسْنِ بَلاَئِهِ عَلَيْنَا، رَبَّنَا صاحِبْنَا، وَأَفْضِلْ عَلَيْنَا، عَائِذاً بِاللَّهِ مِنَ النَّارِ". دعاء المسافر إذا نزل منزلًا: "أَعُوذُ بِكَلِمَاتِ اللَّهِ التَّامَّاتِ مِنْ شَرِّ مَا خَلَقَ )' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => '𐂠ᯓرجوعᯓ𐂠' , callback_data => 'u13' ]]
    ]
    ])
    ]);
    }
    if($data ==  'u17' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     
     text => 
     
     "- قران
     "
     
     ,
     reply_markup =>json_encode([
     inline_keyboard =>[
    [['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"starta"]],
    
    
    ]
    ])
    ]);
    }
   
   /*
   نهاية الاذكار
   */
   
   //القصص
if($data=="Qasass"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"
 قسم قصص القران الكريم'
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"قصة ادم عليه السلام",'callback_data'=>'sn1'],['text'=>"قصة ادريس عليه السلام",'callback_data'=>'sn2']],
[['text'=>"قصة نوح عليه السلام",'callback_data'=>'sn3'],['text'=>"قصة يوشع بن نون عليه السلام",'callback_data'=>'sn4']],
[['text'=>"قصة هود عليه السلام",'callback_data'=>'sn5'],['text'=>"قصة ابراهيم عليه السلام",'callback_data'=>'sn6']],
[['text'=>"قصة لوط عليه السلام",'callback_data'=>'sn7'],['text'=>"قصة العزير عليه السلام",'callback_data'=>'sn8']],
[['text'=>"قصة موسى عليه السلام",'callback_data'=>'sn9'],['text'=>"قصة ايوب عليه السلام",'callback_data'=>'sn10']],
[['text'=>"قصة سليمان عليه السلام",'callback_data'=>'sn11'],['text'=>"قصة صالح عليه السلام",'callback_data'=>'sn12']],
[['text'=>"قصة يونس عليه السلام",'callback_data'=>'sn13'],['text'=>"قصة يوسف عليه السلام",'callback_data'=>'sn14']],
[['text'=>"قصة ابليس والرجل الصالح",'callback_data'=>'sn15'],['text'=>"قصة ذو القرنين",'callback_data'=>'sn16']],
[['text'=>"قصة قابيل وهابيل",'callback_data'=>'sn17'],['text'=>"قصة اصحاب السبت",'callback_data'=>'sn18']],
[['text'=>"قصة بقرة بنو اسرائيل",'callback_data'=>'sn19'],['text'=>"قصة اصحاب الكهف",'callback_data'=>'sn20']],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"m11"]],
]])]);}

/*
تنفيذ القصص
*/
if($data == "sn1"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sand_199/24",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sn2"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sand_199/11",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sn3"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sand_199/25",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sn4"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sand_199/6",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sn5"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sand_199/2",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sn6"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sand_199/23",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sn7"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sand_199/3",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sn8"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sand_199/8",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sn9"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sand_199/5",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sn10"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sand_199/4",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sn11"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sand_199/7",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sn12"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sand_199/9",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sn13"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sand_199/10",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sn14"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sand_199/12",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sn15"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sand_199/13",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sn16"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sand_199/14",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sn17"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sand_199/15",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sn18"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sand_199/16",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sn19"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sand_199/17",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "sn20"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sand_199/18",
reply_to_message_id =>$message->message_id, 
]);}
/*
نهاية القصص
*/

//الرقيه
if($data=="roqua"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>"
 قسم قصص الرقيه الشرعيه' 
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 reply_markup =>json_encode([
 inline_keyboard =>[
[[ 'text' => 'ياسر الدوسري .',callback_data => 'mt1' ]],
[['text'=> 'ماهر المعيقلي' ,callback_data => 'mt2']] ,
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"m11"]],   
    ]
    ])
    ]);
    }

if($data == "mt1"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sand_199/20",
reply_to_message_id =>$message->message_id, 
]);}
if($data == "mt2"){
   bot('sendaudio',[
    'chat_id'=>$chat_id,
 'audio'=>"https://t.me/sand_199/17",
reply_to_message_id =>$message->message_id, 
]);}
if($text == 'اغاني' || $text == 'الاغاني'){ 
bot( sendphoto ,[
 chat_id =>$chat_id,
 photo =>"https://t.me/tlashan/12",
 caption =>"
اختر نوع اغنيتك 𐂠ᯓ.                                   
Choose your song type 𐂠ᯓ
. ", 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'مصري','callback_data'=>"aganeyy1"],['text'=>'اجنبي','callback_data'=>"aganeyy2"]],
[['text'=>'سوري','callback_data'=>"soureee6y"]],
[['text'=>'عراقي','callback_data'=>"erak8eyy"],['text'=>'تركي','callback_data'=>"tork4eyy"]],
[['text'=>'سعودي','callback_data'=>"soode4y"]],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"m11"]],
]])]);}

if($data == "aganeyy" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر نوع اغنيتك 𐂠ᯓ.                                   
Choose your song type 𐂠ᯓ

',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'مصري','callback_data'=>"aganeyy1"],['text'=>'اجنبي','callback_data'=>"aganeyy2"]],
[['text'=>'سوري','callback_data'=>"soureee6y"]],
[['text'=>'عراقي','callback_data'=>"erak8eyy"],['text'=>'تركي','callback_data'=>"tork4eyy"]],
[['text'=>'سعودي','callback_data'=>"soode4y"]],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"m11"]],
]])]);}
if($data == "aganeyy1" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر اغنيتك 𐂠ᯓ
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'ويجز 𐂠ᯓ','callback_data'=>"wegz"],['text'=>'بابلو 𐂠ᯓ','callback_data'=>"bablo"],['text'=>'الجوكر 𐂠ᯓ','callback_data'=>"elgoker"]],
[['text'=>'ابيوسف 𐂠ᯓ','callback_data'=>"abyo"],['text'=>'مروان موسي 𐂠ᯓ','callback_data'=>"maro"],['text'=>'عفروتو 𐂠ᯓ','callback_data'=>"afrt"]],
[['text'=>'عنبه 𐂠ᯓ','callback_data'=>"anpa"],['text'=>'محمد سعيد 𐂠ᯓ','callback_data'=>"sidoo"],['text'=>'عمار حسني 𐂠ᯓ','callback_data'=>"amrhos"]],
[['text'=>'شاكوش 𐂠ᯓ','callback_data'=>"skosh"],['text'=>'عمرو دياب 𐂠ᯓ','callback_data'=>"diab"],['text'=>'اصالة 𐂠ᯓ','callback_data'=>"asala"]],
[['text'=>'احمد كامل 𐂠ᯓ','callback_data'=>"kaml"],['text'=>'حسين الجسمي 𐂠ᯓ','callback_data'=>"gsmy"],['text'=>'رامي صبري 𐂠ᯓ','callback_data'=>"sabryy"]],
[['text'=>'حماقي 𐂠ᯓ','callback_data'=>"hmaki"],['text'=>'بيكا 𐂠ᯓ','callback_data'=>"bika"],['text'=>'تامر حسني 𐂠ᯓ','callback_data'=>"hosnyy"]],
[['text'=>'مسلم 𐂠ᯓ','callback_data'=>"muslim"],['text'=>'شاهين 𐂠ᯓ','callback_data'=>"sahyn"],['text'=>'باتيستوتا 𐂠ᯓ','callback_data'=>"batisto"]],
[['text'=>'ويزي 𐂠ᯓ','callback_data'=>"wezy"],['text'=>'ابو الانوار 𐂠ᯓ','callback_data'=>"anoar"],['text'=>'مهرجانات 𐂠ᯓ','callback_data'=>"mahrgan"]],
[['text'=>'شاموفرز 𐂠ᯓ','callback_data'=>"shrmof"],['text'=>'كاريوكي 𐂠ᯓ','callback_data'=>"karoki"],['text'=>'احمد مكي 𐂠ᯓ','callback_data'=>"mikoo"]],
[['text'=>'اوكا واورتيجا 𐂠ᯓ','callback_data'=>"okaworti"],['text'=>'سعد المجرد 𐂠ᯓ','callback_data'=>"elmgrd"],['text'=>'اليسا 𐂠ᯓ','callback_data'=>"lisao"]],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy"]],
]])]);}
if($data == "lisao" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني اليسا 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 𐂠ᯓ صاحبه رأي','callback_data'=>"lisao1"],['text'=>' 𐂠ᯓ نفسي أقوله','callback_data'=>"lisao2"]],
[['text'=>'𐂠ᯓ مكتوبه ليك ','callback_data'=>"lisao3"],['text'=>' 𐂠ᯓعكس الي شايفنها','callback_data'=>"lisao4"]],
[['text'=>'𐂠ᯓ ع بالي حبيبي ','callback_data'=>"lisao5"],['text'=>'𐂠ᯓ كارهني','callback_data'=>"lisao6"]],
[['text'=>'𐂠ᯓ وفي','callback_data'=>"lisao7"],['text'=>'𐂠ᯓ ياريت','callback_data'=>"lisao8"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}


if($data == "lisao1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/683",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "lisao2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/684",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "lisao3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/685",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "lisao4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/686",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "lisao5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/687",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "lisao6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/688",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "lisao7"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/689",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "lisao8"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/690",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "elmgrd" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني سعد المجرد 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 𐂠ᯓ عدي الكلام','callback_data'=>"elmgrd1"],['text'=>' 𐂠ᯓ غزالي','callback_data'=>"elmgrd2"]],
[['text'=>'𐂠ᯓ إنساي ','callback_data'=>"elmgrd3"],['text'=>' 𐂠ᯓغلطانه','callback_data'=>"elmgrd4"]],
[['text'=>'𐂠ᯓ يخليك للي ','callback_data'=>"elmgrd5"],['text'=>'𐂠ᯓ معلم','callback_data'=>"elmgrd6"]],
[['text'=>'𐂠ᯓ انتي','callback_data'=>"elmgrd7"],['text'=>'𐂠ᯓ كزبلانكا','callback_data'=>"elmgrd8"]],
[['text'=>'𐂠ᯓ نجيبك نجيبك','callback_data'=>"elmgrd9"],['text'=>'𐂠ᯓاسف حبيبي ','callback_data'=>"elmgrd10"]],
[['text'=>'𐂠ᯓ ليت جو','callback_data'=>"elmgrd11"],['text'=>'𐂠ᯓمال حبيبي ','callback_data'=>"elmgrd12"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}

if($data == "elmgrd1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/671",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "elmgrd2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/672",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "elmgrd3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/673",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "elmgrd4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/674",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "elmgrd5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/675",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "elmgrd6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/676",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "elmgrd7"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/677",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "elmgrd8"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/678",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "elmgrd9"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/679",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "elmgrd10"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/680",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "elmgrd11"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/681",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "elmgrd12"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/682",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "okaworti" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني اوكا واورتيجا 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 𐂠ᯓ لغه العيون','callback_data'=>"okaworti1"],['text'=>' 𐂠ᯓ واحده عملتلي عمل','callback_data'=>"okaworti2"]],
[['text'=>'𐂠ᯓ دلع بنات ','callback_data'=>"okaworti3"],['text'=>' 𐂠ᯓ العب يلا','callback_data'=>"okaworti4"]],
[['text'=>'𐂠ᯓ 1991 ','callback_data'=>"okaworti5"],['text'=>'𐂠ᯓ امتي','callback_data'=>"okaworti6"]],
[['text'=>'𐂠ᯓ طب ليه كده','callback_data'=>"okaworti7"],['text'=>'𐂠ᯓ هنولع','callback_data'=>"okaworti8"]],
[['text'=>'𐂠ᯓ نوزهي','callback_data'=>"okaworti9"],['text'=>'𐂠ᯓ سوري ','callback_data'=>"okaworti10"]],
[['text'=>'𐂠ᯓ فامبير','callback_data'=>"okaworti11"],['text'=>'𐂠ᯓ دوس بنزين ','callback_data'=>"okaworti12"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}


if($data == "okaworti1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/659",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "okaworti2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/660",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "okaworti3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/661",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "okaworti4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/662",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "okaworti5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/663",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "okaworti6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/664",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "okaworti7"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/665",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "okaworti8"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/666",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "okaworti9"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/667",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "okaworti10"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/668",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "okaworti11"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/669",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "okaworti12"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/670",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "mikoo" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني احمد مكي 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'قطر الحياه 𐂠ᯓ','callback_data'=>"mikoo1"],['text'=>'اخره الشقاوه𐂠ᯓ','callback_data'=>"mikoo2"]],
[['text'=>'ايام زمان𐂠ᯓ','callback_data'=>"mikoo3"],['text'=>'طرقت بابك 𐂠ᯓ','callback_data'=>"mikoo4"]],
[['text'=>'وقفه ناصيه زمان𐂠ᯓ','callback_data'=>"mikoo5"],['text'=>'الحاسه السابعه 𐂠ᯓ','callback_data'=>"mikoo6"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}

if($data == "mikoo1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/653",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "mikoo2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/654",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "mikoo3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/655",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "mikoo4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/656",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "mikoo5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/657",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "mikoo6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/658",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "karoki" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني كاريوكي 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'يا ابيض يا اسود 𐂠ᯓ','callback_data'=>"karoki1"],['text'=>'كان لك معايا𐂠ᯓ','callback_data'=>"karoki2"]],
[['text'=>'الكيف𐂠ᯓ','callback_data'=>"karoki3"],['text'=>'السكه شمال في شمال 𐂠ᯓ','callback_data'=>"karoki4"]],
[['text'=>'الديناصور𐂠ᯓ','callback_data'=>"karoki5"],['text'=>'هاتلنا بالباقي لبان 𐂠ᯓ','callback_data'=>"karoki6"]],
[['text'=>'انا السجاره 𐂠ᯓ','callback_data'=>"karoki7"],['text'=>'نقطه بيضا 𐂠ᯓ','callback_data'=>"karoki8"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}

if($data == "karoki1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/643",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "karoki2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/644",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "karoki3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/645",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "karoki4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/648",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "karoki5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/649",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "karoki6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/650",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "karoki7"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/651",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "karoki8"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/652",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "shrmof" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني شارموفرز 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'سنجل 𐂠ᯓ','callback_data'=>"shrmof1"],['text'=>'خمسه سنتي𐂠ᯓ','callback_data'=>"shrmof2"]],
[['text'=>'زومبي𐂠ᯓ','callback_data'=>"shrmof3"],['text'=>'انفصام 𐂠ᯓ','callback_data'=>"shrmof4"]],
[['text'=>'ايزي موني𐂠ᯓ','callback_data'=>"shrmof5"],['text'=>'خلاص هسيطر 𐂠ᯓ','callback_data'=>"shrmof6"]],
[['text'=>'زامبا 𐂠ᯓ','callback_data'=>"shrmof7"],['text'=>'مفتقد الحبيبه 𐂠ᯓ','callback_data'=>"shrmof8"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}

if($data == "shrmof1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/635",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "shrmof2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/636",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "shrmof3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/637",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "shrmof4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/638",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "shrmof5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/639",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "shrmof6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/640",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "shrmof7"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/642",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "shrmof8"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/641",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "muslim" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني مسلم 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'يا صحبه ورا الستاره 𐂠ᯓ','callback_data'=>"muslim1"],['text'=>'بتوع مصالح𐂠ᯓ','callback_data'=>"muslim2"]],
[['text'=>'قلبي عايز صرمه𐂠ᯓ','callback_data'=>"muslim3"],['text'=>'مولود كبير 𐂠ᯓ','callback_data'=>"muslim4"]],
[['text'=>'اضربت بكيف وخمره𐂠ᯓ','callback_data'=>"muslim5"],['text'=>'اربع حيطان 𐂠ᯓ','callback_data'=>"muslim6"]],
[['text'=>'حرب وحوش 𐂠ᯓ','callback_data'=>"muslim7"],['text'=>'هضرب عيار 𐂠ᯓ','callback_data'=>"muslim8"]],
[['text'=>'الاسم دبابه 𐂠ᯓ','callback_data'=>"muslim9"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}


if($data == "muslim1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/194",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "muslim2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/195",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "muslim3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/196",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "muslim4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/197",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "muslim5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/198",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "muslim6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/199",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "muslim7"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/200",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "muslim8"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/201",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "muslim9"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/202",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "abyo" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني ابيوسف 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 𐂠ᯓ سيستم','callback_data'=>"abyo1"],['text'=>' 𐂠ᯓ مونشاكو','callback_data'=>"abyo2"]],
[['text'=>'𐂠ᯓ نا نا نا','callback_data'=>"abyo3"],['text'=>' 𐂠ᯓ فوقني','callback_data'=>"abyo4"]],
[['text'=>'𐂠ᯓ باشا اعتمد','callback_data'=>"abyo5"],['text'=>'𐂠ᯓ استلم يا هيثم','callback_data'=>"abyo6"]],
[['text'=>'𐂠ᯓ انترو','callback_data'=>"abyo7"],['text'=>'𐂠ᯓ كان ف دماغي','callback_data'=>"abyo8"]],
[['text'=>'𐂠ᯓ عظمه','callback_data'=>"abyo9"],['text'=>'𐂠ᯓ نافثلين','callback_data'=>"abyo10"]],
[['text'=>'𐂠ᯓ عمر','callback_data'=>"abyo11"],['text'=>'𐂠ᯓ انا مش هقدر حد','callback_data'=>"abyo12"]],
[['text'=>'𐂠ᯓ عزرائيل ','callback_data'=>"abyo13"],['text'=>'𐂠ᯓ ثانوس','callback_data'=>"abyo14"]],
[['text'=>'𐂠ᯓ ولا مسا','callback_data'=>"abyo15"],['text'=>'𐂠ᯓ محدش له عندي حاجه','callback_data'=>"abyo16"]],
[['text'=>'𐂠ᯓ مورتال كومبات','callback_data'=>"abyo17"],['text'=>'𐂠ᯓ يوم الاتنين','callback_data'=>"abyo18"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}

if($data == "abyo1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/481",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}



if($data == "abyo2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/482",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "abyo3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/483",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "abyo4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/484",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "abyo5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/485",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "abyo6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/486",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "abyo8"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/487",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "abyo7"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/488",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "abyo9"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/489",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "abyo12"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/490",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "abyo10"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/491",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "abyo11"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/492",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "abyo13"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/493",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "abyo14"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/494",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "abyo16"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/495",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "abyo17"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/496",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "abyo15"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/497",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "abyo18"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/498",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "mahrgan" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه المهرجانات 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'عملت بلوك 𐂠ᯓ','callback_data'=>"mahrgan1"],['text'=>'ابطال ومشتهم مرا 𐂠ᯓ','callback_data'=>"mahrgan2"]],
[['text'=>'كرهت الناس 𐂠ᯓ','callback_data'=>"mahrgan3"],['text'=>'ندمانه 𐂠ᯓ','callback_data'=>"mahrgan4"]],
[['text'=>'يلا اكشن 𐂠ᯓ','callback_data'=>"mahrgan5"],['text'=>'في القرايب 𐂠ᯓ','callback_data'=>"mahrgan6"]],
[['text'=>'قلبي ميت 𐂠ᯓ','callback_data'=>"mahrgan7"],['text'=>'اخواتي 𐂠ᯓ','callback_data'=>"mahrgan8"]],
[['text'=>'خاينه وبايعه 𐂠ᯓ','callback_data'=>"mahrgan9"],['text'=>'بركان فجر 𐂠ᯓ','callback_data'=>"mahrgan10"]],
[['text'=>'مع السلامه 𐂠ᯓ','callback_data'=>"mahrgan11"],['text'=>'وقت عوزه 𐂠ᯓ','callback_data'=>"mahrgan12"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}
if($data == "mahrgan1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/259",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "mahrgan2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/260",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "mahrgan3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/261",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "mahrgan4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/262",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "mahrgan5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/263",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "mahrgan6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/264",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "mahrgan7"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/265",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "mahrgan8"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/266",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "mahrgan9"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/267",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "mahrgan12"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/269",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "mahrgan11"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/268",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "mahrgan10"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/270",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "asala" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني اصالة 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 𐂠ᯓ جيتني مكسور','callback_data'=>"asala1"],['text'=>' 𐂠ᯓ اتحبني','callback_data'=>"asala2"]],
[['text'=>'𐂠ᯓ جابو سيرته','callback_data'=>"asala3"],['text'=>' 𐂠ᯓ ذاك الغبي','callback_data'=>"asala4"]],
[['text'=>'𐂠ᯓ بنت اكابر','callback_data'=>"asala5"],['text'=>'𐂠ᯓ 60 دقيقه','callback_data'=>"asala6"]],
[['text'=>'𐂠ᯓ لا تخاف','callback_data'=>"asala7"],['text'=>'𐂠ᯓ عقوبه','callback_data'=>"asala8"]],
[['text'=>'𐂠ᯓ كبير الشوق','callback_data'=>"asala9"],['text'=>'𐂠ᯓ شامخ','callback_data'=>"asala10"]],
[['text'=>'𐂠ᯓ اكثر','callback_data'=>"asala11"],['text'=>'𐂠ᯓ كان يهمني','callback_data'=>"asala12"]],
[['text'=>'𐂠ᯓ مبقاش انا ','callback_data'=>"asala13"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}
if($data == "asala1"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/365",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "asala2"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/366",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "asala3"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/367",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "asala4"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/368",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "asala5"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/369",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "asala6"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/370",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "asala7"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/371",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "asala8"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/372",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "asala9"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/373",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "asala10"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/374",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "asala11"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/375",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "asala12"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/376",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "asala13"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/377",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "elgoker" ){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني الجوكر 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 𐂠ᯓ سلمي ١','callback_data'=>"elgoker1"],['text'=>' 𐂠ᯓ سلمي ٢','callback_data'=>"elgoker2"]],
[['text'=>'𐂠ᯓاختلافنا رحمه','callback_data'=>"elgoker3"],['text'=>' 𐂠ᯓ الواقع','callback_data'=>"elgoker4"]],
[['text'=>'𐂠ᯓ فصله','callback_data'=>"elgoker5"],['text'=>'𐂠ᯓمناسك الالم','callback_data'=>"elgoker6"]],
[['text'=>'𐂠ᯓ الكبت','callback_data'=>"elgoker7"],['text'=>'𐂠ᯓ انفصام حاد ١','callback_data'=>"elgoker8"]],
[['text'=>'𐂠ᯓ انفصام حاد ٢','callback_data'=>"elgoker9"],['text'=>'𐂠ᯓ كوبايه عصير','callback_data'=>"elgoker10"]],
[['text'=>'𐂠ᯓ حلم كبير','callback_data'=>"elgoker11"],['text'=>'𐂠ᯓ فراق صالونات','callback_data'=>"elgoker12"]],
[['text'=>'𐂠ᯓ عالم تالت ','callback_data'=>"elgoker13"],['text'=>'𐂠ᯓ عالم رابع','callback_data'=>"elgoker14"]],
[['text'=>'𐂠ᯓ الوصايا ','callback_data'=>"elgoker15"],['text'=>'𐂠ᯓ العقد ','callback_data'=>"elgoker16"]],
[['text'=>'𐂠ᯓ خد فشار','callback_data'=>"elgoker17"],['text'=>'𐂠ᯓ فرصه تانيه','callback_data'=>"elgoker18"]],
[['text'=>'𐂠ᯓ دا تقدير','callback_data'=>"elgoker19"],['text'=>'𐂠ᯓقصيده ','callback_data'=>"elgoker20"]],
[['text'=>'قطه مغمضه 𐂠ᯓ','callback_data'=>"elgoker 21"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}



if($data == "elgoker1"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/504",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "elgoker2"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/505",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "elgoker3"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/506",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "elgoker4"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/507",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "elgoker5"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/508",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "elgoker6"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/509",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "elgoker7"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/510",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "elgoker8"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/511",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "elgoker9"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/512",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "elgoker10"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/513",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "elgoker11"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/514",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "elgoker12"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/515",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "elgoker13"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/516",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "elgoker14"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/517",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "elgoker15"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/518",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "elgoker16"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/519",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "elgoker17"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/520",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "elgoker18"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/521",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "elgoker19"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/522",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "elgoker20"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/523",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "elgoker21"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/524",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "hosnyy" ){
    bot( sendphoto ,[
 chat_id =>$chat_id,
 photo =>"https://t.me/tlashan/23",
 caption =>'
𐂠ᯓ قائمه اغاني تامر حسني 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 𐂠ᯓ ناسيني ليه','callback_data'=>"hosnyy1"],['text'=>' 𐂠ᯓ عيش بشوقكك','callback_data'=>"hosnyy2"]],
[['text'=>'𐂠ᯓ كل سنه وانت طيب','callback_data'=>"hosnyy3"],['text'=>' 𐂠ᯓميت وش ','callback_data'=>"hosnyy4"]],
[['text'=>'𐂠ᯓ الله شاهد','callback_data'=>"hosnyy5"],['text'=>'𐂠ᯓ حلم سنين','callback_data'=>"hosnyy6"]],
[['text'=>'𐂠ᯓ عمري ابتدي','callback_data'=>"hosnyy7"],['text'=>'𐂠ᯓ كفاياك اعذار','callback_data'=>"hosnyy8"]],
[['text'=>'𐂠ᯓ كل حاجه','callback_data'=>"hosnyy9"],['text'=>'𐂠ᯓ واخيرا','callback_data'=>"hosnyy10"]],
[['text'=>'𐂠ᯓ ثمن اختيار','callback_data'=>"hosnyy11"],['text'=>'𐂠ᯓورد صناعي','callback_data'=>"hosnyy12"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}
if($data == "hosnyy1"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/293",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "hosnyy2"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/294",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "hosnyy3"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/295",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "hosnyy4"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/296",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "hosnyy5"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/297",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "hosnyy6"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/298",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "hosnyy7"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/299",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "hosnyy8"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/300",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "hosnyy9"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/301",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "hosnyy10"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/302",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "hosnyy11"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/303",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "hosnyy12"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/304",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "skosh" ){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني حسن شاكوش 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'بنت الجيران 𐂠ᯓ','callback_data'=>"skosh1"],['text'=>'هنعمل لغبطيطا 𐂠ᯓ','callback_data'=>"skosh2"]],
[['text'=>'عود البطل 𐂠ᯓ','callback_data'=>"skosh3"],['text'=>'عود البنات 𐂠ᯓ','callback_data'=>"skosh4"]],
[['text'=>'شمس المجره 𐂠ᯓ','callback_data'=>"skosh5"],['text'=>'بونبوني ساقط 𐂠ᯓ','callback_data'=>"skosh6"]],
[['text'=>'جيشنا الابيض 𐂠ᯓ','callback_data'=>"skosh7"],['text'=>'انا علي وضعي 𐂠ᯓ','callback_data'=>"skosh8"]],
[['text'=>'يا ابن امك 𐂠ᯓ','callback_data'=>"skosh9"],['text'=>'خربانه انتي 𐂠ᯓ','callback_data'=>"skosh10"]],
[['text'=>'صاحبي دراعي 𐂠ᯓ','callback_data'=>"skosh11"],['text'=>'يا بنت قلبي 𐂠ᯓ','callback_data'=>"skosh12"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}
if($data == "skosh1"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/280",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "skosh2"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/281",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "skosh3"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/282",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "skosh4"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/283",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "skosh5"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/284",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "skosh6"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/285",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "skosh7"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/286",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "skosh8"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/287",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "skosh9"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/288",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "skosh10"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/289",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "skosh11"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/290",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "skosh12"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/291",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "hmaki" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني حماقي 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 𐂠ᯓ من البدايه','callback_data'=>"hmaki1"],['text'=>' 𐂠ᯓ قدام الناس','callback_data'=>"hmaki2"]],
[['text'=>'𐂠ᯓ يا ستار','callback_data'=>"hmaki3"],['text'=>' 𐂠ᯓ راسمك في خيالي','callback_data'=>"hmaki4"]],
[['text'=>'𐂠ᯓ ما بلاش','callback_data'=>"hmaki5"],['text'=>'𐂠ᯓ واعمل ايه','callback_data'=>"hmaki6"]],
[['text'=>'𐂠ᯓ واحده واحده','callback_data'=>"hmaki7"],['text'=>'𐂠ᯓ من قلبي بغني','callback_data'=>"hmaki8"]],
[['text'=>'𐂠ᯓ قالو عنك','callback_data'=>"hmaki9"],['text'=>'𐂠ᯓ تعرف بحبك ليه','callback_data'=>"hmaki10"]],
[['text'=>'𐂠ᯓ ياللي زعلان','callback_data'=>"hmaki11"],['text'=>'𐂠ᯓ بقيت معاه','callback_data'=>"hmaki12"]],
[['text'=>'𐂠ᯓ اجمل يوم ','callback_data'=>"hmaki13"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}
if($data == "hmaki1"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/536",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "hmaki2"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/352",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "hmaki3"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/353",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "hmaki4"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/354",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "hmaki5"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/355",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "hmaki6"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/356",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "hmaki7"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/357",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "hmaki8"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/358",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "hmaki9"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/359",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "hmaki10"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/360",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "hmaki11"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/361",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "hmaki12"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/362",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "hmaki13"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/363",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "anpa" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني عنبه 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 𐂠ᯓ هنا القاهره','callback_data'=>"anpa1"],['text'=>' 𐂠ᯓ حرب القرود','callback_data'=>"anpa2"]],
[['text'=>'𐂠ᯓالعملاق ','callback_data'=>"anpa3"],['text'=>' 𐂠ᯓ دنيا الموالد','callback_data'=>"anpa4"]],
[['text'=>'𐂠ᯓ عالم الجريمه','callback_data'=>"anpa5"],['text'=>'𐂠ᯓ الليله باظت','callback_data'=>"anpa6"]],
[['text'=>'𐂠ᯓ العين علينا','callback_data'=>"anpa7"],['text'=>'𐂠ᯓ ظاطت','callback_data'=>"anpa8"]],
[['text'=>'𐂠ᯓ كينج اللعبه','callback_data'=>"anpa9"],['text'=>'𐂠ᯓ جينا ترجعو','callback_data'=>"anpa10"]],
[['text'=>'𐂠ᯓالقفاص ','callback_data'=>"anpa11"],['text'=>'𐂠ᯓ مفيش اصول','callback_data'=>"anpa12"]],
[['text'=>'𐂠ᯓطيارات ','callback_data'=>"anpa13"],['text'=>'𐂠ᯓ غشيم','callback_data'=>"anpa14"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}

if($data == "anpa1"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/382",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "anpa2"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/383",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "anpa3"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/384",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "anpa4"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/385",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "anpa5"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/386",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "anpa6"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/387",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "anpa7"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/389",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "anpa8"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/390",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "anpa9"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/391",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "anpa10"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/392",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "anpa11"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/393",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "anpa12"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/394",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "anpa13"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/395",
 'caption'=>"𝙲𝙷 ??. : @UU_FUCK",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "anpa14"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/396",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "anoar" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ  قائمه اغاني ابو الانوار 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 𐂠ᯓ عسليه','callback_data'=>"anoar1"],['text'=>' 𐂠ᯓ مقصوره','callback_data'=>"anoar2"]],
[['text'=>'𐂠ᯓانجز ','callback_data'=>"anoar3"],['text'=>' 𐂠ᯓ لول','callback_data'=>"anoar4"]],
[['text'=>'𐂠ᯓ غلبه','callback_data'=>"anoar5"],['text'=>'𐂠ᯓ اتغيرنا','callback_data'=>"anoar6"]],
[['text'=>'𐂠ᯓ صبحي','callback_data'=>"anoar7"],['text'=>'𐂠ᯓ سكو','callback_data'=>"anoar8"]],
[['text'=>'𐂠ᯓ بارات','callback_data'=>"anoar9"],['text'=>'𐂠ᯓالبويرتو ','callback_data'=>"anoar10"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}

if($data == "anoar1"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/527",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "anoar2"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/528",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ?? ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "anoar3"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/529",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "anoar4"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/530",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "anoar5"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/531",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "anoar6"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/532",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "anoar7"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/533",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "anoar8"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/534",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "anoar9"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/535",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "anoar10"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/537",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "bika" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني بيكا 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 𐂠ᯓ هاتلي فوديكا','callback_data'=>"bika1"],['text'=>' 𐂠ᯓ وداع يا دنيا','callback_data'=>"bika2"]],
[['text'=>'𐂠ᯓهلا والله ','callback_data'=>"bika3"],['text'=>' 𐂠ᯓ باتون ساليه','callback_data'=>"bika4"]],
[['text'=>'𐂠ᯓ انا حبيتك وجرحتيني','callback_data'=>"bika5"],['text'=>'𐂠ᯓ انا بيكا ماي لاف فانز','callback_data'=>"bika6"]],
[['text'=>'𐂠ᯓ عالم فاسد','callback_data'=>"bika7"],['text'=>'𐂠ᯓ رب الكون','callback_data'=>"bika8"]],
[['text'=>'𐂠ᯓ شارب المرار','callback_data'=>"bika9"],['text'=>'𐂠ᯓ حب عمري','callback_data'=>"bika10"]],
[['text'=>'𐂠ᯓ صاحبي دراعي','callback_data'=>"bika11"],['text'=>'𐂠ᯓ سكينه برازيلي','callback_data'=>"bika12"]],
[['text'=>'𐂠ᯓبنت ابوها ','callback_data'=>"bika13"],['text'=>'𐂠ᯓ مساء النقص','callback_data'=>"bika14"]],
[['text'=>'بنتخان 𐂠ᯓ','callback_data'=>"bika15"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}


if($data == "bika1"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/307",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "bika2"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/308",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "bika3"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/309",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "bika4"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/310",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "bika5"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/311",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "bika6"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/312",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "bika7"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/313",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "bika8"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/314",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "bika9"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/315",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "bika10"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/316",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "bika11"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/317",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "bika12"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/318",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "bika13"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/319",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "bika14"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/320",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "bika15"){
bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/321",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sabryy" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني رامي صبري 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 𐂠ᯓ خطيره','callback_data'=>"sabryy1"],['text'=>' 𐂠ᯓ غريب الحب','callback_data'=>"sabryy2"]],
[['text'=>' 𐂠ᯓ فارق معاك','callback_data'=>"sabryy4"]],
[['text'=>'𐂠ᯓ قولو الي عندي','callback_data'=>"sabryy5"],['text'=>'𐂠ᯓ صعبان عليا','callback_data'=>"sabryy6"]],
[['text'=>'𐂠ᯓ وعجبي عليك يا زمن','callback_data'=>"sabryy7"],['text'=>'𐂠ᯓ بتاع بنات','callback_data'=>"sabryy8"]],
[['text'=>'𐂠ᯓ وبقابل ناس','callback_data'=>"sabryy9"],['text'=>'𐂠ᯓ بتهتمي','callback_data'=>"sabryy10"]],
[['text'=>'𐂠ᯓ حكايه حينا','callback_data'=>"sabryy11"],['text'=>'𐂠ᯓ انا بعترفلك','callback_data'=>"sabryy12"]],
[['text'=>'حاول تنساني 𐂠ᯓ','callback_data'=>"sabryy13"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}


if($data == "sabryy1"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/430",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sabryy2"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/431",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sabryy3"){
bot( sendaudio ,[
 chat_id =>$chat_id,
 audio =>"https://t.me/amk7adr/432",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sabryy4"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/433",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sabryy5"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/434",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sabryy6"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/435",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sabryy7"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/436",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sabryy8"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/437",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sabryy9"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/438",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sabryy10"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/439",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sabryy11"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/440",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sabryy12"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/441",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sabryy13"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/442",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "amrhos" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني عمار حسني 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'بتيجي ف بالي 𐂠ᯓ','callback_data'=>"amrhos1"],['text'=>'برشامه منوم 𐂠ᯓ','callback_data'=>"amrhos2"]],
[['text'=>'بساط 𐂠ᯓ','callback_data'=>"amrhos3"],['text'=>'طفره 𐂠ᯓ','callback_data'=>"amrhos4"]],
[['text'=>'ترام 𐂠ᯓ','callback_data'=>"amrhos5"],['text'=>'هلوسه 𐂠ᯓ','callback_data'=>"amrhos6"]],
[['text'=>'مسوخ 𐂠ᯓ','callback_data'=>"amrhos7"],['text'=>'اخر عازف 𐂠ᯓ','callback_data'=>"amrhos8"]],
[['text'=>'بلاش تغني 𐂠ᯓ','callback_data'=>"amrhos9"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}
if($data == "amrhos1"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/341",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "amrhos2"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/342",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "amrhos3"){
bot( sendaudio ,[
 chat_id =>$chat_id,
 audio =>"https://t.me/amk7adr/343",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "amrhos4"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/344",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "amrhos5"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/345",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "amrhos6"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/346",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "amrhos7"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/347",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "amrhos8"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/348",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "amrhos9"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/349",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "batisto" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني باتيستوتا 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'الفا ميل 𐂠ᯓ','callback_data'=>"batisto1"],['text'=>'الطوفان 𐂠ᯓ','callback_data'=>"batisto2"]],
[['text'=>'المولد 𐂠ᯓ','callback_data'=>"batisto3"],['text'=>'خطر 𐂠ᯓ','callback_data'=>"batisto4"]],
[['text'=>'التراب 𐂠ᯓ','callback_data'=>"batisto5"],['text'=>'باد 𐂠ᯓ','callback_data'=>"batisto6"]],
[['text'=>'مظلات 𐂠ᯓ','callback_data'=>"batisto7"],['text'=>'نيو ويف  𐂠ᯓ','callback_data'=>"batisto8"]],
[['text'=>'ناس 𐂠ᯓ','callback_data'=>"batisto9"],['text'=>'بيره 𐂠ᯓ','callback_data'=>"batisto10"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}
if($data == "batisto1"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/538",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "batisto2"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/539",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "batisto3"){
bot( sendaudio ,[
 chat_id =>$chat_id,
 audio =>"https://t.me/amk7adr/540",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "batisto4"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/541",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "batisto5"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/542",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "batisto6"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/543",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "batisto7"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/544",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "batisto8"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/545",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "batisto9"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/546",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "batisto10"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/547",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "wezy" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني ويزي 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'علي العادي 𐂠ᯓ','callback_data'=>"wezy1"],['text'=>'مرجان 𐂠ᯓ','callback_data'=>"wezy2"]],
[['text'=>'كله بالحب 𐂠ᯓ','callback_data'=>"wezy3"],['text'=>'هوم الون 𐂠ᯓ','callback_data'=>"wezy4"]],
[['text'=>'متقدرش توقني𐂠ᯓ','callback_data'=>"wezy5"],['text'=>'بليونير 𐂠ᯓ','callback_data'=>"wezy6"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}
if($data == "wezy1"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/548",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "wezy2"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/549",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "wezy3"){
bot( sendaudio ,[
 chat_id =>$chat_id,
 audio =>"https://t.me/amk7adr/550",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "wezy4"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/551",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "wezy5"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/552",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "wezy6"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/553",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "wezy7"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/554",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sahyn" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني شاهين 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'صوت يجع 𐂠ᯓ','callback_data'=>"sahyn1"],['text'=>'اكسلانس 𐂠ᯓ','callback_data'=>"sahyn2"]],
[['text'=>'الفرنده 𐂠ᯓ','callback_data'=>"sahyn3"],['text'=>'كوم تراب 𐂠ᯓ','callback_data'=>"sahyn4"]],
[['text'=>'ايد هون𐂠ᯓ','callback_data'=>"sahyn5"],['text'=>'اشرس انواع الصقور 𐂠ᯓ','callback_data'=>"sahyn6"]],
[['text'=>'زين 𐂠ᯓ','callback_data'=>"sahyn7"],['text'=>'كل شيت 𐂠ᯓ','callback_data'=>"sahyn8"]],
[['text'=>'جديد نوفي 𐂠ᯓ','callback_data'=>"sahyn9"],['text'=>'حديث مع الانا 𐂠ᯓ','callback_data'=>"sahyn10"]],
[['text'=>'سايفر المعادي𐂠ᯓ','callback_data'=>"sahyn11"],['text'=>'جامد هيك 𐂠ᯓ','callback_data'=>"sahyn12"]],
[['text'=>'لولو  𐂠ᯓ','callback_data'=>"sahyn13"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}

if($data == "sahyn1"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/216",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sahyn2"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/217",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sahyn3"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/218",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sahyn4"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/219",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sahyn5"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/220",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sahyn6"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/221",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sahyn7"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/222",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sahyn8"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/223",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sahyn9"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/224",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sahyn10"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/225",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sahyn11"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/226",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sahyn12"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/554",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sahyn13"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/555",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "kaml" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني احمد كامل 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'قولي 𐂠ᯓ','callback_data'=>"kaml1"],['text'=>'مبقتش اخاف 𐂠ᯓ','callback_data'=>"kaml2"]],
[['text'=>'كان في طفل 𐂠ᯓ','callback_data'=>"kaml3"],['text'=>'متزعليش 𐂠ᯓ','callback_data'=>"kaml4"]],
[['text'=>'مش شرط𐂠ᯓ','callback_data'=>"kaml5"],['text'=>'انا رايح 𐂠ᯓ','callback_data'=>"kaml6"]],
[['text'=>'يا ليل 𐂠ᯓ','callback_data'=>"kaml7"],['text'=>'كانسر 𐂠ᯓ','callback_data'=>"kaml8"]],
[['text'=>'زمن المعجزات 𐂠ᯓ','callback_data'=>"kaml9"],['text'=>'جاوبنا 𐂠ᯓ','callback_data'=>"kaml10"]],
[['text'=>'خليك صاحي  𐂠ᯓ','callback_data'=>"kaml11"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}

if($data == "kaml1"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/144",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "kaml2"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/145",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "kaml3"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/146",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "kaml4"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/147",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "kaml5"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/148",
 'caption'=>"𝙲?? 𖣲. : @UU_FUCK",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "kaml6"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/149",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "kaml7"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/150",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "kaml8"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/151",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "kaml9"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/152",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "kaml10"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/153",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "kaml11"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/154",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "gsmy" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني حسين الجسمي 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'اه لقيت الطبطه','callback_data'=>"gsmy1"],['text'=>'الحساس 𐂠ᯓ','callback_data'=>"gsmy2"]],
[['text'=>'خطير 𐂠ᯓ','callback_data'=>"gsmy3"],['text'=>'اهواك للموت 𐂠ᯓ','callback_data'=>"gsmy4"]],
[['text'=>'احبك𐂠ᯓ','callback_data'=>"gsmy5"],['text'=>'فديته 𐂠ᯓ','callback_data'=>"gsmy6"]],
[['text'=>'ابشرك 𐂠ᯓ','callback_data'=>"gsmy7"],['text'=>'شفت 𐂠ᯓ','callback_data'=>"gsmy8"]],
[['text'=>'مهم جدا 𐂠ᯓ','callback_data'=>"gsmy9"],['text'=>'الاسير 𐂠ᯓ','callback_data'=>"gsmy10"]],
[['text'=>'بنعدي 𐂠ᯓ','callback_data'=>"gsmy11"],['text'=>'بطل الحكايه 𐂠ᯓ','callback_data'=>"gsmy12"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}


if($data == "gsmy1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/168",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "gsmy2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/169",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "gsmy3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/170",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "gsmy4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/171",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "gsmy5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/172",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "gsmy6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/173",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "gsmy7"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/174",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "gsmy8"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/175",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "gsmy9"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/176",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "gsmy10"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/177",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "gsmy11"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/178",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "gsmy12"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/179",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "diab" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني عمرو دياب 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'قدام مرايتها 𐂠ᯓ','callback_data'=>"diab1"],['text'=>'تملي معاك 𐂠ᯓ','callback_data'=>"diab2"]],
[['text'=>'يا اجمل عيون 𐂠ᯓ','callback_data'=>"diab3"],['text'=>'وماله 𐂠ᯓ','callback_data'=>"diab4"]],
[['text'=>'هيعيش يفتكرني𐂠ᯓ','callback_data'=>"diab5"],['text'=>'ده لو اتساب 𐂠ᯓ','callback_data'=>"diab6"]],
[['text'=>'اول يوم في البعد 𐂠ᯓ','callback_data'=>"diab7"],['text'=>'معاك قلبي 𐂠ᯓ','callback_data'=>"diab8"]],
[['text'=>'سهران 𐂠ᯓ','callback_data'=>"diab9"],['text'=>'جامده بس 𐂠ᯓ','callback_data'=>"diab10"]],
[['text'=>'حلوه البدايات 𐂠ᯓ','callback_data'=>"diab11"],['text'=>'بالضحكه دي 𐂠ᯓ','callback_data'=>"diab12"]],
[['text'=>'زي مانتي 𐂠ᯓ','callback_data'=>"diab13"],['text'=>'عم الطبيب 𐂠ᯓ','callback_data'=>"diab14"]],
[['text'=>'اماكن السهر 𐂠ᯓ','callback_data'=>"diab15"],['text'=>'اهي اهي 𐂠ᯓ','callback_data'=>"diab16"]],
[['text'=>'حبيت يا قلبي 𐂠ᯓ','callback_data'=>"diab17"],['text'=>'رصيف نمره ٥ 𐂠ᯓ','callback_data'=>"diab18"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}
if($data == "diab1"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/64",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "diab2"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/65",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "diab3"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/66",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "diab4"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/67",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "diab5"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/69",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "diab6"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/70",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "diab7"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/71",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "diab8"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/72",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "diab9"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/74",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "diab10"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/77",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "diab11"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/75",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "diab12"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/76",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "diab13"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/73",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "diab14"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/556",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "diab15"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/558",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "diab16"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/559",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "diab17"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/560",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "diab18"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/557",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sidoo" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني محمد سعيد 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'يا ويلي 𐂠ᯓ','callback_data'=>"sidoo1"],['text'=>'جواكي 𐂠ᯓ','callback_data'=>"sidoo2"]],
[['text'=>'لو 𐂠ᯓ','callback_data'=>"sidoo3"],['text'=>'متغير 𐂠ᯓ','callback_data'=>"sidoo4"]],
[['text'=>'بيني وبينك𐂠ᯓ','callback_data'=>"sidoo5"],['text'=>'مش بحكي 𐂠ᯓ','callback_data'=>"sidoo6"]],
[['text'=>'وحدي لكن 𐂠ᯓ','callback_data'=>"sidoo7"],['text'=>'مفيش بديل 𐂠ᯓ','callback_data'=>"sidoo8"]],
[['text'=>'يامي 𐂠ᯓ','callback_data'=>"sidoo9"],['text'=>'راجعه تاني ليه 𐂠ᯓ','callback_data'=>"sidoo10"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}
if($data == "sidoo1"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/63",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sidoo2"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/53",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sidoo3"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/52",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sidoo4"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/54",
 'caption'=>"??ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sidoo5"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/55",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sidoo6"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/56",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sidoo7"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/57",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sidoo8"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/58",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sidoo9"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/59",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sidoo10"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/60",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "afrt" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني عفروتو 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'بكار 𐂠ᯓ','callback_data'=>"afrt1"],['text'=>'احمد علي اسم جدو 𐂠ᯓ','callback_data'=>"afrt2"]],
[['text'=>'سجاره 𐂠ᯓ','callback_data'=>"afrt3"],['text'=>'خربت 𐂠ᯓ','callback_data'=>"afrt4"]],
[['text'=>'كوتش اديداس𐂠ᯓ','callback_data'=>"afrt5"],['text'=>'ناميجا 𐂠ᯓ','callback_data'=>"afrt6"]],
[['text'=>'مين دول يلا 𐂠ᯓ','callback_data'=>"afrt7"],['text'=>'حبك مات 𐂠ᯓ','callback_data'=>"afrt8"]],
[['text'=>'بس الا بارد 𐂠ᯓ','callback_data'=>"afrt9"],['text'=>'انتو اعدائي 𐂠ᯓ','callback_data'=>"afrt10"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}

if($data == "afrt1"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/124",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "afrt2"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/125",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "afrt3"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/126",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "afrt4"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/127",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "afrt5"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/128",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "afrt6"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/129",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "afrt7"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/130",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "afrt8"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/131",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "afrt9"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/132",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "afrt10"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/561",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "wegz" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني ويجز 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'علي راحتي 𐂠ᯓ','callback_data'=>"wegz1"],['text'=>'الغساله𐂠ᯓ','callback_data'=>"wegz2"]],
[['text'=>'كده كده 𐂠ᯓ','callback_data'=>"wegz3"],['text'=>'باظت 𐂠ᯓ','callback_data'=>"wegz4"]],
[['text'=>'مش هقولك بيبي𐂠ᯓ','callback_data'=>"wegz5"],['text'=>'لقطه 𐂠ᯓ','callback_data'=>"wegz6"]],
[['text'=>'منحوس 𐂠ᯓ','callback_data'=>"wegz7"],['text'=>'دورك جاي 𐂠ᯓ','callback_data'=>"wegz8"]],
[['text'=>'واحد وعشرين 𐂠ᯓ','callback_data'=>"wegz9"],['text'=>'اخربان 𐂠ᯓ','callback_data'=>"wegz10"]],
[['text'=>'سالكه 𐂠ᯓ','callback_data'=>"wegz11"],['text'=>'بالسلامه 𐂠ᯓ','callback_data'=>"wegz12"]],
[['text'=>'اسياد البلد 𐂠ᯓ','callback_data'=>"wegz13"],['text'=>'علي راحتي 𐂠ᯓ','callback_data'=>"wegz14"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}


if($data == "wegz" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني ويجز 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'علي راحتي 𐂠ᯓ','callback_data'=>"wegz1"],['text'=>'الغساله𐂠ᯓ','callback_data'=>"wegz2"]],
[['text'=>'كده كده 𐂠ᯓ','callback_data'=>"wegz3"],['text'=>'باظت 𐂠ᯓ','callback_data'=>"wegz4"]],
[['text'=>'مش هقولك بيبي𐂠ᯓ','callback_data'=>"wegz5"],['text'=>'لقطه 𐂠ᯓ','callback_data'=>"wegz6"]],
[['text'=>'منحوس 𐂠ᯓ','callback_data'=>"wegz7"],['text'=>'دورك جاي 𐂠ᯓ','callback_data'=>"wegz8"]],
[['text'=>'واحد وعشرين 𐂠ᯓ','callback_data'=>"wegz9"],['text'=>'اخربان 𐂠ᯓ','callback_data'=>"wegz10"]],
[['text'=>'سالكه 𐂠ᯓ','callback_data'=>"wegz11"],['text'=>'بالسلامه 𐂠ᯓ','callback_data'=>"wegz12"]],
[['text'=>'اسياد البلد 𐂠ᯓ','callback_data'=>"wegz13"],['text'=>'علي راحتي 𐂠ᯓ','callback_data'=>"wegz14"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}



if($data == "wegz1"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/3",
  'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "wegz2"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/4",
  'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "wegz3"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/5",
  'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "wegz4"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/6",
  'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "wegz5"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/7",
  'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "wegz6"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/8",
  'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "wegz7"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/9",
  'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "wegz8"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/10",
  'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "wegz9"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/11",
  'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "wegz10"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/12",
  'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "wegz11"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/562",
  'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "wegz12"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/563",
  'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "wegz13"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/564",
  'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "wegz14"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/565",
  'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}


if($data == "bablo" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني بابلو 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'اتاري 𐂠ᯓ','callback_data'=>"bablo1"],['text'=>'سكانيا𐂠ᯓ','callback_data'=>"bablo2"]],
[['text'=>'افتر بارتي𐂠ᯓ','callback_data'=>"bablo3"],['text'=>'فري 𐂠ᯓ','callback_data'=>"bablo4"]],
[['text'=>'سندباد𐂠ᯓ','callback_data'=>"bablo5"],['text'=>'ابو مكه 𐂠ᯓ','callback_data'=>"bablo6"]],
[['text'=>'فولكلور 𐂠ᯓ','callback_data'=>"bablo7"],['text'=>'ديناميت 𐂠ᯓ','callback_data'=>"bablo8"]],
[['text'=>'الجميزه 𐂠ᯓ','callback_data'=>"bablo9"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}


if($data == "bablo1"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/28",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "bablo2"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/29",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "bablo3"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/30",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "bablo4"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/31",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "bablo5"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/32",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "bablo6"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/33",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "bablo7"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/34",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "bablo8"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/35",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "bablo9"){
bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/amk7adr/36",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "maro" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ قائمه اغاني مروان موسي 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'نهايه العالم 𐂠ᯓ','callback_data'=>"maro1"],['text'=>'فرعون 𐂠ᯓ','callback_data'=>"maro2"]],
[['text'=>'البوصله ضاعت 𐂠ᯓ','callback_data'=>"maro3"],['text'=>'النظام 𐂠ᯓ','callback_data'=>"maro4"]],
[['text'=>'خربت 𐂠ᯓ','callback_data'=>"maro5"],['text'=>'ابطال 𐂠ᯓ','callback_data'=>"maro6"]],
[['text'=>'نجوم باريس 𐂠ᯓ','callback_data'=>"maro7"],['text'=>'شيراتون 𐂠ᯓ','callback_data'=>"maro8"]],
[['text'=>'شهر اتناشر  𐂠ᯓ','callback_data'=>"maro9"],['text'=>'شطائر 𐂠ᯓ','callback_data'=>"maro10"]],
[['text'=>'تاتش 𐂠ᯓ','callback_data'=>"maro11"],['text'=>'فرصه 𐂠ᯓ','callback_data'=>"maro12"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy1"]],
]])]);}

if($data == "maro1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/38",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "maro2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/39",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "maro3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/40",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "maro4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/41",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "maro5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/42",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "maro6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/43",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "maro7"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/44",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "maro8"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/45",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "maro9"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/46",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "maro10"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/47",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "maro11"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/48",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "maro12"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/49",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "aganeyy2" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓтαℓαsнαηεᯓ𐂠𝐎𝐎𝐒𝐄 𝐘𝐎𝗨𝐑 𝐒𝐎𝐍𝐆 𖢙
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝒋𝒖𝒔𝒕𝒊𝒏𝒆 𝒃𝒊𝒃𝒆𝒓 𐂠ᯓ','callback_data'=>"justb"],['text'=>'𝒕𝒉𝒆 𝒄𝒉𝒂𝒊𝒏𝒔𝒎𝒐𝒌𝒆𝒓𝒔 𐂠ᯓ','callback_data'=>"thsm"]],
[['text'=>'𝒎𝒂𝒓𝒐𝒐𝒏 5  𐂠ᯓ','callback_data'=>"maarroon"],['text'=>'𝒃𝒊𝒍𝒍𝒊 𝒆𝒊𝒍𝒊𝒔𝒉  𐂠ᯓ','callback_data'=>"ellla"]],
[['text'=>'𝒔𝒊𝒂 𐂠ᯓ','callback_data'=>"siax"],['text'=>'𝒊𝒎𝒂𝒈𝒊𝒏𝒆 𝒅𝒓𝒂𝒈𝒐𝒏𝒔  𐂠ᯓ','callback_data'=>"dragons"]],
[['text'=>'𝒆𝒅 𝒔𝒉𝒆𝒆𝒓𝒂𝒏 𐂠ᯓ','callback_data'=>"shern"],['text'=>'𝒄𝒉𝒂𝒓𝒍𝒊𝒆 𝒑𝒖𝒕𝒉 𐂠ᯓ','callback_data'=>"puth"]],
[['text'=>'𝒑𝒐𝒔𝒕 𝒎𝒂𝒍𝒐𝒏𝒆 𐂠ᯓ','callback_data'=>"mallon"],['text'=>'𝒉𝒂𝒍𝒔𝒆𝒚 𐂠ᯓ','callback_data'=>"hesel"]],
[['text'=>'𝒕𝒂𝒚𝒍𝒐𝒓 𝒔𝒘𝒊𝒇𝒕  𐂠ᯓ','callback_data'=>"swift"],['text'=>'𝒃𝒆𝒃𝒆 𝒓𝒆𝒙𝒉𝒂 𐂠ᯓ','callback_data'=>"rexo"]],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/https://t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"song"]],
]])]);}
if($data == "rexo" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ  𝙱𝙴𝙱𝙴 𝚁𝙴𝚇𝙷𝙰  
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝙸 𝙶𝙾𝚃 𝚈𝙾𝚄 𐂠ᯓ','callback_data'=>"rexo1"]],
[['text'=>'𝙸𝙼 𝙰 𝙼𝙴𝚂𝚂  𐂠ᯓ','callback_data'=>"rexo2"]],
[['text'=>'𝚂𝙰𝚈 𝙼𝚈 𝙽𝙰𝙼𝙴 𐂠ᯓ','callback_data'=>"rexo3"]],
[['text'=>'𝙼𝙴𝙰𝙽𝚃 𝚃𝙾 𝙱𝙴 𐂠ᯓ','callback_data'=>"rexo4"]],
[['text'=>'𝙸𝙽 𝙽𝙰𝙼𝙴 𝙾𝙵 𝙻𝙾𝚅𝙴 𐂠ᯓ','callback_data'=>"rexo5"]],
[['text'=>'𝙷𝙰𝚁𝙳𝙴𝚁  𐂠ᯓ','callback_data'=>"rexo6"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy2"]],
]])]);}


if($data == "rexo1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/698",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "rexo2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/699",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "rexo3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/700",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "rexo4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/701",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "rexo5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/702",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "rexo6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/703",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "swift" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ 𝚃𝙰𝚈𝙻𝙾𝚁 𝚂𝚆𝙸𝙵𝚃  
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝙱𝙻𝙰𝙽𝙺 𝚂𝙿𝙰𝙲𝙴 𐂠ᯓ','callback_data'=>"swift1"]],
[['text'=>'𝙲𝙰𝚁𝙳𝙸𝙶𝙰𝙽  𐂠ᯓ','callback_data'=>"swift2"]],
[['text'=>'𝙳𝙴𝙻𝙸𝙲𝙰𝚃𝙴 𐂠ᯓ','callback_data'=>"swift3"]],
[['text'=>'𝙻𝙾𝙾𝙺 𝚆𝙷𝙰𝚃 𝚈𝙾𝚄 𝙼𝙰𝙳𝙴 𝙼𝙴 𝙳𝙾 𐂠ᯓ','callback_data'=>"swift4"]],
[['text'=>'𝙴𝚇𝙸𝙻𝙴 𐂠ᯓ','callback_data'=>"swift5"]],
[['text'=>'𝚈𝙾𝚄 𝙱𝙴𝙻𝙾𝙽𝙶 𝚆𝙸𝚃𝙷 𝙼𝙴  𐂠ᯓ','callback_data'=>"swift6"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy2"]],
]])]);}
 

if($data == "swift1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/691",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "swift2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/692",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "swift3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/693",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "swift4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/694",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ?? ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "swift5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/695",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "swift6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/696",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "mallon" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ 𝙿𝙾𝚂𝚃 𝙼𝙰𝙻𝙾𝙽𝙴 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝙲𝙸𝚁𝙲𝙻𝙴𝚂 𐂠ᯓ','callback_data'=>"mallon1"]],
[['text'=>'𝚁𝙾𝙲𝙺𝚂𝚃𝙰𝚁  𐂠ᯓ','callback_data'=>"mallon2"]],
[['text'=>'𝙶𝙾𝙾𝙳𝙱𝚈𝙴𝚂 𐂠ᯓ','callback_data'=>"mallon3"]],
[['text'=>'𝙲𝙾𝙽𝙶𝚁𝙰𝚃𝚄𝙻𝙰𝚃𝙸𝙾𝙽𝚂 𐂠ᯓ','callback_data'=>"mallon4"]],
[['text'=>'𝚂𝚄𝙽 𝙵𝙻𝙾𝚆𝙴𝚁 𐂠ᯓ','callback_data'=>"mallon5"]],
[['text'=>'𝚆𝙾𝚆  𐂠ᯓ','callback_data'=>"mallon6"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy2"]],
]])]);}

if($data == "mallon1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/623",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "mallon2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/624",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "mallon3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/625",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "mallon4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/626",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "mallon5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/627",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "mallon6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/628",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

 if($data == "siax" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ 𝚂𝙸𝙰 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝙲𝙷𝙰𝙽𝙳𝙴𝙻𝙸𝙴𝚁 𐂠ᯓ','callback_data'=>"siax1"]],
[['text'=>'𝚃𝙷𝙴 𝙶𝚁𝙴𝙰𝚃𝙴𝚂𝚃 𐂠ᯓ','callback_data'=>"siax2"]],
[['text'=>'𝚄𝙽𝚂𝚃𝙾𝙿𝙿𝙰𝙱𝙻𝙴 𐂠ᯓ','callback_data'=>"siax3"]],
[['text'=>'𝙲𝙷𝙴𝙰𝙿 𝚃𝙷𝚁𝙸𝙻𝙻𝚂 𐂠ᯓ','callback_data'=>"siax4"]],
[['text'=>'𝙸𝙼 𝚂𝚃𝙸𝙻𝙻 𝙷𝙴𝚁𝙴 𐂠ᯓ','callback_data'=>"siax5"]],
[['text'=>'𝙳𝚄𝚂𝙺 𝚃𝙸𝙻𝙻 𝙳𝙰𝚆𝙽 𐂠ᯓ','callback_data'=>"siax6"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy2"]],
]])]);}

if($data == "siax1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/598",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "siax2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/599",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "siax3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/600",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "siax4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/601",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "siax5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/602",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "siax6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/603",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}


if($data == "justb" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ 𝙹𝚄𝚂𝚃𝙸𝙽𝙴 𝙱𝙸𝙱𝙴𝚁  
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝐋𝐎𝐍𝐄𝐋𝐘 𐂠ᯓ','callback_data'=>"justb1"],['text'=>'𝐘𝗨𝐌𝐌𝐘 𐂠ᯓ','callback_data'=>"justb2"]],
[['text'=>'𝐇𝐎𝐋𝐘 𐂠ᯓ','callback_data'=>"justb3"],['text'=>'𝐈𝐍𝐓𝐄𝐍𝐓𝐈𝐎𝐍𝐒 𐂠ᯓ','callback_data'=>"justb4"]],
[['text'=>'𝐏𝐎𝐏 𝐒𝐓𝐀𝐑 𐂠ᯓ','callback_data'=>"justb5"],['text'=>'𝐒𝐎𝐑𝐑𝐘 𐂠ᯓ','callback_data'=>"justb6"]],
[['text'=>'𝐋𝐎𝐕𝐄 𝐘𝐎𝗨𝐑 𝐒𝐄𝐋𝐅 𐂠ᯓ','callback_data'=>"justb7"],['text'=>'𝐂𝐎𝐋𝐃 𝐖𝐀𝐓𝐄𝐑 𐂠ᯓ','callback_data'=>"justb8"]],
[['text'=>'𝐖𝐇𝐀𝐓 𝐃𝐎 𝐘𝐎𝗨 𝐌𝐄𝐀𝐍 𐂠ᯓ','callback_data'=>"justb9"],['text'=>'𝐂𝐎𝐌𝐏𝐀𝐍𝐘 𐂠ᯓ','callback_data'=>"justb10"]],
[['text'=>'𝐅𝐎𝐑 𝐄𝐕𝐄𝐑 𐂠ᯓ','callback_data'=>"justb11"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy2"]],
]])]);}

if($data == "justb1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/566",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "justb2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/567",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "justb3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/568",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "justb4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/569",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "justb5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/570",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "justb6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/571",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "justb7"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/572",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "justb8"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/573",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "justb9"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/574",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "justb10"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/575",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "justb11"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/578",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "thsm" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ 𝚃𝙷𝙴 𝙲𝙷𝙰𝙸𝙽𝚂𝙼𝙾𝙺𝙴𝚁𝚂  
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝙲𝙻𝙾𝚂𝙴𝚁 𐂠ᯓ','callback_data'=>"thsm1"],['text'=>'𝚂𝙾𝙼𝙴𝚃𝙷𝙸𝙽𝙶 𝙹𝚄𝚂𝚃 𝙻𝙸𝙺𝙴 𐂠ᯓ','callback_data'=>"thsm2"]],
[['text'=>'𝙳𝙾𝙽𝚃 𝙻𝙴𝚃 𝙼𝙴 𝙳𝙾𝚆𝙽 𐂠ᯓ','callback_data'=>"thsm3"],['text'=>'𝙸𝙻𝙻𝙴𝙽𝙸𝚄𝙼 𐂠ᯓ','callback_data'=>"thsm4"]],
[['text'=>'𝚂𝙸𝙲𝙺 𝙱𝙾𝚈 𐂠ᯓ','callback_data'=>"thsm5"],['text'=>'𝙷𝙾𝙿𝙴  𐂠ᯓ','callback_data'=>"thsm6"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy2"]],
]])]);}

if($data == "thsm1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/580",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ?? ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "thsm2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/581",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "thsm3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/582",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "thsm4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/583",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "thsm5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/584",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "thsm6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/585",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "maarroon" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ 𝙼𝙰𝚁𝙾𝙾𝙽 5  
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝙼𝙴𝙼𝙾𝚁𝙸𝙴𝚂 𐂠ᯓ','callback_data'=>"maarroon1"]],
[['text'=>'𝙼𝙰𝙿𝚂 𐂠ᯓ','callback_data'=>"maarroon2"]],
[['text'=>'𝙶𝙸𝚁𝙻𝚂 𝙻𝙸𝙺𝙴 𝚈𝙾𝚄 𐂠ᯓ','callback_data'=>"maarroon3"]],
[['text'=>'𝚂𝚄𝙶𝙰𝚁 𐂠ᯓ','callback_data'=>"maarroon4"]],
[['text'=>'𝙿𝙰𝚈𝙿𝙷𝙾𝙽𝙴 𐂠ᯓ','callback_data'=>"maarroon5"]],
[['text'=>'𝙰𝙽𝙸𝙼𝙰𝙻𝚂 𐂠ᯓ','callback_data'=>"maarroon6"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy2"]],
]])]);}

if($data == "maarroon1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/586",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "maarroon2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/591",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "maarroon3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/587",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "maarroon4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/588",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "maarroon5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/589",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "maarroon6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/590",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "ellla" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ 𝙱𝙸𝙻𝙻𝙸𝙴 𝙴𝙸𝙻𝙸𝚂𝙷   
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝙻𝙾𝚅𝙴𝙻𝚈 𐂠ᯓ','callback_data'=>"ellla1"]],
[['text'=>'𝚆𝙷𝙴𝙽 𝚃𝙷𝙴 𝙿𝙰𝚁𝚃𝚈 𝙾𝚅𝙴𝚁 𐂠ᯓ','callback_data'=>"ellla2"]],
[['text'=>'𝙱𝙴𝙻𝙻𝚈𝙰𝙲𝙷𝙴 𐂠ᯓ','callback_data'=>"ellla3"]],
[['text'=>'𝙱𝚄𝚁𝚈 𝙰 𝙵𝚁𝙸𝙴𝙽𝙳 𐂠ᯓ','callback_data'=>"ellla4"]],
[['text'=>'𝙰𝙻𝙻 𝚃𝙷𝙴 𝙶𝙾𝙾𝙳 𝙶𝙸𝚁𝙻𝚂 𝙶𝙾 𝚃𝙾 𝙷𝙴𝙻𝙻 𐂠ᯓ','callback_data'=>"ellla5"]],
[['text'=>'𝙱𝙰𝙳 𝙶𝚄𝚈 𐂠ᯓ','callback_data'=>"ellla6"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy2"]],
]])]);}


if($data == "ellla1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/592",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "ellla2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/593",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "ellla3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/594",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "ellla4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/595",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "ellla5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/596",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "ellla6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/597",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "dragons" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ 𝙸𝙼𝙰𝙶𝙸𝙽𝙴 𝙳𝚁𝙰𝙶𝙾𝙽𝚂 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝙱𝙴𝙻𝙸𝙴𝚅𝙴𝚁 𐂠ᯓ','callback_data'=>"dragons1"]],
[['text'=>'𝙽𝙰𝚃𝚄𝚁𝙰𝙻 𐂠ᯓ','callback_data'=>"dragons2"]],
[['text'=>'𝚃𝙷𝚄𝙽𝙳𝙴𝚁 𐂠ᯓ','callback_data'=>"dragons3"]],
[['text'=>'𝚁𝙰𝙳𝙸𝙾𝙰𝙲𝚃𝙸𝚅𝙴 𐂠ᯓ','callback_data'=>"dragons4"]],
[['text'=>'𝙱𝙰𝙳 𝙻𝙸𝙰𝚁 𐂠ᯓ','callback_data'=>"dragons5"]],
[['text'=>'𝚆𝙷𝙰𝚃𝙴𝚅𝙴𝚁 𝙸𝚃 𝚃𝙰𝙺𝙴𝚂 𐂠ᯓ','callback_data'=>"dragons6"]],
[['text'=>'𐂠ᯓرجوعᯓ𐂠','callback_data'=>"aganeyy2"]],
]])]);}

if($data == "dragons1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/604",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "dragons2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/605",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "dragons3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/606",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "dragons4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/607",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "dragons5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/608",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "dragons6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/609",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}


if($data == "shern" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ 𝙴𝙳 𝚂𝙷𝙴𝙴𝚁𝙰𝙽 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝙿𝙴𝚁𝙵𝙴𝙲𝚃 𐂠ᯓ','callback_data'=>"shern1"]],
[['text'=>'𝚂𝙷𝙰𝙿𝙴 𝙾𝙵 𝚈𝙾𝚄  𐂠ᯓ','callback_data'=>"shern2"]],
[['text'=>'𝚃𝙷𝙸𝙽𝙺𝙸𝙽𝙶 𝙾𝚄𝚃 𝙻𝙾𝚄𝙳  𐂠ᯓ','callback_data'=>"shern3"]],
[['text'=>'𝙿𝙷𝙾𝚃𝙾𝙶𝚁𝙰𝙿𝙷 𐂠ᯓ','callback_data'=>"shern4"]],
[['text'=>'𝙳𝙸𝚅𝙴 𐂠ᯓ','callback_data'=>"shern5"]],
[['text'=>'𝙶𝙰𝙻𝚆𝙰𝚈 𝙶𝙸𝚁𝙻 𐂠ᯓ','callback_data'=>"shern6"]],
[['text'=>'𝙸 𝙳𝙾𝙽𝚃 𝙲𝙰𝚁𝙴 𐂠ᯓ','callback_data'=>"shern7"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy2"]],
]])]);}

if($data == "shern1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/610",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "shern2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/611",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "shern3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/612",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "shern4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/613",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "shern5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/614",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "shern6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/615",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "shern7"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/616",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "puth" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ 𝙲𝙷𝙰𝚁𝙻𝙸𝙴 𝙿𝚄𝚃𝙷 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝙰𝚃𝚃𝙴𝙽𝚃𝙸𝙾𝙽 𐂠ᯓ','callback_data'=>"puth1"]],
[['text'=>'𝙷𝙾𝚆 𝙻𝙾𝙽𝙶  𐂠ᯓ','callback_data'=>"puth2"]],
[['text'=>'𝚆𝙴 𝙳𝙾𝙽𝚃 𝚃𝙰𝙻𝙺 𝙰𝙽𝚈𝙼𝙾𝚁𝙴 𐂠ᯓ','callback_data'=>"puth3"]],
[['text'=>'𝙳𝙰𝙽𝙶𝙴𝚁𝙾𝚄𝚂𝙻𝚈 𐂠ᯓ','callback_data'=>"puth4"]],
[['text'=>'𝙾𝙽𝙴 𝙲𝙰𝙻𝙻 𝙰𝚆𝙰𝚈 𐂠ᯓ','callback_data'=>"puth5"]],
[['text'=>'𝚂𝙴𝙴 𝚈𝙾𝚄 𝙰𝙶𝙸𝙽𝙴  𐂠ᯓ','callback_data'=>"puth6"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy2"]],
]])]);}

if($data == "puth1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/617",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "puth2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/618",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "puth3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/619",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "puth4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/620",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "puth5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/621",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "puth6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/622",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "hesel" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𐂠ᯓ 𝙷𝙰𝙻𝚂𝙴𝚈 
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝙱𝙰𝙳 𝙰𝚃 𝙻𝙾𝚅𝙴 𐂠ᯓ','callback_data'=>"hesel1"]],
[['text'=>'𝚆𝙸𝚃𝙷𝙾𝚄𝚃 𝙼𝙴  𐂠ᯓ','callback_data'=>"hesel2"]],
[['text'=>'𝙱𝙴 𝙺𝙸𝙽𝙳 𐂠ᯓ','callback_data'=>"hesel3"]],
[['text'=>'𝚂𝙾𝚁𝚁𝚈 𐂠ᯓ','callback_data'=>"hesel4"]],
[['text'=>'𝙶𝚁𝙰𝚅𝙴𝚈𝙰𝚁𝙳 𐂠ᯓ','callback_data'=>"hesel5"]],
[['text'=>'𝙷𝙸𝙼 𝙰𝙽𝙳 𝙸 𐂠ᯓ','callback_data'=>"hesel6"]],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy2"]],
]])]);}

if($data == "hesel1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/629",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "hesel2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/630",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "hesel3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/631",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "hesel4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/632",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "hesel5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/633",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "hesel6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/amk7adr/634",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}


if($data == "soureee6y" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر اغنيتك 𐂠ᯓ
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'1 𐂠ᯓ','callback_data'=>"sor1"],['text'=>'2 𐂠ᯓ','callback_data'=>"sor2"],['text'=>'3 𐂠ᯓ','callback_data'=>"sor3"]],
[['text'=>'4 𐂠ᯓ','callback_data'=>"sor4"],['text'=>'5 𐂠ᯓ','callback_data'=>"sor5"],['text'=>'6 𐂠ᯓ','callback_data'=>"sor6"]],
[['text'=>'7 𐂠ᯓ','callback_data'=>"sor7"],['text'=>'8 𐂠ᯓ','callback_data'=>"sor8"],['text'=>'9 𐂠ᯓ','callback_data'=>"sor9"]],
[['text'=>'10 𐂠ᯓ','callback_data'=>"sor10"],['text'=>'11 𐂠ᯓ','callback_data'=>"sor11"],['text'=>'12 𐂠ᯓ','callback_data'=>"sor12"]],
[['text'=>'13 𐂠ᯓ','callback_data'=>"sor13"],['text'=>'14 𐂠ᯓ','callback_data'=>"sor14"],['text'=>'15 𐂠ᯓ','callback_data'=>"sor15"]],
[['text'=>'16 𐂠ᯓ','callback_data'=>"sor16"],['text'=>'17 𐂠ᯓ','callback_data'=>"sor17"],['text'=>'18 𐂠ᯓ','callback_data'=>"sor18"]],
[['text'=>'19 𐂠ᯓ','callback_data'=>"sor19"],['text'=>'20 𐂠ᯓ','callback_data'=>"sor20"],['text'=>'21 𐂠ᯓ','callback_data'=>"sor21"]],
[['text'=>'22 𐂠ᯓ','callback_data'=>"sor22"],['text'=>'23 𐂠ᯓ','callback_data'=>"sor23"],['text'=>'24 𐂠ᯓ','callback_data'=>"sor24"]],
[['text'=>'25 𐂠ᯓ','callback_data'=>"sor25"],['text'=>'26 𐂠ᯓ','callback_data'=>"sor26"],['text'=>'27 𐂠ᯓ','callback_data'=>"sor27"]],
[['text'=>'28 𐂠ᯓ','callback_data'=>"sor28"],['text'=>'29 𐂠ᯓ','callback_data'=>"sor29"],['text'=>'30 𐂠ᯓ','callback_data'=>"sor30"]],
[['text'=>'31 𐂠ᯓ','callback_data'=>"sor31"],['text'=>'32 𐂠ᯓ','callback_data'=>"sor32"],['text'=>'33 𐂠ᯓ','callback_data'=>"sor33"]],
[['text'=>'34 𐂠ᯓ','callback_data'=>"sor34"],['text'=>'35 𐂠ᯓ','callback_data'=>"sor35"],['text'=>'36 𐂠ᯓ','callback_data'=>"sor36"]],
[['text'=>'37 𐂠ᯓ','callback_data'=>"sor37"],['text'=>'38 𐂠ᯓ','callback_data'=>"sor38"],['text'=>'39 𐂠ᯓ','callback_data'=>"sor39"]],
[['text'=>'40 𐂠ᯓ','callback_data'=>"sor40"],['text'=>'41 𐂠ᯓ','callback_data'=>"sor41"],['text'=>'42 𐂠ᯓ','callback_data'=>"sor42"]],
[['text'=>'43 𐂠ᯓ','callback_data'=>"sor43"],['text'=>'44 𐂠ᯓ','callback_data'=>"sor44"],['text'=>'45 𐂠ᯓ','callback_data'=>"sor45"]],
[['text'=>'46 𐂠ᯓ','callback_data'=>"sor46"],['text'=>'47 𐂠ᯓ','callback_data'=>"sor47"],['text'=>'48 𐂠ᯓ','callback_data'=>"sor48"]],
[['text'=>'49 𐂠ᯓ','callback_data'=>"sor49"],['text'=>'50 𐂠ᯓ','callback_data'=>"sor51"],['text'=>'52 𐂠ᯓ','callback_data'=>"sor52"]],
[['text'=>'53 𐂠ᯓ','callback_data'=>"sor53"],['text'=>'54 𐂠ᯓ','callback_data'=>"sor54"],['text'=>'55 𐂠ᯓ','callback_data'=>"sor55"]],
[['text'=>'56 𐂠ᯓ','callback_data'=>"sor56"],['text'=>'57 𐂠ᯓ','callback_data'=>"sor57"],['text'=>'58 𐂠ᯓ','callback_data'=>"sor58"]],
[['text'=>'59 𐂠ᯓ','callback_data'=>"sor59"],['text'=>'60 𐂠ᯓ','callback_data'=>"sor60"],['text'=>'61 𐂠ᯓ','callback_data'=>"sor61"]],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy"]],
]])]);}


if($data == "sor1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/22",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/23",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/24",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/25",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sor5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/26",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/27",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor7"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/28",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor8"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/29",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor9"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/30",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor10"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/31",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor11"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/32",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor12"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/33",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor13"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/34",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor14"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/35",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor15"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/36",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor16"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/37",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor17"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/38",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor18"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/30",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor19"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/40",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor20"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/41",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor21"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/42",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor22"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/43",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor23"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/44",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor24"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/45",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor25"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/46",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor26"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/47",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor27"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/48",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor28"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/49",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor29"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/50",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor30"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/51",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor31"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/52",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor32"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/53",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor33"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/54",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor34"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/55",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "sor35"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/56",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor36"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/57",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor37"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/58",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor38"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/59",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor39"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/60",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor40"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/61",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor41"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/62",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor42"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/63",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor43"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/64",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor44"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/65",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor45"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/66",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor46"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/67",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor47"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/68",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor48"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/69",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor49"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/70",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor50"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/71",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor51"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/72",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor52"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/73",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor53"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/74",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor54"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/75",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor55"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/76",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor56"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/77",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor57"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/78",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor58"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/79",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor59"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/80",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "sor60"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/81",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "tork4eyy" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر اغنيتك 𐂠ᯓ
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'1 𐂠ᯓ','callback_data'=>"tor1"],['text'=>'2 𐂠ᯓ','callback_data'=>"tor2"],['text'=>'3 𐂠ᯓ','callback_data'=>"tor3"]],
[['text'=>'4 𐂠ᯓ','callback_data'=>"tor4"],['text'=>'5 𐂠ᯓ','callback_data'=>"tor5"],['text'=>'6 𐂠ᯓ','callback_data'=>"tor6"]],
[['text'=>'7 𐂠ᯓ','callback_data'=>"tor7"],['text'=>'8 𐂠ᯓ','callback_data'=>"tor8"],['text'=>'9 𐂠ᯓ','callback_data'=>"tor9"]],
[['text'=>'10 𐂠ᯓ','callback_data'=>"tor10"],['text'=>'11 𐂠ᯓ','callback_data'=>"tor11"],['text'=>'12 𐂠ᯓ','callback_data'=>"tor12"]],
[['text'=>'13 𐂠ᯓ','callback_data'=>"tor13"],['text'=>'14 𐂠ᯓ','callback_data'=>"tor14"],['text'=>'15 𐂠ᯓ','callback_data'=>"tor15"]],
[['text'=>'16 𐂠ᯓ','callback_data'=>"tor16"],['text'=>'17 𐂠ᯓ','callback_data'=>"tor17"],['text'=>'18 𐂠ᯓ','callback_data'=>"tor18"]],
[['text'=>'19 𐂠ᯓ','callback_data'=>"tor19"],['text'=>'20 𐂠ᯓ','callback_data'=>"tor20"],['text'=>'21 𐂠ᯓ','callback_data'=>"tor21"]],
[['text'=>'22 𐂠ᯓ','callback_data'=>"tor22"],['text'=>'23 𐂠ᯓ','callback_data'=>"tor23"],['text'=>'24 𐂠ᯓ','callback_data'=>"tor24"]],
[['text'=>'25 𐂠ᯓ','callback_data'=>"tor25"],['text'=>'26 𐂠ᯓ','callback_data'=>"tor26"],['text'=>'27 𐂠ᯓ','callback_data'=>"tor27"]],
[['text'=>'28 𐂠ᯓ','callback_data'=>"tor28"],['text'=>'29 𐂠ᯓ','callback_data'=>"tor29"],['text'=>'30 𐂠ᯓ','callback_data'=>"tor30"]],
[['text'=>'31 𐂠ᯓ','callback_data'=>"tor31"],['text'=>'32 𐂠ᯓ','callback_data'=>"tor32"],['text'=>'33 𐂠ᯓ','callback_data'=>"tor33"]],
[['text'=>'34 𐂠ᯓ','callback_data'=>"tor34"],['text'=>'35 𐂠ᯓ','callback_data'=>"tor35"],['text'=>'36 𐂠ᯓ','callback_data'=>"tor36"]],
[['text'=>'37 𐂠ᯓ','callback_data'=>"tor37"],['text'=>'38 𐂠ᯓ','callback_data'=>"tor38"],['text'=>'39 𐂠ᯓ','callback_data'=>"tor39"]],
[['text'=>'40 𐂠ᯓ','callback_data'=>"tor40"],['text'=>'41 𐂠ᯓ','callback_data'=>"tor41"],['text'=>'42 𐂠ᯓ','callback_data'=>"tor42"]],
[['text'=>'43 𐂠ᯓ','callback_data'=>"tor43"],['text'=>'44 𐂠ᯓ','callback_data'=>"tor44"],['text'=>'45 𐂠ᯓ','callback_data'=>"tor45"]],
[['text'=>'46 𐂠ᯓ','callback_data'=>"tor46"],['text'=>'47 𐂠ᯓ','callback_data'=>"tor47"],['text'=>'48 𐂠ᯓ','callback_data'=>"tor48"]],
[['text'=>'49 𐂠ᯓ','callback_data'=>"tor49"],['text'=>'50 𐂠ᯓ','callback_data'=>"tor51"],['text'=>'52 𐂠ᯓ','callback_data'=>"tor52"]],
[['text'=>'53 𐂠ᯓ','callback_data'=>"tor53"],['text'=>'54 𐂠ᯓ','callback_data'=>"tor54"],['text'=>'55 𐂠ᯓ','callback_data'=>"tor55"]],
[['text'=>'56 𐂠ᯓ','callback_data'=>"tor56"],['text'=>'57 𐂠ᯓ','callback_data'=>"tor57"],['text'=>'58 𐂠ᯓ','callback_data'=>"tor58"]],
[['text'=>'59 𐂠ᯓ','callback_data'=>"tor59"],['text'=>'60 𐂠ᯓ','callback_data'=>"tor60"],['text'=>'61 𐂠ᯓ','callback_data'=>"tor61"]],
[['text'=>'62 𐂠ᯓ','callback_data'=>"tor62"],['text'=>'63 𐂠ᯓ','callback_data'=>"tor63"],['text'=>'64 𐂠ᯓ','callback_data'=>"tor64"]],
[['text'=>'65 𐂠ᯓ','callback_data'=>"tor65"],['text'=>'66 𐂠ᯓ','callback_data'=>"tor66"],['text'=>'67 𐂠ᯓ','callback_data'=>"tor67"]],
[['text'=>'68 𐂠ᯓ','callback_data'=>"tor68"],['text'=>'69 𐂠ᯓ','callback_data'=>"tor69"],['text'=>'70 𐂠ᯓ','callback_data'=>"tor70"]],
[['text'=>'71 𐂠ᯓ','callback_data'=>"tor71"],['text'=>'72 𐂠ᯓ','callback_data'=>"tor72"],['text'=>'73 𐂠ᯓ','callback_data'=>"tor73"]],
[['text'=>'74 𐂠ᯓ','callback_data'=>"tor74"],['text'=>'75 𐂠ᯓ','callback_data'=>"tor75"],['text'=>'76 𐂠ᯓ','callback_data'=>"tor76"]],
[['text'=>'78 𐂠ᯓ','callback_data'=>"tor78"],['text'=>'79 𐂠ᯓ','callback_data'=>"tor79"],['text'=>'80 𐂠ᯓ','callback_data'=>"tor80"]],
[['text'=>'81 𐂠ᯓ','callback_data'=>"tor81"],['text'=>'82 𐂠ᯓ','callback_data'=>"tor82"],['text'=>'83 𐂠ᯓ','callback_data'=>"tor83"]],
[['text'=>'84 𐂠ᯓ','callback_data'=>"tor84"],['text'=>'85 𐂠ᯓ','callback_data'=>"tor85"],['text'=>'86 𐂠ᯓ','callback_data'=>"tor86"]],
[['text'=>'88 𐂠ᯓ','callback_data'=>"tor88"],['text'=>'89 𐂠ᯓ','callback_data'=>"tor89"],['text'=>'90 𐂠ᯓ','callback_data'=>"tor90"]],
[['text'=>'91 𐂠ᯓ','callback_data'=>"tor81"],['text'=>'92 𐂠ᯓ','callback_data'=>"tor92"],['text'=>'93 𐂠ᯓ','callback_data'=>"tor93"]],
[['text'=>'94 𐂠ᯓ','callback_data'=>"tor84"],['text'=>'95 𐂠ᯓ','callback_data'=>"tor95"],['text'=>'96 𐂠ᯓ','callback_data'=>"tor96"]],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy"]],
]])]);}
if($data == "tor1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/85",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/86",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/87",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/88",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/89",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/90",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor7"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/91",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor8"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/92",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor9"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/93",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor10"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/94",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor11"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/95",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor12"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/96",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor13"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/97",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor14"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/98",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor15"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/99",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor16"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/100",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor17"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/101",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor18"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/102",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor19"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/103",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor20"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/104",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor21"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/105",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor22"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/106",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor23"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/107",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor24"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/108",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor25"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/109",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor26"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/110",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor27"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/111",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor28"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/113",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor29"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/114",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor30"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/115",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor31"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/116",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor32"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/117",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor33"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/118",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor34"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/119",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor35"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/120",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor36"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/121",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor37"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/122",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor38"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/123",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor39"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/124",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor40"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/125",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor41"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/126",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor42"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/127",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor43"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/128",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor44"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/129",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor45"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/130",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor46"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/131",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor47"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/132",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor48"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/133",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor49"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/134",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor50"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/135",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor51"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/136",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor52"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/137",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor53"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/138",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor54"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/139",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor55"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/140",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor56"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/141",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor57"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/142",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor58"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/143",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor59"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/144",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor60"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/145",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor61"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/146",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor62"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/147",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor63"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/148",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor64"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/149",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor65"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/150",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor66"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/151",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "tor67"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/152",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor68"){
bot( sendaudio ,[
 'chat_id'=>$chat_id2, 
 audio =>"https://t.me/B_6_7/153",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor69"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/157",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor70"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/159",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor71"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/160",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor72"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/161",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor73"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/162",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor74"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/163",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor75"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/164",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor76"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/165",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor77"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/166",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor78"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/167",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor79"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/168",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor80"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/169",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor81"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/170",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor82"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/171",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor83"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/172",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor84"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/173",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor85"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/174",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor86"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/175",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor87"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/176",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor88"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/177",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor89"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/178",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor90"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/179",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor91"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/180",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor92"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/181",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor93"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/182",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor94"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/183",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor95"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/184",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "tor96"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/185",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "erak8eyy" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر اغنيتك 𐂠ᯓ
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'1 𐂠ᯓ','callback_data'=>"era1"],['text'=>'2 𐂠ᯓ','callback_data'=>"era2"],['text'=>'3 𐂠ᯓ','callback_data'=>"era3"]],
[['text'=>'4 𐂠ᯓ','callback_data'=>"era4"],['text'=>'5 𐂠ᯓ','callback_data'=>"era5"],['text'=>'6 𐂠ᯓ','callback_data'=>"era6"]],
[['text'=>'7 𐂠ᯓ','callback_data'=>"era7"],['text'=>'8 𐂠ᯓ','callback_data'=>"era8"],['text'=>'9 𐂠ᯓ','callback_data'=>"era9"]],
[['text'=>'10 𐂠ᯓ','callback_data'=>"era10"],['text'=>'11 𐂠ᯓ','callback_data'=>"era11"]],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy"]],
]])]);}
if($data == "era1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/6",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "era2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/7",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "era3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/8",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "era4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/9",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "era5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/10?single",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "era6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/11?single",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "era7"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/12?single",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "era8"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/13?single",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "era9"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/14?single",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "era10"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/15?single",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "era11"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/16?single",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if($data == "soode4y" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر اغنيتك 𐂠ᯓ
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'1 𐂠ᯓ','callback_data'=>"soo1"],['text'=>'2 𐂠ᯓ','callback_data'=>"soo2"],['text'=>'3 𐂠ᯓ','callback_data'=>"soo3"]],
[['text'=>'4 𐂠ᯓ','callback_data'=>"soo4"],['text'=>'5 𐂠ᯓ','callback_data'=>"soo5"],['text'=>'6 𐂠ᯓ','callback_data'=>"soo6"]],
[['text'=>'7 𐂠ᯓ','callback_data'=>"soo7"],['text'=>'8 𐂠ᯓ','callback_data'=>"soo8"],['text'=>'9 𐂠ᯓ','callback_data'=>"soo9"]],
[['text'=>'10 𐂠ᯓ','callback_data'=>"soo10"],['text'=>'11 𐂠ᯓ','callback_data'=>"soo11"]],
[['text'=>'𐂠ᯓمبرمج السورسᯓ𐂠 ','url'=>'t.me/BLACIK0'],['text'=>'𐂠ᯓтαℓαsнαηεᯓ𐂠','url'=>'t.me/$channel']],
[['text'=>"𐂠ᯓرجوعᯓ𐂠",'callback_data'=>"aganeyy"]],
]])]);}
if($data == "soo1"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/193",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "soo2"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/194",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "soo3"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/195",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "soo4"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/196",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "soo5"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/197",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "soo6"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/198",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "soo7"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/199",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "soo8"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/200",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "soo9"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/201",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "soo10"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/202",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}
if($data == "soo11"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/B_6_7/203",
 'caption'=>"𐂠ᯓтαℓαsнαηεᯓ𐂠 ➢ : @$channel",
 reply_to_message_id =>$message->message_id, 
]);}

if ($text =="تفعيل تفال" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) { 
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>" 𐂠 تم تفعيل امر تفال بنجاح
 𐂠 بواسطة ⁦𐎄「 [$first_name](tg://user?id=$from_id) 」
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["kiiio"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>" 𐂠 قم بتفيل البوت اولا",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
elseif($text =="تعطيل تفال"){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>" 𐂠 تم تعطيل امر تفال بنجاح 
 𐂠 بواسطة ⁦𐎄「 [$first_name](tg://user?id=$from_id) 」
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["kiiio"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>" 𐂠 قم بتفيل البوت اولا ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);}}}
$carlos = array("خشوف وجهه يستاهل تفله","دي لك يخره شوف وجهك حرامت اذب تفلتي عليه😈👋🏿","دمشي لاتفل بخشمك🥱👏🏿","لك ياحيوان حترم لا اهينك اتفل بعينك😟🤘🏿","انته شايف وجهكك ب امرايه☹️🤘🏿");
$tiger = array_rand($carlos, 1);
if($replyid and !in_array($re_id,$Dev)){
if($text == "اتفل عليه" or $text == "شيله تفله" or $text == "تفله" or $text == "خخ تف" or $text == "بعد تفله" or $text == "ضل تفله" or $text == "تفف" or $text == "تتف"){
if($settings["lock"]["kiiio"] == "مقفول"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"حاضر ستادي هسه شبعه تفال😻🤘🏿", 'reply_to_message_id'=>$message->message_id, ]);
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"$carlos[$tiger]",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }}

if($replyid and in_array($re_id,$Dev)){
if($text == "اتفل عليه" or $text == "شيله تفله" or $text == "تفله" or $text == "خخ تف" or $text == "بعد تفله" or $text == "ضل تفله" or $text == "تفف" or $text == "تتف"){
if($settings["lock"]["kiiio"] == "مقفول"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"دي لك تريد اتفل عله تاج راسك وراسي🥱🤫",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id, ]); } }}

if($replyid and in_array($re_id,$eri)){
if($text == "اتفل عليه" or $text == "شيله تفله" or $text == "تفله" or $text == "خخ تف" or $text == "بعد تفله" or $text == "ضل تفله" or $text == "تفف" or $text == "تتف"){
if($settings["lock"]["kiiio"] == "مقفول"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"لك ياجبان هاذ مبرمج السورس شلون اتفل عليه نته متستحي😶❌",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id, ]); } }}

if($text == "اتفل عليه" or $text == "شيله تفله" or $text == "تفله" or $text == "خخ تف" or $text == "بعد تفله" or $text == "ضل تفله" or $text == "تفف" or $text == "تتف"){
if($settings["lock"]["kiiio"] == "مفتوح"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✶ عزيزي ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠 امر تفال معطل من قبل الادارة
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if ($text =="تفعيل هينه" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) { 
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>" 𐂠 تم تفعيل امر هينة بنجاح
 𐂠 بواسطة ⁦𐎄「 [$first_name](tg://user?id=$from_id) 」
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iiirrt"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>" 𐂠 قم بتفيل البوت اولا ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
elseif($text =="تعطيل هينه" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>" 𐂠 تم تعطيل امر هينة بنجاح
 𐂠 بواسطة ⁦𐎄「 [$first_name](tg://user?id=$from_id) 」
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["iiirrt"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>" 𐂠 قم بتفيل البوت اولا ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
$henare = array("لكك جرجف احترم اسيادكك لا اكتلكك وازربب على كبركك،💩🖐🏿","هشش فاشل لتضل تمسلت لا اخربط تضاريس وجهك جنه ابط عبده، 😖👌🏿","دمشي لك ينبوع الفشل مو زين ملفيك ونحجي وياك هي منبوذ 😏🏌🏻🏿","ها الغليض التفس ابو راس المربع متعلملك جم حجايه وجاي تطكطكهن علينه دبطل??🔪","حبيبي راح احاول احترمكك هالمره بلكي تبطل حيونه، 🤔🔪");
$rehena = array_rand($henare, 1);
if($replyid and !in_array($re_id,$Dev)){
if($text == "هينه" or $text == "اديلو كمان" or $text == "اديلو كمان" or $text == "هينها" or $text == "اشتمه" or $text == "زلوو" or $text == "زلووا" or $text == "زلووه"){
if($settings["lock"]["iiirrt"] == "مقفول"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"صارر ستاذيي 🏃🏻‍♂️♥️", 'reply_to_message_id'=>$message->message_id, ]);
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"$henare[$rehena]",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }}

if($replyid and in_array($re_id,$Dev)){
if($text == "هينه" or $text == "اديلو كمان" or $text == "اديلو كمان" or $text == "هينها" or $text == "اشتمه" or $text == "زلوو" or $text == "زلووا" or $text == "زلووه"){
if($settings["lock"]["iiirrt"] == "مقفول"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"دي لكك تريد اهينن تاج راسكك؟😏🏌🏻🏿",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]); } }}

if($replyid and in_array($re_id,$eri)){
if($text == "هينه" or $text == "اديلو كمان" or $text == "اديلو كمان" or $text == "هينها" or $text == "اشتمه" or $text == "زلوو" or $text == "زلووا" or $text == "زلووه"){
if($settings["lock"]["iiirrt"] == "مقفول"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"دي لكك تريد اهينن تاج راسكك؟😏🏌🏻🏿
هاذ مبرمج لسورس شلون اهينه",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]); } }}

if($text == "نيكو" or $text == "افشخو" or $text == "تف عليه" or $text == "اشتمه" or $text == "طلع ديك امو" or $text == "زله" or $text == "افشخو" or $text == "افشخ"){
if($settings["lock"]["iiirrt"] == "مفتوح"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠 تم تعطيل الامر هينة مسبقا 
 𐂠 بواسطة ⁦𐎄「 [$first_name](tg://user?id=$from_id) 」
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}

$all = str_replace("#all ", "",$text) ;
$x = 0;
$tags = 0;
$get = file_get_contents("$chat_id.txt");
$getx = explode("\n", $get);
if($message and  ! in_array ($from_id, $getx)){
file_put_contents("$chat_id.txt","$from_id\n", FILE_APPEND);
} 
if($text == "#all $all"){  
for($i=0;$i<count($getx);$i++){
if ($x == 5 or $x == $tags or $i == 0 ){
$tags = $x + 5;
$t = "#all $all\n";
}
$datainfo = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$getx[$i]"));
$names =$datainfo->result->first_name;
$ids =$datainfo->result->id;
$x = $x + 1;
$t = $t.", [".$names."](tg://user?id=".$ids.")";
if ($x == 5 or $x == $tags or $i == 0){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text'=>$t,
'parse_mode' =>"markdown", 
'disable_web_page_preview'=>true,
]);
}
}
}

$admin = "$ADMIN";
$sting = file_get_contents("sting.txt");
$band = file_get_contents("band.txt");
$start0 = file_get_contents("start1.txt") ;
$yhya5 = file_get_contents("yhya2.txt");
$knat1 = file_get_contents("knat1.txt");
$yhya0 = file_get_contents("yhya0.txt");
$yhya1= file_get_contents("yhya1.txt");
$yhya6 = file_get_contents("yhya3.txt");
$forward = $update->message->forward_from;
$MOhaMMed = count($pirvate)-1;
$MoHaMMedd = count($groups)-1;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$name = $message->from->first_name;
$username = $message->from->username;
$chat_id = $message->chat->id;
$text = $message->text;
$from_id = $message->from->id;
date_default_timezone_set('Asia/Riyadh');
$date = date('h:i:s'); $d = date('A');
$aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
$message_id =  $update->callback_query->message->message_id;
$yhya = file_get_contents("yhya.txt");
$yhya2 = explode("\n",file_get_contents("yhya4.txt"));
$yhya3 = count($yhya2);
if ($message && !in_array($from_id, $yhya2)) {
    file_put_contents("yhya4.txt", $from_id."\n",FILE_APPEND);
    $yhya3 = count($yhya3);
  }
if($text =="🏴تفعيل التنبيه🏳️" and $from_id == $ADMIN) {
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>" 𐂠تم تفعيل التنبيه بنجاح ✔️
",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents("yhya2.txt","yhya");
} 
if($text =="/start" and $yhya5 == "yhya" and $from_id != $ADMIN) {
 bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"*
 𐂠ᯓ أهلاً بك عزيزي المطور 
 𐂠ᯓ  انت المطور الاساسي للبوت. 
 𐂠ᯓ  هناك عضو قام بدخول بوتك
 𐂠━━ᯓтαℓαsнαηεᯓ━━𐂠
 𐂠  الاسم :  ◄﴿ $name  ﴾
 𐂠  المعرف : ◄﴿ @$user ﴾ 
 𐂠  الايدي : ◄﴿ $from_id  ﴾
 𐂠  عدد المشترڪين ◄﴿ $MOhaMMed }-
 𐂠  عدد المجموعات المفعله ◄﴿ $MoHaMMedd }-
 𐂠━━ᯓтαℓαsнαηεᯓ━━𐂠
 𐂠ᯓ وقت الدخول $date $aa
*" 
]);} 
if($text =="🏴تعطيل التنبيه🏳️" and $from_id == $ADMIN) {
 bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
 𐂠ᯓ تم تعطيل ❎ التنبيه بنجاح ✔️
",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("yhya2.txt");
}

if (!is_dir('co')){
mkdir('co');
}
$re_msd = $update->message->reply_to_message;
if($rt and $text == "تحويل" and $re_msd->photo and $settings["lock"]["sigmidia"]=="مفتوح"){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$re_msd->photo[1]->file_id])->result->file_path;
file_put_contents("co/$chat_id.png",file_get_contents($file));
bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>new CURLFile("co/$chat_id.png"),
]);
unlink("co/$chat_id.png");
}
if ($rt and $text == "تحويل" and $re_msd->photo and $settings["lock"]["sigmidia"]=="مفتوح"){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$re_msd->photo[1]->file_id])->result->file_path;
file_put_contents("co/$chat_id.png",file_get_contents($file));
bot('senddocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile("co/$chat_id.png"),
]);
unlink("co/$chat_id.png");
}
if($rt and $text == "تحويل" and $re_msd->sticker and $settings["lock"]["sigmidia"]=="مفتوح"){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$re_msd->sticker->file_id])->result->file_path;
file_put_contents("co/$chat_id.png",file_get_contents($file));
bot('senddocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile("co/$chat_id.png"),
'caption'=>"  𐂠 𝐨𝐤 𝐝𝐨𝐧𝐞 𝐜𝐡𝐚𝐧𝐠𝐞
 𐂠 $bi",
]);unlink("co/$chat_id.png");}
if ($rt and $text == "تحويل" and $re_msd->video and $settings["lock"]["sigmidia"]=="مفتوح"){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$re_msd->video->file_id])->result->file_path;
file_put_contents("co/$chat_id.ogg",file_get_contents($file));
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>new CURLFile("co/$chat_id.ogg"),
'caption'=>"  𐂠 𝐨𝐤 𝐝𝐨𝐧𝐞 𝐜𝐡𝐚𝐧𝐠𝐞
 𐂠 $bi",
]);unlink("co/$chat_id.ogg");}
if ($rt and $text == "تحويل" and $re_msd->voice and $settings["lock"]["sigmidia"]=="مفتوح"){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$re_msd->voice->file_id])->result->file_path;
file_put_contents("co/$chat_id.mp3",file_get_contents($file));
bot('sendaudio',[
'chat_id'=>$chat_id,
'audio'=>new CURLFile("co/$chat_id.mp3"),
'caption'=>"  𐂠 𝐨𝐤 𝐝𝐨𝐧𝐞 𝐜𝐡𝐚𝐧𝐠𝐞
 𐂠 $bi",
]);
unlink("co/$chat_id.mp3");
}
if ($rt and $text == "تحويل" and $re_msd->audio and $settings["lock"]["sigmidia"]=="مفتوح"){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$re_msd->audio->file_id])->result->file_path;
file_put_contents("co/$chat_id.ogg",file_get_contents($file));
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>new CURLFile("co/$chat_id.ogg"),
'caption'=>"  𐂠 𝐨𝐤 𝐝𝐨𝐧𝐞 𝐜𝐡𝐚𝐧𝐠𝐞
 𐂠 $bi",
]);
unlink("co/$chat_id.ogg");
}
if(strpos($text, 'حمل ') !== false and $settings["lock"]["downloadmid"]=="مفتوح"){
$num= str_replace('حمل ','',$text);
bot('sendvideo',[
'chat_id'=>$chat_id,
'video'=>"$num",
'caption'=>"
 𐂠 𝐨𝐤 𝐝𝐨𝐧𝐞 𝐜𝐡𝐚𝐧𝐠𝐞
 𐂠$chinnl",
]);
}
$num= str_replace('تحميل ','',$text);
if ($text =="تحميل $num" and $settings["lock"]["downloadmid"]=="مفتوح"){
$num= str_replace('تحميل ','',$text);
$abc = file_get_contents("https://harmof.ml/Youtuop/Youtapi.php?search=".urlencode($num));
$bdee = json_decode($abc, true);
$keyboard["inline_keyboard"]=[];
for($i=1;$i<=10;$i++){
$titl = $bdee['results'][$i]['url'];
$name = $bdee['results'][$i]['title'];
$view = $bdee['results'][$i]['view'];
$nam = explode(' ',$name); 
$f = str_replace("https://youtu.be/","",$titl);
$keyboard["inline_keyboard"][] = [['text'=>"$nam[0] $nam[1] $nam[2] $nam[3] $nam[4]",'callback_data'=>"$f"]];
}
$reply_markup = json_encode($keyboard); 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠 نتائج بحث اليوتيوب ل ~ #$num ☆
??━━ᯓтαℓαsнαηεᯓ━━𐂠
",
'parse_mode'=>"html",
"reply_markup"=>$reply_markup
]);
}
$chatid = $update->callback_query->message->chat->id;
if($data !="1" and $data !="2" and $data !="3" and $data !="4" and $data !="5" and $data !="6" and $data !="home" and $data !="00"){
bot('deleteMessage',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
]);
$chatid = $update->callback_query->message->chat->id;
$K=json_decode(file_get_contents("https://harmof.ml/Api/youta9i.php?vid=http://www.youtube.com/watch?v=".$data), true); 
$VUrlUrl=$K['url'];
$file = $VUrlUrl;
file_put_contents("yotsbot.ogg",file_get_contents($file));
bot('sendVoice',[
'chat_id'=>$chatid,
'voice'=>new CURLFile("yotsbot.ogg"),
]);
unlink("yotsbot.ogg");
}
$chatid = $update->callback_query->message->chat->id;
$re_msd = $update->message->reply_to_message;
if ($rt and $text == "حمل" and $re_msd->text and $settings["lock"]["downloadmid"]=="مفتوح"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 𐂠𝐥𝐨𝐚𝐝𝐢𝐧𝐠 𝐩𝐥𝐞𝐚𝐬𝐞 𝐰𝐡𝐚𝐭𝐞 .",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
$K=json_decode(file_get_contents("https://youtube-downloader3.herokuapp.com/video_info.php?url=$re_msd->text"), true); 
$V=$K['links'][0]['url'];
 $file = $V;
file_put_contents("ᴄᴀʀʟᴏѕ.ogg",file_get_contents($file));
bot('sendaudio',[
'chat_id'=>$chat_id,
'audio'=>new CURLFile("ᴄᴀʀʟᴏѕ.ogg"),
'caption'=>"* 
Ch : @$chinnl *",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
unlink("ᴄᴀʀʟᴏѕ.ogg");
unlink($v);
}
elseif($rt and $text == "حمل" and $re_msd->text and $settings["lock"]["downloadmid"]=="مقفول"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"* 𐂠تحميل الميديا مقفول ،*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,

]);
}

if($text == "الغاء قائمة التثبيت" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) { 
bot('unpinAllChatMessages',[
'chat_id'=>$chat_id,
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>" 𐂠 تم الغاء جميع التثبيتات
 𐂠 بواسطة ⁦𐎄「 [$first_name](tg://user?id=$from_id) 」
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}

if ($text =="تفعيل الزخرفة" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) { 
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
 𐂠ᯓ بواسطة ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠  تم تفعيل الزخرفة
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["zkh"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
elseif($text =="تعطيل الزخرفة" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
 𐂠ᯓ بواسطة ⁦𐎄 [$first_name](tg://user?id=$from_id)
 𐂠ᯓ  تم تعطيل الزخرفة
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["zkh"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}

$zkrf = file_get_contents("zkrf.txt");
if($text == "زخرفلي"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
ᯓ𖣰اهلا بك في قسم الزخرفهᯓ
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'زخرف الان','callback_data'=>'ii']],
[["text"=>"𐂠ᯓ 𖡞المبرمج𖡞 ᯓ𐂠",'url'=>"t.me/BLACIK0"]],
]
])
]);
}
if($data == "ii" ){
file_put_contents("zkrf.txt","zkrf");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'ارسل اسمك الان !',
]);   
}
  if($text != "زخرفه"   and $zkrf == "zkrf"){
  file_put_contents("zkrf.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'يتم زخرفه اسمك الان',
]);
  $items = ['༗','༉','༈',' ༊',' ༒',' ༕',' ༖',' ༑',' ࿅',' ࿄ ',' ࿃',' ࿂ ',' ࿋ ',' ࿌ ',' ࿐',' ࿑',' ࿗',' ၍',' ᪥',' ᯓ',' ⸙ ',' ꫝ ','',' ','𖠱','𖠰','𖠪','𖠴','𖠿','𖡣','𖡟','𖢺','𖢹','𖢾','𖢿','𖣏','𖣎','𖣍','𖣒','ᯓ','𖤊 ','𖤓',' 𖤍','𐂠','𖤓','𖤛','𖤥','𖤞','𖤬','𖤴','𖤳','𖤸','𖤽','𖤾','𖤿','𖥇','𖥆','𖥄','𖥂','𖥒','𖥔','𖥕','𖥖','𖥓','𖥤','𖥢','𖥵','𖦋'];  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$A = str_replace('a','𝐀',$text); 
$A = str_replace('a','𝐀',$A); 
$A = str_replace("b","𝐁",$A); 
$A = str_replace("c","𝐂",$A); 
$A = str_replace("d","𝐃",$A); 
$A = str_replace("e","𝐄",$A); 
$A = str_replace("f","𝐅",$A); 
$A = str_replace("g","𝐆",$A); 
$A = str_replace("h","𝐇",$A); 
$A = str_replace("i","𝐈",$A); 
$A = str_replace("j","𝐉",$A); 
$A = str_replace("k","𝐊",$A); 
$A = str_replace("l","𝐋",$A); 
$A = str_replace("m","𝐌",$A); 
$A = str_replace("n","𝐍",$A); 
$A = str_replace("o","𝐎",$A); 
$A = str_replace("p","𝐏",$A); 
$A = str_replace("q","𝐐",$A); 
$A = str_replace("r","𝐑",$A); 
$A = str_replace("s","𝐒",$A); 
$A = str_replace("t","𝐓",$A); 
$A = str_replace("u"," 𝐔",$A); 
$A = str_replace("v","𝐕",$A); 
$A = str_replace("w","𝐖",$A); 
$A = str_replace("x","𝐗",$A); 
$A = str_replace("y","𝐘",$A); 
$A = str_replace("z","𝐙",$A);
$A = str_replace('ض','ضـ๋‌‏ـﮧ ',$A); 
$A = str_replace('ص','صـ๋‌‏ـﮧ',$A); 
$A = str_replace('ث','ثـ๋‌‏ـﮧ',$A); 
$A = str_replace('ق','قـ๋‌‏ـﮧ',$A); 
$A = str_replace('ف','ف‌ـ๋‌‏ـﮧ',$A); 
$A = str_replace('غ','غـ๋‌‏ـﮧ',$A); 
$A = str_replace('ع','عـ๋‌‏ـﮧ',$A); 
$A = str_replace('ه','ۿۿہ',$A); 
$A = str_replace('خ','خ‌ـ๋‌‏ـﮧ ',$A); 
$A = str_replace('ح','حـ๋‌‏ـﮧ ',$A); 
$A = str_replace('ج','جـ๋‌‏ـﮧ ',$A); 
$A = str_replace('ش','شـ๋‌‏ـﮧ ',$A); 
$A = str_replace('س','سـ๋‌‏ـﮧ',$A); 
$A = str_replace('ي',' يـ๋‌‏ـﮧ',$A); 
$A = str_replace('ب','  بـ๋‌‏ـﮧ',$A);
$A = str_replace('ل',' لـ๋‌‏ـﮧ',$A); 
$A = str_replace('ا','آ',$A); 
$A = str_replace('ت','  تـ๋‌‏ـﮧ',$A); 
$A = str_replace('ن','نـ๋‌‏ـﮧ',$A); 
$A = str_replace('م','مـ๋‌‏ـﮧ',$A); 
$A = str_replace('ك','ڪـ๋‌‏ـﮧ',$A); 
$A = str_replace('ة','ةً',$A); 
$A = str_replace('ء','ء',$A); 
$A = str_replace('ظ','ظـ๋‌‏ـﮧ',$A); 
$A = str_replace('ط','طـ๋‌‏ـﮧ',$A); 
$A = str_replace('ذ','ذِ',$A); 
$A = str_replace('د','دٰ',$A); 
$A = str_replace('ز','زً',$A); 
$A = str_replace('ر','ر',$A); 
$A = str_replace('و','ﯛ‌୭',$A); 
$A = str_replace('ى','ىٰ',$A);
$A = str_replace('ࡎ' , ' ص' ,$A);
$A = str_replace(' ‏ɹɹ‌'  , ' ث' ,$A);
$A = str_replace(' ‏ᓆ' , ' ق',$A);
$A = str_replace(' ‏ᓅ' , ' ف' ,$A);
$A = str_replace('ﻏ‌' , 'غ',$A);
$A = str_replace('‏ξ' , 'ع' ,$A);
$A = str_replace('‏උ' , 'خ' ,$A);
$A = str_replace('‏ᓗ‌' , 'ج' ,$A);
$A = str_replace('‏ɹɹ‌ɹ' , 'ش',$A);
$A = str_replace('‏ɹɹɹ' , 'س' ,$A);
$A = str_replace('‏ʟ‌ɾʅ' , 'ي' ,$A);
$A = str_replace('‏ ɹ‌' , 'ب' ,$A);
$A = str_replace('‏ᒧ' , 'ل' ,$A);
$A = str_replace('‏І‌' , 'ا' ,$A);   
$A = str_replace('‏ɹ‌' , 'ت' ,$A);
$A = str_replace('‏Ủ' , 'ن' ,$A);
$A = str_replace('םــ' , 'م' ,$A);
$A = str_replace('‏ᓚ۶ᒧ' , 'ك' ,$A);
$A = str_replace('מ' , 'ط' ,$A);
$A = str_replace('‏ↄ‌' , 'ذ' ,$A);
$A = str_replace('‏ᘘ' , 'ظ' ,$A);
$A = str_replace('۶' , 'ء' ,$A);
$A = str_replace('‏૭' , 'و' ,$A);
$A = str_replace('‏ȷ' , 'ر' ,$A);
$A = str_replace('ى' , 'ى' ,$A);
$A = str_replace('‏j' , 'ز' ,$A);
$A = str_replace('ظ' , 'ظ' ,$A);
$A = str_replace('‏୬' , 'و' ,$A);
$A = str_replace('‏බ' , 'ه' ,$A);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$A.''.$smile.'*',
'parse_mode'=>'MarkDown',
]);
}
$video = $update->message->video;
if($text == "السورس" or $text == "سورس" or $text == "سورس مين" ){
if($tbbots){
bot('sendvideo',[
'chat_id'=>$chat_id,
'video'=>"https://t.me/tlashan/22",
'caption'=>"
╭───𝚆𝙴𝙻𝙲𝙼𝙴𝚃𝙾──╮
│ 𝗕𝘆➪@$buy
│╭──𝚆𝙴𝙻𝙲𝙼𝙴𝚃𝙾──╯
 ♕مرحبا  في سورس♕││
│╰──𝚃𝙰𝙻𝚂𝙷𝙰𝙽𝙴──╮
│╭──𝚃𝙰𝙻𝚂𝙷𝙰𝙽𝙴──╯
││                                      ♕
││ᯓ𐂠𝚃𝙷𝙴 𝙱𝙴𝚂𝚃 𝚂𝙾𝚄𝚁𝙲𝙴 𝙾𝙽 𝚃𝙴𝙻𝙴𝙶𝚁𝙰𝙼ᯓ𐂠
││                                      ♕
││      ᯓ𐂠𝚂𝙿𝙴𝙴𝙳 , 𝙰𝙲𝙲𝚄𝚁𝙰𝙲𝚈 , 𝚂𝙰𝙵𝙴𝚃𝚈ᯓ𐂠
│╰──𝙰𝙻𝙰𝚃𝚂𝙷𝙰𝚆𝚈─╮
│╭──𝙰𝙻𝙰𝚃𝚂𝙷𝙰𝚆𝚈─╯
││                 🏴𝚆𝙴𝙻𝙲𝙾𝙼𝙴 𝙳𝙴𝙰𝚁🏴
││       𝚈𝙾𝚄 𝙰𝚁𝙴 𝙽𝙾𝚆 𝙸𝙽 𝚃𝙷𝙴 𝙶𝚁𝙴𝙰𝚃𝙴𝚂𝚃
││            🏳️𝚂𝙾𝚄𝚁𝙲𝚁𝙾𝙽 𝚃𝙴𝙻𝙴𝙶𝚁𝙰𝙼🏳️
│╰──𝙵𝙰𝚁𝙴𝚆𝙴𝙻𝙻──╮
│ 𝗖𝗵²➪ @$channel
╰───𝙵𝙰𝚁𝙴𝚆𝙴𝙻𝙻──╯
",'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━ᯓ𝙰𝙻𝙰𝚃𝚂𝙷𝙰𝚆𝚈ᯓ━━━•𐂠","url"=>"t.me/alatshawy"]],
[["text"=>"𐂠ᯓ 𖡞المبرمج𖡞 ᯓ𐂠",'url'=>"t.me/BLACIK0"]],
]
])
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
╭───𝚆𝙴𝙻𝙲𝙼𝙴𝚃𝙾──╮
│ 𝗕𝘆➪𐂠*[ᯓтαℓαsнαηεᯓ](t.me/$buy)*𐂠
│╭──𝚆𝙴𝙻𝙲𝙼𝙴𝚃𝙾──╯
 ♕مرحبا  في سورس♕││
│╰──𝚃𝙰𝙻𝚂𝙷𝙰𝙽𝙴──╮
│╭──𝚃𝙰𝙻𝚂𝙷𝙰𝙽𝙴──╯
││                                      ♕
││ᯓ𐂠𝚃𝙷𝙴 𝙱𝙴𝚂𝚃 𝚂𝙾𝚄𝚁𝙲𝙴 𝙾𝙽 𝚃𝙴𝙻𝙴𝙶𝚁𝙰𝙼ᯓ𐂠
││                                      ♕
││      ᯓ𐂠𝚂𝙿𝙴𝙴𝙳 , 𝙰𝙲𝙲𝚄𝚁𝙰𝙲𝚈 , 𝚂𝙰𝙵𝙴𝚃𝚈ᯓ𐂠
│╰──𝙰𝙻𝙰𝚃𝚂𝙷𝙰𝚆𝚈─╮
│╭──𝙰𝙻𝙰𝚃𝚂𝙷𝙰𝚆𝚈─╯
││                 🏴𝚆𝙴𝙻𝙲𝙾𝙼𝙴 𝙳𝙴𝙰𝚁🏴
││       𝚈𝙾𝚄 𝙰𝚁𝙴 𝙽𝙾𝚆 𝙸𝙽 𝚃𝙷𝙴 𝙶𝚁𝙴𝙰𝚃𝙴𝚂𝚃
││            🏳️𝚂𝙾𝚄𝚁𝙲𝚁𝙾𝙽 𝚃𝙴𝙻𝙴𝙶𝚁𝙰𝙼🏳️
│╰──𝙵𝙰𝚁𝙴𝚆𝙴𝙻𝙻──╮
│ 𝗖𝗵²➪ *[𐂠━━ᯓтαℓαsнαηεᯓ━━𐂠](t.me/$channel)*
╰───𝙵𝙰𝚁𝙴𝚆𝙴𝙻𝙻──╯",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━ᯓтαℓαsнαηεᯓ━━━•𐂠","url"=>"t.me/alatshawy"]],
[['text'=>" 𐂠ᯓ اضغط هنا للاضافة الى مجموعتك ᯓ𐂠 ",'url'=>"https://telegram.me/$tbbots?startgroup=start"]],
]
])
]);
}
}

if($text =="المشرفين" ){
$up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
$result = $up['result'];
foreach($result as $key=>$value){
$found = $result[$key]['status'];
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['username']);
$ADARM = $ADARM."\n"."l "."[{@$innames}](tg://user?id={$result[$key]['user']['id']})";
}
}
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𐂠ᯓ هذه قائمة المشرفين 
$ADARM
",'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"𐂠ᯓ 𖡞المبرمج𖡞 ᯓ𐂠",'url'=>"t.me/BLACIK0"]],
 ]
]) 
]); 
}

$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$user = $update->message->from->username;
$export = file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($export, true);
$getlinkde = $jsonlink['result'];
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
if($text == "المطور" or $text == "ميشو" or $text == "𐂠ᯓمبرمج السورسᯓ𐂠" and in_array($from_id, $Dev)){
if($user){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/tlashan/3",
'caption'=>"
╭────𝚂𝙺𝙸𝙿────╮
│ 𝗕𝘆➪𐂠@$buy
│╭───𝚂𝙺𝙸𝙿────╯
││╭─𝚆𝙴𝙻𝙲𝙾𝙼𝙴𝚃𝙾─╮
│││            🥱           │
││╰─𝚃𝙰𝙻𝙰𝚂𝙷𝙰𝙽𝙴─╯ 
│╰──ᯓ𝙱𝙴𝚁𝙻𝙽ᯓ──╮
│╭──ᯓ𝙵𝙻𝙾𝙺𝙴ᯓ──╯
││             🏴
│╰──ᯓ𝙼𝙴𝚂𝙷𝙾ᯓ──╮
│ 𝗖𝗵²➪@$channel
╰───ᯓ𝙼𝙴𝚂𝙷𝙾ᯓ──╯",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━━━ᯓтαℓαsнαηεᯓ━━━━━•𐂠","url"=>"t.me/alatshawy"]],
[["text"=>"𐂠ᯓ 𖡞المبرمج𖡞 ᯓ𐂠",'url'=>"t.me/BLACIK0"]],
[['text'=>" 𐂠ᯓ اضغط هنا للاضافة الى مجموعتك ᯓ𐂠 ",'url'=>"https://telegram.me/$tbbots?startgroup=start"]],
]
])
]);
bot('sendphoto',[
'chat_id'=>$Dev[0],
'photo'=>"https://t.me/$user",
'caption'=>"𐂠ᯓ اسف عزيزي  ᯓ𐂠
𐂠ᯓ 𖡞المبرمج𖡞 ᯓ𐂠
𐂠ᯓ لم اقصد ازعاجك ولاكن  ᯓ𐂠
𐂠ᯓتم مناداتك من قبل هذه الشخص @$user
𐂠ᯓ في هذه المجموعه ᯓ𐂠
$getlinkde
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━━━ᯓтαℓαsнαηεᯓ━━━━━•𐂠","url"=>"t.me/alatshawy"]],
[['text'=>" 𐂠ᯓ اضغط هنا للاضافة الى مجموعتك ᯓ𐂠 ",'url'=>"https://telegram.me/$tbbots?startgroup=start"]],
]
])
]);
}
}

if(strpos($text,'صفحه') !== false){
$ex = explode(' ',$text);
$MR = $ex[1];
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://iuytiuyt.000webhostapp.com/newquran/$MR.gif",
'caption'=>"[ϗ•━━━━━SORSBLACK━━━━━•ϗ](https://t.me/alatshawy)",'disable_web_page_preview'=> true , 'parse_mode'=>"Markdown",
]);}

$sudo = 2116439329;
$saiko = file_get_contents("saiko.txt");
$ssaiko = file_get_contents("ssaiko.txt");
if($text=="رساله" and $from_id == $sudo){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𐂠ᯓ اهلا بك عزيزي
𐂠ᯓ الان قم بارسال الرسالة
",
]);
file_put_contents("saiko.txt","saiko");
}
if($text and $saiko =="saiko" and $from_id == $sudo){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𐂠ᯓ اهلا بك عزيزي
𐂠ᯓ تم حفض الرسالة
𐂠ᯓ الان قم بارسال { ايدي الشخص }
",
]);
file_put_contents("ssaiko.txt","$text");
file_put_contents("saiko.txt","gg");
}
if($text and $saiko =="gg" and $from_id == $sudo){
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"
𐎄اهلا عزيزي
𐎄لديك رسالة من المطور
𐎄 الرسالة  : $ssaiko
",
]);
file_put_contents("saiko.txt","amm");
}

$New_member = $message->new_chat_member;
$usser = $New_member->username;
$id = $New_member->id; 
$id_bot = 5028472780;
if(preg_match('/^(.*)([Bb][Oo][Tt])/',$usser) and $New_member and $id != $id_bot){
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id
]);
}

$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$armof = array("90%","10%","20%","هات بوسه ونتا قمر 😊 كده","30%","40%","50%","عسل ❤️","60%","70%","خد قلبي اعم ❤️😂","80%","90%","100%","500%","معفغور غير الصوره 😂","90%");
$alatshawy = array_rand($armof,1);
$user = $update->message->from->username;
if($text == "cv" or $text == "جماله" or $text == "نسبه جماله"){
if($user){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/$re_user",
'caption'=>"❤️نسبت جمالو هي 😻🙈 $armof[$alatshawy]
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━━━ᯓтαℓαsнαηεᯓ━━━━━•𐂠","url"=>"t.me/alatshawy"]],
[["text"=>"𐂠ᯓ 𖡞المبرمج𖡞 ᯓ𐂠",'url'=>"t.me/BLACIK0"]],
[['text'=>" 𐂠ᯓ اضغط هنا للاضافة الى مجموعتك ᯓ𐂠 ",'url'=>"https://telegram.me/$tbbots?startgroup=start"]],
]
])
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"❤️ نسبت جمالو هي 😻🙈 $armof[$alatshawy]",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━━━ᯓтαℓαsнαηεᯓ━━━━━•𐂠","url"=>"t.me/alatshawy"]],
[['text'=>" 𐂠ᯓ اضغط هنا للاضافة الى مجموعتك ᯓ𐂠 ",'url'=>"https://telegram.me/$tbbots?startgroup=start"]],
]
])
]);
}
}
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$armof = array("90%","10%","20%","هات بوسه ونتا قمر 😊 كده","30%","40%","50%","عسل ❤️","60%","70%","خد قلبي اعم ❤️😂","80%","90%","100%","500%","معفغور غير الصوره 😂","90%");
$user = $update->message->from->username;
if($text == "الجمال" or $text == "نسبه جمالي" or $text == "جمالي"){
if($user){
$alatshawy = array_rand($armof,1);
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$file_id",
'caption'=>"  نسبة جمالك هيه 😻🙈 $armof[$alatshawy]
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━━━ᯓтαℓαsнαηεᯓ━━━━━•𐂠","url"=>"t.me/alatshawy"]],
[["text"=>"𐂠ᯓ 𖡞المبرمج𖡞 ᯓ𐂠",'url'=>"t.me/BLACIK0"]],
[['text'=>" 𐂠ᯓ اضغط هنا للاضافة الى مجموعتك ᯓ𐂠 ",'url'=>"https://telegram.me/$tbbots?startgroup=start"]],
]
])
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"  نسبة جمالك هيه 😻🙈 $armof[$alatshawy]",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𐂠•━━━━━ᯓтαℓαsнαηεᯓ━━━━━•𐂠","url"=>"t.me/alatshawy"]],
[['text'=>" 𐂠ᯓ اضغط هنا للاضافة الى مجموعتك ᯓ𐂠 ",'url'=>"https://telegram.me/$tbbots?startgroup=start"]],
]
])
]);
}
}
if ($text == "𐂠•━━━━━ᯓ🏴تحديث السورس🏳️ᯓ━━━━━•𐂠" and in_array($from_id,$Dev)){
 $ver = phpversion();  
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/$channel",
'caption'=>"𐂠ᯓ تم تحديث البوت 
𐂠ᯓ لديك اخر اصدار للسورس 
⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️100%
𐂠ᯓ الاصدار 𐂠ᯓ <code>$ver</code>v", 'parse_mode'=>"HTML",'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"𐂠•━━━━━ᯓтαℓαsнαηεᯓ━━━━━•𐂠","url"=>"t.me/alatshawy"]],
[["text"=>"𐂠ᯓمبرمج السورسᯓ𐂠",'url'=>"t.me/BLACIK0"]],
]
])
]);}


