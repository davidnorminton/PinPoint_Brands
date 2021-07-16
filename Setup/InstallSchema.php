<?php

namespace PinPoint\Brands\Setup;

use \Magento\Framework\Setup\InstallSchemaInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\SchemaSetupInterface;
use \Magento\Framework\DB\Ddl\Table;

/**
 * Class InstallSchema
 *
 * @package PinPoint\Brands\Setup
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * Install PinPoint Brands table
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $tableName = $setup->getTable('pinpoint_brands');

		// Desktop Logo Image
		// Mobile Logo Image
		// Alt Text
		// Title
		// Description
		// Category
		// Enabled / Disabled


        if ($setup->getConnection()->isTableExists($tableName) != true) {
            $table = $setup->getConnection()
                ->newTable($tableName)
                ->addColumn(
                    'brand_id',
                    Table::TYPE_INTEGER,
                    null,
                    [
                        'identity' => true,
                        'unsigned' => true,
                        'nullable' => false,
                        'primary' => true
                    ],
                    'ID'
                )
                ->addColumn(
                    'title',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false],
                    'Title'
                )
                ->addColumn(
                    'description',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false],
                    'Description'
                )
                ->addColumn(
                    'desktop_image',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false],
                    'Desktop_image'
                )
                ->addColumn(
                    'mobile_image',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false],
                    'Mobile_image'
                )
                ->addColumn(
                    'alt_text',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false],
                    'Alt_text'
                )
                ->addColumn(
                    'category',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false],
                    'Category'
                )
                ->addColumn(
                    'enabled',
                    Table::TYPE_BOOLEAN,
                    null,
                    ['nullable' => false],
                    'Enabled'
                )
                ->addColumn(
                    'created_at',
                    Table::TYPE_TIMESTAMP,
                    null,
                    ['nullable' => false, 'default' => Table::TIMESTAMP_INIT],
                    'Created At'
                )
                ->setComment('PinPoint Brands');
            $setup->getConnection()->createTable($table);
        }

        $setup->endSetup();
    }
}
