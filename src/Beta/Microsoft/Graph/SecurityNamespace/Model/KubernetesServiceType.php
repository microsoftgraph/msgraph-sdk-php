<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* KubernetesServiceType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

use Microsoft\Graph\Core\Enum;

/**
* KubernetesServiceType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class KubernetesServiceType extends Enum
{
    /**
    * The Enum KubernetesServiceType
    */
    const UNKNOWN = "unknown";
    const CLUSTER_IP = "clusterIP";
    const EXTERNAL_NAME = "externalName";
    const NODE_PORT = "nodePort";
    const LOAD_BALANCER = "loadBalancer";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
