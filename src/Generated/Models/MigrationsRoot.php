<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MigrationsRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new MigrationsRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MigrationsRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MigrationsRoot {
        return new MigrationsRoot();
    }

    /**
     * Gets the crossTenantMigrationJobs property value. Migration jobs associated with this tenant.
     * @return array<CrossTenantMigrationJob>|null
    */
    public function getCrossTenantMigrationJobs(): ?array {
        $val = $this->getBackingStore()->get('crossTenantMigrationJobs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CrossTenantMigrationJob::class);
            /** @var array<CrossTenantMigrationJob>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'crossTenantMigrationJobs'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'crossTenantMigrationJobs' => fn(ParseNode $n) => $o->setCrossTenantMigrationJobs($n->getCollectionOfObjectValues([CrossTenantMigrationJob::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('crossTenantMigrationJobs', $this->getCrossTenantMigrationJobs());
    }

    /**
     * Sets the crossTenantMigrationJobs property value. Migration jobs associated with this tenant.
     * @param array<CrossTenantMigrationJob>|null $value Value to set for the crossTenantMigrationJobs property.
    */
    public function setCrossTenantMigrationJobs(?array $value): void {
        $this->getBackingStore()->set('crossTenantMigrationJobs', $value);
    }

}
