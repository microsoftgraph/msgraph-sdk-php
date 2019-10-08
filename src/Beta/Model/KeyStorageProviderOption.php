<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* KeyStorageProviderOption File
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
* KeyStorageProviderOption class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class KeyStorageProviderOption extends Enum
{
    /**
    * The Enum KeyStorageProviderOption
    */
    const USE_TPM_KSP_OTHERWISE_USE_SOFTWARE_KSP = "useTpmKspOtherwiseUseSoftwareKsp";
    const USE_TPM_KSP_OTHERWISE_FAIL = "useTpmKspOtherwiseFail";
    const USE_PASSPORT_FOR_WORK_KSP_OTHERWISE_FAIL = "usePassportForWorkKspOtherwiseFail";
    const USE_SOFTWARE_KSP = "useSoftwareKsp";
}