<?php
class User extends Account {
    public function _construct($name,
    $document, $email, $password){
        parent::__construct($name,
        $document, $email, $password);
        {
     public function printDatauser() {
        echo "User";
        echo"<br>";
        echo "Name: $this->name
        Document:$this->document
        E-mail:Sthis->email
        Password:$this->password" ;
        echo "<br>";
     }
}
?>