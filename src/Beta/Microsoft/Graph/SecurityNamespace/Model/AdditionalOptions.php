<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AdditionalOptions File
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
* AdditionalOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AdditionalOptions extends Enum
{
    /**
    * The Enum AdditionalOptions
    */
    const NONE = "none";
    const TEAMS_AND_YAMMER_CONVERSATIONS = "teamsAndYammerConversations";
    const CLOUD_ATTACHMENTS = "cloudAttachments";
    const ALL_DOCUMENT_VERSIONS = "allDocumentVersions";
    const SUBFOLDER_CONTENTS = "subfolderContents";
    const LIST_ATTACHMENTS = "listAttachments";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
