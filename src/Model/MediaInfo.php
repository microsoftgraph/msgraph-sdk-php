<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MediaInfo File
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
* MediaInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MediaInfo extends Entity
{
    /**
    * Gets the uri
    * Path to the prompt that will be played. Currently supports only Wave file (.wav) format, single-channel, 16-bit samples with a 16,000 (16KHz) sampling rate.
    *
    * @return string The uri
    */
    public function getUri()
    {
        if (array_key_exists("uri", $this->_propDict)) {
            return $this->_propDict["uri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uri
    * Path to the prompt that will be played. Currently supports only Wave file (.wav) format, single-channel, 16-bit samples with a 16,000 (16KHz) sampling rate.
    *
    * @param string $val The value of the uri
    *
    * @return MediaInfo
    */
    public function setUri($val)
    {
        $this->_propDict["uri"] = $val;
        return $this;
    }
    /**
    * Gets the resourceId
    * Optional. Used to uniquely identity the resource. If passed in, the prompt uri will be cached against this resourceId as a key.
    *
    * @return string The resourceId
    */
    public function getResourceId()
    {
        if (array_key_exists("resourceId", $this->_propDict)) {
            return $this->_propDict["resourceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceId
    * Optional. Used to uniquely identity the resource. If passed in, the prompt uri will be cached against this resourceId as a key.
    *
    * @param string $val The value of the resourceId
    *
    * @return MediaInfo
    */
    public function setResourceId($val)
    {
        $this->_propDict["resourceId"] = $val;
        return $this;
    }
}
