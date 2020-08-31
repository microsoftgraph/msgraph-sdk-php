<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnlineMeetingProviderType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* OnlineMeetingProviderType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnlineMeetingProviderType extends Enum
{
    /**
    * The Enum OnlineMeetingProviderType
    */
    const UNKNOWN = "unknown";
    const SKYPE_FOR_BUSINESS = "skypeForBusiness";
    const SKYPE_FOR_CONSUMER = "skypeForConsumer";
    const TEAMS_FOR_BUSINESS = "teamsForBusiness";
}