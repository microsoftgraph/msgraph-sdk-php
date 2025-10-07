<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Microsoft Store for Business Apps. This class does not support Create, Delete, or Update.
*/
class MicrosoftStoreForBusinessApp extends MobileApp implements Parsable 
{
    /**
     * Instantiates a new MicrosoftStoreForBusinessApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.microsoftStoreForBusinessApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftStoreForBusinessApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftStoreForBusinessApp {
        return new MicrosoftStoreForBusinessApp();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'licenseType' => fn(ParseNode $n) => $o->setLicenseType($n->getEnumValue(MicrosoftStoreForBusinessLicenseType::class)),
            'packageIdentityName' => fn(ParseNode $n) => $o->setPackageIdentityName($n->getStringValue()),
            'productKey' => fn(ParseNode $n) => $o->setProductKey($n->getStringValue()),
            'totalLicenseCount' => fn(ParseNode $n) => $o->setTotalLicenseCount($n->getIntegerValue()),
            'usedLicenseCount' => fn(ParseNode $n) => $o->setUsedLicenseCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the licenseType property value. The licenseType property
     * @return MicrosoftStoreForBusinessLicenseType|null
    */
    public function getLicenseType(): ?MicrosoftStoreForBusinessLicenseType {
        $val = $this->getBackingStore()->get('licenseType');
        if (is_null($val) || $val instanceof MicrosoftStoreForBusinessLicenseType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'licenseType'");
    }

    /**
     * Gets the packageIdentityName property value. The app package identifier
     * @return string|null
    */
    public function getPackageIdentityName(): ?string {
        $val = $this->getBackingStore()->get('packageIdentityName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'packageIdentityName'");
    }

    /**
     * Gets the productKey property value. The app product key
     * @return string|null
    */
    public function getProductKey(): ?string {
        $val = $this->getBackingStore()->get('productKey');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productKey'");
    }

    /**
     * Gets the totalLicenseCount property value. The total number of Microsoft Store for Business licenses.
     * @return int|null
    */
    public function getTotalLicenseCount(): ?int {
        $val = $this->getBackingStore()->get('totalLicenseCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalLicenseCount'");
    }

    /**
     * Gets the usedLicenseCount property value. The number of Microsoft Store for Business licenses in use.
     * @return int|null
    */
    public function getUsedLicenseCount(): ?int {
        $val = $this->getBackingStore()->get('usedLicenseCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usedLicenseCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('licenseType', $this->getLicenseType());
        $writer->writeStringValue('packageIdentityName', $this->getPackageIdentityName());
        $writer->writeStringValue('productKey', $this->getProductKey());
        $writer->writeIntegerValue('totalLicenseCount', $this->getTotalLicenseCount());
        $writer->writeIntegerValue('usedLicenseCount', $this->getUsedLicenseCount());
    }

    /**
     * Sets the licenseType property value. The licenseType property
     * @param MicrosoftStoreForBusinessLicenseType|null $value Value to set for the licenseType property.
    */
    public function setLicenseType(?MicrosoftStoreForBusinessLicenseType $value): void {
        $this->getBackingStore()->set('licenseType', $value);
    }

    /**
     * Sets the packageIdentityName property value. The app package identifier
     * @param string|null $value Value to set for the packageIdentityName property.
    */
    public function setPackageIdentityName(?string $value): void {
        $this->getBackingStore()->set('packageIdentityName', $value);
    }

    /**
     * Sets the productKey property value. The app product key
     * @param string|null $value Value to set for the productKey property.
    */
    public function setProductKey(?string $value): void {
        $this->getBackingStore()->set('productKey', $value);
    }

    /**
     * Sets the totalLicenseCount property value. The total number of Microsoft Store for Business licenses.
     * @param int|null $value Value to set for the totalLicenseCount property.
    */
    public function setTotalLicenseCount(?int $value): void {
        $this->getBackingStore()->set('totalLicenseCount', $value);
    }

    /**
     * Sets the usedLicenseCount property value. The number of Microsoft Store for Business licenses in use.
     * @param int|null $value Value to set for the usedLicenseCount property.
    */
    public function setUsedLicenseCount(?int $value): void {
        $this->getBackingStore()->set('usedLicenseCount', $value);
    }

}
