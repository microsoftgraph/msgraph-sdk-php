<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AvailableAccessPackage extends Entity implements Parsable 
{
    /**
     * Instantiates a new AvailableAccessPackage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AvailableAccessPackage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AvailableAccessPackage {
        return new AvailableAccessPackage();
    }

    /**
     * Gets the description property value. The description of the access package.
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
     * Gets the displayName property value. The display name of the access package.
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
            'resourceRoleScopes' => fn(ParseNode $n) => $o->setResourceRoleScopes($n->getCollectionOfObjectValues([AccessPackageResourceRoleScope::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the resourceRoleScopes property value. The resource role scopes associated with this available access package.
     * @return array<AccessPackageResourceRoleScope>|null
    */
    public function getResourceRoleScopes(): ?array {
        $val = $this->getBackingStore()->get('resourceRoleScopes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageResourceRoleScope::class);
            /** @var array<AccessPackageResourceRoleScope>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceRoleScopes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('resourceRoleScopes', $this->getResourceRoleScopes());
    }

    /**
     * Sets the description property value. The description of the access package.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the access package.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the resourceRoleScopes property value. The resource role scopes associated with this available access package.
     * @param array<AccessPackageResourceRoleScope>|null $value Value to set for the resourceRoleScopes property.
    */
    public function setResourceRoleScopes(?array $value): void {
        $this->getBackingStore()->set('resourceRoleScopes', $value);
    }

}
