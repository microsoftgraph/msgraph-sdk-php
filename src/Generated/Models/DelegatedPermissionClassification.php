<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DelegatedPermissionClassification extends Entity implements Parsable 
{
    /**
     * Instantiates a new DelegatedPermissionClassification and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DelegatedPermissionClassification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DelegatedPermissionClassification {
        return new DelegatedPermissionClassification();
    }

    /**
     * Gets the classification property value. The classification value. Possible values: low, medium (preview), high (preview). Doesn't support $filter.
     * @return PermissionClassificationType|null
    */
    public function getClassification(): ?PermissionClassificationType {
        $val = $this->getBackingStore()->get('classification');
        if (is_null($val) || $val instanceof PermissionClassificationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classification'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'classification' => fn(ParseNode $n) => $o->setClassification($n->getEnumValue(PermissionClassificationType::class)),
            'permissionId' => fn(ParseNode $n) => $o->setPermissionId($n->getStringValue()),
            'permissionName' => fn(ParseNode $n) => $o->setPermissionName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the permissionId property value. The unique identifier (id) for the delegated permission listed in the oauth2PermissionScopes collection of the servicePrincipal. Required on create. Doesn't support $filter.
     * @return string|null
    */
    public function getPermissionId(): ?string {
        $val = $this->getBackingStore()->get('permissionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionId'");
    }

    /**
     * Gets the permissionName property value. The claim value (value) for the delegated permission listed in the oauth2PermissionScopes collection of the servicePrincipal. Doesn't support $filter.
     * @return string|null
    */
    public function getPermissionName(): ?string {
        $val = $this->getBackingStore()->get('permissionName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('classification', $this->getClassification());
        $writer->writeStringValue('permissionId', $this->getPermissionId());
        $writer->writeStringValue('permissionName', $this->getPermissionName());
    }

    /**
     * Sets the classification property value. The classification value. Possible values: low, medium (preview), high (preview). Doesn't support $filter.
     * @param PermissionClassificationType|null $value Value to set for the classification property.
    */
    public function setClassification(?PermissionClassificationType $value): void {
        $this->getBackingStore()->set('classification', $value);
    }

    /**
     * Sets the permissionId property value. The unique identifier (id) for the delegated permission listed in the oauth2PermissionScopes collection of the servicePrincipal. Required on create. Doesn't support $filter.
     * @param string|null $value Value to set for the permissionId property.
    */
    public function setPermissionId(?string $value): void {
        $this->getBackingStore()->set('permissionId', $value);
    }

    /**
     * Sets the permissionName property value. The claim value (value) for the delegated permission listed in the oauth2PermissionScopes collection of the servicePrincipal. Doesn't support $filter.
     * @param string|null $value Value to set for the permissionName property.
    */
    public function setPermissionName(?string $value): void {
        $this->getBackingStore()->set('permissionName', $value);
    }

}
