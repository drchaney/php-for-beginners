<?php
// Connect to the DB, run a query:
class Database {
  public $connection;
  public $statement;
  public function __construct($config, $username = 'root', $password = ' ')
  {
    $dsn = 'pgsql:' . http_build_query($config, '', ';');
    
    $this->connection = new PDO($dsn, $username, $password, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }
  public function query($query, $params = [])
  {
    $this->statement = $this->connection->prepare($query);
    
    $this->statement->execute($params);

    return $this; // returns the object of itself, the instance
  }

  public function fetch()
  {
    return $this->statement->fetch();
  }
}