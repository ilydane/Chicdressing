<?php

namespace SEOPress\Services\Metas\SocialTwitter\Specifications\Image;

use SEOPress\Services\Metas\SocialTwitter\Specifications\Image\AbstractImageSpecification;

class HomeSpecification extends AbstractImageSpecification
{
    const NAME_SERVICE = 'HomeImageSocialTwitterSpecification';

    /**
     * @param array $params [
     *     'context' => array
     *
     * ]
     * @return string
     */
    public function getValue($params) {

        return $this->applyFilter([
            'url' => seopress_get_service('SocialOption')->getTwitterImageHome(),
        ], $params);

    }

    /**
     *
     * @param array $params [
     *     'post' => \WP_Post
     *     'title' => string
     *     'context' => array
     *
     * ]
     * @return boolean
     */
    public function isSatisfyBy($params)
    {
        $context = $params['context'];

        if ($context['is_home'] && !empty($this->getValue())) {
            return true;
        }

        return false;
    }
}


