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
     * Gets the customAccountResetCredentialsUrl property value. The customAccountResetCredentialsUrl property
     * @return string|null
    */
    public function getCustomAccountResetCredentialsUrl(): ?string {
        return $this->getBackingStore()->get('customAccountResetCredentialsUrl');
    }

    /**
     * Gets the customCannotAccessYourAccountText property value. The customCannotAccessYourAccountText property
     * @return string|null
    */
    public function getCustomCannotAccessYourAccountText(): ?string {
        return $this->getBackingStore()->get('customCannotAccessYourAccountText');
    }

    /**
     * Gets the customCannotAccessYourAccountUrl property value. The customCannotAccessYourAccountUrl property
     * @return string|null
    */
    public function getCustomCannotAccessYourAccountUrl(): ?string {
        return $this->getBackingStore()->get('customCannotAccessYourAccountUrl');
    }

    /**
     * Gets the customCSS property value. The customCSS property
     * @return StreamInterface|null
    */
    public function getCustomCSS(): ?StreamInterface {
        return $this->getBackingStore()->get('customCSS');
    }

    /**
     * Gets the customCSSRelativeUrl property value. The customCSSRelativeUrl property
     * @return string|null
    */
    public function getCustomCSSRelativeUrl(): ?string {
        return $this->getBackingStore()->get('customCSSRelativeUrl');
    }

    /**
     * Gets the customForgotMyPasswordText property value. The customForgotMyPasswordText property
     * @return string|null
    */
    public function getCustomForgotMyPasswordText(): ?string {
        return $this->getBackingStore()->get('customForgotMyPasswordText');
    }

    /**
     * Gets the customPrivacyAndCookiesText property value. The customPrivacyAndCookiesText property
     * @return string|null
    */
    public function getCustomPrivacyAndCookiesText(): ?string {
        return $this->getBackingStore()->get('customPrivacyAndCookiesText');
    }

    /**
     * Gets the customPrivacyAndCookiesUrl property value. The customPrivacyAndCookiesUrl property
     * @return string|null
    */
    public function getCustomPrivacyAndCookiesUrl(): ?string {
        return $this->getBackingStore()->get('customPrivacyAndCookiesUrl');
    }

    /**
     * Gets the customResetItNowText property value. The customResetItNowText property
     * @return string|null
    */
    public function getCustomResetItNowText(): ?string {
        return $this->getBackingStore()->get('customResetItNowText');
    }

    /**
     * Gets the customTermsOfUseText property value. The customTermsOfUseText property
     * @return string|null
    */
    public function getCustomTermsOfUseText(): ?string {
        return $this->getBackingStore()->get('customTermsOfUseText');
    }

    /**
     * Gets the customTermsOfUseUrl property value. The customTermsOfUseUrl property
     * @return string|null
    */
    public function getCustomTermsOfUseUrl(): ?string {
        return $this->getBackingStore()->get('customTermsOfUseUrl');
    }

    /**
     * Gets the favicon property value. The favicon property
     * @return StreamInterface|null
    */
    public function getFavicon(): ?StreamInterface {
        return $this->getBackingStore()->get('favicon');
    }

    /**
     * Gets the faviconRelativeUrl property value. The faviconRelativeUrl property
     * @return string|null
    */
    public function getFaviconRelativeUrl(): ?string {
        return $this->getBackingStore()->get('faviconRelativeUrl');
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
            'customAccountResetCredentialsUrl' => fn(ParseNode $n) => $o->setCustomAccountResetCredentialsUrl($n->getStringValue()),
            'customCannotAccessYourAccountText' => fn(ParseNode $n) => $o->setCustomCannotAccessYourAccountText($n->getStringValue()),
            'customCannotAccessYourAccountUrl' => fn(ParseNode $n) => $o->setCustomCannotAccessYourAccountUrl($n->getStringValue()),
            'customCSS' => fn(ParseNode $n) => $o->setCustomCSS($n->getBinaryContent()),
            'customCSSRelativeUrl' => fn(ParseNode $n) => $o->setCustomCSSRelativeUrl($n->getStringValue()),
            'customForgotMyPasswordText' => fn(ParseNode $n) => $o->setCustomForgotMyPasswordText($n->getStringValue()),
            'customPrivacyAndCookiesText' => fn(ParseNode $n) => $o->setCustomPrivacyAndCookiesText($n->getStringValue()),
            'customPrivacyAndCookiesUrl' => fn(ParseNode $n) => $o->setCustomPrivacyAndCookiesUrl($n->getStringValue()),
            'customResetItNowText' => fn(ParseNode $n) => $o->setCustomResetItNowText($n->getStringValue()),
            'customTermsOfUseText' => fn(ParseNode $n) => $o->setCustomTermsOfUseText($n->getStringValue()),
            'customTermsOfUseUrl' => fn(ParseNode $n) => $o->setCustomTermsOfUseUrl($n->getStringValue()),
            'favicon' => fn(ParseNode $n) => $o->setFavicon($n->getBinaryContent()),
            'faviconRelativeUrl' => fn(ParseNode $n) => $o->setFaviconRelativeUrl($n->getStringValue()),
            'headerBackgroundColor' => fn(ParseNode $n) => $o->setHeaderBackgroundColor($n->getStringValue()),
            'headerLogo' => fn(ParseNode $n) => $o->setHeaderLogo($n->getBinaryContent()),
            'headerLogoRelativeUrl' => fn(ParseNode $n) => $o->setHeaderLogoRelativeUrl($n->getStringValue()),
            'loginPageLayoutConfiguration' => fn(ParseNode $n) => $o->setLoginPageLayoutConfiguration($n->getObjectValue([LoginPageLayoutConfiguration::class, 'createFromDiscriminatorValue'])),
            'loginPageTextVisibilitySettings' => fn(ParseNode $n) => $o->setLoginPageTextVisibilitySettings($n->getObjectValue([LoginPageTextVisibilitySettings::class, 'createFromDiscriminatorValue'])),
            'signInPageText' => fn(ParseNode $n) => $o->setSignInPageText($n->getStringValue()),
            'squareLogo' => fn(ParseNode $n) => $o->setSquareLogo($n->getBinaryContent()),
            'squareLogoDark' => fn(ParseNode $n) => $o->setSquareLogoDark($n->getBinaryContent()),
            'squareLogoDarkRelativeUrl' => fn(ParseNode $n) => $o->setSquareLogoDarkRelativeUrl($n->getStringValue()),
            'squareLogoRelativeUrl' => fn(ParseNode $n) => $o->setSquareLogoRelativeUrl($n->getStringValue()),
            'usernameHintText' => fn(ParseNode $n) => $o->setUsernameHintText($n->getStringValue()),
        ]);
    }

    /**
     * Gets the headerBackgroundColor property value. The headerBackgroundColor property
     * @return string|null
    */
    public function getHeaderBackgroundColor(): ?string {
        return $this->getBackingStore()->get('headerBackgroundColor');
    }

    /**
     * Gets the headerLogo property value. The headerLogo property
     * @return StreamInterface|null
    */
    public function getHeaderLogo(): ?StreamInterface {
        return $this->getBackingStore()->get('headerLogo');
    }

    /**
     * Gets the headerLogoRelativeUrl property value. The headerLogoRelativeUrl property
     * @return string|null
    */
    public function getHeaderLogoRelativeUrl(): ?string {
        return $this->getBackingStore()->get('headerLogoRelativeUrl');
    }

    /**
     * Gets the loginPageLayoutConfiguration property value. The loginPageLayoutConfiguration property
     * @return LoginPageLayoutConfiguration|null
    */
    public function getLoginPageLayoutConfiguration(): ?LoginPageLayoutConfiguration {
        return $this->getBackingStore()->get('loginPageLayoutConfiguration');
    }

    /**
     * Gets the loginPageTextVisibilitySettings property value. The loginPageTextVisibilitySettings property
     * @return LoginPageTextVisibilitySettings|null
    */
    public function getLoginPageTextVisibilitySettings(): ?LoginPageTextVisibilitySettings {
        return $this->getBackingStore()->get('loginPageTextVisibilitySettings');
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
     * Gets the squareLogoDark property value. The squareLogoDark property
     * @return StreamInterface|null
    */
    public function getSquareLogoDark(): ?StreamInterface {
        return $this->getBackingStore()->get('squareLogoDark');
    }

    /**
     * Gets the squareLogoDarkRelativeUrl property value. The squareLogoDarkRelativeUrl property
     * @return string|null
    */
    public function getSquareLogoDarkRelativeUrl(): ?string {
        return $this->getBackingStore()->get('squareLogoDarkRelativeUrl');
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
        $writer->writeStringValue('customAccountResetCredentialsUrl', $this->getCustomAccountResetCredentialsUrl());
        $writer->writeStringValue('customCannotAccessYourAccountText', $this->getCustomCannotAccessYourAccountText());
        $writer->writeStringValue('customCannotAccessYourAccountUrl', $this->getCustomCannotAccessYourAccountUrl());
        $writer->writeBinaryContent('customCSS', $this->getCustomCSS());
        $writer->writeStringValue('customCSSRelativeUrl', $this->getCustomCSSRelativeUrl());
        $writer->writeStringValue('customForgotMyPasswordText', $this->getCustomForgotMyPasswordText());
        $writer->writeStringValue('customPrivacyAndCookiesText', $this->getCustomPrivacyAndCookiesText());
        $writer->writeStringValue('customPrivacyAndCookiesUrl', $this->getCustomPrivacyAndCookiesUrl());
        $writer->writeStringValue('customResetItNowText', $this->getCustomResetItNowText());
        $writer->writeStringValue('customTermsOfUseText', $this->getCustomTermsOfUseText());
        $writer->writeStringValue('customTermsOfUseUrl', $this->getCustomTermsOfUseUrl());
        $writer->writeBinaryContent('favicon', $this->getFavicon());
        $writer->writeStringValue('faviconRelativeUrl', $this->getFaviconRelativeUrl());
        $writer->writeStringValue('headerBackgroundColor', $this->getHeaderBackgroundColor());
        $writer->writeBinaryContent('headerLogo', $this->getHeaderLogo());
        $writer->writeStringValue('headerLogoRelativeUrl', $this->getHeaderLogoRelativeUrl());
        $writer->writeObjectValue('loginPageLayoutConfiguration', $this->getLoginPageLayoutConfiguration());
        $writer->writeObjectValue('loginPageTextVisibilitySettings', $this->getLoginPageTextVisibilitySettings());
        $writer->writeStringValue('signInPageText', $this->getSignInPageText());
        $writer->writeBinaryContent('squareLogo', $this->getSquareLogo());
        $writer->writeBinaryContent('squareLogoDark', $this->getSquareLogoDark());
        $writer->writeStringValue('squareLogoDarkRelativeUrl', $this->getSquareLogoDarkRelativeUrl());
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
     * Sets the customAccountResetCredentialsUrl property value. The customAccountResetCredentialsUrl property
     * @param string|null $value Value to set for the customAccountResetCredentialsUrl property.
    */
    public function setCustomAccountResetCredentialsUrl(?string $value): void {
        $this->getBackingStore()->set('customAccountResetCredentialsUrl', $value);
    }

    /**
     * Sets the customCannotAccessYourAccountText property value. The customCannotAccessYourAccountText property
     * @param string|null $value Value to set for the customCannotAccessYourAccountText property.
    */
    public function setCustomCannotAccessYourAccountText(?string $value): void {
        $this->getBackingStore()->set('customCannotAccessYourAccountText', $value);
    }

    /**
     * Sets the customCannotAccessYourAccountUrl property value. The customCannotAccessYourAccountUrl property
     * @param string|null $value Value to set for the customCannotAccessYourAccountUrl property.
    */
    public function setCustomCannotAccessYourAccountUrl(?string $value): void {
        $this->getBackingStore()->set('customCannotAccessYourAccountUrl', $value);
    }

    /**
     * Sets the customCSS property value. The customCSS property
     * @param StreamInterface|null $value Value to set for the customCSS property.
    */
    public function setCustomCSS(?StreamInterface $value): void {
        $this->getBackingStore()->set('customCSS', $value);
    }

    /**
     * Sets the customCSSRelativeUrl property value. The customCSSRelativeUrl property
     * @param string|null $value Value to set for the customCSSRelativeUrl property.
    */
    public function setCustomCSSRelativeUrl(?string $value): void {
        $this->getBackingStore()->set('customCSSRelativeUrl', $value);
    }

    /**
     * Sets the customForgotMyPasswordText property value. The customForgotMyPasswordText property
     * @param string|null $value Value to set for the customForgotMyPasswordText property.
    */
    public function setCustomForgotMyPasswordText(?string $value): void {
        $this->getBackingStore()->set('customForgotMyPasswordText', $value);
    }

    /**
     * Sets the customPrivacyAndCookiesText property value. The customPrivacyAndCookiesText property
     * @param string|null $value Value to set for the customPrivacyAndCookiesText property.
    */
    public function setCustomPrivacyAndCookiesText(?string $value): void {
        $this->getBackingStore()->set('customPrivacyAndCookiesText', $value);
    }

    /**
     * Sets the customPrivacyAndCookiesUrl property value. The customPrivacyAndCookiesUrl property
     * @param string|null $value Value to set for the customPrivacyAndCookiesUrl property.
    */
    public function setCustomPrivacyAndCookiesUrl(?string $value): void {
        $this->getBackingStore()->set('customPrivacyAndCookiesUrl', $value);
    }

    /**
     * Sets the customResetItNowText property value. The customResetItNowText property
     * @param string|null $value Value to set for the customResetItNowText property.
    */
    public function setCustomResetItNowText(?string $value): void {
        $this->getBackingStore()->set('customResetItNowText', $value);
    }

    /**
     * Sets the customTermsOfUseText property value. The customTermsOfUseText property
     * @param string|null $value Value to set for the customTermsOfUseText property.
    */
    public function setCustomTermsOfUseText(?string $value): void {
        $this->getBackingStore()->set('customTermsOfUseText', $value);
    }

    /**
     * Sets the customTermsOfUseUrl property value. The customTermsOfUseUrl property
     * @param string|null $value Value to set for the customTermsOfUseUrl property.
    */
    public function setCustomTermsOfUseUrl(?string $value): void {
        $this->getBackingStore()->set('customTermsOfUseUrl', $value);
    }

    /**
     * Sets the favicon property value. The favicon property
     * @param StreamInterface|null $value Value to set for the favicon property.
    */
    public function setFavicon(?StreamInterface $value): void {
        $this->getBackingStore()->set('favicon', $value);
    }

    /**
     * Sets the faviconRelativeUrl property value. The faviconRelativeUrl property
     * @param string|null $value Value to set for the faviconRelativeUrl property.
    */
    public function setFaviconRelativeUrl(?string $value): void {
        $this->getBackingStore()->set('faviconRelativeUrl', $value);
    }

    /**
     * Sets the headerBackgroundColor property value. The headerBackgroundColor property
     * @param string|null $value Value to set for the headerBackgroundColor property.
    */
    public function setHeaderBackgroundColor(?string $value): void {
        $this->getBackingStore()->set('headerBackgroundColor', $value);
    }

    /**
     * Sets the headerLogo property value. The headerLogo property
     * @param StreamInterface|null $value Value to set for the headerLogo property.
    */
    public function setHeaderLogo(?StreamInterface $value): void {
        $this->getBackingStore()->set('headerLogo', $value);
    }

    /**
     * Sets the headerLogoRelativeUrl property value. The headerLogoRelativeUrl property
     * @param string|null $value Value to set for the headerLogoRelativeUrl property.
    */
    public function setHeaderLogoRelativeUrl(?string $value): void {
        $this->getBackingStore()->set('headerLogoRelativeUrl', $value);
    }

    /**
     * Sets the loginPageLayoutConfiguration property value. The loginPageLayoutConfiguration property
     * @param LoginPageLayoutConfiguration|null $value Value to set for the loginPageLayoutConfiguration property.
    */
    public function setLoginPageLayoutConfiguration(?LoginPageLayoutConfiguration $value): void {
        $this->getBackingStore()->set('loginPageLayoutConfiguration', $value);
    }

    /**
     * Sets the loginPageTextVisibilitySettings property value. The loginPageTextVisibilitySettings property
     * @param LoginPageTextVisibilitySettings|null $value Value to set for the loginPageTextVisibilitySettings property.
    */
    public function setLoginPageTextVisibilitySettings(?LoginPageTextVisibilitySettings $value): void {
        $this->getBackingStore()->set('loginPageTextVisibilitySettings', $value);
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
     * Sets the squareLogoDark property value. The squareLogoDark property
     * @param StreamInterface|null $value Value to set for the squareLogoDark property.
    */
    public function setSquareLogoDark(?StreamInterface $value): void {
        $this->getBackingStore()->set('squareLogoDark', $value);
    }

    /**
     * Sets the squareLogoDarkRelativeUrl property value. The squareLogoDarkRelativeUrl property
     * @param string|null $value Value to set for the squareLogoDarkRelativeUrl property.
    */
    public function setSquareLogoDarkRelativeUrl(?string $value): void {
        $this->getBackingStore()->set('squareLogoDarkRelativeUrl', $value);
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
