<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BandwidthCapacityInMbps File
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
* BandwidthCapacityInMbps class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BandwidthCapacityInMbps extends Enum
{
    /**
    * The Enum BandwidthCapacityInMbps
    */
    const MBPS250 = "mbps250";
    const MBPS500 = "mbps500";
    const MBPS750 = "mbps750";
    const MBPS1000 = "mbps1000";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
