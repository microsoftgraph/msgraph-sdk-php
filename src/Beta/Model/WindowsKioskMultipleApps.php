<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsKioskMultipleApps File
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
* WindowsKioskMultipleApps class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsKioskMultipleApps extends WindowsKioskAppConfiguration
{

    /**
    * Gets the apps
    *
    * @return WindowsKioskAppBase The apps
    */
    public function getApps()
    {
        if (array_key_exists("apps", $this->_propDict)) {
            if (is_a($this->_propDict["apps"], "Microsoft\Graph\Beta\Model\WindowsKioskAppBase")) {
                return $this->_propDict["apps"];
            } else {
                $this->_propDict["apps"] = new WindowsKioskAppBase($this->_propDict["apps"]);
                return $this->_propDict["apps"];
            }
        }
        return null;
    }

    /**
    * Sets the apps
    *
    * @param WindowsKioskAppBase $val The value to assign to the apps
    *
    * @return WindowsKioskMultipleApps The WindowsKioskMultipleApps
    */
    public function setApps($val)
    {
        $this->_propDict["apps"] = $val;
         return $this;
    }
    /**
    * Gets the showTaskBar
    *
    * @return bool The showTaskBar
    */
    public function getShowTaskBar()
    {
        if (array_key_exists("showTaskBar", $this->_propDict)) {
            return $this->_propDict["showTaskBar"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showTaskBar
    *
    * @param bool $val The value of the showTaskBar
    *
    * @return WindowsKioskMultipleApps
    */
    public function setShowTaskBar($val)
    {
        $this->_propDict["showTaskBar"] = $val;
        return $this;
    }

    /**
    * Gets the startMenuLayoutXml
    *
    * @return \GuzzleHttp\Psr7\Stream The startMenuLayoutXml
    */
    public function getStartMenuLayoutXml()
    {
        if (array_key_exists("startMenuLayoutXml", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuLayoutXml"], "Microsoft\Graph\Beta\Model\\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["startMenuLayoutXml"];
            } else {
                $this->_propDict["startMenuLayoutXml"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["startMenuLayoutXml"]);
                return $this->_propDict["startMenuLayoutXml"];
            }
        }
        return null;
    }

    /**
    * Sets the startMenuLayoutXml
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the startMenuLayoutXml
    *
    * @return WindowsKioskMultipleApps The WindowsKioskMultipleApps
    */
    public function setStartMenuLayoutXml($val)
    {
        $this->_propDict["startMenuLayoutXml"] = $val;
         return $this;
    }
}
