-- Сотрудники по алфовиту, которые живут в городах на "А"
SELECT name, city FROM employee WHERE city LIKE 'А%' ORDER BY name;