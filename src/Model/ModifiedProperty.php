<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ModifiedProperty File
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
* ModifiedProperty class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ModifiedProperty extends Entity
{
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    *
    * @param string $val The value of the displayName
    *
    * @return ModifiedProperty
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the oldValue
    *
    * @return string The oldValue
    */
    public function getOldValue()
    {
        if (array_key_exists("oldValue", $this->_propDict)) {
            return $this->_propDict["oldValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the oldValue
    *
    * @param string $val The value of the oldValue
    *
    * @return ModifiedProperty
    */
    public function setOldValue($val)
    {
        $this->_propDict["oldValue"] = $val;
        return $this;
    }
    /**
    * Gets the newValue
    *
    * @return string The newValue
    */
    public function getNewValue()
    {
        if (array_key_exists("newValue", $this->_propDict)) {
            return $this->_propDict["newValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the newValue
    *
    * @param string $val The value of the newValue
    *
    * @return ModifiedProperty
    */
    public function setNewValue($val)
    {
        $this->_propDict["newValue"] = $val;
        return $this;
    }
}
