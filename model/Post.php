<?php

namespace Model;

class Post
{
    // Attributs privés

    private $_id;
    private $_title;
    private $_content;
    private $_author;
    private $_creationDate;
    private $_imageUrl;
    private $_updateDate;


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

    public function title()
    {
        return htmlspecialchars($this->_title);
    }

    public function content()
    {
        return $this->_content;
    }

    public function author()
    {
        return htmlspecialchars($this->_author);
    }

    public function creationDate()
    {
        return $this->_creationDate;
    }

    public function imageUrl()
    {
        return $this->_imageUrl;
    }

    public function updateDate()
    {
        return $this->_updateDate;
    }

    // Setters

    public function setId($id)
    {
        $this->_id = (int) $id;
    }

    public function setTitle($title)
    {
        $this->_title = $title;
    }

    public function setContent($content)
    {
        $this->_content = $content;
    }

    public function setAuthor($author)
    {
        $this->_author = $author;
    }

    public function setCreationDate($creationDate)
    {
        $this->_creationDate = $creationDate;
    }

    public function setImageUrl($imageUrl)
    {
        $this->_imageUrl = $imageUrl;
    }

    public function setUpdateDate($updateDate)
    {
        $this->_updateDate = $updateDate;
    }
}