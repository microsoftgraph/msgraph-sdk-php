<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SensitivityLabelTarget File
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
* SensitivityLabelTarget class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SensitivityLabelTarget extends Enum
{
    /**
    * The Enum SensitivityLabelTarget
    */
    const EMAIL = "email";
    const SITE = "site";
    const UNIFIED_GROUP = "unifiedGroup";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}