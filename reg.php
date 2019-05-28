<?php
function expansion()
{
	if(!empty($_POST['expansion']))
	{
		$word = $_POST['expansion'];
		$reg = '/^[A-Za-z0-9А-Яа-яёЁ]+\.[a-z]+$/';
		if (preg_match($reg, $word, $matches))
		{
			echo "Расширение данного файла " . $matches[0];
		}
		else
			echo "Неверный формат ввода";
	}
	else
		echo "Введите данные";
}

function match()
{
	if(!empty($_POST['match']))
	{
		$word = $_POST['match'];
		$archive = '/(zip|7z|ace|arj|cab|cbr|deb|exe|gz|jar|gzip|one|pak|pkg|ppt|rar|rpm|sh|sib|sis|sisx|spl|tar|tar-gz|tgz|xar|zipx)$/';
		$music = '/(aac|ac3|aif|aiff|amr|aob|ape|asf|aud|awb|bwg|cdr|flac|gpx|ics|iff|m|m3u|m3u8|m4a|m4b|m4p|m4r|mid|midi|mod|mp3|mpp|msc|msv|mts|nkc|ogg|ps|ra|ram|sdf|sib|sln|spl|srt|temp|vb|wav|wave|wm|wma|wpd|xsb|xwb)$/';
		$video = '/(3g2|3gp|3gp2|3gpp2|3gpp|asf|asx|avi|dat|drv|f4v|flv|gtp|h264|m4v|mkv|mod|moov|mov|mp4|mpeg|mpg|mts|rm|rmvb|spl|srt|stl|swf|ts|vcd|vid|vob|webm|wm|wmv|yuv)$/';
		$img = '/(asf|cdw|cr2|cs|cur|dmp|drv|icns|max|mds|mng|msv|odt|ogg|pct|pict|png|pps|prf|spl|tex|ttf|xps|jpg|bmp)$/';
		if (preg_match($archive, $word, $matches))
		{
			echo "Это архив типа " . $matches[0];
		}
		else if (preg_match($music, $word, $matches))
		{
			echo "Это аудиофайл типа " . $matches[1];
		}
		else if (preg_match($video, $word, $matches))
		{
			echo "Это видеофайл типа " . $matches[1];
		}
		else if (preg_match($img, $word, $matches))
		{
			echo "Это изображение типа " . $matches[1];
		}
		else
			echo "Неизвестный формат";
	}
	else
		echo "Введите данные";
}

function title()
{
	if (!empty($_POST['title']))
	{
		$string = $_POST['title'];
		$title = '/<title.*?>(.*)<\/title>/';
		if (preg_match($title, $string, $matches))
		{
			echo "Найден тег title " . $matches[1];
		}
		else
			echo "Тег title не найдет";
	}
	else
		echo "Введите данные";
}

function ahref(){
	if (!empty($_POST['ahref']))
	{
		$string = $_POST['ahref'];
		$ahref = '/<a(.+)>(.+)<\/a>/';
		$href = '/href=(?:\"|\')+(.+?)(?:\"|\')+/';
		if (preg_match($ahref, $string, $matches))
		{
			$str = '';
			for ($i = 0; $i < count($matches[1]); $i++)
			{ 
				$str .= $matches[1][$i];
				$str .= "<br>";
			}
			if (preg_match_all($href, $str, $matches1))
			{ 
				for($i=0;$i<count($matches1[1]);$i++)
				{ 
					echo $matches1[1][$i]."<br>"; 
				}
			} 
		}
		echo "Тег а не найден";
	}
	else
		echo "Введите данные";
}

function imgfind(){
	if (!empty($_POST['img'])) {
		$string = $_POST['img'];
		$img = '/<img(.+)>/';
		if(preg_match_all($img, $string, $mas1)){
			$str = '';
			for ($i=0; $i < count($mas1[1]); $i++)
			{ 
				$str .= $mas1[1][$i];
				$str .= "<br>";
			}
			if (preg_match_all("#src=(?:\"|')+(.+?)(?:\"|')+#", $str, $mas))
			{ 
				for($i=0;$i<count($mas[1]);$i++){ 
					echo $mas[1][$i]."<br>"; 
				}
			} 
		}  
		echo "Src не найден"; 
	}
	else
		echo "Введите данные";
}

function strong(){
	if (!empty($_POST['text'])||!empty($_POST['strong'])) {
		$text = $_POST['text'];
		$strong = $_POST['strong'];
		$str = "<strong>$strong</strong>";
		if (preg_match("/$strong/", $text)) {
			echo preg_replace("/$strong/", $str, $text);
		}
		else
			echo "Текст не найден";
	}
	else
		echo "Введите данные";
}

function replacesmile(){
	if (!empty($_POST['smile'])) {
		$text = $_POST['smile'];
		$img = $text;
		$sm1 = "/\:\)/";
		$sm2 = "/\:\(/";
		$sm3 = "/\;\)/";
		$img = preg_replace($sm1, "<img src = 'https://img.icons8.com/color/48/000000/lol.png' alt = ':)'>", $img);
		$img = preg_replace($sm2, "<img src = 'https://img.icons8.com/color/48/000000/sad.png' alt = ':('>", $img);
		$img = preg_replace($sm3, "<img src = 'https://img.icons8.com/color/48/000000/wink.png' alt = ';)'>", $img);
		if ($img === $text)
		{
			echo "Нет смайлов";
		}
		echo $img;		
	}
	else
		echo "Введите данные";
}

function space(){
	if(!empty($_POST['space'])){
		$text = $_POST['space'];
		$space = "/\s+/";
		$text = preg_replace($space," ", $text);
		echo $text;
	}
	else
		echo "Введите данные";
}
