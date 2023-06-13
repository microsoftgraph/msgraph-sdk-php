<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AmazonResourceEvidence File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;
/**
* AmazonResourceEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AmazonResourceEvidence extends AlertEvidence
{
    /**
    * Gets the amazonAccountId
    * The unique identifier for the Amazon account.
    *
    * @return string|null The amazonAccountId
    */
    public function getAmazonAccountId()
    {
        if (array_key_exists("amazonAccountId", $this->_propDict)) {
            return $this->_propDict["amazonAccountId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the amazonAccountId
    * The unique identifier for the Amazon account.
    *
    * @param string $val The value of the amazonAccountId
    *
    * @return AmazonResourceEvidence
    */
    public function setAmazonAccountId($val)
    {
        $this->_propDict["amazonAccountId"] = $val;
        return $this;
    }
    /**
    * Gets the amazonResourceId
    * The Amazon resource identifier (ARN) for the cloud resource.
    *
    * @return string|null The amazonResourceId
    */
    public function getAmazonResourceId()
    {
        if (array_key_exists("amazonResourceId", $this->_propDict)) {
            return $this->_propDict["amazonResourceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the amazonResourceId
    * The Amazon resource identifier (ARN) for the cloud resource.
    *
    * @param string $val The value of the amazonResourceId
    *
    * @return AmazonResourceEvidence
    */
    public function setAmazonResourceId($val)
    {
        $this->_propDict["amazonResourceId"] = $val;
        return $this;
    }
    /**
    * Gets the resourceName
    * The name of the resource.
    *
    * @return string|null The resourceName
    */
    public function getResourceName()
    {
        if (array_key_exists("resourceName", $this->_propDict)) {
            return $this->_propDict["resourceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceName
    * The name of the resource.
    *
    * @param string $val The value of the resourceName
    *
    * @return AmazonResourceEvidence
    */
    public function setResourceName($val)
    {
        $this->_propDict["resourceName"] = $val;
        return $this;
    }
    /**
    * Gets the resourceType
    * The type of the resource.
    *
    * @return string|null The resourceType
    */
    public function getResourceType()
    {
        if (array_key_exists("resourceType", $this->_propDict)) {
            return $this->_propDict["resourceType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceType
    * The type of the resource.
    *
    * @param string $val The value of the resourceType
    *
    * @return AmazonResourceEvidence
    */
    public function setResourceType($val)
    {
        $this->_propDict["resourceType"] = $val;
        return $this;
    }
}
