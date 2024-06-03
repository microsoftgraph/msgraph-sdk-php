<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class IdentityContainer extends Entity implements Parsable 
{
    /**
     * Instantiates a new IdentityContainer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityContainer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentityContainer {
        return new IdentityContainer();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'healthIssues' => fn(ParseNode $n) => $o->setHealthIssues($n->getCollectionOfObjectValues([HealthIssue::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the healthIssues property value. The healthIssues property
     * @return array<HealthIssue>|null
    */
    public function getHealthIssues(): ?array {
        $val = $this->getBackingStore()->get('healthIssues');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HealthIssue::class);
            /** @var array<HealthIssue>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'healthIssues'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('healthIssues', $this->getHealthIssues());
    }

    /**
     * Sets the healthIssues property value. The healthIssues property
     * @param array<HealthIssue>|null $value Value to set for the healthIssues property.
    */
    public function setHealthIssues(?array $value): void {
        $this->getBackingStore()->set('healthIssues', $value);
    }

}
