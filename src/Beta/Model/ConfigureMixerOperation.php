<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConfigureMixerOperation File
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
* ConfigureMixerOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ConfigureMixerOperation extends CommsOperation
{

     /** 
     * Gets the participantMixerLevels
     *
     * @return array The participantMixerLevels
     */
    public function getParticipantMixerLevels()
    {
        if (array_key_exists("participantMixerLevels", $this->_propDict)) {
           return $this->_propDict["participantMixerLevels"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the participantMixerLevels
    *
    * @param ParticipantMixerLevel $val The participantMixerLevels
    *
    * @return ConfigureMixerOperation
    */
    public function setParticipantMixerLevels($val)
    {
		$this->_propDict["participantMixerLevels"] = $val;
        return $this;
    }
    
}