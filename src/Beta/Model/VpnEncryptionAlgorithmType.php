<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VpnEncryptionAlgorithmType File
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
* VpnEncryptionAlgorithmType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class VpnEncryptionAlgorithmType extends Enum
{
    /**
    * The Enum VpnEncryptionAlgorithmType
    */
    const AES256 = "aes256";
    const DES = "des";
    const TRIPLE_DES = "tripleDes";
    const AES128 = "aes128";
    const AES128_GCM = "aes128Gcm";
    const AES256_GCM = "aes256Gcm";
}