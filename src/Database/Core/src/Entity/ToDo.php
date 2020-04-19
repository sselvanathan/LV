<?php

declare(strict_types=1);

namespace Database\Core\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Database\Core\Repository\ToDoRepository")
 * @ORM\Table(name="todo")
 */
class ToDo
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(name="user_id", type="integer", length=11)
     * @var int
     */
    private $userId;

    /**
     * @ORM\Column(name="title", type="string", length=255)
     * @var string
     */
    private $title;

    /**
     * @ORM\Column(name="completed", type="boolean")
     * @var bool
     */
    private $completed;

    /**
     * @ORM\Column(name="created_at", type="datetime")
     * @var DateTime
     */
    private $createdAt;
}
