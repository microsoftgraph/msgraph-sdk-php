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
    * Identity information of coorganizers of the webinar.
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
    * Identity information of coorganizers of the webinar.
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
    * Gets the registrationConfiguration
    *
    * @return VirtualEventRegistrationConfiguration|null The registrationConfiguration
    */
    public function getRegistrationConfiguration()
    {
        if (array_key_exists("registrationConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["registrationConfiguration"], "\Beta\Microsoft\Graph\Model\VirtualEventRegistrationConfiguration") || is_null($this->_propDict["registrationConfiguration"])) {
                return $this->_propDict["registrationConfiguration"];
            } else {
                $this->_propDict["registrationConfiguration"] = new VirtualEventRegistrationConfiguration($this->_propDict["registrationConfiguration"]);
                return $this->_propDict["registrationConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the registrationConfiguration
    *
    * @param VirtualEventRegistrationConfiguration $val The registrationConfiguration
    *
    * @return VirtualEventWebinar
    */
    public function setRegistrationConfiguration($val)
    {
        $this->_propDict["registrationConfiguration"] = $val;
        return $this;
    }


     /**
     * Gets the registrations
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
    *
    * @param VirtualEventRegistration[] $val The registrations
    *
    * @return VirtualEventWebinar
    */
    public function setRegistrations($val)
    {
        $this->_propDict["registrations"] = $val;
        return $this;
    }

}
