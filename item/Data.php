<?php
namespace item;

class Data
{
    private $id,
            $light,
            $temperature,
            $pressure,
            $t_device_id,
            $created_at;

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
    public function getLight()
    {
        return $this->light;
    }

    /**
     * @param mixed $light
     */
    public function setLight($light)
    {
        $this->light = $light;
    }

    /**
     * @return mixed
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @param mixed $temperature
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;
    }

    /**
     * @return mixed
     */
    public function getPressure()
    {
        return $this->pressure;
    }

    /**
     * @param mixed $pressure
     */
    public function setPressure($pressure)
    {
        $this->pressure = $pressure;
    }

    /**
     * @return mixed
     */
    public function getTDeviceId()
    {
        return $this->t_device_id;
    }

    /**
     * @param mixed $t_device_id
     */
    public function setTDeviceId($t_device_id)
    {
        $this->t_device_id = $t_device_id;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }
}