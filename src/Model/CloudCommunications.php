<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudCommunications File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* CloudCommunications class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudCommunications extends Entity
{

     /** 
     * Gets the calls
     *
     * @return Call[]|null The calls
     */
    public function getCalls()
    {
        if (array_key_exists('calls', $this->_propDict) && !is_null($this->_propDict['calls'])) {
            $calls = [];
            if (count($this->_propDict['calls']) > 0 && is_a($this->_propDict['calls'][0], 'Call')) {
                return $this->_propDict['calls'];
            }
            foreach ($this->_propDict['calls'] as $singleValue) {
                $calls []= new Call($singleValue);
            }
            $this->_propDict['calls'] = $calls;
            return $this->_propDict['calls'];
        }
        return null;
    }
    
    /** 
    * Sets the calls
    *
    * @param Call[] $val The calls
    *
    * @return CloudCommunications
    */
    public function setCalls($val)
    {
        $this->_propDict["calls"] = $val;
        return $this;
    }
    

     /** 
     * Gets the callRecords
     *
     * @return \Microsoft\Graph\CallRecords\Model\CallRecord[]|null The callRecords
     */
    public function getCallRecords()
    {
        if (array_key_exists('callRecords', $this->_propDict) && !is_null($this->_propDict['callRecords'])) {
            $callRecords = [];
            if (count($this->_propDict['callRecords']) > 0 && is_a($this->_propDict['callRecords'][0], '\Microsoft\Graph\CallRecords\Model\CallRecord')) {
                return $this->_propDict['callRecords'];
            }
            foreach ($this->_propDict['callRecords'] as $singleValue) {
                $callRecords []= new \Microsoft\Graph\CallRecords\Model\CallRecord($singleValue);
            }
            $this->_propDict['callRecords'] = $callRecords;
            return $this->_propDict['callRecords'];
        }
        return null;
    }
    
    /** 
    * Sets the callRecords
    *
    * @param \Microsoft\Graph\CallRecords\Model\CallRecord[] $val The callRecords
    *
    * @return CloudCommunications
    */
    public function setCallRecords($val)
    {
        $this->_propDict["callRecords"] = $val;
        return $this;
    }
    

     /** 
     * Gets the onlineMeetings
     *
     * @return OnlineMeeting[]|null The onlineMeetings
     */
    public function getOnlineMeetings()
    {
        if (array_key_exists('onlineMeetings', $this->_propDict) && !is_null($this->_propDict['onlineMeetings'])) {
            $onlineMeetings = [];
            if (count($this->_propDict['onlineMeetings']) > 0 && is_a($this->_propDict['onlineMeetings'][0], 'OnlineMeeting')) {
                return $this->_propDict['onlineMeetings'];
            }
            foreach ($this->_propDict['onlineMeetings'] as $singleValue) {
                $onlineMeetings []= new OnlineMeeting($singleValue);
            }
            $this->_propDict['onlineMeetings'] = $onlineMeetings;
            return $this->_propDict['onlineMeetings'];
        }
        return null;
    }
    
    /** 
    * Sets the onlineMeetings
    *
    * @param OnlineMeeting[] $val The onlineMeetings
    *
    * @return CloudCommunications
    */
    public function setOnlineMeetings($val)
    {
        $this->_propDict["onlineMeetings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the presences
     *
     * @return Presence[]|null The presences
     */
    public function getPresences()
    {
        if (array_key_exists('presences', $this->_propDict) && !is_null($this->_propDict['presences'])) {
            $presences = [];
            if (count($this->_propDict['presences']) > 0 && is_a($this->_propDict['presences'][0], 'Presence')) {
                return $this->_propDict['presences'];
            }
            foreach ($this->_propDict['presences'] as $singleValue) {
                $presences []= new Presence($singleValue);
            }
            $this->_propDict['presences'] = $presences;
            return $this->_propDict['presences'];
        }
        return null;
    }
    
    /** 
    * Sets the presences
    *
    * @param Presence[] $val The presences
    *
    * @return CloudCommunications
    */
    public function setPresences($val)
    {
        $this->_propDict["presences"] = $val;
        return $this;
    }
    
}
