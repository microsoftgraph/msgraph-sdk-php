<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DirectorySizeQuota File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* DirectorySizeQuota class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DirectorySizeQuota extends Entity
{
    /**
    * Gets the used
    *
    * @return int The used
    */
    public function getUsed()
    {
        if (array_key_exists("used", $this->_propDict)) {
            return $this->_propDict["used"];
        } else {
            return null;
        }
    }

    /**
    * Sets the used
    *
    * @param int $val The value of the used
    *
    * @return DirectorySizeQuota
    */
    public function setUsed($val)
    {
        $this->_propDict["used"] = $val;
        return $this;
    }
    /**
    * Gets the total
    *
    * @return int The total
    */
    public function getTotal()
    {
        if (array_key_exists("total", $this->_propDict)) {
            return $this->_propDict["total"];
        } else {
            return null;
        }
    }

    /**
    * Sets the total
    *
    * @param int $val The value of the total
    *
    * @return DirectorySizeQuota
    */
    public function setTotal($val)
    {
        $this->_propDict["total"] = $val;
        return $this;
    }
}
