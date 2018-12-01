SET NAMES 'cp866';

-- 1. Сотрудники по алфовиту, которые живут в городах на "А"
SELECT name, city FROM employee WHERE city LIKE 'А%' ORDER BY name;

-- 2. Сотрудники у которых сегодня день рождения
SELECT name, birthday FROM employee WHERE birthday LIKE CONCAT('%', DATE_format(CURDATE(), '%m-%d'));

-- 3. Сотрудники c минимальной и максимальной з/п
SELECT name, salary FROM employee WHERE salary=(SELECT max(salary) FROM employee) OR salary=(SELECT min(salary) FROM employee);

-- 4. Сотрудники c максимальной з/п в каждом отделе
SELECT name, salary, department_id FROM employee WHERE salary IN (SELECT max(salary) FROM employee GROUP BY department_id) ORDER BY department_id;