<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProgramControlType File
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
* ProgramControlType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ProgramControlType extends Entity
{
    /**
    * Gets the controlTypeGroupId
    *
    * @return string The controlTypeGroupId
    */
    public function getControlTypeGroupId()
    {
        if (array_key_exists("controlTypeGroupId", $this->_propDict)) {
            return $this->_propDict["controlTypeGroupId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the controlTypeGroupId
    *
    * @param string $val The controlTypeGroupId
    *
    * @return ProgramControlType
    */
    public function setControlTypeGroupId($val)
    {
        $this->_propDict["controlTypeGroupId"] = $val;
        return $this;
    }
    
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
    * @param string $val The displayName
    *
    * @return ProgramControlType
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
}