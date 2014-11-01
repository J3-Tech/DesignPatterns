<?php

namespace ActiveRecord;

class User
{
    private $id;

    private $firstName;

    private $lastName;

    private $email;

    private $table='users';

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of firstName.
     *
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets the value of firstName.
     *
     * @param mixed $firstName the first name
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Gets the value of lastName.
     *
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets the value of lastName.
     *
     * @param mixed $lastName the last name
     *
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Gets the value of email.
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the value of email.
     *
     * @param mixed $email the email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function fetch($id)
    {
    	$sql="select * from users where id = :id limit 1";

    	return DataAccess::select($sql,array('id'=>$id))[0];
    }

    public function getAll()
    {
    	$sql="select * from users";

    	return DataAccess::select($sql);
    }

    public function insert()
    {
    	$sql="insert into {$this->table} (firstName,lastName, email)";
    	$sql.="values('{$this->firstName}', '{$this->lastName}', '{$this->email}')";

    	return DataAccess::exec($sql);
    }
}