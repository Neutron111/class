<?php
/**1. Implement a  Student class with the following properties:
ID (readonly unique identifier)
Name
Email
Courses (an array of course objects):
 */
class Student
{
    public readonly int  $id ;
    PRIVATE $name;
    PRIVATE $email;
    PRIVATE $course=array();

public function __construct(  $id, $name , $email, $course)
{
        $this->id=$id;
        $this->name=$name;
        $this->email=$email;
        $this->course=$course;
}
public function getId()
{
return $this->id;
}
public function getName()
{
return $this->name;
}
public function getEmail()
{
return $this->email;
}
public function getCourse()
{
return $this->course;
}
public function setId($id)
{
$this->id=$id;
}
public function setName($name)
{
$this->name=$name;
}
public function setEmail($email)
{
$this->email=$email;
}
public function setCourse($course)
{
    =$this->course=$course;
}

}
/********************************************************************************************************** */
/**2. Implement a Course class with the following properties:**/
/**ID (readonly unique identifier)
Name
 */
class Course
{
    public readonly int $id ;
    private $name;
    public function __construct($id,$name){
        $this->id=$id;
        $this->name=$name;
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function setId($id){
        $this->id=$id;
    }
    public function setName($name){
        $this->name=$name;
    }
} 

?>

