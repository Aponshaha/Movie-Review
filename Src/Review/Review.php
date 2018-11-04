<?php

namespace App\Review;
include('../../vendor/autoload.php');
use PDO;
session_start();




class Review

{
    private $name;
    private $description;
    private $review;
    private $comments;


    public function setdata($data = "")
    {

        if (isset($data[' name']) && !empty($data['name'])) {
            $this->name = $data[' name'];
        } else {
            $_SESSION['Movie name'] = "Movie name field is required";
            header('location: Review.php');
        }

        if (isset($data['description']) && !empty($data['description'])) {
            $this->description = $data['description'];
        } else {
            $_SESSION['description'] = "Description field is required";
            header('location: Review.php');
        }

        if (isset($data['Review']) && !empty($data['Review'])) {
            $this->review = $data['Review'];
        } else {
            $_SESSION['Review'] = "Review field is required";
            header('location: Review.php');
        }

        if (isset($data['Comment']) && !empty($data['Comment'])) {
            $this->comments= $data['Comment'];
        } else {
            $_SESSION['Comment'] = "Comment field is required";
            header('location: Review.php');
        }


        return $this;
    }






    public function getdata()
    {

        {
            try {
                $pdo = new PDO('mysql:host=localhost; dbname=movie', 'root', '');

                $query = 'INSERT INTO reviews(rate_id, name, description, reviews, comments,created_at) VALUES (:id, :mname, :des, :reve, :comm, :created_at)';
                $stmt = $pdo->prepare($query);
                $status = $stmt->execute(
                    array(
                        ':id' => NULL,
                        ':mname' => $this->name,
                        ':des' => $this->description,
                        ':comm' => $this->review,
                        ':pass' => $this->comments,

                        ':created_at' => date('Y-m-d h:i:s')
                    )
                );

                if ($status) {
                    echo "success";
                } else {
                    echo "failed";
                }


            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();

            }
        }
    }
}












