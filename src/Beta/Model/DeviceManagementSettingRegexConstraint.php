<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSettingRegexConstraint File
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
* DeviceManagementSettingRegexConstraint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceManagementSettingRegexConstraint extends DeviceManagementConstraint
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.deviceManagementSettingRegexConstraint");
    }

    /**
    * Gets the regex
    * The RegEx pattern to match against
    *
    * @return string The regex
    */
    public function getRegex()
    {
        if (array_key_exists("regex", $this->_propDict)) {
            return $this->_propDict["regex"];
        } else {
            return null;
        }
    }

    /**
    * Sets the regex
    * The RegEx pattern to match against
    *
    * @param string $val The value of the regex
    *
    * @return DeviceManagementSettingRegexConstraint
    */
    public function setRegex($val)
    {
        $this->_propDict["regex"] = $val;
        return $this;
    }
}
