<?php


class PostData
{

    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllPosts() {
        $stmt = $this->pdo->prepare("SELECT * FROM posts ORDER BY datePublication");
        if($stmt->execute()) {
            return $stmt->fetchAll();
        };
        return null;
    }

    public function insertPost($data, $id) {
        $stmt = $this->pdo->prepare("INSERT INTO posts (title, description, datePublication, image, id_user) VALUES (:title, :description, :datePublication, :image, :id)");
        if($stmt->execute([
            "title" => $data['title'],
            "description" => $data['description'],
            "datePublication" => $data['datePublication'],
            "image" => $data['image'],
            "id" => $id
        ])) {
            return $this->pdo->lastInsertId();
        };
        return -1;
    }

    public function getMyPosts($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM posts WHERE id_user=:id");
        if($stmt->execute([
            "id" => $id
        ])) {
            return $stmt->fetchAll();
        };
        return null;
    }

    public function getOnePost($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM posts WHERE id_post=:id");
        $stmt->execute([
            "id" => $id
        ]);
            $res=$stmt->fetch();
            return $res;
    }


    public function searchPost($id, $search)
    {
            $stmt = $this->pdo->prepare("SELECT * FROM posts WHERE id_user=:id AND title LIKE '%$search%'");
            $stmt->execute([
                "id" => $id,
            ]);
            return $stmt->fetchAll();
    }

   /* public function deletePost($data) {
        $stmt = $this->pdo->prepare("DELETE FROM posts WHERE id_post=:id_post");

    }*/

    public function updatePost($data) {
        $stmt = $this->pdo->prepare("UPDATE posts set title=:title, description=:description, datePublication=:datePublication, image=:image LIKE id_post=:id_post");
        if($stmt->execute([
            "title" => $data['title'],
            "description" => $data['description'],
            "datePublication" => $data['datePublication'],
            "image" => $data['image'],
        ])) {
            return $this->pdo->lastInsertId();
        };
        return -1;
    }
}
