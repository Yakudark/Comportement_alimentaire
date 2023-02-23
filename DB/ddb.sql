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

INSERT INTO food (name_food, category, kcal) VALUES
('Artichaut', 'légumes', 44),
('Asperge', 'légumes', 30),
('Aubergine', 'légumes', 35),
('Avocat', 'légumes', 169),
('Betterave rouge', 'légumes', 43),
('Brocoli', 'légumes', 29),
('Carotte cuite', 'légumes', 28),
('Carotte crue', 'légumes', 36),
('Céleri branche', 'légumes', 13),
('Champignons', 'légumes', 30),
('Chou', 'légumes', 25),
('Courgette', 'légumes', 12),
('Échalote', 'légumes', 19),
('Endive', 'légumes', 76),
('Épinard', 'légumes', 17),
('Fenouil', 'légumes', 27),
('Haricots verts', 'légumes', 18),
('Navet', 'légumes', 33),
('Oignon', 'légumes', 2136),
('Petit pois', 'légumes', 71),
('Poireau', 'légumes', 25),
('Poivron', 'légumes', 29),
('Potiron', 'légumes', 68),
('Potiron cuit', 'légumes', 13),
('Pousse de soja', 'légumes', 28),
('Radis rouge', 'légumes', 23),
('Salade verte', 'légumes', 15),
('Tomate', 'légumes', 16),
('Topinambour', 'légumes', 71),
('Fèves', 'légumes secs', 61),
('Haricots blancs', 'légumes secs', 104),
('Haricots rouges', 'légumes secs', 111),
('Lentilles', 'légumes secs', 112),
('Pois cassés', 'légumes secs', 121),
('Pois chiches', 'légumes secs', 139),
('Tofu', 'légumes secs', 125),
('Biscotte', 'féculents', 404),
('Blé cuit', 'féculents', 155),
('Boulghour cuit', 'féculents', 96),
('Chips salées', 'féculents', 487),
('Croûtons nature', 'féculents', 493),
('Ébly cuit', 'féculents', 70),
('Farine de blé', 'féculents', 343),
('Farine de blé complet', 'féculents', 316),
('Maïs', 'féculents', 103),
('Maïzena', 'féculents', 351),
('Pain blanc', 'féculents', 258),
('Pain complet', 'féculents', 269),
('Pâtes cuites', 'féculents', 151),
('Patate douce', 'féculents', 79),
('Pomme de terre', 'féculents', 75),
('Pomme de terre frite', 'féculents', 254),
('Quinoa cuit', 'féculents', 150),
('Riz cuit', 'féculents', 135),
('Semoule de blé cuit', 'féculents', 106),
('Tapioca cuit', 'féculents', 65),
('Abats', 'viandes', 148),
('Agneau', 'viandes', 225),
('Blanc de dinde', 'viandes', 111),
('Blanc de poulet', 'viandes', 121),
('Boeuf bavette', 'viandes', 103),
('Boeuf bifteck', 'viandes', 149),
('Boeuf côte', 'viandes', 252),
('Boeuf entrecôte', 'viandes', 192),
('Boeuf faux-filet', 'viandes', 170),
('Boeuf haché 15 %', 'viandes', 239),
('bœuf haché 5 %', 'viandes', 158),
('Boeuf tournedos', 'viandes', 188),
('Boudin noir', 'viandes', 261),
('Caille', 'viandes', 198),
('Canard aiguillette', 'viandes', 205),
('Canard magret', 'viandes', 205),
('Chair à saucisse', 'viandes', 375),
('Cheval', 'viandes', 110),
('Chorizo', 'viandes', 477),
('Cordon bleu', 'viandes', 230),
('Dinde', 'viandes', 130),
('Foie gras', 'viandes', 485),
('Gibier', 'viandes', 116),
('Grison', 'viandes', 189),
('Jambon blanc', 'viandes', 119),
('Jambon de pays', 'viandes', 23),
('Lapin', 'viandes', 165),
('Lardons fumés', 'viandes', 251),
('Merguez', 'viandes', 279),
('Mouton', 'viandes', 248),
('Oie', 'viandes', 274),
('Pâté de campagne', 'viandes', 329),
('Pintade', 'viandes', 106),
('Porc', 'viandes', 168),
('Porc côtelettes', 'viandes', 276),
('Porc rôti', 'viandes', 159),
('Porc travers', 'viandes', 332),
('Poulet sans la peau', 'viandes', 121),
('Rillettes', 'viandes', 417),
('Saucisse', 'viandes', 307),
('Saucisson', 'viandes', 410),
('Veau côte', 'viandes', 237),
('Veau escalope', 'viandes', 151);


INSERT INTO food (name_food, category, kcal)
VALUES ('Anchois', 'poissons', 161),
('Bar', 'poissons', 154),
('Cabillaud', 'poissons', 93),
('Calamar', 'poissons', 89),
('Colin', 'poissons', 79),
('Daurade', 'poissons', 24),
('Espadon', 'poissons', 191),
('Flétan', 'poissons', 93),
('Hareng grillé', 'poissons', 181),
('Lieu', 'poissons', 102),
('Limande', 'poissons', 97),
('Lotte', 'poissons', 97),
('Maquereau en boîte nature', 'poissons', 159),
('Maquereau frais', 'poissons', 238),
('Oeufs de lump', 'poissons', 225),
('Panga', 'poissons', 67),
('Poisson pané', 'poissons', 189),
('Rillettes de saumon', 'poissons', 231),
('Rillettes de thon', 'poissons', 223),
('Rouget', 'poissons', 148),
('Sardine au naturel', 'poissons', 215),
('Sardine fraîche', 'poissons', 152),
('Saumon', 'poissons', 217),
('Saumon fumé', 'poissons', 169),
('Sole', 'poissons', 95),
('Surimi', 'poissons', 101),
('Thon au naturel', 'poissons', 116),
('Thon frais', 'poissons', 136),
('Truite', 'poissons', 130),
('Oeufs entiers', 'oeufs', 145),
('Blanc', 'oeufs', 44),
('Jaune', 'oeufs', 339),
('Bulots', 'fruits de mer', 90),
('Crabe', 'fruits de mer', 128),
('Crevettes', 'fruits de mer', 93),
('Gambas', 'fruits de mer', 99),
('Homard', 'fruits de mer', 4),
('Huîtres', 'fruits de mer', 40),
('Langouste', 'fruits de mer', 136),
('Moules', 'fruits de mer', 119),
('Noix de Saint-Jacques', 'fruits de mer', 63),
('Seiche', 'fruits de mer', 68),
('Actimel 0 % nature', 'produits laitiers', 25),
('Actimel nature sucré', 'produits laitiers', 68),
('Apéricube', 'produits laitiers', 271),
('Babybel léger', 'produits laitiers', 212),
('Babybel rouge', 'produits laitiers', 335),
('Beaufort', 'produits laitiers', 393),
('Boursin', 'produits laitiers', 413),
('Brebis', 'produits laitiers', 261),
('Bresse bleu', 'produits laitiers', 348),
('Brie', 'produits laitiers', 337),
('Brousse de brebis', 'produits laitiers', 95),
('Bûche de chèvre', 'produits laitiers', 309),
('Camembert', 'produits laitiers', 265),
('Cammebert allégé', 'produits laitiers', 210),
('Cancoillotte', 'produits laitiers', 130),
('Cantal', 'produits laitiers', 371),
('Caprice des Dieux', 'produits laitiers', 345),
('Carré frais', 'produits laitiers', 215),
('Carré frais 0 %', 'produits laitiers', 79),
('Cheddar', 'produits laitiers', 400),
('Chèvre frais', 'produits laitiers', 193),
('Comté', 'produits laitiers', 418),
('Edam', 'produits laitiers', 312),
('Emmental', 'produits laitiers', 367),
('Faisselle 0 %', 'produits laitiers', 39),
('Feta nature', 'produits laitiers', 269),
('Fromage blanc 0 %', 'produits laitiers', 46),
('Fromage blanc 20 %', 'produits laitiers', 78),
('Gorgonzola', 'produits laitiers', 360),
('Gouda', 'produits laitiers', 362),
('Gruyère', 'produits laitiers', 414),
('Kiri', 'produits laitiers', 309),
('La vache qui rit', 'produits laitiers', 239),
('Lait de brebis', 'produits laitiers', 98),
('Lait de chèvre 1/2 écrémé', 'produits laitiers', 55),
('Lait demi-écrémé', 'produits laitiers', 46),
('Lait écrémé', 'produits laitiers', 33),
('Lait entier', 'produits laitiers', 64),
('Leerdammer', 'produits laitiers', 360),
('Maroilles', 'produits laitiers', 350),
('Mimolette', 'produits laitiers', 329),
('Morbier', 'produits laitiers', 347),
('Mozzarella', 'produits laitiers', 259),
('Munster', 'produits laitiers', 340),
('Parmesan', 'produits laitiers', 441),
('Petit-suisse 0 %', 'produits laitiers', 52),
('Abricot', 'fruits', 49),
('Airelles', 'fruits', 21),
('Ananas', 'fruits', 53),
('Babane', 'fruits', 94),
('Banane plantain', 'fruits', 120),
('Cassis', 'fruits', 73),
('Cerise', 'fruits', 71),
('Citron', 'fruits', 34),
('Citron vert', 'fruits', 26),
('Clémentine', 'fruits', 48),
('Coing', 'fruits', 58),
('Cranberry', 'fruits', 341),
('Figue', 'fruits', 68),
('Fraise', 'fruits', 29),
('Framboise', 'fruits', 45),
('Fruit de la passion', 'fruits', 84),
('Fruits rouges', 'fruits', 46),
('Goyave', 'fruits', 33),
('Grenade', 'fruits', 71),
('Groseille', 'fruits', 55),
('Kaki', 'fruits', 66),
('Kiwi', 'fruits', 58),
('Litchi', 'fruits', 69),
('Mandarine', 'fruits', 40),
('Mangue', 'fruits', 63),
('Melon', 'fruits', 32),
('Mirabelle', 'fruits', 62),
('Mûre', 'fruits', 49),
('Myrtille', 'fruits', 60),
('Nectarine', 'fruits', 43),
('Noix de coco', 'fruits', 362),
('Olice noire', 'fruits', 162),
('Olive verte', 'fruits', 145),
('Orange', 'fruits', 47),
('Pamplemousse', 'fruits', 36),
('Papaye', 'fruits', 44),
('Pastèque', 'fruits', 34),
('Pêche', 'fruits', 54),
('Poire', 'fruits', 53),
('Pomme', 'fruits', 53),
('Prune', 'fruits', 49),
('Pruneau', 'fruits', 227),
('Raisin blanc', 'fruits', 70),
('Raisin noir', 'fruits', 62),
('Rhubarbe', 'fruits', 18),
('Compote sans sucre ajouté', 'fruits', 52),
('Abricot sec', 'fruits secs et oléagineux', 271),
('Amande', 'fruits secs et oléagineux', 634),
('Baie de Goji', 'fruits secs et oléagineux', 392),
('Banane séchée', 'fruits secs et oléagineux', 274),
('Cacahuète', 'fruits secs et oléagineux', 636),
('Chatiagne', 'fruits secs et oléagineux', 133),
('Cranberry séchée', 'fruits secs et oléagineux', 341),
('Datte séchée', 'fruits secs et oléagineux', 282),
('Figue séchée', 'fruits secs et oléagineux', 252),
('Graine de chanvre', 'fruits secs et oléagineux', 596),
('Graine de tournesol', 'fruits secs et oléagineux', 642),
('Marron', 'fruits secs et oléagineux', 133),
('Noisette', 'fruits secs et oléagineux', 683),
('Noix', 'fruits secs et oléagineux', 698),
('Noix de cajou grillée', 'fruits secs et oléagineux', 631),
('Noix de coco séchée', 'fruits secs et oléagineux', 628),
('Noix de pécan', 'fruits secs et oléagineux', 695),
('Noix du Brésil', 'fruits secs et oléagineux', 672),
('Pignon de pin', 'fruits secs et oléagineux', 695),
('Pistache', 'fruits secs et oléagineux', 604),
('Pomme séchée', 'fruits secs et oléagineux', 283),
('Pruneau séché', 'fruits secs et oléagineux', 244),
('Raisins secs', 'fruits secs et oléagineux', 303),
('Beignet au chocolat', 'produits sucrés', 299),
('Beurre de cacahuète', 'produits sucrés', 586),
('Bonbon', 'produits sucrés', 382),
('Brioche', 'produits sucrés', 375),
('Cake aux fruits', 'produits sucrés', 392),
('Cake aux pépites de chocolat', 'produits sucrés', 447),
('Cannelé', 'produits sucrés', 302),
('Chausson aux pommes', 'produits sucrés', 345),
('Chocolat au lait', 'produits sucrés', 568),
('Chocolat blanc', 'produits sucrés', 575),
('Chocolat en poudre', 'produits sucrés', 379),
('Chocolat noir 70 %', 'produits sucrés', 561),
('Chouquettes', 'produits sucrés', 395),
('Confiture de fraises', 'produits sucrés', 250),
('Croissant', 'produits sucrés', 413),
('Éclair au chocolat', 'produits sucrés', 292),
('Glace à la vanille', 'produits sucrés', 184),
('Glace au chocolat', 'produits sucrés', 192),
('Madeleine', 'produits sucrés', 447),
('Miel', 'produits sucrés', 327),
('Nougat', 'produits sucrés', 467),
('Nutella', 'produits sucrés', 530),
('Pain au chocolat', 'produits sucrés', 414),
('Pain d’épices', 'produits sucrés', 326),
('Pâte d’amandes', 'produits sucrés', 446),
('Pâte de fruits', 'produits sucrés', 314),
('Sirop d’agave', 'produits sucrés', 312),
('Sirop d’érable', 'produits sucrés', 252),
('Sorbet citron', 'produits sucrés', 123),
('Sucre blanc', 'produits sucrés', 398),
('Beurre demi-sel', 'corps gras', 728),
('Beurre doux', 'corps gras', 747),
('Crème fraîche entière', 'corps gras', 313),
('Crème fraîche légère 15 %', 'corps gras', 165),
('Huile d’arachide', 'corps gras', 895),
('Huile d’olive', 'corps gras', 899),
('Huile de colza', 'corps gras', 899),
('Huile de foie de morue', 'corps gras', 837),
('Huile de lin', 'corps gras', 900),
('Huile de noix', 'corps gras', 899),
('Huile de pépin de raisin', 'corps gras', 899),
('Huile de poisson', 'corps gras', 899),
('Huile de sésame', 'corps gras', 900),
('Huile de soja', 'corps gras', 899),
('Huile de tournesol', 'corps gras', 900),
('Margarine', 'corps gras', 758),
('Mayonnaise', 'corps gras', 727),
('Mayonnaise allégée', 'corps gras', 344),
('Saindoux', 'corps gras', 846),
('Café', 'boissons', 2),
('Coca cola', 'boissons', 42),
('Eau', 'boissons', 0),
('Gaspacho', 'boissons', 44),
('Ice tea pêche', 'boissons', 28),
('Jus d’abricot', 'boissons', 61),
('Jus d’orange', 'boissons', 45),
('Jus de légume', 'boissons', 21),
('Jus de pamplemousse', 'boissons', 33),
('Jus de pomme', 'boissons', 42),
('Jus de tomate', 'boissons', 20),
('Lait d’amande', 'boissons', 46),
('L’ait d’avoine', 'boissons', 40),
('Lait de coco', 'boissons', 173),
('Limonade', 'boissons', 36),
('Orangina', 'boissons', 41),
('Ricoré poudre', 'boissons', 9),
('Sirop de grenadine', 'boissons', 289),
('Sirop de menthe', 'boissons', 251),
('Thé', 'boissons', 0),
('Bière', 'boissons alcoolisées', 40),
('Champagne', 'boissons alcoolisées', 82),
('Cognac', 'boissons alcoolisées', 480),
('Martini', 'boissons alcoolisées', 160),
('Muscat', 'boissons alcoolisées', 160),
('Punch', 'boissons alcoolisées', 175),
('rhum', 'boissons alcoolisées', 242),
('Ricard', 'boissons alcoolisées', 274),
('Vin blanc 10°', 'boissons alcoolisées', 80),
('Vin rosé 11°', 'boissons alcoolisées', 71),
('Vin rouge 12°', 'boissons alcoolisées', 70),
('Vin cuit', 'boissons alcoolisées', 228),
('Vodka', 'boissons alcoolisées', 239),
('Whisky', 'boissons alcoolisées', 238);