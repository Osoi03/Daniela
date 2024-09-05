CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    imagen VARCHAR(255) NOT NULL
);

INSERT INTO productos (nombre, descripcion, precio, imagen) VALUES 
('Producto 1', 'Descripción detallada del producto 1.', 19.99, 'producto1.jpg'),
('Producto 2', 'Descripción detallada del producto 2.', 29.99, 'producto2.jpg'),
('Producto 3', 'Descripción detallada del producto 3.', 39.99, 'producto3.jpg'),
('Producto 4', 'Descripción detallada del producto 4.', 49.99, 'producto4.jpg'),
('Producto 5', 'Descripción detallada del producto 5.', 59.99, 'producto5.jpg'),
('Producto 6', 'Descripción detallada del producto 6.', 69.99, 'producto6.jpg'),
('Producto 7', 'Descripción detallada del producto 7.', 79.99, 'producto7.jpg'),
('Producto 8', 'Descripción detallada del producto 8.', 89.99, 'producto8.jpg'),
('Producto 9', 'Descripción detallada del producto 9.', 99.99, 'producto9.jpg'),
('Producto 10', 'Descripción detallada del producto 10.', 109.99, 'producto10.jpg');

use daniela;