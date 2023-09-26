<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentityDetails File
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
* IdentityDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IdentityDetails extends Entity
{

    /**
    * Gets the createdDateTime
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The value to assign to the createdDateTime
    *
    * @return IdentityDetails The IdentityDetails
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the lastActiveDateTime
    *
    * @return \DateTime|null The lastActiveDateTime
    */
    public function getLastActiveDateTime()
    {
        if (array_key_exists("lastActiveDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastActiveDateTime"], "\DateTime") || is_null($this->_propDict["lastActiveDateTime"])) {
                return $this->_propDict["lastActiveDateTime"];
            } else {
                $this->_propDict["lastActiveDateTime"] = new \DateTime($this->_propDict["lastActiveDateTime"]);
                return $this->_propDict["lastActiveDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastActiveDateTime
    *
    * @param \DateTime $val The value to assign to the lastActiveDateTime
    *
    * @return IdentityDetails The IdentityDetails
    */
    public function setLastActiveDateTime($val)
    {
        $this->_propDict["lastActiveDateTime"] = $val;
         return $this;
    }
}
