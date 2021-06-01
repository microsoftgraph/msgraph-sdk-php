<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChannelRenamedEventMessageDetail File
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
* ChannelRenamedEventMessageDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChannelRenamedEventMessageDetail extends EventMessageDetail
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.channelRenamedEventMessageDetail");
    }

    /**
    * Gets the channelDisplayName
    *
    * @return string|null The channelDisplayName
    */
    public function getChannelDisplayName()
    {
        if (array_key_exists("channelDisplayName", $this->_propDict)) {
            return $this->_propDict["channelDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the channelDisplayName
    *
    * @param string $val The value of the channelDisplayName
    *
    * @return ChannelRenamedEventMessageDetail
    */
    public function setChannelDisplayName($val)
    {
        $this->_propDict["channelDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the channelId
    *
    * @return string|null The channelId
    */
    public function getChannelId()
    {
        if (array_key_exists("channelId", $this->_propDict)) {
            return $this->_propDict["channelId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the channelId
    *
    * @param string $val The value of the channelId
    *
    * @return ChannelRenamedEventMessageDetail
    */
    public function setChannelId($val)
    {
        $this->_propDict["channelId"] = $val;
        return $this;
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
    * @return ChannelRenamedEventMessageDetail The ChannelRenamedEventMessageDetail
    */
    public function setInitiator($val)
    {
        $this->_propDict["initiator"] = $val;
         return $this;
    }
}
