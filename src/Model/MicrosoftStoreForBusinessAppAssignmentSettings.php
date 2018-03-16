<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftStoreForBusinessAppAssignmentSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* MicrosoftStoreForBusinessAppAssignmentSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class MicrosoftStoreForBusinessAppAssignmentSettings extends MobileAppAssignmentSettings
{
    /**
    * Gets the useDeviceContext
    * Whether or not to use device execution context for Microsoft Store for Business mobile app.
    *
    * @return bool The useDeviceContext
    */
    public function getUseDeviceContext()
    {
        if (array_key_exists("useDeviceContext", $this->_propDict)) {
            return $this->_propDict["useDeviceContext"];
        } else {
            return null;
        }
    }

    /**
    * Sets the useDeviceContext
    * Whether or not to use device execution context for Microsoft Store for Business mobile app.
    *
    * @param bool $val The value of the useDeviceContext
    *
    * @return MicrosoftStoreForBusinessAppAssignmentSettings
    */
    public function setUseDeviceContext($val)
    {
        $this->_propDict["useDeviceContext"] = $val;
        return $this;
    }
}
