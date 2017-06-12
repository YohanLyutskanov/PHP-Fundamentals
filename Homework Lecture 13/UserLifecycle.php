<?php

class UserLifecycle
{
    /**
     * @var /PDO
     */
    private $db = null;


    public function __construct($db)
    {
        require_once "app.php";
        $this->db = $db;
    }

    public function getEmail ($username): string {
        $stmt=null;
        $stmt->$this->db->prepare("select email from users where username = ?");
        $stmt->execute([
            $username
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['email'];
    }
}