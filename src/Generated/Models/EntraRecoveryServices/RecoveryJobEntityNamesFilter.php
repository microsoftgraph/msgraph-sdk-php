<?php

namespace Microsoft\Graph\Generated\Models\EntraRecoveryServices;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RecoveryJobEntityNamesFilter extends RecoveryJobFilteringCriteriaBase implements Parsable 
{
    /**
     * Instantiates a new RecoveryJobEntityNamesFilter and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.entraRecoveryServices.recoveryJobEntityNamesFilter');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecoveryJobEntityNamesFilter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RecoveryJobEntityNamesFilter {
        return new RecoveryJobEntityNamesFilter();
    }

    /**
     * Gets the entityTypes property value. The entityTypes property
     * @return array<ResourceTypeName>|null
    */
    public function getEntityTypes(): ?array {
        $val = $this->getBackingStore()->get('entityTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ResourceTypeName::class);
            /** @var array<ResourceTypeName>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'entityTypes'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'entityTypes' => fn(ParseNode $n) => $o->setEntityTypes($n->getCollectionOfEnumValues(ResourceTypeName::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfEnumValues('entityTypes', $this->getEntityTypes());
    }

    /**
     * Sets the entityTypes property value. The entityTypes property
     * @param array<ResourceTypeName>|null $value Value to set for the entityTypes property.
    */
    public function setEntityTypes(?array $value): void {
        $this->getBackingStore()->set('entityTypes', $value);
    }

}
