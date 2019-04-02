<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ControlScore File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* ControlScore class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ControlScore extends Entity
{
    /**
    * Gets the controlCategory
    *
    * @return string The controlCategory
    */
    public function getControlCategory()
    {
        if (array_key_exists("controlCategory", $this->_propDict)) {
            return $this->_propDict["controlCategory"];
        } else {
            return null;
        }
    }

    /**
    * Sets the controlCategory
    *
    * @param string $val The value of the controlCategory
    *
    * @return ControlScore
    */
    public function setControlCategory($val)
    {
        $this->_propDict["controlCategory"] = $val;
        return $this;
    }
    /**
    * Gets the controlName
    *
    * @return string The controlName
    */
    public function getControlName()
    {
        if (array_key_exists("controlName", $this->_propDict)) {
            return $this->_propDict["controlName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the controlName
    *
    * @param string $val The value of the controlName
    *
    * @return ControlScore
    */
    public function setControlName($val)
    {
        $this->_propDict["controlName"] = $val;
        return $this;
    }
    /**
    * Gets the description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    *
    * @param string $val The value of the description
    *
    * @return ControlScore
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the score
    *
    * @return float The score
    */
    public function getScore()
    {
        if (array_key_exists("score", $this->_propDict)) {
            return $this->_propDict["score"];
        } else {
            return null;
        }
    }

    /**
    * Sets the score
    *
    * @param float $val The value of the score
    *
    * @return ControlScore
    */
    public function setScore($val)
    {
        $this->_propDict["score"] = $val;
        return $this;
    }
}
