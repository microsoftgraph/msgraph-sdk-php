<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DerivedCredentialProviderType File
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
* DerivedCredentialProviderType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DerivedCredentialProviderType extends Enum
{
    /**
    * The Enum DerivedCredentialProviderType
    */
    const NOT_CONFIGURED = "notConfigured";
    const ENTRUST_DATA_CARD = "entrustDataCard";
    const PUREBRED = "purebred";
    const X_TEC = "xTec";
    const INTERCEDE = "intercede";
}