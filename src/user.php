<?php

class User {
    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function login(string $username, string $password): array {
        if (!$username || !$password) {
            return ['success' => false, 'error' => 'Nom d\'utilisateur ou mot de passe manquant'];
        }

        try {
            $stmt = $this->db->prepare("SELECT * FROM users WHERE username = ?");
            $stmt->execute([$username]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$user || !password_verify($password, $user['password'])) {
                return ['success' => false, 'error' => 'Identifiants invalides'];
            }

            // Start session
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            return ['success' => true, 'user' => $user];

        } catch (Exception $e) {
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }

    public function logout(): void {
        session_start();
        session_destroy();
    }

    public function isAuthenticated(): bool {
        session_start();
        return isset($_SESSION['user_id']);
    }

    public function createUser(string $username, string $plainPassword): array {
        if (!$username || !$plainPassword) {
            return ['success' => false, 'error' => 'Champs manquants'];
        }

        try {
            $hash = password_hash($plainPassword, PASSWORD_DEFAULT);


            $stmt = $this->db->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            $stmt->execute([$username, $hash]);

            return ['success' => true];

        } catch (Exception $e) {
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }
}
