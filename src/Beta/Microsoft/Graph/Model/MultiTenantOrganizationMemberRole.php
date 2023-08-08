<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MultiTenantOrganizationMemberRole File
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
* MultiTenantOrganizationMemberRole class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MultiTenantOrganizationMemberRole extends Enum
{
    /**
    * The Enum MultiTenantOrganizationMemberRole
    */
    const OWNER = "owner";
    const MEMBER = "member";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
