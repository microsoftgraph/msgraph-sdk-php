<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PendingContentUpdate implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $queuedDateTime Date and time the pending binary operation was queued in UTC time. Read-only.
    */
    private ?DateTime $queuedDateTime = null;
    
    /**
     * Instantiates a new pendingContentUpdate and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PendingContentUpdate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PendingContentUpdate {
        return new PendingContentUpdate();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'queuedDateTime' => function (ParseNode $n) use ($o) { $o->setQueuedDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the queuedDateTime property value. Date and time the pending binary operation was queued in UTC time. Read-only.
     * @return DateTime|null
    */
    public function getQueuedDateTime(): ?DateTime {
        return $this->queuedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('queuedDateTime', $this->queuedDateTime);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the queuedDateTime property value. Date and time the pending binary operation was queued in UTC time. Read-only.
     *  @param DateTime|null $value Value to set for the queuedDateTime property.
    */
    public function setQueuedDateTime(?DateTime $value ): void {
        $this->queuedDateTime = $value;
    }

}
