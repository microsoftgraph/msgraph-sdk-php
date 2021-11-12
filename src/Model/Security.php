<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Security File
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
* Security class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Security extends Entity
{

     /**
     * Gets the alerts
    * Read-only. Nullable.
     *
     * @return Alert[]|null The alerts
     */
    public function getAlerts()
    {
        if (array_key_exists('alerts', $this->_propDict) && !is_null($this->_propDict['alerts'])) {
            $alerts = [];
            if (count($this->_propDict['alerts']) > 0 && is_a($this->_propDict['alerts'][0], 'Alert')) {
                return $this->_propDict['alerts'];
            }
            foreach ($this->_propDict['alerts'] as $singleValue) {
                $alerts []= new Alert($singleValue);
            }
            $this->_propDict['alerts'] = $alerts;
            return $this->_propDict['alerts'];
        }
        return null;
    }

    /**
    * Sets the alerts
    * Read-only. Nullable.
    *
    * @param Alert[] $val The alerts
    *
    * @return Security
    */
    public function setAlerts($val)
    {
        $this->_propDict["alerts"] = $val;
        return $this;
    }


     /**
     * Gets the secureScoreControlProfiles
     *
     * @return SecureScoreControlProfile[]|null The secureScoreControlProfiles
     */
    public function getSecureScoreControlProfiles()
    {
        if (array_key_exists('secureScoreControlProfiles', $this->_propDict) && !is_null($this->_propDict['secureScoreControlProfiles'])) {
            $secureScoreControlProfiles = [];
            if (count($this->_propDict['secureScoreControlProfiles']) > 0 && is_a($this->_propDict['secureScoreControlProfiles'][0], 'SecureScoreControlProfile')) {
                return $this->_propDict['secureScoreControlProfiles'];
            }
            foreach ($this->_propDict['secureScoreControlProfiles'] as $singleValue) {
                $secureScoreControlProfiles []= new SecureScoreControlProfile($singleValue);
            }
            $this->_propDict['secureScoreControlProfiles'] = $secureScoreControlProfiles;
            return $this->_propDict['secureScoreControlProfiles'];
        }
        return null;
    }

    /**
    * Sets the secureScoreControlProfiles
    *
    * @param SecureScoreControlProfile[] $val The secureScoreControlProfiles
    *
    * @return Security
    */
    public function setSecureScoreControlProfiles($val)
    {
        $this->_propDict["secureScoreControlProfiles"] = $val;
        return $this;
    }


     /**
     * Gets the secureScores
     *
     * @return SecureScore[]|null The secureScores
     */
    public function getSecureScores()
    {
        if (array_key_exists('secureScores', $this->_propDict) && !is_null($this->_propDict['secureScores'])) {
            $secureScores = [];
            if (count($this->_propDict['secureScores']) > 0 && is_a($this->_propDict['secureScores'][0], 'SecureScore')) {
                return $this->_propDict['secureScores'];
            }
            foreach ($this->_propDict['secureScores'] as $singleValue) {
                $secureScores []= new SecureScore($singleValue);
            }
            $this->_propDict['secureScores'] = $secureScores;
            return $this->_propDict['secureScores'];
        }
        return null;
    }

    /**
    * Sets the secureScores
    *
    * @param SecureScore[] $val The secureScores
    *
    * @return Security
    */
    public function setSecureScores($val)
    {
        $this->_propDict["secureScores"] = $val;
        return $this;
    }

}
