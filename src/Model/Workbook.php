<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Workbook File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* Workbook class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Workbook extends Entity
{
    /**
    * Gets the application
    *
    * @return WorkbookApplication|null The application
    */
    public function getApplication()
    {
        if (array_key_exists("application", $this->_propDict) && !is_null($this->_propDict["application"])) {
            if (is_a($this->_propDict["application"], "\Microsoft\Graph\Model\WorkbookApplication")) {
                return $this->_propDict["application"];
            } else {
                $this->_propDict["application"] = new WorkbookApplication($this->_propDict["application"]);
                return $this->_propDict["application"];
            }
        }
        return null;
    }

    /**
    * Sets the application
    *
    * @param WorkbookApplication $val The application
    *
    * @return Workbook
    */
    public function setApplication($val)
    {
        $this->_propDict["application"] = $val;
        return $this;
    }


     /**
     * Gets the comments
     *
     * @return WorkbookComment[]|null The comments
     */
    public function getComments()
    {
        if (array_key_exists('comments', $this->_propDict) && !is_null($this->_propDict['comments'])) {
            $comments = [];
            if (count($this->_propDict['comments']) > 0 && is_a($this->_propDict['comments'][0], 'WorkbookComment')) {
                return $this->_propDict['comments'];
            }
            foreach ($this->_propDict['comments'] as $singleValue) {
                $comments []= new WorkbookComment($singleValue);
            }
            $this->_propDict['comments'] = $comments;
            return $this->_propDict['comments'];
        }
        return null;
    }

    /**
    * Sets the comments
    *
    * @param WorkbookComment[] $val The comments
    *
    * @return Workbook
    */
    public function setComments($val)
    {
        $this->_propDict["comments"] = $val;
        return $this;
    }

    /**
    * Gets the functions
    *
    * @return WorkbookFunctions|null The functions
    */
    public function getFunctions()
    {
        if (array_key_exists("functions", $this->_propDict) && !is_null($this->_propDict["functions"])) {
            if (is_a($this->_propDict["functions"], "\Microsoft\Graph\Model\WorkbookFunctions")) {
                return $this->_propDict["functions"];
            } else {
                $this->_propDict["functions"] = new WorkbookFunctions($this->_propDict["functions"]);
                return $this->_propDict["functions"];
            }
        }
        return null;
    }

    /**
    * Sets the functions
    *
    * @param WorkbookFunctions $val The functions
    *
    * @return Workbook
    */
    public function setFunctions($val)
    {
        $this->_propDict["functions"] = $val;
        return $this;
    }


     /**
     * Gets the names
    * Represents a collection of workbooks scoped named items (named ranges and constants). Read-only.
     *
     * @return WorkbookNamedItem[]|null The names
     */
    public function getNames()
    {
        if (array_key_exists('names', $this->_propDict) && !is_null($this->_propDict['names'])) {
            $names = [];
            if (count($this->_propDict['names']) > 0 && is_a($this->_propDict['names'][0], 'WorkbookNamedItem')) {
                return $this->_propDict['names'];
            }
            foreach ($this->_propDict['names'] as $singleValue) {
                $names []= new WorkbookNamedItem($singleValue);
            }
            $this->_propDict['names'] = $names;
            return $this->_propDict['names'];
        }
        return null;
    }

    /**
    * Sets the names
    * Represents a collection of workbooks scoped named items (named ranges and constants). Read-only.
    *
    * @param WorkbookNamedItem[] $val The names
    *
    * @return Workbook
    */
    public function setNames($val)
    {
        $this->_propDict["names"] = $val;
        return $this;
    }


     /**
     * Gets the operations
    * The status of Workbook operations. Getting an operation collection is not supported, but you can get the status of a long-running operation if the Location header is returned in the response. Read-only. Nullable.
     *
     * @return WorkbookOperation[]|null The operations
     */
    public function getOperations()
    {
        if (array_key_exists('operations', $this->_propDict) && !is_null($this->_propDict['operations'])) {
            $operations = [];
            if (count($this->_propDict['operations']) > 0 && is_a($this->_propDict['operations'][0], 'WorkbookOperation')) {
                return $this->_propDict['operations'];
            }
            foreach ($this->_propDict['operations'] as $singleValue) {
                $operations []= new WorkbookOperation($singleValue);
            }
            $this->_propDict['operations'] = $operations;
            return $this->_propDict['operations'];
        }
        return null;
    }

    /**
    * Sets the operations
    * The status of Workbook operations. Getting an operation collection is not supported, but you can get the status of a long-running operation if the Location header is returned in the response. Read-only. Nullable.
    *
    * @param WorkbookOperation[] $val The operations
    *
    * @return Workbook
    */
    public function setOperations($val)
    {
        $this->_propDict["operations"] = $val;
        return $this;
    }


     /**
     * Gets the tables
    * Represents a collection of tables associated with the workbook. Read-only.
     *
     * @return WorkbookTable[]|null The tables
     */
    public function getTables()
    {
        if (array_key_exists('tables', $this->_propDict) && !is_null($this->_propDict['tables'])) {
            $tables = [];
            if (count($this->_propDict['tables']) > 0 && is_a($this->_propDict['tables'][0], 'WorkbookTable')) {
                return $this->_propDict['tables'];
            }
            foreach ($this->_propDict['tables'] as $singleValue) {
                $tables []= new WorkbookTable($singleValue);
            }
            $this->_propDict['tables'] = $tables;
            return $this->_propDict['tables'];
        }
        return null;
    }

    /**
    * Sets the tables
    * Represents a collection of tables associated with the workbook. Read-only.
    *
    * @param WorkbookTable[] $val The tables
    *
    * @return Workbook
    */
    public function setTables($val)
    {
        $this->_propDict["tables"] = $val;
        return $this;
    }


     /**
     * Gets the worksheets
    * Represents a collection of worksheets associated with the workbook. Read-only.
     *
     * @return WorkbookWorksheet[]|null The worksheets
     */
    public function getWorksheets()
    {
        if (array_key_exists('worksheets', $this->_propDict) && !is_null($this->_propDict['worksheets'])) {
            $worksheets = [];
            if (count($this->_propDict['worksheets']) > 0 && is_a($this->_propDict['worksheets'][0], 'WorkbookWorksheet')) {
                return $this->_propDict['worksheets'];
            }
            foreach ($this->_propDict['worksheets'] as $singleValue) {
                $worksheets []= new WorkbookWorksheet($singleValue);
            }
            $this->_propDict['worksheets'] = $worksheets;
            return $this->_propDict['worksheets'];
        }
        return null;
    }

    /**
    * Sets the worksheets
    * Represents a collection of worksheets associated with the workbook. Read-only.
    *
    * @param WorkbookWorksheet[] $val The worksheets
    *
    * @return Workbook
    */
    public function setWorksheets($val)
    {
        $this->_propDict["worksheets"] = $val;
        return $this;
    }

}
