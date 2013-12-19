<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Magento
 * @package     Magento_Backup
 * @subpackage  integration_tests
 * @copyright   Copyright (c) 2013 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Mock class to work with tar archives
 */
namespace Magento\Backup\Archive;

class Tar
{
    /**
     * Mock set files that shouldn't be added to tarball
     *
     * @param array $skipFiles
     * @return $this
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function setSkipFiles(array $skipFiles)
    {
        return $this;
    }

    /**
     * Mock pack file to TAR (Tape Archiver).
     *
     * @param $source
     * @param $destination
     * @param bool $skipRoot
     * @return string
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function pack($source, $destination, $skipRoot = false)
    {
        return '\unexistingpath';
    }
}