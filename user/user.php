<?php
class User {
  // Properties
  private $username;

  // Methods
  function __construct($username) {
    $this->username = $username;
  }
  function getUsername() {
    return $this->username;
  }
}
?>