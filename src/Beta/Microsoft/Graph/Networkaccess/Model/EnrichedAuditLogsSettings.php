<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EnrichedAuditLogsSettings File
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
* EnrichedAuditLogsSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EnrichedAuditLogsSettings extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the status
    * Define the current status of the enrichment feature for a particular workload. The possible values are: enabled, disabled, unknownFutureValue.
    *
    * @return Status|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Networkaccess\Model\Status") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new Status($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Define the current status of the enrichment feature for a particular workload. The possible values are: enabled, disabled, unknownFutureValue.
    *
    * @param Status $val The value to assign to the status
    *
    * @return EnrichedAuditLogsSettings The EnrichedAuditLogsSettings
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
