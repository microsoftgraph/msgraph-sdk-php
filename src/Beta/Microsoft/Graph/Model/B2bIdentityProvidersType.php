<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* B2bIdentityProvidersType File
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
* B2bIdentityProvidersType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class B2bIdentityProvidersType extends Enum
{
    /**
    * The Enum B2bIdentityProvidersType
    */
    const AZURE_ACTIVE_DIRECTORY = "azureActiveDirectory";
    const EXTERNAL_FEDERATION = "externalFederation";
    const SOCIAL_IDENTITY_PROVIDERS = "socialIdentityProviders";
    const EMAIL_ONE_TIME_PASSCODE = "emailOneTimePasscode";
    const MICROSOFT_ACCOUNT = "microsoftAccount";
    const DEFAULT_CONFIGURED_IDP = "defaultConfiguredIdp";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
