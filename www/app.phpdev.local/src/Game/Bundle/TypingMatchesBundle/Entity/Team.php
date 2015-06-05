<?php

/**
 * User: abk2
 * Date: 27.11.2014
 * Time: 22:52
 */

namespace Game\Bundle\TypingMatchesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Game\Bundle\TypingMatchesBundle\Entity\Repository\TeamRepository")
 * @ORM\Table(name="team")
 */
class Team
  {

//  const STATUS_UNREAD = 1;
//  const STATUS_READ = 2;  
  
  /**
   * @var integer $id
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;
  
  /**
	 * @var text $name
	 *
	 * @ORM\Column(name="name", type="string", options={"comment":"Team name"})
	 */
	protected $name;  

  /**
   * @var integer $groupStartingNumber
   *
   * @ORM\Column(name="group_starting_number", type="integer", nullable=true, options={"comment":"Group starting number"})
   */
  protected $groupStartingNumber;  
  
  
  /**
   * @ORM\ManyToOne(targetEntity="Game\Bundle\TypingMatchesBundle\Entity\GroupCategory", inversedBy="teams")
   * @ORM\JoinColumn(name="group_id", referencedColumnName="id", nullable=true)
   */
  protected $group;
    
  /**
   * @var datetime $createdAt
   *
   * @Gedmo\Timestampable(on="create")
   * @ORM\Column(name="created_at", type="datetime")
   */
  protected $createdAt;
  
  /**
   * @var datetime $updatedAt
   *
   * @Gedmo\Timestampable(on="update")
   * @ORM\Column(name="updated_at", type="datetime")
   */
  protected $updatedAt;
   
  /**
   * @Gedmo\Blameable(on="create")
   *
   * @ORM\ManyToOne(targetEntity="Game\Bundle\UserBundle\Entity\User", inversedBy="created_teams")
   * @ORM\JoinColumn(name="created_by", referencedColumnName="id")
   */
  protected $createdBy;
  
  /**
   * @Gedmo\Blameable(on="update")
   *
   * @ORM\ManyToOne(targetEntity="Game\Bundle\UserBundle\Entity\User", inversedBy="updated_teams")
   * @ORM\JoinColumn(name="updated_by", referencedColumnName="id")
   */
  protected $updatedBy;
  

  


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Team
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set groupStartingNumber
     *
     * @param integer $groupStartingNumber
     * @return Team
     */
    public function setGroupStartingNumber($groupStartingNumber)
    {
        $this->groupStartingNumber = $groupStartingNumber;

        return $this;
    }

    /**
     * Get groupStartingNumber
     *
     * @return integer 
     */
    public function getGroupStartingNumber()
    {
        return $this->groupStartingNumber;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Team
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Team
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set group
     *
     * @param \Game\Bundle\TypingMatchesBundle\Entity\GroupCategory $group
     * @return Team
     */
    public function setGroup(\Game\Bundle\TypingMatchesBundle\Entity\GroupCategory $group = null)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \Game\Bundle\TypingMatchesBundle\Entity\GroupCategory 
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set createdBy
     *
     * @param \Game\Bundle\UserBundle\Entity\User $createdBy
     * @return Team
     */
    public function setCreatedBy(\Game\Bundle\UserBundle\Entity\User $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \Game\Bundle\UserBundle\Entity\User 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updatedBy
     *
     * @param \Game\Bundle\UserBundle\Entity\User $updatedBy
     * @return Team
     */
    public function setUpdatedBy(\Game\Bundle\UserBundle\Entity\User $updatedBy = null)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return \Game\Bundle\UserBundle\Entity\User 
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }
}
