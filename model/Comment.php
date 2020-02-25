<?php

namespace Model;

class Comment
{
    // Attributs privés

    private $_id;
    private $_postId;
    private $_postTitle;
    private $_author;
    private $_comment;
    private $_commentDate;
    private $_report;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }

    // Getters

    public function id()
    {
        return $this->_id;
    }

    public function postId()
    {
        return $this->_postId;
    }

    public function postTitle()
    {
        return $this->_postTitle;
    }

    public function author()
    {
        return $this->_author;
    }

    public function comment()
    {
        return $this->_comment;
    }

    public function commentDate()
    {
        return $this->_commentDate;
    }

    public function report()
    {
        return $this->_report;
    }

    // Setters

    public function setId($id)
    {
        $this->_id = (int) $id;
    }

    public function setPostId($postId)
    {
        $this->_postId = $postId;
    }

    public function setPostTitle($postTitle)
    {
        $this->_postTitle = $postTitle;
    }

    public function setAuthor($author)
    {
        $this->_author = $author;
    }

    public function setComment($comment)
    {
        $this->_comment = $comment;
    }

    public function setCommentDate($commentDate)
    {
        $this->_commentDate = $commentDate;
    }

    public function setReport($report)
    {
        $this->_report = $report;
    }
}