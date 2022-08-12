<?php

namespace App\classes;

class Student
{
    public $name,$email,$image,$phone,$desc,$path;
    public $fileName, $filePath;

    public function __construct($data,$file)
    {
//        echo "<pre>";
//        print_r($data);
//        print_r($file);
//        exit();
        $this->image = $file['image'];
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->phone = $data['phone'];
        $this->desc = $data['desc'];


    }
    public function saveStudentInfo()
    {
        $this->imageName = time().$this->image['name'];
        $this->path = 'assets/upload/'.$this->imageName;
        move_uploaded_file($this->image['tmp_name'], $this->path);

        $this->filePath = 'db/db.txt';
        $this->fileName = fopen($this->filePath , 'a+');
        fwrite($this->fileName,"$this->name,$this->email,$this->phone,$this->desc,$this->imageName");
        fclose($this->fileName);
    }
}