<?php


class User
{
        private $id;
        private $firstname;
        private $lastname;
        private $code;
        private $phone;
        private $area;
        private $idPart;
        private $dateCreated;

    /**
     * User constructor.
     * @param $id
     * @param $firstname
     * @param $lastname
     * @param $code
     * @param $phone
     * @param $area
     * @param $idPart
     * @param $dateCreated
     */
    public function __construct($id, $firstname, $lastname, $code, $phone, $area, $idPart, $dateCreated)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->code = $code;
        $this->phone = $phone;
        $this->area = $area;
        $this->idPart = $idPart;
        $this->dateCreated = $dateCreated;
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
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param mixed $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @return mixed
     */
    public function getIdPart()
    {
        return $this->idPart;
    }

    /**
     * @param mixed $idPart
     */
    public function setIdPart($idPart)
    {
        $this->idPart = $idPart;
    }

    /**
     * @return mixed
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param mixed $dateCreated
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }



}