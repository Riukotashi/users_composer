<?php

namespace App\Service;

use App\Db\Db;
use PDO;

class UserService extends AbstractService
{
    public function findAll(): array
    {
        
        $querry = 'SELECT * FROM utilisateur';
        $result = $this->db->query($querry);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}