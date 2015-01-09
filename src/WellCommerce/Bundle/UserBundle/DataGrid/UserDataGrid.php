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
namespace WellCommerce\Bundle\UserBundle\DataGrid;

use WellCommerce\Bundle\CoreBundle\DataGrid\AbstractDataGrid;
use WellCommerce\Bundle\CoreBundle\DataGrid\Column\Column;
use WellCommerce\Bundle\CoreBundle\DataGrid\Column\ColumnCollection;
use WellCommerce\Bundle\CoreBundle\DataGrid\Column\ColumnInterface;
use WellCommerce\Bundle\CoreBundle\DataGrid\Column\Options\Appearance;
use WellCommerce\Bundle\CoreBundle\DataGrid\Column\Options\Filter;
use WellCommerce\Bundle\CoreBundle\DataGrid\Column\Options\Sorting;
use WellCommerce\Bundle\CoreBundle\DataGrid\DataGridInterface;

/**
 * Class UserDataGrid
 *
 * @package WellCommerce\Bundle\UserBundle
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class UserDataGrid extends AbstractDataGrid implements DataGridInterface
{
    /**
     * {@inheritdoc}
     */
    public function configureColumns(ColumnCollection $collection)
    {
        $collection->add(new Column([
            'id'         => 'id',
            'caption'    => $this->trans('user.id'),
            'sorting'    => new Sorting([
                'default_order' => ColumnInterface::SORT_DIR_DESC
            ]),
            'appearance' => new Appearance([
                'width'   => 90,
                'visible' => false
            ]),
            'filter'     => new Filter([
                'type' => Filter::FILTER_BETWEEN
            ])
        ]));

        $collection->add(new Column([
            'id'         => 'username',
            'caption'    => $this->trans('user.username'),
        ]));

        $collection->add(new Column([
            'id'         => 'email',
            'caption'    => $this->trans('user.email'),
        ]));

        $collection->add(new Column([
            'id'         => 'enabled',
            'caption'    => $this->trans('user.enabled'),
        ]));
    }
}