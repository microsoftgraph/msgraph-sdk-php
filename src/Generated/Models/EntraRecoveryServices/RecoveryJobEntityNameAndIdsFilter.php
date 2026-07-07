<?php

namespace Microsoft\Graph\Generated\Models\EntraRecoveryServices;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RecoveryJobEntityNameAndIdsFilter extends RecoveryJobFilteringCriteriaBase implements Parsable 
{
    /**
     * Instantiates a new RecoveryJobEntityNameAndIdsFilter and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.entraRecoveryServices.recoveryJobEntityNameAndIdsFilter');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecoveryJobEntityNameAndIdsFilter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RecoveryJobEntityNameAndIdsFilter {
        return new RecoveryJobEntityNameAndIdsFilter();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'filterValues' => fn(ParseNode $n) => $o->setFilterValues($n->getCollectionOfObjectValues([EntityTypeAndIds::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the filterValues property value. The filterValues property
     * @return array<EntityTypeAndIds>|null
    */
    public function getFilterValues(): ?array {
        $val = $this->getBackingStore()->get('filterValues');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EntityTypeAndIds::class);
            /** @var array<EntityTypeAndIds>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filterValues'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('filterValues', $this->getFilterValues());
    }

    /**
     * Sets the filterValues property value. The filterValues property
     * @param array<EntityTypeAndIds>|null $value Value to set for the filterValues property.
    */
    public function setFilterValues(?array $value): void {
        $this->getBackingStore()->set('filterValues', $value);
    }

}
