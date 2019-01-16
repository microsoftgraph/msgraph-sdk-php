<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppTroubleshootingHistoryItem File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* MobileAppTroubleshootingHistoryItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MobileAppTroubleshootingHistoryItem extends Entity
{

    /**
    * Gets the occurrenceDateTime
    * Time when the history item occurred.
    *
    * @return \DateTime The occurrenceDateTime
    */
    public function getOccurrenceDateTime()
    {
        if (array_key_exists("occurrenceDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["occurrenceDateTime"], "Microsoft\Graph\Model\\DateTime")) {
                return $this->_propDict["occurrenceDateTime"];
            } else {
                $this->_propDict["occurrenceDateTime"] = new \DateTime($this->_propDict["occurrenceDateTime"]);
                return $this->_propDict["occurrenceDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the occurrenceDateTime
    * Time when the history item occurred.
    *
    * @param \DateTime $val The value to assign to the occurrenceDateTime
    *
    * @return MobileAppTroubleshootingHistoryItem The MobileAppTroubleshootingHistoryItem
    */
    public function setOccurrenceDateTime($val)
    {
        $this->_propDict["occurrenceDateTime"] = $val;
         return $this;
    }
}
