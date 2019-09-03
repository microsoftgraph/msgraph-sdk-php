<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* StagedFeatureName File
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
* StagedFeatureName class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class StagedFeatureName extends Enum
{
    /**
    * The Enum StagedFeatureName
    */
    const PASSTHROUGH_AUTHENTICATION = "passthroughAuthentication";
    const SEAMLESS_SSO = "seamlessSso";
    const PASSWORD_HASH_SYNC = "passwordHashSync";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}