<?
set_time_limit(1100);

  function is_prime($number) //Функция вычисления простых чисел
{
    
    if ( $number == 1 ) {
        return false;
    }
    
    if ( $number == 2 ) {
        return true;
    }
    
    $x = sqrt($number);
    $x = floor($x);
    for ( $i = 2 ; $i <= $x ; ++$i ) {
        if ( $number % $i == 0 ) {
            break;
        }
    }
    
    if( $x == $i-1 ) {
	
        return true;
    } else {
	
        return false;
    }
}

 function cycle ($number) //Функция циклического сдвига 
{
$masstr=array();

$str4=(string)$number;

	if (strlen($str4)>=6)
	$l3=strlen($str4)-6;
	else  $l3=strlen($str4)-1; 
for ($k2=0;$k2<=strlen($str4)-1-$l3;$k2++)
 {
	$str3= strtr( $str4,array($str4[strlen($str4)-1-$k2]=>$str4[strlen($str4)-strlen($str4)+$l3],$str4[strlen($str4)-strlen($str4)+$l3]=>$str4[strlen($str4)-1-$k2]));
	if (strlen($str4)>=6) $masstr[]=$str3;

							if (strlen($str3)>=5)
							$l2=strlen($str3)-5;
							else  $l2=strlen($str3)-1; 
								for ($k1=0;$k1<=strlen($str3)-1-$l2;$k1++)
								{
									$str2= strtr( $str3,array($str3[strlen($str3)-1-$k1]=>$str3[strlen($str3)-strlen($str3)+$l2],$str3[strlen($str3)-strlen($str3)+$l2]=>$str3[strlen($str3)-1-$k1]));
									if (strlen($str3)>=5) $masstr[]=$str2;
									
											if (strlen($str2)>=4)
											$l1=strlen($str2)-4;
											else $l1=strlen($str2)-1;;
											for ($k=0;$k<=strlen($str2)-1-$l1;$k++)
											{
												$str1= strtr( $str2,array($str2[strlen($str2)-1-$k]=>$str2[strlen($str2)-strlen($str2)+$l1],$str2[strlen($str2)-strlen($str2)+$l1]=>$str2[strlen($str2)-1-$k]));
												 if (strlen($str2)>=4) $masstr[]=$str1;
												
												   if (strlen($str1)>=3)
													$l=strlen($str1)-3;
													else $l=strlen($str3)-1;;
													
													for ($j=0;$j<=strlen($str1)-1-$l;$j++)
													{ 
														$str= strtr( $str1,array($str1[strlen($str1)-1-$j]=>$str1[strlen($str1)-strlen($str1)+$l],$str1[strlen($str1)-strlen($str1)+$l]=>$str1[strlen($str1)-1-$j]));
														$masstr[]=$str;

														 if (strlen($str)>=2)
															{
																$str= strtr( $str,array($str[strlen($str)-1]=>$str[strlen($str)-2],$str[strlen($str)-2]=>$str[strlen($str)-1]));
																$masstr[]=$str;
																
															} 
													}
												
											}
								}
  }
return $masstr; 
 
} 

$start =1; $end =1000000;

for($i = $start; $i <= $end; $i++)
{

				if(is_prime($i))			//Нахождение простых чисел  из массива данных 
		{
			
			$a=cycle($i);					//Циклический сдвиг простых чисел

			for ($h=0;$h<=count($a)-1;$h++)
			{
			
				if(!is_prime((int)$a[$h]))	//Проверка значений циклического сдвига на простые числа
				break;
				elseif($h==count($a)-1)
				echo '<strong>'.$i.'</strong> ';
			} 

		}
	
}




?>

