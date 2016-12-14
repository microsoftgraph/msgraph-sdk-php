<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InferenceClassification File
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
* InferenceClassification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class InferenceClassification extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new InferenceClassification
    *
    * @param array $propDict A list of properties to set
    *
    * @return InferenceClassification
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the InferenceClassification
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /** 
    * Gets the overrides
    *
    * @return array The overrides
    */
    public function getOverrides()
    {
        if (array_key_exists("overrides", $this->_propDict)) {
           return $this->_propDict["overrides"];
        } else {
            return null;
        }
    }
	
    /** 
    * Sets the overrides
    *
    * @param string $val The overrides
    *
    * @return InferenceClassification
    */
    public function setOverrides($val)
    {
		$this->_propDict["overrides"] = $val;
        return $this;
    }

}