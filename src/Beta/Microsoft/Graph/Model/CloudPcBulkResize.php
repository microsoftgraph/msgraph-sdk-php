<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcBulkResize File
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
* CloudPcBulkResize class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcBulkResize extends CloudPcBulkAction
{
    /**
    * Gets the targetServicePlanId
    *
    * @return string|null The targetServicePlanId
    */
    public function getTargetServicePlanId()
    {
        if (array_key_exists("targetServicePlanId", $this->_propDict)) {
            return $this->_propDict["targetServicePlanId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetServicePlanId
    *
    * @param string $val The targetServicePlanId
    *
    * @return CloudPcBulkResize
    */
    public function setTargetServicePlanId($val)
    {
        $this->_propDict["targetServicePlanId"] = $val;
        return $this;
    }

}
