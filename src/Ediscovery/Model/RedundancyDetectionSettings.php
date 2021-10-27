<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RedundancyDetectionSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Ediscovery\Model;
/**
* RedundancyDetectionSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RedundancyDetectionSettings extends \Microsoft\Graph\Model\Entity
{
    /**
    * Gets the isEnabled
    * Indicates whether email threading and near duplicate detection are enabled.
    *
    * @return bool|null The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabled
    * Indicates whether email threading and near duplicate detection are enabled.
    *
    * @param bool $val The value of the isEnabled
    *
    * @return RedundancyDetectionSettings
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the maxWords
    * See Minimum/maximum number of words to learn more.
    *
    * @return int|null The maxWords
    */
    public function getMaxWords()
    {
        if (array_key_exists("maxWords", $this->_propDict)) {
            return $this->_propDict["maxWords"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maxWords
    * See Minimum/maximum number of words to learn more.
    *
    * @param int $val The value of the maxWords
    *
    * @return RedundancyDetectionSettings
    */
    public function setMaxWords($val)
    {
        $this->_propDict["maxWords"] = $val;
        return $this;
    }
    /**
    * Gets the minWords
    * See Minimum/maximum number of words to learn more.
    *
    * @return int|null The minWords
    */
    public function getMinWords()
    {
        if (array_key_exists("minWords", $this->_propDict)) {
            return $this->_propDict["minWords"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minWords
    * See Minimum/maximum number of words to learn more.
    *
    * @param int $val The value of the minWords
    *
    * @return RedundancyDetectionSettings
    */
    public function setMinWords($val)
    {
        $this->_propDict["minWords"] = $val;
        return $this;
    }
    /**
    * Gets the similarityThreshold
    * See Document and email similarity threshold to learn more.
    *
    * @return int|null The similarityThreshold
    */
    public function getSimilarityThreshold()
    {
        if (array_key_exists("similarityThreshold", $this->_propDict)) {
            return $this->_propDict["similarityThreshold"];
        } else {
            return null;
        }
    }

    /**
    * Sets the similarityThreshold
    * See Document and email similarity threshold to learn more.
    *
    * @param int $val The value of the similarityThreshold
    *
    * @return RedundancyDetectionSettings
    */
    public function setSimilarityThreshold($val)
    {
        $this->_propDict["similarityThreshold"] = $val;
        return $this;
    }
}
