<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesPublishingType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

use Microsoft\Graph\Core\Enum;

/**
* OnPremisesPublishingType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class OnPremisesPublishingType extends Enum
{
    /**
    * The Enum OnPremisesPublishingType
    */
    const APP_PROXY = "appProxy";
    const EXCHANGE_ONLINE = "exchangeOnline";
    const AUTHENTICATION = "authentication";
    const PROVISIONING = "provisioning";
    const INTUNE_PFX = "intunePfx";
    const OFLINE_DOMAIN_JOIN = "oflineDomainJoin";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}