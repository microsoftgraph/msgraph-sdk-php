<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* KnowledgeBaseArticle File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;

/**
* KnowledgeBaseArticle class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class KnowledgeBaseArticle extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the url
    * The URL of the knowledge base article. Read-only.
    *
    * @return string|null The url
    */
    public function getUrl()
    {
        if (array_key_exists("url", $this->_propDict)) {
            return $this->_propDict["url"];
        } else {
            return null;
        }
    }

    /**
    * Sets the url
    * The URL of the knowledge base article. Read-only.
    *
    * @param string $val The url
    *
    * @return KnowledgeBaseArticle
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }

}
