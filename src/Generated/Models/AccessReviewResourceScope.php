<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewResourceScope extends AccessReviewScope implements Parsable 
{
    /**
     * Instantiates a new AccessReviewResourceScope and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessReviewResourceScope');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewResourceScope
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewResourceScope {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.accessReviewAccessPackageAssignmentPolicyScope': return new AccessReviewAccessPackageAssignmentPolicyScope();
            }
        }
        return new AccessReviewResourceScope();
    }

    /**
     * Gets the displayName property value. The display name of the resource.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'resourceId' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
            'scopeType' => fn(ParseNode $n) => $o->setScopeType($n->getEnumValue(AccessReviewResourceScopeType::class)),
        ]);
    }

    /**
     * Gets the resourceId property value. The identifier of the resource.
     * @return string|null
    */
    public function getResourceId(): ?string {
        $val = $this->getBackingStore()->get('resourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceId'");
    }

    /**
     * Gets the scopeType property value. The scopeType property
     * @return AccessReviewResourceScopeType|null
    */
    public function getScopeType(): ?AccessReviewResourceScopeType {
        $val = $this->getBackingStore()->get('scopeType');
        if (is_null($val) || $val instanceof AccessReviewResourceScopeType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopeType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('resourceId', $this->getResourceId());
        $writer->writeEnumValue('scopeType', $this->getScopeType());
    }

    /**
     * Sets the displayName property value. The display name of the resource.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the resourceId property value. The identifier of the resource.
     * @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value): void {
        $this->getBackingStore()->set('resourceId', $value);
    }

    /**
     * Sets the scopeType property value. The scopeType property
     * @param AccessReviewResourceScopeType|null $value Value to set for the scopeType property.
    */
    public function setScopeType(?AccessReviewResourceScopeType $value): void {
        $this->getBackingStore()->set('scopeType', $value);
    }

}
