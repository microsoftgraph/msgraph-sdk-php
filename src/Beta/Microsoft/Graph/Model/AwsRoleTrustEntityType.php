<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AwsRoleTrustEntityType File
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
* AwsRoleTrustEntityType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AwsRoleTrustEntityType extends Enum
{
    /**
    * The Enum AwsRoleTrustEntityType
    */
    const NONE = "none";
    const SERVICE = "service";
    const SSO = "sso";
    const CROSS_ACCOUNT = "crossAccount";
    const WEB_IDENTITY = "webIdentity";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
