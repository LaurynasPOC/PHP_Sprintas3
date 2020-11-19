<?php
namespace EmpData;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="positions")
 */
class Positions
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /** 
     * @ORM\Column(type="string") 
     */
    protected $positions;
    
    /**
     * One position has many employees. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Employees", mappedBy="empPositions" )
     */
    private $employeesData;

    public function __construct() {
        $this->employeesData = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        return $this->id = $id;
    }

    public function setPositions($positions)
    {
        $this->positions = $positions;
    }

    public function getPositions()
    {
        return $this->positions;
    }

    public function getEmployeesData()
    {
        return $this->employeesData;
    }
    public function setEmployeesData($employeesData)
    {
        return $this->employeesData = $employeesData;
    }
    public function getName()
    {
        return $this->name;
    }

}