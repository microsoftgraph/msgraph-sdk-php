<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VirtualEventWebinarRegistrationConfiguration File
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
* VirtualEventWebinarRegistrationConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VirtualEventWebinarRegistrationConfiguration extends VirtualEventRegistrationConfiguration
{
    /**
    * Gets the isManualApprovalEnabled
    *
    * @return bool|null The isManualApprovalEnabled
    */
    public function getIsManualApprovalEnabled()
    {
        if (array_key_exists("isManualApprovalEnabled", $this->_propDict)) {
            return $this->_propDict["isManualApprovalEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isManualApprovalEnabled
    *
    * @param bool $val The isManualApprovalEnabled
    *
    * @return VirtualEventWebinarRegistrationConfiguration
    */
    public function setIsManualApprovalEnabled($val)
    {
        $this->_propDict["isManualApprovalEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isWaitlistEnabled
    *
    * @return bool|null The isWaitlistEnabled
    */
    public function getIsWaitlistEnabled()
    {
        if (array_key_exists("isWaitlistEnabled", $this->_propDict)) {
            return $this->_propDict["isWaitlistEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isWaitlistEnabled
    *
    * @param bool $val The isWaitlistEnabled
    *
    * @return VirtualEventWebinarRegistrationConfiguration
    */
    public function setIsWaitlistEnabled($val)
    {
        $this->_propDict["isWaitlistEnabled"] = boolval($val);
        return $this;
    }

}
