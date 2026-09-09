CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    terrain_id INT NOT NULL,
    client_nom VARCHAR(100) NOT NULL,
    date_debut DATETIME NOT NULL,
    date_fin DATETIME NOT NULL,
    statut ENUM('confirmee', 'annulee') NOT NULL DEFAULT 'confirmee',
    tarif_total DECIMAL(8,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (terrain_id) REFERENCES terrains(id)
);