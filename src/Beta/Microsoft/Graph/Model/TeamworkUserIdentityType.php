<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkUserIdentityType File
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
* TeamworkUserIdentityType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkUserIdentityType extends Enum
{
    /**
    * The Enum TeamworkUserIdentityType
    */
    const AAD_USER = "aadUser";
    const ON_PREMISE_AAD_USER = "onPremiseAadUser";
    const ANONYMOUS_GUEST = "anonymousGuest";
    const FEDERATED_USER = "federatedUser";
    const PERSONAL_MICROSOFT_ACCOUNT_USER = "personalMicrosoftAccountUser";
    const SKYPE_USER = "skypeUser";
    const PHONE_USER = "phoneUser";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
