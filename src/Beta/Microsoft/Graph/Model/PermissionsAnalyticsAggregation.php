<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PermissionsAnalyticsAggregation File
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
* PermissionsAnalyticsAggregation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PermissionsAnalyticsAggregation extends Entity
{
    /**
    * Gets the aws
    *
    * @return PermissionsAnalytics|null The aws
    */
    public function getAws()
    {
        if (array_key_exists("aws", $this->_propDict)) {
            if (is_a($this->_propDict["aws"], "\Beta\Microsoft\Graph\Model\PermissionsAnalytics") || is_null($this->_propDict["aws"])) {
                return $this->_propDict["aws"];
            } else {
                $this->_propDict["aws"] = new PermissionsAnalytics($this->_propDict["aws"]);
                return $this->_propDict["aws"];
            }
        }
        return null;
    }

    /**
    * Sets the aws
    *
    * @param PermissionsAnalytics $val The aws
    *
    * @return PermissionsAnalyticsAggregation
    */
    public function setAws($val)
    {
        $this->_propDict["aws"] = $val;
        return $this;
    }

    /**
    * Gets the azure
    *
    * @return PermissionsAnalytics|null The azure
    */
    public function getAzure()
    {
        if (array_key_exists("azure", $this->_propDict)) {
            if (is_a($this->_propDict["azure"], "\Beta\Microsoft\Graph\Model\PermissionsAnalytics") || is_null($this->_propDict["azure"])) {
                return $this->_propDict["azure"];
            } else {
                $this->_propDict["azure"] = new PermissionsAnalytics($this->_propDict["azure"]);
                return $this->_propDict["azure"];
            }
        }
        return null;
    }

    /**
    * Sets the azure
    *
    * @param PermissionsAnalytics $val The azure
    *
    * @return PermissionsAnalyticsAggregation
    */
    public function setAzure($val)
    {
        $this->_propDict["azure"] = $val;
        return $this;
    }

    /**
    * Gets the gcp
    *
    * @return PermissionsAnalytics|null The gcp
    */
    public function getGcp()
    {
        if (array_key_exists("gcp", $this->_propDict)) {
            if (is_a($this->_propDict["gcp"], "\Beta\Microsoft\Graph\Model\PermissionsAnalytics") || is_null($this->_propDict["gcp"])) {
                return $this->_propDict["gcp"];
            } else {
                $this->_propDict["gcp"] = new PermissionsAnalytics($this->_propDict["gcp"]);
                return $this->_propDict["gcp"];
            }
        }
        return null;
    }

    /**
    * Sets the gcp
    *
    * @param PermissionsAnalytics $val The gcp
    *
    * @return PermissionsAnalyticsAggregation
    */
    public function setGcp($val)
    {
        $this->_propDict["gcp"] = $val;
        return $this;
    }

}
