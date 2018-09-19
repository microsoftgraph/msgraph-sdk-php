<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ThreatType File
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
* ThreatType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ThreatType extends Enum
{
    /**
    * The Enum ThreatType
    */
    const UNKNOWN = "unknown";
    const BOTNET = "botnet";
    const BRUTE_FORCE = "bruteForce";
    const C2 = "c2";
    const DARKNET = "darknet";
    const MALICIOUS_URL = "maliciousUrl";
    const MALWARE = "malware";
    const PHISHING = "phishing";
    const PROXY = "proxy";
    const WATCH_LIST = "watchList";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}