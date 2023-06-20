<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnboardingStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Networkaccess\Model;

use Microsoft\Graph\Core\Enum;

/**
* OnboardingStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnboardingStatus extends Enum
{
    /**
    * The Enum OnboardingStatus
    */
    const OFFBOARDED = "offboarded";
    const OFFBOARDING_IN_PROGRESS = "offboardingInProgress";
    const ONBOARDING_IN_PROGRESS = "onboardingInProgress";
    const ONBOARDED = "onboarded";
    const ONBOARDING_ERROR_OCCURRED = "onboardingErrorOccurred";
    const OFFBOARDING_ERROR_OCCURRED = "offboardingErrorOccurred";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
