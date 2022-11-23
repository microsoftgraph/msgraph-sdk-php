<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Graph\Generated\Models\Group;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedGroupSource extends DataSource implements Parsable 
{
    /**
     * Instantiates a new UnifiedGroupSource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.unifiedGroupSource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedGroupSource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedGroupSource {
        return new UnifiedGroupSource();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'group' => fn(ParseNode $n) => $o->setGroup($n->getObjectValue([Group::class, 'createFromDiscriminatorValue'])),
            'includedSources' => fn(ParseNode $n) => $o->setIncludedSources($n->getEnumValue(SourceType::class)),
        ]);
    }

    /**
     * Gets the group property value. The group property
     * @return Group|null
    */
    public function getGroup(): ?Group {
        return $this->getBackingStore()->get('group');
    }

    /**
     * Gets the includedSources property value. Specifies which sources are included in this group. Possible values are: mailbox, site.
     * @return SourceType|null
    */
    public function getIncludedSources(): ?SourceType {
        return $this->getBackingStore()->get('includedSources');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('group', $this->getGroup());
        $writer->writeEnumValue('includedSources', $this->getIncludedSources());
    }

    /**
     * Sets the group property value. The group property
     *  @param Group|null $value Value to set for the group property.
    */
    public function setGroup(?Group $value): void {
        $this->getBackingStore()->set('group', $value);
    }

    /**
     * Sets the includedSources property value. Specifies which sources are included in this group. Possible values are: mailbox, site.
     *  @param SourceType|null $value Value to set for the includedSources property.
    */
    public function setIncludedSources(?SourceType $value): void {
        $this->getBackingStore()->set('includedSources', $value);
    }

}
