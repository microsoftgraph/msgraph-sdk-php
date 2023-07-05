<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PermissionsAnalyticsAggregatedIdentitySummary File
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
* PermissionsAnalyticsAggregatedIdentitySummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PermissionsAnalyticsAggregatedIdentitySummary extends Entity
{
    /**
    * Gets the findingsCount
    *
    * @return int|null The findingsCount
    */
    public function getFindingsCount()
    {
        if (array_key_exists("findingsCount", $this->_propDict)) {
            return $this->_propDict["findingsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the findingsCount
    *
    * @param int $val The value of the findingsCount
    *
    * @return PermissionsAnalyticsAggregatedIdentitySummary
    */
    public function setFindingsCount($val)
    {
        $this->_propDict["findingsCount"] = $val;
        return $this;
    }
    /**
    * Gets the totalCount
    *
    * @return int|null The totalCount
    */
    public function getTotalCount()
    {
        if (array_key_exists("totalCount", $this->_propDict)) {
            return $this->_propDict["totalCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalCount
    *
    * @param int $val The value of the totalCount
    *
    * @return PermissionsAnalyticsAggregatedIdentitySummary
    */
    public function setTotalCount($val)
    {
        $this->_propDict["totalCount"] = $val;
        return $this;
    }
}
