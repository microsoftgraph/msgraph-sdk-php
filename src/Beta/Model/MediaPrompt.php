<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MediaPrompt File
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
* MediaPrompt class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MediaPrompt extends Prompt
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.MediaPrompt");
    }


    /**
    * Gets the mediaInfo
    *
    * @return MediaInfo The mediaInfo
    */
    public function getMediaInfo()
    {
        if (array_key_exists("mediaInfo", $this->_propDict)) {
            if (is_a($this->_propDict["mediaInfo"], "Microsoft\Graph\Model\MediaInfo")) {
                return $this->_propDict["mediaInfo"];
            } else {
                $this->_propDict["mediaInfo"] = new MediaInfo($this->_propDict["mediaInfo"]);
                return $this->_propDict["mediaInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the mediaInfo
    *
    * @param MediaInfo $val The value to assign to the mediaInfo
    *
    * @return MediaPrompt The MediaPrompt
    */
    public function setMediaInfo($val)
    {
        $this->_propDict["mediaInfo"] = $val;
         return $this;
    }
    /**
    * Gets the loop
    *
    * @return int The loop
    */
    public function getLoop()
    {
        if (array_key_exists("loop", $this->_propDict)) {
            return $this->_propDict["loop"];
        } else {
            return null;
        }
    }

    /**
    * Sets the loop
    *
    * @param int $val The value of the loop
    *
    * @return MediaPrompt
    */
    public function setLoop($val)
    {
        $this->_propDict["loop"] = $val;
        return $this;
    }
}
