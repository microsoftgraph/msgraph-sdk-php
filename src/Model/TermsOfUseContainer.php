<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TermsOfUseContainer File
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
* TermsOfUseContainer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TermsOfUseContainer extends Entity
{

     /** 
     * Gets the agreementAcceptances
     *
     * @return AgreementAcceptance[]|null The agreementAcceptances
     */
    public function getAgreementAcceptances()
    {
        if (array_key_exists('agreementAcceptances', $this->_propDict) && !is_null($this->_propDict['agreementAcceptances'])) {
            $agreementAcceptances = [];
            if (count($this->_propDict['agreementAcceptances']) > 0 && is_a($this->_propDict['agreementAcceptances'][0], 'AgreementAcceptance')) {
                return $this->_propDict['agreementAcceptances'];
            }
            foreach ($this->_propDict['agreementAcceptances'] as $singleValue) {
                $agreementAcceptances []= new AgreementAcceptance($singleValue);
            }
            $this->_propDict['agreementAcceptances'] = $agreementAcceptances;
            return $this->_propDict['agreementAcceptances'];
        }
        return null;
    }
    
    /** 
    * Sets the agreementAcceptances
    *
    * @param AgreementAcceptance[] $val The agreementAcceptances
    *
    * @return TermsOfUseContainer
    */
    public function setAgreementAcceptances($val)
    {
        $this->_propDict["agreementAcceptances"] = $val;
        return $this;
    }
    

     /** 
     * Gets the agreements
     *
     * @return Agreement[]|null The agreements
     */
    public function getAgreements()
    {
        if (array_key_exists('agreements', $this->_propDict) && !is_null($this->_propDict['agreements'])) {
            $agreements = [];
            if (count($this->_propDict['agreements']) > 0 && is_a($this->_propDict['agreements'][0], 'Agreement')) {
                return $this->_propDict['agreements'];
            }
            foreach ($this->_propDict['agreements'] as $singleValue) {
                $agreements []= new Agreement($singleValue);
            }
            $this->_propDict['agreements'] = $agreements;
            return $this->_propDict['agreements'];
        }
        return null;
    }
    
    /** 
    * Sets the agreements
    *
    * @param Agreement[] $val The agreements
    *
    * @return TermsOfUseContainer
    */
    public function setAgreements($val)
    {
        $this->_propDict["agreements"] = $val;
        return $this;
    }
    
}
