<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PrincipalResourceMembershipsScope extends AccessReviewScope implements Parsable 
{
    /**
     * Instantiates a new PrincipalResourceMembershipsScope and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.principalResourceMembershipsScope');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrincipalResourceMembershipsScope
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrincipalResourceMembershipsScope {
        return new PrincipalResourceMembershipsScope();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'principalScopes' => fn(ParseNode $n) => $o->setPrincipalScopes($n->getCollectionOfObjectValues([AccessReviewScope::class, 'createFromDiscriminatorValue'])),
            'resourceScopes' => fn(ParseNode $n) => $o->setResourceScopes($n->getCollectionOfObjectValues([AccessReviewScope::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the principalScopes property value. Defines the scopes of the principals whose access to resources are reviewed in the access review.
     * @return array<AccessReviewScope>|null
    */
    public function getPrincipalScopes(): ?array {
        $val = $this->getBackingStore()->get('principalScopes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessReviewScope::class);
            /** @var array<AccessReviewScope>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'principalScopes'");
    }

    /**
     * Gets the resourceScopes property value. Defines the scopes of the resources for which access is reviewed.
     * @return array<AccessReviewScope>|null
    */
    public function getResourceScopes(): ?array {
        $val = $this->getBackingStore()->get('resourceScopes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessReviewScope::class);
            /** @var array<AccessReviewScope>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceScopes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('principalScopes', $this->getPrincipalScopes());
        $writer->writeCollectionOfObjectValues('resourceScopes', $this->getResourceScopes());
    }

    /**
     * Sets the principalScopes property value. Defines the scopes of the principals whose access to resources are reviewed in the access review.
     * @param array<AccessReviewScope>|null $value Value to set for the principalScopes property.
    */
    public function setPrincipalScopes(?array $value): void {
        $this->getBackingStore()->set('principalScopes', $value);
    }

    /**
     * Sets the resourceScopes property value. Defines the scopes of the resources for which access is reviewed.
     * @param array<AccessReviewScope>|null $value Value to set for the resourceScopes property.
    */
    public function setResourceScopes(?array $value): void {
        $this->getBackingStore()->set('resourceScopes', $value);
    }

}
