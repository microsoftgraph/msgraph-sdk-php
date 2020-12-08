<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CaseExportOperation File
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
* CaseExportOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CaseExportOperation extends CaseOperation
{
    /**
    * Gets the azureBlobContainer
    *
    * @return string The azureBlobContainer
    */
    public function getAzureBlobContainer()
    {
        if (array_key_exists("azureBlobContainer", $this->_propDict)) {
            return $this->_propDict["azureBlobContainer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureBlobContainer
    *
    * @param string $val The azureBlobContainer
    *
    * @return CaseExportOperation
    */
    public function setAzureBlobContainer($val)
    {
        $this->_propDict["azureBlobContainer"] = $val;
        return $this;
    }
    
    /**
    * Gets the azureBlobToken
    *
    * @return string The azureBlobToken
    */
    public function getAzureBlobToken()
    {
        if (array_key_exists("azureBlobToken", $this->_propDict)) {
            return $this->_propDict["azureBlobToken"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureBlobToken
    *
    * @param string $val The azureBlobToken
    *
    * @return CaseExportOperation
    */
    public function setAzureBlobToken($val)
    {
        $this->_propDict["azureBlobToken"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    *
    * @return string The description
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
    * @param string $val The description
    *
    * @return CaseExportOperation
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the exportOptions
    *
    * @return ExportOptions The exportOptions
    */
    public function getExportOptions()
    {
        if (array_key_exists("exportOptions", $this->_propDict)) {
            if (is_a($this->_propDict["exportOptions"], "Beta\Microsoft\Graph\Model\ExportOptions")) {
                return $this->_propDict["exportOptions"];
            } else {
                $this->_propDict["exportOptions"] = new ExportOptions($this->_propDict["exportOptions"]);
                return $this->_propDict["exportOptions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the exportOptions
    *
    * @param ExportOptions $val The exportOptions
    *
    * @return CaseExportOperation
    */
    public function setExportOptions($val)
    {
        $this->_propDict["exportOptions"] = $val;
        return $this;
    }
    
    /**
    * Gets the exportStructure
    *
    * @return ExportFileStructure The exportStructure
    */
    public function getExportStructure()
    {
        if (array_key_exists("exportStructure", $this->_propDict)) {
            if (is_a($this->_propDict["exportStructure"], "Beta\Microsoft\Graph\Model\ExportFileStructure")) {
                return $this->_propDict["exportStructure"];
            } else {
                $this->_propDict["exportStructure"] = new ExportFileStructure($this->_propDict["exportStructure"]);
                return $this->_propDict["exportStructure"];
            }
        }
        return null;
    }
    
    /**
    * Sets the exportStructure
    *
    * @param ExportFileStructure $val The exportStructure
    *
    * @return CaseExportOperation
    */
    public function setExportStructure($val)
    {
        $this->_propDict["exportStructure"] = $val;
        return $this;
    }
    
    /**
    * Gets the outputFolderId
    *
    * @return string The outputFolderId
    */
    public function getOutputFolderId()
    {
        if (array_key_exists("outputFolderId", $this->_propDict)) {
            return $this->_propDict["outputFolderId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the outputFolderId
    *
    * @param string $val The outputFolderId
    *
    * @return CaseExportOperation
    */
    public function setOutputFolderId($val)
    {
        $this->_propDict["outputFolderId"] = $val;
        return $this;
    }
    
    /**
    * Gets the outputName
    *
    * @return string The outputName
    */
    public function getOutputName()
    {
        if (array_key_exists("outputName", $this->_propDict)) {
            return $this->_propDict["outputName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the outputName
    *
    * @param string $val The outputName
    *
    * @return CaseExportOperation
    */
    public function setOutputName($val)
    {
        $this->_propDict["outputName"] = $val;
        return $this;
    }
    
    /**
    * Gets the reviewSet
    *
    * @return ReviewSet The reviewSet
    */
    public function getReviewSet()
    {
        if (array_key_exists("reviewSet", $this->_propDict)) {
            if (is_a($this->_propDict["reviewSet"], "Beta\Microsoft\Graph\Model\ReviewSet")) {
                return $this->_propDict["reviewSet"];
            } else {
                $this->_propDict["reviewSet"] = new ReviewSet($this->_propDict["reviewSet"]);
                return $this->_propDict["reviewSet"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reviewSet
    *
    * @param ReviewSet $val The reviewSet
    *
    * @return CaseExportOperation
    */
    public function setReviewSet($val)
    {
        $this->_propDict["reviewSet"] = $val;
        return $this;
    }
    
}