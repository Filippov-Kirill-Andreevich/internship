SET NAMES 'cp866';

use internship
-- 1. ����㤭��� �� ��䮢���, ����� ����� � ��த�� �� "�"
SELECT name, city FROM employee WHERE city LIKE '�%' ORDER BY name;

-- 2. ����㤭��� � ������ ᥣ���� ���� ஦�����
SELECT name, birthday FROM employee WHERE birthday LIKE CONCAT('%', DATE_format(CURDATE(), '%m-%d'));
