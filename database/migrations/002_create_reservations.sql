CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    terrain_id INT NOT NULL,
    client_nom VARCHAR(100) NOT NULL,
    client_telephone VARCHAR(100) NOT NULL,
    date_reservation DATE NOT NULL,
    heure_debut TIME NOT NULL,
    heure_fin TIME NOT NULL,
    statut ENUM('en_attente', 'confirmee', 'annulee') NOT NULL DEFAULT 'en_attente',
    tarif_total DECIMAL(8,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (terrain_id) REFERENCES terrains(id)
);
