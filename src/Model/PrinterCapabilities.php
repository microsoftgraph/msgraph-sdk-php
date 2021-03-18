<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrinterCapabilities File
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
* PrinterCapabilities class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrinterCapabilities extends Entity
{
    /**
    * Gets the bottomMargins
    * A list of supported bottom margins(in microns) for the printer.
    *
    * @return int The bottomMargins
    */
    public function getBottomMargins()
    {
        if (array_key_exists("bottomMargins", $this->_propDict)) {
            return $this->_propDict["bottomMargins"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bottomMargins
    * A list of supported bottom margins(in microns) for the printer.
    *
    * @param int $val The value of the bottomMargins
    *
    * @return PrinterCapabilities
    */
    public function setBottomMargins($val)
    {
        $this->_propDict["bottomMargins"] = $val;
        return $this;
    }
    /**
    * Gets the collation
    * True if the printer supports collating when printing muliple copies of a multi-page document; false otherwise.
    *
    * @return bool The collation
    */
    public function getCollation()
    {
        if (array_key_exists("collation", $this->_propDict)) {
            return $this->_propDict["collation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the collation
    * True if the printer supports collating when printing muliple copies of a multi-page document; false otherwise.
    *
    * @param bool $val The value of the collation
    *
    * @return PrinterCapabilities
    */
    public function setCollation($val)
    {
        $this->_propDict["collation"] = $val;
        return $this;
    }

    /**
    * Gets the colorModes
    * The color modes supported by the printer. Valid values are described in the following table.
    *
    * @return PrintColorMode The colorModes
    */
    public function getColorModes()
    {
        if (array_key_exists("colorModes", $this->_propDict)) {
            if (is_a($this->_propDict["colorModes"], "\Microsoft\Graph\Model\PrintColorMode")) {
                return $this->_propDict["colorModes"];
            } else {
                $this->_propDict["colorModes"] = new PrintColorMode($this->_propDict["colorModes"]);
                return $this->_propDict["colorModes"];
            }
        }
        return null;
    }

    /**
    * Sets the colorModes
    * The color modes supported by the printer. Valid values are described in the following table.
    *
    * @param PrintColorMode $val The value to assign to the colorModes
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setColorModes($val)
    {
        $this->_propDict["colorModes"] = $val;
         return $this;
    }
    /**
    * Gets the contentTypes
    * A list of supported content (MIME) types that the printer supports. It is not guaranteed that the Universal Print service supports printing all of these MIME types.
    *
    * @return string The contentTypes
    */
    public function getContentTypes()
    {
        if (array_key_exists("contentTypes", $this->_propDict)) {
            return $this->_propDict["contentTypes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentTypes
    * A list of supported content (MIME) types that the printer supports. It is not guaranteed that the Universal Print service supports printing all of these MIME types.
    *
    * @param string $val The value of the contentTypes
    *
    * @return PrinterCapabilities
    */
    public function setContentTypes($val)
    {
        $this->_propDict["contentTypes"] = $val;
        return $this;
    }

    /**
    * Gets the copiesPerJob
    * The range of copies per job supported by the printer.
    *
    * @return IntegerRange The copiesPerJob
    */
    public function getCopiesPerJob()
    {
        if (array_key_exists("copiesPerJob", $this->_propDict)) {
            if (is_a($this->_propDict["copiesPerJob"], "\Microsoft\Graph\Model\IntegerRange")) {
                return $this->_propDict["copiesPerJob"];
            } else {
                $this->_propDict["copiesPerJob"] = new IntegerRange($this->_propDict["copiesPerJob"]);
                return $this->_propDict["copiesPerJob"];
            }
        }
        return null;
    }

    /**
    * Sets the copiesPerJob
    * The range of copies per job supported by the printer.
    *
    * @param IntegerRange $val The value to assign to the copiesPerJob
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setCopiesPerJob($val)
    {
        $this->_propDict["copiesPerJob"] = $val;
         return $this;
    }
    /**
    * Gets the dpis
    * The list of print resolutions in DPI that are supported by the printer.
    *
    * @return int The dpis
    */
    public function getDpis()
    {
        if (array_key_exists("dpis", $this->_propDict)) {
            return $this->_propDict["dpis"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dpis
    * The list of print resolutions in DPI that are supported by the printer.
    *
    * @param int $val The value of the dpis
    *
    * @return PrinterCapabilities
    */
    public function setDpis($val)
    {
        $this->_propDict["dpis"] = $val;
        return $this;
    }

    /**
    * Gets the duplexModes
    * The list of duplex modes that are supported by the printer. Valid values are described in the following table.
    *
    * @return PrintDuplexMode The duplexModes
    */
    public function getDuplexModes()
    {
        if (array_key_exists("duplexModes", $this->_propDict)) {
            if (is_a($this->_propDict["duplexModes"], "\Microsoft\Graph\Model\PrintDuplexMode")) {
                return $this->_propDict["duplexModes"];
            } else {
                $this->_propDict["duplexModes"] = new PrintDuplexMode($this->_propDict["duplexModes"]);
                return $this->_propDict["duplexModes"];
            }
        }
        return null;
    }

    /**
    * Sets the duplexModes
    * The list of duplex modes that are supported by the printer. Valid values are described in the following table.
    *
    * @param PrintDuplexMode $val The value to assign to the duplexModes
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setDuplexModes($val)
    {
        $this->_propDict["duplexModes"] = $val;
         return $this;
    }

    /**
    * Gets the feedOrientations
    * The list of feed orientations that are supported by the printer.
    *
    * @return PrinterFeedOrientation The feedOrientations
    */
    public function getFeedOrientations()
    {
        if (array_key_exists("feedOrientations", $this->_propDict)) {
            if (is_a($this->_propDict["feedOrientations"], "\Microsoft\Graph\Model\PrinterFeedOrientation")) {
                return $this->_propDict["feedOrientations"];
            } else {
                $this->_propDict["feedOrientations"] = new PrinterFeedOrientation($this->_propDict["feedOrientations"]);
                return $this->_propDict["feedOrientations"];
            }
        }
        return null;
    }

    /**
    * Sets the feedOrientations
    * The list of feed orientations that are supported by the printer.
    *
    * @param PrinterFeedOrientation $val The value to assign to the feedOrientations
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setFeedOrientations($val)
    {
        $this->_propDict["feedOrientations"] = $val;
         return $this;
    }

    /**
    * Gets the finishings
    * Finishing processes the printer supports for a printed document.
    *
    * @return PrintFinishing The finishings
    */
    public function getFinishings()
    {
        if (array_key_exists("finishings", $this->_propDict)) {
            if (is_a($this->_propDict["finishings"], "\Microsoft\Graph\Model\PrintFinishing")) {
                return $this->_propDict["finishings"];
            } else {
                $this->_propDict["finishings"] = new PrintFinishing($this->_propDict["finishings"]);
                return $this->_propDict["finishings"];
            }
        }
        return null;
    }

    /**
    * Sets the finishings
    * Finishing processes the printer supports for a printed document.
    *
    * @param PrintFinishing $val The value to assign to the finishings
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setFinishings($val)
    {
        $this->_propDict["finishings"] = $val;
         return $this;
    }
    /**
    * Gets the inputBins
    * Supported input bins for the printer.
    *
    * @return string The inputBins
    */
    public function getInputBins()
    {
        if (array_key_exists("inputBins", $this->_propDict)) {
            return $this->_propDict["inputBins"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inputBins
    * Supported input bins for the printer.
    *
    * @param string $val The value of the inputBins
    *
    * @return PrinterCapabilities
    */
    public function setInputBins($val)
    {
        $this->_propDict["inputBins"] = $val;
        return $this;
    }
    /**
    * Gets the isColorPrintingSupported
    * True if color printing is supported by the printer; false otherwise. Read-only.
    *
    * @return bool The isColorPrintingSupported
    */
    public function getIsColorPrintingSupported()
    {
        if (array_key_exists("isColorPrintingSupported", $this->_propDict)) {
            return $this->_propDict["isColorPrintingSupported"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isColorPrintingSupported
    * True if color printing is supported by the printer; false otherwise. Read-only.
    *
    * @param bool $val The value of the isColorPrintingSupported
    *
    * @return PrinterCapabilities
    */
    public function setIsColorPrintingSupported($val)
    {
        $this->_propDict["isColorPrintingSupported"] = $val;
        return $this;
    }
    /**
    * Gets the isPageRangeSupported
    * True if the printer supports printing by page ranges; false otherwise.
    *
    * @return bool The isPageRangeSupported
    */
    public function getIsPageRangeSupported()
    {
        if (array_key_exists("isPageRangeSupported", $this->_propDict)) {
            return $this->_propDict["isPageRangeSupported"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isPageRangeSupported
    * True if the printer supports printing by page ranges; false otherwise.
    *
    * @param bool $val The value of the isPageRangeSupported
    *
    * @return PrinterCapabilities
    */
    public function setIsPageRangeSupported($val)
    {
        $this->_propDict["isPageRangeSupported"] = $val;
        return $this;
    }
    /**
    * Gets the leftMargins
    * A list of supported left margins(in microns) for the printer.
    *
    * @return int The leftMargins
    */
    public function getLeftMargins()
    {
        if (array_key_exists("leftMargins", $this->_propDict)) {
            return $this->_propDict["leftMargins"];
        } else {
            return null;
        }
    }

    /**
    * Sets the leftMargins
    * A list of supported left margins(in microns) for the printer.
    *
    * @param int $val The value of the leftMargins
    *
    * @return PrinterCapabilities
    */
    public function setLeftMargins($val)
    {
        $this->_propDict["leftMargins"] = $val;
        return $this;
    }
    /**
    * Gets the mediaColors
    * The media (i.e., paper) colors supported by the printer.
    *
    * @return string The mediaColors
    */
    public function getMediaColors()
    {
        if (array_key_exists("mediaColors", $this->_propDict)) {
            return $this->_propDict["mediaColors"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mediaColors
    * The media (i.e., paper) colors supported by the printer.
    *
    * @param string $val The value of the mediaColors
    *
    * @return PrinterCapabilities
    */
    public function setMediaColors($val)
    {
        $this->_propDict["mediaColors"] = $val;
        return $this;
    }
    /**
    * Gets the mediaSizes
    * The media sizes supported by the printer. Supports standard size names for ISO and ANSI media sizes, along with any custom sizes supported by the associated printer.
    *
    * @return string The mediaSizes
    */
    public function getMediaSizes()
    {
        if (array_key_exists("mediaSizes", $this->_propDict)) {
            return $this->_propDict["mediaSizes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mediaSizes
    * The media sizes supported by the printer. Supports standard size names for ISO and ANSI media sizes, along with any custom sizes supported by the associated printer.
    *
    * @param string $val The value of the mediaSizes
    *
    * @return PrinterCapabilities
    */
    public function setMediaSizes($val)
    {
        $this->_propDict["mediaSizes"] = $val;
        return $this;
    }
    /**
    * Gets the mediaTypes
    * The media types supported by the printer. Valid values are described in the following table.
    *
    * @return string The mediaTypes
    */
    public function getMediaTypes()
    {
        if (array_key_exists("mediaTypes", $this->_propDict)) {
            return $this->_propDict["mediaTypes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mediaTypes
    * The media types supported by the printer. Valid values are described in the following table.
    *
    * @param string $val The value of the mediaTypes
    *
    * @return PrinterCapabilities
    */
    public function setMediaTypes($val)
    {
        $this->_propDict["mediaTypes"] = $val;
        return $this;
    }

    /**
    * Gets the multipageLayouts
    * The presentation directions supported by the printer. Supported values are described in the following table.
    *
    * @return PrintMultipageLayout The multipageLayouts
    */
    public function getMultipageLayouts()
    {
        if (array_key_exists("multipageLayouts", $this->_propDict)) {
            if (is_a($this->_propDict["multipageLayouts"], "\Microsoft\Graph\Model\PrintMultipageLayout")) {
                return $this->_propDict["multipageLayouts"];
            } else {
                $this->_propDict["multipageLayouts"] = new PrintMultipageLayout($this->_propDict["multipageLayouts"]);
                return $this->_propDict["multipageLayouts"];
            }
        }
        return null;
    }

    /**
    * Sets the multipageLayouts
    * The presentation directions supported by the printer. Supported values are described in the following table.
    *
    * @param PrintMultipageLayout $val The value to assign to the multipageLayouts
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setMultipageLayouts($val)
    {
        $this->_propDict["multipageLayouts"] = $val;
         return $this;
    }

    /**
    * Gets the orientations
    * The print orientations supported by the printer. Valid values are described in the following table.
    *
    * @return PrintOrientation The orientations
    */
    public function getOrientations()
    {
        if (array_key_exists("orientations", $this->_propDict)) {
            if (is_a($this->_propDict["orientations"], "\Microsoft\Graph\Model\PrintOrientation")) {
                return $this->_propDict["orientations"];
            } else {
                $this->_propDict["orientations"] = new PrintOrientation($this->_propDict["orientations"]);
                return $this->_propDict["orientations"];
            }
        }
        return null;
    }

    /**
    * Sets the orientations
    * The print orientations supported by the printer. Valid values are described in the following table.
    *
    * @param PrintOrientation $val The value to assign to the orientations
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setOrientations($val)
    {
        $this->_propDict["orientations"] = $val;
         return $this;
    }
    /**
    * Gets the outputBins
    * The printer's supported output bins (trays).
    *
    * @return string The outputBins
    */
    public function getOutputBins()
    {
        if (array_key_exists("outputBins", $this->_propDict)) {
            return $this->_propDict["outputBins"];
        } else {
            return null;
        }
    }

    /**
    * Sets the outputBins
    * The printer's supported output bins (trays).
    *
    * @param string $val The value of the outputBins
    *
    * @return PrinterCapabilities
    */
    public function setOutputBins($val)
    {
        $this->_propDict["outputBins"] = $val;
        return $this;
    }
    /**
    * Gets the pagesPerSheet
    * Supported number of Input Pages to impose upon a single Impression.
    *
    * @return int The pagesPerSheet
    */
    public function getPagesPerSheet()
    {
        if (array_key_exists("pagesPerSheet", $this->_propDict)) {
            return $this->_propDict["pagesPerSheet"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pagesPerSheet
    * Supported number of Input Pages to impose upon a single Impression.
    *
    * @param int $val The value of the pagesPerSheet
    *
    * @return PrinterCapabilities
    */
    public function setPagesPerSheet($val)
    {
        $this->_propDict["pagesPerSheet"] = $val;
        return $this;
    }

    /**
    * Gets the qualities
    * The print qualities supported by the printer.
    *
    * @return PrintQuality The qualities
    */
    public function getQualities()
    {
        if (array_key_exists("qualities", $this->_propDict)) {
            if (is_a($this->_propDict["qualities"], "\Microsoft\Graph\Model\PrintQuality")) {
                return $this->_propDict["qualities"];
            } else {
                $this->_propDict["qualities"] = new PrintQuality($this->_propDict["qualities"]);
                return $this->_propDict["qualities"];
            }
        }
        return null;
    }

    /**
    * Sets the qualities
    * The print qualities supported by the printer.
    *
    * @param PrintQuality $val The value to assign to the qualities
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setQualities($val)
    {
        $this->_propDict["qualities"] = $val;
         return $this;
    }
    /**
    * Gets the rightMargins
    * A list of supported right margins(in microns) for the printer.
    *
    * @return int The rightMargins
    */
    public function getRightMargins()
    {
        if (array_key_exists("rightMargins", $this->_propDict)) {
            return $this->_propDict["rightMargins"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rightMargins
    * A list of supported right margins(in microns) for the printer.
    *
    * @param int $val The value of the rightMargins
    *
    * @return PrinterCapabilities
    */
    public function setRightMargins($val)
    {
        $this->_propDict["rightMargins"] = $val;
        return $this;
    }

    /**
    * Gets the scalings
    * Supported print scalings.
    *
    * @return PrintScaling The scalings
    */
    public function getScalings()
    {
        if (array_key_exists("scalings", $this->_propDict)) {
            if (is_a($this->_propDict["scalings"], "\Microsoft\Graph\Model\PrintScaling")) {
                return $this->_propDict["scalings"];
            } else {
                $this->_propDict["scalings"] = new PrintScaling($this->_propDict["scalings"]);
                return $this->_propDict["scalings"];
            }
        }
        return null;
    }

    /**
    * Sets the scalings
    * Supported print scalings.
    *
    * @param PrintScaling $val The value to assign to the scalings
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setScalings($val)
    {
        $this->_propDict["scalings"] = $val;
         return $this;
    }
    /**
    * Gets the supportsFitPdfToPage
    * True if the printer supports scaling PDF pages to match the print media size; false otherwise.
    *
    * @return bool The supportsFitPdfToPage
    */
    public function getSupportsFitPdfToPage()
    {
        if (array_key_exists("supportsFitPdfToPage", $this->_propDict)) {
            return $this->_propDict["supportsFitPdfToPage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the supportsFitPdfToPage
    * True if the printer supports scaling PDF pages to match the print media size; false otherwise.
    *
    * @param bool $val The value of the supportsFitPdfToPage
    *
    * @return PrinterCapabilities
    */
    public function setSupportsFitPdfToPage($val)
    {
        $this->_propDict["supportsFitPdfToPage"] = $val;
        return $this;
    }
    /**
    * Gets the topMargins
    * A list of supported top margins(in microns) for the printer.
    *
    * @return int The topMargins
    */
    public function getTopMargins()
    {
        if (array_key_exists("topMargins", $this->_propDict)) {
            return $this->_propDict["topMargins"];
        } else {
            return null;
        }
    }

    /**
    * Sets the topMargins
    * A list of supported top margins(in microns) for the printer.
    *
    * @param int $val The value of the topMargins
    *
    * @return PrinterCapabilities
    */
    public function setTopMargins($val)
    {
        $this->_propDict["topMargins"] = $val;
        return $this;
    }
}
