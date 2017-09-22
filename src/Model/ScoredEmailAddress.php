<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ScoredEmailAddress File
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
* ScoredEmailAddress class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ScoredEmailAddress extends Entity
{
    /**
    * Gets the address
    * The email address.
    *
    * @return string The address
    */
    public function getAddress()
    {
        if (array_key_exists("address", $this->_propDict)) {
            return $this->_propDict["address"];
        } else {
            return null;
        }
    }

    /**
    * Sets the address
    * The email address.
    *
    * @param string $val The value of the address
    *
    * @return ScoredEmailAddress
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
        return $this;
    }
    /**
    * Gets the relevanceScore
    * The relevance score of the email address. A relevance score is used as a sort key, in relation to the other returned results. A higher relevance score value corresponds to a more relevant result. Relevance is determined by the user’s communication and collaboration patterns and business relationships.
    *
    * @return float The relevanceScore
    */
    public function getRelevanceScore()
    {
        if (array_key_exists("relevanceScore", $this->_propDict)) {
            return $this->_propDict["relevanceScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the relevanceScore
    * The relevance score of the email address. A relevance score is used as a sort key, in relation to the other returned results. A higher relevance score value corresponds to a more relevant result. Relevance is determined by the user’s communication and collaboration patterns and business relationships.
    *
    * @param float $val The value of the relevanceScore
    *
    * @return ScoredEmailAddress
    */
    public function setRelevanceScore($val)
    {
        $this->_propDict["relevanceScore"] = $val;
        return $this;
    }
}
