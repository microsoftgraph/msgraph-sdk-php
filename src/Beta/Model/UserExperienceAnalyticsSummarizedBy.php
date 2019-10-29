<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsSummarizedBy File
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
* UserExperienceAnalyticsSummarizedBy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class UserExperienceAnalyticsSummarizedBy extends Enum
{
    /**
    * The Enum UserExperienceAnalyticsSummarizedBy
    */
    const NONE = "none";
    const MODEL = "model";
    const ALL_REGRESSIONS = "allRegressions";
    const MODEL_REGRESSION = "modelRegression";
    const MANUFACTURER_REGRESSION = "manufacturerRegression";
    const OPERATING_SYSTEM_VERSION_REGRESSION = "operatingSystemVersionRegression";
}