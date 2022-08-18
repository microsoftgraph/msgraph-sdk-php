<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageCatalog extends Entity implements Parsable 
{
    /**
     * @var array<AccessPackage>|null $accessPackages The access packages in this catalog. Read-only. Nullable.
    */
    private ?array $accessPackages = null;
    
    /**
     * @var AccessPackageCatalogType|null $catalogType Whether the catalog is created by a user or entitlement management. The possible values are: userManaged, serviceDefault, serviceManaged, unknownFutureValue.
    */
    private ?AccessPackageCatalogType $catalogType = null;
    
    /**
     * @var DateTime|null $createdDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description The description of the access package catalog.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name of the access package catalog.
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $isExternallyVisible Whether the access packages in this catalog can be requested by users outside of the tenant.
    */
    private ?bool $isExternallyVisible = null;
    
    /**
     * @var DateTime|null $modifiedDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    */
    private ?DateTime $modifiedDateTime = null;
    
    /**
     * @var AccessPackageCatalogState|null $state Has the value published if the access packages are available for management. The possible values are: unpublished, published, unknownFutureValue.
    */
    private ?AccessPackageCatalogState $state = null;
    
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
        return $this->accessPackages;
    }

    /**
     * Gets the catalogType property value. Whether the catalog is created by a user or entitlement management. The possible values are: userManaged, serviceDefault, serviceManaged, unknownFutureValue.
     * @return AccessPackageCatalogType|null
    */
    public function getCatalogType(): ?AccessPackageCatalogType {
        return $this->catalogType;
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. The description of the access package catalog.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name of the access package catalog.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackages' => function (ParseNode $n) use ($o) { $o->setAccessPackages($n->getCollectionOfObjectValues(array(AccessPackage::class, 'createFromDiscriminatorValue'))); },
            'catalogType' => function (ParseNode $n) use ($o) { $o->setCatalogType($n->getEnumValue(AccessPackageCatalogType::class)); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'isExternallyVisible' => function (ParseNode $n) use ($o) { $o->setIsExternallyVisible($n->getBooleanValue()); },
            'modifiedDateTime' => function (ParseNode $n) use ($o) { $o->setModifiedDateTime($n->getDateTimeValue()); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(AccessPackageCatalogState::class)); },
        ]);
    }

    /**
     * Gets the isExternallyVisible property value. Whether the access packages in this catalog can be requested by users outside of the tenant.
     * @return bool|null
    */
    public function getIsExternallyVisible(): ?bool {
        return $this->isExternallyVisible;
    }

    /**
     * Gets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->modifiedDateTime;
    }

    /**
     * Gets the state property value. Has the value published if the access packages are available for management. The possible values are: unpublished, published, unknownFutureValue.
     * @return AccessPackageCatalogState|null
    */
    public function getState(): ?AccessPackageCatalogState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('accessPackages', $this->accessPackages);
        $writer->writeEnumValue('catalogType', $this->catalogType);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('isExternallyVisible', $this->isExternallyVisible);
        $writer->writeDateTimeValue('modifiedDateTime', $this->modifiedDateTime);
        $writer->writeEnumValue('state', $this->state);
    }

    /**
     * Sets the accessPackages property value. The access packages in this catalog. Read-only. Nullable.
     *  @param array<AccessPackage>|null $value Value to set for the accessPackages property.
    */
    public function setAccessPackages(?array $value ): void {
        $this->accessPackages = $value;
    }

    /**
     * Sets the catalogType property value. Whether the catalog is created by a user or entitlement management. The possible values are: userManaged, serviceDefault, serviceManaged, unknownFutureValue.
     *  @param AccessPackageCatalogType|null $value Value to set for the catalogType property.
    */
    public function setCatalogType(?AccessPackageCatalogType $value ): void {
        $this->catalogType = $value;
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. The description of the access package catalog.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name of the access package catalog.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isExternallyVisible property value. Whether the access packages in this catalog can be requested by users outside of the tenant.
     *  @param bool|null $value Value to set for the isExternallyVisible property.
    */
    public function setIsExternallyVisible(?bool $value ): void {
        $this->isExternallyVisible = $value;
    }

    /**
     * Sets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value ): void {
        $this->modifiedDateTime = $value;
    }

    /**
     * Sets the state property value. Has the value published if the access packages are available for management. The possible values are: unpublished, published, unknownFutureValue.
     *  @param AccessPackageCatalogState|null $value Value to set for the state property.
    */
    public function setState(?AccessPackageCatalogState $value ): void {
        $this->state = $value;
    }

}
