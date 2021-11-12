<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Bitlocker File
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
* Bitlocker class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Bitlocker extends Entity
{

     /**
     * Gets the recoveryKeys
    * The recovery keys associated with the bitlocker entity.
     *
     * @return BitlockerRecoveryKey[]|null The recoveryKeys
     */
    public function getRecoveryKeys()
    {
        if (array_key_exists('recoveryKeys', $this->_propDict) && !is_null($this->_propDict['recoveryKeys'])) {
            $recoveryKeys = [];
            if (count($this->_propDict['recoveryKeys']) > 0 && is_a($this->_propDict['recoveryKeys'][0], 'BitlockerRecoveryKey')) {
                return $this->_propDict['recoveryKeys'];
            }
            foreach ($this->_propDict['recoveryKeys'] as $singleValue) {
                $recoveryKeys []= new BitlockerRecoveryKey($singleValue);
            }
            $this->_propDict['recoveryKeys'] = $recoveryKeys;
            return $this->_propDict['recoveryKeys'];
        }
        return null;
    }

    /**
    * Sets the recoveryKeys
    * The recovery keys associated with the bitlocker entity.
    *
    * @param BitlockerRecoveryKey[] $val The recoveryKeys
    *
    * @return Bitlocker
    */
    public function setRecoveryKeys($val)
    {
        $this->_propDict["recoveryKeys"] = $val;
        return $this;
    }

}
