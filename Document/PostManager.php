<?php

namespace Sonata\NewsBundle\Document;

use Doctrine\ODM\MongoDB\DocumentManager;

use Sonata\AdminBundle\Datagrid\MongoDB\Pager;
use Sonata\NewsBundle\Model\PostInterface;
use Sonata\NewsBundle\Model\PostManager as BasePostManager;

class PostManager extends BasePostManager
{
    public function getLatestPosts($page, $limit)
    {
        $qb = $this->createQueryBuilder('Application\Sonata\NewsBundle\Document\Post')
            ->field('enabled')->equals(true)
            ->sort('p.createdAt', 'DESC'); // check this

        $pager = new Pager('Application\Sonata\NewsBundle\Document\Post');

        $pager->setQueryBuilder($qb);
        $pager->setPage($page);
        $pager->init();
    }

}
