<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Authentication File
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
* Authentication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Authentication extends Entity
{

     /** 
     * Gets the fido2Methods
     *
     * @return Fido2AuthenticationMethod[]|null The fido2Methods
     */
    public function getFido2Methods()
    {
        if (array_key_exists('fido2Methods', $this->_propDict) && !is_null($this->_propDict['fido2Methods'])) {
            $fido2Methods = [];
            if (count($this->_propDict['fido2Methods']) > 0 && is_a($this->_propDict['fido2Methods'][0], 'Fido2AuthenticationMethod')) {
                return $this->_propDict['fido2Methods'];
            }
            foreach ($this->_propDict['fido2Methods'] as $singleValue) {
                $fido2Methods []= new Fido2AuthenticationMethod($singleValue);
            }
            $this->_propDict['fido2Methods'] = $fido2Methods;
            return $this->_propDict['fido2Methods'];
        }
        return null;
    }
    
    /** 
    * Sets the fido2Methods
    *
    * @param Fido2AuthenticationMethod[] $val The fido2Methods
    *
    * @return Authentication
    */
    public function setFido2Methods($val)
    {
        $this->_propDict["fido2Methods"] = $val;
        return $this;
    }
    

     /** 
     * Gets the methods
     *
     * @return AuthenticationMethod[]|null The methods
     */
    public function getMethods()
    {
        if (array_key_exists('methods', $this->_propDict) && !is_null($this->_propDict['methods'])) {
            $methods = [];
            if (count($this->_propDict['methods']) > 0 && is_a($this->_propDict['methods'][0], 'AuthenticationMethod')) {
                return $this->_propDict['methods'];
            }
            foreach ($this->_propDict['methods'] as $singleValue) {
                $methods []= new AuthenticationMethod($singleValue);
            }
            $this->_propDict['methods'] = $methods;
            return $this->_propDict['methods'];
        }
        return null;
    }
    
    /** 
    * Sets the methods
    *
    * @param AuthenticationMethod[] $val The methods
    *
    * @return Authentication
    */
    public function setMethods($val)
    {
        $this->_propDict["methods"] = $val;
        return $this;
    }
    

     /** 
     * Gets the microsoftAuthenticatorMethods
     *
     * @return MicrosoftAuthenticatorAuthenticationMethod[]|null The microsoftAuthenticatorMethods
     */
    public function getMicrosoftAuthenticatorMethods()
    {
        if (array_key_exists('microsoftAuthenticatorMethods', $this->_propDict) && !is_null($this->_propDict['microsoftAuthenticatorMethods'])) {
            $microsoftAuthenticatorMethods = [];
            if (count($this->_propDict['microsoftAuthenticatorMethods']) > 0 && is_a($this->_propDict['microsoftAuthenticatorMethods'][0], 'MicrosoftAuthenticatorAuthenticationMethod')) {
                return $this->_propDict['microsoftAuthenticatorMethods'];
            }
            foreach ($this->_propDict['microsoftAuthenticatorMethods'] as $singleValue) {
                $microsoftAuthenticatorMethods []= new MicrosoftAuthenticatorAuthenticationMethod($singleValue);
            }
            $this->_propDict['microsoftAuthenticatorMethods'] = $microsoftAuthenticatorMethods;
            return $this->_propDict['microsoftAuthenticatorMethods'];
        }
        return null;
    }
    
    /** 
    * Sets the microsoftAuthenticatorMethods
    *
    * @param MicrosoftAuthenticatorAuthenticationMethod[] $val The microsoftAuthenticatorMethods
    *
    * @return Authentication
    */
    public function setMicrosoftAuthenticatorMethods($val)
    {
        $this->_propDict["microsoftAuthenticatorMethods"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsHelloForBusinessMethods
     *
     * @return WindowsHelloForBusinessAuthenticationMethod[]|null The windowsHelloForBusinessMethods
     */
    public function getWindowsHelloForBusinessMethods()
    {
        if (array_key_exists('windowsHelloForBusinessMethods', $this->_propDict) && !is_null($this->_propDict['windowsHelloForBusinessMethods'])) {
            $windowsHelloForBusinessMethods = [];
            if (count($this->_propDict['windowsHelloForBusinessMethods']) > 0 && is_a($this->_propDict['windowsHelloForBusinessMethods'][0], 'WindowsHelloForBusinessAuthenticationMethod')) {
                return $this->_propDict['windowsHelloForBusinessMethods'];
            }
            foreach ($this->_propDict['windowsHelloForBusinessMethods'] as $singleValue) {
                $windowsHelloForBusinessMethods []= new WindowsHelloForBusinessAuthenticationMethod($singleValue);
            }
            $this->_propDict['windowsHelloForBusinessMethods'] = $windowsHelloForBusinessMethods;
            return $this->_propDict['windowsHelloForBusinessMethods'];
        }
        return null;
    }
    
    /** 
    * Sets the windowsHelloForBusinessMethods
    *
    * @param WindowsHelloForBusinessAuthenticationMethod[] $val The windowsHelloForBusinessMethods
    *
    * @return Authentication
    */
    public function setWindowsHelloForBusinessMethods($val)
    {
        $this->_propDict["windowsHelloForBusinessMethods"] = $val;
        return $this;
    }
    
}
