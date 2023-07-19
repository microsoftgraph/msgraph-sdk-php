<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CrossTenantAccessSettings File
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
* CrossTenantAccessSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CrossTenantAccessSettings extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the networkPacketTaggingStatus
    * Determines if a header with the user tenant ID is inserted into the network traffic. .The possible values are: enabled, disabled.
    *
    * @return Status|null The networkPacketTaggingStatus
    */
    public function getNetworkPacketTaggingStatus()
    {
        if (array_key_exists("networkPacketTaggingStatus", $this->_propDict)) {
            if (is_a($this->_propDict["networkPacketTaggingStatus"], "\Beta\Microsoft\Graph\Networkaccess\Model\Status") || is_null($this->_propDict["networkPacketTaggingStatus"])) {
                return $this->_propDict["networkPacketTaggingStatus"];
            } else {
                $this->_propDict["networkPacketTaggingStatus"] = new Status($this->_propDict["networkPacketTaggingStatus"]);
                return $this->_propDict["networkPacketTaggingStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the networkPacketTaggingStatus
    * Determines if a header with the user tenant ID is inserted into the network traffic. .The possible values are: enabled, disabled.
    *
    * @param Status $val The networkPacketTaggingStatus
    *
    * @return CrossTenantAccessSettings
    */
    public function setNetworkPacketTaggingStatus($val)
    {
        $this->_propDict["networkPacketTaggingStatus"] = $val;
        return $this;
    }

}
