<?php
if(!defined('EMLOG_ROOT')) {exit('error!');}
function plugin_setting_view(){
	$live2d_set=unserialize(ltrim(file_get_contents(dirname(__FILE__).'/live2d.com.php'),'<?php die; ?>'));
	?>
	
        <form method="post">
    
        KEY：<input name="ak" value="<?php echo $live2d_set['ak']; ?>" /><br />
        音乐1：<input name="msra" value="<?php echo $live2d_set['msra']; ?>" /><br />
        音乐2：<input name="msrb" value="<?php echo $live2d_set['msrb']; ?>" /><br />
        音乐3：<input name="msrc" value="<?php echo $live2d_set['msrc']; ?>" /><br />
        音乐4：<input name="msrd" value="<?php echo $live2d_set['msrd']; ?>" /><br />
        音乐5：<input name="msre" value="<?php echo $live2d_set['msre']; ?>" /><br />
        
        <br />
        
        <input type="submit" value="提交" />
        
        </form>
	<?php
	
}

if(!empty($_POST)){

$ak=empty($_POST['ak'])?'':trim($_POST['ak']);
$msra=empty($_POST['msra'])?'':trim($_POST['msra']);
$msrb=empty($_POST['msrb'])?'':trim($_POST['msrb']);
$msrc=empty($_POST['msrc'])?'':trim($_POST['msrc']);
$msrd=empty($_POST['msrd'])?'':trim($_POST['msrd']);
$msre=empty($_POST['msre'])?'':trim($_POST['msre']);


if(get_magic_quotes_gpc()){

$ak=stripslashes($ak);
$msra=stripslashes($msra);
$msrb=stripslashes($msrb);
$msrc=stripslashes($msrc);
$msrd=stripslashes($msrd);
$msre=stripslashes($msre);

}

file_put_contents(dirname(__FILE__).'/live2d.com.php','<?php die; ?>'.serialize(array(

'ak'=>$ak,
'msra'=>$msra,
'msrb'=>$msrb,
'msrc'=>$msrc,
'msrd'=>$msrd,
'msre'=>$msre,


)));


}

?>