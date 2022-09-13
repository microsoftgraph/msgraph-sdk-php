<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LifecycleTaskCategory File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IdentityGovernance\Model;

use Microsoft\Graph\Core\Enum;

/**
* LifecycleTaskCategory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LifecycleTaskCategory extends Enum
{
    /**
    * The Enum LifecycleTaskCategory
    */
    const JOINER = "joiner";
    const LEAVER = "leaver";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
