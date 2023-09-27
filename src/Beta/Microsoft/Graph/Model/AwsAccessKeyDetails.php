<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AwsAccessKeyDetails File
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
* AwsAccessKeyDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AwsAccessKeyDetails extends Entity
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
    * @return AwsAccessKeyDetails The AwsAccessKeyDetails
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the lastUsedDateTime
    *
    * @return \DateTime|null The lastUsedDateTime
    */
    public function getLastUsedDateTime()
    {
        if (array_key_exists("lastUsedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUsedDateTime"], "\DateTime") || is_null($this->_propDict["lastUsedDateTime"])) {
                return $this->_propDict["lastUsedDateTime"];
            } else {
                $this->_propDict["lastUsedDateTime"] = new \DateTime($this->_propDict["lastUsedDateTime"]);
                return $this->_propDict["lastUsedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastUsedDateTime
    *
    * @param \DateTime $val The value to assign to the lastUsedDateTime
    *
    * @return AwsAccessKeyDetails The AwsAccessKeyDetails
    */
    public function setLastUsedDateTime($val)
    {
        $this->_propDict["lastUsedDateTime"] = $val;
         return $this;
    }
}
