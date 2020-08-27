<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrinterStatus File
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
* PrinterStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrinterStatus extends Entity
{

    /**
    * Gets the processingState
    *
    * @return PrinterProcessingState The processingState
    */
    public function getProcessingState()
    {
        if (array_key_exists("processingState", $this->_propDict)) {
            if (is_a($this->_propDict["processingState"], "Beta\Microsoft\Graph\Model\PrinterProcessingState")) {
                return $this->_propDict["processingState"];
            } else {
                $this->_propDict["processingState"] = new PrinterProcessingState($this->_propDict["processingState"]);
                return $this->_propDict["processingState"];
            }
        }
        return null;
    }

    /**
    * Sets the processingState
    *
    * @param PrinterProcessingState $val The value to assign to the processingState
    *
    * @return PrinterStatus The PrinterStatus
    */
    public function setProcessingState($val)
    {
        $this->_propDict["processingState"] = $val;
         return $this;
    }

    /**
    * Gets the processingStateReasons
    *
    * @return PrinterProcessingStateReason The processingStateReasons
    */
    public function getProcessingStateReasons()
    {
        if (array_key_exists("processingStateReasons", $this->_propDict)) {
            if (is_a($this->_propDict["processingStateReasons"], "Beta\Microsoft\Graph\Model\PrinterProcessingStateReason")) {
                return $this->_propDict["processingStateReasons"];
            } else {
                $this->_propDict["processingStateReasons"] = new PrinterProcessingStateReason($this->_propDict["processingStateReasons"]);
                return $this->_propDict["processingStateReasons"];
            }
        }
        return null;
    }

    /**
    * Sets the processingStateReasons
    *
    * @param PrinterProcessingStateReason $val The value to assign to the processingStateReasons
    *
    * @return PrinterStatus The PrinterStatus
    */
    public function setProcessingStateReasons($val)
    {
        $this->_propDict["processingStateReasons"] = $val;
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
    * @return PrinterStatus
    */
    public function setProcessingStateDescription($val)
    {
        $this->_propDict["processingStateDescription"] = $val;
        return $this;
    }
}
