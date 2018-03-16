<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BitLockerEncryptionMethod File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* BitLockerEncryptionMethod class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class BitLockerEncryptionMethod extends Enum
{
    /**
    * The Enum BitLockerEncryptionMethod
    */
    const AES_CBC128 = "aesCbc128";
    const AES_CBC256 = "aesCbc256";
    const XTS_AES128 = "xtsAes128";
    const XTS_AES256 = "xtsAes256";
}