<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosVppApp extends MobileApp implements Parsable 
{
    /**
     * Instantiates a new IosVppApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosVppApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosVppApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosVppApp {
        return new IosVppApp();
    }

    /**
     * Gets the applicableDeviceType property value. The applicable iOS Device Type.
     * @return IosDeviceType|null
    */
    public function getApplicableDeviceType(): ?IosDeviceType {
        return $this->getBackingStore()->get('applicableDeviceType');
    }

    /**
     * Gets the appStoreUrl property value. The store URL.
     * @return string|null
    */
    public function getAppStoreUrl(): ?string {
        return $this->getBackingStore()->get('appStoreUrl');
    }

    /**
     * Gets the bundleId property value. The Identity Name.
     * @return string|null
    */
    public function getBundleId(): ?string {
        return $this->getBackingStore()->get('bundleId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicableDeviceType' => fn(ParseNode $n) => $o->setApplicableDeviceType($n->getObjectValue([IosDeviceType::class, 'createFromDiscriminatorValue'])),
            'appStoreUrl' => fn(ParseNode $n) => $o->setAppStoreUrl($n->getStringValue()),
            'bundleId' => fn(ParseNode $n) => $o->setBundleId($n->getStringValue()),
            'licensingType' => fn(ParseNode $n) => $o->setLicensingType($n->getObjectValue([VppLicensingType::class, 'createFromDiscriminatorValue'])),
            'releaseDateTime' => fn(ParseNode $n) => $o->setReleaseDateTime($n->getDateTimeValue()),
            'totalLicenseCount' => fn(ParseNode $n) => $o->setTotalLicenseCount($n->getIntegerValue()),
            'usedLicenseCount' => fn(ParseNode $n) => $o->setUsedLicenseCount($n->getIntegerValue()),
            'vppTokenAccountType' => fn(ParseNode $n) => $o->setVppTokenAccountType($n->getEnumValue(VppTokenAccountType::class)),
            'vppTokenAppleId' => fn(ParseNode $n) => $o->setVppTokenAppleId($n->getStringValue()),
            'vppTokenOrganizationName' => fn(ParseNode $n) => $o->setVppTokenOrganizationName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the licensingType property value. The supported License Type.
     * @return VppLicensingType|null
    */
    public function getLicensingType(): ?VppLicensingType {
        return $this->getBackingStore()->get('licensingType');
    }

    /**
     * Gets the releaseDateTime property value. The VPP application release date and time.
     * @return DateTime|null
    */
    public function getReleaseDateTime(): ?DateTime {
        return $this->getBackingStore()->get('releaseDateTime');
    }

    /**
     * Gets the totalLicenseCount property value. The total number of VPP licenses.
     * @return int|null
    */
    public function getTotalLicenseCount(): ?int {
        return $this->getBackingStore()->get('totalLicenseCount');
    }

    /**
     * Gets the usedLicenseCount property value. The number of VPP licenses in use.
     * @return int|null
    */
    public function getUsedLicenseCount(): ?int {
        return $this->getBackingStore()->get('usedLicenseCount');
    }

    /**
     * Gets the vppTokenAccountType property value. Possible types of an Apple Volume Purchase Program token.
     * @return VppTokenAccountType|null
    */
    public function getVppTokenAccountType(): ?VppTokenAccountType {
        return $this->getBackingStore()->get('vppTokenAccountType');
    }

    /**
     * Gets the vppTokenAppleId property value. The Apple Id associated with the given Apple Volume Purchase Program Token.
     * @return string|null
    */
    public function getVppTokenAppleId(): ?string {
        return $this->getBackingStore()->get('vppTokenAppleId');
    }

    /**
     * Gets the vppTokenOrganizationName property value. The organization associated with the Apple Volume Purchase Program Token
     * @return string|null
    */
    public function getVppTokenOrganizationName(): ?string {
        return $this->getBackingStore()->get('vppTokenOrganizationName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('applicableDeviceType', $this->getApplicableDeviceType());
        $writer->writeStringValue('appStoreUrl', $this->getAppStoreUrl());
        $writer->writeStringValue('bundleId', $this->getBundleId());
        $writer->writeObjectValue('licensingType', $this->getLicensingType());
        $writer->writeDateTimeValue('releaseDateTime', $this->getReleaseDateTime());
        $writer->writeIntegerValue('totalLicenseCount', $this->getTotalLicenseCount());
        $writer->writeIntegerValue('usedLicenseCount', $this->getUsedLicenseCount());
        $writer->writeEnumValue('vppTokenAccountType', $this->getVppTokenAccountType());
        $writer->writeStringValue('vppTokenAppleId', $this->getVppTokenAppleId());
        $writer->writeStringValue('vppTokenOrganizationName', $this->getVppTokenOrganizationName());
    }

    /**
     * Sets the applicableDeviceType property value. The applicable iOS Device Type.
     * @param IosDeviceType|null $value Value to set for the applicableDeviceType property.
    */
    public function setApplicableDeviceType(?IosDeviceType $value): void {
        $this->getBackingStore()->set('applicableDeviceType', $value);
    }

    /**
     * Sets the appStoreUrl property value. The store URL.
     * @param string|null $value Value to set for the appStoreUrl property.
    */
    public function setAppStoreUrl(?string $value): void {
        $this->getBackingStore()->set('appStoreUrl', $value);
    }

    /**
     * Sets the bundleId property value. The Identity Name.
     * @param string|null $value Value to set for the bundleId property.
    */
    public function setBundleId(?string $value): void {
        $this->getBackingStore()->set('bundleId', $value);
    }

    /**
     * Sets the licensingType property value. The supported License Type.
     * @param VppLicensingType|null $value Value to set for the licensingType property.
    */
    public function setLicensingType(?VppLicensingType $value): void {
        $this->getBackingStore()->set('licensingType', $value);
    }

    /**
     * Sets the releaseDateTime property value. The VPP application release date and time.
     * @param DateTime|null $value Value to set for the releaseDateTime property.
    */
    public function setReleaseDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('releaseDateTime', $value);
    }

    /**
     * Sets the totalLicenseCount property value. The total number of VPP licenses.
     * @param int|null $value Value to set for the totalLicenseCount property.
    */
    public function setTotalLicenseCount(?int $value): void {
        $this->getBackingStore()->set('totalLicenseCount', $value);
    }

    /**
     * Sets the usedLicenseCount property value. The number of VPP licenses in use.
     * @param int|null $value Value to set for the usedLicenseCount property.
    */
    public function setUsedLicenseCount(?int $value): void {
        $this->getBackingStore()->set('usedLicenseCount', $value);
    }

    /**
     * Sets the vppTokenAccountType property value. Possible types of an Apple Volume Purchase Program token.
     * @param VppTokenAccountType|null $value Value to set for the vppTokenAccountType property.
    */
    public function setVppTokenAccountType(?VppTokenAccountType $value): void {
        $this->getBackingStore()->set('vppTokenAccountType', $value);
    }

    /**
     * Sets the vppTokenAppleId property value. The Apple Id associated with the given Apple Volume Purchase Program Token.
     * @param string|null $value Value to set for the vppTokenAppleId property.
    */
    public function setVppTokenAppleId(?string $value): void {
        $this->getBackingStore()->set('vppTokenAppleId', $value);
    }

    /**
     * Sets the vppTokenOrganizationName property value. The organization associated with the Apple Volume Purchase Program Token
     * @param string|null $value Value to set for the vppTokenOrganizationName property.
    */
    public function setVppTokenOrganizationName(?string $value): void {
        $this->getBackingStore()->set('vppTokenOrganizationName', $value);
    }

}
