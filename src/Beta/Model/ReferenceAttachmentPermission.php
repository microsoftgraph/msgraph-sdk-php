<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ReferenceAttachmentPermission File
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
* ReferenceAttachmentPermission class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ReferenceAttachmentPermission extends Enum
{
    /**
    * The Enum ReferenceAttachmentPermission
    */
    const OTHER = "other";
    const VIEW = "view";
    const EDIT = "edit";
    const ANONYMOUS_VIEW = "anonymousView";
    const ANONYMOUS_EDIT = "anonymousEdit";
    const ORGANIZATION_VIEW = "organizationView";
    const ORGANIZATION_EDIT = "organizationEdit";
}