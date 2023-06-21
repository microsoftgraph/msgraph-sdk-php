<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LastSignIn File
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
* LastSignIn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LastSignIn extends Entity
{

    /**
    * Gets the interactiveDateTime
    *
    * @return \DateTime|null The interactiveDateTime
    */
    public function getInteractiveDateTime()
    {
        if (array_key_exists("interactiveDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["interactiveDateTime"], "\DateTime") || is_null($this->_propDict["interactiveDateTime"])) {
                return $this->_propDict["interactiveDateTime"];
            } else {
                $this->_propDict["interactiveDateTime"] = new \DateTime($this->_propDict["interactiveDateTime"]);
                return $this->_propDict["interactiveDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the interactiveDateTime
    *
    * @param \DateTime $val The value to assign to the interactiveDateTime
    *
    * @return LastSignIn The LastSignIn
    */
    public function setInteractiveDateTime($val)
    {
        $this->_propDict["interactiveDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the nonInteractiveDateTime
    *
    * @return \DateTime|null The nonInteractiveDateTime
    */
    public function getNonInteractiveDateTime()
    {
        if (array_key_exists("nonInteractiveDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["nonInteractiveDateTime"], "\DateTime") || is_null($this->_propDict["nonInteractiveDateTime"])) {
                return $this->_propDict["nonInteractiveDateTime"];
            } else {
                $this->_propDict["nonInteractiveDateTime"] = new \DateTime($this->_propDict["nonInteractiveDateTime"]);
                return $this->_propDict["nonInteractiveDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the nonInteractiveDateTime
    *
    * @param \DateTime $val The value to assign to the nonInteractiveDateTime
    *
    * @return LastSignIn The LastSignIn
    */
    public function setNonInteractiveDateTime($val)
    {
        $this->_propDict["nonInteractiveDateTime"] = $val;
         return $this;
    }
}
