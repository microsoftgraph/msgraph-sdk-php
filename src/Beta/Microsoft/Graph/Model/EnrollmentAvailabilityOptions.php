<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EnrollmentAvailabilityOptions File
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
* EnrollmentAvailabilityOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EnrollmentAvailabilityOptions extends Enum
{
    /**
    * The Enum EnrollmentAvailabilityOptions
    */
    const AVAILABLE_WITH_PROMPTS = "availableWithPrompts";
    const AVAILABLE_WITHOUT_PROMPTS = "availableWithoutPrompts";
    const UNAVAILABLE = "unavailable";
}