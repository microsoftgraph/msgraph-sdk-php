<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NotificationDeliveryPreference File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* NotificationDeliveryPreference class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NotificationDeliveryPreference extends Enum
{
    /**
    * The Enum NotificationDeliveryPreference
    */
    const UNKNOWN = "unknown";
    const DELIVER_IMMEDIETLY = "deliverImmedietly";
    const DELIVER_AFTER_CAMPAIGN_END = "deliverAfterCampaignEnd";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
