<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VirtualEventSession File
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
* VirtualEventSession class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VirtualEventSession extends OnlineMeeting
{

     /**
     * Gets the registrations
    * Registration records of this virtual event session.
     *
     * @return array|null The registrations
     */
    public function getRegistrations()
    {
        if (array_key_exists("registrations", $this->_propDict)) {
           return $this->_propDict["registrations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the registrations
    * Registration records of this virtual event session.
    *
    * @param VirtualEventRegistration[] $val The registrations
    *
    * @return VirtualEventSession
    */
    public function setRegistrations($val)
    {
        $this->_propDict["registrations"] = $val;
        return $this;
    }

}
