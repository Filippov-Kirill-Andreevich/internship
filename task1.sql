SET NAMES 'cp866';

use internship
-- 1. ����㤭��� �� ��䮢���, ����� ����� � ��த�� �� "�"
SELECT name, city FROM employee WHERE city LIKE '�%' ORDER BY name;

-- 2. ����㤭��� � ������ ᥣ���� ���� ஦�����
SELECT name, birthday FROM employee WHERE birthday LIKE CONCAT('%', DATE_format(CURDATE(), '%m-%d'));

-- 3. ����㤭��� c �������쭮� � ���ᨬ��쭮� �/�
SELECT name, salary FROM employee WHERE salary=(SELECT max(salary) FROM employee) OR salary=(SELECT min(salary) FROM employee)