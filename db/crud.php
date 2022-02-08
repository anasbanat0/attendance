<?php
class crud
{
  // private database object
  private $db;
  // constructor to initialize private variable to the database connection
  function __construct($conn)
  {
    $this->db = $conn;
  }
  // function to insert a new record into the attendee table
  public function insert($fname, $lname, $dob, $email, $phone, $specialty) {
    try {
      // define sql statement to be executed
      $sql = "INSERT INTO attendee (firstname, lastname, dateofbirth, email, phone_number, specialty_id) VALUES (:fname, :lname, :dob, :email, :phone, :specialty)";
      // prepare the sql statement for execution
      $stmt = $this->db->prepare($sql);
      // bind the placeholders to the actual values
      $stmt->bindparam(':fname', $fname);
      $stmt->bindparam(':lname', $lname);
      $stmt->bindparam(':dob', $dob);
      $stmt->bindparam(':email', $email);
      $stmt->bindparam(':phone', $phone);
      $stmt->bindparam(':specialty', $specialty);
      // ececute statement
      $stmt->execute();
      return true;
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }
}
