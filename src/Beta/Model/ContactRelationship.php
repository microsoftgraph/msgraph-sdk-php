<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContactRelationship File
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
* ContactRelationship class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ContactRelationship extends Enum
{
    /**
    * The Enum ContactRelationship
    */
    const PARENT = "parent";
    const RELATIVE = "relative";
    const AIDE = "aide";
    const DOCTOR = "doctor";
    const GUARDIAN = "guardian";
    const CHILD = "child";
    const OTHER = "other";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}