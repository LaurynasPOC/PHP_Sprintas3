<?php
namespace EmpData;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="employees")
 */
class Employees
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /** 
     * @ORM\Column(type="integer")
     */
    protected $position_id;
    /** 
     * @ORM\Column(type="string") 
     */
    protected $name;
    /** 
     * @ORM\Column(type="string")
     */
    protected $lastname;
    /** 
     * @ORM\Column(type="integer") 
     */
    protected $age;
    /** 
     * @ORM\Column(type="integer") 
     */
    protected $phone_number;
    


    /**
     * Many employees have one position. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Positions", inversedBy="employeesData")
     * @ORM\JoinColumn(name="position_id", referencedColumnName="id")
     */
    private $empPositions;

    

    public function getEmpPositions()
    {
        return $this->empPositions;
    }
    public function setEmpPositions($pos)
    {
        $this->empPositions = $pos;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getPosition_id()
    {
        return $this->position_id;
    }
    public function setPosition_id($position_id)
    {
        $this->position_id = $position_id;
    }
    
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        return $this->name=$name;
    }
    
    public function getLastname()
    {
        return $this->lastname;
    }
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getPhone_number()
    {
        return $this->phone_number;
    }
    public function setPhone_number($phone_number)
    {
        $this->phone_number = $phone_number;
    }
    public function getPositions()
    {
        return $this->positions;
    }
    public function setPositions($positions)
    {
        $this->positions= $positions;
    }

}



