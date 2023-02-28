<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppKeyCredentialRestrictionType File
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
* AppKeyCredentialRestrictionType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppKeyCredentialRestrictionType extends Enum
{
    /**
    * The Enum AppKeyCredentialRestrictionType
    */
    const ASYMMETRIC_KEY_LIFETIME = "asymmetricKeyLifetime";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
