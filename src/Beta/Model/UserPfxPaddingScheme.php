<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserPfxPaddingScheme File
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
* UserPfxPaddingScheme class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class UserPfxPaddingScheme extends Enum
{
    /**
    * The Enum UserPfxPaddingScheme
    */
    const NONE = "none";
    const PKCS1 = "pkcs1";
    const OAEP_SHA1 = "oaepSha1";
    const OAEP_SHA256 = "oaepSha256";
    const OAEP_SHA384 = "oaepSha384";
    const OAEP_SHA512 = "oaepSha512";
}