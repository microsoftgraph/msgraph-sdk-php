<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BitLockerRecoveryPasswordRotationType File
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
* BitLockerRecoveryPasswordRotationType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class BitLockerRecoveryPasswordRotationType extends Enum
{
    /**
    * The Enum BitLockerRecoveryPasswordRotationType
    */
    const NOT_CONFIGURED = "notConfigured";
    const DISABLED = "disabled";
    const ENABLED_FOR_AZURE_AD = "enabledForAzureAd";
    const ENABLED_FOR_AZURE_AD_AND_HYBRID = "enabledForAzureAdAndHybrid";
}