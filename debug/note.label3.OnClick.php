<?php c("openDlg1")->execute(); //��������� ������ ������ �����
$file = c("openDlg1")->fileName; //���������� $file ����� �������� ����� ������� �� �������
$text = file_get_contents($file); //���������� $text = ������ ������� �� ������� �� ���������� �����
c("memo1")->text = $text; //�� ��� ����� ������� ����� ����� ������ ������� �� �������.

