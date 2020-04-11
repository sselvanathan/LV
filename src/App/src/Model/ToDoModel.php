<?php


namespace App\Model;


class ToDoModel
{
    /**
     * @var int
     */
    private $userId;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var bool
     */
    private $completed;

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return ToDoModel
     */
    public function setUserId(int $userId): ToDoModel
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ToDoModel
     */
    public function setId(int $id): ToDoModel
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return ToDoModel
     */
    public function setTitle(string $title): ToDoModel
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCompleted(): bool
    {
        return $this->completed;
    }

    /**
     * @param bool $completed
     * @return ToDoModel
     */
    public function setCompleted(bool $completed): ToDoModel
    {
        $this->completed = $completed;
        return $this;
    }
}
