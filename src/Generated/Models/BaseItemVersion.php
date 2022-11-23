<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BaseItemVersion extends Entity implements Parsable 
{
    /**
     * Instantiates a new baseItemVersion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BaseItemVersion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BaseItemVersion {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.documentSetVersion': return new DocumentSetVersion();
                case '#microsoft.graph.driveItemVersion': return new DriveItemVersion();
                case '#microsoft.graph.listItemVersion': return new ListItemVersion();
            }
        }
        return new BaseItemVersion();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'publication' => fn(ParseNode $n) => $o->setPublication($n->getObjectValue([PublicationFacet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the user which last modified the version. Read-only.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('lastModifiedBy');
    }

    /**
     * Gets the lastModifiedDateTime property value. Date and time the version was last modified. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the publication property value. Indicates the publication status of this particular version. Read-only.
     * @return PublicationFacet|null
    */
    public function getPublication(): ?PublicationFacet {
        return $this->getBackingStore()->get('publication');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeObjectValue('publication', $this->getPublication());
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the user which last modified the version. Read-only.
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Date and time the version was last modified. Read-only.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the publication property value. Indicates the publication status of this particular version. Read-only.
     *  @param PublicationFacet|null $value Value to set for the publication property.
    */
    public function setPublication(?PublicationFacet $value): void {
        $this->getBackingStore()->set('publication', $value);
    }

}
