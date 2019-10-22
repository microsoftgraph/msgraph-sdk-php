<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsMicrosoftEdgeApp File
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
* WindowsMicrosoftEdgeApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsMicrosoftEdgeApp extends MobileApp
{
    /**
    * Gets the channel
    * The channel to install on target devices.
    *
    * @return MicrosoftEdgeChannel The channel
    */
    public function getChannel()
    {
        if (array_key_exists("channel", $this->_propDict)) {
            if (is_a($this->_propDict["channel"], "Microsoft\Graph\Beta\Model\MicrosoftEdgeChannel")) {
                return $this->_propDict["channel"];
            } else {
                $this->_propDict["channel"] = new MicrosoftEdgeChannel($this->_propDict["channel"]);
                return $this->_propDict["channel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the channel
    * The channel to install on target devices.
    *
    * @param MicrosoftEdgeChannel $val The channel
    *
    * @return WindowsMicrosoftEdgeApp
    */
    public function setChannel($val)
    {
        $this->_propDict["channel"] = $val;
        return $this;
    }
    
}