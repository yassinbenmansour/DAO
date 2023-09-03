<?php

    require "model.php";
    class Student extends model {
        private $nom;
        private $prenom;
        private $age;
        private $email;
        private $password;


        public function getNom()
        {
            return $this->nom;
        }

        public function setNom($nom)
        {
            $this->nom = $nom;
        }

        public function getPrenom()
        {
            return $this->prenom;
        }

        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;
        }

        public function getAge()
        {
            return $this->age;
        }

        public function setAge($age)
        {
            $this->age = $age;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function getPassword()
        {
            return $this->password;
        }

        public function setPassword($password)
        {
            $this->password = $password;
        }

        public function create()
        {
            $sql = static::databaseConnection()->prepare("INSERT INTO student (nom, prenom, age, email, password) VALUES (?, ?, ?, ?, ?)");
            return $sql->execute([
                $this->nom,
                $this->prenom,
                $this->age,
                $this->email,
                $this->password,
            ]);
        }

        public function Update($id)
        {
            $sql = static::databaseConnection()->prepare("UPDATE student SET nom = ?,prenom = ?,age = ?,email = ?,password = ? WHERE  id = ?");
            return $sql->execute([
                $this->nom,
                $this->prenom,
                $this->age,
                $this->email,
                $this->password,
                $id
            ]);
        }

        public function destroy($id)
        {
          $sql = static::databaseConnection()->prepare("DELETE FROM student WHERE id = ? ");
          $sql->execute([$id]);
        }

        public function search($id){
            $sql = static::databaseConnection()->prepare("SELECT * FROM student WHERE id LIKE ?");
            $sql->execute(["%$id%"]); 
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function All(){
            return static::databaseConnection()->query("SELECT * FROM student")->fetchAll();
        }

        
    }
