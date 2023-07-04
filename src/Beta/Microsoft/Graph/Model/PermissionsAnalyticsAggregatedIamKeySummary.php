<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PermissionsAnalyticsAggregatedIamKeySummary File
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
* PermissionsAnalyticsAggregatedIamKeySummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PermissionsAnalyticsAggregatedIamKeySummary extends Entity
{
    /**
    * Gets the findingsCountOverLimit
    *
    * @return int|null The findingsCountOverLimit
    */
    public function getFindingsCountOverLimit()
    {
        if (array_key_exists("findingsCountOverLimit", $this->_propDict)) {
            return $this->_propDict["findingsCountOverLimit"];
        } else {
            return null;
        }
    }

    /**
    * Sets the findingsCountOverLimit
    *
    * @param int $val The value of the findingsCountOverLimit
    *
    * @return PermissionsAnalyticsAggregatedIamKeySummary
    */
    public function setFindingsCountOverLimit($val)
    {
        $this->_propDict["findingsCountOverLimit"] = $val;
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
    * @return PermissionsAnalyticsAggregatedIamKeySummary
    */
    public function setTotalCount($val)
    {
        $this->_propDict["totalCount"] = $val;
        return $this;
    }
}
