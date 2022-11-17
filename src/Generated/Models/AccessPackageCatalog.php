<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageCatalog extends Entity implements Parsable 
{
    /**
     * Instantiates a new accessPackageCatalog and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessPackageCatalog');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageCatalog
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageCatalog {
        return new AccessPackageCatalog();
    }

    /**
     * Gets the accessPackages property value. The access packages in this catalog. Read-only. Nullable.
     * @return array<AccessPackage>|null
    */
    public function getAccessPackages(): ?array {
        return $this->getBackingStore()->get('accessPackages');
    }

    /**
     * Gets the catalogType property value. Whether the catalog is created by a user or entitlement management. The possible values are: userManaged, serviceDefault, serviceManaged, unknownFutureValue.
     * @return AccessPackageCatalogType|null
    */
    public function getCatalogType(): ?AccessPackageCatalogType {
        return $this->getBackingStore()->get('catalogType');
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the description property value. The description of the access package catalog.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The display name of the access package catalog.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackages' => fn(ParseNode $n) => $o->setAccessPackages($n->getCollectionOfObjectValues([AccessPackage::class, 'createFromDiscriminatorValue'])),
            'catalogType' => fn(ParseNode $n) => $o->setCatalogType($n->getEnumValue(AccessPackageCatalogType::class)),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isExternallyVisible' => fn(ParseNode $n) => $o->setIsExternallyVisible($n->getBooleanValue()),
            'modifiedDateTime' => fn(ParseNode $n) => $o->setModifiedDateTime($n->getDateTimeValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(AccessPackageCatalogState::class)),
        ]);
    }

    /**
     * Gets the isExternallyVisible property value. Whether the access packages in this catalog can be requested by users outside of the tenant.
     * @return bool|null
    */
    public function getIsExternallyVisible(): ?bool {
        return $this->getBackingStore()->get('isExternallyVisible');
    }

    /**
     * Gets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('modifiedDateTime');
    }

    /**
     * Gets the state property value. Has the value published if the access packages are available for management. The possible values are: unpublished, published, unknownFutureValue.
     * @return AccessPackageCatalogState|null
    */
    public function getState(): ?AccessPackageCatalogState {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('accessPackages', $this->getAccessPackages());
        $writer->writeEnumValue('catalogType', $this->getCatalogType());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isExternallyVisible', $this->getIsExternallyVisible());
        $writer->writeDateTimeValue('modifiedDateTime', $this->getModifiedDateTime());
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the accessPackages property value. The access packages in this catalog. Read-only. Nullable.
     *  @param array<AccessPackage>|null $value Value to set for the accessPackages property.
    */
    public function setAccessPackages(?array $value): void {
        $this->getBackingStore()->set('accessPackages', $value);
    }

    /**
     * Sets the catalogType property value. Whether the catalog is created by a user or entitlement management. The possible values are: userManaged, serviceDefault, serviceManaged, unknownFutureValue.
     *  @param AccessPackageCatalogType|null $value Value to set for the catalogType property.
    */
    public function setCatalogType(?AccessPackageCatalogType $value): void {
        $this->getBackingStore()->set('catalogType', $value);
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The description of the access package catalog.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the access package catalog.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isExternallyVisible property value. Whether the access packages in this catalog can be requested by users outside of the tenant.
     *  @param bool|null $value Value to set for the isExternallyVisible property.
    */
    public function setIsExternallyVisible(?bool $value): void {
        $this->getBackingStore()->set('isExternallyVisible', $value);
    }

    /**
     * Sets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('modifiedDateTime', $value);
    }

    /**
     * Sets the state property value. Has the value published if the access packages are available for management. The possible values are: unpublished, published, unknownFutureValue.
     *  @param AccessPackageCatalogState|null $value Value to set for the state property.
    */
    public function setState(?AccessPackageCatalogState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
