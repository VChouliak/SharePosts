<?php
class Post{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPosts(){
        $this->db->query('SELECT *, posts.id as postId, posts.created_at as postCreated, users.created_at as userCreated, users.id as userId
                            FROM posts
                            JOIN users
                            ON posts.user_id = users.id
                            ORDER BY posts.created_at DESC');

        $result = $this->db->getResultSet();

        return $result;
    }

    public function addPost($data){
        $this->db->query('INSERT INTO posts (title, user_id, body) VALUES(:title, :user_id, :body)');

        $this->db->bind(':title', $data['title']);
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':body', $data['body']);

        return $this->db->execute() ? true : false;        
    }

    public function getPostById($id){
        $this->db->query('SELECT * FROM posts WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->getSingleResult();    
        
        return $row;
    }
}