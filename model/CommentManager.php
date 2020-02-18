<?php

namespace Model;

use \Model\Manager;
use \Model\Comment;

class CommentManager extends Manager
{
    public function getComments($postId)
    {
        $db = $this->dbConnect();

        $query = $db->prepare('SELECT * FROM comments WHERE postId = ? ORDER BY commentDate DESC');
        $query->execute([
            $postId
        ]);

        $comments = [];

        while ($data = $query->fetch(\PDO::FETCH_ASSOC))
        {
            $comments[] = new Comment($data);
        }

        return $comments;
    }

    public function addComment(Comment $comment)
    {
        $db = $this->dbConnect();

        $query = $db->prepare('INSERT INTO comments(postId, author, comment, commentDate) VALUES(:postId, :author, :comment, NOW())');
        $query->execute([
            'postId' => $comment->postId(),
            'author' => $comment->author(),
            'comment' => $comment->comment()
        ]);
    }
}