<?php
class Vegetable {
  // DB Stuff
  private $conn;
  private $table = 'vegetables';

  // Vegetable Properties
  public $id;
  public $name;
  public $classification;
  public $description;
  public $editable;

  // Constructor with DB
  public function __construct($db) {
    $this->conn = $db;
  }

  // Get Vegetable
  public function read() {
    // Create Query
    $query = 'SELECT
        id,
        name,
        classification,
        description,
        editable
      FROM
        ' . $this->table . '
    ';

    // Prepare Statement
    $stmt = $this->conn->prepare($query);

    // Execute Query
    $stmt->execute();

    return $stmt;
  }
}
