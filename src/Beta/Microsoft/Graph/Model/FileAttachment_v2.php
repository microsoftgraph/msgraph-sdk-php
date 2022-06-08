<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FileAttachment_v2 File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* FileAttachment_v2 class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FileAttachment_v2 extends Attachment_v2
{
    /**
    * Gets the contentBytes
    *
    * @return \GuzzleHttp\Psr7\Stream|null The contentBytes
    */
    public function getContentBytes()
    {
        if (array_key_exists("contentBytes", $this->_propDict)) {
            if (is_a($this->_propDict["contentBytes"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["contentBytes"])) {
                return $this->_propDict["contentBytes"];
            } else {
                $this->_propDict["contentBytes"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["contentBytes"]);
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
    * @return FileAttachment_v2
    */
    public function setContentBytes($val)
    {
        $this->_propDict["contentBytes"] = $val;
        return $this;
    }

}
