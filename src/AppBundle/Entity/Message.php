<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MessageRepository")
 */
class Message
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="project_id", type="integer")
     */
    private $projectId;

    /**
     * @var int
     *
     * @ORM\Column(name="parent_message_id", type="integer")
     */
    private $parentMessageId;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var int
     *
     * @ORM\Column(name="message_level", type="integer")
     */
    private $messageLevel;

    /**
     * @var int
     *
     * @ORM\Column(name="parent_file_id", type="integer")
     */
    private $parentFileId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set projectId
     *
     * @param integer $projectId
     *
     * @return Message
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * Get projectId
     *
     * @return int
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set parentMessageId
     *
     * @param integer $parentMessageId
     *
     * @return Message
     */
    public function setParentMessageId($parentMessageId)
    {
        $this->parentMessageId = $parentMessageId;

        return $this;
    }

    /**
     * Get parentMessageId
     *
     * @return int
     */
    public function getParentMessageId()
    {
        return $this->parentMessageId;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Message
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set parentFileId
     *
     * @param integer $parentFileId
     *
     * @return Message
     */
    public function setParentFileId($parentFileId)
    {
        $this->parentFileId = $parentFileId;

        return $this;
    }

    /**
     * Get parentFileId
     *
     * @return int
     */
    public function getParentFileId()
    {
        return $this->parentFileId;
    }
}
