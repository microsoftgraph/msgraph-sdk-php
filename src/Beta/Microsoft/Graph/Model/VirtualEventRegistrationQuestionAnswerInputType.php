<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VirtualEventRegistrationQuestionAnswerInputType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* VirtualEventRegistrationQuestionAnswerInputType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VirtualEventRegistrationQuestionAnswerInputType extends Enum
{
    /**
    * The Enum VirtualEventRegistrationQuestionAnswerInputType
    */
    const TEXT = "text";
    const MULTILINE_TEXT = "multilineText";
    const SINGLE_CHOICE = "singleChoice";
    const MULTI_CHOICE = "multiChoice";
    const BOOLEAN = "boolean";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
