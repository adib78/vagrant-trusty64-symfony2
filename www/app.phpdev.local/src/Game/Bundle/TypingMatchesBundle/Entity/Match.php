<?php

/**
 * User: abk2
 * Date: 27.11.2014
 * Time: 23:35
 */

namespace Game\Bundle\TypingMatchesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Game\Bundle\TypingMatchesBundle\Entity\Repository\MatchRepository")
 * @ORM\Table(name="match")
 */
class Match
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
   * @var integer $matchNumber
   *
   * @ORM\Column(name="match_number", type="integer", nullable=true, options={"comment":"Match number"})
   */
  protected $matchNumber;   
  
  
  /**
   * @var datetime $matchDate
   *
   * @ORM\Column(name="match_date", type="datetime", options={"comment":"Match date"})
   */
  protected $matchDate;  
  
  /**
   * @ORM\ManyToOne(targetEntity="Game\Bundle\TypingMatchesBundle\Entity\Team", inversedBy="matches_team1")
   * @ORM\JoinColumn(name="team1_id", referencedColumnName="id", nullable=true)
   */
  protected $team1;
  
  /**
   * @ORM\ManyToOne(targetEntity="Game\Bundle\TypingMatchesBundle\Entity\Team", inversedBy="matches_team2")
   * @ORM\JoinColumn(name="team2_id", referencedColumnName="id", nullable=true)
   */
  protected $team2;  
   
  /**
   * @var integer $goalTeam1
   *
   * @ORM\Column(name="goal_team1", type="integer", nullable=true, options={"comment":"Goal team 1"})
   */
  protected $goalTeam1;   
   
  /**
   * @var integer $goalTeam2
   *
   * @ORM\Column(name="goal_team2", type="integer", nullable=true, options={"comment":"Goal team 2"})
   */
  protected $goalTeam2;
  
  /**
   * @var integer $pointTeam1
   *
   * @ORM\Column(name="point_team1", type="integer", nullable=true, options={"comment":"Point team 1"})
   */
  protected $pointTeam1;  
  
  /**
   * @var integer $pointTeam2
   *
   * @ORM\Column(name="point_team2", type="integer", nullable=true, options={"comment":"Point team 2"})
   */
  protected $pointTeam2;
  
  /**
   * @ORM\ManyToOne(targetEntity="Game\Bundle\TypingMatchesBundle\Entity\PointType", inversedBy="type_points")
   * @ORM\JoinColumn(name="point_type_id", referencedColumnName="id", nullable=true)
   */
  protected $pointType;
    
  /**
   * @ORM\ManyToOne(targetEntity="Game\Bundle\TypingMatchesBundle\Entity\PointCategory", inversedBy="category_points")
   * @ORM\JoinColumn(name="point_category_id", referencedColumnName="id", nullable=true)
   */
  protected $pointCategory;    
  
  /**
   * @var boolean $isGroupMatch
   *
   * @ORM\Column(name="is_group_match", type="boolean", nullable=true, options={"comment":"If it is group match or K.O. ?"})
   */
  protected $isGroupMatch = true;  
  
  /**
   * @var boolean $isUserResult
   *
   * @ORM\Column(name="is_user_result", type="boolean", nullable=true, options={"comment":"If it is user type or match result ?"})
   */
  protected $isUserResult = false;   
    
  /**
   * @ORM\ManyToOne(targetEntity="Game\Bundle\UserBundle\Entity\User", inversedBy="users")
   * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
   */
  protected $user;   

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
     * Set matchNumber
     *
     * @param integer $matchNumber
     * @return Match
     */
    public function setMatchNumber($matchNumber)
    {
        $this->matchNumber = $matchNumber;

        return $this;
    }

    /**
     * Get matchNumber
     *
     * @return integer 
     */
    public function getMatchNumber()
    {
        return $this->matchNumber;
    }

    /**
     * Set matchDate
     *
     * @param \DateTime $matchDate
     * @return Match
     */
    public function setMatchDate($matchDate)
    {
        $this->matchDate = $matchDate;

        return $this;
    }

    /**
     * Get matchDate
     *
     * @return \DateTime 
     */
    public function getMatchDate()
    {
        return $this->matchDate;
    }

    /**
     * Set goalTeam1
     *
     * @param integer $goalTeam1
     * @return Match
     */
    public function setGoalTeam1($goalTeam1)
    {
        $this->goalTeam1 = $goalTeam1;

        return $this;
    }

    /**
     * Get goalTeam1
     *
     * @return integer 
     */
    public function getGoalTeam1()
    {
        return $this->goalTeam1;
    }

    /**
     * Set goalTeam2
     *
     * @param integer $goalTeam2
     * @return Match
     */
    public function setGoalTeam2($goalTeam2)
    {
        $this->goalTeam2 = $goalTeam2;

        return $this;
    }

    /**
     * Get goalTeam2
     *
     * @return integer 
     */
    public function getGoalTeam2()
    {
        return $this->goalTeam2;
    }

    /**
     * Set pointTeam1
     *
     * @param integer $pointTeam1
     * @return Match
     */
    public function setPointTeam1($pointTeam1)
    {
        $this->pointTeam1 = $pointTeam1;

        return $this;
    }

    /**
     * Get pointTeam1
     *
     * @return integer 
     */
    public function getPointTeam1()
    {
        return $this->pointTeam1;
    }

    /**
     * Set pointTeam2
     *
     * @param integer $pointTeam2
     * @return Match
     */
    public function setPointTeam2($pointTeam2)
    {
        $this->pointTeam2 = $pointTeam2;

        return $this;
    }

    /**
     * Get pointTeam2
     *
     * @return integer 
     */
    public function getPointTeam2()
    {
        return $this->pointTeam2;
    }

    /**
     * Set isGroupMatch
     *
     * @param boolean $isGroupMatch
     * @return Match
     */
    public function setIsGroupMatch($isGroupMatch)
    {
        $this->isGroupMatch = $isGroupMatch;

        return $this;
    }

    /**
     * Get isGroupMatch
     *
     * @return boolean 
     */
    public function getIsGroupMatch()
    {
        return $this->isGroupMatch;
    }

    /**
     * Set isUserResult
     *
     * @param boolean $isUserResult
     * @return Match
     */
    public function setIsUserResult($isUserResult)
    {
        $this->isUserResult = $isUserResult;

        return $this;
    }

    /**
     * Get isUserResult
     *
     * @return boolean 
     */
    public function getIsUserResult()
    {
        return $this->isUserResult;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Match
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
     * @return Match
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
     * Set team1
     *
     * @param \Game\Bundle\TypingMatchesBundle\Entity\Team $team1
     * @return Match
     */
    public function setTeam1(\Game\Bundle\TypingMatchesBundle\Entity\Team $team1 = null)
    {
        $this->team1 = $team1;

        return $this;
    }

    /**
     * Get team1
     *
     * @return \Game\Bundle\TypingMatchesBundle\Entity\Team 
     */
    public function getTeam1()
    {
        return $this->team1;
    }

    /**
     * Set team2
     *
     * @param \Game\Bundle\TypingMatchesBundle\Entity\Team $team2
     * @return Match
     */
    public function setTeam2(\Game\Bundle\TypingMatchesBundle\Entity\Team $team2 = null)
    {
        $this->team2 = $team2;

        return $this;
    }

    /**
     * Get team2
     *
     * @return \Game\Bundle\TypingMatchesBundle\Entity\Team 
     */
    public function getTeam2()
    {
        return $this->team2;
    }

    /**
     * Set pointType
     *
     * @param \Game\Bundle\TypingMatchesBundle\Entity\PointType $pointType
     * @return Match
     */
    public function setPointType(\Game\Bundle\TypingMatchesBundle\Entity\PointType $pointType = null)
    {
        $this->pointType = $pointType;

        return $this;
    }

    /**
     * Get pointType
     *
     * @return \Game\Bundle\TypingMatchesBundle\Entity\PointType 
     */
    public function getPointType()
    {
        return $this->pointType;
    }

    /**
     * Set pointCategory
     *
     * @param \Game\Bundle\TypingMatchesBundle\Entity\PointCategory $pointCategory
     * @return Match
     */
    public function setPointCategory(\Game\Bundle\TypingMatchesBundle\Entity\PointCategory $pointCategory = null)
    {
        $this->pointCategory = $pointCategory;

        return $this;
    }

    /**
     * Get pointCategory
     *
     * @return \Game\Bundle\TypingMatchesBundle\Entity\PointCategory 
     */
    public function getPointCategory()
    {
        return $this->pointCategory;
    }

    /**
     * Set user
     *
     * @param \Game\Bundle\UserBundle\Entity\User $user
     * @return Match
     */
    public function setUser(\Game\Bundle\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Game\Bundle\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set createdBy
     *
     * @param \Game\Bundle\UserBundle\Entity\User $createdBy
     * @return Match
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
     * @return Match
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
