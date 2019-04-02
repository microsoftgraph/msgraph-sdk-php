<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TextPrompt File
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
* TextPrompt class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class TextPrompt extends Prompt
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.TextPrompt");
    }

    /**
    * Gets the text
    *
    * @return string The text
    */
    public function getText()
    {
        if (array_key_exists("text", $this->_propDict)) {
            return $this->_propDict["text"];
        } else {
            return null;
        }
    }

    /**
    * Sets the text
    *
    * @param string $val The value of the text
    *
    * @return TextPrompt
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
        return $this;
    }

    /**
    * Gets the voiceGender
    *
    * @return VoiceGender The voiceGender
    */
    public function getVoiceGender()
    {
        if (array_key_exists("voiceGender", $this->_propDict)) {
            if (is_a($this->_propDict["voiceGender"], "Microsoft\Graph\Beta\Model\VoiceGender")) {
                return $this->_propDict["voiceGender"];
            } else {
                $this->_propDict["voiceGender"] = new VoiceGender($this->_propDict["voiceGender"]);
                return $this->_propDict["voiceGender"];
            }
        }
        return null;
    }

    /**
    * Sets the voiceGender
    *
    * @param VoiceGender $val The value to assign to the voiceGender
    *
    * @return TextPrompt The TextPrompt
    */
    public function setVoiceGender($val)
    {
        $this->_propDict["voiceGender"] = $val;
         return $this;
    }

    /**
    * Gets the culture
    *
    * @return Culture The culture
    */
    public function getCulture()
    {
        if (array_key_exists("culture", $this->_propDict)) {
            if (is_a($this->_propDict["culture"], "Microsoft\Graph\Beta\Model\Culture")) {
                return $this->_propDict["culture"];
            } else {
                $this->_propDict["culture"] = new Culture($this->_propDict["culture"]);
                return $this->_propDict["culture"];
            }
        }
        return null;
    }

    /**
    * Sets the culture
    *
    * @param Culture $val The value to assign to the culture
    *
    * @return TextPrompt The TextPrompt
    */
    public function setCulture($val)
    {
        $this->_propDict["culture"] = $val;
         return $this;
    }
    /**
    * Gets the emphasize
    *
    * @return bool The emphasize
    */
    public function getEmphasize()
    {
        if (array_key_exists("emphasize", $this->_propDict)) {
            return $this->_propDict["emphasize"];
        } else {
            return null;
        }
    }

    /**
    * Sets the emphasize
    *
    * @param bool $val The value of the emphasize
    *
    * @return TextPrompt
    */
    public function setEmphasize($val)
    {
        $this->_propDict["emphasize"] = $val;
        return $this;
    }

    /**
    * Gets the sayAs
    *
    * @return SayAs The sayAs
    */
    public function getSayAs()
    {
        if (array_key_exists("sayAs", $this->_propDict)) {
            if (is_a($this->_propDict["sayAs"], "Microsoft\Graph\Beta\Model\SayAs")) {
                return $this->_propDict["sayAs"];
            } else {
                $this->_propDict["sayAs"] = new SayAs($this->_propDict["sayAs"]);
                return $this->_propDict["sayAs"];
            }
        }
        return null;
    }

    /**
    * Sets the sayAs
    *
    * @param SayAs $val The value to assign to the sayAs
    *
    * @return TextPrompt The TextPrompt
    */
    public function setSayAs($val)
    {
        $this->_propDict["sayAs"] = $val;
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
    * @return TextPrompt
    */
    public function setLoop($val)
    {
        $this->_propDict["loop"] = $val;
        return $this;
    }
}
