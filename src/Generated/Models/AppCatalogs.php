<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AppCatalogs extends Entity implements Parsable 
{
    /**
     * Instantiates a new AppCatalogs and sets the default values.
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
            'teamsApps' => fn(ParseNode $n) => $o->setTeamsApps($n->getCollectionOfObjectValues([TeamsApp::class, 'createFromDiscriminatorValue'])),
        ]);
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
        $writer->writeCollectionOfObjectValues('teamsApps', $this->getTeamsApps());
    }

    /**
     * Sets the teamsApps property value. The teamsApps property
     * @param array<TeamsApp>|null $value Value to set for the teamsApps property.
    */
    public function setTeamsApps(?array $value): void {
        $this->getBackingStore()->set('teamsApps', $value);
    }

}
