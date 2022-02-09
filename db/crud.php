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
  public function insertAttendees($fname, $lname, $dob, $email, $phone, $specialty)
  {
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
  public function getAttendees()
  {
    $sql = "SELECT * FROM `attendee` a inner join specialties s on a.specialty_id = s.specialty_id";
    $result = $this->db->query($sql);
    return $result;
  }
  public function getAttendeeDetails($id)
  {
    $sql = "SELECT * FROM attendee a inner join specialties s on a.specialty_id = s.specialty_id where attendee_id = :id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindparam(':id', $id);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
  }
  public function getSpecialties()
  {
    $sql = "SELECT * FROM `specialties`";
    $result = $this->db->query($sql);
    return $result;
  }
}
