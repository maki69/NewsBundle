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

use Sonata\NewsBundle\Model\PostInterface;

interface TagInterface
{
    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name);

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName();

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
     * Return a slug from the text
     *
     * @static
     * @param  $text
     * @return mixed|string
     */
    static public function slugify($text);

    /**
     * Add posts
     *
     * @param Sonata\NewsBundle\Model\PostInterface $posts
     */
    public function addPosts(PostInterface $posts);

    /**
     * Get posts
     *
     * @return Doctrine\Common\Collections\Collection $posts
     */
    public function getPosts();

    public function __toString();
}