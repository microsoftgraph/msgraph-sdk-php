<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AdhocCall extends Entity implements Parsable 
{
    /**
     * Instantiates a new AdhocCall and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdhocCall
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdhocCall {
        return new AdhocCall();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'recordings' => fn(ParseNode $n) => $o->setRecordings($n->getCollectionOfObjectValues([CallRecording::class, 'createFromDiscriminatorValue'])),
            'transcripts' => fn(ParseNode $n) => $o->setTranscripts($n->getCollectionOfObjectValues([CallTranscript::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the recordings property value. The recordings of a call. Read-only.
     * @return array<CallRecording>|null
    */
    public function getRecordings(): ?array {
        $val = $this->getBackingStore()->get('recordings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CallRecording::class);
            /** @var array<CallRecording>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recordings'");
    }

    /**
     * Gets the transcripts property value. The transcripts of a call. Read-only.
     * @return array<CallTranscript>|null
    */
    public function getTranscripts(): ?array {
        $val = $this->getBackingStore()->get('transcripts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CallTranscript::class);
            /** @var array<CallTranscript>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transcripts'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('recordings', $this->getRecordings());
        $writer->writeCollectionOfObjectValues('transcripts', $this->getTranscripts());
    }

    /**
     * Sets the recordings property value. The recordings of a call. Read-only.
     * @param array<CallRecording>|null $value Value to set for the recordings property.
    */
    public function setRecordings(?array $value): void {
        $this->getBackingStore()->set('recordings', $value);
    }

    /**
     * Sets the transcripts property value. The transcripts of a call. Read-only.
     * @param array<CallTranscript>|null $value Value to set for the transcripts property.
    */
    public function setTranscripts(?array $value): void {
        $this->getBackingStore()->set('transcripts', $value);
    }

}
