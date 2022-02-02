<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AgreementFile File
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
* AgreementFile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AgreementFile extends AgreementFileProperties
{

     /**
     * Gets the localizations
    * The localized version of the terms of use agreement files attached to the agreement.
     *
     * @return AgreementFileLocalization[]|null The localizations
     */
    public function getLocalizations()
    {
        if (array_key_exists('localizations', $this->_propDict) && !is_null($this->_propDict['localizations'])) {
            $localizations = [];
            if (count($this->_propDict['localizations']) > 0 && is_a($this->_propDict['localizations'][0], 'AgreementFileLocalization')) {
                return $this->_propDict['localizations'];
            }
            foreach ($this->_propDict['localizations'] as $singleValue) {
                $localizations []= new AgreementFileLocalization($singleValue);
            }
            $this->_propDict['localizations'] = $localizations;
            return $this->_propDict['localizations'];
        }
        return null;
    }

    /**
    * Sets the localizations
    * The localized version of the terms of use agreement files attached to the agreement.
    *
    * @param AgreementFileLocalization[] $val The localizations
    *
    * @return AgreementFile
    */
    public function setLocalizations($val)
    {
        $this->_propDict["localizations"] = $val;
        return $this;
    }

}
