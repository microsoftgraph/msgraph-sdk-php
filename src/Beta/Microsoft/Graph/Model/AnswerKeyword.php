<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AnswerKeyword File
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
* AnswerKeyword class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AnswerKeyword extends Entity
{
    /**
    * Gets the keywords
    *
    * @return string|null The keywords
    */
    public function getKeywords()
    {
        if (array_key_exists("keywords", $this->_propDict)) {
            return $this->_propDict["keywords"];
        } else {
            return null;
        }
    }

    /**
    * Sets the keywords
    *
    * @param string $val The value of the keywords
    *
    * @return AnswerKeyword
    */
    public function setKeywords($val)
    {
        $this->_propDict["keywords"] = $val;
        return $this;
    }
    /**
    * Gets the matchSimilarKeywords
    *
    * @return bool|null The matchSimilarKeywords
    */
    public function getMatchSimilarKeywords()
    {
        if (array_key_exists("matchSimilarKeywords", $this->_propDict)) {
            return $this->_propDict["matchSimilarKeywords"];
        } else {
            return null;
        }
    }

    /**
    * Sets the matchSimilarKeywords
    *
    * @param bool $val The value of the matchSimilarKeywords
    *
    * @return AnswerKeyword
    */
    public function setMatchSimilarKeywords($val)
    {
        $this->_propDict["matchSimilarKeywords"] = $val;
        return $this;
    }
    /**
    * Gets the reservedKeywords
    *
    * @return string|null The reservedKeywords
    */
    public function getReservedKeywords()
    {
        if (array_key_exists("reservedKeywords", $this->_propDict)) {
            return $this->_propDict["reservedKeywords"];
        } else {
            return null;
        }
    }

    /**
    * Sets the reservedKeywords
    *
    * @param string $val The value of the reservedKeywords
    *
    * @return AnswerKeyword
    */
    public function setReservedKeywords($val)
    {
        $this->_propDict["reservedKeywords"] = $val;
        return $this;
    }
}
