<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementScriptGroupAssignment File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* DeviceManagementScriptGroupAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceManagementScriptGroupAssignment extends Entity
{
    /**
    * Gets the targetGroupId
    *
    * @return string The targetGroupId
    */
    public function getTargetGroupId()
    {
        if (array_key_exists("targetGroupId", $this->_propDict)) {
            return $this->_propDict["targetGroupId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetGroupId
    *
    * @param string $val The targetGroupId
    *
    * @return DeviceManagementScriptGroupAssignment
    */
    public function setTargetGroupId($val)
    {
        $this->_propDict["targetGroupId"] = $val;
        return $this;
    }
    
}