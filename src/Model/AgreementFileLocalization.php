<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AgreementFileLocalization File
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
* AgreementFileLocalization class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AgreementFileLocalization extends AgreementFileProperties
{

     /**
     * Gets the versions
    * Read-only. Customized versions of the terms of use agreement in the Azure AD tenant.
     *
     * @return AgreementFileVersion[]|null The versions
     */
    public function getVersions()
    {
        if (array_key_exists('versions', $this->_propDict) && !is_null($this->_propDict['versions'])) {
            $versions = [];
            if (count($this->_propDict['versions']) > 0 && is_a($this->_propDict['versions'][0], 'AgreementFileVersion')) {
                return $this->_propDict['versions'];
            }
            foreach ($this->_propDict['versions'] as $singleValue) {
                $versions []= new AgreementFileVersion($singleValue);
            }
            $this->_propDict['versions'] = $versions;
            return $this->_propDict['versions'];
        }
        return null;
    }

    /**
    * Sets the versions
    * Read-only. Customized versions of the terms of use agreement in the Azure AD tenant.
    *
    * @param AgreementFileVersion[] $val The versions
    *
    * @return AgreementFileLocalization
    */
    public function setVersions($val)
    {
        $this->_propDict["versions"] = $val;
        return $this;
    }

}
