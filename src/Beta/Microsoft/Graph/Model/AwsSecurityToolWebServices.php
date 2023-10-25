<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AwsSecurityToolWebServices File
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
* AwsSecurityToolWebServices class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AwsSecurityToolWebServices extends Enum
{
    /**
    * The Enum AwsSecurityToolWebServices
    */
    const MACIE = "macie";
    const WAF_SHIELD = "wafShield";
    const CLOUD_TRAIL = "cloudTrail";
    const INSPECTOR = "inspector";
    const SECURITY_HUB = "securityHub";
    const DETECTIVE = "detective";
    const GUARD_DUTY = "guardDuty";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
