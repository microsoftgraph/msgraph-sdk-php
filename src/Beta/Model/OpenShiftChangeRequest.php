<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OpenShiftChangeRequest File
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
* OpenShiftChangeRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class OpenShiftChangeRequest extends ScheduleChangeRequest
{
    /**
    * Gets the openShiftId
    *
    * @return string The openShiftId
    */
    public function getOpenShiftId()
    {
        if (array_key_exists("openShiftId", $this->_propDict)) {
            return $this->_propDict["openShiftId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the openShiftId
    *
    * @param string $val The openShiftId
    *
    * @return OpenShiftChangeRequest
    */
    public function setOpenShiftId($val)
    {
        $this->_propDict["openShiftId"] = $val;
        return $this;
    }
    
}