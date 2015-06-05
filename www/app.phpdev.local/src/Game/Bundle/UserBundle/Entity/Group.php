<?php
/**
 * Created by PhpStorm.
 * User: ab
 * Date: 16.06.2014
 * Time: 13:53
 */

namespace Game\Bundle\UserBundle\Entity;

use FOS\UserBundle\Model\Group as BaseGroup;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="groups")
 */
class Group extends BaseGroup
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	public function __toString()
	{
		return (string) $this->name;
	}
}