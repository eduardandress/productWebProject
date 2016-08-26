<?php

namespace Core\Models;

use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{

    protected $fillable = array('userCreated', 'userUpdated', 'created_at', 'updated_at');

    protected $userCreated;

    protected $userUpdated;

    protected $created_at;

    protected $updated_at;


    /**
     * Gets the value of fillable.
     *
     * @return mixed
     */
    public function getFillable()
    {
        return $this->fillable;
    }

    /**
     * Sets the value of fillable.
     *
     * @param mixed $fillable the fillable
     *
     * @return self
     */
    protected function setFillable($fillable)
    {
        $this->fillable = $fillable;

        return $this;
    }

    /**
     * Gets the value of userCreated.
     *
     * @return mixed
     */
    public function getUserCreated()
    {
        return $this->userCreated;
    }

    /**
     * Sets the value of userCreated.
     *
     * @param mixed $userCreated the user created
     *
     * @return self
     */
    protected function setUserCreated($userCreated)
    {
        $this->userCreated = $userCreated;

        return $this;
    }

    /**
     * Gets the value of userUpdated.
     *
     * @return mixed
     */
    public function getUserUpdated()
    {
        return $this->userUpdated;
    }

    /**
     * Sets the value of userUpdated.
     *
     * @param mixed $userUpdated the user updated
     *
     * @return self
     */
    protected function setUserUpdated($userUpdated)
    {
        $this->userUpdated = $userUpdated;

        return $this;
    }

    /**
     * Gets the value of created_at.
     *
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Sets the value of created_at.
     *
     * @param mixed $created_at the created at
     *
     * @return self
     */
    protected function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Gets the value of updated_at.
     *
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Sets the value of updated_at.
     *
     * @param mixed $updated_at the updated at
     *
     * @return self
     */
    protected function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
