<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatMessagePolicyViolationVerdictDetailsType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* ChatMessagePolicyViolationVerdictDetailsType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ChatMessagePolicyViolationVerdictDetailsType extends Enum
{
    /**
    * The Enum ChatMessagePolicyViolationVerdictDetailsType
    */
    const NONE = "none";
    const ALLOW_FALSE_POSITIVE_OVERRIDE = "allowFalsePositiveOverride";
    const ALLOW_OVERRIDE_WITHOUT_JUSTIFICATION = "allowOverrideWithoutJustification";
    const ALLOW_OVERRIDE_WITH_JUSTIFICATION = "allowOverrideWithJustification";
}