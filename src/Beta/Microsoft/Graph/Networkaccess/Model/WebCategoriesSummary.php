<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WebCategoriesSummary File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Networkaccess\Model;
/**
* WebCategoriesSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WebCategoriesSummary extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the deviceCount
    *
    * @return int|null The deviceCount
    */
    public function getDeviceCount()
    {
        if (array_key_exists("deviceCount", $this->_propDict)) {
            return $this->_propDict["deviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceCount
    *
    * @param int $val The value of the deviceCount
    *
    * @return WebCategoriesSummary
    */
    public function setDeviceCount($val)
    {
        $this->_propDict["deviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the transactionCount
    *
    * @return int|null The transactionCount
    */
    public function getTransactionCount()
    {
        if (array_key_exists("transactionCount", $this->_propDict)) {
            return $this->_propDict["transactionCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the transactionCount
    *
    * @param int $val The value of the transactionCount
    *
    * @return WebCategoriesSummary
    */
    public function setTransactionCount($val)
    {
        $this->_propDict["transactionCount"] = $val;
        return $this;
    }
    /**
    * Gets the userCount
    *
    * @return int|null The userCount
    */
    public function getUserCount()
    {
        if (array_key_exists("userCount", $this->_propDict)) {
            return $this->_propDict["userCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userCount
    *
    * @param int $val The value of the userCount
    *
    * @return WebCategoriesSummary
    */
    public function setUserCount($val)
    {
        $this->_propDict["userCount"] = $val;
        return $this;
    }
}
