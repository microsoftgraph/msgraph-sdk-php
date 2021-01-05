<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatActivityStatistics File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* ChatActivityStatistics class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChatActivityStatistics extends ActivityStatistics
{
    /**
    * Gets the afterHours
    *
    * @return Duration The afterHours
    */
    public function getAfterHours()
    {
        if (array_key_exists("afterHours", $this->_propDict)) {
            if (is_a($this->_propDict["afterHours"], "Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["afterHours"];
            } else {
                $this->_propDict["afterHours"] = new Duration($this->_propDict["afterHours"]);
                return $this->_propDict["afterHours"];
            }
        }
        return null;
    }
    
    /**
    * Sets the afterHours
    *
    * @param Duration $val The afterHours
    *
    * @return ChatActivityStatistics
    */
    public function setAfterHours($val)
    {
        $this->_propDict["afterHours"] = $val;
        return $this;
    }
    
}