<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MediaStream File
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
* MediaStream class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MediaStream extends Entity
{

    /**
    * Gets the mediaType
    *
    * @return Modality The mediaType
    */
    public function getMediaType()
    {
        if (array_key_exists("mediaType", $this->_propDict)) {
            if (is_a($this->_propDict["mediaType"], "Microsoft\Graph\Beta\Model\Modality")) {
                return $this->_propDict["mediaType"];
            } else {
                $this->_propDict["mediaType"] = new Modality($this->_propDict["mediaType"]);
                return $this->_propDict["mediaType"];
            }
        }
        return null;
    }

    /**
    * Sets the mediaType
    *
    * @param Modality $val The value to assign to the mediaType
    *
    * @return MediaStream The MediaStream
    */
    public function setMediaType($val)
    {
        $this->_propDict["mediaType"] = $val;
         return $this;
    }
    /**
    * Gets the label
    *
    * @return string The label
    */
    public function getLabel()
    {
        if (array_key_exists("label", $this->_propDict)) {
            return $this->_propDict["label"];
        } else {
            return null;
        }
    }

    /**
    * Sets the label
    *
    * @param string $val The value of the label
    *
    * @return MediaStream
    */
    public function setLabel($val)
    {
        $this->_propDict["label"] = $val;
        return $this;
    }
    /**
    * Gets the sourceId
    *
    * @return string The sourceId
    */
    public function getSourceId()
    {
        if (array_key_exists("sourceId", $this->_propDict)) {
            return $this->_propDict["sourceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceId
    *
    * @param string $val The value of the sourceId
    *
    * @return MediaStream
    */
    public function setSourceId($val)
    {
        $this->_propDict["sourceId"] = $val;
        return $this;
    }

    /**
    * Gets the direction
    *
    * @return MediaDirection The direction
    */
    public function getDirection()
    {
        if (array_key_exists("direction", $this->_propDict)) {
            if (is_a($this->_propDict["direction"], "Microsoft\Graph\Beta\Model\MediaDirection")) {
                return $this->_propDict["direction"];
            } else {
                $this->_propDict["direction"] = new MediaDirection($this->_propDict["direction"]);
                return $this->_propDict["direction"];
            }
        }
        return null;
    }

    /**
    * Sets the direction
    *
    * @param MediaDirection $val The value to assign to the direction
    *
    * @return MediaStream The MediaStream
    */
    public function setDirection($val)
    {
        $this->_propDict["direction"] = $val;
         return $this;
    }
    /**
    * Gets the serverMuted
    *
    * @return bool The serverMuted
    */
    public function getServerMuted()
    {
        if (array_key_exists("serverMuted", $this->_propDict)) {
            return $this->_propDict["serverMuted"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serverMuted
    *
    * @param bool $val The value of the serverMuted
    *
    * @return MediaStream
    */
    public function setServerMuted($val)
    {
        $this->_propDict["serverMuted"] = $val;
        return $this;
    }
}
