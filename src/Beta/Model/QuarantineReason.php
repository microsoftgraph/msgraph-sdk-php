<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* QuarantineReason File
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
* QuarantineReason class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class QuarantineReason extends Enum
{
    /**
    * The Enum QuarantineReason
    */
    const ENCOUNTERED_BASE_ESCROW_THRESHOLD = "encounteredBaseEscrowThreshold";
    const ENCOUNTERED_TOTAL_ESCROW_THRESHOLD = "encounteredTotalEscrowThreshold";
    const ENCOUNTERED_ESCROW_PROPORTION_THRESHOLD = "encounteredEscrowProportionThreshold";
    const ENCOUNTERED_QUARANTINE_EXCEPTION = "encounteredQuarantineException";
    const UNKNOWN = "unknown";
}