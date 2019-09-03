<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PendingContentUpdate File
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
/**
* PendingContentUpdate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class PendingContentUpdate extends Entity
{

    /**
    * Gets the queuedDateTime
    *
    * @return \DateTime The queuedDateTime
    */
    public function getQueuedDateTime()
    {
        if (array_key_exists("queuedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["queuedDateTime"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["queuedDateTime"];
            } else {
                $this->_propDict["queuedDateTime"] = new \DateTime($this->_propDict["queuedDateTime"]);
                return $this->_propDict["queuedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the queuedDateTime
    *
    * @param \DateTime $val The value to assign to the queuedDateTime
    *
    * @return PendingContentUpdate The PendingContentUpdate
    */
    public function setQueuedDateTime($val)
    {
        $this->_propDict["queuedDateTime"] = $val;
         return $this;
    }
}
