<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedDeviceRemoteAction File
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
* ManagedDeviceRemoteAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ManagedDeviceRemoteAction extends Enum
{
    /**
    * The Enum ManagedDeviceRemoteAction
    */
    const RETIRE = "retire";
    const DELETE = "delete";
    const FULL_SCAN = "fullScan";
    const QUICK_SCAN = "quickScan";
    const SIGNATURE_UPDATE = "signatureUpdate";
}