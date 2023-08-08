<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudRealtimeCommunicationInfo File
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
* CloudRealtimeCommunicationInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudRealtimeCommunicationInfo extends Entity
{
    /**
    * Gets the isSipEnabled
    *
    * @return bool|null The isSipEnabled
    */
    public function getIsSipEnabled()
    {
        if (array_key_exists("isSipEnabled", $this->_propDict)) {
            return $this->_propDict["isSipEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSipEnabled
    *
    * @param bool $val The value of the isSipEnabled
    *
    * @return CloudRealtimeCommunicationInfo
    */
    public function setIsSipEnabled($val)
    {
        $this->_propDict["isSipEnabled"] = $val;
        return $this;
    }
}
