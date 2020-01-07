<?php

namespace users_composer\users;

class Connection
{
    private $pdoConnection;
    private $statement;
    private $sql;
    private $id;
    
    public function __construct(string $username = 'user_users_composer', string $password= '2QyXuehLk6Gh6YBr', string $database = 'users')
    {
        $this->pdoConnection = new \PDO('mysql:host=localhost;dbname='.$database, $username, $password);
        $this->pdoConnection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    
    
    public function selectTable(string $table)
    {
        $sql = sprintf(
            'SELECT * FROM %s ;',
            $table
        );
        
        $this->statement = $this->pdoConnection->prepare($sql);
        $this->statement->execute();
        return $this->statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    // public function selectRow(string $table, $id)
    // {
    //     $sql = sprintf(
    //         'SELECT * FROM %s WHERE ID = %s;',
    //         $table,
    //         $id
    //     );
        
    //     $this->statement = $this->pdoConnection->prepare($sql);
    //     $this->statement->execute();
    //     return $this->statement->fetchAll(\PDO::FETCH_ASSOC);
    // }

    // public function delRow(string $table, $id)
    // {
    //     $sql = sprintf(
    //         'DELETE FROM %s WHERE ID = %s;',
    //         $table,
    //         $id
    //     );
        
    //     $this->statement = $this->pdoConnection->prepare($sql);
    //     $this->statement->execute();
    // }

    // public function insertTable(string $table, $data)
    // {
    //     $sql = sprintf(
    //         'INSERT INTO %s(%s) VALUES ("%s");',
    //         $table,
    //         implode(', ', array_keys($data)),
    //         implode('", "', $data)
    //     );
        
    //     $this->statement = $this->pdoConnection->prepare($sql);
    //     $this->statement->execute();
    // }

    // public function updateRow(string $table,$data, $id)
    // {
    //     $this->delRow($table, $id);
    //     $sql = sprintf(
    //         'INSERT INTO  %s(ID,%s) VALUES (%s,"%s") ;',
    //         $table,
    //         implode(', ', array_keys($data)),
    //         $id,
    //         implode('", "', $data)
            
    //     );
        
    //     $this->statement = $this->pdoConnection->prepare($sql);
    //     $this->statement->execute();
    // }
}
