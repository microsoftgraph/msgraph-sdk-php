<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewAccessPackageAssignmentPolicyScope extends AccessReviewResourceScope implements Parsable 
{
    /**
     * Instantiates a new AccessReviewAccessPackageAssignmentPolicyScope and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessReviewAccessPackageAssignmentPolicyScope');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewAccessPackageAssignmentPolicyScope
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewAccessPackageAssignmentPolicyScope {
        return new AccessReviewAccessPackageAssignmentPolicyScope();
    }

    /**
     * Gets the accessPackageDisplayName property value. The display name of the access package.
     * @return string|null
    */
    public function getAccessPackageDisplayName(): ?string {
        $val = $this->getBackingStore()->get('accessPackageDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageDisplayName'");
    }

    /**
     * Gets the accessPackageId property value. The access package identifier.
     * @return string|null
    */
    public function getAccessPackageId(): ?string {
        $val = $this->getBackingStore()->get('accessPackageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageId'");
    }

    /**
     * Gets the catalogDisplayName property value. The display name of the catalog.
     * @return string|null
    */
    public function getCatalogDisplayName(): ?string {
        $val = $this->getBackingStore()->get('catalogDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'catalogDisplayName'");
    }

    /**
     * Gets the catalogId property value. The catalog identifier.
     * @return string|null
    */
    public function getCatalogId(): ?string {
        $val = $this->getBackingStore()->get('catalogId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'catalogId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackageDisplayName' => fn(ParseNode $n) => $o->setAccessPackageDisplayName($n->getStringValue()),
            'accessPackageId' => fn(ParseNode $n) => $o->setAccessPackageId($n->getStringValue()),
            'catalogDisplayName' => fn(ParseNode $n) => $o->setCatalogDisplayName($n->getStringValue()),
            'catalogId' => fn(ParseNode $n) => $o->setCatalogId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accessPackageDisplayName', $this->getAccessPackageDisplayName());
        $writer->writeStringValue('accessPackageId', $this->getAccessPackageId());
        $writer->writeStringValue('catalogDisplayName', $this->getCatalogDisplayName());
        $writer->writeStringValue('catalogId', $this->getCatalogId());
    }

    /**
     * Sets the accessPackageDisplayName property value. The display name of the access package.
     * @param string|null $value Value to set for the accessPackageDisplayName property.
    */
    public function setAccessPackageDisplayName(?string $value): void {
        $this->getBackingStore()->set('accessPackageDisplayName', $value);
    }

    /**
     * Sets the accessPackageId property value. The access package identifier.
     * @param string|null $value Value to set for the accessPackageId property.
    */
    public function setAccessPackageId(?string $value): void {
        $this->getBackingStore()->set('accessPackageId', $value);
    }

    /**
     * Sets the catalogDisplayName property value. The display name of the catalog.
     * @param string|null $value Value to set for the catalogDisplayName property.
    */
    public function setCatalogDisplayName(?string $value): void {
        $this->getBackingStore()->set('catalogDisplayName', $value);
    }

    /**
     * Sets the catalogId property value. The catalog identifier.
     * @param string|null $value Value to set for the catalogId property.
    */
    public function setCatalogId(?string $value): void {
        $this->getBackingStore()->set('catalogId', $value);
    }

}
