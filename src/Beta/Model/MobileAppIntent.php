<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppIntent File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* MobileAppIntent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MobileAppIntent extends Enum
{
    /**
    * The Enum MobileAppIntent
    */
    const AVAILABLE = "available";
    const NOT_AVAILABLE = "notAvailable";
    const REQUIRED_INSTALL = "requiredInstall";
    const REQUIRED_UNINSTALL = "requiredUninstall";
    const REQUIRED_AND_AVAILABLE_INSTALL = "requiredAndAvailableInstall";
    const AVAILABLE_INSTALL_WITHOUT_ENROLLMENT = "availableInstallWithoutEnrollment";
    const EXCLUDE = "exclude";
}