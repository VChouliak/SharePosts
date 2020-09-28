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
}