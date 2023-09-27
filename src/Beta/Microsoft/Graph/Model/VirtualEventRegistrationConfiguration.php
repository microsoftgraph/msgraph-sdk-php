<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VirtualEventRegistrationConfiguration File
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
* VirtualEventRegistrationConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VirtualEventRegistrationConfiguration extends Entity
{
    /**
    * Gets the capacity
    * Total capacity of the virtual event.
    *
    * @return int|null The capacity
    */
    public function getCapacity()
    {
        if (array_key_exists("capacity", $this->_propDict)) {
            return $this->_propDict["capacity"];
        } else {
            return null;
        }
    }

    /**
    * Sets the capacity
    * Total capacity of the virtual event.
    *
    * @param int $val The capacity
    *
    * @return VirtualEventRegistrationConfiguration
    */
    public function setCapacity($val)
    {
        $this->_propDict["capacity"] = intval($val);
        return $this;
    }

    /**
    * Gets the registrationWebUrl
    * Registration URL of the virtual event.
    *
    * @return string|null The registrationWebUrl
    */
    public function getRegistrationWebUrl()
    {
        if (array_key_exists("registrationWebUrl", $this->_propDict)) {
            return $this->_propDict["registrationWebUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the registrationWebUrl
    * Registration URL of the virtual event.
    *
    * @param string $val The registrationWebUrl
    *
    * @return VirtualEventRegistrationConfiguration
    */
    public function setRegistrationWebUrl($val)
    {
        $this->_propDict["registrationWebUrl"] = $val;
        return $this;
    }


     /**
     * Gets the questions
    * Registration questions.
     *
     * @return array|null The questions
     */
    public function getQuestions()
    {
        if (array_key_exists("questions", $this->_propDict)) {
           return $this->_propDict["questions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the questions
    * Registration questions.
    *
    * @param VirtualEventRegistrationQuestion[] $val The questions
    *
    * @return VirtualEventRegistrationConfiguration
    */
    public function setQuestions($val)
    {
        $this->_propDict["questions"] = $val;
        return $this;
    }

}
