<?php

declare(strict_types=1);

namespace Database\Core\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Database\Core\Repository\UserRepository")
 * @ORM\Table(name="user")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(name="title", type="string", length=255)
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(name="created_at", type="datetime")
     * @var DateTime
     */
    private $createdAt;
}
