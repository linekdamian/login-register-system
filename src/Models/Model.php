<?php

namespace App\Models;

class Model
{
    protected $id;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    protected $created_at;

    /**
     * Get the value of created_at
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    protected $updated_at;

    /**
     * Get the value of updated_at
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->setCreatedAt($data['created_at'] ?? date("Y-m-d H:i:s"));
        $this->setUpdatedAt($data['updated_at'] ?? date("Y-m-d H:i:s"));
    }
}
