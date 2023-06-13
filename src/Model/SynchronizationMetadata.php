<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationMetadata File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* SynchronizationMetadata class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SynchronizationMetadata extends Enum
{
    /**
    * The Enum SynchronizationMetadata
    */
    const GALLERY_APPLICATION_IDENTIFIER = "galleryApplicationIdentifier";
    const GALLERY_APPLICATION_KEY = "galleryApplicationKey";
    const IS_O_AUTH_ENABLED = "isOAuthEnabled";
    const IS_SYNCHRONIZATION_AGENT_ASSIGNMENT_REQUIRED = "isSynchronizationAgentAssignmentRequired";
    const IS_SYNCHRONIZATION_AGENT_REQUIRED = "isSynchronizationAgentRequired";
    const IS_SYNCHRONIZATION_IN_PREVIEW = "isSynchronizationInPreview";
    const O_AUTH_SETTINGS = "oAuthSettings";
    const SYNCHRONIZATION_LEARN_MORE_IBIZA_FW_LINK = "synchronizationLearnMoreIbizaFwLink";
    const CONFIGURATION_FIELDS = "configurationFields";
}
