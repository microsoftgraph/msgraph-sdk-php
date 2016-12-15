<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookFilter File
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
* WorkbookFilter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookFilter extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new WorkbookFilter
    *
    * @param array $propDict A list of properties to set
    *
    * @return WorkbookFilter
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the WorkbookFilter
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the criteria
    *
    * @return WorkbookFilterCriteria The criteria
    */
    public function getCriteria()
    {
        if (array_key_exists("criteria", $this->_propDict)) {
            if (is_a($this->_propDict["criteria"], "WorkbookFilterCriteria")) {
                return $this->_propDict["criteria"];
            } else {
                $this->_propDict["criteria"] = new WorkbookFilterCriteria($this->_propDict["criteria"]);
                return $this->_propDict["criteria"];
            }
        }
        return null;
    }

    /**
    * Sets the criteria
    *
    * @param string $val The criteria
    *
    * @return WorkbookFilter
    */
    public function setCriteria($val)
    {
        $this->_propDict["criteria"] = $val;
        return $this;
    }
}