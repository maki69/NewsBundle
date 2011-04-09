<?php

namespace Sonata\NewsBundle\Model;

interface PostMangerInterface
{
    public function getLatestPosts($page, $limit);
}
