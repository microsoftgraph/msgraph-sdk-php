<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FreeBusyStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* FreeBusyStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FreeBusyStatus extends Enum
{
    /**
    * The Enum FreeBusyStatus
    */
    const FREE = "free";
    const TENTATIVE = "tentative";
    const UNKNOWN = "unknown";
    const BUSY = "busy";
    const OOF = "oof";
    const WORKING_ELSEWHERE = "workingElsewhere";
}