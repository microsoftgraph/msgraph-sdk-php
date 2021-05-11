<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SessionLifetimePolicy File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* SessionLifetimePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SessionLifetimePolicy extends Entity
{
    /**
    * Gets the detail
    *
    * @return string The detail
    */
    public function getDetail()
    {
        if (array_key_exists("detail", $this->_propDict)) {
            return $this->_propDict["detail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the detail
    *
    * @param string $val The value of the detail
    *
    * @return SessionLifetimePolicy
    */
    public function setDetail($val)
    {
        $this->_propDict["detail"] = $val;
        return $this;
    }

    /**
    * Gets the expirationRequirement
    *
    * @return ExpirationRequirement The expirationRequirement
    */
    public function getExpirationRequirement()
    {
        if (array_key_exists("expirationRequirement", $this->_propDict)) {
            if (is_a($this->_propDict["expirationRequirement"], "\Beta\Microsoft\Graph\Model\ExpirationRequirement")) {
                return $this->_propDict["expirationRequirement"];
            } else {
                $this->_propDict["expirationRequirement"] = new ExpirationRequirement($this->_propDict["expirationRequirement"]);
                return $this->_propDict["expirationRequirement"];
            }
        }
        return null;
    }

    /**
    * Sets the expirationRequirement
    *
    * @param ExpirationRequirement $val The value to assign to the expirationRequirement
    *
    * @return SessionLifetimePolicy The SessionLifetimePolicy
    */
    public function setExpirationRequirement($val)
    {
        $this->_propDict["expirationRequirement"] = $val;
         return $this;
    }
}
