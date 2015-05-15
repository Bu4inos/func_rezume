<?php
function slee($s) // для запуска через s секунд
{
	sleep($s); 
	dat();
}

function dat()
{
	if ((date(H) > 5) && (date(H) < 11)) 
	{
		echo"Доброе утро <br />";
	}
	else
	{
		if ((date(H) > 11) && (date(H) < 17)) 
		{
			echo"Добрый день <br />";
		}
		else
		{
			if ((date(H) > 17) && (date(H) < 22)) 
			{ 
				echo"Добрый вечер <br />";
			}
			else
			{
			/*	$strn="Иди спать, глаза уже как у бешанного таракана <br />";
				iconv("windows-1251", "UTF-8", strn);
				echo $strn; */
				// не поборол кодировку :(
				echo "Иди спать, глаза уже как у бешанного таракана <br />";	
			}	
		}
	}

	flush();

	slee(5);

}

dat();
