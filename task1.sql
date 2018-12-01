SET NAMES 'cp866';

use internship
-- 1. Сотрудники по алфовиту, которые живут в городах на "А"
SELECT name, city FROM employee WHERE city LIKE 'А%' ORDER BY name;

-- 2. Сотрудники у которых сегодня день рождения
SELECT name, birthday FROM employee WHERE birthday LIKE CONCAT('%', DATE_format(CURDATE(), '%m-%d'));
