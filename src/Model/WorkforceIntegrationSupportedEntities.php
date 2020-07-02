<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkforceIntegrationSupportedEntities File
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
* WorkforceIntegrationSupportedEntities class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WorkforceIntegrationSupportedEntities extends Enum
{
    /**
    * The Enum WorkforceIntegrationSupportedEntities
    */
    const NONE = "none";
    const SHIFT = "shift";
    const SWAP_REQUEST = "swapRequest";
    const USER_SHIFT_PREFERENCES = "userShiftPreferences";
    const OPEN_SHIFT = "openShift";
    const OPEN_SHIFT_REQUEST = "openShiftRequest";
    const OFFER_SHIFT_REQUEST = "offerShiftRequest";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}