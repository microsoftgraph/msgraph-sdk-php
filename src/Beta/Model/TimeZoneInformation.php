<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TimeZoneInformation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* TimeZoneInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class TimeZoneInformation extends Entity
{
    /**
    * Gets the alias
    *
    * @return string The alias
    */
    public function getAlias()
    {
        if (array_key_exists("alias", $this->_propDict)) {
            return $this->_propDict["alias"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alias
    *
    * @param string $val The value of the alias
    *
    * @return TimeZoneInformation
    */
    public function setAlias($val)
    {
        $this->_propDict["alias"] = $val;
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
    * @param string $val The value of the displayName
    *
    * @return TimeZoneInformation
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
}
