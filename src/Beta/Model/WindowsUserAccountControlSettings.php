<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsUserAccountControlSettings File
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

use Microsoft\Graph\Core\Enum;

/**
* WindowsUserAccountControlSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsUserAccountControlSettings extends Enum
{
    /**
    * The Enum WindowsUserAccountControlSettings
    */
    const USER_DEFINED = "userDefined";
    const ALWAYS_NOTIFY = "alwaysNotify";
    const NOTIFY_ON_APP_CHANGES = "notifyOnAppChanges";
    const NOTIFY_ON_APP_CHANGES_WITHOUT_DIMMING = "notifyOnAppChangesWithoutDimming";
    const NEVER_NOTIFY = "neverNotify";
}