<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ReportRoot File
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
* ReportRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ReportRoot extends Entity
{

     /**
     * Gets the dailyPrintUsageByPrinter
     *
     * @return PrintUsageByPrinter[]|null The dailyPrintUsageByPrinter
     */
    public function getDailyPrintUsageByPrinter()
    {
        if (array_key_exists('dailyPrintUsageByPrinter', $this->_propDict) && !is_null($this->_propDict['dailyPrintUsageByPrinter'])) {
            $dailyPrintUsageByPrinter = [];
            if (count($this->_propDict['dailyPrintUsageByPrinter']) > 0 && is_a($this->_propDict['dailyPrintUsageByPrinter'][0], 'PrintUsageByPrinter')) {
                return $this->_propDict['dailyPrintUsageByPrinter'];
            }
            foreach ($this->_propDict['dailyPrintUsageByPrinter'] as $singleValue) {
                $dailyPrintUsageByPrinter []= new PrintUsageByPrinter($singleValue);
            }
            $this->_propDict['dailyPrintUsageByPrinter'] = $dailyPrintUsageByPrinter;
            return $this->_propDict['dailyPrintUsageByPrinter'];
        }
        return null;
    }

    /**
    * Sets the dailyPrintUsageByPrinter
    *
    * @param PrintUsageByPrinter[] $val The dailyPrintUsageByPrinter
    *
    * @return ReportRoot
    */
    public function setDailyPrintUsageByPrinter($val)
    {
        $this->_propDict["dailyPrintUsageByPrinter"] = $val;
        return $this;
    }


     /**
     * Gets the dailyPrintUsageByUser
     *
     * @return PrintUsageByUser[]|null The dailyPrintUsageByUser
     */
    public function getDailyPrintUsageByUser()
    {
        if (array_key_exists('dailyPrintUsageByUser', $this->_propDict) && !is_null($this->_propDict['dailyPrintUsageByUser'])) {
            $dailyPrintUsageByUser = [];
            if (count($this->_propDict['dailyPrintUsageByUser']) > 0 && is_a($this->_propDict['dailyPrintUsageByUser'][0], 'PrintUsageByUser')) {
                return $this->_propDict['dailyPrintUsageByUser'];
            }
            foreach ($this->_propDict['dailyPrintUsageByUser'] as $singleValue) {
                $dailyPrintUsageByUser []= new PrintUsageByUser($singleValue);
            }
            $this->_propDict['dailyPrintUsageByUser'] = $dailyPrintUsageByUser;
            return $this->_propDict['dailyPrintUsageByUser'];
        }
        return null;
    }

    /**
    * Sets the dailyPrintUsageByUser
    *
    * @param PrintUsageByUser[] $val The dailyPrintUsageByUser
    *
    * @return ReportRoot
    */
    public function setDailyPrintUsageByUser($val)
    {
        $this->_propDict["dailyPrintUsageByUser"] = $val;
        return $this;
    }


     /**
     * Gets the monthlyPrintUsageByPrinter
     *
     * @return PrintUsageByPrinter[]|null The monthlyPrintUsageByPrinter
     */
    public function getMonthlyPrintUsageByPrinter()
    {
        if (array_key_exists('monthlyPrintUsageByPrinter', $this->_propDict) && !is_null($this->_propDict['monthlyPrintUsageByPrinter'])) {
            $monthlyPrintUsageByPrinter = [];
            if (count($this->_propDict['monthlyPrintUsageByPrinter']) > 0 && is_a($this->_propDict['monthlyPrintUsageByPrinter'][0], 'PrintUsageByPrinter')) {
                return $this->_propDict['monthlyPrintUsageByPrinter'];
            }
            foreach ($this->_propDict['monthlyPrintUsageByPrinter'] as $singleValue) {
                $monthlyPrintUsageByPrinter []= new PrintUsageByPrinter($singleValue);
            }
            $this->_propDict['monthlyPrintUsageByPrinter'] = $monthlyPrintUsageByPrinter;
            return $this->_propDict['monthlyPrintUsageByPrinter'];
        }
        return null;
    }

    /**
    * Sets the monthlyPrintUsageByPrinter
    *
    * @param PrintUsageByPrinter[] $val The monthlyPrintUsageByPrinter
    *
    * @return ReportRoot
    */
    public function setMonthlyPrintUsageByPrinter($val)
    {
        $this->_propDict["monthlyPrintUsageByPrinter"] = $val;
        return $this;
    }


     /**
     * Gets the monthlyPrintUsageByUser
     *
     * @return PrintUsageByUser[]|null The monthlyPrintUsageByUser
     */
    public function getMonthlyPrintUsageByUser()
    {
        if (array_key_exists('monthlyPrintUsageByUser', $this->_propDict) && !is_null($this->_propDict['monthlyPrintUsageByUser'])) {
            $monthlyPrintUsageByUser = [];
            if (count($this->_propDict['monthlyPrintUsageByUser']) > 0 && is_a($this->_propDict['monthlyPrintUsageByUser'][0], 'PrintUsageByUser')) {
                return $this->_propDict['monthlyPrintUsageByUser'];
            }
            foreach ($this->_propDict['monthlyPrintUsageByUser'] as $singleValue) {
                $monthlyPrintUsageByUser []= new PrintUsageByUser($singleValue);
            }
            $this->_propDict['monthlyPrintUsageByUser'] = $monthlyPrintUsageByUser;
            return $this->_propDict['monthlyPrintUsageByUser'];
        }
        return null;
    }

    /**
    * Sets the monthlyPrintUsageByUser
    *
    * @param PrintUsageByUser[] $val The monthlyPrintUsageByUser
    *
    * @return ReportRoot
    */
    public function setMonthlyPrintUsageByUser($val)
    {
        $this->_propDict["monthlyPrintUsageByUser"] = $val;
        return $this;
    }

}
