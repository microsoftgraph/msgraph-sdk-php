<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApplicationPermissionRequired File
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
* ApplicationPermissionRequired class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ApplicationPermissionRequired extends Enum
{
    /**
    * The Enum ApplicationPermissionRequired
    */
    const UNKNOWN = "unknown";
    const ANONYMOUS = "anonymous";
    const GUEST = "guest";
    const USER = "user";
    const ADMINISTRATOR = "administrator";
    const SYSTEM = "system";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}