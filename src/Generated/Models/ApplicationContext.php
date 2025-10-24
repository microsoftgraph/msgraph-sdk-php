<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ApplicationContext extends SignInContext implements Parsable 
{
    /**
     * Instantiates a new ApplicationContext and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.applicationContext');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplicationContext
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplicationContext {
        return new ApplicationContext();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'includeApplications' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setIncludeApplications($val);
            },
        ]);
    }

    /**
     * Gets the includeApplications property value. Collection of appId values for the applications.
     * @return array<string>|null
    */
    public function getIncludeApplications(): ?array {
        $val = $this->getBackingStore()->get('includeApplications');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includeApplications'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('includeApplications', $this->getIncludeApplications());
    }

    /**
     * Sets the includeApplications property value. Collection of appId values for the applications.
     * @param array<string>|null $value Value to set for the includeApplications property.
    */
    public function setIncludeApplications(?array $value): void {
        $this->getBackingStore()->set('includeApplications', $value);
    }

}
