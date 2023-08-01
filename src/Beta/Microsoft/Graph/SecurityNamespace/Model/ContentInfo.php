<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContentInfo File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;
/**
* ContentInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ContentInfo extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the contentFormat
    * The format of the content to be labeled. Possible values are: file, email.
    *
    * @return string|null The contentFormat
    */
    public function getContentFormat()
    {
        if (array_key_exists("contentFormat", $this->_propDict)) {
            return $this->_propDict["contentFormat"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentFormat
    * The format of the content to be labeled. Possible values are: file, email.
    *
    * @param string $val The value of the contentFormat
    *
    * @return ContentInfo
    */
    public function setContentFormat($val)
    {
        $this->_propDict["contentFormat"] = $val;
        return $this;
    }
    /**
    * Gets the identifier
    * Identifier used for Azure Information Protection Analytics.
    *
    * @return string|null The identifier
    */
    public function getIdentifier()
    {
        if (array_key_exists("identifier", $this->_propDict)) {
            return $this->_propDict["identifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identifier
    * Identifier used for Azure Information Protection Analytics.
    *
    * @param string $val The value of the identifier
    *
    * @return ContentInfo
    */
    public function setIdentifier($val)
    {
        $this->_propDict["identifier"] = $val;
        return $this;
    }

    /**
    * Gets the metadata
    * Existing Microsoft Purview Information Protection metadata is passed as key-value pairs, where the key is the MSIPLabelGUID_PropName.
    *
    * @return KeyValuePair|null The metadata
    */
    public function getMetadata()
    {
        if (array_key_exists("metadata", $this->_propDict)) {
            if (is_a($this->_propDict["metadata"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\KeyValuePair") || is_null($this->_propDict["metadata"])) {
                return $this->_propDict["metadata"];
            } else {
                $this->_propDict["metadata"] = new KeyValuePair($this->_propDict["metadata"]);
                return $this->_propDict["metadata"];
            }
        }
        return null;
    }

    /**
    * Sets the metadata
    * Existing Microsoft Purview Information Protection metadata is passed as key-value pairs, where the key is the MSIPLabelGUID_PropName.
    *
    * @param KeyValuePair $val The value to assign to the metadata
    *
    * @return ContentInfo The ContentInfo
    */
    public function setMetadata($val)
    {
        $this->_propDict["metadata"] = $val;
         return $this;
    }

    /**
    * Gets the state
    * The usage state of the content. The possible values are: rest, motion, or use.
    *
    * @return ContentState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\ContentState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new ContentState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * The usage state of the content. The possible values are: rest, motion, or use.
    *
    * @param ContentState $val The value to assign to the state
    *
    * @return ContentInfo The ContentInfo
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
         return $this;
    }
}
