<?php

/**
 * User: abk2
 * Date: 27.11.2014
 * Time: 23:35
 */

namespace Game\Bundle\TypingMatchesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Translatable\Translatable;

/**
 * @ORM\Entity(repositoryClass="Game\Bundle\TypingMatchesBundle\Entity\Repository\PointCategoryRepository")
 * @ORM\Table(name="point_category")
 */
class PointCategory
  {

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
	 * @Gedmo\Translatable
	 * @ORM\Column(name="name", type="string", options={"comment":"Point category name"})
	 */
	protected $name;

  
  /**
   * @Gedmo\Locale
   */
  private $locale;
  
  
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
     * @return PointCategory
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return PointCategory
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
     * @return PointCategory
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
     * Set createdBy
     *
     * @param \Game\Bundle\UserBundle\Entity\User $createdBy
     * @return PointCategory
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
     * @return PointCategory
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
