<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppContent File
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
* MobileAppContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileAppContent extends Entity
{

     /**
     * Gets the files
    * The list of files for this app content version.
     *
     * @return MobileAppContentFile[]|null The files
     */
    public function getFiles()
    {
        if (array_key_exists('files', $this->_propDict) && !is_null($this->_propDict['files'])) {
            $files = [];
            if (count($this->_propDict['files']) > 0 && is_a($this->_propDict['files'][0], 'MobileAppContentFile')) {
                return $this->_propDict['files'];
            }
            foreach ($this->_propDict['files'] as $singleValue) {
                $files []= new MobileAppContentFile($singleValue);
            }
            $this->_propDict['files'] = $files;
            return $this->_propDict['files'];
        }
        return null;
    }

    /**
    * Sets the files
    * The list of files for this app content version.
    *
    * @param MobileAppContentFile[] $val The files
    *
    * @return MobileAppContent
    */
    public function setFiles($val)
    {
        $this->_propDict["files"] = $val;
        return $this;
    }

}
