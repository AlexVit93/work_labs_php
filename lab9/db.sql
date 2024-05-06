-- Создание таблицы сотрудников
CREATE TABLE Employees (
    last_name VARCHAR(255) PRIMARY KEY,
    position VARCHAR(255),
    department VARCHAR(255)
);

-- Создание таблицы оборудования
CREATE TABLE Equipment (
    equipment_id INT AUTO_INCREMENT PRIMARY KEY,
    last_name VARCHAR(255),
    equipment_name VARCHAR(255),
    quantity INT,
    price INT,
    FOREIGN KEY (last_name) REFERENCES Employees(last_name)
);

-- Добавление данных в таблицу сотрудников
INSERT INTO Employees (last_name, position, department) VALUES
('Иванов', 'Мастер', 'Инструментальный'),
('Петров', 'Слесарь', 'Инструментальный'),
('Сидоров', 'Монтер', 'Сборочный');

-- Добавление данных в таблицу оборудования
INSERT INTO Equipment (last_name, equipment_name, quantity, price) VALUES
('Иванов', 'станок1', 7, 1000),
('Иванов', 'станок2', 4, 500),
('Иванов', 'станок3', 8, 700),
('Петров', 'паяльник', 7, 20),
('Петров', 'дрель', 8, 160),
('Сидоров', 'дрель', 6, 160),
('Сидоров', 'газовый ключ', 9, 10);
