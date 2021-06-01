<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsAppRemovedEventMessageDetail File
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
* TeamsAppRemovedEventMessageDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamsAppRemovedEventMessageDetail extends EventMessageDetail
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.teamsAppRemovedEventMessageDetail");
    }


    /**
    * Gets the initiator
    *
    * @return IdentitySet|null The initiator
    */
    public function getInitiator()
    {
        if (array_key_exists("initiator", $this->_propDict)) {
            if (is_a($this->_propDict["initiator"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["initiator"])) {
                return $this->_propDict["initiator"];
            } else {
                $this->_propDict["initiator"] = new IdentitySet($this->_propDict["initiator"]);
                return $this->_propDict["initiator"];
            }
        }
        return null;
    }

    /**
    * Sets the initiator
    *
    * @param IdentitySet $val The value to assign to the initiator
    *
    * @return TeamsAppRemovedEventMessageDetail The TeamsAppRemovedEventMessageDetail
    */
    public function setInitiator($val)
    {
        $this->_propDict["initiator"] = $val;
         return $this;
    }
    /**
    * Gets the teamsAppDisplayName
    *
    * @return string|null The teamsAppDisplayName
    */
    public function getTeamsAppDisplayName()
    {
        if (array_key_exists("teamsAppDisplayName", $this->_propDict)) {
            return $this->_propDict["teamsAppDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the teamsAppDisplayName
    *
    * @param string $val The value of the teamsAppDisplayName
    *
    * @return TeamsAppRemovedEventMessageDetail
    */
    public function setTeamsAppDisplayName($val)
    {
        $this->_propDict["teamsAppDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the teamsAppId
    *
    * @return string|null The teamsAppId
    */
    public function getTeamsAppId()
    {
        if (array_key_exists("teamsAppId", $this->_propDict)) {
            return $this->_propDict["teamsAppId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the teamsAppId
    *
    * @param string $val The value of the teamsAppId
    *
    * @return TeamsAppRemovedEventMessageDetail
    */
    public function setTeamsAppId($val)
    {
        $this->_propDict["teamsAppId"] = $val;
        return $this;
    }
}
