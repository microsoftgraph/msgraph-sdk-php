<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ServiceAnnouncementBase extends Entity implements Parsable 
{
    /**
     * @var array<KeyValuePair>|null $details Additional details about service event. This property doesn't support filters.
    */
    private ?array $details = null;
    
    /**
     * @var DateTime|null $endDateTime The end time of the service event.
    */
    private ?DateTime $endDateTime = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The last modified time of the service event.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var DateTime|null $startDateTime The start time of the service event.
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * @var string|null $title The title of the service event.
    */
    private ?string $title = null;
    
    /**
     * Instantiates a new serviceAnnouncementBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.serviceAnnouncementBase');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServiceAnnouncementBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServiceAnnouncementBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.serviceHealthIssue': return new ServiceHealthIssue();
                case '#microsoft.graph.serviceUpdateMessage': return new ServiceUpdateMessage();
            }
        }
        return new ServiceAnnouncementBase();
    }

    /**
     * Gets the details property value. Additional details about service event. This property doesn't support filters.
     * @return array<KeyValuePair>|null
    */
    public function getDetails(): ?array {
        return $this->details;
    }

    /**
     * Gets the endDateTime property value. The end time of the service event.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'details' => fn(ParseNode $n) => $o->setDetails($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The last modified time of the service event.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the startDateTime property value. The start time of the service event.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the title property value. The title of the service event.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('details', $this->details);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeStringValue('title', $this->title);
    }

    /**
     * Sets the details property value. Additional details about service event. This property doesn't support filters.
     *  @param array<KeyValuePair>|null $value Value to set for the details property.
    */
    public function setDetails(?array $value ): void {
        $this->details = $value;
    }

    /**
     * Sets the endDateTime property value. The end time of the service event.
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The last modified time of the service event.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the startDateTime property value. The start time of the service event.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the title property value. The title of the service event.
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value ): void {
        $this->title = $value;
    }

}
