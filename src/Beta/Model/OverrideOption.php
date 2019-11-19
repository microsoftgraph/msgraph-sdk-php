<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OverrideOption File
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
* OverrideOption class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class OverrideOption extends Enum
{
    /**
    * The Enum OverrideOption
    */
    const NOT_ALLOWED = "notAllowed";
    const ALLOW_FALSE_POSITIVE_OVERRIDE = "allowFalsePositiveOverride";
    const ALLOW_WITH_JUSTIFICATION = "allowWithJustification";
    const ALLOW_WITHOUT_JUSTIFICATION = "allowWithoutJustification";
}