<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MediaStreamDirection File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\CallRecords\Model;

use Microsoft\Graph\Core\Enum;

/**
* MediaStreamDirection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MediaStreamDirection extends Enum
{
    /**
    * The Enum MediaStreamDirection
    */
    const CALLER_TO_CALLEE = "callerToCallee";
    const CALLEE_TO_CALLER = "calleeToCaller";
}