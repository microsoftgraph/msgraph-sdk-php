<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatMessageHostedContent File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* ChatMessageHostedContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChatMessageHostedContent extends Entity
{
    /**
    * Gets the contentBytes
    *
    * @return \GuzzleHttp\Psr7\Stream The contentBytes
    */
    public function getContentBytes()
    {
        if (array_key_exists("contentBytes", $this->_propDict)) {
            if (is_a($this->_propDict["contentBytes"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["contentBytes"];
            } else {
                $this->_propDict["contentBytes"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["contentBytes"]);
                return $this->_propDict["contentBytes"];
            }
        }
        return null;
    }
    
    /**
    * Sets the contentBytes
    *
    * @param \GuzzleHttp\Psr7\Stream $val The contentBytes
    *
    * @return ChatMessageHostedContent
    */
    public function setContentBytes($val)
    {
        $this->_propDict["contentBytes"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentType
    *
    * @return string The contentType
    */
    public function getContentType()
    {
        if (array_key_exists("contentType", $this->_propDict)) {
            return $this->_propDict["contentType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentType
    *
    * @param string $val The contentType
    *
    * @return ChatMessageHostedContent
    */
    public function setContentType($val)
    {
        $this->_propDict["contentType"] = $val;
        return $this;
    }
    
}