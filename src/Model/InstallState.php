<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InstallState File
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
* InstallState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class InstallState extends Enum
{
    /**
    * The Enum InstallState
    */
    const NOT_APPLICABLE = "notApplicable";
    const INSTALLED = "installed";
    const FAILED = "failed";
    const NOT_INSTALLED = "notInstalled";
    const UNINSTALL_FAILED = "uninstallFailed";
    const UNKNOWN = "unknown";
}