<?php

class Patient {
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function getPatient($id) {
        if (!$id) return ['success' => false, 'error' => 'ID manquant'];
    
        try {
            $stmt = $this->db->prepare("SELECT * FROM patients WHERE id = ?");
            $stmt->execute([$id]);
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            return ['success' => true, 'data' => $data];
        } catch (Exception $e) {
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }

    public function createPatient($nom, $prenom, $date_naissance) {
        if (!$nom || !$prenom || !$date_naissance) {
            return ['success' => false, 'error' => 'Champs manquants'];
        }

        try {
            $stmt = $this->db->prepare("INSERT INTO patients (nom, prenom, date_naissance) VALUES (?, ?, ?)");
            $stmt->execute([$nom, $prenom, $date_naissance]);
            return ['success' => true];
        } catch (Exception $e) {
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }

    public function updatePatient($id, $nom, $prenom, $date_naissance) {
        if (!$id || !$nom || !$prenom || !$date_naissance) {
          return ['success' => false, 'error' => 'Champs manquants'];
        }
      
        try {
          $stmt = $this->db->prepare("UPDATE patients SET nom = ?, prenom = ?, date_naissance = ? WHERE id = ?");
          $stmt->execute([$nom, $prenom, $date_naissance, $id]);
          return ['success' => true];
        } catch (Exception $e) {
          return ['success' => false, 'error' => $e->getMessage()];
        }
    }
       
    public function deletePatient($id) {
        if (!$id) return ['success' => false, 'error' => 'ID manquant'];
        
        try {
            $stmt = $this->db->prepare("DELETE FROM patients WHERE id = ?");
            $stmt->execute([$id]);
            return ['success' => true];
        } catch (Exception $e) {
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }
    
}
