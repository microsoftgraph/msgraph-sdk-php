<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintJobStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* PrintJobStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintJobStatus extends Entity
{

    /**
    * Gets the processingState
    *
    * @return PrintJobProcessingState The processingState
    */
    public function getProcessingState()
    {
        if (array_key_exists("processingState", $this->_propDict)) {
            if (is_a($this->_propDict["processingState"], "Beta\Microsoft\Graph\Model\PrintJobProcessingState")) {
                return $this->_propDict["processingState"];
            } else {
                $this->_propDict["processingState"] = new PrintJobProcessingState($this->_propDict["processingState"]);
                return $this->_propDict["processingState"];
            }
        }
        return null;
    }

    /**
    * Sets the processingState
    *
    * @param PrintJobProcessingState $val The value to assign to the processingState
    *
    * @return PrintJobStatus The PrintJobStatus
    */
    public function setProcessingState($val)
    {
        $this->_propDict["processingState"] = $val;
         return $this;
    }
    /**
    * Gets the processingStateDescription
    *
    * @return string The processingStateDescription
    */
    public function getProcessingStateDescription()
    {
        if (array_key_exists("processingStateDescription", $this->_propDict)) {
            return $this->_propDict["processingStateDescription"];
        } else {
            return null;
        }
    }

    /**
    * Sets the processingStateDescription
    *
    * @param string $val The value of the processingStateDescription
    *
    * @return PrintJobStatus
    */
    public function setProcessingStateDescription($val)
    {
        $this->_propDict["processingStateDescription"] = $val;
        return $this;
    }
    /**
    * Gets the acquiredByPrinter
    *
    * @return bool The acquiredByPrinter
    */
    public function getAcquiredByPrinter()
    {
        if (array_key_exists("acquiredByPrinter", $this->_propDict)) {
            return $this->_propDict["acquiredByPrinter"];
        } else {
            return null;
        }
    }

    /**
    * Sets the acquiredByPrinter
    *
    * @param bool $val The value of the acquiredByPrinter
    *
    * @return PrintJobStatus
    */
    public function setAcquiredByPrinter($val)
    {
        $this->_propDict["acquiredByPrinter"] = $val;
        return $this;
    }
}
