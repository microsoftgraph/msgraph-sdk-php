<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UsageStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Networkaccess\Model;

use Microsoft\Graph\Core\Enum;

/**
* UsageStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UsageStatus extends Enum
{
    /**
    * The Enum UsageStatus
    */
    const FREQUENTLY_USED = "frequentlyUsed";
    const RARELY_USED = "rarelyUsed";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
