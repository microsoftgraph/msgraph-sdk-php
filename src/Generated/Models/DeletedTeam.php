<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DeletedTeam extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new deletedTeam and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeletedTeam
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeletedTeam {
        return new DeletedTeam();
    }

    /**
     * Gets the channels property value. The channels that are either shared with this deleted team or created in this deleted team.
     * @return array<Channel>|null
    */
    public function getChannels(): ?array {
        $val = $this->getBackingStore()->get('channels');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Channel::class);
            /** @var array<Channel>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'channels'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'channels' => fn(ParseNode $n) => $o->setChannels($n->getCollectionOfObjectValues([Channel::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('channels', $this->getChannels());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the channels property value. The channels that are either shared with this deleted team or created in this deleted team.
     * @param array<Channel>|null $value Value to set for the channels property.
    */
    public function setChannels(?array $value): void {
        $this->getBackingStore()->set('channels', $value);
    }

}
