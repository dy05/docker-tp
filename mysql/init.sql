CREATE TABLE articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    contenu TEXT
);

INSERT INTO articles (titre, contenu) VALUES ('Article 1', 'Contenu de l\'article 1'), ('Article 2', 'Contenu de l\'article 2');

