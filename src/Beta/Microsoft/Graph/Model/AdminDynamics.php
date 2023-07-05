<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AdminDynamics File
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
* AdminDynamics class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AdminDynamics extends Entity
{
    /**
    * Gets the customerVoice
    *
    * @return CustomerVoiceSettings|null The customerVoice
    */
    public function getCustomerVoice()
    {
        if (array_key_exists("customerVoice", $this->_propDict)) {
            if (is_a($this->_propDict["customerVoice"], "\Beta\Microsoft\Graph\Model\CustomerVoiceSettings") || is_null($this->_propDict["customerVoice"])) {
                return $this->_propDict["customerVoice"];
            } else {
                $this->_propDict["customerVoice"] = new CustomerVoiceSettings($this->_propDict["customerVoice"]);
                return $this->_propDict["customerVoice"];
            }
        }
        return null;
    }

    /**
    * Sets the customerVoice
    *
    * @param CustomerVoiceSettings $val The customerVoice
    *
    * @return AdminDynamics
    */
    public function setCustomerVoice($val)
    {
        $this->_propDict["customerVoice"] = $val;
        return $this;
    }

}
