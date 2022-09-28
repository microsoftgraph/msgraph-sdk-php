<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackage extends Entity implements Parsable 
{
    /**
     * @var array<AccessPackage>|null $accessPackagesIncompatibleWith The accessPackagesIncompatibleWith property
    */
    private ?array $accessPackagesIncompatibleWith = null;
    
    /**
     * @var array<AccessPackageAssignmentPolicy>|null $assignmentPolicies The assignmentPolicies property
    */
    private ?array $assignmentPolicies = null;
    
    /**
     * @var AccessPackageCatalog|null $catalog The catalog property
    */
    private ?AccessPackageCatalog $catalog = null;
    
    /**
     * @var DateTime|null $createdDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description The description of the access package.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name of the access package. Supports $filter (eq, contains).
    */
    private ?string $displayName = null;
    
    /**
     * @var array<AccessPackage>|null $incompatibleAccessPackages The incompatibleAccessPackages property
    */
    private ?array $incompatibleAccessPackages = null;
    
    /**
     * @var array<Group>|null $incompatibleGroups The incompatibleGroups property
    */
    private ?array $incompatibleGroups = null;
    
    /**
     * @var bool|null $isHidden Whether the access package is hidden from the requestor.
    */
    private ?bool $isHidden = null;
    
    /**
     * @var DateTime|null $modifiedDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    */
    private ?DateTime $modifiedDateTime = null;
    
    /**
     * Instantiates a new accessPackage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessPackage');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackage {
        return new AccessPackage();
    }

    /**
     * Gets the accessPackagesIncompatibleWith property value. The accessPackagesIncompatibleWith property
     * @return array<AccessPackage>|null
    */
    public function getAccessPackagesIncompatibleWith(): ?array {
        return $this->accessPackagesIncompatibleWith;
    }

    /**
     * Gets the assignmentPolicies property value. The assignmentPolicies property
     * @return array<AccessPackageAssignmentPolicy>|null
    */
    public function getAssignmentPolicies(): ?array {
        return $this->assignmentPolicies;
    }

    /**
     * Gets the catalog property value. The catalog property
     * @return AccessPackageCatalog|null
    */
    public function getCatalog(): ?AccessPackageCatalog {
        return $this->catalog;
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. The description of the access package.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name of the access package. Supports $filter (eq, contains).
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
            'accessPackagesIncompatibleWith' => function (ParseNode $n) use ($o) { $o->setAccessPackagesIncompatibleWith($n->getCollectionOfObjectValues(array(AccessPackage::class, 'createFromDiscriminatorValue'))); },
            'assignmentPolicies' => function (ParseNode $n) use ($o) { $o->setAssignmentPolicies($n->getCollectionOfObjectValues(array(AccessPackageAssignmentPolicy::class, 'createFromDiscriminatorValue'))); },
            'catalog' => function (ParseNode $n) use ($o) { $o->setCatalog($n->getObjectValue(array(AccessPackageCatalog::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'incompatibleAccessPackages' => function (ParseNode $n) use ($o) { $o->setIncompatibleAccessPackages($n->getCollectionOfObjectValues(array(AccessPackage::class, 'createFromDiscriminatorValue'))); },
            'incompatibleGroups' => function (ParseNode $n) use ($o) { $o->setIncompatibleGroups($n->getCollectionOfObjectValues(array(Group::class, 'createFromDiscriminatorValue'))); },
            'isHidden' => function (ParseNode $n) use ($o) { $o->setIsHidden($n->getBooleanValue()); },
            'modifiedDateTime' => function (ParseNode $n) use ($o) { $o->setModifiedDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the incompatibleAccessPackages property value. The incompatibleAccessPackages property
     * @return array<AccessPackage>|null
    */
    public function getIncompatibleAccessPackages(): ?array {
        return $this->incompatibleAccessPackages;
    }

    /**
     * Gets the incompatibleGroups property value. The incompatibleGroups property
     * @return array<Group>|null
    */
    public function getIncompatibleGroups(): ?array {
        return $this->incompatibleGroups;
    }

    /**
     * Gets the isHidden property value. Whether the access package is hidden from the requestor.
     * @return bool|null
    */
    public function getIsHidden(): ?bool {
        return $this->isHidden;
    }

    /**
     * Gets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->modifiedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('accessPackagesIncompatibleWith', $this->accessPackagesIncompatibleWith);
        $writer->writeCollectionOfObjectValues('assignmentPolicies', $this->assignmentPolicies);
        $writer->writeObjectValue('catalog', $this->catalog);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('incompatibleAccessPackages', $this->incompatibleAccessPackages);
        $writer->writeCollectionOfObjectValues('incompatibleGroups', $this->incompatibleGroups);
        $writer->writeBooleanValue('isHidden', $this->isHidden);
        $writer->writeDateTimeValue('modifiedDateTime', $this->modifiedDateTime);
    }

    /**
     * Sets the accessPackagesIncompatibleWith property value. The accessPackagesIncompatibleWith property
     *  @param array<AccessPackage>|null $value Value to set for the accessPackagesIncompatibleWith property.
    */
    public function setAccessPackagesIncompatibleWith(?array $value ): void {
        $this->accessPackagesIncompatibleWith = $value;
    }

    /**
     * Sets the assignmentPolicies property value. The assignmentPolicies property
     *  @param array<AccessPackageAssignmentPolicy>|null $value Value to set for the assignmentPolicies property.
    */
    public function setAssignmentPolicies(?array $value ): void {
        $this->assignmentPolicies = $value;
    }

    /**
     * Sets the catalog property value. The catalog property
     *  @param AccessPackageCatalog|null $value Value to set for the catalog property.
    */
    public function setCatalog(?AccessPackageCatalog $value ): void {
        $this->catalog = $value;
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. The description of the access package.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name of the access package. Supports $filter (eq, contains).
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the incompatibleAccessPackages property value. The incompatibleAccessPackages property
     *  @param array<AccessPackage>|null $value Value to set for the incompatibleAccessPackages property.
    */
    public function setIncompatibleAccessPackages(?array $value ): void {
        $this->incompatibleAccessPackages = $value;
    }

    /**
     * Sets the incompatibleGroups property value. The incompatibleGroups property
     *  @param array<Group>|null $value Value to set for the incompatibleGroups property.
    */
    public function setIncompatibleGroups(?array $value ): void {
        $this->incompatibleGroups = $value;
    }

    /**
     * Sets the isHidden property value. Whether the access package is hidden from the requestor.
     *  @param bool|null $value Value to set for the isHidden property.
    */
    public function setIsHidden(?bool $value ): void {
        $this->isHidden = $value;
    }

    /**
     * Sets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value ): void {
        $this->modifiedDateTime = $value;
    }

}
