<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementExchangeConnectorType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* DeviceManagementExchangeConnectorType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceManagementExchangeConnectorType extends Enum
{
    /**
    * The Enum DeviceManagementExchangeConnectorType
    */
    const ON_PREMISES = "onPremises";
    const HOSTED = "hosted";
    const SERVICE_TO_SERVICE = "serviceToService";
    const DEDICATED = "dedicated";
}