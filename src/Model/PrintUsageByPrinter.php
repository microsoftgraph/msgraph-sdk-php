<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintUsageByPrinter File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* PrintUsageByPrinter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintUsageByPrinter extends PrintUsage
{
    /**
    * Gets the printerId
    *
    * @return string|null The printerId
    */
    public function getPrinterId()
    {
        if (array_key_exists("printerId", $this->_propDict)) {
            return $this->_propDict["printerId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the printerId
    *
    * @param string $val The printerId
    *
    * @return PrintUsageByPrinter
    */
    public function setPrinterId($val)
    {
        $this->_propDict["printerId"] = $val;
        return $this;
    }

    /**
    * Gets the printerName
    * The name of the printer represented by these statistics.
    *
    * @return string|null The printerName
    */
    public function getPrinterName()
    {
        if (array_key_exists("printerName", $this->_propDict)) {
            return $this->_propDict["printerName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the printerName
    * The name of the printer represented by these statistics.
    *
    * @param string $val The printerName
    *
    * @return PrintUsageByPrinter
    */
    public function setPrinterName($val)
    {
        $this->_propDict["printerName"] = $val;
        return $this;
    }

}
