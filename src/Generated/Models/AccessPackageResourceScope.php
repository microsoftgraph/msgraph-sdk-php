<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageResourceScope extends Entity implements Parsable 
{
    /**
     * Instantiates a new accessPackageResourceScope and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageResourceScope
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageResourceScope {
        return new AccessPackageResourceScope();
    }

    /**
     * Gets the description property value. The description of the scope.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The display name of the scope.
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
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isRootScope' => fn(ParseNode $n) => $o->setIsRootScope($n->getBooleanValue()),
            'originId' => fn(ParseNode $n) => $o->setOriginId($n->getStringValue()),
            'originSystem' => fn(ParseNode $n) => $o->setOriginSystem($n->getStringValue()),
            'resource' => fn(ParseNode $n) => $o->setResource($n->getObjectValue([AccessPackageResource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isRootScope property value. True if the scopes are arranged in a hierarchy and this is the top or root scope of the resource.
     * @return bool|null
    */
    public function getIsRootScope(): ?bool {
        $val = $this->getBackingStore()->get('isRootScope');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRootScope'");
    }

    /**
     * Gets the originId property value. The unique identifier for the scope in the resource as defined in the origin system.
     * @return string|null
    */
    public function getOriginId(): ?string {
        $val = $this->getBackingStore()->get('originId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originId'");
    }

    /**
     * Gets the originSystem property value. The origin system for the scope.
     * @return string|null
    */
    public function getOriginSystem(): ?string {
        $val = $this->getBackingStore()->get('originSystem');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originSystem'");
    }

    /**
     * Gets the resource property value. The resource property
     * @return AccessPackageResource|null
    */
    public function getResource(): ?AccessPackageResource {
        $val = $this->getBackingStore()->get('resource');
        if (is_null($val) || $val instanceof AccessPackageResource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resource'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isRootScope', $this->getIsRootScope());
        $writer->writeStringValue('originId', $this->getOriginId());
        $writer->writeStringValue('originSystem', $this->getOriginSystem());
        $writer->writeObjectValue('resource', $this->getResource());
    }

    /**
     * Sets the description property value. The description of the scope.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the scope.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isRootScope property value. True if the scopes are arranged in a hierarchy and this is the top or root scope of the resource.
     * @param bool|null $value Value to set for the isRootScope property.
    */
    public function setIsRootScope(?bool $value): void {
        $this->getBackingStore()->set('isRootScope', $value);
    }

    /**
     * Sets the originId property value. The unique identifier for the scope in the resource as defined in the origin system.
     * @param string|null $value Value to set for the originId property.
    */
    public function setOriginId(?string $value): void {
        $this->getBackingStore()->set('originId', $value);
    }

    /**
     * Sets the originSystem property value. The origin system for the scope.
     * @param string|null $value Value to set for the originSystem property.
    */
    public function setOriginSystem(?string $value): void {
        $this->getBackingStore()->set('originSystem', $value);
    }

    /**
     * Sets the resource property value. The resource property
     * @param AccessPackageResource|null $value Value to set for the resource property.
    */
    public function setResource(?AccessPackageResource $value): void {
        $this->getBackingStore()->set('resource', $value);
    }

}
