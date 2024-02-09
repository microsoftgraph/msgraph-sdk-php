<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ConditionalAccessRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new ConditionalAccessRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessRoot {
        return new ConditionalAccessRoot();
    }

    /**
     * Gets the authenticationContextClassReferences property value. Read-only. Nullable. Returns a collection of the specified authentication context class references.
     * @return array<AuthenticationContextClassReference>|null
    */
    public function getAuthenticationContextClassReferences(): ?array {
        $val = $this->getBackingStore()->get('authenticationContextClassReferences');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthenticationContextClassReference::class);
            /** @var array<AuthenticationContextClassReference>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationContextClassReferences'");
    }

    /**
     * Gets the authenticationStrength property value. The authenticationStrength property
     * @return AuthenticationStrengthRoot|null
    */
    public function getAuthenticationStrength(): ?AuthenticationStrengthRoot {
        $val = $this->getBackingStore()->get('authenticationStrength');
        if (is_null($val) || $val instanceof AuthenticationStrengthRoot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationStrength'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationContextClassReferences' => fn(ParseNode $n) => $o->setAuthenticationContextClassReferences($n->getCollectionOfObjectValues([AuthenticationContextClassReference::class, 'createFromDiscriminatorValue'])),
            'authenticationStrength' => fn(ParseNode $n) => $o->setAuthenticationStrength($n->getObjectValue([AuthenticationStrengthRoot::class, 'createFromDiscriminatorValue'])),
            'namedLocations' => fn(ParseNode $n) => $o->setNamedLocations($n->getCollectionOfObjectValues([NamedLocation::class, 'createFromDiscriminatorValue'])),
            'policies' => fn(ParseNode $n) => $o->setPolicies($n->getCollectionOfObjectValues([ConditionalAccessPolicy::class, 'createFromDiscriminatorValue'])),
            'templates' => fn(ParseNode $n) => $o->setTemplates($n->getCollectionOfObjectValues([ConditionalAccessTemplate::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the namedLocations property value. Read-only. Nullable. Returns a collection of the specified named locations.
     * @return array<NamedLocation>|null
    */
    public function getNamedLocations(): ?array {
        $val = $this->getBackingStore()->get('namedLocations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, NamedLocation::class);
            /** @var array<NamedLocation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'namedLocations'");
    }

    /**
     * Gets the policies property value. Read-only. Nullable. Returns a collection of the specified Conditional Access (CA) policies.
     * @return array<ConditionalAccessPolicy>|null
    */
    public function getPolicies(): ?array {
        $val = $this->getBackingStore()->get('policies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConditionalAccessPolicy::class);
            /** @var array<ConditionalAccessPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policies'");
    }

    /**
     * Gets the templates property value. Read-only. Nullable. Returns a collection of the specified Conditional Access templates.
     * @return array<ConditionalAccessTemplate>|null
    */
    public function getTemplates(): ?array {
        $val = $this->getBackingStore()->get('templates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConditionalAccessTemplate::class);
            /** @var array<ConditionalAccessTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'templates'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('authenticationContextClassReferences', $this->getAuthenticationContextClassReferences());
        $writer->writeObjectValue('authenticationStrength', $this->getAuthenticationStrength());
        $writer->writeCollectionOfObjectValues('namedLocations', $this->getNamedLocations());
        $writer->writeCollectionOfObjectValues('policies', $this->getPolicies());
        $writer->writeCollectionOfObjectValues('templates', $this->getTemplates());
    }

    /**
     * Sets the authenticationContextClassReferences property value. Read-only. Nullable. Returns a collection of the specified authentication context class references.
     * @param array<AuthenticationContextClassReference>|null $value Value to set for the authenticationContextClassReferences property.
    */
    public function setAuthenticationContextClassReferences(?array $value): void {
        $this->getBackingStore()->set('authenticationContextClassReferences', $value);
    }

    /**
     * Sets the authenticationStrength property value. The authenticationStrength property
     * @param AuthenticationStrengthRoot|null $value Value to set for the authenticationStrength property.
    */
    public function setAuthenticationStrength(?AuthenticationStrengthRoot $value): void {
        $this->getBackingStore()->set('authenticationStrength', $value);
    }

    /**
     * Sets the namedLocations property value. Read-only. Nullable. Returns a collection of the specified named locations.
     * @param array<NamedLocation>|null $value Value to set for the namedLocations property.
    */
    public function setNamedLocations(?array $value): void {
        $this->getBackingStore()->set('namedLocations', $value);
    }

    /**
     * Sets the policies property value. Read-only. Nullable. Returns a collection of the specified Conditional Access (CA) policies.
     * @param array<ConditionalAccessPolicy>|null $value Value to set for the policies property.
    */
    public function setPolicies(?array $value): void {
        $this->getBackingStore()->set('policies', $value);
    }

    /**
     * Sets the templates property value. Read-only. Nullable. Returns a collection of the specified Conditional Access templates.
     * @param array<ConditionalAccessTemplate>|null $value Value to set for the templates property.
    */
    public function setTemplates(?array $value): void {
        $this->getBackingStore()->set('templates', $value);
    }

}
