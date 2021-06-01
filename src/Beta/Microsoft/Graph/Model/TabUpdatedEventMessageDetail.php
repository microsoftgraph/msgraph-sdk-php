<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TabUpdatedEventMessageDetail File
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
* TabUpdatedEventMessageDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TabUpdatedEventMessageDetail extends EventMessageDetail
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.tabUpdatedEventMessageDetail");
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
    * @return TabUpdatedEventMessageDetail The TabUpdatedEventMessageDetail
    */
    public function setInitiator($val)
    {
        $this->_propDict["initiator"] = $val;
         return $this;
    }
    /**
    * Gets the tabId
    *
    * @return string|null The tabId
    */
    public function getTabId()
    {
        if (array_key_exists("tabId", $this->_propDict)) {
            return $this->_propDict["tabId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tabId
    *
    * @param string $val The value of the tabId
    *
    * @return TabUpdatedEventMessageDetail
    */
    public function setTabId($val)
    {
        $this->_propDict["tabId"] = $val;
        return $this;
    }
}
