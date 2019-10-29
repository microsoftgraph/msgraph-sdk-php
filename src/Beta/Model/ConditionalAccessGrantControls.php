<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessGrantControls File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* ConditionalAccessGrantControls class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ConditionalAccessGrantControls extends Entity
{
    /**
    * Gets the operator
    *
    * @return string The operator
    */
    public function getOperator()
    {
        if (array_key_exists("operator", $this->_propDict)) {
            return $this->_propDict["operator"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operator
    *
    * @param string $val The value of the operator
    *
    * @return ConditionalAccessGrantControls
    */
    public function setOperator($val)
    {
        $this->_propDict["operator"] = $val;
        return $this;
    }

    /**
    * Gets the builtInControls
    *
    * @return ConditionalAccessGrantControl The builtInControls
    */
    public function getBuiltInControls()
    {
        if (array_key_exists("builtInControls", $this->_propDict)) {
            if (is_a($this->_propDict["builtInControls"], "Microsoft\Graph\Beta\Model\ConditionalAccessGrantControl")) {
                return $this->_propDict["builtInControls"];
            } else {
                $this->_propDict["builtInControls"] = new ConditionalAccessGrantControl($this->_propDict["builtInControls"]);
                return $this->_propDict["builtInControls"];
            }
        }
        return null;
    }

    /**
    * Sets the builtInControls
    *
    * @param ConditionalAccessGrantControl $val The value to assign to the builtInControls
    *
    * @return ConditionalAccessGrantControls The ConditionalAccessGrantControls
    */
    public function setBuiltInControls($val)
    {
        $this->_propDict["builtInControls"] = $val;
         return $this;
    }
    /**
    * Gets the customAuthenticationFactors
    *
    * @return string The customAuthenticationFactors
    */
    public function getCustomAuthenticationFactors()
    {
        if (array_key_exists("customAuthenticationFactors", $this->_propDict)) {
            return $this->_propDict["customAuthenticationFactors"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customAuthenticationFactors
    *
    * @param string $val The value of the customAuthenticationFactors
    *
    * @return ConditionalAccessGrantControls
    */
    public function setCustomAuthenticationFactors($val)
    {
        $this->_propDict["customAuthenticationFactors"] = $val;
        return $this;
    }
    /**
    * Gets the termsOfUse
    *
    * @return string The termsOfUse
    */
    public function getTermsOfUse()
    {
        if (array_key_exists("termsOfUse", $this->_propDict)) {
            return $this->_propDict["termsOfUse"];
        } else {
            return null;
        }
    }

    /**
    * Sets the termsOfUse
    *
    * @param string $val The value of the termsOfUse
    *
    * @return ConditionalAccessGrantControls
    */
    public function setTermsOfUse($val)
    {
        $this->_propDict["termsOfUse"] = $val;
        return $this;
    }
}
