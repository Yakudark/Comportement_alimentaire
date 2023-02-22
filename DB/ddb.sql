CREATE TABLE users(
    id INT NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(50),
    lastname VARCHAR(50),
    email VARCHAR(50) NOT NULL,
    pwd VARCHAR(50) NOT NULL,
    weight_user INT,
    height INT,
    sexe VARCHAR(50),
    date_of_birth VARCHAR(30),
    PRIMARY KEY (id)
);

CREATE TABLE food(
    id INT NOT NULL AUTO_INCREMENT,
    name_food VARCHAR(50) NOT NULL,
    category VARCHAR(30) NOT NULL,
    kcal INT NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE eaten_date(
    id_user INT NOT NULL,
    id_food INT NOT NULL,
    date_of_eaten VARCHAR(30) NOT NULL,
    PRIMARY KEY (id_user, id_food),
    FOREIGN KEY (id_user) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (id_food) REFERENCES food(id) ON DELETE CASCADE
);