<?php c("saveDlg1")->execute(); //Открываем диалог сохранения
$file = c("saveDlg1")->fileName; //Переменная $file равна названию файла который мы напишем в диалоге сохранения
$text = c("memo1")->text; //Переменная $text равна тексту c("memo1")->text
file_put_contents("$file.txt",$text);
