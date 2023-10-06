<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PermissionsDefinitionIdentityType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* PermissionsDefinitionIdentityType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PermissionsDefinitionIdentityType extends Enum
{
    /**
    * The Enum PermissionsDefinitionIdentityType
    */
    const USER = "user";
    const ROLE = "role";
    const APPLICATION = "application";
    const MANAGED_IDENTITY = "managedIdentity";
    const SERVICE_ACCOUNT = "serviceAccount";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
