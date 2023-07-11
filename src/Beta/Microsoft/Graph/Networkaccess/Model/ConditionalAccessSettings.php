<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessSettings File
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
* ConditionalAccessSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessSettings extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the signalingStatus
    * When SignalingStatus is enabled, the Conditional Access policy includes zero trust network access information.The possible values are: enabled, disabled.
    *
    * @return Status|null The signalingStatus
    */
    public function getSignalingStatus()
    {
        if (array_key_exists("signalingStatus", $this->_propDict)) {
            if (is_a($this->_propDict["signalingStatus"], "\Beta\Microsoft\Graph\Networkaccess\Model\Status") || is_null($this->_propDict["signalingStatus"])) {
                return $this->_propDict["signalingStatus"];
            } else {
                $this->_propDict["signalingStatus"] = new Status($this->_propDict["signalingStatus"]);
                return $this->_propDict["signalingStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the signalingStatus
    * When SignalingStatus is enabled, the Conditional Access policy includes zero trust network access information.The possible values are: enabled, disabled.
    *
    * @param Status $val The signalingStatus
    *
    * @return ConditionalAccessSettings
    */
    public function setSignalingStatus($val)
    {
        $this->_propDict["signalingStatus"] = $val;
        return $this;
    }

}
