<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationJobRestartScope File
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
* SynchronizationJobRestartScope class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class SynchronizationJobRestartScope extends Enum
{
    /**
    * The Enum SynchronizationJobRestartScope
    */
    const FULL = "full";
    const QUARANTINE_STATE = "quarantineState";
    const WATERMARK = "watermark";
    const ESCROWS = "escrows";
    const CONNECTOR_DATA_STORE = "connectorDataStore";
    const NONE = "none";
}