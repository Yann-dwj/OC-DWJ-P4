<?php

namespace Model;

use \Model\Manager;
use \Model\Post;

class PostManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();

        $posts = [];

        $query = $db->query('SELECT * FROM posts ORDER BY creationDate DESC LIMIT 0, 5');

        while ($data = $query->fetch(\PDO::FETCH_ASSOC))
        {
            $posts[] = new Post($data);
        }
        
        return $posts;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();

        $query = $db->prepare('SELECT * FROM posts WHERE id = ?');
        $query->execute([
            $postId
        ]);

        $post = $query->fetch(\PDO::FETCH_ASSOC);

        return new Post($post);
    }
}