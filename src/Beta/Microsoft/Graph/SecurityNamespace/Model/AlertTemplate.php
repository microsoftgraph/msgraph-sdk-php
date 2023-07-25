<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AlertTemplate File
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
* AlertTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AlertTemplate extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the category
    *
    * @return string|null The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            return $this->_propDict["category"];
        } else {
            return null;
        }
    }

    /**
    * Sets the category
    *
    * @param string $val The value of the category
    *
    * @return AlertTemplate
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }
    /**
    * Gets the description
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    *
    * @param string $val The value of the description
    *
    * @return AlertTemplate
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the impactedAssets
    *
    * @return ImpactedAsset|null The impactedAssets
    */
    public function getImpactedAssets()
    {
        if (array_key_exists("impactedAssets", $this->_propDict)) {
            if (is_a($this->_propDict["impactedAssets"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\ImpactedAsset") || is_null($this->_propDict["impactedAssets"])) {
                return $this->_propDict["impactedAssets"];
            } else {
                $this->_propDict["impactedAssets"] = new ImpactedAsset($this->_propDict["impactedAssets"]);
                return $this->_propDict["impactedAssets"];
            }
        }
        return null;
    }

    /**
    * Sets the impactedAssets
    *
    * @param ImpactedAsset $val The value to assign to the impactedAssets
    *
    * @return AlertTemplate The AlertTemplate
    */
    public function setImpactedAssets($val)
    {
        $this->_propDict["impactedAssets"] = $val;
         return $this;
    }
    /**
    * Gets the mitreTechniques
    *
    * @return string|null The mitreTechniques
    */
    public function getMitreTechniques()
    {
        if (array_key_exists("mitreTechniques", $this->_propDict)) {
            return $this->_propDict["mitreTechniques"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mitreTechniques
    *
    * @param string $val The value of the mitreTechniques
    *
    * @return AlertTemplate
    */
    public function setMitreTechniques($val)
    {
        $this->_propDict["mitreTechniques"] = $val;
        return $this;
    }
    /**
    * Gets the recommendedActions
    *
    * @return string|null The recommendedActions
    */
    public function getRecommendedActions()
    {
        if (array_key_exists("recommendedActions", $this->_propDict)) {
            return $this->_propDict["recommendedActions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recommendedActions
    *
    * @param string $val The value of the recommendedActions
    *
    * @return AlertTemplate
    */
    public function setRecommendedActions($val)
    {
        $this->_propDict["recommendedActions"] = $val;
        return $this;
    }

    /**
    * Gets the severity
    *
    * @return AlertSeverity|null The severity
    */
    public function getSeverity()
    {
        if (array_key_exists("severity", $this->_propDict)) {
            if (is_a($this->_propDict["severity"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\AlertSeverity") || is_null($this->_propDict["severity"])) {
                return $this->_propDict["severity"];
            } else {
                $this->_propDict["severity"] = new AlertSeverity($this->_propDict["severity"]);
                return $this->_propDict["severity"];
            }
        }
        return null;
    }

    /**
    * Sets the severity
    *
    * @param AlertSeverity $val The value to assign to the severity
    *
    * @return AlertTemplate The AlertTemplate
    */
    public function setSeverity($val)
    {
        $this->_propDict["severity"] = $val;
         return $this;
    }
    /**
    * Gets the title
    *
    * @return string|null The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }

    /**
    * Sets the title
    *
    * @param string $val The value of the title
    *
    * @return AlertTemplate
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
}
