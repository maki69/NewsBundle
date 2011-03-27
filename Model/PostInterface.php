<?php

/*
 * This file is part of the Sonata project.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\NewsBundle\Model;

use Application\Sonata\MediaBundle\Model\MediaInterface;
use Application\Sonata\NewsBundle\Model\CommentInterface;
use Application\Sonata\NewsBundle\Model\TagInterface;

interface PostInterface
{
    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title);

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle();

    /**
     * Set abstract
     *
     * @param text $abstract
     */
    public function setAbstract($abstract);

    /**
     * Get abstract
     *
     * @return text $abstract
     */
    public function getAbstract();

    /**
     * Set content
     *
     * @param text $content
     */
    public function setContent($content);

    /**
     * Get content
     *
     * @return text $content
     */
    public function getContent();

    /**
     * Set enabled
     *
     * @param boolean $enabled
     */
    public function setEnabled($enabled);

    /**
     * Get enabled
     *
     * @return boolean $enabled
     */
    public function getEnabled();

    /**
     * Set slug
     *
     * @param integer $slug
     */
    public function setSlug($slug);

    /**
     * Get slug
     *
     * @return integer $slug
     */
    public function getSlug();

    /**
     * Set publication_date_start
     *
     * @param datetime $publicationDateStart
     */
    public function setPublicationDateStart($publicationDateStart);

    /**
     * Get publication_date_start
     *
     * @return datetime $publicationDateStart
     */
    public function getPublicationDateStart();

    /**
     * Set created_at
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt);

    /**
     * Get created_at
     *
     * @return datetime $createdAt
     */
    public function getCreatedAt();

    /**
     * Set updated_at
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt);

    /**
     * Get updated_at
     *
     * @return datetime $updatedAt
     */
    public function getUpdatedAt();

    /**
     * Add comment
     *
     * @param Application\Sonata\NewsBundle\Model\CommentInterface $comments
     */
    public function addComment(CommentInterface $comment);

    /**
     * Set the comments to a collection of comments
     *
     * @param Doctrine\Common\Collections\Collection $comments
     */
    public function setComments($comments);

    /**
     * Get comments
     *
     * @return Doctrine\Common\Collections\Collection $comments
     */
    public function getComments();

    /**
     * Add tag
     *
     * @param \Application\Sonata\NewsBundle\Model\TagInterface $tags
     */
    public function addTag(TagInterface $tag);

    /**
     * Set the tags to a collection of tags
     *
     * @param Doctrine\Common\Collections\Collection $tags
     */
    public function setTags($tags);

    /**
     * Get tags
     *
     * @return Doctrine\Common\Collections\Collection $tags
     */
    public function getTags();

    /**
     * Return the year the post was created
     *
     * @return $year
     */
    public function getYear();

    /**
     * Return the month the post was created
     *
     * @return $month
     */
    public function getMonth();

    /**
     * Return the day the post was created
     *
     * @return $day
     */
    public function getDay();

    /**
     * Set comments_enabled
     *
     * @param boolean $commentsEnabled
     */
    public function setCommentsEnabled($commentsEnabled);

    /**
     * Get comments_enabled
     *
     * @return boolean $commentsEnabled
     */
    public function getCommentsEnabled();

    /**
     * Set comments_close_at
     *
     * @param datetime $commentsCloseAt
     */
    public function setCommentsCloseAt($commentsCloseAt);

    /**
     * Get comments_close_at
     *
     * @return datetime $commentsCloseAt
     */
    public function getCommentsCloseAt();

    /**
     * Set comments_default_status
     *
     * @param integer $commentsDefaultStatus
     */
    public function setCommentsDefaultStatus($commentsDefaultStatus);

    /**
     * Get comments_default_status
     *
     * @return integer $commentsDefaultStatus
     */
    public function getCommentsDefaultStatus();

    /**
     * A convenience function which checks to see if it is possible to comment on the post
     *
     * @return boolean
     */
    public function isCommentable();

    /**
     * Set the author of the post
     *
     * @param string $author
     */
    public function setAuthor($author);

    /**
     * Return the author of the post
     *
     * @return string
     */
    public function getAuthor();

    /**
     * Set image
     *
     * @param Application\Sonata\MediaBundle\Model\MediaInterface $image
     */
    public function setImage(MediaInterface $image = null);

    /**
     * Get image
     *
     * @return Application\Sonata\MediaBundle\Model\MediaInterface $image
     */
    public function getImage();

    public function __toString();
}