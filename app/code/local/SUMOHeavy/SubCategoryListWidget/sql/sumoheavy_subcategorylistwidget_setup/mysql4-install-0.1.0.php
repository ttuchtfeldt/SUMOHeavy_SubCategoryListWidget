<?php
/**
 * SUMOHeavy_SubCategoryListWidget
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.sumoheavy.com/LICENSE.txt
 *
 * @category   SUMOHeavy
 * @package    SUMOHeavy_SubCategoryListWidget
 * @copyright  Copyright 2013 SUMO Heavy Industries (http://www.sumoheavy.com)
 * @license    http://www.sumoheavy.com/LICENSE.txt
 * @author     Sean Kennedy <support@sumoheavy.com>
 */
$installer = $this;
$installer->startSetup();

$installer->addAttribute(
    'catalog_category', 'sh_sclw_img', array(
    'type'          => 'varchar',
    'label'         => 'Category Image',
    'note'          => 'If set, this image will show in the widget.',
    'input'         => 'image',
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible'       => true,
    'required'      => false,
    'user_defined'  => true,
    'backend'       => 'catalog/category_attribute_backend_image',
    'group'         => 'Subcategory List Widget',
    'position'      => 0
    )
);

$installer->run();
$installer->endSetup();
