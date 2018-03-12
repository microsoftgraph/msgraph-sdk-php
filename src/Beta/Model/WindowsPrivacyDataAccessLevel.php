<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsPrivacyDataAccessLevel File
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
* WindowsPrivacyDataAccessLevel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsPrivacyDataAccessLevel extends Enum
{
    /**
    * The Enum WindowsPrivacyDataAccessLevel
    */
    const NOT_CONFIGURED = "notConfigured";
    const FORCE_ALLOW = "forceAllow";
    const FORCE_DENY = "forceDeny";
    const USER_IN_CONTROL = "userInControl";
}