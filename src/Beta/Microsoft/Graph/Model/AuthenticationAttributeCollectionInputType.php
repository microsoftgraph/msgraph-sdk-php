<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationAttributeCollectionInputType File
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
* AuthenticationAttributeCollectionInputType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationAttributeCollectionInputType extends Enum
{
    /**
    * The Enum AuthenticationAttributeCollectionInputType
    */
    const TEXT = "text";
    const RADIO_SINGLE_SELECT = "radioSingleSelect";
    const CHECKBOX_MULTI_SELECT = "checkboxMultiSelect";
    const BOOLEAN = "boolean";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
