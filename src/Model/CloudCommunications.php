<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudCommunications File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* CloudCommunications class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudCommunications extends Entity
{

     /** 
     * Gets the calls
     *
     * @return array The calls
     */
    public function getCalls()
    {
        if (array_key_exists("calls", $this->_propDict)) {
           return $this->_propDict["calls"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the calls
    *
    * @param Call $val The calls
    *
    * @return CloudCommunications
    */
    public function setCalls($val)
    {
		$this->_propDict["calls"] = $val;
        return $this;
    }
    

     /** 
     * Gets the onlineMeetings
     *
     * @return array The onlineMeetings
     */
    public function getOnlineMeetings()
    {
        if (array_key_exists("onlineMeetings", $this->_propDict)) {
           return $this->_propDict["onlineMeetings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the onlineMeetings
    *
    * @param OnlineMeeting $val The onlineMeetings
    *
    * @return CloudCommunications
    */
    public function setOnlineMeetings($val)
    {
		$this->_propDict["onlineMeetings"] = $val;
        return $this;
    }
    
}