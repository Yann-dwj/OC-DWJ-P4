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

    public function reportComment(Comment $comment)
    {
        $db = $this->dbConnect();

        $query = $db->prepare('UPDATE comments SET report = 1 WHERE id = ?');
        $query->execute([
            $comment->id()
        ]);
    }

    public function getReportedComments()
    {
        $db = $this->dbConnect();

        $query = $db->query('SELECT * FROM comments WHERE report = 1');

        // $query = $db->query('SELECT p.title title, c.* FROM comments c INNER JOIN posts p ON p.id = c.postId WHERE report = 1');

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

    public function deleteComment(Comment $comment)
    {
        $db = $this->dbConnect();

        $query = $db->prepare('DELETE FROM comments WHERE id = ?');
        $query->execute([
            $comment->id()
        ]);
    }

    public function validateComment(Comment $comment)
    {
        $db = $this->dbConnect();

        $query = $db->prepare('UPDATE comments SET report = 0 WHERE id = ?');
        $query->execute([
            $comment->id()
        ]);
    }
}