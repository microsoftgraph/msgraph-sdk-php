<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DefenderSecurityCenterITContactDisplayType File
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
* DefenderSecurityCenterITContactDisplayType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DefenderSecurityCenterITContactDisplayType extends Enum
{
    /**
    * The Enum DefenderSecurityCenterITContactDisplayType
    */
    const NOT_CONFIGURED = "notConfigured";
    const DISPLAY_IN_APP_AND_IN_NOTIFICATIONS = "displayInAppAndInNotifications";
    const DISPLAY_ONLY_IN_APP = "displayOnlyInApp";
    const DISPLAY_ONLY_IN_NOTIFICATIONS = "displayOnlyInNotifications";
}