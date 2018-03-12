<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppLockerApplicationControlType File
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
* AppLockerApplicationControlType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AppLockerApplicationControlType extends Enum
{
    /**
    * The Enum AppLockerApplicationControlType
    */
    const NOT_CONFIGURED = "notConfigured";
    const ENFORCE_COMPONENTS_AND_STORE_APPS = "enforceComponentsAndStoreApps";
    const AUDIT_COMPONENTS_AND_STORE_APPS = "auditComponentsAndStoreApps";
    const ENFORCE_COMPONENTS_STORE_APPS_AND_SMARTLOCKER = "enforceComponentsStoreAppsAndSmartlocker";
    const AUDIT_COMPONENTS_STORE_APPS_AND_SMARTLOCKER = "auditComponentsStoreAppsAndSmartlocker";
}