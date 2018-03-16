<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsStartMenuAppListVisibilityType File
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

use Microsoft\Graph\Core\Enum;

/**
* WindowsStartMenuAppListVisibilityType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsStartMenuAppListVisibilityType extends Enum
{
    /**
    * The Enum WindowsStartMenuAppListVisibilityType
    */
    const USER_DEFINED = "userDefined";
    const COLLAPSE = "collapse";
    const REMOVE = "remove";
    const DISABLE_SETTINGS_APP = "disableSettingsApp";
}