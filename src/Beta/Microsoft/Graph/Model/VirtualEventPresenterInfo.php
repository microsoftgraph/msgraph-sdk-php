<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VirtualEventPresenterInfo File
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
* VirtualEventPresenterInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VirtualEventPresenterInfo extends MeetingParticipantInfo
{

    /**
    * Gets the presenterDetails
    *
    * @return VirtualEventPresenterDetails|null The presenterDetails
    */
    public function getPresenterDetails()
    {
        if (array_key_exists("presenterDetails", $this->_propDict)) {
            if (is_a($this->_propDict["presenterDetails"], "\Beta\Microsoft\Graph\Model\VirtualEventPresenterDetails") || is_null($this->_propDict["presenterDetails"])) {
                return $this->_propDict["presenterDetails"];
            } else {
                $this->_propDict["presenterDetails"] = new VirtualEventPresenterDetails($this->_propDict["presenterDetails"]);
                return $this->_propDict["presenterDetails"];
            }
        }
        return null;
    }

    /**
    * Sets the presenterDetails
    *
    * @param VirtualEventPresenterDetails $val The value to assign to the presenterDetails
    *
    * @return VirtualEventPresenterInfo The VirtualEventPresenterInfo
    */
    public function setPresenterDetails($val)
    {
        $this->_propDict["presenterDetails"] = $val;
         return $this;
    }
}
