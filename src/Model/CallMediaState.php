<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CallMediaState File
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
* CallMediaState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class CallMediaState extends Entity
{

    /**
    * Gets the audio
    *
    * @return MediaState The audio
    */
    public function getAudio()
    {
        if (array_key_exists("audio", $this->_propDict)) {
            if (is_a($this->_propDict["audio"], "Microsoft\Graph\Model\MediaState")) {
                return $this->_propDict["audio"];
            } else {
                $this->_propDict["audio"] = new MediaState($this->_propDict["audio"]);
                return $this->_propDict["audio"];
            }
        }
        return null;
    }

    /**
    * Sets the audio
    *
    * @param MediaState $val The value to assign to the audio
    *
    * @return CallMediaState The CallMediaState
    */
    public function setAudio($val)
    {
        $this->_propDict["audio"] = $val;
         return $this;
    }
}
