<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TemplateApplicationLevel File
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
* TemplateApplicationLevel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TemplateApplicationLevel extends Enum
{
    /**
    * The Enum TemplateApplicationLevel
    */
    const NONE = "none";
    const NEW_PARTNERS = "newPartners";
    const EXISTING_PARTNERS = "existingPartners";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
