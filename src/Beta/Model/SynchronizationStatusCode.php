<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationStatusCode File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

use Microsoft\Graph\Core\Enum;

/**
* SynchronizationStatusCode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class SynchronizationStatusCode extends Enum
{
    /**
    * The Enum SynchronizationStatusCode
    */
    const NOT_CONFIGURED = "notConfigured";
    const NOT_RUN = "notRun";
    const ACTIVE = "active";
    const PAUSED = "paused";
    const QUARANTINE = "quarantine";
}