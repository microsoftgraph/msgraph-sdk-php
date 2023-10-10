<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSAppScript File
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
* MacOSAppScript class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSAppScript extends Entity
{
    /**
    * Gets the scriptContent
    * The base64 encoded shell script (.sh) that assists managing macOS apps.
    *
    * @return string|null The scriptContent
    */
    public function getScriptContent()
    {
        if (array_key_exists("scriptContent", $this->_propDict)) {
            return $this->_propDict["scriptContent"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scriptContent
    * The base64 encoded shell script (.sh) that assists managing macOS apps.
    *
    * @param string $val The value of the scriptContent
    *
    * @return MacOSAppScript
    */
    public function setScriptContent($val)
    {
        $this->_propDict["scriptContent"] = $val;
        return $this;
    }
}
