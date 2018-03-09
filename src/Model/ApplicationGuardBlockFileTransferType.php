<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApplicationGuardBlockFileTransferType File
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
* ApplicationGuardBlockFileTransferType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ApplicationGuardBlockFileTransferType extends Enum
{
    /**
    * The Enum ApplicationGuardBlockFileTransferType
    */
    const NOT_CONFIGURED = "notConfigured";
    const BLOCK_IMAGE_AND_TEXT_FILE = "blockImageAndTextFile";
    const BLOCK_IMAGE_FILE = "blockImageFile";
    const BLOCK_NONE = "blockNone";
    const BLOCK_TEXT_FILE = "blockTextFile";
}