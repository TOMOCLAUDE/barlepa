<?php c("saveDlg1")->execute(); //��������� ������ ����������
$file = c("saveDlg1")->fileName; //���������� $file ����� �������� ����� ������� �� ������� � ������� ����������
$text = c("memo1")->text; //���������� $text ����� ������ c("memo1")->text
file_put_contents("$file.txt",$text);
