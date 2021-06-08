<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MembersDeletedEventMessageDetail File
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
* MembersDeletedEventMessageDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MembersDeletedEventMessageDetail extends EventMessageDetail
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.membersDeletedEventMessageDetail");
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
    * @return MembersDeletedEventMessageDetail The MembersDeletedEventMessageDetail
    */
    public function setInitiator($val)
    {
        $this->_propDict["initiator"] = $val;
         return $this;
    }

    /**
    * Gets the members
    *
    * @return Identity|null The members
    */
    public function getMembers()
    {
        if (array_key_exists("members", $this->_propDict)) {
            if (is_a($this->_propDict["members"], "\Beta\Microsoft\Graph\Model\Identity") || is_null($this->_propDict["members"])) {
                return $this->_propDict["members"];
            } else {
                $this->_propDict["members"] = new Identity($this->_propDict["members"]);
                return $this->_propDict["members"];
            }
        }
        return null;
    }

    /**
    * Sets the members
    *
    * @param Identity $val The value to assign to the members
    *
    * @return MembersDeletedEventMessageDetail The MembersDeletedEventMessageDetail
    */
    public function setMembers($val)
    {
        $this->_propDict["members"] = $val;
         return $this;
    }
}
