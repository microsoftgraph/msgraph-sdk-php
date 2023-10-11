<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AwsPolicy File
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
* AwsPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AwsPolicy extends Entity
{
    /**
    * Gets the awsPolicyType
    *
    * @return AwsPolicyType|null The awsPolicyType
    */
    public function getAwsPolicyType()
    {
        if (array_key_exists("awsPolicyType", $this->_propDict)) {
            if (is_a($this->_propDict["awsPolicyType"], "\Beta\Microsoft\Graph\Model\AwsPolicyType") || is_null($this->_propDict["awsPolicyType"])) {
                return $this->_propDict["awsPolicyType"];
            } else {
                $this->_propDict["awsPolicyType"] = new AwsPolicyType($this->_propDict["awsPolicyType"]);
                return $this->_propDict["awsPolicyType"];
            }
        }
        return null;
    }

    /**
    * Sets the awsPolicyType
    *
    * @param AwsPolicyType $val The awsPolicyType
    *
    * @return AwsPolicy
    */
    public function setAwsPolicyType($val)
    {
        $this->_propDict["awsPolicyType"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return AwsPolicy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the externalId
    *
    * @return string|null The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalId
    *
    * @param string $val The externalId
    *
    * @return AwsPolicy
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }

}
