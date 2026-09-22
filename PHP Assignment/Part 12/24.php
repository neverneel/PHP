<?php
// Create a class that serializes an object. Deserialize it and verify that all values are restored correctly

class Student{
    public $name;
    public $students;
    public $serialized_data;
    public $unserialized_data;

    public function serializeObject(){
        $this->serialized_data = serialize($this->students);
        return $this->serialized_data;
    }

    public function deserializeObject(){
        $this->unserialized_data = unserialize($this->serialized_data);
        return $this->unserialized_data;
    }
}

$student1 = new Student();
$student1->students = [1, 2, 3, 4, 5];
echo $student1->serializeObject();
$unserialized = $student1->deserializeObject();
print_r($unserialized);






?>