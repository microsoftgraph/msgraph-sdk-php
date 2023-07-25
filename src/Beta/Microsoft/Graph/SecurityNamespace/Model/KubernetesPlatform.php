<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* KubernetesPlatform File
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
* KubernetesPlatform class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class KubernetesPlatform extends Enum
{
    /**
    * The Enum KubernetesPlatform
    */
    const UNKNOWN = "unknown";
    const AKS = "aks";
    const EKS = "eks";
    const GKE = "gke";
    const ARC = "arc";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
