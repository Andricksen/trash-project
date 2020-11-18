<?php


class Comment
{

    private $id;
    private $idTrash;
    private $comment;
    private $ip;
    private $name;
    private $email;
    private $dateComment;

    /**
     * Comment constructor.
     * @param $id
     * @param $idTrash
     * @param $comment
     * @param $ip
     * @param $name
     * @param $email
     * @param $dateComment
     */
    public function __construct($id, $idTrash, $comment, $ip, $name, $email, $dateComment)
    {
        $this->id = $id;
        $this->idTrash = $idTrash;
        $this->comment = $comment;
        $this->ip = $ip;
        $this->name = $name;
        $this->email = $email;
        $this->dateComment = $dateComment;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIdTrash()
    {
        return $this->idTrash;
    }

    /**
     * @param mixed $idTrash
     */
    public function setIdTrash($idTrash)
    {
        $this->idTrash = $idTrash;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param mixed $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getDateComment()
    {
        return $this->dateComment;
    }

    /**
     * @param mixed $dateComment
     */
    public function setDateComment($dateComment)
    {
        $this->dateComment = $dateComment;
    }


}