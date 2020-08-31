<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ResponseType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* ResponseType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ResponseType extends Enum
{
    /**
    * The Enum ResponseType
    */
    const NONE = "none";
    const ORGANIZER = "organizer";
    const TENTATIVELY_ACCEPTED = "tentativelyAccepted";
    const ACCEPTED = "accepted";
    const DECLINED = "declined";
    const NOT_RESPONDED = "notResponded";
}