<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AppCatalogs extends Entity implements Parsable 
{
    /**
     * Instantiates a new appCatalogs and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppCatalogs
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppCatalogs {
        return new AppCatalogs();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'teamsApps' => fn(ParseNode $n) => $o->setTeamsApps($n->getCollectionOfObjectValues([TeamsApp::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the teamsApps property value. The teamsApps property
     * @return array<TeamsApp>|null
    */
    public function getTeamsApps(): ?array {
        $val = $this->getBackingStore()->get('teamsApps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TeamsApp::class);
            /** @var array<TeamsApp>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamsApps'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('teamsApps', $this->getTeamsApps());
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the teamsApps property value. The teamsApps property
     * @param array<TeamsApp>|null $value Value to set for the teamsApps property.
    */
    public function setTeamsApps(?array $value): void {
        $this->getBackingStore()->set('teamsApps', $value);
    }

}
