<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Video File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* Video class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Video extends Entity
{
    /**
    * Gets the bitrate
    * Bit rate of the video in bits per second.
    *
    * @return int The bitrate
    */
    public function getBitrate()
    {
        if (array_key_exists("bitrate", $this->_propDict)) {
            return $this->_propDict["bitrate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bitrate
    * Bit rate of the video in bits per second.
    *
    * @param int $val The value of the bitrate
    *
    * @return Video
    */
    public function setBitrate($val)
    {
        $this->_propDict["bitrate"] = $val;
        return $this;
    }
    /**
    * Gets the duration
    * Duration of the file in milliseconds.
    *
    * @return int The duration
    */
    public function getDuration()
    {
        if (array_key_exists("duration", $this->_propDict)) {
            return $this->_propDict["duration"];
        } else {
            return null;
        }
    }

    /**
    * Sets the duration
    * Duration of the file in milliseconds.
    *
    * @param int $val The value of the duration
    *
    * @return Video
    */
    public function setDuration($val)
    {
        $this->_propDict["duration"] = $val;
        return $this;
    }
    /**
    * Gets the height
    * Height of the video, in pixels.
    *
    * @return int The height
    */
    public function getHeight()
    {
        if (array_key_exists("height", $this->_propDict)) {
            return $this->_propDict["height"];
        } else {
            return null;
        }
    }

    /**
    * Sets the height
    * Height of the video, in pixels.
    *
    * @param int $val The value of the height
    *
    * @return Video
    */
    public function setHeight($val)
    {
        $this->_propDict["height"] = $val;
        return $this;
    }
    /**
    * Gets the width
    * Width of the video, in pixels.
    *
    * @return int The width
    */
    public function getWidth()
    {
        if (array_key_exists("width", $this->_propDict)) {
            return $this->_propDict["width"];
        } else {
            return null;
        }
    }

    /**
    * Sets the width
    * Width of the video, in pixels.
    *
    * @param int $val The value of the width
    *
    * @return Video
    */
    public function setWidth($val)
    {
        $this->_propDict["width"] = $val;
        return $this;
    }
}
