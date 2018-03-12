<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VersionAction File
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
* VersionAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class VersionAction extends Entity
{
    /**
    * Gets the newVersion
    *
    * @return string The newVersion
    */
    public function getNewVersion()
    {
        if (array_key_exists("newVersion", $this->_propDict)) {
            return $this->_propDict["newVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the newVersion
    *
    * @param string $val The value of the newVersion
    *
    * @return VersionAction
    */
    public function setNewVersion($val)
    {
        $this->_propDict["newVersion"] = $val;
        return $this;
    }
}
