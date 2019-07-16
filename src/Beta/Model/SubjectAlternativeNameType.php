<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SubjectAlternativeNameType File
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
* SubjectAlternativeNameType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class SubjectAlternativeNameType extends Enum
{
    /**
    * The Enum SubjectAlternativeNameType
    */
    const NONE = "none";
    const EMAIL_ADDRESS = "emailAddress";
    const USER_PRINCIPAL_NAME = "userPrincipalName";
    const CUSTOM_AZURE_AD_ATTRIBUTE = "customAzureADAttribute";
    const DOMAIN_NAME_SERVICE = "domainNameService";
}