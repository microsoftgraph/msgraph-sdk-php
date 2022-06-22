<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class OrganizationalBrandingProperties extends Entity implements Parsable 
{
    /**
     * @var string|null $backgroundColor Color that appears in place of the background image in low-bandwidth connections. We recommend that you use the primary color of your banner logo or your organization color. Specify this in hexadecimal format, for example, white is #FFFFFF.
    */
    private ?string $backgroundColor = null;
    
    /**
     * @var StreamInterface|null $backgroundImage Image that appears as the background of the sign-in page. The allowed types are PNG or JPEG not smaller than 300 KB and not larger than 1920 × 1080 pixels. A smaller image will reduce bandwidth requirements and make the page load faster.
    */
    private ?StreamInterface $backgroundImage = null;
    
    /**
     * @var string|null $backgroundImageRelativeUrl A relative URL for the backgroundImage property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only.
    */
    private ?string $backgroundImageRelativeUrl = null;
    
    /**
     * @var StreamInterface|null $bannerLogo A banner version of your company logo that appears on the sign-in page. The allowed types are PNG or JPEG not larger than 36 × 245 pixels. We recommend using a transparent image with no padding around the logo.
    */
    private ?StreamInterface $bannerLogo = null;
    
    /**
     * @var string|null $bannerLogoRelativeUrl A relative URL for the bannerLogo property that is combined with a CDN base URL from the cdnList to provide the read-only version served by a CDN. Read-only.
    */
    private ?string $bannerLogoRelativeUrl = null;
    
    /**
     * @var array<string>|null $cdnList A list of base URLs for all available CDN providers that are serving the assets of the current resource. Several CDN providers are used at the same time for high availability of read requests. Read-only.
    */
    private ?array $cdnList = null;
    
    /**
     * @var string|null $signInPageText Text that appears at the bottom of the sign-in box. Use this to communicate additional information, such as the phone number to your help desk or a legal statement. This text must be in Unicode format and not exceed 1024 characters.
    */
    private ?string $signInPageText = null;
    
    /**
     * @var StreamInterface|null $squareLogo A square version of your company logo that appears in Windows 10 out-of-box experiences (OOBE) and when Windows Autopilot is enabled for deployment. Allowed types are PNG or JPEG not larger than 240 x 240 pixels and not more than 10 KB in size. We recommend using a transparent image with no padding around the logo.
    */
    private ?StreamInterface $squareLogo = null;
    
    /**
     * @var string|null $squareLogoRelativeUrl A relative URL for the squareLogo property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only.
    */
    private ?string $squareLogoRelativeUrl = null;
    
    /**
     * @var string|null $usernameHintText A string that shows as the hint in the username textbox on the sign-in screen. This text must be a Unicode, without links or code, and can't exceed 64 characters.
    */
    private ?string $usernameHintText = null;
    
    /**
     * Instantiates a new organizationalBrandingProperties and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationalBrandingProperties
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationalBrandingProperties {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.organizationalBranding': return new OrganizationalBranding();
                case '#microsoft.graph.organizationalBrandingLocalization': return new OrganizationalBrandingLocalization();
            }
        }
        return new OrganizationalBrandingProperties();
    }

    /**
     * Gets the backgroundColor property value. Color that appears in place of the background image in low-bandwidth connections. We recommend that you use the primary color of your banner logo or your organization color. Specify this in hexadecimal format, for example, white is #FFFFFF.
     * @return string|null
    */
    public function getBackgroundColor(): ?string {
        return $this->backgroundColor;
    }

    /**
     * Gets the backgroundImage property value. Image that appears as the background of the sign-in page. The allowed types are PNG or JPEG not smaller than 300 KB and not larger than 1920 × 1080 pixels. A smaller image will reduce bandwidth requirements and make the page load faster.
     * @return StreamInterface|null
    */
    public function getBackgroundImage(): ?StreamInterface {
        return $this->backgroundImage;
    }

    /**
     * Gets the backgroundImageRelativeUrl property value. A relative URL for the backgroundImage property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only.
     * @return string|null
    */
    public function getBackgroundImageRelativeUrl(): ?string {
        return $this->backgroundImageRelativeUrl;
    }

    /**
     * Gets the bannerLogo property value. A banner version of your company logo that appears on the sign-in page. The allowed types are PNG or JPEG not larger than 36 × 245 pixels. We recommend using a transparent image with no padding around the logo.
     * @return StreamInterface|null
    */
    public function getBannerLogo(): ?StreamInterface {
        return $this->bannerLogo;
    }

    /**
     * Gets the bannerLogoRelativeUrl property value. A relative URL for the bannerLogo property that is combined with a CDN base URL from the cdnList to provide the read-only version served by a CDN. Read-only.
     * @return string|null
    */
    public function getBannerLogoRelativeUrl(): ?string {
        return $this->bannerLogoRelativeUrl;
    }

    /**
     * Gets the cdnList property value. A list of base URLs for all available CDN providers that are serving the assets of the current resource. Several CDN providers are used at the same time for high availability of read requests. Read-only.
     * @return array<string>|null
    */
    public function getCdnList(): ?array {
        return $this->cdnList;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'backgroundColor' => function (ParseNode $n) use ($o) { $o->setBackgroundColor($n->getStringValue()); },
            'backgroundImage' => function (ParseNode $n) use ($o) { $o->setBackgroundImage($n->getBinaryContent()); },
            'backgroundImageRelativeUrl' => function (ParseNode $n) use ($o) { $o->setBackgroundImageRelativeUrl($n->getStringValue()); },
            'bannerLogo' => function (ParseNode $n) use ($o) { $o->setBannerLogo($n->getBinaryContent()); },
            'bannerLogoRelativeUrl' => function (ParseNode $n) use ($o) { $o->setBannerLogoRelativeUrl($n->getStringValue()); },
            'cdnList' => function (ParseNode $n) use ($o) { $o->setCdnList($n->getCollectionOfPrimitiveValues()); },
            'signInPageText' => function (ParseNode $n) use ($o) { $o->setSignInPageText($n->getStringValue()); },
            'squareLogo' => function (ParseNode $n) use ($o) { $o->setSquareLogo($n->getBinaryContent()); },
            'squareLogoRelativeUrl' => function (ParseNode $n) use ($o) { $o->setSquareLogoRelativeUrl($n->getStringValue()); },
            'usernameHintText' => function (ParseNode $n) use ($o) { $o->setUsernameHintText($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the signInPageText property value. Text that appears at the bottom of the sign-in box. Use this to communicate additional information, such as the phone number to your help desk or a legal statement. This text must be in Unicode format and not exceed 1024 characters.
     * @return string|null
    */
    public function getSignInPageText(): ?string {
        return $this->signInPageText;
    }

    /**
     * Gets the squareLogo property value. A square version of your company logo that appears in Windows 10 out-of-box experiences (OOBE) and when Windows Autopilot is enabled for deployment. Allowed types are PNG or JPEG not larger than 240 x 240 pixels and not more than 10 KB in size. We recommend using a transparent image with no padding around the logo.
     * @return StreamInterface|null
    */
    public function getSquareLogo(): ?StreamInterface {
        return $this->squareLogo;
    }

    /**
     * Gets the squareLogoRelativeUrl property value. A relative URL for the squareLogo property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only.
     * @return string|null
    */
    public function getSquareLogoRelativeUrl(): ?string {
        return $this->squareLogoRelativeUrl;
    }

    /**
     * Gets the usernameHintText property value. A string that shows as the hint in the username textbox on the sign-in screen. This text must be a Unicode, without links or code, and can't exceed 64 characters.
     * @return string|null
    */
    public function getUsernameHintText(): ?string {
        return $this->usernameHintText;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('backgroundColor', $this->backgroundColor);
        $writer->writeBinaryContent('backgroundImage', $this->backgroundImage);
        $writer->writeStringValue('backgroundImageRelativeUrl', $this->backgroundImageRelativeUrl);
        $writer->writeBinaryContent('bannerLogo', $this->bannerLogo);
        $writer->writeStringValue('bannerLogoRelativeUrl', $this->bannerLogoRelativeUrl);
        $writer->writeCollectionOfPrimitiveValues('cdnList', $this->cdnList);
        $writer->writeStringValue('signInPageText', $this->signInPageText);
        $writer->writeBinaryContent('squareLogo', $this->squareLogo);
        $writer->writeStringValue('squareLogoRelativeUrl', $this->squareLogoRelativeUrl);
        $writer->writeStringValue('usernameHintText', $this->usernameHintText);
    }

    /**
     * Sets the backgroundColor property value. Color that appears in place of the background image in low-bandwidth connections. We recommend that you use the primary color of your banner logo or your organization color. Specify this in hexadecimal format, for example, white is #FFFFFF.
     *  @param string|null $value Value to set for the backgroundColor property.
    */
    public function setBackgroundColor(?string $value ): void {
        $this->backgroundColor = $value;
    }

    /**
     * Sets the backgroundImage property value. Image that appears as the background of the sign-in page. The allowed types are PNG or JPEG not smaller than 300 KB and not larger than 1920 × 1080 pixels. A smaller image will reduce bandwidth requirements and make the page load faster.
     *  @param StreamInterface|null $value Value to set for the backgroundImage property.
    */
    public function setBackgroundImage(?StreamInterface $value ): void {
        $this->backgroundImage = $value;
    }

    /**
     * Sets the backgroundImageRelativeUrl property value. A relative URL for the backgroundImage property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only.
     *  @param string|null $value Value to set for the backgroundImageRelativeUrl property.
    */
    public function setBackgroundImageRelativeUrl(?string $value ): void {
        $this->backgroundImageRelativeUrl = $value;
    }

    /**
     * Sets the bannerLogo property value. A banner version of your company logo that appears on the sign-in page. The allowed types are PNG or JPEG not larger than 36 × 245 pixels. We recommend using a transparent image with no padding around the logo.
     *  @param StreamInterface|null $value Value to set for the bannerLogo property.
    */
    public function setBannerLogo(?StreamInterface $value ): void {
        $this->bannerLogo = $value;
    }

    /**
     * Sets the bannerLogoRelativeUrl property value. A relative URL for the bannerLogo property that is combined with a CDN base URL from the cdnList to provide the read-only version served by a CDN. Read-only.
     *  @param string|null $value Value to set for the bannerLogoRelativeUrl property.
    */
    public function setBannerLogoRelativeUrl(?string $value ): void {
        $this->bannerLogoRelativeUrl = $value;
    }

    /**
     * Sets the cdnList property value. A list of base URLs for all available CDN providers that are serving the assets of the current resource. Several CDN providers are used at the same time for high availability of read requests. Read-only.
     *  @param array<string>|null $value Value to set for the cdnList property.
    */
    public function setCdnList(?array $value ): void {
        $this->cdnList = $value;
    }

    /**
     * Sets the signInPageText property value. Text that appears at the bottom of the sign-in box. Use this to communicate additional information, such as the phone number to your help desk or a legal statement. This text must be in Unicode format and not exceed 1024 characters.
     *  @param string|null $value Value to set for the signInPageText property.
    */
    public function setSignInPageText(?string $value ): void {
        $this->signInPageText = $value;
    }

    /**
     * Sets the squareLogo property value. A square version of your company logo that appears in Windows 10 out-of-box experiences (OOBE) and when Windows Autopilot is enabled for deployment. Allowed types are PNG or JPEG not larger than 240 x 240 pixels and not more than 10 KB in size. We recommend using a transparent image with no padding around the logo.
     *  @param StreamInterface|null $value Value to set for the squareLogo property.
    */
    public function setSquareLogo(?StreamInterface $value ): void {
        $this->squareLogo = $value;
    }

    /**
     * Sets the squareLogoRelativeUrl property value. A relative URL for the squareLogo property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only.
     *  @param string|null $value Value to set for the squareLogoRelativeUrl property.
    */
    public function setSquareLogoRelativeUrl(?string $value ): void {
        $this->squareLogoRelativeUrl = $value;
    }

    /**
     * Sets the usernameHintText property value. A string that shows as the hint in the username textbox on the sign-in screen. This text must be a Unicode, without links or code, and can't exceed 64 characters.
     *  @param string|null $value Value to set for the usernameHintText property.
    */
    public function setUsernameHintText(?string $value ): void {
        $this->usernameHintText = $value;
    }

}
