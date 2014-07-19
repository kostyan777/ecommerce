<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Core\Component\Controller\Box;

/**
 * Interface BoxControllerInterface
 *
 * @package WellCommerce\Core\Component\Controller\Box
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
interface BoxControllerInterface
{
    /**
     * @return int Internal box id
     */
    public function getBoxId();

    /**
     * As box settings are passed as another key in forwarded requests
     * we need to fetch them using accessor
     *
     * @param $id
     *
     * @return mixed
     */
    public function getBoxSetting($id);
}