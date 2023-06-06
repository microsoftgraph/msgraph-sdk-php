<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VirtualEventWebinar File
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
* VirtualEventWebinar class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VirtualEventWebinar extends VirtualEvent
{
    /**
    * Gets the audience
    * To whom the webinar is visible.
    *
    * @return MeetingAudience|null The audience
    */
    public function getAudience()
    {
        if (array_key_exists("audience", $this->_propDict)) {
            if (is_a($this->_propDict["audience"], "\Beta\Microsoft\Graph\Model\MeetingAudience") || is_null($this->_propDict["audience"])) {
                return $this->_propDict["audience"];
            } else {
                $this->_propDict["audience"] = new MeetingAudience($this->_propDict["audience"]);
                return $this->_propDict["audience"];
            }
        }
        return null;
    }

    /**
    * Sets the audience
    * To whom the webinar is visible.
    *
    * @param MeetingAudience $val The audience
    *
    * @return VirtualEventWebinar
    */
    public function setAudience($val)
    {
        $this->_propDict["audience"] = $val;
        return $this;
    }


     /**
     * Gets the coOrganizers
    * Identity information of co-organizers of the webinar.
     *
     * @return array|null The coOrganizers
     */
    public function getCoOrganizers()
    {
        if (array_key_exists("coOrganizers", $this->_propDict)) {
           return $this->_propDict["coOrganizers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the coOrganizers
    * Identity information of co-organizers of the webinar.
    *
    * @param CommunicationsUserIdentity[] $val The coOrganizers
    *
    * @return VirtualEventWebinar
    */
    public function setCoOrganizers($val)
    {
        $this->_propDict["coOrganizers"] = $val;
        return $this;
    }

    /**
    * Gets the registration
    * Registration configuration of the webinar.
    *
    * @return VirtualEventRegistration|null The registration
    */
    public function getRegistration()
    {
        if (array_key_exists("registration", $this->_propDict)) {
            if (is_a($this->_propDict["registration"], "\Beta\Microsoft\Graph\Model\VirtualEventRegistration") || is_null($this->_propDict["registration"])) {
                return $this->_propDict["registration"];
            } else {
                $this->_propDict["registration"] = new VirtualEventRegistration($this->_propDict["registration"]);
                return $this->_propDict["registration"];
            }
        }
        return null;
    }

    /**
    * Sets the registration
    * Registration configuration of the webinar.
    *
    * @param VirtualEventRegistration $val The registration
    *
    * @return VirtualEventWebinar
    */
    public function setRegistration($val)
    {
        $this->_propDict["registration"] = $val;
        return $this;
    }

}
