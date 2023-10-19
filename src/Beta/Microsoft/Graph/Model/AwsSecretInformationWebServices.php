<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AwsSecretInformationWebServices File
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
* AwsSecretInformationWebServices class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AwsSecretInformationWebServices extends Enum
{
    /**
    * The Enum AwsSecretInformationWebServices
    */
    const SECRETS_MANAGER = "secretsManager";
    const CERTIFICATE_AUTHORITY = "certificateAuthority";
    const CLOUD_HSM = "cloudHsm";
    const CERTIFICATE_MANAGER = "certificateManager";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
