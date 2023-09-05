<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AzureAttestationSettingStatus File
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
* AzureAttestationSettingStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AzureAttestationSettingStatus extends Enum
{
    /**
    * The Enum AzureAttestationSettingStatus
    */
    const NOT_APPLICABLE = "notApplicable";
    const ENABLED = "enabled";
    const DISABLED = "disabled";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
