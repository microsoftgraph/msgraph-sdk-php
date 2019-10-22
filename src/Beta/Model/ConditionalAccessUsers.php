<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessUsers File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* ConditionalAccessUsers class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ConditionalAccessUsers extends Entity
{
    /**
    * Gets the includeUsers
    *
    * @return string The includeUsers
    */
    public function getIncludeUsers()
    {
        if (array_key_exists("includeUsers", $this->_propDict)) {
            return $this->_propDict["includeUsers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeUsers
    *
    * @param string $val The value of the includeUsers
    *
    * @return ConditionalAccessUsers
    */
    public function setIncludeUsers($val)
    {
        $this->_propDict["includeUsers"] = $val;
        return $this;
    }
    /**
    * Gets the excludeUsers
    *
    * @return string The excludeUsers
    */
    public function getExcludeUsers()
    {
        if (array_key_exists("excludeUsers", $this->_propDict)) {
            return $this->_propDict["excludeUsers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludeUsers
    *
    * @param string $val The value of the excludeUsers
    *
    * @return ConditionalAccessUsers
    */
    public function setExcludeUsers($val)
    {
        $this->_propDict["excludeUsers"] = $val;
        return $this;
    }
    /**
    * Gets the includeGroups
    *
    * @return string The includeGroups
    */
    public function getIncludeGroups()
    {
        if (array_key_exists("includeGroups", $this->_propDict)) {
            return $this->_propDict["includeGroups"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeGroups
    *
    * @param string $val The value of the includeGroups
    *
    * @return ConditionalAccessUsers
    */
    public function setIncludeGroups($val)
    {
        $this->_propDict["includeGroups"] = $val;
        return $this;
    }
    /**
    * Gets the excludeGroups
    *
    * @return string The excludeGroups
    */
    public function getExcludeGroups()
    {
        if (array_key_exists("excludeGroups", $this->_propDict)) {
            return $this->_propDict["excludeGroups"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludeGroups
    *
    * @param string $val The value of the excludeGroups
    *
    * @return ConditionalAccessUsers
    */
    public function setExcludeGroups($val)
    {
        $this->_propDict["excludeGroups"] = $val;
        return $this;
    }
    /**
    * Gets the includeRoles
    *
    * @return string The includeRoles
    */
    public function getIncludeRoles()
    {
        if (array_key_exists("includeRoles", $this->_propDict)) {
            return $this->_propDict["includeRoles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeRoles
    *
    * @param string $val The value of the includeRoles
    *
    * @return ConditionalAccessUsers
    */
    public function setIncludeRoles($val)
    {
        $this->_propDict["includeRoles"] = $val;
        return $this;
    }
    /**
    * Gets the excludeRoles
    *
    * @return string The excludeRoles
    */
    public function getExcludeRoles()
    {
        if (array_key_exists("excludeRoles", $this->_propDict)) {
            return $this->_propDict["excludeRoles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludeRoles
    *
    * @param string $val The value of the excludeRoles
    *
    * @return ConditionalAccessUsers
    */
    public function setExcludeRoles($val)
    {
        $this->_propDict["excludeRoles"] = $val;
        return $this;
    }
}
