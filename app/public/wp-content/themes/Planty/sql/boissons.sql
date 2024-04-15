--Création de base de données boissons
CREATE DATABASE IF NOT EXISTS 'boissons'(
    'id_boisson' int(11) NOT null auto_increment,
    'parfums' varchar (128) NOT null,
    'quantité' int (11) NOT null,
    PRIMARY KEY (id_boisson) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
)