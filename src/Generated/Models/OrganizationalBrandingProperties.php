<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class OrganizationalBrandingProperties extends Entity implements Parsable 
{
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
     * Gets the backgroundColor property value. Color that will appear in place of the background image in low-bandwidth connections. We recommend that you use the primary color of your banner logo or your organization color. Specify this in hexadecimal format, for example, white is #FFFFFF.
     * @return string|null
    */
    public function getBackgroundColor(): ?string {
        return $this->getBackingStore()->get('backgroundColor');
    }

    /**
     * Gets the backgroundImage property value. Image that appears as the background of the sign-in page. The allowed types are PNG or JPEG not smaller than 300 KB and not larger than 1920 × 1080 pixels. A smaller image will reduce bandwidth requirements and make the page load faster.
     * @return StreamInterface|null
    */
    public function getBackgroundImage(): ?StreamInterface {
        return $this->getBackingStore()->get('backgroundImage');
    }

    /**
     * Gets the backgroundImageRelativeUrl property value. A relative URL for the backgroundImage property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only.
     * @return string|null
    */
    public function getBackgroundImageRelativeUrl(): ?string {
        return $this->getBackingStore()->get('backgroundImageRelativeUrl');
    }

    /**
     * Gets the bannerLogo property value. A banner version of your company logo that appears on the sign-in page. The allowed types are PNG or JPEG no larger than 36 × 245 pixels. We recommend using a transparent image with no padding around the logo.
     * @return StreamInterface|null
    */
    public function getBannerLogo(): ?StreamInterface {
        return $this->getBackingStore()->get('bannerLogo');
    }

    /**
     * Gets the bannerLogoRelativeUrl property value. A relative url for the bannerLogo property that is combined with a CDN base URL from the cdnList to provide the read-only version served by a CDN. Read-only.
     * @return string|null
    */
    public function getBannerLogoRelativeUrl(): ?string {
        return $this->getBackingStore()->get('bannerLogoRelativeUrl');
    }

    /**
     * Gets the cdnList property value. A list of base URLs for all available CDN providers that are serving the assets of the current resource. Several CDN providers are used at the same time for high availability of read requests. Read-only.
     * @return array<string>|null
    */
    public function getCdnList(): ?array {
        return $this->getBackingStore()->get('cdnList');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'backgroundColor' => fn(ParseNode $n) => $o->setBackgroundColor($n->getStringValue()),
            'backgroundImage' => fn(ParseNode $n) => $o->setBackgroundImage($n->getBinaryContent()),
            'backgroundImageRelativeUrl' => fn(ParseNode $n) => $o->setBackgroundImageRelativeUrl($n->getStringValue()),
            'bannerLogo' => fn(ParseNode $n) => $o->setBannerLogo($n->getBinaryContent()),
            'bannerLogoRelativeUrl' => fn(ParseNode $n) => $o->setBannerLogoRelativeUrl($n->getStringValue()),
            'cdnList' => fn(ParseNode $n) => $o->setCdnList($n->getCollectionOfPrimitiveValues()),
            'signInPageText' => fn(ParseNode $n) => $o->setSignInPageText($n->getStringValue()),
            'squareLogo' => fn(ParseNode $n) => $o->setSquareLogo($n->getBinaryContent()),
            'squareLogoRelativeUrl' => fn(ParseNode $n) => $o->setSquareLogoRelativeUrl($n->getStringValue()),
            'usernameHintText' => fn(ParseNode $n) => $o->setUsernameHintText($n->getStringValue()),
        ]);
    }

    /**
     * Gets the signInPageText property value. Text that appears at the bottom of the sign-in box. You can use this to communicate additional information, such as the phone number to your help desk or a legal statement. This text must be Unicode and not exceed 1024 characters.
     * @return string|null
    */
    public function getSignInPageText(): ?string {
        return $this->getBackingStore()->get('signInPageText');
    }

    /**
     * Gets the squareLogo property value. A square version of your company logo that appears in Windows 10 out-of-box experiences (OOBE) and when Windows Autopilot is enabled for deployment. Allowed types are PNG or JPEG no larger than 240 x 240 pixels and no more than 10 KB in size. We recommend using a transparent image with no padding around the logo.
     * @return StreamInterface|null
    */
    public function getSquareLogo(): ?StreamInterface {
        return $this->getBackingStore()->get('squareLogo');
    }

    /**
     * Gets the squareLogoRelativeUrl property value. A relative url for the squareLogo property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only.
     * @return string|null
    */
    public function getSquareLogoRelativeUrl(): ?string {
        return $this->getBackingStore()->get('squareLogoRelativeUrl');
    }

    /**
     * Gets the usernameHintText property value. String that shows as the hint in the username textbox on the sign-in screen. This text must be a Unicode, without links or code, and can't exceed 64 characters.
     * @return string|null
    */
    public function getUsernameHintText(): ?string {
        return $this->getBackingStore()->get('usernameHintText');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('backgroundColor', $this->getBackgroundColor());
        $writer->writeBinaryContent('backgroundImage', $this->getBackgroundImage());
        $writer->writeStringValue('backgroundImageRelativeUrl', $this->getBackgroundImageRelativeUrl());
        $writer->writeBinaryContent('bannerLogo', $this->getBannerLogo());
        $writer->writeStringValue('bannerLogoRelativeUrl', $this->getBannerLogoRelativeUrl());
        $writer->writeCollectionOfPrimitiveValues('cdnList', $this->getCdnList());
        $writer->writeStringValue('signInPageText', $this->getSignInPageText());
        $writer->writeBinaryContent('squareLogo', $this->getSquareLogo());
        $writer->writeStringValue('squareLogoRelativeUrl', $this->getSquareLogoRelativeUrl());
        $writer->writeStringValue('usernameHintText', $this->getUsernameHintText());
    }

    /**
     * Sets the backgroundColor property value. Color that will appear in place of the background image in low-bandwidth connections. We recommend that you use the primary color of your banner logo or your organization color. Specify this in hexadecimal format, for example, white is #FFFFFF.
     * @param string|null $value Value to set for the backgroundColor property.
    */
    public function setBackgroundColor(?string $value): void {
        $this->getBackingStore()->set('backgroundColor', $value);
    }

    /**
     * Sets the backgroundImage property value. Image that appears as the background of the sign-in page. The allowed types are PNG or JPEG not smaller than 300 KB and not larger than 1920 × 1080 pixels. A smaller image will reduce bandwidth requirements and make the page load faster.
     * @param StreamInterface|null $value Value to set for the backgroundImage property.
    */
    public function setBackgroundImage(?StreamInterface $value): void {
        $this->getBackingStore()->set('backgroundImage', $value);
    }

    /**
     * Sets the backgroundImageRelativeUrl property value. A relative URL for the backgroundImage property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only.
     * @param string|null $value Value to set for the backgroundImageRelativeUrl property.
    */
    public function setBackgroundImageRelativeUrl(?string $value): void {
        $this->getBackingStore()->set('backgroundImageRelativeUrl', $value);
    }

    /**
     * Sets the bannerLogo property value. A banner version of your company logo that appears on the sign-in page. The allowed types are PNG or JPEG no larger than 36 × 245 pixels. We recommend using a transparent image with no padding around the logo.
     * @param StreamInterface|null $value Value to set for the bannerLogo property.
    */
    public function setBannerLogo(?StreamInterface $value): void {
        $this->getBackingStore()->set('bannerLogo', $value);
    }

    /**
     * Sets the bannerLogoRelativeUrl property value. A relative url for the bannerLogo property that is combined with a CDN base URL from the cdnList to provide the read-only version served by a CDN. Read-only.
     * @param string|null $value Value to set for the bannerLogoRelativeUrl property.
    */
    public function setBannerLogoRelativeUrl(?string $value): void {
        $this->getBackingStore()->set('bannerLogoRelativeUrl', $value);
    }

    /**
     * Sets the cdnList property value. A list of base URLs for all available CDN providers that are serving the assets of the current resource. Several CDN providers are used at the same time for high availability of read requests. Read-only.
     * @param array<string>|null $value Value to set for the cdnList property.
    */
    public function setCdnList(?array $value): void {
        $this->getBackingStore()->set('cdnList', $value);
    }

    /**
     * Sets the signInPageText property value. Text that appears at the bottom of the sign-in box. You can use this to communicate additional information, such as the phone number to your help desk or a legal statement. This text must be Unicode and not exceed 1024 characters.
     * @param string|null $value Value to set for the signInPageText property.
    */
    public function setSignInPageText(?string $value): void {
        $this->getBackingStore()->set('signInPageText', $value);
    }

    /**
     * Sets the squareLogo property value. A square version of your company logo that appears in Windows 10 out-of-box experiences (OOBE) and when Windows Autopilot is enabled for deployment. Allowed types are PNG or JPEG no larger than 240 x 240 pixels and no more than 10 KB in size. We recommend using a transparent image with no padding around the logo.
     * @param StreamInterface|null $value Value to set for the squareLogo property.
    */
    public function setSquareLogo(?StreamInterface $value): void {
        $this->getBackingStore()->set('squareLogo', $value);
    }

    /**
     * Sets the squareLogoRelativeUrl property value. A relative url for the squareLogo property that is combined with a CDN base URL from the cdnList to provide the version served by a CDN. Read-only.
     * @param string|null $value Value to set for the squareLogoRelativeUrl property.
    */
    public function setSquareLogoRelativeUrl(?string $value): void {
        $this->getBackingStore()->set('squareLogoRelativeUrl', $value);
    }

    /**
     * Sets the usernameHintText property value. String that shows as the hint in the username textbox on the sign-in screen. This text must be a Unicode, without links or code, and can't exceed 64 characters.
     * @param string|null $value Value to set for the usernameHintText property.
    */
    public function setUsernameHintText(?string $value): void {
        $this->getBackingStore()->set('usernameHintText', $value);
    }

}
