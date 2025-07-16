<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AuditCoreRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new AuditCoreRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuditCoreRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuditCoreRoot {
        return new AuditCoreRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'queries' => fn(ParseNode $n) => $o->setQueries($n->getCollectionOfObjectValues([AuditLogQuery::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the queries property value. The queries property
     * @return array<AuditLogQuery>|null
    */
    public function getQueries(): ?array {
        $val = $this->getBackingStore()->get('queries');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuditLogQuery::class);
            /** @var array<AuditLogQuery>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'queries'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('queries', $this->getQueries());
    }

    /**
     * Sets the queries property value. The queries property
     * @param array<AuditLogQuery>|null $value Value to set for the queries property.
    */
    public function setQueries(?array $value): void {
        $this->getBackingStore()->set('queries', $value);
    }

}
