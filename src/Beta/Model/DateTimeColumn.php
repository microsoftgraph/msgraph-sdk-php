<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DateTimeColumn File
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
* DateTimeColumn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DateTimeColumn extends Entity
{
    /**
    * Gets the displayAs
    * How the value should be presented in the UX. Must be one of default, friendly, or standard. See below for more details. If unspecified, treated as default.
    *
    * @return string The displayAs
    */
    public function getDisplayAs()
    {
        if (array_key_exists("displayAs", $this->_propDict)) {
            return $this->_propDict["displayAs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayAs
    * How the value should be presented in the UX. Must be one of default, friendly, or standard. See below for more details. If unspecified, treated as default.
    *
    * @param string $val The value of the displayAs
    *
    * @return DateTimeColumn
    */
    public function setDisplayAs($val)
    {
        $this->_propDict["displayAs"] = $val;
        return $this;
    }
    /**
    * Gets the format
    * Indicates whether the value should be presented as a date only or a date and time. Must be one of dateOnly or dateTime
    *
    * @return string The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            return $this->_propDict["format"];
        } else {
            return null;
        }
    }

    /**
    * Sets the format
    * Indicates whether the value should be presented as a date only or a date and time. Must be one of dateOnly or dateTime
    *
    * @param string $val The value of the format
    *
    * @return DateTimeColumn
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
        return $this;
    }
}
