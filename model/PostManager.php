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

        $query = $db->query('SELECT * FROM posts ORDER BY creationDate DESC');

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

    public function addPost(Post $post)
    {
        $db = $this->dbConnect();

        $query = $db->prepare('INSERT INTO posts(title, content, author, creationDate, imageUrl) VALUES(:title, :content, :author, NOW(), :imageUrl)');
        $query->execute([
            'title' => $post->title(),
            'content' => $post->content(),
            'author' => $post->author(),
            'imageUrl' => $post->imageUrl()
        ]);
    }

    public function deletePost(Post $post)
    {
        $db = $this->dbConnect();

        $query = $db->prepare('DELETE FROM posts WHERE id = ?');
        $query->execute([
            $post->id()
        ]);
    }

    // public function deleteComment(Comment $comment)
    // {
    //     $db = $this->dbConnect();

    //     $query = $db->prepare('DELETE FROM comments WHERE id = ?');
    //     $query->execute([
    //         $comment->id()
    //     ]);
    // }

}