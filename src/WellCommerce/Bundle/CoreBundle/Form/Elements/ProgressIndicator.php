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

namespace WellCommerce\Bundle\CoreBundle\Form\Elements;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class ProgressIndicator
 *
 * @package WellCommerce\Bundle\CoreBundle\Form\Elements
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ProgressIndicator extends Field implements ElementInterface
{
    /**
     * {@inheritdoc}
     */
    public function configureAttributes(OptionsResolverInterface $resolver)
    {
        $resolver->setRequired([
            'name',
            'label',
            'chunks',
            'load',
            'process',
            'success',
            'preventSubmit',
        ]);

        $resolver->setOptional([
            'comment',
            'error',
        ]);

        $resolver->setAllowedTypes([
            'name'          => 'string',
            'label'         => 'string',
            'chunks'        => 'int',
            'load'          => 'string',
            'process'       => 'string',
            'success'       => 'string',
            'preventSubmit' => 'bool',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareAttributesJs()
    {
        $attributes = [
            $this->formatAttributeJs('name', 'sName'),
            $this->formatAttributeJs('label', 'sLabel'),
            $this->formatAttributeJs('comment', 'sComment'),
            $this->formatAttributeJs('error', 'sError'),
            $this->formatAttributeJs('chunks', 'iChunks'),
            $this->formatAttributeJs('load', 'fLoadRecords', ElementInterface::TYPE_FUNCTION),
            $this->formatAttributeJs('process', 'fProcessRecords', ElementInterface::TYPE_FUNCTION),
            $this->formatAttributeJs('success', 'fSuccessRecords', ElementInterface::TYPE_FUNCTION),
            $this->formatAttributeJs('preventSubmit', 'bPreventSubmit', ElementInterface::TYPE_BOOLEAN),
            $this->formatRepeatableJs(),
            $this->formatRulesJs(),
            $this->formatDependencyJs(),
            $this->formatDefaultsJs()
        ];

        return $attributes;
    }
}
